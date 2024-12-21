<?php
$customCSS = '../wanita/wanita.css';
include '../include/header.php'; ?>

<main>
  <div class="container-main">
    <div class="container-menu">
      <div class="menu-luar">
        <p>Home / Wanita</p>
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
    <div class="container-barang" style="background-color:white; margin-top: 70px">
      <div class="hasil-pria">
        <h1 style="color:black">Wanita <span style="opacity: 0.5; font-size: 50% ;">(20 hasil)</span></h1>

        <select name="relevansi" id="relevansi">
          <option value="1">RELEVANSI</option>
          <option value="2">HARGA : TINGGI KE RENDAH</option>
          <option value="3">HARGA : RENDAH KE TINGGI</option>
          <option value="4">NEWEST PRODUCT</option>
        </select>
      </div>
      <div class="container-content">
        <div class="barang-rekomendasi">
          <!-- ganti disini -->
          <a href="#"><img src="../image/image wanita/air jordan 1 low g.png" alt="" /></a>
          <div class="product-item-details">
            <hr style="margin-bottom: 30px" />
            <a href="#"><strong style="color: black">
                Nike Air Jordan 1 Low
              </strong>
            </a>
            <div class="harga-chart">
              <p>Rp.2.450.000</p>
              <i class="ri-shopping-cart-fill"></i>
            </div>
          </div>
        </div>
        <div class="barang-rekomendasi">
          <!-- ganti disini -->
          <a href="#"><img src="../image/image wanita/air jordan mid .png" alt="" /></a>
          <div class="product-item-details">
            <hr style="margin-bottom: 30px" />
            <a href="#"><strong style="color: black">Nike Air Jordan mid </strong>
            </a>
            <div class="harga-chart">
              <p>Rp.2.600.000</p>
              <i class="ri-shopping-cart-fill"></i>
            </div>
          </div>
        </div>
        <div class="barang-rekomendasi">
          <!-- ganti disini -->
          <a href="#"><img src="../image/image wanita/air-max-90-futura-shoes-x9msLm.png-removebg-preview.png"
              alt="" /></a>
          <div class="product-item-details">
            <hr style="margin-bottom: 30px" />
            <a href="#"><strong style="color: black">Nike Air Max 90 </strong> </a>
            <div class="harga-chart">
              <p>Rp.1.144.000</p>
              <i class="ri-shopping-cart-fill"></i>
            </div>
          </div>
        </div>
        <div class="barang-rekomendasi">
          <!-- image -->
          <a href="#"><img src="../image/image wanita/nie air force 1 _08.png" alt="" /></a>
          <div class="product-item-details">
            <hr style="margin-bottom: 30px" />
            <a href="#"><strong style="color: black">Nike Air Force 1 08 </strong>
            </a>
            <div class="harga-chart">
              <p>Rp.1.400.000</p>
              <i class="ri-shopping-cart-fill"></i>
            </div>
          </div>
        </div>
        <div class="barang-rekomendasi">
          <!-- image -->
          <a href="#"><img src="../image/image wanita/nike air force 1 _07 SE.png" alt="" /></a>
          <div class="product-item-details">
            <hr style="margin-bottom: 30px" />
            <a href="#"><strong style="color: black"> Nike Air Force 1 07 </strong>
            </a>
            <div class="harga-chart">
              <p>Rp.2.456.000</p>
              <i class="ri-shopping-cart-fill"></i>
            </div>
          </div>
        </div>
        <div class="barang-rekomendasi">
          <!-- image -->
          <a href="#"><img src="../image/image wanita/nike air jordan nike se.png" alt="" /></a>
          <div class="product-item-details">
            <hr style="margin-bottom: 30px" />
            <a href="#"><strong style="color: black">Nike Air Jordan SE </strong> </a>
            <div class="harga-chart">
              <p>Rp.2.210.000</p>
              <i class="ri-shopping-cart-fill"></i>
            </div>
          </div>
        </div>
        <div class="barang-rekomendasi">
          <!-- image -->
          <a href="#"><img src="../image/image wanita/nike air max 97.png" alt="" /></a>
          <div class="product-item-details">
            <hr style="margin-bottom: 30px" />
            <a href="#"><strong style="color: black">Nike Air Max 97 </strong> </a>
            <div class="harga-chart">
              <p>Rp.2.625.000</p>
              <i class="ri-shopping-cart-fill"></i>
            </div>
          </div>
        </div>
        <div class="barang-rekomendasi">
          <!-- image -->
          <a href="#"><img src="../image/image wanita/nike air max flyknit racer next nature.png" alt="" /></a>
          <div class="product-item-details">
            <hr style="margin-bottom: 30px" />
            <a href="#"><strong style="color: black">Nike Air Max Flyknit Racer </strong>
            </a>
            <div class="harga-chart">
              <p>Rp.3.444.000</p>
              <i class="ri-shopping-cart-fill"></i>
            </div>
          </div>
        </div>
        <div class="barang-rekomendasi">
          <!-- image -->
          <a href="#"><img src="../image/image wanita/nike asuna.png" alt="" /></a>
          <div class="product-item-details">
            <hr style="margin-bottom: 30px" />
            <a href="#"><strong style="color: black"> Nike Asuna </strong> </a>
            <div class="harga-chart">
              <p>Rp.2.600.000</p>
              <i class="ri-shopping-cart-fill"></i>
            </div>
          </div>
        </div>


        <div class="barang-rekomendasi">
          <!-- image -->
          <a href="#"><img src="../image/image wanita/Nike Dunk Low LX Women_s Shoes.png" alt="" /></a>
          <div class="product-item-details">
            <hr style="margin-bottom: 30px" />
            <a href="#"><strong style="color: black">Nike Dunk Low LX Women </strong>
            </a>
            <div class="harga-chart">
              <p>Rp.3.600.000</p>
              <i class="ri-shopping-cart-fill"></i>
            </div>
          </div>
        </div>
        <div class="barang-rekomendasi">
          <!-- image -->
          <a href="#"><img src="../image/image wanita/nike free metcon 5.png" alt="" /></a>
          <div class="product-item-details">
            <hr style="margin-bottom: 30px" />
            <a href="#"><strong style="color: black">Nike Free Metcon 5 </strong> </a>
            <div class="harga-chart">
              <p>Rp.3.700.000</p>
              <i class="ri-shopping-cart-fill"></i>
            </div>
          </div>
        </div>
        <div class="barang-rekomendasi">
          <!-- image -->
          <a href="#"><img src="../image/image wanita/nike legend essential.png" alt="" /></a>
          <div class="product-item-details">
            <hr style="margin-bottom: 30px" />
            <a href="#"><strong style="color: black">Nike Legend Essential </strong>
            </a>
            <div class="harga-chart">
              <p>Rp.3.000.000</p>
              <i class="ri-shopping-cart-fill"></i>
            </div>
          </div>
        </div>

        <div class="barang-rekomendasi">
          <!-- image -->
          <a href="#"><img src="../image/image wanita/nike pegasus flyease se.png" alt="" /></a>
          <div class="product-item-details">
            <hr style="margin-bottom: 30px" />
            <a href="#"><strong style="color: black"> Nike Pegasus Flyease SE </strong>
            </a>
            <div class="harga-chart">
              <p>Rp.2.000.000</p>
              <i class="ri-shopping-cart-fill"></i>
            </div>
          </div>
        </div>
        <div class="barang-rekomendasi">
          <!-- image -->
          <a href="#"><img src="../image/image wanita/nike pegasus.png" alt="" /></a>
          <div class="product-item-details">
            <hr style="margin-bottom: 30px" />
            <a href="#"><strong style="color: black">Nike Pegasus </strong> </a>
            <div class="harga-chart">
              <p>Rp.1.990.000</p>
              <i class="ri-shopping-cart-fill"></i>
            </div>
          </div>
        </div>
        <div class="barang-rekomendasi">
          <!-- image -->
          <a href="#"><img src="../image/image wanita/nike superep.png" alt="" /></a>
          <div class="product-item-details">
            <hr style="margin-bottom: 30px" />
            <a href="#"><strong style="color: black">Nike Superep </strong> </a>
            <div class="harga-chart">
              <p>Rp.1.999.000</p>
              <i class="ri-shopping-cart-fill"></i>
            </div>
          </div>
        </div>
        <div class="barang-rekomendasi">
          <!-- image -->
          <a href="#"><img src="../image/image wanita/nike vaporfly3.png" alt="" /></a>
          <div class="product-item-details">
            <hr style="margin-bottom: 30px" />
            <a href="#"><strong style="color: black">Nike Vaporfly </strong> </a>
            <div class="harga-chart">
              <p>Rp.2.900.000</p>
              <i class="ri-shopping-cart-fill"></i>
            </div>
          </div>
        </div>
        <div class="barang-rekomendasi">
          <!-- image -->
          <a href="#"><img src="../image/image wanita/nike x jacquemus air humara lx.png" alt="" /></a>
          <div class="product-item-details">
            <hr style="margin-bottom: 30px" />
            <a href="#"><strong style="color: black"> Nike x Jacquemus Air Humara LX </strong>
            </a>
            <div class="harga-chart">
              <p>Rp.4.600.000</p>
              <i class="ri-shopping-cart-fill"></i>
            </div>
          </div>
        </div>
        <div class="barang-rekomendasi">
          <!-- image -->
          <a href="#"><img src="../image/image wanita/nike zegema(1).png" alt="" /></a>
          <div class="product-item-details">
            <hr style="margin-bottom: 30px" />
            <a href="#"><strong style="color: black">Nike Zegema </strong> </a>
            <div class="harga-chart">
              <p>Rp.2.600.000</p>
              <i class="ri-shopping-cart-fill"></i>
            </div>
          </div>
        </div>
        <div class="barang-rekomendasi">
          <!-- image -->
          <a href="#"><img src="../image/image wanita/nike zegema.png" alt="" /></a>
          <div class="product-item-details">
            <hr style="margin-bottom: 30px" />
            <a href="#"><strong style="color: black">Nike Zoom Superfly </strong> </a>
            <div class="harga-chart">
              <p>Rp.3.048.000</p>
              <i class="ri-shopping-cart-fill"></i>
            </div>
          </div>
        </div>
        <div class="barang-rekomendasi">
          <!-- image -->
          <a href="#"><img src="../image/image wanita/nike zoom superfly(1).png" alt="" /></a>
          <div class="product-item-details">
            <hr style="margin-bottom: 30px" />
            <a href="#"><strong style="color: black">Nikecourt Zoom </strong> </a>
            <div class="harga-chart">
              <p>Rp.1.900.000</p>
              <i class="ri-shopping-cart-fill"></i>
            </div>
          </div>
        </div>
        <div id="lihat-lainya">Lihat Lainya...</div>
      </div>
</main>
<?php include '../include/footer.php'; ?>