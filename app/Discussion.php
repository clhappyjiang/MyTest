<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Discussion extends Model
{
    //
    protected $fillable = ['title','body','user_id','last_user_id','tel','post','email','qq'
        ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
