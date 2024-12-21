<?php
include '../include/header.php'; ?>

<style>
  /* MAIN START */
  @font-face {
    font-family: "Minecraft";
    /*memberikan nama bebas untuk font*/
    src: url("../font/Minecraft.ttf");
    /*memanggil file font eksternalnya di folder nexa*/
  }

  * {
    text-decoration: none;
    padding: 0;
    margin: 0;
    box-sizing: border-box;
    font-family: "Poppins", sans-serif;
    list-style: none;
  }

  :root {
    background-color: #222327;
    color: #fff;
  }

  body {
    min-height: auto;
    background: #ffffff;

    color: var(#fff);
    display: flex;
    flex-direction: column;
    font-family: "Poppins", sans-serif;
  }

  main {
    width: 100%;
    height: auto;
    margin-top: 50px;
  }

  .photo-box {
    width: auto;
    margin-top: 60px;
    height: 600px;
    display: flex;
    flex-direction: column;
    justify-content: center;
    color: white;
    align-items: center;
    background-size: cover;
    z-index: 10;
    opacity: 1;
  }

  .foto1 a img {
    border: 3px solid rgb(255, 255, 255);
    width: 140px;
    height: 140px;
    border-radius: 50%;
    margin-bottom: 10px;
    transition: all 1s ease;
  }

  .foto1 a img:hover {
    transform: scale(1.2);
    transition: all 0.5s ease;
  }

  .foto2-3 {
    display: flex;
  }

  .foto2-3 a img {
    border: 3px solid rgb(255, 255, 255);
    width: 140px;
    height: 140px;
    margin: 10px 20px;
    border-radius: 50%;
  }

  .foto2-3 a img:hover {
    transform: scale(1.2);
    transition: all 0.5s ease;
  }

  .judul {
    margin-top: 30px;
  }

  .judul p {
    font-size: 50px;
    font-family: sans-serif;
    font-weight: bolder;
    text-align: center;
    -webkit-text-fill-color: transparent;
    -webkit-text-stroke: 1px white;
  }

  .top svg {
    margin-top: -200px;
    z-index: 999;
    width: 100%;
    height: auto;
    margin-bottom: 0px;
  }

  .deskripsi-tim {
    background-color: #0a4d68;
    width: 100%;
    height: auto;
    padding: 20px;
    color: white;
    margin-top: -10px;
  }

  .deskripsi1 {
    display: flex;
    color: white;
    align-items: center;
    width: 60%;
    margin-left: 120px;
    margin-bottom: 60px;
  }

  .deskripsi1 img {
    border: 3px solid black;
    width: 140px;
    height: 140px;
    border-radius: 50%;
    margin: 20px;
  }

  .deskripsi1 .name-desk {
    display: flex;
    flex-direction: column;
  }

  .deskripsi1 .name-desk p .satu {
    text-align: left;
  }

  .deskripsi2 {
    display: flex;
    flex-direction: row-reverse;
    color: white;
    align-items: center;
    width: 60%;
    margin-left: 500px;
    margin-bottom: 60px;
  }

  .deskripsi2 img {
    border: 3px solid black;
    width: 140px;
    height: 140px;
    border-radius: 50%;
    margin: 20px;
  }

  .deskripsi2 .name-desk {
    display: flex;
    flex-direction: column;
  }

  .deskripsi2 .name-desk p {
    text-align: right;
  }

  .deskripsi3 {
    display: flex;
    color: white;
    align-items: center;
    width: 60%;
    margin-left: 120px;
    margin-bottom: 60px;
  }

  .deskripsi3 img {
    border: 3px solid black;
    width: 140px;
    height: 140px;
    border-radius: 50%;
    margin: 20px;
  }

  .name-desk {
    display: flex;
    flex-direction: column;
  }

  .deskripsi3 .name-desk p .satu {
    text-align: left;
  }

  /* animasi */
  .deskripsi1,
  .deskripsi2,
  .deskripsi3 {
    opacity: 0;
    transform: translateX(-30px);
    transition: all 0.3s ease-in-out;
  }

  .deskripsi1.show,
  .deskripsi2.show,
  .deskripsi3.show {
    opacity: 1;
    transform: translateX(0);
  }

  .deskripsi1,
  .deskripsi3 {
    animation: slideInLeft 1.5s ease-in forwards;
  }

  .deskripsi2 {
    animation: slideInRight 1.5s ease-in forwards;
  }

  @keyframes slideInLeft {
    from {
      transform: translateX(-100%);
    }

    to {
      transform: translateX(0);
    }
  }

  @keyframes slideInRight {
    from {
      transform: translateX(100%);
    }

    to {
      transform: translateX(0);
    }
  }

  .kerja-tim {
    width: 100%;
    height: 800px;
    background-color: rgb(254, 254, 254);
    /* margin-top: -150px; */
  }

  .kerja-tim img {
    margin-left: 15%;
  }

  .contactUs {
    background-color: #0a4d68;
    color: white;


  }

  .contact-form {
    max-width: 500px;
    margin: 0 auto;
  }

  .contact-form input {
    height: 35px;
  }

  .contact-form input,
  .contact-form textarea {
    color: white;
    padding: 10px;
    border-radius: 8px;
    background-color: transparent;
    border: 1px solid white;
    display: block;
    width: 100%;
    margin-bottom: 10px;
  }

  .contact-form button {
    display: block;
    width: 100%;
    padding: 10px;
    border: none;
    border-radius: 8px;
    background-color: #0acc78;
    color: white;
  }

  .contact-form button:hover {
    background-color: #06633b;
  }

  .contact-info {
    width: 100%;
    margin-top: 30px;
    margin-bottom: 30px
  }

  .contact-info p {
    margin-left: 10%;
    text-align: left;
    margin-bottom: 5px;

  }

  .contact-info p a {
    text-decoration: none;
    color: white;
  }

  /* MAIN END */
</style>

<!-- ==========MAINNN============== -->
<main>
  <div class="photo-box" style=" background-image: url(../About_us/image/background.jpg)">
    <div class="foto1">
      <a href="#desk1"><img src="../About_us/image/foto-nanta.jpg" alt="foto_nanta"></a>
    </div>
    <div class="foto2-3">
      <a href="#desk3"><img src="../About_us/image/foto-yusuf.jpg" alt="foto-yusuf"></a>
      <a href="#desk2"><img src="../About_us/image/foto-agif.jpg" alt="foto-agif"></a>
    </div>
    <div class="judul">
      <p>WELCOME TO OUR PROJECT</p>
    </div>
  </div>
  <div class="top" id="desk1">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
      <path fill="#0a4d68" fill-opacity="1"
        d="M0,160L48,165.3C96,171,192,181,288,186.7C384,192,480,192,576,181.3C672,171,768,149,864,154.7C960,160,1056,192,1152,181.3C1248,171,1344,117,1392,90.7L1440,64L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">
      </path>
    </svg>
  </div>
  <div class="deskripsi-tim" id="desk2">
    <h1 style="margin: 20px; font-size: 50px;">ABOUT US</h1>
    <div class="deskripsi1">
      <img src="../About_us/image/foto-nanta.jpg" alt="foto-nanta">
      <div class="name-desk">
        <span style="font-weight: bolder;  font-size: 25px;">YUWANANTA VALENCIA AFSHANDY</span>
        <p class="satu">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quod possimus laudantium omnis eaque
          debitis rem? Quo vero nisi doloremque pariatur quod. Eveniet alias omnis expedita praesentium doloremque
          molestias ullam obcaecati?Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed ab officiis
          exercitationem ad assumenda aspernatur. Optio officia iure recusandae iusto! Dolore molestiae sint iure
          adipisci fuga accusantium esse hic incidunt!</p>
      </div>

    </div>
    <div class="deskripsi2" id="desk3">
      <img src="../About_us/image/foto-agif.jpg" alt="foto-agif">
      <div class="name-desk">
        <span style="font-weight: bolder;  font-size: 25px; text-align: right;">GHIFARI TRISTAN FADLI</span>
        <p class="dua">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quod possimus laudantium omnis eaque
          debitis rem? Quo vero nisi doloremque pariatur quod. Eveniet alias omnis expedita praesentium doloremque
          molestias ullam obcaecati?Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed ab officiis
          exercitationem ad assumenda aspernatur. Optio officia iure recusandae iusto! Dolore molestiae sint iure
          adipisci fuga accusantium esse hic incidunt!</p>
      </div>

    </div>
    <div class="deskripsi3">
      <img src="../About_us/image/foto-yusuf.jpg" alt="foto-yusuf">
      <div class="name-desk">
        <span style="font-weight: bolder;  font-size: 25px;">YUSUF ABDURAFI SISWANTO</span>
        <p class="satu">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quod possimus laudantium omnis eaque
          debitis rem? Quo vero nisi doloremque pariatur quod. Eveniet alias omnis expedita praesentium doloremque
          molestias ullam obcaecati?Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed ab officiis
          exercitationem ad assumenda aspernatur. Optio officia iure recusandae iusto! Dolore molestiae sint iure
          adipisci fuga accusantium esse hic incidunt!</p>
      </div>

    </div>

  </div>
  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
    <path fill="#0a4d68" fill-opacity="1"
      d="M0,64L48,64C96,64,192,64,288,80C384,96,480,128,576,149.3C672,171,768,181,864,176C960,171,1056,149,1152,149.3C1248,149,1344,171,1392,181.3L1440,192L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z">
    </path>
  </svg>
  <div class="kerja-tim">
    <h1 style="margin: 20px; font-size: 50px;">TEAM WORK</h1>
    <img src="../About_us/image/diagram.jpg" alt="">
  </div>
  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
    <path fill="#0a4d68" fill-opacity="1"
      d="M0,192L48,186.7C96,181,192,171,288,176C384,181,480,203,576,218.7C672,235,768,245,864,256C960,267,1056,277,1152,261.3C1248,245,1344,203,1392,181.3L1440,160L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">
    </path>
  </svg>
  <div class="contactUs">
    <h1 style="margin: 20px; font-size: 50px;">Contact Us</h1>

    <div class="contact-form">
      <form action="/submit_contact_form" method="post">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>

        <label for="phone">Phone Number:</label>
        <input type="tel" id="phone" name="phone" required>

        <label for="message">Message:</label>
        <textarea id="message" name="message" rows="5" required></textarea>

        <!-- Additional forms -->
        <label for="subject">Subject:</label>
        <input type="text" id="subject" name="subject">

        <label for="company">Company:</label>
        <input type="text" id="company" name="company">

        <label for="address">Address:</label>
        <input type="text" id="address" name="address">

        <button type="submit">Submit</button>
      </form>
    </div>

    <div class="contact-info">
      <h1 style="margin: 20px; font-size: 50px;">Contact Info</h1>
      <p><i class="ri-whatsapp-fill" style="font-size:25px"></i>: +62817373188</p>
      <p><i class="ri-facebook-circle-fill" style="font-size:25px"></i>: <a
          href="https://www.facebook.com/yourpage">@nayshop</a></p>
      <p><i class="ri-twitter-fill" style="font-size:25px"></i>: <a
          href="https://www.twitter.com/yourhandle">@nayshop</a></p>
      <p><i class="ri-mail-fill" style="font-size:25px"></i>: nayshop@webmail.nay.ac.id</p>
    </div>
  </div>
</main>


<script>
  // Smooth scrolling functionality
  document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click',function(e) {
      e.preventDefault();

      document.querySelector(this.getAttribute('href')).scrollIntoView({
        behavior: 'smooth'
      });
    });
  });
</script>
<?php include '../include/footer.php'; ?>