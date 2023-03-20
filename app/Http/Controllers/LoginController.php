<?php

namespace App\Http\Controllers;

use App\Http\Controllers\MyController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LoginController extends MyController
{
    //
    function test(){
        $data['name'] = "this is my controller :";

        $users = DB::select('select * from users;');
        $data['users'] = $users;

        return parent::output('form/login', $data);

    }
    function log(Request $request){

        $validate = $request->validate([
            'email' => 'required'
        ]);

        $data['firstname'] = $request->input('firstname', '');
        $data['lastname'] = $request->input('lastname', '');
        $data['email'] = $request->input('email', ' ');
        $data['password'] = $request->input('password', 'ss');

        DB::insert(
            'INSERT INTO users (name,email,password) values(?,?,?)',
            [$data['firstname']." ".$data['lastname'], $data['email'], $data['password']]
        );

        return redirect('/register');
    }

    public function delete_user($id){
        DB::delete('DELETE FROM users WHERE id = ?', [$id]);
        return redirect('/register');
    }

    function edit($id){
        $data['name'] = "this is my controller :";

        $users = DB::select('select * from users where id = ?', [$id]);
        $data['user'] = $user[0];

        return parent::output('form/register_edit', $data);
    }

    function save_edit(Request $request){
        $data['firstname'] = $request->input('firstname', '');
        $data['lastname'] = $request->input('lastname', '');
        $data['email'] = $request->input('email', ' ');
        $data['password'] = $request->input('password', '');

        DB::update(
            'UPDATE users SET name=?, email=?, password=? where id = ?',
            [$data['firstname']." ".$data['lastname'], $data['email'], $data['password'],
            $data['id']]
        );
       return redirect('/register');

    }
}
