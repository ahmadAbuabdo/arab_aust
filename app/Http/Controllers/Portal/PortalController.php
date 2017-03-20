<?php

namespace Admailer\Http\Controllers\portal;

use Illuminate\Http\Request;
use Admailer\Creators\GallaryCreator;
use Admailer\Http\Requests\StoreGallaryRequest;
use Admailer\Http\Requests\UpdateGallaryRequest;
use Admailer\Http\Controllers\Controller;
use Admailer\Repositories\GallaryRepository;
use Admailer\Models\Gallary;
use Admailer\Models\Product;
use Admailer\Models\SiteAbout;
use Admailer\Models\SiteTerms;
use Admailer\Models\Relation;



use App;

class PortalController extends Controller
{

    public function __construct()
    { 

    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function home()
    {     
    $quality=  SiteTerms::findOrFail(1);
    $relation = Relation::findOrFail(1); 
    $aboutus = SiteAbout::findOrFail(1);
    $gallerys = Gallary::orderBy('id', 'desc')->get();
       // dd($gallerys);
        return view('portal.home',compact('gallerys','aboutus','relation','quality'));
    }
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function gallery()
    { 
        $gallerys = Gallary::get();
        return view('portal.gallery',compact('gallerys'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function aboutus()
    {     
        $relation=  Relation::findOrFail(1);
        $aboutus = SiteAbout::findOrFail(1);
        return view('portal.aboutus',compact('aboutus','relation'));
    }


     /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function relation()
    { 
        $relation = Relation::findOrFail(1);
        return view('portal.relation',compact('relation'));
    }


    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function product()
    { 
      $products=  Product::where('status','=','1')->get();
      return view('portal.products', compact('products'));
    }


      public function quality()
    { 
      $quality=  SiteTerms::findOrFail(1);
      return view('portal.quality', compact('quality'));
    }



     public function showProduct($id)
     {
        $product = Product::findOrFail($id);
        $previous = Product::where('id', '<', $product->id)->max('id');
        $next = Product::where('id', '>', $product->id)->min('id');
        return view('portal.show_product' , compact('product','previous','next'));
     }



}
