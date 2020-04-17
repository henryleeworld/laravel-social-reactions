<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cog\Contracts\Love\Reactable\Models\Reactable as ReactableContract;
use Cog\Laravel\Love\Reactable\Models\Traits\Reactable;

class Article extends Model implements ReactableContract
{
    use Reactable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title', 'slug', 'body', 'created_at', 'updated_at',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
    ];
}
