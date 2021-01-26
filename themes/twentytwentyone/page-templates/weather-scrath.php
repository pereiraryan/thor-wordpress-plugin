<?php
/**
 * Template Name: Thor Weather Forcast
 *
 * Description: A page template that provides a key component of WordPress as a CMS
 * by meeting the need for a carefully crafted introductory page. The front page template
 * in Twenty Twelve consists of a page content area for adding text, images, video --
 * anything you'd like -- followed by front-page-only widgets in one or two columns.
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty One 1.0
 */

get_header(); ?>
<style>
  @import url(https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900);

  body {
    background-color: #ebf2f6;
  }

  *,
  *:before,
  *:after {
    box-sizing: border-box;
  }

  .weather-wrapper {
    margin-top: 20px;
    display: flex;
    flex-direction: row;
    flex-wrap: wrap;
    justify-content: center;
  }

  .weather-card {
    margin: 20px 5px;
    border-radius: 20px;
    position: relative;
    overflow: hidden;
    width: 270px;
    height: 270px;
    background-color: white;
    box-shadow: 0px 0px 25px 1px rgba(50, 50, 50, 0.1);
    -webkit-animation: appear 500ms ease-out forwards;
    animation: appear 500ms ease-out forwards;
  }

  .weather-card h1 {
    position: absolute;
    font-family: "Lato", sans-serif;
    font-weight: 300;
    font-size: 45px;
    color: #B8B8B8;
    bottom: 0;
    top: 150px;
    left: 35px;
    opacity: 0;
    transform: translateX(150px);
    -webkit-animation: title-appear 500ms ease-out 500ms forwards;
    animation: title-appear 500ms ease-out 500ms forwards;
  }

  .weather-card p {
    position: absolute;
    font-family: "Lato", sans-serif;
    font-weight: 300;
    font-size: 28px;
    color: #d2d2d2;
    top: 100px;
    bottom: 0;
    left: 35px;
    -webkit-animation: title-appear 1s ease-out 500ms forwards;
    animation: title-appear 1s ease-out 500ms forwards;
  }

  .weather-icon {
    position: relative;
    width: 50px;
    height: 50px;
    top: 0;
    float: right;
    margin: 40px 40px 0 0;
    -webkit-animation: weather-icon-move 5s ease-in-out infinite;
    animation: weather-icon-move 5s ease-in-out infinite;
  }

  details {
    position: absolute;
    bottom: 0;
    left: 40px;
  }

  h1>span {
    font-size: 45px;
  }

  .mumbai {
    background: #FFCD41;
    border-radius: 50%;
    box-shadow: rgba(255, 255, 0, 0.1) 0 0 0 4px;
    -webkit-animation: light 800ms ease-in-out infinite alternate, weather-icon-move 5s ease-in-out infinite;
    animation: light 800ms ease-in-out infinite alternate, weather-icon-move 5s ease-in-out infinite;
  }

  @-webkit-keyframes light {
    from {
      box-shadow: rgba(255, 255, 0, 0.2) 0 0 0 10px;
    }

    to {
      box-shadow: rgba(255, 255, 0, 0.2) 0 0 0 17px;
    }
  }

  @keyframes light {
    from {
      box-shadow: rgba(255, 255, 0, 0.2) 0 0 0 10px;
    }

    to {
      box-shadow: rgba(255, 255, 0, 0.2) 0 0 0 17px;
    }
  }

  .delhi {
    margin-right: 60px;
    background: #b6cede;
    border-radius: 20px;
    width: 25px;
    height: 25px;
    box-shadow: #b6cede 24px -6px 0 2px, #b6cede 10px 5px 0 5px, #b6cede 30px 5px 0 2px, #b6cede 11px -8px 0 -3px, #b6cede 25px 11px 0 -1px;
  }

  .delhi:after {
    content: "";
    position: absolute;
    border-radius: 10px;
    background-color: transparent;
    width: 4px;
    height: 12px;
    left: 0;
    top: 31px;
    transform: rotate(30deg);
    -webkit-animation: rain 800ms ease-in-out infinite alternate;
    animation: rain 800ms ease-in-out infinite alternate;
  }

  @-webkit-keyframes rain {
    from {
      box-shadow: #2092A9 8px 0px, #2092A9 32px -6px, #2092A9 20px 0px;
    }

    to {
      box-shadow: #2092A9 8px 6px, #2092A9 32px 0px, #2092A9 20px 6px;
    }
  }

  @keyframes rain {
    from {
      box-shadow: #2092A9 8px 0px, #2092A9 32px -6px, #2092A9 20px 0px;
    }

    to {
      box-shadow: #2092A9 8px 6px, #2092A9 32px 0px, #2092A9 20px 6px;
    }
  }

  @-webkit-keyframes weather-icon-move {
    50% {
      transform: translateY(-8px);
    }
  }

  @keyframes weather-icon-move {
    50% {
      transform: translateY(-8px);
    }
  }

  .inspiration {
    margin-top: 80px;
    color: #709fbe;
    font-family: "Lato", sans-serif;
    font-weight: 300;
    font-size: 24px;
    text-align: center;
  }

  .inspiration a {
    color: #FF8F8F;
    font-weight: 400;
    -webkit-animation: all 300ms ease-in-out;
    animation: all 300ms ease-in-out;
  }

  @-webkit-keyframes appear {
    0% {
      transform: scale(0);
    }

    50% {
      transform: scale(1.05);
    }

    75% {
      transform: scale(0.95);
    }

    100% {
      transform: scale(1);
    }
  }

  @keyframes appear {
    0% {
      transform: scale(0);
    }

    50% {
      transform: scale(1.05);
    }

    75% {
      transform: scale(0.95);
    }

    100% {
      transform: scale(1);
    }
  }

  @-webkit-keyframes title-appear {
    from {
      opacity: 0;
      transform: translateX(150px);
    }

    to {
      opacity: 1;
      transform: translateX(0px);
    }
  }

  @keyframes title-appear {
    from {
      opacity: 0;
      transform: translateX(150px);
    }

    to {
      opacity: 1;
      transform: translateX(0px);
    }
  }
