<?php

namespace Admailer\Repositories;

use DB;
use Admailer\Models\Album;
use Illuminate\Support\Facades\Auth;

class AlbumRepository {

    public function all()
    {
        return Album::orderBy('id', 'desc')->get();
    }

    

    
   
}