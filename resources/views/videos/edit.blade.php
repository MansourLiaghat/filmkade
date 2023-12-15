@extends('layout')
@section('content')


<div id="all-output" class="col-md-10 upload">
        	<div id="upload">
                <div class="row">
                    <!-- upload -->
                    <div class="col-md-8">
						<h1 class="page-title"><span>آپلود</span> فیلم</h1>
						<form action="{{route('videos.update' , $video->slug)}}" method="post" enctype="multipart/form-data" >
                        @csrf

                        <x-validation-errors/>

                        	<div class="row">
                            	<div class="col-md-6">
                                	<label>عنوان</label>
                                    <input type="text" name=name value="{{$video->name}}" class="form-control" placeholder="عنوان">
                                </div>
                            	<div class="col-md-6">
                                	<label>دسته بندی</label>
                                    <input type="text" name=category value="{{$video->category}}" class="form-control" placeholder="دسته بندی">
                                </div>
                            	<div class="col-md-6">
                                	<label>برچسب ها</label>
                                    <input type="text" name=slug value="{{$video->slug}}" class="form-control" placeholder="برچسب ها">
                                </div>
                            
                            	<div class="col-md-6">
                                	<label>آپلود فیلم</label>
                                    <input type="file" name="file" id="" class="form-control">
                               </div>
                                <div class="col-md-6">
                                	<label>دسته بندی</label>
                                    <select name="category_id" id="category" class="form-control">
                                    @foreach($categories as $category)
                                    <option value="{{$category->id}}"{{$category->id == $video->category_id ? 'selected' : ''}}>{{$category->name}}</option>
                                    @endforeach
                                    </select>
                                </div>
                            	<div class="col-md-12">
                                	<label>توضیحات</label>
                                    <textarea class="form-control" name=description value="{{ $video->description}}" rows="4" placeholder="توضیحات"></textarea>
                                </div>
                            	<div class="col-md-6">
                                	<label>تصویر</label>
                                    <input id="featured_image" name=thumbnail value="{{$video->thumbnail}}" type="file" class="file">
                                </div>
                            	<div class="col-md-6">
                                    <button type="submit" id="contact_submit" class="btn btn-dm">ذخیره</button>
                                </div>
                            </div>
                        </form>
                    </div><!-- // col-md-8 -->

                    <div class="col-md-4">
                    	<a href="#"><img src="{{asset('img/upload-adv.png')}}" alt=""></a>
                    </div><!-- // col-md-8 -->
                    <!-- // upload -->
                </div><!-- // row -->
            </div><!-- // upload -->
		</div>


        @endsection