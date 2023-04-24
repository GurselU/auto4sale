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
                <li class="{{ (request()->routeIs('car.index')) ? 'active' : '' }}"><a href="{{route('car.index')}}">Véhicules</a></li>
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