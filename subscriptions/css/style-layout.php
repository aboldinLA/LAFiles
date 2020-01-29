<?

?>
/*------------------------------------------------------------------
Theme Name: Smile - Responsive Bootstrap Ecommerce Template
Version: 1.0
Author: JTHEMES
-------------------------------------------------------------------*/

/*------------------------------------------------------------------
[TABLE OF CONTENTS]

        1. GLOBAL STYLES
        2. HEADER
        3. BLOCK STYLES 
        4. PRODUCT STYLES 
        5. POLICY STYLES 
        6. PARALLAX STYLES 
        7. BLOG STYLES 
        8. EXTRAS 
        9. CAROUSEL STYLES 
        10. TESTIMONIAL STYLES 
        11. CLIENT STYLES 
        12. WIDGETS 
        13. FOOTER
        14. FOOTER / COPYRIGHT 
        15. CART STYLES 
        16. CHECKOUT STYLES 
        17. BLOG STYLES 
        18. NEWSLETTER 
        19. MY ACCOUNT
        20. CONTACT STYLES 
        21. RESPONSIVE STYLES 
        
-------------------------------------------------------------------*/

@import 'settings-panel.css';


/* 1. GLOBAL STYLES */

body {
    font-family: 'Nunito', sans-serif;
    font-size: 13px;
    color: #444;
    /background: #FFF;
}

h1,h2,h3,h4,h5,h6 {
    font-weight: 400;
	font-family: 'DM Serif Text', serif;
}

p {
    color: #666666;
    font-size: 12px;
    line-height: 22px;
	font-family: 'Nunito', sans-serif;
	font-style: normal;
    font-stretch: normal;
    line-height: normal;
    letter-spacing: normal;
}

a, a:hover, a:active, a:focus {
    outline: 0;
    text-decoration: none;
}

a, a:hover, button, button:hover {
    transition: .4s;
}

a {
    color: #1b8047;
    transition: .4s;
    text-decoration: none;
}
a:hover{
	color:#1b8047;
	text-decoration:underline;
}

ul, li {
    margin: 0;
    list-style: none;
    padding: 0;
}

a:hover {
    color: #444;
    transition: .4s;
    text-decoration: none;
}
a:focus{
    color: #444;
}
b, strong{
	font-weight:600;
}
.margin-less {
    margin-top: -120px;
}


/* 2. HEADER */

.top_bar {
    height: 153px;
    background: linear-gradient(rgba(55, 55, 55, 0.25), rgba(55, 55, 55, 0.25)), url('../images/top-bar.png'); 
	background-size:cover;
    border-top: 1px solid #2f2e2a;
    position: relative;
    z-index: 9999999;
}

.top_bar h1{
	color:white;
	padding-top: 1em;
	font-family: 'DM Serif Text', serif;
  	font-size: 24px;
	margin-bottom: 3px;
}
.top_bar p{
	font-family: 'Nunito', serif;
  	font-size: 14px;
	color:white;
	padding-top: 8px !important;
}

.home3 .top_bar {
    height: 44px;
    background: #fff;
    border-top: none;
    border-bottom: 1px solid #ededed;
    position: relative;
    z-index: 9999999;
    margin: 0 0 -20px;
}

header {
    height: 69px;
    background: #fff;
    padding: 15px 0;
    position: relative;
    z-index: 201;
    transition: .4s;
	box-shadow: 0 2px 30px 0 rgba(0, 0, 0, 0.28);
}

.is-sticky header {
    height: 69px;
    padding: 15px 0;
    transition: .4s;
    border-bottom: 1px solid #f5f5f5;
}

/*Smaller Header*/
#undefined-sticky-wrapper{
	max-height:69px;
}

#header2-sticky-wrapper.is-sticky header {
    height: 137px;
    padding: 45px 0px;
    transition: all 0.4s ease 0s;
    border-bottom: 1px solid #F5F5F5;
}

#header4 .is-sticky header {
    background: rgba(0,0,0,0.3);
    border-bottom: none;
}

.navbar-brand > img {
    display: block;
    /*height: 31px;*/
	width: 220px;
    transition: .4s;
	padding-top: 3px;
}

.navbar-brand {
    padding: 0;
}

.navbar > .container .navbar-brand {
    margin-left: 0px;
}

.navbar {
    border: medium none;
    background: transparent;
    border-radius: 0;
        font-family: 'Nunito', sans-serif;
    text-transform: uppercase;
    font-size: 14px;
}

.navbar-default .navbar-nav > li > a {
    color: #2e2e2e;
	font-size: 12px;
	  font-weight: 600;
	  font-style: normal;
	  font-stretch: normal;
	  line-height: normal;
	  letter-spacing: 1px;
	  font-family: 'Nunito', sans-serif;
}

.navbar-default .navbar-nav > li > a:hover{
	    border-bottom: 6px solid black;
}

.navbar-nav {
    /*margin: -15px 0px 0px;*/
	margin: -5px 0px 0px 0px;
}

.nav > li > a {
    padding: 18px 35px;
}

.nav li a:hover {
    color: #D6644A;
}

.header-xtra {
    position: relative;
    top: 10px;
    /*margin-left: 102px;*/
}

.header-xtra span {
    width: 32px;
    height: 32px;
    border-radius: 3px;
    background: #ededed;
    display: inline-block;
    line-height: 32px;
    text-align: center;
    margin-left: 3px;
    font-size: 13px;
    color: #444;
    cursor: pointer;
    transition: .4s;
    position: relative;
}

.header-xtra span:hover {
    background: #d6644a;
    color: #fff;
    transition: .4s;
}

.searchtop {
    opacity: 0;
    visibility: hidden;
    position: absolute;
    right: 0;
    margin-top: 30px;
    transition: .4s;
}
.mob-search{
	background:none;
	display:none;
	float: right;
    margin-right: 10px;
    margin-top: 0px;
	border:none;
}
.mob-search i{
	    font-size: 17px;
		-webkit-text-stroke: 0.8px white;
}
.sclose{
	display:none !important;

}
.sopen{
	display:block !important;

}
#prj-start{
	width:100%; height:150px; background: linear-gradient(rgba(55, 55, 55, 0.25), rgba(55, 55, 55, 0.25)), url('../images/start-project.png'); background-size:cover;
}

.topsearch:hover .searchtop {
    opacity: 1;
    visibility: visible;
    margin-top: 12px;
    transition: .4s;
}

.topsearch:hover span {
    background: #d6644a;
    color: #fff;
}
.slider-wrap {
	max-height: 390px;
    position: relative;
}

/* 3. BLOCK STYLES */

.block-main {
    padding: 30px 0 20px;
}

.block-content {
    display: block;
    width: 100%;
    position: relative;
    overflow: hidden;
    cursor: pointer;
}

.block-content.margin-less {
    margin: 0;
}

.no-margin {
    margin: 0px !important;
}

.block-content img {
    opacity: 1;
    transition: 0.3s;
}

.block-content:hover img {
    opacity: 0.8;
    transition: 1s;
}

.bs-text-down {
    background: rgba(255, 255, 255, 0.9);
    padding: 20px 15px;
    color: #333;
    font-family: Montserrat;
    font-size: 19px;
    font-weight: bold;
    text-transform: uppercase;
    line-height: 20px;
    position: absolute;
    bottom: 45px;
    width: auto;
    margin: 0px 45px;
    height: 80px;
    transform: translateZ(0px);
    box-shadow: 0px 0px 1px transparent;
    backface-visibility: hidden;
    width: 75%;
}

.bs-text-down:before {
    content: '';
    position: absolute;
    border: rgba(255,255,255,0.5) solid 3px;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    -webkit-transition-duration: 0.3s;
    transition-duration: 0.3s;
    -webkit-transition-property: top, right, bottom, left;
    transition-property: top, right, bottom, left;
}

.bs-text-down span {
    text-transform: none;
    font-family: Raleway;
    font-size: 16px;
    display: block;
    font-weight: 400;
}

.block-content:hover .bs-text-down:before {
    top: -7px;
    right: -7px;
    bottom: -7px;
    left: -7px;
}

.bs-text-center {
    background: #fff;
    background: rgba(255,255,255,0.9);
    padding: 20px 15px;
    color: #333;
    font-family: Montserrat;
    font-size: 19px;
    font-weight: bold;
    text-transform: uppercase;
    line-height: 20px;
    bottom: 110px;
    width: 100%;
    height: 80px;
    position: absolute;
    top: 50%;
    margin-top: -40px;
    -webkit-transform: translateZ(0);
    transform: translateZ(0);
    box-shadow: 0 0 1px rgba(0, 0, 0, 0);
    -webkit-backface-visibility: hidden;
    backface-visibility: hidden;
    -moz-osx-font-smoothing: grayscale;
}

.bs-text-center:before {
    content: '';
    position: absolute;
    border: rgba(255,255,255,0.5) solid 3px;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    -webkit-transition-duration: 0.3s;
    transition-duration: 0.3s;
    -webkit-transition-property: top, right, bottom, left;
    transition-property: top, right, bottom, left;
}

.block-content:hover .bs-text-center:before {
    top: -7px;
    right: -7px;
    bottom: -7px;
    left: -7px;
}

.bs-text-center span {
    text-transform: none;
    font-family: Raleway;
    font-size: 16px;
    display: block;
    font-weight: 400;
}

.featured-products {
}
.featured-products h4{
	font-size:20px;
	 color: #35393e;
}

.featured-products.sec .filter{
	border-bottom:1px solid #cccccc;
}
.featured-products.sec .filter li a{
	font-size:12px;
}

h5.heading {
    width: 100%;
    max-width: 100%;
    display: table;
    margin: 0px auto 10px;
    position: relative;
	color:#9d9d9d;
}

h5.heading:after {
    content: "";
    background: #cccccc;
    height: 1px;
    width: 100%;
    position: absolute;
    top: 10px;
    left: 0;
    right: 0;
}

h5.heading span {
  	font-family: 'Nunito', sans-serif;
    font-size: 18px;
    font-weight: 600;
    text-transform: uppercase;
    color: #333;
    background: #fff;
    position: relative;
    z-index: 99;
    padding: 0 15px;
    margin: 0 auto;
    display: table;
}

h5.heading2 {
    width: 100%;
    max-width: 370px;
    display: table;
    margin: 20px auto 30px;
    position: relative;
}

h5.heading2:after {
    content: "";
    background: #cccccc;
    height: 1px;
    width: 100%;
    position: absolute;
    top: 10px;
    left: 0;
    right: 0;
}

h5.heading2 span {
    font-family: Montserrat;
    font-size: 18px;
    font-weight: bold;
    text-transform: uppercase;
    color: #333;
    background: #fff;
    position: relative;
    z-index: 99;
    padding: 0 15px;
    margin: 0 auto;
    display: table;
}

/* 4. PRODUCT STYLES */
.isotope {
    margin-top: 5px;
}
.product-item {
    margin-bottom: 38px;
}

.product-info {
    text-align: center;
}

.product-title {
    font-size: 16px;
    color: #333;
    text-transform: capitalize;
    margin: 10px 0 6px;
}

.product-title a {
    color: #333;
}

.product-title a:hover {
    color: #D6644A;
}

.product-price {
    font-family: Montserrat;
    font-size: 16px;
    color: #333;
    margin: 0px 0px 10px;
    display: block;
}

.product-price em {
    font-family: Raleway;
    font-size: 13px;
    color: #666;
    font-weight: 400;
    font-size: 13px;
    font-style: normal;
}

.product-price .cutprice {
    font-size: 13px;
    color: #888888;
    text-decoration: line-through;
}

.item-colors a {
    display: inline-block;
    width: 21px;
    height: 21px;
    background: #000;
    margin: 0 1px;
}

.item-colors a.black {
    background: #000000;
}

.item-colors a.brown {
    background: #635c63;
}

.item-colors a.red {
    background: #a30014;
}

.item-colors a.darkgrey {
    background: #2f3c4d;
}

.item-colors a.litebrown {
    background: #c3c2c0;
}

.item-colors a.white {
    background: #f2f2f2;
}

.item-colors a.liteblue {
    background: #859cbc;
}

.item-colors a.cream {
    background: #f7d2c2;
}

.item-colors a.yellow {
    background: #c8c258;
}

.color-list a span {
    display: inline-block;
    width: 13px;
    height: 13px;
    background: #000;
    margin: 0;
    margin-right: 10px;
    position: relative;
    top: 2px;
}

.color-list a span.black {
    background: #000000;
}

.color-list a span.brown {
    background: #635c63;
}

.color-list a span.red {
    background: #a30014;
}

.color-list a span.darkgrey {
    background: #2f3c4d;
}

.color-list a span.litebrown {
    background: #c3c2c0;
}

.color-list a span.white {
    background: #f2f2f2;
}

.color-list a span.liteblue {
    background: #859cbc;
}

.color-list a span.cream {
    background: #f7d2c2;
}

.color-list a span.yellow {
    background: #c8c258;
}

.black {
    background: #000000;
}

.brown {
    background: #635c63;
}

.red {
    background: #a30014;
}

.darkgrey {
    background: #2f3c4d;
}

.litebrown {
    background: #c3c2c0;
}

.white {
    background: #f2f2f2;
}

.liteblue {
    background: #859cbc;
}

.cream {
    background: #f7d2c2;
}

.yellow {
    background: #c8c258;
}

.item-thumb {
    position: relative;
    overflow: hidden;
}

.product-overlay {
    position: absolute;
    bottom: 10px;
    right: -100px;
    transition: .4s;
}

.product-item:hover .product-overlay {
    right: 10px;
    transition: .4s;
}

.product-overlay a {
    width: 28px;
    height: 28px;
    background: #444444;
    font-size: 14px;
    border-radius: 3px;
    line-height: 28px;
    text-align: center;
    color: #fff;
    display: block;
    margin-top: 5px;
}

.product-overlay a:hover {
    background: #d6644a;
    color: #fff;
}

.filter {
    display: table;
    margin: 0 0 20px;
	width:100%;
	border-bottom: 1px solid black;
	
}

.filter li {
    float: left;
}

.filter li a {
    line-height: 20px;
    text-align: center;
	font-family: 'Nunito', sans-serif;
    display: table;
    padding: 10px 15px;
    font-size: 20px;
    color: rgba(0, 36, 15, 0.33);
    position: relative;
    font-weight: 600;
}

/*.filter li a:hover {
    background: #666;
    color: #fff;prj-start
}*/

.filter li a.selected {
	font-weight: 600;
	color:#00240f;
}

.filter li a.selected:after {
    content: '';
    position: absolute;
    border-style: solid;
    border-width: 0px 7px 7px;
    border-color: #444444 transparent;
    display: block;
    width: 0;
    z-index: 1;
    bottom: 0px;
    left: 0;
    right: 0;
    margin: 0 auto;
}

.featured-products #isotope {
    /*margin: 0 -15px;*/
}

.featured-products .isotope-item {
    width: 100%;
    padding: 0 15px;
}

.featured-products .isotope-item img {
    height: 115px;
	width:100%;
	margin:0 auto;
	object-fit: cover;
}

#sproducts .pc-wrap{
	margin-bottom:38px;
}

#sproducts.featured-products .pc-wrap[data-slick-index="0"]{
	padding-left:0px;
}
.featured-products.sec .slick-track{
	margin-left: -15px;
}
.featured-products.sec .pc-wrap[data-slick-index="0"]{
	padding-left:0px;margin-left: 15px;
}
.featured-products .isotope-item .elem {
	text-align:center;
	width: 100%;
	margin:0 auto;
	
}
.featured-products h6{
	 font-size: 14px;
	 color:#707070;
	 font-style: italic;
	     font-family: 'Nunito', sans-serif;
}

.morefromus h6{
	font-family: 'Nunito', sans-serif;
	font-weight:bold;
	font-size:12px;	
}

.isotope .isotope-item .elem a strong {
	color:#1b8047;
	font-size:12px;
}
.isotope .isotope-item .elem .prdi {
    width:auto ;
	height:35px;
	margin:0 auto;
	display:block;
}

.media-carousel .carousel-control.right 
{
    color: black;
    height: 20px;
    width: 20px;
    margin-top: 70px;
	right:-15px;
    font-size: 5em;    
	opacity: 1;
    text-shadow: none;
    background-image: none;
}

.media-carousel .carousel-control.right img
{
    width: 20px;
}
#ad1{
	width:100%; height:150px; background-image:url('../images/ad.JPG'); background-size:contain; background-repeat:no-repeat;
}

.isotop_sec .isotope-item div {
    width: 90px;
	text-align:center;
}
.isotop_sec .isotope-item img {
    width: 90px;
	text-align:center;
}

.isotope_sec .felem{
	float:left;  width:100% !important; min-width:170px; text-align:left !important;
}
.featured-products.sec .isotope-item{
	padding:0px;
}

