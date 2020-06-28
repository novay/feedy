<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Campaign extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['uuid', 'user_id', 'name', 'private', 'title', 'subtitle', 'confirm_title', 'confirm_subtitle', 'widget_color', 'widget_position', 'widget_type', 'widget_button', 'enable_email', 'enable_rating'];

    /**
     * A scope for UUID
     *
     * @var array
     */
    public function scopeUuid($query, $string) 
    {
        return $query->whereUuid($string);
    }

    /**
     * Define an inverse one-to-one or many relationship.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user() 
    {
        return $this->hasMany('App\User');
    }


    /**
     * Define a one-to-many relationship.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function responses() 
    {
        return $this->hasMany('App\Response');
    }
}
