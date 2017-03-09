<?php

namespace Admailer\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Relation extends BaseModel
{
    protected $table = 'relation';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'ar_relation',
        'en_relation',
        'image',
];

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public static function boot() {
        parent::boot();

        // create a event to happen on updating
        static::updating(function($table)  {
            $table->updated_by = Auth::user()->username;
        });
    }

}
