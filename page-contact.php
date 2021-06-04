<?php include 'header.php'; ?>
<header class="header nav_pc head">
  <div class="container">
    <div class="logo">
      <a href="front-page.php"><img class="logo" src="assets/img/NA.png" alt=""></a>
    </div>
    <div id="right" class="right">
      <ul>
        <li class="link"><a href="<?php echo esc_url(home_url('/')); ?>">TOP</a></li>
        <li class="link"><a href="<?php echo esc_url(home_url('Service')); ?>">弊社サービス</a></li>
        <li class="link"><a href="<?php echo esc_url(home_url('Flow')); ?>">お問合せからの流れ</a></li>
        <li class="link"><a href="<?php echo esc_url(home_url('About')); ?>">会社概要</a></li>
        <li class="link"><a href="<?php echo esc_url(home_url('Recruitment')); ?>">採用情報</a></li>
        <li class="link active"><a href="<?php echo esc_url(home_url('Contact')); ?>">お問い合わせ</a></li>
      </ul>
    </div>
  </div>
</header>

<header class="header nav_sp">
  <nav>
    <div class="container">
      <div class="logo">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/NA.png" alt="">
      </div>
      <!-- Hambuger Icon -->
      <div class="hamburger">
        <div class="bar">

        </div>
      </div>
      <!-- Mobile Nav -->
      <div class="mobile-nav">
        <a href="index.php">TOP</a>
        <a href="service.php">弊社サービス</a>
        <a href="flow.php">お問合せからの流れ</a>
        <a href="company_info.php">会社概要</a>
        <a href="recruitment.php">採用情報</a>
        <a href="contact.php">お問い合わせ</a>
      </div>
    </div>
  </nav>
</header>

<main>

  <section class="Page_Banner">
    <h1 class="Page_Banner__title">Contact Us</h1>
    <h3 class="Page_Banner__subtitle">お問い合わせ</h3>
  </section>
  <section class="Contact_form">
    <div class="container">
      <div class="form_title">
        <h3>Contact Form</h3>
        <p>下記フォームをご入力ください。</p>
        <hr><br><br>
      </div>
      <form class="contact__form" action="mail.php" method="post">
        <div class="contact__msg" style="display: none; color: white;">
          <p>Your message was sent successfully.</p>
        </div>
        <br>
        <label>会社名<span>*</span></label>
        <input type="text" class="form-control" name="company_name" id="company_name" required />
        <label>担当者氏名<span>*</span></label>
        <input type="text" class="form-control" name="person_inCharge" id="person_inCharge" required />
        <label>メールアドレス<span>*</span></label>
        <input type="email" class="form-control" name="email" id="email" required />
        <label>お電話番号 <span>*</span></label>
        <input type="text" class="form-control" name="tel_no" id="tel_no" required />
        <br>
        <label>メッセージ<span>*</span></label>
        <textarea name="message" id="Message" cols="60" rows="12"></textarea>
        <br><br>
        <div class="iagree">
          <input type="checkbox">
          私は株式会社エヌエーの<a href="privacy_policy.html">”個人情報保護に関する方針”および”個人情報に関する取扱い”</a>について同意します
        </div>
        <div class="g-recaptcha" data-sitekey="6LcjbdgUAAAAAF1SYhSs6MB0uDKucTFnoDIRAjkx"></div>
        <br>
        <input type="submit" name="send" value="送信内容を確認" class="btn btn-contact">
      </form>
    </div>
  </section>



</main>
<footer>
  <div class="container">
    <div class="left">
      <h3>About Us</h3>
      <hr>
      <p> <br>
        株式会社NA <br><br>
        〒133-0056 <br>
        東京都江戸川区南小岩2-3-15 <br><br>
        TEL 03-6657-9811 <br>
        FAX 03-6657-9812 <br><br>
      </p>
    </div>
    <div class="c_left nav-act">
      <h3>サイトマップ</h3>
      <hr><br><br>
      <li class="link"><a href="front-page.php">TOP</a></li>
      <li class="link"><a href="service.php">弊社サービス</a></li>
      <li class="link"><a href="flow.php">お問合せからの流れ</a></li>
      <li class="link"><a href="company_info.php">会社概要</a></li>
      <li class="link"><a href="recruitment.php">採用情報</a></li>
      <li class="link active"><a href="contact.php">お問い合わせ</a></li>
    </div>
    <div class="c_right">
      <h3>Contact Us</h3>
      <hr><br><br>
      <p>以下よりお気軽にお問合せ下さい。</p>
      <a href="contact.php">
        <button class="btn_ft">お問合せページへ</button>
      </a>
    </div>
    <div class="right">
      <div class="mapouter">
        <div class="gmap_canvas"><iframe class="gmap_iframe" width="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=350&amp;height=350&amp;hl=en&amp;q=〒133-0056 東京都江戸川区南小岩２丁目３−１５&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe><a href="https://www.fridaynightfunkin.net/">Friday Night Funkin</a></div>
        <style>
          .mapouter {
            position: relative;
            text-align: right;
            width: 100%;
            height: 350px;
          }

          .gmap_canvas {
            overflow: hidden;
            background: none !important;
            width: 100%;
            height: 350px;
          }

          .gmap_iframe {
            height: 350px !important;
          }
        </style>
      </div>
    </div>
  </div>
  <div class="copyright">
    <p><span>&copy;</span>2020 NA. All rights reserved.</p>
  </div>
</footer>

<?php include 'footer.php'; ?>