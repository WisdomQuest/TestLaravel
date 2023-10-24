<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreNewsRequest;
use App\Http\Requests\UpdateNewsRequest;
use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NewsController extends Controller
{

    public function index(Request $request)
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
        return view('news.index', ['news'=>$news, 'sort' => $sort, 'page' => $page, 'request'=> $request]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('news.form',['action'=> 'create']);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreNewsRequest $request)
    {
        $validated = $request->safe();
        $news = News::factory()->make();
        $news->author_id = 3;
        $news->title = $validated->title;
        $news->text = $validated->text;
        $news->save();
        return redirect()->route('news.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(News $news)
    {
        return view('news.show',['news'=> $news]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(News $news)
    {
        return view('news.form',['action'=> 'edit', 'news'=>$news]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateNewsRequest $request, News $news)
    {
        $validated = $request->safe();
        $news->title = $validated->title;
        $news->text = $validated->text;
        $news->save();
        return redirect()->route('news.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(News $news)
    {
        $news->delete();
        return redirect()->route('news.index');
    }


  /*  public function news(Request $request)
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
        echo $request->ip();
//        $news->dd();
        return view('news', ['news' => $news, 'sort' => $sort, 'page' => $page, 'request'=> $request]);
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

    public function newsAttribute()
    {
        $news = News::find(7);
        echo $news->title;
        return '';
    }*/

}
