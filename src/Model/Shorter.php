<?php

namespace Hirossyi73\UrlShorter\Model;

use Illuminate\Database\Eloquent\Model;

class Shorter extends Model
{
    public $incrementing = false;
    protected $table = 'url_shorters';
    protected $primaryKey = 'key';
    protected $keyType = 'string';

    protected $appends = ['generate_url'];
    protected $fillable = ['url'];
    
    public function getGenerateUrlAttribute()
    {
        return \UrlShorter::shorter_generate_url($this->key);
    }

    public static function findByGenerateUrl($generate_url){
        // get key
        $base_uri = \UrlShorter::shorter_generate_url();
        $key = ltrim($generate_url, $base_uri);

        return static::find($key);
    }

    public static function validateUrl($inputs){
        return \Validator::make($inputs, [
            'url' => 'required|url|max:4000',
        ]);
    }

    protected static function boot()
    {
        parent::boot();

        static::saving(function ($model) {
            // Set key
            if (!$model->key) {
                $model->key = \UrlShorter::generateKey();
            }
        });
    }
}
