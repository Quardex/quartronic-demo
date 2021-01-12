<?

require_once '../../../vendor/autoload.php';

$QApp = new \quarsintex\quartronic\qcore\Quartronic;
$QApp->run([
    'webPath'=>'/admin/',
    'webDir'=>__DIR__.'/',
]);

?>
