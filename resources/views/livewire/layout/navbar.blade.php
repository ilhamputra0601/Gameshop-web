<header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!-- ***** Logo Start ***** -->
                    <a href="index.html" class="logo">
                        <img src="assets/images/logo.png" alt="" style="width: 158px;">
                    </a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                      <li><a href="/" class="{{ Request::is('/') ? 'active' : '' }}">Home</a></li>
                      <li><a href="/shop" class="{{ Request::is('shop') ? 'active' : '' }}">Our Shop</a></li>
                      <li><a href="/contact" class="{{ Request::is('contact') ? 'active' : '' }}">Contact Us</a></li>
                      <li><a href="{{ route('login') }}">Sign In</a></li>
                  </ul>
                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>
                    <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
    </div>
  </header>
