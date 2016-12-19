/* Off the Shelf v.1.1.5 Style Index

1. Default and Reset styles
2. Global elements
- 2.1 Buttons
3. Fonts and Headings
- 3.1 Fonts
- 3.2 Headings
4. Content Blocks used for positioning
5. Landing page header and banner
- 5.1 Header
- 5.2 Banner
6. Content
- 6.1 Companies
- 6.2 Features
- 6.3 Testimonials
- 6.4 Screenshots
- 6.5 A Word from the Author
- 6.6 Newsletter
- 6.7 Pricing Table
- 6.8 Video
7. Social elements
- 7.1 Contact form
8. Landing page footer 

/*------------------------------------------------------------------------------------------*/
/* 1. Defaults & Reset of specific styles across browsers */
/*------------------------------------------------------------------------------------------*/

*, *:before, *:after { -webkit-box-sizing: border-box; -moz-box-sizing: border-box; box-sizing: border-box; }

body, div, dl, dt, dd, ul, ol, li, h1, h2, h3, h4, h5, h6, pre, form, blockquote, th, td { margin: 0; padding: 0; font-size: 13px; direction: ltr; }

body {
margin:0;
padding:0;
background:<?php echo $o['background_base_color']; ?>;
font-family: 'Open Sans', sans-serif, Arial, Helvetica;
color:#333;
-webkit-font-smoothing: antialiased; 	
}

.row {
width:940px;
margin:0 auto;	
padding:45px 0 45px 0;	
overflow:hidden;
}

.row img {
height: auto;
max-width: 100%;
}

a { color: <?php echo $o['link_color']; ?>; text-decoration: none; line-height: inherit; }

a:hover { color: <?php $o['link_color_hover']; ?>; }

a:focus { color: <?php $o['link_color_active']; ?>; }

a img {
border:none;
}


/*------------------------------------------------------------------------------------------*/
/* 2. Global elements */
/*------------------------------------------------------------------------------------------*/

.background_grey {
background:#f1f1f1;
border-top:1px solid #e5e5e5;
border-bottom:1px solid #e5e5e5;
}

.background_white {
background:#fff;
border-bottom:1px solid #e5e5e5;
}

.hint {
font-size:0.9em;
color:<?php echo @$o['banner_secondary_text_color']; ?>;
}

.last {
margin-right:0!important;
}

.left {
float:left;
}

.right {
float:right;
}


/* 2.1 Buttons */

.button_buy {
padding:40px 0 0 0;
}

