<?php

namespace App\Http\Controllers;

use App\Text;
use Illuminate\Http\Request;

class TextController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $texts = Text::orderBy('id', 'desc')->paginate(10);
        return view('manage.texts.index')->withtexts($texts);    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('manage.texts.create');    
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
        'id' => 'unique:texts,id',
        'name' => 'required|max:255',
        'description' => 'required|max:255',
        'title' => 'max:255',
        'subtitle' => 'max:255',
        'content' => 'max:65535',
      ]);

      $text = new Text();
      if(!empty($request->id))
      {
        $text->id = $request->id;
      }
      else
      {
         $text->id = NULL;
      } 
      $text->name = $request->name;
      $text->description = $request->description;
      $text->title = $request->title;
      $text->subtitle = $request->subtitle;
      $text->content = $request->content;
      if ($text->save()) 
      {
        return redirect()->route('texts.show', $text->id);
      } 
      else 
      {
        Session::flash('danger', 'Sorry a problem occurred while creating this text.');
        return redirect()->route('texts.create');
      }    
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Text  $text
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $text = Text::where('id', $id)->first();
        return view("manage.texts.show")->withtext($text);      
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Text  $text
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      //$roles = Role::all();
      $text = Text::where('id', $id)->first();
      return view("manage.texts.edit")->withtext($text);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Text  $text
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $this->validate($request, [
        'name' => 'required|max:255',
        'description' => 'required|max:255',
        'title' => 'max:255',
        'subtitle' => 'max:255',
        'content' => 'max:65535',
      ]);
      $text = Text::findOrFail($id);
      $text->name = $request->name;
      $text->description = $request->description;
      $text->title = $request->title;
      $text->subtitle = $request->subtitle;
      $text->content = $request->content;
/*
      $text->syncRoles(explode(',', $request->roles));
      return redirect()->route('texts.show', $id);
*/
      if ($text->save()) 
      {
        return redirect()->route('texts.show', $id);
      } 
      else 
      {
        Session::flash('error', 'There was a problem saving the updated text info to the database. Try again later.');
        return redirect()->route('texts.edit', $id);
      }    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Text  $text
     * @return \Illuminate\Http\Response
     */
    public function destroy(Text $text)
    {
        //
    }
}
