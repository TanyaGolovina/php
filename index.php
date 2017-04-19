<?php

//$a=5;

//print 'Hellooo';

//print $a;
//var_dump($a,'Tanya');

//define('type','String');
//print type;
$nm='Rita';

function Hello($name = 'Guest')
{
    $mess="Hello ".$name."!<br>";
    if ($name === 'Guest')
    {
       //$mess = $mess.'<a href="#">Login</a>';
         $mess .='<a href="#">Login</a>';
    }
    elseif($name = 'Rita')
    {
       $mess = "How are you,".$name."?";
    }
    else
    {
     $mess .='<a href="#">Log out</a>';
    }
    return $mess;

}

//print Hello();
print Hello($nm);

//index array
//$arr = array();
$arr = [1 => 1, 2, 3];
$arr[] = 5;
$arr[] = 55;
unset($arr[3]);

var_dump($arr);

print $arr[2];



//assoc array
$langs = [
        'backend' => ['PHP', 'Python'],
        'frontend' => ['JavaScript'],
        ];
//циклы
foreach( $langs as $type => $array ) {
    print '<h2>'.$type.PHP_EOL.'</h2>';
    foreach ( $array as $lang ) {
        print '<div>'.$lang.'</div>';
    }
    }

for ($i = 0 ; $i < 10 ; $i = $i + 1)   {
      print $i;
}
var_dump($_SERVER);


//classes and objects

