<?php

namespace Admailer\Http\Controllers;

use Illuminate\Http\Request;
use Admailer\Creators\AlbumCreator;
use Admailer\Http\Requests\StoreAlbumRequest;
use Admailer\Http\Controllers\Controller;
use Admailer\Repositories\AlbumRepository;
use Admailer\Models\Album;

use App;

class AlbumController extends Controller
{

    /**
     * @var AlbumRepository
     */
    private $albumRepository;
    /**
     * @var AlbumCreator
     */
    private $albumCreator;

    public function __construct( AlbumRepository $albumRepository, AlbumCreator $albumCreator)
    { 

        $this->albumRepository = $albumRepository;
        $this->albumCreator = $albumCreator;
        // $this->middleware('is.allowed');
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    { 
        $album = $this->albumRepository->all();
        return view('album.index', compact('album'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('album.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAlbumRequest $request)
    {   

       $this->albumCreator->store($request);
       flash()->success(@trans('album.created'));
       return redirect(route('album.index'));

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
        $album  = Album::findOrFail($id);
        return view('album.edit', compact('album'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function update(StoreAlbumRequest $request, $id)
    {
        $this->albumCreator->update($request,$id);
        flash()->success(@trans('album.updated'));
        return redirect(route('album.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $this->albumCreator->destroy($id);
    }
}
