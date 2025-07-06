<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Tracking</title>
    <link rel="stylesheet" href="order_tracking.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="details">
            <div class="order">
                <h1>order <span>x3yh45</span></h1>
            </div>
            <div class="date">
                <p>Expected Arrival: 22/07/2023</p>
                <p>USPS<b>234083243282678996</b></p>
            </div>
        </div>
        <div class="truck">
            <ul id="progress" class="text-center">
                <li class="active"></li>
                <li class="active"></li>
                <li class="active"></li>
                <li class="active"></li>
                <li></li>
            </ul>
        </div>
        <div class="lists">
            <div class="list">
                <i class="ri-shopping-cart-line ri-4x"></i>
                <p>Order<br>Processed</p>
            </div>
            <div class="list">
                <i class="ri-shopping-bag-line ri-4x"></i>
                <p>Order<br>Shipped</p>
            </div>
            <div class="list">
                <i class="ri-truck-line ri-4x"></i>
                <p>Order<br>Enroute</p>
            </div>
            <div class="list">
                <i class="ri-home-line ri-4x"></i>
                <p>Order<br>Arrived</p>
            </div>
            <div class="list">
            <i class="ri-bank-card-line ri-4x"></i>
                <p>Order<br>Completed</p>
            </div>
        </div>
    </div>
</body>
</html>