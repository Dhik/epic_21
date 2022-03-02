<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Competition;
use App\Models\Talkshow;

class AdminTalkshowController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $talkshows = Talkshow::select('talkshows.*', 'competitions.title AS competition_name')
        ->join('competitions', 'competitions.id', '=', 'talkshows.competition_id')
        ->get();
        foreach ($talkshows as $item) {
            $item->picture = url('upload/talkshow')."/".$item->picture;
        }

        return view('admin/talkshow/index', ['talkshows' => $talkshows]);   
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $competitions = Competition::all();

        return view('admin/talkshow/create', ['competitions' => $competitions]);
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
                'description' => 'required',
                'competitionId' => 'required'
                ]
            );
    
            if ($request->hasFile('picture')){
                $file = $request->file('picture'); 
                $photos_name = time().'.'.$file->getClientOriginalExtension();
                $destination = 'upload/talkshow';
                $file->move($destination, $photos_name);
                
                Talkshow::create([
                    'picture' => $photos_name,
                    'description' => $request->description,
                    'competition_id' => $request->competitionId
                ]);
            } else {
                Talkshow::create([
                    'description' => $request->description,
                    'competition_id' => $request->competitionId
                ]);            
            }
    
            return redirect('/admin/talkshow')->with(array(
                'message' => 'Create talkshow successfully!'
            ));

        } catch(\Exception $e) {
            
            return redirect('/admin/talkshow')->with(array(
                'error' => 'Create talkshow failed!'
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
        $talkshow = Talkshow::where('id', $id)->first();
        $talkshow->picture = url('upload/talkshow')."/".$talkshow->picture;
        $competitions = Competition::all();

        return view('admin/talkshow/edit', [
            'talkshow' => $talkshow,
            'competitions' => $competitions
        ]);
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
                'description' => 'required',
                'competitionId' => 'required'
                ]
            );
    
            if ($request->hasFile('picture')){
                $file = $request->file('picture'); 
                $photos_name = time().'.'.$file->getClientOriginalExtension();
                $destination = 'upload/talkshow';
                $file->move($destination, $photos_name);
                
                Talkshow::where('id',$id)->update([
                    'picture' => $photos_name,
                    'description' => $request->description,
                    'competition_id' => $request->competitionId
                ]);
            } else {
                Talkshow::where('id',$id)->update([
                    'description' => $request->description,
                    'competition_id' => $request->competitionId
                ]);
            }
    
            return redirect('/admin/talkshow')->with(array(
                'message' => 'Edit talkshow successfully!'
            ));

        } catch(\Exception $e) {

            return redirect('/admin/talkshow')->with(array(
                'error' => 'Edit talkshow failed!'
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
        $delete = Talkshow::where('id',$request->talkshowId)->delete();
        if ($delete) {
            return redirect('/admin/talkshow')->with(array(
                'message' => 'Delete talkshow successfully!'
            ));
        }
    	return redirect('/admin/talkshow')->with(array(
            'error' => 'Delete talkshow failed!'
        ));
    }
}
