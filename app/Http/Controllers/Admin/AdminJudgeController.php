<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Competition;
use App\Models\Judge;

class AdminJudgeController extends Controller
{
        /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $judges = Judge::select('judges.*', 'competitions.title AS competition_name')
        ->join('competitions', 'competitions.id', '=', 'judges.competition_id')
        ->get();
        foreach ($judges as $item) {
            $item->picture = url('upload/judge')."/".$item->picture;
        }

        return view('admin/judge/index', ['judges' => $judges]);   
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $competitions = Competition::all();

        return view('admin/judge/create', ['competitions' => $competitions]);
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
                'name' => 'required',
                'occupation' => 'required',
                'competitionId' => 'required'
                ]
            );
    
            if ($request->hasFile('picture')){
                $file = $request->file('picture'); 
                $photos_name = time().'.'.$file->getClientOriginalExtension();
                $destination = 'upload/judge';
                $file->move($destination, $photos_name);
                
                Judge::create([
                    'picture' => $photos_name,
                    'name' => $request->name,
                    'occupation' => $request->occupation,
                    'competition_id' => $request->competitionId
                ]);
            } else {
                Judge::create([
                    'name' => $request->name,
                    'occupation' => $request->occupation,
                    'competition_id' => $request->competitionId
                ]);            
            }
    
            return redirect('/admin/judge')->with(array(
                'message' => 'Create judge successfully!'
            ));

        } catch(\Exception $e) {
            
            return redirect('/admin/judge')->with(array(
                'error' => 'Create judge failed!'
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
        $judge = Judge::where('id', $id)->first();
        $judge->picture = url('upload/judge')."/".$judge->picture;
        $competitions = Competition::all();

        return view('admin/judge/edit', [
            'judge' => $judge,
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
                'name' => 'required',
                'occupation' => 'required',
                'competitionId' => 'required'
                ]
            );
    
            if ($request->hasFile('picture')){
                $file = $request->file('picture'); 
                $photos_name = time().'.'.$file->getClientOriginalExtension();
                $destination = 'upload/judge';
                $file->move($destination, $photos_name);
                
                Judge::where('id',$id)->update([
                    'picture' => $photos_name,
                    'name' => $request->name,
                    'occupation' => $request->occupation,
                    'competition_id' => $request->competitionId
                ]);
            } else {
                Judge::where('id',$id)->update([
                    'name' => $request->name,
                    'occupation' => $request->occupation,
                    'competition_id' => $request->competitionId
                ]);
            }
    
            return redirect('/admin/judge')->with(array(
                'message' => 'Edit judge successfully!'
            ));

        } catch(\Exception $e) {

            return redirect('/admin/judge')->with(array(
                'error' => 'Edit judge failed!'
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
        $delete = Judge::where('id',$request->judgeId)->delete();
        if ($delete) {
            return redirect('/admin/judge')->with(array(
                'message' => 'Delete judge successfully!'
            ));
        }
    	return redirect('/admin/judge')->with(array(
            'error' => 'Delete judge failed!'
        ));
    }
}
