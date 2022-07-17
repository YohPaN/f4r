<?php

namespace App\Http\Controllers;

use App\Http\Requests\LiveFormRequest;
use App\Models\Live;
use Illuminate\Http\Request;

class LivesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('lives.index', [
            'lives' => Live::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('lives.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(LiveFormRequest $request)
    {
        $data = $request->validated();

        Live::create($data);

        return redirect()->route('lives.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Live $live)
    {
        return view('lives.show', [
            'live' => $live
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Live $live)
    {
        return view('lives.edit', [
            'live' => $live
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(LiveFormRequest $request, Live $live)
    {
        $data = $request->validated();

        $live->update($data);

        return redirect()->route('lives.show', $live->id);
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
