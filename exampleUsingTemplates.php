<?php
  include 'templateHeader.php';
  echo generateHeader('comic', 'January 4th, 2012');
?>

<div class="MainContent">
  <div class="header">
    <div id="bannerAd">
    </div>
    <div id="Title">
    </div>
  </div>
  <div class="content">
    <!-- This part needs to be PHP'ed so that it updates automatically, and keeps only 1 post maximum -->
    <div id="entry"><img src="comics/02 02 Darwinism.jpg" height="425px" width="1020px" title="Darwinism"/>
    </div>
    <div id="TopFrame">
    </div>
    <div id="MidFrame">
      <div id="post">
        This took place during our very first meeting for the Fluffy-Muffin website. We get off topic a lot.
      </div>
    </div>
    <div id="BottomFrame">
    </div>
    <div id="buttonbar">
      <div id="back"><a class="back" href="comic1.html"></a></div>
      <div id="forward"><a class="forward" href="comic3.html"></a></div>
    </div>
    <!-- The above part needs to be PHP'ed so that it updates automatically, and keeps only 1 post maximum -->
  </div>

<?php
  include 'templateFooter.php';
  echo generateFooter('comic');
?>