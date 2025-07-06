<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Testimonial</title>
    <link rel="stylesheet" href="testimonial.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"/>
</head>
<body>
           <div class="testi">
           <div class="head">
                <h3>Testimonials</h3>
                <p>See what customer are saying.....</p>
            </div>
            <div class="body swiper">
                <ul class="swiper-wrapper">
                <li class="swiper-slide">
                        <div class="wrapper">
                            <div class="thumbnail">
                                <img src="./Photos/customer1.png">
                            </div>
                            <div class="aside">
                                <p>I have been a loyal customer of TECHmart for years now, and I can't imagine buying my gadgets from 
                                    anywhere else. The website offers an excellent user experience, with a clean layout and easy navigation. 
                                    Whenever I need to research a product, TECHmart provides detailed specifications, customer reviews, and
                                     even helpful comparison tools. Their customer service is top-notch too. I once had an issue with a product,
                                      and their support team resolved it quickly and professionally. Thank you, TECHmart, for consistently 
                                      delivering quality service.</p>
                                <div class="name">
                                    <h4>Rafiq Islam</h4>
                                    <p>Top Customer</p>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="swiper-slide">
                        <div class="wrapper">
                            <div class="thumbnail">
                                <img src="./Photos/customer2.png">
                            </div>
                            <div class="aside">
                                <p>TECHmart is my go-to website for all things tech! As a gadget enthusiast, I'm always on the lookout for 
                                    the latest smart devices, and TECHmart never disappoints. Their wide range of products and competitive 
                                    prices make it a one-stop-shop for all my tech needs. I recently purchased a new smartphone from their 
                                    website, and the delivery was prompt and hassle-free. I highly recommend TECHmart to all tech enthusiasts
                                     out there. Keep up the great work! </p>
                                <div class="name">
                                    <h4>Amina Rahman</h4>
                                    <p>Top Customer</p>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="swiper-slide">
                        <div class="wrapper">
                            <div class="thumbnail">
                                <img src="./Photos/customer3.png">
                            </div>
                            <div class="aside">
                                <p>I recently discovered TECHmart, and it has become my favorite online destination for smart devices. 
                                    The website's extensive collection of gadgets covers everything from smartphones to smart home appliances.
                                     I appreciate the honest reviews and ratings provided by other customers, which help me make informed
                                      decisions before making a purchase. The checkout process is seamless, and the products always arrive 
                                      well-packaged and in perfect condition. I would like to thank TECHmart for making my gadget shopping 
                                      experience smooth and enjoyable</p>
                                <div class="name">
                                    <h4>Farida Begum</h4>
                                    <p>Top Customer</p>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="swiper-slide">
                        <div class="wrapper">
                            <div class="thumbnail">
                                <img src="./Photos/undraw_Designer_girl_re_h54c.png">
                            </div>
                            <div class="aside">
                                <p>TECHmart has truly transformed my tech shopping experience. As a busy professional, I don't always
                                     have the time to visit physical stores to explore the latest gadgets. TECHmart brings the convenience 
                                     of online shopping to a whole new level. Their website is mobile-friendly, allowing me to browse and 
                                     make purchases on the go. I recently bought a smartwatch from TECHmart, and I'm extremely satisfied 
                                     with the quality and functionality. I highly recommend TECHmart to anyone looking for a reliable and 
                                     efficient online platform for their tech needs.</p>
                                <div class="name">
                                    <h4>Shakil Ahmed</h4>
                                    <p>Top Customer</p>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="swiper-pagination"></div> 
                <!-- Add prev and next button -->
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>
           </div>
     <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
     <script>
        const swiper = new Swiper('.swiper', {
            autoHeight: true,
            loop: true,
            pagination: {
                el: '.swiper-pagination',
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
        });
    </script>
</body>
</html>