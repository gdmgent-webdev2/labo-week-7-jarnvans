<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Title;
use App\Client;

class ClientController extends Controller
{
    public function getIndex() {

        $clients = Client::All();

        return view('clients.index')->with(compact('clients'));
    }

    public function getCreate(Client $client) {
        $titles = Title::all();
        
        return view('clients.edit')->with(compact('client', 'titles'));
    }

    public function getEdit($clientId) {
        //check if client exists
        // if(!client->) abort('404')
        $client = Client::findOrFail($clientId);

        $titles =  Title::all();

        return view('clients.edit')->with(compact('client', 'titles'));
    }

    public function postSave() {
        // $request = request()->all()

        $clientId = (request('id')) ? request('id') : null;
        $validationRules = [
            'title' => 'required|between:1,4|numeric',
            'firstname' => 'required|max:255',
            'lastname' => 'required|max:255',
            'email'=>'required|max:255|email|unique:clients,email,' . $clientId,
            'zipcode' => 'required|max:10',
            'address' => 'required|max:255',
            'city' => 'required|max:255',
            'province' => 'required|max:255',
        ];

        request()->validate($validationRules);

        $data = [
            'title_id' => request('title'),
            'firstname' => request('firstname'),
            'lastname' => request('lastname'),
            'address' => request('address'),
            'zipcode' => request('zipcode'),
            'city' => request('city'),
            'province' => request('province'),
            'email' => request('email')

            //
        ];

        Client::UpdateOrCreate(['id' => $clientId], $data);

        

        return redirect()->route('clients.index');
    }
    
}
