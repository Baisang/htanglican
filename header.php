<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Anglican Church of the Transfiguration is an Anglican Church in Cleveland, Ohio" />
  <meta name="keywords" content="church, cleveland church, cleveland anglican church, transfiguration cleveland, church of the transfiguration, sean ewing church, transfiguration sean ewing, clevelandanglican" />
  <meta name="author" content="Brian Sang" />

  <link rel="shortcut icon" href="assets/favicon.ico" type="image/x-icon">
  <link rel="icon" href="assets/favicon.ico" type="image/x-icon">
  <title>
    <?php echo is_front_page() ? '' : wp_title('')." | ";?>Anglican Church of the Transfiguration
  </title>

  <!-- Bootstrap -->
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Lato:300,400" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

  <!-- HTAnglican custom CSS -->
  <link href="<?php bloginfo('template_directory');?>/style.css" rel="stylesheet">


  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->

      <link href="http://cdn-images.mailchimp.com/embedcode/slim-081711.css" rel="stylesheet" type="text/css">
      <style type="text/css">
      #mc_embed_signup{background:#fff; }
  /* Add your own MailChimp form style overrides in your site stylesheet or in this style block.
  We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */
  </style>
  <?php wp_head();?>
</head>

<body>
      <div class="navbar-wrapper">
        <nav class="navbar navbar-static-top">
          <div class="container-fluid">
            <div class="navbar-header">
              <a class="navbar-brand" href="/">
                <img class="nav-logo" src="<?php bloginfo('template_directory');?>/images/HolyTrinityLOGOweb.png"></img>
              </a>
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar" style="background-color: #253c97"></span>
                <span class="icon-bar" style="background-color: #253c97"></span>
                <span class="icon-bar" style="background-color: #253c97"></span>
              </button>
            </div>
              <?php /* Primary navigation */
                wp_nav_menu( array(
                  'menu' => 'primary',
                  'theme_location'    => 'primary',
                  'depth' => 2,
                  'container' => 'div',
                  'container_class' => 'navbar-collapse collapse',
                  'container_id' => 'navbar',
                  'menu_class' => 'nav navbar-nav navbar-right',
                  //Process nav menu using our custom nav walker
                  'walker' => new wp_bootstrap_navwalker())
                );
                ?>
          </div>
        </nav>
      </div>
