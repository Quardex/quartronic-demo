<?

require_once '../../vendor/autoload.php';

$QApp = new \quarsintex\quartronic\qcore\Quartronic;
$QApp->run([
    'appDir' => 'app',
    'requireAuth'=>false,
]);

?>
