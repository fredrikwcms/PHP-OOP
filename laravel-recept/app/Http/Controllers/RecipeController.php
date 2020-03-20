<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Recipe;

class RecipeController extends Controller
{
    public function index() {
        $recipes = Recipe::all();

        return view('recipes.index', [
            'recipes' => $recipes,
        ]);
    }

    public function show($id) {
        $recipe = Recipe::findOrFail($id);

        return view('recipes.show', [
            'recipe' => $recipe
        ]);
    }

    public function create() {
        return view('recipes.create');
    }

    public function store() {

        $recipe = new Recipe();

        $recipe->title = request('title');
        $recipe->excerpt = request('excerpt');
        $recipe->instructions = request('instructions');
        // $recipe->ingredients = request('ingredients');
        $recipe->tags = request('tags');
        // error_log(request('tags'));

        $recipe->save();

        return redirect('/recipes');
    }

    public function destroy($id) {

        $recipe = Recipe::findOrFail($id);
        $recipe->delete();

        return redirect('/recipes')->with('msg', $recipe->title . ' was deleted');
    }

    public function edit($id) {
        $recipe = Recipe::find($id);
        print_r($recipe->title);
        // return view('recipes.edit');
        // Pass the $recipe variable to the view
        return view('recipes.edit')->with('recipe', $recipe);
    }

    public function update($id) {
        $recipe = Recipe::find($id);

        $recipe->title = request('title');
        $recipe->excerpt = request('excerpt');
        $recipe->instructions = request('instructions');
        $recipe->tags = request('tags');

        $recipe->save();
        
        return redirect('recipes/' . $recipe->id);
    }
}
