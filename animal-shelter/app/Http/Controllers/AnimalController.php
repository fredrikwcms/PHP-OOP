<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Animal;

class AnimalController extends Controller
{
    public function index() {
        // We should get data from db here, but we code it ourselves :))
        // $animals = [
        //     ['type' => 'cat', 'name' => 'Uno'],
        //     ['type' => 'dog', 'name' => 'Ozzy'],
        //     ['type' => 'cat', 'name' => 'New Cat']
        // ];
        $animals = Animal::all();
        // $animals = Animal::orderBy('name', 'desc')->get();
        // $animals = Animal::where('type', 'hund')->get();

        return view('animals.index', [
            'animals' => $animals,
        ]);
    }

    public function show($id) {
        // pass the id to the $id variable to show a single db entry
        // $animal = Animal::where('id', $id)->first();
        $animal = Animal::findOrFail($id);
        return view('animals.show', [
            'animal' => $animal
            ]);
    }

    public function create() {
        return view('animals.create');
    }

    public function store() {

        $animal = new Animal();

        $animal->name = request('name');
        $animal->type = request('type');
        $animal->color = request('color');

        $animal->save();

        return redirect('/animals');
    }
}
