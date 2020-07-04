<nav
  class="navbar navbar-wrapper navbar-fade navbar-light is-transparent"
>
  <div class="container">
    <!-- Brand -->
    <div class="navbar-brand">
      <a class="navbar-item" href="{{'/'}}">
        <img
          class="light-logo"
          src="assets/img/logos/bulkit-white.svg"
          alt=""
        />
        <img
          class="dark-logo"
          src="assets/img/logos/bulkit-prime.svg"
          alt=""
        />
      </a>

      <!-- Responsive toggle -->
      <div class="custom-burger" data-target="nav-menu">
        <a class="responsive-btn" href="javascript:void(0);">
          <span class="menu-toggle">
            <span class="icon-box-toggle">
              <span class="rotate">
                <i class="icon-line-top"></i>
                <i class="icon-line-center"></i>
                <i class="icon-line-bottom"></i>
              </span>
            </span>
          </span>
        </a>
      </div>
      <!-- /Responsive toggle -->
    </div>

    <!-- Navbar menu -->
    <div id="nav-menu" class="navbar-menu">
      <!-- Navbar Start -->
      <div class="navbar-end">
        <!-- Navbar item -->
        <a class="navbar-item is-slide" href="{{'/blog'}}">
          Blog
        </a>
        <!-- Navbar item -->
        <a class="navbar-item is-slide" href="{{'/about'}}">
          About Us
        </a>
        <!-- Navbar item -->
        <a class="navbar-item is-slide" href="{{'/contact'}}">
          Contact Us
        </a>
      </div>

      <!-- Navbar end -->
      {{-- <div class="navbar-end">
        <!-- Signup button -->
        <div class="navbar-item">
          <a
            id="#signup-btn"
            href="{{'/sign'}}"
            class="button button-signup btn-outlined is-bold btn-align light-btn rounded raised"
          >
            Sign up
          </a>
        </div>
      </div> --}}
    </div>
  </div>
</nav>