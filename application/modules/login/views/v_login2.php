


	<div id="root" class="h-100">
		<div class="fixed-background"></div>
		<div class="container-fluid p-0 h-100 position-relative">
			<div class="row g-0 h-100">
				<div class="offset-0 col-12 d-none d-lg-flex offset-md-1 col-lg h-lg-100">
					<div class="min-h-100 d-flex align-items-center">
						<div class="w-100 w-lg-75 w-xxl-50">
							<div>
								<div class="mb-5">
									<h1 class="display-3 text-white">Portal Data</h1>
									<h1 class="display-3 text-white">Kabupaten Banyuwangi</h1>
								</div>
								<p class="h6 text-white lh-1-5 mb-5">Memungkinkan pengguna mencari, mengeksplorasi, menghubungkan, men-download, dan menggunakan data secara bersama-sama dengan perlengkapan visualisasi data yang menarik.</p>
								<div class="mb-5">
                  <a class="btn btn-lg btn-outline-white" href="<?php echo base_url()?>">Beranda</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-12 col-lg-auto h-100 pb-4 px-4 pt-0 p-lg-0">
					<div class="sw-lg-70 min-h-100 bg-foreground d-flex justify-content-center align-items-center shadow-deep py-5 full-page-content-right-border">
						<div class="sw-lg-50 px-5">
							<div class="sh-11">
								<!-- <a href="index.html">
									<div class="logo-default"></div>

								</a> -->
                  <img class="img-responsive" src="<?php echo base_url()?>assets/frontend_login/img/logo/logo_baru.png" alt="alternative">
							</div>
							<div class="mb-5">
								<h2 class="cta-1 mb-0 text-primary">Sistem Pusat Data Statistik</h2>
								<h2 class="cta-1 text-primary">Kabupaten Banyuwangi</h2>
							</div>
							<div class="mb-5">
								<p class="h6">Silahkan Gunakan Akun Anda Untuk Login. </p>
								<!-- <p class="h6">If you are not a member, please
                  <a href="Pages.Authentication.Register.html">register</a>
									.</p> -->
							</div>
							<div>
								<form id="loginForm" class="tooltip-end-bottom" novalidate="">
									<div class="mb-3 filled form-group tooltip-end-top">
                    <i data-cs-icon="user"></i>
										<input class="form-control" id="username" placeholder="Username" name="username"  type="text" required="">
									</div>
									<div class="mb-3 filled form-group tooltip-end-top">
                    <i data-cs-icon="lock-off"></i>
										<input class="form-control pe-7" id="password" name="password" type="password" placeholder="Password" required="">
                    <!-- <a class="text-small position-absolute t-3 e-3" href="Pages.Authentication.ForgotPassword.html">Forgot?</a> -->
									</div>
                  <div class="mb-3 filled form-group tooltip-end-top">
                    <i data-cs-icon="clock"></i>

                    <select class="form-control pe-7"  id="periode" name="periode" placeholder="Tahun">
                          <?php foreach ($this->portal->periode_tahun() as $key => $periode):?>
                          <option value="<?php echo $periode['PERIODE_TAHUN']; ?>"><?php echo $periode['PERIODE_TAHUN']; ?></option>
                          <?php endforeach; ?>
                      </select>
                  </div>

									<button id="submit-login" type="submit" class="btn btn-lg btn-primary">Login</button>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>



  <script type="text/javascript">
  $(document).ready(function(){
      feather.replace();

      $('#submit-login').on('click',function(e){
          e.preventDefault();
          var username = $('#username').val();
          var password = $('#password').val();
          var periode = $('#periode').val();

          $.ajax({
              type : "POST",
              url  : "<?php echo base_url('login/sign')?>",
              dataType : "JSON",
              data : {username: username, password: password, periode: periode},
              cache : false,
              success: function(data){
                  if(data.success == true) {
                      const toast = swal.mixin({
                          toast: true,
                          position: 'top-end',
                          showConfirmButton: false,
                          timer: 2000,
                          padding: '2em'
                      });
                      toast({
                          type: 'success',
                          title: data.message,
                          padding: '2em',
                      })

                      window.location = data.url;
                      setTimeout(function(){
                          window.location = data.url;
                      }, 3000);
                  }
                  else {
                      const toast = swal.mixin({
                          toast: true,
                          position: 'top-end',
                          showConfirmButton: false,
                          timer: 2000,
                          padding: '2em'
                      });
                      toast({
                          type: 'error',
                          title: data.message,
                          padding: '2em',
                      })
                  }
              }
          });
      });
  });
</script>
