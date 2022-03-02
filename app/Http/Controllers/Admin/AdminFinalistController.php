<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Competition;
use App\Models\Finalist;

class AdminFinalistController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $finalists = Finalist::select('finalists.*', 'competitions.title AS competition_name')
        ->join('competitions', 'competitions.id', '=', 'finalists.competition_id')
        ->get();

        return view('admin/finalist/index', ['finalists' => $finalists]);   
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $competitions = Competition::all();

        return view('admin/finalist/create', ['competitions' => $competitions]);
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
                'subtitle' => 'required',
                'email' => 'required',
                'competitionId' => 'required'
                ]
            );
    
            Finalist::create([
                'title' => $request->title,
                'subtitle' => $request->subtitle,
                'line_id' => $request->line_id,
                'email' => $request->email,
                'competition_id' => $request->competitionId
            ]);            
    
            return redirect('/admin/finalist')->with(array(
                'message' => 'Create finalist successfully!'
            ));

        } catch(\Exception $e) {
            
            return redirect('/admin/finalist')->with(array(
                'error' => 'Create finalist failed!'
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
        $finalist = Finalist::where('id', $id)->first();
        $competitions = Competition::all();

        return view('admin/finalist/edit', [
            'finalist' => $finalist,
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
                'title' => 'required',
                'subtitle' => 'required',
                'email' => 'required',
                'competitionId' => 'required'
                ]
            );
    
            Finalist::where('id',$id)->update([
                'title' => $request->title,
                'subtitle' => $request->subtitle,
                'line_id' => $request->line_id,
                'email' => $request->email,
                'competition_id' => $request->competitionId
            ]);
    
            return redirect('/admin/finalist')->with(array(
                'message' => 'Edit finalist successfully!'
            ));

        } catch(\Exception $e) {

            return redirect('/admin/finalist')->with(array(
                'error' => 'Edit finalist failed!'
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
        $delete = Finalist::where('id',$request->finalistId)->delete();
        if ($delete) {
            return redirect('/admin/finalist')->with(array(
                'message' => 'Delete finalist successfully!'
            ));
        }
    	return redirect('/admin/finalist')->with(array(
            'error' => 'Delete finalist failed!'
        ));
    }
}
