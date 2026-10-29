<?php

namespace App\Http\Controllers;

use App\Models\Reporte;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReportesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        //$reportes =Reporte::where('user_id', auth()->id())->get();
        return view('reportes.listar-reportes')->with([
    'reportes' => Auth::user()->reportes->sortByDesc('id'),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('reportes.crear-reporte');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->merge(['user_id' => auth()->id()]);
        Reporte::create($request->all());
       // $reporte = new reportes();
       // $reporte->user_id = auth()->user()->id;
       // $reporte->descripcion = $request->descripcion;
       // $reporte->ubicacion = $request->ubicacion;
       // $reporte->fecha_inicio = $request->fecha_inicio;
       // $reporte->save();

        return redirect()->route('reporte.index')
        ->with('success', 'Reporte creado correctamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Reporte $reporte)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Reporte $reporte)
    {
        abort_if($reporte->user_id !== auth()->id(), 403);

    return view('reportes.editar-reporte', compact('reporte'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Reporte $reporte)
    {
        abort_if($reporte->user_id !== auth()->id(), 403);

    $reporte->update($request->only(['ubicacion', 'descripcion', 'fecha_inicio']));

    return redirect()->route('reporte.index')
        ->with('success', 'Reporte actualizado correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Reporte $reporte)
    {
         abort_if($reporte->user_id !== auth()->id(), 403);

    $reporte->delete();

    return redirect()->route('reporte.index')
        ->with('success', 'Reporte eliminado correctamente.');
    }
}
