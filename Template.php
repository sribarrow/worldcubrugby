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
            <?php 
                if(isset($_SESSION["username"])){
                    echo $_SESSION["username"];
                    echo "<div class='welcomemsg'<p>Welcome <strong>" . $_SESSION["username"] . "</strong></p></div>";
                }
            ?>
            
            <div id="banner">
                <p class="banner-content">World Cup Rugby <span class="banner-span"><?php echo $year; ?></span></p>
            </div>
            <div id="navigation">
                <div id="left_menu" >
                    <ul id="nav">
                        <li><a href="index.php" <?php if($isActive == "home"){echo "class='currentpage'";} ?> >Home</a></li>
                        <li><a href="ShopFront.php" <?php if($isActive == "shop"){echo  "class='currentpage'";}  ?>>Shop</a></li>
                        <li><a href="Fixtures.php" <?php if($isActive == "fix"){echo  "class='currentpage'";}  ?>>Fixtures</a></li>
                        <li><a href="Posts.php" <?php if($isActive == "posts"){echo  "class='currentpage'";}  ?>>Posts</a></li>
                        <?php 
                            if(!isset($_SESSION["username"])){
                                
                        ?>
                        <li id="login"><a href="login.php" <?php if($isActive == "login"){echo  "class='currentpage'";}  ?>>Login</a></li>
                        <?php
                        
                                } else { 
                         
                        ?>
                            <li id="logout"><a href="logout.php" <?php if($isActive == "login"){echo  "class='currentpage'";} ?>>Logout</a></li>
                        <?php 
                        
                            } 
                        ?>
                    </ul>
                </div>
            </div>
            
            <div id="maincontent">
                <?php echo $isActive . $content; ?>
                
            </div>
            
            <div id="sidebar">
                <div class="sb_image"><img src="Images/pele.jpg"/> </div>
                <div class="sb_image"><img src="Images/maradona.jpg"/> </div>
            
            <div id="footer">
                <p>All Rights Reserved.</p>
            </div>
            
        </div>
        <Script type="text/javascript">
            function alertUpdate(){
                alert("Item added to basket");
            }
        </script>
    </body>
</html>
