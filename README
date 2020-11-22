This repo contains a repro-benchmark to show how slow PharData is compared to a simple userland library.

See the following testruns on my windows10 x64 notebook:

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