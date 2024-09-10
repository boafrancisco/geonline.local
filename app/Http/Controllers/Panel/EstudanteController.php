<?php

namespace App\Http\Controllers\Panel;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class EstudanteController extends Controller
{
    protected $request;
    protected $model;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(Request $request, User $model)
    {
        $this->model = $model;
        $this->request = $request;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $list = $this->model->all();
        return view($this->request->route()->getName(), compact("list"));
    }

    /**
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store()
    {
        // Gravação do estudante

         $create = $this->model->create($this->request->all());
         $this->request["id"] = $create->id;

         $create->save();

        if ($create)
            return redirect()
                ->route("panel.student.index")
                ->with("success", "Estudante criado com sucesso!");

        return back()
            ->withInput()
            ->with("error", "Erro ao criar o estudante");
    }

    /**
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update()
    {
        // Actualização do usuário
        $item = $this->model->find($this->request->id);

        if ($item->password != $this->request->password) {
            $this->request->merge(['password' => Hash::make($this->request->password)]);
        }

        $update = $item->update($this->request->all());

        if ($update)
            return back()
                ->with("success", "Estudante editado com sucesso!");

        return back()
            ->withInput()
            ->with("error", "Erro ao editar o estudante");
    }

    /**
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function delete($id)
    {
        // Remoção do estudante
        $item = $this->model->find($this->request->id);
        $delete = $item->delete();
        if ($delete)
            return back()
                ->with("success", "Estudante removido com sucesso!");

        return back()
            ->withInput()
            ->with("error", "Erro ao remover o estudante");

    }

    /**
     * @param $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function show($id)
    {
        // Mostrar o usuário para edição
        return response()->json($this->model->find($this->request->id));

    }
}
