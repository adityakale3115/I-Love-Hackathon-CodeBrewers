<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="homecss.css">
    <link rel="stylesheet" , href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
</head>
<body>
    <!--Header section starts-->
    <header>
        
        <i id="menu-bar" class="fas fa-bars"></i>
        <img src="logo.jpg" style="height:50px; width:50px; border-radius:50%;" alt="">
        <a href="#" class="logo"><span>TokenTrip</span></a>
        
        


        <nav class="navbar">
            <a href="#home">home</a>
            <a href="index.php">book</a>
            <a href="#packages">packages</a>
            <a href="#services">services</a>
            <a href="#gallery">gallery</a>
            <a href="#review">review</a>
            <a href="#contact">contact</a>    
        </nav>

        <div class="icons">
            <i class="fas fa-search" id="search-btn"></i>
            <i class="fas fa-user" id="login-btn"></i>
        </div>


       

    </header>
 <!--Header section starts-->

<!-- login form container  -->

<div class="login-form-container">

    <i class="fas fa-times" id="form-close"></i>

    <form action="">
        <h3>login</h3>
        <input type="email" class="box" placeholder="enter your email">
        <input type="password" class="box" placeholder="Password">
        <input type="submit" value="login now" class="btn">
        <input type="checkbox" id="remember">
        <label for="remember">remember me</label>
        <p>forget password?<a href="#">click here</a></p>
        <p>don't have account ?<a href="#">register now</a></p>
    </form>
</div>

<!-- login ends -->

