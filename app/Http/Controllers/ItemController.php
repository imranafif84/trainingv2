<?php

namespace App\Http\Controllers;

use App\Http\Requests\ItemRequestStore;
use App\Models\Item;
use App\Models\User;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $items = Item::with('user')->get();
        return view('item.index',compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $item = new Item();
        $users = User::get();

        return view('item.create', compact('item','users'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ItemRequestStore $request)
    {
        $item = new Item();
        $item->item_name = $request->item_name;
        $item->description = $request->description;
        $item->price = $request->price;
        $item->user_id = $request->user_id;

        $item->save();

        return redirect()->route('item.index')->with('info', 'Maklumat item ' . $item->item_name . ' telah berjaya disimpan');
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
