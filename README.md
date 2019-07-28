# wxfallstar/sjunit-laravel

这里是框架的介绍

## 对于框架的要求
Laravel >=5.1 & PHP >7.1.3

## 安装的方式
```yml
composer require "wxfallstar/sjunit-laravel"
```
## 配置方式
Laravel5.5 手动配置laravel对于sjunit服务放到config/app.php中

## 解释路由
```php
<?php
Route::get('/', 'SJunitController@index');
Route::post('/', 'SJunitController@store')->name('junit.store');
?>
```