<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
use App\Http\Requests;
use App\Category;
use App\Item;

class DownloadController extends Controller
{
    public function getList($slug){
        $this_slug = html_entity_decode($slug);
        //$all_item = Category::where('slugs', $slug)->take(10)->get()->toArray();
        $perPage = 15;
        $this_category  = Category::where('slugs', $slug)->first();
        $this_posts     = Item::where('id_cat', $this_category->id)->simplePaginate($perPage);
        $data = array(
            'slug'      => $slug,
            'home_page' => false,
            'posts'     => $this_posts,
            'category'  => $this_category
        );
        //print_r($page_render);
        return view('pages.category')->with(['data' => $data]);
    }

    public function getItem($slug, $id){
        $this_id = ToInt($id);
        $post_detail     = Item::where('id', $this_id)->first()->toArray();
        $data = array(
            'slug'      => $slug,
            'home_page' => false,
            'item'     => $post_detail
        );
        //print_r($page_render);
        return view('pages.item')->with(['data' => $data]);
    }
}
