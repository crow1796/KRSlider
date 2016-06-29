<?php

namespace KRSlider;

use App\Http\Controllers\Controller;

class KRSliderController extends Controller{
	public function index(){
		return view('krslider::index', ['title' => 'KRSlider']);
	}
}