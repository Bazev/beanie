<?php include 'vars.php';
include 'function.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>


<?php


foreach ($myProducts as $name => $data) {
    echo showLineArray($name, $data);
    if ($data['price'] >= 12) {
        echo '<p  style="color:green">Prix HT :' . ttc($data['price']) . '€</p>';
    } else {
       echo '<p style="color:blue">Prix HT :' . ttc($data['price']) . '€</p>';
    }

}
?>


</body>
</html>









