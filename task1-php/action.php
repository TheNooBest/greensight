<?php
    namespace Greensight\Backend;

    require __DIR__ . '/../vendor/autoload.php';

    include 'MyClass.php';

    use Greensight\Backend\Classes\MyClass;
    use Monolog\Logger;
    use Monolog\Handler\StreamHandler;
    use Monolog\Formatter\HtmlFormatter;

    if (!isset($_POST['firstname']) || $_POST['firstname'] == '')
        exit;
    if (!isset($_POST['secondname']) || $_POST['secondname'] == '')
        exit;

    $first = $_POST['firstname'];
    $second = $_POST['secondname'];
    $object = new MyClass($first, $second);
    $result = $object->concatNames();
    echo $result;

    $log = new Logger('name');
    $log->pushHandler(new StreamHandler('ConcatedNames.log', Logger::INFO));
    $log->info($result);
