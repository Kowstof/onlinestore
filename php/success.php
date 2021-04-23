<?php
    print '<h1>Success!</h1>';
    print '<p>Thank you for your business, '.$_POST['name'].'. Your order has been sent to the following address:</p>';
    print '<table>';
    print '<tr>';
    print '<td>'.$_POST['address'].'</td>';
    print '</tr>';
    print '<tr>';
    print '<td>'.$_POST['suburb'].'</td>';
    print '</tr>';
    print '<tr>';
    print '<td>'.$_POST['state'].'</td>';
    print '</tr>';
    print '<tr>';
    print '<td>'.$_POST['country'].'</td>';
    print '</tr>';
    print '</table>';
    print '<p>A copy of the receipt has also been emailed to '.$_POST['email'].'</p>';
?>