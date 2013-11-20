<!DOCTYPE html>
<html lang="<?php echo $frontlanguage; ?>">
  <head>
    <meta charset="utf-8">
    <title><?php echo $fronttitle; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="<?php echo $frontauthor; ?>">


    <link href="<?php echo $BASEURL; ?>css/bootstrap.min.css" rel="stylesheet">
	
    <style type="text/css">
      body {
        padding-top: 20px;
        padding-bottom: 40px;
      }

      /* Custom container */
      .container-narrow {
        margin: 0 auto;
        max-width: 700px;
      }
      .container-narrow > hr {
        margin: 30px 0;
      }

      /* Main marketing message and sign up button */
      .jumbotron {
        margin: 60px 0;
        text-align: center;
      }
      .jumbotron h1 {
        font-size: 72px;
        line-height: 1;
      }
      .jumbotron .btn {
        font-size: 21px;
        padding: 14px 24px;
      }

      /* Supporting marketing content */
      .marketing {
        margin: 60px 0;
      }
      .marketing p + h4 {
        margin-top: 28px;
      } 
    </style>
    <link href="<?php echo $BASEURL; ?>css/bootstrap-responsive.min.css" rel="stylesheet">

    <link rel="shortcut icon" href="./favicon.png">
	</head>
	<script src="<?php echo $BASEURL; ?>js/jquery.js"></script>
  <body>
<a href="#content" class="sr-only">Skip to main content</a>
<div class="container" id="content">
 
 
 
<nav class="navbar navbar-inverse" role="navigation">
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <a href="http://suche.wikibyte.org/"><img src="http://podcast.firtz.org/feedimages/firtz.png" width="50px;" style="padding:2px;"></a>
  </div>

  <!-- Collect the nav links, forms, and other content for toggling -->
  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
    <ul class="nav navbar-nav">
      <li class="active"><a href="http://suche.wikibyte.org/">Home</a></li>
	<?php foreach (($frontfeeds?:array()) as $feed): ?>
      <li><a href="<?php echo $feed['baseurl']; ?>/<?php echo $feed['slug']; ?>/show/"><?php echo $feed['title']; ?></a></li>
	<?php endforeach; ?>
      </li>
    </ul>
  </div><!-- /.navbar-collapse -->
</nav>


<div class="jumbotron">
  <h2><?php echo $dict_hosts; ?></h2>
  <p class="lead"><?php echo $dict_hosts_info; ?></p>
  <p>Diese Testinstallation ist ausschließlich zur Ideenfindung erstellt. 
	<br> Du findest den Firtz und die Originalinstallation direkt auf: </p>
  <a target="_blank" class="btn btn-primary btn-lg" role="button"
  href="https://github.com/eazyliving/firtz">Github</a></p>
</div>
 		
 			
<div class="row">
<?php foreach (($frontfeeds?:array()) as $feed): ?>	
  <div class="col-sm-4 col-md-3">
    <div class="thumbnail">
      <img class="media-object" src="<?php echo $feed['image']; ?>" width="100%">
      <div class="caption">
        <h2><a  href="<?php echo $feed['baseurl']; ?>/<?php echo $feed['slug']; ?>/show/"><?php echo $feed['title']; ?></a></h2>
		<h4><?php echo $feed['description']; ?></h4>
		<p><?php echo $feed['summary']; ?></p>
		<a class="btn btn-default" role="button" href="<?php echo $feed['baseurl']; ?>/<?php echo $feed['slug']; ?>/show/">Zum Blog</a>
      </div>
    </div>
  </div>
<?php endforeach; ?>
</div>

	
	<div class="footer"></div>
</div>
    
	
  </body>
</html>
