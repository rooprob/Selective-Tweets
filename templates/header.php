<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml" xmlns:fb="http://ogp.me/ns/fb#">
  <head>
    <meta charset="utf-8">

<link rel="stylesheet" type="text/css" href="<?php echo ROOT_URL; ?>css/bootstrap.min.css" />

<style type="text/css">
body, td { 
    font-size: 12px;
    color: #333;
    font-family: 'lucida grande', tahoma, verdana, arial;
} 
a { color: #3B5998; text-decoration: none; }
</style>

<meta property="og:title" content="Selective Tweets"/>
<meta property="og:image" content="http://graph.facebook.com/<?php echo APP_NAME ?>/picture?type=large"/>

<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>

<script type="text/javascript">
  $(document).ready(function() {
    // This is more like it!
  });
</script>

<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', '<?php echo GA_UA ?>']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

</head>
<body>

<div id="fb-root"></div>
<script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '<?php echo FB_APP_ID; ?>',
      channelUrl : '<?php echo ROOT_URL; ?>channel.html',
      status     : true, // check login status
      cookie     : true, // enable cookies to allow the server to access the session
      xfbml      : true  // parse XFBML
    });
  };

  // Load the SDK Asynchronously
  (function(d){
     var js, id = 'facebook-jssdk', ref = d.getElementsByTagName('script')[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement('script'); js.id = id; js.async = true;
     js.src = "//connect.facebook.net/en_US/all.js";
     ref.parentNode.insertBefore(js, ref);
   }(document));
</script>


<h1 style="margin-top: 15px;">Welcome to <?php echo PUB_NAME ?>! (#fb)</h1>

<p style="font-size: 15px; line-height: 19px;">Selective Tweets lets you update your Facebook status from Twitter - BUT only when you want.
<br /><strong>Just end a tweet with the #fb hashtag</strong> when you want it to post to Facebook - simple!</p>

<p style="font-size: 15px; line-height: 17px; font-weight: 900;
font-style: italic; color: green;">Note this is a developer
<a href="<?php echo GIT_FORK ?>">fork</a> of the original Facebook app
<a href="https://apps.facebook.com/selectivetwitter/">Selective-Tweets</a>.
The original by Andy Young andy@apexa.co.uk @andyy you should attribute any accolades.
This fork was created by as Andy's site was down.<p>

<?php include 'tabs.php'; ?>

