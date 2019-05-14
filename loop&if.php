<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Loop</title>
</head>

<body>

    <h1>Hi this is a php basic file.</h1>

    <?php

    for ($i = 0; $i < 5; $i++) {
        echo $i . "<br>";
    }


    ?>
    <br>
    <br> <br> <br>
    <?php
    $num = [1, 2, 3, 4, 5, 6];

    for ($i = 0; $i < count($num); $i++) {
        echo $i . "<br>";
    }

    ?>
    <br> <br> <br>

    <?php
    // creat an array of laptop list

    $laptopList = [
        ["Brand" => "Acer", "price" => "1800 USD"],
        ["Brand" => "Dell", "price" => "2200 USD"],
        ["Brand" => "Asus", "price" => "1700 USD"],
        ["Brand" => "HP", "price" => "2000 USD"],
        ["Brand" => "IBM", "price" => "2500 USD"],
        ["Brand" => "Lenevo", "price" => "2700 USD"],
        ["Brand" => "Apple", "price" => "3200 USD"]

    ];
    // foreach loop 

    foreach ($laptopList as $lplist)

        // print_r($lplist); // full array retun.

        // echo "<br>";
        echo $lplist["Brand"] . "-" . $lplist["price"] . "<br>";

    $customerName = ["Reyaad", "Shawon", "Pobitro", "Partho", "Abid Pranto"];
    ?>

    <ul>
        <!-- for Static li -->
        <?php foreach ($customerName as $userName) { ?>
            <li>Belal Hossain</li>
        <?php     }

    ?>
    </ul>



    <!-- dynamic foreach loop  -->
    <br><br><br>


    <?php $customerName1 = ["Reyaad", "Shawon", "Pobitro", "Partho", "Abid Pranto", "Tamim"]; ?>
    <ul>
        <?php foreach ($customerName1 as $key => $user) { ?>
            <li><?php echo $user . " - the key of this user is - " . $key; ?></li>
        <?php  }

    ?>

    </ul>




    <ul>
        <?php
        foreach ($laptopList as $lplist1) { ?>
            <li><?php echo $lplist1["Brand"] . " - " . $lplist1["price"]; ?></li>
        <?php
    }

    ?>
    </ul>

    <h2>Product List & Price </h2>

    <ul>
        <?php
        foreach ($laptopList as $Product) {
            echo "<li>" . $Product["Brand"] . " - " . "<span style='color:green;'>
    Price is " . $Product["price"] . " </span>" . "</li>";
        }
        ?>
    </ul>

    <br><br><br>

    <!-- Boolean -->

    <?php
    echo 5 > 3 ;  // its return 1 (becouse its true , if its false it will return empty.)
    echo "<br>";
    echo "R" > "A"; // its return 1 (becouse the latter of 'R' position is 26 .)
    echo "<br>";
    echo "r" > "R"; // its return 1 (becouse the latter of 'r' position is grater then Capital latter 'R' .)
    echo "<br>";
    ?>

        <br> <br><br>
    <!-- if statment (condition) -->

    <?php
    $age = 35;
    if ($age < 10){
        echo " You are under 10 years!";
    } elseif ($age < 20) {
        echo "You are teen ager.";
    }  elseif ($age < 30) {
        echo "You are not too old.";
    }  elseif ($age < 40) {
        echo "You are going old.";
    } elseif ($age > 40) {
        echo "You are old enought.";
    }
     
    
    
    
    ?>









</body>

</html>