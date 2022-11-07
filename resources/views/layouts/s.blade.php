<?php

echo '
<style>

@charset "UTF-8";
/*--------------------------------------------------------------
# General
--------------------------------------------------------------*/
html, body {
   
  height: 100%;
}

.floatleft {
  float: left;
}

.floatright {
  float: right;
}

.alignleft {
  float: left;
  margin-right: 15px;
  margin-bottom: 15px;
}

.alignright {
  float: right;
  margin-left: 15px;
  margin-bottom: 15px;
}

.aligncenter {
  display: block;
  margin: 0 auto 15px;
}

a:focus {
  outline: 0px solid;
}

img {
  max-width: 100%;
  height: auto;
}

.fix {
  overflow: hidden;
}

p {
  margin: 0 0 15px;
  color: '.  $master_colors['color3'].';
}

h1, h2, h3, h4, h5, h6 {
  font-family: "Cairo", sans-serif;
  margin: 0 0 15px;
  color: '.  $master_colors['color3'].';
  font-weight: 500;
}

h1 {
  font-size: 48px;
  line-height: 50px;
}

h2 {
  font-size: 38px;
  line-height: 40px;
}

h3 {
  font-size: 30px;
  line-height: 32px;
}

h4 {
  font-size: 24px;
  line-height: 26px;
}

h5 {
  font-size: 20px;
  line-height: 22px;
}

h6 {
  font-size: 16px;
  line-height: 20px;
}

a {
  transition: all 0.3s ease 0s;
  text-decoration: none;
}

a:hover {
  color: '.  $master_colors['color1'].';
  text-decoration: none;
}

a:active, a:hover {
  outline: 0 none;
}

body {
  background: '.  $master_colors['color2'].' none repeat scroll 0 0;
  color: '.  $master_colors['color3'].';
   font-family: "Cairo", sans-serif;
  font-size: 20px;
  text-align: right;
  overflow-x: hidden;
  line-height: 22px;
}

@media (prefers-reduced-motion: no-preference) {
  :root {
    scroll-behavior: auto;
  }
}

/* Back to top button */
.back-to-top {
  position: fixed;
  display: none;
  background: '.  $master_colors['color1'].';
  color: '.  $master_colors['color2'].'; 
  padding: 6px 12px 9px 12px;
  font-size: 16px;
  border-radius: 2px;
  right: 15px;
  bottom: 15px;
  transition: background 0.5s;
}

@media (max-width: 768px) {
  .back-to-top {
    bottom: 15px;
  }
}

.back-to-top:focus {
  background: '.  $master_colors['color1'].';
  color: '.  $master_colors['color2'].';
  outline: none;
}

.back-to-top:hover {
  background: #3cd6ed;
  color: '.  $master_colors['color2'].';
}

.clear {
  clear: both;
}

ul {
  list-style: outside none none;
  margin: 0;
  padding: 0;
}

input, select, textarea, input[type="text"], input[type="date"], input[type="url"], input[type="email"], input[type="password"], input[type="tel"], button, button[type="submit"] {
  -moz-appearance: none;
  box-shadow: none !important;
}

div#preloader {
  position: fixed;
  left: 0;
  top: 0;
  z-index: 99999;
  width: 100%;
  height: 100%;
  overflow: visible;
  background: '.  $master_colors['color2'].'center center;
}

::-moz-selection {
  background: '.  $master_colors['color1'].';
  text-shadow: none;
}

::selection {
  background: '.  $master_colors['color1'].';
  text-shadow: none;
}

.area-padding {
  padding: 70px 0px 80px;
}

.area-padding-2 {
  padding: 70px 0px 50px;
}

.padding-2 {
  padding-bottom: 90px;
}

.section-headline h2 {
  display: inline-block;
  font-size: 40px;
  font-weight: 600;
  margin-bottom: 70px;
  position: relative;
  text-transform: capitalize;
}

.section-headline h2::after {
  border: 1px solid '.  $master_colors['color10'].';
  bottom: -20px;
  content: "";
  left: 0;
  margin: 0 auto;
  position: absolute;
  right: 0;
  width: 40%;
}

.sec-head {
  display: inline-block;
  font-size: 17px;
  font-weight: 600;
  margin-bottom: 0;
  padding: 0 0 10px;
  text-transform: uppercase;
  transition: all 0.4s ease 0s;
}
/*--------------------------------------------------------------
# Featured
--------------------------------------------------------------*/
.featured {
  position: relative;
  z-index: 2;
}

.featured .icon-box {
  padding: 40px 30px;
  box-shadow: 0px 2px 15px rgba(0, 0, 0, 0.15);
  border-radius: 10px;
  background: '.  $master_colors['color2'].';
  transition: all ease-in-out 0.3s;
}

.featured .icon-box i {
  color: '.  $master_colors['color1'].';
  font-size: 42px;
  margin-bottom: 15px;
  display: block;
}

.featured .icon-box h3 {
  font-weight: 700;
  margin-bottom: 15px;
  font-size: 20px;
}

.featured .icon-box h3 a {
  color: '.  $master_colors['color9'].';
  transition: 0.3s;
}

.featured .icon-box p {
  color: '.  $master_colors['color9'].';
  line-height: 24px;
  font-size: 16px;
  margin-bottom: 0;
}

.featured .icon-box:hover {
  background: '.  $master_colors['color1'].';
}

.featured .icon-box:hover i, .featured .icon-box:hover h3 a, .featured .icon-box:hover p {
  color: '.  $master_colors['color2'].';
}

/*--------------------------------------------------------------
# Header
--------------------------------------------------------------*/
#header {
  height: 80px;
  transition: all 0.5s;
  z-index: 997;
  transition: all 0.5s;
  padding: 20px 0;
  background: rgba(0, 0, 0, 0.5);
}

#header.header-scrolled {
  background: rgba(0, 0, 0, 0.8);
  height: 60px;
  padding: 10px 0;
}

#header .logo h1 {
  font-size: 24px;
  margin: 0;
  padding: 0;
  line-height: 1;
  font-weight: bold;
}

#header .logo h1 span {
  color: '.  $master_colors['color1'].';
}

#header .logo h1 a, #header .logo h1 a:hover {
  color: '.  $master_colors['color2'].';
  text-decoration: none;
}

#header .logo img {
  padding: 0;
  margin: 0;
  max-height: 40px;
}

@media (max-width: 768px) {
  #header {
    height: 60px;
    padding: 10px 0;
    background: rgba(0, 0, 0, 0.8);
  }
  #header .logo h1 {
    font-size: 28px;
    padding: 4px 0;
  }
}

.header-bg {
  background: url(../img/slider/slider1.jpg);
  background-repeat: no-repeat;
  background-size: cover;
  background-position: top center;
}

@media (min-width: 1025px) {
  .header-bg {
    background-attachment: fixed;
  }
}

.home-overly {
  background: rgba(0, 0, 0, 0.5);
  height: 100%;
  position: absolute;
  width: 100%;
}

/*--------------------------------------------------------------
# Nav
--------------------------------------------------------------*/
/*--------------------------------------------------------------
# Navigation Menu
--------------------------------------------------------------*/
/* Desktop Navigation */
.nav-menu, .nav-menu * {
  margin: 0;
  padding: 0;
  list-style: none;
}

.nav-menu > ul > li {
  position: relative;
  white-space: nowrap;
  float: right;
}

.nav-menu a {
  display: block;
  position: relative;
  color: '.  $master_colors['color13'].';
  padding: 7px 12px 10px 10px;
  transition: 0.3s;
  font-size: 17px;
}

.nav-menu a:hover, .nav-menu .active > a, .nav-menu li:hover > a {
  color: '.  $master_colors['color1'].';
  text-decoration: none;
}

.nav-menu .drop-down ul {
  display: block;
  position: absolute;
  left: 0;
  top: calc(100% + 30px);
  z-index: 99;
  opacity: 0;
  visibility: hidden;
  padding: 10px 0;
  background: '.  $master_colors['color2'].';
  box-shadow: 0px 0px 30px rgba(127, 137, 161, 0.25);
  transition: ease all 0.3s;
}