<!-- home section starts  -->


    <section class="home" id="home">

        <div class="content">
            <h3>Adventure is worthwhile</h3>
            <p>discover new places with us adventure awaits</p>
            <a href="#" class="btn">discover more!</a>
        </div>

        <div class="controls"> 
            <span class="vid-btn active" data-src="/img/5119324_Volleyball_Beach Volley_1280x720.mp4"></span>
            <span class="vid-btn" data-src="/img/1109672_Seashore_Standard_1280x720.mp4"></span>
            <span class="vid-btn" data-src="/img/1474847_People_Culture_1280x720.mp4"></span>
            <span class="vid-btn" data-src="/img/1109675_Seashore_Standard_1280x720.mp4"></span>
            <span class="vid-btn" data-src="/img/1112750_Vacations_Snowy_1280x720.mp4"></span>
        </div>

        <div class="video-container">
            <video src="img/1109675_Seashore_Standard_1280x720.mp4" id="video-slider" loop autoplay muted></video>
        </div>


    </section>

    
    <!-- package section starts  -->
        <section class="packages" id="packages">
            <h1 class="heading">
                <span>p</span>
                <span>a</span>
                <span>c</span>
                <span>k</span>
                <span>a</span>
                <span>g</span>
                <span>e</span>
                <span>s</span>
            </h1>

            <div class="box-container">
                <div class="box">
                    <img src="img/mumbai-main-data.webp" alt="">
                    <div class="content">
                        <h3> <i class="fas fa-map-marker-alt"> Mumbai</i></h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta numquam harum distinctio ad fuga, corrupti quis doloribus et quod inventore saepe, enim modi! Consequatur hic cumque enim culpa, amet impedit?</p>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                        </div>
                        <div class="price">$90 <span>$120</span></div>
                        <a href="#" class="btn">book now</a>
                    </div>
                </div>

                <div class="box">
                    <img src="img/Grand_Canal_Venice.jpg" alt="">
                    <div class="content">
                        <h3> <i class="fas fa-map-marker-alt"> Venice</i></h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta numquam harum distinctio ad fuga, corrupti quis doloribus et quod inventore saepe, enim modi! Consequatur hic cumque enim culpa, amet impedit?</p>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                        </div>
                        <div class="price">$90 <span>$120</span></div>
                        <a href="#" class="btn">book now</a>
                    </div>
                </div>

                <div class="box">
                    <img src="img/featured_231.webp" alt="">
                    <div class="content">
                        <h3> <i class="fas fa-map-marker-alt"> Tokyo</i></h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta numquam harum distinctio ad fuga, corrupti quis doloribus et quod inventore saepe, enim modi! Consequatur hic cumque enim culpa, amet impedit?</p>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                        </div>
                        <div class="price">$90 <span>$120</span></div>
                        <a href="#" class="btn">book now</a>
                    </div>
                </div>

                <div class="box">
                    <img src="img/singapore.cms" alt="">
                    <div class="content">
                        <h3> <i class="fas fa-map-marker-alt"> Singapore</i></h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta numquam harum distinctio ad fuga, corrupti quis doloribus et quod inventore saepe, enim modi! Consequatur hic cumque enim culpa, amet impedit?</p>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                        </div>
                        <div class="price">$90 <span>$120</span></div>
                        <a href="#" class="btn">book now</a>
                    </div>
                </div>

                <div class="box">
                    <img src="img/delhi-itinerary-india-gate-sunset-new-delhi.webp" alt="">
                    <div class="content">
                        <h3> <i class="fas fa-map-marker-alt"> delhi</i></h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta numquam harum distinctio ad fuga, corrupti quis doloribus et quod inventore saepe, enim modi! Consequatur hic cumque enim culpa, amet impedit?</p>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                        </div>
                        <div class="price">$90 <span>$120</span></div>
                        <a href="#" class="btn">book now</a>
                    </div>
                </div>

                <div class="box">
                    <img src="img/social_crop_sydney_opera_house_gettyimages-869714270.webp" alt="">
                    <div class="content">
                        <h3> <i class="fas fa-map-marker-alt"> sydney</i></h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta numquam harum distinctio ad fuga, corrupti quis doloribus et quod inventore saepe, enim modi! Consequatur hic cumque enim culpa, amet impedit?</p>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                        </div>
                        <div class="price">$90 <span>$120</span></div>
                        <a href="#" class="btn">book now</a>
                    </div>
                </div>
            </div>



        </section>




    <!-- package section starts  -->

    <section class="service" id="services">
        <h1 class="heading">
            <span>s</span>
            <span>e</span>
            <span>r</span>
            <span>v</span>
            <span>i</span>
            <span>c</span>
            <span>e</span>
        </h1>

        <div class="box-container">
            <div class="box">
                <i class="fas fa-hotel"></i>
                <h3>affordable hotel</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur dolores ipsa quam repellat, vero exercitationem velit, molestias eos aliquid voluptas adipisci corporis esse quo iure dolore, distinctio beatae odio cupiditate.</p>

            </div>

            <div class="box">
                <i class="fas fa-utensils"></i>
                <h3>food and drink</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur dolores ipsa quam repellat, vero exercitationem velit, molestias eos aliquid voluptas adipisci corporis esse quo iure dolore, distinctio beatae odio cupiditate.</p>
                
            </div>

            <div class="box">
                <i class="fas fa-bullhorn"></i>
                <h3>safety guide</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur dolores ipsa quam repellat, vero exercitationem velit, molestias eos aliquid voluptas adipisci corporis esse quo iure dolore, distinctio beatae odio cupiditate.</p>
                
            </div>

            <div class="box" style="margin-top: 2rem;">
                <i class="fas fa-globe-asia"></i>
                <h3>around the world</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur dolores ipsa quam repellat, vero exercitationem velit, molestias eos aliquid voluptas adipisci corporis esse quo iure dolore, distinctio beatae odio cupiditate.</p>
                
            </div>


            <div class="box" style="margin-top: 2rem;">
                <i class="fas fa-plane"></i>
                <h3>affordable hotel</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur dolores ipsa quam repellat, vero exercitationem velit, molestias eos aliquid voluptas adipisci corporis esse quo iure dolore, distinctio beatae odio cupiditate.</p>
                
            </div>

            <div class="box" style="margin-top: 2rem;">
                <i class="fas fa-hiking"></i>
                <h3>adventure</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur dolores ipsa quam repellat, vero exercitationem velit, molestias eos aliquid voluptas adipisci corporis esse quo iure dolore, distinctio beatae odio cupiditate.</p>
                
            </div>

        </div>
        </section>

        <section class="gallery" id="gallery">
            <h1 class="heading">
                <span>g</span>
                <span>a</span>
                <span>l</span>
                <span>l</span>
                <span>e</span>
                <span>r</span>
                <span>y</span>
            </h1>
    
            <div class="box-container">
                <div class="box">
                    <img src="img/p1.jpg" alt="">
                    <div class="content">
                    <h3>amazing places</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Placeat eius consequatur tempora optio dolor ullam ea cupiditate corporis voluptates, numquam dolorum exercitationem velit nobis rerum distinctio, sint qui sit sunt!</p>
                    <a href="#" class="btn">see more</a>
                </div>
                </div>

                <div class="box">
                    <img src="img/p2.webp" alt="">
                   <div class="content"><h3>amazing places</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Placeat eius consequatur tempora optio dolor ullam ea cupiditate corporis voluptates, numquam dolorum exercitationem velit nobis rerum distinctio, sint qui sit sunt!</p>
                    <a href="#" class="btn">see more</a>
                </div>
                </div>

                <div class="box">
                    <img src="img/p3.jpg" alt="">
                  <div class="content"><h3>amazing places</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Placeat eius consequatur tempora optio dolor ullam ea cupiditate corporis voluptates, numquam dolorum exercitationem velit nobis rerum distinctio, sint qui sit sunt!</p>
                    <a href="#" class="btn">see more</a>
                </div>
            </div>

                <div class="box">
                    <img src="img/p4.webp" alt="">
              <div class="content"> <h3>amazing places</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Placeat eius consequatur tempora optio dolor ullam ea cupiditate corporis voluptates, numquam dolorum exercitationem velit nobis rerum distinctio, sint qui sit sunt!</p>
                    <a href="#" class="btn">see more</a>
                </div>
            </div>
        </div>
