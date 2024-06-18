<?php

namespace App\Http\Controllers;

use App\Models\News;

class FirstController extends Controller
{
    public function index(){
        $news = News::create([
            'title' => 'London to Paris',
            'content'=>'Paris'
        ]);
        return 'Главная страница';
    }

}