.nav-menu .drop-down:hover > ul {
  opacity: 1;
  top: 100%;
  visibility: visible;
}

.nav-menu .drop-down li {
  min-width: 180px;
  position: relative;
}

.nav-menu .drop-down ul a {
  padding: 10px 20px;
  font-size: 14px;
  font-weight: 500;
  text-transform: none;
  color: '.  $master_colors['color12'].';
}

.nav-menu .drop-down ul a:hover, .nav-menu .drop-down ul .active > a, .nav-menu .drop-down ul li:hover > a {
  color: '.  $master_colors['color1'].';
}

.nav-menu .drop-down > a:after {
  content: "\ea99";
  font-family: IcoFont;
  padding-left: 5px;
}

.nav-menu .drop-down .drop-down ul {
  top: 0;
  left: calc(100% - 30px);
}

.nav-menu .drop-down .drop-down:hover > ul {
  opacity: 1;
  top: 0;
  left: 100%;
}

.nav-menu .drop-down .drop-down > a {
  padding-right: 35px;
}

.nav-menu .drop-down .drop-down > a:after {
  content: "\eaa0";
  font-family: IcoFont;
  position: absolute;
  right: 15px;
}

@media (max-width: 1366px) {
  .nav-menu .drop-down .drop-down ul {
    left: -90%;
  }
  .nav-menu .drop-down .drop-down:hover > ul {
    left: -100%;
  }
  .nav-menu .drop-down .drop-down > a:after {
    content: "\ea9d";
  }
}

/* Mobile Navigation */
.mobile-nav-toggle {
  position: fixed;
  left: 15px;
  top: 15px;
  z-index: 9998;
  border: 0;
  background: none;
  font-size: 24px;
  transition: all 0.4s;
  outline: none !important;
  line-height: 1;
  cursor: pointer;
  text-align: right;
}

.mobile-nav-toggle i {
  color: '.  $master_colors['color2'].';
}

.mobile-nav {
  position: fixed;
  top: 55px;
  right: 15px;
  bottom: 15px;
  left: 15px;
  z-index: 9999;
  overflow-y: auto;
  background: '.  $master_colors['color2'].';
  transition: ease-in-out 0.2s;
  opacity: 0;
  visibility: hidden;
  border-radius: 10px;
  padding: 10px 0;
}

.mobile-nav * {
  margin: 0;
  padding: 0;
  list-style: none;
}

.mobile-nav a {
  display: block;
  position: relative;
  color: #0d2529;
  padding: 10px 20px;
  font-weight: 500;
  outline: none;
}

.mobile-nav a:hover, .mobile-nav .active > a, .mobile-nav li:hover > a {
  color: '.  $master_colors['color1'].';
  text-decoration: none;
}

.mobile-nav .drop-down > a:after {
  content: "\ea99";
  font-family: IcoFont;
  padding-left: 10px;
  position: absolute;
  right: 15px;
}

.mobile-nav .active.drop-down > a:after {
  content: "\eaa1";
}

.mobile-nav .drop-down > a {
  padding-right: 35px;
}

.mobile-nav .drop-down ul {
  display: none;
  overflow: hidden;
}

.mobile-nav .drop-down li {
  padding-left: 20px;
}

.mobile-nav-overly {
  width: 100%;
  height: 100%;
  z-index: 9997;
  top: 0;
  left: 0;
  position: fixed;
  background: rgba(1, 2, 2, 0.6);
  overflow: hidden;
  display: none;
  transition: ease-in-out 0.2s;
}

.mobile-nav-active {
  overflow: hidden;
}

.mobile-nav-active .mobile-nav {
  opacity: 1;
  visibility: visible;
}

.mobile-nav-active .mobile-nav-toggle i {
  color: '.  $master_colors['color2'].';
}

/*--------------------------------------------------------------
# Slider
--------------------------------------------------------------*/
.slider-area {
  color: '.  $master_colors['color2'].';
  position: relative;
  text-align: center;
}

.slider-content {
  padding: 180px 60px;
}

.nivo-caption::after {
  background: '.  $master_colors['color3'].' none repeat scroll 0 0;
  content: "";
  height: 100%;
  left: 0;
  opacity: 0.5;
  position: absolute;
  top: 0;
  width: 100%;
  z-index: -1;
}

.layer-1-2 {
  margin: 20px 0;
}

.layer-1-1 h2 {
  color: '.  $master_colors['color2'].';
  font-size: 32px;
  font-weight: 700;
}

.layer-1-2 h1 {
  color: '.  $master_colors['color2'].';
  font-size: 50px;
  font-weight: 700;
  line-height: 60px;
}

.layer-1-3 {
  margin: 50px 0 0;
}

.layer-1-3 a.ready-btn {
  border: 1px solid '.  $master_colors['color2'].';
  border-radius: 30px;
  color: '.  $master_colors['color2'].';
  cursor: pointer;
  display: inline-block;
  font-size: 17px;
  font-weight: 600;
  margin-top: 30px;
  padding: 10px 20px;
  text-align: center;
  text-transform: uppercase;
  transition: all 0.4s ease 0s;
  z-index: 222;
}

.layer-1-3 a.ready-btn:hover {
  color: '.  $master_colors['color2'].';
  background: '.  $master_colors['color1'].';
  border: 1px solid '.  $master_colors['color1'].';
  text-decoration: none;
}

.ready-btn.right-btn {
  margin-right: 15px;
  background: '.  $master_colors['color1'].';
  border: 1px solid '.  $master_colors['color1'].' !important;
}

.ready-btn.right-btn:hover {
  background: transparent !important;
  border: 1px solid '.  $master_colors['color2'].' !important;
}

.nivo-controlNav {
  bottom: 0;
  left: 0;
  position: absolute;
  right: 0;
  z-index: 8;
}

.nivo-directionNav {
  display: block;
}

.nivo-controlNav a {
  background: transparent none repeat scroll 0 0;
  border: 2px solid '.  $master_colors['color2'].';
  box-shadow: none;
  display: inline-block;
  font-size: 0;
  height: 2px;
  margin: 5px 3px;
  opacity: 1;
  text-align: center;
  text-indent: inherit;
  vertical-align: top;
  width: 20px;
}

.nivo-controlNav a:hover, .nivo-controlNav a.active {
  background: '.  $master_colors['color2'].' none repeat scroll 0 0;
  border-color: '.  $master_colors['color1'].';
  -moz-transform: rotate(180deg);
  -webkit-transform: rotate(180deg);
  -o-transform: rotate(180deg);
  -ms-transform: rotate(180deg);
}

/* Normal desktop :992px. */
@media (min-width: 1400px) and (max-width: 1920px) {
  .slider-content {
    padding: 340px 0;
  }
}

/* Normal desktop :992px. */
@media (min-width: 992px) and (max-width: 1169px) {
  .slider-content {
    padding: 144px 0;
  }
}

/* Tablet desktop :768px. */
@media (min-width: 768px) and (max-width: 991px) {
  .slider-content {
    padding: 93px 0;
  }
  .layer-1-2 h1 {
    font-size: 22px;
    line-height: 24px;
  }
  .layer-1-3 a.ready-btn {
    font-size: 14px;
    margin-top: 20px;
    padding: 10px 20px;
  }
}

@media (max-width: 767px) {
  .nivo-directionNav {
    display: none;
  }
  .slider-content {
    padding: 46px 0px;
  }
  .layer-1-2 {
    margin: 10px 0;
  }
  .layer-1-1 h2 {
    font-size: 14px;
    line-height: 16px;
  }
  .layer-1-2 h1 {
    font-size: 14px;
    line-height: 16px;
  }
  .layer-1-3 a.ready-btn {
    font-size: 12px;
    margin-top: 10px;
    padding: 8px 10px;
  }
  .layer-1-3 {
    margin: 10px 0 0;
  }
  .nivo-controlNav {
    bottom: -8px;
  }
}