</style>
<header id="mumbai_header">
</header>
<section class="widget">
</section>

<section class="container">

  <div class="weather-wrapper">
    <div class="weather-card mumbai-card">
      <div class="weather-icon mumbai"></div>
      <h1><span id="mum_daily_temp"></span>º</h1>
      <p>Mumbai</p>
      <details>
        <summary>Forcast</summary>
        <div>Monday <span id="mum_monday"> </span></div>
        <div>Tuesday<span id="mum_tue"> </span></div>
        <div>Wednesday<span id="mum_wed"> </span></div>
        <div>Thursday<span id="mum_thu"> </span></div>
        <div>Friday <span id="mum_fri"></span></div>
        <div>Saturday<span id="mum_sat"></span></div>
        <div>Sunday <span id="mum_sun"></span></div>
      </details>
    </div>
    <div class="weather-card chennai-card">
      <div class="weather-icon mumbai"></div>
      <h1><span id="chennai_daily_temp"></span>º</h1>
      <p>Chennai</p>
    </div>
    <div class="weather-card mumbai-card">
      <div class="weather-icon mumbai"></div>
      <h1><span id="beng_daily_temp"></span>º</h1>
      <p>Bengalur</p>
    </div>
    <div class="weather-card mumbai-card">
      <div class="weather-icon mumbai"></div>
      <h1><span id="kolkata_daily_temp"></span>º</h1>
      <p>Kolkata</p>
    </div>
    <div class="weather-card delhi-card">
      <div class="weather-icon delhi"></div>
      <h1><span id="del_daily_temp"></span>º</h1>
      <p>Delhi</p>
    </div>
  </div>
</section>

<script>
  const header = document.querySelector('#mumbai_header');
const section = document.querySelector('.widget');
let requestURL = 'https://api.openweathermap.org/data/2.5/onecall?lat=19.0760&lon=72.8777&exclude=current,hourly,minutely,alerts&units=metric&appid=8ab4ba3378ee2851102d5840b08d4c7a';
    let request = new XMLHttpRequest();
    request.open('GET', requestURL);
    request.responseType = 'text';
    request.send();

    request.onload = function() {
      const mumbai_widget = request.response;
      const bombay = JSON.parse(mumbai_widget);
      populateTodaywidget(bombay);
      populatewidget(bombay);
    }
