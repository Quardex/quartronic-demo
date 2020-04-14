<?
require_once '../../../vendor/autoload.php';

echo "\n";
echo "Start updating...\n";
file_put_contents(__DIR__.'/update.lock', 1);
\quarsintex\quartronic\qcore\QUpdater::run(__DIR__.'/../../../');

?>
