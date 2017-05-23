<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Foundation\Validation\ValidatesRequests;
use App\Notebook;

class NotebookController extends Controller
{
    use ValidatesRequests;

    public function index()
    {
        $notebook = Notebook::all();

        return view('notebook', compact('notebook'));
    }

    public function addContact(Request $request)
    {
        $this->validate(request(), [
            'fio' => 'required',
            'number' => 'required'
        ]);

        Notebook::create([
            'fio' => request('fio'),
            'number' => request('number')
        ]);

        return redirect('/');
    }

    public function edit($id)
    {
        $note = Notebook::findOrFail($id);
        return view('edit', compact('note'));
    }

    public function update(Request $request)
    {
        $id = $request->input('id');
        $note = Notebook::findOrFail($id);
        $note->fio = $request->input('fio');
        $note->number = $request->input('number');
        $note->save();
        return redirect('/');
    }
}
