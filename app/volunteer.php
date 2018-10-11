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
  

} 