#sbox{
	width:100%;  height:300px;
	background: linear-gradient(rgba(55, 5, 55, 0.25), rgba(55, 55, 55, 0.25)), url('../images/subs_bg.png');
	background-size: cover;
}
#sbox h5{
	    font-family: 'Nunito', sans-serif;
}

/* 5. POLICY STYLES */

.policy-item {
    margin: 20px 0 0;
    padding: 55px 0;
}

.pi-wrap i {
    width: 60px;
    height: 60px;
    border-radius: 50%;
    background-color: #EDEDED;
    transition: all 0.3s ease-out 0s;
    margin: auto;
    cursor: pointer;
    display: inline-block;
    text-align: center;
    font-size: 24px;
    line-height: 60px;
    color: #333333;
}

.pi-wrap:hover i {
    background-color: #000000;
    color: #fff;
}

.pi-wrap h4 {
    margin: 0px;
    padding: 23px 0px 0px;
    font-family: "Montserrat";
    text-transform: uppercase;
    font-weight: bold;
    color: #FFF;
    font-size: 14px;
    line-height: 20px;
    position: relative;
}

.pi-wrap h4 span {
    display: block;
    text-transform: none;
    font-weight: bold;
    position: relative;
    font-family: "Raleway",sans-serif;
    color: #CCC;
    font-size: 14px;
}

.pi-wrap h4:before {
    content: "";
    border-bottom: 1px solid #C9C9C9;
    bottom: -10px;
    height: 1px;
    left: 0px;
    margin: auto;
    position: absolute;
    right: 0px;
    text-align: center;
    width: 50%;
    opacity: 0.45;
}

.pi-wrap p {
    color: #CCC;
    font-size: 13px;
    padding: 20px 0 0;
    margin: 0;
}

/* 6. PARALLAX STYLES */

.parallax-bg1 {
    background: url(../images/bg/1.jpg) no-repeat top fixed;
    background-size: cover;
    position: relative;
}

.parallax-bg2 {
    background: url(../images/bg/2.jpg) no-repeat top fixed;
    background-size: cover;
    position: relative;
}

.parallax-bg3 {
    background: url(../images/bg/3.jpg) no-repeat top fixed;
    background-size: cover;
    position: relative;
}

/* 7. BLOG STYLES */

.home-blog {
    padding: 45px 0 30px;
}

.hp-meta {
    margin-bottom: 10px;
}

.hp-meta span {
    color: #888888;
    font-size: 13px;
    margin: 0 3px;
}

.hp-meta i {
    color: #666666;
}

.post-thumb {
    position: relative;
}

.post-excerpt h4 {
    font-family: "Montserrat";
    font-size: 14px;
    font-weight: 500;
    margin-bottom: 5px;
    margin-top: 13px;
}

.post-excerpt h4 a {
    color: #444;
}

.post-excerpt h4 a:hover {
    color: #D6644A;
}

.overlay-rmore {
    position: absolute;
    border-radius: 50%;
    height: 54px;
    width: 54px;
    line-height: 54px;
    left: 50%;
    top: 50%;
    margin: -27px 0 0 -27px;
    z-index: 5;
    text-align: center;
    color: #fff;
    font-size: 19px;
    font-weight: normal;
    background-color: #D6644A;
    color: #FFF;
    border-color: #D6644A;
    transition: .4s;
    opacity: 0;
    -webkit-transform: translateZ(0) rotate(-45deg);
    transform: translateZ(0) rotate(-45deg);
    box-shadow: 0 0 1px rgba(0, 0, 0, 0);
    -webkit-backface-visibility: hidden;
    backface-visibility: hidden;
    -moz-osx-font-smoothing: grayscale;
    -webkit-transition-duration: 0.5s;
    transition-duration: 0.5s;
    visibility: hidden;
    transition: .4s;
}

.product-item:hover .overlay-rmore,
.home-post:hover .overlay-rmore {
    opacity: 1;
    visibility: visible;
    -webkit-transform: scale(1.2) rotate(-0deg);
    transform: scale(1.2) rotate(-0deg);
    -webkit-transition-timing-function: cubic-bezier(0.47, 0.31, -0.36);
    transition-timing-function: cubic-bezier(0.47, 0.31, -0.36);
    transition: .4s;
}

.home-post:hover .post-thumb img {
    opacity: 0.7;
    transition: .4s;
}

/* 8. EXTRAS */

.space10 {
        height: 10px;
    	margin-top: 10px;
		background-color: #f4f4f4;
}

.space20 {
        height: 20px;
    	margin-top: 20px;
		background-color: #f4f4f4;
}

.space22 {
        height: 22px;
    	margin-top: 64px;
		background-color: #f4f4f4;
}

.space30 {
    
        height: 30px;
    	margin-top: 30px;
		background-color: #f4f4f4;
}

.space40 {
        height: 40px;
    	margin-top: 40px;
		background-color: #f4f4f4;
}

.space50 {
        height: 50px;
    	margin-top: 50px;
		background-color: #f4f4f4;
}

.space60 {
        height: 60px;
    	margin-top: 60px;
		background-color: #f4f4f4;
}

.space70 {
        height: 70px;
    	margin-top: 70px;
		background-color: #f4f4f4;
}

.space80 {
        height: 80px;
    	margin-top: 80px;
		background-color: #f4f4f4;
}

.space90 {
        height: 90px;
    	margin-top: 90px;
		background-color: #f4f4f4;
}

.space100 {
        height: 100px;
    	margin-top: 100px;
		background-color:#f4f4f4;
}

.padding10 {
    padding-top: 10px !important;
    padding-top: 10px !important;
}

.padding12 {
    padding-top: 12px !important;
    padding-top: 12px !important;
}

.padding20 {
    padding-top: 20px !important;
    padding-top: 20px !important;
}

.padding30 {
    padding-top: 30px !important;
    padding-top: 30px !important;
}

.padding40 {
    padding-top: 40px !important;
    padding-top: 40px !important;
}

.padding50 {
    padding-top: 50px !important;
    padding-top: 50px !important;
}

.padding60 {
    padding-top: 60px !important;
    padding-top: 60px !important;
}

.padding70 {
    padding-top: 70px !important;
    padding-top: 70px !important;
}

/* 9. CAROUSEL STYLES */

.product-carousel ,
.product-carousel2 ,
.product-carousel3 {
    margin: 0 -15px;
}

.pc-wrap {
    padding: 0 15px;
}

.slick-next {
    width: 20px;
    color: #fff;
	background:transparent;
	background-image:url('../images/arrow-right.png');
	background-repeat:no-repeat;
	background-size:cover;
    text-align: center;
    line-height: 35px;
    border: none;
    font-size: 0px;
    position: absolute;
    top: 50%;
    margin-top: -80px;
    right: -15px;
    opacity: 1;
    visibility: visible;
}

.slick-prev {
    width: 20px;
    color: #fff;
	background:transparent;
	background-image:url('../images/arrow-left.png');
	background-repeat:no-repeat;
	background-size:cover;
    text-align: center;
    line-height: 35px;
    border: none;
    font-size: 0px;
    position: absolute;
    top: 50%;
    margin-top: -80px;
    left: -15px;
    opacity: 1;
    visibility: hidden;
}

.featured-products.sec .slick-next{
	right:5px;
}

.featured-products.sec .slick-prev{
	left:-20px;
}

/* 10. TESTIMONIAL STYLES */

.testimonial {
    padding: 75px 0;
}

.quote-carousel img {
    border-radius: 50%;
    width: 115px;
    float: left;
}

.quote-info {
    margin-left: 130px;
}

.quote-info h4 {
    font-family: Montserrat;
    font-size: 16px;
    color: #eee;
    margin: 4px 0 1px;
}

.quote-info cite {
    font-size: 13px;
    color: #d6644a;
    font-style: normal;
}

.quote-info p {
    font-size: 16px;
    color: #ccc;
    margin: 15px 0 0;
}

.slick-dots {
    display: table;
    margin: 0 auto;
    position: relative;
    top: 40px;
}

.slick-dots li {
    margin: 0 5px;
    float: left;
}

.slick-dots li button {
    border: none;
    background: #eeeeee;
    width: 10px;
    height: 10px;
    font-size: 0px;
    opacity: 0.36;
    padding: 0px;
    transition: .4s;
}

.slick-dots li button:hover ,
.slick-dots li.slick-active button {
    background: #eeeeee;
    opacity: 1;
    transition: .4s;
}

/* 11. CLIENT STYLES */

.clients-carousel2 .slick-dots,
.home-carousel .slick-dots {
    top: 20px;
}

.clients-carousel2 .slick-dots li button ,
.home-carousel .slick-dots li button {
    background: #292929;
}

.clients-carousel2 .slick-dots li button:hover ,
.clients-carousel2 .slick-dots li.slick-active button ,
.home-carousel .slick-dots li button:hover ,
.home-carousel .slick-dots li.slick-active button {
    background: #292929;
}

.clients {
    padding: 21px 0px;  
	padding-bottom:30px;
	background-color: #f4f4f4;
}

.clients-carousel {
    margin: 0 -15px;
}

.clients-section h4, .featured-products.sec h4{
	font-size:20px;
	    font-family: 'Nunito', sans-serif;
		margin:0px;
}

.clients-section h6, .featured-products.sec h6{
	font-size: 14px;
  font-style: italic;
  color: #707070;
	     font-family: 'Nunito', sans-serif;
		 padding-top: 3px;
		 margin:0px;
}


.clients-carousel .slick-slide {
    margin: 0 15px;
    background: #fff;
}

.clients-carousel img {
    display: table;
    margin: 0 auto;
}

/* 12. WIDGETS */

.f-widgets {
    padding: 55px 0 35px;
}

.f-widgets h6 {
    font-family: Montserrat;
    font-size: 16px;
    font-weight: bold;
    text-transform: uppercase;
    color: #333;
    margin: 0 0 45px;
    position: relative;
}

.f-widgets h6:after {
    content: "";
    background: #CCC;
    width: 70px;
    height: 1px;
    position: absolute;
    bottom: -12px;
    left: 0;
}

.f-widget-content li {
    display: table;
    width: 100%;
    margin: 0 0 12px;
    padding-bottom: 12px;
}

.f-widget-content li:last-child {
    border-bottom: none;
}

.fw-thumb img {
    width: 85px;
    float: left;
}

.fw-info {
    margin-left: 100px;
}

.fw-info h4 {
    font-size: 16px;
    color: #333;
    margin: 0 0 2px;
}

.fw-info h4 a {
    color: #000000;
}

.fw-price {
    font-family: Montserrat;
    font-size: 16px;
    color: #333;
}

.ratings span {
    color: #ccc;
    margin: 0 -1px 3px;
}

.ratings span.act {
    color: #ffcc01;
}

/* 13. FOOTER */

footer {
    background: black;
    padding: 17px 0px;
}
footer a, footer p {
	color:white;
	 font-family: 'Nunito';
	 font-size:12px;  line-height: 1.33;
  letter-spacing: 1px;
}
footer a:hover{
	text-decoration:underline;
	color:white;
}
.widget-footer h5 {
    font-family: Montserrat;
    font-size: 14px;
    font-weight: bold;
    text-transform: uppercase;
    color: #eee;
    margin: 0 0 22px;
}

.tweets_txt,
.widget-footer p {
    font-size: 13px;
    color: #bbb;
}

.tweets_txt span {
    color: #888888;
    display: block;
}

.tweets_txt a:hover {
    color: #eee;
}

#twitterfeed li {
    margin-bottom: 25px;
    padding-bottom: 25px;
    border-bottom: 1px solid #2c2c2c;
    padding-left: 30px;
    position: relative;
}

#twitterfeed li:last-child {
    margin-bottom: 0px;
    padding-bottom: 0px;
    border-bottom: none;
}

#twitterfeed li:after {
    content: "\f099";
    font-family: 'FontAwesome';
    color: #eeeeee;
    font-size: 21px;
    position: absolute;
    top: -2px;
    left: 0px;
}

.f-social {
    border-top: 1px solid #2c2c2c;
    margin: 4px 0 0 0;
    padding-top: 17px;
}

.f-social li {
    float: left;
    margin-right: 15px;
    position: relative;
}

.f-social li a {
    font-size: 21px;
    color: #aaaaaa;
}

.f-social li a:hover {
    color: #eeeeee;
}

.widget-tags li {
    float: left;
    margin-right: 7px;
    margin-bottom: 9px;
}

.widget-tags li a {
    height: 30px;
    border: 1px solid #393939;
    font-size: 13px;
    color: #888;
    line-height: 28px;
    padding: 0 10px;
    display: table;
}

.widget-tags li a:hover {
    border-color: #979797;
    color: #bbbbbb;
}

.newsletter input {
    height: 36px;
    background: #343434;
    border: none;
    color: #ccc;
    padding: 0 20px;
    line-height: 38px;
    width: 100%;
    margin-bottom: 13px;
    outline: 0;
}

.newsletter button {
    border-radius: 3px;
	margin-left:5px;
    background: #d6644a;
    color: #fff;
    height: 36px;
    line-height: 36px;
    padding: 0 10px;
        font-family: 'Nunito', sans-serif;
    font-size: 12px;
    font-weight: bold;
    text-transform: uppercase;
    color: #fff;
    text-shadow: 1px 1px 2px rgba(0,0,0,.12);
    border: none;
}

.newsletter button:hover {
    background: #343434;
    color: #fff;
}

/* 14. FOOTER / COPYRIGHT */

.footer-bottom {
    background: #131313;
    padding: 25px 0;
}

.footer-bottom p {
    color: #bbb;
    margin: 0;
}

.flinks li {
    float: left;
    margin-right: 12px;
    position: relative;
}

.flinks li::after {
    content: "|";
    color: #555;
    position: relative;
    right: -6px;
}

.flinks li:last-child:after {
    display: none;
}

.flinks li a {
    color: #bbbbbb;
}

.payment {
    position: relative;
    top: 4px;
}

.tb_left {
    padding: 8px 0;
}

.tb_center {
    margin-left: 125px;
    padding: 10px 0;
}

.tb_center ul li {
    float: left;
    color: #D6644A;
    margin-right: 43px;
    position: relative;
}

.tb_center ul li::after {
    content: "|";
    color: #555;
    position: absolute;
    right: -22px;
}

.tb_center ul li:last-child:after {
    display: none;
}

.tb_center ul li i {
    color: #eeeeee;
    margin-right: 4px;
}

.tb_center ul li a {
    color: #cccccc;
}

.tbr-inner {
    display: none;
}

.tbr-inner img {
    margin-right: 3px;
    position: relative;
    top: -1px;
}

.tb_right li {
    color: #cccccc;
    float: left;
    position: relative;
    padding: 11px 0;
    cursor: pointer;
}

.tb_right li:nth-child(2) span img {
    position: relative;
    top: -1px;
    margin-right: 3px;
}

.tb_right li .tbr-info span {
    color: #cccccc;
    padding: 0px 15px;
    display: table;
    border-right: 1px solid #3a3a3a;
    line-height: 17px;
}

.tb_right li:first-child .tbr-info span {
    border-left: 1px solid #3a3a3a;
}

.tb_right li i {
    color: #767676;
    font-size: 10px;
    margin-left: 3px;
    cursor: pointer;
}

.tbr-inner {
    display: block;
    position: absolute;
    background: #2F2E2A;
    color: #fff;
    padding: 0;
    width: 130px;
    top: 48px;
    right: 0;
    border-radius: 5px;
    opacity: 0;
    visibility: hidden;
    transition: .4s;
}

.tbr-inner:after {
    content: '';
    position: absolute;
    border-style: solid;
    border-width: 0 5px 4px;
    border-color: #2F2E2A transparent;
    display: block;
    width: 0;
    z-index: 1;
    top: -4px;
    right: 30px;
}

.tb_right li:hover .tbr-inner {
    opacity: 1;
    visibility: visible;
    transition: .4s;
}

.tbr-inner a {
    color: #fff;
    font-size: 11px;
    display: table;
    width: 100%;
    padding: 8px 10px;
    border-bottom: 1px solid #444;
}

.tbr-inner a:first-child {
    border-radius: 5px 5px 0 0;
}

.tbr-inner a:last-child {
    border-bottom: none;
    border-radius: 0 0 5px 5px;
}

.tbr-inner a:hover {
    background: #d6644a;
    border-bottom: 1px solid #d6644a;
}

.topsearch form input {
    border: 1px solid #666;
    width: 331px;
    height: 50px;
    font-family: Raleway;
    font-size: 13px;
    padding: 0 20px;
    line-height: 48px;
}

.topcart {
    display: inline-block;
}

.topsearch {
    display: inline-block;
}

