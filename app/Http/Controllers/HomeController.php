<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function getIndex() {
        $data = [
            "title" => "Landon Hotel App",
            "hotel" => "Bilderberg - Chateau Holtmühle",
            "image" => "images/chateau.jpg",
            "description" => "<p>Château Holtmühle in Tegelen is een uniek historisch kasteel uit de middeleeuwen waar u zich met recht de koning te rijk voelt. Rust en een luxueuze ambiance in een romantische omgeving zorgen dat u zich in stijl kunt laten verwennen</p>
            <p>Een nacht in één van onze 66 geweldig sfeervolle kamers voorzien van alle gemakken maken dat u zich meteen kasteelvrouw en -heer voelt.</p>"
        ];

        return view('pages.home', $data);
    }
}
