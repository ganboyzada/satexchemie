@extends('admin.layouts.master')
@section('main')
<div class="container-fluid">         
    <div class="row pt-4">
        <div class="col-6">
            <h3>Sifarişlər</h3>
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
                    <label class="form-control" for="">Məhsullar
                        {{--@foreach($order->products as $key=>$product)
                            <img height="100" src="{{asset(\App\Models\Product::find($product)->img)}}" alt=""><br>
                        @endforeach--}}
                    </label>
                    <label class="form-control" for="">Ad : {{$order->name}}</label>
                    <label class="form-control" for="">Soyad : {{$order->name}}</label>
                    <label class="form-control" for="">E-poçt : {{$order->email}}</label>
                    <label class="form-control" for="">Telefon : {{$order->phone}}</label>
                    <label class="form-control" for="">Ünvan : {{$order->address}}</label>
                    <label class="form-control" for="">Ümumi məbləğ : ₼{{$order->total - $order->discount}}</label>
                    <label class="form-control" for="">Ödəniş üsulu : @if($order->type == 'cash') Qapıda ödəmə @else Onlayn ödəniş @endif</label>
                    <form method="post" action="{{ route('admin.orders.update', $order->id) }}">
                        @csrf
                        <select class="form-control" name="status">
                            <option value="1" @if($order->status == 1) selected @endif>Təsdiq gözlənilir</option>
                            <option value="2" @if($order->status == 2) selected @endif>Təsdiqləndi (Çatdırılır)</option>
                            <option value="3" @if($order->status == 3) selected @endif>Çatdırıldı</option>
                        </select><br>
                        <div class="text-center">
                            <button class="btn btn-primary" onclick="$('.store-form').submit()" data-bs-original-title="" title="">Yadda saxla</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>             
</div>  
@endsection