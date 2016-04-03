<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
use App\Auth;
use App\Http\Requests;
use App\Category;
use App\Article;

class ArticleController extends Controller
{
    //Todo: Frontend show

    public function getArticle($slug){
        $this_slug = html_entity_decode($slug);
        $article = Article::with('tagged')->first(); // eager load
        $post_detail     = Article::where('slug', $this_slug)->first()->toArray();
        $data = array(
            'home_page' => false,
            'item'      => $post_detail,
            'tags'      => $article
        );
        //print_r($page_render);
        return view('pages.item')->with(['data' => $data]);
    }
    public function getCat($slug){
        $this_slug = html_entity_decode($slug);
        //$all_item = Category::where('slugs', $slug)->take(10)->get()->toArray();
        $perPage = 15;
        $this_category  = Category::where('slug', $this_slug)->first();
        $this_posts     = Article::where('category_id', $this_category->id)->simplePaginate($perPage);
        $data = array(
            'slug'      => $slug,
            'home_page' => false,
            'posts'     => $this_posts,
            'category'  => $this_category
        );
        //print_r($page_render);
        return view('pages.category')->with(['data' => $data]);
    }


    //Todo: Backend Functions

    public function getList(){
        $data = Article::select('*')->orderBy('id', 'DESC')->get()->toArray();
        return view('backend.article.article_list')->with('data', $data);
    }

    public function getAdd(){
        $category = Category::select("*")->get()->toArray();
        $backend_data = array(
            "category" => $category
        );
        return view('backend.article.article_add')->with('backend_data', $backend_data);
    }
    public function getEdit($id){
        $category = Category::select("*")->get()->toArray();
        $article = Article::find($id)->first()->toArray();
        $backend_data = array(
            "category" => $category,
            "article"    => $article
        );
        return view('backend.article.article_edit')->with('backend_data', $backend_data);
    }
    public function postAdd(Request $request){
        $database = new Article;
        $article = Article::with('tagged')->first(); // eager load
        $article->tag(explode(',', $request->txtTag));
        $database->category_id = $request->sltCategory;
        $database->title     = trim($request->txtName);
        $database->slug    = f_url($request->txtName);

        $database->intro   = $request->txtIntro;
        $database->content   = $request->txtContent;
        $database->list_tag   = $request->txtTag;
        $database->author_id    = 1;
        $database->save();
        return redirect()->route('backend.article.getAdd');
        // print_r($request->txtCateName);
        //return view('backend.category.cate_add');
    }
    public function postEdit(Request $request, $id){
        $database = Article::find($id);;
        $database->category_id = $request->sltCategory;
        $database->title     = trim($request->txtName);
        $database->slug    = f_url($request->txtName);
        $database->intro   = $request->txtIntro;
        $database->content   = $request->txtContent;
        $database->author_id    = 1;
        $database->save();
        return redirect()->route('backend.article.getList');
        // print_r($request->txtCateName);
        //return view('backend.category.cate_add');
    }
    public function getDel($id){
        $delete = Article::find($id);
        $delete->delete();
        return redirect()->route('backend.article.getList');
    }

    //Todo: End Backend functions
}
