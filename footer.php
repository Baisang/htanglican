<footer class="footer">
  <div class="container-fluid container-footer">
    <div class="row row-footer">
      <div class="col-md-4">
        <h1 class="head-footer"><i class="fa fa-envelope-o"></i></h1>
        <p class="text-footer">
          Church of the Transfiguration <br>2572 MLK Jr. Dr. <br>Cleveland, OH 44104<br>
        (216) 466-2452<br>
        <a href="mailto:sean.a.ewing@gmail.com">sean.a.ewing@gmail.com</a> </p>
      </div>
      <div class="col-md-4">
        <h1 class="head-footer"><i class="fa fa-clock-o"></i></h1>
        <p class="text-footer"> Worship Time <br>Sundays at 10:30am
        </p>
      </div>
      <div class="col-md-4">
        <h1 class="head-footer"><i class="fa fa-users"></i></h1>
        <div class="text-footer"><a href="https://www.facebook.com/Anglican-Church-of-the-Transfiguration-Cleveland-Ohio-382623758806403" target="_blank"><i class="fa fa-facebook-official"></i> Facebook </a></div>
        <div class="text-footer"><a href="https://soundcloud.com/holy-trinity-7" target="_blank"><i class="fa fa-soundcloud"></i> SoundCloud</a></div>
        <div class="text-footer"><a href="http://clevelandanglican.com/blog" target="_blank"><i class="fa fa-commenting-o"></i> Blog</a></div>
      </div>
    </div>
    <div class="row row-footer">
      <div class="col-md-12">
        <p class="text-footer text-justify">
          © <?php echo date("Y");?> Church of the Transfiguration. All Rights Reserved.</p>
      </div>
    </div>
  </div>
</footer>


<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/skrollr/0.6.30/skrollr.min.js"></script>
            <script type="text/javascript">
                  var s = skrollr.init({
                    forceHeight: false,
                    smoothScrolling: true,
                    smoothScrollingDuration: 200,
                  });
                  if (s.isMobile()) {
                      s.destroy();
                  } else {
                      $(window).load(function(){
                      // console.log("Loaded");
                      $(window).trigger('resize');
                      s.refresh();
                    });
                  }


            </script>
<?php wp_footer(); ?>
</body>
</html>
