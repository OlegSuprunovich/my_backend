<h1>Hello</h1>

<?php
// comment
/**
 * documentation
 */
const A='Hello';

$a="World";
$x=10;
$y=10;
$x+$y;

echo '<h2>$x+$y='.$x+$y.'</h2>'; 
echo "<h2>$x+$y=".$x+$y.'</h2>';
echo A.$a;
print ('<h2>Hello print</h2>');

var_dump(PHP_INT_MAX);
print_r(__DIR__);

$list - [
    "key"=>"value"
];
var_dump($list);
phpinfo();

var_dump($_SERVER['REQUEST_URI']);
switch($_SERVER['REQUEST_URI']);