.cart-info {
    border: solid 1px #666;
    width: 330px;
    background: #fff;
    padding: 25px 25px 35px;
    position: absolute;
    right: 0;
    margin-top: 30px;
    opacity: 0;
    visibility: hidden;
    transition: .4s;
    z-index: 99999;
    height: 465px;
    overflow: auto;
    overflow-x: hidden !important;
}

.cart-info:after {
    content: "";
    height: 12px;
    background: #fff;
    width: 100%;
    position: absolute;
    top: -12px;
    left: 0;
    right: 0;
    opacity: 0;
}

.topcart:hover .cart-info {
    opacity: 1;
    visibility: visible;
    margin-top: 12px;
    transition: .4s;
}

.topcart:hover span {
    background: #d6644a;
    color: #fff;
}

.cart-info small {
    color: #444;
    font-size: 13px;
    text-transform: none;
    border-bottom: 1px solid #e8e8e8;
    padding-bottom: 12px;
    margin-bottom: 17px;
    display: table;
}

.cart-info small em {
    font-style: normal;
    color: #D6644A;
}

.ci-item {
    display: table;
    width: 100%;
    border-bottom: 1px solid #e8e8e8;
    padding-bottom: 20px;
    margin-bottom: 20px;
}

.ci-item img {
    float: left;
}

.ci-item-info {
    margin-left: 92px;
}

.ci-item-info h5 {
    font-family: Raleway !important;
    font-size: 14px;
    color: #333333;
    text-transform: none;
    margin: 0 0 5px;
    color: #333333;
}

.ci-item-info h5 a {
    color: #333333;
}

.ci-item-info h5 a:hover {
    color: #D6644A;
}

.ci-item-info p {
    color: #333333;
}

.ci-edit a {
    background: #aaaaaa;
    width: 25px;
    height: 25px;
    line-height: 25px;
    text-align: center;
    color: #fff;
}

.ci-edit a:hover {
    background: #444444;
    color: #fff;
}

.ci-total {
    font-size: 15px;
    text-transform: none;
    margin: -10px 0 15px;
}

.cart-btn a {
    background: #d6644a;
    font-size: 11px;
    color: #fff;
    text-transform: none;
    height: 33px;
    padding: 0 17px;
    line-height: 33px;
    display: inline-block;
    border-radius: 2px;
    font-weight: 700;
}

.cart-btn a:first-child {
    background: #333333;
}

.cart-btn a:hover {
    background: #333333;
    color: #fff;
}

.cart-btn a:first-child:hover {
    background: #d6644a;
    color: #fff;
}

.text-style1 {
    position: absolute;
    bottom: 30px;
    left: 25px;
    width: 100%;
}

.text-style1 h6 {
    font-size: 26px;
    font-weight: bold;
    text-transform: uppercase;
    color: #fff;
    margin: 0 0 15px;
    position: relative;
}

.text-style1 h6:after {
    content: "";
    width: 80px;
    height: 2px;
    background: #FFF;
    position: absolute;
    bottom: -7px;
    left: 0;
}

.text-style1 p {
    font-size: 13px;
    font-weight: bold;
    color: #fff;
    text-transform: uppercase;
    margin: 0;
    line-height: 16px;
}

.text-style2 h6 {
    font-size: 26px;
    font-weight: bold;
    text-transform: uppercase;
    color: #fff;
    margin: 0;
    position: relative;
}

.text-style2 {
    position: absolute;
    bottom: 37px;
    left: 25px;
    width: 100%;
}

.text-style2 p {
    font-size: 13px;
    font-weight: bold;
    color: #fff;
    text-transform: uppercase;
    margin: 0 0 8px;
    line-height: 16px;
}

.text-style2 a {
    background: #000000;
    font-size: 11px;
    font-weight: bold;
    color: #fff;
    line-height: 28px;
    padding: 0 15px;
    text-transform: uppercase;
    display: table;
}

.text-style3 {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    right: 0;
}

.text-style3 h6 {
    height: 30px;
    text-align: center;
    vertical-align: middle;
    font-size: 26px;
    font-weight: bold;
    text-transform: uppercase;
    color: #FFF;
    margin-top: -15px;
    position: relative;
    top: 50%;
}

.heading-sub {
    margin-bottom: 50px;
    position: relative;
}

.heading-sub:after ,
.heading-sub2 h5:after {
    content: "";
    width: 230px;
    height: 1px;
    background: #CCC;
    position: absolute;
    bottom: -20px;
    left: 0;
    right: 0;
    margin: 0 auto;
}

.heading-sub2 h5:after {
    content: "";
    width: 170px;
    bottom: -18px;
}

.heading-sub2 h5:before {
    content: "\f097";
    font-family: "FontAwesome";
    width: 40px;
    height: 30px;
    background: #FFF none repeat scroll 0% 0%;
    position: absolute;
    bottom: -37px;
    color: #333;
    left: 0px;
    right: 0px;
    margin: 0px auto;
    font-weight: 400;
    z-index: 999;
}

.heading-sub2:after {
    display: none;
}

.heading-sub h5 {
    font-family: Montserrat;
    font-size: 23px;
    font-weight: bold;
    text-transform: uppercase;
    color: #333;
    position: relative;
}

.heading-sub2 h5 {
    margin-bottom: 40px;
}

.heading-sub p {
    font-size: 16px;
    color: #666;
}

#home4 .product-carousel3 .slick-next ,
#home2 .product-carousel3 .slick-next {
    width: 28px;
    height: 28px;
    border-radius: 3px;
    background: transparent;
    color: #333333;
    text-align: center;
    line-height: 30px;
    border: none;
    font-size: 0px;
    position: absolute;
    top: 50%;
    margin-top: -80px;
    right: -17px;
    transition: .4s;
    opacity: 1;
    visibility: visible;
}

#home4 .product-carousel3 .slick-next:after ,
#home2 .product-carousel3 .slick-next:after {
    content: "\f054";
    font-family: 'FontAwesome';
    font-size: 16px;
}

#home4 .product-carousel3 .slick-prev ,
#home2 .product-carousel3 .slick-prev {
    width: 28px;
    height: 28px;
    border-radius: 3px;
    background: transparent;
    color: #333333;
    text-align: center;
    line-height: 30px;
    border: none;
    font-size: 0px;
    position: absolute;
    top: 50%;
    margin-top: -80px;
    left: -15px;
    transition: .4s;
    opacity: 1;
    visibility: visible;
}

#home2 .product-carousel3 .slick-prev:after {
    content: "\f053";
    font-family: 'FontAwesome';
    font-size: 16px;
}

#home2 .product-carousel3 .slick-next:hover ,
#home2 .product-carousel3 .slick-prev:hover {
    background: #333333;
    transition: .4s;
    visibility: visible;
    color: #fff;
}

#policy2 {
    background: #fafafa;
    border-top: 1px solid #dedede;
}

#policy2 .pi-wrap {
    margin: 0 -5px;
}

#policy2 .pi-wrap i {
    width: 60px;
    height: 60px;
    border-radius: 50%;
    background-color: transparent;
    transition: all 0.3s ease-out 0s;
    margin: 0;
    float: left;
    cursor: pointer;
    display: inline-block;
    font-size: 38px;
    line-height: 38px;
    color: #cccccc;
}

#policy2 .pi-wrap:hover i {
    background-color: transparent;
    color: #666666;
}

#policy2 .pi-wrap h4 {
    margin: 0 0 0 65px;
    padding: 0px;
    font-family: "Montserrat";
    text-transform: uppercase;
    font-weight: bold;
    color: #333333;
    font-size: 14px;
    line-height: 20px;
    position: relative;
}

#policy2 .pi-wrap h4 span {
    display: block;
    text-transform: none;
    font-weight: 400;
    position: relative;
    font-family: "Raleway",sans-serif;
    color: #666666;
    font-size: 14px;
}

#policy2 .pi-wrap h4:before {
    content: "";
    border-bottom: 1px solid #dedede;
    bottom: -10px;
    height: 1px;
    left: 0px;
    margin: 0;
    position: absolute;
    right: 0px;
    text-align: center;
    width: 50%;
    opacity: 1;
}

#policy2 .pi-wrap p {
    margin: 0 0 0 65px;
    color: #666666;
    font-size: 13px;
    padding: 20px 0 0;
    line-height: 18px;
}

.home2-widget {
    border-top: 1px solid #eaeaea;
    border-bottom: 1px solid #eaeaea;
    background: #fafafa;
    padding: 55px 0;
}

.home2-widget h3 {
    font-family: Montserrat;
    font-size: 18px;
    font-weight: bold;
    text-transform: uppercase;
    color: #333;
    text-align: center;
    margin: 0 0 40px;
    position: relative;
}

.home2-widget h3:after {
    content: "";
    width: 70px;
    height: 1px;
    background: #CCC;
    position: absolute;
    bottom: -15px;
    left: 0;
    right: 0;
    margin: 0 auto;
}

.home2-widget .hp-meta span {
    margin: 0px 2px;
}

.clients-carousel2 .uc2 {
    margin: 0px -15px -25px;
    display: table;
}

.clients-carousel2 .uc2 li {
    width: 33.3333%;
    float: left;
    padding: 0 15px 30px;
}

.clients-carousel2 .uc2 li a {
    background: #fff;
    display: table;
    width: 100%;
}

.clients-carousel2 .uc2 li a img {
    display: table;
    margin: 0 auto;
}

.quote-simple {
    margin-bottom: 30px;
}

.quote-simple img {
    width: 99px;
    float: none;
    margin: 0 auto;
}

.quote-simple .quote-info {
    margin: 0;
    text-align: center;
}

.quote-simple .quote-info h4 {
    color: #333333;
    margin: 10px 0 0;
}

.quote-simple .quote-info cite {
    color: #aaaaaa;
}

.quote-simple .quote-info p {
    color: #666666;
    font-size: 13px;
}

.f-categories {
    padding: 40px 0 0;
}

.text-style4 {
    position: absolute;
    width: 100%;
    padding: 0 20px;
    bottom: 55px;
    left: 0;
    right: 0;
}

.text-style4 h4 {
    font-size: 19px;
    font-weight: bold;
    text-transform: uppercase;
    color: #fff;
    margin: 0 0 1px;
    text-align: center;
    position: relative;
}

.text-style4 p {
    font-size: 13px;
    font-weight: bold;
    color: #fff;
    text-transform: uppercase;
    margin: 0;
    line-height: 16px;
    text-align: center;
}

.top-product-carousel {
    background: #000;
}

.tpc-content {
    position: relative;
}

.tpc-overlay {
    position: absolute;
    height: 100%;
    width: 100%;
    background: rgba(0,0,0,0.69);
    top: 0;
    left: 0;
    right: 0;
    text-align: center;
    opacity: 0;
    visibility: hidden;
    transition: .4s;
}

.tpc-content:hover .tpc-overlay {
    opacity: 1;
    visibility: visible;
    transition: .4s;
}

.tpc-overlay-inner {
    display: table;
    height: 100%;
    margin: 0 auto;
}

.tpc-info h4 {
    margin: 0 0 5px;
}

.tpc-info h4 a {
    color: #fff;
    font-size: 23px;
}

.tpc-info h4 a:hover {
    color: #D6644A;
}

.tpc-info p {
    font-family: Montserrat;
    font-size: 23px;
    color: #eee;
}

.tpc-info a.cart-btn {
    height: 50px;
    border: 1px solid #fff;
    line-height: 48px;
    text-align: center;
    padding: 0 29px;
    display: table;
    margin: 25px auto 0;
    font-family: Montserrat;
    font-size: 15px;
    color: #eee;
    text-transform: uppercase;
}

.tpc-info a.cart-btn:hover {
    background: #fff;
    color: #000;
}
#fproducts .img-cover{
	height: 115px;overflow: hidden;text-align:center;
}
.tpc-info {
    display: table-cell;
    vertical-align: middle;
}

.testimonial2 {
    padding: 30px 0px 75px;
}

.testimonial2 .quote-info {
    margin: 0;
    text-align: center;
}

.testimonial2 .quote-info p {
    margin: 15px 6% 25px;
}

.testimonial2 img {
    margin: 0 auto;
    float: none;
}

#policy3 {
    background: #fafafa;
    margin:0px;
}

#policy3 .pi-wrap i {
    width: 40px;
    height: 40px;
    border-radius: 50%;
    background-color: transparent;
    transition: all 0.3s ease-out 0s;
    margin: auto;
    cursor: pointer;
    display: inline-block;
    text-align: center;
    font-size: 38px;
    line-height: 40px;
    color: #d6644a;
}

#policy3 .pi-wrap:hover i {
    background-color: transparent;
    color: #333;
}

#policy3 .pi-wrap h4 {
    color: #333;
    padding: 15px 0 0;
}

#policy3 .pi-wrap h4 span {
    color: #666666;
    font-weight: 400;
}

#policy3 .pi-wrap h4::before {
    display: none;
}

.home-blog2 {
    border-top: 1px solid #e5e5e5;
    border-bottom: 1px solid #e5e5e5;
    padding: 45px 0px 40px;
}

.featured-products2 {
    margin: 20px 0 0;
    padding: 50px 0 25px;
    border-top: 1px solid #e5e5e5;
    border-bottom: 1px solid #e5e5e5;
}

.mega-menu {
    border: none;
    position: absolute;
    left: 0px !important;
    width: 100%;
    
    top: 45px;
    max-width: 1170px;
    right: 0px !important;
    margin: 8px auto;
	margin-top: 8px !important;
    border-radius: 0px;
    padding: 30px 35px 80px;
    padding-right: 15px;
    -webkit-box-shadow: rgba(0, 0, 0, 0.22) 0px 25px 30px 0px;
    -moz-box-shadow: rgba(0, 0, 0, 0.22) 0px 25px 30px 0px;
        box-shadow: rgba(0, 0, 0, 0.22) 0px 25px 30px 0px;
}


.navbar-right .submenu {
    left: 0px;
    right: auto !important;
}

.submenu {
    border: none;
    -webkit-box-shadow: 0 -1px 2px rgba(0,0,0,.06);
    -moz-box-shadow: 0 -1px 2px rgba(0,0,0,.06);
    box-shadow: 0 -1px 2px rgba(0,0,0,.06);
    padding: 0;
    border-radius: 0px;
}

.submenu a {
    border-bottom: 1px solid #ededed;
    padding: 10px 40px 10px 20px !important;
    font-family: Raleway;
    font-size: 13px;
    color: #666;
    display: table;
    width: 100%;
    text-transform: none;
    position: relative !important;
}

.mega-menu li {
    padding: 10px;
	
    width: 25%;
    float: left;
}

.navbar a.selected{
	border-bottom:4px solid black;
}

.mega-menu li div {
    padding-right: 40px;
}

.mega-menu li div a {
    width: 100%;
    display: table;
    /*border-bottom: 1px solid #ededed;*/
    padding: 3px;
    font-family: 'Nunito', sans-serif;
    font-size: 12px;
    color: #1b8047;
    text-transform: none;
	font-weight:normal;
	    padding-left: 15px;
    position: relative !important;
}
.mega-menu li div a:hover {
    text-decoration:underline;
    color: #1b8047;
}

/*.mega-menu li div a:after {
    content: "";
    background: #aaaaaa;
    width: 4px;
    height: 4px;
    border-radius: 50%;
    position: absolute;
    left: 0;
    top: 18px;
}*/

.mega-menu li div h5 {
    font-family: Montserrat;
    font-size: 14px;
    text-transform: uppercase;
    color: #333;
    margin: 0 0 5px;
}

.nav > li.mmenu ,
.nav > li.mmenu a {
    position: static;
}

#header2 .navbar {
    margin-left: -30px;
}

#header2 .navbar-brand {
    padding: 0px;
    margin-top: -22px;
    margin-bottom: 20px;
    text-align: center;
    display: table;
    margin-left: auto;
    float: none;
    margin-right: auto;
}

#header2 .nav > li > a {
    padding: 20px 0;
}

#header2 .navbar-nav > li {
    float: left;
    margin-right: 50px;
}

#home2 .tb_center {
    margin-left: 0px !important;
}

#home2 .tb_center ul li {
    color: #CCC;
}

#home2 .home-carousel .slick-next {
    width: 40px;
    height: 28px;
    border-radius: 0px;
    background: #292929;
    color: #fff;
    text-align: center;
    line-height: 30px;
    border: none;
    font-size: 0px;
    position: absolute;
    top: 50%;
    margin-top: -20px;
    right: -20px;
    transition: .4s;
    opacity: 1;
    visibility: visible;
}

#home2 .home-carousel .slick-next:after {
    content: "\f054";
    font-family: 'FontAwesome';
    font-size: 13px;
}

#home2 .home-carousel .slick-prev {
    width: 40px;
    height: 28px;
    border-radius: 0px;
    background: #292929;
    color: #fff;
    text-align: center;
    line-height: 30px;
    border: none;
    font-size: 0px;
    position: absolute;
    top: 50%;
    margin-top: -20px;
    left: -20px;
    transition: .4s;
    opacity: 1;
    visibility: visible;
}