.button_buy a {
background: #97bf0f; /* Old browsers */
/* IE9 SVG, needs conditional override of 'filter' to 'none' */
background: url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiA/Pgo8c3ZnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgdmlld0JveD0iMCAwIDEgMSIgcHJlc2VydmVBc3BlY3RSYXRpbz0ibm9uZSI+CiAgPGxpbmVhckdyYWRpZW50IGlkPSJncmFkLXVjZ2ctZ2VuZXJhdGVkIiBncmFkaWVudFVuaXRzPSJ1c2VyU3BhY2VPblVzZSIgeDE9IjAlIiB5MT0iMCUiIHgyPSIwJSIgeTI9IjEwMCUiPgogICAgPHN0b3Agb2Zmc2V0PSIwJSIgc3RvcC1jb2xvcj0iIzk3YmYwZiIgc3RvcC1vcGFjaXR5PSIxIi8+CiAgICA8c3RvcCBvZmZzZXQ9IjEwMCUiIHN0b3AtY29sb3I9IiM3M2E3MjYiIHN0b3Atb3BhY2l0eT0iMSIvPgogIDwvbGluZWFyR3JhZGllbnQ+CiAgPHJlY3QgeD0iMCIgeT0iMCIgd2lkdGg9IjEiIGhlaWdodD0iMSIgZmlsbD0idXJsKCNncmFkLXVjZ2ctZ2VuZXJhdGVkKSIgLz4KPC9zdmc+);
background: -moz-linear-gradient(top,  #97bf0f 0%, #73a726 100%); /* FF3.6+ */
background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#97bf0f), color-stop(100%,#73a726)); /* Chrome,Safari4+ */
background: -webkit-linear-gradient(top,  #97bf0f 0%,#73a726 100%); /* Chrome10+,Safari5.1+ */
background: -o-linear-gradient(top,  #97bf0f 0%,#73a726 100%); /* Opera 11.10+ */
background: -ms-linear-gradient(top,  #97bf0f 0%,#73a726 100%); /* IE10+ */
background: linear-gradient(to bottom,  #97bf0f 0%,#73a726 100%); /* W3C */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#97bf0f', endColorstr='#73a726',GradientType=0 ); /* IE6-8 */
font-family: 'Bree Serif', serif;
color:#fff;	
font-size:2.0em;
text-shadow:0 -1px #35490e;
display:inline-block;
border-radius:5px;
-webkit-border-radius:5px;
-moz-border-radius:5px;
box-shadow:0 1px 3px #181818;
}

#author .button_buy {
clear:both;
padding:0;
margin:0 0 0 135px;
}

#author .button_buy a {
box-shadow:0 1px 2px #818181;
}

.button_buy a:hover,  a.button_buy_table:hover {
background: #73a726; /* Old browsers */
/* IE9 SVG, needs conditional override of 'filter' to 'none' */
background: url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiA/Pgo8c3ZnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgdmlld0JveD0iMCAwIDEgMSIgcHJlc2VydmVBc3BlY3RSYXRpbz0ibm9uZSI+CiAgPGxpbmVhckdyYWRpZW50IGlkPSJncmFkLXVjZ2ctZ2VuZXJhdGVkIiBncmFkaWVudFVuaXRzPSJ1c2VyU3BhY2VPblVzZSIgeDE9IjAlIiB5MT0iMCUiIHgyPSIwJSIgeTI9IjEwMCUiPgogICAgPHN0b3Agb2Zmc2V0PSIwJSIgc3RvcC1jb2xvcj0iIzczYTcyNiIgc3RvcC1vcGFjaXR5PSIxIi8+CiAgICA8c3RvcCBvZmZzZXQ9IjEwMCUiIHN0b3AtY29sb3I9IiM5N2JmMGYiIHN0b3Atb3BhY2l0eT0iMSIvPgogIDwvbGluZWFyR3JhZGllbnQ+CiAgPHJlY3QgeD0iMCIgeT0iMCIgd2lkdGg9IjEiIGhlaWdodD0iMSIgZmlsbD0idXJsKCNncmFkLXVjZ2ctZ2VuZXJhdGVkKSIgLz4KPC9zdmc+);
background: -moz-linear-gradient(top,  #73a726 0%, #97bf0f 100%); /* FF3.6+ */
background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#73a726), color-stop(100%,#97bf0f)); /* Chrome,Safari4+ */
background: -webkit-linear-gradient(top,  #73a726 0%,#97bf0f 100%); /* Chrome10+,Safari5.1+ */
background: -o-linear-gradient(top,  #73a726 0%,#97bf0f 100%); /* Opera 11.10+ */
background: -ms-linear-gradient(top,  #73a726 0%,#97bf0f 100%); /* IE10+ */
background: linear-gradient(to bottom,  #73a726 0%,#97bf0f 100%); /* W3C */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#73a726', endColorstr='#97bf0f',GradientType=0 ); /* IE6-8 */
}

.button_buy span {
display:block;
float:left;
}

.button_price {
background:url(../images/bg_button_green.png) no-repeat right -5px;
padding:6px 15px 6px 15px;
border-top-left-radius:5px;	
-moz-border-radius-topleft:5px;	
-webkit-border-top-left-radius:5px;
border-bottom-left-radius:5px;	
-moz-border-radius-bottomleft:5px;	
-webkit-border-bottom-left-radius:5px;
box-shadow:inset 0 1px #9cc015;
}

.button_buy a:hover .button_price {
background:url(../images/bg_button_green.png) no-repeat right -71px;
}

.button_text {
box-shadow:inset 0 1px #9cc015;
padding:6px 15px 6px 10px; 
border-top-right-radius:5px;	
-moz-border-radius-topright:5px;	
-webkit-border-top-right-radius:5px;
border-bottom-right-radius:5px;	
-moz-border-radius-bottomright:5px;	
-webkit-border-bottom-right-radius:5px;
}

a.button_buy_table {
background: #97bf0f; /* Old browsers */
/* IE9 SVG, needs conditional override of 'filter' to 'none' */
background: url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiA/Pgo8c3ZnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgdmlld0JveD0iMCAwIDEgMSIgcHJlc2VydmVBc3BlY3RSYXRpbz0ibm9uZSI+CiAgPGxpbmVhckdyYWRpZW50IGlkPSJncmFkLXVjZ2ctZ2VuZXJhdGVkIiBncmFkaWVudFVuaXRzPSJ1c2VyU3BhY2VPblVzZSIgeDE9IjAlIiB5MT0iMCUiIHgyPSIwJSIgeTI9IjEwMCUiPgogICAgPHN0b3Agb2Zmc2V0PSIwJSIgc3RvcC1jb2xvcj0iIzk3YmYwZiIgc3RvcC1vcGFjaXR5PSIxIi8+CiAgICA8c3RvcCBvZmZzZXQ9IjEwMCUiIHN0b3AtY29sb3I9IiM3M2E3MjYiIHN0b3Atb3BhY2l0eT0iMSIvPgogIDwvbGluZWFyR3JhZGllbnQ+CiAgPHJlY3QgeD0iMCIgeT0iMCIgd2lkdGg9IjEiIGhlaWdodD0iMSIgZmlsbD0idXJsKCNncmFkLXVjZ2ctZ2VuZXJhdGVkKSIgLz4KPC9zdmc+);
background: -moz-linear-gradient(top,  #97bf0f 0%, #73a726 100%); /* FF3.6+ */
background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#97bf0f), color-stop(100%,#73a726)); /* Chrome,Safari4+ */
background: -webkit-linear-gradient(top,  #97bf0f 0%,#73a726 100%); /* Chrome10+,Safari5.1+ */
background: -o-linear-gradient(top,  #97bf0f 0%,#73a726 100%); /* Opera 11.10+ */
background: -ms-linear-gradient(top,  #97bf0f 0%,#73a726 100%); /* IE10+ */
background: linear-gradient(to bottom,  #97bf0f 0%,#73a726 100%); /* W3C */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#97bf0f', endColorstr='#73a726',GradientType=0 ); /* IE6-8 */
font-family: 'Bree Serif', serif;
color:#fff;
font-size:1.4em;
text-shadow:0 -1px #35490e;
display:inline-block;
margin:20px 0 20px 0;
padding:7px 25px 7px 25px;
border-radius:5px;
-webkit-border-radius:5px;
-moz-border-radius:5px;
}


/*------------------------------------------------------------------------------------------*/
/* 3. Fonts and Headings */
/*------------------------------------------------------------------------------------------*/


/* 3.1 Fonts */

h1, h2 {
font-family: 'Bree Serif', serif;
}

#main_content h2 {
margin-bottom:10px;	
}

#main_content h3 {
font-family: 'Open Sans', sans-serif, Arial, Helvetica;
font-size:1.2em;
font-weight:normal;
color:#999;
}

h4, h5, h6 { 
font-family: 'Open Sans', sans-serif, Arial, Helvetica;
font-weight: bold; 
font-style: normal; 
color: #222222; 
text-rendering: optimizeLegibility; 
line-height: 1.1; 
margin-bottom: 13px; 
margin-top: 13px; 
}

h1 small, h2 small, h3 small, h4 small, h5 small, h6 small { 
font-size: 60%; 
color: #6f6f6f; 
line-height: 0; 
}

h1{font-size: 3.2em;}

h2{font-size: 1.7em;}

h3{font-size: 1.6em;}

h4{font-size: 1.4em;}

h5{font-size: 1.2em;}


/* 3.2 Headings */

#logo {
color:<?php echo $o['banner_text_color']; ?>;
}

#logo img {
float:left;
margin:0 15px 0 0;	
}

#logo h1 {
font-family: 'Open Sans', sans-serif, Arial, Helvetica;
font-weight:400;
font-size:2.1em;
display:inline;
margin:0 10px 0 0;	
}

#logo h2 {
font-family: 'Open Sans', sans-serif, Arial, Helvetica;
font-weight:300;
font-size:1.2em;
font-style:italic;
display:inline;
margin:0 10px 0 0;	
}

#banner .one_half h1 {
line-height:1.1em;
margin:25px 0 15px 0;
}

h2.subheader {
font-family: 'Open Sans', sans-serif, Arial, Helvetica;
font-weight:300;
font-size:1.4em;
margin-bottom:15px;
}

#main_content h2 {
font-family: 'Bree Serif', serif;	
font-weight:400;
color:#333;
font-size:2.0em;
}

.section_title {
background:url(../images/bg_border.gif) repeat-x 0 22px;
text-align:center;
}

.section_title span {
background:#fff;
padding:0 25px 0 25px;	
}

.background_grey .section_title span {
background:#f1f1f1;
padding:0 25px 0 25px;
}

#companies h3 {
font-size:1.0em;
font-weight:300;
text-transform:uppercase;
color:#666;
margin:0 55px 0 0;
padding:7px 0 0 0;
float:left;
}

#pricing h4 {
font-family: 'Bree Serif', serif;
color:#666;
text-align:center;
font-weight:normal;
font-size:1.6em;
}


