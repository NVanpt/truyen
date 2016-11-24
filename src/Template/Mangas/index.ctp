
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        Thế giới truyện
    </title>
    <?= $this->Html->meta('icon') ?>

    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <?= $this->Html->css('style.css') ?>
     <?= $this->Html->css('animate.min.css') ?>
      <?= $this->Html->css('bootstrap.min') ?>
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
        <?= $this->Html->script('bootstrap.min') ?>
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
            	<div id="pagination_list_container" class="ajax-response" >
					<!-- Indicators -->
					<!-- <ol class="carousel-indicators">
					  <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
					  <li data-target="#myCarousel" data-slide-to="1"></li>
					  <li data-target="#myCarousel" data-slide-to="2"></li>
					  <li data-target="#myCarousel" data-slide-to="3"></li>
					</ol> -->

					<!-- Wrapper for slides -->
					<div class="carousel-inner" role="listbox">
					  <div class="item active" id='page'>
								<div class="row">
							  	<?php
							  		foreach ($records as $manga) {
							  			?>
							  			<div class="item col-md-3 col-sm-3 col-xs-6">
							  			<div class="project-list">
							  				<div class="project">
							  					<div class="project__card">
							  						
										        <?php
										         echo $this->Html->Link($this->Html->image($manga->images, array(
												 "alt" =>$manga->title,'height'=>200,'width'=>200)),
												 ['controller' => 'mangas', 'action' => 'detail_manga',$manga->id],['class'=>'project__image','escape'=>false]
												);
										         ?>	
												<div class="project__detail">
													
													<?php
										         echo $this->Html->Link($this->Html->image("read.png", array(
												 "alt" =>$manga->title)),
												 ['controller' => 'mangas', 'action' => 'detail_manga'],['class'=>'project__title','escape'=>false]
												);
										         ?>	
													<small class="project__category">
														<a href="#"><?= $manga->author?></a>
													</small>
												</div>
												<h3 class="ellipsis"><a href="#"><?= $manga->title ?></a></h3>
											</div>
										</div>			
									</div>
							    </div>
								<?php
							  		}
							  	?>
							  	
							  </div> 
					  </div>
					</div>
					<div class="clearfix">
 
		    			<ul class="pagination">
		                    <?php
		                    $this->Paginator->templates([
		                        'current' => '<li class="active"><a>{{text}}</a></li>',
		                        'number' => '<li><a href="{{url}}">{{text}}</a></li>'
		                    ]);
		                    echo $this->Paginator->prev('«');
		                    echo $this->Paginator->numbers();
		                    echo $this->Paginator->next('»');
		                    ?>
		                </ul>
					</div>		
					<!-- <nav>
						<ul class="control-box pager" style="margin:0px">
							<li>
								<a data-slide="prev" href="#myCarousel" class=""><i class="glyphicon glyphicon-chevron-left"></i></a>
							</li>
							<li>
								<a data-slide="next" href="#myCarousel" class=""><i class="glyphicon glyphicon-chevron-right"></i></a>
							</li>
						</ul>

					</nav> -->

				  </div>
		   
              </div>
			<!-- the hiện đại-->
			<?php echo $this->element('category')?>
			<!-- the end hiện đại-->
          </div>
          <div class="sidebar col-md-3 col-sm-3 col-xs-12">
		  <!--truyện mới-->
            <div class="sidebar-item">
              <h4 class="widget-title"><img src="images/PHOTOSHOP/hot.gif" width='30%'>Truyện mới</h4>
              <div class="moiup">
              	<?php
              		foreach ($data_5 as $manga) {
              			?>
                <a href=''><img width='75' height='70' src="images/PHOTOSHOP/<?= $manga->images?>" alt="<?= $manga->title ?>"></a>
				
				<?php
              			}
              		?>  	
              </div>
            </div>
			<!-- the end truyện mới-->
			<!-- truyện đọc nhiều-->
            <div class="sidebar-item">
              <h4 class="widget-title">Truyện đọc nhiều nhất</h4>
              <div class="textwidget">
                <ul class="nav nav-pills nav-stacked">
                	<?php
                	$i=1;
                	foreach ($post as $top) {
                		echo "<li><a>".$i.'-'.$top->title."</a></li>";
                		$i++;
                	}
                	
					?>

					<!-- <li class="active"><a href="#">Home</a></li>
					<li><a href="#">Menu 1</a></li>
					<li><a href="#">Menu 2</a></li>
					<li><a href="#">Menu 3</a></li> -->
				  </ul>
              </div>
            </div>
			<!-- the end truyện đọc nhiều-->
			<!-- truyện nổi bật-->
			<div class="sidebar-item">
              <h4 class="widget-title">Truyện nổi bật</h4>
              <div class="textwidget">
                <marquee onmouseover="this.stop();" onmouseout="this.start();" direction="down" height="267px" behavior="scroll" scrollamount="3">
                	<?php
              		foreach ($data_5 as $manga) {
              			?>
                	<a href=''><img width='75' height='70' src="images/PHOTOSHOP/<?= $manga->images?>" alt="<?= $manga->title ?>"></a><br/>
					<a href=''><?= $manga->title ?></a>
				<?php
              			}
              		?>  	
                </marquee>
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
					<?php
	              		foreach ($data_6 as $manga) {
	              			?>
	                	
						<td><?= $manga->name ?></td>
					<?php
	              			}
	              		?>  	
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
	<script>
		$(document).ready(function(){
        $(".pagination a").click(function(){
            $("#page").load(this.href);
            return false;
        })
    });
	</script>
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
