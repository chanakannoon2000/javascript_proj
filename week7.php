<!DOCTYPE html>
<html lang="en"> 


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CUP_N.BAKERY</title>
</head>
<style>
img {
    display: block;
    margin-left: auto;
    margin-right: auto;
    width: 250px;
}
.p{
    text-align: center;
}
</style>
<script>
    var check = true;
    const id01 = { id: 01, name: 'Blueberry Cheesescake', price: 150 , img: 'blueberry_cheesecake.jpg' }
    const id02 = { id: 02, name: 'Matcha Mille Crepe Cake', price: 80 , img: 'matcha.jpg' }
    const id03 = { id: 03, name: 'Nutella Brownnie', price: 60 , img: 'nutella.jpg' }
    const id04 = { id: 04, name: 'Chocolate Cake', price: 50 , img: 'chocolate.jpg' }
    const id05 = { id: 05, name: 'Strawberry Cake', price: 80 , img: 'strawberry.jpg' }
    const id06 = { id: 06, name: 'Orange Lemon', price: 80 , img: 'orange_lemon.jpg' }
    const id07 = { id: 07, name: 'Chocolate Chip Cookies', price: 45 , img: 'chocolate_chip.jpg' }
    const id08 = { id: 08, name: 'Brown Chocolate Cookies', price: 50 , img: 'brown_chocolate.jpg' }
    const id09 = { id: 09, name: 'Red Velvet Cookies', price: 50 , img: 'red_velvet.jpg' }
    const id10 = { id: 10, name: 'Korea Cream Cheeses Garlic ', price: 85, img: 'korea_cream.jpg' }
    const id11 = { id: 11, name: 'Ham&cheeses Croissant', price: 990, img: 'ham_cheeses.jpg' }
    
    const arr_menu = [id01, id02, id03, id04, id05, id06, id07, id08, id09, id10, id11]

    function showMenu() {
    
        if (check) {
            const Div = document.createElement("div");
            Div.setAttribute("id", "mydiv");
            document.body.appendChild(Div);
            arr_menu.forEach(myFunction);
            check = false;
        }
        else {
            const element = document.getElementById('mydiv')
            element.remove();
            check = true;
        }
    }
   
    function myFunction(value) {
        var img = document.createElement("img");
        var p = document.createElement("p");
        var s1 = document.createTextNode("ID." + value.id + "  " + value.name +" Price : " + value.price +" Bath/pcs" )
        p.appendChild(s1)
        img.src = value.img
        document.getElementById("mydiv").appendChild(img)
        document.getElementById("mydiv").appendChild(p)
        document.getElementById("mydiv").appendChild
    }   
    <?php

        foreach ($s1 as $values){
            $r=rand(0,256);
            $g=rand(0,256);
            $b=rand(0,256);
            echo "<p style ='color:rgb($r,$g,$b)'>$values<br/>";

        }
    
?>
</script>

<body>
    <h2>Click the button below to show the product</h2>
    <button onclick="showMenu()" > Show MENU</button>

</body>
