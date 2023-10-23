<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function ()
{
    return view('index');
});
Route::get("/lab3", function ()
{
    return view("index");
});

Route::get('/lab3/{a}/{b}', function ($a, $b)
{
    function CheckIsP($num)
    {
        if($num == 1){
            return false;
        }
        for ($i = 2; $i < $num; $i++)
        {
            if ($num % $i == 0)
            {
                return false;
            }
        }
        return true;
    }
    $isFirst = true;
    for ($i = $a; $i <= $b; $i++)
    {
        if (CheckIsP($i))
        {
            if (!$isFirst)
            {
                echo ", ";
            }
            else
            {
                $isFirst = false;
            }
            echo $i;
        }
    }
});
