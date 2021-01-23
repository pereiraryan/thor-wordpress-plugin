<?php
/**
 * Template Name: Weather Forcast
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
.container {
  padding-right: 15px;
  padding-left: 15px;
  margin-right: auto;
  margin-left: auto;
}
.wrapper {
  display: grid;
  grid-template-columns: 1fr;
  grid-gap: 10px;
}

.box {
  border-radius: 5px;
  padding: 20px;
  font-size: 150%;
}
.container {
  padding-right: 15px;
  padding-left: 15px;
  margin-right: auto;
  margin-left: auto;
}
@media (min-width: 768px) {
  .container {
    width: 750px;
  }
}
@media (min-width: 992px) {
  .container {
    width: 970px;
  }
}
@media (min-width: 1200px) {
  .container {
    width: 1170px;
  }
}
</style>
<section class="container">

    <div class="cta-info">
        <h2>Hello to Thor</h2>
        <p class="hero-para">A Weather Dashboard to view a weeks temprature</p>
        <div class="featured-city">
        <div class="box ">Weather in Featured City <?php the_field('featured_city'); ?> is <div id="openweathermap-widget"></div> </div>
        <div id="city_name" data-place="<?php the_field('featured_city'); ?>" class="<?php the_field('featured_city'); ?>">
        </div>
        
        </div>
    </div>
</section>

<section class="container">
    <div class="wrapper">
    <p class="hero-para">Rest of the cities</p>
        <div data-widget="mumbai" class="box"> <div id="openweathermap-widget-21"></div> </div>
        <div data-widget="delhi" class="box">  <div id="openweathermap-widget-22"></div></div>
        <div data-widget="banglore" class="box"> <div id="openweathermap-widget-23"></div> </div>
        <div data-widget="kolkata" class="box"> <div id="openweathermap-widget-24"></div></div>
        <div data-widget="chennai" class="box"> <div id="openweathermap-widget-25"></div>
    </div>
</section>

<script>
// 19.0760° N, 72.8777° E
// https://api.openweathermap.org/data/2.5/onecall?lat=19.0760&lon=72.8777&exclude=current,hourly,minutely,alerts&appid=8ab4ba3378ee2851102d5840b08d4c7a

//Script for api call  Requiremnst
// Build a basic, but neat weather station template in Wordpress.
// Display temperatures for the past 7 days for Mumbai, Delhi, Bengaluru, Kolkata, Chennai.

// Also, creatively use a map widget.

// Feel free to use existing APIs, but everything else should be custom built

// Bonus: Develop a plugin that allows the user to set the featured city (selected at wp-admin)

// use fetch to retrieve the products and pass them to init
// report any errors that occur in the fetch operation
// once the products have been successfully loaded and formatted as a JSON object
// using response.json(), 
const request = new XMLHttpRequest();
request.open('GET', 'https://api.openweathermap.org/data/2.5/onecall?lat=19.0760&lon=72.8777&exclude=current,hourly,minutely,alerts&units=Celsius&appid=8ab4ba3378ee2851102d5840b08d4c7a');
request.responseType = 'json';

request.onload = function() {
  if(request.status === 200) {
    let products = request.response;

    let daily_temp = request.response.daily[0].temp.day;
    console.log(products);
    console.log(daily_temp);

  } else {
    console.log('Network request failed with response ' + request.status + ': ' + request.statusText)
  }
};

// request.send();






</script>


<script src='//openweathermap.org/themes/openweathermap/assets/vendor/owm/js/d3.min.js'></script><script>window.myWidgetParam ? window.myWidgetParam : window.myWidgetParam = [];  window.myWidgetParam.push({id: 21,cityid: '1275339',appid: '8ab4ba3378ee2851102d5840b08d4c7a',units: 'metric',containerid: 'openweathermap-widget-21',  });  (function() {var script = document.createElement('script');script.async = true;script.charset = "utf-8";script.src = "//openweathermap.org/themes/openweathermap/assets/vendor/owm/js/weather-widget-generator.js";var s = document.getElementsByTagName('script')[0];s.parentNode.insertBefore(script, s);  })();</script>
    <script src='//openweathermap.org/themes/openweathermap/assets/vendor/owm/js/d3.min.js'></script><script>window.myWidgetParam ? window.myWidgetParam : window.myWidgetParam = [];  window.myWidgetParam.push({id: 21,cityid: '1273294',appid: '8ab4ba3378ee2851102d5840b08d4c7a',units: 'metric',containerid: 'openweathermap-widget-22',  });  (function() {var script = document.createElement('script');script.async = true;script.charset = "utf-8";script.src = "//openweathermap.org/themes/openweathermap/assets/vendor/owm/js/weather-widget-generator.js";var s = document.getElementsByTagName('script')[0];s.parentNode.insertBefore(script, s);  })();</script>
    
<script src='//openweathermap.org/themes/openweathermap/assets/vendor/owm/js/d3.min.js'></script><script>window.myWidgetParam ? window.myWidgetParam : window.myWidgetParam = [];  window.myWidgetParam.push({id: 21,cityid: '1277333',appid: '8ab4ba3378ee2851102d5840b08d4c7a',units: 'metric',containerid: 'openweathermap-widget-23',  });  (function() {var script = document.createElement('script');script.async = true;script.charset = "utf-8";script.src = "//openweathermap.org/themes/openweathermap/assets/vendor/owm/js/weather-widget-generator.js";var s = document.getElementsByTagName('script')[0];s.parentNode.insertBefore(script, s);  })();</script>

<script src='//openweathermap.org/themes/openweathermap/assets/vendor/owm/js/d3.min.js'></script><script>window.myWidgetParam ? window.myWidgetParam : window.myWidgetParam = [];  window.myWidgetParam.push({id: 21,cityid: '1275004',appid: '8ab4ba3378ee2851102d5840b08d4c7a',units: 'metric',containerid: 'openweathermap-widget-24',  });  (function() {var script = document.createElement('script');script.async = true;script.charset = "utf-8";script.src = "//openweathermap.org/themes/openweathermap/assets/vendor/owm/js/weather-widget-generator.js";var s = document.getElementsByTagName('script')[0];s.parentNode.insertBefore(script, s);  })();</script>

<script src='//openweathermap.org/themes/openweathermap/assets/vendor/owm/js/d3.min.js'></script><script>window.myWidgetParam ? window.myWidgetParam : window.myWidgetParam = [];  window.myWidgetParam.push({id: 21,cityid: '1264527',appid: '8ab4ba3378ee2851102d5840b08d4c7a',units: 'metric',containerid: 'openweathermap-widget-25',  });  (function() {var script = document.createElement('script');script.async = true;script.charset = "utf-8";script.src = "//openweathermap.org/themes/openweathermap/assets/vendor/owm/js/weather-widget-generator.js";var s = document.getElementsByTagName('script')[0];s.parentNode.insertBefore(script, s);  })();</script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
   $(document).ready(function() {

    //  $('[data-place="delhi"]').html('new content');

    //  $('[data-widget="delhi"]').clone().insertAfter('[data-place="delhi"]');
    if ($('[data-place="delhi"]')) {
        $('[data-widget="delhi"]').clone().insertAfter('[data-place="delhi"]');
        $('[data-widget="delhi"]').find('.box').hide();
    }
    if ($('[data-place="mumbai"]')) {
        $('[data-widget="mumbai"]').clone().insertAfter('[data-place="mumbai"]');
        $('[data-widget="mumbai"]').find('.box').hide();
    } 
    if ($('[data-place="banglore"]')) {
        $('[data-widget="banglore"]').clone().insertAfter('[data-place="banglore"]');
        $('[data-widget="banglore"]').find('.box').hide();
    }
    if ($('[data-place="kolkata"]')) {
        $('[data-widget="kolkata"]').clone().insertAfter('[data-place="kolkata"]');
        $('[data-widget="kolkata"]').find('.box').hide();
    }
    if ($('[data-place="chennai"]')) {
        $('[data-widget="chennai"]').clone().insertAfter('[data-place="chennai"]');
        $('[data-widget="chennai"]').find('.box').hide();
    }


   });
</script>
<?php
get_footer();