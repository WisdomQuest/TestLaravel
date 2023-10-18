<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NewsController extends Controller
{
    public function news()
    {
//        $news = DB::table('news')->paginate(5);
//        $new = News::where('author_id', 5)->first();
//        $new->author_id = '1';
//        $new->save();
        $news = News::paginate(5);
        if (isset($_GET['sortUp'])) {
            $news = $news->sortBy('author_id');
        } elseif (isset($_GET['sortDown'])) {
            $news = $news->sortByDesc('author_id');
        }

        /*        $news = News::query();
                if (isset($_GET['sortUp'])) {
                    $news = $news->orderBy('author_id');
                }
                $news = $news->paginate(5);*/

        return view('news', ['news' => $news,]);
    }

    public function deleteNews($id)
    {
        $new = News::find($id);
        return 1;


    }

}
