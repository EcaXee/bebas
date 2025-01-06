document.addEventListener("DOMContentLoaded", function () {
    const navbar = `
    <nav class="navbar navbar-expand-lg">
      <div class="container d-flex justify-content-center align-content-center">
          <div class="navbar-item" id="navbarSupportedContent">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                      <a class="nav-link active" aria-current="true" href="../homepage/home.html" onclick="setActive(this)">Home</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="../course/course.html" onclick="setActive(this)">Course</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="#" onclick="setActive(this)">Forum</a>
                  </li>
              </ul>
          </div>
      </div>
      <div class="login-btn">
          <a class="btn-login" href="/login/login.html">Log In</a>
      </div>
    </nav>`;

    document.getElementById("Navbar").innerHTML = navbar;

    // Tambahkan fungsi untuk set active di navbar
    window.setActive = function (element) {
        document.querySelectorAll('.nav-link').forEach(link => link.classList.remove('active'));
        element.classList.add('active');
    };
});
