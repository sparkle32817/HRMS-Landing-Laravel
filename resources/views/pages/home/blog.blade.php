@extends('layouts.common')

@section('content')

<!-- Hero (Parallax) and nav -->
<div
  class="hero parallax is-cover is-relative is-default is-bold"
  data-background="https://via.placeholder.com/1920x1080"
  data-color="#000"
  data-color-opacity="0.3"
  data-demo-background="assets/img/startup/blog.jpg"
>
 
  @include('layouts.menu')
      
  <!-- Hero image -->
  <div id="main-hero" class="hero-body">
    <div class="container has-text-centered">
      <div class="columns is-vcentered">
        <div
          class="column is-6 is-offset-3 has-text-centered is-header-caption"
        >
          <h1 class="title main-title subpage-title text-bold is-2">
            BLOG
          </h1>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Blog post list section -->
<div class="section is-medium blog-section section-light-grey">
  <div class="container">
    <div class="columns">
      <div class="column is-8 is-offset-2">
        <!-- Blog post -->
        <div class="flex-card is-post is-pulled-top light-bordered">
          <!-- Post header -->
          <div
            class="header has-background-image"
            data-background="https://via.placeholder.com/1200x300"
            data-demo-background="assets/img/startup/posts/post1.jpg"
          >
            <div class="title-wrapper">
              <h2 class="post-title">
                How design has become critical in business Projects
              </h2>
              <h4 class="post-subtitle">
                Real insights about real businesses
              </h4>
            </div>
            <div class="author-avatar">
              <img
                src="https://via.placeholder.com/250x250"
                alt=""
                data-demo-src="assets/img/startup/avatars/alan.jpg"
              />
            </div>
            <!-- Header overlay -->
            <div class="header-overlay"></div>
          </div>
          <!-- Post body -->
          <div class="post-body">
            <div>
              <span>by</span>
              <a class="author-name" href="javascript:;"><b>Alan Maynard</b></a>
            </div>
            <small
              >Posted in <a href="javascript:;">Web Design</a> on oct 20
              2017</small
            >
            <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc
              lacinia euismod urna, in gravida leo efficitur a. Sed tempus
              augue risus, eget faucibus urna hendrerit a. Donec pulvinar
              maximus dui ut porttitor. Nullam tristique tortor et ipsum
              tristique, ac lacinia diam faucibus. Nunc cursus massa eget
              consectetur laoreet ...
            </p>
            <div class="content-footer">
              <div class="footer-details">
                <a
                  class="button is-link btn-upper"
                  href="startup-post-sidebar.html"
                  >Read more</a
                >
                <div class="likes-count ml-auto">
                  <i class="im im-icon-Heart-2"></i>
                  <span class="stat">32</span>
                </div>
                <div class="comments-count">
                  <i class="im im-icon-Speach-Bubble11"></i>
                  <span class="stat">8</span>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Blog post -->
        <div class="flex-card is-post light-bordered">
          <!-- Post header -->
          <div
            class="header has-background-image"
            data-background="https://via.placeholder.com/1200x300"
            data-demo-background="assets/img/startup/posts/post2.jpg"
          >
            <div class="title-wrapper">
              <h2 class="post-title">
                5 Things you should know when planning for a new online
                store
              </h2>
              <h4 class="post-subtitle">
                Pieces of advice that will help grow your business
              </h4>
            </div>
            <div class="author-avatar">
              <img
                src="https://via.placeholder.com/250x250"
                alt=""
                data-demo-src="assets/img/startup/avatars/carolin.png"
              />
            </div>
            <!-- Header overlay -->
            <div class="header-overlay"></div>
          </div>
          <!-- Post body -->
          <div class="post-body">
            <div>
              <span>by</span>
              <a class="author-name" href="javascript:;"><b>Marjory Cambell</b></a>
            </div>
            <small
              >Posted in <a href="javascript:;">Ecommerce</a> on
              <a href="javascript:;">oct 13 2017</a></small
            >
            <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc
              lacinia euismod urna, in gravida leo efficitur a. Sed tempus
              augue risus, eget faucibus urna hendrerit a. Donec pulvinar
              maximus dui ut porttitor. Nullam tristique tortor et ipsum
              tristique, ac lacinia diam faucibus. Nunc cursus massa eget
              consectetur laoreet ...
            </p>
            <div class="content-footer">
              <div class="footer-details">
                <a
                  class="button is-link btn-upper font-w-500"
                  href="startup-post-sidebar.html"
                  >Read more</a
                >
                <div class="likes-count ml-auto">
                  <i class="im im-icon-Heart-2"></i>
                  <span class="stat">64</span>
                </div>
                <div class="comments-count">
                  <i class="im im-icon-Speach-Bubble11"></i>
                  <span class="stat">6</span>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Blog post -->
        <div class="flex-card is-post light-bordered">
          <!-- Post header -->
          <div
            class="header has-background-image"
            data-background="https://via.placeholder.com/1200x300"
            data-demo-background="assets/img/startup/posts/post3.jpg"
          >
            <div class="title-wrapper">
              <h2 class="post-title">
                Power up your SPA developments by using Vue js
              </h2>
              <h4 class="post-subtitle">
                A javascript framework that simplifies everything
              </h4>
            </div>
            <div class="author-avatar">
              <img
                src="https://via.placeholder.com/250x250"
                alt=""
                data-demo-src="assets/img/startup/avatars/marc.jpg"
              />
            </div>
            <!-- Header overlay -->
            <div class="header-overlay"></div>
          </div>
          <!-- Post body -->
          <div class="post-body">
            <div>
              <span>by</span>
              <a class="author-name" href="javascript:;"><b>Marc Walters</b></a>
            </div>
            <small
              >Posted in <a href="javascript:;">Javascript</a> on
              <a href="javascript:;">oct 09 2017</a></small
            >
            <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc
              lacinia euismod urna, in gravida leo efficitur a. Sed tempus
              augue risus, eget faucibus urna hendrerit a. Donec pulvinar
              maximus dui ut porttitor. Nullam tristique tortor et ipsum
              tristique, ac lacinia diam faucibus. Nunc cursus massa eget
              consectetur laoreet ...
            </p>
            <div class="content-footer">
              <div class="footer-details">
                <a
                  class="button is-link btn-upper font-w-500"
                  href="startup-post-sidebar.html"
                  >Read more</a
                >
                <div class="likes-count ml-auto">
                  <i class="im im-icon-Heart-2"></i>
                  <span class="stat">17</span>
                </div>
                <div class="comments-count">
                  <i class="im im-icon-Speach-Bubble11"></i>
                  <span class="stat">2</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection