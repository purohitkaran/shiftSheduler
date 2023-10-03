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




    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-success bg-primary shadow-sm" >
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                   Shift Management Project - Dashboard
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown1" class="nav-link dropdown-toggle1" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    Logged in :{{ Auth::user()->name }}
                                </a>
                                 <a class="btn btn-warning" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
<style>
    .navbar-brand {
    padding-top: var(--bs-navbar-brand-padding-y);
    padding-bottom: var(--bs-navbar-brand-padding-y);
    margin-right: var(--bs-navbar-brand-margin-end);
    font-size: var(--bs-navbar-brand-font-size);
    color: rgb(248 247 246);
    text-decoration: none;
    white-space: nowrap;
}

.nav-link {
    color:white !important;
}
</style>
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
    <script src="assets/js/vendor.js"></script>
    <script src="assets/js/main.js"></script>
  </div>
</body>
