<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
use Cake\Cache\Cache;
use Cake\Core\Configure;
use Cake\Core\Plugin;
use Cake\Datasource\ConnectionManager;
use Cake\Error\Debugger;
use Cake\Network\Exception\NotFoundException;

$this->layout = false;

if (!Configure::read('debug')):
    throw new NotFoundException('Please replace src/Template/Pages/home.ctp with your own version.');
endif;

$cakeDescription = 'CakePHP: the rapid development PHP framework';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        Thế giới truyện
    </title>
    <?= $this->Html->meta('icon') ?>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <?= $this->Html->css('style.css') ?>
     <?= $this->Html->css('animate.min.css') ?>
      <?= $this->Html->css('bootstrap.min.css') ?>
       <?= $this->Html->css('bootstrap-dropdownhover.css') ?>
        <?= $this->Html->css('custom.css') ?>
         <?= $this->Html->css('hover.css') ?>
          <?= $this->Html->css('jquery.qtip.min.css') ?>
           <?= $this->Html->css('jquerysctipttop.css') ?>
            <?= $this->Html->css('tooltipster.bundle.min.css') ?>

     
       <?= $this->Html->script('jquery-1.10.0.min.js') ?>
            <?= $this->Html->script('jssor.slider.mini.js') ?>
             <?= $this->Html->script('main.js') ?>
              <?= $this->Html->script('jquery.tooltip.js') ?>
        <?= $this->Html->script('jquery.min.js') ?>
        <?= $this->Html->script('bootstrap.min.js') ?>
         <?= $this->Html->script('bootstrap-dropdownhover.js') ?>
         <?= $this->Html->script('jquery.qtip.min.js') ?>
         <?= $this->Html->script('jquery.hover3d.js') ?>
          <?= $this->Html->script('script.js') ?>
           

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body>
    <header>
        <?php echo $this->Layout('default');?>
    </header>
	
     <div id="wrapper">
      <div class="container">
        <div class="row">
          <div class="content col-md-9 col-sm-9 col-xs-12">
		  <div class='box-index'>
            <div id="slider1_container" style="position: relative; top: 0px; left: 0px; width: 900px;
             height: 480px; background: #191919; overflow: hidden;">
				<!-- Loading Screen -->
				<div u="loading" style="position: absolute; top: 0px; left: 0px;">
					<div style="filter: alpha(opacity=70); opacity:0.7; position: absolute; display: block;
						background-color: #000000; top: 0px; left: 0px;width: 100%;height:100%;">
					</div>
					<div style="position: absolute; display: block; background: url(../img/loading.gif) no-repeat center center;
						top: 0px; left: 0px;width: 100%;height:100%;">
					</div>
				</div>

				<!-- Slides Container -->
				<div u="slides" style="position: absolute; left: 240px; top: 0px; width: 720px; height: 480px; overflow: hidden;">
					<div>
						<a href='detail_story.html'><img u="image" src="images/ct_nn1.jpg" /></a>
						<img u="thumb" src="images/ct_nn_1.jpg" />
					</div>
					<div>
						<img u="image" src="images/ame_1.jpg" />
						<img u="thumb" src="images/ame_min1.jpg" />
					</div>
					<div>
						<img u="image" src="images/hd_vn1.jpg" />
						<img u="thumb" src="images/hd_vn_min1.jpg" />
					</div>
					<div>
						<img u="image" src="images/hd_nn4.jpg" />
						<img u="thumb" src="images/hd_nn_min4.jpg" />
					</div>
					<div>
						<img u="image" src="images/ct_nn1.jpg" />
						<img u="thumb" src="images/ct_nn_1.jpg" />
					</div>
					<div>
						<img u="image" src="images/ame_1.jpg" />
						<img u="thumb" src="images/ame_min1.jpg" />
					</div>
					<div>
						<img u="image" src="images/hd_vn1.jpg" />
						<img u="thumb" src="images/hd_vn_min1.jpg" />
					</div>
					<div>
						<img u="image" src="images/hd_nn4.jpg" />
						<img u="thumb" src="images/hd_nn_min4.jpg" />
					</div>
					<div>
						<img u="image" src="images/ame_2.jpg" />
						<img u="thumb" src="images/ame_min2.jpg" />
					</div>
					<div>
						<img u="image" src="images/ct_vn1.jpg" />
						<img u="thumb" src="images/ct_vn_min1.jpg" />
					</div>
					
					<div>
						<img u="image" src="images/ct_nn1.jpg" />
						<img u="thumb" src="images/ct_nn_1.jpg" />
					</div>
					<div>
						<img u="image" src="images/hd_nn4.jpg" />
						<img u="thumb" src="images/hd_nn_min4.jpg" />
					</div>
					<div>
						<img u="image" src="images/ame_2.jpg" />
						<img u="thumb" src="images/ame_min2.jpg" />
					</div>
					<div>
						<img u="image" src="images/ct_vn1.jpg" />
						<img u="thumb" src="images/ct_vn_min1.jpg" />
					</div>
				</div>
				<!-- Arrow Left -->
				<span u="arrowleft" class="jssora05l" style="top: 158px; left: 248px;">
				</span>
				<!-- Arrow Right -->
				<span u="arrowright" class="jssora05r" style="top: 158px; right: 8px">
				</span>
				<!-- thumbnail navigator container -->
				<div u="thumbnavigator" class="jssort02" style="left: 0px; bottom: 0px;">
					<!-- Thumbnail Item Skin Begin -->
					<div u="slides" style="cursor: default;">
						<div u="prototype" class="p">
							<div class='w'><div u="thumbnailtemplate" class="t"></div></div>
							<div class='c'></div>
						</div>
					</div>
					<!-- Thumbnail Item Skin End -->
				</div>
			</div>
			</div>
            <div class="box-index ">
              <h2>Top truyện tranh nổi bật</h2>
              <div class="row">
                <div class="item col-md-3 col-sm-3 col-xs-6">
                  <div class="project-list">
					<div class="project">
							<div class="project__card">
								<a href="detail_story.html" class="project__image"><img src="images/PHOTOSHOP/ct_nn1.jpg" width='600' height='400' alt=""></a>
								<div class="project__detail">
									<strong class="project__title"><a href="#">Nàng Bạch Tuyết...</a></strong>
									<small class="project__category"><a href="#">Nguyễn Vân</a></small>
								</div>
							</div>
						</div>
					</div>
                </div>
                <div class="item col-md-3 col-sm-3 col-xs-6">
                 
                  <div class="project-list">
					<div class="project">
							<div class="project__card">
								<a href="images/ct_vn_min1.jpg" class="project__image preview"><img src="images/PHOTOSHOP/ct_vn1.jpg" width='600' height='400' alt=""></a>
								<div class="project__detail">
									<strong class="project__title"><a href="#">Nàng Bạch Tuyết...</a></strong>
									<small class="project__category"><a href="#">Nguyễn Vân</a></small>
								</div>
							</div>
						</div>
					</div>
                </div>
                <div class="item col-md-3 col-sm-3 col-xs-6">
                  
                  <div class="project-list">
					<div class="project">
							<div class="project__card">
								<a href="images/ct_vn_min1.jpg" class="project__image preview"><img src="images/PHOTOSHOP/ct_nn2.jpg" width='600' height='400' alt=""></a>
								<div class="project__detail">
									<strong class="project__title"><a href="#">Nàng Bạch Tuyết...</a></strong>
									<small class="project__category"><a href="#">Nguyễn Vân</a></small>
								</div>
							</div>
						</div>
					</div>
                </div>
                <div class="item col-md-3 col-sm-3 col-xs-6">
                
                  <div class="project-list">
					<div class="project">
							<div class="project__card">
								<a href="images/ct_vn_min1.jpg" class="project__image preview"><img src="images/PHOTOSHOP/ct_vn2.jpg" width='600' height='400' alt=""></a>
								<div class="project__detail">
									<strong class="project__title"><a href="#">Nàng Bạch Tuyết...</a></strong>
									<small class="project__category"><a href="#">Nguyễn Vân</a></small>
								</div>
							</div>
						</div>
					</div>
                </div>
                
              </div>
            </div>
			<!-- the end cổ tích-->
			<!-- the hiện đại-->
			 <div class="box-index">
			  <ul class="nav nav-tabs">
				<li class="active"><a data-toggle="tab" href="#home"><h4>Cổ tích</h4></a></li>
				<li><a data-toggle="tab" href="#menu1"><h4>Hiện đại</h4></a></li>
				<li><a data-toggle="tab" href="#menu2"><h4>Văn học dân gian</h4></a></li>
				<li><a data-toggle="tab" href="#menu3"><h4>Sách hay nên đọc</h4></a></li>
			  </ul>
			  <div class="tab-content">
				<div id="home" class="tab-pane fade in active">
				  <div class="row tab">
					<div class="item col-md-3 col-sm-3 col-xs-6">
                  <div class="project-list">
					<div class="project">
							<div class="project__card">
								<a href="images/ct_vn_min1.jpg" class="project__image preview"><img src="images/PHOTOSHOP/ct_nn1.jpg" width='600' height='400' alt=""></a>
								<div class="project__detail">
									<strong class="project__title"><a href="#">Nàng Bạch Tuyết...</a></strong>
									<small class="project__category"><a href="#">Nguyễn Vân</a></small>
								</div>
							</div>
						</div>
					</div>
                </div>
                <div class="item col-md-3 col-sm-3 col-xs-6">
                 
                  <div class="project-list">
					<div class="project">
							<div class="project__card">
								<a href="images/ct_vn_min1.jpg" class="project__image preview"><img src="images/PHOTOSHOP/ct_vn1.jpg" width='600' height='400' alt=""></a>
								<div class="project__detail">
									<strong class="project__title"><a href="#">Nàng Bạch Tuyết...</a></strong>
									<small class="project__category"><a href="#">Nguyễn Vân</a></small>
								</div>
							</div>
						</div>
					</div>
                </div>
                <div class="item col-md-3 col-sm-3 col-xs-6">
                  
                  <div class="project-list">
					<div class="project">
							<div class="project__card">
								<a href="images/ct_vn_min1.jpg" class="project__image preview"><img src="images/PHOTOSHOP/ct_nn2.jpg" width='600' height='400' alt=""></a>
								<div class="project__detail">
									<strong class="project__title"><a href="#">Nàng Bạch Tuyết...</a></strong>
									<small class="project__category"><a href="#">Nguyễn Vân</a></small>
								</div>
							</div>
						</div>
					</div>
                </div>
                <div class="item col-md-3 col-sm-3 col-xs-6">
                
                  <div class="project-list">
					<div class="project">
							<div class="project__card">
								<a href="images/ct_vn_min1.jpg" class="project__image preview"><img src="images/PHOTOSHOP/ct_vn2.jpg" width='600' height='400' alt=""></a>
								<div class="project__detail">
									<strong class="project__title"><a href="#">Nàng Bạch Tuyết...</a></strong>
									<small class="project__category"><a href="#">Nguyễn Vân</a></small>
								</div>
							</div>
						</div>
					</div>
                </div>
					
				  </div>
				</div>
				<div id="menu1" class="tab-pane fade">
				  <div class="row tab">
					<div class="item col-md-3 col-sm-3 col-xs-6">
	
					  <div class="project-list">
						<div class="project">
							<div class="project__card">
								<a href="images/ct_vn_min1.jpg" class="project__image preview"><img src="images/PHOTOSHOP/hd_vn1.jpg" width='600' height='400' alt=""></a>
								<div class="project__detail">
									<strong class="project__title"><a href="#">Nàng Bạch Tuyết...</a></strong>
									<small class="project__category"><a href="#">Nguyễn Vân</a></small>
								</div>
							</div>
						</div>
					</div>
					</div>
					<div class="item col-md-3 col-sm-3 col-xs-6">
					  
					  <div class="project-list">
						<div class="project">
							<div class="project__card">
								<a href="images/ct_vn_min1.jpg" class="project__image preview"><img src="images/PHOTOSHOP/hd_vn2.jpg" width='600' height='400' alt=""></a>
								<div class="project__detail">
									<strong class="project__title"><a href="#">Nàng Bạch Tuyết...</a></strong>
									<small class="project__category"><a href="#">Nguyễn Vân</a></small>
								</div>
							</div>
						</div>
					</div>
					</div>
					<div class="item col-md-3 col-sm-3 col-xs-6">
				
					  <div class="project-list">
						<div class="project">
							<div class="project__card">
								<a href="images/ct_vn_min1.jpg" class="project__image preview"><img src="images/PHOTOSHOP/hd_vn2.jpg" width='600' height='400' alt=""></a>
								<div class="project__detail">
									<strong class="project__title"><a href="#">Nàng Bạch Tuyết...</a></strong>
									<small class="project__category"><a href="#">Nguyễn Vân</a></small>
								</div>
							</div>
						</div>
					</div>
					</div>
					<div class="item col-md-3 col-sm-3 col-xs-6">
					 
					  <div class="project-list">
						<div class="project">
							<div class="project__card">
								<a href="images/ct_vn_min1.jpg" class="project__image preview"><img src="images/PHOTOSHOP/hd_nn2.jpg" width='600' height='400' alt=""></a>
								<div class="project__detail">
									<strong class="project__title"><a href="#">Nàng Bạch Tuyết...</a></strong>
									<small class="project__category"><a href="#">Nguyễn Vân</a></small>
								</div>
							</div>
						</div>
					</div>
					</div>
					
				  </div>
				</div>
				<div id="menu2" class="tab-pane fade">
				  <div class="row tab">
					
				  </div>
				</div>
				<div id="menu3" class="tab-pane fade">
				  <div class="row tab">
					
					
				  </div>
				</div>
			  </div>
            </div>
			<!-- the end hiện đại-->
          </div>
          <div class="sidebar col-md-3 col-sm-3 col-xs-12">
		  <!--truyện mới-->
            <div class="sidebar-item">
              <h4 class="widget-title"><img src="images/PHOTOSHOP/hot.gif" width='30%'>Truyện mới</h4>
              <div class="moiup">
                <a href=''><img width='75' height='70' src="images/PHOTOSHOP/hd_nn2.jpg"></a>
				<a href=''><img width='75' height='70' src="images/PHOTOSHOP/hd_nn2.jpg"></a>
				<a href=''><img width='75' height='70' src="images/PHOTOSHOP/hd_nn2.jpg"></a>
				<a href=''><img width='75' height='70' src="images/PHOTOSHOP/hd_nn2.jpg"></a>
				<a href=''><img width='75' height='70' src="images/PHOTOSHOP/hd_nn2.jpg"></a>
				<a href=''><img width='75' height='70' src="images/PHOTOSHOP/hd_nn2.jpg"></a>
				<a href=''><img width='75' height='70' src="images/PHOTOSHOP/hd_nn2.jpg"></a>
				<a href=''><img width='75' height='70' src="images/PHOTOSHOP/hd_nn2.jpg"></a>
				<a href=''><img width='75' height='70' src="images/PHOTOSHOP/hd_nn2.jpg"></a>
              </div>
            </div>
			<!-- the end truyện mới-->
			<!-- truyện đọc nhiều-->
            <div class="sidebar-item">
              <h4 class="widget-title">Truyện đọc nhiều nhất</h4>
              <div class="textwidget">
                <ul class="nav nav-pills nav-stacked">
					<li class="active"><a href="#">Home</a></li>
					<li><a href="#">Menu 1</a></li>
					<li><a href="#">Menu 2</a></li>
					<li><a href="#">Menu 3</a></li>
				  </ul>
              </div>
            </div>
			<!-- the end truyện đọc nhiều-->
			<!-- truyện nổi bật-->
			<div class="sidebar-item">
              <h4 class="widget-title">Truyện nổi bật</h4>
              <div class="textwidget">
                <ul class="nav nav-pills nav-stacked">
					<li class="active"><a href="#">Home</a></li>
					<li><a href="#">Menu 1</a></li>
					<li><a href="#">Menu 2</a></li>
					<li><a href="#">Menu 3</a></li>
				  </ul>
              </div>
            </div>
			<!-- the end truyện nổi bật-->
			<!-- thể loại truyện-->
			<div class="sidebar-item">
              <h4 class="widget-title">Thể loại truyện</h4>
              <div class="textwidget">
			   <div class='table-responsive'>
                <table class="table table-striped">
					<tbody>
					  <tr>
						<td>Anna</td>
						<td>Anna</td>
						<td>Anna</td>
					  </tr>
					  <tr>
						<td>Anna</td>
						<td>Debbie</td>
						<td>Debbie</td>
					  </tr>
					  <tr>
						<td>Anna</td>
						<td>John</td>
						<td>John</td>
					  </tr>
					  <tr>
						<td>Anna</td>
						<td>John</td>
						<td>John</td>
					  </tr>
					</tbody>
				  </table>
				 </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
	<!-- to top-->
	<div href="javascript:;" class="button_scroll2top" onclick="page_scroll2top()"><i class="glyphicon glyphicon-chevron-up"></i></div>
	<!-- the end to top-->
	<div id="before_footer">
        <div class="container">
         <ul>
			<li class="first"><b>Liên kết hữu ích:</b></li>
			 <li class="fl">
				<a href="https://waka.vn/the-loai/ngon-tinh-gggDW.html" target="_blank">
					<h3>Truyện ngôn tình</h3>
				</a>
			</li>
			<li>|</li>        
			<li class="fl">
				<a href="https://waka.vn/the-loai/truyen-ngan-gDdOW.html" target="_blank">
					<h3>Truyện ngắn hay</h3>
				</a>
			</li>
			<li>|</li>        
			<li class="fl">
				<a href="https://waka.vn/the-loai/trinh-tham-gXrW.html" target="_blank">
					<h3>Truyện trinh thám</h3>
				</a>
			</li>
			<li>|</li>        
			<li class="fl">
				<a href="https://waka.vn" target="_blank">
					<h3>Ebook hay</h3>
				</a>
			</li>
			<li>|</li>        
			<li class="fl">
				<a href="http://nhac.vn/album/nhac-tru-tinh-grnj" target="_blank">
					<h3>Nhạc vàng chọn lọc</h3>
				</a>
			</li>
        </ul>
        </div>
    </div>
    <footer>
	
    </footer>
</body>
</html>
