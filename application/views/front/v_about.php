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
        <h2 class="section-title">TENTANG KAMI</h2>
            <p class="desc">Praesent faucibus ipsum at sodales blandit</p>
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="box">
                            <h3 href=>PT. AGUNG SEJAGAT</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin id pulvinar magna. Aenean accumsan iaculis lorem, nec sodales lectus auctor tempor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin id pulvinar magna. Aenean accumsan iaculis lorem, nec sodales lectus auctor tempor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin id pulvinar magna. Aenean accumsan iaculis lorem, nec sodales lectus auctor tempor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin id pulvinar magna. Aenean accumsan iaculis lorem, nec sodales lectus auctor tempor.</p>
                            
                        </div>
                    </div>

         <div class="container">
			<div class="col-md-6">
				<figure>
					<img src="<?php echo base_url().'theme/images/image_1.jpg'?>" alt="Free HTML5 Template" class="img-responsive">
				</figure>
		</div>
			<div class="col-md-6">
				<h3>Visi</h3>
				<ul>
					<li>Menjadi Perusahaan IT Profesional dengan solusi dan layanan yang optimal serta memiliki daya saing.</li>
					<li>Memberikan Layanan dan Solusi yang terintegerasi dan mengikuti perkembangan dunia Teknologi Informasi.</li>
				</ul>
				<h3>Misi</h3>
				<ul>
					<li>Tidak hanya memberi solusi, kami memberikan layanan yang terpadu dalam setiap layanan Teknologi Informasi yang kami berikan.</li>
					<li>Memberikan produk dan layanan yang berkualitas dengan layanan purna jual yang maksimal kepada setiap pelangan kami.</li>
				</ul>
			</div>
		</div>
	</div>

<section class="services">
		<div class="container">
				<div class="row">
					<div class="col-md-6 col-md-offset-3 text-center">
						<h2>TIM KAMI</h2>
						<p>Kami memiliki tim yang sudah berpengalaman dengan jam terbang yang luas.</p>
                    </div>
                    <?php	foreach ($timku->result() as $row) :	?>
					
					<div class="col-md-4">
						<img src="<?php echo base_url().'assets/images/'.$row->gambar;?>"  alt="Free HTML5 Bootstrap Template" class="img-responsive">
						<h3><?php echo $row->name_team;?></h3>
						<h4><?php echo $row->jabatan;?></h4>
						<p><?php echo $row->descripsi_team;?></p>
						
                    </div>
                    <?php endforeach;?>   
				</div>
		</div>
    </div>
  
    <h2 class="section-title">SERVICES</h2>
            <p class="desc">Praesent faucibus ipsum at sodales blandit</p>
            <div class="container">
                <div class="row">
                <?php
                        foreach ($service->result_array() as $j) :
                            $service_id=$j['service_id'];
                            $service_judul=$j['service_judul'];
                            $service_deskripsi=$j['service_deskripsi'];
                            $service_tanggal=$j['service_tanggal'];
                            $service_author=$j['service_author'];
                            $service_image=$j['service_image'];
                            $icon=$j['icon'];
                         ?>  
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="media">
                            <div class="media-left media-middle">
                                <i class="<?php echo $icon; ?>"></i>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading"><?php echo $service_judul; ?></h4>
                                <p><?php echo limit_words($service_deskripsi,15).'...';?></p>
                                <p><a href="<?php echo base_url().'services/read_service/'.$service_id;?>" class="btn btn-primary btn-outline with-arrow" style="background-color: rgb(10, 236, 236);border-color: rgb(10, 236, 236)">Learn more</a></p>
                            </div>
                        </div>
                    </div>
                    <?php endforeach;?>    
 </section>
</html>
    <?php $this->load->view('front/v_footer');?>
    