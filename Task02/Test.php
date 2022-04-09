<?php 
function runTest() 
{
    // toString test
    $obj1 = new Vector(4, 7, 5);
    echo 'Символьное представление: '.$obj1 . PHP_EOL;
    
    // add test
    $obj2 = new Vector(1, 2, 1);
    $obj3 = $obj1->add($obj2);
    echo $obj3 . PHP_EOL;

    // sub test
    $obj4 = $obj3->sub($obj2);
    echo $obj4 . PHP_EOL;
	
    // Product test
    $number = 4;
    $obj5 = $obj2->product($number);
    echo $obj5 . PHP_EOL;
	
    // scalarProduct test
    $number = $obj2->scalarProduct($obj3);
    echo $number . PHP_EOL;
	
    // vectorProduct test
    $obj6 = $obj2->vectorProduct($obj3);
    echo $obj6 . PHP_EOL;
}
?>
