<?php
    print '<h1>Checkout Details</h1>';
    print '<form action="php/success.php" method="post" target="_blank">';
    print '<table id="checkout-table">';
    print '<tr>';
    print '<td><label for="">Full Name: <span class="asterisk">*</span></label></td>';
    print '<td><input type="text" name="name" required/></td>';
    print '</tr>';
    print '<tr>';
    print '<td><label for="address">Address: <span class="asterisk">*</span></label></td>';
    print '<td><input type="text" name="address" required/></td>';
    print '</tr>';
    print '<tr>';
    print '<td><label for="suburb">Suburb: <span class="asterisk">*</span></label></td>';
    print '<td><input type="text" name="suburb" required/></td>';
    print '</tr>';
    print '<tr>';
    print '<td><label for="state">State: <span class="asterisk">*</span></label></td>';
    print '<td><input type="text" name="state" required/></td>';
    print '</tr>';
    print '<tr>';
    print '<td><label for="country">Country: <span class="asterisk">*</span></label></td>';
    print '<td><input type="text" name="country" required/></td>';
    print '</tr>';
    print '<tr>';
    print '<td><label for="email">Email: <span class="asterisk">*</span></label></td>';
    print '<td><input type="email" name="email" required/></td>';
    print '</tr>';
    print '</table>';
    print '<input type="submit" value="Purchase" id="purchase-btn"/>';
    print '</form>';
?>