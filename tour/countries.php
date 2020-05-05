
<?php
include "data.php";
$v = "US";
if (isset($_POST['formSubmit'])) {
    $v = $_POST['formCountry'];
    $stars = $_POST['stars'];
    $price = $_POST['price'];

    $redir = "US.html";
    switch ($v) {
        case "US":$redir = "US.php";
            break;
        case "UK":$redir = "UK.php";
            break;
        case "France":$redir = "France.php";
            break;
        case "Russia":$redir = "Russia.php";
            break;
        case "Japan":$redir = "Japan.php";
            break;
        default:echo ("Error!");exit();
            break;
    }
    $h = "";
    foreach ($hotels as $hotel) {
        foreach ($hotel as $key => $value) {
        if ($key == "price" && $value <= $price){
            $h .= "Отель{$hotel['name']} \${$value}";

          }
        }
    }


    header("Location: $redir?stars=$stars&price=$price&hotel=$h");
    exit();
}