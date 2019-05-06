<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>array and number</title>
</head>

<body>
    <?php
    // this is 1st customer list.
    echo "First Array. <br>";
    $customerList =array('Readush Shalihin','Dhaka',"PHP");
    echo "<pre>";
    print_r($customerList);
    
    
    echo "<br>";
    echo "<br>";

    // this is 2nd customer list.
    echo "2nd Array.";
    echo "<br>";
    $customerList2 = [
        'name'=> 'Readush Shalihin',
        'ID'=> 320, 
        'age'=> 26, 
        'contact'=> '0123456789', 
        'occupation' => 'Student'
        ];

    echo "<pre>";
    print_r($customerList2);
    
    echo "<br>";
    echo "<br>";

    // merging 1st customer list and 2nd customer list into $allcustomer.
    $allcustomer = array_merge($customerList,$customerList2);
    echo "<pre>";
        print_r($allcustomer);


    echo "<br>";
    echo "<br>";

    // array inside multiple array.
    echo "<br>";
    $product = [
        "shart" => [
            "manShart"   => "38 pic",
            "womenShart" => "20 pic"
        ],
        "jins" => [
            "manJins" => "40 pic",
            "womenJins" => "20 pic"
        ]
    ];
    echo "<pre>";

    print_r($product);

    echo "<br>";

    echo "<br>";


    ?>


</body>

</html>