@extends('layouts.common')

@section('title', 'トップページ')
@section('content')
<section id="hero" class="hero d-flex flex-column justify-content-center align-items-center" data-aos="fade"
    data-aos-delay="1500">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-6 text-center">
          <h2>お客様 <span>ビズネスに</span> 合わせてホームページを作成します。</h2>
          <p>自由にテンプレートから選んで、お客様のビジネスに合わせてホームページを作成いたします。安価で迅速に対応いたしますので、お気軽にご相談ください。</p>
          <a href="{{ route('contact') }}" class="btn-get-started">お問い合わせ</a>
        </div>
      </div>
    </div>
  </section><!-- End Hero Section -->

<!-- ======= Services Section ======= -->
<section id="services" class="services">
  <div class="container">

    <div class="row gy-4">

      <div class="col-xl-3 col-md-6 d-flex">
        <div class="service-item position-relative">
          <i class="bi bi-activity"></i>
          <h4><a href="" class="stretched-link">Lorem Ipsum</a></h4>
          <p>Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p>
        </div>
      </div><!-- End Service Item -->

      <div class="col-xl-3 col-md-6 d-flex">
        <div class="service-item position-relative">
          <i class="bi bi-bounding-box-circles"></i>
          <h4><a href="" class="stretched-link">Sed ut perspici</a></h4>
          <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore</p>
        </div>
      </div><!-- End Service Item -->

      <div class="col-xl-3 col-md-6 d-flex">
        <div class="service-item position-relative">
          <i class="bi bi-calendar4-week"></i>
          <h4><a href="" class="stretched-link">Magni Dolores</a></h4>
          <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia</p>
        </div>
      </div><!-- End Service Item -->

      <div class="col-xl-3 col-md-6 d-flex">
        <div class="service-item position-relative">
          <i class="bi bi-broadcast"></i>
          <h4><a href="" class="stretched-link">Nemo Enim</a></h4>
          <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis</p>
        </div>
      </div><!-- End Service Item -->

    </div>

  </div>
</section><!-- End Services Section -->

<!-- ======= Pricing Section ======= -->
<section id="pricing" class="pricing">
  <div class="container">

    <div class="section-header">
      <h2>金額</h2>
      <p>プラン一覧</p>
    </div>

    <div class="row gy-4 gx-lg-5">

      <div class="col-lg-6">
        <div class="pricing-item d-flex justify-content-between">
          <h3>ビズネスホームページ(問い合わせ付け)</h3>
          <h4>20.000円～</h4>
        </div>
      </div><!-- End Pricing Item -->

      <div class="col-lg-6">
        <div class="pricing-item d-flex justify-content-between">
          <h3>Fashion Photography</h3>
          <h4>$300.00</h4>
        </div>
      </div><!-- End Pricing Item -->

      <div class="col-lg-6">
        <div class="pricing-item d-flex justify-content-between">
          <h3>Sports Photography</h3>
          <h4>$200.00</h4>
        </div>
      </div><!-- End Pricing Item -->

      <div class="col-lg-6">
        <div class="pricing-item d-flex justify-content-between">
          <h3>Still Life Photography</h3>
          <h4>$120.00</h4>
        </div>
      </div><!-- End Pricing Item -->

      <div class="col-lg-6">
        <div class="pricing-item d-flex justify-content-between">
          <h3>Wedding Photography</h3>
          <h4>$500.00</h4>
        </div>
      </div><!-- End Pricing Item -->

      <div class="col-lg-6">
        <div class="pricing-item d-flex justify-content-between">
          <h3>Photojournalism</h3>
          <h4>$200.00</h4>
        </div>
      </div><!-- End Pricing Item -->

    </div>
</section><!-- End Pricing Section -->

<!-- ======= Testimonials Section ======= -->
<section id="testimonials" class="testimonials">
  <div class="container">

    <div class="section-header">
      <h2>Testimonials</h2>
      <p>What they are saying</p>
    </div>

    <div class="slides-3 swiper">
      <div class="swiper-wrapper">

        <div class="swiper-slide">
          <div class="testimonial-item">
            <div class="stars">
              <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
            </div>
            <p>
              Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
            </p>
            <div class="profile mt-auto">
              <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
              <h3>Saul Goodman</h3>
              <h4>Ceo &amp; Founder</h4>
            </div>
          </div>
        </div><!-- End testimonial item -->

        <div class="swiper-slide">
          <div class="testimonial-item">
            <div class="stars">
              <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
            </div>
            <p>
              Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
            </p>
            <div class="profile mt-auto">
              <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
              <h3>Sara Wilsson</h3>
              <h4>Designer</h4>
            </div>
          </div>
        </div><!-- End testimonial item -->

        <div class="swiper-slide">
          <div class="testimonial-item">
            <div class="stars">
              <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
            </div>
            <p>
              Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
            </p>
            <div class="profile mt-auto">
              <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
              <h3>Jena Karlis</h3>
              <h4>Store Owner</h4>
            </div>
          </div>
        </div><!-- End testimonial item -->

        <div class="swiper-slide">
          <div class="testimonial-item">
            <div class="stars">
              <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
            </div>
            <p>
              Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
            </p>
            <div class="profile mt-auto">
              <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
              <h3>Matt Brandon</h3>
              <h4>Freelancer</h4>
            </div>
          </div>
        </div><!-- End testimonial item -->

        <div class="swiper-slide">
          <div class="testimonial-item">
            <div class="stars">
              <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
            </div>
            <p>
              Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
            </p>
            <div class="profile mt-auto">
              <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
              <h3>John Larson</h3>
              <h4>Entrepreneur</h4>
            </div>
          </div>
        </div><!-- End testimonial item -->

      </div>
      <div class="swiper-pagination"></div>
    </div>

  </div>
</section><!-- End Testimonials Section -->
@endsection