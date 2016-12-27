<?php get_header(); ?>

<div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="6000">
  <!-- Indicators -->

  <div class="carousel-inner" role="listbox">
    <div class="item active">
     <div class="first-slide" style="background-image: linear-gradient( rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)),url('<?php bloginfo('template_directory');?>/images/front_banner.jpg');">
        <div class="carousel-caption">
          <div class="light-caption">WELCOME TO</div>
          <h1>CHURCH OF THE TRANSFIGURATION</h1>
          <div class="sub-caption">Worship with us Sundays at 10:30am</div>
          <p><a class="btn btn-lg btn-primary" target="_blank" href="https://goo.gl/maps/SVVDPeEu4JL2" role="button">View Map</a></p>
        </div>
    </div>
  </div>
  <div class="item">
    <div class="second-slide" style="background-image: linear-gradient( rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)),url('<?php bloginfo('template_directory');?>/images/welcomecloudy.jpg');">
      <div class="container">
        <div class="carousel-caption">
          <h1>WHAT IS ANGLICANISM?</h1>
          <div class="sub-caption">Anglicanism is an ancient expression of the Christian faith with an exciting future.</div>
          <p><a class="btn btn-lg btn-primary" href="anglicanism.html" role="button">Learn More</a></p>
        </div>
      </div>
    </div>
  </div>
  <div class="item">
    <div class="third-slide" style="  background-image: linear-gradient( rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)), url('<?php bloginfo('template_directory');?>/images/Clevelandsk.jpg');">
      <div class="container">
        <div class="carousel-caption">
          <h2>HEAR OUR STORY</h2>
          <div class="sub-caption">Discover our church's rich history and exciting future.</div>
          <p><a class="btn btn-lg btn-primary" href="story.html" target="_blank">Our Story</a></p>
        </div>
      </div>
    </div>
  </div>
</div>
<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
  <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
  <span class="sr-only">Previous</span>
</a>
<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
  <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
  <span class="sr-only">Next</span>
</a>
</div>
<!-- /.carousel -->

<div class="container marketing">

<!-- Three columns of text below the carousel -->
<div class="row">
  <div class="col-lg-4">
    <span class="glyphicon glyphicon-envelope glyphs"></span>
    <h2>Join our email list</h2>
    <p> Receive Holy Trinity news updates via email</p>

    <button type="button" class="btn btn-default" data-toggle="modal" data-target="#newsUpdates">
      <div class="market-btn-text">Subscribe &raquo;</div>
    </button>
    <div class="modal fade" id="newsUpdates">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h3 class="modal-title">Sign up for Holy Trinity Newsletter</h3>
          </div>
          <div class="modal-body">
            <!-- Begin MailChimp Signup Form -->
            <div id="mc_embed_signup">
              <form style="padding:0;" action="http://htanglican.us11.list-manage.com/subscribe/post?u=e0ae89cb20c49a75aed525b35&amp;id=6719456857" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                <div id="mc_embed_signup_scroll">
                  <input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="email address" required>
                  <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                  <div style="position: absolute; left: -5000px;padding-top: 5em"><input type="text" name="b_e0ae89cb20c49a75aed525b35_6719456857" tabindex="-1" value=""></div>
                  <div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
                </div>
              </form>
            </div>

            <!--End mc_embed_signup-->
          </div>
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->



  </div><!-- /.col-lg-4 -->
  <div class="col-lg-4">
    <span class="glyphicon glyphicon-book glyphs"></span>
    <h2>Morning Prayer</h2>
    <p> Get Morning Prayer devotionals daily via email</p>
    <button type="button" class="btn btn-default" data-toggle="modal" data-target="#morningPrayer">
      <div class="market-btn-text">Sign up &raquo;</div>
    </button>
    <div class="modal fade" id="morningPrayer">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h3 class="modal-title">Sign up for Holy Trinity Morning Prayer</h3>
          </div>
          <div class="modal-body">
            <!-- Begin MailChimp Signup Form -->
            <div id="mc_embed_signup">
              <form action="//htanglican.us11.list-manage.com/subscribe/post?u=e0ae89cb20c49a75aed525b35&amp;id=9f5cf135e1" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                <div id="mc_embed_signup_scroll">
                  <input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="email address" required>
                  <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                  <div style="position: absolute; left: -5000px; padding-top: 5em"><input type="text" name="b_e0ae89cb20c49a75aed525b35_9f5cf135e1" tabindex="-1" value=""></div>
                  <div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
                </div>
              </form>
            </div>
            <!--End mc_embed_signup-->
          </div>
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
  </div><!-- /.col-lg-4 -->
  <div class="col-lg-4">
    <span class="glyphicon glyphicon-gift glyphs"></span>
    <h2>Give</h2>
    <p>Contribute financially to our work</p>
    <a class="btn btn-default" href="give.html" role="button"><div class="market-btn-text">View details &raquo;</div></a>
  </div><!-- /.col-lg-4 -->
