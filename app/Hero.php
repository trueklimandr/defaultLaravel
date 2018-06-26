<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hero extends Model
{
    /**
     * The table name in db
     *
     * @var string
     */
    protected $table = 'hero';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'active',
    ];

    /**
     * @param $value
     */
    public function setActiveAttribute($value)
    {
        if ($value == 0) {
            $this->attributes['active'] = 0;
        } else {
            $this->attributes['active'] = 1;
        }
    }

    /**
     * @param $query
     */
    public function scopeIsActive($query)
    {
        $query->where('active', '=', 1);
    }
}
