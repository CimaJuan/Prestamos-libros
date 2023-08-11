<?php

namespace App\Http\Controllers;

use App\Models\libros;
use App\Models\editorial;
use App\Models\categoria;
use App\Models\estado;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\pdf;


class librosController extends Controller
{
    
    public function index()
    {
        $libros =libros::all();
        return view('libros', ['libros' => $libros], ['editorial' => editorial::all(), 'categoria' => categoria::all(), 'estado' => estado::all() ]);
    }


    public function pdf()
    {

        $libros = libros::all();
        $editorial = editorial::all();  
        $categoria = categoria::all();
        $estado = estado::all();

        $pdf = pdf::loadview('pdf_libros', ['libros' => $libros]);
        return $pdf->stream();
    }
    

    public function create()
    {
        
    }

    
    public function store(Request $request)
    {
        $request->validate([
            'ISBN' => 'required',
            'titulo' => 'required|max:255',
            'autor' => 'required|max:255',
            'editorial' => 'required',
            'categoria' => 'required',
            'ejemplares' => 'required',
            'estado' => 'required',
            'foto' => 'required'

        ]);

        $libros = new libros();
        $libros-> ISBN = $request->input('ISBN');
        $libros-> titulo = $request->input('titulo');
        $libros-> autor = $request->input('autor');
        $libros-> editorial_id = $request->input('editorial');
        $libros-> categoria_id = $request->input('categoria');
        $libros-> ejemplares = $request->input('ejemplares');
        $libros-> estado_id = $request->input('estado'); 

        if($request->hasFile('foto')){
            $file = $request->file('foto');
            $destinationPath = 'assets/img/featureds/';
            $filename = time() .'-'. $file->getClientOriginalName();
            $uploadSuccess = $request->file('foto')->move($destinationPath, $filename);
            $libros-> foto = $destinationPath . $filename;
        }  

        $libros-> save();

        return redirect('Libros'); 

    }

    
    public function show(libros $libros)
    {
        
    }

    
    public function edit($id)
    {
        $libros = libros::find($id);
        return view('libros_edit', ['libros' => $libros, 'editorial' => editorial::all(), 'categoria' => categoria::all(), 'estado' => estado::all()]);


    }

    
    public function update(Request $request, $id)
    {
        
        $request->validate([
            'ISBN' => 'required',
            'titulo' => 'required|max:255',
            'autor' => 'required|max:255',
            'editorial' => 'required',
            'categoria' => 'required',
            'ejemplares' => 'required',
            'estado' => 'required',
            'foto' => 'required'

        ]);

        $libros = libros::find($id);
        $libros-> ISBN = $request->input('ISBN');
        $libros-> titulo = $request->input('titulo');
        $libros-> autor = $request->input('autor');
        $libros-> editorial_id = $request->input('editorial');
        $libros-> categoria_id = $request->input('categoria');
        $libros-> ejemplares = $request->input('ejemplares');
        $libros-> estado_id = $request->input('estado');
       
        if($request->hasFile('foto')){
            $file = $request->file('foto');
            $destinationPath = 'assets/img/featureds/';
            $filename = time() .'-'. $file->getClientOriginalName();
            $uploadSuccess = $request->file('foto')->move($destinationPath, $filename);
            $libros-> foto = $destinationPath . $filename;
        }

        $libros-> save();

        return redirect('Libros');

    }

   
    public function destroy($id)
    {
        $libro = libros::find($id);
        $libro->delete();
        return redirect("Libros");

    }
}
