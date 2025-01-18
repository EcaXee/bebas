document.addEventListener("DOMContentLoaded", function () {
    const navbar = `
    <nav class="navbar navbar-expand-lg">
      <div class="container d-flex justify-content-center align-content-center">
          <div class="navbar-item" id="navbarSupportedContent">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                      <a class="nav-link active" aria-current="true" href="../pages/home.html" onclick="setActive(this)">Home</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="../pages/course.html" onclick="setActive(this)">Course</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="#" onclick="setActive(this)">Forum</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="#" onclick="setActive(this)">Dashboard</a>
                  </li>
              </ul>
          </div>
      </div>
      <div class="login-btn">
          <a class="btn-login" href="/login/login.html">Log In</a>
      </div>
    </nav>`;

    document.getElementById("Navbar").innerHTML = navbar;

        const navbarLinks = document.querySelectorAll(".nav-link");
      
        // Fungsi untuk mengatur elemen aktif
        window.setActive = function (element) {
          const activeHref = element.getAttribute("href");
          localStorage.setItem("activeNav", activeHref);
        };
      
        // Fungsi untuk menandai elemen aktif saat halaman dimuat
        const setActiveOnLoad = function () {
          const activeHref = localStorage.getItem("activeNav");
          if (activeHref) {
            navbarLinks.forEach(link => {
              if (link.getAttribute("href") === activeHref) {
                link.classList.add("active");
              } else {
                link.classList.remove("active");
              }
            });
          }
        };
      
        // Panggil fungsi untuk menandai elemen aktif saat halaman dimuat
        setActiveOnLoad();
      });