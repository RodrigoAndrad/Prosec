<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Page;
use App\User;
use Input;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pages = Page::orderBy('id', 'desc')->paginate(10);
        return view('manage.pages.index')->withPages($pages);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('manage.pages.create');
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
        'slug' => 'required|max:255|unique:pages,slug',
        'title' => 'required|max:255',
        'description' => 'required|max:255',
      ]);

      $page = new Page();
      if(!empty($request->id))
      {
        $page->id = $request->id;
      }
      else
      {
         $page->id = NULL;
      } 
      $page->slug = $request->slug;
      $page->title = $request->title;
      $page->author = $user = Auth::user()->name;
      $page->description = $request->description;
      if ($page->save()) 
      {
        return redirect()->route('pages.show', $page->id);
      } 
      else 
      {
        Session::flash('danger', 'Sorry a problem occurred while creating this page.');
        return redirect()->route('pages.create');
      }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $page = Page::where('id', $id)->first();
        return view("manage.pages.show")->withpage($page);    
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      //$roles = Role::all();
      $page = Page::where('id', $id)->first();
      return view("manage.pages.edit")->withPage($page);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $this->validate($request, [
        'slug' => 'required|unique:pages,slug,'.$id,
        'title' => 'required|max:255',
        'description' => 'required|max:255',
      ]);

      $page = Page::findOrFail($id);
      $page->slug = $request->slug;
      $page->title = $request->title;
      $page->description = $request->description;
/*
      $page->syncRoles(explode(',', $request->roles));
      return redirect()->route('pages.show', $id);
*/
      if ($page->save()) 
      {
        return redirect()->route('pages.show', $id);
      } 
      else 
      {
        Session::flash('error', 'There was a problem saving the updated page info to the database. Try again later.');
        return redirect()->route('pages.edit', $id);
      }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function destroy(Page $page)
    {
        //
    }
}
