<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
  //  return view('saudacao');

    $nome = "Anita";
    return View('saudacao', compact('nome'));
});

Route::get('/cursos', function(){
  $cursos = ['TDD', 'BDD', 'php'];
  return View('cursos', compact('cursos'));
}
);
