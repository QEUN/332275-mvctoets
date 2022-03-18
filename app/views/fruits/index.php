<?php 
// var_dump($data["fruitData"]); 
echo "<h1> Fruit Overzicht </h1>";
echo "<h4>id     naam    kleur   prijs</h4>";
foreach($data["fruitData"] as $value) {
    echo $value->id . " " . $value->name . " " . $value->color . " " . $value->price ;
    echo "<br>";
}


?>
