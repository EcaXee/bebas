const main = `

      <div id="Main"></div>
      <div id="carouselitem" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselitem" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselitem" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselitem" data-bs-slide-to="2" aria-label="Slide 3"></button>
          </div>
        <div class="carousel-inner">    
          <div class="carousel-item active">
            <img src="../asset/carousel/carousel-test-1.jpg" class="d-block w-100" alt="Carousel Image 1">
          </div>
          <div class="carousel-item">
            <img src="../asset/carousel/carousel-test-1.jpg " class="d-block w-100" alt="Carousel Image 2">
          </div>
          <div class="carousel-item">
            <img src="../asset/carousel/carousel-test-1.jpg " class="d-block w-100" alt="Carousel Image 3">
          </div>
        </div>
      </div>
    
    <!-- berita -->
    <div class="artikel">
        <h1 style="margin-left: 2.5rem;">Berita</h1>
        <!-- card berita -->
        <div class="news text-center pb-4">
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
          </div>
        </div>
    </div>
    <!-- info -->
    <div class="pt-4">
      <div class="About-Us d-flex flex-row p-5 border-top pt-4 pb-4"> 
        <img src="../asset/Screenshot (304).png" style="height: 20rem; width: auto; margin-right: 2rem;" title="About Us Image">
        <div class="about-us-text d-flex flex-column">
          <h1>About Us</h1>
          <p class="text-break">Selamat datang di Website daring (Online E-learning) SMK Bumigora. Website ini diperuntukan untuk pembelajaran secara mandiri ataupun kolaboratif dimana saja, kapan saja dan menurut kecepatan belajar mahasiswa serta gaya belajar (learning style) bagi seluruh asiswa SMK Bumigora. </p>
        </div>
      </div>
    </div>
    <div>
      <div class="About-Us d-flex flex-row p-5 border-top border-bottom pt-4 pb-4"> 
        <div class="about-us-text d-flex flex-column">
          <h1 class="text-end">REFOCUSHING</h1>
          <p class="text-break text-end">Refocussing bertujuan untuk membentuk SMK yang fokus dan konsisten terhadap bidang keahlian yang diajarkan. Saat ini SMK Bumigora berfokus pada bidang keahlian Seni dan Ekonomi Kreatif  dan Bisnis Manajemen, yang dimulai saat PPDB tahun pelajaran 2024/2025.</p>
        </div>
        <img src="../asset/Screenshot (304).png" alt="Refocussing Image" style="height: 20rem; width: auto; margin-left: 2rem;">
      </div>
    </div>
    <div class="maps mb-5">
      <div class="d-flex justify-content-center flex-column align-items-center">
        <h1>MAPS</h1>
        <div>
          <!-- tempat taruh maps tapi gw pakein gambar dulu aja -->
          <img src="../asset/maps.PNG" class="w-100 h-100" alt="maps">
        </div>
      </div>
    </div>
`;
document.getElementById("Main").innerHTML = main;
