<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Volunteer;
use App\Http\Requests\VolunterRequest;

class VolunteersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $volunteers =  Volunteer::simplepaginate(10);
       
       return view('volunteers.index',compact('volunteers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('volunteers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(VolunterRequest $request)
    {

          //O VolunterRequest ja faz a validação de formulário, por isso nao utilizamos a sintaxe abaixo
        //$this->validate($request,Volunter::$rules); // valida os campos

        Volunteer::create($request->all());

        redirect()->route('volunteer.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Volunteer $volunteer)
    {
       // $volunteer = Volunteer::findOrFail($id); --> não é mais necessario  pois foi acrescido uma funcionalidade
       // no Classe RouteServiceProvider.php no método public function boot(Router $router)

        return view('volunteers.show',compact('volunteer'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Volunteer $volunteer)
    {
        
        //$volunteer = Volunteer::findOrFail($id);--> não é mais necessário

        return view('volunteers.edit',compact('volunteer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(VolunterRequest $request, Volunteer $volunteer)
    {
        //O VolunterRequest ja faz a validação de formulário, por isso nao utilizamos a sintaxe abaixo

           //$this->validate($request,Volunter::$rules); // valida os campos
       // $volunteer = Volunteer::findOrFail($id);

        $volunteer->update($request->all());

        return redirect()->route('volunteer.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Volunteer $volunteer)
    {
        //$volunteer = Volunteer::findOrFail(); -- Não é mais necesário

        $volunteer->delete();

        return redirect()->route('volunteer.index');
    }
}
