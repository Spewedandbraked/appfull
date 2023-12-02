<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Models\Group;

class GroupController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $group = Group::find(1);

        $g = 'Просмотр групп';
        return view("groups.index", compact('g', 'group'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $g = 'Создание групп';
        return view("groups.create", compact('g'));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //dd($request);
        Group::create(['name' => $request->newgroupname,
                        'leader' => $request->newgroupleadname]);
        return redirect()->route('groups.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
