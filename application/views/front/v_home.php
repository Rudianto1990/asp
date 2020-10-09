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
        <h2 class="section-title">TENTANG KAMI</h2>
            <p class="desc">Praesent faucibus ipsum at sodales blandit</p>
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="box">
                            <h3 href=>PT. AGUNG SATYA PERSADA </h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin id pulvinar magna. Aenean accumsan iaculis lorem, nec sodales lectus auctor tempor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin id pulvinar magna. Aenean accumsan iaculis lorem, nec sodales lectus auctor tempor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin id pulvinar magna. Aenean accumsan iaculis lorem, nec sodales lectus auctor tempor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin id pulvinar magna. Aenean accumsan iaculis lorem, nec sodales lectus auctor tempor.</p>
                            <p><a href="<?php echo base_url().'about'?>" class="btn btn-primary btn-outline with-arrow" style="background-color: rgb(10, 236, 236);border-color: rgb(10, 236, 236)">Learn more</a></p>
                        </div>
                    </div>      
   

      <!-- Services-->
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
        
        <section class="home-area">
            <div class="home_content">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12"><h2 class="sub_title">LATEST NEWS</h2></div>
                        
                        <div class="home_list">
                            <ul>
                            <?php
                        foreach ($post->result_array() as $j) :
                            $post_id=$j['tulisan_id'];
                            $post_judul=$j['tulisan_judul'];
                            $post_isi=$j['tulisan_isi'];
                            $post_author=$j['tulisan_author'];
                            $post_image=$j['tulisan_gambar'];
                            $post_tglpost=$j['tanggal'];
                            $post_slug=$j['tulisan_slug'];
                         ?>  
                                <li class="col-md-3 col-sm-6 col-xs-12">
                                    <div class="thumbnail">
                                        <img src="<?php echo base_url().'assets/images/'.$post_image;?>" class="img-responsive" alt="Post">
                                        <div class="caption">
                                            <h3><a href="<?php echo base_url().'artikel/'.$post_slug;?>"><?php echo $post_judul;?></a></h3>
                                            <span><?php echo $post_tglpost.' | '.$post_author;?></span>
                                            <?php echo limit_words($post_isi,20).'...';?>
                                            <a href="<?php echo base_url().'artikel'?>" class="btn btn-link" role="button">More</a>   
                                        </div>
                                    </div>                                    
                                </li>  
                                <?php endforeach;?>              
                            </ul>
                            
                        </div>
                    
                        
                        <div class="col-sm-9 home_bottom">
                            <h2 class="sub_title">REFERENCES</h2>
                            <div class="clearfix"></div>
                            <div class="row">
                                <div class="carousel slide" data-ride="carousel" data-type="multi" data-interval="6000" id="myCarousel">
                                    <div class="carousel-inner">
                                        <div class="item active">
                                            <div class="col-md-2 col-sm-6 col-xs-12 p10">
                                                <a href="#"><img src="<?php echo base_url().'front/img/l1.jpg'?>" class="img-responsive" alt="Reference"></a>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="col-md-2 col-sm-6 col-xs-12 p10">
                                                <a href="#"><img src="<?php echo base_url().'front/img/l2.jpg'?>" class="img-responsive" alt="Reference"></a>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="col-md-2 col-sm-6 col-xs-12">
                                                <a href="#"><img src="<?php echo base_url().'front/img/l3.jpg'?>" class="img-responsive" alt="Reference"></a>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="col-md-2 col-sm-6 col-xs-12">
                                                <a href="#"><img src="<?php echo base_url().'front/img/l4.jpg'?>" class="img-responsive" alt="Reference"></a>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="col-md-2 col-sm-6 col-xs-12">
                                                <a href="#"><img src="<?php echo base_url().'front/img/l5.jpg'?>" class="img-responsive" alt="Reference"></a>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="col-md-2 col-sm-6 col-xs-12">
                                                <a href="#"><img src="<?php echo base_url().'front/img/l6.jpg'?>" class="img-responsive" alt="Reference"></a>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="col-md-2 col-sm-6 col-xs-12">
                                                <a href="#"><img src="<?php echo base_url().'front/img/l7.jpg'?>" class="img-responsive" alt="Reference"></a>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="col-md-2 col-sm-6 col-xs-12">
                                                <a href="#"><img src="<?php echo base_url().'front/img/l8.jpg'?>" class="img-responsive" alt="Reference"></a>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="col-md-2 col-sm-6 col-xs-12 p10">
                                                <a href="#"><img src="<?php echo base_url().'front/img/l1.jpg'?>" class="img-responsive" alt="Reference"></a>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="col-md-2 col-sm-6 col-xs-12 p10">
                                                <a href="#"><img src="<?php echo base_url().'front/img/l2.jpg'?>" class="img-responsive" alt="Reference"></a>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="col-md-2 col-sm-6 col-xs-12">
                                                <a href="#"><img src="<?php echo base_url().'front/img/l3.jpg'?>" class="img-responsive" alt="Reference"></a>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="col-md-2 col-sm-6 col-xs-12">
                                                <a href="#"><img src="<?php echo base_url().'front/img/l4.jpg'?>" class="img-responsive" alt="Reference"></a>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="col-md-2 col-sm-6 col-xs-12">
                                                <a href="#"><img src="<?php echo base_url().'front/img/l5.jpg'?>" class="img-responsive" alt="Reference"></a>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="col-md-2 col-sm-6 col-xs-12">
                                                <a href="#"><img src="<?php echo base_url().'front/img/l6.jpg'?>" class="img-responsive" alt="Reference"></a>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="col-md-2 col-sm-6 col-xs-12">
                                                <a href="#"><img src="<?php echo base_url().'front/img/l7.jpg'?>" class="img-responsive" alt="Reference"></a>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <div class="col-md-2 col-sm-6 col-xs-12">
                                                <a href="#"><img src="<?php echo base_url().'front/img/l8.jpg'?>" class="img-responsive" alt="Reference"></a>
                                            </div>
                                        </div>                                        
                                    </div>
                                    <a class="left carousel-control" href="#myCarousel" data-slide="prev"><i class="glyphicon glyphicon-chevron-left"></i></a>
                                    <a class="right carousel-control" href="#myCarousel" data-slide="next"><i class="glyphicon glyphicon-chevron-right"></i></a>
                                </div>
                            </div>                            
                        </div>
                        <div class="col-sm-3">
                            <h2 class="sub_title w10">CALL YOU</h2>
                            <div class="clearfix"></div>
                           
                            <div class="login-form-1">
                            
                                <form method="post" action="<?php echo base_url().'call/call_you'?>" id="login-form" class="text-left">
                                    <div class="login-form-main-message"></div>
                                    <div class="main-login-form">
                                        <div class="login-group">
                                            <div class="form-group">
                                                <label for="call_name" class="sr-only">Name</label>
                                                <input type="text" class="form-control" id="call_name" name="call_name" placeholder="Name">
                                            </div>
                                            <div class="form-group">
                                                <label for="phone_number" class="sr-only">Phone Number</label>
                                                <input type="text" class="form-control" id="phone_number" name="phone_number" placeholder="Phone Number">
                                            </div>
                                        </div>
                                        <button type="submit" class="login-button"><i class="fa fa-chevron-right"></i></button>
                                    </div>
                                </form>
                            </div>                            
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <?php $this->load->view('front/v_footer');?>
 