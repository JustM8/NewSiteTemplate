<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function __invoke()
    {
//       echo 111;
    }
    public function test()
    {
        echo 'qwe';
    }
}
