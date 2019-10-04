

# Project Template

Project Template for the Fabrication project

## Install the required components using composer
```
composer install
```
<br />

## Run the test suite
```
composer test
```
**Result:**
```
> vendor/bin/phpunit --bootstrap vendor/autoload.php --colors=always tests
PHPUnit 7.5.16 by Sebastian Bergmann and contributors.

.                                                                   1 / 1 (100%)

Time: 23 ms, Memory: 4.00 MB

OK (1 test, 1 assertion)
```
<br />

## Run task 1
```
composer run1
```
<br />

## Run task 2
```
composer run2
```
<br />

## Install components, run test and tasks.
```
composer install && composer test && composer runall
```
