@extends('layouts.common')

@section('title', 'トップページ')
<section id="hero" class="hero d-flex flex-column justify-content-center align-items-center" data-aos="fade"
    data-aos-delay="1500">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-6 text-center">
          <h2>お客様 <span>ビズネス</span>に合わせてホームページを作成します。</h2>
          <p>自由にテンプレートから選んで、お客様のビジネスに合わせてホームページを作成いたします。安価で迅速に対応いたしますので、お気軽にご相談ください。</p>
          <a href="{{ route('contact') }}" class="btn-get-started">お問い合わせ</a>
        </div>
      </div>
    </div>
  </section><!-- End Hero Section -->
@section('content')
  <!-- ======= Gallery Section ======= -->
  <section id="gallery" class="gallery">
    <div class="container-fluid">
      <div class="row gy-4 justify-content-center">
        <div class="col-xl-3 col-lg-4 col-md-6">
          <div class="gallery-item h-100">
            <img src="{{ asset('img/gallery/uando.jpg') }}" class="img-fluid" alt="">
            <div class="gallery-links d-flex align-items-center justify-content-center">
              <a href="{{ asset('img/gallery/uando.jpg') }}" title="Gallery 1" class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
              <a href="{{route('detail')}}" class="details-link"><i class="bi bi-link-45deg">詳細見る</i></a>
            </div>
          </div>
          <a href="{{ route('contact') }}" class="btn-get-started">会社</a>
        </div><!-- End Gallery Item -->
        <div class="col-xl-3 col-lg-4 col-md-6">
          <div class="gallery-item h-100">
            <img src="{{ asset('img/gallery/nimokun.jpg') }}" class="img-fluid" alt="">
            <div class="gallery-links d-flex align-items-center justify-content-center">
              <a href="{{ asset('img/gallery/nimokun.jpg') }}" title="Gallery 1" class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
              <a href="gallery-single.html" class="details-link"><i class="bi bi-link-45deg"></i></a>
            </div>
          </div>
          <a href="{{ route('contact') }}" class="btn-get-started">飲食</a>

        </div><!-- End Gallery Item -->
        <div class="col-xl-3 col-lg-4 col-md-6">
          <div class="gallery-item h-100">
            <img src="{{ asset('img/gallery/free.jpg') }}" class="img-fluid" alt="">
            <div class="gallery-links d-flex align-items-center justify-content-center">
              <a href="{{ asset('img/gallery/free.jpg') }}" title="Gallery 1" class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
              <a href="gallery-single.html" class="details-link"><i class="bi bi-link-45deg"></i></a>
            </div>
          </div>
          <a href="{{ route('contact') }}" class="btn-get-started">病院</a>

        </div><!-- End Gallery Item -->
        <div class="col-xl-3 col-lg-4 col-md-6">
          <div class="gallery-item h-100">
            <img src="{{ asset('img/gallery/school.png') }}" class="img-fluid" alt="">
            <div class="gallery-links d-flex align-items-center justify-content-center">
              <a href="{{ asset('img/gallery/school.png') }}" title="Gallery 1" class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
              <a href="gallery-single.html" class="details-link"><i class="bi bi-link-45deg"></i></a>
            </div>
          </div>
          <a href="{{ route('contact') }}" class="btn-get-started">学校</a>
        </div><!-- End Gallery Item -->
        <div class="col-xl-3 col-lg-4 col-md-6">
          <div class="gallery-item h-100">
            <img src="{{ asset('img/gallery/company.jpg') }}" class="img-fluid" alt="">
            <div class="gallery-links d-flex align-items-center justify-content-center">
              <a href="{{ asset('img/gallery/company.jpg') }}" title="Gallery 1" class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
              <a href="gallery-single.html" class="details-link"><i class="bi bi-link-45deg"></i></a>
            </div>
          </div>
          <a href="{{ route('contact') }}" class="btn-get-started">会社</a>
        </div><!-- End Gallery Item -->
        <div class="col-xl-3 col-lg-4 col-md-6">
          <div class="gallery-item h-100">
            <img src="{{ asset('img/gallery/food.jpg') }}" class="img-fluid" alt="">
            <div class="gallery-links d-flex align-items-center justify-content-center">
              <a href="{{ asset('img/gallery/food.jpg') }}" title="Gallery 1" class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
              <a href="gallery-single.html" class="details-link"><i class="bi bi-link-45deg"></i></a>
            </div>
          </div>
          <a href="{{ route('contact') }}" class="btn-get-started">飲食</a>
        </div><!-- End Gallery Item -->
        <div class="col-xl-3 col-lg-4 col-md-6">
          <div class="gallery-item h-100">
            <img src="{{ asset('img/gallery/food.jpg') }}" class="img-fluid" alt="">
            <div class="gallery-links d-flex align-items-center justify-content-center">
              <a href="{{ asset('img/gallery/food.jpg') }}" title="Gallery 1" class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
              <a href="gallery-single.html" class="details-link"><i class="bi bi-link-45deg"></i></a>
            </div>
          </div>
          <a href="{{ route('contact') }}" class="btn-get-started">飲食</a>
        </div><!-- End Gallery Item -->
        <div class="col-xl-3 col-lg-4 col-md-6">
          <div class="gallery-item h-100">
            <img src="{{ asset('img/gallery/food.jpg') }}" class="img-fluid" alt="">
            <div class="gallery-links d-flex align-items-center justify-content-center">
              <a href="{{ asset('img/gallery/food.jpg') }}" title="Gallery 1" class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
              <a href="gallery-single.html" class="details-link"><i class="bi bi-link-45deg"></i></a>
            </div>
          </div>
          <a href="{{ route('contact') }}" class="btn-get-started">飲食</a>
        </div><!-- End Gallery Item -->
      </div>
    </div>
  </section><!-- End Gallery Section -->
  

@endsection