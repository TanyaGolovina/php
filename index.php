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
$lang = [
        'backend' => ['PHP', 'Python'],
        'frontend' => ['JavaScript'],
        ];
print_r($lang);
print $lang['frontend'][0];