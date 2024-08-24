<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Site\MainController as SiteMainController;
use App\Http\Controllers\Panel\MainController as PanelMainController;
use App\Http\Controllers\System\MainController as SystemMainController;
use Illuminate\Support\Facades\View;

#Inserção de variavéis globais
view::composer('*', function ($view) {
    $routeCurrent           = Route::getCurrentRoute();
    $routeActive            = Route::currentRouteName();
    $titleBreadCrumb        = isset($routeCurrent->wheres["titleBreadCrumb"]) ? $routeCurrent->wheres["titleBreadCrumb"] : "Sem Título de BreadCrumb" ;
    $route                  = explode(".",$routeActive);
    $routeAmbient           = $route[0] ?? null;
    $routeCrud              = $route[1] ?? null;
    $routeMethod            = $route[2] ?? null;



//-------------------GIT BRANCH ACTIVE----------------------
    $fileGit                = file("../.git/HEAD",FILE_USE_INCLUDE_PATH);
    $firstLine              = $fileGit[0];
    $explodeGit             = explode("/",$firstLine,3);
    $branch                 = ucfirst(str_replace(["\n"],[""],$explodeGit[2]));

//-------------------GIT BRANCH ACTIVE----------------------

$view
    ->with("routeCurrent",$routeCurrent)
    ->with("routeActive",$routeActive)
    ->with("routeAmbient",$routeAmbient)
    ->with("routeCrud ",$routeCrud )
    ->with("routeMethod",$routeMethod)
    ->with("branch",$branch)
    ->with("titleBreadCrumb",$titleBreadCrumb);

});


#Rotas do site
Route::name("site.")->group(function(){

    #Rotas do Controller Main ou (Principal)
    Route::name("main")->group(function(){

        #Rota Index do site
        Route::get('/', [SiteMainController::class, "index"])->name("index");
    });
});


Auth::routes();

 #Rotas do painel
 Route::middleware("auth")->name("panel.")->group(function(){

    #Rotas do Controller Main ou (Principal)
    Route::name("main.")->group(function(){

        #Rota Index do Painel
        Route::get('/painel-de-controle/', [PanelMainController::class, "index"])
        ->name("index")->setWheres([
            "titleBreadCrumb"   => "Página Principal"
        ]);;
    });
});

#Rotas do sistema
Route::name("system.")->group(function(){

    #Rotas do Controller Main ou (Principal)
    Route::name("main")->group(function(){

        #Rota Index do Controle de Sistema
        Route::get('/system/', [SystemMainController::class, "index"])->name("index");
    });
});

