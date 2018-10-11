<?php



Route::get('/', function () {
        return view('welcome');
  });

  //-------------------------//

  Route::group(['namespace'=>'Institucional'], function () {

    Route::controller('institucional', 'InstitucionalController',
      [
          'getSobre' => 'sobre',
          'getContato' => 'contato',
          'postContato' => 'contato.send',
      ]);

});

/*--- Aqui começa a rota dos controllers *-----*/


Route::resource('volunteer','VolunteersController');

/*
Route::get('volunteer', function(){
    //return(App\volunteer::find(1));

    //$volunteer =  new App\Volunteer;

    //$volunteer = App\Volunteer::findorfail($id); procura um Id ou exibe erro

    //all() traz tudo
/*
    $volunteer =   App\Volunteer::where('name','Lucas')->get();


    return $volunteer; */
    
    //dd(App\Volunteer::find(1));  Procura o Id 1

    /************** ALTERAÇÃO NO BANCO DE DADOS *******
    $volunteer = App\Volunteer::find(1);
    $volunteer->phone='11 950369882';
    $volunteer->save();
    return $volunteer;
    **************************************************/

    


    /*
    ***** ELOQUENT***** 
    Blinda a aplicação de inserções manuais no banco de dados
    
    $volunteer = App\Volunteer::create([
      'name'=>'Andre',
      'phone'=>'12 9091-7090',
      'email'=> 'andre@treinaweb.com.br',
      'update_at'=>'2013-01-01-00:00:00'

    ]); */

   
/* Mesmo efeito dessse de baixo 
    $volunteer->name='Lucas';
    $volunteer->phone = null;
    $volunteer->email='lucas@treinaweb.com.br';
    $volunteer->save();

    return $volunteer;


*/

  
  //return view('volunteers.form');


/*
Route::post('volunteer', ['as' => 'volunteer.send', function(){
  return Request::all();
}]);





  /*  Prefixo, isso vai antes do nome...
Route::group(['prefix'=>'intitucional'],function(){

    Route::get('sobre',['as'=>'sobre','uses'=>'InstitucionalController@sobre']);


    Route::get('contato',['as'=>'contato','uses'=>'InstitucionalController@contato']);


    Route::post('contato',['as'=>'contato.send','uses'=>'InstitucionalController@sobreenviado']);
});
*/
/*
Route::resource('rest','RestfulController');


Route::get('lista', function(){

  $voluntarios = ['João', 'Juca', 'José', 'Joana', 'Jorge',];

  return view('lista', ['voluntarios' => $voluntarios]);
});
/*

Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

Route::controllers([
  'auth' => 'Auth\AuthController',
  'password' => 'Auth\PasswordController',
]);

Route::get('/teste', function(){
    return 'Ola Uilan';
  });
*/  

  /*
  Route::get('inicio/{nome}', function($nome){
    return "Bem vindo, $nome!";
  });
  */

  /*
  //Opcional usamos o 

  Route::get('/', function(){
    return "Bem vindo ao Sistema";
  });

    //Opcional usamos o 
    Route::get('/{nome?}', function(){
        return "Essa Pagina nao existe";
      });

  Opciona usamos o trecho abaixo a partir do inicio/
  Route::get('inicio/{nome?}', function($nome = 'Aluno'){
    return "Bem vindo, $nome!";
  }); 
  

  //Aceita apenas Letras,caso seja enviado numeros sera dado
  Route::get('inicio/{nome?}', function($nome = 'Aluno'){
    return "Bem vindo, $nome!";
  })->where('nome', '[A-Za-z]+');


Route::get('inicio/{nome}', ['as' => 'home' ,function($nome){
    return "Bem vindo, $nome!";
  }]);

  */
  /*
  
  Route::get('inicio/{nome?}', function($nome = 'Aluno'){
    return view('inicio', ['nome' => $nome]);
     /* Variações
     * return view('inicio')->with('nome', $nome);
     * return view('inicio')->with(['nome' => $nome]);
     * return view('inicio')->withName($nome);*/
     /*
  })->where('nome', '[A-Za-z]+');
  
*/
