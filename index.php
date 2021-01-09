<?php
// SSL CHECKER
 if($_SERVER['HTTPS'] !== 'on') {
     $url = "https://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
     header('Location: '.$url, true, 301);
     exit();
 }
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Daniel Reeves | Website Development</title>

	<link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">
	<link rel="manifest" href="site.webmanifest">
	<link rel="mask-icon" href="safari-pinned-tab.svg" color="#000000">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="theme-color" content="#ffffff">

    <meta name="Description" content="With a wealth of knowledge and experience in Website Development, Daniel Reeves provides an affordable and efficient process to take your business online.">
    <link rel="canonical" href="https://www.danielreeves.net/" />
    <meta property="og:title" content="Daniel Reeves | Website Development"/>
    <meta property="og:description" content="With a wealth of knowledge and experience in Website Development, Daniel Reeves provides an affordable and efficient process to take your business online."/>
    <meta property="og:type" content="website"/>
    <meta property="og:url" content="https://www.danielreeves.net"/>
    <meta property="og:locale" content="en_GB"/>
    <meta property="og:site_name" content="Daniel Reeves"/>
    <meta name="twitter:title" content="Daniel Reeves | Website Development">
    <meta name="twitter:description" content=" With a wealth of knowledge and experience in Website Development, Daniel Reeves provides an affordable and efficient process to take your business online.">
    <meta name="twitter:image" content=" http://euro-travel-example.com/thumbnail.jpg">
    <meta name="twitter:site" content=" https://www.danielreeves.net">
    <meta name="twitter:card" content="summary">
    <meta name="Keywords" content="Website Development affordable efficient Web Developer Kidderminster Front-end Web developer Kidderminster">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Roboto&family=Roboto+Condensed:wght@400;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-133679150-1"></script>
<script>
window.dataLayer = window.dataLayer || [];
function gtag(){dataLayer.push(arguments);}
gtag('js', new Date());

gtag('config', 'UA-133679150-1');
</script>

</head>
<body>
    <div class="holding">
	    <div class="holding__image">
		    <img src="images/daniel-reeves.svg" alt="Daniel Reeves">
		    <ul class="holding__social">
			    <li class="holding__social-item">
				    <a data-fa-icon="&#xf39e" href="https://www.facebook.com/dan.reeves.779" target="_blank" title="Daniel Reeves Facebook"></a>
			    </li>
			    <li class="holding__social-item">
				    <a data-fa-icon="&#xf099" href="https://twitter.com/Reevesy002" target="_blank" title="Follow Me On Twitter"></a>
			    </li>
			    <li class="holding__social-item">
				    <a data-fa-icon="&#xf0e1" href="https://www.linkedin.com/in/daniel-reeves-400757101/" target="_blank" title="Add Me on Linkedin"></a>
			    </li>
			    <li class="holding__social-item">
				    <a data-fa-icon="&#xf09b" href="https://github.com/Danreeves125" target="_blank" title="View My Github"></a>
			    </li>
			    <li class="holding__social-item">
				    <a data-fa-icon="&#xf0e0" href="mailto:hello@danielreeves.net" title="Drop me a message"></a>
			    </li>
		    </ul>
	    </div>
	    <div class="holding__content">
		    <h1><span>Hi</span> I'm Dan</h1>
		    <h2>A Front-end Web Developer</h2>
		    <p>Got a website idea or need a update to an existing site? I'm always interested in?...</p>
		    <a href="mailto:hello@danielreeves.net" class="button">Get In Touch</a>
		    <div class="holding__box">
			    <p>
				    My website is currently in the process of a redesign so keep checking back to see the finished result.
			    </p>
		    </div>
	    </div>
    </div>
<link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.1.0/cookieconsent.min.css" />
<script src="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.1.0/cookieconsent.min.js"></script>
<script>
window.addEventListener("load", function(){
window.cookieconsent.initialise({
"palette": {
"popup": {
"background": "#edeff5",
"text": "#838391"
},
"button": {
"background": "#4b81e8"
}
},
"position": "bottom-left"
})});
</script>
</body>
</html>
