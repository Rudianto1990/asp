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
    <div class="bread_area">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <ol class="breadcrumb">
                        <li><a href="#">Home</a></li>
                        <li class="active">Page Title</li>
                    </ol>                    
                </div>
            </div>
        </div>
    </div>
    <main class="site-main page-main">
        <div class="container">
            <div class="row">
            <?php	foreach ($gallery->result() as $row) :	?>
                <section class="page col-sm-12">
                    <!-- <h2 class="page-title"><?php //echo $row->galeri_judul;?></h2> -->
                    <h1 style="margin-bottom:0px;"><a href="#"><?php echo $row->galeri_judul;?></a></h1>
						<small><em>Posted by: <?php echo $row->galeri_author;?> |  | Tanggal Post : <?php echo date("d-m-Y H:i:s",strtotime($row->galeri_tanggal)); ?> </em></small>
							<figure>
								<img src="<?php echo base_url().'assets/images/'.$row->galeri_gambar;?>" alt="" class="img-responsive">
							</figure> <br/>  

                    <div class="entry">
                        <p><?php echo $row->galeri_descripsi;?></p>

                        
                    </div>
                    <?php endforeach;?>   
                </section>
                <!-- <aside class="sidebar col-sm-3">
                    <div class="widget">
                        <h4>SERVICES</h4>
                        <ul>
                            <li class="current"><a href="#" title="">Service Title One</a></li>
                            <li><a href="#" title="">Service Title Two</a></li>
                            <li><a href="#" title="">Service Title Three</a></li>
                            <li><a href="#" title="">Service Title Four</a></li>
                        </ul>
                    </div>
                </aside>
                <aside class="sidebar col-sm-3">
                <div class="widget">
                    <h4>POST POPULER</h4>
                        <a href="#">
						    <img class="media-right" src="<?php echo base_url().'theme/images/image_1.jpg'?>" width="90">
						</a>
                    </div>
                    <div class="media-body">
                         <div class="media-right">
								<h4 class="media-heading"><a href="#">Maju Kena Mundur Kena</a></h4>
								<span><small><i>by: Rudi | Publish date : 22/08/2020</i></small></span>
                    </div>
                </div>

                <div class="widget">
                        <a href="#"> <br/>
						<img class="media-right" src="<?php echo base_url().'theme/images/image_1.jpg'?>" width="90">
						</a>
                    </div>
                    <div class="media-body">
                         <div class="media-right">
								<h4 class="media-heading"><a href="#">Maju Kena Mundur Kena</a></h4>
								<span><small><i>by: Rudi | Publish date : 22/08/2020</i></small></span>
                    </div>
                <div class="widget">
                        <a href="#"> <br/>
						<img class="media-right" src="<?php echo base_url().'theme/images/image_1.jpg'?>" width="90">
						</a>
                    </div>
                <div class="media-body">
                         <div class="media-right">
								<h4 class="media-heading"><a href="#">Maju Kena Mundur Kena</a></h4>
								<span><small><i>by: Rudi | Publish date : 22/08/2020</i></small></span>
                    </div>
                 <br>
                </aside> 
                <aside class="sidebar col-sm-3">
                    <div class="widget">
                       <h4>POST TERBARU</h4>
                        <a href="#">
						    <img class="media-right" src="<?php echo base_url().'theme/images/image_1.jpg'?>" width="90">
						</a>
                    </div>
                    <div class="media-body">
                         <div class="media-right">
								<h4 class="media-heading"><a href="#">Maju Kena Mundur Kena</a></h4>
								<span><small><i>by: Rudi | Publish date : 22/08/2020</i></small></span>
                    </div>
                    </div>
                </aside>
            </div>
        </div> -->
    </main>
    <?php $this->load->view('front/v_footer');?>