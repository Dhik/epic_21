<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Competition;

class AdminCompetitionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $competitions = Competition::all();
        foreach ($competitions as $item) {
            $item->picture = url('assets/img')."/".$item->picture;
        }

        return view('admin/competition/index', ['competitions' => $competitions]);   
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $competition = Competition::where('id', $id)->first();
        $competition->picture = url('assets/img')."/".$competition->picture;

        return view('admin/competition/edit', ['competition' => $competition]);
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
                'description' => 'required'
                ]
            );
    
            if ($request->hasFile('picture')){
                $file = $request->file('picture'); 
                $photos_name = time().'.'.$file->getClientOriginalExtension();
                $destination = 'assets/img';
                $file->move($destination, $photos_name);
                
                Competition::where('id',$id)->update([
                    'picture' => $photos_name,
                    'title' => $request->title,
                    'description' => $request->description,
                    'teaser_link' => $request->teaser_link,
                    'terms_and_conditions' => $request->terms_and_conditions,
                    'register_link' => $request->register_link,
                    'faq' => $request->faq,
                    'trivia' => $request->trivia,
                    'the_judges' => $request->the_judges,
                    'our_finalist' => $request->our_finalist,
                    'documentation' => $request->documentation,
                ]);
            } else {
                Competition::where('id',$id)->update([
                    'title' => $request->title,
                    'description' => $request->description,
                    'teaser_link' => $request->teaser_link,
                    'terms_and_conditions' => $request->terms_and_conditions,
                    'register_link' => $request->register_link,
                    'faq' => $request->faq,
                    'trivia' => $request->trivia,
                    'the_judges' => $request->the_judges,
                    'our_finalist' => $request->our_finalist,
                    'documentation' => $request->documentation,
                ]);
            }
    
            return redirect('/admin/competition')->with(array(
                'message' => 'Edit competition successfully!'
            ));

        } catch(\Exception $e) {

            return redirect('/admin/competition')->with(array(
                'error' => 'Edit competition failed!'
            ));
        }
    }
}
