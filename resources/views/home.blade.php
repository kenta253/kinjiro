@extends('app')

@section('content')

@include('nav')

  <div class="section big-bg">
  </div>
<Fade-In>
  <div id="about-this-site">
    <div class="section valign-wrapper d-flex align-items-center justify-content-center">
      <div class="container">
          <h2 class="center grey-text text-darken-3 intro">About this site</h2>
            <div class="row">
              <div class="col s12">
              <p class="grey-text text-darken-3 center-align text-for-desktop">ここはエンジニアHoriuchiのポートフォリオサイトです。
                <br>
                <br>
                エンジニアの勉強をしていく時に「日々の勉強の記録やタスク管理、タイマーなどの
                <br>
                勉強する際にあって欲しいものをひとまとめにしたものを作れば
                <br>
                効率的に学習を行えるんじゃ無いだろうか。」
                <br>
                そんな思いから作成した総合学習プラットホームです。
                 </p>
            </div>
        </div>
      </div>
    </div>
</Fade-In>


<div id="about-me">
  <div class="section valign-wrapper　d-flex align-items-center justify-content-center">
      <div class="container">
        <h2 class="center">About me</h2>
        <div class="row">
          <div class="col s12 m2 offset-m2">
              <img id="profile-image" src="/image/batsumaru.jpeg" alt="プロフィール画像" width="150" height="150" data-aos-duration="300" data-aos="zoom-in" data-aos-once="true" class="aos-init aos-animate">
          </div>
          <div class="col s12 m6">
            <p>福岡県北九州市で生まれ育つ。中学校でバスケ部、高校大学で８年間吹奏楽とマーチングに打ち込む。大学では国と国との関係性に興味を持ち
              　外国語学部国際関係学科に入学。卒業後自分のアイデアを形にするような仕事がしたいと思い大手新築分譲住宅に企画営業職として入社。
              　その後、友人がプログラミングをしている所にたまたま居合わせてプログラミングの存在を知り、その後独学で勉強。
            </p>
            <ul>
              <li>- GitHub: <a href="https://github.com/kenta253/kinjiro" target="_blank" rel="noopener">https://github.com/kenta253/kinjiro</a></li>
              <li>- Qiita: <a href="https://qiita.com/hodanov" target="_blank" rel="noopener">https://qiita.com/hodanov</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
