<?php

use App\Models\Agendamento;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('index');
});

Route::post('/', function(Request $informacoes) {
    Agendamento::create([
        'Nome' => $informacoes->nome,
        'Telefone' => $informacoes->telefone,
        'Origem' => $informacoes->origem,
        'Observacao' => $informacoes->observacao,
        'Data_contato' => $informacoes->data_contato
    ]);

    return view('index');
});

Route::get('/consulta', function () {
    $agendamentos = Agendamento::all();
    return view('consulta', compact('agendamentos'));
});

Route::get('editar/{id}', function($id) {
    $agendamento = Agendamento::findOrFail($id);
    return view('editar', compact('agendamento'));
});

Route::put('/atualizar/{id}', function(Request $informacoes, $id) {
    $agendamentos = Agendamento::all();
    $agendamento = Agendamento::findOrFail($id);
    $agendamento->Nome = $informacoes->nome;
    $agendamento->Telefone = $informacoes->telefone;
    $agendamento->Origem = $informacoes->origem;
    $agendamento->Observacao = $informacoes->observacao;
    $agendamento->Data_contato = $informacoes->data_contato;
    $agendamento->save();

    return redirect('consulta');
});

Route::delete('excluir/{id}', function($id) {
    $agendamento = Agendamento::findOrFail($id);
    $agendamento->delete();

    return redirect("consulta");
});