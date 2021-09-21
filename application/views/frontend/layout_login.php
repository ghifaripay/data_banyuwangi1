
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
	<title>Portal Data | Login Page</title>
	<meta name="description" content="Login Page">
	<link rel="apple-touch-icon-precomposed" sizes="57x57" href="<?php echo base_url()?>assets/frontend_login/img\favicon\apple-touch-icon-57x57.png">
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo base_url()?>assets/frontend_login/img\favicon\apple-touch-icon-114x114.png">
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo base_url()?>assets/frontend_login/img\favicon\apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo base_url()?>assets/frontend_login/img\favicon\apple-touch-icon-144x144.png">
	<link rel="apple-touch-icon-precomposed" sizes="60x60" href="<?php echo base_url()?>assets/frontend_login/img\favicon\apple-touch-icon-60x60.png">
	<link rel="apple-touch-icon-precomposed" sizes="120x120" href="<?php echo base_url()?>assets/frontend_login/img\favicon\apple-touch-icon-120x120.png">
	<link rel="apple-touch-icon-precomposed" sizes="76x76" href="<?php echo base_url()?>assets/frontend_login/img\favicon\apple-touch-icon-76x76.png">
	<link rel="apple-touch-icon-precomposed" sizes="152x152" href="<?php echo base_url()?>assets/frontend_login/img\favicon\apple-touch-icon-152x152.png">
	<link rel="icon" type="image/png" href="<?php echo base_url()?>assets/frontend_login/img\favicon\favicon-196x196.png" sizes="196x196">
	<link rel="icon" type="image/png" href="<?php echo base_url()?>assets/frontend_login/img\favicon\favicon-96x96.png" sizes="96x96">
	<link rel="icon" type="image/png" href="<?php echo base_url()?>assets/frontend_login/img\favicon\favicon-32x32.png" sizes="32x32">
	<link rel="icon" type="image/png" href="<?php echo base_url()?>assets/frontend_login/img\favicon\favicon-16x16.png" sizes="16x16">
	<link rel="icon" type="image/png" href="<?php echo base_url()?>assets/frontend_login/img\favicon\favicon-128.png" sizes="128x128">
	<meta name="application-name" content="&nbsp;">
	<meta name="msapplication-TileColor" content="#FFFFFF">
	<meta name="msapplication-TileImage" content="<?php echo base_url()?>assets/frontend_login/img/favicon/mstile-144x144.png">
	<meta name="msapplication-square70x70logo" content="<?php echo base_url()?>assets/frontend_login/img/favicon/mstile-70x70.png">
	<meta name="msapplication-square150x150logo" content="<?php echo base_url()?>assets/frontend_login/img/favicon/mstile-150x150.png">
	<meta name="msapplication-wide310x150logo" content="<?php echo base_url()?>assets/frontend_login/img/favicon/mstile-310x150.png">
	<meta name="msapplication-square310x310logo" content="<?php echo base_url()?>assets/frontend_login/img/favicon/mstile-310x310.png">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;700&display=swap" rel="stylesheet">
	<!-- <link rel="stylesheet" href="<?php echo base_url()?>assets/frontend_login/css/style.css"> -->
	<link rel="stylesheet" href="<?php echo base_url()?>assets/frontend_login/css/vendor/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo base_url()?>assets/frontend_login/css/vendor/OverlayScrollbars.min.css">
	<link rel="stylesheet" href="<?php echo base_url()?>assets/frontend_login/css/styles.css">
	<link rel="stylesheet" href="<?php echo base_url()?>assets/frontend_login/css/main.css">
	<script src="<?php echo base_url()?>assets/frontend_login/js/base/loader.js"></script>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">
</head>
<body class="h-100">


<?php $this->load->view($layout); ?>

