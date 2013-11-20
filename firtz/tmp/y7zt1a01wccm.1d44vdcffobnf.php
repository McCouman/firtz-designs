<!DOCTYPE html>
<html lang="<?php echo substr($feedattr['language'],0,2); ?>">
  <head>
    <meta charset="utf-8">
    <title><?php echo $feedattr['title']; ?><?php if ($showpage): ?> - <?php echo basename($showpage,'.html'); ?><?php endif; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta name="description" content="<?php echo $feedattr['description']; ?>"/>
    <meta name="author" content="<?php echo Base::instance()->raw($feedattr['author']); ?>"/>
    <?php if ($feedattr['image']): ?>
      <meta property="og:image" content="<?php echo $feedattr['image']; ?>"/>
    <?php endif; ?>
    <meta property="og:type" content="website" />
    <meta property="og:title" content="<?php if (!$showpage): ?><?php echo $og['title']; ?><?php else: ?><?php echo basename($showpage,'.html'); ?><?php endif; ?>"/>
    <meta property="og:url" content="<?php if (!$showpage): ?><?php echo $og['url']; ?><?php else: ?><?php echo $BASEURL; ?><?php echo $feedattr['slug']; ?>/show/page/<?php echo basename($showpage); ?><?php endif; ?>"/>
    <meta property="og:site_name" content="<?php echo $feedattr['title']; ?>"/>
    <?php if ($og['audio']): ?>
      <meta property="og:<?php echo $og['audio']['typename']; ?>" content="<?php echo $og['audio']['url']; ?>"/>
      <meta propertyp="og:<?php echo $og['audio']['typename']; ?>:type" content="<?php echo $og['audio']['type']; ?>"/>
    <?php endif; ?>
    <link href="<?php echo $feedattr['sitecss']; ?>" rel="stylesheet">
