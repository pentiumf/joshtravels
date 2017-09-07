<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CreateStaffRequest;
use App\Http\Requests\EditStaffRequest;
use Illuminate\Support\Facades\Session;
use App\Staff;


class StaffController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $staffs = Staff::all();
      return view('admin.staff.index', compact('staffs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.staff.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateStaffRequest $request)
    {

      $input = $request->all();

      if ($request->hasFile('photo')) {

        $filename = time(). $request->photo->getClientOriginalName();
        $filesize = $request->photo->getClientSize();
        $path = $request->photo->storeAs('public/staff', $filename);

        $input['photo'] = $filename;
        //return $filename;
      }

      // if ($photoFile= $request->file('photo')) {
      //
      //     \Cloudder::upload($request->file('photo'));
      //
      //     $upload = \Cloudder::getResult();
      //
      //     $photo = $upload['secure_url'];
      //
      //     // $photo = time() . $photoFile->getClientOriginalName();
      //     //
      //     // $photoFile->move('images', $photo);
      //     //
      //
      //     $input['photo'] = $photo;
      //
      // }

      $staff = Staff::create($input);

      $id = $staff->id;

      Session::flash('adminStaff_created', 'Staff Succesfully Created');

      return redirect(route('staff.show', ['id' => $id]));

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $staff = Staff::findOrFail($id);
      return view('admin.staff.show', compact('staff'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $staff = Staff::findOrFail($id);
      return view('admin.staff.edit', compact('staff'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(EditStaffRequest $request, $id)
    {
      $staff = Staff::findOrFail($id);

      $input = $request->all();

      if ($request->hasFile('photo')) {

        $filename = time(). $request->photo->getClientOriginalName();
        $filesize = $request->photo->getClientSize();
        $path = $request->photo->storeAs('public/staff', $filename);

        $input['photo'] = $filename;
        //return $filename;
      }

      // if ($photoFile= $request->file('photo')) {
      //
      //     \Cloudder::upload($request->file('photo'));
      //
      //     $upload = \Cloudder::getResult();
      //
      //     $photo = $upload['secure_url'];
      //
      //     $input['photo'] = $photo;
      //
      // }

      $staff->update($input);

      Session::flash('adminStaff_update', 'Staff Succesfully Updated');

      return redirect(route('staff.show', ['id' => $id]));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $staff = Staff::findOrFail($id);

      $staff->delete();

      Session::flash('adminStaff_delete', 'Staff Succesfully Deleted');

      return redirect(route('staff.index'));
    }
}
