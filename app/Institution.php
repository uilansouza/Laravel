<?php 
namespace App;

use illuminate\Database\Eloquent\Model;
class Institution extends Model
{
    protected $fillable = ['name','address','city'];
    
    public function volunteers(){
        
        return $this->hasMany('App\volunteer');
    }
    
}