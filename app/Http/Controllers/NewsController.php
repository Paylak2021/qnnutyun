<?php

namespace App\Http\Controllers;

use App\Http\Requests\NewsRequest;
use Illuminate\Http\Request;
use App\Models\News;

class NewsController extends Controller
{
    public function sumbit_news(NewsRequest $req) {
        $cont = new News();
        $cont->news = $req->input('news');
        $cont->text = $req->input('text');
        $cont->save();
        return redirect()->route('home')->with('success', 'Row successfuly inserted');
    }

    public function all_news() {
        $posts = new news();
        return view('haytararutyun', ['data' => $posts-> all()]);
    }

    public function one_data($id) {
        $posts = new news();
        return view('all', ['data' => $posts-> find($id)]);
    }
}
