@extends('layouts.app')
@section('content')
    <div class="slider">
        <ul class="slides">
          <li>
            <img src="img/top1.jpg"> <!-- random image -->
            <div class="caption center-align">
              <h2>Welcome to <br>My portfolio site!</h2>
            </div>
          </li>
          <li>
            <img src="img/top2.jpg"> <!-- random image -->
            <div class="caption left-align">
              <h3>More than the price</h3>
              <h5 class="light grey-text text-lighten-3">Reasonable Price</h5>
            </div>
          </li>
          <li>
            <img src="img/top3.jpg"> <!-- random image -->
            <div class="caption right-align">
              <h3>Agile lawn mowing</h3>
              <h5 class="light grey-text text-lighten-3">Stress-free waiting time</h5>
            </div>
          </li>
        </ul>
    </div>
    
    <!------------------------------------------------------------------>
    <!------------------------------About------------------------------->
    <!------------------------------------------------------------------>
    <div class='grey darken-4 about' id='about'>
        <h2 class='center-align title'>About</h2>
          <div class='row'>
            <div class='col s12 m4'><img class='profile-img' src='img/profile3.jpg'></div>
            <div class='col s12 m8 profile-description'>
              <p>2019年3月にプログラミング未経験から学習を開始。<br>
              HTML / CSS, JavaScript, PHP, Laravel, Vue.js, jQueryなどを学習。<br>
              その後ポートフォリオを5つ作成し、3ヶ月後に初めてマークアップの案件を獲得しました。<br>
              2018年8月からクラウドソーシングワークスにてWEBライティングの仕事も開始。<br>
              2019年8月現在、『PRO CroudWorker』『PROCW TOP100』
              <a href="#procrowd" class='modal-trigger'>
                <i class="far fa-image"></i>
              </a>
              に選定されています。<br>
              モットーは「クライアントと共にWIN-WINの関係を築く」ことです。<br></p>
            </div>
          </div>
          <div class='row'>
            <div class='col s12 m10 l8 offset-m1 offset-l2'>
              <table class='centered highlight'>
                <thead>
                  <tr class='experience'>
                      <th></th>
                      <th>EXPERIENCE</th>
                  </tr>
                </thead>
                <tbody class='experience'>
                  <tr>
                    <td>2013.3</td>
                    <td>立命館大学 文学部 人文学科 日本文学専攻 卒業</td>
                  </tr>
                  <tr>
                    <td>2013.4-2018.3</td>
                    <td>京都府 公立中学校 国語科 正式採用教員として勤務</td>
                  </tr>
                  <tr>
                    <td>2018.4-2018.6</td>
                    <td>フィリピン セブ島 3D ACADEMYにて英語留学<br>(Intermediate Grade取得)</td>
                  </tr>
                  <tr>
                    <td>2018.6-2018.7</td>
                    <td>オーストラリア ケアンズ C.C.E.Bにて英語留学<br>(Upper Intermediate Grade取得)</td>
                  </tr>
                  <tr>
                    <td>2018.7-2018.8</td>
                    <td>オーストラリアを車で一周（14,000km）</td>
                  </tr>
                  <tr>
                    <td>2018.9-2019.5</td>
                    <td>オーストラリア パースでシェアハウス マネージャーを担当</td>
                  </tr>
                  <tr>
                    <td>2019.5-Now</td>
                    <td>プログラミング学習中 10 hour / Day in Kyoto</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
    </div>
    <!------------------------------------------------------------------>
    <!-----------------------------About-------------------------------->
    <!------------------------------------------------------------------>


    <!------------------------------------------------------------------>
    <!------------------------   Skill Set   ------------------------>
    <!------------------------------------------------------------------>
      <div class="row icon-section" id='skill'>
        <h2 class='center-align title'>Skill Set</h2>
        <div class="col s12 m6">
        <table class='centered'>
          <thead>
            <tr>
                <th>SKILL</th>
                <th></th>
                <th>EXPERIENCE</th>
                <th>LEVEL</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td><i class="fab fa-html5 fa-5x"></i></td>
              <td>HTML</td>
              <td>6month</td>
              <td><i class="fas fa-thermometer-half fa-3x"></i></td>
            </tr>
            <tr>
              <td><i class="fab fa-css3-alt fa-5x"></i></td>
              <td>CSS</td>
              <td>6month</td>
              <td><i class="fas fa-thermometer-half fa-3x"></i></td>
            </tr>
            <tr>
              <td><i class="fab fa-js fa-5x"></i></td>
              <td>JavaScript</td>
              <td>6month</td>
              <td><i class="fas fa-thermometer-half fa-3x"></i></td>
            </tr>
            <tr>
              <td class='logo jquery'>jQuery</td>
              <td>jQuery</td>
              <td>6month</td>
              <td><i class="fas fa-thermometer-empty fa-3x"></i></td>
            </tr>
            <tr>
              <td><i class="fab fa-vuejs fa-5x"></i></td>
              <td>Vue.js</td>
              <td>2month</td>
              <td><i class="fas fa-thermometer-half fa-3x"></i></td>
            </tr>
          </tbody>
        </table>
        </div>
        <div class="col s12 m6">
        <table class='centered'>
          <thead>
            <tr>
                <th>SKILL</th>
                <th></th>
                <th>EXPERIENCE</th>
                <th>LEVEL</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td><i class="fab fa-php fa-5x"></i></td>
              <td>php</td>
              <td>6month</td>
              <td><i class="fas fa-thermometer-full fa-3x"></i></td>
            </tr>
            <tr>
              <td><i class="fab fa-laravel fa-5x"></i></td>
              <td>Laravel</td>
              <td>6month</td>
              <td><i class="fas fa-thermometer-full fa-3x"></i></td>
            </tr>
            <tr>
              <td class='logo mysql'>MySQL</td>
              <td>MySQL</td>
              <td>6month</td>
              <td><i class="fas fa-thermometer-full fa-3x"></i></td>
            </tr>
            <tr>
              <td><i class="fab fa-aws fa-5x"></i></td>
              <td>Cloud9<br>S3<br>EC</td>
              <td>6month</td>
              <td><i class="fas fa-thermometer-full fa-3x"></i></td>
            </tr>
            <tr>
              <td class='logo heroku'>heroku</td>
              <td>heroku</td>
              <td>6month</td>
              <td><i class="fas fa-thermometer-full fa-3x"></i></td>
            </tr>
          </tbody>
        </table>
        </div>
      </div>
    <!------------------------------------------------------------------>
    <!------------------------   Skill Set   --------------------------->
    <!------------------------------------------------------------------>
    
    <!------------------------------------------------------------------>
    <!------------------------    Cards Menu    ------------------------>
    <!------------------------------------------------------------------>
    <div class='product-line blue accent-1' id='products'></div>
    <div class="parallax-container">
      <div class="parallax"><img src="img/products.png"></div>
    </div>
    <div class='product-line product-under-line deep-orange'></div>
    <div class="row" >
        <div class="col m4">
          <div class="card">
            <div class="card-image waves-effect waves-block waves-light">
              <a href="#modal1" class='modal-trigger'>
                <img class='works-photo' src="img/ecommerse.png" sizes="(max-width: 305px) 100vw, 305px"/>
                <span class="card-title">Laravel Stripe E-Commerce</span>
              </a>
            </div>
          </div>
        </div>
        <div class="col m4">
          <div class="card">
            <div class="card-image waves-effect waves-block waves-light">
              <a href="#modal2" class='modal-trigger'>
                <img class='works-photo' src="img/invoice.png"sizes="(max-width: 305px) 100vw, 305px" />
                <span class="card-title">Invoce'n To Do</span>
              </a>
            </div>
          </div>
        </div>
        <div class="col m4">
          <div class="card">
            <div class="card-image waves-effect waves-block waves-light">
              <a href="#modal3" class='modal-trigger'>
                <img class='works-photo' src="img/ordermade.png"sizes="(max-width: 305px) 100vw, 305px" />
                <span class="card-title">OrderMade apps Matching</span>
              </a>
            </div>
          </div>
        </div>
    </div>
    <div class="row">
        <div class="col m4">
          <div class="card">
            <div class="card-image waves-effect waves-block waves-light">
              <a href="#modal4" class='modal-trigger'>
                <img class='works-photo' src="img/oldbook.png" sizes="(max-width: 305px) 100vw, 305px" />
                <span class="card-title">Old Book Store</span>
              </a>
            </div>
          </div>
        </div>
        <div class="col m4">
          <div class="card">
            <div class="card-image waves-effect waves-block waves-light">
              <a href="#modal5" class='modal-trigger'>
                <img class='works-photo' src="img/sharehouse.png"sizes="(max-width: 305px) 100vw, 305px" />
                <span class="card-title">ShareHouse Australia</span>
              </a>
            </div>
          </div>
        </div>
        <div class="col m4">
          <div class="card">
            <div class="card-image waves-effect waves-block waves-light">
              <a href="#modal6" class='modal-trigger'>
                <img class='works-photo' src="img/map.png"/>
                <span class="card-title">MapLaraVue</span>
              </a>
            </div>
          </div>
        </div>
    </div>
    <div class='row'>
        <div class="col m4">
          <div class="card">
            <div class="card-image waves-effect waves-block waves-light">
              <a href="#modal7" class='modal-trigger'>
                <img class='works-photo' src="img/laravelworks.png"sizes="(max-width: 305px) 100vw, 305px" />
                <span class="card-title">My Laravel Works</span>
              </a>
            </div>
          </div>
        </div>
    </div>
    <!------------------------------------------------------------------>
    <!------------------------    Cards Menu    ------------------------>
    <!------------------------------------------------------------------>
    
    <!------------------------------------------------------------------>
    <!-----------------------------footer------------------------------->
    <!------------------------------------------------------------------>
    <div class='red-foot deep-orange'></div>
    <div class='grey darken-4 black-foot'>
        <div class='row footer-table'>
          <table class='centered footer-table'>
            <tbody>
              <tr>
                <td class='mail'>
                  <button data-target="modal8" class="btn modal-trigger">Modal</button>
                </td>
              </tr>              
              <tr>
                <td class='copyright'>
                  <small>© 2019 Hira</small>
                </td>
              </tr>
              <tr>
                <td>
                  <div class="col s12 sns">
                    <a href='https://github.com/hirakumorishima02' target="_blank"><i class="fab fa-github-square fa-2x"></i></a>
                    <a href='https://twitter.com/hiwriterprogram' target="_blank"><i class="fab fa-twitter-square fa-2x"></i></a>
                    <a href='https://www.facebook.com/ujinchu' target="_blank"><i class="fab fa-facebook-square fa-2x"></i></a>
                    <a href='https://www.facebook.com/ujinchu' target="_blank"><i class="fab fa-blogger fa-2x"></i></a>
                  </div>
                </td>
              </tr>
            </tbody>
          </table>
            </div>
        </div>
    </div>
    <!------------------------------------------------------------------>
    <!-----------------------------footer------------------------------->
    <!------------------------------------------------------------------>

@include('modals.modal')
@endsection