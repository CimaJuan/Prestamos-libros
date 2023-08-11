<?php

namespace App\Http\Controllers;

use App\Models\bibliotecarios;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\pdf;

class bibliotecariosController extends Controller
{
    
    public function index()
    {
        $bibliotecarios = bibliotecarios::all();
        return view('bibliotecario', ['bibliotecarios' => $bibliotecarios]);
    }

    public function pdf()
    {
        $bibliotecarios = bibliotecarios::all();
        $pdf = pdf::loadview('pdf_bibliotecarios', ['bibliotecarios' => $bibliotecarios]);
        return $pdf->stream();

    }


    public function create()
    {
        
    }


    public function store(Request $request)
    {
        $request->validate([
            'foto' => 'required',
            'nombre' => 'required|max:50',
            'telefono' => 'required'
        ]);

        $bibliotecarios = new bibliotecarios();
        if($request->hasFile('foto')){
            $file = $request->file('foto');
            $destinationPath = 'assets/img/featureds/';
            $filename = time() .'-'. $file->getClientOriginalName();
            $uploadSuccess = $request->file('foto')->move($destinationPath, $filename);
            $bibliotecarios-> foto = $destinationPath . $filename;

        }

        $bibliotecarios-> nombre = $request->input('nombre');
        $bibliotecarios-> telefono = $request->input('telefono');

        $bibliotecarios-> save();

        return redirect('Bibliotecario');
        

    }

    
    public function show(bibliotecarios $bibliotecarios)
    {
        
    }

    
    public function edit($id)
    {
        $bibliotecarios = bibliotecarios::find($id);
        return view('bibliotecarios_edit', ['bibliotecarios' => $bibliotecarios]);

    }

    
    public function update(Request $request, $id)
    {
        $request->validate([
            'foto' => 'required',
            'nombre' => 'required|max:50',
            'telefono' => 'required'
        ]);

        $bibliotecarios = bibliotecarios::find($id);

        if($request->hasFile('foto')){
            $file = $request->file('foto');
            $destinationPath = 'assets/img/featureds/';
            $filename = time() .'-'. $file->getClientOriginalName();
            $uploadSuccess = $request->file('foto')->move($destinationPath, $filename);
            $bibliotecarios-> foto = $destinationPath . $filename;

        }

        $bibliotecarios-> nombre = $request->input('nombre');
        $bibliotecarios-> telefono = $request->input('telefono');

        $bibliotecarios-> save();
        return redirect('Bibliotecario');

    }

   
    public function destroy($id)
    {
        $bibliotecarios = bibliotecarios::find($id);
        $bibliotecarios->delete();
        return redirect('Bibliotecario');
    }
}