/*------------------------------------------------------------------------------------------*/
/* 4. Content blocks used to position content */
/*------------------------------------------------------------------------------------------*/


.one_half, .one_third, .two_thirds, .three_fourths, .one_fourth {
    float: left;
    margin: 0 20px 20px 0;
    position: relative;
}

.one_half {
    width: 460px;
}

.one_third {
    width: 300px;
}

.two_thirds {
    width: 620px;
}

.one_fourth {
    width: 220px;
}

.three_fourths {
    width: 700px;
}


/*------------------------------------------------------------------------------------------*/
/* 5. Landing page header and banners */
/*------------------------------------------------------------------------------------------*/

/* 5.1 Header */

#header_region {
padding:0 0 35px 0;
overflow:hidden;	
}

/* 5.2 Banner */

#banner {
<?php if($o['banner_background_select'] == 'static') { ?>
background:url(../images/backgrounds/<?php echo $o['banner_background_image']; ?>) no-repeat center top #999;
background-attachment:fixed;
background-size:cover;
-moz-background-size:cover;
-webkit-background-size:cover;
-o-background-size:cover;
<?php } elseif ($o['banner_background_select'] == 'texture') { ?>
background:url(../images/textures/<?php echo $o['banner_background_texture']; ?>) repeat #999;
<?php } elseif ($o['banner_background_select'] == 'gradient') { ?>
background: <?php echo $o['banner_background_gradient-start']; ?>;
background: -moz-linear-gradient(top, <?php echo $o['banner_background_gradient-start']; ?> 0%, <?php echo $o['banner_background_gradient-end']; ?> 100%);
background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,<?php echo $o['banner_background_gradient-start']; ?>), color-stop(100%,#ab2210));
background: -webkit-linear-gradient(top, <?php echo $o['banner_background_gradient-start']; ?> 0%,<?php echo $o['banner_background_gradient-end']; ?> 100%);
background: -o-linear-gradient(top, <?php echo $o['banner_background_gradient-start']; ?> 0%,<?php echo $o['banner_background_gradient-end']; ?> 100%);
background: -ms-linear-gradient(top, <?php echo $o['banner_background_gradient-start']; ?> 0%,<?php echo $o['banner_background_gradient-end']; ?> 100%);
background: linear-gradient(to bottom, <?php echo $o['banner_background_gradient-start']; ?> 0%,<?php echo $o['banner_background_gradient-end']; ?> 100%);
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='<?php echo $o['banner_background_gradient-start']; ?>', endColorstr='<?php echo $o['banner_background_gradient-end']; ?>',GradientType=0 );
<?php } elseif ($o['banner_background_select'] == 'color') { ?>
background:<?php echo $o['banner_background_color']; ?>;
<?php } ?>
color:<?php echo $o['banner_text_color']; ?>;
padding:10px 0 10px 0;
}

#banner .row {
clear:both;
}

.content_page #banner .row {
padding-bottom:10px;
}

#shelf {
background:url(../images/shelf.png) no-repeat center bottom;
padding-bottom:28px;
text-align:center;
}

#shelf img {
display:inline;	
}



/*------------------------------------------------------------------------------------------*/
/* 6. Content */
/*------------------------------------------------------------------------------------------*/

/* 6.1 Companies */

#companies .row {
padding:25px 0 15px 0;
text-align:center;
}

#companies img {
margin:0 25px 0 25px;
display:inline-block;
}


/* 6.2 Features */

#features ul, #features ul li {
list-style:none;
padding:0;
}

#features ul li {
margin-top:20px;
margin-bottom:20px;	
}

#features h4 {
font-size:1.3em;
font-weight:normal;
margin-top:0;	
}

#features i {
float:left;
margin:0 15px 15px 0;
width: 1.25em;
color:<?php echo $o['icon_font_color']; ?>;
text-align:center;
height: auto;
line-height: normal;
vertical-align: baseline;
background-image: none;
background-position: 0 0;
background-repeat: repeat;
}


/* 6.3 Testimonials */

#testimonials blockquote {
margin:0 20px 0 0;
padding: 9px 0 0 0;
}

blockquote img {
background:#fff;
margin:-25px 35px 0 15px;
padding:3px;
float:left;
box-shadow:0 1px 3px #d3d3d3;
}

#testimonials footer {
background:url(../images/sprite.png) no-repeat 90px 0;
padding:10px 0 0 0;
}

blockquote div {
font-weight:bold;
color:<?php echo $o['highlight_font_color']; ?>;
}

