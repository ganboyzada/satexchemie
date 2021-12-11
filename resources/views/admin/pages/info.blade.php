@extends('admin.layouts.master')

@section('main')
<div class="container-fluid">         
    <div class="row pt-4">
        <div class="col-lg-8">
            <h3>Ümumi məlumatlar</h3>
        </div>
        <div class="col-lg-4">
            <ol class="breadcrumb justify-content-end">
                <li class="breadcrumb-item">
                    <a href="{{ route('admin.home') }}">                                       
                    <i data-feather="home"></i>
                    </a>
                </li>
                <li class="breadcrumb-item active">Ümumi məlumatlar</li>
            </ol>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12 col-md-7">
                    <div class="card">
                    <div class="card-header">
                        <h5>Siyahı</h5><span>Aşağıdakı cədvəldəki informasiyaları silə, redaktə edə bilər <br>və ya səhifənin sağından yeni informasiya əlavə edə bilərsiniz yarada bilərsiniz</span>
                    </div>
                    <div class="table-responsive admin-list">
                        <table class="table table-lg">
                        <thead>
                            <tr>
                            <th scope="col">#</th>
                            <th scope="col">İnfo növü</th>
                            <th scope="col">İnfo kontenti</th>
                            <th scope="col">Şəkil</th>
                            <th scope="col">Əməliyyatlar</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach(\App\Models\Content::orderBy('type', 'desc')->get() as $k=>$item)
                            <tr>
                                <th scope="row">{{ $k+1 }}</th>
                                <td>{{ $item->type }}</td>
                                <td>
                                    @if($item->name != null)
                                    {{ $item->name }}
                                    @else
                                    --- 
                                    @endif
                                </td>
                                <td>
                                    @if($item->img != null)
                                    <img src="{{ $item->img }}" alt="">
                                    @else
                                    --- 
                                    @endif
                                </td>
                                <td>
                                    <div class="btn-group btn-group-pill">
                                        {{--
                                        <a class="btn btn-light" data-type="infos" data-btn="toggle" data-bs-original-title="" title=""><i data-feather='eye' height="18"></i></a>
                                        --}}
                                        <a class="btn btn-light" data-type="infos" data-btn="edit" data-id="{{ $item->id }}" data-bs-original-title="" title=""><i data-feather='edit' height="18"></i></a>
                                        <form method="post" action="{{ route('admin.infos.delete', $item->id) }}">
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
                                <h5>Yeni məlumat yarat</h5><span>Aşağıdakı tələb olunan xanaları doldurun və 'Yadda saxla' düyməsini sıxın.</span>
                            </div>
                            <div class="card-body admin-list">
                                <form class="theme-form store-form" action="{{ route('admin.infos.store') }}" enctype="multipart/form-data" method="POST">
                                    @csrf
                                    <div class="mb-2">
                                        <div class="col-form-label">İnformasiya tipi</div>
                                        <select class="js-example-basic-single col-sm-12" name="type" required>
                                            @foreach(\App\Models\Content::select('type')->distinct()->get() as $item)
                                                <option value="{{ $item->type }}">{{ $item->type }}</option>
                                            @endforeach
                                        </select>
                                    </div><br>
                                    <div class="mb-3 row">
                                        <label class="col-sm-3 col-form-label">Ad | Nömrə | Email </label>
                                        <div class="col-sm-9">
                                        <input class="form-control" type="text" placeholder="nümunə" name="name" data-bs-original-title="" title="">
                                        </div>
                                    </div>
                                    @foreach(['az', 'en', 'ru', 'de'] as $lang)
                                    <div class="mb-3 row">
                                        <label class="col-sm-3 col-form-label">Kontent ({{ strtoupper($lang) }})</label>
                                        <div class="col-sm-9">
                                        <input class="form-control" type="text" placeholder="nümunə" name="value_{{ $lang }}" data-bs-original-title="" title="">
                                        </div>
                                    </div>
                                    @endforeach
                                    
                                    <div class="mb-3 row">
                                        <label class="col-sm-3 col-form-label">Link (lazım olduqda)</label>
                                        <div class="col-sm-9">
                                        <input class="form-control" type="text" placeholder="nümunə" name="link" data-bs-original-title="" title="">
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label class="col-sm-3 col-form-label">Şəkil (.jpg, .png) (lazım olduqda)</label>
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
    