<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\EmpresaRequest;
use App\Empresa;
use App\Estagio;
use App\Convenio;

class EmpresaController extends Controller
{
    public function index(Request $request){
        $this->authorize('empresa');
        if(isset($request->busca)) {
            $empresas = Empresa::where('nome','LIKE',"%{$request->busca}%")
                                ->orWhere('cnpj','LIKE',"%{$request->busca}%")
                ->paginate(20);
        } else {
            $empresas = Empresa::paginate(20);
        }        
        return view('empresas.index', compact('empresas'));
    }

    public function show(Empresa $empresa){
        $this->authorize('empresa');
        $estagios = Estagio::where('cnpj',$empresa->cnpj)->get();
        $convenios = Convenio::where('cnpj',$empresa->cnpj)->get();
        return view('empresas.show')->with([
            'empresa'  => $empresa,
            'estagios' => $estagios,
            'convenios' => $convenios,
        ]);
    }
    
    public function create(){
        $this->authorize('empresa');
        return view ('empresas.create')->with('empresa', new Empresa);
    }

    public function store(EmpresaRequest $request){
        $this->authorize('empresa');
        $validated = $request->validated();
        Empresa::create($validated);
        return redirect('/empresas');
    }

    public function edit(Empresa $empresa){
        $this->authorize('empresa');
        return view('empresas.edit')->with('empresa', $empresa);
    }

    public function update(EmpresaRequest $request, Empresa $empresa){
        $this->authorize('empresa');
        $validated = $request->validated();
        $empresa->update($validated);
        return redirect("/empresas/$empresa->id");
    }

    public function destroy(Empresa $empresa){
        $this->authorize('empresa');
        $empresa->delete();
        return redirect('/empresas');
    }
}
