<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Note;
class NoteController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    	$notes = Note::orderBy('created_at', 'desc')->get();
        return view('note/list', compact('notes'));
    }

    public function getOneNote($id)
    {
    	$note = Note::find($id);
    	return view('note/one', compact('note'));
    }

    public function add() {
    	return view('note/add');
    }

    public function saveNote() {
    	Note::create([
    		'content' => request('content'),
    	]);
    	return redirect('login');
    }

    public function delete($id) {
    	$note = Note::findOrFail($id);
    	$note->delete();
    	return redirect('home');
    }
    public function edit($id) {
    	$note = Note::find($id);
    	return view('note/edit', compact('note'));
    }
    public function update($id) {
    	Note::where('id', $id)->update(array('content' => request('content')));
    	return redirect('login');
    }


}
