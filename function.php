<?php
function ttc($price)
{
    return $price / 1.2;
}

function showLineArray($name, $data){
    return  'Produit :'. $name. '<br> prix :'  .
        $data['price'] .' €'. '<br>description : ' .  $data['description'] . '</br>';
}
