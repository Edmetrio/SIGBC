<?php

use App\Http\Controllers\ClieAutomovelController;
use App\Http\Controllers\ClieEmpresaController;
use App\Http\Controllers\ClieIndividualController;
use App\Http\Controllers\CombustivelController;
use App\Http\Controllers\ContratoController;
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\HistoricoController;
use App\Http\Controllers\PerfilController;
use App\Http\Controllers\RecarregamentoController;
use App\Http\Controllers\RelatorioController;
use App\Http\Controllers\VendaEmpresaController;
use App\Http\Controllers\VendaIndividualController;
use App\Http\Livewire\Admin\AdminDashboardComponent;
use App\Http\Livewire\User\UserDashboardComponent;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});
Route::get('404', [dashboardController::class, 'erro']);

Route::get('cliempresa', [ClieEmpresaController::class, 'index']);
Route::post('adicionar', [ClieEmpresaController::class, 'store']);

Route::get('empresarial', [ClieEmpresaController::class, 'lista']);
Route::get('Clientes-Empresa', [ClieEmpresaController::class, 'ClientesEmpresa']);
Route::get('automovel', [ClieEmpresaController::class, 'automovel']);

Route::resource('clieindividual', ClieIndividualController::class);

Route::resource('clieautomovel', ClieAutomovelController::class);

Route::resource('combustivel', CombustivelController::class);

Route::resource('contrato', ContratoController::class);

Route::resource('vendaindividual', VendaIndividualController::class);

Route::resource('vendaempresa', VendaEmpresaController::class);
Route::post('venda', [VendaEmpresaController::class, 'store']);

Route::view('venda', 'livewire.vendaempresa');

Route::resource('perfil', PerfilController::class);

Route::resource('historico', HistoricoController::class);

Route::get('relatorio', [RelatorioController::class, 'venda']);

Route::resource('recarregamento', RecarregamentoController::class);

/* Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard'); */

//For Admin
Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::get('/user/dashboard', UserDashboardComponent::class)->name('user.dashboard');
});

//For Bombeiro
Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::get('/admin/dashboard', AdminDashboardComponent::class)->name('admin.dashboard');
});
