<?php
  $link = mysqli_connect("aa1qd1fxct9d96u.cxoglp7mcr4i.us-east-1.rds.amazonaws.com", "krystof", "12345678", "online_store");
  $query = "select * from products where product_id = ".$_GET['id'];
  $result = mysqli_query($link, $query);

  while($row = mysqli_fetch_assoc($result)) {
      $total = $row['unit_price'] * $_GET['qty'];
      
      print '<tr class="cart-item-row" id="'.$row['product_id'].'">';
      print '<td>'.$row['product_name'].'</td>';
      print '<td>$'.$row['unit_price'].'</td>';
      print '<td>'.$_GET['qty'].'</td>';
      print '<td class="row-price">$'.number_format($total, 2).'</td>';
      print '</tr>';
  }

  mysqli_close($link);
?>