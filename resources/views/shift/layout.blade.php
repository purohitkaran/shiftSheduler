<head>
  <title>Shift Management</title>
  <!-- meta tags -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="meta description">

  <!-- fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com/">
  <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&amp;display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- all css -->
  <style>
    :root {
      --primary-color: #FFAE00;
      --secondary-color: #efa608;

      --btn-primary-border-radius: 0.25rem;
      --btn-primary-color: #000;
      --btn-primary-background-color: #FFAE00;
      --btn-primary-border-color: #FFAE00;
      --btn-primary-hover-color: #000;
      --btn-primary-background-hover-color: #efa608;
      --btn-primary-border-hover-color: #efa608;
      --btn-primary-font-weight: 500;

      --btn-secondary-border-radius: 0.25rem;
      --btn-secondary-color: #FFAE00;
      --btn-secondary-background-color: transparent;
      --btn-secondary-border-color: #FFAE00;
      --btn-secondary-hover-color: #fff;
      --btn-secondary-background-hover-color: #efa608;
      --btn-secondary-border-hover-color: #efa608;
      --btn-secondary-font-weight: 500;

      --heading-color: #000;
      --heading-font-family: 'Poppins', sans-serif;
      --heading-font-weight: 700;

      --title-color: #000;
      --title-font-family: 'Poppins', sans-serif;
      --title-font-weight: 400;

      --body-color: #000;
      --body-background-color: #fff;
      --body-font-family: 'Poppins', sans-serif;
      --body-font-size: 14px;
      --body-font-weight: 300;

      --section-heading-color: #000;
      --section-heading-font-family: 'Poppins', sans-serif;
      --section-heading-font-size: 48px;
      --section-heading-font-weight: 600;

      --section-subheading-color: #000;
      --section-subheading-font-family: 'Poppins', sans-serif;
      --section-subheading-font-size: 16px;
      --section-subheading-font-weight: 400;
    }
  </style>

  <link rel="stylesheet" href="/assets/css/vendor.css">
  <link rel="stylesheet" href="/assets/css/style.css">
  <link rel="stylesheet" href="/assets/css/custom.css">
</head>

<body>
  <div class="body-wrapper">


    <!-- header start -->
    <header class="sticky-header border-btm-black">
      <div class="header-top border-btm-black">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-8 col-md-8 col-12">
              <div class="header-logo">
                <a href="index.php" class="logo-main">
                  <h3>Shift Management - Manager Dashboard</h3>
                </a>
              </div>
            </div>
            <div class="col-lg-4 col-md-4 col-12 d-lg-block d-none">
              <div class="header-search">
                 <div class="header-bottom d-lg-block d-none">
        <div class="container1">
          <div class="row">
            <div class="col-lg-4">

            </div>
            <!-- <div class="col-lg-"> -->
              <div class="member-signup d-flex justify-content-end">
                @if (Route::has('login'))
                <div class="">
                    @auth
                        <a href="{{ url('/home') }}" class="btn-member text-white">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="btn-member text-white">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="btn-member text-white">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
              </div>
            </div>
          </div>
        </div>
      </div>
              </div>
            </div>
            <div class="col-lg-1 col-md-8 col-8">
              <div class="header-action d-flex align-items-center justify-content-end">

                <a class="header-action-item header-hamburger ms-4 d-lg-none" href="#drawer-menu"
                  data-bs-toggle="offcanvas">
                  <svg class="icon icon-hamburger" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                    viewBox="0 0 24 24" fill="none" stroke="#000" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round">
                    <line x1="3" y1="12" x2="21" y2="12"></line>
                    <line x1="3" y1="6" x2="21" y2="6"></line>
                    <line x1="3" y1="18" x2="21" y2="18"></line>
                  </svg>
                </a>
              </div>
            </div>
          </div>
        </div>

        <div class="search-wrapper d-lg-none">
          <div class="container">
            <form action="#" class="search-form d-flex align-items-center">
              <button type="submit" class="search-submit bg-transparent pl-0 text-start">
                <svg class="icon icon-search" width="20" height="20" viewBox="0 0 20 20" fill="none"
                  xmlns="http://www.w3.org/2000/svg">
                  <path
                    d="M7.75 0.250183C11.8838 0.250183 15.25 3.61639 15.25 7.75018C15.25 9.54608 14.6201 11.1926 13.5625 12.4846L19.5391 18.4611L18.4609 19.5392L12.4844 13.5627C11.1924 14.6203 9.5459 15.2502 7.75 15.2502C3.61621 15.2502 0.25 11.884 0.25 7.75018C0.25 3.61639 3.61621 0.250183 7.75 0.250183ZM7.75 1.75018C4.42773 1.75018 1.75 4.42792 1.75 7.75018C1.75 11.0724 4.42773 13.7502 7.75 13.7502C11.0723 13.7502 13.75 11.0724 13.75 7.75018C13.75 4.42792 11.0723 1.75018 7.75 1.75018Z"
                    fill="black" />
                </svg>
              </button>
              <div class="search-input mr-4">
                <input type="text" placeholder="Search your products..." autocomplete="off">
              </div>
              <div class="search-close">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                  stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                  class="icon icon-close">
                  <line x1="18" y1="6" x2="6" y2="18"></line>
                  <line x1="6" y1="6" x2="18" y2="18"></line>
                </svg>
              </div>
            </form>
          </div>
        </div>
      </div>

    </header>
    <!-- header end -->
