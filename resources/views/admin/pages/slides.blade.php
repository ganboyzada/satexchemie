@extends('admin.layouts.master')

@section('main')
<div class="container-fluid">         
    <div class="row pt-4">
        <div class="col-6">
            <h3>Slaydlar</h3>
        </div>
        <div class="col-6">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="{{ route('admin.home') }}">                                       
                    <i data-feather="home"></i>
                    </a>
                </li>
                <li class="breadcrumb-item active">Slaydlar</li>
            </ol>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12 col-md-6">
                    <div class="card">
                    <div class="card-header">
                        <h5>Siyahı</h5><span>Aşağıdakı cədvəldəki məhsulları silə, redaktə edə bilər <br>və ya səhifənin sağından yeni məhsul/layihə yarada bilərsiniz</span>
                    </div>
                    <div class="table-responsive admin-list">
                        <table class="table table-lg">
                        <thead>
                            <tr>
                            <th scope="col">#</th>
                            <th scope="col">Slay mətni</th>
                            <th scope="col">Şəkil</th>
                            <th scope="col">Əməliyyatlar</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach(\App\Models\Slider::get() as $k=>$slide)
                            <tr>
                                <th scope="row">{{ $k+1 }}</th>
                                <td>{{ $slide->name_az }}</td>
                                <td><img src="{{ asset($slide->img) }}" height="40px" alt=""></td>
                                <td>
                                    <div class="btn-group btn-group-pill">
                                        {{--
                                        <a class="btn btn-light" disabled data-type="slides" data-btn="toggle" data-bs-original-title="" title=""><i data-feather='eye' height="18"></i></a>
                                        --}}
                                        <a class="btn btn-light" data-type="slides" data-btn="edit" data-id="{{ $slide->id }}" data-bs-original-title="" title=""><i data-feather='edit' height="18"></i></a>
                                        <form method="post" action="{{ route('admin.slides.delete', $slide->id) }}">
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
                            <form class="theme-form store-form" action="{{ route('admin.slides.store') }}" 
                                enctype="multipart/form-data" method="POST">
                                @csrf

                                @foreach(['az', 'en', 'ru', 'de'] as $lang)
                                <div class="mb-3 row">
                                    <label class="col-sm-3 col-form-label">Mətni ({{ strtoupper($lang) }})</label>
                                    <div class="col-sm-9">
                                    <input class="form-control" type="text" placeholder="nümunə" name="name_{{ $lang }}" data-bs-original-title="" title="">
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
    