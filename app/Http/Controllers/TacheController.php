<?php

namespace App\Http\Controllers;
use App\Models\Tache;
use Illuminate\Http\Request;

class TacheController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       return view('tache');
    }
    public function affiche()
    {  
     $tache = Tache::all(); 
    return view ('affiche',compact('tache'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'Titre' => 'required|max:100',
            'Detail' => 'required|max:500',
        ]);

      $tache = new Tache();
      $tache->Titre = $request->Titre;
      $tache->Detail = $request->Detail;

     $tache->save();

     return back()->with('message', "La tâche a bien été créée !");

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,  $tache)
    {
       
    $data = $request->validate([
        'Titre' => 'required|max:100',
        'Detail' => 'required|max:500',
    ]);
    $tache->title = $request->title;
    $tache->detail = $request->detail;
    $tache->state = $request->has('state');
    $tache->save();
    return back()->with('message', "La tâche a bien été modifiée !"); 
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
