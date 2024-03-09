
  <!-- ======= Header ======= -->
    <div class="container-fluid d-flex align-items-center justify-content-between">
      <a href="{{ route('index') }}" class="logo d-flex align-items-center  me-auto me-lg-0">
        <img src="{{ asset('img/gallery/logo.png') }}" alt="">
        <h1>株式会社MTCHE</h1>
      </a>

      <nav id="navbar" class="navbar">
        <ul>
            <li><a href="{{ route('index') }}" @if(Request::is('/')) class="active" @endif>ホーム</a></li>
            <li><a href="{{ route('about') }}" @if(Request::route()->getName() == 'about') class="active" @endif>私たち</a></li>
          <li class="dropdown"><a href="{{ route('detail') }}"><span>テンプレート</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              <li><a href="gallery.html">飲食</a></li>
              <li><a href="gallery.html">会社</a></li>
              <li><a href="gallery.html">美容院</a></li>
              <li><a href="gallery.html">病院</a></li>
              <li><a href="gallery.html">スポーツ</a></li>
              <li><a href="gallery.html">旅行</a></li>
              <li class="dropdown"><a href="#"><span>他の</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
                <ul>
                  <li><a href="#">Sub Menu 1</a></li>
                  <li><a href="#">Sub Menu 2</a></li>
                  <li><a href="#">Sub Menu 3</a></li>
                </ul>
              </li>
            </ul>
          </li>
          <li><a href="{{ route('service') }}" @if(Request::route()->getName() == 'service') class="active" @endif>金額</a></li>
          <li><a href="{{ route('contact') }}" @if(Request::route()->getName() == 'contact') class="active" @endif>お問い合わせ</a></li>

        </ul>
      </nav><!-- .navbar -->

      <div class="header-social-links">
        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
      </div>
      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
    </div>