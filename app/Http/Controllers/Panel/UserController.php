<?php

namespace App\Http\Controllers\Panel;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
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
        // Gravação do usuário

        $create = $this->model->create($this->request->all());
        $this->request["id"] = $create->id;
        $create->password = Hash::make($this->request->password);
        $create->password_confirmation = Hash::make($this->request->password_confirmation);
        $create->save();

        if ($create)
            return redirect()
                ->route("panel.user.index")
                ->with("success", "Usuário criado com sucesso!");

        return back()
            ->withInput()
            ->with("error", "Erro ao criar o usuário");
    }

    /**
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update()
    {
        // Actualização do usuário
        $item = $this->model->find($this->request->id);

        //$item->password != $this->request->password ? $this->request["password"] = Hash::make($this->request->password): null;


        $update = $item->update($this->request->all());
        if ($update)
            return back()
                ->with("success", "Usuário editado com sucesso!");

        return back()
            ->withInput()
            ->with("error", "Erro ao editar o usuário");
    }

    /**
     * @return \Illuminate\Http\RedirectResponse
     */
    public function delete($id)
    {
        // Remoção do usuário
        $item = $this->model->find($this->request->id);
        $delete = $item->delete();
        if ($delete)
            return back()
                ->with("success", "Usuário removido com sucesso!");

        return back()
            ->withInput()
            ->with("error", "Erro ao remover o usuário");

    }

    /**
     * @return \Illuminate\Http\JasonResponse
     */
    public function show($id)
    {
        // Mostrar o usuário para edição
        return response()->json($this->model->find($this->request->id));

    }
}
