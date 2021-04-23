<?php
  $link = mysqli_connect("aa1qd1fxct9d96u.cxoglp7mcr4i.us-east-1.rds.amazonaws.com", "krystof", "12345678", "online_store");
  $query = "select * from products where product_id = ".$_GET['id'];
  $result = mysqli_query($link, $query);

  while($row = mysqli_fetch_assoc($result)) {
        print '<h3 id="det-name">'.$row['product_name'].'</h3>';
        print '<table >';
        print '<tr>';
        print '<td><b>Unit Size: </b></td>';
        print '<td>'.$row['unit_quantity'].'</td>';
        print '</tr>';
        print '<tr>';
        print '<td><b>Unit Price: </b></td>';
        print '<td>$'.$row['unit_price'].'</td>';
        print '</tr>';
        print '<tr>';
        print '<td><label for="item-qty"><b>Quantity:</b></label></td>';
        print '<td><input type="number" name="item-qty" id="item-qty" value="1" min="1" max="20" required></td>';
        print '</tr>';
        print '</table>';
        print '<input type="submit" value="Add to Cart" id="add-to-cart-btn" onclick="submitCart('.$row['product_id'].')">';
  }

  mysqli_close($link);
?>