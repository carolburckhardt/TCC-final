<!DOCTYPE html><html lang='en' class=''>
<head><script src='//static.codepen.io/assets/editor/live/console_runner-ce3034e6bde3912cc25f83cccb7caa2b0f976196f2f2d52303a462c826d54a73.js'></script><script src='//static.codepen.io/assets/editor/live/css_live_reload_init-e9c0cc5bb634d3d14b840de051920ac153d7d3d36fb050abad285779d7e5e8bd.js'></script><meta charset='UTF-8'><meta name="robots" content="noindex"><link rel="shortcut icon" type="image/x-icon" href="//static.codepen.io/assets/favicon/favicon-8ea04875e70c4b0bb41da869e81236e54394d63638a1ef12fa558a4a835f1164.ico" /><link rel="mask-icon" type="" href="//static.codepen.io/assets/favicon/logo-pin-f2d2b6d2c61838f7e76325261b7195c27224080bc099486ddd6dccb469b8e8e6.svg" color="#111" /><link rel="canonical" href="https://codepen.io/andymcfee/pen/eyahr" />

<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css'>
<style class="cp-pen-styles">/***
* CSS3 FLIP CARDS
* Markup for an element that a user can hover to reveal content on the back, like a card
* Browser Support: Safari, Firefox, Chrome, IE8+, and Touch Devices; (IE9 and below will not have any flip effect but will just change on hover)
***/
.flip-card {
  display: block;
  position: relative;
  z-index: 1000;
  width: 100px;
  height: 100px;
}
.flip-card .card-front,
.flip-card .card-back {
  -moz-backface-visibility: hidden;
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
  -moz-transition: -moz-transform 500ms;
  -o-transition: -o-transform 500ms;
  -webkit-transition: -webkit-transform 500ms;
  transition: transform 500ms;
  display: block;
  height: 100%;
  position: absolute;
  width: 100%;
}
.flip-card .card-front {
  -moz-transform: perspective(300) rotateY(0);
  -webkit-transform: perspective(300) rotateY(0);
  transform: perspective(300) rotateY(0);
  z-index: 900;
}
.flip-card .card-back {
  -moz-transform: rotateY(-180deg);
  -webkit-transform: rotateY(-180deg);
  transform: rotateY(-180deg);
  z-index: 800;
}
.flip-card:hover .card-front {
  -moz-transform: rotateY(180deg);
  -ms-transform: rotateY(180deg);
  -webkit-transform: rotateY(180deg);
  transform: rotateY(180deg);
  -moz-transform: perspective(300) rotateY(180deg);
  -webkit-transform: perspective(300) rotateY(180deg);
  transform: perspective(300) rotateY(180deg);
}
.flip-card:hover .card-back {
  z-index: 950;
  -moz-transform: rotateY(0deg);
  -ms-transform: rotateY(0deg);
  -webkit-transform: rotateY(0deg);
  transform: rotateY(0deg);
  -moz-transform: perspective(300) rotateY(0deg);
  -webkit-transform: perspective(300) rotateY(0deg);
  transform: perspective(300) rotateY(0deg);
}

