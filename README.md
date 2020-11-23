This repo contains [a repro-benchmark](https://github.com/staabm/php-phardata-benchmark/blob/master/bench.php) to show how slow PharData is compared to a simple userland library.

we see PharData beeing roughly 10x slower then the userland library [splitbrain/php-archive](https://github.com/splitbrain/php-archive).

## profilled using blackfire

```bash
blackfire run php bench.php

Start using PharData
duration: 0.68688011169434


Start using splitbrain/php-archive
duration: 0.25864601135254


Memory       1.22MB
Wall Time     992ms
I/O Wait      581ms
CPU Time      412ms
Network         n/a     n/a     n/a
SQL             n/a     n/a

```

![image](https://user-images.githubusercontent.com/47448731/99962209-0fe2e280-2d90-11eb-825a-77038a0447bf.png)


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

## tested on ubuntu20

```bash
$ php -v
PHP 7.4.12 (cli) (built: Oct 31 2020 17:04:25) ( NTS )
Copyright (c) The PHP Group
Zend Engine v3.4.0, Copyright (c) Zend Technologies
    with Zend OPcache v7.4.12, Copyright (c), by Zend Technologies
    with Xdebug v2.9.8, Copyright (c) 2002-2020, by Derick Rethans
    with blackfire v1.44.0~linux-x64-non_zts74, https://blackfire.io, by Blackfire


$ php bench.php
Start using PharData
duration: 0.68476390838623


Start using splitbrain/php-archive
duration: 0.048066854476929

$ php bench.php
Start using PharData
duration: 0.68217706680298


Start using splitbrain/php-archive
duration: 0.045325040817261

```

## tested on ubuntu18

```bash
php -v
PHP 7.2.34-2+ubuntu18.04.1+deb.sury.org+1 (cli) (built: Oct 10 2020 19:44:20) ( NTS )
Copyright (c) 1997-2018 The PHP Group
Zend Engine v3.2.0, Copyright (c) 1998-2018 Zend Technologies
    with Zend OPcache v7.2.34-2+ubuntu18.04.1+deb.sury.org+1, Copyright (c) 1999-2018, by Zend Technologies
    with Xdebug v2.9.8, Copyright (c) 2002-2020, by Derick Rethans
    with blackfire v1.44.0~linux-x64-non_zts72, https://blackfire.io, by Blackfire

k$ php bench.php
Start using PharData
duration: 0.7270200252533


Start using splitbrain/php-archive
duration: 0.055887937545776


$ php bench.php
Start using PharData
duration: 0.69905304908752


Start using splitbrain/php-archive
duration: 0.054063081741333


$ php bench.php
Start using PharData
duration: 0.64250612258911


Start using splitbrain/php-archive
```
