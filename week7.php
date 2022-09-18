<!DOCTYPE html>
<html>
<body>

<?php
        $menu = array("ID.1 Blueberry Cheesescake Price : 150 Bath/pcs", 
                "ID.2 Matcha Mille Crepe Cake Price : 80 Bath/pcs",
                "ID.3 Nutella Brownnie Price : 60 Bath/pcs",
                "ID.4 Chocolate Cake Price : 50 Bath/pcs",
                "ID.5 Strawberry Cake Price : 80 Bath/pcs",
                "ID.6 Orange Lemon Price : 80 Bath/pcs",
                "ID.7 Chocolate Chip Cookies Price : 45 Bath/pcs",
                "ID.8 Brown Chocolate Cookies Price : 50 Bath/pcs",
                "ID.9 Red Velvet Cookies Price : 50 Bath/pcs ",
                "ID.10 Korea Cream Cheeses Garlic Price : 85 Bath/pcs "); 
        foreach ($menu as $values){
            $r=rand(0,256);
            $g=rand(0,256);
            $b=rand(0,256);
            echo "<p style ='color:rgb($r,$g,$b)'>$values<br/>";

        }
    
?>
</body>
</html>