<?php
$my_str = 'If the facts do not fit the theory, change the facts.';
 
// Outputs: 28
echo strlen($my_str);
echo str_word_count($my_str);
echo str_replace("facts", "truth", $my_str);
echo strrev($my_str);
?>