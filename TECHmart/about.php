<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About TECHmart</title>
    <link rel="stylesheet" href="about.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"/>
</head>
<body>
    <div id="page" class="site">
        <div class="container">
            <div class="swiper">
                <div class="swiper-wrapper">
                   <!---1st slide--->
               <div class="item swiper-slide">
                <div class="card sabrina">
                    <div class="head">
                        <div class="blur">
                            <div class="thumbnail"><!--img src="./Photos/IMG_20221108_212220.jpg"--></div>
                            <div class="meta">
                                <h2>TECHmart</h2>
                                <p>an e-commerce site</p>
                            </div>
                        </div>
                    </div>
                    <div class="main">
                        <div class="brief">
                            <strong>About Store</strong>
                            <p>Welcome to TECHmart, your one-stop destination for all your tech needs.Explore our vast collection of cutting
                            -edge gadgets and products,electronics and accessories, curated to elevate your digital lifestyle.Experience the 
                            convenience of shopping with TECHmart,where technology meets affordability & reliability!
                            </p>
                        </div>
                        <div class="socials">
                            <ul>
                                <li><a href="#"><i class="ri-facebook-line"></i></a></li>
                                <li><a href="#"><i class="ri-twitter-line"></i></a></li>
                                <li><a href="#"><i class="ri-instagram-line"></i></a></li>
                                <li><a href="#"><i class="ri-linkedin-line"></i></a></li>
                            </ul>
                        </div>
                        <div class="project">
                            <div class="completed">
                                <strong>1k</strong><span>Total<br>Products</span>
                            </div>
                        </div>
                        <div class="button">
                            <a href="#" onclick="redirectToShop()" class="primary-button">Shop!<span></span></a>
                        </div>
                    </div>
                </div>
               </div>
               <!---2nd slide--->
               <div class="item swiper-slide">
                <div class="card sultana">
                    <div class="head">
                        <div class="blur">
                            <div class="thumbnail"><!--img src="./Photos/IMG_20221108_212220.jpg"--></div>
                            <div class="meta">
                                <h2>TECHmart</h2>
                                <p>an e-commerce site</p>
                            </div>
                        </div>
                    </div>
                    <div class="main">
                        <div class="brief">
                            <strong>Products Details</strong>
                            <p>Discover a world of innovation at TEChmart. From sleek smartphones to powerful laptops, and from 
                                smart home devices to gaming essentials, we offer a wide range of high-quality products to suit your 
                                tech cravings. Each item is handpicked to ensure exceptional performance and style.
                            </p>
                        </div>
                        <div class="socials">
                            <ul>
                                <li><a href="#"><i class="ri-facebook-line"></i></a></li>
                                <li><a href="#"><i class="ri-twitter-line"></i></a></li>
                                <li><a href="#"><i class="ri-instagram-line"></i></a></li>
                                <li><a href="#"><i class="ri-linkedin-line"></i></a></li>
                            </ul>
                        </div>
                        <div class="project">
                            <div class="completed">
                                <strong>1k</strong><span>Total<br>Products</span>
                            </div>
                        </div>
                        <div class="button">
                            <a href="#" onclick="redirectToShop()" class="primary-button">Shop!<span></span></a>
                        </div>
                    </div>
                </div>
               </div>
               <!---3rd slide--->
               <div class="item swiper-slide">
                <div class="card sairika">
                    <div class="head">
                        <div class="blur">
                            <div class="thumbnail"><!--img src="./Photos/IMG_20221108_212220.jpg"--></div>
                            <div class="meta">
                                <h2>TECHmart</h2>
                                <p>an e-commerce site</p>
                            </div>
                        </div>
                    </div>
                    <div class="main">
                        <div class="brief">
                            <strong>Our Services</strong>
                            <p>At TECHmart,we prioritize your satisfaction above all else. Our dedicated team is committed to 
                                providing excellent customer service,including fast and reliable shipping,hassle-free returns,and 24/7
                                technical support. We strive to make your shopping experience seamless and enjoyable.
                            </p>
                        </div>
                        <div class="socials">
                            <ul>
                                <li><a href="#"><i class="ri-facebook-line"></i></a></li>
                                <li><a href="#"><i class="ri-twitter-line"></i></a></li>
                                <li><a href="#"><i class="ri-instagram-line"></i></a></li>
                                <li><a href="#"><i class="ri-linkedin-line"></i></a></li>
                            </ul>
                        </div>
                        <div class="project">
                            <div class="completed">
                                <strong>1k</strong><span>Total<br>Products</span>
                            </div>
                        </div>
                        <div class="button">
                            <a href="#" onclick="redirectToShop()" class="primary-button">Shop!<span></span></a>
                        </div>
                    </div>
                </div>
               </div>
                </div>
                <div class="swiper-pagination"></div> 
                <!-- Add prev and next button -->
                <i class="button-next ri-arrow-left-line"></i>
                <i class="button-prev ri-arrow-right-line"></i>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <script>
        const swiper = new Swiper('.swiper', {
            slidesPerView: 1,
            spaceBetween: 30,
            autoHeight: true,
            loop: true,
            breakpoints: {
                992: {
                    slidesPerView: 3,
                    centeredSlides: true,
                },
                641: {
                    slidesPerView: 2,
                    centeredSlides: false,
                }
            },
            pagination: {
                el: '.swiper-pagination',
            },
            navigation: {
                nextEl: '.button-next',
                prevEl: '.button-prev',
            },
        });
    </script>
    <script>
        function redirectToShop() {
            window.location.href = 'Home.php';
        }
    </script>
</body>
</html>






