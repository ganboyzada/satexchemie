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
                <li class="breadcrumb-item active">Sifarişlər</li>
            </ol>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12 col-md-8">
            <div class="card">
                <div class="card-header">
                    <h5>Siyahı</h5><span>Aşağıdakı cədvəldəki məhsulları silə, redaktə edə bilər <br>və ya səhifənin sağından yeni məhsul/layihə yarada bilərsiniz</span>
                </div>
                <div class="table-responsive admin-list">
                    <table class="table table-lg">
                        <thead>
                            <tr>
                            <th scope="col">#</th>
                            <th scope="col">Ad</th>
                            <th scope="col">Soyad</th>
                            <th scope="col">Sifarişin məbləği</th>
                            <th scope="col">Bax / Sil</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach(\Modules\Amoshop\Models\Order::get() as $k=>$order)
                            <tr>
                                <th scope="row">{{ $k+1 }}</th>
                                <td>{{ $order->name }}</td>
                                <td>{{ $order->surname }}</td>
                                <td>₼{{ $order->total }}</td>
                                <td>
                                    <div class="btn-group btn-group-pill">
                                        <a class="btn btn-primary" href="/admin/order_details/{{ $order->id }}" data-bs-original-title="" title=""><i data-feather='eye' height="18"></i></a>
                                        <form method="post" action="{{ route('admin.orders.delete', $order->id) }}">
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
    </div>             
</div>  
@endsection