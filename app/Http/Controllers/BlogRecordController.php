<?php

namespace App\Http\Controllers;

use App\Models\BlogRecord;
use App\Http\Requests\StoreBlogRecordRequest;
use App\Http\Requests\UpdateBlogRecordRequest;
use App\Models\User;

class BlogRecordController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    $blog_records = BlogRecord::with(['user', 'blog_category'])->paginate(3);
    // dd($blog_records[0]);
    return view('blog', ['records' => $blog_records]);
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
   * @param  \App\Http\Requests\StoreBlogRecordRequest  $request
   * @return \Illuminate\Http\Response
   */
  public function store(StoreBlogRecordRequest $request)
  {
    //
  }

  /**
   * Display the specified resource.
   *
   * @param  \App\Models\BlogRecord  $blogRecord
   * @return \Illuminate\Http\Response
   */
  public function show(BlogRecord $blogRecord)
  {
    //
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  \App\Models\BlogRecord  $blogRecord
   * @return \Illuminate\Http\Response
   */
  public function edit(BlogRecord $blogRecord)
  {
    //
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \App\Http\Requests\UpdateBlogRecordRequest  $request
   * @param  \App\Models\BlogRecord  $blogRecord
   * @return \Illuminate\Http\Response
   */
  public function update(UpdateBlogRecordRequest $request, BlogRecord $blogRecord)
  {
    //
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\Models\BlogRecord  $blogRecord
   * @return \Illuminate\Http\Response
   */
  public function destroy(BlogRecord $blogRecord)
  {
    //
  }
}
