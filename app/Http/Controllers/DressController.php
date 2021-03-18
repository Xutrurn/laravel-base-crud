<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dress;


class DressController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vestiti_sel = Dress::all();

        $data = [
            'vestiti' => $vestiti_sel
        ];
        return view('dresses.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dresses.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();

        $dressNew = new Dress();
        // $dressNew->name = $data['name'];
        // $dressNew->color = $data['color'];
        // $dressNew->size = $data['size'];
        // $dressNew->price = $data['price'];
        // $dressNew->season = $data['season'];
        // $dressNew->description = $data['description'];

        $dressNew->fill($data);
        
        $dressNew->save();

        //return redirect()->route('dresses.index');
        return redirect()->route('dresses.show', $dressNew->find($dressNew->id));

    }





    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $vestito_sel = Dress::find($id);

        if($vestito_sel){
            $data = [
            'vestito' => $vestito_sel
        ];
            return view('dresses.show', $data);
        }

        abort('404');
        
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

