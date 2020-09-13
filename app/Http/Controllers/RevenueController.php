<?php

namespace App\Http\Controllers;

use App\Revenue;
use Illuminate\Http\Request;

class RevenueController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware(['auth', 'roles']);
    }

    public function index()
    {
        $revenue = $this->listarRevenue();
        return view('revenue.index', compact('revenue'));
    }

    public function listarRevenue()
    {
        $revenue = Revenue::all();

        return $revenue;
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
        $revenue = new Revenue();

        $revenue->valor = $request->valor;

        $revenue->save();

        return redirect('revenue')->with('info', 'Revenue creado exitosamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Revenue  $revenue
     * @return \Illuminate\Http\Response
     */
    public function show(Revenue $revenue)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Revenue  $revenue
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $revenue = Revenue::findOrFail($id);

        return view('revenue.edit', compact('revenue'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Revenue  $revenue
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $revenue = Revenue::findOrFail($id);
        $revenue->valor = $request->valor;

        $revenue->save();

        return redirect('revenue')->with('info', 'Revenue actualizado exitosamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Revenue  $revenue
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $revenue = Revenue::findOrFail($id);

        $revenue->delete();

        return back()->with('error', 'Revenue eliminado exitosamente');
    }
}
