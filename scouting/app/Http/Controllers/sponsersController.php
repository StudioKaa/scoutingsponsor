<?php

// namespace App\Http\Controllers;

// use Illuminate\Http\Request;

// class sponsersController extends Controller
// {
//     /**
//      * Display a listing of the resource.
//      *
//      * @return \Illuminate\Http\Response
//      */
//     public function index()
//     {
//         $plots = \DB::select('SELECT * FROM plots');
//         return view('plots/index', ['plots'=>$plots]);
//     }

//     /**
//      * Show the form for creating a new resource.
//      *
//      * @return \Illuminate\Http\Response
//      */
//     public function create()
//     {
//         return view('plots/create');
//     }

//     /**
//      * Store a newly created resource in storage.
//      *
//      * @param  \Illuminate\Http\Request  $request
//      * @return \Illuminate\Http\Response
//      */
//     public function store(Request $request)
//     {   
//         \DB::table('plots')
//             ->insert([
//                 'name'   =>$request->plot,
//                 'sold'   =>$request->sold
//             ]);
            
//             return redirect()->route('plots.index');
//     }

//     /**
//      * Display the specified resource.
//      *
//      * @param  int  $id
//      * @return \Illuminate\Http\Response
//      */
//     public function show($id)
//     {
//         $plot = \DB::table('plots')
//             ->where('id',$id )
//             ->first();

//         return view('plots/show', 
//             ['plot'=>$plot]);           
//     }

//     /**
//      * Show the form for editing the specified resource.
//      *
//      * @param  int  $id
//      * @return \Illuminate\Http\Response
//      */
//     public function edit($id)
//     {
//         $plot = \DB::table('plots')
//         ->where('id',$id )
//         ->first();

//     return view("plots/edit", 
//         ['plot'=>$plot]);           
//     }   

//     /**
//      * Update the specified resource in storage.
//      *
//      * @param  \Illuminate\Http\Request  $request
//      * @param  int  $id
//      * @return \Illuminate\Http\Response
//      */
//     public function update(Request $request, $id)
//     {
//         \DB::table('plots')
//             ->where('id', $id)
//             ->update([
//                 'name'          => $request->plot,
//                 'sold'   =>$request->sold
//             ]);
        
//         return redirect()->route('plots.index');
    
//     }

//     /**
//      * Remove the specified resource from storage.
//      *
//      * @param  int  $id
//      * @return \Illuminate\Http\Response
//      */
//     public function destroy($id)
//     {
//         //
//     }
// }