#home2 .home-carousel .slick-prev:after {
    content: "\f053";
    font-family: 'FontAwesome';
    font-size: 13px;
}

#home2 .home-carousel .slick-next:hover ,
#home2 .home-carousel .slick-prev:hover {
    background: #d6644a;
    transition: .4s;
    visibility: visible;
    color: #fff;
}

.top-welcome {
    margin-left: -15px !important;
    position: relative;
    top: -20px;
}

#home2 .topcart {
    margin-right: -15px !important;
    position: relative;
    top: -20px;
    background: transparent !important;
}

#home2 .topcart:hover span,
#home2 .topcart span:hover {
    background: transparent;
    color: #D6644A;
    cursor: pointer;
}

.top-search2 {
    margin-right: -15px;
    width: 300px;
    position: relative;
    z-index: 9999;
}

.top-search2 input {
    border: none;
    border-bottom: 1px solid #c9c9c9;
    width: 100%;
    height: 35px;
}

.top-search2 button {
    border: none;
    background: transparent;
    color: #444;
    font-size: 15px;
    height: 35px;
    line-height: 35px;
    position: absolute;
    right: -4px;
    top: 0px;
}

.no-padding-top {
    padding-top: 0px !important;
}

.home3 .tb_center ul li i {
    color: #666666;
}

.home3 .tb_center ul li a {
    color: #666666;
}

.home3 .tb_center ul li {
    color: #666666;
}

.home3 .tb_center ul li::after {
    content: "|";
    color: #e5e5e5;
}

.home3 .tb_right li:first-child .tbr-info span {
    border-left: 1px solid #e5e5e5;
}

.home3 .tb_right li .tbr-info span {
    border-right: 1px solid #e5e5e5;
}

.home3 .tb_right li .tbr-info span {
    color: #666666;
}

.top-search3 {
    margin-right: -15px;
    width: 100%;
    position: relative;
    max-width: 525px;
}

.top-search3 input {
    border: 1px solid #c9c9c9;
    width: 100%;
    height: 35px;
    padding: 0 20px;
}

.top-search3 button {
    border: medium none;
    background: transparent;
    color: #888;
    font-size: 13px;
    height: 35px;
    line-height: 33px;
    position: absolute;
    right: -4px;
    top: 0px;
    width: 50px;
}

.dark-nav {
    display: table;
    background: #1E1E1E;
    width: 100%;
    margin-top: 20px;
    margin-bottom: -56px;
}

.home3 header {
    height: auto;
}

.home3 .navbar {
    margin-left: -15px;
}

.home3 .nav > li > a {
    padding: 20px 0;
}

.home3 .navbar-nav > li {
    float: left;
    margin-right: 0px;
}

.home3 .navbar-nav {
    margin: 0;
}

.home3 .navbar {
    margin-bottom: 0;
}

.home3 .navbar-default .navbar-nav > li > a {
    color: #eee;
    padding: 20px 25px;
}

.home3 .navbar-default .navbar-nav > li > a:hover,
.home3 .navbar-default .navbar-nav > li > a.active {
    background: #333333;
}

.home3 .navbar-brand {
    padding: 0px;
    margin-left: -15px;
}

#header4 .header-xtra {
    margin-left: 0 !important;
}

#header4 .top_bar {
    border-top: none;
    background: rgba(255,255,255,0.1);
    margin-bottom: -10px;
}

#header4 {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
}

#header4 header {
    background: transparent;    
}

.side-menu {
    position: fixed;
    height: 100vh;
    width: 350px;
    background: #272727;
    top: 0;
    left: -350px;
    padding: 30px 40px 100px;
    transition: .4s;
    overflow:auto;
    overflow-x:hidden;
}

.sm-hide-body {
    padding-left: 350px !important;
    transition: .4s;
}

.side-menu p {
    color: #cccccc;
    margin: 0 0 100px;
}

#home5 {
    padding-left: 0px;
    transition: .4s;
}

.side-widget h3 {
    font-family: Montserrat;
    font-size: 16px;
    font-weight: bold;
    color: #333;
    text-transform: uppercase;
    position: relative;
    overflow: hidden;
    margin: 0 0 22px;
}

.side-widget h3:after {
    content: "";
    background: #cccccc;
    height: 1px;
    position: absolute;
    top: 9px;
    left: 0;
    width: 100%;
}

.side-widget h3 span {
    background: #fff;
    padding-right: 15px;
    position: relative;
    z-index: 88;
    margin: 0 0 20px;
}

.side-widget h5 {
    font-size: 14px;
    font-weight: bold;
    color: #333;
    margin: 0 0 20px;
}

.side-menu .tb_right li {
    font-size: 12px !important;
}

.side-menu .tb_right li .tbr-info span {
    padding: 0px 11px !important;
}

#home5 .side-menu .tb_right li .tbr-info span {
    padding: 0px 8px !important;
}

.brand-list li,
.color-list li,
.size-list li,
.cat-list 	li {
    margin-bottom: 10px;
}

.brand-list li a ,
.color-list li a ,
.size-list li a ,
.cat-list 	li a {
    font-size: 13px;
    color: #666666;
}

.poll span {
    display: table;
}

.poll span em {
    font-style: normal;
    margin-left: 8px;
    position: relative;
    top: -2px;
}

.poll button {
    background: #333333;
    border-radius: 3px;
    border: none;
    line-height: 30px;
    display: table;
    padding: 0 22px;
    font-family: Montserrat;
    font-size: 10px;
    font-weight: bold;
    text-transform: uppercase;
    color: #fff;
    text-shadow: 1px 1px 2px rgba(0,0,0,.12);
}

.compare-wrap {
    background: #f6f6f6;
    display: table;
    height: 118px;
    width: 100%;
    padding: 30px;
}

.compare-wrap p {
    display: table-cell;
    margin: 0px;
    vertical-align: middle;
    text-align: center;
    color: #333333;
}

.filter-wrap select {
    height: 30px;
    border: 1px solid #fff;
    padding: 0 10px;
    width: 110px;
}

/*.filter-wrap .col-md-3 {
    padding-top: 9px;
}*/

.filter-wrap .col-md-3 a {
    color: #666666;
    cursor: pointer;
}

.filter-wrap .col-md-3 a.active {
    color: #D6644A;
}

.pagenav-wrap {
    border-top: 1px solid #ececec;
    margin-top: 17px;
    padding-top: 20px;
}

.page_nav {
    display: inline-block;
}

.page_nav li {
    float: left;
    padding: 0 8px;
    position: relative;
}

.page_nav li::after {
    content: "";
    height: 17px;
    width: 1px;
    background: #E4E4E4;
    position: absolute;
    right: 0px;
}

.page_nav li:last-child {
    padding: 0 0 0 8px;
}

.page_nav li:last-child:after {
    display: none;
}

.page_nav li a {
    color: #666666;
}

.page_nav li a:hover {
    border-bottom: 1px solid #666;
}

.pagenav-wrap em {
    position: relative;
    top: -5px;
    font-style: normal;
    margin-right: 8px;
}

.related-posts {
    border-top: 1px solid #CCC;
    padding-top: 17px;
    padding-bottom: 22px;
    display: table;
    width: 100%;
}

.related-posts h5 {
    font-family: Montserrat;
    font-size: 14px;
    font-weight: bold;
    text-transform: uppercase;
    color: #333;
    margin: 0 0 30px;
}

.related-posts ul li {
    float: left;
    margin-right: 35px;
    width: 125px;
    margin-bottom: 20px;
}

.bcrumbs {
    background: #f8f8f8;
    padding: 17px 0;
    margin-bottom: 45px;
}

.page_header {
    background: url(../images/bg/header_bg.jpg) no-repeat right;
    background-size: cover;
    height: 447px;
}

.bcrumbs ul li {
    float: left;
    margin-right: 24px;
    position: relative;
}

.bcrumbs ul li:after {
    content: "/";
    color: #333;
    position: absolute;
    right: -15px;
}

.bcrumbs ul li:last-child:after {
    display: none;
}

.bcrumbs ul li a {
    color: #333333;
}

.page_header_info {
    height: 360px;
    width: 470px;
    border: 4px solid #fff;
    margin-top: 45px;
    float: right;
    padding: 0 50px;
    display: table;
}

.page_header_info h2 {
    text-transform: uppercase;
    font-family: Montserrat;
    font-size: 36px;
    font-weight: bold;
    color: #fff;
    margin: 0 0 30px;
    position: relative;
}

.page_header_info h2:after {
    content: "";
    width: 230px;
    height: 2px;
    background: #FFF;
    position: absolute;
    bottom: -11px;
    left: 0;
    right: 0;
    margin: 0 auto;
}

.page_header_info p {
    font-size: 14px;
    color: #fff;
    margin: 0 0 30px;
}

.ph_btn a {
    height: 31px;
    line-height: 31px;
    background: #40434b;
    padding: 0 20px;
    display: inline-block;
    font-family: Montserrat;
    font-size: 12px;
    color: #fff;
    text-transform: uppercase;
    margin: 0 9px;
}

.page_header_info_inner {
    display: table-cell;
    vertical-align: middle;
    top: -4px;
    position: relative;
}

.products-list .product-info {
    text-align: left;
}

.products-list .item-thumb {
    padding: 0;
}

.products-list .product-info {
    padding-left: 30px;
    padding-right: 0;
}

.products-list .product-title {
    margin: 0px 0px 6px;
}

.products-list .product-item {
    display: inline-block;
    width: 100%;
    padding-bottom: 35px;
    margin-bottom: 35px;
    border-bottom: 1px solid #ececec;
}

.products-list .col-md-12:last-child .product-item {
    padding-bottom: 0px;
    margin-bottom: none;
    border-bottom: none;
}

.products-list .product-info p {
    margin-top: 8px;
}

/*.ps-slider {
    width: 79.25%;
    float: left;
    position: relative;
}

.ps-slider img {
    width: 100%;
    transition: .4s;
}

.ps-slider-nav {
    width: 20.75%;
    float: right;
    position: relative;
    z-index: 999;
}

.ps-slider-nav ul {
    padding-left: 10px;
}

.ps-slider-nav li {
    margin-bottom: 10px;
    transition: .4s;
    cursor: pointer;
}

.ps-slider-nav li img {
    transition: .4s;
}

.ps-img1 {
    opacity: 1;
    transition: .4s;
}

.ps-img2,
.ps-img3,
.ps-img4 {
    position: absolute;
    top: 0;
    left: 0;
    opacity: 0;
    z-index: 888;
    transition: .4s;
}
.product-single{
    display: inline-block;
    width: 100%;
}
.ps-header {
    display: table;
    position: relative;
    padding-right: 80px;
}

.ps-slider-nav ul li:hover {
    opacity: 0.7;
    transition: .4s;
}*/

.sync1 .item{                     
    margin: 5px;
    color: #FFF;
    -webkit-border-radius: 3px;
    -moz-border-radius: 3px;
    border-radius: 3px;
    text-align: center;
}
.sync2 .item{                         
    margin: 5px;
    color: #FFF;
    -webkit-border-radius: 3px;
    -moz-border-radius: 3px;
    border-radius: 3px;
    text-align: center;
    cursor: pointer;
}           
.sync2 .item{
    opacity: 0.7;
}
.sync2 .synced .item{
    opacity: 1;
}
.sync1 .item img, .sync2 .item img{
    max-width: 100%;
}

#myModal .sync2 .item > img {
    max-height: 95px;
}
.prod-slider .item{
    background-color: #f8f8f8;
}
.prod-slider .item:hover .caption-link{
    opacity: 1;
    visibility: visible;
}
.caption-link {
    background-color: #ffffff;
    border-radius: 3px;
    bottom: 0;
    display: inline-block;
    font-size: 16px;
    height: 30px;
    left: 0;
    line-height: 30px;
    margin: auto;
    position: absolute;
    right: 0;
    top: 0;
    width: 30px;
    opacity: 0;
    visibility: hidden;
}
.sync1 .owl-controls .owl-buttons .owl-prev, .sync1 .owl-controls .owl-buttons .owl-next{
    background: #ffffff none repeat scroll 0 0;
    border-radius: 0;
    color: #000000;
    cursor: pointer;
    display: inline-block;
    font-size: 14px;
    height: 50px;
    line-height: 45px;
    opacity: 1;
    position: absolute;
    text-align: center;
    top: 45%;
    width: 50px;
    transition: all ease-in-out 0.3s;
    -webkit-transition: all ease-in-out 0.3s;
}
.sync1 .owl-controls .owl-buttons .owl-prev:hover, 
.sync1 .owl-controls .owl-buttons .owl-next:hover{
    background: #000 none repeat scroll 0 0;
    color: #fff;
}
.sync1 .owl-controls .owl-buttons .owl-next {
    right: 3%;
}
.sync1 .owl-controls .owl-buttons .owl-prev {
    left: 3%;
}

.product-single h3 {
    margin: 0 0 5px;
    font-size: 18px;
}

.ratings-wrap {
    margin-bottom: 8px;
    display: table;
}

.ratings-wrap .ratings {
    float: left;
}

.ratings-wrap em {
    margin-left: 8px;
    font-size: 12px;
    color: #666666;
    font-style: normal;
}

.ps-price {
    font-size: 16px;
    color: #333;
    font-family: Montserrat;
    margin: 0 0 10px;
}

.ps-price span {
    font-size: 13px;
    text-decoration: line-through;
    color: #aaa;
}

.sep {
    height: 1px;
    background: #cccccc;
    width: 100%;
    margin: 15px 0 12px;
}

.ps-color a {
    width: 26px;
    height: 26px;
    display: inline-block;
}

.select-wraps p ,
.ps-color p {
    color: #333;
    margin: 0 0 7px;
}

.select-wraps select {
    height: 40px;
    border: 1px solid #f1f1f1;
    padding: 0 10px;
    width: 100%;
}

.share a {
    width: 28px;
    height: 28px;
    background: #444;
    font-size: 14px;
    border-radius: 3px;
    line-height: 28px;
    text-align: center;
    color: #FFF;
    display: inline-block;
    margin-right: 5px;
}

.share a:hover {
    background: #D6644A;
    color: #FFF;
}

.addtobag {
    height: 31px;
    line-height: 31px;
    background: #d6644a;
    padding: 0 15px;
    display: inline-block;
    font-family: Montserrat;
    font-size: 11px;
    border-radius: 3px;
    color: #fff;
    text-transform: uppercase;
    margin: 8px 0 0;
}

.addtobag:hover {
    background: #333;
    color: #fff;
}

.ps-slider div span {
    padding-top: 9px;
    display: table;
}

.ps-slider div span a i {
    color: #333333;
    font-size: 13px;
    margin-right: 5px;
}

.ps-slider div span a {
    color: #666666;
    font-size: 13px;
    margin-right: 27px;
}

.tab-content {
    padding: 30px 20px;
    background: #fff;
    border: solid 1px #ccc;
}

.nav-tabs {
    border-bottom: medium none;
    margin-left: 2px;
}

.nav-tabs > li {
    float: left;
    margin: 0 -2px;
}

.nav-tabs > li > a {
    font-family: Montserrat;
    font-size: 12px;
    color: #444;
    text-transform: uppercase;
    border-radius: 0px;
    padding: 15px 25px;
    background: rgba(255, 255, 255, 0.79);
    border: 1px solid #D6DCDE;
    position: relative;
    top: 7px;
    border-bottom: none;
}

.nav-tabs > li.active > a {
    font-family: Montserrat;
    font-size: 12px;
    color: #444;
    padding: 18px 25px;
    position: relative;
    top: 1px;
    z-index: 999;
}

.nav-tabs {
    border-bottom: none;
}

.reviews-tab .sep {
    background: #eeeeee;
}

.reviews-tab p {
    color: #666666;
    margin: 0;
}

.reviews-tab p b {
    font-weight: 600;
    color: #333333;
}

.reviews-tab form h5 {
    font-family: Montserrat;
    font-size: 14px;
    text-transform: uppercase;
    color: #444;
    font-weight: 400;
    margin: 35px 0 15px;
}

.reviews-tab form label {
    display: block;
    font-weight: 400;
    margin-bottom: 5px;
}

.reviews-tab form input {
    border: solid 1px #ccc;
    max-width: 376px;
    width: 100%;
    height: 43px;
    line-height: 41px;
    padding: 0 20px;
}

.reviews-tab form textarea {
    border: solid 1px #ccc;
    width: 100%;
    max-width: 575px;
    height: 214px;
    padding: 25px 20px;
}

.btn-black {
    height: 33px;
    border: none;
    line-height: 33px;
    background: #333;
    padding: 0 20px;
    display: inline-block;
    font-family: Montserrat;
    font-size: 11px;
    border-radius: 3px;
    color: #fff;
    text-transform: uppercase;
    margin: 8px 0 0;
}

