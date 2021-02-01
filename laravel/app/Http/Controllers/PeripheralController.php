<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Peripheral;

class PeripheralController extends Controller
{
  public function index() {        //visualizzo tutte le peripherals
    $peripherals = Peripheral::all();    //assegno alla variabile $peripherals tutta la tabella (posso anche scrivere: $peripherals = App\Peripheral::all(); togliendo use App\Peripheral; )
    return view('pages.peripherals', compact('peripherals'));
  }

  public function show($id) {      //visualizzo la singola peripheral
    $peripheral = Peripheral::findOrFail($id);    //cerco l'elemento con questo specifico id, se non trovato da errore
    return view('pages.peripheral', compact('peripheral'));
  }

  public function create() {       //visualizzo la pagina col form
    return view('pages.peripheral-create');
  }

  public function store(Request $request) {       //acquisisco le informazioni del form
    //VERS 1:
    Peripheral::create($request -> all());
    return redirect() -> route('peripheral-index');

    // VERS 2:
    // $newPeripheral=new Peripheral;
    //
    // $newPeripheral -> name =$request ->get('name');
    // $newPeripheral -> model =$request ->get('model');
    // $newPeripheral -> price =$request ->get('price');
    // $newPeripheral -> consumption =$request ->get('consumption');
    //
    // $newPeripheral -> save();
    // return redirect() -> route('peripheral-index');
   }
}
