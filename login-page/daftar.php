<?php
require '../include/function.php';
$customCSS = '../login-page/daftar.css';
include '../include/header.php';
?>
<!-- form login -->
<main style="display: flex;
  width: 100%;
  height: auto;
 flex-direction:row;
  background-color:#419583">
  <div class="image">
    <img src="image/banner-web-log.png" alt="">

  </div>
  <form class="formShadow" action="" method="post">
    <h2>D A F T A R</h2>
    <hr style="margin-bottom: 10px" />
    <!-- Nama Lengkap -->
    <label for="name" style="display: flex; text-align: left">
      Nama Lengkap <span style="color: red"> *</span>
    </label>
    <input class="textBox" placeholder="Nama Lengkap" type="text" name="name" id="name" />


    <!-- Email -->
    <label for="email" style="display: flex; text-align: left; margin-top: -10px">
      Email <span style="color: red">*</span>
    </label>
    <input class="textBox" placeholder="Email" type="email" name="email" id="email" />


    <!-- Kata Sandi -->
    <label style="display: flex; text-align: left">
      Kata Sandi <span style="color: red"> *</span>
    </label>
    <input class="textBox" placeholder="Password" type="password" name="password" id="password" />

    <!-- Kata Sandi 2 -->
    <label for="password2" style="display: flex; text-align: left">
      Ulang Kata Sandi <span style="color: red"> *</span>
    </label>
    <input class="textBox" placeholder="Password" type="password" name="password2" id="password2" />

    <!-- tombol registrasi -->
    <button class="Buttonshadow" type="submit" name="register">registrasi</button>



    <p>Sudah memiliki akun? <a href="login.php">Login</a></p>
  </form>
</main>
<?php include '../include/footer.php'; ?>