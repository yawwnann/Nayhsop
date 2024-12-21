<?php
$customCSS = "../pria/pria.css";
include "../include/header.php"; ?>

<main>
  <div class="container-main">
    <div class="container-menu">
      <div class="menu-luar">
        <p>Home / Pria</p>
        <h1 style="font-family: 'Open Sans', sans-serif">FILTER</h1>
      </div>
      <div class="all">
        <div class="all">
          <div class="collapsible">
            <div class="title">
              <p>UKURAN</p>
              <p>+</p>
            </div>
            <hr />
            <div class="content">
              <ol class="items">
                <li class="item">
                  <input type="checkbox" />
                  <a href="#">ASIA L</a>
                </li>
                <li class="item">
                  <input type="checkbox" />
                  <a href="#">ASIA M</a>
                </li>
                <li class="item">
                  <input type="checkbox" />
                  <a href="#">ASIA S</a>
                </li>
                <li class="item">
                  <input type="checkbox" />
                  <a href="#">ASIA XL</a>
                </li>
                <li class="item">
                  <input type="checkbox" />
                  <a href="#">L</a>
                </li>
                <li class="item">
                  <input type="checkbox" />
                  <a href="#">M</a>
                </li>
                <li class="item">
                  <input type="checkbox" />
                  <a href="#">ONE SIZE</a>
                </li>
                <li class="item">
                  <input type="checkbox" />
                  <a href="#">S</a>
                </li>
                <li class="item">
                  <input type="checkbox" />
                  <a href="#">US 1</a>
                </li>
                <li class="item">
                  <input type="checkbox" />
                  <a href="#">US 10</a>
                </li>
                <li class="item">
                  <input type="checkbox" />
                  <a href="#">US 10.5</a>
                </li>
                <li class="item">
                  <input type="checkbox" />
                  <a href="#">US 11</a>
                </li>
                <li class="item">
                  <input type="checkbox" />
                  <a href="#">US 11.5</a>
                </li>
                <li class="item">
                  <input type="checkbox" />
                  <a href="#">US 12</a>
                </li>
                <li class="item">
                  <input type="checkbox" />
                  <a href="#">US 12.5</a>
                </li>
                <li class="item">
                  <input type="checkbox" />
                  <a href="#">US 13</a>
                </li>
                <li class="item">
                  <input type="checkbox" />
                  <a href="#">US 13.5</a>
                </li>
                <li class="item">
                  <input type="checkbox" />
                  <a href="#">US 14</a>
                </li>
                <li class="item">
                  <input type="checkbox" />
                  <a href="#">US 14.5</a>
                </li>
                <li class="item">
                  <input type="checkbox" />
                  <a href="#">US 15</a>
                </li>
              </ol>
            </div>
          </div>
        </div>

        <div class="collapsible">
          <div class="title">
            <p>GENDER</p>
            <p>+</p>
          </div>
          <hr />
          <div class="content">
            <ol class="items">
              <li class="item">
                <input type="checkbox" />
                <a href="#">WOMEN</a>
              </li>
              <li class="item">
                <input type="checkbox" />
                <a href="#">MEN</a>
              </li>
              <li class="item">
                <input type="checkbox" />
                <a href="#">UNISEX</a>
              </li>
            </ol>
          </div>
        </div>
        <div class="collapsible">
          <div class="title">
            <p>SEPATU</p>
            <p>+</p>
          </div>
          <hr />
          <div class="content">
            <ol class="items">
              <li class="item">
                <input type="checkbox" />
                <a href="#">LIFESTYLE</a>
              </li>
              <li class="item">
                <input type="checkbox" />
                <a href="#">RUNNING</a>
              </li>
              <li class="item">
                <input type="checkbox" />
                <a href="#">SANDALS</a>
              </li>
              <li class="item">
                <input type="checkbox" />
                <a href="#">BASKETBALL</a>
              </li>
            </ol>
          </div>
        </div>
        <div class="collapsible">
          <div class="title">
            <p>AKSESORIS</p>
            <p>+</p>
          </div>
          <hr />
          <div class="content">
            <ol class="items">
              <li class="item">
                <input type="checkbox" />
                <a href="#">BAGS</a>
              </li>
              <li class="item">
                <input type="checkbox" />
                <a href="#">CAPS</a>
              </li>
              <li class="item">
                <input type="checkbox" />
                <a href="#">SOCKS</a>
              </li>
            </ol>
          </div>
        </div>
      </div>
    </div>
    <div class="container-barang" style="background-color:white; margin-top: 70px;">
      <div class="hasil-pria">
        <h1 style="color:black;">PRIA <span style="opacity: 0.5;color:black; font-size: 50% ;">(20 hasil)</span></h1>

        <select name="relevansi" id="relevansi">
          <option value="1">RELEVANSI</option>
          <option value="2">HARGA : TINGGI KE RENDAH</option>
          <option value="3">HARGA : RENDAH KE TINGGI</option>
          <option value="4">NEWEST PRODUCT</option>
        </select>
      </div>
      <div class="container-content">
        <div class="barang-rekomendasi">
          <a href="#"><img src="../image/img-cowok/Nike_Air_Force_1__07-removebg-preview.png" alt="" /></a>
          <div class="product-item-details">
            <hr style="margin-bottom: 30px" />
            <a href="#"><strong style="color: black">
                Nike Air Force 1 '07
              </strong>
            </a>
            <div class="harga-chart">
              <p>Rp.1.221.000</p>
              <i class="ri-shopping-cart-fill"></i>
            </div>
          </div>
        </div>
        <div class="barang-rekomendasi">
          <a href="#"><img src="../image/img-cowok/Nike_Air_Force_1_Low_SP_x_UNDERCOVER-removebg-preview.png"
              alt="" /></a>
          <div class="product-item-details">
            <hr style="margin-bottom: 30px" />
            <a href="#"><strong style="color: black">
                Nike Air Force 1 Low SP
              </strong>
            </a>
            <div class="harga-chart">
              <p>Rp.1.111.000</p>
              <i class="ri-shopping-cart-fill"></i>
            </div>
          </div>
        </div>
        <div class="barang-rekomendasi">
          <a href="#"><img src="../image/img-cowok/Nike_Air_Force_1_Mid__07-removebg-preview.png" alt="" /></a>
          <div class="product-item-details">
            <hr style="margin-bottom: 30px" />
            <a href="#"><strong style="color: black">Nike Air Force 1 Mid '07
              </strong>
            </a>
            <div class="harga-chart">
              <p>Rp.1.555.000</p>
              <i class="ri-shopping-cart-fill"></i>
            </div>
          </div>
        </div>
        <div class="barang-rekomendasi">
          <a href="#"><img src="../image/img-cowok/Nike_Air_Jordan_1_Retro_High_OG-removebg-preview.png" alt="" /></a>
          <div class="product-item-details">
            <hr style="margin-bottom: 30px" />
            <a href="#"><strong style="color: black">Nike Air Jordan 1 Retro
              </strong>
            </a>
            <div class="harga-chart">
              <p>Rp.2.111.000</p>
              <i class="ri-shopping-cart-fill"></i>
            </div>
          </div>
        </div>
        <div class="barang-rekomendasi">
          <a href="#"><img src="../image/img-cowok/Nike_Air_Max_97-removebg-preview.png" alt="" /></a>
          <div class="product-item-details">
            <hr style="margin-bottom: 30px" />
            <a href="#"><strong style="color: black">
                Nike Air Max 97
              </strong>
            </a>
            <div class="harga-chart">
              <p>Rp.2.100.000</p>
              <i class="ri-shopping-cart-fill"></i>
            </div>
          </div>
        </div>
        <div class="barang-rekomendasi">
          <a href="#"><img src="../image/img-cowok/Nike_Court_Vision_Low_Next_Nature-removebg-preview.png" alt="" /></a>
          <div class="product-item-details">
            <hr style="margin-bottom: 30px" />
            <a href="#"><strong style="color: black">Nike Court Vision Low
              </strong>
            </a>
            <div class="harga-chart">
              <p>Rp.1.500.000</p>
              <i class="ri-shopping-cart-fill"></i>
            </div>
          </div>
        </div>
        <div class="barang-rekomendasi">
          <a href="#"><img src="../image/img-cowok/Nike_Court_Vision_Mid_Next_Nature-removebg-preview.png" alt="" /></a>
          <div class="product-item-details">
            <hr style="margin-bottom: 30px" />
            <a href="#"><strong style="color: black">Nike Court Vision Mid
              </strong>
            </a>
            <div class="harga-chart">
              <p>Rp.1.900.000</p>
              <i class="ri-shopping-cart-fill"></i>
            </div>
          </div>
        </div>
        <div class="barang-rekomendasi">
          <a href="#"><img src="../image/img-cowok/Nike_Jordan_Max_Aura_4-removebg-preview.png" alt="" /></a>
          <div class="product-item-details">
            <hr style="margin-bottom: 30px" />
            <a href="#"><strong style="color: black">Nike Jordan Max Aura 4
              </strong>
            </a>
            <div class="harga-chart">
              <p>Rp.3.700.000</p>
              <i class="ri-shopping-cart-fill"></i>
            </div>
          </div>
        </div>
        <div class="barang-rekomendasi">
          <a href="#"><img src="../image/img-cowok/Nike_Jumpman_Two_Trey-removebg-preview.png" alt="" /></a>
          <div class="product-item-details">
            <hr style="margin-bottom: 30px" />
            <a href="#"><strong style="color: black">
                Nike Jumpman Two Trey
              </strong>
            </a>
            <div class="harga-chart">
              <p>Rp.2.600.000</p>
              <i class="ri-shopping-cart-fill"></i>
            </div>
          </div>
        </div>
        <div class="barang-rekomendasi">
          <a href="#"><img
              src="../image/img-cowok/Nike_Zoom_Mercurial_Dream_Speed_Superfly_9_Elite_FG-removebg-preview.png"
              alt="" /></a>
          <div class="product-item-details">
            <hr style="margin-bottom: 30px" />
            <a href="#"><strong style="color: black">Nike Zoom Mercurial
              </strong>
            </a>
            <div class="harga-chart">
              <p>Rp.4.800.000</p>
              <i class="ri-shopping-cart-fill"></i>
            </div>
          </div>
        </div>
        <div class="barang-rekomendasi">
          <a href="#"><img src="../image/img-cowok/Puma_CA_Pro_Classic_Sneakers-removebg-preview.png" alt="" /></a>
          <div class="product-item-details">
            <hr style="margin-bottom: 30px" />
            <a href="#"><strong style="color: black">Puma CA Pro Classic
              </strong>
            </a>
            <div class="harga-chart">
              <p>Rp.1.000.000</p>
              <i class="ri-shopping-cart-fill"></i>
            </div>
          </div>
        </div>
        <div class="barang-rekomendasi">
          <a href="#"><img src="../image/img-cowok/Puma_Deviate_NITRO_2_Run_75_Men_s_Running_Shoes-removebg-preview.png"
              alt="" /></a>
          <div class="product-item-details">
            <hr style="margin-bottom: 30px" />
            <a href="#"><strong style="color: black">Puma CA Pro Mid
              </strong>
            </a>
            <div class="harga-chart">
              <p>Rp.1.125.000</p>
              <i class="ri-shopping-cart-fill"></i>
            </div>
          </div>
        </div>

        <div class="barang-rekomendasi">
          <a href="#"><img src="../image/img-cowok/Puma_Contempt_Demi_Men_s_Training_Shoes-removebg-preview.png"
              alt="" /></a>
          <div class="product-item-details">
            <hr style="margin-bottom: 30px" />
            <a href="#"><strong style="color: black">
                Puma Contempt Demi
              </strong>
            </a>
            <div class="harga-chart">
              <p>Rp.3.500.000</p>
              <i class="ri-shopping-cart-fill"></i>
            </div>
          </div>
        </div>
        <div class="barang-rekomendasi">
          <a href="#"><img src="../image/img-cowok/Puma_Deviate_NITRO_2_Run_75_Men_s_Running_Shoes-removebg-preview.png"
              alt="" /></a>
          <div class="product-item-details">
            <hr style="margin-bottom: 30px" />
            <a href="#"><strong style="color: black">Puma Deviate NITRO 2
              </strong>
            </a>
            <div class="harga-chart">
              <p>Rp.2.000.000</p>
              <i class="ri-shopping-cart-fill"></i>
            </div>
          </div>
        </div>
        <div class="barang-rekomendasi">
          <a href="#"><img src="../image/img-cowok/Puma_GV_Special+_Sneakers-removebg-preview.png" alt="" /></a>
          <div class="product-item-details">
            <hr style="margin-bottom: 30px" />
            <a href="#"><strong style="color: black">Puma GV Special+
              </strong>
            </a>
            <div class="harga-chart">
              <p>Rp.1.300.000</p>
              <i class="ri-shopping-cart-fill"></i>
            </div>
          </div>
        </div>
        <div class="barang-rekomendasi">
          <a href="#"><img src="../image/img-cowok/Puma_Roma_Classic_Gum_Sneakers-removebg-preview.png" alt="" /></a>
          <div class="product-item-details">
            <hr style="margin-bottom: 30px" />
            <a href="#"><strong style="color: black">Puma Roma Classic Gum
              </strong>
            </a>
            <div class="harga-chart">
              <p>Rp.1.750.000</p>
              <i class="ri-shopping-cart-fill"></i>
            </div>
          </div>
        </div>
        <div class="barang-rekomendasi">
          <a href="#"><img src="../image/img-cowok/Puma_RS-X_Mid_Leather_Sneakers-removebg-preview.png" alt="" /></a>
          <div class="product-item-details">
            <hr style="margin-bottom: 30px" />
            <a href="#"><strong style="color: black">
                Puma RS-X Mid Leather
              </strong>
            </a>
            <div class="harga-chart">
              <p>Rp.2.900.000</p>
              <i class="ri-shopping-cart-fill"></i>
            </div>
          </div>
        </div>
        <div class="barang-rekomendasi">
          <a href="#"><img src="../image/img-cowok/Puma_Suede_Classic_XXI_Men_s_Sneakers-removebg-preview.png"
              alt="" /></a>
          <div class="product-item-details">
            <hr style="margin-bottom: 30px" />
            <a href="#"><strong style="color: black">Puma Suede Classic XXI
              </strong>
            </a>
            <div class="harga-chart">
              <p>Rp.2.000.000</p>
              <i class="ri-shopping-cart-fill"></i>
            </div>
          </div>
        </div>
        <div class="barang-rekomendasi">
          <a href="#"><img src="../image/img-cowok/Puma_Teveris_NITRO_Noughties_Sneakers-removebg-preview.png"
              alt="" /></a>
          <div class="product-item-details">
            <hr style="margin-bottom: 30px" />
            <a href="#"><strong style="color: black">Puma Teveris NITRO
              </strong>
            </a>
            <div class="harga-chart">
              <p>Rp.1.600.000</p>
              <i class="ri-shopping-cart-fill"></i>
            </div>
          </div>
        </div>
        <div class="barang-rekomendasi">
          <a href="#"><img
              src="../image/img-cowok/PUMA_x_LAMELO_BALL_MB.01_Digital_Camo_Men_s_Basketball_Shoes-removebg-preview.png"
              alt="" /></a>
          <div class="product-item-details">
            <hr style="margin-bottom: 30px" />
            <a href="#"><strong style="color: black">PUMA x LAMELO BALL
              </strong>
            </a>
            <div class="harga-chart">
              <p>Rp.1.490.000</p>
              <i class="ri-shopping-cart-fill"></i>
            </div>
          </div>
        </div>
        <div id="lihat-lainya">Lihat Lainya...</div>
      </div>

</main>
<?php include '../include/footer.php'; ?>