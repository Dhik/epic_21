<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Message;

class AdminMessageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $messages = Message::orderBy('created_at', 'DESC')->get();

        return view('admin/message/index', ['messages' => $messages]);   
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $delete = Message::where('id',$request->messageId)->delete();
        if ($delete) {
            return redirect('/admin/message')->with(array(
                'message' => 'Delete message successfully!'
            ));
        }
    	return redirect('/admin/message')->with(array(
            'error' => 'Delete message failed!'
        ));
    }
}
