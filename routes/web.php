<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Site\MainController as SiteMainController;
use App\Http\Controllers\Panel\MainController as PanelMainController;
use App\Http\Controllers\Panel\UserController as PanelUserController;
use App\Http\Controllers\Panel\UserController as PanelEstudanteController;
use App\Http\Controllers\Panel\UserController as PanelProfessorController;
use App\Http\Controllers\Panel\UserController as PanelCursoController;
use App\Http\Controllers\Panel\UserController as PanelTurmaController;
use App\Http\Controllers\Panel\UserController as PanelDisciplinaController;
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

    #Rotas do Controller Estudante
    Route::name("student.")->group(function () {

        #Rota de Dados do Estudante
        Route::get('/estudantes/show', [PanelEstudanteController::class, "show"])
            ->name("show")
            ->setWheres([
                "titleBreadCrumb"   => "Dados do Estudante"
            ]);

        #Rota de Lista de Estudantes
        Route::get('/estudantes', [PanelEstudanteController::class, "index"])
        ->name("index")
        ->setWheres([
            "titleBreadCrumb"   => "Lista de Estudantes"
        ]);;

        #Rota de Gravação de Estudantes
        Route::post('/estudantes/cadastro', [PanelEstudanteController::class, "store"])
        ->name("store")
        ->setWheres([
            "titleBreadCrumb"   => "Gravação de Estudantes"
        ]);;

        #Rota de Edição de Estudantes
        Route::put('/estudantes/edicao', [PanelEstudanteController::class, "update"])
        ->name("update")
        ->setWheres([
            "titleBreadCrumb"   => "Edição de Estudantes"
        ]);;

        #Rota de Remoção de Estudantes
        Route::delete('/estudantes/remocao/[id?]', [PanelEstudanteController::class, "delete"])
        ->name("delete")
        ->setWheres([
            "titleBreadCrumb"   => "Remoção de Estudantes"
        ]);;
    });

    #Rotas do Controller Professor
    Route::name("teacher.")->group(function () {

        #Rota de Dados do Professor
        Route::get('/estudantes/show', [PanelProfessorController::class, "show"])
            ->name("show")
            ->setWheres([
                "titleBreadCrumb"   => "Dados do Professor"
            ]);

        #Rota de Lista de Professores
        Route::get('/professores', [PanelProfessorController::class, "index"])
        ->name("index")
        ->setWheres([
            "titleBreadCrumb"   => "Lista de Professores"
        ]);;

        #Rota de Gravação de Professores
        Route::post('/professores/cadastro', [PanelProfessorController::class, "store"])
        ->name("store")
        ->setWheres([
            "titleBreadCrumb"   => "Gravação de Professores"
        ]);;

        #Rota de Edição de Professores
        Route::put('/professores/edicao', [PanelProfessorController::class, "update"])
        ->name("update")
        ->setWheres([
            "titleBreadCrumb"   => "Edição de Professores"
        ]);;

        #Rota de Remoção de Professores
        Route::delete('/professores/remocao/[id?]', [PanelProfessorController::class, "delete"])
        ->name("delete")
        ->setWheres([
            "titleBreadCrumb"   => "Remoção de Professores"
        ]);;
    });

    #Rotas do Controller Curso
    Route::name("course.")->group(function () {

        #Rota de Dados do Curso
        Route::get('/cursos/show', [PanelCursoController::class, "show"])
            ->name("show")
            ->setWheres([
                "titleBreadCrumb"   => "Dados do Curso"
            ]);

        #Rota de Lista de Cursos
        Route::get('/cursos', [PanelCursoController::class, "index"])
        ->name("index")
        ->setWheres([
            "titleBreadCrumb"   => "Lista de Cursos"
        ]);;

        #Rota de Gravação de Cursos
        Route::post('/cursos/cadastro', [PanelCursoController::class, "store"])
        ->name("store")
        ->setWheres([
            "titleBreadCrumb"   => "Gravação de Cursos"
        ]);;

        #Rota de Edição de Cursos
        Route::put('/cursos/edicao', [PanelCursoController::class, "update"])
        ->name("update")
        ->setWheres([
            "titleBreadCrumb"   => "Edição de Cursos"
        ]);;

        #Rota de Remoção de Cursos
        Route::delete('/cursos/remocao/[id?]', [PanelCursoController::class, "delete"])
        ->name("delete")
        ->setWheres([
            "titleBreadCrumb"   => "Remoção de Cursos"
        ]);;
    });

    #Rotas do Controller Turma
    Route::name("class.")->group(function () {

        #Rota de Dados do Turma
        Route::get('/turmas/show', [PanelTurmaController::class, "show"])
            ->name("show")
            ->setWheres([
                "titleBreadCrumb"   => "Dados da Turma"
            ]);

        #Rota de Lista das Turmas
        Route::get('/turmas', [PanelTurmaController::class, "index"])
        ->name("index")
        ->setWheres([
            "titleBreadCrumb"   => "Lista das Turmas"
        ]);;

        #Rota de Gravação de Turmas
        Route::post('/turmas/cadastro', [PanelTurmaController::class, "store"])
        ->name("store")
        ->setWheres([
            "titleBreadCrumb"   => "Gravação das Turmas"
        ]);;

        #Rota de Edição de Turmas
        Route::put('/turmas/edicao', [PanelTurmaController::class, "update"])
        ->name("update")
        ->setWheres([
            "titleBreadCrumb"   => "Edição das Turmas"
        ]);;

        #Rota de Remoção de Turmas
        Route::delete('/turmas/remocao/[id?]', [PanelTurmaController::class, "delete"])
        ->name("delete")
        ->setWheres([
            "titleBreadCrumb"   => "Remoção das Turmas"
        ]);;
    });

    #Rotas do Controller Disciplina
    Route::name("subject.")->group(function () {

        #Rota de Dados do Disciplina
        Route::get('/disciplinas/show', [PanelDisciplinaController::class, "show"])
            ->name("show")
            ->setWheres([
                "titleBreadCrumb"   => "Dados da Disciplina"
            ]);

        #Rota de Lista de Disciplinas
        Route::get('/disciplinas', [PanelDisciplinaController::class, "index"])
        ->name("index")
        ->setWheres([
            "titleBreadCrumb"   => "Lista das Disciplinas"
        ]);;

        #Rota de Gravação das Disciplinas
        Route::post('/disciplinas/cadastro', [PanelDisciplinaController::class, "store"])
        ->name("store")
        ->setWheres([
            "titleBreadCrumb"   => "Gravação das Disciplinas"
        ]);;

        #Rota de Edição das Disciplinas
        Route::put('/disciplinas/edicao', [PanelDisciplinaController::class, "update"])
        ->name("update")
        ->setWheres([
            "titleBreadCrumb"   => "Edição das Disciplinas"
        ]);;

        #Rota de Remoção das Disciplinas
        Route::delete('/disciplinas/remocao/[id?]', [PanelDisciplinaController::class, "delete"])
        ->name("delete")
        ->setWheres([
            "titleBreadCrumb"   => "Remoção das Disciplinas"
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
