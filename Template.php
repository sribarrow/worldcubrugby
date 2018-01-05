<!DOCTYPE html>
<html>
    <head>
        <title><?php echo $title; ?></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="Styles/Styles.css">
    </head>
    <body>
        <div id="wrapper">
            <div id="banner">
                <p class="banner-content">World Cup Rugby <span class="banner-span">2018</span></p>
            </div>
            <div id="navigation">
                <div id="left_menu" >
                    <ul id="nav">
                        <li href="#">Home</li>
                        <li href="#">Shop</li>
                        <li href="#">Fixtures</li>
                        <li href="#">Contact</li>
                    </ul>
                </div>
            </div>
            
            <div id="maincontent">
                <?php echo $content; ?>
                
            </div>
            
            <div id="sidebar">
                
               
            </div>
            
            <div id="footer">
                <p>All Rights Reserved.</p>
            </div>
            
        </div>
    </body>
</html>
