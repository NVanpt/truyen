<div class='container'>
<div class="panel panel-default" >
    <div class="panel-heading">
        <div class="page-heading"> <i class="glyphicon glyphicon-edit"></i><b>&nbsp;Thêm truyện</b></div>
            </div> <!-- /panel-heading -->
                <div class="panel-body">
	 
	<?php
		echo '<div class="row">';
		echo '<div class="item col-md-3 col-sm-3 col-xs-6">';
		echo '<div id="main" ng-app="demoApp" ng-controller="RegisterCtrl">';
		echo $this->Form->create($mangas);
		echo $this->Form->hidden('id');
		echo $this->Form->input('title', array('label' => 'Tên truyện','class'=>'form-control','ng-model'=>'name','ng-minlength'=>"6",'ng-maxlength'=>'30','ng-pattern'=>"'/^[a-zA-Z]+$/'"),'required');
		
		echo $this->Form->input('slug', array('label' => 'Slug','class'=>'form-control'));
		echo $this->Form->input('author', array('label' => 'Tác giả','class'=>'form-control','id'=>'from_date'));
		echo $this->Form->input('images', array('label' => 'Images','class'=>'form-control'));
		
		echo $this->Form->input('decription', array('label' => 'Decription','class'=>'form-control'));
		echo $this->Form->button('Thêm');
		echo $this->Form->end();
		echo '</div>';
		echo '</div>';
	echo '</div>';
	
	?>
	 
</div>
</div>