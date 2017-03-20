<?php

namespace Admailer\Creators;

use Carbon\Carbon;
use Admailer\Models\Album;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Intervention\Image\ImageManagerStatic as Image;
use DB;

class AlbumCreator {

    public function store($request){

        $album  = Album::create($request->all());

    }


    public function update($request, $id)
    {
        $imageName = '';
        $album = Album::findOrFail($id);
     
        return Album::findOrFail($id)->update([
            'title' => $request->get('title'),
            'status' => $request->get('status'), 
        ]);
    }

    public function destroy($id)
    {
        $album = Album::findOrFail($id);         
        return Album::destroy($id);

    }

}
