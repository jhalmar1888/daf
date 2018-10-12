<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Empresa;
use App\Http\Requests\EmpresaRequest;

class EmpresaController extends Controller
{
    public function index()
    {
        $empresas = Empresa::orderBy('id', 'DESC')->paginate();
        return view('empresas.index', compact('empresas'));
    }

    public function create()
    {       
        return view('empresas.create');
    }

    public function store(EmpresaRequest $request)
    {       
        $empresa = new Empresa;   

        $empresa->NomEmpresa  = $request->NomEmpresa;
        $empresa->Banco        = $request->Banco;
        $empresa->Cuenta     = $request->Cuenta;
        
        $empresa->save();

        return redirect()->route('empresas.index')
                          ->with('info', 'El Nombre fue guardado');
    }
    public function edit($id)
    {
        $empresa = Empresa::find($id);
        return view('empresas.edit', compact('empresa'));
    }

    public function update(EmpresaRequest $request, $id)
    {    
        $empresa = Empresa::find($id);

        $empresa->NomEmpresa  = $request->NomEmpresa;
        $empresa->Banco        = $request->Banco;
        $empresa->Cuenta     = $request->Cuenta;

        $empresa->save();
        return redirect()->route('empresas.index')
                          ->with('info', 'El Nombre fue actualizado');
    }

    public function show($id)
    {
        $empresa = Empresa::find($id);
        return view('empresas.show', compact('empresa'));
    }

    public function destroy($id)
    {
        $empresa = Empresa::find($id);
        $empresa->delete();
        return back()->with('info', 'La Empresa fue eleiminada');
    }
}
