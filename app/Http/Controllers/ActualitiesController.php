<?php

namespace App\Http\Controllers;

use App\Http\Requests\ActualityFormRequest;
use App\Models\Actuality;
use Illuminate\Http\Request;

class ActualitiesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //GET
        return view('actualities.index', [
            'actualities' => Actuality::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //GET
        return view('actualities.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ActualityFormRequest $request)
    {
        //POST
        $data = $request->validated();

        Actuality::create($data);

        return redirect()->route('actualities.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Actuality $actuality)
    {
        //GET
        return view('actualities.show', [
            'actuality'=>$actuality,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Actuality $actuality)
    {
        //GET
        return view('actualities.edit', [
            'actuality'=>$actuality,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ActualityFormRequest $request, Actuality $actuality)
    {
        //POST
        $data = $request->validated();

        $actuality->update($data);

        return redirect()->route('actualities.show', $actuality->id);
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
