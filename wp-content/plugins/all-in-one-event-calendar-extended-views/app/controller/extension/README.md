All-in-One Event Calendar Extensions Library
============================================

Ai1EC/2.0 Extensions base classes to be used as a Git submodule.

Initiating
----------

Adding submodule to your project works like this:
```bash
$ git submodule add \
	https://github.com/thenly/all-in-one-event-calendar-extensions-library \
	./app/controller/extension
```

You must execute command above when in extension main directory.

Using
-----

Make sure your main controller class extends
`Ai1ec_License_Controller` class from this library.

To manually load classes use following snippet:
```php
require_once AI1ECPN_PATH . DIRECTORY_SEPARATOR . 'app' .
	DIRECTORY_SEPARATOR . 'controller' . DIRECTORY_SEPARATOR .
	'extension' . DIRECTORY_SEPARATOR . 'load.php';
```

*NOTICE*: here `AI1ECPN_PATH` must be your individual plugin constant
for defining base path to it's root directory.

to update the classes when new versions come out use `git submodule foreach git pull origin master`