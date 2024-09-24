<br><br><br><br><h3>products</h3>
<?php foreach($products as $key => $value):;?>
<?php  echo $value['name'];?>
<br>
<?php  echo $value['category_name'];?>
<br>
<?php  echo $value['subcategory_name'];?>
<?php  endforeach ;?>