@media only screen and (min-width: 480px) and (max-width: 767px) {
  .slider-content {
    padding: 70px 0px;
  }
  .layer-1-1 h2, .layer-1-2 h1 {
    font-size: 24px;
    line-height: 30px;
  }
}

/* -------------------------------------
preview-1
---------------------------------------- */
.preview-1 .nivoSlider {
  position: relative;
  background: url(../lib/nivo-slider/img/loading.gif) no-repeat 50% 50%;
}

.preview-1 .nivoSlider img {
  position: absolute;
  top: 0px;
  left: 0px;
  display: none;
}

.preview-1 .nivoSlider a {
  border: 0;
  display: block;
}

.preview-1 .nivo-controlNav {
  text-align: center;
  padding: 20px 0;
}

.preview-1 .nivo-controlNav a {
  display: inline-block;
  width: 22px;
  height: 22px;
  background: url(../lib/nivo-slider/img/bullets.png) no-repeat;
  text-indent: -9999px;
  border: 0;
  margin: 0 2px;
}

.preview-1 .nivo-controlNav a.active {
  background-position: 0 -22px;
}

.preview-1 .nivo-directionNav a {
  display: block;
  width: 30px;
  height: 30px;
  background: url(../lib/nivo-slider/img/arrows.png) no-repeat;
  text-indent: -9999px;
  border: 0;
  opacity: 0;
  transition: all 200ms ease-in-out;
}

.preview-1:hover .nivo-directionNav a {
  opacity: 1;
}

.nivo-prevNav {
  left: 15px;
}

.nivo-nextNav {
  right: 15px;
}

.preview-1 a.nivo-nextNav {
  background-position: -30px 0;
}

.preview-1 .nivo-caption {
  font-family: "Cairo", sans-serif;
}

.preview-1 .nivo-caption a {
  color: '.  $master_colors['color2'].';
  border-bottom: 1px dotted '.  $master_colors['color2'].';
}

.preview-1 .nivo-caption a:hover {
  color: '.  $master_colors['color2'].';
}

.preview-1 .nivo-controlNav.nivo-thumbs-enabled {
  width: 100%;
}

.preview-1 .nivo-controlNav.nivo-thumbs-enabled a {
  width: auto;
  height: auto;
  background: none;
  margin-bottom: 5px;
}

.preview-1 .nivo-controlNav.nivo-thumbs-enabled img {
  display: block;
  width: 120px;
  height: auto;
}

.preview-1 .nivo-controlNav {
  position: relative;
  z-index: 99999;
  bottom: 68px;
}

.preview-1 .nivo-controlNav a {
  border: 5px solid '.  $master_colors['color2'].';
  display: inline-block;
  height: 18px;
  margin: 0 5px;
  text-indent: -9999px;
  width: 18px;
  line-height: 8px;
  background: '.  $master_colors['color14'].';
  cursor: pointer;
  position: relative;
  z-index: 9;
  border-radius: 100%;
  opacity: 0;
  z-index: -999;
}

.preview-1:hover .nivo-controlNav a {
  opacity: 1;
  z-index: 999999;
}

.preview-1 .nivo-controlNav a:hover, .preview-1 .nivo-controlNav a.active {
  background: '.  $master_colors['color11'].';
  cursor: pointer;
}

/* -------------------------------------
preview-2
---------------------------------------- */
.preview-2 .nivoSlider:hover .nivo-directionNav a.nivo-prevNav {
  left: 50px;
}

.preview-2 .nivoSlider:hover .nivo-directionNav a.nivo-nextNav {
  right: 50px;
}

.preview-2 .nivoSlider .nivo-directionNav a.nivo-prevNav {
  font-size: 0;
}

.preview-2 .nivoSlider .nivo-directionNav a.nivo-nextNav {
  font-size: 0;
}

.preview-2 .nivo-directionNav a.nivo-prevNav::before {
  background: rgba(0, 0, 0, 0) none repeat scroll 0 0;
  color: '.  $master_colors['color2'].'fff;
  content: "";
  cursor: pointer;
  font: 300 50px/50px FontAwesome;
  position: absolute;
  text-align: center;
  top: 50%;
  transition: all 300ms ease-in 0s;
  z-index: 9;
  font-weight: 100;
  left: 0px;
  width: 50px;
  border: 1px solid '.  $master_colors['color2'].';
  border-radius: 50%;
  font-size: 30px;
}

.preview-2 .nivo-directionNav a.nivo-nextNav:hover:before, .preview-2 .nivo-directionNav a.nivo-prevNav:hover:before {
  border-color: '.  $master_colors['color1'].';
  color: '.  $master_colors['color2'].';
  background: '.  $master_colors['color1'].';
}

.preview-2 .nivo-directionNav a.nivo-nextNav::before {
  background: rgba(0, 0, 0, 0) none repeat scroll 0 0;
  border: 1px solid '.  $master_colors['color2'].';
  border-radius: 50%;
  color: '.  $master_colors['color2'].'fff;
  content: "";
  cursor: pointer;
  font: 100 30px/50px FontAwesome;
  height: 50px;
  position: absolute;
  right: 0px;
  text-align: center;
  top: 50%;
  transition: all 300ms ease-in 0s;
  width: 50px;
  z-index: 9;
  font-size: 30px;
}

.niceties.preview-2 {
  position: relative;
  height: 100%;
}

/*--------------------------------------------------------------
# About
--------------------------------------------------------------*/
.about-area {
  background-color: '.  $master_colors['color4'].';
}

.single-well > a {
  display: block;
}

.single-well ul li {
  color: '.  $master_colors['color3'].';
  display: block;
  padding: 5px 0;
}

.single-well ul li i {
  color: '.  $master_colors['color1'].';
  padding-right: 10px;
  font-size: 12px;
}

.single-well p {
  color: '.  $master_colors['color3'].';
}

/*--------------------------------------------------------------
# Services
--------------------------------------------------------------*/
.services-icon {
  color: '.  $master_colors['color3'].';
  display: inline-block;
  font-size: 36px;
  line-height: 36px;
  margin-bottom: 20px;
}

.section-headline.services-head > h2 {
  margin-bottom: 25px;
}

.services-details {
  padding-top: 40px;
  transition: all 0.5s ease 0s;
}

.services-details:hover h4, .services-details:hover .services-icon {
  color: '.  $master_colors['color1'].';
}

.row.second-row {
  margin-top: 40px;
}

.section-head > h2 {
  color: '.  $master_colors['color10'].';
}

.single-services > h4 {
  color: '.  $master_colors['color3'].';
  font-size: 24px;
  font-weight: 500;
}

.single-services > p {
  color: '.  $master_colors['color10'].';
  font-size: 14px;
}

/*--------------------------------------------------------------
# Skills
--------------------------------------------------------------*/
.our-skill-area {
  position: relative;
}

.our-skill-area {
  background: rgba(248, 248, 248, 0.8) url("../img/background/bg1.jpg") no-repeat fixed center top/cover;
}

.test-overly {
  background: rgba(0, 0, 0, 0.8);
  position: absolute;
  width: 100%;
  height: 100%;
}

.progress-h4 {
  color: '.  $master_colors['color2'].';
  font-weight: 500;
}

/*--------------------------------------------------------------
# Team
--------------------------------------------------------------*/
.team-member {
  background: rgba(0, 0, 0, 0.65) none repeat scroll 0 0;
  display: block;
  margin-right: -15px;
  padding: 10px;
  position: relative;
  overflow: hidden;
}

.team-member::before {
  background: rgba(0, 0, 0, 0) url("../img/team/team01.jpg") repeat scroll 0 0;
  content: "";
  display: block;
  height: 100%;
  left: 0;
  margin-right: -15px;
  padding: 10px;
  position: absolute;
  top: 0;
  width: 100%;
  z-index: -1;
  background-repeat: no-repeat;
  background-size: cover;
  background-position: top center;
  transition: 5s;
  transform: scale(1);
}

