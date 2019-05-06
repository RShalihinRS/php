<?php
echo "I'm Readush Shalihin";
$test = "Hello Bangladesh";

$number = 100;
$numberTwo = 50;
$data = $number + $numberTwo;

define('age', 20);
define('hello', "Hello Bangladesh");

/* error
define ('age', 70); 
*/
// another define 
define('age1', 70);

// string addign
$test1 = 'Hello Bangladesh';
$test2 = "Welcome to Bangladesh.";
$data1 = $test1 . ' ' . $test2;
$data2 = $test1 . "<br>" . $test2;

// add string with $name1 
$name1 = "Hi, My name is Readush Shalihin. Please";

// add string into $name2
$dName = 987654;
$wel_ID = "Welcome to Bangladesh. Your visiting ID is $dName.";
$wel_ID2 = 'Welcome to Bangladesh. Your visiting ID is $dName.';

// duble quotation in duble quotation
$data3 = "My name is \"Readush Shalihin.\" <br> $test2";

// Single quotation in Single quotation
$data4 = 'My name is \'Readush Shalihin.\' <br>'. $test2;


// Position by printing
$position1 = $test1[0];

// Function
function testF() {
    echo "Hi, I'm Function.";
}

// Function Peramiter and Argument
function testP ($content) {
    echo $content;
}

// Function Peramiter and Argument
function testphp ($content2 = "Welcome to PHP Function.") {
    echo $content2;
}

// Function dynamic Peramiter and Argument
function testd ($name, $location, $group) {
    echo "Hi, My name is $name";
    echo "<br>";
    echo "I'm from $location";
    echo "<br>";
    echo "I am a Student of $group";
}

// Function dynamic Peramiter and Argument with single quotation
function testdy ($name, $location, $group) {
    echo 'Hi, My name is' .' '. $name;
    echo "<br>";
    echo 'I\'m from'.' '. $location;
    echo "<br>";
    echo 'I am a Student of'.' '. $group;
}

// case sensetive testing
   $casesen = 500;
   $Casesen = 100;


?>
<!DOCTYPE html>
<html>

<head>
    <title>Hellow Bangadesh</title>
</head>

<body>
    <h2>
        <?php echo $test;  ?>
    </h2>
    <h2>
        <?php echo $data;  ?>
    </h2>
    <h2> Define Age
        <?php echo age;  ?>
    </h2>
    <h2> Define Hello =
        <?php echo hello;  ?>
    </h2>
    <h2>
        <?php echo age1; ?>
    </h2>
    <h2>
        <?php echo $data1;   ?>
    </h2>
    <h2>
        <?php echo $data2;  ?>
    </h2>
    <h2>
        <?php  echo $name1.' '. $test2; ?>
    </h2>
    <h2>
        <?php echo $wel_ID;  ?>
    </h2>
    <h2>
        <?php echo $wel_ID2; ?>
    </h2>
    <h2>
        <?php echo $data3;  ?>
    </h2>
    <h2>
        <?php echo $data4;  ?>
    </h2>
    <h2>
        <?php echo $position1;  ?>
    </h2>
    <h2>
        <?php echo strlen($test);  ?>
    </h2>
    <h2>
        <?php testF(); ?>
    </h2>
    <h2>
        <?php  testP("Hi, I'm Function with peramiter and Argument."); ?>
    </h2>
    <h2>
        <?php testphp();  ?>
    </h2>
    <h2>
        <?php  testd("Readush Shalihin", "Manikganj", "CMBD"); ?>
    </h2>
    <h2>
        <?php testdy("R Shalihin RS", "Narshingdi", "CMBD");  ?>
    </h2>
    <h2>
        <?php echo strtoupper($test2);  ?>
    </h2>
    <h2>
        <?php echo strtolower($test2);  ?>
    </h2>
    <h2>
        <?php echo str_replace('e', 'a', $test);  ?>
    </h2>
    <h2>
        <?php echo str_replace("Bangladesh", "Dhaka", $test2);  ?>
    </h2>
    <h2>
        <?php  echo $casesen ?>
    </h2>
    <h2>
        <?php  echo $Casesen ?>
    </h2>
    <h2>
        <?php   ?>
    </h2>
</body>

</html>