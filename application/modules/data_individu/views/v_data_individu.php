

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex flex-column justify-content-end align-items-center">
    <div id="heroCarousel" class="container carousel carousel-fade" data-ride="carousel">
<br>
<br>
<br>
<br>
    </div>

    <svg class="hero-waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28 " preserveAspectRatio="none">
      <defs>
        <path id="wave-path" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z">
      </defs>
      <g class="wave1">
        <use xlink:href="#wave-path" x="50" y="3" fill="rgba(255,255,255, .1)">
      </g>
      <g class="wave2">
        <use xlink:href="#wave-path" x="50" y="0" fill="rgba(255,255,255, .2)">
      </g>
      <g class="wave3">
        <use xlink:href="#wave-path" x="50" y="9" fill="#fff">
      </g>
    </svg>

  </section><!-- End Hero -->

  <main id="main">
    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container">

        <div class="section-title" data-aos="zoom-out">
          <h2>Kabupaten Banyuwangi</h2>
          <p>Data Individu</p>
        </div>

        <div class="row">
          <div id="data_menu" data-id="1" class="col-lg-4 col-md-6">
            <div class="icon-box" data-aos="zoom-in-left">
              <div class="icon"><i class="icofont-address-book" style="color: #ffd727;"></i></div>
              <h4 class="title"><a>Pendidikan</a></h4>
              <p class="description">Data Individu Kabupaten Banyuwangi yang bersumber dari Dinas Pendidikan</p>
            </div>
          </div>
          <div id="data_menu" data-id="2" class="col-lg-4 col-md-6 mt-5 mt-md-0">
            <div class="icon-box" data-aos="zoom-in-left" data-aos-delay="100">
              <div class="icon"><i class="icofont-doctor-alt" style="color: #ff689b;"></i></div>
              <h4 class="title"><a>Kesehatan</a></h4>
              <p class="description">Data Individu Kabupaten Banyuwangi yang bersumber dari Dinas Kesehatan</p>
            </div>
          </div>

          <div id="data_menu" data-id="3" class="col-lg-4 col-md-6 mt-5 mt-lg-0 ">
            <div class="icon-box" data-aos="zoom-in-left" data-aos-delay="200">
              <div class="icon"><i class="icofont-cart" style="color: #3fcdc7;"></i></div>
              <h4 class="title"><a>UMKM</a></h4>
              <p class="description">Data Individu Kabupaten Banyuwangi yang bersumber dari Dinas Koperasi & UMKM</p>
            </div>
          </div>
          <div id="data_menu" data-id="4" class="col-lg-4 col-md-6 mt-5">
            <div class="icon-box" data-aos="zoom-in-left" data-aos-delay="300">
              <div class="icon"><i class="icofont-leaf" style="color:#41cf2e;"></i></div>
              <h4 class="title"><a>Pertanian</a></h4>
              <p class="description">Data Individu Kabupaten Banyuwangi yang bersumber dari Dinas Pertanian</p>
            </div>
          </div>

          <div id="data_menu" data-id="5" class="col-lg-4 col-md-6 mt-5">
            <div class="icon-box" data-aos="zoom-in-left" data-aos-delay="400">
              <div class="icon"><i class="las la-globe-americas" style="color: #d6ff22;"></i></div>
              <h4 class="title"><a>Belum ada Data</a></h4>
              <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque</p>
            </div>
          </div>
          <div id="data_menu" data-id="6" class="col-lg-4 col-md-6 mt-5">
            <div class="icon-box" data-aos="zoom-in-left" data-aos-delay="500">
              <div class="icon"><i class="las la-clock" style="color: #4680ff;"></i></div>
              <h4 class="title"><a>Belum ada Data</a></h4>
              <p class="description">Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi</p>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Services Section -->
<div id="menu_data"></div>
  </main><!-- End #main -->

  <script type="text/javascript">
      document.querySelectorAll("#data_menu").forEach((item) => {
        item.addEventListener('click',function(){
          let id_data=$(this).attr("data-id");
          console.log(id_data);
          $.ajax({
            url  : "<?php echo base_url()?>Data_individu/Menu_individu", // File tujuan
            type : 'POST', // Tentukan type nya POST atau GET
            data : {id_data: id_data}, // Set data yang akan dikirim
            // dataType: "json",
            // beforeSend: function(response) {},
            success: function(response){ // Ketika proses pengiriman berhasil
              // Ganti isi dari div view dengan view yang diambil dari controller siswa function search
              $("#menu_data").html(response);
              // console.log(response);
            },
            error: function (xhr, ajaxOptions, thrownError) { // Ketika terjadi error
              alert(xhr.responseText); // munculkan alert
            }
          });
        });
      });

  </script>
