<?php


namespace App\Http\Facades;


use Illuminate\Support\Facades\Facade;

class Shopping extends Facade
{
    public static function getFacadeAccessor()
    {
        return 'shopping';
    }
}
