<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class adminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $soldPlots = \DB::select('SELECT * FROM plots WHERE sponsorId!= 0');
        // $sponsors = \DB::select('SELECT * FROM sponsors WHERE id in (select sponsorid from plots where sponsorid != 0)');


        $fulldata = \DB::select('SELECT * FROM sponsors as s left join plots as p on p.sponsorid=s.id');
        // dd($fulldata);
        
        // $totalinfo = array($soldPlots, $sponsors);
        // dd($totalinfo);
        //return view('admin/index', ['soldPlots'=>$soldPlots, 'sponsors' =>$sponsors]);
        return view('admin/index', ['fulldata'=> $fulldata]);   
       
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $sponsor = \DB::table('sponsors')
        ->where('id', $id)
        ->first();

        $soldPlots = \DB::select('SELECT * FROM plots WHERE sponsorId != 0');

        return view('plots/show', 
            ['soldPlots'=>$soldPlots], 
            ['sponsor'=> $sponsor]);       
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
        \DB::table('plots')
        ->where('id', $id)
        ->update([
            'sold'   =>$request->sold
        ]);
    
        return redirect()->route('admin.index');
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
