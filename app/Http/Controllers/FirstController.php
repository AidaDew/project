<?php

namespace App\Http\Controllers;

use App\Models\News;

class FirstController extends Controller
{
    public function index(){
        return 'Главная страница';
        $news = News::all();
        dump($news);
    }

}
