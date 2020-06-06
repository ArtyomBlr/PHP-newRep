<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Singolo</title>
        <link type="text/css" href="{{asset('/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
        <link type="text/css" href="{{asset('/css/style.css')}}" rel="stylesheet"> 
        @stack('styles')
    </head>
    <body>
        @yield('content')
        <header>
            <div class="fixed-header">
                <div class="burger_logo">

                    <div class="burger" style="transform: rotate(0deg);">
                        <span></span>
                    </div>

                    <div class="logo">
                        <h1>SINGOLO</h1><span>*</span>
                    </div>
                    <nav class="navbar">
                        <ul>
                            <li class="li">
                                <a href="#">HOME</a>
                            </li>
                            <li class="li">
                                <a href="#">SERVICES</a>
                            </li>
                            <li class="li">
                                <a href="#">PORTFOLIO</a>
                            </li>
                            <li class="li">
                                <a href="#">ABOUT</a>
                            </li> 
                            <li class="li">
                                <a href="#">CONTACT</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </header>
        <div class="shadowX "></div>
        <main>
            <article class="slider" id="home">
                <div class="buttonl"></div>
                <div class="wrapper_for_slider item">

                        <div class="screen_ver">
                            <img src="img/phonever.png" class="photo-vertical">
                            <div class="off_screen_ver screen_visible"></div>
                        </div>                      
                        <div class="screen_hor">
                            <img src="img/phonehor.png" class="photo-horizontal">
                            <div class="off_screen_hor screen_visible"></div>
                        </div>  

                </div>

                <div class="buttonr"></div>    

                <div class="wrapper_for_slider2 item">
                    <div class="screen_main">
                        <img src="img/phone-group.png" class="phone-group">
                    </div>                      
                </div> 

            </article>
            <article class="services" id="services">
                <div class="block1">
                    <h1>Our Services</h1>
                    <p>
                        Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum. Duis mollis, non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh.
                    </p>
                </div>
                <div class="block2">
                    <div class="positions">
                        <div class="ellipse" id="pen">
                            <img src="img/pen.png">
                        </div>
                        <div class="text">
                            <h1>Custom Design</h1>
                            <p>
                                Curabitur vestibulum eget mauris quis laoreet. Phasellus in quam laoreet, viverra lacus ut, ultrices velit.
                            </p>
                        </div>
                    </div>
                    <div class="positions">
                        <div class="ellipse" id="bulb">
                            <img src="img/bulb.png">
                        </div>
                        <div class="text">
                            <h1>Inovative Ideas</h1>
                            <p>
                                Quisque luctus, quam eget molestie commodo, lacus purus cursus purus, nec rutrum tellus dolor id lorem.
                            </p>
                        </div>
                    </div>
                    <div class="positions">
                        <div class="ellipse" id="heart">
                            <img src="img/heart.png">
                        </div>
                        <div class="text">
                            <h1>Love Is The Answer</h1>
                            <p>
                                Nulla sed nunc et tortor luctus faucibus. Morbi at aliquet turpis, et consequat felis. Quisque condimentum.
                            </p>
                        </div>
                    </div>
                    <div class="positions addpos">
                        <div class="ellipse" id="phone">
                            <img src="img/phone.png">
                        </div>
                        <div class="text">
                            <h1>Responsive Layout</h1>
                            <p>
                                Sed porttitor placerat rhoncus. In at nunc tellus. Maecenas blandit nunc ligula. Praesent elit leo.
                            </p>
                        </div>
                    </div>
                    <div class="positions addpos">
                        <div class="ellipse" id="bubble">
                            <img src="img/bubble.png">
                        </div>
                        <div class="text">
                            <h1>24 / 7 Support</h1>
                            <p>
                                Vivamus vel quam lacinia, tincidunt dui non, vehicula nisi. Nulla a sem erat. Pellentesque egestas venenatis lorem.
                            </p>
                        </div>
                    </div>
                    <div class="positions addpos">
                        <div class="ellipse" id="star">
                            <img src="img/star.png">
                        </div>
                        <div class="text">
                            <h1>Feel Like A Star</h1>
                            <p>
                                Quisque hendrerit purus dapibus, ornare nibh vitae, viverra nibh. Fusce vitae aliquam tellus.
                            </p>
                        </div>
                    </div>                         
                </div>
            </article>
            <article class="portfolio" id="portfolio">
                <div class="portfolio-navigation">
                    <h1>Portfolio</h1>
                    <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.</p>
                    <div class="buttons">   
                        <button id="button-all" class="single-button">All</button>
                        <button class="single-button">Web Design</button>
                        <button class="single-button">Graphic Design</button>
                        <button class="single-button">Artwork</button>
                    </div> 
                </div>
                <div class="portfolio-pictures">
                    <img src="img/pictures/picture1.png" class="picture">
                    <img src="img/pictures/picture2.png" class="picture">
                    <img src="img/pictures/picture3.png" class="picture">
                    <img src="img/pictures/picture4.png" class="picture">
                    <img src="img/pictures/picture5.png" class="picture">
                    <img src="img/pictures/picture6.png" class="picture">
                    <img src="img/pictures/picture7.png" class="picture">
                    <img src="img/pictures/picture8.png" class="picture">
                    <img src="img/pictures/picture9.png" class="picture">
                    <img src="img/pictures/picture10.png" class="picture">
                    <img src="img/pictures/picture11.png" class="picture">
                    <img src="img/pictures/picture12.png" class="picture">
                    <img src="img/pictures/picture12.png" class="picture">
                </div>
            </article>
           
            <article class="about-us" id="about">
                <h1>About Us</h1>
                <p>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum. Duis mollis, non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh.</p>
                <div class="persons">
                    <div class="person">
                        <img src="img/photo1.png" class="person-photo">
                        <h3>Adam Jensen</h3>
                        <p>Quisque luctus, quam eget molestie commodo, lacus purus cursus purus, nec rutrum tellus dolor id lorem.</p>
                        <div class="contacts">
                            <div class="contact-img facebook"></div>
                            <div class="contact-img google"></div>
                            <div class="contact-img twitter"></div>
                            <div class="contact-img linkedin"></div>
                        </div>
                    </div>
                    <div class="person">
                        <img src="img/photo2.png" class="person-photo">
                        <h3>Desmond Miles</h3>
                        <p>Curabitur vestibulum eget mauris quis laoreet. Phasellus in quam laoreet, viverra lacus ut, ultrices velit.</p>
                        <div class="contacts">
                            <div class="contact-img facebook"></div>
                            <div class="contact-img google"></div>
                            <div class="contact-img twitter"></div>
                            <div class="contact-img linkedin"></div>
                        </div>
                    </div>
                    <div class="person">
                        <img src="img/photo3.png" class="person-photo">
                        <h3>Scolara Visari</h3>
                        <p>Nulla sed nunc et tortor luctus faucibus. Morbi at aliquet turpis, et consequat felis. Quisque condimentum.</p>
                        <div class="contacts">
                            <div class="contact-img facebook"></div>
                            <div class="contact-img google"></div>
                            <div class="contact-img twitter"></div>
                            <div class="contact-img linkedin"></div>
                        </div>
                    </div>
                </div>
            </article>
            <div class="block_message" id="message">
                <div class="message">
                    <h3>Письмо отправлено</h3>
                    <p id="theme"></p>
                    <p id="description"></p>
                    <button type="button" id="button_close">OK</button>
                </div>
            </div>
            <article class="form" id="contact">
                
                <h1>Get a Quote</h1>
                <p>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum. Duis mollis, non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh.</p>
                
            </article>
            
        </main>
        <footer>
            <div>

            @if(!Auth::user())
                <li class="menu__item"><a href="{{ route('login') }}">Login</a></li>
                <li class="menu__item"><a href="{{ route('register') }}">Register</a></li>
            @else
            <li class="menu__item">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                               aria-expanded="false" aria-haspopup="true">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="menu__item">
                                <li>
                                    <a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        Logout
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                          style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </li>
                            </ul>
                        </li>
            @endif
            </div>
            <div class="footer-links">

                <div class="contact-img facebook"></div>
                <div class="contact-img google"></div>
                <div class="contact-img twitter"></div>
                <div class="contact-img linkedin"></div>
            </div>
        </footer>
        
        @stack('scripts')
    </body>
</html>