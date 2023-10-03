
<!doctype html>
<html lang="en" class="no-js">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
@include("layouts.app-header")
<style>
.Frames {
    margin: 0;
}
.Frames, .Frame {
    list-style: none;
    list-style-type: none;
    margin: 0px;
    padding: 0px;
    text-align: center;
}

.Frame {
    display: inline-block;
    padding: 8px;
    border-width: 10px;
    border-style: solid;
    border-color: #2F2D2D #434040 #4F4C4C #434040;
    background: #f5f5f5;
    background-image: -webkit-gradient(linear, 0 0, 0 100%, from(#E5E4DF), to(#CDCDC6));
    background-image: -webkit-linear-gradient(#E5E4DF, #CDCDC6);
    background-image: -moz-linear-gradient(#E5E4DF, #CDCDC6);
    background-image: -o-linear-gradient(#E5E4DF, #CDCDC6);
    background-image: linear-gradient(#E5E4DF, #CDCDC6);
    box-shadow: inset 0 2px 5px rgba(0,0,0,.6), 0 5px 2px rgba(0,0,0,.1), 0 10px 20px rgba(0,0,0,.8);
    position: relative;
    overflow: hidden;
    height: auto;
    margin: 15px;
}
.product-card
{
	margin-top: 40px;
    border: 1px solid #ddd;
    padding: 12px;
    border-radius: 5px;
}
</style>

    <main id="MainContent" class="content-for-layout">
      <!-- slideshow start -->
      <div class="slideshow-section position-relative">
        <div class="slideshow-active activate-slider" data-slick='{
          "slidesToShow": 1,
          "slidesToScroll": 1,
          "dots": true,
          "arrows": true,
          "responsive": [
            {
              "breakpoint": 768,
              "settings": {
                "arrows": false
              }
            }
          ]
      }'>
          <div class="slide-item position-relative overlay">
            <img class="slide-img d-none d-md-block" src="assets/img/slideshow/t1.jpg" alt="slide-1">
            <img class="slide-img d-md-none" src="assets/img/slideshow/t1.jpg" alt="slide-1">
            <div class="content-absolute content-slide">
              <div class="container height-inherit d-flex align-items-center justify-content-start">
                <div class="content-box slide-content py-4">
                  <p class="slide-text heading_34 text-white animate__animated animate__fadeInUp"
                    data-animation="animate__animated animate__fadeInUp">
                    Welcome
                  </p>
                  <h2 class="slide-heading heading_72 text-white animate__animated animate__fadeInUp"
                    data-animation="animate__animated animate__fadeInUp" style="font-size:3.5em;">
                    Shift Management System
                  </h2>
                  <p class="slide-subheading heading_18 text-white animate__animated animate__fadeInUp"
                    data-animation="animate__animated animate__fadeInUp">
                  </p>

                </div>
              </div>
            </div>
          </div>
          <div class="slide-item position-relative overlay">
            <img class="slide-img d-none d-md-block" src="assets/img/slideshow/t2.jpg" alt="slide-2">
            <img class="slide-img d-md-none" src="assets/img/slideshow/t2.jpg" alt="slide-2">
            <div class="content-absolute content-slide">
              <div class="container height-inherit d-flex align-items-center justify-content-start">
                <div class="content-box slide-content py-4">
                  <p class="slide-text heading_34 text-white animate__animated animate__fadeInUp"
                    data-animation="animate__animated animate__fadeInUp">
                    Welcome
                  </p>
                  <h2 class="slide-heading heading_72 text-white animate__animated animate__fadeInUp"
                    data-animation="animate__animated animate__fadeInUp" style="font-size:3.5em;">
                    Shift Management System
                  </h2>
                  <p class="slide-subheading heading_18 text-white animate__animated animate__fadeInUp"
                    data-animation="animate__animated animate__fadeInUp">
                  </p>

                </div>
              </div>
            </div>
          </div>
          <div class="slide-item position-relative overlay">
            <img class="slide-img d-none d-md-block" src="assets/img/slideshow/t3.jpg" alt="slide-">
            <img class="slide-img d-md-none" src="assets/img/slideshow/t3.jpg" alt="slide-">
            <div class="content-absolute content-slide">
              <div class="container height-inherit d-flex align-items-center justify-content-start">
                  <div class="content-box slide-content py-4">
                  <p class="slide-text heading_34 text-white animate__animated animate__fadeInUp"
                    data-animation="animate__animated animate__fadeInUp">
                    Welcome
                  </p>
                  <h2 class="slide-heading heading_72 text-white animate__animated animate__fadeInUp"
                    data-animation="animate__animated animate__fadeInUp" style="font-size:3.5em;">
                    Shift Management System
                  </h2>
                  <p class="slide-subheading heading_18 text-white animate__animated animate__fadeInUp"
                    data-animation="animate__animated animate__fadeInUp">
                  </p>

                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="activate-arrows arrows-white"></div>
        <div class="activate-dots dots-white"></div>
      </div>
      <!-- slideshow end -->

      <!-- trusted badge start -->
      <div class="trusted-section mt-100 overflow-hidden">
        <div class="trusted-section-inner">
          <div class="container">
            <div class="row justify-content-center trusted-row">
              <div class="col-lg-4 col-md-6 col-12">
                <div class="trusted-badge bg-4 rounded">
                  <div class="trusted-icon">
                    <img class="icon-trusted" src="assets/img/trusted/5.png" alt="icon-1">
                  </div>
                  <div class="trusted-content">
                    <h2 class="heading_18 trusted-heading text-white">Streamline workforce scheduling</h2>

                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-6 col-12">
                <div class="trusted-badge bg-4 rounded">
                  <div class="trusted-icon">
                    <img class="icon-trusted" src="assets/img/trusted/5.png" alt="icon-2">
                  </div>
                  <div class="trusted-content">
                    <h2 class="heading_18 trusted-heading text-white">Simplify shift management</h2>
                     <br>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-6 col-12">
                <div class="trusted-badge bg-4 rounded">
                  <div class="trusted-icon">
                    <img class="icon-trusted" src="assets/img/trusted/5.png" alt="icon-3">
                  </div>
                  <div class="trusted-content">
                    <h2 class="heading_18 trusted-heading text-white">Maximize productivity with ease</h2>

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- trusted badge end -->

      <!-- collection tab start -->
      <div class="collection-tab-section mt-100 overflow-hidden">
        <div class="collection-tab-inner">
          <div class="container">
            <div class="section-header text-center">
              <h2 class="section-heading">Features That Empower Your Team</h2>
            </div>

            <div class="tab-content collection-tab-content">
              <div id="collection-all" class="tab-pane fade show active">
                <div class="row">

                  <div class="col-lg-12 col-md-12 col-12" data-aos="fade-up" data-aos-duration="700">
				   <br> <br> <br>
                     <p>1. Intuitive Shift Planning: Effortlessly create and assign shifts to your team members with our user-friendly interface.</p>

					 <p>2. Real-Time Updates: Keep your employees informed with instant notifications and updates about shift changes, ensuring seamless communication.</p>

					 <p>3. Conflict Resolution: Our intelligent scheduling algorithm helps you identify and resolve scheduling conflicts, minimizing disruptions to your operations.</p>

					 <p>4. Employee Availability Management: Easily track and manage employee availability, ensuring optimal shift coverage and avoiding scheduling conflicts.</p>
					 <p>5. Reliable Support: Our dedicated support team is available to assist you with any questions or issues, ensuring a smooth and efficient shift management experience.</p>
                  </div>

                </div>

              </div>

            </div>
          </div>
        </div>
      </div>
      <!-- collection tab end -->

      <!-- banner start -->
      <div class="banner-section mt-100 overflow-hidden">
        <div class="banner-section-inner">
          <div class="container">
            <div class="row justify-content-center">
              <div class="col-lg-12 col-md-12 col-12" data-aos="fade-right" data-aos-duration="1200">
                <figure class="blockquote">
                                        <blockquote>
                                           "Success is not the key to happiness. Happiness is the key to success. If you love what you do and manage your shifts with passion, you will achieve greatness." -
                                        </blockquote>
                                        <figcaption>—Albert Schweitzer</figcaption>
                                    </figure>
              </div>

            </div>
          </div>
        </div>
      </div>
      <!-- banner end -->

<div class="about-service pt-100 pb-100">
                    <div class="container">
                        <div class="section-header about-service-header text-center aos-init aos-animate" data-aos="fade-up" data-aos-duration="700">
                            <h2 class="section-heading">Benefits of Our Shift Management Solution</h2>
                        </div>
                        <div class="about-service-wrapper">
                            <div class="row justify-content-center">
                                <div class="col-lg-4 col-md-6 col-12 py-4 aos-init aos-animate" data-aos="fade-up" data-aos-duration="1000">
                                    <div class="about-service-inner text-center">
                                        <div class="about-service-icon">
                                            <svg width="26" height="27" viewBox="0 0 26 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M10 0C6.1 0 3 3.1 3 7C3 9.4375 4.20996 11.5615 6.07031 12.8125C2.51001 14.3473 0 17.8936 0 22H2C2 17.6 5.6 14 10 14C13.9 14 17 10.9 17 7C17 3.1 13.9 0 10 0ZM10 2C12.8 2 15 4.2 15 7C15 9.8 12.8 12 10 12C7.2 12 5 9.8 5 7C5 4.2 7.2 2 10 2ZM18.0996 13V15.0996C17.4996 15.1996 16.9004 15.5008 16.4004 15.8008L14.9004 14.3008L13.5 15.6992L15 17.1992C14.6 17.6992 14.4008 18.3 14.3008 19H12V21H14.0996C14.1996 21.6 14.5008 22.2008 14.8008 22.8008L13.3008 24.3008L14.6992 25.6992L16.1992 24.1992C16.6992 24.4992 17.3004 24.8004 17.9004 24.9004V27H19.9004V24.9004C20.5004 24.8004 21.0996 24.4992 21.5996 24.1992L23.0996 25.6992L24.5 24.3008L23 22.8008C23.4 22.3008 23.5992 21.7 23.6992 21H26V19H23.9004C23.8004 18.4 23.4992 17.7992 23.1992 17.1992L24.6992 15.6992L23.3008 14.3008L21.8008 15.8008C21.3008 15.5008 20.6996 15.1996 20.0996 15.0996V13H18.0996ZM19 17C20.7 17 22 18.3 22 20C22 21.7 20.7 23 19 23C17.3 23 16 21.7 16 20C16 18.3 17.3 17 19 17ZM19 19C18.875 19 18.75 19.0312 18.6328 19.0859C18.5156 19.1406 18.4062 19.2188 18.3125 19.3125C18.2188 19.4062 18.1406 19.5156 18.0859 19.6328C18.0312 19.75 18 19.875 18 20C18 20.375 18.2812 20.75 18.6328 20.9141C18.75 20.9688 18.875 21 19 21C19.5 21 20 20.5 20 20C20 19.5 19.5 19 19 19Z" fill="black"></path>
                                            </svg>
                                        </div>
                                        <div class="about-service-content">
                                            <h4 class="about-service-title">Time and Cost Savings</h4>
                                            <p class="about-service-subtitle">Our shift management solution automates the scheduling process, reducing the time and effort spent on manual scheduling tasks</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-12 py-4 aos-init aos-animate" data-aos="fade-up" data-aos-duration="1400">
                                    <div class="about-service-inner text-center">
                                        <div class="about-service-icon">
                                            <svg width="26" height="27" viewBox="0 0 26 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M10 0C6.1 0 3 3.1 3 7C3 9.4375 4.20996 11.5615 6.07031 12.8125C2.51001 14.3473 0 17.8936 0 22H2C2 17.6 5.6 14 10 14C13.9 14 17 10.9 17 7C17 3.1 13.9 0 10 0ZM10 2C12.8 2 15 4.2 15 7C15 9.8 12.8 12 10 12C7.2 12 5 9.8 5 7C5 4.2 7.2 2 10 2ZM18.0996 13V15.0996C17.4996 15.1996 16.9004 15.5008 16.4004 15.8008L14.9004 14.3008L13.5 15.6992L15 17.1992C14.6 17.6992 14.4008 18.3 14.3008 19H12V21H14.0996C14.1996 21.6 14.5008 22.2008 14.8008 22.8008L13.3008 24.3008L14.6992 25.6992L16.1992 24.1992C16.6992 24.4992 17.3004 24.8004 17.9004 24.9004V27H19.9004V24.9004C20.5004 24.8004 21.0996 24.4992 21.5996 24.1992L23.0996 25.6992L24.5 24.3008L23 22.8008C23.4 22.3008 23.5992 21.7 23.6992 21H26V19H23.9004C23.8004 18.4 23.4992 17.7992 23.1992 17.1992L24.6992 15.6992L23.3008 14.3008L21.8008 15.8008C21.3008 15.5008 20.6996 15.1996 20.0996 15.0996V13H18.0996ZM19 17C20.7 17 22 18.3 22 20C22 21.7 20.7 23 19 23C17.3 23 16 21.7 16 20C16 18.3 17.3 17 19 17ZM19 19C18.875 19 18.75 19.0312 18.6328 19.0859C18.5156 19.1406 18.4062 19.2188 18.3125 19.3125C18.2188 19.4062 18.1406 19.5156 18.0859 19.6328C18.0312 19.75 18 19.875 18 20C18 20.375 18.2812 20.75 18.6328 20.9141C18.75 20.9688 18.875 21 19 21C19.5 21 20 20.5 20 20C20 19.5 19.5 19 19 19Z" fill="black"></path>
                                            </svg>
                                        </div>
                                        <div class="about-service-content">
                                            <h4 class="about-service-title">Improved Communication</h4>
                                            <p class="about-service-subtitle">With real-time updates and notifications, our platform enhances communication between managers and employees. Everyone stays informed about shift changes, reducing confusion and ensuring smooth operations.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-12 py-4 aos-init aos-animate" data-aos="fade-up" data-aos-duration="1700">
                                    <div class="about-service-inner text-center">
                                        <div class="about-service-icon">
                                            <svg width="27" height="25" viewBox="0 0 27 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M14 0V1.18945C13.855 1.24195 13.7141 1.30611 13.5801 1.37891C13.3121 1.52449 13.0691 1.70855 12.8574 1.92383C12.6457 2.1391 12.4654 2.38465 12.3262 2.6543C12.1173 3.05877 12 3.51625 12 4C12 4.205 12.0221 4.40547 12.0625 4.59961C12.1433 4.98789 12.3005 5.35039 12.5176 5.66992C12.6261 5.82969 12.7485 5.97898 12.8848 6.11523C13.021 6.25148 13.1703 6.37391 13.3301 6.48242C13.8094 6.80797 14.385 7 15 7C15.1425 7 15.276 7.02695 15.3965 7.07617C15.517 7.12539 15.6235 7.19773 15.7129 7.28711C15.8023 7.37648 15.8746 7.48305 15.9238 7.60352C15.973 7.72398 16 7.8575 16 8C16 8.4275 15.7579 8.77617 15.3965 8.92383C15.276 8.97305 15.1425 9 15 9C14.8575 9 14.724 8.97305 14.6035 8.92383C14.483 8.87461 14.3765 8.80227 14.2871 8.71289C14.1977 8.62352 14.1254 8.51695 14.0762 8.39648C14.027 8.27602 14 8.1425 14 8H12C12 8.16125 12.0138 8.32025 12.0391 8.47461C12.0643 8.62897 12.1 8.77828 12.1484 8.92383C12.2938 9.36047 12.5398 9.75326 12.8574 10.0762C12.9633 10.1838 13.0763 10.2838 13.1973 10.375C13.3182 10.4662 13.4461 10.5483 13.5801 10.6211C13.7141 10.6939 13.855 10.758 14 10.8105V12H16V10.8105C17.16 10.3905 18 9.29 18 8C18 6.565 16.9586 5.34523 15.5996 5.0625C15.4055 5.02211 15.205 5 15 5C14.8575 5 14.724 4.97305 14.6035 4.92383C14.483 4.87461 14.3765 4.80227 14.2871 4.71289C14.1977 4.62352 14.1254 4.51695 14.0762 4.39648C14.027 4.27602 14 4.1425 14 4C14 3.8575 14.027 3.72398 14.0762 3.60352C14.1254 3.48305 14.1977 3.37648 14.2871 3.28711C14.4659 3.10836 14.715 3 15 3C15.57 3 16 3.43 16 4H18C18 3.83875 17.9862 3.67975 17.9609 3.52539C17.9357 3.37104 17.9 3.22172 17.8516 3.07617C17.5609 2.20289 16.87 1.50445 16 1.18945V0H14ZM7.51562 14C6.48462 14.004 5.69922 14.2656 5.69922 14.2656L5.67969 14.2734L0.0078125 16.4492L1.99219 22.0195L6.92188 20.1289L14.0586 24.0586L26.3828 18.9531L25.6172 17.1094L14.1797 21.8438L7.07812 17.9336L3.1875 19.4219L2.54688 17.6172L6.34375 16.1602C6.35275 16.1562 6.81962 16 7.51562 16C8.21863 16 9.03828 16.1561 9.73828 16.7891L9.75195 16.7969L9.75586 16.8008C10.7869 17.6958 11.5645 18.3212 12.6465 18.6602C13.7285 19.0002 14.9559 19.0392 17.0059 19.0312L16.9961 17.0312C14.9841 17.0392 13.9331 16.968 13.2461 16.75C12.5581 16.539 12.0701 16.1598 11.0781 15.3008L11.0664 15.293C9.90941 14.254 8.53463 13.996 7.51562 14Z" fill="black"></path>
                                            </svg>
                                        </div>
                                        <div class="about-service-content">
                                            <h4 class="about-service-title">Increased Productivity</h4>
                                            <p class="about-service-subtitle">By optimizing shift scheduling and reducing conflicts, our solution helps maximize workforce productivity. Ensure the right people are scheduled for the right shifts, minimizing downtime and increasing overall efficiency.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

    </main>
@include("layouts.app-footer")

</html>
