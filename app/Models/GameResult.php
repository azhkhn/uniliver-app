<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GameResult extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'game_results';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'day', 'question', 'answer',
    ];
}
