<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Log;

class TestController extends Controller
{
    public function index()
    {
    	$monolog = Log::getMonolog();
    	dump($monolog);
    }
}
