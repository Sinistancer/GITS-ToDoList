<?php
/**
 * Created by PhpStorm.
 * User: I816
 * Date: 4/6/2018
 * Time: 2:39 PM
 */

namespace App\Eloquents;

use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    protected $fillable = [
        'name', 'priority', 'location', 'time_start', 'username', 'password'
    ];

    protected $hidden = ['id'];

    protected $guarded = ['id'];

    public $timestamps = false;
}