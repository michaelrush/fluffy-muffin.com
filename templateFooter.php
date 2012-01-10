<?php
function generateFooter ($cat) {
return <<<HTML
<div id="footer">
      <div class="foot">&#169; 2012 Fluffy-Muffin.com. All rights reserved.<br />
      Contact Us: feedback@fluffy-muffin.com.
      </div>
    </div>
  </div>

</div> <!--! end of #container -->


  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="js/libs/jquery-1.6.2.min.js"><\/script>')</script>


  <!-- scripts concatenated and minified via ant build script-->
  <script defer src="js/plugins.js"></script>
  <script defer src="js/script.js"></script>
  <!-- end scripts-->

  <!--
    <script> // Change UA-XXXXX-X to be your site's ID
      window._gaq = [['_setAccount','UAXXXXXXXX1'],['_trackPageview'],['_trackPageLoadTime']];
      Modernizr.load({
        load: ('https:' == location.protocol ? '//ssl' : '//www') + '.google-analytics.com/ga.js'
      });
    </script>
  ->

  <!--[if lt IE 7 ]>
    <script src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
    <script>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
  <![endif]-->

</body>
</html>

HTML;
}
?>