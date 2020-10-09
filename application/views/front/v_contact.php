<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PT AGUNG SATYA PERSADA</title>
    
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600&amp;subset=latin-ext" rel="stylesheet">
    
    <link href="<?php echo base_url().'front/css/bootstrap.min.css'?>" rel="stylesheet">
    <link href="<?php echo base_url().'front/css/font-awesome.min.css'?>" rel="stylesheet">
    <link href="<?php echo base_url().'front/style.css'?>" rel="stylesheet">
    
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <?php
            error_reporting(0);
            function limit_words($string, $word_limit){
                $words = explode(" ",$string);
                return implode(" ",array_splice($words,0,$word_limit));
            }

        ?>
     <?php echo $this->session->flashdata('msg');?>
</head>
<body>
    <header class="site-header">
        
        <nav class="navbar navbar-default">
			<div class="container">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-navbar-collapse">
					<span class="sr-only">Toggle Navigation</span>
					<i class="fa fa-bars"></i>
				</button>
				<a href="<?php echo base_url().'beranda'?>" class="navbar-brand">
					<img src="<?php echo base_url().'front/img/agung-logo.png'?>" alt="Post">
				</a>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-navbar-collapse">
                    <ul class="nav navbar-nav main-navbar-nav">
                        <li class="active"><a href="<?php echo base_url().'beranda'?>" title="">HOME</a></li>
                        <li><a href="<?php echo base_url().'about'?>" title="">TENTANG KAMI</a></li>
                        <li class="dropdown">
                            <a href="#" title="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">SERVICES <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="<?php echo base_url().'services/read_service/7'?>" title="">HUMAN SECURE</a></li>
                                <li><a href="<?php echo base_url().'services/read_service/6'?>" title="">HOME DECOR</a></li>
                                <li><a href="<?php echo base_url().'services/read_service/5'?>" title="">MURAL DESIGN</a></li>
                            </ul>
                        </li>
                        
                        <li><a href="<?php echo base_url().'blog'?>" title="">BLOG</a></li>
                        <li><a href="<?php echo base_url().'gallery'?>" title="">GALERY</a></li>
                        <li><a href="<?php echo base_url().'contact'?>" title="">KONTAK KAMI</a></li>
                    </ul>                           
                </div><!-- /.navbar-collapse -->                
				<!-- END MAIN NAVIGATION -->
			</div>
		</nav>        
    </header>
    <main class="site-main">
        <section class="hero_area">
            <div class="hero_content">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <h1>PT AGUNG SATYA PERSADA</h1>
                            <h2>Donec Elit Non Porta Gravida Eget Metus</h2>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="services">
        
		<div class="container">
			<div class="row">
				<div class="col-md-3">
					<h3>KONTAK KAMI</h3>
					<ul class="contact-info">
						<li><i class="icon-map"></i>198 West 21th Street, Suite 721 New York NY 10016</li>
						<li><i class="icon-phone"></i>+ 1235 2355 98</li>
						<li><i class="icon-envelope"></i><a href="#">info@yoursite.com</a></li>
						<li><i class="icon-globe"></i><a href="#">www.yoursite.com</a></li>
					</ul>
				</div>

				<div class="col-md-8 col-md-push-1 col-sm-12 col-sm-push-0 col-xs-12 col-xs-push-0">
				
					<div class="row">
					<form method="post" action="<?php echo base_url().'contact/kirim_pesan'?>">
						<div class="col-md-6">
							<div class="form-group">
								<input class="form-control" name="nama" placeholder="Nama" type="text" required>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<input class="form-control" name="email" placeholder="Email" type="email" required>
							</div>
						</div>
						<div class="col-md-12">
							<div class="form-group">
								<textarea name="pesan" class="form-control" id="" cols="30" rows="7" placeholder="Message" required></textarea>
							</div>
						</div>
						<div class="col-md-12">
							<div class="form-group">
								<input value="Kirim Pesan" class="btn btn-primary" style="background-color: rgb(10, 236, 236);border-color: rgb(10, 236, 236)" type="submit">
							</div>
						</div>
					</form>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div id="map" class="animate-box" data-animate-effect="fadeIn"></div>
                        
                    </div>
                    
        </section>
        <?php $this->load->view('front/v_footer');?>