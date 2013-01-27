##CodeIgniter PHPunit library

Original code by [Clemens Gruenberger](http://www.foostack.com/foostack/)

Later on modified and updated by: 
* Mario Ricalde
* Grzegorz Godlewski
* [Tatsuya Fukata](https://github.com/fukata/CIUnit-for-CI2)
* [Kenji Suzuki](https://bitbucket.org/kenjis/my-ciunit/overview)

### Explanation
Test your CodeIgniter application with PHPUnit. The symfony domcrawler is used to validate your controller feedback.

### Requirements
* PHP 5.3+
* Composer

### Installation
```SHELL
php composer.phar update
```

### Usage
Go to the test directory and run:
```SHELL
phpunit
```

You can use the symfony domcrawler to check the controller response.