.team-member:hover.team-member::before {
  transform: scale(1.2);
}

.single-team-member {
  border: 1px solid '.  $master_colors['color5'].';
}

.team-left-text h4 {
  color: '.  $master_colors['color2'].';
  font-size: 30px;
  font-weight: 700;
  text-transform: uppercase;
}

.team-left-text p {
  color: '.  $master_colors['color2'].';
  font-size: 17px;
  line-height: 26px;
}

.email-news {
  display: block;
  margin: 30px 0;
  overflow: hidden;
  text-align: center;
  width: 100%;
}

.email-news .email_button input {
  background: rgba(0, 0, 0, 0) none repeat scroll 0 0;
  border: 1px solid '.  $master_colors['color2'].';
  color: '.  $master_colors['color2'].';
  float: left;
  font-size: 13px;
  padding: 8px;
  width: 81%;
}

.email-news .email_button > button {
  background: rgba(0, 0, 0, 0) none repeat scroll 0 0;
  border: 1px solid '.  $master_colors['color2'].';
  color: '.  $master_colors['color2'].';
  float: left;
  font-size: 16px;
  padding: 8px 12px;
  text-align: center;
}

.email-news .email_button > button:hover {
  background: '.  $master_colors['color1'].';
  border: 1px solid '.  $master_colors['color2'].';
  color: '.  $master_colors['color2'].';
}

.team-left-icon ul li {
  display: inline-block;
}

.team-left-icon ul li a:hover {
  color: '.  $master_colors['color1'].';
  background: '.  $master_colors['color2'].';
  border: 2px solid '.  $master_colors['color2'].';
}

.team-left-icon ul li a {
  border: 2px solid '.  $master_colors['color2'].';
  color: '.  $master_colors['color2'].';
  display: block;
  font-size: 16px;
  height: 40px;
  line-height: 37px;
  margin: 0 3px;
  width: 40px;
}

.team-member-carousel .single-team-member {
  overflow: hidden;
  width: 100%;
}

.single-team-member:hover .team-img a:after {
  opacity: 1;
}

.single-team-member:hover .team-social-icon {
  top: 45%;
  opacity: 1;
}

.team-img {
  position: relative;
}

.team-img > a {
  display: block;
}

.team-img > a::after {
  background: rgba(0, 0, 0, 0.7);
  bottom: 0;
  content: "";
  height: 100%;
  left: 0;
  position: absolute;
  transition: all 0.5s ease 0s;
  width: 100%;
  opacity: 0;
}

.team-social-icon {
  left: 50%;
  margin-left: -61px;
  opacity: 0;
  position: absolute;
  top: 30%;
  transition: 1.3s;
}

.team-social-icon ul li {
  display: inline-block;
}

.team-social-icon ul li a {
  border: 1px solid '.  $master_colors['color2'].';
  border-radius: 50%;
  color: '.  $master_colors['color2'].';
  display: block;
  font-size: 14px;
  height: 34px;
  line-height: 35px;
  margin: 0 3px;
  width: 34px;
}

.team-social-icon ul li a:hover {
  color: '.  $master_colors['color2'].';
  border: 1px solid '.  $master_colors['color1'].';
  background: '.  $master_colors['color1'].';
}

.team-content {
  padding: 10px 0px;
}

.team-content > h4, .team-content > p {
  color: '.  $master_colors['color3'].';
  margin-bottom: 5px;
}

.team-content.head-team p {
  margin-bottom: 0;
}

.team-left-icon.text-center {
  margin-bottom: 20px;
}

.head-team h4 {
  display: inline-block;
  font-size: 25px;
  font-weight: 600;
  padding-bottom: 10px;
  text-transform: uppercase;
}

/*--------------------------------------------------------------
# Review
--------------------------------------------------------------*/
.reviews-area {
  background: url(../img/background/bg1.jpg);
  overflow: hidden;
  background-repeat: no-repeat;
  background-size: cover;
  background-position: top center;
  background-attachment: fixed;
  width: 100%;
  height: auto;
  position: relative;
}

.work-left-text {
  background: '.  $master_colors['color1'].' none repeat scroll 0 0;
}

.work-right-text {
  background: rgba(0, 0, 0, 0.8) none repeat scroll 0 0;
}

.work-right-text h2 {
  color: '.  $master_colors['color2'].';
  text-transform: uppercase;
  font-size: 24px;
}

.work-right-text h5 {
  color: '.  $master_colors['color2'].';
  font-size: 18px;
  font-weight: 700;
  line-height: 34px;
  text-transform: uppercase;
}

.work-right-text .sus-btn {
  margin-left: 0;
  margin-top: 20px;
}

.single-awesome-4 {
  display: block;
  float: left;
  overflow: hidden;
  width: 33.33%;
}

.single-awesome-4 .add-actions {
  padding: 10px 20px;
}

/*--------------------------------------------------------------
# Portfolio
--------------------------------------------------------------*/
.pst-content {
  padding-left: 10px;
}

.project-menu {
  margin-bottom: 40px;
  text-align: center;
}

.project-menu li {
  display: inline-block;
}

.project-menu li a {
  background: '.  $master_colors['color2'].' none repeat scroll 0 0;
  border: 1px solid '.  $master_colors['color3'].';
  border-radius: 20px;
  color: '.  $master_colors['color3'].';
  cursor: pointer;
  display: inline-block;
  font-size: 14px;
  font-weight: 500;
  margin: 0 4px;
  padding: 6px 15px;
  text-transform: capitalize;
  transition: all 0.3s ease 0s;
}

.project-menu li a.active, .project-menu li a:hover {
  border-color: '.  $master_colors['color1'].';
  background: '.  $master_colors['color1'].';
  color: '.  $master_colors['color2'].';
  text-decoration: none;
}

.single-awesome-portfolio {
  float: left;
  overflow: hidden;
  padding: 15px;
  width: 25%;
  position: relative;
}

.single-awesome-project {
  overflow: hidden;
  margin-bottom: 30px;
}

.first-item {
  margin-bottom: 30px;
}

.awesome-img {
  display: block;
  width: 100%;
  height: 100%;
  position: relative;
}

.awesome-img > a {
  display: block;
  position: relative;
}

.single-awesome-project:hover .awesome-img > a::after {
  opacity: 1;
}

.single-awesome-project:hover .add-actions {
  opacity: 1;
  bottom: 0;
}

.awesome-img > a::after {
  background: rgba(0, 0, 0, 0.7) none repeat scroll 0 0;
  content: "";
  height: 100%;
  left: 0;
  position: absolute;
  top: 0;
  width: 100%;
  opacity: 0;
  transition: 0.4s;
}

.add-actions {
  background: rgba(0, 0, 0, 0.6) none repeat scroll 0 0;
  bottom: 30px;
  display: block;
  height: 100%;
  left: 0;
  opacity: 0;
  overflow: hidden;
  padding: 10px 15px;
  position: absolute;
  transition: all 0.4s ease 0s;
  width: 100%;
}

.project-dec {
  display: block;
  height: 100%;
  width: 100%;
}

.project-dec a {
  display: block;
  height: 100%;
  width: 100%;
}

.project-dec h4 {
  margin-bottom: 5px;
}

.project-dec h4:hover {
  color: '.  $master_colors['color2'].';
}

.project-dec h4 {
  color: '.  $master_colors['color5'].';
  font-size: 24px;
  margin-top: -45px;
  padding-top: 50%;
  text-decoration: none;
  text-transform: uppercase;
  font-weight: 800;
}

.project-dec span {
  color: '.  $master_colors['color5'].';
  font-size: 13px;
}

.project-action-btn {
  display: block;
  height: 100%;
  text-align: center;
  transition: all 1s ease 0s;
  width: 100%;
}

.project-action-btn li {
  display: block;
  height: 100%;
  width: 100%;
}

.project-action-btn li a {
  display: block;
  height: 100%;
  width: 100%;
}

/*--------------------------------------------------------------
# Pricing
--------------------------------------------------------------*/
.pricing-area {
  background: rgba(0, 0, 0, 0.02) none repeat scroll 0 0;
}

