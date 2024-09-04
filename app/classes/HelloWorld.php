<?php

namespace App\classes;
use App\classes\Student;
use App\classes\Product;
use App\classes\Slider;
class HelloWorld
{
    public $message, $singleSlider, $student, $students = [], $product, $products = [], $slider, $sliders = [];

    public function __construct()
    {
        $this->message = "Bangladesh 2";
    }

    public function index()
    {
        $this->product  = new Product();
        $this->products = $this->product->getAllProduct();

        $this->slider  = new Slider();
        $this->sliders = $this->slider->getAllSlider();
        return view('home', ['products' => $this->products, 'sliders' => $this->sliders]);
    }

    public function about()
    {

        return view('about', ['products' => $this->products]);
    }

    public function contact()
    {
        return view('contact');
    }

    public function service()
    {
        return view('service');
    }

    public function detail($id)
    {
        $this->slider = new Slider();
        $this->singleSlider = $this->slider->getSliderById($id);
        return view('detail', ['slider' => $this->singleSlider]);
    }
}