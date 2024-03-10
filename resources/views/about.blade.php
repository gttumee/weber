@extends('layouts.common')

@section('title', 'トップページ')
@section('content')
<div class="page-header d-flex align-items-center">
  <div class="container position-relative">
    <div class="row d-flex justify-content-center">
      <div class="col-lg-6 text-center">
        <h2>私は</h2>
        <p>自由にテンプレートから選んで、お客様のビジネスに合わせてホームページを作成いたします。安価で迅速に対応いたしますので、お気軽にご相談ください。.</p>

        <a class="cta-btn" href="{{route('contact')}}">お問い合わせ</a>

      </div>
    </div>
  </div>
</div><!-- End Page Header -->

<!-- ======= About Section ======= -->
<section id="about" class="about">
  <div class="container">

    <div class="row gy-4 justify-content-center">
      <div class="col-lg-4">
        <img src="{{'img/profile.jpg'}}" class="img-fluid" alt="">
      </div>
      <div class="col-lg-5 content">
        <h2>開発エンジニア</h2>
        <p class="fst-italic py-3">
          日本で働いているモンゴル出身のエンジニア
        </p>
        <div class="row">
          <div class="col-lg-6">
            <ul>
              <li><i class="bi bi-chevron-right"></i> <strong>生年月日:</strong> <span>1989年5月25日</span></li>
              <li><i class="bi bi-chevron-right"></i> <strong>HP:</strong> <span>www.tume.jp</span></li>
              <li><i class="bi bi-chevron-right"></i> <strong>電話番号:</strong> <span>080-1494-7801</span></li>
              <li><i class="bi bi-chevron-right"></i> <strong>住まい:</strong> <span>東京都</span></li>
            </ul>
          </div>
          <div class="col-lg-6">
            <ul>
              <li><i class="bi bi-chevron-right"></i> <strong>年齢:</strong> <span>35</span></li>
              <li><i class="bi bi-chevron-right"></i> <strong>メール:</strong> <span>tmkee0525@gmail.com</span>
              </li>
              <li><i class="bi bi-chevron-right"></i> <strong>フリーランス:</strong> <span>可能</span></li>
            </ul>
          </div>
        </div>
        <p class="py-3">
          日本で働いている現在7年間になりました。日本の素敵ところ大好きで、ずっと日本で住みたいと思っています。
          最初はインフラエンジニアで働いていましたが、phpフレームワークlaravelにはまってしまって現在laravelで簡単な登録システムなど
          勉強しながら開発したいます。
        </p>
        <p class="m-0">
          お客様がテンプレート選んで意見に合わせてホームページ作成することが自分のできることなので、頑張っていきます。
          よろしくお願いいたします。
        </p>
      </div>
    </div>

  </div>
</section><!-- End About Section -->

<!-- ======= Testimonials Section ======= -->
<section id="testimonials" class="testimonials">
  <div class="container">

    <div class="section-header">
      <h2>実績</h2>
      <p>
        お客様の声
        </p>
    </div>

    <div class="slides-3 swiper">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <div class="testimonial-item">
            <div class="stars">
              <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
            </div>
            <p>
              素敵なホームページ作成していただきありがとうございました。
            </p>
            <div class="profile mt-auto">
              <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
              <h3>tsogtbayar</h3>
              <h4>取締役 &amp; 社長</h4>
            </div>
          </div>
        </div><!-- End testimonial item -->
      </div>
      <div class="swiper-pagination"></div>
    </div>
  </div>
</section><!-- End Testimonials Section -->


@endsection