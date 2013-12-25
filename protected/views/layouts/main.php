<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title><?php echo CHtml::encode(Yii::app()->name); ?></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

        <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/normalize.css">
        <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/foundation.min.css">
        <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css">
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/modernizr.js"></script>
    </head>

    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <div class="main-wrapper">
            <header class="main-header row">
                <div class="large-4 columns">
                    <h1 class="logo">Bandera</h1>
                </div>
                <nav class="large-8 columns">
                    <div class="main-menu">
                        <ul class="button-group">
                            <li><?php echo CHtml::link('Lista oglasa', array('ad/lista_oglasa'), array('class' => 'button small secondary')); ?></li>
                        </ul>
                        <ul class="button-group">
                            <?php if(Yii::app()->session['id']): ?>
                            <li><?php echo CHtml::link('Odjavi se', array('user/logout'), array('class' => 'button small secondary')); ?></li>
                            <?php else: ?>
                            <li><?php echo CHtml::link('Prijavi se', array('user/login'), array('class' => 'button small secondary')); ?></li>
                            <li><?php echo CHtml::link('Registruj se', array('user/register'), array('class' => 'button small')); ?></li>
                            <?php endif; ?>
                        </ul>
                    </div>

                </nav>
            </header>

            <div class="main-container row">
                <?php echo $content; ?>
            </div>

            <footer class="main-footer row">
                <nav class="large-12 columns">
                    <ul class="footer-menu">
                        <li><a href="#">o nama</a></li>
                        <li><a href="#">uslovi koristenja</a></li>
                        <li><a href="#">usluge</a></li>
                        <li><a href="#">kontakt</a></li>
                    </ul>
                </nav>
                <div class="large-12 columns">
                    <p class="copyright">
                        Copyright &copy; 2013 Bandera.ba
                    </p>
                </div>
            </footer>
        </div>

        <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.js"></script>
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/foundation.min.js"></script>
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/plugins.js"></script>
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/main.js"></script>

        <script src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>

        <script>
            $(document).foundation();
        </script>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
                function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
                e=o.createElement(i);r=o.getElementsByTagName(i)[0];
                e.src='//www.google-analytics.com/analytics.js';
                r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X');ga('send','pageview');
        </script>
    </body>
</html>
