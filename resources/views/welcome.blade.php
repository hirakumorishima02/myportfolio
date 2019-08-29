@extends('layouts.app')
@section('content')
    <div class="slider">
        <ul class="slides">
          <li>
            <img src="img/top1.jpg"> <!-- random image -->
            <div class="caption center-align">
              <h3>Welcome to Your Home Lawn Care Provider!</h3>
              <h5 class="light grey-text text-lighten-3">High Quality</h5>
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
    
    <!--------->
    <!--About-->
    <!--------->
    <div class='grey darken-4 about' id='about'>
        <h2 class='center-align title'>About</h2>
        <p >
            If you are looking to change your lawn service company or you don’t want to do it yourself anymore,
            you have found the right place. This is also a place for current customers.
            Contact info is at the bottom of this page.
            <br>
            <br>
            We do lawn fertilizing, weed control and seeding.
            We do not mow the lawn. We are a small local company.
            Ultra Lawn Services, LLC provides knowledgable lawn maintenance services.
            Our team of licensed technicians are happy to work for you to give you the best looking lawn.
            We have many loyal customers with almost perfect lush green lawns.
        </p>
    </div>
    <!--------->
    <!--About-->
    <!--------->


    <!---------------------->
    <!--   Icon Section   -->
    <!---------------------->
      <div class="row icon-section">
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
              <td>1year</td>
              <td><i class="fas fa-thermometer-half fa-3x"></i></td>
            </tr>
            <tr>
              <td><i class="fab fa-css3-alt fa-5x"></i></td>
              <td>CSS</td>
              <td>1year</td>
              <td><i class="fas fa-thermometer-half fa-3x"></i></td>
            </tr>
            <tr>
              <td><i class="fab fa-js fa-5x"></i></td>
              <td>JavaScript</td>
              <td>1year</td>
              <td><i class="fas fa-thermometer-half fa-3x"></i></td>
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
              <td><i class="fab fa-aws fa-5x"></i></td>
              <td>Cloud9<br>S3<br>EC</td>
              <td>6month</td>
              <td><i class="fas fa-thermometer-full fa-3x"></i></td>
            </tr>
            <tr>
              <td class='logo'>heroku</td>
              <td>heroku</td>
              <td>6month</td>
              <td><i class="fas fa-thermometer-full fa-3x"></i></td>
            </tr>
            <tr>
              <td class='logo'>MySQL</td>
              <td>MySQL</td>
              <td>6month</td>
              <td><i class="fas fa-thermometer-full fa-3x"></i></td>
            </tr>
          </tbody>
        </table>
        </div>
      </div>
    <!---------------------->
    <!--   Icon Section   -->
    <!---------------------->
    
    <!---------------------->
    <!--    Cards Menu    -->
    <!---------------------->
    <div class='red-foot deep-orange'></div>
    <div class='parallax-container'></div>
    <div class='red-foot deep-orange'></div>
    <div class="row" id='products'>
        <div class="col m4 l3 offset-l1">
          <div class="card">
            <div class="card-image waves-effect waves-block waves-light">
              <a href="#modal1" class='modal-trigger'>
                <img class='works-photo' src="img/ecommerse.png" sizes="(max-width: 305px) 100vw, 305px"/>
                <span class="card-title">Laravel Stripe E-Commerce</span>
              </a>
            </div>
          </div>
        </div>
        <div class="col m4 l3">
          <div class="card">
            <div class="card-image waves-effect waves-block waves-light">
              <a href="#modal2" class='modal-trigger'>
                <img class='works-photo' src="img/invoice.png"sizes="(max-width: 305px) 100vw, 305px" />
                <span class="card-title">Invoce'n To Do</span>
              </a>
            </div>
          </div>
        </div>
        <div class="col m4 l3">
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
        <div class="col m4 l3 offset-l1">
          <div class="card">
            <div class="card-image waves-effect waves-block waves-light">
              <a href="#modal4" class='modal-trigger'>
                <img class='works-photo' src="img/oldbook.png" sizes="(max-width: 305px) 100vw, 305px" />
                <span class="card-title">Old Book Store</span>
              </a>
            </div>
          </div>
        </div>
        <div class="col m4 l3">
          <div class="card">
            <div class="card-image waves-effect waves-block waves-light">
              <a href="#modal5" class='modal-trigger'>
                <img class='works-photo' src="img/sharehouse.png"sizes="(max-width: 305px) 100vw, 305px" />
                <span class="card-title">ShareHouse Australia</span>
              </a>
            </div>
          </div>
        </div>
        <div class="col m4 l3">
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
        <div class="col m4 l3 offset-l1">
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
    <!---------------------->
    <!--    Cards Menu    -->
    <!---------------------->
    
    <!--------->
    <!--footer-->
    <!--------->
    <div class='red-foot deep-orange'></div>
    <div class='grey darken-4 black-foot'></div>
    <!--------->
    <!--footer-->
    <!--------->

@include('modals.modal')
@endsection