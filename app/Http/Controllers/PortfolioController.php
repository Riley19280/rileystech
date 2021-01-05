<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioController extends Controller
{

    public function apushmaster(){
        return view('portfolio.projects.apushmaster');
    }

    public function astar(){
        return view('portfolio.projects.astar');
    }

    public function caringcookieclub(){
        return view('portfolio.projects.caringcookieclub');
    }

    public function coloredperspective(){
        return view('portfolio.projects.coloredperspective');
    }

    public function flashdrivebackup(){
        return view('portfolio.projects.flashdrivebackup');
    }

    public function fractals(){
        return view('portfolio.projects.fractals');
    }

    public function g2atracking(){
        return view('portfolio.projects.g2atracking');
    }

    public function homeworkmaster(){
        return view('portfolio.projects.homeworkmaster');
    }

    public function humblebundleanalyzer(){
        return view('portfolio.projects.humblebundleanalyzer');
    }

    public function k95keyboard(){
        return view('portfolio.projects.k95keyboard');
    }

    public function paintwall(){
        return view('portfolio.projects.paintwall');
    }

    public function possystem(){
        return view('portfolio.projects.possystem');
    }

    public function roadtonlc(){
        return view('portfolio.projects.roadtonlc');
    }

    public function staticevolution(){
        return view('portfolio.projects.staticevolution');
    }

    public function vectricity(){
        return view('portfolio.projects.vectricity');
    }

    //views
    public function apushmasterview(){
        return view('portfolio.projects.view.apushmaster');
    }

    public function astarview(){
        return view('portfolio.projects.view.astar');
    }

    public function fractalsview(){
        return view('portfolio.projects.view.fractals');
    }

    public function roadtonlcview(){
        return view('portfolio.projects.view.roadtonlc');
    }
}
