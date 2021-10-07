<?php

namespace App\Http\Controllers;

use App\Http\Requests\ArticleRequest;
use App\Models\Article;
use App\Models\ArticleCategory;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('user.news-list',[
            'listArticle' => Article::all(),
            'listArticle2'=> Article::where('category','tin-thi-truong')->get(),
            'listArticle3'=> Article::where('category','tin-cong-ty')->get(),
        ]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function ArticleDetail($url){
        $article = Article::where('url',$url)->first();
        return view('user.article-detail',[
            'article'=>$article,
        ]);
    }

    public function createView(){
        $listCate = ArticleCategory::all();
        return view('admin.create-article-form',[
            'listArticleCategory'=> $listCate
        ]);
    }
    public function ArticleSeeder(){
        return view('welcome',[
            'list'=>Article::all()
        ]);
    }
    public function create(ArticleRequest $request)
    {
        //
        $request->validated();
        $obj = new Article();
        $obj->title= $request->get('title');
        $obj->thumbnail= $request->get('thumbnail');
        $obj->category= $request->get('category');
        $obj->url= $request->get('url');
        $obj->description= $request->get('description');
        $obj->detail= $request->get('detail');
        $obj->source= $request->get('source');
        $obj->created_at= Carbon::now('Asia/Ho_Chi_Minh');
        $obj->updated_at= Carbon::now('Asia/Ho_Chi_Minh');
        $obj->save();
        return redirect('/article/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