<div class="modal fade modal-right scroll-out-negative" id="settings" data-bs-backdrop="true" tabindex="-1" role="dialog" aria-labelledby="settings" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable full" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Theme Settings</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="scroll-track-visible">
          <div class="mb-5" id="color">
            <label class="mb-3 d-inline-block form-label">Color</label>
            <div class="row d-flex g-3 justify-content-between flex-wrap mb-3">
              <a href="#" class="flex-grow-1 w-50 option col" data-value="light-blue" data-parent="color">
                <div class="card rounded-md p-3 mb-1 no-shadow color">
                  <div class="blue-light"></div>
                </div>
                <div class="text-muted text-part">
                  <span class="text-extra-small align-middle">LIGHT BLUE</span>
                </div>
              </a>
              <a href="#" class="flex-grow-1 w-50 option col" data-value="dark-blue" data-parent="color">
                <div class="card rounded-md p-3 mb-1 no-shadow color">
                  <div class="blue-dark"></div>
                </div>
                <div class="text-muted text-part">
                  <span class="text-extra-small align-middle">DARK BLUE</span>
                </div>
              </a>
            </div>
            <div class="row d-flex g-3 justify-content-between flex-wrap mb-3">
              <a href="#" class="flex-grow-1 w-50 option col" data-value="light-red" data-parent="color">
                <div class="card rounded-md p-3 mb-1 no-shadow color">
                  <div class="red-light"></div>
                </div>
                <div class="text-muted text-part">
                  <span class="text-extra-small align-middle">LIGHT RED</span>
                </div>
              </a>
              <a href="#" class="flex-grow-1 w-50 option col" data-value="dark-red" data-parent="color">
                <div class="card rounded-md p-3 mb-1 no-shadow color">
                  <div class="red-dark"></div>
                </div>
                <div class="text-muted text-part">
                  <span class="text-extra-small align-middle">DARK RED</span>
                </div>
              </a>
            </div>
            <div class="row d-flex g-3 justify-content-between flex-wrap mb-3">
              <a href="#" class="flex-grow-1 w-50 option col" data-value="light-green" data-parent="color">
                <div class="card rounded-md p-3 mb-1 no-shadow color">
                  <div class="green-light"></div>
                </div>
                <div class="text-muted text-part">
                  <span class="text-extra-small align-middle">LIGHT GREEN</span>
                </div>
              </a>
              <a href="#" class="flex-grow-1 w-50 option col" data-value="dark-green" data-parent="color">
                <div class="card rounded-md p-3 mb-1 no-shadow color">
                  <div class="green-dark"></div>
                </div>
                <div class="text-muted text-part">
                  <span class="text-extra-small align-middle">DARK GREEN</span>
                </div>
              </a>
            </div>
            <div class="row d-flex g-3 justify-content-between flex-wrap mb-3">
              <a href="#" class="flex-grow-1 w-50 option col" data-value="light-purple" data-parent="color">
                <div class="card rounded-md p-3 mb-1 no-shadow color">
                  <div class="purple-light"></div>
                </div>
                <div class="text-muted text-part">
                  <span class="text-extra-small align-middle">LIGHT PURPLE</span>
                </div>
              </a>
              <a href="#" class="flex-grow-1 w-50 option col" data-value="dark-purple" data-parent="color">
                <div class="card rounded-md p-3 mb-1 no-shadow color">
                  <div class="purple-dark"></div>
                </div>
                <div class="text-muted text-part">
                  <span class="text-extra-small align-middle">DARK PURPLE</span>
                </div>
              </a>
            </div>
            <div class="row d-flex g-3 justify-content-between flex-wrap mb-3">
              <a href="#" class="flex-grow-1 w-50 option col" data-value="light-pink" data-parent="color">
                <div class="card rounded-md p-3 mb-1 no-shadow color">
                  <div class="pink-light"></div>
                </div>
                <div class="text-muted text-part">
                  <span class="text-extra-small align-middle">LIGHT PINK</span>
                </div>
              </a>
              <a href="#" class="flex-grow-1 w-50 option col" data-value="dark-pink" data-parent="color">
                <div class="card rounded-md p-3 mb-1 no-shadow color">
                  <div class="pink-dark"></div>
                </div>
                <div class="text-muted text-part">
                  <span class="text-extra-small align-middle">DARK PINK</span>
                </div>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


<!-- <div class="settings-buttons-container">
  <button type="button" class="btn settings-button btn-primary p-0" data-bs-toggle="modal" data-bs-target="#settings" id="settingsButton">
    <span class="d-inline-block no-delay" data-bs-delay="0" data-bs-offset="0,3" data-bs-toggle="tooltip" data-bs-placement="left" title="Settings">
    <i data-cs-icon="paint-roller" class="position-relative"></i>
    </span>
  </button>
</div> -->


<script src="<?php echo base_url()?>assets/frontend_login/js/vendor/jquery-3.5.1.min.js"></script>
<script src="<?php echo base_url()?>assets/frontend_login/js/vendor/bootstrap.bundle.min.js"></script>
<script src="<?php echo base_url()?>assets/frontend_login/js/vendor/OverlayScrollbars.min.js"></script>
<script src="<?php echo base_url()?>assets/frontend_login/js/vendor/autoComplete.min.js"></script>
<script src="<?php echo base_url()?>assets/frontend_login/js/vendor/clamp.min.js"></script>
<script src="<?php echo base_url()?>assets/frontend_login/js/vendor/jquery.validate/jquery.validate.min.js"></script>
<script src="<?php echo base_url()?>assets/frontend_login/js/vendor/jquery.validate/additional-methods.min.js"></script>
<script src="<?php echo base_url()?>assets/frontend_login/font/CS-Line/csicons.min.js"></script>
<script src="<?php echo base_url()?>assets/frontend_login/js/base/helpers.js"></script>
<script src="<?php echo base_url()?>assets/frontend_login/js/base/globals.js"></script>
<script src="<?php echo base_url()?>assets/frontend_login/js/base/nav.js"></script>
<script src="<?php echo base_url()?>assets/frontend_login/js/base/search.js"></script>
<script src="<?php echo base_url()?>assets/frontend_login/js/base/settings.js"></script>
<script src="<?php echo base_url()?>assets/frontend_login/js/base/init.js"></script>
<script src="<?php echo base_url()?>assets/frontend_login/js/pages/auth.login.js"></script>
<script src="<?php echo base_url()?>assets/frontend_login/js/common.js"></script>
<script src="<?php echo base_url()?>assets/frontend_login/js/scripts.js"></script>

<script src="<?php echo base_url();?>assets_backend/login/plugins/font-icons/feather/feather.min.js"></script>
<script src="<?php echo base_url();?>assets_backend/login/plugins/sweetalerts/sweetalert2.min.js"></script>




</body>

</html>
