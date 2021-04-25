<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Replies extends Model
{
    
    /**
 * The attributes that are mass assignable.
 *
 * @var array
 */
protected $fillable = [
    'user_id','replier_name','replier_id','answer','replier_expert'];

    public function User()
    {
        return $this->belongsTo('App\User');
    }
}
