<?php

require 'vendor/autoload.php';

@unlink('phardata.tar.gz');
echo "Start using PharData\n";
$start = microtime(true);

$it = new DirectoryIterator(__DIR__.'/assets/');
$phar = new PharData('phardata.tar');
foreach($it as $file) {
    if ($file->isDot()) continue;

    $phar->addFile($file->getRealPath());
}

echo "duration: ". (microtime(true) - $start) ."\n";

echo "\n\n";

@unlink('splitbrain.tar');
echo "Start using splitbrain/php-archive\n";
$start = microtime(true);

$it = new DirectoryIterator(__DIR__.'/assets/');
$tar = new \splitbrain\PHPArchive\Tar();
$tar->create('splitbrain.tar');
foreach($it as $file) {
    if ($file->isDot()) continue;

    $tar->addFile($file->getRealPath());
}

echo "duration: ". (microtime(true) - $start) ."\n";
