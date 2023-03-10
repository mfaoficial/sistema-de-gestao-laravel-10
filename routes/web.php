<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [\App\Http\Controllers\PrincipalController::class, 'principal'])->name('site.index');
Route::get('/sobre-nos', [\App\Http\Controllers\SobreNosController::class, 'sobreNos'])->name('site.sobreNos');
Route::get('/contato', [\App\Http\Controllers\ContatoController::class, 'contato'])->name('site.contato');
Route::get('/login', function ()
{
    return 'Login';
})->name('site.login');

// Agrupamento de rotas
Route::prefix('/app')->group(function ()
{
    Route::get(
        '/clientes',
        function ()
        {
            return 'Clientes';
        }
    )->name('app.clientes');
    Route::get('/fornecedores', [\App\Http\Controllers\FornecedorController::class, 'index'])->name('app.fornecedores');
    Route::get(
        '/produtos',
        function ()
        {
            return 'Produtos';
        }
    )->name('app.produtos');
});

// Rota de fallback caso tentem acessar qualquer rota que não existe
Route::fallback(function ()
{
    echo 'A rota acessada não existe. <a href="' . route('site.index') . '">clique aqui</a> para voltar para a home';
});

// Como passar parâmetros para uma rota
// Route::get('/teste/{p1}/{p2}', [\App\Http\Controllers\AnotacaoController::class, 'variaveis'])->name('anotacoes.variaveis');

// Forma de escrever uma rota em laraveis antigos
// Route::get('/rota', Controller@funcao)->name('app.rota');

// Redirecionamento de rotas
// Route::redirect('/rota2', '/rota1');

// Route::get('/rota1', function() {
//     echo 'Rota 1';
// })->name('site.rota1');

// Route::get('/rota2', function() {
//     echo 'Rota 2';
// })->name('site.rota2');

// Forma de retornar uma função diretamente
/* Route::get('/sobre-nos', function () {
    return 'Sobre-nós';
}); */


// Modelo de como criar rota
// Route::get($uri, $callback(array apontando pro Controller::class e função, ou uma função diretamente));

/* verbos http
get
post
put
patch
delete
options
*/
