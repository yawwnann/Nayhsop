document.addEventListener("DOMContentLoaded", function () {
  // =========Toggle===========
  let menu = document.querySelector("#menu-icon");
  let navbar = document.querySelector(".navbar");

  menu.onclick = function () {
    menu.classList.toggle("bx-x");
    navbar.classList.toggle("open");
  };
  // ===========autoslide=====

  var slideIndex = 1;
  showSlides(slideIndex);

  function plusSlides(n) {
    showSlides((slideIndex += n));
  }

  function showSlides(n) {
    var i;
    var slides = document.getElementsByClassName("slide");
    if (n > slides.length) {
      slideIndex = 1;
    }
    if (n < 1) {
      slideIndex = slides.length;
    }
    for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
    }
    slides[slideIndex - 1].style.display = "block";
  }

  function autoSlides() {
    setInterval(function () {
      plusSlides(1);
    }, 3000); // 3000ms = 3 detik
  }

  autoSlides();

  // ===========Navbar top 0 ========
  // VARIABEL
  const header = document.querySelector(".sticky");
  const miniHeader = document.querySelector(".mini-header");

  // periksa posisi scroll untuk mengatur tampilan header Ketika halaman dimuat ulang
  window.addEventListener("load", () => {
    if (window.pageYOffset >= 40) {
      header.style.top = "40px";
    } else {
      header.style.top = "40px";
    }
    // Ketika scroll dijalankan, periksa posisi scroll untuk mengubah tampilan header
    window.addEventListener("scroll", () => {
      if (window.pageYOffset >= 40) {
        header.style.top = "0";
        miniHeader.style.top = "-50px";
      } else {
        header.style.top = "40px";
        miniHeader.style.top = "0";
      }
    });
    // Tambahkan transisi yang mulus ketika header berpindah posisi
    header.style.transition = "top 0.2s ease";
    miniHeader.style.transition = "top 0.3s ease";
  });

  // =========Tombol Search================
  const searchBtn = document.querySelector(".search");
  const searchInput = document.querySelector(".search input");

  let isShown = false;

  searchBtn.addEventListener("click", function () {
    if (!isShown) {
      searchInput.style.display = "inline-block";
      searchInput.focus(); // Fokus ke elemen input
      isShown = true;
    } else {
      searchInput.style.display = "none";
      searchInput.blur(); // Hapus fokus dari elemen input
      isShown = false;
    }
  });

  // Tambahkan event listener untuk memeriksa ketika teks di-input
  searchInput.addEventListener("input", function () {
    if (isShown) {
    } else {
      searchInput.style.display = "inline-block";
      searchInput.focus(); // Fokus ke elemen input
      isShown = true;
    }
  });
});
