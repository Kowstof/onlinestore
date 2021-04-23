<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <link href="//fonts.googleapis.com/css?family=Raleway:400,300,600" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" href="main.css" />
  <script src="main.js"></script>
  <title>Online Grocery Store</title>
</head>

<body onload="showItems('')">
  <main>
    <h1>Grocery Store</h1>

    <!-- NAVIGATION -->

    <nav>
      <div class="nav-item" onmouseover="showItems('frozen', this)">
        <img src="https://img.icons8.com/ios/96/000000/snowflake.png" />
        <h2>Frozen Food</h2>
      </div>
      <div class="nav-item" onmouseover="showItems('fresh', this)">
        <img src="https://img.icons8.com/ios/80/000000/organic-food.png" />
        <h2>Fresh Food</h2>
      </div>
      <div class="nav-item" onmouseover="showItems('beverages', this)">
        <img src="https://img.icons8.com/ios/96/000000/coffee--v1.png " />
        <h2>Beverages</h2>
      </div>
      <div class="nav-item " onmouseover="showItems('homehealth', this) ">
        <img src="https://img.icons8.com/ios/100/000000/doctors-bag.png" />
        <h2>Home/Health</h2>
      </div>
      <div class="nav-item" onmouseover="showItems('pets', this)">
        <img src="https://img.icons8.com/ios/80/000000/pet-commands-summon.png " />
        <h2>Pet Food</h2>
      </div>
    </nav>

    <!-- FRESH FOOD -->

    <div id="fresh" class="item-container ">
      <!-- Steak -->
      <div class="item">
        <img src="img/steak.jpg" class="item-img" />
        <h3>T-Bone Steak</h3>
        <input type="button" value="1Kg" onclick="viewDetails(3002)">
      </div>
      <!-- Cheese -->
      <div class="item">
        <img src="img/cheese.jpg" class="item-img" />
        <h3>Cheddar Cheese</h3>
        <input type="button" value="500 grams" onclick="viewDetails(3000)">
        <input type="button" value="1Kg" onclick="viewDetails(3001)">
      </div>
      <!-- Oranges -->
      <div class="item">
        <img src="img/oranges.jpg" class="item-img" />
        <h3>Navel Oranges</h3>
        <input type="button" value="Bag of 20" onclick="viewDetails(3003)">
      </div>
      <!-- Bananas -->
      <div class="item">
        <img src="img/bananas.jpg" class="item-img" />
        <h3>Bananas</h3>
        <input type="button" value="1Kg" onclick="viewDetails(3004)">
      </div>
      <!-- Grapes -->
      <div class="item">
        <img src="img/grapes.jpg" class="item-img" />
        <h3>Grapes</h3>
        <input type="button" value="1Kg" onclick="viewDetails(3006)">
      </div>
      <!-- Apples -->
      <div class="item">
        <img src="img/apple.jpg" class="item-img" />
        <h3>Apples</h3>
        <input type="button" value="1Kg" onclick="viewDetails(3007)">
      </div>
      <!-- Peaches -->
      <div class="item">
        <img src="img/peach.jpg" class="item-img" />
        <h3>Peaches</h3>
        <input type="button" value="1Kg" onclick="viewDetails(3005)">
      </div>
    </div>

    <!-- FROZEN FOOD -->

    <div id="frozen" class="item-container">
      <!-- Patties -->
      <div class="item">
        <img src="img/patty.jpg" class="item-img" />
        <h3>Burger Patties</h3>
        <input type="button" value="Pack of 10" onclick="viewDetails(1002)">
      </div>
      <!-- Fish Fingers -->
      <div class="item">
        <img src="img/fish-fingers.png" class="item-img" />
        <h3>Fish Fingers</h3>
        <input type="button" value="500 grams" onclick="viewDetails(1000)">
        <input type="button" value="1Kg" onclick="viewDetails(1001)">
      </div>
      <!-- Prawns -->
      <div class="item">
        <img src="img/prawns.jpg" class="item-img" />
        <h3>Shelled Prawns</h3>
        <input type="button" value="250 grams" onclick="viewDetails(1003)">
      </div>
      <!-- Ice Cream -->
      <div class="item">
        <img src="img/ice-cream.jpg" class="item-img" />
        <h3>Ice Cream Tub</h3>
        <input type="button" value="1L" onclick="viewDetails(1004)">
        <input type="button" value="2L" onclick="viewDetails(1005)">
      </div>
    </div>

    <!-- BEVERAGES -->

    <div id="beverages" class="item-container">
      <!-- Coffee -->
      <div class="item">
        <img src="img/coffee.jpg" class="item-img" />
        <h3>Coffee</h3>
        <input type="button" value="200 grams" onclick="viewDetails(4003)">
        <input type="button" value="500 grams" onclick="viewDetails(4004)">
      </div>
      <!-- Tea -->
      <div class="item">
        <img src="img/tea.jpg" class="item-img" />
        <h3>Earl Grey Tea Bags</h3>
        <input type="button" value="Pack of 25" onclick="viewDetails(4000)">
        <input type="button" value="Pack of 50" onclick="viewDetails(4001)">
        <input type="button" value="Pack of 100" onclick="viewDetails(4002)">
      </div>
      <!-- Chococlate -->
      <div class="item">
        <img src="img/choc.jpg" class="item-img" />
        <h3>Chocolate Bar</h3>
        <input type="button" value="500 gram" onclick="viewDetails(4005)">
      </div>
    </div>

    <!-- HOME/HEALTH -->

    <div id="homehealth" class="item-container">
      <!-- Bath Soap -->
      <div class="item ">
        <img src="img/soap.jpg" class="item-img" />
        <h3>Bath Soap</h3>
        <input type="button" value="Pack of 6" onclick="viewDetails(2002)">
      </div>
      <!-- Panadol -->
      <div class="item ">
        <img src="img/panadol.jpg" class="item-img" />
        <h3>Panadol</h3>
        <input type="button" value="Pack of 24" onclick="viewDetails(2000)">
        <input type="button" value="Bottle of 50" onclick="viewDetails(2001)">
      </div>
      <!-- Washing Powder -->
      <div class="item">
        <img src="img/laundry.png" class="item-img" />
        <h3>Washing Powder</h3>
        <input type="button" value="1Kg" onclick="viewDetails(2005)">
      </div>
      <!-- Bin Bags -->
      <div class="item">
        <img src="img/binbag.jpg" class="item-img" />
        <h3>Garbage Bags</h3>
        <input type="button" value="Pack of 10" onclick="viewDetails(2003)">
        <input type="button" value="Pack of 50" onclick="viewDetails(2004)">
      </div>
      <!-- Bleach -->
      <div class="item">
        <img src="img/bleach.png" class="item-img" />
        <h3>Laundry Bleach</h3>
        <input type="button" value="2L" onclick="viewDetails(2006)">
      </div>
    </div>

    <!-- PET FOOD -->

    <div id="pets" class="item-container">
      <!-- Bird Food -->
      <div class="item">
        <img src="img/birdfood.jpg" class="item-img" />
        <h3>Bird Food</h3>
        <input type="button" value="500g packet" onclick="viewDetails(5002)">
      </div>
      <!-- Cat Food -->
      <div class="item">
        <img src="img/catfood.jpg" class="item-img" />
        <h3>Cat Food</h3>
        <input type="button" value="500g" onclick="viewDetails(5003)">
      </div>
      <!-- Dry Dog Food -->
      <div class="item">
        <img src="img/dogfood.jpg" class="item-img" />
        <h3>Dry Dog Food</h3>
        <input type="button" value="1Kg" onclick="viewDetails(5000)">
        <input type="button" value="5Kg" onclick="viewDetails(5001)">
      </div>
      <!-- Fish Food -->
      <div class="item">
        <img src="img/fishfood.jpg" class="item-img" />
        <h3>Fish Food</h3>
        <input type="button" value="500 gram" onclick="viewDetails(5004)">
      </div>
    </div>
  </main>

  <div id="details">
    <h1>Item Details</h1>
    <p id="empty-details-text">Select an item to view its details.</p>
    <div id="details-container">

        <!--Generated by php -->

    </div>
  </div>

  <div id="cart">
    <h1>Cart</h1>
    <p id="cart-empty-text">Your cart is empty...</p>
    <div id="table-wrapper">
      <table id="cart-table">
  
        <tr id="header">
          <th>
            Item Name
          </th>
          <th>
            Price
          </th>
          <th>
            Qty
          </th>
          <th>
            Total Price
          </th>
        </tr>
  
      </table>
    </div>
    <h3 id="total-price"></h3>
    <input type="button" value="Checkout" onclick="checkout()" id="checkout-btn"/>
    <input type="button" value="Clear Cart" onclick="clearCart()" id="clear-btn"/>

  </div>

  <footer>
    <p>
      All icons on this page are courtesy of
      <a href="https://icons8.com/">icons8.com</a> and their free use
      <a href="https://icons8.com/license">license</a>. All images were sourced from
      <a href="https://unsplash.com/">unsplash.com</a>, who also have a
      <a href="https://unsplash.com/license">free use license</a>.
    </p>
  </footer>
</body>

</html>
