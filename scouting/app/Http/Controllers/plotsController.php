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
        return view('plots/index', ['plots'=>$plots]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('plots/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        \DB::table('sponsers')
        ->insert([
            'name'          =>$request->name, 
            'lastname'      =>$request->lastname,
            'telefoon'      =>$request->telefoon,
            'adres'         =>$request->adres,
            'email'         =>$request->email
        ]);
        
        
        return redirect()->route('plots.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data =\DB::select
        ('SELECT * 
        FROM `plots` as p 
        left join sponsers as s 
        on p.sponserId=s.id');

        //1 id ophalen
        //2 1 categorie selecteren uit database
        //show teplate returnen metopgehaalde data
        $plot = \DB::table('plots')
            ->where('id',$id )
            ->first();
            //dd($plot);

        return view('plots/show', 
            ['plot'=>$plot, 'data'=>$data]);           
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

    return view("plots/edit", 
        ['plot'=>$plot , 'id'=>$id]);    
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
                'name'          => $request->name,
                'sold'   =>$request->sold
            ]);
        
        return redirect()->route('home');
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
