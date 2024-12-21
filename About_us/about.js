document = addEventListener("DOMContentLoaded", function () {
  //   animasi
  const deskripsi1 = document.querySelector(".deskripsi1");
  const deskripsi2 = document.querySelector(".deskripsi2");
  const deskripsi3 = document.querySelector(".deskripsi3");

  function showOnScroll() {
    const element1Position = deskripsi1.getBoundingClientRect().top;
    const element2Position = deskripsi2.getBoundingClientRect().top;
    const element3Position = deskripsi3.getBoundingClientRect().top;
    const screenHeight = window.innerHeight;

    if (element1Position < screenHeight) {
      deskripsi1.classList.add("show");
    }

    if (element2Position < screenHeight) {
      deskripsi2.classList.add("show");
    }
    if (element3Position < screenHeight) {
      deskripsi3.classList.add("show");
    }
  }

  window.addEventListener("scroll", showOnScroll);
});
