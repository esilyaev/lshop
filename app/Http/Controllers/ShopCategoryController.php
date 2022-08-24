<?php

namespace App\Http\Controllers;

use App\Models\ShopCategory;
use App\Http\Requests\StoreShopCategoryRequest;
use App\Http\Requests\UpdateShopCategoryRequest;

class ShopCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Http\Requests\StoreShopCategoryRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreShopCategoryRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ShopCategory  $shopCategory
     * @return \Illuminate\Http\Response
     */
    public function show(ShopCategory $shopCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ShopCategory  $shopCategory
     * @return \Illuminate\Http\Response
     */
    public function edit(ShopCategory $shopCategory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateShopCategoryRequest  $request
     * @param  \App\Models\ShopCategory  $shopCategory
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateShopCategoryRequest $request, ShopCategory $shopCategory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ShopCategory  $shopCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(ShopCategory $shopCategory)
    {
        //
    }
}
