<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\PackageCreateRequest;
use App\Http\Requests\PackageEditRequest;
use Illuminate\Support\Facades\Session;
use App\Package;
use App\PackageCategory;
use Illuminate\Support\Facades\Storage;

class AdminPackageContoller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $packages =  Package::orderBy('id', 'desc')->get();
       return view('admin.packages.index', compact('packages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $packageCat =  PackageCategory::pluck('name', 'id')->all();
        return view('admin.packages.create', compact('packageCat'));
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PackageCreateRequest $request)
    {
        $input = $request->all();

        if ($request->hasFile('photo')) {

          $filename = time(). $request->photo->getClientOriginalName();
          $filesize = $request->photo->getClientSize();
          $path = $request->photo->storeAs('public/packages', $filename);

          $input['photo'] = $filename;
          //return $filename;
        }
        //PackageCreateRequest

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
        Session::flash('adminPackage_created', 'Package Succesfully Created');
        //
        //     $input['photo'] = $photo;
        //
        //
        // }
        Package::create($input);

        return redirect('admin/package');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $package = Package::findOrFail($id);
        return view('admin.packages.show', compact('package'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $package = Package::findOrFail($id);
        $packageCat =  PackageCategory::pluck('name', 'id')->all();
        return view('admin.packages.edit', compact('package', 'packageCat'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PackageEditRequest $request, $id)
    {
        $package = Package::findOrFail($id);

        $input = $request->all();

        if ($photoFile= $request->file('photo')) {

            \Cloudder::upload($request->file('photo'));

            $upload = \Cloudder::getResult();

            $photo = $upload['secure_url'];

            $input['photo'] = $photo;

        }

        $package->update($input);

        Session::flash('adminPackage_updated', 'Package Succesfully Updated');

        return redirect('admin/package');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $package = Package::findOrFail($id);

      $package->delete();

      Session::flash('adminPackage_deleted', 'Package Succesfully Deleted');


      return redirect('admin/package');
    }
}
