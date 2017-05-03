<?php

//$a=5;

//print 'Hellooo';

//print $a;
//var_dump($a,'Tanya');

//define('type','String');
//print type;
/*$nm='Rita';

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
//var_dump($_SERVER);*/


//classes and objects
/*require_once 'src/Helper/GreetingHelper.php';
$formalhelper = new GreetingHelper('Hello');
//var_dump($helper);
print $formalhelper->sayHello('Sergey');
//$formalhelper = new GreetingHelper('Sergey');

require_once 'src/Cat.php';
$cat1 = new Cat('Kasya');
print $cat1->getNameType();*/


require  __DIR__.'/vendor/autoload.php'; //подключили все библиотеки и autoload
$app = new Silex\Application();//подключили приложение с нашего silex(создали объект класса Application namespace=Silex)
$app['debug'] = true;//включили режим отладки, изначально этот режим выкл, обращаемся к $app как к массиву
                     //(вообще так делать нельзя, но в этой ситуации можно,
                     //все зависит от имплементации, почитать базовые интерфейсы в php.net)

$app->register(new Silex\Provider\TwigServiceProvider(), array( //Twig Register
    'twig.path' => __DIR__.'/views',
));
$app->register(new Silex\Provider\DoctrineServiceProvider(), array( //Doctrine register
    'db.options' => array(
        'driver'   => 'pdo_mysql', //драйвер используемый
        'dbname'    => 'silex_blog', //имя бд
        'host' => 'localhost',
        'user'      => 'root',
        'password'  => 'usbw',
        'port' => 3307,
    ),
));

//register routs
$app->get('/', '\\Controller\\BlogController::indexAction');

$app->get('/blog/{id}', '\\Controller\\BlogController::showPostAction');

$app->run();







