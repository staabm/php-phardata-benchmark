This repo contains [a repro-benchmark](https://github.com/staabm/php-phardata-benchmark/blob/master/bench.php) to show how slow PharData is compared to a simple userland library.

we see PharData beeing roughly 10x slower then the userland library [splitbrain/php-archive](https://github.com/splitbrain/php-archive).

## See the following testruns on my windows10 x64 notebook:

```bash
$ php -v
PHP 7.3.0 (cli) (built: Dec  6 2018 02:17:00) ( ZTS MSVC15 (Visual C++ 2017) x86 )
Copyright (c) 1997-2018 The PHP Group
Zend Engine v3.3.0-dev, Copyright (c) 1998-2018 Zend Technologies
    with blackfire v1.24.1~win-x32-zts73, https://blackfire.io, by Blackfire


$ php bench.php
Start using PharData
duration: 1.5862009525299


Start using splitbrain/php-archive
duration: 0.076961040496826

$ php bench.php
Start using PharData
duration: 1.0293560028076


Start using splitbrain/php-archive
duration: 0.083132982254028

$ php bench.php
Start using PharData
duration: 0.99211502075195


Start using splitbrain/php-archive
duration: 0.096863985061646

$ php bench.php
Start using PharData
duration: 1.0401749610901


Start using splitbrain/php-archive
duration: 0.088247776031494
```

the same is true when GZIP is activated.

## Results on MacBook Pro with macOS 11.0.1:

```bash
$ php -v
PHP 7.4.12 (cli) (built: Oct 29 2020 18:37:21) ( NTS )
Copyright (c) The PHP Group
Zend Engine v3.4.0, Copyright (c) Zend Technologies
    with Zend OPcache v7.4.12, Copyright (c), by Zend Technologies
    with blackfire v1.44.0~mac-x64-non_zts74, https://blackfire.io, by Blackfire


$ php bench.php
Start using PharData
duration: 0.23402190208435


Start using splitbrain/php-archive
duration: 0.036140918731689

$ php bench.php
Start using PharData
duration: 0.30424404144287


Start using splitbrain/php-archive
duration: 0.024400949478149

$ php bench.php
Start using PharData
duration: 0.30759882926941


Start using splitbrain/php-archive
duration: 0.024186849594116

$ php bench.php
Start using PharData
duration: 0.28332209587097


Start using splitbrain/php-archive
duration: 0.022264003753662
```

