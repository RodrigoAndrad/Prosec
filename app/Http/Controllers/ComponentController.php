<?php

namespace App\Http\Controllers;

use App\Component;
use Illuminate\Http\Request;

class ComponentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $components = Component::orderBy('id', 'desc')->paginate(10);
        return view('manage.components.index')->withComponents($components);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('manage.components.create');    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
        'id' => 'unique:components,id',
        'name' => 'required|max:255',
        'description' => 'required|max:255',
      ]);

      $component = new component();
      if(!empty($request->id))
      {
        $component->id = $request->id;
      }
      else
      {
         $component->id = NULL;
      } 
      $component->name = $request->name;
      $component->description = $request->description;
      if ($component->save()) 
      {
        return redirect()->route('components.show', $component->id);
      } 
      else 
      {
        Session::flash('danger', 'Sorry a problem occurred while creating this component.');
        return redirect()->route('components.create');
      }    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Component  $component
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $component = Component::where('id', $id)->first();
        return view("manage.components.show")->withComponent($component);      
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Component  $component
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      //$roles = Role::all();
      $component = component::where('id', $id)->first();
      return view("manage.components.edit")->withComponent($component);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Component  $component
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
        'name' => 'required|max:255',
        'description' => 'required|max:255',
      ]);

      $component = component::findOrFail($id);
      $component->name = $request->name;
      $component->description = $request->description;
/*
      $component->syncRoles(explode(',', $request->roles));
      return redirect()->route('components.show', $id);
*/
      if ($component->save()) 
      {
        return redirect()->route('components.show', $id);
      } 
      else 
      {
        Session::flash('error', 'There was a problem saving the updated component info to the database. Try again later.');
        return redirect()->route('components.edit', $id);
      }    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Component  $component
     * @return \Illuminate\Http\Response
     */
    public function destroy(Component $component)
    {
        //
    }
}
