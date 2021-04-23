function showItems(category) {
    var show = document.getElementById(category);
    var divs = document.getElementsByClassName("item-container");

    // Hide all divs
    for (let i = 0; i < divs.length; i++) {
        divs[i].style.display = "none";
    }

    // Show the one div with the passed ID
    show.style.display = "grid";
}

function viewDetails(id) {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("empty-details-text").style.color = "white";
            document.getElementById("details-container").innerHTML =
                xhttp.responseText;
        }
    };
    var link = "php/get-details.php?id=" + id;
    xhttp.open("GET", link);
    xhttp.send();
}

function addToCart(id) {
    var qty = document.getElementById("item-qty").value;
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("cart-empty-text").style.color = "white";
            document.getElementById("header").style.color = 'black';
            document.getElementById("cart-table").innerHTML +=
                xhttp.responseText;
                console.log(xhttp.responseText);
        }
    };
    var link = "php/add-to-cart.php?id=" + id + "&qty=" + qty;
    xhttp.open("GET", link);
    xhttp.send();
}

function clearCart() {
    var cart = document.getElementById("cart-table");
    cart.innerHTML = '<tr id="header"><th>Item Name</th><th>Price</th><th>Qty</th><th>Total Price</th></tr>';
    document.getElementById("header").style.color = 'white';
}