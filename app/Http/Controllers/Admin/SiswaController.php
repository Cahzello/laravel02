<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;


class SiswaController extends Controller
{
    public function cobaFacade()
    {
        echo \Illuminate\Support\Str::snake("sedangBelajarLaravel");
        echo "<br>";
        echo \Illuminate\Support\Str::kebab("sedangBelajarLaravel");
    }
}
