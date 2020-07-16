<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required Meta Tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />

    <title>HRMS</title>
    <link rel="icon" type="image/png" href="assets/img/favicon.png" />

    <link rel="stylesheet" href="{{asset('assets/bundle/app.css')}}" />
  </head>

  <body>
    <div class="pageloader"></div>
    <div class="infraloader is-active"></div>

    @yield('content')

    <!-- Dark footer -->
    <footer id="dark-footer" class="footer footer-dark">
      <div class="container">
        <div class="columns">
          <div class="column">
            <div class="footer-column">
              <div class="footer-header">
                <h3>Product</h3>
              </div>
              <ul class="link-list">
                <li><a href="javascript:;">Discover features</a></li>
                <li><a href="javascript:;">CMS integration</a></li>
                <li><a href="javascript:;">Customers</a></li>
                <li><a href="javascript:;">Weekly sessions</a></li>
                <li><a href="javascript:;">Free trials and demo</a></li>
                <li><a href="javascript:;">What's next ?</a></li>
              </ul>
            </div>
          </div>
          <div class="column">
            <div class="footer-column">
              <div class="footer-header">
                <h3>Company</h3>
              </div>
              <ul class="link-list">
                <li><a href="{{'/about'}}">About us</a></li>
                <li><a href="{{'/contact'}}">Contact us</a></li>
                <li><a href="javascript:;">User guide</a></li>
                <li><a href="javascript:;">Terms and Policy</a></li>
              </ul>
            </div>
          </div>
          <div class="column">
            <div class="footer-column">
              <div class="footer-header">
                <h3>Learning</h3>
              </div>
              <ul class="link-list">
                <li><a href="javascript:;">Resources</a></li>
                <li><a href="javascript:;">Blog</a></li>
                <li><a href="javascript:;">FAQ</a></li>
                <li><a href="javascript:;">API documentation</a></li>
                <li><a href="javascript:;">Admin guide</a></li>
              </ul>
            </div>
          </div>
          <div class="column">
            <div class="footer-column">
              <div class="footer-logo">
                <img src="assets/img/logos/bulkit-sky.svg" alt="" />
              </div>
              <div class="footer-header">
                <nav class="level is-mobile">
                  <div class="level-left level-social">
                    <a href="javascript:;" class="level-item">
                      <span class="icon"><i class="fa fa-facebook"></i></span>
                    </a>
                    <a href="javascript:;" class="level-item">
                      <span class="icon"><i class="fa fa-twitter"></i></span>
                    </a>
                    <a href="javascript:;" class="level-item">
                      <span class="icon"><i class="fa fa-linkedin"></i></span>
                    </a>
                    <a href="javascript:;" class="level-item">
                      <span class="icon"><i class="fa fa-dribbble"></i></span>
                    </a>
                    <a href="javascript:;" class="level-item">
                      <span class="icon"><i class="fa fa-github"></i></span>
                    </a>
                  </div>
                </nav>
              </div>
              <div class="copyright">
                <span class="moto light-text"
                  >Designed and coded with
                  <i class="fa fa-heart color-red"></i> by Sparkle.</span
                >
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <!-- /Dark footer -->

    <!-- Back To Top Button -->
    <div id="backtotop"><a href="javascript:;"></a></div>
    <script src="{{asset('assets/bundle/app.js')}}"></script>

    <!-- Custom js-->
    @yield('footer-js')
  </body>

</html>
