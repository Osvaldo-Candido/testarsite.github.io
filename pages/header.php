<!DOCTYPE html>
<html lang="en" data-x="html" data-x-toggle="html-overflow-hidden">


<head>
  <!-- Required meta tags -->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Google fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com/">
  <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Jost:wght@400;500;600&amp;display=swap" rel="stylesheet">

  <!-- Stylesheets -->
  <link rel="stylesheet" href="css/vendors.css">
  <link rel="stylesheet" href="css/main.css">

  <title>GoTrip</title>
</head>

<body>
  <div class="preloader js-preloader">
    <div class="preloader__wrap">
      <div class="preloader__icon">
        <svg width="38" height="37" viewBox="0 0 38 37" fill="none" xmlns="http://www.w3.org/2000/svg">
          <g clip-path="url(#clip0_1_41)">
            <path d="M32.9675 13.9422C32.9675 6.25436 26.7129 0 19.0251 0C11.3372 0 5.08289 6.25436 5.08289 13.9422C5.08289 17.1322 7.32025 21.6568 11.7327 27.3906C13.0538 29.1071 14.3656 30.6662 15.4621 31.9166V35.8212C15.4621 36.4279 15.9539 36.92 16.561 36.92H21.4895C22.0965 36.92 22.5883 36.4279 22.5883 35.8212V31.9166C23.6849 30.6662 24.9966 29.1071 26.3177 27.3906C30.7302 21.6568 32.9675 17.1322 32.9675 13.9422V13.9422ZM30.7699 13.9422C30.7699 16.9956 27.9286 21.6204 24.8175 25.7245H23.4375C25.1039 20.7174 25.9484 16.7575 25.9484 13.9422C25.9484 10.3587 25.3079 6.97207 24.1445 4.40684C23.9229 3.91841 23.6857 3.46886 23.4347 3.05761C27.732 4.80457 30.7699 9.02494 30.7699 13.9422ZM20.3906 34.7224H17.6598V32.5991H20.3906V34.7224ZM21.0007 30.4014H17.0587C16.4167 29.6679 15.7024 28.8305 14.9602 27.9224H16.1398C16.1429 27.9224 16.146 27.9227 16.1489 27.9227C16.152 27.9227 23.0902 27.9224 23.0902 27.9224C22.3725 28.8049 21.6658 29.6398 21.0007 30.4014ZM19.0251 2.19765C20.1084 2.19765 21.2447 3.33365 22.1429 5.3144C23.1798 7.60078 23.7508 10.6649 23.7508 13.9422C23.7508 16.6099 22.8415 20.6748 21.1185 25.7245H16.9322C15.2086 20.6743 14.2994 16.6108 14.2994 13.9422C14.2994 10.6649 14.8706 7.60078 15.9075 5.3144C16.8057 3.33365 17.942 2.19765 19.0251 2.19765V2.19765ZM7.28053 13.9422C7.28053 9.02494 10.3184 4.80457 14.6157 3.05761C14.3647 3.46886 14.1273 3.91841 13.9059 4.40684C12.7425 6.97207 12.102 10.3587 12.102 13.9422C12.102 16.7584 12.9462 20.7176 14.6126 25.7245H13.2259C9.33565 20.6126 7.28053 16.5429 7.28053 13.9422Z" fill="#3554D1" />
          </g>

          <defs>
            <clipPath id="clip0_1_41">
              <rect width="36.92" height="36.92" fill="white" transform="translate(0.540039)" />
            </clipPath>
          </defs>
        </svg>
      </div>
    </div>

    <div class="preloader__title">GoTrip</div>
  </div>

  <main>

    <section class="header-banner py-5 bg-blue-1 z-2">
      <div class="container">
        <div class="row items-center justify-between">
          <div class="col-auto">
            <div class="row x-gap-15 y-gap-15 items-center">
              <div class="col-auto md:d-none">
                <a href="#" class="text-12 text-white">+(1) 123 456 7890</a>
              </div>

              <div class="col-auto md:d-none">
                <div class="w-1 h-20 bg-white-20"></div>
              </div>

              <div class="col-auto">
                <a href="#" class="text-12 text-white">hi@gotrip.com</a>
              </div>
            </div>
          </div>

          <div class="col-auto">
            <div class="row x-gap-15 items-center jusify-between">
              <div class="col-auto">

                <div class="row x-gap-20 items-center xxl:d-none">
                  <div class="col-auto">
                    <button class="d-flex items-center text-14 text-white" data-x-click="currency">
                      <span class="js-currencyMenu-mainTitle">USD</span>
                      <i class="icon-chevron-sm-down text-7 ml-10"></i>
                    </button>
                  </div>

                  <div class="col-auto">
                    <div class="w-1 h-20 bg-white-20"></div>
                  </div>

                  <div class="col-auto">
                    <button class="d-flex items-center text-14 text-white" data-x-click="lang">
                      <img src="img/general/lang.png" alt="image" class="rounded-full mr-10">
                      <span class="js-language-mainTitle">United Kingdom</span>
                      <i class="icon-chevron-sm-down text-7 ml-15"></i>
                    </button>
                  </div>
                </div>

              </div>

              <div class="col-auto xxl:d-none">
                <div class="w-1 h-20 bg-white-20"></div>
              </div>

              <div class="col-auto md:d-none">
                <a href="#" class="text-12 text-white">Become An Expert</a>
              </div>

              <div class="col-auto md:d-none">
                <div class="w-1 h-20 bg-white-20"></div>
              </div>

              <div class="col-auto">
                <a href="#" class="text-12 text-white">Sign In / Register</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <header data-add-bg="bg-dark-1" class="header mt-40 js-header" data-x="header" data-x-toggle="is-menu-opened">
      <div data-anim="fade" class="header__container container">
        <div class="row justify-between items-center">

          <div class="col-auto">
            <div class="d-flex items-center">
              <a href="index.html" class="header-logo mr-20" data-x="header-logo" data-x-toggle="is-logo-dark">
                <img src="img/general/logo-light.svg" alt="logo icon">
                <img src="img/general/logo-dark.svg" alt="logo icon">
              </a>
            </div>
          </div>


          <div class="col-auto">
            <div class="d-flex items-center">

              <div class="header-menu " data-x="mobile-menu" data-x-toggle="is-menu-active">
                <div class="mobile-overlay"></div>

                <div class="header-menu__content">
                  <div class="mobile-bg js-mobile-bg"></div>

                  <div class="menu js-navList">
                    <ul class="menu__nav text-white -is-active">

                      <li>
                        <!-- Home -->
                        <a href="#home">Home</a>
                      </li>
                      <!-- destinos -->
                      <!-- Bookings -->
                      <li>
                        <a href="#bookings">
                          Bookings
                        </a>
                      </li>
                      <!-- Carros para alugar -->
                      <li>
                        <a href="#cars-to-hire">
                          Cars To Hire
                        </a>
                      </li>
                      <!-- Contactos -->
                      <li>
                        <a href="#contact">Contact</a>
                      </li>
                      <!--  -->
                      <!-- Sobre nós -->
                      <li>
                        <a href="#why-choose-us">Why Choose Us</a>
                      </li>
                      <li>
                        <a href="#about-us">About Us</a>
                      </li>
                      <li>
                        <a href="#routes">Routes</a>
                      </li>
                      <!--  -->
                    </ul>
                  </div>

                  <div class="mobile-footer px-20 py-20 border-top-light js-mobile-footer">
                  </div>
                </div>
              </div>


              <!-- <div class="d-flex items-center ml-24 is-menu-opened-hide md:d-none">
                <a href="#" class="text-26 xl:text-20 text-white icon-search"></a>
              </div> -->

              <div class="d-none xl:d-flex x-gap-20 items-center pl-20 text-white" data-x="header-mobile-icons" data-x-toggle="text-white">
                <div><a href="login.html" class="d-flex items-center icon-user text-inherit text-22"></a></div>
                <div><button class="d-flex items-center icon-menu text-inherit text-20" data-x-click="html, header, header-logo, header-mobile-icons, mobile-menu"></button></div>
              </div>
            </div>
          </div>

        </div>
      </div>
    </header>