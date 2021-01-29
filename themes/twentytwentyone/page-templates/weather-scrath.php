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
    height: 300px;
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
    top: 200px;
  }

  h1>span {
    font-size: 45px;
  }

  .sun {
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
<section class="container">
<div class="weather-wrapper">
            <div id="mumbai_city" class="weather-card delhi-card">
              <div class="weather-icon sun"></div>
              <h1><span id="mum_daily_temp"></span>º</h1>
              <p>Mumbai</p>
              <details id="mumbai_city_week">
                <summary>Forcast</summary>
              </details>
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d241316.64332790065!2d72.74109997462705!3d19.08252232039457!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c6306644edc1%3A0x5da4ed8f8d648c69!2sMumbai%2C%20Maharashtra!5e0!3m2!1sen!2sin!4v1611900624696!5m2!1sen!2sin" width="100%" height="600" frameborder="0" style="border:0; margin-top: 250px;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>

            </div>
            <div id="delhi_city" class="weather-card delhi-card">
              <div class="weather-icon sun"></div>
              <h1><span id="del_daily_temp"></span>º</h1>
              <p>Delhi</p>
              <details id="delhi_city_week">
                <summary>Forcast</summary>
              </details>
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d448181.16374483565!2d76.81307247147215!3d28.647279934818382!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390cfd5b347eb62d%3A0x37205b715389640!2sDelhi!5e0!3m2!1sen!2sin!4v1611900970739!5m2!1sen!2sin" width="100%" height="600" frameborder="0" style="border:0; margin-top: 250px;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>
            <div id="chennai_city" class="weather-card delhi-card">
              <div class="weather-icon sun"></div>
              <h1><span id="chennai_daily_temp"></span>º</h1>
              <p>Chennai</p>
              <details id="chennai_city_week">
                <summary>Forcast</summary>
              </details>
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d248755.78021444276!2d80.06892532404781!3d13.047822270295175!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a5265ea4f7d3361%3A0x6e61a70b6863d433!2sChennai%2C%20Tamil%20Nadu!5e0!3m2!1sen!2sin!4v1611900997157!5m2!1sen!2sin" width="100%" height="600" frameborder="0" style="border:0; margin-top: 250px;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>
            <div id="bengalur_city" class="weather-card delhi-card">
              <div class="weather-icon sun"></div>
              <h1><span id="beng_daily_temp"></span>º</h1>
              <p>Bengalur</p>
              <details id="bengalur_city_week">
                <summary>Forcast</summary>
              </details>
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d248849.5522455846!2d77.49085307114936!3d12.954294597642471!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae1670c9b44e6d%3A0xf8dfc3e8517e4fe0!2sBengaluru%2C%20Karnataka!5e0!3m2!1sen!2sin!4v1611901081829!5m2!1sen!2sin" width="100%" height="600" frameborder="0" style="border:0; margin-top: 250px;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>
            <div id="kolkata_city" class="weather-card delhi-card">
              <div class="weather-icon sun"></div>
              <h1><span id="kolkata_daily_temp"></span>º</h1>
              <p>Kolkata</p>
              <details id="kolkata_city_week">
                <summary>Forcast</summary>
              </details>
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d471218.3856170605!2d88.04953593118715!3d22.676385751131438!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39f882db4908f667%3A0x43e330e68f6c2cbc!2sKolkata%2C%20West%20Bengal!5e0!3m2!1sen!2sin!4v1611901103804!5m2!1sen!2sin" width="100%" height="600" frameborder="0" style="border:0; margin-top: 250px;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>
        </div>
</section>

<script>
// API Calls

const delhi_block = document.querySelector('#delhi_city_week');
let delhi_requestURL = 'https://api.openweathermap.org/data/2.5/onecall?lat=28.70410&lon=77.1025&exclude=current,hourly,minutely,alerts&units=metric&appid=8ab4ba3378ee2851102d5840b08d4c7a';
    let del_request = new XMLHttpRequest();
    del_request.open('GET', delhi_requestURL);
    del_request.responseType = 'text';
    del_request.send();
    del_request.onload = function() {
      const delhi_widget = del_request.response;
      const del = JSON.parse(delhi_widget);
      populate_Delhi(del);
      console.log(del);
    }

    //Mumbai
    const mumbai_block = document.querySelector('#mumbai_city_week');
let mumbai_requestURL = 'https://api.openweathermap.org/data/2.5/onecall?lat=19.0760&lon=72.8777&exclude=current,hourly,minutely,alerts&units=metric&appid=8ab4ba3378ee2851102d5840b08d4c7a';
    let mum_request = new XMLHttpRequest();
    mum_request.open('GET', mumbai_requestURL);
    mum_request.responseType = 'text';
    mum_request.send();
    mum_request.onload = function() {
      const mumbai_widget = mum_request.response;
      const mum = JSON.parse(mumbai_widget);
      populate_Mumbai(mum);
      console.log(mum);
    }

    //Chennai
    const chennai_block = document.querySelector('#chennai_city_week');
let chennai_requestURL = 'https://api.openweathermap.org/data/2.5/onecall?lat=13.0827&lon=80.2707&exclude=current,hourly,minutely,alerts&units=metric&appid=8ab4ba3378ee2851102d5840b08d4c7a';
    let chen_request = new XMLHttpRequest();
    chen_request.open('GET', chennai_requestURL);
    chen_request.responseType = 'text';
    chen_request.send();
    chen_request.onload = function() {
      const chennai_widget = chen_request.response;
      const chen = JSON.parse(chennai_widget);
      populate_Chennai(chen);
      console.log(chen);
    }

    //Bengalur
    const bengalur_block = document.querySelector('#bengalur_city_week');
let bengalur_requestURL = 'https://api.openweathermap.org/data/2.5/onecall?lat=12.9716&lon=77.5946&exclude=current,hourly,minutely,alerts&units=metric&appid=8ab4ba3378ee2851102d5840b08d4c7a';
    let beng_request = new XMLHttpRequest();
    beng_request.open('GET', bengalur_requestURL);
    beng_request.responseType = 'text';
    beng_request.send();
    beng_request.onload = function() {
      const bengalur_widget = beng_request.response;
      const beng = JSON.parse(bengalur_widget);
      populate_Bengalur(beng);
      console.log(beng);
    }
    //Kolkata
    const kolkata_block = document.querySelector('#kolkata_city_week');
let kolkata_requestURL = 'https://api.openweathermap.org/data/2.5/onecall?lat=22.5726&lon=88.3639&exclude=current,hourly,minutely,alerts&units=metric&appid=8ab4ba3378ee2851102d5840b08d4c7a';
    let kolk_request = new XMLHttpRequest();
    kolk_request.open('GET', kolkata_requestURL);
    kolk_request.responseType = 'text';
    kolk_request.send();
    kolk_request.onload = function() {
      const kolkata_widget = kolk_request.response;
      const kol = JSON.parse(kolkata_widget);
      populate_Kolkata(kol);
      console.log(kol);
    }


    function populate_Delhi(djsonObj) {
      const del_weekly = djsonObj['daily'];
      for(let i = 0; i < del_weekly.length; i++) {
        const weekDiv = document.createElement('div');
        const weekSpan = document.createElement('span');

        weekSpan.textContent = `Day: ${i} ${del_weekly[i].temp.day}º`;
        weekDiv.appendChild(weekSpan);
        delhi_block.appendChild(weekDiv);
      }
}

function populate_Mumbai(mjsonObj) {
  const mum_weekly = mjsonObj['daily'];
      for(let j = 0; j < mum_weekly.length; j++) {
        const mweekDiv = document.createElement('div');
        const mweekSpan = document.createElement('span');

        mweekSpan.textContent = `Day: ${j} ${mum_weekly[j].temp.day}º`;
        mweekDiv.appendChild(mweekSpan);
        mumbai_block.appendChild(mweekDiv);
      }

}
function populate_Chennai(cjsonObj) {
  const chen_weekly = cjsonObj['daily'];
      for(let k = 0; k < chen_weekly.length; k++) {
        const cweekDiv = document.createElement('div');
        const cweekSpan = document.createElement('span');

        cweekSpan.textContent = `Day: ${k} ${chen_weekly[k].temp.day}º`;
        cweekDiv.appendChild(cweekSpan);
        chennai_block.appendChild(cweekDiv); 
      }

}
function populate_Bengalur(bjsonObj) {
  const beng_weekly = bjsonObj['daily'];
      for(let l = 0; l < beng_weekly.length; l++) {
        const bweekDiv = document.createElement('div');
        const bweekSpan = document.createElement('span');

        bweekSpan.textContent = `Day: ${l} ${beng_weekly[l].temp.day}º`;
        bweekDiv.appendChild(bweekSpan);
        bengalur_block.appendChild(bweekDiv);

      }

}
function populate_Kolkata(kjsonObj) {
  const kol_weekly = kjsonObj['daily'];
      for(let m = 0; m < kol_weekly.length; m++) {
        const kweekDiv = document.createElement('div');
        const kweekSpan = document.createElement('span');

        kweekSpan.textContent = `Day: ${m} ${kol_weekly[m].temp.day}º`;
        kweekDiv.appendChild(kweekSpan);
        kolkata_block.appendChild(kweekDiv);

      }

}

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
        let set = document.getElementById("mum_daily_temp").innerHTML = mum_daily_temp_day1;
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
        document.getElementById("chennai_daily_temp").innerHTML = chennai_daily_temp_day1;
      } else {
        console.log('Network request failed with response ' + chen_request.status + ': ' + chen_request.statusText)
      }
    };
    chen_request.send();
  }
  RunAllapi();
</script>
<?php
get_footer();