@extends('app')

@section('content')

@include('nav')

  <div class="section big-bg valign-wrapper d-flex align-items-center justify-content-center">
    <div class="container mb-5">
        <div class="center">
            <h2><small class="text-muted center">総合学習プラットホーム</small></h2>
        </div>
            <div class="row mb-5">
              <div class="col s12 text-white center top-main ">
              <div class="display-2">K i n j i r o</div>
            </div>
        </div>

    </div>
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
  <div class="section valign-wrapper">
      <div class="container">
        <h2 class="center">About me</h2>
        <div class="row">
          <div class="col text-center img-radius ml-5 ">
              <img id="profile-image" src="/image/batsumaru.jpeg" alt="プロフィール画像"  width="150" height="150" data-aos-duration="300" data-aos="zoom-in" data-aos-once="true" class="aos-init aos-animate" v-prlx.mobile="{ reverse: true }">
          </div>
          <div class="col s12 mr-5">
            <p>福岡県北九州市で生まれ育つ。中学校でバスケ部、高校大学で８年間吹奏楽とマーチングに打ち込む。大学では国と国との関係性に興味を持ち
              　外国語学部国際関係学科に入学。卒業後自分のアイデアを形にするような仕事がしたいと思い大手新築分譲住宅に企画営業職として入社。　その後、友人がプログラミングをしている所にたまたま居合わせてプログラミングの存在を知り、その後独学で勉強。
              　プログラミングの勉強期間は2020年11月〜2021年6月現在までの約半年。

            </p>
            <ul>
              <li>- GitHub: <a href="https://github.com/kenta253/kinjiro" target="_blank" rel="noopener">https://github.com/kenta253/kinjiro</a></li>
              <li>- Qiita: <a href="https://qiita.com/kenchi253" target="_blank" rel="noopener">https://qiita.com/kenchi253</a></li>
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
            <h2>2012~<span>高校時代</span></h2>
            <Fade-In>
              <div class="leaf-circle leaf-medium aos-init" style="background-image: url(/image/euphonium.jpeg)" data-aos-duration="300" data-aos="zoom-in">
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
              <div class="leaf-circle leaf-medium aos-init" style="background-image: url(/image/world.jpeg)" data-aos-duration="300" data-aos="zoom-in">
              </div>
            </Fade-In>
            <Fade-Cut>
              <div class="leaf-card aos-init" data-aos="fade-left" data-aos-duration="300">
                <h3>国際関係学科にて国と国との関係性を学んでいた。</h3>
              </div>
            </Fade-Cut>
          </div>

          <div class="leaf-row">
            <h2>2020~<span>社会人</span></h2>
            <Fade-In>
              <div class="leaf-circle leaf-medium aos-init" style="background-image: url(/image/home.png)" data-aos-duration="300" data-aos="zoom-in">
              </div>
            </Fade-In>
            <Fade-Cut>
              <div class="leaf-card aos-init" data-aos="fade-left" data-aos-duration="300">
                <h3>アイデアを形にする仕事がしたいと思い</h3>
                <h3>新築戸建て分譲会社に企画営業職として入社</h3>
                <p>土地の仕入れ、建物プランの企画、販売と、幅広く業務当たる。</p>
              </div>
            </Fade-Cut>
          </div>

          <div class="leaf-row">
            <h2>2020　8月~</h2>
            <Fade-In>
              <div class="leaf-circle leaf-medium aos-init" style="background-image: url(/image/pc.jpeg)" data-aos-duration="300" data-aos="zoom-in">
              </div>
            </Fade-In>
            <Fade-Cut>
              <div class="leaf-card aos-init" data-aos="fade-left" data-aos-duration="300">
                <h3>たまたま友人がプログラミングを書く所に居合わせる</h3>
                <p>この時点ではなんかおもしろそう！と思った程度でした。</p>
              </div>
            </Fade-Cut>
          </div>

          <div class="leaf-row">
            <h2>2020<span>11月~2月</span></h2>
            <Fade-In>
              <div class="leaf-circle leaf-medium aos-init" style="background-image: url(/image/study.jpeg)" data-aos-duration="300" data-aos="zoom-in">
              </div>
            </Fade-In>
            <Fade-Cut>
              <div class="leaf-card aos-init" data-aos="fade-left" data-aos-duration="300">
                <h3>プログラミングの本格的な学習開始</h3>
                <p>３ケ月の間にprogateや書籍を用いて基礎の基礎を固めていました。</p>
              </div>
            </Fade-Cut>
          </div>

          <div class="leaf-row">
            <h2>2020<span>2月~4月</span></h2>
            <Fade-In>
              <div class="leaf-circle leaf-medium aos-init" style="background-image: url(/image/mosha.jpeg)" data-aos-duration="300" data-aos="zoom-in">
              </div>
            </Fade-In>
            <Fade-Cut>
              <div class="leaf-card aos-init" data-aos="fade-left" data-aos-duration="300">
                <h3>サイト模写・Ruby on Rails チュートリアル２周など。</h3>
                <p>この頃はインプットよりもアウトプットをどんどんして形として残るものを作っていました。</p>
                <p>githubやDB周りの勉強といったこともこの頃覚えていきました。</p>
                <p>そしてエンジニアとして生きていきたいと思い、４月いっぱいで１年間務めた企業を退職しました。</p>
              </div>
            </Fade-Cut>
          </div>

          <div class="leaf-row">
            <h2>2020<span>5~6月</span></h2>
            <Fade-In>
              <div class="leaf-circle leaf-medium aos-init" style="background-image: url(/image/taro.jpeg)" data-aos-duration="300" data-aos="zoom-in">
              </div>
            </Fade-In>
            <Fade-Cut>
              <div class="leaf-card aos-init" data-aos="fade-left" data-aos-duration="300">
                <h3>アイデアや工夫を表現できるの面白い！</h3>
                <p>それまでRubyをずっとやっていましたが、他の言語ってどんな感じなんだろう？と思いPHPとLaravelの学習を始めました</p>
                <p>個人的にPHPとLaravelの方が使いやすく半年間の集大成ということでポートフォリオを作成.</p>
                <p>１ヶ月でなんとしても仕上げる！と自分の中で決め１ヶ月でこちらのkinjiroを作成しました。</p>
              </div>
            </Fade-Cut>
          </div>

        </div>
      </div>

      <div class="row">
        <div class="col s12 m8 offset-m2 closing-profile">
          <h2 data-aos="fade-in" data-aos-duration="700" data-aos-once="true" class="aos-init aos-animate">エンジニアリングへの想い</h2>
          <div data-aos="fade-up" data-aos-duration="700" data-aos-once="true" class="aos-init aos-animate">
            <p>様々なWebサービスに触れて人生が変わる体験をしたように、今後は消費するだけでなく、体験価値を届けられるようなエンジニアになりたい。私自身が抱えている課題や周りの身近な人が抱えている問題をエンジニアリングで解決できるようになりたいと考えています。</p>
            <p>また、アイデアを形にすることができるものづくりが好きなので、生涯エンジニアとして社会に貢献し続けたいとも思っています。</p>
            <p>それを実現するにはどうしたらいいのか。</p>
            <p>日々進化し続ける技術をキャッチアップするための研鑽はもちろんのこと、クライアントの悩みや課題を解決できるよう、常にクライアントの目線に立って物事を考えることが必要です。</p>
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
