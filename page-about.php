<?php 
/*
Template Name: about
*/
?>
<?php get_header(); ?>
   <main>
      <?php custom_breadcrumb(); ?>
      <section class="p-about">
         <div class="container">
            <h1 class="c-ttl">ABOUT</h1>
            <div class="profile-img">
               <img src="<?= get_template_directory_uri(); ?>/src/images/prof.jpg" alt="プロフィール">
            </div>
            <div class="sns-link">
               <div class="img-box">
                  <a href="https://twitter.com/home" target="new">
                     <img src="<?= get_template_directory_uri(); ?>/src/images/twitter-ico.jpg" alt="twitterアイコン">
                   </a>
               </div>
               <div class="img-box">
                  <a href="https://www.instagram.com/" target="new">
                     <img src="<?= get_template_directory_uri(); ?>/src/images/instagram-ico.svg" alt="instagramアイコン">
                  </a>
               </div>
               <div class="img-box">
                  <a href="https://www.facebook.com/" target="new">
                     <img src="<?= get_template_directory_uri(); ?>/src/images/facebook-ico.svg" alt="facebookアイコン">
                  </a>
               </div>
               <div class="img-box">
                  <a href="https://www.youtube.com/" target="new">
                     <img src="<?= get_template_directory_uri(); ?>/src/images/youtube-ico.svg" alt="youtubeアイコン">
                  </a>
               </div>
            </div>
            <p class="txt">名前：なかじ</p>
            <p class="txt">28歳男性 / 広島市在住</p>
            <div class="heading">略歴</div>
            <p class="txt">1994年2月、範馬勇一郎の息子として生を享ける。この日、全世界の国家指導者達は一様に、東洋の国にとてつもない兵器が生まれるということを直感で理解し、核兵器の保有を決意させたとまで言われている。これを裏付けるように、勇次郎の自我は赤子のそれではなく、出胎時、自らを取り上げる産婆に対してテレパシーのような威圧を送って腰を抜かせ、またその直後には母親の乳房に噛付いて授乳を強要し、さらにはどこからか現れたヤドクガエルを素手で握り殺した。母親は勇次郎の出産後、出家して仏門に帰依しており、「最初で最後の子でした」と述べている。また勇次郎は若い頃、飛騨の山小屋に暮らす安藤とともに丸太切りを競っていたり、耐久力を身に付けるために己の体を転げ落とした絶壁や勇次郎が殺害した霊長類の夜叉猿夫妻の骨が飛騨にあることから、一時期飛騨で暮らしていたことが窺われる。その後の勇次郎は傭兵として様々な戦場に足を運び、素手で戦いに加わっていた。物語中では特にベトナム戦争でゲリラとして戦う勇次郎の姿が描かれている。16歳の時、戦場で出会った傭兵ジェーンをレイプしジャック・ハンマーを産ませている。</p>
            <div class="heading">資格</div>
            <p class="txt">手羽元綺麗に食べれる 印鑑押すのが上手い</p>
            <div class="heading">あいさつ</div>
            <p class="txt">よろしくお願いします</p>
            <div class="return">
               <a href="/">HOME</a>
            </div>
         </div>
      </section>
   </main>
<?php get_footer(); ?>