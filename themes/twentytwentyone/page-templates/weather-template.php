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
.wrapper {
  display: grid;
  grid-template-columns: 1fr 1fr;
  grid-gap: 10px;
}

.box {
  border-radius: 5px;
  padding: 20px;
  font-size: 150%;
}
</style>
<div class="continer">

    <div class="cta-info">
        <h2>Hello to Thor</h2>
        <p class="hero-para">A Weather Dashboard to view a weeks temprature</p>
        <div class="featured-city">
        <div class="box ">Weather in <div id="openweathermap-widget"></div> </div>
        <p><?php the_field('featured_city'); ?></p>
        
        </div>
    </div>
</div>
<section>
</section>
<section>
    <div class="wrapper">
        <div class="box ">Mumbai <div id="openweathermap-widget-21"></div> </div>
        <div class="box ">Delhi  <div id="openweathermap-widget-22"></div></div>
        <div class="box ">Banglore <div id="openweathermap-widget-23"></div> </div>
        <div class="box ">Kolkata <div id="openweathermap-widget-24"></div></div>
        <div class="box ">Chennai <div id="openweathermap-widget-25"></div>
    </div>
</section>




<script src='//openweathermap.org/themes/openweathermap/assets/vendor/owm/js/d3.min.js'></script><script>window.myWidgetParam ? window.myWidgetParam : window.myWidgetParam = [];  window.myWidgetParam.push({id: 21,cityid: '1275339',appid: '8ab4ba3378ee2851102d5840b08d4c7a',units: 'metric',containerid: 'openweathermap-widget-21',  });  (function() {var script = document.createElement('script');script.async = true;script.charset = "utf-8";script.src = "//openweathermap.org/themes/openweathermap/assets/vendor/owm/js/weather-widget-generator.js";var s = document.getElementsByTagName('script')[0];s.parentNode.insertBefore(script, s);  })();</script>
    <script src='//openweathermap.org/themes/openweathermap/assets/vendor/owm/js/d3.min.js'></script><script>window.myWidgetParam ? window.myWidgetParam : window.myWidgetParam = [];  window.myWidgetParam.push({id: 21,cityid: '1273294',appid: '8ab4ba3378ee2851102d5840b08d4c7a',units: 'metric',containerid: 'openweathermap-widget-22',  });  (function() {var script = document.createElement('script');script.async = true;script.charset = "utf-8";script.src = "//openweathermap.org/themes/openweathermap/assets/vendor/owm/js/weather-widget-generator.js";var s = document.getElementsByTagName('script')[0];s.parentNode.insertBefore(script, s);  })();</script>
    
<script src='//openweathermap.org/themes/openweathermap/assets/vendor/owm/js/d3.min.js'></script><script>window.myWidgetParam ? window.myWidgetParam : window.myWidgetParam = [];  window.myWidgetParam.push({id: 21,cityid: '1277333',appid: '8ab4ba3378ee2851102d5840b08d4c7a',units: 'metric',containerid: 'openweathermap-widget-23',  });  (function() {var script = document.createElement('script');script.async = true;script.charset = "utf-8";script.src = "//openweathermap.org/themes/openweathermap/assets/vendor/owm/js/weather-widget-generator.js";var s = document.getElementsByTagName('script')[0];s.parentNode.insertBefore(script, s);  })();</script>

<script src='//openweathermap.org/themes/openweathermap/assets/vendor/owm/js/d3.min.js'></script><script>window.myWidgetParam ? window.myWidgetParam : window.myWidgetParam = [];  window.myWidgetParam.push({id: 21,cityid: '1275004',appid: '8ab4ba3378ee2851102d5840b08d4c7a',units: 'metric',containerid: 'openweathermap-widget-24',  });  (function() {var script = document.createElement('script');script.async = true;script.charset = "utf-8";script.src = "//openweathermap.org/themes/openweathermap/assets/vendor/owm/js/weather-widget-generator.js";var s = document.getElementsByTagName('script')[0];s.parentNode.insertBefore(script, s);  })();</script>

<script src='//openweathermap.org/themes/openweathermap/assets/vendor/owm/js/d3.min.js'></script><script>window.myWidgetParam ? window.myWidgetParam : window.myWidgetParam = [];  window.myWidgetParam.push({id: 21,cityid: '1264527',appid: '8ab4ba3378ee2851102d5840b08d4c7a',units: 'metric',containerid: 'openweathermap-widget-25',  });  (function() {var script = document.createElement('script');script.async = true;script.charset = "utf-8";script.src = "//openweathermap.org/themes/openweathermap/assets/vendor/owm/js/weather-widget-generator.js";var s = document.getElementsByTagName('script')[0];s.parentNode.insertBefore(script, s);  })();</script>
<?php
get_footer();