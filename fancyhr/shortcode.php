<?php
/*
* Plugin Name: Fancy Horizontal Rule
* Description: Insert fancy animated horizontal rules into your posts.  Use the short code [fhr] or [fancy-hr].
* Version: 1.0
* Author: Casey Duckering
* Author URI: https://cduck.me
*/

// Short code 1 : WP Shortcode to insert fancy horizontal rule
function createHorizontalRule(){
return '
<style>
/* hr normal styling */
.hr {
  width: 100%;
  border: 0px none;
  background: none;
  margin-bottom: 30px;
  margin-top: 20px;
  display: block;
  position: relative;
}

.hr * {
  padding: 0;
  margin: 0;
  border: 0px none;
  -moz-transition-property: none;
  -webkit-transition-property: none;
  -ms-transition-property: none;
  transition-property: none;
  -moz-transition-timing-function: linear;
  -webkit-transition-timing-function: linear;
  -ms-transition-timing-function: linear;
  transition-timing-function: linear;
}

/* Hover */
.hr>.hov {
  position: absolute;
  top: -20px;
  left: 0px;
  width: 100%;
  height: 100%;
  padding-top: 20px;
  padding-bottom: 30px;
  /*background-color: rgba(0,255,0,0.1);*/
}

/* Spacing */
.hr>.space {
  width: 100%;
  height: auto;
  min-height: 1px;
  box-sizing: border-box;
  /*background-color: rgba(0,0,0,0.02);*/
  position: static;
}
.hr:hover>.space {
}
.hr>.space * {
  width: 25%;
  box-sizing: border-box;
  /*background-color: rgba(100,0,0,0.04);*/
  position: static;
  -moz-transition-property: padding-top;
  -webkit-transition-property: padding-top;
  -ms-transition-property: padding-top;
  transition-property: padding-top;
}
.hr:hover>.space * {
  padding-top: 50%;
}


/* Transition timing */
.hr>.space>*, .hr>.frac, .hr>.frac * {
  -moz-transition-duration: 4s;  /* Iteration #0*/
  -webkit-transition-duration: 4s;  /* Iteration #0*/
  -ms-transition-duration: 4s;  /* Iteration #0*/
  transition-duration: 4s;  /* Iteration #0*/
  -moz-transition-delay: 5.5s;  /* Iteration #0, delay before retract */
  -webkit-transition-delay: 5.5s;  /* Iteration #0, delay before retract */
  -ms-transition-delay: 5.5s;  /* Iteration #0, delay before retract */
  transition-delay: 5.5s;  /* Iteration #0, delay before retract */
}
.hr:hover>.space *, .hr:hover>.frac, .hr:hover>.frac * {
  -moz-transition-delay: 0.5s;  /* Iteration #0, delay before expand */
  -webkit-transition-delay: 0.5s;  /* Iteration #0, delay before expand */
  -ms-transition-delay: 0.5s;  /* Iteration #0, delay before expand */
  transition-delay: 0.5s;  /* Iteration #0, delay before expand */
}

.hr>.space>*>*, .hr>.frac>*>* {
  -moz-transition-duration: 2s;  /* Iteration #1*/
  -webkit-transition-duration: 2s;  /* Iteration #1*/
  -ms-transition-duration: 2s;  /* Iteration #1*/
  transition-duration: 2s;  /* Iteration #1*/
  -moz-transition-delay: 3.5s;  /* Iteration #1, delay before retract */
  -webkit-transition-delay: 3.5s;  /* Iteration #1, delay before retract */
  -ms-transition-delay: 3.5s;  /* Iteration #1, delay before retract */
  transition-delay: 3.5s;  /* Iteration #1, delay before retract */
}
.hr:hover>.space>*>*, .hr:hover>.frac>*>* {
  -moz-transition-delay: 4.5s;  /* Iteration #1, delay before expand */
  -webkit-transition-delay: 4.5s;  /* Iteration #1, delay before expand */
  -ms-transition-delay: 4.5s;  /* Iteration #1, delay before expand */
  transition-delay: 4.5s;  /* Iteration #1, delay before expand */
}

.hr>.space>*>*>*, .hr>.frac>*>*>* {
  -moz-transition-duration: 1s;  /* Iteration #2*/
  -webkit-transition-duration: 1s;  /* Iteration #2*/
  -ms-transition-duration: 1s;  /* Iteration #2*/
  transition-duration: 1s;  /* Iteration #2*/
  -moz-transition-delay: 2.5s;  /* Iteration #2, delay before retract */
  -webkit-transition-delay: 2.5s;  /* Iteration #2, delay before retract */
  -ms-transition-delay: 2.5s;  /* Iteration #2, delay before retract */
  transition-delay: 2.5s;  /* Iteration #2, delay before retract */
}
.hr:hover>.space>*>*>*, .hr:hover>.frac>*>*>* {
  -moz-transition-delay: 6.5s;  /* Iteration #2, delay before expand */
  -webkit-transition-delay: 6.5s;  /* Iteration #2, delay before expand */
  -ms-transition-delay: 6.5s;  /* Iteration #2, delay before expand */
  transition-delay: 6.5s;  /* Iteration #2, delay before expand */
}

.hr>.space>*>*>*>*, .hr>.frac>*>*>*>* {
  -moz-transition-duration: 0.5s;  /* Iteration #2*/
  -webkit-transition-duration: 0.5s;  /* Iteration #2*/
  -ms-transition-duration: 0.5s;  /* Iteration #2*/
  transition-duration: 0.5s;  /* Iteration #2*/
  -moz-transition-delay: 2s;  /* Iteration #2, delay before retract */
  -webkit-transition-delay: 2s;  /* Iteration #2, delay before retract */
  -ms-transition-delay: 2s;  /* Iteration #2, delay before retract */
  transition-delay: 2s;  /* Iteration #2, delay before retract */
}
.hr:hover>.space>*>*>*>*, .hr:hover>.frac>*>*>*>* {
  -moz-transition-delay: 7.5s;  /* Iteration #2, delay before expand */
  -webkit-transition-delay: 7.5s;  /* Iteration #2, delay before expand */
  -ms-transition-delay: 7.5s;  /* Iteration #2, delay before expand */
  transition-delay: 7.5s;  /* Iteration #2, delay before expand */
}


/* Fractal */
.hr>.frac, .hr>.frac * {
  height: 0px;
  position: absolute;
}
.hr>.frac {
  height: 1px;
  width: 100%;
  display: block;
  left: 0%;
}
.hr>.frac {
  background-color: transparent;
  height: 0px;
  box-sizing: content-box;
  padding-top: 0%;
  padding-bottom: 0%;
  margin-top: 0%;
  top: 50%;
  /*top: auto;
  bottom: auto;*/
  /*background-color: rgba(0,0,255,0.1);*/
  -moz-transition-property: padding-bottom, padding-top, margin-top;
  -webkit-transition-property: padding-bottom, padding-top, margin-top;
  -ms-transition-property: padding-bottom, padding-top, margin-top;
  transition-property: padding-bottom, padding-top, margin-top;
}
.hr:hover>.frac {
  padding-top: 25%;
  padding-bottom: 25%;
  margin-top: -25%;
}
.hr>.frac * {
  width: 25%;
  height: 0px;
  box-sizing: content-box;
  padding-top: 0%;
  padding-bottom: 0%;
  margin-top: 0%;
  top: 50%;
  -moz-transition-property: padding-bottom, margin-top;
  -webkit-transition-property: padding-bottom, margin-top;
  -ms-transition-property: padding-bottom, margin-top;
  transition-property: padding-bottom, margin-top;
}
.hr:hover>.frac * {
  padding-bottom: 12.5%;
  margin-top: -6.25%;
  /*background-color: rgba(0,255,0,0.1);*/
}
.hr>.frac>*>* {
}
.hr:hover>.frac>*>* {
}
.hr>.frac>*>*>* {
}
.hr:hover>.frac>*>*>* {
}
.hr>.frac *:empty {
  background-color: #DDD;
  height: 1px;
  margin-top: -0.5px;
  box-sizing: content-box;
  padding: 0;
}
.hr>.frac *:nth-child(1) {
  left: 0%;
  -moz-transform-origin: left center;
  -webkit-transform-origin: left center;
  -ms-transform-origin: left center;
  transform-origin: left center;
}
.hr>.frac *:nth-child(2) {
  left: 25%;
  -moz-transform: rotate(-90deg);
  -webkit-transform: rotate(-90deg);
  -ms-transform: rotate(-90deg);
  transform: rotate(-90deg);
  width: 0px;
  -moz-transform-origin: left center;
  -webkit-transform-origin: left center;
  -ms-transform-origin: left center;
  transform-origin: left center;
  -moz-transition-property: padding-bottom, margin-top, width;
  -webkit-transition-property: padding-bottom, margin-top, width;
  -ms-transition-property: padding-bottom, margin-top, width;
  transition-property: padding-bottom, margin-top, width;
}
.hr>.frac *:nth-child(3) {
  left: 25%;
  -moz-transform-origin: left center;
  -webkit-transform-origin: left center;
  -ms-transform-origin: left center;
  transform-origin: left center;
  -moz-transition-property: padding-bottom, margin-top, top;
  -webkit-transition-property: padding-bottom, margin-top, top;
  -ms-transition-property: padding-bottom, margin-top, top;
  transition-property: padding-bottom, margin-top, top;
}
.hr>.frac *:nth-child(4) {
  left: 50%;
  -moz-transform: rotate(-90deg);
  -webkit-transform: rotate(-90deg);
  -ms-transform: rotate(-90deg);
  transform: rotate(-90deg);
  width: 0px;
  -moz-transform-origin: left center;
  -webkit-transform-origin: left center;
  -ms-transform-origin: left center;
  transform-origin: left center;
  -moz-transition-property: padding-bottom, margin-top, width;
  -webkit-transition-property: padding-bottom, margin-top, width;
  -ms-transition-property: padding-bottom, margin-top, width;
  transition-property: padding-bottom, margin-top, width;
}
.hr>.frac *:nth-child(5) {
  left: 50%;
  -moz-transform: rotate(-90deg);
  -webkit-transform: rotate(-90deg);
  -ms-transform: rotate(-90deg);
  transform: rotate(-90deg);
  width: 0px;
  -moz-transform-origin: left center;
  -webkit-transform-origin: left center;
  -ms-transform-origin: left center;
  transform-origin: left center;
  -moz-transition-property: padding-bottom, margin-top, width, top;
  -webkit-transition-property: padding-bottom, margin-top, width, top;
  -ms-transition-property: padding-bottom, margin-top, width, top;
  transition-property: padding-bottom, margin-top, width, top;
}
.hr>.frac *:nth-child(6) {
  left: 50%;
  -moz-transform-origin: left center;
  -webkit-transform-origin: left center;
  -ms-transform-origin: left center;
  transform-origin: left center;
  -moz-transition-property: padding-bottom, margin-top, top;
  -webkit-transition-property: padding-bottom, margin-top, top;
  -ms-transition-property: padding-bottom, margin-top, top;
  transition-property: padding-bottom, margin-top, top;
}
.hr>.frac *:nth-child(7) {
  left: 75%;
  -moz-transform: rotate(-90deg);
  -webkit-transform: rotate(-90deg);
  -ms-transform: rotate(-90deg);
  transform: rotate(-90deg);
  width: 0px;
  -moz-transform-origin: left center;
  -webkit-transform-origin: left center;
  -ms-transform-origin: left center;
  transform-origin: left center;
  -moz-transition-property: padding-bottom, margin-top, width, top;
  -webkit-transition-property: padding-bottom, margin-top, width, top;
  -ms-transition-property: padding-bottom, margin-top, width, top;
  transition-property: padding-bottom, margin-top, width, top;
}
.hr>.frac *:nth-child(8) {
  left: 75%;
  -moz-transform-origin: left center;
  -webkit-transform-origin: left center;
  -ms-transform-origin: left center;
  transform-origin: left center;
}
.hr:hover>.frac *:nth-child(1) {
}
.hr:hover>.frac *:nth-child(2) {
  width: 25%;
}
.hr:hover>.frac *:nth-child(3) {
  top: 0%;
}
.hr:hover>.frac *:nth-child(4) {
  width: 25%;
}
.hr:hover>.frac *:nth-child(5) {
  top: 100%;
  width: 25%;
}
.hr:hover>.frac *:nth-child(6) {
  top: 100%;
}
.hr:hover>.frac *:nth-child(7) {
  top: 100%;
  width: 25%;
}
.hr:hover>.frac *:nth-child(8) {
}

.hr>.frac>*:nth-child(1) {
}
.hr>.frac>*:nth-child(2) {
}
.hr>.frac>*:nth-child(3) {
  top: 0%;
}
.hr>.frac>*:nth-child(4) {
}
.hr>.frac>*:nth-child(5) {
  top: 100%;
}
.hr>.frac>*:nth-child(6) {
  top: 100%;
}
.hr>.frac>*:nth-child(7) {
  top: 100%;
}
.hr>.frac>*:nth-child(8) {
}
</style>
<div class="hr">
  <div class="hov"></div>
  <div class="frac">
    <div>
      <div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div>
      <div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div>
      <div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div>
      <div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div>
      <div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div>
      <div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div>
      <div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div>
      <div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div>
    </div>
    <div>
      <div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div>
      <div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div>
      <div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div>
      <div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div>
      <div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div>
      <div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div>
      <div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div>
      <div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div>
    </div>
    <div>
      <div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div>
      <div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div>
      <div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div>
      <div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div>
      <div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div>
      <div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div>
      <div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div>
      <div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div>
    </div>
    <div>
      <div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div>
      <div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div>
      <div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div>
      <div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div>
      <div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div>
      <div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div>
      <div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div>
      <div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div>
    </div>
    <div>
      <div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div>
      <div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div>
      <div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div>
      <div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div>
      <div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div>
      <div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div>
      <div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div>
      <div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div>
    </div>
    <div>
      <div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div>
      <div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div>
      <div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div>
      <div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div>
      <div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div>
      <div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div>
      <div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div>
      <div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div>
    </div>
    <div>
      <div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div>
      <div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div>
      <div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div>
      <div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div>
      <div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div>
      <div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div>
      <div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div>
      <div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div>
    </div>
    <div>
      <div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div>
      <div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div>
      <div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div>
      <div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div>
      <div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div>
      <div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div>
      <div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div>
      <div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div>
    </div>
  </div>
  <div class="space">
    <div><div><div></div></div></div>
  </div>
</div>
';
}

add_shortcode('fhr', 'createHorizontalRule');
add_shortcode('fancy-hr', 'createHorizontalRule');

?>
