document.addEventListener("DOMContentLoaded", function () {
  // ==================LIHAT LAINYA========================
  let loadMoreBtn = document.querySelector("#lihat-lainya");
  let currentItem = 4; //banyak item yang akan ditambahkan
  let totalItems = 20; //jumlah total barang

  loadMoreBtn.onclick = () => {
    let boxes = document.querySelectorAll(".barang-rekomendasi");
    for (let i = currentItem; i < currentItem + 4; i++) {
      if (i >= boxes.length) {
        // jika jumlah barang yang ditampilkan melebihi jumlah total barang
        loadMoreBtn.style.display = "none";
        return;
      }
      boxes[i].style.display = "inline-block";
    }
    currentItem += 4;

    if (currentItem >= totalItems) {
      // jika jumlah barang yang ditampilkan sama dengan jumlah total barang
      loadMoreBtn.style.display = "none";
    }
  };
  const collapsibleItems = document.querySelectorAll(".collapsible");

  // loop melalui setiap elemen
  collapsibleItems.forEach((item) => {
    item.querySelector(".title").addEventListener("click", () => {
      const content = item.querySelector(".content");
      content.style.display =
        content.style.display === "none" ? "inline-block" : "none";
    });
  });

  document.addEventListener("DOMContentLoaded", function () {
    var popupContainer = document.getElementById("popup-container");
    var popupContent = document.getElementById("popup-content");
    var popupLink = document.getElementsByClassName("popup-link")[0];
    var closePopup = document.getElementById("close-popup");

    popupLink.addEventListener("click", function (e) {
      e.preventDefault();
      popupContainer.style.display = "flex";
    });

    closePopup.addEventListener("click", function (e) {
      e.preventDefault();
      popupContainer.style.display = "none";
    });
  });
});
