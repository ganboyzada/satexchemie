@extends('admin.layouts.master')

@section('main')
<div class="container-fluid">         
    <div class="row pt-4">
        <div class="col-6">
            <h3>Layihələr və Məhsullar</h3>
        </div>
        <div class="col-6">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="{{ route('admin.home') }}">                                       
                    <i data-feather="home"></i>
                    </a>
                </li>
                <li class="breadcrumb-item active">Ana səhifə</li>
            </ol>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8">
                        <div class="card">
                        <div class="card-header">
                            <h5>Toplu şəkildə layihələr yüklə</h5><span>Aşağıdakı tələb olunan xanaları doldurun və 'Yadda saxla' düyməsini sıxın.</span>
                        </div>
                        <div class="card-body admin-list">
                            <form class="theme-form store-form" action="{{ route('admin.projects.bulk_upload_store') }}" 
                                enctype="multipart/form-data" method="POST">
                                @csrf
                                <div class="mb-2">
                                    <div class="col-form-label">Kateqoriyası</div>
                                    <select class="js-example-basic-single col-sm-12" name="category">
                                        @foreach(\App\Models\Navigation::where('parent_id', null)->where('is_categ', true)->get() as $category)

                                        @php
                                            $subcategories = \App\Models\Navigation::where('parent_id', $category->id)->get();
                                        @endphp

                                        @if(count($subcategories)>0)
                                        <optgroup label="{{ $category->name_az }}">
                                            @foreach($subcategories as $subcategory)
                                            <option value="{{ $subcategory->id }}">{{ $subcategory->name_az }}</option>
                                            @endforeach
                                        </optgroup>
                                        @else
                                        <option value="{{ $category->id }}">{{ $category->name_az }}</option>
                                        @endif

                                        @endforeach
                                    </select>
                                </div><br>
                                
                                <div class="mb-3 row">
                                    <label class="col-sm-3 col-form-label">Şəkil (.jpg, .png)</label>
                                    <div class="col-sm-9 d-flex">
                                        <input class="form-control w-75" id="file_upload" type="file" name="images[]" data-bs-original-title="" multiple>
                                        <a onclick="$('#file_upload').click()" class="btn btn-primary d-inline-flex justify-content-center align-items-center" data-bs-original-title="" title=""><i class="fa fa-camera"></i></a>    
                                    </div>
                                </div>
                                
                            
                            </form>
                        </div>
                        <div class="card-footer text-center">
                            <button class="btn btn-primary" onclick="$('.store-form').submit()" data-bs-original-title="" title="">Yadda saxla</button>
                            {{--<button class="btn btn-secondary" data-bs-original-title="" title="">Cancel</button>--}}
                        </div>
                        </div>
        </div>
    </div>
                            
</div>
<!-- Container-fluid Ends-->
        
@endsection
    