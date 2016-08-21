        <script type="text/javascript">
            // @see http://paulirish.com/2011/requestanimationframe-for-smart-animating/
            window.requestAnimFrame = (function(){
              return  window.requestAnimationFrame       || 
                      window.webkitRequestAnimationFrame || 
                      window.mozRequestAnimationFrame    || 
                      window.oRequestAnimationFrame      || 
                      window.msRequestAnimationFrame     || 
                      function(/* function */ callback, /* DOMElement */ element){
                        window.setTimeout(callback, 1000 / 60);
                      };
            })();
        </script>

        <!-- Vendor JavaScript -->
        <script src="assets/dist/js/vendor.min.js"></script>

        <!-- Main JavaScript -->
        <?php echo Asset::js('bundle.js');?>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
          (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
          (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
          m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
          })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

          ga('create', 'your key here', 'auto');
          ga('send', 'pageview');

        </script>
    </body>
</html>