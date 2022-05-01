<?php

namespace App\Http\Controllers\Backend;

use App\Employee;
use App\Http\Controllers\Controller;
use App\Models\Area;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use NabilAnam\SimpleUpload\SimpleUpload;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->ajax()){
            $users = Employee::select(['id','name', 'image',  'present_address','email','mobile', 'status'])->with('areas.areaName')->get();
           return  response()->json( ['data' => $users]);
        }
        return view('backend.employee.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $areas =  Area::get();
        return view('backend.employee.create', compact('areas'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all(), date('d F, Y'));
        try {
            DB::beginTransaction();
            $all = $request->except('area_id', 'method', 'uri', 'id');
            $all['image'] = (new SimpleUpload)
            ->file($request->image)
            ->dirName('employee')
            ->save();
            $employee= Employee::create( $all );


            foreach ($request->area_id as $key => $area) {
                $employee->areas()->create(['area_id' => $area]);
            }
            DB::commit();
        }catch (\Exception $e) {
             DB::rollBack();

            return back()->with(['msg' => $e->getMessage()]);
        }
        return redirect()->to('sadmin/employee')->with(['msg' => 'Data Updated Successfully!']);


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        return view('backend.customer.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
