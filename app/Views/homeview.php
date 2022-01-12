
<?=$this->extend("layouts/base");?>

<?=$this->section("content");?>

<body>

<div class="container wrapper">
  <div id="top">
    <h1><?=$page_heading?></h1>
    <p>Use the menu to select different Stylesheets</p>
  </div>
  <div class="wrapper">
   <div id="menubar">
     <ul id="menulist">
       <li class="menuitem" onclick="reStyle(0)">Stylesheet 1
       </li><li class="menuitem" onclick="reStyle(1)">Stylesheet 2
       </li><li class="menuitem" onclick="reStyle(2)">Stylesheet 3
       </li><li class="menuitem" onclick="reStyle(3)">Stylesheet 4
       </li><li class="menuitem" onclick="noStyles()">No Stylesheet
     </li></ul>
    </div>
    <div id="main">
      <h1>Same Page Different Stylesheets</h1>
      <p>This is a demonstration of how different stylesheets can change the layout of your HTML page. You can change the layout of this page by selecting different stylesheets in the menu, or by selecting one of the following links:<br>
      <a href="#" onclick="reStyle(0);return false">Stylesheet1</a>,
      <a href="#" onclick="reStyle(1);return false">Stylesheet2</a>,
      <a href="#" onclick="reStyle(2);return false">Stylesheet3</a>,
      <a href="#" onclick="reStyle(3);return false">Stylesheet4</a>.
      </p>
       <h2>No Styles</h2>
      <p>This page uses DIV elements to group different sections of the HTML page. Click here to see how the page looks like with no stylesheet:<br><a href="#" onclick="noStyles();return false">No Stylesheet</a>.</p>
   </div>
    <div id="sidebar">
      <h3>Side-Bar</h3>
      <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
    </div>
  </div>

  <div class="container">
    <?=$this->include("partials/features");?>
  </div>

  <div class="container">
    <?=$this->include("partials/services");?>
  </div>
  
  <?=$this->endSection();?>
  