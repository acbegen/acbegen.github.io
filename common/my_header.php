<?php
function ChangeTitle( $new_title ) {
  $output = ob_get_contents();
  ob_end_clean();
  $output = preg_replace( "/<title>(.*?)<\/title>/", "<title>$new_title</title>", $output );
  echo $output;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-Z9DSEK1M79"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'G-Z9DSEK1M79');
</script>
<meta charset="UTF-8">
<meta name="description" content="Ali C. Begen's Personal Website">
<title>Ali C. Begen's Personal Website</title>
<meta name="keywords" content="Ali C. Begen, Turkey, Bilkent, Georgia Tech, Cisco, Qualcomm, Networked Media, Multimedia, Systems, Comcast, NBCUniversal, Streaming Video, Ozyegin University, OzU">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="author" content="Ali C. Begen">

<!-- Favicons -->
<link href="img/favicon.png" rel="icon">
<link href="img/apple-touch-icon.png" rel="apple-touch-icon">

<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">

<!-- Bootstrap CSS File -->
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">

<!-- Libraries CSS Files -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.0/animate.compat.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css" rel="stylesheet">
<link href="https://cdn.rawgit.com/jpswalsh/academicons/master/css/academicons.min.css" rel="stylesheet">

<!-- Main Stylesheet File -->
<link href="css/style.css?<?php echo filectime('../css/style.css');?>" rel="stylesheet">
</head>

<body>

<!--==========================
    Header
  ==========================-->
<header id="header" class="d-print-none">
  <div class="container">
    <div id="logo"><a href="index.php"><img src="img/acbegen2.png" height="50" alt="acbegen"></a></div>
    <nav id="nav-menu-container">
      <ul class="nav-menu">
        <li><a href="awards.php">Honors and Awards</a></li>
        <li class="menu-has-children"><a href="current.php">Research</a>
          <ul>
            <li><a href="current.php">Talks and Publications</a></li>
            <li><a href="http://streaming.university" target="_blank">Streaming University</a></li>
            <li><a href="services.php">Professional Services</a></li>
            <li><a href="cisco.php">Achievements at Cisco</a></li>
            <li><a href="phd_research.php">PhD Research</a></li>
          </ul>
        </li>
        <li><a href="teaching.php">Teaching</a></li>
        <li><a href="patents.php">Patents</a></li>
        <li><a href="standards.php">Standards</a></li>
        <li><a href="workshops.php">Workshops</a></li>
      </ul>
    </nav>
  </div>
</header>
<!-- Header --> 