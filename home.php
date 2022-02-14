<?php get_header(); ?>
<div class="p-home">
   <div class="mv">
       <h2 class="mv__ttl animate__animated animate__fadeInUp">Web Designer</h2>
       <p class="mv__txt animate__animated animate__fadeInUp">Nakaji</p>
   </div>
   <div class="container">
       <p class="description">
           2022年12月は、まだ対応可能な枠がございます。<br>
           お仕事のご依頼は<a href="/contact">こちら</a>からお願いいたします。
           <i class="fas fa-home">koko</i>
       </p>
       <div class="body" id="section">
           <h3 class="c-ttl">SERVICE</h3>
           <ul class="service-list">
              <li class="service-list__item">
                  <div class="img-box">
                      <img src="<?= get_template_directory_uri(); ?>/src/images/design-ico.png" alt="デザイン">
                  </div>
                  <h4 class="ttl">デザイン</h4>
                  <p>サイトやバナーのデザインが可能です。</p>
              </li>
              <li class="service-list__item">
                  <div class="img-box">
                    <img src="<?= get_template_directory_uri(); ?>/src/images/cording-ico.png" alt="コーディング">
                  </div>
                  <h4 class="ttl">コーディング</h4>
                  <p>短納期のコーディングもお任せください</p>
              </li>
              <li class="service-list__item">
                  <div class="img-box">
                      <img src="<?= get_template_directory_uri(); ?>/src/images/wordpress-ico.png');" alt="ワードプレス">
                  </div>
                  <h4 class="ttl">WordPress</h4>
                  <p>50サイト以上のテーマ制作の経験があります！</p>
              </li>
            </ul>
            <div class="c-btn"><a href="/contact">問い合わせ</a></div>
            <h3 class="c-ttl">WORKS</h3>
            <ul class="work-list">
              <li class="work-list__item">
                  <a href="/smoothista">
                      <div class="img-box">
                          <img src="<?= get_template_directory_uri(); ?>/src/images/works01.jpg" alt="制作実績その１">
                      </div>
                      <span class="ttl">Smoothista</span>
                      <span class="category">デザイン</span>
                      <span class="category">コーディング</span>
                  </a>
              </li>
              <li class="work-list__item">
                   <a href="/necopoppo">
                        <div class="img-box">
                           <img src="<?= get_template_directory_uri(); ?>/src/images/works02.jpg" alt="制作実績その２">
                        </div>
                        <span class="ttl">ねこポッポ株式会社</span>
                        <span class="category">デザイン</span>
                        <span class="category">コーディング</span>
                        <span class="category">WordPress</span>
                   </a>
              </li>
              <li class="work-list__item">
                   <a href="/dark-continent">
                       <div class="img-box">
                          <img src="<?= get_template_directory_uri(); ?>/src/images/works03.jpg');" alt="制作実績その３">
                       </div>
                       <span class="ttl">暗黒大陸</span>
                       <span class="category">デザイン</span>
                   </a>                   
              </li>
              <li class="work-list__item">
                  <div class="img-box">
                      <img src="<?= get_template_directory_uri(); ?>/src/images/works04.jpg');" alt="制作実績その４">
                  </div>
              </li>
              <li class="work-list__item">
                  <div class="img-box">
                      <img src="<?= get_template_directory_uri(); ?>/src/images/works05.jpg');" alt="制作実績その５">
                  </div>
              </li>
              <li class="work-list__item">
                  <div class="img-box">
                      <img src="<?= get_template_directory_uri(); ?>/src/images/works06.jpg');" alt="制作実績その６">
                  </div>
              </li>
              <li class="work-list__item">
                  <div class="img-box">
                      <img src="<?= get_template_directory_uri(); ?>/src/images/works07.jpg');" alt="制作実績その７">
                  </div>
              </li>
              <li class="work-list__item">
                  <div class="img-box">
                      <img src="<?= get_template_directory_uri(); ?>/src/images/works08.jpg');" alt="制作実績その８">
                  </div>
              </li>
            </ul>
            <div class="c-btn"><a href="/works">WORKS一覧</a></div>
        </div>
   </div>
<?php get_footer(); ?>