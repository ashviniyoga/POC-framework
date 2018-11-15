<!DOCTYPE HTML>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Piece Of Cake Framework</title>
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon"/>
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/rotating-slider.min.css">
    <link rel="stylesheet" href="css/pocRotator.css">

    <?php
			if (isset($_GET['page'])) {
				switch ( $_GET ["page"] ) {
				
				case  'documentation';
				$content="pages/documentation.php";
				break;
                        
                case  'examples';
				$content="pages/examples.php";
				break;
                
                # SideBar menu 
                case  'accordions';
				$content="pages/accordions.php";
				break;                           
                
                case  'border';
				$content="pages/border.php";
				break;                           
                
                case  'buttons';
				$content="pages/buttons.php";
				break;                                                     
                
                case  'container';
				$content="pages/container.php";
				break;                           
                
                case  'colors';
				$content="pages/colors.php";
				break;                           
                
                case  'display';
				$content="pages/display.php";
				break;                           
                
                case  'fonts';
				$content="pages/fonts.php";
				break;                           
                
                case  'forms';
				$content="pages/forms.php";
				break;                           
                
                case  'grid';
				$content="pages/grid.php";
				break;                           
                
                case  'icons';
				$content="pages/icons.php";
				break;                           
                
                case  'images';
				$content="pages/images.php";
				break;                           
                
                case  'lists';
				$content="pages/lists.php";
				break;                           
                
                case  'margin-padding';
				$content="pages/margin-padding.php";
				break;                           
                
                case  'navigation';
				$content="pages/navigation.php";
				break;                           
                
                case  'helper';
				$content="pages/helper.php";
				break;

                case  'slider';
				$content="pages/slider.php";
				break;

                case  'tables';
				$content="pages/tables.php";
				break;

                case  'text';
				$content="pages/text.php";
				break;
                
                # End SideBar menu
                        
				default;
				$content="home.php";
				break;
			}

			} else {
				$content="home.php";
			}
		?>

</head>

<body>

    <div class="poc-main">
        <header class="poc-header poc-ph4">
            <?php include 'includes/header.php';?>
        </header>

        <div class="">
            <section class="poc-flex-row">
                <?php include $content; ?>
            </section>
        </div>
        <footer class="poc-pv2">
            <?php include 'includes/footer.php';?>
        </footer>
    </div>
    <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="js/fontawesome-all.min.js"></script>

    <script type="text/javascript" src="js/accordions.js"></script>
    <script type="text/javascript" src="js/include.js"></script>
    <script type="text/javascript" src="js/jquery.rotating-slider.min.js"></script>
    <script type="text/javascript" src="js/pocSliders.js"></script>
    <script type="text/javascript" src="js/search.js"></script>
    <script type="text/javascript" src="js/main.js"></script>
   
</body>

</html>