blockquote, blockquote p { line-height: 1.5; color: #6f6f6f; }

q {
background:#fff;
display:block;
font-style:italic;
padding:15px 15px 35px 15px;
box-shadow:0 1px 3px #d3d3d3;
}

blockquote cite { display: block; font-size: 12px; color: #555555; }
blockquote cite:before { content: "\2014 \0020"; }
blockquote cite a, blockquote cite a:visited { color: #555555; }

abbr, acronym { text-transform: uppercase; font-size: 90%; color: #222222; border-bottom: 1px solid #ddd; cursor: help; }

abbr { text-transform: none; }


/* 6.4 Screenshots */

#screenshots .image-gallery a {
background:url(../images/bg_zoom.png) no-repeat center center <?php echo $o['gallery_highlight_color']; ?>;
display:block;
margin:0 15px 15px 0;
padding:0!important;
height:auto;
float:left;
box-shadow:0 1px 2px #ccc;
}

#screenshots .image-gallery img {
-moz-transition: opacity .2s linear;
-webkit-transition: opacity .2s linear;
-ms-transition: opacity .2s linear;
-o-transition: opacity .2s linear;
transition: opacity .2s linear;
display:block;
}

#screenshots img:hover {
opacity: 0.05;
filter: alpha(opacity = 05);
}

.list_check {
margin:0 0 0 20px;
}

.list_check li {
background:url(../images/bg_check.png) no-repeat 0 6px;
padding:7px 0 7px 30px;
list-style:none;
overflow:hidden;
}


/* 6.5 A word from the Author */

#author_image {
background:#fff;
margin:0 35px 0 0;
padding:5px;
box-shadow:0 1px 1px #ccc;
}

#book_cover {
display:inline-block;
text-align:center;
}


/* 6.6 Newsletter */

#newsletter.row {
padding:25px 0 25px 0;
}

#newsletter h2 {
width:460px;
margin:0 20px 0 0;
float:left;
color:#737373;
}

#newsletter #e-mail {
width:310px;
height:40px;
color:#999;
border:1px solid #d3d3d3;
border-radius:5px;
-webkit-border-radius:5px;
-moz-border-radius:5px;
padding:10px;
box-shadow: inset 0 2px 3px #ebebeb;
-moz-box-shadow: inset 0 2px 3px #ebebeb;
-webkit-box-shadow: inset 0 2px 3px #ebebeb;
}

#newsletter #submit {
background: #97bf0f; /* Old browsers */
/* IE9 SVG, needs conditional override of 'filter' to 'none' */
background: url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiA/Pgo8c3ZnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgdmlld0JveD0iMCAwIDEgMSIgcHJlc2VydmVBc3BlY3RSYXRpbz0ibm9uZSI+CiAgPGxpbmVhckdyYWRpZW50IGlkPSJncmFkLXVjZ2ctZ2VuZXJhdGVkIiBncmFkaWVudFVuaXRzPSJ1c2VyU3BhY2VPblVzZSIgeDE9IjAlIiB5MT0iMCUiIHgyPSIwJSIgeTI9IjEwMCUiPgogICAgPHN0b3Agb2Zmc2V0PSIwJSIgc3RvcC1jb2xvcj0iIzk3YmYwZiIgc3RvcC1vcGFjaXR5PSIxIi8+CiAgICA8c3RvcCBvZmZzZXQ9IjEwMCUiIHN0b3AtY29sb3I9IiM3M2E3MjYiIHN0b3Atb3BhY2l0eT0iMSIvPgogIDwvbGluZWFyR3JhZGllbnQ+CiAgPHJlY3QgeD0iMCIgeT0iMCIgd2lkdGg9IjEiIGhlaWdodD0iMSIgZmlsbD0idXJsKCNncmFkLXVjZ2ctZ2VuZXJhdGVkKSIgLz4KPC9zdmc+);
background: -moz-linear-gradient(top,  #97bf0f 0%, #73a726 100%); /* FF3.6+ */
background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#97bf0f), color-stop(100%,#73a726)); /* Chrome,Safari4+ */
background: -webkit-linear-gradient(top,  #97bf0f 0%,#73a726 100%); /* Chrome10+,Safari5.1+ */
background: -o-linear-gradient(top,  #97bf0f 0%,#73a726 100%); /* Opera 11.10+ */
background: -ms-linear-gradient(top,  #97bf0f 0%,#73a726 100%); /* IE10+ */
background: linear-gradient(to bottom,  #97bf0f 0%,#73a726 100%); /* W3C */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#97bf0f', endColorstr='#73a726',GradientType=0 ); /* IE6-8 */
font-family: 'Bree Serif', serif;
color:#fff;	
font-size:1.4em;
text-shadow:0 -1px #35490e;
text-align:center;
float:right;
width:140px;
height:40px;
border:none;
border-radius:5px;
-webkit-border-radius:5px;
-moz-border-radius:5px;
cursor:pointer;
}

#newsletter #submit:hover {
background: #73a726; /* Old browsers */
/* IE9 SVG, needs conditional override of 'filter' to 'none' */
background: url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiA/Pgo8c3ZnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgdmlld0JveD0iMCAwIDEgMSIgcHJlc2VydmVBc3BlY3RSYXRpbz0ibm9uZSI+CiAgPGxpbmVhckdyYWRpZW50IGlkPSJncmFkLXVjZ2ctZ2VuZXJhdGVkIiBncmFkaWVudFVuaXRzPSJ1c2VyU3BhY2VPblVzZSIgeDE9IjAlIiB5MT0iMCUiIHgyPSIwJSIgeTI9IjEwMCUiPgogICAgPHN0b3Agb2Zmc2V0PSIwJSIgc3RvcC1jb2xvcj0iIzczYTcyNiIgc3RvcC1vcGFjaXR5PSIxIi8+CiAgICA8c3RvcCBvZmZzZXQ9IjEwMCUiIHN0b3AtY29sb3I9IiM5N2JmMGYiIHN0b3Atb3BhY2l0eT0iMSIvPgogIDwvbGluZWFyR3JhZGllbnQ+CiAgPHJlY3QgeD0iMCIgeT0iMCIgd2lkdGg9IjEiIGhlaWdodD0iMSIgZmlsbD0idXJsKCNncmFkLXVjZ2ctZ2VuZXJhdGVkKSIgLz4KPC9zdmc+);
background: -moz-linear-gradient(top,  #73a726 0%, #97bf0f 100%); /* FF3.6+ */
background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#73a726), color-stop(100%,#97bf0f)); /* Chrome,Safari4+ */
background: -webkit-linear-gradient(top,  #73a726 0%,#97bf0f 100%); /* Chrome10+,Safari5.1+ */
background: -o-linear-gradient(top,  #73a726 0%,#97bf0f 100%); /* Opera 11.10+ */
background: -ms-linear-gradient(top,  #73a726 0%,#97bf0f 100%); /* IE10+ */
background: linear-gradient(to bottom,  #73a726 0%,#97bf0f 100%); /* W3C */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#73a726', endColorstr='#97bf0f',GradientType=0 ); /* IE6-8 */
}

/* 6.7 Pricing Table */

#pricing_table {
display: table;
padding:30px 0 0 0;
margin: 0 auto;
text-align:center;
}

.pricing_block {
background:#fff;
box-shadow:0 1px 3px #d3d3d3;
text-align:center;
-webkit-transition: all 0.3s ease-out;
-moz-transition: all 0.3s ease-out;
-o-transition: all 0.3s ease-out;
transition: all 0.3s ease-out;
}

.pricing_block:hover {
box-shadow:0 1px 5px #a9a9a9;
}

.pricing_block:hover .pricing {
background:#e2e2e2;
}

#favorite.pricing_block:hover {
box-shadow:0 1px 8px #8c8c8c;
}

#favorite.pricing_block:hover .pricing {
background:#73a826;
}

.pricing {
background:#f8f8f8;
padding:10px 0 10px 0;
border-top:1px solid #e5e5e5;
border-bottom:1px solid #e5e5e5;
-webkit-transition: all 0.3s ease-out;
-moz-transition: all 0.3s ease-out;
-o-transition: all 0.3s ease-out;
transition: all 0.3s ease-out;
}

.pricing_block ul li {
padding:10px 0 10px 0;
border-bottom:1px solid #e5e5e5;
list-style:none;
}

.price {
font-family: 'Bree Serif', serif;
font-size:4.8em;
margin:0;
}

.price span {
font-size:0.5em;
position: relative;
top: -30px;
left: -5px;
}

.price_sub {
font-style:italic;
color:#666;
margin:0 0 10px 0;
}

/*Favorite*/

#favorite.pricing_block {
box-shadow:0 1px 5px #b2b2b2;
padding:10px 0 15px 0;
margin-top:-10px;
}

#favorite .pricing {
background:#90ba14;
color:#fff;
}

#favorite .price_sub {
color:#fff;
}


/* 6.8 Video */

.embed_container {
position: relative;
padding-bottom: 56.25%; /* 16/9 ratio */
margin:20px 0 0 0;
padding-top: 30px; /* IE6 workaround*/
height: 0;
overflow: hidden;
}

.embed_container iframe, .embed_container object, .embed_container embed {
position: absolute;
top: 0;
left: 0;
width: 100%;
height: 100%;
}


/*------------------------------------------------------------------------------------------*/
/* 7. Social Elements */
/*------------------------------------------------------------------------------------------*/

#social_elements ul {
margin:10px 0 0 0;
float:right;	
}

