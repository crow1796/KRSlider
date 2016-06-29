<?php

Route::group(['namespace' => 'KRSlider'], function(){
	Route::get('/krslider', 'KRSliderController@index');
});