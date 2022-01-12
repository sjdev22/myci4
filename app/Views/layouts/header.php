<html><!-- Mirrored from www.w3schools.com/css/demo_default.htm by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 27 Jan 2020 02:34:31 GMT --><head>
<title><?=$page_title?></title>
<style>/* Stylesheet 1: */
body {
    font: 100% Lucida Sans, Verdana;
    margin: 20px;
    line-height: 26px;
}

.container {
    xmin-width: 900px;
}

.wrapper {
    position: relative;
    overflow: auto;
}

#top, #sidebar, #bottom, .menuitem {
    border-radius: 4px;
    margin: 4px;
}

#top {
    background-color: #4CAF50;
    color: #ffffff;
    padding: 15px;
}

#menubar {
    width: 200px;
    float: left
}

#main {
    padding: 10px;
    margin: 0 210px;
}

#sidebar {
    background-color: #32a4e7;
    color: #ffffff;
    padding: 10px;
    width: 180px;
    bottom: 0;
    top: 0;
    right: 0;
    position: absolute;
}

#bottom {
    border: 1px solid #d4d4d4;
    background-color: #f1f1f1;
    text-align: center;
    padding: 10px;
    font-size: 70%;
    line-height: 14px;
}

#top h1, #top p, #menulist {
    margin: 0;
    padding: 0;
}

.menuitem {
    background-color: #f1f1f1;
    border: 1px solid #d4d4d4;
    list-style-type: none;
    padding: 2px;
    cursor: pointer;
}

.menuitem:hover {
    background-color: #ffffff;
}

.menuitem:first-child {
   background-color:#4CAF50;
   color: white;
   font-weight:bold;
}

a {
    color: #000000;
    text-decoration: underline;
}

a:hover {
    text-decoration: none;
}


@media (max-width: 800px) {
    #sidebar {
        width: auto;
        position: relative;
    } 
    #main {
        margin-right: 0;
    }    
       
}

@media (max-width: 600px) {
    #menubar {
        width: auto;
        float: none;
    }
    #main {
        margin: 0;
    }    
}
</style>

<style>/* Stylesheet 2: */
body {
    font-family: Arial;
    background-color: #d14836;
    line-height: 20px;
}

.container {
    xmin-width: 900px;
}

.wrapper {
    position: relative;
    overflow: auto;
}

#top {
    color: #ffffff;
    padding: 15px;
    font-size: 30px;
    line-height: 26px;    
}

#top h1 {
    margin:0;
    line-height: 50px;
}

#menubar {
    width: 190px;
    float: right;
}

#main {
    padding: 10px;
    background-color: #ffffff;
    font: 80% Verdana;
}

#main h1, #main h2 {
    color: #d14836;
}

#sidebar {
    background-color: #F6DAD7;
    color: #d14836;
    padding: 10px;
}

#bottom {
    text-align: center;
    padding: 10px;
    font-size: 70%;
    color: #ffffff;
}

#menulist {
    padding:0;
    font: 16px verdana;
}

.menuitem {
    width: 155px;
    background-color: #d14836;
    border: 1px solid #d14836;
    border-radius: 40px;
    color: #ffffff;
    list-style-type: none;
    margin: 10px;
    padding: 5px;
    text-align: center;
    cursor: pointer;
}

.menuitem:nth-child(2) {
   background-color:white;
   color: #d14836;
   font-weight:bold;
}

.menuitem:hover {
    background-color: #ffffff;
    color: #d14836;
}

a {
    color: #d14836;
    text-decoration: none;
}

a:hover {
    text-decoration: underline;
}
</style>

<style>/* Stylesheet 3: */
body {
    font: 100% Verdana;
    margin: 20px;
    line-height: 26px;
}

.container {
    xmin-width: 900px;
}

.wrapper {
    position: relative;
    overflow: auto;
}

#sidebar {
    background-color: #f1f1f1;
    border: 1px solid #d4d4d4;
    padding-left: 10px;
}

#bottom {
    text-align: center;
    padding: 10px;
    font-size: 70%;
    line-height: 14px;
}

h1, h2, h3 {
    color: #4CAF50;
}

#menulist {
    padding: 0;
    position: relative;
    overflow: auto;
}

.menuitem {
    width: 165px;
    float: left;
    background-color: #555555;
    color: #ffffff;
    list-style-type: none;
    margin: 4px;
    padding: 2px;
    text-align: center;
    cursor: pointer;
}

.menuitem:nth-child(3) {
   background-color:#4CAF50;
}

.menuitem:hover {
    background-color: #999999;
}

a {
    color: #000000;
}

a:hover {
    color: #84c754;
}
</style>
<style>/* Stylesheet 4: */
body {
    font: 100% Courier New;
    margin: 20px;
    line-height: 26px;
    background-color: #000000;
}

.container {
    xmin-width: 900px;
}

.wrapper {
    position: relative;
    overflow: auto;
}

#top {
    color: #84c754;
    padding: 15px;
}

#main {
    padding: 10px;
    color: #84c754;
}

#sidebar {
    color: #ffffff;
    border: 1px solid #ffffff;
    border-radius: 4px;
    padding: 10px;
    width: 320px;
    top: 0;
    right: 0;
    position: absolute;
    font-size: 80%;
    line-height: 20px;
}

#bottom {
    border: 1px solid #ffffff;
    border-radius: 4px;
    color: #ffffff;
    text-align: center;
    padding: 10px;
    font-size: 70%;
    line-height: 14px;
}

#top h1,#top p {
    margin: 0;
}

.menuitem {
    color: #84c754;
    cursor: pointer;
}

.menuitem:nth-child(4) {
    color:white;
    font-weight:bold;
}

.menuitem:hover {
    color: #ffffff;
}

a {
    color: #ffffff;
}

a:hover {
    color: #84c754;
}
@media (max-width: 600px) {
    #sidebar {
       width: auto;
       margin-bottom:10px;        
       position: relative;
    }    
}
</head>