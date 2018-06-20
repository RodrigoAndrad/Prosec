<?php

namespace App\Http\Controllers;

use App\Link;
use Illuminate\Http\Request;

class LinkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $links = Link::orderBy('id', 'desc')->paginate(10);
        return view('manage.links.index')->withlinks($links);    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('manage.links.create');    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
        'id' => 'unique:links,id',
        'name' => 'required|max:255',
        'description' => 'required|max:255',
        'text' => 'max:191',
        'url' => 'max:191',
        'target' => 'max:191',
      ]);

      $link = new Link();
      if(!empty($request->id))
      {
        $link->id = $request->id;
      }
      else
      {
         $link->id = NULL;
      } 
      $link->name = $request->name;
      $link->description = $request->description;
      $link->text = $request->text;
      $link->url = $request->url;
      $link->target = $request->target;
      if ($link->save()) 
      {
        return redirect()->route('links.show', $link->id);
      } 
      else 
      {
        Session::flash('danger', 'Sorry a problem occurred while creating this link.');
        return redirect()->route('links.create');
      }    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Link  $link
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $link = Link::where('id', $id)->first();
        return view("manage.links.show")->withlink($link);      
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Link  $link
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      //$roles = Role::all();
      $link = Link::where('id', $id)->first();
      return view("manage.links.edit")->withlink($link);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Link  $link
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $this->validate($request, [
        'id' => 'unique:links,id',
        'name' => 'required|max:255',
        'description' => 'required|max:255',
        'text' => 'max:191',
        'url' => 'max:191',
        'target' => 'max:191',
      ]);
      $link = Link::findOrFail($id);
      $link->name = $request->name;
      $link->description = $request->description;
      $link->text = $request->text;
      $link->url = $request->url;
      $link->target = $request->target;
/*
      $link->syncRoles(explode(',', $request->roles));
      return redirect()->route('links.show', $id);
*/
      if ($link->save()) 
      {
        return redirect()->route('links.show', $id);
      } 
      else 
      {
        Session::flash('error', 'There was a problem saving the updated link info to the database. Try again later.');
        return redirect()->route('links.edit', $id);
      }    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Link  $link
     * @return \Illuminate\Http\Response
     */
    public function destroy(Link $link)
    {
        //
    }
}
