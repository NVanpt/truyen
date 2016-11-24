 <div class="box-index">
			  <ul class="nav nav-tabs">
				<li class="active"><a data-toggle="tab" href="#home"><h4>Cổ tích</h4></a></li>
				<li><a data-toggle="tab" href="#menu1"><h4>Hiện đại</h4></a></li>
				<li><a data-toggle="tab" href="#menu2"><h4>Truyện tranh</h4></a></li>
				<li><a data-toggle="tab" href="#menu3"><h4>Truyện ngắn</h4></a></li>
				<li><a data-toggle="tab" href="#menu3"><h4>Sách hay nên đọc</h4></a></li>
			  </ul>
			  <div class="tab-content">
				<div id="home" class="tab-pane fade in active">
				  <div class="row tab">
				  <?php
              		foreach ($data_1 as $manga) {
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
							
						</div>
					</div>			
						
					</div>
                </div>
                <?php
              		}
              	?>               
				  </div>
				</div>
				<!--the end cotich-->
				<div id="menu1" class="tab-pane fade">
				  <div class="row tab">
				  	<?php
              		foreach ($data_2 as $manga) {
              			?>
					<div class="item col-md-3 col-sm-3 col-xs-6">
	
					  <div class="project-list">
						<div class="project">
							<div class="project__card">
								<a href="images/ct_vn_min1.jpg" class="project__image preview"><img src="images/PHOTOSHOP/<?= $manga->images?>" width='600' height='400' alt="<?= $manga->title ?>"></a>
								<div class="project__detail">
									<a class="project__title"><img src="images/PHOTOSHOP/read.png" ></a>
									<small class="project__category"><a href="#"><?= $manga->author?></a></small>
								</div>
							</div>
						</div>
					</div>
					</div>
					<?php
              			}
              		?>  	
				  </div>
				</div>
				<div id="menu2" class="tab-pane fade">
				  <div class="row tab">
					<?php
              		foreach ($data_3 as $manga) {
              			?>
					<div class="item col-md-3 col-sm-3 col-xs-6">
	
					  <div class="project-list">
						<div class="project">
							<div class="project__card">
								<a href="images/ct_vn_min1.jpg" class="project__image preview"><img src="images/PHOTOSHOP/<?= $manga->images?>" width='600' height='400' alt="<?= $manga->title ?>"></a>
								<div class="project__detail">
									<a class="project__title"><img src="images/PHOTOSHOP/read.png" ></a>
									<small class="project__category"><a href="#"><?= $manga->author?></a></small>
								</div>
							</div>
						</div>
					</div>
					</div>
					<?php
              			}
              		?>  	
				  </div>
				</div>
				<div id="menu3" class="tab-pane fade">
				  <div class="row tab">
					<?php
              		foreach ($data_4 as $manga) {
              			?>
					<div class="item col-md-3 col-sm-3 col-xs-6">
	
					  <div class="project-list">
						<div class="project">
							<div class="project__card">
								<a href="images/ct_vn_min1.jpg" class="project__image preview"><img src="images/PHOTOSHOP/<?= $manga->images?>" width='600' height='400' alt="<?= $manga->title ?>"></a>
								<div class="project__detail">
									<a class="project__title"><img src="images/PHOTOSHOP/read.png" ></a>
									<small class="project__category"><a href="#"><?= $manga->author?></a></small>
								</div>
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
            </div>