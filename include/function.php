<?php
// Koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "phpdasar");

// Cek koneksi
if (!$conn) {
    die("Koneksi ke database gagal: " . mysqli_connect_error());
}

// Ambil data dari tabel user
$result = mysqli_query($conn, "SELECT * FROM user");

function query($query)
{
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}
// tombol registrasi daftar
function register($data)
{
    global $conn;

    $name = strtolower(stripcslashes($data["name"]));
    $email = strtolower(stripcslashes($data["email"]));
    $password = mysqli_real_escape_string($conn, $data["password"]);
    $password2 = mysqli_real_escape_string($conn, $data["password2"]);

    // Cek email sudah ada atau belum
    $result = mysqli_query($conn, "SELECT email FROM user WHERE email = '$email'");

    if (!$result) {
        die("Query error: " . mysqli_error($conn));
    }

    if (mysqli_num_rows($result) > 0) {
        echo "<script>alert('Email yang dipilih sudah terdaftar!');</script>";
        return false;
    }

    // Konfirmasi password
    if ($password !== $password2) {
        echo "<script>alert('Konfirmasi password tidak sesuai');</script>";
        return false;
    }

    // Enkripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);

    // Tambahkan user baru ke database
    $query = "INSERT INTO user (name, email, password) VALUES ('$name', '$email', '$password')";
    if (mysqli_query($conn, $query)) {
        return mysqli_affected_rows($conn);
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($conn);
        return false;
    }
}
// sukses atau tidak kita menambahkan user kedalam database
if (isset($_POST["register"])) {
    if (register($_POST) > 0) {
        echo "<script>alert('User baru berhasil ditambahkan'); window.location.href='../login-page/login.php';</script>";
    } else {
        echo "<script>alert('Gagal menambahkan user baru');</script>";
    }
}
// tombol login user
if (isset($_POST["login"])) {

    $email = $_POST["email"];
    $password = $_POST["password"];

    $result = mysqli_query($conn, "SELECT * FROM user WHERE email = '$email'");

    // cek email
    if (mysqli_num_rows($result) === 1) {

        // cek password
        $row = mysqli_fetch_assoc($result);
        if (password_verify($password, $row["password"])) {
            header("Location: ../navbar/home.php");
            exit;
        } else {
            $error = "Email atau Password salah.";
        }
    } else {
        $error = "Email atau Email salah.";
    }

}

?>