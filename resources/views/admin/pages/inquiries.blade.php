@extends('admin.layouts.master')

@section('main')
<div class="container-fluid">         
    <div class="row pt-4">
        <div class="col-6">
            <h3>Müraciətlər</h3>
        </div>
        <div class="col-6">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="{{ route('admin.home') }}">                                       
                    <i data-feather="home"></i>
                    </a>
                </li>
                <li class="breadcrumb-item active">Müraciətlər</li>
            </ol>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12 col-md-6">
                    <div class="card">
                    <div class="card-header">
                        <h5>Siyahı</h5><span>Aşağıdakı cədvəldəki müraciətlərə baxa bilərsiniz.</span>
                    </div>
                    <div class="table-responsive admin-list">
                        <table class="table table-lg">
                        <thead>
                            <tr>
                            <th scope="col">#</th>
                            <th scope="col">Göndərən</th>
                            <th scope="col">Şirkət</th>
                            <th scope="col">Tarix</th>
                            <th scope="col">Əməliyyatlar</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach(\App\Models\Inquiry::orderBy('timestamp', 'desc')->get() as $k=>$item)
                            <tr>
                                <td>{{ $item->id }}</td>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->company }}</td>
                                <td>{{ str_replace('-', '.', $item->timestamp) }}</td>
                                <td>
                                    <div class="btn-group btn-group-pill">
                                        
                                        <a class="btn btn-light" data-type="inquiries" data-btn="edit" data-id="{{ $item->id }}" title=""><i data-feather='eye' height="18"></i></a>
                                        <form method="post" action="{{ route('admin.inquiries.delete', $item->id) }}">
                                            @csrf
                                            <input type="hidden" name="_method" value="DELETE">
                                            <button type="submit" class="btn btn-outline-danger btn-light"><i data-feather='trash' height="18"></i></button>     
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
            <div class="card bg-none">
                <div class="store-form"></div>
            </div>
        </div>
    </div>
                            
</div>
<!-- Container-fluid Ends-->
        
@endsection
    