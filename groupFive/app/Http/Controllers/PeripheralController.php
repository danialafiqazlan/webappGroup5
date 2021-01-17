<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Peripheral;

class PeripheralController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $peripheral = Peripheral::all()->toArray();
        return view('peripheral.index', compact('peripheral'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('peripheral.create');
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
            'peripheral_name' => 'required',
            'peripheral_brand' => 'required',
            'peripheral_inv_level' => 'required',
            'peripheral_remarks' => 'required',
            'peripheral_price' => 'required',
            'staff_id' => 'required'
        ]);

        $peripheral = new Peripheral([
            'peripheral_name' => $request->get('peripheral_name'),
            'peripheral_brand' => $request->get('peripheral_brand'),
            'peripheral_inv_level' => $request->get('peripheral_inv_level'),
            'peripheral_remarks' => $request->get('peripheral_remarks'),
            'peripheral_price' => $request->get('peripheral_price'),
            'staff_id' => $request->get('staff_id')
        ]);

        $peripheral->save();

        return redirect()->route('peripheral.index')->with('success', 'Data Added');
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
        $peripheral = Peripheral::find($id);
        return view('peripheral.edit', compact('peripheral', 'id'));
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
            'peripheral_name' => 'required',
            'peripheral_brand' => 'required',
            'peripheral_inv_level' => 'required',
            'peripheral_remarks' => 'required',
            'peripheral_price' => 'required',
            'staff_id' => 'required'
        ]);

        $peripheral = Peripheral::find($id);
        $peripheral->peripheral_name = $request->get('peripheral_name');
        $peripheral->peripheral_brand = $request->get('peripheral_brand');
        $peripheral->peripheral_inv_level = $request->get('peripheral_inv_level');
        $peripheral->peripheral_remarks = $request->get('peripheral_remarks');
        $peripheral->peripheral_price = $request->get('peripheral_price');
        $peripheral->staff_id = $request->get('staff_id');
        $peripheral->save();
        return redirect()->route('peripheral.index')->with('success', 'Data Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $peripheral = Peripheral::find($id);
        $peripheral->delete();
        return redirect()->route('peripheral.index')->with('success', 'Data Deleted');
    }
}
