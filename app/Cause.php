<?php 
namespace App;

use illuminate\Database\Eloquent\Model;
class Cause extends Model
{
    protected $fillable = ['cause','user_id'];

    public function volunteers(){
        $this->belongsToMany('App\Volunteer');
    }
    
}
