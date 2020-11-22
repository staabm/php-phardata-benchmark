<?php

require 'vendor/autoload.php';

echo "GZIP ACTIVE\n\n";

@unlink('phardata.tar');
echo "Start using PharData\n";
$start = microtime(true);

$it = new DirectoryIterator(__DIR__.'/assets/');
$phar = new PharData('phardata.tar');
$phar->compress(Phar::GZ);
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
$tar->setCompression(9, \splitbrain\PHPArchive\Archive::COMPRESS_GZIP);
foreach($it as $file) {
    if ($file->isDot()) continue;

    $tar->addFile($file->getRealPath());
}

echo "duration: ". (microtime(true) - $start) ."\n";