</section>

<!-- revive section starts  -->
    
    <!-- contact section starts  -->

        <section class="contact" id="contact">

            <h1 class="heading">
                <span>c</span>
                <span>o</span>
                <span>n</span>
                <span>t</span>
                <span>a</span>
                <span>c</span>
                <span>t</span>
            </h1>


            <div class="row">
            <div class="image">
                <img src="img/contact.png" alt="">
            </div>

            <form action="">
                <div class="inputBox">
                    <input type="text" placeholder="name">
                    <input type="email" placeholder="enter your email">
                </div>

                <div class="inputBox">
                    <input type="number" placeholder="ph no">
                    <input type="text" placeholder="enter subject">
                </div>

                <textarea name="" placeholder="messeage" id="" cols="30" rows="10"></textarea>
                <input type="submit" class="btn" value="send message">


            </form>
        </div>
        </section>




     <!-- contact section ends  -->






        <!-- brand section  -->
            <section class="brand-container">

                <div class="brand-slider">
                    <div class="brand-swiper">
                        <div class="swiper-slide"></div>
                    </div>
                </div>
            </section>

            <!-- footer-section  -->
            <section class="footer">
                <div class="box-container">
                    <div class="box">
                        <h3>about us</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti minus dolorem minima placeat nisi perferendis nobis ipsa sit dolore ea error, laborum magni possimus quia reiciendis porro voluptatibus? Reprehenderit, sint!</p>

                    </div>

                    <div class="box">
                        <h3>branch location</h3>
                        <a href="#">india</a>
                        <a href="#">USA</a>                       
                        <a href="#">japan</a>
                        <a href="#">france</a>
                    </div>

                    <div class="box">
                        <h3>QUICK links</h3>
                        <a href="#home">home</a>
                        <a href="#package">package</a>                       
                        <a href="#book">book</a>
                        <a href="#service">gallery</a>
                        <a href="#service">review</a>
                        <a href="#service">contact</a>
                    </div>

                    <div class="box">
                        <h3>follow us on</h3>
                        <a href="#home">facebook</a>
                        <a href="#package">instagram</a>                       
                        <a href="#book">twitter</a>
                        <a href="#service">linked in</a>
                    </div>


<h1 class="credit">Created by <span>Aditya Kale</span> | all right reserved</h1>

                </div>

            </section>







    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="/script.js"></script>
</body>
</html>