.btn-black:hover {
    background: #d6644a;
    color: #fff;
}

.btn-color {
    height: 33px;
    border: none;
    line-height: 33px;
    background: #d6644a;
    padding: 0 20px;
    display: inline-block;
    font-family: Montserrat;
    font-size: 11px;
    border-radius: 3px;
    color: #fff;
    text-transform: uppercase;
    margin: 8px 0 0;
}

.btn-color:hover {
    background: #333;
    color: #fff;
}

.form-tags input {
    border: solid 1px #ccc;
    max-width: 376px;
    width: 100%;
    height: 43px;
    line-height: 41px;
    padding: 0 20px;
}

.form-tags span {
    font-size: 12px;
    padding: 4px 0 0;
    display: table;
    margin-bottom: -9px;
}

.heading-small {
    font-family: Montserrat;
    font-size: 14px;
    text-transform: uppercase;
    color: #333;
}

/* 15. CART STYLES */

.cart-table {
    width: 100%;
    background: #ffffff;
}

.cart-table tr td img {
    width: 100px;
    margin: 0 auto;
}

.cart-table tr td {
    padding: 15px;
}

.cart-table tr th ,
.cart-table tr td {
    border: 1px solid #cccccc;
    text-align: center;
}

.cart-table tr td:nth-child(1) {
}

.cart-table tr td:nth-child(2) {
}

.cart-table tr td:nth-child(3) {
}

.cart-table tr td:nth-child(3) {
    text-align: left;
    padding: 15px 40px;
}

/*.cart-table tr td:nth-child(6) {
    padding: 45px 40px;
    vertical-align: top;
    text-align: left;
}

.cart-table tr td:nth-child(7) {
    padding: 45px 40px;
    vertical-align: top;
    text-align: left;
}

.cart-table tr td h4 {
    margin: 0 0 1px;
}*/

.cart-table tr td p {
    margin: 0 ;
}
.cart-table tr td h4{
    text-transform: capitalize;
}
.cart-table tr td h4 a {
    color: #333333;
    font-size: 16px;
    text-transform: capitalize;
}
.cart-table tr td h4 a:hover, .cart-table tr td h4 a:focus,
.side-widget .cart-table td a:hover, .side-widget .cart-table td a:focus,
.side-widget .cart-table td a:hover,.side-widget .cart-table td a:focus{
    color: #d6644a
}
.side-widget .cart-table td a{
    color: #333333;
}
.cart-table tr th {
    border: 1px solid #cccccc;
    text-align: center;
    font-family: Montserrat;
    font-size: 12px;
    color: #333;
    text-transform: uppercase;
    font-weight: 400;
    padding: 15px 10px;
}

.cart-table .fa-trash {
    color: #333333;
    font-size: 15px;
    font-weight: normal;
}

.cart-table select {
    width: 90px;
    height: 40px;
    line-height: 40px;
    padding: 0 20px;
}

.item-price {
    vertical-align: top;
    font-family: Montserrat;
    font-size: 16px;
    color: #333;
}

.shipping-info-wrap h2 {
    font-family: Montserrat;
    font-size: 14px;
    text-transform: uppercase;
    color: #333;
}

.form-list label {
    vertical-align: middle;
    font-weight: 400;
    text-transform: capitalize;
}

.form-list input {
    border: solid 1px #aaa;
    width: 100%;
    height: 42px;
    line-height: 40px;
    padding: 0 20px;
    margin-bottom: 20px;
}

.totals {
    background: #f5f5f5;
    padding: 38px;
    text-align: right;
}

#shopping-cart-totals-table {
    float: right;
    font-size: 15px;
    margin-bottom: 10px;
}

.checkout-types li:last-child a {
    font-size: 12px;
    color: #666666;
}

.table-btn {
    background: #fff;
    display: table;
    width: 100%;
    border: 1px solid #ccc;
    border-top: none;
    padding: 7px 25px 13px;
}

/* 16. CHECKOUT STYLES */

.accordion-toggle {
    cursor: pointer;
}

.accordion-content {
    display: none;
}

.accordion-content.default {
    display: block;
}

.accordion-toggle {
    font-family: Montserrat;
    font-size: 14px;
    color: #333;
    text-transform: uppercase;
    position: relative;
    margin-top: 15px;
}

.accordion-toggle span {
    width: 40px;
    height: 40px;
    background: #333333;
    display: inline-block;
    color: #fff;
    text-align: center;
    line-height: 40px;
    margin-right: 10px;
}

.accordion-content {
    background: #FFF;
    padding: 40px;
    margin-bottom: 15px;
    border: 1px solid #d2d2d2;
}

.accordion-content h3,
.accordion-content h4 {
    font-family: Raleway;
    font-size: 14px;
    color: #444;
    margin: 0 0 0;
}

.ul i {
    font-size: 13px;
    color: #aaaaaa;
    margin-right: 7px;
}

.ul li {
    margin-bottom: 3px;
}

.cbox input {
    margin-right: 10px;
    float: left;
}

.cbox span {
    position: relative;
    top: 2px;
}

.checkout-steps h6 {
    font-family: Montserrat;
    font-size: 14px;
    color: #333;
    margin: 0 0 25px;
    text-transform: uppercase;
}

.checkout-steps div {
    background: #f5f5f5;
    padding: 20px 20px 30px;
}

.checkout-steps div p {
    color: #333;
}

/* 17. BLOG STYLES */

.blogpost h2 {
    margin-top: 0px;
}

.blogpost h2 a {
    font-size: 30px;
    color: #000;
}

.post-meta span {
    margin-right: 15px;
}

.post-meta span a {
    color: #ccc;
}

.post-meta span i {
    color: #aaa;
}

.blog-slider .slick-dots {
    top: -40px;
}

.blogpost {
    border-bottom: 1px solid #ddd;
    padding-bottom: 40px;
    margin-bottom: 35px;
}

.video {
    position: relative;
    padding-bottom: 56.25%;
    padding-top: 25px;
    height: 0;
}

.video iframe {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
}

.quote-one-right p {
    font-size: 26px;
    line-height: 32px;
    font-weight: 300;
}

.popular-post h5 {
    margin: 15px 0 0;
    font-size: 14px;
    font-weight: 500;
}

.popular-post h5 a {
    color: #333;
}

.popular-desc span {
    margin-bottom: 10px;
    font-size: 12px;
    color: #666;
    display: table;
}

.search-widget {
    position: relative;
}

.search-widget input {
    border: 1px solid #ddd;
    width: 100%;
    height: 35px;
    padding: 0 20px;
    border-radius: 0px;
}

.search-widget button {
    border: medium none;
    background: transparent;
    color: #888;
    font-size: 13px;
    height: 35px;
    line-height: 33px;
    position: absolute;
    right: -4px;
    top: 0px;
    width: 50px;
}

.comment-avatar {
    width: 80px;
    height: 80px;
    border: 1px solid #e1e1e1;
    padding: 5px;
    border-radius: 50%;
}

.comment-sub {
    padding-left: 80px !important;
}

.comment-list li {
    margin: 0px 0px 20px;
    display: inline-block;
    width: 100%;
}

.comment-meta {
    margin-left: 95px;
    margin-bottom: 5px;
    font-family: 'Montserrat','Helvetica Neue',Arial,sans-serif;
}

.comment-list li p {
    margin-left: 95px;
    line-height: 21px;
}

.comment-meta li a {
}

.comment-meta em {
    font-style: normal;
    margin-left: 6px;
    font-size: 10px;
}

.reply {
    float: right;
    font-size: 12px;
}

.reply:hover {
    color: #000 !important;
}

.badge {
    width: 48px;
    height: 48px;
    line-height: 45px;
    font-weight: 400;
    text-align: center;
    font-family: Montserrat;
    font-size: 13px;
    color: #fff;
    text-shadow: 1px 1px 2px rgba(0,0,0,.08);
    position: absolute;
    border-radius: 50%;
    top: 7px;
    right: 7px;
}

.new {
    background: #d6644a;
}

.offer {
    background: #444444;
}

/* 18. NEWSLETTER */

#popup-newsletter {
    background: transparent url("../images/ns-bg.png") no-repeat top left;
    background-size: cover;
    display: table;
    width: 100%;
    height: 505px;
}

#popup-newsletter .block-content {
    width: 750px;
    float: right;
    text-align: center;
}

#popup-newsletter .form-subscribe-header label {
    font-size: 26px;
    line-height: 26px;
    margin: 0px;
    color: #333;
    text-transform: none;
    padding: 45px 0px 0px;
    font-family: "Raleway",sans-serif;
    font-weight: bold;
}

.promo-panel-sale {
    font-size: 32px;
    line-height: 32px;
    padding: 25px 0px;
    margin: 0px;
    color: #333;
    font-family: "Montserrat";
    font-weight: bold;
}

.promo-panel-text {
    font-size: 24px;
    line-height: 20px;
    padding: 0px 0px 23px;
    margin: 0px;
    color: #D6644A;
    font-family: "Montserrat";
    text-transform: uppercase;
}

#popup-newsletter .block-content input.input-text {
    margin-left: 100px;
    float: left;
    height: 45px;
    line-height: 45px;
    width: 435px;
    border: 2px solid #444;
    text-align: left;
    color: #333;
    padding: 0 20px;
}

#popup-newsletter .block-content .actions {
    float: left;
    margin: 0px 10px;
}

.promo-panel-text1 {
    padding: 58px 0px 0px;
    font-family: "Raleway",sans-serif;
    color: #333;
    font-size: 18px;
    font-weight: bold;
    margin: 0px 0px 5px;
    display: inline-block;
}

.promo-panel-text2 {
    padding: 0px;
    font-family: "Raleway",sans-serif;
    color: #666;
    font-size: 13px;
    margin: 0px 0px 35px;
}

#popup-newsletter .subscribe-bottom {
    text-align: right;
    display: block;
    padding: 120px 25px 25px 0px;
    color: #333;
    font-size: 12px;
    font-family: "Raleway",sans-serif;
    font-weight: normal;
    line-height: 10px;
}

.quickview {
    cursor: pointer;
}

#popup-newsletter .block-content button {
    height: 45px;
    line-height: 45px;
    font-size: 12px;
    padding: 0px 28px;
    font-family: "Montserrat";
    background-color: #333;
    color: #fff;
    border-radius: 3px;
    border: none;
}

#popup-newsletter .block-content button:hover {
    background: #D6644A;
}

.subscribe-bottom span {
    margin-left: 10px;
    position: relative;
    top: -3px;
}

.modal-lg {
    width: 1170px;
}

.modal-content {
    padding: 30px;
}

.modal-content {
    box-shadow: 0px 2px 7px rgba(0, 0, 0, 0.3);
    position: relative;
    background-color: #FFF;
    background-clip: padding-box;
    border: none;
    border-radius: 0;
    outline: 0px none;
}

button.close {
    position: absolute;
    top: 10px;
    right: 10px;
}

.c-text {
    text-align: left;
    position: absolute !important;
    width: 100%;
    bottom: 90px;
	padding: 0px 12em 0px 12em;
    left: 0;
    right: 0;
}

.c-text h3 {
    color: #fff;
	line-height:normal;
}

.c-text p {
    text-transform: uppercase;
    color: #fff;
}

.c-text a {
    font-family: Montserrat;
    font-size: 11px;
    font-weight: bold;
    color: #fff;
    text-transform: uppercase;
}

.recent-block{
		padding-top:7px !important;
}
.rnews .fw-thumb img{
	width:73px;
}
.rnews .fw-info{
	margin-left:100px;
}
.home-carousel div {
    position: relative;
}

.home3 .mega-menu {
    border: medium none;
    position: absolute;
    left: 0px !important;
    width: 100%;
    background: #FFF url("../images/basic/menu-bg.png") no-repeat scroll right bottom;
    top: 60px;
    max-width: 1157px;
    right: 0px !important;
    margin: 0px auto;
    border-radius: 0px;
    padding: 30px 280px 50px 35px;
    box-shadow: 0px -1px 2px rgba(0, 0, 0, 0.06);
}

.slider-carousel {
    position:relative;
}

.slider-carousel:after {
    content:"";
    width:20%;
    background:#000;
    opacity:0.2;
    position:absolute;
    height:100%;
    left:0;
    top:0;
    z-index:777;
}

.slider-carousel:before {
    content:"";
    width:20%;
    background:#000;
    opacity:0.2;
    position:absolute;
    height:100%;
    right:0;
    top:0;
    z-index:777;
}

.top-product-carousel .slick-prev {
    width: 58px;
    height: 58px;
    border-radius: 3px;
    background: rgba(0,0,0,0.16);
    color: #FFF;
    text-align: center;
    line-height: 58px;
    border: medium none;
    font-size: 0px;
    position: absolute;
    top: 50%;
    margin-top: -29px;
    transition: all 0.4s ease 0s;
    opacity: 1;
    visibility: visible;
    left: 20%;
    margin-left: -29px;
}

.top-product-carousel .slick-next {
    width: 58px;
    height: 58px;
    border-radius: 3px;
    background: rgba(0,0,0,0.16);
    color: #FFF;
    text-align: center;
    line-height: 58px;
    border: medium none;
    font-size: 0px;
    position: absolute;
    top: 50%;
    margin-top: -28px;
    right: 20%;
    transition: all 0.4s ease 0s;
    opacity: 1;
    margin-right: -29px;
    visibility: visible;
}

.top-product-carousel .slick-next::after ,
.top-product-carousel .slick-prev::after {
    font-size: 13px;
}

.top-product-carousel .slick-next:hover,
.top-product-carousel .slick-prev:hover {
    background: #000;
}

#header4 .navbar-default .navbar-nav > li > a {
    color: #fff;
}

#header4 .header-xtra span {
    background: rgba(255,255,255,0.23) !important;
    color: #fff;
}

#header4 .header-xtra span:hover {
    background: #d6644a !important;
    color: #fff;
    transition: .4s;
}

#home5 .topcart {
    margin: 30px 0px 0px;
}

#home5 .ci-item p {
    margin: 0 0 10px;
}

#home5 .cart-info {
    right: -20px;
}

#home5 .topcart span {
    background: transparent !important;
}

#home5 .topcart:hover span,
#home5 .topcart span:hover {
    color: #D6644A !important;
}

#cssmenu {
    margin: 40px 0px 40px;
}

#home5 .tb_right li:first-child .tbr-info span {
    border-left: none;
}

#home5 .tb_right li:last-child .tbr-info span {
    border-right: none;
}

#home5 .tbr-inner {
    right: auto;
    left: 0;
    z-index: 999999;
}

#home5 .tbr-inner::after {
    right: 72%;
}

.vsearch form {
    position: relative;
}

.vsearch input {
    height: 40px;
    width: 100%;
    padding: 0 40px 0 20px;
    border:none;
}

.vsearch button {
    color: #333;
    position: absolute;
    right: 5px;
    top: 10px;
    border: none;
    background: transparent;
}

.body {
    width: 100%;
    position: relative;
    overflow: hidden;
    background:#fff;
}

.body.boxed {
    width: 98%;
    max-width:1250px;
    margin-top: 20px;
    margin-bottom: 20px;
    margin-left: auto;
    margin-right: auto;
}

.body.boxed header {
    width: 100%;
    max-width:1250px;
    margin-left: auto;
    margin-right: auto;
}

#backtotop {
    border-radius: 50%;
    line-height: 48px;
    background-color: #333;
    display: block;
    position: fixed;
    bottom: 50px;
    text-align: center;
    width: 50px;
    right: 30px;
    opacity: 0;
    transition: all 0.4s ease 0s;
    color: #FFF;
    font-size: 11px;
    height: 50px;
    z-index: 99999;
    cursor: pointer;
}

#backtotop:hover {
    background-color: #1b8047;
    transition: .4s;
    color: #fff;
}

#backtotop.active {
    opacity: 1;
}

.modal {
    z-index: 10800000;
}

.modal-backdrop {
    z-index: 10400000;
}

.header2 .mega-menu {
    left: 15px !important;
}

.nav-badge {
    height: 20px;
    position: absolute;
    background: #d46549;
    top: -12px;
    padding: 0 7px;
    font-family: Raleway;
    font-size: 13px;
    text-transform: none;
    margin-left: -25px;
}

.nav-badge:after {
    content: '';
    position: absolute;
    border-style: solid;
    border-width: 4px 4px 0;
    border-color: #d46549 transparent;
    display: block;
    width: 0;
    z-index: 1;
    bottom: -4px;
    left: 4px;
}

.nav-badge.hot {
    height: 20px;
    position: absolute;
    background: #666666;
    top: -12px;
    padding: 0 7px;
    font-family: Raleway;
    font-size: 13px;
    text-transform: none;
    margin-left: -25px;
}