</div><!-- /.row -->

</div>

<div id="fourth-image" class="fourth-image" style="background-image:
  linear-gradient(
    to bottom,
    rgba(0, 0, 0, 0),
    rgba(0, 0, 0, 0.6)
    ),
  url('<?php bloginfo('template_directory');?>/images/stockphoto2.jpg');"
  data-center-top="background-position: 0% 90%"
  data-center="background-position: 0% 60%;"
  data-top-bottom="background-position: 0% 40%;"
  data-anchor-target="#fourth-image">
  <h1> Walk this ancient-but-new road with us - where reverence and relevance meet. </h1>
</div>

<div class="container marketing">

<!-- START THE FEATURETTES -->


<div class="row featurette">
  <div class="col-md-7">
    <div class="featurette-heading">Christian Community</div>
    <p class="lead">Like the early Church, we aspire to regularly gather for fellowship, support, and worship. We envision forging strong spiritual friendships in community groups to sustain us in the changes and chances of life. Our desire is that we would be a community in which our pastor knows his sheep and walks with them as we do life together—not just on Sundays.</p>
  </div>
  <div class="col-md-5">
    <img class="featurette-image img-responsive center-block featurette-image1" src="<?php bloginfo('template_directory');?>/images/christiancommunity.jpg" alt="Christian Community">
  </div>
</div>

<hr class="featurette-divider">

<div class="row featurette">
  <div class="col-md-7">
    <div class="featurette-heading">Deep Discipleship</div>
    <p class="lead">Like the early Church, we aspire to be formed as deep, devoted disciples of Jesus Christ. We don’t want to just be Sunday morning Christians—our desire is to see all areas of our lives submitted to the Lordship of Jesus Christ. We envision our community being formed in the faith handed down to us as well as being formed in key spiritual disciplines that will help us to grow into deeper disciples of Jesus Christ.</p>
  </div>
  <div class="col-md-5">
    <img class="featurette-image img-responsive center-block featurette-image2" src="<?php bloginfo('template_directory');?>/images/father_sean.jpg" alt="Deep Discipleship">
  </div>
</div>

<hr class="featurette-divider">

<div class="row featurette">
  <div class="col-md-7">
    <div class="featurette-heading">Serving our City</div>
    <p class="lead">Like the early Church, we aspire to live not for ourselves but for the good of our neighbors. We envision serving our city for its flourishing by sharing the love of God in both word and deed. We desire to be people who are more concerned with serving than being served—especially for the welfare of the least among us.</p>
  </div>
  <div class="col-md-5">
    <img class="featurette-image img-responsive center-block featurette-image3" src="<?php bloginfo('template_directory');?>/images/serving_our_city.jpg" alt="serving our city">
  </div>
</div>

<hr class="featurette-divider">
</div>

<?php get_footer(); ?>
