<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ram;

class RamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ram = Ram::all()->toArray();
        return view('ram.index', compact('ram'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ram.create');
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
            'ram_name' => 'required',
            'ram_brand' => 'required',
            'ram_inv_level' => 'required',
            'ram_remarks' => 'required',
            'ram_price' => 'required',
            'staff_id' => 'required'
        ]);

        $ram = new Ram([
            'ram_name' => $request->get('ram_name'),
            'ram_brand' => $request->get('ram_brand'),
            'ram_inv_level' => $request->get('ram_inv_level'),
            'ram_remarks' => $request->get('ram_remarks'),
            'ram_price' => $request->get('ram_price'),
            'staff_id' => $request->get('staff_id')
        ]);

        $ram->save();

        return redirect()->route('ram.index')->with('success', 'Data Added');
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
        $ram = Ram::find($id);
        return view('ram.edit', compact('ram', 'id'));
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
            'ram_name' => 'required',
            'ram_brand' => 'required',
            'ram_inv_level' => 'required',
            'ram_remarks' => 'required',
            'ram_price' => 'required',
            'staff_id' => 'required'
        ]);

        $ram = Ram::find($id);
        $ram->ram_name = $request->get('ram_name');
        $ram->ram_brand = $request->get('ram_brand');
        $ram->ram_inv_level = $request->get('ram_inv_level');
        $ram->ram_remarks = $request->get('ram_remarks');
        $ram->ram_price = $request->get('ram_price');
        $ram->staff_id = $request->get('staff_id');
        $ram->save();
        return redirect()->route('ram.index')->with('success', 'Data Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ram = Ram::find($id);
        $ram->delete();
        return redirect()->route('ram.index')->with('success', 'Data Deleted');
    }
}
