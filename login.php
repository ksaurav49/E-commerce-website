<!DOCTYPE html>
<html lang="en">
  
<head>

    <!-- SITE TITTLE -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BIGBAG Store - Ecommerce Bootstrap Template</title>

    <!-- PLUGINS CSS STYLE -->
    <link href="plugins/jquery-ui/jquery-ui.css" rel="stylesheet">
    <link href="plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="plugins/selectbox/select_option1.css" rel="stylesheet">
    <link href="plugins/fancybox/jquery.fancybox.min.css" rel="stylesheet">
    <link href="plugins/iziToast/css/iziToast.css" rel="stylesheet">
    <link href="plugins/prismjs/prism.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="plugins/rs-plugin/css/settings.css" media="screen">
    <link rel="stylesheet" type="text/css" href="plugins/slick/slick.css" media="screen">
    <link rel="stylesheet" type="text/css" href="plugins/slick/slick-theme.css" media="screen">


    <!-- CUSTOM CSS -->
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="css/default.css" id="option_color">

    <!-- Icons -->
    <link rel="shortcut icon" href="img/favicon.png">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

  </head>

  <body class="body-wrapper version1">

    <?php
                //include './include/preloader.php';
    
    ?>

    <div class="main-wrapper">

      <?php
                include './include/header.php';
               
      
      ?>


      <!-- MAIN CONTENT SECTION -->
      <section class="mainContent clearfix">
        <div class="container">
          
          <div class="page-header">
            <h4>Login From Here</h4>
          </div>
          
          <form action="checklogin.php" method="post">
						<input type="text" tabindex="1" value="" name="n1" class="form-control" placeholder="Enter User Name" autofocus required>
						
                                                <input type="password" tabindex="2" value="" name="n2" class="form-control m" placeholder="Enter Password" required> 

                                                
                                                <input type="submit" value="Login" class="btn btn-block btn-primary m b">
					
                                        </form>
         
          </div>
         
        </div>
      </section>

      <!-- LIGHT SECTION -->
      <section class="lightSection clearfix">
        <div class="container">
          <div class="owl-carousel partnersLogoSlider">
            <div class="slide">
              <div class="partnersLogo clearfix">
                <img src="img/home/partners/partner-01.png" alt="partner-img">
              </div>
            </div>
            <div class="slide">
              <div class="partnersLogo clearfix">
                <img src="img/home/partners/partner-02.png" alt="partner-img">
              </div>
            </div>
            <div class="slide">
              <div class="partnersLogo clearfix">
                <img src="img/home/partners/partner-03.png" alt="partner-img">
              </div>
            </div>
            <div class="slide">
              <div class="partnersLogo clearfix">
                <img src="img/home/partners/partner-04.png" alt="partner-img">
              </div>
            </div>
            <div class="slide">
              <div class="partnersLogo clearfix">
                <img src="img/home/partners/partner-05.png" alt="partner-img">
              </div>
            </div>
            <div class="slide">
              <div class="partnersLogo clearfix">
                <img src="img/home/partners/partner-01.png" alt="partner-img">
              </div>
            </div>
            <div class="slide">
              <div class="partnersLogo clearfix">
                <img src="img/home/partners/partner-02.png" alt="partner-img">
              </div>
            </div>
            <div class="slide">
              <div class="partnersLogo clearfix">
                <img src="img/home/partners/partner-03.png" alt="partner-img">
              </div>
            </div>
          </div>
        </div>
      </section>

      		<?php
              include './include/footer.php';
                
                ?>
		</div>

		<!-- LOGIN MODAL -->
		<div class="modal fade login-modal" id="login" tabindex="-1" role="dialog">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header justify-content-center">
						<h3 class="modal-title">log in</h3>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					<div class="modal-body">
						<form action="#" method="POST" role="form">
							<div class="form-group">
								<label for="">Enter Email</label>
								<input type="email" class="form-control" id="">
							</div>
							<div class="form-group">
								<label for="">Password</label>
								<input type="password" class="form-control" id="">
							</div>
							<div class="checkbox">
								<input id="checkbox-1" class="checkbox-custom form-check-input" name="checkbox-1" type="checkbox" checked>
								<label for="checkbox-1" class="checkbox-custom-label form-check-label">Remember me</label>
							</div>
							<button type="submit" class="btn btn-primary btn-block">log in</button>
							<button type="button" class="btn btn-link btn-block">Forgot Password?</button>
						</form>
					</div>
				</div>
			</div>
		</div>

		<!-- SIGN UP MODAL -->
		<div class="modal fade " id="signup" tabindex="-1" role="dialog">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header justify-content-center">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h3 class="modal-title">Create an account</h3>
					</div>
					<div class="modal-body">
						<form action="#" method="POST" role="form">
							<div class="form-group">
								<label for="">Enter Email</label>
								<input type="email" class="form-control" id="">
							</div>
							<div class="form-group">
								<label for="">Password</label>
								<input type="password" class="form-control" id="">
							</div>
							<div class="form-group">
								<label for="">Confirm Password</label>
								<input type="password" class="form-control" id="">
							</div>
							<button type="submit" class="btn btn-primary btn-block">Sign up</button>
							<button type="button" class="btn btn-link btn-block">New User?</button>
						</form>
					</div>
				</div>
			</div>
		</div>

		<!-- PORDUCT QUICK VIEW MODAL -->
		<div class="modal fade quick-view" tabindex="-1" role="dialog">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-body">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
						<div class="media flex-wrap">
							<div class="media-left px-0">
								<img class="media-object" src="img/products/quick-view/quick-view-01.jpg" alt="Image">
							</div>
							<div class="media-body">
								<h2>Old Skool Navy</h2>
								<h3>$149</h3>
								<p>Classic sneaker from Vans. Cotton canvas and suede upper. Textile lining with heel stabilizer and ankle support. Contrasting laces. Sits on a classic waffle rubber sole.</p>
								<span class="quick-drop">
									<select name="guiest_id3" id="guiest_id3" class="select-drop">
										<option value="0">Size</option>
										<option value="1">Size 1</option>
										<option value="2">Size 2</option>
										<option value="3">Size 3</option>
									</select>
								</span>
								<span class="quick-drop resizeWidth">
									<select name="guiest_id4" id="guiest_id4" class="select-drop">
										<option value="0">Qty</option>
										<option value="1">Qty 1</option>
										<option value="2">Qty 2</option>
										<option value="3">Qty 3</option>
									</select>
								</span>
								<div class="btn-area">
									<a href="#" class="btn btn-primary btn-block">Add to cart <i class="fa fa-angle-right" aria-hidden="true"></i></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<script src="plugins/jquery/jquery.min.js"></script>
		<script src="plugins/jquery/jquery-migrate-3.0.0.min.js"></script>
		<script src="plugins/jquery-ui/jquery-ui.js"></script>
		<script src="plugins/bootstrap/js/popper.min.js"></script>
		<script src="plugins/bootstrap/js/bootstrap.min.js"></script>
		<script src="plugins/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
		<script src="plugins/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
		<script src="plugins/slick/slick.js"></script>
		<script src="plugins/fancybox/jquery.fancybox.min.js"></script>
		<script src="plugins/iziToast/js/iziToast.js"></script>
		<script src="plugins/prismjs/prism.js"></script>
		<script src="plugins/selectbox/jquery.selectbox-0.1.3.min.js"></script>
		<script src="plugins/countdown/jquery.syotimer.js"></script>
		<script src="plugins/velocity/velocity.min.js"></script>
		<script src="js/custom.js"></script>

	<link href="options/optionswitch.css" rel="stylesheet">
<script src="options/optionswitcher.js"></script>
</body>


</html>

     