<div id="wrapper">
	<div class='container'>
	 <div class="row">
		  <div class="content col-md-9 col-sm-9 col-xs-12">
			  <div class='box-index'>
				
					<div class="book-img col-xs-3 pdr0">
						
						<?= $this->Html->image($mana->images, array(
						 "alt" => $mana->title,'class'=>'img-responsive',
						 'url' => array('controller' => 'mangas', 'action' => 'detail_manga')
						));?>
					</div>
					<div class="book-info col-xs-9 pdl30">
			
						<h1 class="heading"><?= $mana->title ?></h1>
						<p class="info_text">Tác giả: <a class="author-detail hightlight click_author_info" href="https://waka.vn/tac-gia/nguyet-bot-aKgzW.html"><?= $mana->author ?></a></p>
						<p class="info_text">Thể loại: </p>
						<p class="info_text">Trạng thái: </p>
						<p class="info_text">Ngày cập nhập: </p>
						<p class="info_text">Lượt xem: </p>
						<!--<p class="info_text">Giá bán: <span class="price"></span></p>-->

						<div class="user_action">
							<div class="">
								
								<?= $this->Html->link(
								  'Đọc truyện',
								  '/mangas/read',
								  array('class' => 'btn btn-success')
								);?>
							  </div>
							<div class="wakaicon-wrap">
								
								<a href="javascript:void(0);" class="wakaicon wishlist ga_click " data-gacategory="Book Detail Page" data-gaaction="Click To Save Button" data-galabel="Trong xui có hên-zdMAW" data-status="1" data-content-id="zdMAW" data-content-type="1">Quan tâm </a>
									
								<!--<a class="wakaicon comment" href="#box-comment" title="">Bình luận</a>-->
							</div>
						</div>
						<div id="book-desc" class="boxcontentdesc text-justify short">
							<span class="desc">
								<p>"Tuổi xuân của một người con gái như một đóa hoa bên đồi. Nở rộ chỉ trong phút chốc, thời gian qua đi nhất định sẽ trở nên héo tàn."</p>               
							</span>
							
							<div class="desc-full hidden">
								<p>"Tuổi xuân của một người con gái như một đóa hoa bên đồi. Nở rộ chỉ trong phút chốc, thời gian qua đi nhất định sẽ trở nên héo tàn."</p>               
							</div>
						</div>
						<div class="social-div">
							<div class="fb-like fb_iframe_widget" data-href="https://waka.vn/trong-xui-co-hen-nguyet-bot-bzdMAW.html" data-layout="button_count" data-action="like" data-show-faces="true" data-share="true" fb-xfbml-state="rendered" fb-iframe-plugin-query="action=like&amp;app_id=388905431258956&amp;container_width=0&amp;href=https%3A%2F%2Fwaka.vn%2Ftrong-xui-co-hen-nguyet-bot-bzdMAW.html&amp;layout=button_count&amp;locale=vi_VN&amp;sdk=joey&amp;share=true&amp;show_faces=true"><span style="vertical-align: bottom; width: 141px; height: 20px;"><iframe name="f16de8d35eb31d" width="1000px" height="1000px" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" title="fb:like Facebook Social Plugin" src="https://www.facebook.com/v2.5/plugins/like.php?action=like&amp;app_id=388905431258956&amp;channel=https%3A%2F%2Fstaticxx.facebook.com%2Fconnect%2Fxd_arbiter%2Fr%2FfTmIQU3LxvB.js%3Fversion%3D42%23cb%3Df1aa11efa762f84%26domain%3Dwaka.vn%26origin%3Dhttps%253A%252F%252Fwaka.vn%252Ff1dd344b3db8038%26relation%3Dparent.parent&amp;container_width=0&amp;href=https%3A%2F%2Fwaka.vn%2Ftrong-xui-co-hen-nguyet-bot-bzdMAW.html&amp;layout=button_count&amp;locale=vi_VN&amp;sdk=joey&amp;share=true&amp;show_faces=true" style="border: none; visibility: visible; width: 141px; height: 20px;" class=""></iframe></span></div>
							<!--<div class="fb-like" data-href="" data-layout="standard" data-action="like" data-show-faces="false" data-share="true"></div>-->
						</div>     
                    </div>
					<!-- comment-->
					<div id="box-comment">
						<div class="comment_facbook">
							<div class="fb-comments fb_iframe_widget fb_iframe_widget_fluid" data-href="https://waka.vn/trong-xui-co-hen-nguyet-bot-bzdMAW.html" data-num-posts="6" width="100%" fb-xfbml-state="rendered">
								<span style="height: 173px;">
								<iframe id="f3307c822f7ee2c" name="f1ba717ee51d6a4" scrolling="no" title="Facebook Social Plugin" class="fb_ltr fb_iframe_widget_lift" src="https://www.facebook.com/plugins/comments.php?api_key=388905431258956&amp;channel_url=https%3A%2F%2Fstaticxx.facebook.com%2Fconnect%2Fxd_arbiter%2Fr%2FfTmIQU3LxvB.js%3Fversion%3D42%23cb%3Df1fccf83d57809%26domain%3Dwaka.vn%26origin%3Dhttps%253A%252F%252Fwaka.vn%252Ff1dd344b3db8038%26relation%3Dparent.parent&amp;href=https%3A%2F%2Fwaka.vn%2Ftrong-xui-co-hen-nguyet-bot-bzdMAW.html&amp;locale=vi_VN&amp;numposts=6&amp;sdk=joey&amp;version=v2.5&amp;width=100%25" style="border: none; overflow: hidden; height: 173px; width: 100%;">
								</iframe>
								</span>
							</div>
						</div>           
					</div>
					<!-- the end comment-->
				
			  </div>
			  <!-- linking-->
			<?php echo $this->element('category')?>
			
			  <!-- the linking-->
		  </div>
		   <div class="sidebar col-md-3 col-sm-3 col-xs-12">
			<!--truyện mới-->
             <div class="sidebar-item">
              <h4 class="widget-title">Truyện mới</h4>
              <div class="row">
              	<?php
              		foreach ($data_5 as $manga) {
              			echo "<div class='col-md-4'>";
              			echo $this->Html->image($manga->images, array(
						 "alt" => $manga->title,'class'=>'img-responsive',"width"=>100, "height"=>100,
						 'url' => array('controller' => 'mangas', 'action' => 'detail_manga')
						));
						echo "</div>";
              			?>
                
				
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
					<li class="active"><a href="#">Home</a></li>
					<li><a href="#">Menu 1</a></li>
					<li><a href="#">Menu 2</a></li>
					<li><a href="#">Menu 3</a></li>
				  </ul>
              </div>
            </div>
			<!-- the end truyện đọc nhiều-->
		   </div>
	  </div>
	</div>
	</div>