.pri_table_list {
  border: 1px solid '.  $master_colors['color6'].';
  text-align: center;
  transition: all 0.4s ease 0s;
  background: '.  $master_colors['color2'].';
}

.pri_table_list h3 span {
  font-size: 16px;
}
 
.pri_table_list ol li {
  border-bottom: 1px solid '.  $master_colors['color6'].';
  color: '.  $master_colors['color15'].';
  padding: 12px 15px;
  position: relative;
  text-align: left;
}

.pri_table_list li.check.cross::after {
  content: "\f00d";
  font-family: fontawesome;
  font-size: 14px;
  position: absolute;
  right: 50px;
  top: 12px;
  color: indianred;
}

.pri_table_list li.check::after {
  content: "\f00c";
  font-family: fontawesome;
  font-size: 14px;
  position: absolute;
  right: 50px;
  top: 12px;
  color: '.  $master_colors['color1'].';
}

.pri_table_list button {
  background: '.  $master_colors['color3'].' none repeat scroll 0 0;
  border: 1px solid '.  $master_colors['color3'].';
  color: '.  $master_colors['color2'].';
  margin-bottom: 25px;
  padding: 10px 35px;
  text-transform: uppercase;
  transition: all 0.4s ease 0s;
  border-radius: 30px;
}

.pri_table_list > h3 {
  color: '.  $master_colors['color10'].';
  font-size: 24px;
  font-weight: 700;
  line-height: 25px;
  padding: 30px 0 20px;
  text-transform: uppercase;
  transition: all 0.4s ease 0s;
}

.pri_table_list ol {
  list-style: outside none none;
  margin: 0;
  padding: 0 0 25px;
}

.pri_table_list.active {
  transition: all 0.4s ease 0s;
  position: relative;
  overflow: hidden;
}

.saleon {
  background: '.  $master_colors['color1'].' none repeat scroll 0 0;
  color: '.  $master_colors['color2'].';
  font-size: 13px;
  font-weight: 700;
  left: -26px;
  padding: 2px 25px;
  position: absolute;
  text-transform: uppercase;
  top: 16px;
  transform: rotate(-45deg);
  -webkit-transform: rotate(-45deg);
  -ms-transform: rotate(-45deg);
  -o-transform: rotate(-45deg);
  -moz-transform: rotate(-45deg);
}

.pri_table_list > button:hover {
  background-color: '.  $master_colors['color2'].';
  border: 1px solid '.  $master_colors['color10'].';
  color: '.  $master_colors['color10'].';
}

.active > h3 {
  background: '.  $master_colors['color26'].' none repeat scroll 0 0;
  color: '.  $master_colors['color10'].';
  transition: all 0.4s ease 0s;
}

.active > button {
  background: '.  $master_colors['color1'].' none repeat scroll 0 0;
  border: 1px solid '.  $master_colors['color1'].';
  color: '.  $master_colors['color2'].';
  transition: 0.4s;
}

.active > button:hover {
  background: '.  $master_colors['color10'].' none repeat scroll 0 0;
  border: 1px solid '.  $master_colors['color10'].';
  color: '.  $master_colors['color2'].';
  transition: 0.4s;
}

/*--------------------------------------------------------------
# Testimonials
--------------------------------------------------------------*/
.testimonials-area {
  background: rgba(0, 0, 0, 0) url("../img/background/slider1.jpg") no-repeat fixed center top/cover;
  height: auto;
  width: 100%;
}

.testi-inner {
  position: relative;
  width: 100%;
  height: auto;
  z-index: 1;
}

.testi-overly {
  background: rgba(0, 0, 0, 0.7) none repeat scroll 0 0;
  height: 100%;
  left: 0;
  position: absolute;
  top: 0;
  width: 100%;
  z-index: -1;
}

.quate {
  border: 1px dotted '.  $master_colors['color2'].';
  border-radius: 50%;
  color: '.  $master_colors['color2'].';
  display: inline-block;
  font-size: 24px;
  height: 70px;
  line-height: 70px;
  width: 70px;
}

.quate:hover {
  color: '.  $master_colors['color2'].';
}

.testi-img img {
  border: 1px dotted rgba(0, 0, 0, 0.05);
  border-radius: 2px;
  height: 80px;
  margin: 0 auto;
  padding: 5px;
  transition: background 0.6s ease-out 0s;
  width: 80px !important;
}

.testi-text p {
  color: '.  $master_colors['color2'].';
  font-size: 16px;
  line-height: 1.5em;
  margin: 20px 0;
  letter-spacing: 1px;
}

.testi-text h6 {
  color: '.  $master_colors['color2'].';
  font-size: 20px;
}

.testimonial-carousel.owl-carousel.owl-theme .owl-controls .owl-dots div.owl-dot > span {
  background: '.  $master_colors['color2'].' none repeat scroll 0 0;
  display: inline-block;
  height: 8px;
  width: 8px;
  transition: 0.4s;
  border-radius: 50%;
}

.testimonial-carousel.owl-carousel.owl-theme .owl-controls .owl-dots {
  bottom: -30px;
  display: block;
  left: 50%;
  margin-left: -20px;
  position: absolute;
}

.testimonial-content {
  margin-bottom: 15px;
}

.testimonial-carousel.owl-carousel.owl-theme .owl-controls .owl-dots div.owl-dot {
  display: inline-block;
  margin: 0 3px;
}

.testimonial-carousel.owl-carousel.owl-theme .owl-controls .owl-dots div.owl-dot.active span {
  background: '.  $master_colors['color1'].';
}

.testimonial-carousel .owl-nav,
.testimonial-carousel .owl-dots {
  margin-top: 5px;
  text-align: center;
}

.testimonial-carousel .owl-dot {
  display: inline-block;
  margin: 0 5px;
  width: 12px;
  height: 12px;
  border-radius: 50%;
  background-color: '.  $master_colors['color5'].' !important;
}

.testimonial-carousel .owl-dot.active {
  background-color: '.  $master_colors['color1'].' !important;
}

.testi-text.text-center > h6 {
  color: '.  $master_colors['color2'].';
  font-size: 20px;
  font-weight: 700;
  text-transform: uppercase;
}

.guest-rev {
  color: '.  $master_colors['color5'].';
  font-size: 16px;
}

.guest-rev > a {
  color: '.  $master_colors['color1'].';
  font-size: 14px;
}

/*--------------------------------------------------------------
# Quote
--------------------------------------------------------------*/
.suscribe-area {
  background: '.  $master_colors['color1'].' none repeat scroll 0 0;
  padding: 30px 0;
}

.suscribe-text {
  display: block;
  padding: 10px 0;
}

.suscribe-text h3 {
  color: '.  $master_colors['color2'].';
  display: inline-block;
  font-size: 20px;
  font-weight: 600;
  margin: 0;
  text-transform: uppercase;
  letter-spacing: 2px;
}

.sus-btn {
  background: '.  $master_colors['color2'].' none repeat scroll 0 0;
  border: 2px solid '.  $master_colors['color2'].';
  color: '.  $master_colors['color1'].';
  display: inline-block;
  font-size: 16px;
  font-weight: 700;
  margin-left: 100px;
  padding: 10px 20px;
  text-decoration: none;
  text-transform: uppercase;
  border-radius: 30px;
}

.sus-btn:hover {
  background: '.  $master_colors['color1'].' none repeat scroll 0 0;
  border: 2px solid '.  $master_colors['color2'].';
  color: '.  $master_colors['color2'].';
}

/*--------------------------------------------------------------
# Contact
--------------------------------------------------------------*/
.contact-area {
  height: auto;
  width: 100%;
}

.contact-content {
  padding: 100px;
  background: '.  $master_colors['color11'].' none repeat scroll 0 0;
}

.contact-content-right {
  padding: 100px;
}

.single-icon i {
  font-size: 24px;
  width: 50px;
  height: 50px;
  border: 1px solid '.  $master_colors['color3'].';
  line-height: 46px;
  border-radius: 50%;
  margin-bottom: 20px;
}

