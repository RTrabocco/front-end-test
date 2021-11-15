<header class="header">
  <div class="container container--wide">
    <div class="row align-items-center justify-content-center justify-content-lg-between">
      <div class="col-auto">
        <a class="header__logo" href="https://clevercherry.com/">
          <img class="header-logo" src="image/clevercherry-logo.svg" alt="Clever Cherry">
        </a>
      </div>
      <div class="col-auto d-none d-lg-flex">
        <a class="btn btn--secondary" href="#newsletter">Keep me updated</a>
      </div>
    </div>
  </div>
</header>

<section class="hero">
  <img class="hero__ellipse hero__ellipse--1" src="image/ellipse-1.svg" alt="">
  <div class="container container--wide position-relative">
  <img class="hero__ellipse hero__ellipse--2" src="image/ellipse-2.svg" alt="">
  <img class="hero__ellipse hero__ellipse--4" src="image/ellipse-4.svg" alt="">
    <div class="row flex-column-reverse flex-lg-row">
      <div class="col-10 col-lg-6 col-xxl-5 offset-1 offset-lg-0 offset-xxl-1">
        <div class="hero__content">
        <img class="hero__ellipse hero__ellipse--3" src="image/ellipse-3.svg" alt="">
          <h1>The <span class="highlight">intelligent</span> way to build systems</h1>
          <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam
            nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam 
            erat, sed diam voluptua.</p>
        </div>
      </div>
      <div class="col-10 col-lg-6 offset-1 offset-lg-0">
        <div class="hero__image">
          <img class="w-100" src="image/hero-img.svg" alt="">
          <a class="btn btn--secondary d-lg-none" href="#newsletter">Keep me updated</a>
        </div>
      </div>
    </div>
  </div>
</section>

<footer class="footer">
  <div class="container container--wide">
    <div class="row flex-lg-row-reverse">
      <div class="col-10 col-lg-6 col-xxl-7 offset-1 offset-lg-0 offset-xxl-1">
        <div class="footer__content">
          <h2 class="h1">Stay updated</h2>
          <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam 
              nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam 
              erat.</p>
        </div>
      </div>
      <div class="col-10 col-lg-6 col-xxl-4 offset-1 offset-lg-0">
        <div class="footer__newsletter">
          <h3>Sign up to our newsletter</h3>
          <form id="newsletter">
            <div class="form-group">
              <label for="newsletter-name">Name</label>
              <input class="form-control" id="newsletter-name" name="newsletter-name" placeholder="Enter your name" required="" type="text">
            </div>
            <div class="form-group">
              <label for="newsletter-email">Email address</label>
              <input class="form-control" id="newsletter-email" name="newsletter-email" placeholder="Enter your email address" required="" type="email">
            </div>
            <div class="form-group text-end">
              <button class="btn btn--white" type="submit">Submit</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</footer>