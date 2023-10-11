@extends('layout')
@section('content')


<div id="all-output" class="col-md-10 upload">
        	<div id="upload">
                <div class="row">
                    <!-- upload -->
                    <div class="col-md-8">
						<h1 class="page-title"><span>آپلود</span> فیلم</h1>
						<form action="{{route('videos.store')}}" method="post" >
                        @csrf

                        <x-validation-errors/>

                        	<div class="row">
                            	<div class="col-md-6">
                                	<label>عنوان</label>
                                    <input type="text" name=name value="{{old('name')}}" class="form-control" placeholder="عنوان">
                                </div>
                            	<div class="col-md-6">
                                	<label>دسته بندی</label>
                                    <input type="text" name=category value="{{old('category')}}" class="form-control" placeholder="دسته بندی">
                                </div>
                            	<div class="col-md-6">
                                	<label>برچسب ها</label>
                                    <input type="text" name=slug value="{{old('slug')}}" class="form-control" placeholder="برچسب ها">
                                </div>
                                <div class="col-md-6">
                                	<label>مدت زمان ویدئو</label>
                                    <input type="text" name=length value="{{old('length')}}" class="form-control" placeholder="مدت زمان ویدئو">
                                </div>
                            	<div class="col-md-6">
                                	<label>آپلود فیلم</label>
                                    <input id="upload_file" name=url value="{{old('url')}}" type="file" class="file">
                                </div>
                            	<div class="col-md-12">
                                	<label>توضیحات</label>
                                    <textarea class="form-control" name=description value="{{old('description')}}" rows="4" placeholder="توضیح"></textarea>
                                </div>
                            	<div class="col-md-6">
                                	<label>تصویر</label>
                                    <input id="featured_image" name=thumbnail value="{{old('thumbnail')}}" type="file" class="file">
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