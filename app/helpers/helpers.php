<?php


function test()
{
    echo "Hello World";
}

function view($view, $data = [], $print = true)
{
    $output     = "View not found";
    $filePath   = "pages/" . $view . ".php"; // pages/home.php
    if (file_exists($filePath))
    {
        ob_start();
        extract($data);
        include $filePath;
        $output = ob_get_clean();
    }

    if ($print)
    {
        print $output;
    }
}

