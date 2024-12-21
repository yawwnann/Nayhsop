<?php
require '../include/function.php';
$customCSS = '../login-page/Login.css';
include '../include/header.php';
?>
<style>
  .error-message {
    color: red;
  }
</style>

<!-- form login -->
<main style="display: flex;
  width: 100%;
  height: 850px;
 flex-direction:row;
  background-color:#419583">
  <div class="image">
    <a href="#"><img src="image/banner-web-log.png" alt=""></a>
  </div>
  <form class="formshadow" method="post" action="" style="margin-top:-10px">
    <h2>M A S U K</h2>
    <hr>
    <p class="Masuk">Masuk Menggunakan</p>
    <div class="socialBox">
      <span>
        <a
          href="https://twitter.com/i/flow/login?input_flow_data=%7B%22requested_variant%22%3A%22eyJsYW5nIjoiaWQifQ%3D%3D%22%7D"><i
            class="fab fa-twitter"></i></a></li>
        <a
          href="https://www.facebook.com/?stype=lo&jlou=Afdf_f6cKcz0YMEZPBAHDFX8tlAFMVnfnCPOyg-xpQWjP90qaIkihhsm__t73mVLX685dsdD2R0np-LsEPEqKoDKueVMwep6Bjp-5U7BkHNbqw&smuh=651&lh=Ac-oyAkPC1LZLSndxmE"><i
            class="ri-facebook-fill"></i></a></li>
        <a
          href="https://accounts.google.com/v3/signin/identifier?dsh=S-922489019%3A1683564631267034&authuser=0&continue=https%3A%2F%2Fmyaccount.google.com%2F%3Futm_source%3Dsign_in_no_continue%26pli%3D1&ec=GAlAwAE&hl=in&service=accountsettings&flowName=GlifWebSignIn&flowEntry=AddSession"><i
            class="ri-google-fill"></i></a></li>
      </span>
    </div>
    <p style="color: black; margin: 10px;">- Atau Menggunakan Email -</p>
    <!--  email -->
    <label for="email"></label>
    <input class="textBox" placeholder="Email" type="email" name="email" id="email" />
    <!-- password -->
    <label for="password"></label>
    <input class="textBox" placeholder="Password" type="password" name="password" id="password" />

    <?php if (isset($error)) {
      echo "<p class='error-message'>$error</p>";
    } ?>

    <a class="lupaKatsan" href="#">Lupa kata sandi?</a> <br />
    <span class="checkBox">
      <input type="checkbox" />
      <label for="privacy" style="color: black;margin: 10px;">Menyetujui
        <a href="#">Syarat dan Ketentuan</a>
        <span class="requir" style="color: red;">*</span>
      </label>
    </span>
    <p class="dissclaimer" style="margin: 10px;">
      Melanggar Syarat dan Ketentuan dapat menyebabkan
      akun Anda diBAN
    </p>
    <button class="Buttonshadow" type="submit" name="login">Login</button>
    <p class="daftar" style="color: black;">
      belum punya akun? <a href="daftar.php">Daftar</a>
    </p>

    <hr />
    <a class="Copyright" href="">@Nayshop</a>
  </form>
</main>


<?php
include '../include/footer.php';
; ?>