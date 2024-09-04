<?php


namespace App\classes;
class Slider
{
    public $sliders = [];

    public function __construct()
    {
        $this->sliders = [
            0 => [
                'id'            => 1,
                'title'         => 'This is slider one title',
                'description'   => 'This is slider one description',
                'image'         => 'assets/images/s2.jpg',
            ],
            1 => [
                'id'            => 2,
                'title'         => 'This is slider two title',
                'description'   => 'This is slider two description',
                'image'         => 'assets/images/s3.jpg',
            ],
            2 => [
                'id'            => 3,
                'title'         => 'This is slider three title',
                'description'   => 'This is slider three description',
                'image'         => 'assets/images/s4.jpg',
            ]
        ];
    }

    public function getAllSlider()
    {
        return $this->sliders;
    }

    public function getSliderById($id)
    {
        foreach ($this->sliders as $slider)
        {
            if ($slider['id'] == $id)
            {
                return $slider;
            }
        }
    }
}
