function showItems(category, trigger) {
    var show = document.getElementById(category);
    var divs = document.getElementsByClassName("item-container");
    var navItems = document.getElementsByClassName("nav-item");

    // Hide all divs excepr for chosen one
    for (let i = 0; i < divs.length; i++) {
        divs[i].style.display = "none";
    }
    show.style.display = "grid";

    //Underline only the active nav item
    for (let i = 0; i < navItems.length; i++) {
        navItems[i].classList.remove("nav-item-active");
    }
    trigger.classList.add("nav-item-active");
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

function addToCart(id, qty) {

    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("cart-empty-text").style.color = "white";
            document.getElementById("header").style.color = 'black';
            document.getElementById("cart-table").innerHTML +=
                xhttp.responseText;
            updateTotalPrice();
            showCartButtons();
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
    document.getElementById("cart-empty-text").style.color = 'black';
    document.getElementById("total-price").innerHTML = "";
    document.getElementById("checkout-btn").style.display = 'none';
    document.getElementById("clear-btn").style.display = 'none';
}

// had to make my own validation - submitting a form (and using the browser's inbuilt form validity
// checking) means the page has to refresh. There are ways of stopping the default behavior but its
// too complex for me.
function submitCart(id) {
    var qty = document.getElementById("item-qty").value;

    if (isNaN(qty)) {
        alert("Your quantity is not a number. Please use a quantity between 1 and 20.")
        resetQty();
    }
    else {
        if (qty < 1 || qty > 20) {
            alert("Your quantity is out of bounds. Please use a number between 1 and 20.")
            resetQty();
        }
        else {
            addToCart(id, qty);
        }
    }
}

function resetQty() {
    var qty = document.getElementById("item-qty");
    qty.value = 1;
}

function updateTotalPrice() {
    var priceText = document.getElementById("total-price");
    var totalItems = document.getElementsByClassName("row-price");
    var total = 0;

    for (var i = 0; i < totalItems.length; i++) {
        var price = totalItems[i].textContent.substring(1);
        var formatted = parseFloat(price);
        total += formatted;
        priceText.innerHTML = "Total: $" + total.toFixed(2);
    }

}

function showCartButtons() {
    document.getElementById("checkout-btn").style.display = 'initial';
    document.getElementById("clear-btn").style.display = 'initial';
}