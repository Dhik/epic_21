<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Exhibition;

class AdminExhibitionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $exhibitions = Exhibition::all();
        foreach ($exhibitions as $item) {
            $item->picture = url('upload/exhibition')."/".$item->picture;
        }

        return view('admin/exhibition/index', ['exhibitions' => $exhibitions]);   
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/exhibition/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            $this->validate($request, [
                'title' => 'required',
                'description' => 'required',
                'author' => 'required'
                ]
            );
    
            if ($request->hasFile('picture')){
                $file = $request->file('picture'); 
                $photos_name = time().'.'.$file->getClientOriginalExtension();
                $destination = 'upload/exhibition';
                $file->move($destination, $photos_name);
                
                Exhibition::create([
                    'picture' => $photos_name,
                    'title' => $request->title,
                    'description' => $request->description,
                    'author' => $request->author
                ]);
            } else {
                Exhibition::create([
                    'title' => $request->title,
                    'description' => $request->description,
                    'author' => $request->author
                ]);
            }
    
            return redirect('/admin/exhibition')->with(array(
                'message' => 'Create exhibition successfully!'
            ));

        } catch(\Exception $e) {
            
            return redirect('/admin/exhibition')->with(array(
                'error' => 'Create exhibition failed!'
            ));
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $exhibition = Exhibition::where('id', $id)->first();
        $exhibition->picture = url('upload/exhibition')."/".$exhibition->picture;

        return view('admin/exhibition/edit', ['exhibition' => $exhibition]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        try {
            $this->validate($request, [
                'title' => 'required',
                'description' => 'required',
                'author' => 'required'
                ]
            );
    
            if ($request->hasFile('picture')){
                $file = $request->file('picture'); 
                $photos_name = time().'.'.$file->getClientOriginalExtension();
                $destination = 'upload/exhibition';
                $file->move($destination, $photos_name);
                
                Exhibition::where('id',$id)->update([
                    'picture' => $photos_name,
                    'title' => $request->title,
                    'description' => $request->description,
                    'author' => $request->author
                ]);
            } else {
                Exhibition::where('id',$id)->update([
                    'title' => $request->title,
                    'description' => $request->description,
                    'author' => $request->author
                ]);
            }
    
            return redirect('/admin/exhibition')->with(array(
                'message' => 'Edit exhibition successfully!'
            ));

        } catch(\Exception $e) {

            return redirect('/admin/exhibition')->with(array(
                'error' => 'Edit exhibition failed!'
            ));
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $delete = Exhibition::where('id',$request->exhibitionId)->delete();
        if ($delete) {
            return redirect('/admin/exhibition')->with(array(
                'message' => 'Delete exhibition successfully!'
            ));
        }
    	return redirect('/admin/exhibition')->with(array(
            'error' => 'Delete exhibition failed!'
        ));
    }
}