.single-icon p {
  font-size: 16px;
  line-height: 30px;
}

.contact-icon {
  margin-bottom: 40px;
}

#google-map {
  height: 370px;
  margin-bottom: 20px;
}

.php-email-form .validate {
  display: none;
  color: red;
  margin: 0;
  font-weight: 400;
  font-size: 13px;
}

.php-email-form .error-message {
  display: none;
  color: '.  $master_colors['color2'].';
  background: '.  $master_colors['color16'].';
  text-align: center;
  padding: 15px;
  font-weight: 600;
}

.php-email-form .sent-message {
  display: none;
  color: '.  $master_colors['color2'].';
  background: '.  $master_colors['color17'].';
  text-align: center;
  padding: 15px;
  font-weight: 600;
}

.php-email-form .loading {
  display: none;
  background: '.  $master_colors['color2'].';
  text-align: center;
  padding: 15px;
}

.php-email-form .loading:before {
  content: "";
  display: inline-block;
  border-radius: 50%;
  width: 24px;
  height: 24px;
  margin: 0 10px -6px 0;
  border: 3px solid '.  $master_colors['color17'].';
  border-top-color: '.  $master_colors['color18'].';
  -webkit-animation: animate-loading 1s linear infinite;
  animation: animate-loading 1s linear infinite;
}

.php-email-form input, .php-email-form textarea {
  border-radius: 0;
  box-shadow: none;
  font-size: 14px;
}

.php-email-form input:focus, .php-email-form textarea:focus {
  border-color: '.  $master_colors['color1'].';
}

.php-email-form input {
  padding: 10px 15px;
}

.php-email-form textarea {
  padding: 12px 15px;
}

.php-email-form button[type="submit"] {
  background: rgba(0, 0, 0, 0) none repeat scroll 0 0;
  border: 1px solid '.  $master_colors['color6'].';
  color: '.  $master_colors['color3'].';
  font-size: 16px;
  font-weight: 700;
  margin-top: 8px;
  padding: 12px 30px;
  text-transform: uppercase;
  transition: all 0.3s ease 0s;
  border-radius: 30px;
}

@-webkit-keyframes animate-loading {
  0% {
    transform: rotate(0deg);
  }
  100% {
    transform: rotate(360deg);
  }
}

@keyframes animate-loading {
  0% {
    transform: rotate(0deg);
  }
  100% {
    transform: rotate(360deg);
  }
}

/*--------------------------------------------------------------
# Blog
--------------------------------------------------------------*/
.blog-area {
  height: auto;
  width: 100%;
}

.blog-text h4 a {
  color: '.  $master_colors['color3'].';
  text-decoration: none;
}

.blog-text h4 {
  color: '.  $master_colors['color3'].';
  margin-bottom: 15px;
}

.blog-btn {
  border-bottom: 1px dotted '.  $master_colors['color3'].';
  color: '.  $master_colors['color3'].';
  text-decoration: none;
}

.blog-btn {
  border-bottom: 1px dotted '.  $master_colors['color3'].';
  color: '.  $master_colors['color3'].';
  display: inline-block;
  padding: 0 1px 5px 0;
  position: relative;
  text-decoration: none;
}

.blog-btn {
  position: relative;
}

.blog-btn::after {
  content: "\f178";
  font-family: fontawesome;
  position: absolute;
  right: -20px;
  top: 1px;
  transition: all 0.3s ease 0s;
}

.blog-btn:hover::after {
  right: -30px;
}

.blog-btn:hover {
  color: '.  $master_colors['color10'].';
  text-decoration: none;
}

.blog_meta span.date_type i {
  margin-left: 5px;
}

.blog-meta span.comments-type {
  margin-left: 5px;
}

.blog-meta span i {
  padding-right: 10px;
}

.blog-content .blog-meta {
  border-bottom: 1px dotted '.  $master_colors['color10'].';
}

.blog-meta {
  border-bottom: 1px dotted '.  $master_colors['color2'].';
  padding: 10px 0;
}

.comments-type > a, .date-type, .blog-meta span.comments-type {
  color: '.  $master_colors['color10'].';
  letter-spacing: 1px;
  margin-right: 5px;
}

.blog-meta .comments-type i {
  padding-right: 0 !important;
}

.blog-content-right .comments-type > a, .blog-content-right .date-type, .blog-content-right .blog-meta span.comments-type, .blog-content-right .blog-text p {
  color: '.  $master_colors['color2'].';
  letter-spacing: 1px;
}

.single-blog .ready-btn {
  border: 1px solid '.  $master_colors['color3'].';
  border-radius: 30px;
  color: '.  $master_colors['color3'].';
  cursor: pointer;
  display: inline-block;
  font-size: 15px;
  font-weight: 500;
  margin-top: 10px;
  padding: 10px 20px;
  text-align: center;
  text-transform: uppercase;
  transition: all 0.4s ease 0s;
}

.single-blog .ready-btn:hover {
  border: 1px solid '.  $master_colors['color1'].';
  color: '.  $master_colors['color2'].';
}

/*--------------------------------------------------------------
# Blog page
--------------------------------------------------------------*/
.page-area {
  position: relative;
}

.blog-page .banner-box {
  margin-bottom: 40px;
}

.search-option input {
  border: medium none;
  padding: 6px 15px;
  width: 80%;
}

.search-option {
  border: 1px solid '.  $master_colors['color6'].';
  height: 42px;
  margin-bottom: 30px;
}

.search-option button {
  background: transparent none repeat scroll 0 0;
  border: medium none;
  font-size: 20px;
  padding: 8px 23px;
}

.search-option button:hover {
  color: '.  $master_colors['color1'].';
}

.left-blog h4 {
  border-bottom: 1px solid '.  $master_colors['color5'].';
  color: '.  $master_colors['color3'].';
  font-size: 17px;
  font-weight: 500;
  margin-bottom: 0;
  padding: 15px 10px;
  text-transform: uppercase;
}

.left-blog {
  background: '.  $master_colors['color4'].' none repeat scroll 0 0;
  margin-bottom: 30px;
  overflow: hidden;
  padding-bottom: 20px;
}

.left-blog li {
  border-bottom: 1px solid '.  $master_colors['color5'].';
  display: block;
}

.left-blog ul li a {
  color: '.  $master_colors['color3'].';
  display: block;
  font-size: 14px;
  padding: 10px;
  text-transform: capitalize;
}

.recent-single-post {
  border-bottom: 1px solid '.  $master_colors['color5'].';
  display: block;
  overflow: hidden;
  padding: 15px 10px;
}

.ready-btn {
  border: 1px solid '.  $master_colors['color2'].';
  border-radius: 30px;
  color: '.  $master_colors['color2'].';
  cursor: pointer;
  display: inline-block;
  font-size: 17px;
  font-weight: 600;
  margin-top: 30px;
  padding: 12px 40px;
  text-align: center;
  text-transform: uppercase;
  transition: all 0.4s ease 0s;
  z-index: 222;
}

.ready-btn:hover {
  color: '.  $master_colors['color2'].';
  background: '.  $master_colors['color1'].';
  border: 1px solid '.  $master_colors['color1'].';
  text-decoration: none;
}

.post-img {
  display: inline-block;
  float: left;
  padding: 0 5px;
  width: 35%;
}

.pst-content {
  display: inline-block;
  float: left;
  width: 65%;
}

.pst-content p a:hover, .left-blog ul li a:hover {
  color: '.  $master_colors['color1'].';
}

.blog-page .single-blog {
  margin-bottom: 40px;
}

.pst-content p a {
  color: '.  $master_colors['color3'].';
  font-size: 15px;
}

.header-bottom h1, .header-bottom h2 {
  color: '.  $master_colors['color2'].';
}

.blog-tags {
  padding: 1px 0;
}

.left-blog li:last-child {
  border-bottom: 0;
}

