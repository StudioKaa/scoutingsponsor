<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class scoutingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
            $height = 26; // repeat 31x
            $row = 0;
            $Xcoords = array();
            $Ycoords = array();
            for ( $y = 0; $y < 32; $y++)
            {
                for($x = 0; $x < 25; $x++)
                {
                    array_push($Xcoords, "{$x}");
                    array_push($Ycoords, "{$y}");
                }

                $row = $row + $height;
            }

            \DB::table('plots')->truncate();
            for ($i = 0; $i < 800; $i++){
                $Xcoord = $Xcoords[$i];
                $Ycoord = $Ycoords[$i];

                \DB::table('plots')->insert([
                    'naam' => "test{$i}",
                    'x' => $Xcoord,
                    'y' => $Ycoord,
                    'type' => 1,
                    'price' => $i
                ]);
            }

        return view('welcome');
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