#social_elements li {
    width: 24px;
    height: 24px;
    margin: 0 5px 0 0;
	float:left;
	list-style:none;
	padding:0;
}

#social_elements a span {
    display: none;
}

#social_elements a {
    display: block;
    width: 24px;
    height: 24px;
    padding: 0;
    margin: 0 0 4px 0;
    opacity: 0.5;
    filter: alpha(opacity = 50);
    -webkit-transition: all 0.3s ease-out;
    -moz-transition: all 0.3s ease-out;
    -o-transition: all 0.3s ease-out;
    transition: all 0.3s ease-out;
}

#social_elements a:hover {
    opacity: 0.9;
    filter: alpha(opacity = 90);
}

.facebook {
    background: url(../images/sprite_social_element.png) no-repeat -27px 0;
}

.googleplus {
    background: url(../images/sprite_social_element.png) no-repeat -27px -60px;
}

.twitter {
    background: url(../images/sprite_social_element.png) no-repeat -27px -30px;
}

.stumbleupon {
    background: url(../images/sprite_social_element.png) no-repeat -27px -150px;
}

.youtube {
    background: url(../images/sprite_social_element.png) no-repeat -27px -90px;
}

.vimeo {
    background: url(../images/sprite_social_element.png) no-repeat -27px -120px;
}

.linkedin {
    background: url(../images/sprite_social_element.png) no-repeat -27px -180px;
}

.pinterest {
    background: url(../images/sprite_social_element.png) no-repeat -27px -210px;
}

.rss {
    background: url(../images/sprite_social_element.png) no-repeat -27px -240px;
}

.digg {
    background: url(../images/sprite_social_element.png) no-repeat -27px -270px;
}

.myspace {
    background: url(../images/sprite_social_element.png) no-repeat -27px -300px;
}

.picasa {
    background: url(../images/sprite_social_element.png) no-repeat -27px -330px;
}

.flickr {
    background: url(../images/sprite_social_element.png) no-repeat -27px -360px;
}

.dribbble {
    background: url(../images/sprite_social_element.png) no-repeat -27px -390px;
}

.blogger {
    background: url(../images/sprite_social_element.png) no-repeat -27px -420px;
}

.feedback {
    background: url(../images/sprite_social_element.png) no-repeat -27px -450px;
}


/* 7.1 Contact form */

#contact {
background:#fff;
    width:390px;
    left:0;
    right:0;
    margin:40px auto;
    z-index:99999;
    padding:15px;
    border:5px solid #f1f1f1;
    box-shadow:0 0 5px #333;
    -moz-box-shadow:0 0 5px #333;
    -webkit-box-shadow:0 0 5px #333;
    display: none;
}

