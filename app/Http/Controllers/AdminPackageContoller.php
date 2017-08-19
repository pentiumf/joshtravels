<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Package;

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
        return view('admin.packages.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();

        if ($photoFile= $request->file('photo')) {
            $photo = time() . $photoFile->getClientOriginalName();

            $photoFile->move('images', $photo);

            $input['photo'] = $photo;


        }

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
        return view('admin.packages.edit', compact('package'));
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
        $package = Package::findOrFail($id);

        $input = $request->all();

        if ($photoFile= $request->file('photo')) {
            $photo = time() . $photoFile->getClientOriginalName();

            $photoFile->move('images', $photo);

            $input['photo'] = $photo;

        }

        $package->update($input);

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

      return redirect('admin/package');
    }
}