.nav-badge.hot:after {
    content: '';
    position: absolute;
    border-style: solid;
    border-width: 4px 4px 0;
    border-color: #666666 transparent;
    display: block;
    width: 0;
    z-index: 1;
    bottom: -4px;
    left: 4px;
}

#home5 .tp-rightarrow.default ,
#home5 .tp-rightarrow:hover {
    background: transparent url("../js/vendors/rs-plugin/assets/large_right_1.png") no-repeat scroll 0px 0px;
}

#home5 .tp-leftarrow.default ,
#home5 .tp-leftarrow:hover {
    background: transparent url("../js/vendors/rs-plugin/assets/large_left_1.png") no-repeat scroll 0px 0px;
}

#home5 .tp-leftarrow:hover,
#home5 .tp-rightarrow:hover {
    background-position: bottom left;
}

.nav-trigger {
    background: rgba(0,0,0,0.3);
    color: #fff;
    width: 60px;
    height: 60px;
    line-height: 60px;
    text-align: center;
    font-size: 23px;
    position: fixed;
    top: 22px;
    left: 20px !important;
    transition: .4s;
    z-index: 999999;
    cursor: pointer;
}

.nav-trigger:hover {
    background: #272727;
    color: #fff;
    transition: .4s;
}

.sm-show {
    left: 0px;
    transition: .4s;
}

.sm-hide-body .nav-trigger {
    left: 350px !important;
    transition: .4s;
    color: #fff !important;
    background: #272727;
}

#home5 .topcart span {
    color: #fff;
    font-family: 'Montserrat', sans-serif;
    text-transform: uppercase;
    font-size: 13px;
}

.filter-wrap .col-md-5 ,
.filter-wrap .col-md-4 {
    line-height: 24px;
}

#slider-container {
    width: 100%;
    margin-bottom: 17px;
}

.range-label {
    color: #333333;
    font-weight: 300;
}

.ui-slider-horizontal .ui-slider-handle {
    top: -0.3em;
    margin: 0px -1px;
}

.ui-widget-content {
    border: none;
    background: #cccccc;
    color: #333;
    height: 4px !important;
}

.ui-state-default, .ui-widget-content .ui-state-default {
    border: none;
    background: #d6644a;
    margin-top: -2px;
}

.ui-state-default:hover, .ui-widget-content .ui-state-default:hover {
    background: #d6644a;
}

.ui-widget-header {
    background: #6d6d6d;
}

.sc-range {
    position: relative;
    top: 15px;
}

.sc-range input {
    border: 0px none;
    color: #333;
    font-weight: bold;
    width: 75px;
}

input[type=radio].css-checkbox {
    position: absolute;
    z-index: -1000;
    left: -1000px;
    overflow: hidden;
    clip: rect(0 0 0 0);
    height: 1px;
    width: 1px;
    margin: -1px;
    padding: 0;
    border: 0;
}

input.css-checkbox[type="radio"] + label.css-label {
    padding-left: 22px;
    height: 12px;
    display: inline-block;
    line-height: 12px;
    background-repeat: no-repeat;
    background-position: 0px 0px;
    font-size: 13px;
    vertical-align: middle;
    cursor: pointer;
    font-weight: 400;
    margin-bottom: 17px;
}

input[type=radio].css-checkbox:checked + label.css-label {
    background-position: 0 -12px;
}

label.css-label {
    background-image: url(../images/cbox.png);
    -webkit-touch-callout: none;
    -webkit-user-select: none;
    -khtml-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
}

.select-wraps .selectboxit-container ,
.select-wraps .selectboxit-container .selectboxit ,
.select-wraps .selectboxit-container .selectboxit-options {
    width: 100% !important;
}

.mm-badge-sale {
    height: 20px;
    line-height: 20px;
    color: #fff;
    font-size: 12px;
    padding: 0 7px;
    background: #444444;
    display: inline-block;
    margin-left: 12px;
}

.mm-badge-new {
    height: 20px;
    line-height: 20px;
    color: #fff;
    font-size: 12px;
    padding: 0 7px;
    background: #d6644a;
    display: inline-block;
    margin-left: 12px;
}

.reset {
    background: #000 !important;
    color: #fff !important;
    font-size: 11px;
    padding: 7px;
    font-weight: 700;
    border-radius: 3px;
    margin: 10px 5px 5px;
    display: table;
    width: 82px;
    text-align: center;
    letter-spacing: 1px;
    text-transform: uppercase;
    opacity: 0.3;
}

.reset span {
    background:transparent;
}

.reset:hover {
    opacity: 1;
}

.no-border-top {border-top:none !important;}
.no-border-bottom {border-bottom:none !important;}
.no-padding-top{padding-top:0px !important;}

#home5 .tb_right li .tbr-info span {
    border:none;
}

#loader {
    background:#fff url(../images/loading.gif) no-repeat center center;
    height: 100%;
    width: 100%;
    position: fixed;
    z-index: 100000000000;
    left: 0%;
    top: 0%;
    margin: 0;
}

/* 19. MY ACCOUNT */
.account-title{
    color: #333333;
    font-family: Montserrat;
    font-size: 14px;
    margin-top: 0;
    position: relative;
    text-transform: uppercase;
}
.account-title span {
    background: #333333 none repeat scroll 0 0;
    color: #ffffff;
    display: inline-block;
    height: 40px;
    line-height: 40px;
    margin-right: 10px;
    text-align: center;
    width: 40px;
}
.details-box ul li a{
    color: #666666;
    display: block;
    margin-bottom: 10px;
    text-transform: capitalize;
    font-size: 14px;
    font-weight: 700;
}
.account-list li a{
    color: #333333;
    display: block;
    margin-bottom: 10px;
    text-transform: capitalize;
}
.account-list li:last-child a{
    margin-bottom: 0;
}
.account-list li a:hover, .account-list li a:focus, .account-list li.active a,
.details-box ul li a:hover,  .details-box ul li a:focus, .pay-pal a:hover, .pay-pal a:focus,
.form-login label a:hover, .form-login label a:focus{
    color: #d6644a;
}
.account-form{
    background: #ffffff none repeat scroll 0 0;
    border: 1px solid #d2d2d2;
    margin-bottom: 15px;
    padding: 40px;
}
.form-list .selectboxit-container .selectboxit-options{
    width: 100% !important;
}
.form-list .selectboxit-container .selectboxit{
    width: 100% !important;  
    border: 1px solid #aaaaaa;
    margin: 0;
    background: rgba(0, 0, 0, 0) none repeat scroll 0 0;
}
.form-list .selectboxit-container{
    width: 100% !important;
    margin: 0 0 20px;;
    background: rgba(0, 0, 0, 0) none repeat scroll 0 0;
}
.form-list .selectboxit-container span,.form-list .selectboxit-container .selectboxit-options a{
    height: 40px;
    line-height: 40px;
}
.form-list input[type="radio"], .form-list input[type="checkbox"] {
    height: auto;   
    position: static;
    width: auto;
    margin-right: 10px;
}

.form-login .btn.facebook i, .form-login .btn.twitter i{
    margin-right: 10px;
}
.form-login .btn.facebook {
    background-color: #3e5c98;
    border-color: #3e5c98;
    border-radius: 0;
    color: #ffffff;
    display: inline-block;
    font-weight: 700;
    margin-bottom: 20px;
    padding: 10px;
    text-transform: uppercase;
    width: 100%;
}
.form-login .btn.twitter {
    background-color: #22a9e0;
    border-color: #22a9e0;
    border-radius: 0;
    color: #ffffff;
    display: inline-block;
    font-weight: 700;
    margin-bottom: 20px;
    padding: 10px;
    text-transform: uppercase;
    width: 100%;
}
.form-login .btn.facebook:hover, .form-login .btn.twitter:hover,
.form-login .btn.facebook:focus, .form-login .btn.twitter:focus{
    background-color: #333333 ;
    border-color: #333;
}
.create-new-account h3{
    margin: 0 0 42px;
    text-transform: capitalize;
}
.account-form.create-new-account li {
    font-size: 14px;
    margin-bottom: 20px;
    text-transform: capitalize;
}
.redirect-login{
    background: #ededed none repeat scroll 0 0;
    margin-bottom: 40px;
    padding: 15px;    
}


.pay-pal a, .form-list p{
    color: #444444;
}
.transfer-wrap p{
    margin: 0;
}
.pay-pal img{
    margin: 0 10px;
    max-height: 52px;
}
.transfer-guide {
    background: #ededed none repeat scroll 0 0;
    margin-bottom: 20px;
    padding: 15px;
    position: relative;
}
.transfer-guide:after{
    border-color: rgba(0, 0, 0, 0) rgba(0, 0, 0, 0) #ededed;
    border-image: none;
    border-style: solid;
    border-width: 8px;
    content: "";
    display: block;
    left: 0;
    margin: -1em 0 0 2em;
    position: absolute;
    top: -3px;
}
.cart-table .return-request {
    display: inline-block;   
    margin-right: 10px;
    text-align: center;
    text-transform: capitalize;
    vertical-align: middle;
}
.review-wrap .ratings-wrap{
    margin: auto auto 10px;
}
.review-wrap .ratings-wrap em{
    display: block;
    margin: 0;
}
.review-wrap p{
    text-transform: capitalize;
}
.side-widget .cart-table tr td{
    padding: 5px;
}
.cart-table .item-img{
    padding: 0;
}
.cart-table .item-info h4{
    font-size: 14px;
}
.create-account, .shipping-address, .transfer-guide{
    display: none;
}
/* 20. CONTACT STYLES  */
.google-map, #map-canvas {
    height: 400px;
    max-width: 100%;
    width: 100%;
}
.contact-info .media i{
    background-color: #ededed;
    border-radius: 50%;
    color: #333333;
    display: inline-block;
    font-size: 16px;
    height: 35px;
    line-height: 33px;
    margin: auto 15px auto auto;
    padding: 0;
    text-align: center;    
    width: 35px;
}
.contact-details {
    margin-top: 25px;
}
/* 21. RESPONSIVE STYLES */
@media (max-width:1280px){
    #myModal .modal-lg {
        margin:15px ;
        width: auto;
    }
}



@media only screen and (min-width: 992px)  and (max-width: 1199px){
    .navbar-default .header-xtra{
        margin-left: 0;
	    top: 0px !important;
	    /* margin-left: 10px; */
	    left: 20px;
    }
}

@media only screen and (min-width: 768px)  and (max-width: 1172px)  {

    .flinks {
        display: table;
        margin-bottom: -18px;
        font-size: 9px;
    }

    .footer-bottom p {
        font-size: 11px;
    }

    .top-search2 {
        width: 200px;
    }

    #header2 .navbar-nav > li {
        margin-right: 29px;
    }

    header {
        padding: 25px 0px;
    }
    .text-style2 h6 {
        font-size: 25px;
    }

    .text-style3 h6 {
        font-size: 22px;
    }

    .c-text h4 {
        font-size: 28px;
    }

    .c-text p {
        font-size: 13px;
    }

    .text-style1 h6 {
        font-size: 24px;
    }

    .sb {
        width: 96%;
        height: 450px;
        margin: -225px auto 0;
        left: -0%;
        overflow: hidden;
    }

    .promo-panel-sale {
        background: rgba(255,255,255,0.4);
    }

    #popup-newsletter {
        background-size: 99%;
    }

    #popup-newsletter .subscribe-bottom {
        padding: 69px 38px 27px 0px;
    }
    .tp-banner.slider-4 .tp-parallax-container, .tp-banner.slider-5 li:nth-child(2n) .tp-parallax-container{
        left: 3% !important;
        top: 5% !important;
        width: 100% !important;
    }

}

@media only screen and (min-width: 768px)  and (max-width: 959px)  {

    .slider-carousel:after ,
    .slider-carousel:before {
        display:none !important;
    }

    .text-style2 p {
        font-size: 11px;
    }

    .f-social li a {
        font-size: 16px;
    }

    .f-social li {
        margin-right: 12px;
    }

    .widget-tags li a {
        font-size: 11px;
        padding: 0px 5px;
    }

    .tweets_txt {
        font-size: 12px;
    }

    .f-widgets .col-md-3 {
        width: 50%;
    }

    .tb_left {
        display: none;
    }

    .tb_center {
        margin-left: 0;
        padding: 10px 0px;
    }

    .tb_center ul li {
        font-size: 12px;
    }

    .nav > li > a {
        padding: 12px 10px;
        font-size: 12px;
    }

    .header-xtra {
        margin-left: 25px;
    }

    .navbar-nav {
        margin: -6px 0px 0px 20px;
    }
	a.navbar-brand{
		height:auto !important;
	}

    .navbar > .container .navbar-brand {
        margin-top: -5px;
    }
	.navbar-header {
	    margin-left: 20px;
	}
	.navbar-default .navbar-nav > li > a {
	    font-size: 10.1px;
	}
    header {
	    height: 69px !important;
	    padding: 15px 0px 0px !important;
	}
	.header-xtra{
		top:0px;
		margin-right: 10px;
	}
	.slider-wrap{
		position: relative;
	    left: -5% !Important;
	    width: 115%;
	}
	#prj-start{
	    position: relative;
	    left: -2% !important;
	    width: 105% !important;
	}
	.filter li{
			width: auto !important;
	}
	.filter li a{
		    font-size: 14px !important;
	}
	.slick-next{
		right:-7px !important;
	}
	.featured-products.sec .filter{
		    width: 1300px !important;
			padding-left: 25px !important;
	}
    .mega-menu{
        padding: 30px 10px 60px 10px;
        background-size: 28%;
    }

    .block-content {
        display: block;
    }

    .bs-text-down {
        font-size: 15px;
    }

    .bs-text-down span {
        font-size: 10px;
    }

    .bs-text-center span {
        font-size: 12px;
    }

    .bs-text-center {
        padding: 20px 10px;
    }

    .bs-text-down {
        bottom: 25px;
        height: 80px;
        margin: 0;
        width: 100%;
    }

    .featured-products .isotope-item, .featured-products.sec .isotope-item {
        width: 100%;
        padding: 0px 15px;
    }

    .hp-meta span {
        font-size: 11px;
    }

    .clients-carousel2 .uc2 li a img {
        width: 100%;
    }

    #home2 .top_bar {
        margin-bottom: 15px;
    }
    /*new*/
    .c-text{
        bottom: 50px;  
    }
    .shipping-info-wrap .totals{
        margin-top: 30px;
        padding: 38px 15px;
    }
    .top-search2 {
        margin-right: 0;
        width: 150px;
    }
    #home2 .topcart{
        margin-right: 0 !important;
    }
    /*new*/
}

