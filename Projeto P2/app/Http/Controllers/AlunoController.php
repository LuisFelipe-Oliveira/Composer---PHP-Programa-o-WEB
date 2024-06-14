<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Alunos;

class AlunoController extends Controller
{
    public function index()
    {
        $alunos = Alunos::all();
        return view('aluno.index', compact('alunos'));
    }

    public function create()
    {
        return view("aluno.insert");
    }

    public function store(Request $request)
    {
        Alunos::create([
            'nome' => $request->input('nome'),
            'telefone' => $request->input('email'),
            'email' => $request->input('telefone'),
            'dataNascimento' => $request->input('dataNascimento'),
        ]);
        return redirect()->route('alunos.index')->with('success', "Registro criado com sucesso");
    }

    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        $aluno = Alunos::findOrFail($id);
        return view('aluno.edit', compact('aluno'));
    }

    public function delete(string $id) {
        $aluno = Alunos::findOrFail($id);
        return view('aluno.delete', compact('aluno'));
    }

    public function update(Request $request, string $id)
    {
        $aluno = Alunos::findOrFail($id);
        $aluno->update($request->all());
        return redirect()->route('alunos.index')->with('success', 'Registro alterado com sucesso!');
    }

    public function destroy(string $id)
    {
        $aluno = Alunos::findOrFail($id);
        $aluno->delete();
        return redirect()->route('alunos.index')->with('success', 'Registro deletado com sucesso!');
    }
}
