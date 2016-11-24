<?php
echo $this->Html->link('Thêm sản phẩm mới', array('controller' => 'products', 'action' => 'add')).'&nbsp;&nbsp;&nbsp;';
?>
<div style="float: right">
  <table>
    <tr>
       
    </tr>
  </table>
</div>
<table>
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
      echo "<td>" . $this->Html->link('Sửa', array('controller' => '', 'action' => '', $product->id));
      echo "<br/>" . $this->Html->link('Xóa', array('controller' => '', '' => 'delete', $product->id), array('confirm' => 'Are you sure?')) . "</td>";
      echo "<td>".$product->categories_id."</td>";
      echo "<td>".$product->title."</td>";
      echo "<td>".$product->slug."</td>";
      echo "<td>".$product->author."</td>";
      echo "<td>".$product->images."</td>";
      echo "</tr>";
  }
  ?>
</table>
