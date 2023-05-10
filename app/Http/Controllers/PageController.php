<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{

    public function index()
    {
        return view('esercizio.index');
    }

    public function about()
    {
        $elementi = [
            ['name' => 'Roma', 'image' => 'https://tourismmedia.italia.it/is/image/mitur/20220127150143-colosseo-roma-lazio-shutterstock-756032350?wid=1600&hei=900&fit=constrain,1&fmt=webp'],
            ['name' => 'Milano', 'image' => 'https://images.lonelyplanetitalia.it/static/places/milano-332.jpg?q=90&p=2400%7C1350%7Cmax&s=6d3a3048a8e5861516c1ca37a1f35620'],
            ['name' => 'Bari', 'image' => 'https://tourismmedia.italia.it/is/image/mitur/20210309150033-bari?wid=1600&hei=900&fit=constrain,1&fmt=webp'],
        ];
        return view('esercizio.about', ['elementi' => $elementi]);
    }

    public function dettaglio($mese)
    {
        // var_dump($mese);
        // die();

        $elementi = [
            ['name' => 'Roma', 'image' => 'https://tourismmedia.italia.it/is/image/mitur/20220127150143-colosseo-roma-lazio-shutterstock-756032350?wid=1600&hei=900&fit=constrain,1&fmt=webp'],
            ['name' => 'Milano', 'image' => 'https://images.lonelyplanetitalia.it/static/places/milano-332.jpg?q=90&p=2400%7C1350%7Cmax&s=6d3a3048a8e5861516c1ca37a1f35620'],
            ['name' => 'Bari', 'image' => 'https://tourismmedia.italia.it/is/image/mitur/20210309150033-bari?wid=1600&hei=900&fit=constrain,1&fmt=webp'],
        ];
        dd('ciao');
        //If che controlla il $mese con elemento dell'array
        //Se vero return view con dato corretto
        //Altrimenti 404
        foreach ($elementi as $elemento) {
            if ($elemento['name'] == $mese) {
                return view('esercizio.singolo-mese', ['month' => $elemento]);
            }
        }

        abort(404);
    }

    public  function contatti()
    {
        return view('esercizio.contact');
    }
}
