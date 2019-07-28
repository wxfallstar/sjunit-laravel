<?php
/**
 * Created by PhpStorm.
 * User: fallstar
 * Date: 2019/7/28
 * Time: 18:20
 */
Route::get('/', 'SJunitController@index');
Route::post('/', 'SJunitController@store')->name('junit.store');

//测试路由
Route::get('test', 'TestController@index');

