@extends('layouts.common')

@section('title', 'トップページ')
@section('content')
<div class="page-header d-flex align-items-center">
  <div class="container position-relative">
    <div class="row d-flex justify-content-center">
      <div class="col-lg-6 text-center">
        <h2>お問い合わせ</h2>
        <p>ご質問がございましたらお問い合わせください
        </p>

      </div>
    </div>
  </div>
</div><!-- End Page Header -->
<!-- ======= Contact Section ======= -->
<section id="contact" class="contact">
  <div class="container">

    <div class="row gy-4 justify-content-center">

      <div class="col-lg-3">
        <div class="info-item d-flex">
          <i class="bi bi-geo-alt flex-shrink-0"></i>
          <div>
            <h4>住所:</h4>
            <p>兵庫県神戸市兵庫区荒田町3丁目14-7-301
            </p>
          </div>
        </div>
      </div><!-- End Info Item -->

      <div class="col-lg-3">
        <div class="info-item d-flex">
          <i class="bi bi-envelope flex-shrink-0"></i>
          <div>
            <h4>電子メール:</h4>
            <p>web@mtche.jp</p>
          </div>
        </div>
      </div><!-- End Info Item -->

      <div class="col-lg-3">
        <div class="info-item d-flex">
          <i class="bi bi-phone flex-shrink-0"></i>
          <div>
            <h4>電話番号:</h4>
            <p>080-6102-3347
            </p>
          </div>
        </div>
      </div><!-- End Info Item -->

    </div>
    <div class="row justify-content-center mt-4">
      <div class="col-lg-9">
        <form action="forms/contact.php" method="post" role="form" class="php-email-form">
          <div class="row">
            <div class="col-md-6 form-group">
              <p>お名前</p>
              <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
            </div>
            <div class="col-md-6 form-group mt-3 mt-md-0">
              <p>電子メール</p>
              <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
            </div>
          </div>
          <div class="form-group mt-3">
            <p>タイトル</p>
            <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
          </div>
          <div class="form-group mt-3">
            問い合わせ内容
            <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
          </div>
          <div class="my-3">
            <div class="loading">Loading</div>
            <div class="error-message"></div>
            <div class="sent-message">Your message has been sent. Thank you!</div>
          </div>
          <div class="text-center"><button type="submit">送信</button></div>
        </form>
      </div><!-- End Contact Form -->
    </div>
  </div>
</section><!-- End Contact Section -->
@endsection