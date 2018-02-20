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


Route::get('volunteer', function(){
  return view('volunteers.form');
});

Route::post('volunteer', ['as' => 'volunteer.send', function(){
  return Request::all();
}]);





  /*
Route::group(['prefix'=>'intitucional'],function(){

    Route::get('sobre',['as'=>'sobre','uses'=>'InstitucionalController@sobre']);


    Route::get('contato',['as'=>'contato','uses'=>'InstitucionalController@contato']);


    Route::post('contato',['as'=>'contato.send','uses'=>'InstitucionalController@sobreenviado']);
});

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

//Route::get('/teste', function(){
  //  return 'TreinaWeb';
 // });
  

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

  
  Route::get('inicio/{nome?}', function($nome = 'Aluno'){
    return "Bem vindo, $nome!";
  });

  
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
     * return view('inicio')->withName($nome);
     
  })->where('nome', '[A-Za-z]+');

  */