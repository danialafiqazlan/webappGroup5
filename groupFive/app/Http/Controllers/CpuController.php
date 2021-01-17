<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cpu;

class CpuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cpu = CPU::all()->toArray();
        return view('cpu.index', compact('cpu'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cpu.create');
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
            'cpu_name' => 'required',
            'cpu_brand' => 'required',
            'cpu_inv_level' => 'required',
            'cpu_remarks' => 'required',
            'cpu_price' => 'required',
            'staff_id' => 'required'
        ]);

        $cpu = new Cpu([
            'cpu_name' => $request->get('cpu_name'),
            'cpu_brand' => $request->get('cpu_brand'),
            'cpu_inv_level' => $request->get('cpu_inv_level'),
            'cpu_remarks' => $request->get('cpu_remarks'),
            'cpu_price' => $request->get('cpu_price'),
            'staff_id' => $request->get('staff_id')
        ]);

        $cpu->save();

        return redirect()->route('cpu.index')->with('success', 'Data Added');
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
        $cpu = Cpu::find($id);
        return view('cpu.edit', compact('cpu', 'id'));
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
            'cpu_name' => 'required',
            'cpu_brand' => 'required',
            'cpu_inv_level' => 'required',
            'cpu_remarks' => 'required',
            'cpu_price' => 'required',
            'staff_id' => 'required'
        ]);

        $cpu = Cpu::find($id);
        $cpu->cpu_name = $request->get('cpu_name');
        $cpu->cpu_brand = $request->get('cpu_brand');
        $cpu->cpu_inv_level = $request->get('cpu_inv_level');
        $cpu->cpu_remarks = $request->get('cpu_remarks');
        $cpu->cpu_price = $request->get('cpu_price');
        $cpu->staff_id = $request->get('staff_id');
        $cpu->save();
        return redirect()->route('cpu.index')->with('success', 'Data Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cpu = Cpu::find($id);
        $cpu->delete();
        return redirect()->route('cpu.index')->with('success', 'Data Deleted');
    }
}
