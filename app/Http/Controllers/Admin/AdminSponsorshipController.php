<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Sponsorship;

class AdminSponsorshipController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sponsorships = Sponsorship::all();
        foreach ($sponsorships as $item) {
            $item->picture = url('upload/sponsorship')."/".$item->picture;
        }

        return view('admin/sponsorship/index', ['sponsorships' => $sponsorships]);   
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/sponsorship/create');
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
                'link' => 'required',
                'type' => 'required'
                ]
            );
    
            if ($request->hasFile('picture')){
                $file = $request->file('picture'); 
                $photos_name = time().'.'.$file->getClientOriginalExtension();
                $destination = 'upload/sponsorship';
                $file->move($destination, $photos_name);
                
                Sponsorship::create([
                    'picture' => $photos_name,
                    'name' => $request->name,
                    'link' => $request->link,
                    'type' => $request->type
                ]);
            } else {
                Sponsorship::create([
                    'name' => $request->name,
                    'link' => $request->link,
                    'type' => $request->type
                ]);
            }
    
            return redirect('/admin/sponsorship')->with(array(
                'message' => 'Create sponsorship successfully!'
            ));

        } catch(\Exception $e) {
            
            return redirect('/admin/sponsorship')->with(array(
                'error' => 'Create sponsorship failed!'
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
        $sponsorship = Sponsorship::where('id', $id)->first();
        $sponsorship->picture = url('upload/sponsorship')."/".$sponsorship->picture;

        return view('admin/sponsorship/edit', ['sponsorship' => $sponsorship]);
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
                'link' => 'required',
                'type' => 'required'
                ]
            );
    
            if ($request->hasFile('picture')){
                $file = $request->file('picture'); 
                $photos_name = time().'.'.$file->getClientOriginalExtension();
                $destination = 'upload/sponsorship';
                $file->move($destination, $photos_name);
                
                Sponsorship::where('id',$id)->update([
                    'picture' => $photos_name,
                    'name' => $request->name,
                    'link' => $request->link,
                    'type' => $request->type
                ]);
            } else {
                Sponsorship::where('id',$id)->update([
                    'name' => $request->name,
                    'link' => $request->link,
                    'type' => $request->type
                ]);
            }
    
            return redirect('/admin/sponsorship')->with(array(
                'message' => 'Edit sponsorship successfully!'
            ));

        } catch(\Exception $e) {

            return redirect('/admin/sponsorship')->with(array(
                'error' => 'Edit sponsorship failed!'
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
        $delete = Sponsorship::where('id',$request->sponsorshipId)->delete();
        if ($delete) {
            return redirect('/admin/sponsorship')->with(array(
                'message' => 'Delete sponsorship successfully!'
            ));
        }
    	return redirect('/admin/sponsorship')->with(array(
            'error' => 'Delete sponsorship failed!'
        ));
    }
}
