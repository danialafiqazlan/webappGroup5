<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Storage;

class StorageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $storage = Storage::all()->toArray();
        return view('storage.index', compact('storage'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('storage.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'storage_name' => 'required',
            'storage_brand' => 'required',
            'storage_inv_level' => 'required',
            'storage_remarks' => 'required',
            'storage_price' => 'required',
            'staff_id' => 'required'
        ]);

        $storage = new Storage([
            'storage_name' => $request->get('storage_name'),
            'storage_brand' => $request->get('storage_brand'),
            'storage_inv_level' => $request->get('storage_inv_level'),
            'storage_remarks' => $request->get('storage_remarks'),
            'storage_price' => $request->get('storage_price'),
            'staff_id' => $request->get('staff_id')
        ]);

        $storage->save();

        return redirect()->route('storage.index')->with('success', 'Data Added');
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
        $storage = Storage::find($id);
        return view('storage.edit', compact('storage', 'id'));
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
            'storage_name' => 'required',
            'storage_brand' => 'required',
            'storage_inv_level' => 'required',
            'storage_remarks' => 'required',
            'storage_price' => 'required',
            'staff_id' => 'required'
        ]);

        $storage = Storage::find($id);
        $storage->storage_name = $request->get('storage_name');
        $storage->storage_brand = $request->get('storage_brand');
        $storage->storage_inv_level = $request->get('storage_inv_level');
        $storage->storage_remarks = $request->get('storage_remarks');
        $storage->storage_price = $request->get('storage_price');
        $storage->staff_id = $request->get('staff_id');
        $storage->save();
        return redirect()->route('storage.index')->with('success', 'Data Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $storage = Storage::find($id);
        $storage->delete();
        return redirect()->route('storage.index')->with('success', 'Data Deleted');
    }
}
