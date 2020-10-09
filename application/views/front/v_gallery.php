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
     <?php //echo $this->session->flashdata('msg');?> 
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
    <!-- Main -->
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
    
   
    <section class="home-area">
            <div class="home_content">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12"><h2 class="sub_title">GALLERY KAMI</h2></div>
                        <div class="home_list">
                            <ul>
                            <?php	foreach ($data->result() as $row) :	?>
                                <li class="col-md-3 col-sm-6 col-xs-12">
                                    <div class="thumbnail">
                                    <a class="example-image-link" data-lightbox="example-2" data-title="<?php echo $row->galeri_judul;?>"><img class="example-image img-responsive" src="<?php echo base_url().'assets/images/'.$row->galeri_gambar;?>" alt="image-1"/></a>
                                        <div class="caption">
                                            <h3><a href="<?php echo base_url().'gallery/read_gallery/'.$row->galeri_id;?>"><?php echo $row->galeri_judul;?></a></h3>
    
                                            <a href="<?php echo base_url().'gallery/read_gallery/'.$row->galeri_id;?>" class="btn btn-link" role="button">More</a>
                                        </div>
                                    </div>                                        
                                </li>  
                                <?php endforeach;?>                                  
                            </ul>
                        </div>
 
                  
    </section>
    <?php $this->load->view('front/v_footer');?>

