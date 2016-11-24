<ul id="tree1" class="tree"> 
  <?php foreach ($categories as $category): ?>
 <li class="branch"><i class="indicator glyphicon glyphicon-plus-sign"></i> <a><?= $category->name?></a>
  <ul> 
   <li style="display: none;">Photoshop</li> 
   <li class="branch" style="display: none;"><i class="indicator glyphicon glyphicon-plus-sign"></i> Dreamweaver 
    <ul> 
     <li>DW CS3</li> 
     <li>DW CS4</li> 
     <li>DW CS5</li> 
     <li>DW CS6</li> 
     <li>DW CC</li> 
    </ul> 
   </li> 
   <li style="display: none;">Fireworks</li> 
  </ul> 
 </li> 
 <li class="branch"><i class="indicator glyphicon glyphicon-plus-sign"></i> LẬP TRÌNH WEB 
  <ul> 
   <li style="display: none;">Lập trình HTML5</li> 
   <li style="display: none;">Lập trình CSS3</li> 
   <li class="branch" style="display: none;"><i class="indicator glyphicon glyphicon-plus-sign"></i>Lập trình PHP 
    <ul> 
     <li class="branch"><i class="indicator glyphicon glyphicon-plus-sign"></i>PHP Frameworks 
      <ul> 
       <li>Zend</li> 
       <li>Codeigniter</li> 
       <li>Laravel</li> 
       <li>CakePHP</li> 
      </ul> 
     </li> 
    </ul> 
   </li>
   <li style="display: none;">Lập trình ASP.NET</li> 
  </ul> 
 </li> 
<?php endforeach; ?>
</ul>
