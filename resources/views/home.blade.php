@extends('app')

@section('content')

  <div class="section big-bg">
  </div>
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
  </div>

  <div id="about-me" class="section valign-wrapper">
      <div class="container">
        <h2 class="center">About me</h2>
        <div class="row">
          <div class="col s12 m2 offset-m2">
              <img id="profile-image" src="asset/img/hodacat.png" alt="プロフィール画像" width="150" height="150" data-aos-duration="300" data-aos="zoom-in" data-aos-once="true" class="aos-init aos-animate">
          </div>
          <div class="col s12 m6">
            <p>、</p>
            <ul>
              <li>- Blog: <a href="https://hodalog.com" target="_blank" rel="noopener">https://hodalog.com</a></li>
              <li>- GitHub: <a href="https://github.com/hodanov" target="_blank" rel="noopener">https://github.com/hodanov</a></li>
              <li>- Qiita: <a href="https://qiita.com/hodanov" target="_blank" rel="noopener">https://qiita.com/hodanov</a></li>
            </ul>
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
