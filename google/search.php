<?php 
$string = json_decode(file_get_contents("cities.json"));
$newArray = [];
if($_GET){



    $name = $_GET["name"];

    foreach($string as $item){
        $pos = stripos(json_encode($item->{'name'}),$name);
        if($pos >= 1){
            array_push($newArray,$item);
        }
        if(count($newArray)==10){
			break;
		}
    };


    echo json_encode($newArray);
    return json_encode($newArray);
}
?>