label {
display: block;
margin: 10px 0 5px 0;
}

input#contactname, input#contactemail, #contact textarea, input#humanornot {
color:#999;
border:1px solid #d3d3d3;
border-radius:5px;
-webkit-border-radius:5px;
-moz-border-radius:5px;
padding:10px;
box-shadow: inset 0 2px 3px #ebebeb;
-moz-box-shadow: inset 0 2px 3px #ebebeb;
-webkit-box-shadow: inset 0 2px 3px #ebebeb;
padding: 7px 5px 7px 5px;
}

input#contactname, input#contactemail {
width: 200px;
}

#contact textarea {
	font-family: 'Open Sans', sans-serif, Arial, Helvetica;
    width: 350px;
    height: 100px;
    font-size: 100%;
}

input#submitcontact {
background: #97bf0f; /* Old browsers */
/* IE9 SVG, needs conditional override of 'filter' to 'none' */
background: url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiA/Pgo8c3ZnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgdmlld0JveD0iMCAwIDEgMSIgcHJlc2VydmVBc3BlY3RSYXRpbz0ibm9uZSI+CiAgPGxpbmVhckdyYWRpZW50IGlkPSJncmFkLXVjZ2ctZ2VuZXJhdGVkIiBncmFkaWVudFVuaXRzPSJ1c2VyU3BhY2VPblVzZSIgeDE9IjAlIiB5MT0iMCUiIHgyPSIwJSIgeTI9IjEwMCUiPgogICAgPHN0b3Agb2Zmc2V0PSIwJSIgc3RvcC1jb2xvcj0iIzk3YmYwZiIgc3RvcC1vcGFjaXR5PSIxIi8+CiAgICA8c3RvcCBvZmZzZXQ9IjEwMCUiIHN0b3AtY29sb3I9IiM3M2E3MjYiIHN0b3Atb3BhY2l0eT0iMSIvPgogIDwvbGluZWFyR3JhZGllbnQ+CiAgPHJlY3QgeD0iMCIgeT0iMCIgd2lkdGg9IjEiIGhlaWdodD0iMSIgZmlsbD0idXJsKCNncmFkLXVjZ2ctZ2VuZXJhdGVkKSIgLz4KPC9zdmc+);
background: -moz-linear-gradient(top,  #97bf0f 0%, #73a726 100%); /* FF3.6+ */
background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#97bf0f), color-stop(100%,#73a726)); /* Chrome,Safari4+ */
background: -webkit-linear-gradient(top,  #97bf0f 0%,#73a726 100%); /* Chrome10+,Safari5.1+ */
background: -o-linear-gradient(top,  #97bf0f 0%,#73a726 100%); /* Opera 11.10+ */
background: -ms-linear-gradient(top,  #97bf0f 0%,#73a726 100%); /* IE10+ */
background: linear-gradient(to bottom,  #97bf0f 0%,#73a726 100%); /* W3C */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#97bf0f', endColorstr='#73a726',GradientType=0 ); /* IE6-8 */
font-family: 'Bree Serif', serif;
color:#fff;	
font-size:1.4em;
text-shadow:0 -1px #35490e;
text-align:center;
display:block;
width:140px;
height:40px;
margin:10px 0 0 0;
border:none;
border-radius:5px;
-webkit-border-radius:5px;
-moz-border-radius:5px;
cursor:pointer;
}

input#submitcontact:hover {
background: #73a726; /* Old browsers */
/* IE9 SVG, needs conditional override of 'filter' to 'none' */
background: url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiA/Pgo8c3ZnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgdmlld0JveD0iMCAwIDEgMSIgcHJlc2VydmVBc3BlY3RSYXRpbz0ibm9uZSI+CiAgPGxpbmVhckdyYWRpZW50IGlkPSJncmFkLXVjZ2ctZ2VuZXJhdGVkIiBncmFkaWVudFVuaXRzPSJ1c2VyU3BhY2VPblVzZSIgeDE9IjAlIiB5MT0iMCUiIHgyPSIwJSIgeTI9IjEwMCUiPgogICAgPHN0b3Agb2Zmc2V0PSIwJSIgc3RvcC1jb2xvcj0iIzczYTcyNiIgc3RvcC1vcGFjaXR5PSIxIi8+CiAgICA8c3RvcCBvZmZzZXQ9IjEwMCUiIHN0b3AtY29sb3I9IiM5N2JmMGYiIHN0b3Atb3BhY2l0eT0iMSIvPgogIDwvbGluZWFyR3JhZGllbnQ+CiAgPHJlY3QgeD0iMCIgeT0iMCIgd2lkdGg9IjEiIGhlaWdodD0iMSIgZmlsbD0idXJsKCNncmFkLXVjZ2ctZ2VuZXJhdGVkKSIgLz4KPC9zdmc+);
background: -moz-linear-gradient(top,  #73a726 0%, #97bf0f 100%); /* FF3.6+ */
background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#73a726), color-stop(100%,#97bf0f)); /* Chrome,Safari4+ */
background: -webkit-linear-gradient(top,  #73a726 0%,#97bf0f 100%); /* Chrome10+,Safari5.1+ */
background: -o-linear-gradient(top,  #73a726 0%,#97bf0f 100%); /* Opera 11.10+ */
background: -ms-linear-gradient(top,  #73a726 0%,#97bf0f 100%); /* IE10+ */
background: linear-gradient(to bottom,  #73a726 0%,#97bf0f 100%); /* W3C */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#73a726', endColorstr='#97bf0f',GradientType=0 ); /* IE6-8 */
}

#contact_close {
    background: url(../images/controls/close.png) no-repeat;
    width: 20px;
    height: 20px;
    display: block;
    float: right;
    margin: -27px -27px 0 0;
}

#contact_close span {
    display: none;
}

.success {
    background: #a9d26e;
    padding: 5px;
    text-align: center;
    border: 1px solid #79a041;
    border-radius: 5px;
    -webkit-border-radius: 5px;
    -moz-border-radius: 5px;
    color: #fff;
}

.fail {
    background: #a93636;
    padding: 5px;
    text-align: center;
    border: 1px solid #742424;
    border-radius: 5px;
    -webkit-border-radius: 5px;
    -moz-border-radius: 5px;
    color: #fff;
}

a#contact_close_counter {
    display: block;
    padding: 5px;
    text-align: center;
    color: #666;
    text-decoration: none;
}


/*------------------------------------------------------------------------------------------*/
/* 8. Landing Page Footer */
/*------------------------------------------------------------------------------------------*/

#page_footer {
color:#999;	
}

#page_footer.row {
padding:15px 0 15px 0;
}

#page_footer ul, #page_footer p {
display:inline;
margin:0;
padding:0;
}

#page_footer p {
float:right;
}

