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
                        <li><a href="#" title="Post">Home</a></li>
                        <li class="active">Blog Kategori</li>
                    </ol>                    
                </div>
            </div>
        </div>
    </div>    
    <main class="site-main category-main">
        <div class="container">
            <div class="row">
                <section class="category-content col-sm-9">
                    <h2 class="category-title">Blog Kategori</h2>
                    <ul class="media-list">
                    <?php
				        foreach ($data->result_array() as $j) :
                            $post_id=$j['tulisan_id'];
                            $post_judul=$j['tulisan_judul'];
                            $post_isi=$j['tulisan_isi'];
                            $post_author=$j['tulisan_author'];
                            $post_image=$j['tulisan_gambar'];
                            $post_tglpost=$j['tanggal'];
                            $post_slug=$j['tulisan_slug'];
                    ?>
                        <li class="media">
                            <div class="media-left">
                                <a href="#" title="Post">
                                    <img class="media-object" src="<?php echo base_url().'assets/images/'.$post_image;?>" style="width:300px;height:200px" alt="Post">
                                </a>
                            </div>
                            <div class="media-body">
                                <h3 class="media-heading"><a href="<?php echo base_url().'artikel/'.$post_slug;?>" title="Post Title"><?php echo $post_judul;?></a></h3>
                                <p><?php echo limit_words($post_isi,40).'...';?></p>
                                <aside class="meta category-meta">
                                    <div class="pull-left">
                                        <div class="arc-comment"><a href="#" title="Comment"><i class="fa fa-comments"></i> 0 Comment</a></div>
                                        <div class="arc-date"><?php echo $post_tglpost.' | '.$post_author;?></div>
                                    </div>
                                    <div class="pull-right">
                                   
                                        <ul class="arc-share">
                                            <li><a href="#" title="Post"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="#" title="Post"><i class="fa fa-twitter"></i></a></li>
                                            <li><a href="#" title="Post"><i class="fa fa-linkedin"></i></a></li>
                                            <li><a href="#" title="Post"><i class="fa fa-google-plus"></i></a></li>
                                        </ul>
                                       
                                    </div>
                                </aside>                                
                            </div>
                            <?php endforeach;?>
                        </li>
                       <br/>
                        <center><?php echo $page;?></center>
                </section>
<aside class="sidebar col-sm-3"> 
        <h4 style="color:#404040;">BLOG KATEGORI</h4>
                <br/>
            <div class="widget">
                    <ul>
                    <?php foreach($kat->result() as $i): ?>
                            <li class="current"><a href="<?php echo base_url().'blog/kategori/'.$i->kategori_id;?>" title=""><?php echo $i->kategori_nama; ?></a></li>
                            <li><a href="#" title="">Jumlah : <?php echo $i->jml;?></a></li>
                            <?php endforeach;?>
                    </ul>
            </div>
     </aside>

<aside class="sidebar col-sm-3">
        <h4 style="color:#404040;" >POST POPULER</h4>
            <br/>
            <?php foreach ($populer->result() as $row) : ?>
                <div class="widget">
                        <a href="<?php echo base_url().'artikel/'.$row->tulisan_slug;?>">
						    <img class="media-right" src="<?php echo base_url().'assets/images/'.$row->tulisan_gambar;?>" width="90">
                        </a>
                </div>
            <div class="media-body">
                         <div class="media-right">
								<h4 class="media-heading"><a href="<?php echo base_url().'artikel/'.$row->tulisan_slug;?>"><?php echo $row->tulisan_judul;?></a></h4>
								<span><small><i>Posted by : <?php echo $row->tulisan_author;?> | Post Date :<?php echo $row->tanggal;?></i></small></span>
                         </div>
            </div>
            <?php endforeach;?>
</aside> 
<br/><br/>

<aside class="sidebar col-sm-3">
               <h4 style="color:#404040;">POST TERBARU</h4>
               <br/>
                <?php foreach ($terbaru->result() as $row) : ?>
                    <div class="widget">
                        <a href="<?php echo base_url().'artikel/'.$row->tulisan_slug;?>">
						    <img class="media-right" src="<?php echo base_url().'assets/images/'.$row->tulisan_gambar;?>" width="90">
						</a>
                    </div>
                    <div class="media-body">
                         <div class="media-right">
								<h4 class="media-heading"><a href="<?php echo base_url().'artikel/'.$row->tulisan_slug;?>"><?php echo $row->tulisan_judul;?></a></h4>
								<span><small><i>Posted By :<?php echo $row->tulisan_author;?> | Post Date :<?php echo $row->tanggal;?></i></small></span>
                       </div>
                    </div>
                    <?php endforeach;?>
                </aside>
            </div>
        </div>
    </main>
    <?php $this->load->view('front/v_footer');?>