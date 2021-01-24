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

*, *:before, *:after {
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
  font-size: 80px;
  color: #B8B8B8;
  bottom: 0;
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



<div class="weather-wrapper">
    <div class="weather-card mumbai-card">
        <div class="weather-icon mumbai"></div>
        <h1><span id="mum_daily_temp"></span>º</h1>
        <p>Mumbai</p>
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
<script>

function mumbaiApi () {
    const mum_request = new XMLHttpRequest();
    mum_request.open('GET', 'https://api.openweathermap.org/data/2.5/onecall?lat=19.0760&lon=72.8777&exclude=current,hourly,minutely,alerts&units=Celsius&appid=8ab4ba3378ee2851102d5840b08d4c7a');
    mum_request.responseType = 'json';
    
    mum_request.onload = function() {
      if(mum_request.status === 200) {
    
        let mum_daily_temp = mum_request.response.daily[0].temp.day;
        console.log(mum_daily_temp);   
        let set = document.getElementById("mum_daily_temp").innerHTML=mum_daily_temp;
      } else {
        console.log('Network request failed with response ' + mum_request.status + ': ' + mum_request.statusText)
      }
    };
}

function delhiApi () {
    const request = new XMLHttpRequest();
    request.open('GET', 'https://api.openweathermap.org/data/2.5/onecall?lat=28.70410&lon=77.1025&exclude=current,hourly,minutely,alerts&units=Celsius&appid=8ab4ba3378ee2851102d5840b08d4c7a');
    request.responseType = 'json';
    
    request.onload = function() {
      if(request.status === 200) {
    
        let del_daily_temp = request.response.daily[0].temp.day;
        console.log(del_daily_temp);
        document.getElementById("del_daily_temp").innerHTML=del_daily_temp;   
      } else {
        console.log('Network request failed with response ' + request.status + ': ' + request.statusText)
      }
    };
}
function bengalurApi () {
    const request = new XMLHttpRequest();
    request.open('GET', 'https://api.openweathermap.org/data/2.5/onecall?lat=12.9716&lon=77.5946&exclude=current,hourly,minutely,alerts&units=Celsius&appid=8ab4ba3378ee2851102d5840b08d4c7a');
    request.responseType = 'json';
    
    request.onload = function() {
      if(request.status === 200) {
    
        let beng_daily_temp = request.response.daily[0].temp.day;
        console.log(beng_daily_temp);
        document.getElementById("beng_daily_temp").innerHTML=beng_daily_temp;   
      } else {
        console.log('Network request failed with response ' + request.status + ': ' + request.statusText)
      }
    };
}
function kolkataApi () {
    const request = new XMLHttpRequest();
    request.open('GET', 'https://api.openweathermap.org/data/2.5/onecall?lat=22.5726&lon=88.3639&exclude=current,hourly,minutely,alerts&units=Celsius&appid=8ab4ba3378ee2851102d5840b08d4c7a');
    request.responseType = 'json';
    
    request.onload = function() {
      if(request.status === 200) {
    
        let kolkata_daily_temp = request.response.daily[0].temp.day;
        console.log(kolkata_daily_temp);
        document.getElementById("kolkata_daily_temp").innerHTML=kolkata_daily_temp;   
      } else {
        console.log('Network request failed with response ' + request.status + ': ' + request.statusText)
      }
    };
}
function chennaiApi () {
    const request = new XMLHttpRequest();
    request.open('GET', 'https://api.openweathermap.org/data/2.5/onecall?lat=13.0827&lon=80.2707&exclude=current,hourly,minutely,alerts&units=Celsius&appid=8ab4ba3378ee2851102d5840b08d4c7a');
    request.responseType = 'json';
    
    request.onload = function() {
      if(request.status === 200) {
    
        let chennai_daily_temp = request.response.daily[0].temp.day;
        console.log(chennai_daily_temp); 
        document.getElementById("chennai_daily_temp").innerHTML=chennai_daily_temp;  
      } else {
        console.log('Network request failed with response ' + request.status + ': ' + request.statusText)
      }
    };
}
</script>
<?php
get_footer();