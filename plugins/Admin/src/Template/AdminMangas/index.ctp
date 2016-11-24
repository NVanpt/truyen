<?php
echo $this->Html->link('Thêm truyện mới', array('controller' => 'AdminMangas', 'action' => 'add')).'&nbsp;&nbsp;&nbsp;';
?>

<table class='table table-bordered'>
  <caption><h2>Danh sách truyện</h2></caption>
  <tr>
    <th>Hành động</th>
    <th>Mã truyện</th>
    <th>Tên truyện</th>
    <th>Slug</th>
    <th>Author</th>
    <th>Images</th>
    <th>Description</th>
    <th>Status</th>
 
  </tr>
  <?php
  foreach ($data as $product) {
      echo "<tr>";
      echo "<td>" . $this->Html->link('Sửa', array('controller' => 'AdminMangas', 'action' => 'edit', $product->id));
      echo "<br/>" . $this->Html->link('Xóa', array('controller' => 'AdminMangas', '' => 'delete', $product->id), array('confirm' => 'Are you sure?')) . "</td>";
      echo "<td>".$product->categories_id."</td>";
      echo "<td>".$product->title."</td>";
      echo "<td>".$product->slug."</td>";
      echo "<td>".$product->author."</td>";
      echo "<td>".$product->images."</td>";
      echo "<td>".$product->decription."</td>";
      echo "<td>".$product->status."</td>";
      echo "</tr>";
  }
  ?>
</table>
<ul class="pager">
  		<?php
	    echo '<li>'.$this->Paginator->prev('« Previous').'</li>'; //Hiện thj nút Previous
	    echo " <li class='active'>".$this->Paginator->numbers()." </li>";//Hiển thi các số phân trang
	    echo '<li>'.$this->Paginator->next(' Next »').'</li>'; //Hiển thị nút next
		?>
			
		 </ul>