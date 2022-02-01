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
}