</div>


  <div id="profile" class="section valign-wrapper">
    <div class="container">
      <h2 class="center">Profile</h2>
      <p class="center">これまでの道のりをご紹介。</p>
      <div class="row">
        <div class="tree-container">
           {{-- ::before --}}
          <div class="leaf-row">
            <h2>1996~</h2>
            {{-- ::after --}}
            <Fade-In>
              <div class="leaf-circle leaf-medium aos-init aos-animate" style="background-image: url(/image/batsumaru.jpeg)" data-aos-duration="300" data-aos="zoom-in">
              </div>
            </Fade-In>
            <Fade-Cut>
              <div class="leaf-card aos-init aos-animate" data-aos="fade-left" data-aos-duration="300">
                <h3>北九州市小倉にて産声をあげる</h3>
              </div>
              <div class="leaf-card aos-init aos-animate" data-aos="fade-left" data-aos-duration="300">
                <h3>将来の夢は焼き鳥屋さん</h3>
              </div>
            </Fade-Cut>
          </div>

          <div class="leaf-row">
            <h2>2009~<span>中学時代</span></h2>
            <Fade-In>
              <div class="leaf-circle leaf-medium aos-init" style="background-image: url(asset/img/rsz_profile_1998.jpg)" data-aos-duration="300" data-aos="zoom-in">
              </div>
            </Fade-In>
            <Fade-Cut>
              <div class="leaf-card aos-init" data-aos="fade-left" data-aos-duration="300">
                <h3>バスケットボールに打ち込む</h3>
                <p>モンスターハンターを何時間でも延々とやり続けていた</p>
              </div>
            </Fade-Cut>
          </div>

          <div class="leaf-row">
            <h2>2012~<span>高校時代</span></h2>
            <Fade-In>
              <div class="leaf-circle leaf-medium aos-init" style="background-image: url(asset/img/rsz_profile_2006.jpg)" data-aos-duration="300" data-aos="zoom-in">
              </div>
            </Fade-In>
            <Fade-Cut>
              <div class="leaf-card aos-init" data-aos="fade-left" data-aos-duration="300">
                <h3>吹奏楽部に入部。学校そっちのけで打ち込む。</h3>
                <p>マーチングに出会う。</p>
              </div>
            </Fade-Cut>
          </div>

          <div class="leaf-row">
            <h2>2015~<span>大学時代</span></h2>
            <Fade-In>
              <div class="leaf-circle leaf-medium aos-init" style="background-image: url(asset/img/rsz_profile_2010.jpg)" data-aos-duration="300" data-aos="zoom-in">
              </div>
            </Fade-In>
            <Fade-Cut>
              <div class="leaf-card aos-init" data-aos="fade-left" data-aos-duration="300">
                <h3>国際関係学科にて国と国との関係性を学んでいた。</h3>
                <p>なぜか周りにエンジニアをやっている友達が多くいた。ここでは吹奏楽に打ち込む</p>
              </div>
            </Fade-Cut>
          </div>

          <div class="leaf-row">
            <h2>2020~<span>社会人</span></h2>
            <Fade-In>
              <div class="leaf-circle leaf-medium aos-init" style="background-image: url(asset/img/rsz_profile_2013.jpg)" data-aos-duration="300" data-aos="zoom-in">
              </div>
            </Fade-In>
            <div class="leaf-card aos-init" data-aos="fade-left" data-aos-duration="300">
              <h3>アイデアを形にする仕事がしたいと思い</h3>
              <h3>新築戸建て分譲会社に企画営業職として入社</h3>
              <p>土地の仕入れ、建物プランの企画、販売と、幅広く業務当たる。</p>
            </div>
          </div>

          <div class="leaf-row">
            <h2>2020　8月~</h2>
            <Fade-In>
              <div class="leaf-circle leaf-medium aos-init" style="background-image: url(asset/img/rsz_profile_2014.jpg)" data-aos-duration="300" data-aos="zoom-in">
              </div>
            </Fade-In>
            <div class="leaf-card aos-init" data-aos="fade-left" data-aos-duration="300">
              <h3>たまたま友人がプログラミングを書いている所に居合わせる</h3>
              <p>電子書籍やライフハック記事を読むようになります。</p>
            </div>
          </div>

          <div class="leaf-row">
            <h2>2015<span>8月</span></h2>
            <div class="leaf-circle leaf-medium aos-init" style="background-image: url(asset/img/rsz_profile_2015_08.jpg)" data-aos-duration="300" data-aos="zoom-in">
            </div>
            <div class="leaf-card aos-init" data-aos="fade-left" data-aos-duration="300">
              <h3>ブログを公開する</h3>
              <p>「アフィリエイトで儲かってノマド生活ができたら最高だなぁ」と思い、WordPressで楽譜の読み方や楽譜作成ソフトの使い方などの情報を発信し始めます。残念ながらこれで生活できるほど稼げてはいません。しかし2017年8月現在、月間80000PVのアクセスがあり、多くの人とWeb上で繋がっています。このブログをきっかけに、私はWebサイト制作の楽しさとIT技術のすごさを実感しました。</p>
            </div>
          </div>

          <div class="leaf-row">
            <h2>2015<span>12月</span></h2>
            <div class="leaf-circle leaf-medium aos-init" style="background-image: url(asset/img/rsz_profile_2015_12.jpg)" data-aos-duration="300" data-aos="zoom-in">
            </div>
            <div class="leaf-card aos-init" data-aos="fade-left" data-aos-duration="300">
              <h3>退職してIT技術を勉強する</h3>
              <p><span>「自由にWebアプリケーションを作れるようになったら、もっとすごいことになる！」</span></p>
              <p>一念発起、5年間勤務した会社を辞めました。退職後、職業訓練学校でHTML/CSS, JavaScript, JAVA, SQLの基礎を学びます。</p>
            </div>
          </div>

          <div class="leaf-row">
            <h2>2016<span>7月</span></h2>
            <div class="leaf-circle leaf-medium aos-init" style="background-image: url(asset/img/rsz_profile_2016.jpg)" data-aos-duration="300" data-aos="zoom-in">
            </div>
            <div class="leaf-card aos-init" data-aos="fade-left" data-aos-duration="300">
              <h3>そしてIT業界へ飛び込んだ</h3>
              <p>IT企業に拾ってもらい、現在はWebエンジニアとして働いています。</p>
            </div>
          </div>

        </div>
      </div>

      <div class="row">
        <div class="col s12 m8 offset-m2 closing-profile">
          <h2 data-aos="fade-in" data-aos-duration="700" data-aos-once="true" class="aos-init aos-animate">いろんな人への感謝とエンジニアリングへの想い</h2>
          <div data-aos="fade-up" data-aos-duration="700" data-aos-once="true" class="aos-init aos-animate">
            <p>日々の忙しさについ忘れてしまいがちですが、今の私があるのは色んな人たちのサポートのおかげです。退職の際に応援してくれた人、技術的に未熟な私にもお仕事を紹介してくださるエージェント、スキルを磨ける環境で働かせてくださったクライアントに、本当に心から感謝しています。</p>
            <p>様々なWebサービスに触れて人生が変わる体験をしたように、今後は消費するだけでなく、体験価値を届けられるようなエンジニアになりたい。私自身が抱えている課題や周りの身近な人が抱えている問題をエンジニアリングで解決できるようになりたいと考えています。</p>
            <p>また、ものづくりが好きなので、生涯エンジニアとして社会に貢献し続けたいとも思っています。</p>
            <p>それを実現するにはどうしたらいいのか。</p>
            <p>日々進化し続ける技術をキャッチアップするための研鑽はもちろんのこと、クライアントの悩みや課題を解決できるよう、クライアントの目線を培っていく必要があります。</p>
            <p>まだまだ至らない点はたくさんありますが、時代に合わせた技術を追いかけつつ、クライアントに寄り添ったエンジニアリングができるよう、心がけていきます。</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>



   <div class="section peach-gradient d-flex align-items-center justify-content-center">
     <h3 class="center grey-text text-darken-3 intro">登録せずにログインできるゲストログイン機能がございます。<br><br />是非ご活用ください！</h3>
   <div class="">
         <button　type="button" class="btn btn-primary" onclick="location.href='./register'">登録</button>
   </div>
   <div class="">
     <a href="{{ route('login') }}" class="btn btn-success pl-3 pr-3 pt-2 ml-3">
      ログイン
     </a>
   </div>
   <div class="">
     <a href="{{ route('login.guest') }}" class="btn btn-default pl-3 pr-3 pt-2 ml-3">
      ゲストログイン
     </a>
   </div>
 </div>





@endsection
