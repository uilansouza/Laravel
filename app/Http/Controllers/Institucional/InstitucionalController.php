<?php

namespace App\Http\Controllers\Institucional;

use Illuminate\Http\Request;
use Illuminate\Contracts\Filesystem\Cloud;
use Illuminate\Contracts\Mail\Mailer;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\EmailContatoRequest;


class InstitucionalController extends Controller
{
    public function __construct(){
        
      
        //$this->middleware('age', ['except' => ['getSobre']]);
    }

    public function getSobre (){
        
        return view('sobre');

    }

    public function getContato (){

        return view('contato');
        
    }

    public function postContato (EmailContatoRequest $request, Cloud $cloud, Mailer $mail){

      
      $request->file('log')->move(storage_path('app'), 'teste.txt'); 
      //o nome "foto" é o nome do campo  no input
       //$cloud->put('teste.txt', file_get_contents(storage_path('app/teste.txt')));

        $mail->send('emails.contato', $request->all(), function ($message){

            $message->to('contato@treinaweb.com.br');
            $message->from('joao@joao.com.br')->cc('jucajuca@net.com');
            $message->attach(storage_path('app/teste.txt'));

        });

        return view('enviado');
        
    }
        
}
