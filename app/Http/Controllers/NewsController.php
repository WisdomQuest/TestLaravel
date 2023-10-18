<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NewsController extends Controller
{
    public function news()
    {

        $news = News::paginate(5);
        $sort = clone $news;
        if (isset($_GET['sortUp'])) {
            $news = $news->sortBy('author_id');
        } elseif (isset($_GET['sortDown'])) {
            $news = $news->sortByDesc('author_id');
        }
        $page = 1;
        if (isset($_GET['page'])) {
            $page = $_GET['page'];
        }

        return view('news', ['news' => $news, 'sort' => $sort, 'page' => $page]);
    }

    public function deleteNews($id)
    {
        $news = News::find($id);
        if (isset($news)){
        News::destroy($id);
        return 'delete';
        }
        abort(404);



    }

}
