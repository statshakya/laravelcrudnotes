<?php

namespace App\Http\Controllers;

use App\Models\Note;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NoteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $notes = Note::query()->orderBy('created_at','desc')->paginate(10);
        // dd($notes);
        return view('note.index', ['notes'=> $notes]); 
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('note.create'); 
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       $data= $request->validate(
        [
            'title' =>['required','string'],
            'note' =>['required','string']
        ]
        );

        $data['user_id']= 1;
        $note = Note::create($data);
        return to_route('note.show', $note)->with('message',$note->title.'Note was created');
    }

    /**
     * Display the specified resource.
     */
    public function show(Note $note)
    {
        return view('note.show', ['note'=> $note]) ; 
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Note $note)
    {
        return view('note.edit' , ['note'=> $note]); 
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Note $note)
    {
        $data= $request->validate(
            [
                'title' =>['required','string'],
                'note' =>['required','string']
            ]
            );
    
            $note->update($data);
            return to_route('note.show', $note)->with('message',$note->title.'Note was Updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Note $note)
    {
        $note->delete();
        return to_route('note.index',$note)->with('message', $note->title.' was Deleted');
    }
}