function populateTodaywidget(jsonObj) {
  const myH1 = document.createElement('h1');
      myH1.textContent = jsonObj['timezone'];
      header.appendChild(myH1);

      const myPara = document.createElement('p');
      myPara.textContent = 'timezone_offset: ' + jsonObj['timezone_offset'] + ' // timezone: ' + jsonObj['timezone'];
      header.appendChild(myPara);
}
function populatewidget(jsonObj) {
  const mumbai_weekly = jsonObj['daily'];

      for(let i = 0; i < mumbai_weekly.length; i++) {
        const myArticle = document.createElement('article');
        const myH2 = document.createElement('h2');

        myH2.textContent = mumbai_weekly[i].temp.day;
        console.log(mumbai_weekly);
        myArticle.appendChild(myH2);
        section.appendChild(myArticle);
      }

}

  RunAllapi();

  function RunAllapi() {
    mumbaiApi();
    delhiApi();
    bengalurApi();
    kolkataApi();
    chennaiApi();
  }

  function mumbaiApi() {
    const mum_request = new XMLHttpRequest();
    mum_request.open('GET',
      'https://api.openweathermap.org/data/2.5/onecall?lat=19.0760&lon=72.8777&exclude=current,hourly,minutely,alerts&units=metric&appid=8ab4ba3378ee2851102d5840b08d4c7a'
      );
    mum_request.responseType = 'json';

    mum_request.onload = function () {
      if (mum_request.status === 200) {

        let mum_daily_temp_day1 = mum_request.response.daily[0].temp.day;
        console.log(mum_daily_temp_day1);
        let set = document.getElementById("mum_daily_temp").innerHTML = mum_daily_temp_day1;

        //Lame code 
        let mum_daily_temp_monday = mum_request.response.daily[0].temp.day;
        let set1 = document.getElementById("mum_monday").innerHTML = mum_daily_temp_monday;
        let mum_daily_temp_tue = mum_request.response.daily[1].temp.day;
        let set2 = document.getElementById("mum_tue").innerHTML = mum_daily_temp_tue;
        let mum_daily_temp_wed = mum_request.response.daily[2].temp.day;
        let set3 = document.getElementById("mum_wed").innerHTML = mum_daily_temp_wed;
        let mum_daily_temp_thu = mum_request.response.daily[3].temp.day;
        let set4 = document.getElementById("mum_thu").innerHTML = mum_daily_temp_thu;
        let mum_daily_temp_fri = mum_request.response.daily[4].temp.day;
        let set5 = document.getElementById("mum_fri").innerHTML = mum_daily_temp_fri;
        let mum_daily_temp_sat = mum_request.response.daily[5].temp.day;
        let set6 = document.getElementById("mum_sat").innerHTML = mum_daily_temp_sat;
        let mum_daily_temp_sun = mum_request.response.daily[6].temp.day;
        let set7 = document.getElementById("mum_sun").innerHTML = mum_daily_temp_sun;


      } else {
        console.log('Network request failed with response ' + mum_request.status + ': ' + mum_request.statusText)
      }
    };
    mum_request.send();
  }

  function delhiApi() {
    const del_request = new XMLHttpRequest();
    del_request.open('GET',
      'https://api.openweathermap.org/data/2.5/onecall?lat=28.70410&lon=77.1025&exclude=current,hourly,minutely,alerts&units=metric&appid=8ab4ba3378ee2851102d5840b08d4c7a'
      );
    del_request.responseType = 'json';

    del_request.onload = function () {
      if (del_request.status === 200) {

        let del_daily_temp_day1 = del_request.response.daily[0].temp.day;
        console.log(del_daily_temp);
        document.getElementById("del_daily_temp").innerHTML = del_daily_temp_day1;
      } else {
        console.log('Network request failed with response ' + del_request.status + ': ' + del_request.statusText)
      }
    };
    del_request.send();
  }

  function bengalurApi() {
    const ben_request = new XMLHttpRequest();
    ben_request.open('GET',
      'https://api.openweathermap.org/data/2.5/onecall?lat=12.9716&lon=77.5946&exclude=current,hourly,minutely,alerts&units=metric&appid=8ab4ba3378ee2851102d5840b08d4c7a'
      );
    ben_request.responseType = 'json';

    ben_request.onload = function () {
      if (ben_request.status === 200) {

        let beng_daily_temp_day1 = ben_request.response.daily[0].temp.day;
        console.log(beng_daily_temp);
        document.getElementById("beng_daily_temp").innerHTML = beng_daily_temp_day1;
      } else {
        console.log('Network request failed with response ' + ben_request.status + ': ' + ben_request.statusText)
      }
    };
    ben_request.send();
  }

  function kolkataApi() {
    const kol_request = new XMLHttpRequest();
    kol_request.open('GET',
      'https://api.openweathermap.org/data/2.5/onecall?lat=22.5726&lon=88.3639&exclude=current,hourly,minutely,alerts&units=metric&appid=8ab4ba3378ee2851102d5840b08d4c7a'
      );
    kol_request.responseType = 'json';

    kol_request.onload = function () {
      if (kol_request.status === 200) {

        let kolkata_daily_temp_day1 = kol_request.response.daily[0].temp.day;
        console.log(kolkata_daily_temp);
        document.getElementById("kolkata_daily_temp").innerHTML = kolkata_daily_temp_day1;
      } else {
        console.log('Network request failed with response ' + kol_request.status + ': ' + kol_request.statusText)
      }
    };
    kol_request.send();
  }

  function chennaiApi() {
    const chen_request = new XMLHttpRequest();
    chen_request.open('GET',
      'https://api.openweathermap.org/data/2.5/onecall?lat=13.0827&lon=80.2707&exclude=current,hourly,minutely,alerts&units=metric&appid=8ab4ba3378ee2851102d5840b08d4c7a'
      );
    chen_request.responseType = 'json';

    chen_request.onload = function () {
      if (chen_request.status === 200) {

        let chennai_daily_temp_day1 = chen_request.response.daily[0].temp.day;
        console.log(chennai_daily_temp);
        document.getElementById("chennai_daily_temp").innerHTML = chennai_daily_temp_day1;
      } else {
        console.log('Network request failed with response ' + chen_request.status + ': ' + chen_request.statusText)
      }
    };
    chen_request.send();
  }
</script>
<?php
get_footer();