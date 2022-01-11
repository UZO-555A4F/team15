<?php

namespace App\Http\Controllers;

use App\Models\PriceLevel;
use Illuminate\Http\Request;

class PriceLevelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $price_levels = PriceLevel::all();
        return view('price_levels.index')->with(['price_levels'=>$price_levels]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('price_levels.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $price_level = $request->input('price_level');

        PriceLevel::create(
            [
                'price_level' => $price_level
            ]
        );

        return redirect('price_levels');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $price_level = PriceLevel::findOrFail($id);
        return view('price_levels.show')->with(['price_level'=>$price_level]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $price_level = PriceLevel::findOrFail($id);
        return view('price_levels.edit')->with(['price_level'=>$price_level]);
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
        $price_level = PriceLevel::findOrFail($id);
        $price_level->price_level = $request->input('price_level');

        $price_level->save();

        return redirect('price_levels');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $price_level = PriceLevel::findOrFail($id);
        $price_level->delete();
        return redirect('price_levels');
    }

    public function api_price_levels()
    {
        return PriceLevel::all();
    }

    public function api_update(Request $request)
    {
        $price_level = PriceLevel::find($request->input('id'));
        if ($price_level == null) {
            return response()->json([
                'status' => 0,
            ]);
        }

        $price_level->price_level = $request->input('price_level');
        if ($price_level->save()) {
            return response()->json([
                'status' => 1,
            ]);
        } else {
            return response()->json([
                'status' => 0,
            ]);
        }
    }

    public function api_delete(Request $request)
    {
        $price_level = PriceLevel::find($request->input('id'));

        if ($price_level == null) {
            return response()->json([
                'status' => 0,
            ]);
        }

        if ($price_level->delete()) {
            return response()->json([
                'status' => 1,
            ]);
        }
    }
}
