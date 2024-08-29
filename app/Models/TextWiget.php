<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cache;

class TextWiget extends Model
{
    use HasFactory;

    protected $fillable = [
        'key',
        'image',
        'title',
        'content',
        'active',
    ];

    public static function getTitle( string $key ): string
    {
        $wiget = Cache::get( 'text-wiget-'.$key, function() use ($key) {
            return TextWiget::query()
                ->where('key', '=', $key)
                ->where( 'active', '=', 1)
                ->first();
        });


        if( $wiget )
        {
            return $wiget->title;
        }

        return '';

    }

    public static function getContent( string $key ): string
    {
        $wiget = Cache::get( 'text-wiget-'.$key, function() use ($key) {
            return TextWiget::query()
                ->where('key', '=', $key)
                ->where( 'active', '=', 1)
                ->first();
        });

        if( $wiget )
        {
            return $wiget->content;
        }

        return '';

    }
}
