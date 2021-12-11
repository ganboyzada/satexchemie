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
        <div class="col-sm-12 col-md-6">
                    <div class="card">
                    <div class="card-header">
                        <a href="{{ route('admin.projects.bulk_upload') }}" class="btn-bulk-upload btn btn-primary d-inline-flex">
                            Toplu yüklə
                            <i data-feather="upload" height="20px"></i>
                        </a>
                        <h5>Siyahı</h5><span>Aşağıdakı cədvəldəki məhsulları silə, redaktə edə bilər <br>və ya səhifənin sağından yeni məhsul/layihə yarada bilərsiniz</span>
                        <input type="text" id="search-filter" class="search-filter form-control w-auto" placeholder="Axtarın">
                    </div>
                    <div class="table-responsive admin-list">
                        <table class="table table-lg">
                        <thead>
                            <tr>
                            <th scope="col">
                                <button data-routename="projects" id="bulk-deleter" class="btn px-2 btn-outline-danger btn-light" data-bs-original-title="" title=""><i data-feather='trash' height="18"></i></button> 
                            </th>
                            <th scope="col">Məhsul adı</th>
                            <th scope="col">Şəkil</th>
                            <th scope="col">Qiymət</th>
                            <th scope="col"><i class="text-warning" data-feather="star"></i></th>
                            <th scope="col">Əməliyyatlar</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach(\App\Models\Project::get() as $k=>$project)
                            <tr>
                                <th scope="row">
                                    <div class="form-check checkbox checkbox-primary mb-0">
                                        <input class="form-check-input bulk-delete-check" id="bulk-delete-{{ $project->id }}" type="checkbox" data-bs-original-title="" title="">
                                        <label class="form-check-label" for="bulk-delete-{{ $project->id }}"></label>
                                    </div>
                                </th>
                                <td class="name">{{ $project->name_az }}</td>
                                <td>
                                    @if($project->thumb != null)
                                    <img class="lozad" data-src="{{ asset($project->thumb) }}" height="40" alt="">
                                    @else
                                    ---
                                    @endif
                                </td>
                                <td>{{ $project->price }}</td>
                                <td>
                                    @if($project->featured)
                                    <i data-feather="check"></i>
                                    @else
                                    
                                    @endif
                                </td>
                                <td>
                                    <div class="btn-group btn-group-pill">
                                        {{--
                                        <a class="btn btn-light" disabled data-type="projects" data-btn="toggle" data-bs-original-title="" title=""><i data-feather='eye' height="18"></i></a>
                                        --}}
                                        <a class="btn btn-light" data-type="projects" data-btn="edit" data-id="{{ $project->id }}" data-bs-original-title="" title=""><i data-feather='edit' height="18"></i></a>
                                        <form method="post" action="{{ route('admin.projects.delete', $project->id) }}">
                                            @csrf
                                            <input type="hidden" name="_method" value="DELETE">
                                            <button type="submit" class="btn btn-outline-danger btn-light" data-bs-original-title="" title=""><i data-feather='trash' height="18"></i></button>     
                                        </form>
                                    </div>
                                </td>
                            </tr>
                           @endforeach
                        </tbody>
                        </table>
                    </div>
                    </div>
        </div>
        <div class="col-sm-12 col-md-6">
                        <div class="card">
                        <div class="card-header">
                            <h5>Yeni layihə/məhsul yarat</h5><span>Aşağıdakı tələb olunan xanaları doldurun və 'Yadda saxla' düyməsini sıxın.</span>
                        </div>
                        <div class="card-body admin-list">
                            <form class="theme-form store-form" action="{{ route('admin.projects.store') }}" 
                                enctype="multipart/form-data" method="POST">
                                @csrf
                                <div class="row mb-3">
                                    <div class="col-3">Önə çıxsın</div>
                                    <div class="col-3 switch">
                                        <label class="switch">
                                            <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault" name="featured">
                                            <span class="switch-state"></span>
                                        </label>
                                    </div> 
                                </div>
                                
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
                                @foreach(['az', 'en', 'ru', 'de'] as $lang)
                                <div class="mb-3 row">
                                    <label class="col-sm-3 col-form-label">Adı ({{ strtoupper($lang) }})</label>
                                    <div class="col-sm-9">
                                    <input class="form-control" type="text" placeholder="nümunə" name="name_{{ $lang }}" data-bs-original-title="" title="">
                                    </div>
                                </div>
                                @endforeach

                                <div class="mb-3 row">
                                    <label class="col-sm-3 col-form-label">Qiymət (₼-la)</label>
                                    <div class="col-sm-9">
                                    <input class="form-control" type="number" placeholder="0 ₼" name="price" data-bs-original-title="" title="">
                                    </div>
                                </div>
                        
                                <div class="mb-3 row">
                                    <label class="col-sm-3 col-form-label">Şəkil (.jpg, .png)</label>
                                    <div class="col-sm-9 d-flex">
                                        <input class="form-control w-75" id="file_upload" type="file" name="img" data-bs-original-title="">
                                        <a onclick="$('#file_upload').click()" class="btn btn-primary d-inline-flex justify-content-center align-items-center" data-bs-original-title="" title=""><i class="fa fa-camera"></i></a>    
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-sm-3 col-form-label">Digər şəkillər (Topdan yükləmə) (.jpg, .png)</label>
                                    <div class="col-sm-9 d-flex">
                                        <input class="form-control w-75" id="file_upload2" type="file" name="images[]" data-bs-original-title="" multiple>
                                        <a onclick="$('#file_upload2').click()" class="btn btn-primary d-inline-flex justify-content-center align-items-center" data-bs-original-title="" title=""><i class="fa fa-camera"></i></a>    
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
    