.popular-tag.left-blog ul li a:hover {
  color: '.  $master_colors['color2'].';
}

.popular-tag.left-side-tags.left-blog ul {
  padding: 0 10px;
}

.blog-1 .banner-box {
  margin-bottom: 30px;
}

.left-tags .left-side-tags ul li {
  border-bottom: 0;
}

.left-tags .left-side-tags ul li a {
  padding: 3px 10px;
  width: auto;
}

.left-side-tags h4 {
  margin-bottom: 15px;
}

/*--------------------------------------------------------------
# Blog Details
--------------------------------------------------------------*/
.post-information h2 {
  color: '.  $master_colors['color20'].';
  font-size: 22px;
  text-transform: uppercase;
}

.post-information {
  padding: 20px 0;
}

.post-information .entry-meta span a {
  color: '.  $master_colors['color3'].';
  display: inline-block;
  padding: 10px 0;
}

.entry-meta span a:hover {
  color: '.  $master_colors['color1'].';
}

.post-information .entry-meta {
  border-bottom: 1px solid '.  $master_colors['color6'].';
  margin: 20px 0;
}

.post-information .entry-meta span i {
  padding: 0 10px;
}

.entry-content > p {
  color: '.  $master_colors['color3'].';
}

.entry-meta > span {
  color: '.  $master_colors['color3'].';
}

.entry-content blockquote {
  background: '.  $master_colors['color2'].' none repeat scroll 0 0;
  border-left: 5px solid '.  $master_colors['color1'].';
  font-size: 17.5px;
  font-style: italic;
  margin: 0 0 20px 40px;
  padding: 22px 20px;
}

.pagination > .active > a, .pagination > .active > span, .pagination > .active > a:hover, .pagination > .active > span:hover, .pagination > .active > a:focus, .pagination > .active > span:focus {
  background-color: '.  $master_colors['color1'].';
  border-color: '.  $master_colors['color1'].';
  color: '.  $master_colors['color2'].';
  cursor: default;
  z-index: 3;
}

.social-sharing {
  background: '.  $master_colors['color2'].' none repeat scroll 0 0;
  border: 1px solid '.  $master_colors['color6'].';
  display: block;
  margin: 30px 0;
}

.social-sharing > h3 {
  display: inline-block;
  font-size: 18px;
  margin: 0;
  padding: 20px 10px;
}

.sharing-icon {
  display: inline-block;
  float: right;
  padding: 13px 10px;
}

.sharing-icon a {
  border: 1px solid '.  $master_colors['color3'].';
  color: '.  $master_colors['color3'].';
  display: block;
  float: left;
  font-size: 18px;
  height: 34px;
  line-height: 30px;
  margin-left: 10px;
  text-align: center;
  width: 34px;
}

.sharing-icon a:hover {
  color: '.  $master_colors['color1'].';
  border: 1px solid '.  $master_colors['color1'].';
}

.single-blog .author-avatar {
  float: left;
  margin-right: 10px;
}

.single-blog .author-description h2 {
  font-size: 18px;
  margin: 0;
  padding: 0 0 5px;
}

.author-info {
  background: '.  $master_colors['color2'].' none repeat scroll 0 0;
  float: left;
  margin: 30px 0;
  padding: 15px;
  width: 100%;
}

.single-post-comments {
  margin-bottom: 60px;
  max-width: 650px;
}

.comments-heading h3, h3.comment-reply-title {
  border-bottom: 1px solid'.  $master_colors['color21'].';
  color: '.  $master_colors['color3'].';
  font-size: 18px;
  margin: 0 0 20px;
  padding: 0 0 5px;
  text-transform: uppercase;
}

.comments-list ul li {
  margin-bottom: 25px;
}

.comments-list-img {
  float: left;
  margin-right: 15px;
}

.comments-content-wrap {
  color: '.  $master_colors['color7'].';
  font-size: 12px;
  line-height: 1;
  margin: 0 0 15px 80px;
  padding: 10px;
  position: relative;
}

.author-avatar {
  display: inline-block;
  float: left;
  width: 10%;
}

.author-description h2 {
  color: '.  $master_colors['color22'].';
  font-size: 20px;
  text-transform: uppercase;
}

.author-description h2 a {
  color: '.  $master_colors['color11'].';
}

.comments-content-wrap span b {
  margin-right: 5px;
}

span.post-time {
  margin-right: 5px;
}

.comments-content-wrap p {
  color: '.  $master_colors['color23'].';
  line-height: 18px;
  margin-bottom: 5px;
  margin-top: 15px;
}

li.threaded-comments {
  margin-left: 50px;
}

.comment-respond {
  margin-top: 60px;
}

span.email-notes {
  color: '.  $master_colors['color7'].';
  display: block;
  font-size: 12px;
  margin-bottom: 10px;
}

.comment-respond p {
  color: '.  $master_colors['color3'].';
  margin-bottom: 5px;
}

.comment-respond input[type=text], .comment-respond input[type=email] {
  border: 1px solid '.  $master_colors['color8'].';
  border-radius: 0;
  height: 32px;
  margin-bottom: 15px;
  padding: 0 0 0 10px;
  width: 100%;
}

.comment-respond textarea#message-box {
  border: 1px solid '.  $master_colors['color8'].';
  border-radius: 0;
  max-width: 100%;
  padding: 10px;
  height: 130px;
  width: 100%;
}

.comment-respond input[type="submit"] {
  background: rgba(0, 0, 0, 0) none repeat scroll 0 0;
  border: 1px solid '.  $master_colors['color1'].';
  border-radius: 20px;
  box-shadow: none;
  color: '.  $master_colors['color3'].';
  display: inline-block;
  font-size: 12px;
  font-weight: 700;
  height: 40px;
  line-height: 14px;
  margin-top: 20px;
  padding: 10px 15px;
  text-shadow: none;
  text-transform: uppercase;
  transition: all 0.3s ease 0s;
  white-space: nowrap;
}

.comments-content-wrap span a {
  color: '.  $master_colors['color11'].';
}

.comments-content-wrap span a:hover {
  color: '.  $master_colors['color1'].';
}

.comment-respond input[type=submit]:hover {
  border: 1px solid '.  $master_colors['color1'].';
  color: '.  $master_colors['color2'].';
  background: '.  $master_colors['color1'].';
}

.single-blog .blog-pagination {
  border-top: 1px solid '.  $master_colors['color8'].';
  margin: 0;
  padding-top: 30px;
}

/*--------------------------------------------------------------
# Footer
--------------------------------------------------------------*/
.footer-area {
  padding: 40px 0;
  background: '.  $master_colors['color4'].';
}

.footer-head p {
  color: '.  $master_colors['color3'].';
}

.footer-head h4 {
  color: '.  $master_colors['color3'].';
  font-size: 16px;
  letter-spacing: 2px;
  padding-bottom: 10px;
  text-transform: uppercase;
}

.footer-logo {
  padding-bottom: 20px;
}

.footer-logo h2 {
  color: '.  $master_colors['color24'].';
  padding: 0;
  margin: 0;
  font-size: 36px;
  font-weight: bold;
  line-height: 1;
}

.footer-logo h2 span {
  color: '.  $master_colors['color1'].';
}

.footer-icons ul li {
  display: inline-block;
}

.footer-icons ul li a {
  border: 1px solid '.  $master_colors['color3'].';
  color: '.  $master_colors['color3'].';
  display: block;
  font-size: 16px;
  height: 40px;
  line-height: 38px;
  margin-right: 5px;
  text-align: center;
  width: 40px;
  border-radius: 50%;
}

.flicker-img > a {
  float: left;
  padding: 1px;
  width: 33.33%;
}

.footer-icons {
  margin-top: 30px;
}

.footer-contacts p span {
  color: '.  $master_colors['color1'].';
  font-weight: 700;
}

.popular-tag ul li {
  display: inline-block;
}

.footer-content {
  display: block;
  overflow: hidden;
}