/*** Just for show... ***/
.flip-card {
  text-shadow: 1px 1px 0 rgba(14, 85, 143, 0.8);
  color: #fff;
  cursor: pointer;
  float: left;
  font-weight: bold;
  margin: 10px;
  text-align: center;
  text-transform: uppercase;
  min-width: 100px;
  max-width: 400px;
}
.flip-card .card-front,
.flip-card .card-back {
  -moz-border-radius: 5px;
  -webkit-border-radius: 5px;
  border-radius: 5px;
  -moz-box-shadow: 1px 1px 2px rgba(14, 85, 143, 0.8);
  -webkit-box-shadow: 1px 1px 2px rgba(14, 85, 143, 0.8);
  box-shadow: 1px 1px 2px rgba(14, 85, 143, 0.8);
  -moz-box-sizing: border-box;
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
  border: 1px solid #051e32;
  padding: 40px 0;
}
.flip-card .card-front {
  -moz-box-sizing: border-box;
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
  background-color: #499bea;
  *zoom: 1;
  filter: progid:DXImageTransform.Microsoft.gradient(gradientType=0, startColorstr='#FF499BEA', endColorstr='#FF207CE5');
  background-image: url('data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0idXRmLTgiPz4gPHN2ZyB2ZXJzaW9uPSIxLjEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PGRlZnM+PGxpbmVhckdyYWRpZW50IGlkPSJncmFkIiBncmFkaWVudFVuaXRzPSJvYmplY3RCb3VuZGluZ0JveCIgeDE9IjAuNSIgeTE9IjAuMCIgeDI9IjAuNSIgeTI9IjEuMCI+PHN0b3Agb2Zmc2V0PSIwJSIgc3RvcC1jb2xvcj0iIzQ5OWJlYSIvPjxzdG9wIG9mZnNldD0iMTAwJSIgc3RvcC1jb2xvcj0iIzIwN2NlNSIvPjwvbGluZWFyR3JhZGllbnQ+PC9kZWZzPjxyZWN0IHg9IjAiIHk9IjAiIHdpZHRoPSIxMDAlIiBoZWlnaHQ9IjEwMCUiIGZpbGw9InVybCgjZ3JhZCkiIC8+PC9zdmc+IA==');
  background-size: 100%;
  background-image: -webkit-gradient(linear, 50% 0%, 50% 100%, color-stop(0%, #499bea), color-stop(100%, #207ce5));
  background-image: -moz-linear-gradient(top, #499bea 0%, #207ce5 100%);
  background-image: -webkit-linear-gradient(top, #499bea 0%, #207ce5 100%);
  background-image: linear-gradient(to bottom, #499bea 0%, #207ce5 100%);
}
.flip-card .card-back {
  -moz-box-shadow: 0 0 20px rgba(19, 113, 189, 0.8) inset;
  -webkit-box-shadow: 0 0 20px rgba(19, 113, 189, 0.8) inset;
  box-shadow: 0 0 20px rgba(19, 113, 189, 0.8) inset;
  background-color: #478ce0;
  *zoom: 1;
  filter: progid:DXImageTransform.Microsoft.gradient(gradientType=0, startColorstr='#FF478CE0', endColorstr='#FF0263DB');
  background-image: url('data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0idXRmLTgiPz4gPHN2ZyB2ZXJzaW9uPSIxLjEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PGRlZnM+PGxpbmVhckdyYWRpZW50IGlkPSJncmFkIiBncmFkaWVudFVuaXRzPSJvYmplY3RCb3VuZGluZ0JveCIgeDE9IjAuNSIgeTE9IjAuMCIgeDI9IjAuNSIgeTI9IjEuMCI+PHN0b3Agb2Zmc2V0PSIwJSIgc3RvcC1jb2xvcj0iIzQ3OGNlMCIvPjxzdG9wIG9mZnNldD0iMTAwJSIgc3RvcC1jb2xvcj0iIzExNjhkYiIvPjxzdG9wIG9mZnNldD0iMTAwJSIgc3RvcC1jb2xvcj0iIzAyNjNkYiIvPjwvbGluZWFyR3JhZGllbnQ+PC9kZWZzPjxyZWN0IHg9IjAiIHk9IjAiIHdpZHRoPSIxMDAlIiBoZWlnaHQ9IjEwMCUiIGZpbGw9InVybCgjZ3JhZCkiIC8+PC9zdmc+IA==');
  background-size: 100%;
  background-image: -webkit-gradient(linear, 50% 0%, 50% 100%, color-stop(0%, #478ce0), color-stop(100%, #1168db), color-stop(100%, #0263db));
  background-image: -moz-linear-gradient(top, #478ce0 0%, #1168db 100%, #0263db 100%);
  background-image: -webkit-linear-gradient(top, #478ce0 0%, #1168db 100%, #0263db 100%);
  background-image: linear-gradient(to bottom, #478ce0 0%, #1168db 100%, #0263db 100%);
}

body {
  background-color: #e6f2f7;
  *zoom: 1;
  filter: progid:DXImageTransform.Microsoft.gradient(gradientType=1, startColorstr='#FFE6F2F7', endColorstr='#FFA0D8EF');
  background-image: url('data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0idXRmLTgiPz4gPHN2ZyB2ZXJzaW9uPSIxLjEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PGRlZnM+PHJhZGlhbEdyYWRpZW50IGlkPSJncmFkIiBncmFkaWVudFVuaXRzPSJ1c2VyU3BhY2VPblVzZSIgY3g9IjUwJSIgY3k9IiIgcj0iMTAwJSI+PHN0b3Agb2Zmc2V0PSIwJSIgc3RvcC1jb2xvcj0iI2U2ZjJmNyIvPjxzdG9wIG9mZnNldD0iMTAwJSIgc3RvcC1jb2xvcj0iI2EwZDhlZiIvPjwvcmFkaWFsR3JhZGllbnQ+PC9kZWZzPjxyZWN0IHg9IjAiIHk9IjAiIHdpZHRoPSIxMDAlIiBoZWlnaHQ9IjEwMCUiIGZpbGw9InVybCgjZ3JhZCkiIC8+PC9zdmc+IA==');
  background-size: 100%;
  background-image: -moz-radial-gradient(center, circle cover, #e6f2f7 0%, #a0d8ef 100%);
  background-image: -webkit-radial-gradient(center, circle cover, #e6f2f7 0%, #a0d8ef 100%);
  background-image: radial-gradient(circle cover at center, #e6f2f7 0%, #a0d8ef 100%);
}

.viewport {
  margin: 10px auto 0;
  width: 500px;
}
</style></head><body>
<!-- 
Wrote a blog post about how it all works:
http://andymcfee.com/2012/08/24/css3-flip-cards/
-->

<div class="viewport">
  
  <div class="flip-card">
    <div class="card-front">
      Front!
    </div>
    <div class="card-back">
      Back!
    </div>
  </div>
  
  <div class="flip-card">
    <div class="card-front">
      Front!
    </div>
    <div class="card-back">
      Back!
    </div>
  </div>
  
  <div class="flip-card">
    <div class="card-front">
      Front!
    </div>
    <div class="card-back">
      Back!
    </div>
  </div>
  
  <div class="flip-card">
    <div class="card-front">
      Front!
    </div>
    <div class="card-back">
      Back!
    </div>
  </div>
  
  <div class="flip-card">
    <div class="card-front">
      Front!
    </div>
    <div class="card-back">
      Back!
    </div>
  </div>
  
  <div class="flip-card">
    <div class="card-front">
      Front!
    </div>
    <div class="card-back">
      Back!
    </div>
  </div>
  
  <div class="flip-card">
    <div class="card-front">
      Front!
    </div>
    <div class="card-back">
      Back!
    </div>
  </div>
  
  <div class="flip-card">
    <div class="card-front">
      Front!
    </div>
    <div class="card-back">
      Back!
    </div>
  </div>
  
  <div class="flip-card">
    <div class="card-front">
      Front!
    </div>
    <div class="card-back">
      Back!
    </div>
  </div>
  
  <div class="flip-card">
    <div class="card-front">
      Front!
    </div>
    <div class="card-back">
      Back!
    </div>
  </div>
  
  <div class="flip-card">
    <div class="card-front">
      Front!
    </div>
    <div class="card-back">
      Back!
    </div>
  </div>
  
  <div class="flip-card">
    <div class="card-front">
      Front!
    </div>
    <div class="card-back">
      Back!
    </div>
  </div>
  
</div>


</body></html>