#page_footer ul li {
display:inline;
padding:0 5px 0 0;
}

#page_footer a {
color:#999;	
}

.scrollup {
    background: url(../images/sprite.png) no-repeat 0 -282px;
    width: 56px;
    height: 56px;
    opacity: 0.4;
    filter: alpha(opacity = 40);
    position: fixed;
    bottom: 30px;
    right: 20px;
    display: none;
    text-indent: -9999px;
}


/*------------------------------------------------------------------------------------------*/
/* 9. Additional styles for jQuery/Foundation Framework plug-ins and other plug-in classes  */
/*------------------------------------------------------------------------------------------*/

.reveal-modal-bg { position: fixed; height: 100%; width: 100%; background: #000; opacity: 0.85; filter: alpha(opacity=85); z-index: 999; display: none; top: 0; left: 0; }

.reveal-modal { background: #fff; visibility: hidden; display: none; top: 100px; left: 50%; margin-left: -260px; width: 520px; position: absolute; z-index: 41; padding: 30px; -webkit-box-shadow: 0 0 10px rgba(0, 0, 0, 0.4); -moz-box-shadow: 0 0 10px rgba(0, 0, 0, 0.4); box-shadow: 0 0 10px rgba(0, 0, 0, 0.4); }
.reveal-modal .close-reveal-modal:not(.button) { font-size: 22px; font-size: 2.2rem; line-height: .5; position: absolute; top: 8px; right: 11px; color: #aaa; text-shadow: 0 -1px 1px rgba(0, 0, 0, 0.6); font-weight: bold; cursor: pointer; }
.reveal-modal.small { width: 30%; margin-left: -15%; }
.reveal-modal.medium { width: 40%; margin-left: -20%; }
.reveal-modal.large { width: 60%; margin-left: -30%; }
.reveal-modal.xlarge { width: 70%; margin-left: -35%; }
.reveal-modal.expand { width: 90%; margin-left: -45%; }
.reveal-modal .row { min-width: 0; margin-bottom: 10px; }
.reveal-modal > :first-child { margin-top: 0; }
.reveal-modal > :last-child { margin-bottom: 0; }

/* The gallery overlay */

#galleryOverlay{
    width:100%;
    height:100%;
    position:fixed;
    top:0;
    left:0;
    opacity:0;
    z-index:99;
    background-color:#222;
    background-color:rgba(0,0,0,0.8);
    overflow:hidden;
    display:none;
    -moz-transition:opacity 0.4s ease;
    -webkit-transition:opacity 0.4s ease;
    transition:opacity 0.4s ease;
}

/* This class will trigger the animation */

#galleryOverlay.visible{
    opacity:1;
}

#gallerySlider{
    height:100%;
    left:0;
    top:0;
    width:100%;
    white-space: nowrap;
    position:absolute;
    -moz-transition:left 0.4s ease;
    -webkit-transition:left 0.4s ease;
    transition:left 0.4s ease;
}

#gallerySlider .placeholder{
    background: url(../images/controls/loading.gif) no-repeat center center;
    height: 100%;
    line-height: 1px;
    text-align: center;
    width:100%;
    display:inline-block;
}

/* The before element moves the
 * image halfway from the top */

#gallerySlider .placeholder:before{
    content: "";
    display: inline-block;
    height: 50%;
    width: 1px;
    margin-right:-1px;
}

#gallerySlider .placeholder img{
    display: inline-block;
    max-height: 100%;
    max-width: 100%;
    vertical-align: middle;
}

#gallerySlider.rightSpring{
    -moz-animation: rightSpring 0.3s;
    -webkit-animation: rightSpring 0.3s;
}

#gallerySlider.leftSpring{
    -moz-animation: leftSpring 0.3s;
    -webkit-animation: leftSpring 0.3s;
}

/* Firefox Keyframe Animations */

@-moz-keyframes rightSpring{
    0%{		margin-left:0px;}
    50%{	margin-left:-30px;}
    100%{	margin-left:0px;}
}

@-moz-keyframes leftSpring{
    0%{		margin-left:0px;}
    50%{	margin-left:30px;}
    100%{	margin-left:0px;}
}

/* Safari and Chrome Keyframe Animations */

@-webkit-keyframes rightSpring{
    0%{		margin-left:0px;}
    50%{	margin-left:-30px;}
    100%{	margin-left:0px;}
}

@-webkit-keyframes leftSpring{
    0%{		margin-left:0px;}
    50%{	margin-left:30px;}
    100%{	margin-left:0px;}
}

/* Arrows */

#prevArrow,#nextArrow{
    border:none;
    text-decoration:none;
    background:url(../images/controls/arrows.png) no-repeat;
    opacity:0.5;
    cursor:pointer;
    position:absolute;
    width:43px;
    height:58px;
    top:50%;
    margin-top:-29px;
}

#prevArrow:hover, #nextArrow:hover{
    opacity:1;
}

#prevArrow{
    background-position:left top;
    left:40px;
}

#nextArrow{
    background-position:right top;
    right:40px;
}

#imageTitle {
    background-color:rgba(0,0,0,0.5);
    color: #fff;
    width: 100%;
    text-align: center;
	position:absolute;
	padding:10px 0 10px 0;
    bottom: 0;
    left: 0;
    z-index: 100000;	   
}



