<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Route;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        #Inserção de variavéis globais - em vez de por no web.php deve se por no AppServiceProvider
        view()->composer("*", function ($view) {
            $routeCurrent           = Route::getCurrentRoute();
            $titleBreadCrumb        = isset($routeCurrent->wheres["titleBreadCrumb"]) ? $routeCurrent->wheres["titleBreadCrumb"] : "Sem Título de BreadCrumb";
            $routeActive            = Route::currentRouteName();
            $route                  = explode(".", $routeActive);
            $routeAmbient           = $route[0] ?? null;
            $routeCrud              = $route[1] ?? null;
            $routeMethod            = $route[2] ?? null;

            //-------------------GIT BRANCH ACTIVE----------------------
            $fileGit                = file("../.git/HEAD", FILE_USE_INCLUDE_PATH);
            $firstLine              = $fileGit[0];
            $explodeGit             = explode("/", $firstLine, 3);
            $branch                 = ucfirst(str_replace(["\n"], [""], $explodeGit[2]));



            $view
                ->with("routeCurrent", $routeCurrent)
                ->with("routeActive", $routeActive)
                ->with("routeAmbient", $routeAmbient)
                ->with("routeCrud ", $routeCrud)
                ->with("routeMethod", $routeMethod)
                ->with("branch", $branch)
                ->with("titleBreadCrumb", $titleBreadCrumb);
        });
    }
}
