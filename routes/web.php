<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Site\MainController as SiteMainController;
use App\Http\Controllers\Panel\MainController as PanelMainController;
use App\Http\Controllers\System\MainController as SystemMainController;


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
        Route::get('/painel-de-controle/', [PanelMainController::class, "index"])->name("index");
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

