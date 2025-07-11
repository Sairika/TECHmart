<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Credit Card Payment</title>
    <link rel="stylesheet" href="./credit_card.css">
</head>
<body>
    <div id="page" class="site">
        <div class="container">
            <div class="outer">
                <header>
                    <div class="logo"><a href="#"><strong>.web</strong>Pay</a></div>
                    <div class="time-left">
                        <time id="time">03.00</time>
                        <span>time left!</span>
                    </div>
                </header>
                <section class="payment">
                    <div class="left">
                        <form action="" method="post">
                            <div class="card-number">
                                <p>Card Number</p>
                                <span>Enter the 16-digit card number on the card</span>
                                <div class="card-number-box">
                                    <input type="text" id="credit-card" autocomplete="off" placeholder="xxxx-xxxx-xxxx-xxxx">
                                    <span class="cc-logo"></span>
                                </div>
                            </div>
                            <div class="card-holder">
                                <div class="text">
                                    <p>Card Name Holder</p>
                                    <span>Enter name card holder on the card</span>
                                </div>
                                <div class="input">
                                    <input type="text" id="card-name" autocomplete="off" required></div>
                            </div>
                            <div class="card-cvv">
                                <div class="text">
                                    <p>CVV Number</p>
                                    <span>Enter the 3 or 4 digits number on the card</span>
                                </div>
                                <div class="input">
                                    <input type="number" data-maxlength="4" required oninput="this.value=this.value.slice(0,this.dataset.maxlength)" />
                                </div>
                            </div>
                            <div class="card-expiration">
                                <div class="text">
                                    <p>Expiry Date</p>
                                    <span>Enter the expiration date of the card</span>
                                </div>
                                <div class="input">
                                  <input type="number" id="exp-month" data-maxlength="2" placeholder="MM" required oninput="this.value=this.value.slice(0,this.dataset.maxlength)" />
                                  <strong> / </strong>
                                  <input type="number" id="exp-year" data-maxlength="2" placeholder="YY" required oninput="this.value=this.value.slice(0,this.dataset.maxlength)" />
                                </div>
                            </div>
                            <button>Pay Now</button>
                        </form>
                    </div>
                    <div class="right">
                        <div class="card-virtual">
                            <p class="cc-logo"></p>
                            <p class="name-holder">Jhon Doe</p>
                            <p class="chip">
                                <img src="./Photos/bank-cards.png" alt="">
                            </p>
                            <p class="highlight">
                                <span class="last-digit" id="card-number">.... .... .... 4567</span>
                                <span class="expiry">
                                    <span class="exp-month">11</span>/
                                    <span class="exp-year">25</span>
                                </span>
                            </p>
                        </div>
                        <div class="receipt">
                            <ul>
                                <li>
                                    <span>Order Number</span>
                                    <span>15042022</span>
                                </li>
                                <li>
                                    <span>Product</span>
                                    <span>iPhone 14 Pro</span>
                                </li>
                                <li>
                                    <span>Vat(10%)</span>
                                    <span>$50.00</span>
                                </li>
                            </ul>
                            <div class="total">
                                <p class="price"><strong>1,255</strong>USD</p>
                                <p>Total you have to pay</p>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
    <script>

    </script>
</body>
</html>