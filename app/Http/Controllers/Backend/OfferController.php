<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Offer;
use Illuminate\Http\Request;
use App\Http\Requests\Offer\OfferRequest;
use App\Http\Requests\Offer\OfferUpdateRequest;
use Illuminate\Support\Facades\DB;
use NabilAnam\SimpleUpload\SimpleUpload;

class OfferController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $offers = Offer::paginate(10);
        return view('backend.offer.index',compact('offers'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.offer.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(OfferRequest $request)
    {


        try {
            DB::beginTransaction();
            $all = $request->all();
            if($request->image){
                $all['image'] = (new SimpleUpload)
                ->file($request->image)
                ->dirName('offers')
                ->save();
            }

             $offer = Offer::create($all);
            foreach ($request->invoice as $key => $values) {
                foreach ($values as $key => $value) {
                    $offer->serials()->create(['name' => ($value)]);
                }
            }
            DB::commit();
        } catch (\Exception $ex) {
            DB::rollback();
            return back()->with('error',$ex->getMessage());
        }
        return redirect()->to('sadmin/offer')->with('message','Offer Inserted Successfully');
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
       $offer =Offer::with('serials')->find($id);
       return view('backend.offer.edit',compact('offer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(OfferUpdateRequest $request,Offer $offer)
    {
        try {
            DB::beginTransaction();
            $all = $request->except('_token', 'item');
            if($request->image){
            $all['image'] = (new SimpleUpload)
                ->file($request->image)
                ->dirName('banners')
                ->deleteIfExists($offer->image)
                ->save();
            }

            $offer->update($all);

            foreach ($offer->serials()->get() as  $key  => $value) {

                if(in_array( $value->id, array_keys ($request->item))){

                    $value->update(['name' =>$request->item[$value->id]]);
                }else{
                   $value->delete();
                }
            }

            foreach ($request->new_item as $key => $value) {
                    $offer->serials()->create(['name' => ($value)]);
            }
            DB::commit();
            } catch (\Exception $ex) {
                DB::rollback();
                return back()->with('message',$ex->getMessage());
            }
        return back()->with('message', 'Offer Update Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Offer $offer)
    {
         $offer->delete();

        return back()->with('message', 'Deleted Successfully!');
    }
}
