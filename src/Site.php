<?php

namespace Inspheric\Sites;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Notifications\Notifiable;
use Inspheric\Support\Traits\Nameable;

class Site extends Model
{
    use Notifiable;
    use Nameable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'display_name',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
    ];

}
