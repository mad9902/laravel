<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class vote_controller extends Controller
{
      public function vote()
    {
        $age = 23;

        return view('body', compact('age'));

    }
      public function vote2()
    {
        return view('nextbody', compact('age'));

    }

}
