<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class pagesController extends Controller
{
    public function about()
    $first='Geoffrey ';
    $last='Ongeri';
   
    return view ('page.about');->compact('first','last'));
}

}
 