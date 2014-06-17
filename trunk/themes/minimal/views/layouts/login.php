<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="es"> <!--<![endif]-->
    <!-- BEGIN HEAD -->
    <head>
        <meta charset="utf-8" />
        <title><?php echo CHtml::encode($this->pageTitle); ?></title>
        <!--<title>Minimal 1.0 - Login Page</title>-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="UTF-8" />

        <link rel="icon" type="image/ico" href="<?php echo Yii::app()->theme->baseUrl; ?>/assets/images/favicon.ico" />
        <!-- Bootstrap -->
        <link href="<?php echo Yii::app()->theme->baseUrl; ?>/assets/css/vendor/bootstrap/bootstrap.min.css" rel="stylesheet">
        <link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
        <link rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl; ?>/assets/css/vendor/bootstrap-checkbox.css">

        <link href="<?php echo Yii::app()->theme->baseUrl; ?>/assets/css/minimal.css" rel="stylesheet">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
    </head>
    <!-- END HEAD -->
    <!-- BEGIN BODY --> 
    <body class="bg-1">
        <!-- Wrap all page content here -->
        <div id="wrap">
            <!-- Make page fluid -->
            <div class="row"> 
                <!-- Page content -->
                <div id="content" class="col-md-12 full-page login">
                    <div class="inside-block">
                        <!-- BEGIN LOGO -->
                        <img src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/images/logo-big.png" alt class="logo">
                        <!-- END LOGO -->


                        <?php echo $content ?>

                    </div>
                </div>
                <!-- /Page content -->     
            </div>
        </div>
        <!-- Wrap all page content end -->
    </body>
    <!-- END BODY -->
</html>