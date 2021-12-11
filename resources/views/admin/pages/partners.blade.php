@extends('admin.layouts.master')

@section('main')
<div class="container-fluid">         
    <div class="row pt-4">
        <div class="col-lg-8">
            <h3>Partnyorlar</h3>
        </div>
        <div class="col-lg-4">
            <ol class="breadcrumb justify-content-end">
                <li class="breadcrumb-item">
                    <a href="{{ route('admin.home') }}">                                       
                    <i data-feather="home"></i>
                    </a>
                </li>
                <li class="breadcrumb-item active">Partnyorlar</li>
            </ol>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12 col-md-7">
                    <div class="card">
                    <div class="card-header">
                        <h5>Siyahı</h5><span>Aşağıdakı cədvəldəki partnyorları silə, redaktə edə bilər <br>və ya səhifənin sağından yeni informasiya əlavə edə bilərsiniz yarada bilərsiniz</span>
                    </div>
                    <div class="table-responsive admin-list">
                        <table class="table table-lg">
                        <thead>
                            <tr>
                            <th scope="col">#</th>
                            <th scope="col">Partnyor adı</th>
                            <th scope="col">Loqo</th>
                            <th scope="col">Əməliyyatlar</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach(\App\Models\Partner::get() as $k=>$item)
                            <tr>
                                <th scope="row">{{ $k+1 }}</th>
                                <td>{{ $item->name }}</td>
                            
                                <td>
                                    @if($item->img != null)
                                    <img src="{{ asset($item->img) }}" height="40" alt="">
                                    @else
                                    --- 
                                    @endif
                                </td>
                                <td>
                                    <div class="btn-group btn-group-pill">
                                        
                                        <a class="btn btn-light" data-type="partners" data-btn="edit" data-id="{{ $item->id }}" data-bs-original-title="" title=""><i data-feather='edit' height="18"></i></a>
                                        <form method="post" action="{{ route('admin.partners.delete', $item->id) }}">
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
        <div class="col-sm-12 col-md-5">
                        <div class="card">
                            <div class="card-header">
                                <h5>Yeni partnyor əlavə et</h5><span>Aşağıdakı tələb olunan xanaları doldurun və 'Yadda saxla' düyməsini sıxın.</span>
                            </div>
                            <div class="card-body admin-list">
                                <form class="theme-form store-form" action="{{ route('admin.partners.store') }}"
                                enctype="multipart/form-data" method="POST">
                                    @csrf          
                                    <div class="mb-3 row">
                                        <label class="col-sm-3 col-form-label">Ad *</label>
                                        <div class="col-sm-9">
                                        <input class="form-control" type="text" placeholder="nümunə" name="name" data-bs-original-title="" title="">
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label class="col-sm-3 col-form-label">Link (lazım olduqda)</label>
                                        <div class="col-sm-9">
                                        <input class="form-control" type="text" placeholder="https://" name="link" data-bs-original-title="" title="">
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label class="col-sm-3 col-form-label">Şəkil (.jpg, .png) *</label>
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
    