@media only screen and (min-width: 200px)  and (max-width: 767px)  {

    .slider-carousel:after ,
    .slider-carousel:before {
        display:none !important;
    }

    /*    #backtotop {
            display: none !important;
        }*/


    .bs-text-down {
        bottom: 25px;
        height: 80px;
        margin: 0;
        width: 100%;
    }
	.sponsored{
		margin-top:19px;
		padding-top:0px !Important;
	}
	.f-widget-content ul li h4{
		margin-bottom:19px !Important;
	}
	.rnews .fw-info p:first-child{
		padding-top: 0px !important;
		margin-bottom: 5px !important;
		
	}
	.rnews .fw-info p:last-child{
		padding-top: 0px !important;
		margin: 0px !important;
		font-weight: 600 !important;
	}
    .container {
        width: 90%;
        max-width: 500px;
        padding: 0 15px;
    }

    .tb_left {
        display: none;
    }
	.f-widget-content li:last-child{
		margin-bottom: 16px;
    	padding-bottom: 0px;
	}
    .subscribe-me {
        display: none !important;
    }
	#prj-start{
		height: 119px;
	}
	#prj-start h3{
		    margin-top: 26px !important;
	}
	#backtotop{
		bottom:5px !important;
		right: 5px !important;
	}
    .sb-open .sb-overlay {
        opacity: 1;
        display: none !important;
    }

    .tb_center {
        display: none;
    }

    .tb_right {
        float: none;
        margin: 0 auto;
        display: table;
    }

    .tb_right li {
        font-size: 11px;
    }

    .block-content {
        display: block;
        width: 100%;
        position: relative;
        overflow: hidden;
        cursor: pointer;
        margin-bottom: 30px;
    }

    .bs-text-down {
        font-size: 15px;
    }

    .bs-text-down span {
        font-size: 10px;
    }

    .bs-text-center span {
        font-size: 12px;
    }
    .quote-carousel img {
        border-radius: 50%;
        width: 115px;
        float: none;
        margin: 0 auto;
    }

    .quote-info {
        margin-left: 0;
        text-align: center;
    }

    .widget-footer {
        margin-bottom: 30px;
    }

    .header-xtra {
        display: none;
    }

    header {
        height: 50px;
        background: #FFF none repeat scroll 0% 0%;
        padding: 15px 0px;
        position: relative;
        z-index: 999999;
    }
	.is-sticky header{
		height:50px !Important;
	}
	.navbar{
		margin-right: -5px;
    	margin-left: -5px;
	}

    .navbar-toggle {
        margin-top: 2px;
		float:left;
    }
	.nav > li > a{
		padding:16px 35px !important;
	}
	.navbar-brand{
		height:auto;
	}
	.navbar-default .navbar-toggle{
		border:none;
		padding-top: 0px;
    	padding-bottom: 0px;
	}
	.navbar-brand > img{
		height:auto;
	    width: 100%;
	    max-width: 194px;
		padding-top:0px;
	}
	.navbar > .container .navbar-brand{
		margin-left: 40px !important;
	}
	.navbar-default .navbar-toggle .icon-bar{
		background-color: #4f4f4f;
	}
	.featured-products .filter{
		width:620px;
		    display: flex;
	    overflow-x: auto;
	    -webkit-overflow-scrolling: touch;
	}
	.featured-products.sec .filter{
		    width: 1020px;
		    display: flex;
	    overflow-x: auto;
	    -webkit-overflow-scrolling: touch;
		margin-bottom:10px;
	}
	.featured-products #isotope{
		max-height: 478px;
	    overflow: hidden;
	}
	#isotope_sec{
		max-height: 703px;
    	overflow: hidden;
		margin-top:0px;
	}
	.mob-filter-sort .text-left{
		padding-left:40px;
	}
	.mob-filter-sort .text-right{
		padding-right:40px;
	}
	.filter li a{
		display:block !important;
		    padding: 10px 8px;
	}
	.filter li a.selected:after{
		    margin: -5px auto;
	}
	.sfilter li a:hover, .sfilter li a.selected{
		color: #1b8047;
	}
	.sfilter.filter li a.selected:after{
		display:none;
	}
	.sfilter li:hover{
	    margin-bottom: 0px;
		border-bottom: 1px solid #1b8047;
	}
	.featured-products.sec .filter {
	    border-bottom: 4px solid #cccccc;
	}
	.featured-products.sec .filter li a{
		padding-bottom:0px;
	}
	.mega-menu li{
		margin:0px !important;
	}
    .slider-wrap {
        position: relative;
		margin-top: 0px;
	    margin-right: -35px;
	    margin-left: -35px;
    }
	.c-text{
		padding: 0px 1em 0px 1em;
		text-align:center;
	}
    .navbar-collapse {
		padding-left:0px;
		padding-right:0px;
        overflow-y: auto;
        border-top: 1px solid transparent;
        box-shadow: 0px 1px 0px rgba(255, 255, 255, 0.1) inset;
        position: relative;
        z-index: 9999;
        background: #fff;
		margin-top:10px;
        height:auto;
		max-height:420px;
    }

    .mega-menu li {
        width: 100% !important;
        float: left;
        margin-bottom: 30px;
		border-right: 0px !important;
    }

    .navbar-nav .open .dropdown-menu {
        float: none;
        width: auto;
        margin-top: 0px;
        background-color: transparent;
        border: 0px none;
        box-shadow: none;
        position: relative !important;
        height: 100%;
        padding-right: 20px;
		padding-bottom:65px;
        display: table;
        top: 0;
    }
	.space22 {
	    height: 16px !important;
	    margin-top: 22px !important;
	    background-color: #f4f4f4;
	}
	.pc-wrap{
		width: 50%;
	    float: left;
	}
	.newsletter button{
	    margin-top: -3px;
    	height: 37px;
	}
	#isotope_sec .product-item{
	margin-bottom: 20px;
	}
	#isotope_sec .pc-wrap{
		padding-top:20px;
		border-top: 1px solid #d8d8d8;
		    margin-bottom: 0px;
	}
	#isotope_sec .pc-wrap:nth-child(2n){
		    border-left: 1px solid #d8d8d8;
	}
	
	#isotope_sec .pc-wrap .elem{
		float:none !important;
	}
	#sbox h2{
		font-size:24px !important;
	}
	#sbox input{
		max-width:205px !important;
	}
 	#isotope .isotope-item {
        /*width: 50%;*/
        padding: 0px 15px;
    }
	#isotope .isotope-item .elem{
		    max-width: 100%;
			height: 235px;
		    background: #f3f3f3;
		    padding-bottom: 5px;
	}
	.featured-products.sec .isotope-item .elem{
			 height:auto !important;
		 	    width: 100px !important;
		     background: none !important; 
		    padding-bottom: 5px;
	}
	#isotope .isotope-item .elem p{
		    padding-left: 5px;
    	padding-right: 5px;
	}
	#isotope .product-item{
		    width: 100% !important;
	}
	.product-item{
		margin-bottom: 12px;
	}
	#isotope .pc-wrap:nth-child(1n){
		padding-right:7px;    
		padding-left: 7px;
	}
	#isotope .pc-wrap:nth-child(2n){
		padding-left:7px;
	}
	#isotope .pc-wrap:nth-child(3n){
		padding-left:7px;
	}
	#isotope .pc-wrap:nth-child(4n){
		padding-right:7px;
	}
	#isotope .img-cover{
		    background: #eae9e9;
	}
	.navbar-default .navbar-nav > li > a:hover{
		border:none !important;
	}
	.nav > li{
		    border-bottom: 1px solid #979797;
			text-align:center;
	}
    .mega-menu {
        padding: 0px 280px 0px 35px;
        background: #fff !important;
    }
	.f-widget-content li:last-child{
		    padding-top: 0px !important;
	}
	.morefromus .row{
		padding-top:0px !important;
	}
    .cart-table{
        display: block;
        overflow: auto;
    }
	.sponsored p{
		    text-align: center;
	}
	#prj-start-par {
		margin-right:-30px;
		margin-left:-30px;
	}
    .cart-table tr td {
        padding: 10px;
    }
	.ffilter{
		border-bottom:none;
		margin-bottom: 10px;
	}
	.ffilter li a.selected:after{
		content:none;
	}
	.ffilter li a{
		font-size:14px;
		color:rgba(0, 36, 15, 0.33);
	}
	.ffilter li a.selected{
		font-size:14px;
		color:#00240f;
	}
	.clients{
		padding-top:23px;
		padding-bottom:0px;
	}
	.home-post{
		    box-shadow: 0px 0px 15px 3px rgba(0, 0, 0, 0.1);
	}
	.clients-section h4 strong{
		/* font-weight:normal; */
	}
	.featured-products.sec h4{
		    text-align: center;
	}
	.featured-products.sec > .container{
		width:93% !important;
	}
	.morefromus .row.padding30{
		padding-top:0px !important;
	}
	.morefromus .container{
		width: 100% !important;
	}
	.morefromus .container .col-xs-12 .row{
		padding:0px !important;
	}
	 .morefromus .container .col-xs-12 .row .col-md-4{
	 	padding-left:0px !important;
		padding-right:0px !important;
	 }
	 .mob-only{
	 	display:block !important;
	 }
	 .mob-search{
	 	display:block;
	 }
	.morefromus .row{
	    padding: 0;
	}
	.clients-section h4{
		text-align:center;
	}
	.post-excerpt h4{
		text-align:left !important;
	}
    .order-history td .btn-black{
        padding: 0 8px;
    }

    .checkout-steps {
        margin-top: 45px;
    }

    .top-welcome {
        display: none;
    }

    #home2 .topcart {
        display: none;
    }

    .top-search2 {
        margin-right: -15px;
        width: 300px;
        position: relative;
        display: none;
    }

    #header2 .navbar-brand {
        padding: 0px;
        margin: -0px 0 -49px;
        text-align: center;
        display: table;
        float: none;
    }

    .clients-carousel2 .uc2 li {
        width: 50%;
    }

    .clients-carousel2 .uc2 li img {
        width: 100%;
    }

    .home2-widget .clients-carousel2 {
        margin-bottom: 60px;
    }

    #policy2 .col-md-3 {
        margin-bottom: 30px;
    }

    .widget-footer {
        margin-bottom: 30px;
        display: table;
    }

    #header2 .navbar-nav > li {
        float: none;
        margin-right: 0;
        width: 100%;
    }

    .top-search3 {
        margin-right: -15px;
        width: 100%;
        position: relative;
        max-width: 525px;
        display: none;
    }

    .dark-nav {
        display: table;
        background: transparent;
        width: 100%;
        margin-top: -65px;
        margin-bottom: 0px;
    }

    .home3 .navbar-brand {
        padding: 0px;
        margin-left: -15px;
        margin-top: 15px;
    }

    .home3 header {
        height: 112px;
    }

    .home3 .navbar {
        margin-bottom: 0px;
        margin-top: -50px;
    }

    .home3 .navbar-nav > li {
        float: none;
        margin-right: 0px;
    }

    .home3 .navbar-default .navbar-nav > li > a:hover ,
    .home3 .navbar-default .navbar-nav > li > a.active {
        background: #fff;
    }

    .home3 .navbar-default .navbar-nav > li > a {
        color: #000;
        padding: 20px 25px;
    }

    .sm-show {
        left: 0 !important;
        transition: .4s;
        overflow: scroll;
    }

    .side-menu {
        position: fixed;
        height: 100vh;
        width: 100%;
        background: #272727;
        top: 0;
        left: -100%;
        padding: 30px 40px 100px;
        transition: .4s;
        overflow:auto;
        overflow-x:hidden;
    }

    #home5 {
        padding-left: 0px;
    }

    .sm-hide-body {
        padding-left: 100% !important;
    }

    .nav-trigger {
        left: 20px !important;
    }

    .nav-trigger:hover {
        background: #272727;
        color: #fff;
        transition: .4s;
    }

    .sm-hide-body .nav-trigger {
        left: auto !important;
        right: 20px;
    }

    #home5 .cart-info {
        right: auto;
        left: 40px;
    }


    /*new*/
    .home-blog .home-post, .policy-item .pi-wrap{
        margin-bottom: 15px;
        margin-top: 15px;
        display: inline-block;
        width: 100%;
    }
    #header4 .navbar-default .navbar-nav > li > a{
        color: #444;
    }
    .c-text{
        bottom: 30px;  
    }
    .tp-banner.slider-4 .tp-parallax-container, .tp-banner.slider-5 li:nth-child(2n) .tp-parallax-container{
        left: 5% !important;
        top: 5% !important;
        width: 100% !important;
    }
    .page_header_info{
        float: none;
        padding: 0;
        width: auto;
    }
    .filter-wrap .col-md-3, .filter-wrap .col-md-5, .filter-wrap .col-md-4{
        float: left;
        display: inline-block;
        padding: 10px;
    }
    .pagenav-wrap .pull-right {
        float: none !important;
        margin-top: 15px;
    }
    .shop-single .nav-tabs{       
        margin: 0;
    }
    .shop-single .nav-tabs li {
        display: inline-block;
        margin: 0;
        width: 100%;
    }
    .shop-single .nav-tabs li a{
        margin: 0;
        top: 0;
    }
    .shipping-info-wrap .totals{
        margin-top: 30px;
        text-align: left;
    }
    #shopping-cart-totals-table{
        float: none;
    }
    .footer-bottom .payment{
        margin-top: 20px;
    }
    .blog-content {
        clear: both;
        display: inline-block;
        margin-bottom: 25px;
        margin-top: 25px;
        width: 100%;
    }
    .ps-header{
        margin-top: 20px;
    }
    .google-map, #map-canvas {
        height: 250px;
        max-width: 100%;
        width: 100%;
    }
    /*new*/
	.recent-block{
		padding-top:0px !important;
	}
	#prj-start h3{
		font-size:21px !important;
	}
}

@media only screen and (max-width: 320px){
	.navbar > .container .navbar-brand {
	    margin-left: 15px !important;
	}
} 

@media only screen and (min-width: 375px) and (max-width: 480px){
	.navbar > .container .navbar-brand{
		/*margin-left:20px;*/
	}
} 

@media only screen and (min-width: 414px) and (max-width: 767px) {
	.navbar > .container .navbar-brand{
		margin-left: 55px !important;
	}
}

@media only screen and (max-width: 767px) {
 	
	.mega-menu dropdown-menu li{
		border-right:none !important;
	}
	.featured-section {
		background-size:cover;
	}
	#ad1{
		background-size:cover;
	}
	.mob-nopad{
		padding-right:0px !important;
		padding-left:0px !important;
	}
	
	.isotope_sec .elem{
		 margin:10px 13px;
	}
	
	.isotope_sec .felem{
		margin:10px 0px; width:100% !important;
	}

	#sbox{
		height:auto;
		padding: 1em 0px;
	}
	#sbox h2{
		padding-top:0em !important;
	}
	.f-widget-content .row{
		padding-bottom:7px;
	}
}

@media only screen and (min-width: 768px) and (max-width: 1023px){
 	.navbar-brand > img{
		height: auto;
	    width: 170px;
	}
	.header-xtra, .navbar-default .navbar-collapse{
		/*margin-top: 20px;*/
	}
	#ad1{
		background-position:center;
		margin-top:20px;
	}
		
	.isotope_sec .felem{
		width:100% !important;
		margin-bottom:20px;
	}
	.mob-nopad{
		padding-right:0px !important;
		padding-left:0px !important;
	}
	.navbar-header{
		margin-top:5px;
	}
	 #isotope .pc-wrap{
	 	height: 225px;
    	float: left;
	 }
}
@media only screen and (max-width: 479px){
    /*new*/
    .featured-products .isotope-item {
        width: 100%;
        padding: 0px 15px;
    }
    .filter li{
        margin: 5px;
		text-align:center;
    }    
	.featured-products .isotope-item .elem{
		width:100%;
	}
    #header4 header {    
        height: auto;
        padding: 0;
    }
    .ph_btn a{
        margin: 5px 10px;
    }
    .shopping-cart .table-btn .btn-black.pull-right{
        float: none !important;
    }
    /*new*/
	
	.navbar-default .navbar-nav > li > a:hover{
		border:none !important;
	}
	.nav > li{
		    border-bottom: 1px solid rgba(151, 151, 151, 0.5);
	}
}

hr{
	    border-top: 1px solid #e1e1e1;
}

.search__input {
       width: 300px;
    padding: 3px 25px 7px 0px;
    background-color: transparent;
    transition: transform 250ms ease-in-out;
    font-size: 12px;
    color: #c1c1c1;
    background-color: transparent;
   background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' width='24' height='24' viewBox='0 0 24 24'%3E%3Cpath d='M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z'/%3E%3Cpath d='M0 0h24v24H0z' fill='none'/%3E%3C/svg%3E");
    background-repeat: no-repeat;
    background-size: 18px 18px;
    background-position: 95% center;
    border: none;
    border-bottom: 1px solid #c5c5c5;
    transition: all 250ms ease-in-out;
    font-family: 'Nunito', sans-serif;
    }

.search__input::placeholder {
            color: #c1c1c1;
			font-size:12px;
}
.search__input:focus, .search__input:hover{
	outline: none;
}

input::placeholder{
    font-family: 'Nunito', sans-serif;
}
input{
    font-family: 'Nunito', sans-serif;
	font-size:12px;
}
.btn-success{
	background-color:#1b8047 !important;
	border:none;
	border-radius:0px;
}
    
@media only screen and (min-width: 768px)  and (max-width: 1024px)  {
	.nav > li > a{
		    padding: 12px 10px;
	}

    header {
        height: 70px;
        padding: 25px 0px 0px;
    }
	
	.search__input {
	   width:100%;
       max-width: 250px;
	 }
	 .navbar-default .navbar-nav > li > a:hover{
	 	border-bottom:3px solid black !Important;
	 }
	 .navbar-nav>li>.dropdown-menu{
	 	margin-top:10px !important;
	 }
	 .slider-wrap{
		position: relative;
	    left: -150px;
	    width: 115%;
	 }
	 .rnews .fw-info p:first-child{
	 	  margin-bottom: 3px !important;
		  padding-top: 0px !important;
	 }
	 .rnews .fw-info p:last-child{
	 	  margin-bottom: 0px !important;
		  padding-top: 0px !important;
	 }
	 .sponsored {
	    padding-top: 20px !important;
	 }
	 #prj-start{
	 	position: relative;
	    left: -150px;
	    width: 115%;
	 }
	 #prj-start .col-md-12.col-sm-12{
	    width: 110%;
	 }
	 #sproducts .pc-wrap, #sproducts .product-item{
	 	margin-bottom:0px;
	 }
	 .featured-products.sec .slick-prev{
	 	left:-10px !Important;
	 }
	 .featured-products.sec .filter{
	 	margin-bottom:0px !Important;
	 }
	 .trending-pr-row{
	 	height: 240px;
    	overflow: hidden;
	 }
	 .featured-pr-row{
	 	height: 270px;
    	overflow: hidden;
	 }

}

