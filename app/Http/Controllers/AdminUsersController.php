<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UsersRequest;
use App\Http\Requests\AdminUserEditRequest;
use Illuminate\Support\Facades\Session;
use App\User;
use App\Role;


class AdminUsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $users = User::orderBy('id', 'desc')->get();
      return view('admin.users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      //Package::limit(3)->get();
      $roles = Role::limit(2)->pluck('name', 'id')->all();
      return view('admin.users.create', compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UsersRequest $request)
    {
      $input = $request->all();
      if ($request->password == '') {
          $input = $request->except('password');
      } else {
          $input = $request->all();
      }

      $input['password'] = bcrypt($request->password);

      User::create($input);

      Session::flash('adminUser_created', 'User Succesfully Created');

      return redirect('admin/user');
      // return $request->all();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::findOrFail($id);
        return view('admin.users.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::findOrFail($id);

        $roles = Role::limit(2)->pluck('name', 'id')->all();

        return view('admin.users.edit', compact('user', 'roles'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(AdminUserEditRequest $request, $id)
    {
      $user = User::findOrFail($id);

      if ($request->password == '') {
        $input = $request->except('password');
        $user->update($input);
        //echo "Its empty";
      } else {
        $input = $request->all();
        $input['password'] = bcrypt($request->password);
        $user->update($input);
      }

      Session::flash('adminUser_edited', 'User Succesfully Edited');

      return redirect('admin/user/');

      // if ($request->password == '') {
      //     $input = $request->except('password');
      // } else {
      //     $input = $request->all();
      // }
      //$input['password'] = bcrypt($request->password);
      //
      // $user->update($input);

      //return $request->all();

      //return redirect('admin/user/');

      //return redirect('admin/user/'.$id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $user = User::findOrFail($id);

      $user->delete();

      Session::flash('adminUser_deleted', 'User Succesfully Deleted');


      return redirect('admin/user');
    }




}
