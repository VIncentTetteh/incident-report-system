<?php

namespace App\Http\Controllers;

use App\Maritimerecords;
use Illuminate\Http\Request;

class MaritimerecordsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $maritimerecords = Maritimerecords::latest()->paginate(5);
        return view('reports.index',compact('maritimerecords'))->with('i',(request()->input('page',1)-1)* 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('reports.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'type' => 'required',
            'date' => 'required',
            'flagstate' => 'required',
            'country' => 'required',
            'vessel' => 'required',
            'action' => 'required',
            'location' => 'required',
            'agency' => 'required',
        ]);
        Maritimerecords::create($request->all());
        return redirect()->route('reports.index')
        ->with('success','report created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Maritimerecords  $maritimerecords
     * @return \Illuminate\Http\Response
     */
    public function show(Maritimerecords $maritimerecords)
    {
        return view('reports.show',compact('maritimerecords'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Maritimerecords  $maritimerecords
     * @return \Illuminate\Http\Response
     */
    public function edit(Maritimerecords $maritimerecords)
    {
        return view('reports.edit',compact('maritimerecords'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Maritimerecords  $maritimerecords
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Maritimerecords $maritimerecords)
    {
        $request->validate([
            'name' => 'required',
             'flagstate' => 'required',
            'country' => 'required',
            'vessel' => 'required',
            'location' => 'required',
            'agency' => 'required',
            'type' => 'required',
            'date' => 'required',
            'action' => 'required',
        ]);

        $maritimerecords->update($request->all());
        return redirect()->route('reports.index')->with('success','report updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Maritimerecords  $maritimerecords
     * @return \Illuminate\Http\Response
     */
    public function destroy(Maritimerecords $maritimerecords)
    {
        $maritimerecords->delete();
        return redirect()->route('reports.index')->with('success','report deleted successfully');

    }
}
