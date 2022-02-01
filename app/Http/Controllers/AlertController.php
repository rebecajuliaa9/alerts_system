<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

use App\Models\Alert;

class AlertController extends Controller
{
    public function index(){
        $alerts = Alert::all();

        return view ('welcome', ['alerts'=> $alerts]);
    }
    public function create(){
        return view ('alerts.create');
    }
    public function show(){
        $alerts = Alert::all();


        return view ('alerts.show', ['alerts'=> $alerts]);
    }
    public function store(Request $request){
        

        $alert = new Alert;
        $alert->title = $request->title;
        $alert->description = $request->description;
        $user = auth()->user();
        $alert->user_id = $user->id;
    

        $alert->save();

        $alerts = Alert::all();
        return view('alerts.show', ['alerts'=> $alerts]);

    }

    public function destroy($id){
        Alert::findOrFail($id)->delete();
        return redirect('/alerts/show')->with('msg','O alerta foi excluído com sucesso!');
    }

    public function edit($id){
        $alert = Alert::findOrFail($id);

        return view('alerts.edit', ['alert' => $alert]);
    }

    public function update(Request $request){
        Alert::findOrFail($request->id)->update($request->all());

        return redirect('/alerts/show')->with('msg', 'O alerta foi editado com sucesso!');
    }
}
