<h2>Top truyện tranh nổi bật</h2>
<div class="row">
  	<?php
  		foreach ($data as $manga) {
  			?>
  			<div class="item col-md-3 col-sm-3 col-xs-6">
  			<div class="project-list">
  				<div class="project">
  					<div class="project__card">
  					<a href="Mangas/detail_manga" class="project__image"><img src="images/PHOTOSHOP/<?= $manga->images?>" width="100%" height="200px" alt="<?= $manga->title ?>"></a>
					<div class="project__detail">
						<a href='/truyen24/mangas/' class="project__title"><img src="images/PHOTOSHOP/read.png" ></a>
						<small class="project__category"><a href="#"><?= $manga->author?></a></small>
					</div>
					<h3 class="ellipsis"><a href="#"><?= $manga->title ?></a></h3>
				</div>
			</div>			
		</div>
    </div>
	<?php
  		}
  	?>
  	<ul class="pager">
  		<?php
	    echo '<li>'.$this->Paginator->prev('« Previous').'</li>'; //Hiện thj nút Previous
	    echo " <li class='active'>".$this->Paginator->numbers()." </li>";//Hiển thi các số phân trang
	    echo '<li>'.$this->Paginator->next(' Next »').'</li>'; //Hiển thị nút next
		?>
			
		 </ul>
		 
  </div>           