/*------------------------------------------------------------------------------------------*/
/* 11. Responsive Styling Off the Shelf */
/*------------------------------------------------------------------------------------------*/

/* Responsive Video Styling */
.jl_video_container {
    position: relative !important;
    padding-bottom: 56.25% !important;
    padding-top: 30px !important;
    height: 0 !important;
    overflow: hidden !important
}

.jl_video_container embed,
.jl_video_container iframe,
.jl_video_container object {
    position: absolute !important;
    top: 0 !important;
    left: 0 !important;
    width: 100% !important;
    height: 100% !important
}

@media screen and (min-width : 761px ) and (max-width: 1005px) {
    /*Global*/
	
	 .row {
        width: 730px;
        margin: 0 auto;
		padding:25px 0 25px 0;
    }


    .one_half {
        width: 355px;
    }

    .one_third {
        width: 230px;
    }

    .two_thirds {
        width: 480px;
    }

    .one_fourth {
        width: 167px;
    }

    .three_fourths {
        width: 540px;
    }

    .one_half .one_fourth {
        width: 150px;
    }
	
	/*Banner*/
	
#shelf {
background:url(../images/shelf_ipad.png) no-repeat center bottom;
padding-bottom:22px;
}
	
	/*Buttons*/
	
	#author .button_buy {
	margin-left:110px;
	}
	
	/*Companies*/
	
	#companies .row {
	padding-bottom:5px;
	}
	
	#companies img {
	margin-bottom:10px;
	}
	
	/*Testimonials*/
	
	#testimonials img {
	margin-bottom:15px;
	}
	
	/*Screenshots*/
	
	#screenshots .one_half {
	width:730px;
	}
	
	#screenshots a.last  {
	margin:0 15px 15px 0!important;
	}
	
	/*Author*/
	
	#author_image {
	margin:0 10px 0 0;
	}
	
	/*Newsletter*/

#newsletter h2 {
width:320px;
margin:0 0 5px 0;
float:left;
}

#newsletter form {
margin:20px 0 0 0;
float:right;
}

#newsletter input#e-mail {
width:240px;
margin:5px 10px 5px 0;
}

#newsletter input#submit {
float:right;
margin:5px 0 0 0;
}
	
	
	/*Footer*/
	
	#page_footer p {
float:none;
display:block;
}

}

@media screen and (max-width: 760px) {

 /*Global*/
	
	 .row {
        width: 430px;
        margin: 0 auto;
		padding:15px 0 15px 0;
    }


    .one_half, .one_third, .two_thirds, .one_fourth, .three_fourths, .one_half .one_fourth {
        width: 430px;
    }
		
	
/*Headings*/

h2.section_title, h2.section_title span {
background:none;
text-align:left;
padding-left:0!important;
padding-right:0!important;
}

/*Banner*/

#banner .two_thirds {
margin:0;
}

#banner #social_elements ul {
width: 430px;
float:none;
text-align:center;
}

#banner #social_elements ul li {
display:inline-block;
float:none;
margin:0;
}

/*Button*/

#author .button_buy {
margin:0;
text-align:center;
}
	
/*Companies*/
	
	#companies .row {
	padding-top:10px;
	padding-bottom:5px;
	}
	
	#companies img {
	margin:5px;
	}
	
/*Features*/

#features li.one_half {
margin:10px 0 10px 0;
}		
	
/*Screenshots*/

	#screenshots a {
	margin:5px!important;
	}

	#screenshots a, #screenshots a img  {
	height:auto!important;
	max-width:200px!important;
	}	
	
/*Testimonials*/
	
	#testimonials blockquote {
	margin-bottom:10px;
	}
	
	#testimonials img {
	margin-bottom:15px;
	}
	
/*Newsletter*/

#newsletter h2 {
width:430px;
margin:0 0 5px 0;
}

#newsletter form {
clear:both;
}

#newsletter input#e-mail {
width:280px;
margin:5px 0 5px 0;
}

#newsletter input#submit {
float:right;
margin:5px 0 0 0;
}	
	
/*Footer*/

#page_footer p {
float:none;
display:block;
}
	
    .scrollup {
        display: none !important;
    }

}

@media screen and (max-width: 460px) {


 /*Global*/
	
	 .row {
        width: 285px;
        margin: 0 auto;
		padding:15px 0 15px 0;
    }


    .one_half, .one_third, .two_thirds, .one_fourth, .three_fourths, .one_half .one_fourth {
        width: 285px;
    }
	
/*Banner*/

#header_region {
padding-bottom:10px;
}
	
#logo h2 {
display:block;
}	

#banner .two_thirds, #shelf.one_half {
margin:0;
padding-right:0;
}

#shelf {
background:url(../images/shelf_mobile.png) no-repeat center bottom;
padding-bottom:18px;
}

#shelf img {
height:auto; 
max-width:100%;
}


#banner #social_elements ul {
width: 285px;
float:none;
text-align:center;
}

#banner #social_elements ul li {
display:inline-block;
float:none;
margin:0;
}

/*Button*/

#author .button_buy {
margin:0;
text-align:center;
}
	
/*Testimonials*/
	
	#testimonials blockquote {
	margin-bottom:10px;
	}
	
	#testimonials img {
	margin-bottom:15px;
	}

/*Screenshots*/
	
.image-gallery {
margin:0 auto!important;
}	

.image-gallery a, .image-gallery img{
width:130px;
height:auto;
}

/*Author*/

img#author_image {
margin:0 auto 10px 0;
width:100px;
}

/*Newsletter*/

#newsletter h2 {
width:285px;
margin:0 0 5px 0;
}

#newsletter input#e-mail {
width:285px;
margin:5px 0 5px 0;
}

#newsletter input#submit {
float:none;
}

/*Contact*/
	
#contact {
width:290px;
}
	
#contact textarea {
width: 250px;
}

/*Footer*/

#page_footer p {
float:none;
display:block;
}
  
.scrollup {
display: none !important;
}

}