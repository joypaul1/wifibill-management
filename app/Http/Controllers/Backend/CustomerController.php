<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Offer;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
            $packages = Offer::select('id', 'name')->get();
            if($request->ajax()){
             $users = User::with('offer')->select(['id','name', 'image', 'ip_id','offer_id',
             'mobile',   'status','email'])->get();
             return response()->json( ['data' => $users]);

        }
        return view('backend.customer.index', compact('packages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => ['required','string', 'max:25'],
            'mobile' => ['required', 'string', 'unique:users',],
            'offer_id' => ['required', 'exists:offers,id', 'integer',],
        ]);
        $validatedData['password'] = Hash::make('12345678');
        try {
            User::create($validatedData);
        } catch (\Exception $ex) {
            return response()->json(['status'=> false, 'message' => $ex->getMessage()]);
        }
        return response()->json(['status'=> true, 'message' => 'Data Stored Successfully.']);

        dd( $validatedData);
        // $validated = $validatedData->validated();
        // dd($validated);
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
