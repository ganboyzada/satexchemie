@extends('admin.layouts.master')

@section('main')
<div class="container-fluid">         
    <div class="row pt-4">
        <div class="col-6">
            <h3>Kateqoriyalar</h3>
        </div>
        <div class="col-6">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="{{ route('admin.home') }}">                                       
                    <i data-feather="home"></i>
                    </a>
                </li>
                <li class="breadcrumb-item active">Kateqoriyalar</li>
            </ol>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12 col-md-6">
                    <div class="card">
                    <div class="card-header">
                        <h5>Siyahı</h5><span>Aşağıdakı cədvəldəki kateqoriyaları silə, redaktə edə bilər <br>və ya səhifənin sağından yeni kateqoriya yarada bilərsiniz</span>
                        <input type="text" id="search-filter" class="search-filter form-control w-auto" placeholder="Axtarın">
                    </div>
                    <div class="table-responsive admin-list">
                        <table class="table table-lg">
                        <thead>
                            <tr>
                            <th scope="col">
                                <button data-routename="categories" id="bulk-deleter" class="btn px-2 btn-outline-danger btn-light" data-bs-original-title="" title=""><i data-feather='trash' height="18"></i></button> 
                            </th>
                            <th scope="col">Kateq. adı</th>
                            <th scope="col">Üst kateq</th>
                            <th scope="col">Şəkil</th>
                            <th scope="col">Status</th>
                            <th scope="col">Əməliyyatlar</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach(\App\Models\Navigation::where('is_categ', true)->get() as $k=>$item)
                            <tr>
                                <th scope="row">
                                    <div class="form-check checkbox checkbox-primary mb-0">
                                        <input class="form-check-input bulk-delete-check" id="bulk-delete-{{ $item->id }}" type="checkbox" data-bs-original-title="" title="">
                                        <label class="form-check-label" for="bulk-delete-{{ $item->id }}"></label>
                                    </div>
                                </th>
                                <td class="name">{{ $item->name_az }}</td>
                                <td>
                                    @if($item->parent_id != null)
                                    {{ \App\Models\Navigation::where('id', $item->parent_id)->first()->name_az }}
                                    @else
                                    --- 
                                    @endif
                                </td>
                                <td>
                                @if($item->img != null)
                                    <img src="{{ asset($item->img) }}" height="40" alt="">
                                @else
                                    ---
                                @endif
                                </td>
                                <td>
                                    <div class="col-3 switch-sm">
                                        <label class="switch">
                                            <input data-btn="status" data-routename="categories" class="form-check-input" data-id="{{$item->id}}" data-status="{{$item->toggle}}" @if($item->toggle) checked @endif type="checkbox" id="flexSwitchCheckDefault">
                                            <span class="switch-state"></span>
                                        </label>
                                    </div> 
                                </td>
                                <td>
                                    <div class="btn-group btn-group-pill">
                                        {{--
                                        <a class="btn btn-light" disabled data-type="categories" data-btn="toggle" data-bs-original-title="" title=""><i data-feather='eye' height="18"></i></a>
                                        --}}
                                        <a class="btn btn-light" data-type="categories" data-btn="edit" data-id="{{ $item->id }}" data-bs-original-title="" title=""><i data-feather='edit' height="18"></i></a>
                                        <form method="post" action="{{ route('admin.categories.delete', $item->id) }}">
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
                            <h5>Yeni kateqoriya yarat</h5><span>Aşağıdakı tələb olunan xanaları doldurun və 'Yadda saxla' düyməsini sıxın.</span>
                        </div>
                        <div class="card-body admin-list">
                            <form class="theme-form store-form" action="{{ route('admin.categories.store') }}" 
                            enctype="multipart/form-data" method="POST">
                                @csrf
                                <div class="mb-2">
                                    <div class="col-form-label">Üst kateqoriyası</div>
                                    <select class="js-example-basic-single col-sm-12" name="category">
                                        <option value=""></option>
                                        @foreach(\App\Models\Navigation::where('is_categ', true)->where('parent_id', null)->get() as $category)
                                            <option value="{{ $category->id }}">{{ $category->name_az }}</option>
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
                                @foreach(['az', 'en', 'ru', 'de'] as $lang)
                                <div class="mb-3 row">
                                    <label class="col-sm-3 col-form-label">Açıqlama ({{ strtoupper($lang) }})</label>
                                    <div class="col-sm-9">
                                    <textarea class="form-control" type="text" placeholder="nümunə" name="desc_{{ $lang }}" data-bs-original-title="" title=""></textarea>
                                    </div>
                                </div>
                                @endforeach
                                
                                <div class="mb-3 row">
                                    <label class="col-sm-3 col-form-label">Şəkil (.jpg, .png)</label>
                                    <div class="col-sm-9 d-flex">
                                        <input class="form-control w-75" id="file_upload" type="file" name="img" data-bs-original-title="">
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
    