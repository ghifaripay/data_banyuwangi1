<section class="about-area about4 section-padding-0-120 bg-gray">
	<div class="container">
		<div class="row align-items-center justify-content-between">
			<!-- About Us Content Area-->
			<div class="col-12 col-lg-6">
				<div class="aboutUs-content mt-120 pr-5">
					<div class="section-heading mb-5">
						<h6>Kabupaten Banyuwangi</h6>
						<h2>Pusat Data Banyuwangi</h2>
					</div>
					<br>
					<div class="register-thumbnail mb-50">
						<img src="<?php echo base_url()?>assets_backend/login/img/bg-img/hero-3.png" alt="">
					</div>
				</div>
			</div>
			<!-- About Us Thumbnail Area-->
			<div class="col-12 col-lg-6">
				<br>
				<br>
				<div class="aboutUs-thumbnail mt-120">
					<div class="card register-card bg-gray p-1 p-sm-4 mb-50">
						<div class="card-body">
							<h4 class="text-center">Halaman Login</h4>
							<p class="text-center"></p>
							<!-- Register Form-->
							<div class="register-form my-5">
								<form action="#">

									<div class="form-group mb-3">
										<input class="form-control rounded-0" id="username" name="username" type="text" placeholder="Username" required="">
									</div>

									<div class="form-group mb-3">
										<label class="label-psswd" for="password"><span class="hide">HIDE</span><span class="show">SHOW</span></label>
										<input class="input-psswd form-control rounded-0" id="password" nama="password" type="password" placeholder="Password" psswd-shown="false" required="">
									</div>

									<div class="row">
										<div class="col-12 col-lg-6">
                      <select class="form-control selectpicker" id="periode" name="periode">
                          <?php foreach ($this->portal->periode_tahun() as $key => $periode):?>
                          <option value="<?php echo $periode['PERIODE_TAHUN']; ?>"><?php echo $periode['PERIODE_TAHUN']; ?></option>
                          <?php endforeach; ?>
                      </select>
										</div>
										<div class="col-12 col-lg-6">
											<button class="btn saasbox-btn white-btn w-100" id="submit-login" type="submit"><i class="lni-unlock mr-2"></i>Login</button>
										</div>
									</div>
								</form>
                </div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>



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
