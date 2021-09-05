<!DOCTYPE html>
<html>
<body>

<?php

$str = file_get_contents('https://en.wikipedia.org/wiki/Engineering');
$res = array_count_values(str_word_count(strip_tags($str),1));

foreach ($res as $key=>$value ) {
    if ($key == "Engineering"){
       echo '<h2>'.$key.'  ->  '.$value.'</h2>';
    }
    if ($key == "Engineers"){
    echo '<h2>'.$key.' ->  '.$value.'</h2>';      
    }
    if ($key == "Engineer"){
        echo '<h2>'.$key.' ->  '.$value.'</h2>';      
    }
}

?>
</body>
</html>


