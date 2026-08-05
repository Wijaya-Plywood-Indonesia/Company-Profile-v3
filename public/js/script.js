// // Hamburger Menu
// const menuToggle = document.getElementById("menuToggle");
// const closeMenu = document.getElementById("closeMenu");
// const sidebar = document.getElementById("sidebar");

// menuToggle.addEventListener("click", function () {
//     sidebar.classList.add("active");
// });

// closeMenu.addEventListener("click", function () {
//     sidebar.classList.remove("active");
// });

// Produk beranda
const btnPlywood = document.getElementById("btn-plywood");
const btnVeneer = document.getElementById("btn-veneer");
const gambar = document.getElementById("produk-img");
const deskripsi = document.getElementById("produk-deskripsi");

btnPlywood.addEventListener("click", function () {
    gambar.src = "/images/gambar1.jpeg";
    deskripsi.textContent =
        "Plywood diproduksi dari lapisan kayu pilihan yang diproses menggunakan teknologi modern sehingga menghasilkan produk yang kuat dan berkualitas tinggi.";
    btnPlywood.classList.add("active");
    btnVeneer.classList.remove("active");
});

btnVeneer.addEventListener("click", function () {
    gambar.src = "/images/gambar2.jpeg";
    deskripsi.textContent =
        "Veneer merupakan lembaran kayu tipis berkualitas tinggi yang digunakan sebagai bahan utama maupun pelapis pada industri furnitur dan konstruksi.";
    btnVeneer.classList.add("active");
    btnPlywood.classList.remove("active");
});
