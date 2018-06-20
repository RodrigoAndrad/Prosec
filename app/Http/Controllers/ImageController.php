<?php

namespace App\Http\Controllers;

use App\Image;
use Illuminate\Http\Request;

class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $images = Image::orderBy('id', 'desc')->paginate(10);
        return view('manage.images.index')->withimages($images);    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('manage.images.create');    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
        'id' => 'unique:images,id',
        'name' => 'required|max:255',
        'description' => 'required|max:255',
        'subtitle' => 'max:65535',
        'alt' => 'max:191',
        'src' => 'max:191',
        'srcset' => 'max:191',
      ]);

      $image = new Image();
      if(!empty($request->id))
      {
        $image->id = $request->id;
      }
      else
      {
         $image->id = NULL;
      } 
      $image->name = $request->name;
      $image->description = $request->description;
      $image->subtitle = $request->subtitle;
      $image->alt = $request->alt;
      $image->src = $request->src;
      $image->srcset = $request->srcset;
      if ($image->save()) 
      {
        return redirect()->route('images.show', $image->id);
      } 
      else 
      {
        Session::flash('danger', 'Sorry a problem occurred while creating this image.');
        return redirect()->route('images.create');
      }    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $image = Image::where('id', $id)->first();
        return view("manage.images.show")->withimage($image);      
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      //$roles = Role::all();
      $image = Image::where('id', $id)->first();
      return view("manage.images.edit")->withimage($image);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $this->validate($request, [
        'id' => 'unique:images,id',
        'name' => 'required|max:255',
        'description' => 'required|max:255',
        'subtitle' => 'max:65535',
        'alt' => 'max:191',
        'src' => 'max:191',
        'srcset' => 'max:191',
      ]);
      $image = Image::findOrFail($id);
      $image->name = $request->name;
      $image->description = $request->description;
      $image->subtitle = $request->subtitle;
      $image->alt = $request->alt;
      $image->src = $request->src;
      $image->srcset = $request->srcset;
/*
      $image->syncRoles(explode(',', $request->roles));
      return redirect()->route('images.show', $id);
*/
      if ($image->save()) 
      {
        return redirect()->route('images.show', $id);
      } 
      else 
      {
        Session::flash('error', 'There was a problem saving the updated image info to the database. Try again later.');
        return redirect()->route('images.edit', $id);
      }    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function destroy(Image $image)
    {
        //
    }
}
