<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Log;

class TestController extends Controller
{
    public function index()
    {
      
/*        //yield
        dump(memory_get_usage());
        foreach ($this->xrange(1, 10, 1) as $v) {
            var_dump($v);
        }
        dump(memory_get_usage());*/
    }

    private function xrange($start, $limit, $step = 1)
    {
        for ($i = $start; $i < $limit; $i += $step) {
            yield $i;
        }
    }
}
