<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Site\MainController as SiteMainController;
use App\Http\Controllers\Panel\MainController as PanelMainController;
use App\Http\Controllers\Panel\UserController as PanelUserController;
use App\Http\Controllers\System\MainController as SystemMainController;
use Illuminate\Support\Facades\View;

#Inserção de variavéis globais - em vez de por aqui, no web.php, deve se por no AppServiceProvider


#Rotas do site
Route::name("site.")->group(function () {

    #Rotas do Controller Main ou (Principal)
    Route::name("main")->group(function () {

        #Rota Index do site
        Route::get('/', [SiteMainController::class, "index"])->name("index");
    });
});


Auth::routes();

#Rotas do painel
Route::middleware("auth")->name("panel.")->group(function () {

    #Rotas do Controller Main ou (Principal)
    Route::name("main.")->group(function () {

        #Rota Index do Painel
        Route::get('/painel-de-controle/', [PanelMainController::class, "index"])
            ->name("index")
            ->setWheres([
                "titleBreadCrumb"   => "Página Principal"
            ]);;
    });

    #Rotas do Controller User
    Route::name("user.")->group(function () {

        #Rota de Dados do Usuario
        Route::get('/usuarios/show', [PanelUserController::class, "show"])
            ->name("show")
            ->setWheres([
                "titleBreadCrumb"   => "Dados do Usuário"
            ]);

        #Rota de Lista de Usuarios
        Route::get('/usuarios', [PanelUserController::class, "index"])
        ->name("index")
        ->setWheres([
            "titleBreadCrumb"   => "Lista de Usuários"
        ]);;

        #Rota de Gravação de Usuarios
        Route::post('/usuarios/cadastro', [PanelUserController::class, "store"])
        ->name("store")
        ->setWheres([
            "titleBreadCrumb"   => "Gravação de Usuários"
        ]);;

        #Rota de Edição de Usuarios
        Route::put('/usuarios/edicao', [PanelUserController::class, "update"])
        ->name("update")
        ->setWheres([
            "titleBreadCrumb"   => "Edição de Usuários"
        ]);;

        #Rota de Remoção de Usuarios
        Route::delete('/usuarios/remocao/[id?]', [PanelUserController::class, "delete"])
        ->name("delete")
        ->setWheres([
            "titleBreadCrumb"   => "Remoção de Usuários"
        ]);;
    });
});

#Rotas do sistema
Route::name("system.")->group(function () {

    #Rotas do Controller Main ou (Principal)
    Route::name("main")->group(function () {

        #Rota Index do Controle de Sistema
        Route::get('/system/', [SystemMainController::class, "index"])->name("index");
    });
});
