<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Message;
use App\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->validate($request, [
            'email' => 'required|max:255|email',
            'password' => 'required',
            'TelNum' =>
                array(
                    'regex:/^[0-9]{3}-[0-9]{3}-[0-9]{4}$/'
                ),
        ]);

        $users = DB::select('select * from users where email = ?', [$request->input('email')]);
        if (!empty($users)) {
            foreach($users as $user) {
                if ($user->role == "vst"){
                    DB::table('users')->where('id', $user->id)->update(['role' => 'mbr']);
                    DB::table('users')->where('id', $user->id)->update(['password' => $request->input('password')]);
                }
                else {
                    return view('Home');
                }
            }
            return redirect('/');
        }
        else {
            $user = new User;
            $user->first_name = $request->input('fname');
            $user->last_name = $request->input('lname');
            $user->email = $request->input('email');
            $user->password = bcrypt($request->input('password'));
            $user->phone = $request->input('TelNum');
            $user->role = 'mbr';
            $user->effective_dt = date('Y-m-d');
            $user->termination_dt = date('Y-m-d', strtotime('+2 years'));;
            $user->updated_by_user_id = 1;

            $user->save();
        }

        return redirect('/Registration');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

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
        $this->validate($request, [
            'email' => 'required|max:255|email',
            'password' => 'required',
            'TelNum' =>
                array(
                    'regex:/^[0-9]{3}-[0-9]{3}-[0-9]{4}$/'
                ),
        ]);

        $user = User::findOrFail($id);
        $user->first_name = $request->input('fname');
        $user->last_name = $request->input('lname');
        $user->email = $request->input('email');
        $user->password = bcrypt($request->input('password'));
        $user->phone = $request->input('TelNum');
        $user->role = 'mbr';
        $user->updated_by_user_id = $id;

        $user->save();

        return redirect('/Registration');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function insertMessage(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|max:255|email',
            'TelNum' =>
                array(
                    'regex:/^[0-9]{3}-[0-9]{3}-[0-9]{4}$/'
                ),
        ]);

        $users = DB::select('select * from users where email = ?', [$request->input('email')]);

        if (!empty($users)) {
            foreach ($users as $user) {
                $message = new Message;
                $message->message = $request->input('comments');
                $message->updated_by_user_id = $user->id;
                $message->save();
            }
        }
        else {
            $user = new User;
            $user->first_name = $request->input('fname');
            $user->last_name = $request->input('lname');
            $user->email = $request->input('email');
            $user->password = 'password';
            $user->phone = $request->input('TelNum');
            $user->role = 'vst';
            $user->effective_dt = date('Y-m-d');
            $user->termination_dt = date('Y-m-d', strtotime('+2 years'));;
            $user->updated_by_user_id = 1;

            $user->save();

            $message = new Message;
            $message->message = $request->input('comments');
            $message->updated_by_user_id = $user->id;
            $message->save();
        }

        return redirect('/ContactUs');
    }
}
