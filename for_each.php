<?php 

//arrays
$food_types = array('salad', 'pasta', 'pizza');
$food_with_calory = array('salad'=>150, 'pasta'=>500, 'pizza'=>1000);
echo $food_types[0];
echo $food_with_calory['pasta'];

//multidimensional arrays
$food = array('Healthy'=>
                         array('salad', 'vegetables', 'pasta'),
              'Unhealthy'=>array('pizza', 'ice cream', 'popcorn'));
        
foreach($food as $element => $inner_array){
    echo '<strong>'.$element.'<strong><br>';
    foreach($inner_array as $item){
        echo $item.'<br>';
    }
}

?>