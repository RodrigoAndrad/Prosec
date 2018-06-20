<?php

namespace App\Http\Controllers;

use App\Element;
use Illuminate\Http\Request;

class ElementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $elements = Element::orderBy('id', 'desc')->paginate(10);
        return view('manage.elements.index')->withelements($elements);    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('manage.elements.create');    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
        'id' => 'unique:elements,id',
        'name' => 'required|max:255',
        'description' => 'required|max:255',
      ]);

      $element = new Element();
      if(!empty($request->id))
      {
        $element->id = $request->id;
      }
      else
      {
         $element->id = NULL;
      } 
      $element->name = $request->name;
      $element->description = $request->description;
      if ($element->save()) 
      {
        return redirect()->route('elements.show', $element->id);
      } 
      else 
      {
        Session::flash('danger', 'Sorry a problem occurred while creating this element.');
        return redirect()->route('elements.create');
      }    }

    /**
     * Display the specified resource.
     *
     * @param  \App\element  $element
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $element = Element::where('id', $id)->first();
        return view("manage.elements.show")->withelement($element);      
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\element  $element
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      //$roles = Role::all();
      $element = Element::where('id', $id)->first();
      return view("manage.elements.edit")->withelement($element);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\element  $element
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
        'name' => 'required|max:255',
        'description' => 'required|max:255',
      ]);

      $element = Element::findOrFail($id);
      $element->name = $request->name;
      $element->description = $request->description;
/*
      $element->syncRoles(explode(',', $request->roles));
      return redirect()->route('elements.show', $id);
*/
      if ($element->save()) 
      {
        return redirect()->route('elements.show', $id);
      } 
      else 
      {
        Session::flash('error', 'There was a problem saving the updated element info to the database. Try again later.');
        return redirect()->route('elements.edit', $id);
      }    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\element  $element
     * @return \Illuminate\Http\Response
     */
    public function destroy(Element $element)
    {
        //
    }
}
