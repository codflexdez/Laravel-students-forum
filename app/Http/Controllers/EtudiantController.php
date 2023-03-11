<?php

namespace App\Http\Controllers;

use App\Models\Etudiant;
use App\Models\Ville;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EtudiantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $students = Etudiant::orderBy('nom', 'asc')->paginate(12);
        return view('forum.index', ['students' => $students]);
    }


    public function search(Request $request)
    {
        $query = $request->input('search');
        
        
            $students = Etudiant::where('nom', 'like', "%$query%")
            ->orderBy('nom')
            ->paginate(12);
       
            // Append the search query to the pagination links
            $students->appends(['search' => $query]);

            return view('forum.search', compact('students', 'query'));
    }

        
        
        

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $villes = Ville::all(); 
        return view('forum.create', compact('villes')); 
    }
       

    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $etudiant = new Etudiant;
        $etudiant->nom = $request->nom;
        $etudiant->phone = $request->phone;
        $etudiant->email = $request->email;
        $etudiant->address = $request->address;
        $etudiant->dob = $request->dob;
        $etudiant->ville_id = $request->ville;
        $etudiant->save();
        return redirect()->route('forum.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Etudiant  $etudiant
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       
        $student = Etudiant::with('ville')->findOrFail($id);
        
        return view('forum.show', compact('student'));


    }
   
        
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Etudiant  $etudiant
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $etudiant = Etudiant::findOrFail($id);
        $villes = Ville::all();
        return view('forum.edit', compact('etudiant', 'villes'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Etudiant  $etudiant
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $etudiant = Etudiant::findOrFail($id);

        $request->validate([
            'nom' => 'required|string|max:255',
            'dob' => 'required|date',
            'phone' => 'required|string|max:25',
            'email' => 'required|email|unique:etudiants,email,'.$etudiant->id,
            'address' => 'required|string|max:255',
            'ville' => 'required|exists:villes,id',
        ]);

        $etudiant->nom = $request->nom;
        $etudiant->dob = $request->dob;
        $etudiant->phone = $request->phone;
        $etudiant->email = $request->email;
        $etudiant->address = $request->address;
        $etudiant->ville_id = $request->ville;
        $etudiant->save();

        return redirect()->route('etudiants.show', $etudiant->id)->with('success', 'Les informations de l\'étudiant ont été mises à jour avec succès!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Etudiant  $etudiant
     * @return \Illuminate\Http\Response
     */
    public function destroy(Etudiant $etudiant)
    {
        $etudiant->delete();
        return redirect(route('forum.index'));
    }
}
