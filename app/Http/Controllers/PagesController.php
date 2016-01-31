<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{
    public  function about()
    {
        $name = 'Naranov <span style="color : red">Arshan</span>';
        //return view('pages.about')->with('name', $name);
        /*return view('pages.about')->with([
            'first' => 'Naranov',
            'last' => 'Arshan'
        ]);*/

        /*$data = [];
        $data['first'] = 'Naranov';
        $data['last'] = 'Arshan';
        return view('pages.about', $data);*/

        $first = 'Fox';
        $last = 'Mulder';

        return view('pages.about', compact('first', 'last'));
    }
}


