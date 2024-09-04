<?php


namespace App\classes;
class Product
{
    public $products = [];

    public function __construct()
    {
        $this->products = [
            0 => [
                'id'            => 1,
                'name'          => 'New T Shirt',
                'price'         => 1500,
                'description'   => 'New T Shirt Description',
                'image'         => 'assets/images/1.jpg'
            ],
            1 => [
                'id'            => 2,
                'name'          => 'New Sharee',
                'price'         => 1500,
                'description'   => 'New Sharee Description',
                'image'         => 'assets/images/2.jpg'
            ],
            2 => [
                'id'            => 3,
                'name'          => 'Jens Pant',
                'price'         => 1500,
                'description'   => 'Jens Pant Description',
                'image'         => 'assets/images/3.jpg'
            ],
            3 => [
                'id'            => 4,
                'name'          => 'Jens Pant',
                'price'         => 1500,
                'description'   => 'Jens Pant Description',
                'image'         => 'assets/images/3.jpg'
            ],
        ];
    }

    public function getAllProduct()
    {
        return $this->products;
    }
}