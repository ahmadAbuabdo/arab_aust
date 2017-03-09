<?php

namespace Admailer\Creators;

use Carbon\Carbon;
use Admailer\Models\SiteAbout;
use Admailer\Models\SiteTerms;
use Admailer\Models\Relation;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Admailer\Repositories\AboutUsRepository;
use Intervention\Image\ImageManagerStatic as Image;
use DB;

class RelationCreator {

    public function store($request){
   
    }

    public function updateRelation($request, $id)
        {
              $imageName = '';
                $relation = Relation::findOrFail($id);
                       if ($request->hasFile('image')) {

            // Delete old about_us image.
            if(is_dir(public_path() . '/files/relation/' . $id))
            {
                if(is_file(public_path() . '/files/relation/' . $id . '/' . $relation->image))
                {
                    unlink(public_path() . '/files/relation/' . $id . '/' . $relation->image);
                }
                if(is_file(public_path() . '/files/relation/' . $id . '/thumb-' . $relation->image))
                {
                    unlink(public_path() . '/files/relation/' . $id . '/thumb-' . $relation->image);
                }
            }

            $imageFile  = $request->file('image');
            $imageName  = $imageFile->getClientOriginalName();

            $imageUpload  = $imageFile->move(public_path() . '/files/relation/' . $relation->id, $imageName);
             // Image thumb
            $path = public_path() . '/files/relation/' . $relation->id . '/' . $imageName;
            $path_thumb = public_path() . '/files/relation/' . $relation->id . '/thumb-' . $imageName;
            $image =  Image::make($path)->resize(130, 130)->save($path_thumb);
        } 

        return Relation::findOrFail($id)->update([
            'en_relation' => $request->get('en_relation'),
            'ar_relation' => $request->get('ar_relation'),
            'image' => ($imageName != '') ? $imageName : $relation->image,
            
        ]);
    }

    public function destroyRelation($id)
    {
        $terms = Relation::findOrFail($id);
               
        // Remove terms dirctory.
        if(is_dir(public_path() . '/files/relation/' . $id))
        {
            chmod(public_path() . '/files/relation/' . $id, 0777);
            File::deleteDirectory(public_path() . '/files/relation/' . $id);
        }

        return AboutUs::destroy($id);

    }
}