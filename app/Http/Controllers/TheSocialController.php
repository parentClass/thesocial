<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class TheSocialController extends Controller
{


    public function index()
    {
      $users = DB::select('select * from social_users');
      return view('pages.allusers', ['users' => $users]);
    }

    public function show($id)
    {
      $users = DB::select('select * from social_users where id = ?', [$id]);
      return view('pages.users', ['users' => $users]);
    }

    public function create()
    {
      return view('pages.form');
    }

    public function store(Request $request)
    {
      $user = $request->all();
      DB::insert('insert into social_users (first_name,last_name,email,password) VALUES (?,?,?,?)',
                [$user['first_name'],$user['last_name'],$user['email'],$user['password']]);
      return redirect()->action('TheSocialController@index');
    }

    public function edit($id)
    {
      $user = DB::select('select * from social_users where id = ?', [$id]);
      return view('pages.edit',['users'=>$user]);
    }

    public function update(Request $request, $id)
    {
      $user = $request->all();
      DB::update('update social_users set first_name=?, last_name=?, email=?, password=? where id=?',
                  [$user['first_name'],$user['last_name'],$user['email'],$user['password'],$id]);
      return redirect()->action('TheSocialController@index');
    }

    public function destroy($id)
    {
      DB::delete('delete from social_users where id=?',[$id]);
      return redirect()->action('TheSocialController@index');
    }

}
