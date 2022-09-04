<?php

namespace App\Http\Controllers;

use App\Models\ShopCategory;
use App\Models\ShopItem;
use App\Http\Requests\StoreBlogRecordRequest;
use App\Http\Requests\UpdateBlogRecordRequest;

class ShopController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {

    $shop_category = ShopCategory::all();
    $shop_items = ShopItem::Paginate(8);
    return view('shop', [
      'categories' => $shop_category,
      'items' => $shop_items
    ]);
  }

  public function show(int $id)
  {
    $shop_item = ShopItem::where('id', $id)->get();

    // dd($shop_item);
    return view('product-detail', [
      'item' => $shop_item[0]
    ]);
  }
}
