<?php
// Arquivo de Model
namespace App;

use Illuminate\Database\Eloquent\Model;

class Volunteer extends Model
{
  protected $fillable=['name','phone','email'];// (whiteList) campos que o usuário pode alterar via formulario
  // caso queira alterar outra campo, é ignorado
 // protected $table ="tab_volunteer"//caso queira mudar o nome da tabela
 // protected $guarded =['id','created_at','update_at'] //Blaclist  ou usa um ou o outro


 //------ UMA OUTRA FORMA DE COLOCAR RESTRIÇÃO EM FORMULARIOS ------/

/* public static $rules[
    'name'=>'required|alpha',
    'email'=>'required|email'

  ]*/
  
  public function institution(){

    return $this->belongsTo('App\institution');
  }


  public function causes(){

    return $this->belongsToMany('App\Cause');
  }

  /**
   * Eloquent Accessor
   * Cria uma nova propriedade dinamica
   * Convenção: get + CampoEmCamelCase + Attribute
   * Será convertido em $this->campo_em_camel_case
   */
  public function getCausesListAttribute(){
    
    return $this->causes->lists('id')->toArray();
  }
} 