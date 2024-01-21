<?php

namespace App\Http\Controllers;

use App\Http\Requests\EmpresaRequest;
use App\Models\Empresa;
use Illuminate\Http\Request;


class EmpresaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\Factory|Illuminate\Contracts\View\View 
     */
    public function index(Request $request)
    {
        $tipo = $request->tipo;

        $this->validaTipo($tipo);
        $empresas = Empresa::todasPorTipo($tipo);
        return view('empresa.index',\compact('empresas','tipo'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\View\Factory|Illuminate\Contracts\View\View 
     */
    public function create(Request $request)
    {
        $this->validaTipo($request->tipo);
        return view('empresa.create',[
            'tipo'=>$request->tipo
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse|Illuminate\Routing\Redirector 
     */
    public function store(EmpresaRequest $request)
    {
        $empresa = Empresa::create($request->all());
        return redirect(route('empresas.show',$empresa));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\View\Factory|Illuminate\Contracts\View\View 
     */
    public function show(int $id)
    {
        $empresa = Empresa::buscaPorId($id);
        return view('empresa.show',\compact('empresa'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\View\Factory|Illuminate\Contracts\View\View 
     */
    public function edit(Empresa $empresa)
    {
        return view('empresa.edit',\compact('empresa'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(EmpresaRequest $request, Empresa $empresa)
    {
       $empresa->update($request->all());
       return \redirect()->route('empresas.show',$empresa);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Empresa $empresa, Request $request)
    {
        $this->validaTipo($request->tipo);
        $empresa->delete();
        return \redirect()->route('empresas.index',['tipo'=>$request->tipo]);
    }

    private function validaTipo(string $tipo)
    {
        if($tipo !== 'cliente' && $tipo !== 'fornecedor') {
            return \abort(404);
        }
    }
}
