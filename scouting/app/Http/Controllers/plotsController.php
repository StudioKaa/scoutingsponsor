<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class plotsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $plots = \DB::select('SELECT * FROM plots');



                                                        if(empty($plots->id))
                                                        {
                                                            echo 'sorry. Deze request is niet gelukt';
                                                            die();
                                                        }

        return view('plots/index', ['plots'=>$plots]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
                                                        echo 'sorry. Deze request is niet gelukt.';
                                                        die();

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        dd($request);

        $user = \DB::table('sponsors')
        ->insert([
            'name'          =>$request->name,
            'lastname'      =>$request->lastname,
            'phone'         =>$request->phone,
            'adres'         =>$request->adres,
            'email'         =>$request->email,
            'mail'          =>$request->mail,
        ]);
        $sponsorId = \DB::getPdo()->lastInsertId();

        \DB::table('plots')
            ->where('id', $request->plotId)
            ->update([
                'sold'          => $request->sold,
                'sponsorId'     => $sponsorId,
                'price' =>$request->price
            ]);

        
        return redirect()->route('home');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {


        $plot = \DB::table('plots')
            ->where('id',$id )
            ->first();
            //dd($plot);

        
        $sponsor = \DB::table('sponsors')
        ->where('id', $plot->sponsorId)
        ->first();
        


        return view('plots/show', 
            ['plot'=>$plot], 
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
   

        $plot = \DB::table('plots')
        ->where('id',$id )
        ->first();
                                                    if(empty($plot->id))
                                                    {
                                                        echo 'sorry. Deze request is niet gelukt';
                                                        die();
                                                    }
                                                    elseif($plot->sold == 2)
                                                    {
                                                        echo 'sorry. Dit plot is helaas al verkocht!';
                                                        die();
                                                    }

        return view("plots/edit", ['plot'=>$plot , 'id'=>$id]);
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
                'name'   =>$request->name,
                'sold'   =>$request->sold
            ]);
        
        return view('plots.show', $id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

    }

}
