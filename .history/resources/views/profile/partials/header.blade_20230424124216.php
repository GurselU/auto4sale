<!--=================================
 header -->

<header id="header" class="topbar-dark">
  <div class="topbar">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 col-md-12">
          <div class="topbar-left text-lg-start text-center">
            <ul class="list-inline">
              <li> <i class="fa fa-envelope-o"> </i> info@autoforsale.be</li>
              <li> <i class="fa fa-clock-o"></i> Lundi - Dimanche 08:00 - 22:00</li>
            </ul>
          </div>
        </div>
        <div class="col-lg-6 col-md-12">
          <div class="topbar-right text-lg-end text-center">
            <ul class="list-inline">
              <li> <i class="fa fa-phone"></i> +32 491 76 77 28</li>
              <li><a href="https://www.facebook.com/profile.php?id=100090436626844"><i class="fa fa-facebook"></i></a></li>
              <li><a href="https://instagram.com/auto4sale.be?igshid=YmMyMTA2M2Y="><i class="fa fa-instagram"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!--=================================
 mega menu -->

  <div class="menu">
    <!-- menu start -->
    <nav id="menu" class="mega-menu">
      <!-- menu list items container -->
      <section class="menu-list-items">
        <div class="container">
          <div class="row">
            <div class="col-md-12 position-relative">
              <!-- menu logo -->
              <ul class="menu-logo">
                <li>
                  <a href="{{ url('') }}"><img id="logo_dark_img" src="{{asset('images/logo-dark.png')}}" alt="logo"> </a>
                </li>
              </ul>
              <!-- menu links -->
              <ul class="menu-links">
                <!-- active class -->
                <li class="{{ request()->path() == '/' ? 'active' : '' }}"><a href="{{ url('') }}">Véhicule</a></li>
                <li class="{{ request()->path() == 'dealer' ? 'active' : '' }}"><a href="{{ url('dealer') }}">Vous êtes marchands ?</a></li>
                <li class="{{ request()->path() == 'dealer' ? 'active' : '' }}"><a href="{{ url('dealer') }}">Vous êtes marchands ?</a></li>
                <li class="{{ request()->path() == 'dealer' ? 'active' : '' }}"><a href="{{ url('dealer') }}">Vous êtes marchands ?</a></li>
              </ul>


            </div>
          </div>
        </div>
      </section>
    </nav>
    <!-- menu end -->
  </div>
</header>

<!--=================================
 header -->