<!DOCTYPE html>
<html>
<head>
    <title>Shift Management - Dashboard</title>
</head>
<body>

<div class="container">
    @yield('content')
</div>

 <!-- footer start -->
    <footer class="mt-100 overflow-hidden">

      <div class="footer-bottom bg-4">
        <div class="container">
          <div class="footer-bottom-inner d-flex flex-wrap  justify-content-center align-items-center">

            <p class="copyright footer-text">©<span class="current-year"></span> Shift Management System.</p>
          </div>
        </div>
      </div>
    </footer>
    <!-- footer end -->

    <!-- scrollup start -->
      <button id="scrollup">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="18 15 12 9 6 15"></polyline></svg>
    </button>
    <!-- scrollup end -->

    <!-- drawer menu start -->
    <div class="offcanvas offcanvas-start d-flex d-lg-none" tabindex="-1" id="drawer-menu">
      <div class="offcanvas-wrapper">
        <div class="offcanvas-header border-btm-black">
          <h5 class="drawer-heading">Menu</h5>
          <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body p-0 d-flex flex-column justify-content-between">

          <ul class="utility-menu list-unstyled">
            <li class="utilty-menu-item">
              <a class="announcement-text" href="login.php">
                <span class="utilty-icon-wrapper">
                 <i class="fa fa-user"></i>
                </span>
               Login
              </a>
            </li>


          </ul>
        </div>
      </div>
    </div>
    <!-- drawer menu end -->


      <!-- product quickview end -->

        <!-- newsletter subscribe modal start -->
       <!-- <div class="modal fade" tabindex="-1" id="modal-subscribe">
          <div class="modal-dialog modal-dialog-centered">
              <div class="modal-content newsletter-modal-content">
                  <div class="modal-header border-0">
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body px-4">
                      <form action="#" class="newletter-modal-form common-form mx-auto">
                          <div class="section-header mb-3">
                              <h4 class="newsletter-modal-heading heading_34 d-flex align-items-center justify-content-center">
                                  <svg class="newsletter-modal-icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" ><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>

                                  SUBSCRIBE & SAVE
                              </h4>
                              <hr>
                              <p class="newsletter-modal-misc text_14 mt-4 text-center">Sign up & be the first to hear about exclusive offers, new arrivals & more.</p>
                          </div>
                          <div class="newsletter-input-box d-flex align-items-center">
                              <input class="mt-2 px-3" type="email" placeholder="Email address">
                              <button type="submit" class="btn-primary d-block mt-2 btn-signin">SUBSCRIBE</button>
                          </div>
                          <p class="newsletter-modal-misc text_14 mt-4 text-center pb-4">You can change your email preference any time by clicking "unsubscribe" in your email.</p>
                      </form>
                  </div>
              </div>
          </div>
      </div>-->
      <!-- newsletter subscribe modal end -->

    <!-- all js -->
    <script src="/assets/js/vendor.js"></script>
    <script src="/assets/js/main.js"></script>
  </div>
</body>