<style type="text/css">
body{padding-top:20px;padding-bottom:40px} 
a>h3,.homebut,a>h3:hover,a:hover,
.homebut:hover{ text-decoration:none !important }  
.container-narrow{ margin:0 auto; max-width:700px } 
.container-narrow >hr{ margin:30px 0 }  
.jumbotron{ margin:30px 0; text-align:center } 
.jumbotron h1{ font-size:72px; line-height:1 } 
.jumbotron .btn{ font-size:21px; padding:14px 24px }  
.marketing{ margin:20px 0 } 
.marketing p+h4{ margin-top:28px } 
<?php if ($feedattr['color']): ?>
body{
     background: <?php echo $feedattr['background']; ?> !important;
}
hr {
	border-top: 1px solid <?php echo $feedattr['dark']; ?> !important;
}
a {
	color: <?php echo $feedattr['dark']; ?> !important;
	text-decoration: none;
}
div.footer p, h1, h2, h3, h4, h5, h6, .h1, .h2, .h3, .h4, .h5, .h6 { 
	color: <?php echo $feedattr['header']; ?> !important;
}
.nav>li>a:hover,
.nav>li>a:focus{
	color: <?php echo $feedattr['dark']; ?> !important;
}
.jumbotron {
	background: <?php echo $feedattr['jumbotron']; ?> !important;
}
.lead, p.lead, .jumbotron h1 {
	color: <?php echo $feedattr['jumbocolor']; ?> !important;
}
.nav .caret {
	border-top-color: <?php echo $feedattr['dark']; ?> !important;
	border-bottom-color: <?php echo $feedattr['dark']; ?> !important;
}
.podlovewebplayer_wrapper {
	background: transparent !important;
}
.mejs-button.mejs-volume-button button, 
.mejs-controls .mejs-mute button { color: #ffffff !important; }
.mejs-controls .mejs-horizontal-volume-slider .mejs-horizontal-volume-current {
	background: #e6e6e6 !important;
}
.mejs-controls .mejs-horizontal-volume-slider .mejs-horizontal-volume-total {
	background: <?php echo $feedattr['dark']; ?> !important;
}
.podlovewebplayer_wrapper .mejs-container .mejs-inner .mejs-controls .mejs-time-rail .mejs-time-total 
.mejs-time-loaded { 
	background: <?php echo $feedattr['light']; ?> !important; 
}
.mejs-controls .mejs-time-rail .mejs-time-total {
	background: <?php echo $feedattr['dark']; ?> !important; 
}
.mejs-controls .mejs-time-rail .mejs-time-current {
	background: #e6e6e6 !important;
}
.podlovewebplayer_wrapper .podlovewebplayer_meta,.podlovewebplayer_wrapper 
.podlovewebplayer_meta .subtitle,.podlovewebplayer_wrapper 
.podlovewebplayer_meta h3,.podlovewebplayer_wrapper .podlovewebplayer_meta h3 a,
.podlovewebplayer_meta + .summary,.podlovewebplayer_wrapper .podlovewebplayer_controlbox,
.podlovewebplayer_wrapper .podlovewebplayer_meta .togglers{
	color: #ffffff !important;
}
.podlovewebplayer_wrapper .podlovewebplayer_top,.podlovewebplayer_wrapper .podlovewebplayer_meta{
	background: <?php echo $feedattr['color']; ?> !important;
}
.podlovewebplayer_meta .bigplay{
	color: #ffffff;
	border-color: #ffffff !important;
} 
.podlovewebplayer_meta .bigplay:hover,
.podlovewebplayer_meta .bigplay:active,
.podlovewebplayer_meta .bigplay.playing:hover,
.podlovewebplayer_meta .bigplay:focus,
.podlovewebplayer_meta .bigplay:hover,
.podlovewebplayer_meta .bigplay:active {
	border: 5px solid #ffffff !important;
	-webkit-text-shadow: 0px 0px 10px #ffffff !important;
	-moz-text-shadow: 0px 0px 10px #ffffff !important;
	-o-text-shadow: 0px 0px 10px #ffffff !important;
	text-shadow: 0px 0px 10px #ffffff !important;
}  
.podlovewebplayer_meta .bigplay {
	color: #ffffff !important;
} 
.podlovewebplayer_meta .bigplay.playing:active {
	color:#ffffff !important; 
	border-color:#ffffff !important;
	text-shadow:0px 0px 4px #ffffff !important;
	text-decoration:none;
	filter:dropshadow(color=#ffffff,offx=0,offy=0);cursor:pointer;
}
.podlovewebplayer_meta .togglers .infobuttons,.podlovewebplayer_meta .togglers .infobuttons a,
.podlovewebplayer_wrapper .podlovewebplayer_controlbox .infobuttons,
.podlovewebplayer_wrapper .podlovewebplayer_controlbox .infobuttons a{
	color:#ffffff;
	text-shadow:0px 0px 1px #ffffff !important; 
	text-decoration:none;
}
.podlovewebplayer_meta .togglers .infobuttons:hover,
.podlovewebplayer_meta .togglers .infobuttons a:hover,
.podlovewebplayer_wrapper .podlovewebplayer_controlbox .infobuttons:hover,
.podlovewebplayer_wrapper .podlovewebplayer_controlbox .infobuttons a:hover{
	text-shadow:0px 0px 4px #ffffff !important; 
	text-decoration:none;
	filter:dropshadow(color=#ffffff,offx=0,offy=0);cursor:pointer;
}
.podlovewebplayer_meta + .summary,.podlovewebplayer_wrapper .podlovewebplayer_controlbox{
	background: <?php echo $feedattr['color']; ?> !important;
	border-left:3px <?php echo $feedattr['color']; ?> !important;
	border-right:3px <?php echo $feedattr['color']; ?> !important;
}
.podlovewebplayer_wrapper .podlovewebplayer_controlbox{
	background: <?php echo $feedattr['dark']; ?> !important;
	border-left:3px <?php echo $feedattr['dark']; ?> solid !important;
	border-right:3px <?php echo $feedattr['dark']; ?> solid !important;
}
.mejs-controls .mejs-play button{
	background-position:0 0;
}
.mejs-controls .mejs-pause button{
	background-position:0 -16px;
}
.mejs-controls .mejs-stop button{
	background-position:-112px 0;
}
.mejs-controls .mejs-fullscreen-button button{
	background-position:-32px 0;
}
.mejs-controls .mejs-unfullscreen button{background-position:-32px -16px;}
.mejs-controls .mejs-mute button{background-position:-16px -16px;}
.mejs-controls .mejs-unmute button{background-position:-16px 0;}
.mejs-controls .mejs-captions-button button{background-position:-48px 0;}
.mejs-controls .mejs-loop-off button{background-position:-64px -16px;}
.mejs-controls .mejs-loop-on button{background-position:-64px 0;}
.mejs-controls .mejs-backlight-off button{background-position:-80px -16px;}
.mejs-controls .mejs-backlight-on button{background-position:-80px 0;}
.mejs-controls .mejs-sourcechooser-button button{background-position:-128px 0;}
.podlovewebplayer_wrapper .mejs-container .mejs-inner .mejs-controls {
	background: <?php echo $feedattr['color']; ?> !important;
	-webkit-box-shadow: 0px 1px transparent !important;
	-moz-box-shadow: 0px 1px transparent !important;
	box-shadow: 0px 1px transparent !important;
}
.mejs-container .mejs-controls .mejs-time span{
	color:#111;
}
.podlovewebplayer_wrapper .podlovewebplayer_chapterbox{
	border:0px <?php echo $feedattr['dark']; ?> solid !important;
	border-bottom:0px <?php echo $feedattr['dark']; ?> solid !important;
	margin-top: 20px;
}
.podlovewebplayer_wrapper .podlovewebplayer_tableend{
	background: <?php echo $feedattr['color']; ?> !important;
}
.podlovewebplayer_wrapper .podlovewebplayer_chapters tr {
	background: #FFF !important;
}
.podlovewebplayer_wrapper .podlovewebplayer_chapters tr.active, 
.podlovewebplayer_wrapper .podlovewebplayer_chapters tr.active:hover {
	background: <?php echo $feedattr['light']; ?> !important;
}
.podlovewebplayer_wrapper .podlovewebplayer_tableend {
	background: transparent !important;
	-webkit-box-shadow: 0px 0px transparent !important;
}
.podlovewebplayer_meta .bigplay, 
.podlovewebplayer_meta .togglers .infobuttons, 
.podlovewebplayer_meta .togglers .infobuttons a, 
.podlovewebplayer_wrapper .podlovewebplayer_controlbox .infobuttons, 
.podlovewebplayer_wrapper .podlovewebplayer_controlbox .infobuttons a {
	color: #ffffff !important;
}
.podlovewebplayer_wrapper .podlovewebplayer_meta .bigplay {
	border: 5px solid #ffffff !important;
}
.mejs-container .mejs-controls .mejs-time span{
	color: #ffffff !important;
}
.podlovewebplayer_chapters * {
	height: 40px;
}
.podlovewebplayer_wrapper .podlovewebplayer_top, .podlovewebplayer_wrapper .podlovewebplayer_meta {
	-webkit-border-top-left-radius: 0px !important;
	-webkit-border-top-right-radius: 0px !important;
	-moz-border-radius-topleft: 0px !important;
	-moz-border-radius-topright:  0px !important;
	border-top-left-radius: 0px !important;
	border-top-right-radius: 0px !important;
}
<?php endif; ?>
</style>
    <link href="<?php echo $BASEURL; ?>css/bootstrap-responsive.min.css" rel="stylesheet">
    <link href="<?php echo $BASEURL; ?>pwp/static/podlove-web-player.css" rel="stylesheet" media="screen" type="text/css" />
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo $feedattr['image']; ?>">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo $feedattr['image']; ?>">
    <link rel="apple-touch-icon-precomposed" href="<?php echo $feedattr['image']; ?>">
    <link rel="shortcut icon" href="/favicon.ico">
    <script src="<?php echo $BASEURL; ?>js/jquery.js"></script>
    <?php foreach ((glob($templatepath.'/head/*.html')?:array()) as $template): ?> <?php echo $this->render('head/'.basename($template),$this->mime,get_defined_vars()); ?> <?php endforeach; ?>
</head>
  <body>
    <div class="container-narrow">
      <div class="masthead">
		<ul class="nav nav-pills pull-right">
		<li class="dropdown">
			<a class="dropdown-toggle" data-toggle="dropdown" href="#"><?php echo $dict_subscribe; ?> <b class="caret"></b></a>
			<ul class="dropdown-menu">
				<?php foreach (($feedattr['audioformats']?:array()) as $format): ?>
					<li><a href="<?php echo $feedattr['baserel']; ?><?php echo $format; ?><?php echo $extxml; ?>"><?php echo $format; ?></a></li>
				<?php endforeach; ?>
				<?php if ($feedattr['itunes']): ?>
					<li><a href="<?php echo $feedattr['itunes']; ?>">iTunes</a></li>
				<?php endif; ?>
				<script type="text/javascript">
				//if (navigator.userAgent.match(/iPhone|iPad|iPod/i))				
				document.write('<li><a href="<?php echo str_replace('http://','podcast://',$feedattr['instacast']); ?>">Instacast</a></li>');
				</script>
			</ul>			
		</li>		
		<?php foreach ((glob($templatepath.'/pages/*',GLOB_ONLYDIR)?:array()) as $dir): ?>			
		<li class="dropdown">
			<a class="dropdown-toggle" data-toggle="dropdown" href="#"><?php echo basename($dir); ?> <b class="caret"></b></a>
			<ul class="dropdown-menu">
				<?php foreach ((glob($templatepath.'/pages/'.basename($dir).'/*.html')?:array()) as $template): ?>
					<li><a href="<?php echo $BASEURL; ?><?php echo $feedattr['slug']; ?>/show/page/<?php echo basename($dir); ?>/<?php echo basename($template,'.html'); ?><?php echo $exthtml; ?>"><?php echo basename($template,'.html'); ?></a></li>
				<?php endforeach; ?>
			</ul>
		</li>
		<?php endforeach; ?>		
		<?php foreach ((glob($templatepath.'/pages/*.html')?:array()) as $template): ?>
			<li><a href="<?php echo $BASEURL; ?><?php echo $feedattr['slug']; ?>/show/page/<?php echo basename($template,'.html'); ?><?php echo $exthtml; ?>"><?php echo basename($template,'.html'); ?></a></li>
		<?php endforeach; ?>
		<?php foreach ((glob($templatepath.'/header/*.html')?:array()) as $template): ?>
			<?php echo $this->render('header/'.basename($template),$this->mime,get_defined_vars()); ?>
		<?php endforeach; ?>        
        </ul>
        <h3 style="padding:10px;"><a class="homebut" href="<?php echo $BASEURL; ?>"><img src="<?php echo $feedattr['image']; ?>" width=80 /></a></h3>
      </div>	
    
    <hr style="margin-bottom: -30px;">
      <div class="jumbotron" style="opacity: 0.96;">
		<h1><?php echo $feedattr['title']; ?></h1>
        <p class="lead"><?php echo $feedattr['description']; ?></p>
      </div>
	<hr style="margin-top: -30px;">
	
	<?php if ($page!=0): ?>
		<div>
			<ul class="pager">
				<?php if ($page>1): ?>
					<li class="previous">
						<a href="<?php echo $BASEURL; ?><?php echo $feedattr['slug']; ?>/show/pager/<?php echo $page-1; ?>">&larr; <?php echo $dict_newer; ?></a>
					</li>
				<?php endif; ?>
				<?php if ($page<$maxpage): ?>
					<li class="next">
						<a href="<?php echo $BASEURL; ?><?php echo $feedattr['slug']; ?>/show/pager/<?php echo $page+1; ?>">&rarr; <?php echo $dict_older; ?></a>
					</li>
				<?php endif; ?>
			</ul>
		</div>
	<?php endif; ?>

<!--FLUID-->		
<div class="row-fluid marketing">

<!--SHOWPAGE-->
<?php if (!$showpage): ?>

<!--REPEAT SHOW-->		
		
<?php foreach (($items?:array()) as $item): ?>
	<br>
	  <br />
		<a href="<?php if ($singlepage==false): ?><?php echo $BASEURL; ?><?php echo $feedattr['slug']; ?>/show/<?php echo $item['slug']; ?><?php endif; ?>" name="<?php echo $item['slug']; ?>"><h2 class="text-center"><?php echo $item['title']; ?></h2></a>			
		<h5 class="text-center"><?php echo Base::instance()->format($dict_pubdate,strtotime($item['pubDate'])); ?></h5>
	  <br>
	<br />
	
<!--CHECK AUDIO-->
<?php if ($item['noaudio']==''): ?>

	<!--page-->
	<div style="background: #fff; opacity: 0.96;">				
		<!--webplayer-podlove-->			
		<?php echo $this->render('podlove-player.html',$this->mime,get_defined_vars()); ?>
		<!--/webplayer-podlove-->				
				
		<!--content-->		
		<div style="padding:20px; margin-top: -40px;">									
					
					<h3>Shownotes</h3>
					
					<!--article content-->					
					<?php if ((trim($item['article'])!='')): ?>
						<?php echo Base::instance()->raw($item['article']); ?>
					<?php endif; ?>
					<!--/article content-->						
					<!--contributors-->								
					<?php if ($item['podcasters']): ?>
						<h4>Mit dabei waren diesmal:</h4>
						<p><?php echo $item['podcasters']; ?></p>
					<?php endif; ?>
					<!--/contributors-->
				<br>
			<hr />	
				<!--downloads & bitlove-->			
				<ul class="nav nav-pills pull-right">					
					<!--/download-->					
					<li class="dropdown">
						<a class="dropdown-toggle" data-toggle="dropdown" href="#">Download <b class="caret"></b></a>
						<ul class="dropdown-menu pull-right">
							<?php foreach (($item['audiofiles']?:array()) as $audiotype=>$audiofile): ?>
							<li><a title="download <?php echo $audiotype; ?> - size: <?php echo ceil($audiofile['length'] / 1048576); ?> MByte" href="<?php echo $audiofile['link']; ?>"><?php echo $audiotype; ?></a></li>
							<?php endforeach; ?>
						</ul>
					</li>
					<!--download-->
					
					<!--bitlove-->
					<?php if ($feedattr['bitlove']): ?>
					<li class="dropdown">
						<a class="dropdown-toggle" data-toggle="dropdown" href="#">Bitlove <b class="caret"></b></a>
						<ul class="dropdown-menu pull-right">
							<?php foreach (($feedattr['bitlove']?:array()) as $audiotype=>$bitlove): ?>
							<li><a title="bitlove torrent <?php echo $audiotype; ?>" href="http://bitlove.org/<?php echo $bitlove['user']; ?>/<?php echo $bitlove['feed']; ?>/<?php echo $item['slug']; ?>.<?php echo $audiotype; ?>.torrent"><?php echo $audiotype; ?></a></li>
							<?php endforeach; ?>
						</ul>
					</li>
					<?php endif; ?>
					<!--/bitlove-->
				</ul>
				<!--/downloads & bitlove-->	
			
			<!--flattr-->
			<?php if ($feedattr['flattrid']): ?>
				<iframe src="http://api.flattr.com/button/view/?user_id=<?php echo $feedattr['flattrid']; ?>&amp;url=<?php echo Base::instance()->raw($item['flattrlink']); ?>&amp;language=<?php echo Base::instance()->raw($feedattr['flattrlanguage']); ?>&amp;category=audio&amp;title=<?php echo Base::instance()->raw($item['flattrtitle']); ?>&amp;description=<?php echo Base::instance()->raw($item['flattrdescription']); ?>&amp;tags=<?php echo Base::instance()->raw($item['flattrkeywords']); ?>&amp;popout=0&amp;button=compact" class="FlattrButton" width="110" height="20" frameborder="0" scrolling="no" border="0" marginheight="0" marginwidth="0" allowtransparency="true"></iframe>
			<?php endif; ?>
			<!--/flattr-->
			
			<!--episode-template-->
			<div>
				<?php foreach ((glob($templatepath.'/episode/*.html')?:array()) as $template): ?>
					<?php echo $this->render('episode/'.basename($template),$this->mime,get_defined_vars()); ?>
				<?php endforeach; ?>
			</div>
			<!--/episode-template-->
			
			<!--comments-->
			<?php if ($feedattr['disqus']): ?>
				<?php echo $this->render('disqus.html',$this->mime,get_defined_vars()); ?>
			<?php endif; ?>
			<!--/comments-->

		</div>
		<!--/content-->
			
	</div>
	<!--/page-->
<?php endif; ?>
<!--/SHOWPAGE-->
			
			
<?php endforeach; ?>
<!--/REPEAT SHOW-->


	<!--SHOWPAGE-->
	
	<!--/SHOWPAGE-->


<?php else: ?>
		<?php echo $this->render($showpage,$this->mime,get_defined_vars()); ?>
	<?php endif; ?>
<!--/CHECK AUDIO-->

		<!--footer-pagination-->
		<?php if ($page!=0): ?>
			<div>
			<ul class="pager">
				<?php if ($page>1): ?>
					<li class="previous">
						<a href="<?php echo $BASEURL; ?><?php echo $feedattr['slug']; ?>/show/pager/<?php echo $page-1; ?>">&larr; <?php echo $dict_newer; ?></a>
					</li>
				<?php endif; ?>
				<?php if ($page<$maxpage): ?>
					<li class="next">
						<a href="<?php echo $BASEURL; ?><?php echo $feedattr['slug']; ?>/show/pager/<?php echo $page+1; ?>">&rarr; <?php echo $dict_older; ?></a>
					</li>
				<?php endif; ?>
			</ul>
			</div>
		<?php endif; ?>
		<!--/footer-pagination-->      
	
	<br>
	<br />
	
	<!--footer-->
	<div class="footer">
        <p>
        	<?php echo Base::instance()->raw($feedattr['author']); ?>
			<?php if ($feedattr['twitter']): ?>
				<span>| twitter: <a id="color" href="https://twitter.com/<?php echo $feedattr['twitter']; ?>">@<?php echo $feedattr['twitter']; ?></a></span>
			<?php endif; ?>
			<?php if ($feedattr['adn']): ?>
				<span id="color">| adn: <a rel="me" href="https://alpha.app.net/<?php echo $feedattr['adn']; ?>">@<?php echo $feedattr['adn']; ?></a></span>
			<?php endif; ?>
		
			<?php if ($feedattr['email']): ?>
				<span>| email: <a href="mailto:<?php echo $feedattr['email']; ?>"><?php echo $feedattr['email']; ?></a></span>
			<?php endif; ?>
			<?php if ($feedattr['licensename']): ?>
				<span>| <?php echo $dict_license; ?>: <a href="<?php echo $feedattr['licenseurl']; ?>"><?php echo $feedattr['licensename']; ?></a></span>
			<?php endif; ?>		
		
        	<?php foreach ((glob($templatepath.'/footer/*.html')?:array()) as $template): ?>
				<?php echo $this->render('footer/'.basename($template),$this->mime,get_defined_vars()); ?>
			<?php endforeach; ?>
		</p>		
		
		<?php if ($feedattr['flattrid']): ?>
			<iframe src="http://api.flattr.com/button/view/?user_id=<?php echo $feedattr['flattrid']; ?>&amp;url=<?php echo Base::instance()->raw($feedattr['flattrlink']); ?>&amp;language=<?php echo Base::instance()->raw($feedattr['flattrlanguage']); ?>&amp;category=audio&amp;title=<?php echo Base::instance()->raw($feedattr['flattrtitle']); ?>&amp;description=<?php echo Base::instance()->raw($feedattr['flattrdescription']); ?>&amp;tags=<?php echo Base::instance()->raw($feedattr['flattrkeywords']); ?>&amp;popout=0&amp;button=compact"
				class="FlattrButton" width="110" height="20" frameborder="0" scrolling="no" border="0" marginheight="0" marginwidth="0" allowtransparency="true">
			</iframe>
		<?php endif; ?>
	</div>
	<!--/footer-->
	
</div>
<!--/FLUID-->


	<script src="<?php echo $BASEURL; ?>js/bootstrap.min.js"></script>
	<script src="<?php echo $BASEURL; ?>pwp/libs/html5shiv.js"></script>
	<script src="<?php echo $BASEURL; ?>pwp/static/podlove-web-player.js"></script>
	<?php if ($feedattr['disqus']): ?>
		<?php echo $this->render('disqus_multiple.js',$this->mime,get_defined_vars()); ?>
	<?php endif; ?>
</body>
</html>
