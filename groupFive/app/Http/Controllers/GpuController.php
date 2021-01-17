<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gpu;

class GpuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gpu = Gpu::all()->toArray();
        return view('gpu.index', compact('gpu'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('gpu.create');
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
            'gpu_name' => 'required',
            'gpu_brand' => 'required',
            'gpu_inv_level' => 'required',
            'gpu_remarks' => 'required',
            'gpu_price' => 'required',
            'staff_id' => 'required'
        ]);

        $gpu = new Gpu([
            'gpu_name' => $request->get('gpu_name'),
            'gpu_brand' => $request->get('gpu_brand'),
            'gpu_inv_level' => $request->get('gpu_inv_level'),
            'gpu_remarks' => $request->get('gpu_remarks'),
            'gpu_price' => $request->get('gpu_price'),
            'staff_id' => $request->get('staff_id')
        ]);

        $gpu->save();

        return redirect()->route('gpu.index')->with('success', 'Data Added');
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
        $gpu = Gpu::find($id);
        return view('gpu.edit', compact('gpu', 'id'));
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
            'gpu_name' => 'required',
            'gpu_brand' => 'required',
            'gpu_inv_level' => 'required',
            'gpu_remarks' => 'required',
            'gpu_price' => 'required',
            'staff_id' => 'required'
        ]);

        $gpu = Gpu::find($id);
        $gpu->gpu_name = $request->get('gpu_name');
        $gpu->gpu_brand = $request->get('gpu_brand');
        $gpu->gpu_inv_level = $request->get('gpu_inv_level');
        $gpu->gpu_remarks = $request->get('gpu_remarks');
        $gpu->gpu_price = $request->get('gpu_price');
        $gpu->staff_id = $request->get('staff_id');
        $gpu->save();
        return redirect()->route('gpu.index')->with('success', 'Data Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $gpu = Gpu::find($id);
        $gpu->delete();
        return redirect()->route('gpu.index')->with('success', 'Data Deleted');
    }
}
