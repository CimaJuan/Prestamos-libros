<?php

namespace App\Http\Controllers;

use App\Models\prestamos;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\pdf;

class prestamosController extends Controller
{
    
    public function index()
    {
        $prestamos =prestamos::all();
        return view('prestamos', ['prestamos' => $prestamos]);
    }
   

    public function pdf()
    {
        $prestamos =prestamos::all();
        $pdf = pdf::loadview('pdf_prestamos', ['prestamos' => $prestamos]);
        return $pdf->stream();

    }


    public function create()
    {
        
    }
    
    public function store(Request $request)
    {

        $request->validate([
            'usuario' => 'required|max:255',
            'fecha' => 'required',
            'hora' => 'required',
            'libros' => 'required',
            'cantidad' => 'required'

        ]);

        $prestamos = new prestamos();
        $prestamos->usuario = $request->input('usuario');
        $prestamos->fecha = $request->input('fecha');
        $prestamos->hora = $request->input('hora');
        $prestamos->libros = $request->input('libros');
        $prestamos->cantidad = $request->input('cantidad');
        $prestamos->save();

        return redirect('Prestamos');

    }

    
    public function show(prestamos $prestamos)
    {
        //
    }

    public function edit($id)
    {
        $prestamos = prestamos::find($id);
        return view('prestamos_edit', ['prestamos' => $prestamos]);
    }

    
    public function update(Request $request, $id)
    {
        $request->validate([
            'usuario' => 'required|max:255',
            'fecha' => 'required',
            'hora' => 'required',
            'libros' => 'required',
            'cantidad' => 'required'

        ]);

        $prestamos = prestamos::find($id);
        $prestamos->usuario = $request->input('usuario');
        $prestamos->fecha = $request->input('fecha');
        $prestamos->hora = $request->input('hora');
        $prestamos->libros = $request->input('libros');
        $prestamos->cantidad = $request->input('cantidad');
        $prestamos-> save();

        return redirect('Prestamos');

    }
 
    
    public function destroy($id)
    {
        
        $prestamo = prestamos::find($id);
        $prestamo->delete();
        return redirect("Prestamos");
    }
}