.popular-tag ul li a:hover, .footer-icons ul li a:hover {
  background: '.  $master_colors['color1'].';
  border: 1px solid '.  $master_colors['color1'].';
  color: '.  $master_colors['color2'].';
}

.popular-tag ul li a {
  border: 1px solid '.  $master_colors['color3'].';
  border-radius: 30px;
  color: '.  $master_colors['color3'].';
  display: block;
  font-size: 13px;
  font-weight: 600;
  margin: 5px 3px;
  padding: 5px 10px;
  position: relative;
  text-decoration: none;
  text-transform: capitalize;
  transition: all 0.4s ease 0s;
  width: 70px;
  text-align: center;
}

.footer-area-bottom {
  background: '.  $master_colors['color25'].' none repeat scroll 0 0;
  padding: 15px 0;
}

.copyright-text a:hover {
  text-decoration: underline;
  color: '.  $master_colors['color1'].';
}

.copyright-text a {
  color: '.  $master_colors['color3'].';
}

.copyright > p {
  margin-bottom: 0;
  color: '.  $master_colors['color3'].';
}

.copyright a, .credits a {
  color: '.  $master_colors['color1'].';
}

.credits {
  padding-top: 5px;
  text-align: center;
}

/*--------------------------------------------------------------
# Responsive
--------------------------------------------------------------*/
@media (min-width: 1920px) {
  .work-right-text {
    padding: 150px 150px;
  }
}

/* Normal desktop :992px. */
@media (min-width: 992px) and (max-width: 1169px) {
  .slider-content {
    padding: 146px 0;
  }
  .work-right-text {
    padding: 40px 0;
  }
  .work-right-text h2 {
    font-size: 18px;
    line-height: 28px;
  }
}

/* Tablet desktop :768px. */
@media (min-width: 768px) and (max-width: 991px) {
  .layer-1-1 h2 {
    font-size: 24px;
  }
  .layer-1-2 h1 {
    font-size: 31px;
    line-height: 38px;
    padding: 0px 30px;
  }
  .tab-menu ul.nav li a {
    padding: 10px 16px;
  }
  .suscribe-input input {
    width: 60%;
  }
  .suscribe-input button {
    width: 40%;
  }
  .team-content.text-center > h4 {
    font-size: 20px;
  }
  .sus-btn {
    margin-left: 0;
  }
  .suscribe-text h3 {
    font-size: 16px;
    padding-right: 20px;
  }
  .work-right-text h5 {
    font-size: 14px;
    line-height: 22px;
  }
  .work-right-text {
    padding: 36px 0;
  }
  .work-right-text h2 {
    font-size: 14px;
    line-height: 22px;
  }
  .work-right-text .ready-btn {
    font-size: 13px;
    padding: 7px 20px;
    margin-top: 5px;
  }
  .single-awesome-portfolio {
    width: 33.33%;
  }
  .widget-product a img {
    display: block;
    float: none;
    width: 100%;
  }
  .widget-product .product-info {
    display: block;
    float: none;
    padding-left: 0;
    width: 100%;
    margin-top: 20px;
  }
  .map-column {
    margin-left: 0;
    padding-right: 40px;
  }
  .post-information .entry-meta {
    font-size: 13px;
    padding: 5px 0;
  }
  .post-information .entry-meta span a {
    padding: 4px 0;
  }
  .service-pic {
    margin-bottom: 30px;
    text-align: center;
  }
  .single-add-itms {
    width: 50%;
  }
  .left-sidebar-title > h4 {
    font-size: 18px;
  }
  .contact-form {
    margin-top: 0px;
  }
  .search-option input {
    width: 67%;
  }
}

/* small mobile :320px. */
@media (max-width: 767px) {
  .slider-area {
    margin-top: 60px;
  }
  .slider-content {
    padding: 80px 0;
  }
  .slider-content h2 {
    font-size: 18px !important;
    line-height: 24px !important;
  }
  .slider-content h1 {
    font-size: 20px !important;
    line-height: 26px !important;
  }
  .layer-1-3 a.ready-btn {
    padding: 8px 15px;
  }
  .section-headline h2 {
    font-size: 30px;
  }
  .well-middle .single-well {
    margin-top: 30px;
  }
  .single-skill {
    margin-bottom: 40px;
  }
  .tab-menu {
    margin-top: 30px;
  }
  .tab-menu ul.nav li a {
    padding: 8px 6px;
  }
  .wellcome-text {
    margin: 0px;
    padding: 70px 0px;
  }
  .subs-feilds {
    width: 100%;
  }
  .suscribe-input input {
    width: 60%;
  }
  .suscribe-input button {
    font-size: 15px;
    padding: 14px 10px;
    width: 40%;
  }
  .section-headline h3 {
    font-size: 25px;
  }
  .well-text > h2 {
    font-size: 18px;
  }
  .well-text p {
    display: none;
  }
  .single-team-member {
    margin-bottom: 30px;
  }
  .service-right {
    width: 100%;
  }
  .service-images:hover .overly-text {
    display: none;
  }
  .portfolio-area {
    padding-top: 0px;
  }
  .project-menu li a {
    padding: 8px 12px;
    margin: 10px 4px;
  }
  .pri_table_list {
    margin-bottom: 30px;
  }
  .single-awesome-project, .portfolio-2 .single-awesome-project {
    width: 100%;
    float: none;
  }
  .single-blog {
    margin-bottom: 30px;
  }
  .sus-btn {
    margin-left: 0;
    margin-top: 30px;
  }
  .contact-form {
    margin-top: 30px;
  }
  .head-team h5 {
    font-size: 22px;
  }
  .footer-content {
    margin-bottom: 30px;
  }
  .header-bottom h1 {
    font-size: 30px;
    margin-bottom: 0;
  }
  .page-area .slider-content {
    padding: 500px 0;
  }
  .search-option input {
    width: 74%;
  }
  .header-bottom h2 {
    font-size: 20px;
    margin-bottom: 0;
  }
  li.threaded-comments {
    margin-left: 0;
  }
}
/*--------------------------------------------------------------
# Frequently Asked Questions
--------------------------------------------------------------*/
.faq .faq-list {
  padding: 0;
  list-style: none;

}

.section-title1{
  text-align: center;
}

.faq .faq-list li {
  border-bottom: 1px solid '.  $master_colors['color18'].';
  margin-bottom: 20px;
  padding-bottom: 20px;
}

.faq .faq-list a {
  display: block;
  position: relative;
  font-family: '.  $master_colors['color1'].';
  font-size: 18px;
  line-height: 24px;
  font-weight: 400;
  padding-right: 25px;
}

.faq .faq-list i {
  font-size: 24px;
  position: absolute;
  right: 0;
  top: 0;
}

.faq .faq-list p {
  margin-bottom: 0;
  padding: 10px 0 0 0;
}

.faq .faq-list .icon-show {
  display: none;
}

.faq .faq-list a.collapsed {
  color: '.  $master_colors['color19'].';
}

.faq .faq-list a.collapsed:hover {
  color: '.  $master_colors['color1'].';
}

.faq .faq-list a.collapsed .icon-show {
  display: inline-block;
}

.faq .faq-list a.collapsed .icon-close {
  display: none;
}

/* Large Mobile :480px. */
@media only screen and (min-width: 480px) and (max-width: 767px) {
  .submitbtn {
    float: none;
    width: 99.8%;
  }
  .icons-bottom ul li a {
    height: 40px;
    line-height: 37px;
    width: 40px;
  }
  .blog-post-dlc ul li {
    padding-left: 20px;
    padding-right: 20px;
  }
  .awesome-portfolio-content .portfolio-2 {
    width: 50%;
  }
  .gallary-details .single-awesome-portfolio {
    width: 50%;
  }
  .tab-menu ul.nav li a {
    padding: 8px 20px;
  }
}

@media (max-width: 575px) {
  .slider-content {
    padding: 0;
  }
}

  .category{
      text-align: center; 
    }
div.b {
  white-space: nowrap; 
  width: 250px; 
  overflow: hidden;
  text-overflow: ellipsis; 

}
</style>
';

?>