@media only screen and (min-width: 768px) and (max-width: 991px) {
	.slider-wrap {
	    position: relative;
	    left: -15px !important;
	    width: 104.1% !important;
	}
	#prj-start {
		left: inherit !important;
	    width: inherit !important;
	}
	.navbar-nav {
	     margin: -0px 0px 0px 20px;
	}
	.ffilter li a{
		font-size:15px !important;
	}
	.sfilter{
		width:1100px;
	}
	.featured-pr-row {
	    height: 230px;
	    overflow: hidden;
	    padding-right: 20px;
	    padding-left: 20px;
	}
	.featured-pr-row .isotope-item{
		margin-bottom: 20px;
	}
	.featured-pr-row .slick-next{
	    right: -20px;
	}
	.featured-pr-row .slick-next, .featured-pr-row .slick-prev{
		margin-top: -20px !important;
	}
	.trending-pr-row .slick-next, .trending-pr-row .slick-prev{
		margin-top: -20px !important;
	}
	.trending-pr-row .isotope-item{
		margin-bottom: 20px;
	}
	
	h5.heading {
		margin-top:10px;
	}
	.featured-pr-row .img-cover{
		height:100px !important;
		overflow: hidden;
	}
	.trending-pr-row {
	    height: 185px;
	    overflow: hidden;
	    padding-right: 20px;
	    padding-left: 20px;
		padding-top:10px;
	}
	.trending-pr-row .slick-prev{
	   left: -20px !important;
	   margin-left: -10px;
	}
}

@media only screen and (min-width: 768px) and (max-width: 768px){
	header {
    	height: 59px !important;
	}
	#undefined-sticky-wrapper {
	    max-height: 59px !important;
	}
	.navbar-nav>li>.dropdown-menu {
	    margin-top: -10px !important;
	}
	.header-xtra {
	    margin-right: 20px;
	}
	.featured-pr-row .isotope-item .elem{
		padding-top: 0px !important;
	}
	.featured-products .isotope-item .elem{
		width:100%;
		padding: 20px;
	}
	.featured-pr-row .slick-next, .featured-pr-row .slick-prev {
		margin-top:-50px !important;
	}
	.filter li {
	    width: 100%;
	    text-align: center;
	}
	.isotope_sec .felem {
    	text-align: center !important;
	}
	
	 .trending-pr-row{
	 	height: 240px;
    	overflow: hidden;
	 }
	 .featured-pr-row{
	 	height: 250px;
    	overflow: hidden;
	 }
	 #isotope .pc-wrap{
	 	height: 225px;
    	float: left;
	 }
	 #prj-start{
	    left: 0px !important;
	    width: 100% !important;
	 }
	 #prj-start .col-md-12.col-sm-12 {
	    width: 100% !important;
	 }
	 	.navbar-nav {
	     margin: -5px 0px 0px 20px !important;
	}
	h5.heading{
		margin-top: 10px;
	}
	.trending-pr-row {
		height:230px !important;
	}
	.trending-pr-row .slick-next, .trending-pr-row .slick-prev  {
		margin-top:-50px !important;
	}
	.featured-pr-row .isotope-item .elem{
		padding-left:0px !important;
		padding-right:0px !important;
	}
	.featured-pr-row .isotope-item.featuredprd .elem{
		padding-left:20px !important;
		padding-right:20px !important;
	}
	.trending-pr-row .isotope-item.irrigation .elem{
		padding-left:20px !important;
		padding-right:20px !important;
	}
	.trending-pr-row .isotope-item .elem{
		padding-left:0px !important;
		padding-right:0px !important;
	}
}
@media only screen and (min-width: 991px) and (max-width: 992px) {
	.slider-wrap {
	    position: relative;
	    left: -15px !important;
	    width: 105% !important;
	}
	#prj-start {
		left: inherit !important;
	    width: inherit !important;
	}
	.navbar-nav {
		margin: 0px 0px 0px 20px !important;
	}
	.ffilter li a{
		font-size:15px !important;
	}
	.featured-pr-row {
	    height: 270px !important;
	    overflow: hidden;
		padding: 0px 30px;
	}
	.featured-pr-row .isotope-item{
		margin-bottom: 40px;
	}
	#isotope .pc-wrap {
	    height: 240px;
	}
	.featured-pr-row .slick-next, .featured-pr-row .slick-prev{
		margin-top:-20px;
	} 
	.sfilter{
		  width: 1150px;
	}
	.trending-pr-row {
	    height: 230px;
	    overflow: hidden;
		padding-left:20px;
	}
	.trending-pr-row .isotope-item{
		    margin: 20px 0px;
	}
	.trending-pr-row .slick-next, .trending-pr-row .slick-prev{
		margin-top:-30px;
	} 
}

@media only screen and (min-width: 992px) and (max-width: 1023px) {
	.container.mob-nopad{
		padding-left: 15px !important;
    	padding-right: 15px !important;
	}
	.slider-wrap {
	    position: relative;
	    left: -30px !important;
	    width: 100% !important;
	}
	#prj-start {
	    left: -30px!important;
	    width: 100% !important;
	}
	.featured-pr-row .isotope-item{
		margin-bottom: 40px;
	}
	.trending-pr-row .isotope-item{
		margin-bottom: 40px;
		margin-top:20px;
	}
	#prj-start-par.featured-pad-r{
		padding-right: 15px !important;
	}
	.navbar-header {
	    margin-left: 30px;
	}
	.fprod-slider, .sprod-slider{
		padding-left:30px;
		padding-right:30px;
	}
	.featured-pr-row .slick-next {
		right:5px !Important;
		margin-top: -20px;
	}
	.featured-pr-row .slick-prev {
		left:10px !Important;
		margin-top: -20px;
	}
	
	.trending-pr-row .slick-next {
		margin-top:-20px;
		margin-right:10px !Important;
	}
	.trending-pr-row .slick-prev {
		margin-top:-20px;
		margin-left: 10px !Important;
	}
	.navbar-default .header-xtra {
    	margin-right: 30px;
	}
	.navbar-nav {
	    margin: -5px 0px 0px 70px !important;
	}
	#ad1 {
	    margin-top: 0px;
	}
	.filter li a {
		font-size: 14px;
	}
	.filter.sfilter{
		width: 1100px;
	}
	.rm-on-mob{
		display:none;
	}
	.mob-wide{
		width:100% !important;
	}
}
@media only screen and (min-width: 1024px)  and (max-width: 1200px)  {
	.navbar-nav{
	   margin: -15px 0px 0px 34px;
	}
	.view-online{
		margin-left:10px !important;
	}
	.search__input {
       width: 200px;
	 }
	 .sfilter{
	 	width:1100px !important;
	 }
	 .filter li a{
	 	font-size:12px;
	 }
	 .sponsored{
	 	padding-top:50px !important;
		
	 }
	 .trending-links{
		 font-size: 9px;
	    line-height: 10px !important;
	}
	.trending-links:hover {
	    font-size: 8.5px;
	}
	 .navbar-nav>li>.dropdown-menu{
	 	margin-top:0px !important;
	 }
	 .nav > li > a {
    	padding: 18px 17px;
	 }
	 .slider-wrap{
		position: relative;
	    left: -150px;
	    width: 120%;
	 }
	 #prj-start{
	 	position: relative;
	    left: -150px;
	    width: 120%;
	 }
	 #prj-start .col-md-12.col-sm-12{
	    width: 110%;
	 }
	 .trending-pr-row{
	 	height: 240px;
    	overflow: hidden;
	 }
	 .featured-pr-row{
	 	height: 270px;
    	overflow: hidden;
	 }
	 .featured-pr-row .slick-prev{
	 	left:-7px !important;
	 }
	 #isotope .pc-wrap{
	 	height: 265px;
    	float: left;
	 }
}
/* IPad */
@media only screen and (min-width: 1024px) and (max-width: 1024px){
	 .sponsored {
	    padding-top: 20px !important;
	 }
	 .slider-wrap {
	    width: 123% !important;
	}
	#prj-start{
	    width: 123% !important;
	}
	.sticky-wrapper.is-sticky .navbar-nav{
		    margin: -10px 0px 0px 34px !important;
	}
	/* styles for '...' */ 
	.elipsed-line-cut {
	  overflow: hidden;
	  position: relative; 
	  line-height: 1.2em;
	  max-height: 3.6em; 
	  text-align: left;  
	  margin-right: -1em;
	  padding-right: 1em;
	}
	/* create the ... */
	.elipsed-line-cut:before {
	  content: '...';
	  position: absolute;
	  right: 10px;
	  bottom: 0;
	}
	/* hide ... if we have text, which is less than or equal to max lines */
	.elipsed-line-cut:after {
	  content: '';
	  position: absolute;
	  right: 10px;
	  width: 1em;
	  height: 1em;
	  margin-top: 2em;
	  background: white;
	}
	
	.featured-products.sec .filter {
	    width: 1150px;
	}
	 .trending-pr-row{
	 	height: 210px;
    	overflow: hidden;
		padding-top: 20px;
	 }
	 .trending-pr-row .slick-next{
	 	right: -10px !important;
	 }
	 .trending-pr-row .slick-prev{
	 	left: -30px !Important;
		    margin-left: -20px;
	 }
	 .trending-pr-row .slick-next, .trending-pr-row .slick-prev{
	 	    margin-top:-20px !Important;
	 }
	 .trending-pr-row  .rm-on-mob{
	 	display:none !important;
	 }
	 .trending-pr-row  .mob-wide{
	 	margin-left:10% !important;
	 }
	 .featured-pr-row{
	 	height: 270px;
    	overflow: hidden;
	 }
	 .featured-pr-row .slick-prev{
	 	left:-7px !important;
	 }
	 #isotope .pc-wrap{
	 	height: 265px;
    	float: left;
	 }
}


@media only screen and (min-width: 1200px)  and (max-width: 1439px)  {
	.navbar-brand > img {
		padding-top: 10px;
	}
}
@media only screen and (min-width: 1200px)  and (max-width: 1440px)  {
	.navbar-nav{
		    margin: -4px 0px 0px 34px;
	}
	.search__input {
       width: 250px;
	 }  
	 .filter li a{
	 	font-size:14px;
	 }
	 .trending-links{
		 font-size: 10.5px;
	    line-height: 10px !important;
	}
	.trending-links:hover {
	    font-size: 10px;
	}
	  .ffilter.filter li a{
	  	padding-bottom: 15px !important;
	  }
	 .featured-pr-row .slick-prev{
	 	left:-15px !important;
	 }
	 .featured-products.sec .slick-next {
		    right: 0px;
		}
	 .nav > li > a {
    	padding: 18px 30px;
	 }
	 .slider-wrap{
		position: relative;
	    left: -150px;
	    width: 115%;
	 }
	 #prj-start{
	 	position: relative;
	    left: -150px;
	    width: 115%  !important;
	 }
	 #prj-start .col-md-12.col-sm-12{
	    width: 110%;
	 }
	 .featured-products.sec .filter li a{
	 	    padding: 18px 15px;
	 }
	 .trending-pr-row{
	 	height: 240px;
    	overflow: hidden;
	 }
	 .featured-pr-row{
	 	height: 270px;
    	overflow: hidden;
	 }
	 #isotope .pc-wrap{
	 	height: 265px;
    	float: left;
	 }
}
@media only screen and (width: 1440px){
	.container{
		width:1440px;
		padding: 0px 62px;
		margin:0px;
	}
	.navbar-brand > img{
		height: auto;
	    width: 330px;
	}
	.ffilter.filter li a{
		font-size:20px;
		padding-bottom: 15px !important;
	}
	.featured-pr-row .slick-prev{
	 	left:-7px !important;
	 }
	.c-text{
		padding:0px 174px;
	}
	
	.c-text h3{
		max-width:500px;		
	}
	 .featured-products.sec .filter li a{
	 	    padding: 18px 15px;
	 }
	 
	 .trending-links{
		 font-size: 12px;
	    line-height: 22px !important;
		}
	 .trending-pr-row{
	 	height: 240px;
    	overflow: hidden;
	 }
	 .featured-pr-row{
	 	height: 270px;
    	overflow: hidden;
	 }
	 #isotope .pc-wrap{
	 	height: 265px;
    	float: left;
	 }
	 .sponsored{
	 	padding-top:20px !important;
		padding-bottom:20px !important;
	 }
}

@media only screen and (min-width: 1441px) {
	 .container{
		width:1440px;
		padding: 0px 62px;
		margin:0px auto;
	} 
	.navbar-brand > img{
		height: auto;
	    width: 330px;
	}
	.navbar-nav{
		    margin: -3px 0px 0px 34px;
	}
	 .nav > li > a {
    	padding: 18px 35px;
	 }
	 .navbar > .container .navbar-brand{
	 	/*margin-left:50px;*/
	 }
	 .trending-links{
		 font-size: 12px;
	    line-height: 22px !important;
		}
	  .featured-pad-r{
	  	padding-right:50px;
	  }
	  .ffilter.filter li a{
	  	padding-bottom: 15px !important;
	  }
	 .featured-pr-row .slick-prev{
	 	left:-7px !important;
	 }
	 #prj-start{
	  	width: 100%;
	 }
	 
	.c-text{
		padding:0px 174px;
	}
	 .featured-products.sec .filter li a{
	 	    padding: 18px 15px;
	 }
	
	.c-text h3{
		max-width:900px;		
	}
	 .trending-pr-row{
	 	height: 240px;
    	overflow: hidden;
	 }
	 .featured-pr-row{
	 	height: 265px;
    	overflow: hidden;
	 }
	 #isotope .pc-wrap{
	 	height: 265px;
    	float: left;
	 }
	 .sponsored{
	 	padding-top:20px !important;
		padding-bottom:20px !important;
	 }
	.navbar-default .navbar-nav > li > a:hover{
		border-bottom:5px solid black;
	}
    
}

.tparrows{
	display:none !important;
}
.post-excerpt h3{
	color:#00240f;
	font-size:18px;
	line-height: normal;
    height: 50px;
}
.post-excerpt h4{
	  font-size: 10px;
	  color: #35393e;
}
.post-excerpt p{
	font-size:14px;
	color:#35393e;
	height: 30px;
	    overflow: hidden;
}

	 .featured-products.sec .filter li a.selected:after{
	 	    border-color: #cccccc transparent !important;
	 }

.mobile-signup{
	background:#f4f4f4; padding:17px 40px;
}
.mobile-signup p{
	text-align:center; font-size: 12px; font-weight: 600; color:#2e2e2e; text-transform: capitalize;
	margin-bottom:20px;
}
.mobile-signup input{
	width:216px; height:28px;line-height: 28px;
	border: solid 1px #979797;
    border-radius: 0px !important;
	padding: 0 10px !important;
}
.mobile-signup input::placholder{
	margin-bottom:5px;
	line-height: 28px;
}
.mobile-signup button{
	width: 70px; height:28px; float:right; margin-left:0px; background:#1b8047; border-radius:0px; font-size:10px; line-height:10px;
}

.mob-menu-open .bar1 {
  -webkit-transform: rotate(-45deg) translate(-3px, 6px);
  transform: rotate(-45deg) translate(-3px, 6px);
}

.mob-menu-open .bar2 {opacity: 0;}

.mob-menu-open .bar3 {
  -webkit-transform: rotate(45deg) translate(-3px, -6px);
  transform: rotate(45deg) translate(-3px, -6px);
}

.navbar-default .navbar-toggle:focus, .navbar-default .navbar-toggle:hover{
	background:none;
}


/*CAROUSEL*/

.carousel-inner .item.active,
.carousel-inner .next,
.carousel-inner .prev {
  display: flex;
}

.carousel-inner .right.active,
.carousel-inner .next {
  transform: translateX(25%);
}

.carousel-inner .left.active, 
.carousel-inner .prev {
  transform: translateX(-25%);
}
  
.carousel-inner .right,
.carousel-inner .left{ 
  transform: translateX(0);
  
}


input {
    -webkit-appearance: none !important;
	-webkit-border-radius:0px !important;
}
.morenews-wrap h6{
	    margin-bottom: 0px;
    max-height: 25px;
    overflow: hidden;
}
.clients-section .col-md-4{
	padding-right:12.5px !important;
	padding-left:12.5px !important;
}
.trending-links{
	color:#1b8047; line-height: 22px;
}

.trending-links:hover{
	text-decoration:underline;
	font-weight:bold;
}

@-moz-document url-prefix() {
    .navbar-default .navbar-nav > li > a {
        font-weight:500;
    }
	.navbar-default .navbar-nav > li > a:hover{
		border-bottom:5px solid black;
	}
}

@media only screen and (min-width: 1600px) {
	
	@media screen and (min-color-index:0) and(-webkit-min-device-pixel-ratio:0)
	{ @media {
		.nav > li > a {
		    padding: 12px 17px;
		}
	}}
}