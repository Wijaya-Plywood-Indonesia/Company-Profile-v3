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
        "Plywood tersusun dari beberapa lapisan kayu tipis yang direkatkan menjadi satu lembaran. Konstruksinya membuat plywood kuat dan stabil, sehingga dapat digunakan sebagai material untuk berbagai kebutuhan furniture dan produk berbahan kayu.";
    btnPlywood.classList.add("active");
    btnVeneer.classList.remove("active");
});

btnVeneer.addEventListener("click", function () {
    gambar.src = "/images/tentang1.jpg";
    deskripsi.textContent =
        "Veneer berupa lembaran kayu tipis yang diperoleh melalui proses pengupasan atau pengirisan kayu. Selain menjadi salah satu bahan penyusun plywood, veneer juga dapat digunakan sebagai lapisan permukaan untuk memberikan tampilan serat kayu yang alami pada furniture.";
    btnVeneer.classList.add("active");
    btnPlywood.classList.remove("active");
});
