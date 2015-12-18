<!doctype html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="; charset=utf-8" />
    <title><?php echo $title; ?></title>
    <?php foreach($styles as $style): ?>
        <link href="<?php echo URL::base(); ?>public/assets/css/style.css"
              rel="stylesheet" type="text/css" />
        <link href="<?php echo URL::base(); ?>vendor/twbs/bootstrap/dist/css/bootstrap.css"
              rel="stylesheet" type="text/css" />
    <?php endforeach; ?>
</head>
<body>

<!-- navbar-top-->
<nav class="navbar navbar-fixed-top navbar-inverse">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="">Stuff<img alt=""></a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li><a href="page">Home</a></li>
                <li><a href="about">About</a></li>
                <li><a href="contact">Contact</a></li>
            </ul>
            <form class="navbar-form navbar-right navbar-inverse" role="search">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Search">
                </div>
            </form>
        </div>
    </div>
</nav>

<!-- container-->
<div class="container">
    <div class="container">
        <?php echo $content; ?>
    </div>
</div>

<!-- navbar-bottom-->
<div class="navbar navbar-default navbar-fixed-bottom" role="navigation">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="page">Home</a>
        <a class="navbar-brand" href="about">About</a>
        <a class="navbar-brand" href="contact">Contact</a>
    </div>
    <div class="container-bottom">
        <h4>Kohana Site &copy; 2015</h4>
    </div>
    <div class="navbar-collapse collapse">

    <script src ="vendor/components/jquery/jquery.js"></script>
    <script src ="vendor/twbs/bootstrap/dist/js/bootstrap.js"></script>

</body>
</html>