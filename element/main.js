const main = `
<div id="carouselitem" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselitem" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselitem" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselitem" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
    <div class="carousel-inner">    
      <div class="carousel-item active">
        <img src="../asset/carousel/carousel-test-1.jpg " class="d-block w-100">
      </div>
      <div class="carousel-item">
        <img src="../asset/carousel/carousel-test-1.jpg " class="d-block w-100">
      </div>
      <div class="carousel-item">
        <img src="../asset/carousel/carousel-test-1.jpg " class="d-block w-100">
      </div>
    </div>
  </div>

<!-- berita -->
<div class="artikel">
    <h1 style="margin-left: 2.5rem;">Berita</h1>
    <!-- card berita -->
    <div class="news text-center">
      <div class = "container-news">
      <div class="row">
        <div class="col d-flex justify-content-center">
          <a href="#">
            <div class="card">
              <img src="../asset/Screenshot (304).png" alt="Judul Berita">
              <div class="overlay">
                  <h5>Judul Berita</h5>
                  <p>Deskripsi Berita</p>
              </div>
          </div>
          </a>
        </div>

        <div class="col d-flex justify-content-center">
          <a href="#">
            <div class="card">
              <img src="../asset/Screenshot (304).png" alt="Judul Berita">
              <div class="overlay">
                  <h5>Judul Berita</h5>
                  <p>Deskripsi Berita</p>
              </div>
          </div>
          </a>
        </div>

        <div class="col d-flex justify-content-center">
          <a href="#">
            <div class="card">
              <img src="../asset/Screenshot (304).png" alt="Judul Berita">
              <div class="overlay">
                  <h5>Judul Berita</h5>
                  <p>Deskripsi Berita</p>
              </div>
          </div>
          </a>
        </div>
          
        <div class="col d-flex justify-content-center">
          <a href="#">
            <div class="card">
              <img src="../asset/Screenshot (304).png" alt="Judul Berita">
              <div class="overlay">
                  <h5>Judul Berita</h5>
                  <p>Deskripsi Berita</p>
              </div>
          </div>
          </a>
        </div>
          
      </div>
    </div>
</div>`;
document.getElementById("Main").innerHTML = main;