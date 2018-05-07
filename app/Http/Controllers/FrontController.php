<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\SubCategory;
use App\Products;

class FrontController extends Controller
{
public function contact(){
$cat=Category::all();
$subcat=SubCategory::all();
$latsub=SubCategory::Latest('created_at')->take(4)->get();

return view('contact')->withcat($cat)->withsub($subcat)->withlatsub($latsub);
}

    public function index(){
$fe=Products::where('featured',1)->latest('created_at')->first();
$lat=Products::where('featured',0)->latest('created_at')->first();

$cat=Category::all();
$subcat=SubCategory::all();
$latproduct=Products::Latest('created_at')->take(8)->get();
$latsub=SubCategory::Latest('created_at')->take(4)->get();
$pro=Products::where('featured',1)->get();
    	return view('welcome')->withcat($cat)->withsub($subcat)->withpro($pro)->withfe($fe)->withlat($lat)->withlatproduct($latproduct)->withlatsub($latsub);
    
    }
}
