<?php

namespace App\Http\Controllers;

use App\Models\Restaurant;
use Illuminate\Http\Request;

class RestaurantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $restaurants = Restaurant::all()->sortBy('gid');
        return view('restaurants.index')->with(['restaurants'=>$restaurants]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('restaurants.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $name = $request->input('name');
        $address = $request->input('address');
        $gid = $request->input('gid');
        $pid = $request->input('pid');
        $telephone = $request->input('telephone');

        Restaurant::create(
            [
                'name' => $name,
                'address' => $address,
                'gid' => $gid,
                'pid' => $pid,
                'telephone' => $telephone
            ]
        );

        return redirect('restaurants');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $restaurant = Restaurant::findOrFail($id);
        return view('restaurants.show')->with(['restaurant'=>$restaurant]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $restaurant = Restaurant::findOrFail($id);
        return view('restaurants.edit')->with(['restaurant'=>$restaurant]);
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
        $restaurant = Restaurant::findOrFail($id);
        $restaurant->name = $request->input('name');
        $restaurant->address = $request->input('address');
        $restaurant->gid = $request->input('gid');
        $restaurant->pid = $request->input('pid');
        $restaurant->telephone = $request->input('telephone');

        $restaurant->save();

        return redirect('restaurants');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $restaurant = Restaurant::findOrFail($id);
        $restaurant->delete();
        return redirect('restaurants');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  string $name
     * @return \Illuminate\Http\Response
     */
    public function search($name)
    {
        $restaurants = Restaurant::where('name', 'like', '%'.$name.'%')->get();
        return view('restaurants.index')->with(['restaurant'=>$restaurants]);
    }

    public function api_restaurants()
    {
        return Restaurant::all();
    }

    public function api_update(Request $request)
    {
        $restaurant = Restaurant::find($request->input('id'));
        if ($restaurant == null) {
            return response()->json([
                'status'=>0,
            ]);
        }

        $restaurant->name = $request->input('name');
        $restaurant->address = $request->input('address');
        $restaurant->gid = $request->input('gid');
        $restaurant->pid = $request->input('pid');
        $restaurant->telephone = $request->input('telephone');
        if ($restaurant->save())
        {
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
        $restaurant = Restaurant::find($request->input('id'));
        if ($restaurant == null)
        {
            return response()->json([
                'status' => 0,
            ]);
        }

        if ($restaurant->delete())
        {
            return response()->json([
                'status' => 1,
            ]);
        }
    }
}
