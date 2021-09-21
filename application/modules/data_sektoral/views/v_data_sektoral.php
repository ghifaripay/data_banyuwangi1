<style media="screen">
.btn-whatsapp .wa-icon {
    position: fixed;
    bottom: 65px;
    right: 15px;
    width: 50px;
    border-radius: 50%;
    box-shadow: 2px 2px 6px rgba(0,0,0,0.4);
}

</style>
<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex align-items-center">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
				<!-- <h1>Portal Data</h1> -->
				<h1>Mau mencari data ?</h1><br>
				<h2>Memudahkan pengguna mencari dan menggunakan data secara bersama-sama dengan penyajian data yang menarik</h2>
				<div class="row no-gutters text-center">
					<div class="col-md-8 mr-md-4">
						<div class="form-group">
							<input id="keyword" type="text" class="form-control" placeholder="Cari Data" required>
						</div>
					</div>
					<div class="form-group">
						<button id="btn-search" type="button" class="form-control btn btn-info" data-toggle="modal" data-target="#btn-search" >Search</button>
					</div>
				</div>
			</div>
			<div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
				<img src="<?php echo base_url()?>assets_frontend/sektoral/img/hero-img.png" class="img-fluid animated" alt="">
			</div>
		</div>
	</div>
</section>


<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl modal-dialog-scrollable modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-body">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        	<div id="data_dasar"></div>
      </div>
    </div>
  </div>
</div>

<!-- End Hero -->
<main id="main">
	<!-- ======= Services Section ======= -->
	<section id="services" class="services section-bg">
		<div class="container" data-aos="fade-up">
			<div class="row">

				<div id="data_menu" data-id="1" class="col-xl-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
					<div class="icon-box icon-box-bps">
						<div class="icon">
							<img src="<?php echo base_url()?>assets_frontend/sektoral/img/bps.png">
						</div>
						<h4><a>Badan Pusat Statistik</a></h4>
						<p>Data Statistik Kabupaten Banyuwangi yang bersumber dari BPS</p>
					</div>
				</div>

				<div id="data_menu" data-id="2" class="col-xl-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
					<div class="icon-box icon-box-sektoral">
						<div class="icon"><i class="icofont-bars"></i>
						</div>
						<h4><a>Sektoral</a></h4>
						<p>Data Statistik yang bersumber dari OPD Kabupaten Banyuwangi</p>
					</div>
				</div>
				<div id="data_menu" data-id="3" class="col-xl-4 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="300">
					<div class="icon-box icon-box-kecamatan">
						<div class="icon"><i class="icofont-building-alt"></i>
						</div>
						<h4><a>Kecamatan</a></h4>
						<p>Data Kecamatan yang bersumber dari OPD Kabupaten Banyuwangi</p>
					</div>
				</div>
				<!-- <div id="data_menu" data-id="4" class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="400">
					<div class="icon-box icon-box-desa">
						<div class="icon"><i class="icofont-ui-home"></i>
						</div>
						<h4><a href="">Desa</a></h4>
						<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis</p>
					</div>
				</div> -->
			</div>
		</div>
	</section>

<!-- <a href="" class="btn-whatsapp cta-wa">
	<img src="<?php echo base_url()?>assets_sektoral/img/wa.png" class="wa-icon cta-wa" alt="chat">
</a> -->

<div id="menu_data"></div>

	<!-- End Services Section -->

	<!-- ======= Cta Section ======= -->
	<!-- <section id="cta" class="cta">
		<div class="container" data-aos="zoom-in">
			<div class="row">
				<div class="col-lg-9 text-center text-lg-left">
					<h3>Request Data</h3>
					<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				</div>
				<div class="col-lg-3 cta-btn-container text-center"> <a class="cta-btn align-middle" href="#">Call To Action</a>
				</div>
			</div>
		</div>
	</section> -->
	<!-- End Cta Section -->
</main>
<!-- End #main -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
<script type="text/javascript">
	$(document).ready(function(){
	    $("#btn-search").click(function(){ // Ketika tombol simpan di klik
      $('#myModal').modal('show');
	    	// Ubah text tombol search menjadi SEARCHING...
	    	// Dan tambahkan atribut disable pada tombol nya agar tidak bisa diklik lagi
	    	$(this).html("SEARCHING...").attr("disabled", "disabled");

	    	$.ajax({
	    		url  : "<?php echo base_url()?>Data_sektoral/Search", // File tujuan
	    		type : 'POST', // Tentukan type nya POST atau GET
	    		data : {keyword: $("#keyword").val()}, // Set data yang akan dikirim
	    		dataType : "json",
	    		beforeSend : function(response) {},
	    		success : function(response){ // Ketika proses pengiriman berhasil
	    			// Ubah kembali text button search menjadi SEARCH
	    			// Dan hapus atribut disabled untuk meng-enable kembali button search nya
	    			$("#btn-search").html("Search").removeAttr("disabled");
	    			// Ganti isi dari div view dengan view yang diambil dari controller siswa function search
	    			$("#data_dasar").html(response.hasil);
            // console.log(response);
	    		},
	    		error: function (xhr, ajaxOptions, thrownError) { // Ketika terjadi error
	    			alert(xhr.responseText); // munculkan alert
	    		}
	    	});
	    });

			document.querySelectorAll("#data_menu").forEach((item) => {
				item.addEventListener('click',function(){
					let tipe_data=$(this).attr("data-id");
					console.log(tipe_data);
					$.ajax({
						url  : "<?php echo base_url()?>Data_sektoral/Menu_data", // File tujuan
						type : 'POST', // Tentukan type nya POST atau GET
						data : {tipe_data: tipe_data}, // Set data yang akan dikirim
						dataType: "json",
						// beforeSend: function(response) {},
						success: function(response){ // Ketika proses pengiriman berhasil
							// Ganti isi dari div view dengan view yang diambil dari controller siswa function search
							$("#menu_data").html(response.hasil);
							// console.log(response);
						},
						error: function (xhr, ajaxOptions, thrownError) { // Ketika terjadi error
							alert(xhr.responseText); // munculkan alert
						}
					});
				});
			});


	    });
</script>
