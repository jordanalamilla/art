<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title><?php echo "$page_title / " . SITE_TITLE; ?></title>
        <link rel="stylesheet" href="css/style.css" type="text/css">

        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">

        <!--[if lt IE 9]>
	        <script src="js/html5shiv.min.js"></script>
        <![endif]-->
    </head>
    <body>

        <div id="app">

            <header>
                <div id="header-image-container">

                    <!-- DESKTOP -->
                    <img id="header-image-desktop"    
                         src="/img/rose-invert.jpg"
                         alt="A rose graphic by Jordan Alamilla."
                         title="The Artwork of Jordan Alamilla" />

                    <!-- MOBILE -->
                    <img id="header-image-mobile"  
                         src="/img/rose-invert.jpg"
                         alt="A rose graphic by Jordan Alamilla."
                         title="The Artwork of Jordan Alamilla" />
                </div>

                <h1>The Artwork of <strong>Jordan Alamilla</strong></h1>
            </header>

            <?php include( 'nav.php' ); ?>
