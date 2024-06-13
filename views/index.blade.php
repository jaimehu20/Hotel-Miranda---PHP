@extends('layout')

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="./styles/main.css">
    <link rel="stylesheet" href="./styles/sliders.css">
    <link href="https://fonts.googleapis.com/css2?family=Archivo:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Old+Standard+TT:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <title>Hotel Miranda</title>
</head>
<body>
    <p class="slogan">We Make Your Feel Comfortable</p>
    <nav class="navBar">
         <svg class="navBar-burguer" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                <path fill="#000000" d="M0 96C0 78.3 14.3 64 32 64H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32C14.3 128 0 113.7 0 96zM0 256c0-17.7 14.3-32 32-32H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32c-17.7 0-32-14.3-32-32zM448 416c0 17.7-14.3 32-32 32H32c-17.7 0-32-14.3-32-32s14.3-32 32-32H416c17.7 0 32 14.3 32 32z"></path>
        </svg>
        <div class="navBar-logo">
            <a class="logoLink" href="/index.php">
                <div>
                    <p>H</p>
                </div>
                <div>
                    <p>HOTEL</p>
                    <p>MIRANDA</p>
                </div>
            </a>
        </div>
        <div class="navBar-menu">
            <p><a href="./about.php">About Us</a></p>
            <p><a href="./rooms.php">Rooms</a></p>
            <p><a href="./offers.php">Offers</a></p>
            <p><a href="./contact.php">Contact</a></p>
        </div>
        <div class="navBar-icons">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_29_1118)">
                        <path d="M16.2479 11.5229C17.1564 10.5107 17.7143 9.17786 17.7143 7.71429C17.7143 4.56357 15.1507 2 12 2C8.84929 2 6.28571 4.56357 6.28571 7.71429C6.28571 10.865 8.84929 13.4286 12 13.4286C13.1107 13.4286 14.145 13.105 15.0236 12.5543C18.1307 13.725 20.27 16.5686 20.5421 19.8571H3.45857C3.64357 17.6436 4.68214 15.5793 6.37143 14.1064C6.66929 13.8471 6.7 13.3964 6.44071 13.0986C6.18214 12.8014 5.73071 12.77 5.43286 13.0293C3.25071 14.9307 2 17.6793 2 20.5714C2 20.9664 2.32 21.2857 2.71429 21.2857H21.2857C21.6807 21.2857 22 20.9664 22 20.5714C22 16.6529 19.7286 13.1536 16.2479 11.5229ZM7.71429 7.71429C7.71429 5.35071 9.63643 3.42857 12 3.42857C14.3636 3.42857 16.2857 5.35071 16.2857 7.71429C16.2857 10.0779 14.3636 12 12 12C9.63643 12 7.71429 10.0779 7.71429 7.71429Z" fill="#111111"/>
                    </g>
                    <defs>
                        <clipPath id="clip0_29_1118">
                            <rect width="24" height="24" fill="white"/>
                        </clipPath>
                    </defs>
                </svg>
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M20.8084 19.8179L16.3984 15.4078H16.3509C17.7102 13.8051 18.3971 11.7388 18.2679 9.64127C18.1388 7.54372 17.2035 5.57735 15.6579 4.15351C14.1122 2.72966 12.0759 1.95864 9.97477 2.00171C7.87368 2.04479 5.87064 2.89863 4.38464 4.38464C2.89863 5.87064 2.04479 7.87368 2.00171 9.97477C1.95864 12.0758 2.72966 14.1122 4.15351 15.6579C5.57735 17.2035 7.54372 18.1388 9.64127 18.2679C11.7388 18.3971 13.8051 17.7102 15.4078 16.3509C15.4078 16.3509 15.4078 16.3848 15.4078 16.3984L19.8179 20.8084C19.8809 20.872 19.956 20.9225 20.0386 20.9569C20.1213 20.9914 20.21 21.0091 20.2996 21.0091C20.3891 21.0091 20.4778 20.9914 20.5605 20.9569C20.6432 20.9225 20.7182 20.872 20.7813 20.8084C20.8508 20.7468 20.907 20.6716 20.9463 20.5874C20.9856 20.5033 21.0072 20.4119 21.0097 20.319C21.0123 20.2262 20.9957 20.1338 20.9611 20.0475C20.9265 19.9613 20.8745 19.8832 20.8084 19.8179ZM10.1496 16.9072C8.80775 16.9072 7.496 16.5093 6.38026 15.7638C5.26452 15.0183 4.3949 13.9586 3.88139 12.7189C3.36787 11.4792 3.23351 10.115 3.4953 8.79887C3.75709 7.48277 4.40327 6.27385 5.35213 5.32499C6.30099 4.37613 7.50991 3.72995 8.82601 3.46816C10.1421 3.20637 11.5063 3.34073 12.746 3.85425C13.9858 4.36777 15.0454 5.23738 15.7909 6.35312C16.5364 7.46886 16.9344 8.78061 16.9344 10.1225C16.9344 11.0135 16.7589 11.8957 16.4179 12.7189C16.0769 13.5421 15.5772 14.29 14.9472 14.92C14.3171 15.55 13.5692 16.0498 12.746 16.3908C11.9229 16.7317 11.0406 16.9072 10.1496 16.9072Z" fill="#111111"/>
                </svg> 
        </div>
    </nav>
    <header class="header">
        <p class="header-title">THE ULTIMATE LUXURY EXPERIENCE</p>
        <p class="header-title header-title--index">The Perfect Base For You</p>
            <button class="header-button">TAKE A TOUR</button>
            <button class="header-button header-button--mod">LEARN MORE</button>
    </header>
    <section class="dates">
        <div>
            <p class="dates-text">Arrival Date</p>
            <input class="dates-selector" type="date">
        </div>
        <div>
            <p class="dates-text">Departure Date</p>
            <input class="dates-selector dates-selector--mod" type="date">
        </div>
        <button class="dates-button">CHECK AVAILABILITY</button>
    </section>
    <section class="aboutUs">
        <div class="aboutUs-container">
            <div class="aboutUs-description">
                <p class="aboutUs-title">ABOUT US</p>
                <h1>Discover Our Underground.</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                <button>BOOK NOW</button>
                <img src="src/images/hotel.jpg"/>
            </div>
            <div class="aboutUs-team">
                <div>
                    <img src="../src/icons/persons.png"/>
                    <img src="../src/icons/persons2.png"/>
                    <p>Strong Team</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
                </div>  
                <img src="./src/images/luxuryRoom.jpg"/>
                <img src="./src/images/luxuryRoom.jpg"/>
                <div class="aboutUs-team-room">
                    <img src="../src/icons/box.png"/>
                    <p>Luxury Room</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
                </div> 
            </div>
        </div>
        <div class="aboutUs-rooms">
            <h2>ROOMS</h2>
            <h1>Hand Picked Rooms</h1>
            <div class="swiper1">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="swiper-icons">
                            <img src="../src/icons/bedIcon.png"/>
                            <img src="../src/icons/wifIcon.png"/>
                            <img src="../src/icons/carIcon.png"/>  
                            <img src="../src/icons/flake.png"/>    
                            <img src="../src/icons/gym.png"/>    
                            <img src="../src/icons/nosmoke.png"/>    
                            <img src="../src/icons/cocktail.png"/>  
                        </div>
                        <img src="./src/images/room1.jpg"/>
                        <div class="aboutUs-rooms-pricing">
                            <p>Minimal Duplex Room</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
                            <p>$345/Night</p>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="swiper-icons">
                            <img src="../src/icons/bedIcon.png"/>
                            <img src="../src/icons/wifIcon.png"/>
                            <img src="../src/icons/carIcon.png"/>  
                            <img src="../src/icons/flake.png"/>    
                            <img src="../src/icons/gym.png"/>    
                            <img src="../src/icons/nosmoke.png"/>    
                            <img src="../src/icons/cocktail.png"/> 
                        </div>
                        <img src="./src/images/room1.jpg"/>
                        <div class="aboutUs-rooms-pricing">
                            <p>Minimal Duplex Room</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
                            <p>$345/Night</p>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="swiper-icons">
                            <img src="../src/icons/bedIcon.png"/>
                            <img src="../src/icons/wifIcon.png"/>
                            <img src="../src/icons/carIcon.png"/>  
                            <img src="../src/icons/flake.png"/>    
                            <img src="../src/icons/gym.png"/>    
                            <img src="../src/icons/nosmoke.png"/>    
                            <img src="../src/icons/cocktail.png"/> 
                        </div>
                        <img src="./src/images/room1.jpg"/>
                        <div class="aboutUs-rooms-pricing">
                            <p>Minimal Duplex Room</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
                            <p>$345/Night</p>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="swiper-icons">
                            <img src="../src/icons/bedIcon.png"/>
                            <img src="../src/icons/wifIcon.png"/>
                            <img src="../src/icons/carIcon.png"/>  
                            <img src="../src/icons/flake.png"/>    
                            <img src="../src/icons/gym.png"/>    
                            <img src="../src/icons/nosmoke.png"/>    
                            <img src="../src/icons/cocktail.png"/> 
                        </div>
                        <img src="./src/images/room1.jpg"/>
                        <div class="aboutUs-rooms-pricing">
                            <p>Minimal Duplex Room</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
                            <p>$345/Night</p>
                        </div>
                    </div>
                </div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>
            <div class="swiper1 swiper1--desktop">
                <div class="swiper-wrapper swiper-wrapper--mod">
                    <div class="swiper-slide">
                        <div class="swiper-icons">
                            <img src="../src/icons/bedIcon.png"/>
                            <img src="../src/icons/wifIcon.png"/>
                            <img src="../src/icons/carIcon.png"/>  
                            <img src="../src/icons/flake.png"/>    
                            <img src="../src/icons/gym.png"/>    
                            <img src="../src/icons/nosmoke.png"/>    
                            <img src="../src/icons/cocktail.png"/> 
                        </div>
                        <img src="./src/images/room1.jpg"/>
                        <div class="aboutUs-rooms-pricing">
                            <p>Minimal Duplex Room</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
                            <p>$345/Night</p>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="swiper-icons">
                            <img src="../src/icons/bedIcon.png"/>
                            <img src="../src/icons/wifIcon.png"/>
                            <img src="../src/icons/carIcon.png"/>  
                            <img src="../src/icons/flake.png"/>    
                            <img src="../src/icons/gym.png"/>    
                            <img src="../src/icons/nosmoke.png"/>    
                            <img src="../src/icons/cocktail.png"/> 
                        </div>
                        <img src="./src/images/room2.jpg"/>
                        <div class="aboutUs-rooms-pricing">
                            <p>Minimal Duplex Room</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
                            <p>$345/Night</p>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="swiper-icons">
                            <img src="../src/icons/bedIcon.png"/>
                            <img src="../src/icons/wifIcon.png"/>
                            <img src="../src/icons/carIcon.png"/>  
                            <img src="../src/icons/flake.png"/>    
                            <img src="../src/icons/gym.png"/>    
                            <img src="../src/icons/nosmoke.png"/>    
                            <img src="../src/icons/cocktail.png"/> 
                        </div>
                        <img src="./src/images/room1.jpg"/>
                        <div class="aboutUs-rooms-pricing">
                            <p>Minimal Duplex Room</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
                            <p>$345/Night</p>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="swiper-icons">
                            <img src="../src/icons/bedIcon.png"/>
                            <img src="../src/icons/wifIcon.png"/>
                            <img src="../src/icons/carIcon.png"/>  
                            <img src="../src/icons/flake.png"/>    
                            <img src="../src/icons/gym.png"/>    
                            <img src="../src/icons/nosmoke.png"/>    
                            <img src="../src/icons/cocktail.png"/> 
                        </div>
                        <img src="./src/images/room1.jpg"/>
                        <div class="aboutUs-rooms-pricing">
                            <p>Minimal Duplex Room</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
                            <p>$345/Night</p>
                        </div>
                    </div>
                </div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>
        </div>
    </section>
    <section class="introVideo">
        <div class="introVideo-container">
            <p>INTRO VIDEO</p>
            <p>Meet With Our Luxury Place.</p>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat you have to understand this.
            </p>
            <button>BOOK NOW</button>
        </div>
        <div>
            <video src="./src/images/video.mp4#t=15,75" controls></video>
        </div>
    </section>
    <section class="features">
        <p>FACILITIES</p>
        <p>Core Features</p>
        <div class="swiper swiper--mobile">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                    <div class="features-container">
                        <img src="../src/icons/like.png"/>
                        <h1> 01</h1>
                    </div>
                    <p class="swiper-mobile-title">Have High Rating</p>
                    <p class="swiper-mobile-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna..</p>
              </div>
              <div class="swiper-slide">
                <div class="features-container">
                    <img src="../src/icons/clock.png"/>
                    <h1>02</h1>
                </div>
                <p class="swiper-mobile-title">Quiet Hours</p>
                <p class="swiper-mobile-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna..</p>
              </div>
              <div class="swiper-slide">
                <div class="features-container">
                    <img src="../src/icons/ubication.png"/>
                    <h1>03</h1>
                </div>
                <p class="swiper-mobile-title">Best Locations</p>
                <p class="swiper-mobile-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna..</p>
              </div>
              <div class="swiper-slide">
                <div class="features-container">
                    <img src="../src/icons/cancellation.png"/>
                    <h1> 04</h1>
                </div>
                <p class="swiper-mobile-title">Free Cancellation</p>
                <p class="swiper-mobile-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna..</p>
              </div>
              <div class="swiper-slide">
                <div class="features-container">
                    <img src="../src/icons/payment.png"/>
                    <h1>05</h1>
                </div>
                <p class="swiper-mobile-title">Payment Options</p>
                <p class="swiper-mobile-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna..</p>
              </div>
              <div class="swiper-slide">
                <div class="features-container">
                    <img src="../src/icons/discount.png"/>
                    <h1> 06</h1>
                </div>
                <p class="swiper-mobile-title">Special Offers</p>
                <p class="swiper-mobile-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna..</p>
              </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
        <div class="features__grid">
            <div>
                  <div class="features-container">
                    <img src="../src/icons/like.png"/>
                      <h1> 01</h1>
                  </div>
                  <p>Have High Rating</p>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna..</p>
            </div>
            <div>
              <div class="features-container">
                <img src="../src/icons/clock.png"/>
                <h1> 02</h1>
              </div>
              <p>Quiet Hours</p>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna..</p>
            </div>
            <div>
              <div class="features-container">
                <img src="../src/icons/ubication.png"/>
                <h1> 03</h1>
              </div>
              <p>Best Locations</p>
              <p>
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna..
              </p>
            </div>
            <div>
              <div class="features-container">
                <img src="../src/icons/cancellation.png"/>
                <h1> 04</h1>
              </div>
              <p>Free Cancellation</p>
              <p>
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna..
              </p>
            </div>
            <div>
              <div class="features-container">
                <img src="../src/icons/payment.png"/>
                <h1> 05</h1>
              </div>
              <p>Payment Options</p>
              <p>
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna..
              </p>
            </div>
            <div>
              <div class="features-container">
                <img src="../src/icons/discount.png"/>
                <h1> 06</h1>
              </div>
              <p>Special Offers</p>
              <p>
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna..
              </p>
            </div>
        </div>
    </section>
    <section class="menu">
        <img src="../src/icons/donut.png"/>
        <p class="aboutUs-title">MENU</p>
        <p class="menu-title">Our Foods Menu</p>
        <div class="swiper swiper--menu">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="menu-table">
                        <div class="menu-table-item">
                            <img src="./src/images/bacon.png"/>
                        </div>
                        <div class="menu-table-item">
                            <p>Eggs & Bacon</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.</p>
                        </div>
                        <div class="menu-table-item">
                            <img src="./src/images/tea.png"/>
                        </div>
                        <div class="menu-table-item">
                            <p>Tea Or Coffee</p>
                            <p >Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.</p>
                        </div>
                        <div class="menu-table-item">
                            <img src="./src/images/chia.jpg"/>
                        </div>
                        <div class="menu-table-item">
                            <p>Chia Oatmeal</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.</p>
                        </div>
                    </div>
                    <div class="menu-table menu-table--2">
                        <div class="menu-table-item">
                            <img src="./src/images/chia.jpg"/>
                        </div>
                        <div class="menu-table-item">
                            <p>Chia Oatmeal</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.</p>
                        </div>
                        <div class="menu-table-item">
                            <img src="./src/images/fruit.jpg"/>
                        </div>
                        <div class="menu-table-item">
                            <p>Fruit Parfait</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.</p>
                        </div>
                    </div>
                    <div class="menu-table menu-table--3">
                        <div class="menu-table-item">
                            <img src="./src/images/marmalade.jpg"/>
                        </div>
                        <div class="menu-table-item">
                            <p>Marmalade Selection</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.</p>
                        </div>
                        <div class="menu-table-item">
                            <img src="./src/images/cheese.jpg"/>
                        </div>
                        <div class="menu-table-item">
                            <p>Cheese Plate</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.</p>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="menu-table">
                        <div class="menu-table-item">
                            <img src="./src/images/fruit.jpg"/>
                        </div>
                        <div class="menu-table-item">
                            <p>Fruit Parfait</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.</p>
                        </div>
                        <div class="menu-table-item">
                            <img src="./src/images/marmalade.jpg"/>
                        </div>
                        <div class="menu-table-item">
                            <p>Marmalade Selection</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.</p>
                        </div>
                        <div class="menu-table-item">
                            <img src="./src/images/cheese.jpg"/>
                        </div>
                        <div class="menu-table-item">
                            <p>Cheese Plate</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.</p>
                        </div>
                    </div>    
                    <div class="menu-table menu-table--2">
                        <div class="menu-table-item">
                            <img src="./src/images/chia.jpg"/>
                        </div>
                        <div class="menu-table-item">
                            <p>Chia Oatmeal</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.</p>
                        </div>
                        <div class="menu-table-item">
                            <img src="./src/images/fruit.jpg"/>
                        </div>
                        <div class="menu-table-item">
                            <p>Fruit Parfait</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.</p>
                        </div>
                    </div>
                    <div class="menu-table menu-table--3">
                        <div class="menu-table-item">
                            <img src="./src/images/marmalade.jpg"/>
                        </div>
                        <div class="menu-table-item">
                            <p>Marmalade Selection</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.</p>
                        </div>
                        <div class="menu-table-item">
                            <img src="./src/images/cheese.jpg"/>
                        </div>
                        <div class="menu-table-item">
                            <p>Cheese Plate</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.</p>
                        </div>
                    </div>     
                </div>
            </div>
            <div class="swiper-button-prev swiper-button-prev--menu"></div>
            <div class="swiper-button-next swiper-button-next--menu"></div>
        </div>
        <div class="menu-food">
            <div class="swiper swiper--food">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img class="food" src="./src/images/pizza.jpg"/>
                    </div>
                    <div class="swiper-slide">
                        <img class="food" src="./src/images/pizza.jpg"/>
                    </div>
                    <div class="swiper-slide">
                        <img class="food" src="./src/images/pizza.jpg"/>
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </section>
    <section class="achievements">
        <div class="achievements-container">
            <div class="achievements-item">
                <img src="../src/icons/rocket.png"/>
                <p>84k₊</p>
                <p>Projects are Completed</p>
            </div>
            <div class="achievements-item">
                <img src="../src/icons/employees.png"/>
                <p>10M₊</p>
                <p>Active Backers Around World</p>
            </div>
            <div class="achievements-item">
                <img src="../src/icons/graph.png"/>        
                <p>02k₊</p>
                <p>Categories Served</p>
            </div>
            <div class="achievements-item">
                <img src="../src/icons/book.png"/>
                <p>100M₊</p>
                <p>Idea Raised Funds</p>
            </div>
        </div>
    </section>
    <footer class="footer">
        <div class="footer__hotel">
            <div class="footer__head">
                <p class="footer__head__logo">H</p>
                <div class="footer__head__text">
                    <p class="footer__head__text__hotel">HOTEL</p>
                    <p class="footer__head__text__miranda">MIRANDA</p>
                </div>
            </div>
            <p class="footer__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed doing eius mod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitat ion ullamco laboris nisi.</p>
            <div class="footer__icons">
                <svg class="footer__icons__single" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_54_1197)">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M21.0678 0C22.6861 0 24 1.31391 24 2.93222V21.0678C24 22.6861 22.6861 24 21.0678 24H16.0771V14.9571H19.199L19.793 11.0843H16.0771V8.57095C16.0771 7.51144 16.5961 6.47864 18.2605 6.47864H19.95V3.18145C19.95 3.18145 18.4167 2.9198 16.9508 2.9198C13.8905 2.9198 11.8902 4.77459 11.8902 8.13248V11.0843H8.48836V14.9571H11.8902V24H2.93222C1.31391 24 0 22.6861 0 21.0678V2.93222C0 1.31391 1.31386 0 2.93222 0H21.0678V0Z" fill="#777777"/>
                    </g>
                    <defs>
                        <clipPath id="clip0_54_1197">
                            <rect width="24" height="24" fill="white"/>
                        </clipPath>
                    </defs>
                </svg>
                <svg class="footer__icons__single" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_54_1199)">
                        <path d="M21 24H3C1.344 24 0 22.656 0 21V3C0 1.344 1.344 0 3 0H21C22.656 0 24 1.344 24 3V21C24 22.656 22.656 24 21 24ZM9.216 18.096C14.874 18.096 17.97 13.404 17.97 9.342C17.97 9.21 17.97 9.078 17.964 8.946C18.564 8.514 19.086 7.968 19.5 7.35C18.948 7.596 18.354 7.758 17.73 7.836C18.366 7.458 18.852 6.852 19.086 6.132C18.492 6.486 17.832 6.738 17.13 6.876C16.566 6.276 15.768 5.904 14.886 5.904C13.188 5.904 11.808 7.284 11.808 8.982C11.808 9.222 11.838 9.456 11.886 9.684C9.33 9.558 7.062 8.328 5.544 6.468C5.28 6.924 5.13 7.452 5.13 8.016C5.13 9.084 5.676 10.026 6.498 10.578C5.994 10.56 5.52 10.422 5.106 10.194V10.236C5.106 11.724 6.168 12.972 7.572 13.254C7.314 13.326 7.044 13.362 6.762 13.362C6.564 13.362 6.372 13.344 6.186 13.308C6.576 14.532 7.716 15.42 9.06 15.444C8.004 16.272 6.678 16.764 5.238 16.764C4.992 16.764 4.746 16.752 4.506 16.722C5.862 17.586 7.482 18.096 9.216 18.096Z" fill="#BEAD8E"/>
                    </g>
                    <defs>
                        <clipPath id="clip0_54_1199">
                            <rect width="24" height="24" fill="white"/>
                        </clipPath>
                    </defs>
                </svg>
                <svg class="footer__icons__single" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_54_1195)">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M21.0678 0C22.6861 0 24 1.31391 24 2.93222V21.0678C24 22.6861 22.6861 24 21.0678 24H2.93222C1.31391 24 0 22.6861 0 21.0678V2.93222C0 1.31391 1.31386 0 2.93222 0H21.0678V0ZM21.3605 15.4995C21.4035 14.8515 21.3508 14.2328 21.2008 13.6404C21.0494 13.047 20.8066 12.518 20.4667 12.0556C20.1263 11.5922 19.6927 11.2221 19.1646 10.9487C18.6338 10.6718 18.0156 10.536 17.3091 10.536C16.6691 10.536 16.0912 10.6496 15.5671 10.8755C15.0435 11.1027 14.5939 11.4134 14.2144 11.8071C13.8359 12.1985 13.5474 12.6653 13.3397 13.2064C13.1355 13.7456 13.0312 14.3288 13.0312 14.9532C13.0312 15.5989 13.1316 16.1949 13.3308 16.7332C13.5323 17.2742 13.815 17.7349 14.1789 18.1245C14.5526 18.5129 14.9964 18.8102 15.5276 19.0228C16.0593 19.2323 16.6514 19.3388 17.3091 19.3388C18.253 19.3388 19.0625 19.1227 19.7269 18.6891C20.3993 18.2568 20.8914 17.5392 21.2163 16.534H19.1961C19.118 16.7923 18.9156 17.0413 18.5832 17.2742C18.2477 17.5077 17.8483 17.6244 17.3858 17.6244C16.7423 17.6244 16.2457 17.4558 15.9018 17.1203C15.5574 16.7847 15.3346 16.1599 15.3346 15.4995H21.3605ZM8.21423 19.1227C8.73173 19.1227 9.23634 19.0575 9.72225 18.9287C10.214 18.7996 10.652 18.6007 11.0341 18.3305C11.4132 18.0624 11.7207 17.715 11.9466 17.2862C12.1707 16.8624 12.2826 16.3591 12.2826 15.7742C12.2826 15.0526 12.1108 14.4375 11.7607 13.9231C11.4123 13.4123 10.8859 13.0532 10.1772 12.8491C10.6978 12.6023 11.0879 12.285 11.3532 11.898C11.6173 11.5102 11.7487 11.0251 11.7487 10.4446C11.7487 9.90802 11.6603 9.45403 11.485 9.09145C11.3048 8.72353 11.0532 8.4315 10.7319 8.2118C10.4053 7.99214 10.0196 7.83192 9.56695 7.73606C9.11203 7.63711 8.61408 7.58963 8.06245 7.58963H2.625V19.1227H8.21423ZM7.92487 13.9826C8.4712 13.9826 8.91544 14.1082 9.24919 14.3611C9.58158 14.6172 9.74934 15.0397 9.74934 15.6339C9.74934 15.9371 9.70008 16.1883 9.59756 16.3818C9.49547 16.5761 9.35437 16.7297 9.18483 16.8415C9.01439 16.9578 8.81334 17.0368 8.58614 17.0861C8.36245 17.1362 8.12456 17.1584 7.87472 17.1584H5.16398V13.9826H7.92487ZM18.5375 12.7324C18.2646 12.4311 17.8035 12.2677 17.2402 12.2677C16.8737 12.2677 16.5705 12.3294 16.3274 12.455C16.0895 12.5793 15.8951 12.7333 15.7464 12.9152C15.5982 13.0998 15.4979 13.2951 15.4389 13.5037C15.3803 13.707 15.3448 13.8911 15.3346 14.054H19.0661C19.0115 13.4691 18.8113 13.0364 18.5375 12.7324ZM7.54008 9.5543C7.76512 9.55434 7.98394 9.57028 8.19338 9.61111C8.40595 9.64795 8.5897 9.71541 8.75212 9.81352C8.91544 9.90802 9.04547 10.0425 9.14353 10.2147C9.23808 10.3869 9.28467 10.6088 9.28467 10.8768C9.28467 11.3606 9.14353 11.7125 8.85155 11.926C8.55642 12.1425 8.18363 12.2491 7.73405 12.2491H5.16398V9.5543H7.54008ZM19.54 9.50152V8.36358H14.865V9.50152H19.54Z" fill="#777777"/>
                    </g>
                    <defs>
                        <clipPath id="clip0_54_1195">
                            <rect width="24" height="24" fill="white"/>
                        </clipPath>
                    </defs>
                </svg>
                <svg class="footer__icons__single" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_54_1191)">
                        <path d="M12.6477 10.6753V10.6387C12.6401 10.651 12.632 10.6634 12.6239 10.6753H12.6477Z" fill="#777777"/>
                        <path d="M21.782 0H1.73748C0.778081 0 0 0.759521 0 1.6956V21.9747C0 22.9103 0.778081 23.6698 1.73748 23.6698H21.782C22.7428 23.6698 23.5209 22.9098 23.5209 21.9747V1.6956C23.5209 0.759045 22.7423 0 21.782 0ZM7.12931 19.8146H3.57679V9.12662H7.12931V19.8146ZM5.35329 7.66659H5.32949C4.13787 7.66659 3.36692 6.84568 3.36692 5.82014C3.36692 4.77175 4.16166 3.97368 5.37661 3.97368C6.59203 3.97368 7.33965 4.77175 7.36345 5.82014C7.36345 6.84568 6.59156 7.66659 5.35329 7.66659ZM19.9398 19.8146H16.3873V14.0954C16.3873 12.6592 15.8733 11.6788 14.5879 11.6788C13.6067 11.6788 13.0223 12.3398 12.7648 12.9785C12.6711 13.2064 12.6482 13.5253 12.6482 13.8451V19.8142H9.09569C9.09569 19.8142 9.14233 10.1279 9.09569 9.12615H12.6482V10.639C13.1203 9.91089 13.9645 8.87393 15.8505 8.87393C18.1876 8.87393 19.9403 10.402 19.9403 13.6852V19.8146H19.9398Z" fill="#777777"/>
                    </g>
                    <defs>
                        <clipPath id="clip0_54_1191">
                            <rect width="24" height="24" fill="white"/>
                        </clipPath>
                    </defs>
                </svg>
                <svg class="footer__icons__single" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_54_1189)">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M21.0678 0C22.6861 0 24 1.31391 24 2.93222V21.0678C24 22.6861 22.6861 24 21.0678 24H2.93222C1.31391 24 0 22.6861 0 21.0678V2.93222C0 1.31391 1.31386 0 2.93222 0H21.0678V0ZM20.085 8.23266C19.8909 7.50661 19.3192 6.93483 18.5931 6.74081C17.277 6.38812 12 6.38812 12 6.38812C12 6.38812 6.72305 6.38812 5.40689 6.74081C4.68098 6.93483 4.10911 7.50661 3.91505 8.23266C3.5625 9.54867 3.5625 12.2945 3.5625 12.2945C3.5625 12.2945 3.5625 15.0402 3.91505 16.3561C4.10911 17.0821 4.68098 17.6541 5.40689 17.8481C6.72305 18.2006 12 18.2006 12 18.2006C12 18.2006 17.277 18.2006 18.5931 17.8481C19.3192 17.6541 19.8909 17.0821 20.085 16.3561C20.4375 15.0402 20.4375 12.2945 20.4375 12.2945C20.4375 12.2945 20.4375 9.54867 20.085 8.23266ZM10.3124 14.8258V9.76317L14.6966 12.2945L10.3124 14.8258Z" fill="#777777"/>
                    </g>
                    <defs>
                        <clipPath id="clip0_54_1189">
                            <rect width="24" height="24" fill="white"/>
                        </clipPath>
                    </defs>
                </svg>  
            </div>
        </div>
        <div class="footer__services-section">
            <p class="footer__services">Services.</p>
            <div class="footer__serviceList">
                <p>+ Restaurant & Bar</p>
                <p>+ Swimming Pool</p>
                <p>+ Wellness & Spa</p>
                <p>+ Restaurant</p>
                <p>+ Conference Room</p>
                <p>+ Cocktail Party House</p>
                <p>+ Gaming Zone</p>
                <p>+ Marriage Party</p>
                <p>+ Party Planning</p>
                <p>+ Tour Consultancy</p>
            </div>
        </div>
        <div class="footer__contact-section">
            <p class="footer__contact">Contact Us.</p>
            <div class="footer__contactData">
                <div>
                    <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_54_1162)">
                            <path d="M38.9504 30.8574L30.8543 25.4582C29.8268 24.7786 28.4496 25.0022 27.69 25.9721L25.3317 29.0043C25.0286 29.404 24.4777 29.5199 24.0393 29.2763L23.5907 29.029C22.1035 28.2184 20.2532 27.2093 16.5251 23.4798C12.7969 19.7504 11.7858 17.8986 10.9752 16.4142L10.7292 15.9656C10.4823 15.5273 10.596 14.974 10.9958 14.6685L14.026 12.3109C14.9955 11.5512 15.2195 10.1744 14.5406 9.14665L9.14139 1.05051C8.44563 0.0039495 7.04974 -0.310223 5.97264 0.337259L2.58712 2.37094C1.52337 2.99632 0.742942 4.00914 0.409476 5.19716C-0.80964 9.63916 0.107489 17.3054 11.4005 28.5997C20.3839 37.5824 27.0715 39.998 31.6682 39.998C32.7261 40.0025 33.7798 39.8649 34.8011 39.5888C35.9894 39.2557 37.0023 38.4752 37.6273 37.4111L39.663 34.0276C40.3115 32.9503 39.9974 31.5536 38.9504 30.8574ZM38.5145 33.3437L36.4834 36.7292C36.0347 37.4972 35.3061 38.0619 34.4504 38.305C30.3497 39.4308 23.1854 38.4983 12.3436 27.6566C1.50189 16.8148 0.569452 9.65119 1.6953 5.54984C1.9387 4.6931 2.50409 3.9636 3.27304 3.51413L6.65855 1.4831C7.1259 1.2019 7.73175 1.3382 8.03366 1.79236L10.9666 6.19569L13.4283 9.88779C13.7231 10.3336 13.6262 10.9311 13.2056 11.261L10.1747 13.6186C9.25239 14.3239 8.98899 15.6 9.55687 16.6128L9.79754 17.0501C10.6494 18.6125 11.7086 20.5562 15.5754 24.4224C19.4421 28.2884 21.3852 29.3476 22.9469 30.1995L23.3848 30.4408C24.3976 31.0086 25.6738 30.7452 26.3791 29.8229L28.7367 26.792C29.0666 26.3717 29.6639 26.2749 30.1098 26.5694L38.2053 31.9686C38.6597 32.2703 38.7961 32.8764 38.5145 33.3437Z" fill="#BEAD8E"/>
                            <path d="M22.6655 6.66902C28.9209 6.67597 33.9901 11.7453 33.9972 18.0007C33.9972 18.3688 34.2955 18.6672 34.6637 18.6672C35.0318 18.6672 35.3302 18.3688 35.3302 18.0007C35.3225 11.0093 29.6569 5.34359 22.6655 5.33594C22.2973 5.33594 21.9989 5.63433 21.9989 6.00248C21.9989 6.37063 22.2973 6.66902 22.6655 6.66902Z" fill="#BEAD8E"/>
                            <path d="M22.6655 10.669C26.713 10.6738 29.993 13.9538 29.9977 18.0013C29.9977 18.3694 30.2962 18.6678 30.6643 18.6678C31.0324 18.6678 31.3308 18.3694 31.3308 18.0013C31.3253 13.2178 27.4489 9.34141 22.6655 9.33594C22.2973 9.33594 21.9989 9.63433 21.9989 10.0025C21.9989 10.3706 22.2973 10.669 22.6655 10.669Z" fill="#BEAD8E"/>
                            <path d="M22.6655 14.668C24.5052 14.6702 25.9961 16.1611 25.9983 18.0009C25.9983 18.3691 26.2968 18.6675 26.6649 18.6675C27.0329 18.6675 27.3314 18.3691 27.3314 18.0009C27.3285 15.4252 25.2412 13.3379 22.6655 13.335C22.2973 13.335 21.9989 13.6334 21.9989 14.0015C21.9989 14.3697 22.2973 14.668 22.6655 14.668Z" fill="#BEAD8E"/>
                        </g>
                        <defs>
                            <clipPath id="clip0_54_1162">
                                <rect width="40" height="40" fill="white"/>
                            </clipPath>
                        </defs>
                    </svg>
                    <div>
                        <p>Phone Number</p>
                        <p>+987 876 765 76 577</p>
                    </div>
                </div>
                <div>
                    <svg width="40" height="38" viewBox="0 0 40 38" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                        <rect width="40" height="38" fill="url(#pattern0_54_1174)"/>
                        <defs>
                            <pattern id="pattern0_54_1174" patternContentUnits="objectBoundingBox" width="1" height="1">
                                <use xlink:href="#image0_54_1174" transform="scale(0.025 0.0263158)"/>
                            </pattern>
                            <image id="image0_54_1174" width="40" height="38" xlink:href="data:image/png;base64,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"/>
                        </defs>
                    </svg>
                    <div>
                        <p>Fax</p>
                        <p>+987 876 765 76 577</p>
                    </div>
                </div>
                <div>
                    <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                        <rect width="40" height="40" fill="url(#pattern0_54_1175)"/>
                        <defs>
                            <pattern id="pattern0_54_1175" patternContentUnits="objectBoundingBox" width="1" height="1">
                                <use xlink:href="#image0_54_1175" transform="scale(0.025)"/>
                            </pattern>
                            <image id="image0_54_1175" width="40" height="40" xlink:href="data:image/png;base64,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"/>
                        </defs>
                    </svg>  
                    <div>
                        <p>Location</p>
                        <p>123 Ocean View, Coral Bay</p>
                    </div>
                </div> 
            </div>
        </div>      
    </footer>
    <div class="footer__copyright">
        <p>Copyright By@Example - 2020</p>
        <p>Terms of use | Privacy Enviromental Policy</p>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="./scripts/slider.js"></script>
</body>
</html>