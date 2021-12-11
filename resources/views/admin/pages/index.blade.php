@extends('admin.layouts.master')

@section('main')
<div class="container-fluid">        
                            <div class="page-title">
                            <div class="row">
                                <div class="col-6">
                                <h3>Ümumi baxış</h3>
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
                            </div>
                        </div>
                        <!-- Container-fluid starts-->
                        <div class="container-fluid">
                            <div class="row second-chart-list third-news-update">
                            @include('admin.components.greeting')
                            <div class="col-xl-3 col-md-6 pb-4">
                                <div class="row h-100">
                                    <div class="col-12">
                                        @include('admin.components.clock')
                                    </div>
                                    {{--
                                    <div class="col-12">
                                        <div class="card o-hidden mb-0 h-100">
                                        <div class="bg-primary b-r-4 card-body">
                                            <div class="media static-top-widget">
                                            <div class="align-self-center text-center"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-database"><ellipse cx="12" cy="5" rx="9" ry="3"></ellipse><path d="M21 12c0 1.66-4 3-9 3s-9-1.34-9-3"></path><path d="M3 5v14c0 1.66 4 3 9 3s9-1.34 9-3V5"></path></svg></div>
                                            <div class="media-body"><span class="m-0">Earnings</span>
                                                <h4 class="mb-0 counter">6659</h4><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-database icon-bg"><ellipse cx="12" cy="5" rx="9" ry="3"></ellipse><path d="M21 12c0 1.66-4 3-9 3s-9-1.34-9-3"></path><path d="M3 5v14c0 1.66 4 3 9 3s9-1.34 9-3V5"></path></svg>
                                            </div>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                    --}}
                                </div>
                            </div>
                            @include('admin.components.calendar')

                            <div class="col-xl-12 col-lg-12 xl-100 chart_data_left box-col-12">
                                <div class="card">
                                <div class="card-body p-0">
                                    <div class="row m-0 chart-main">
                                    <div class="col-xl-3 col-md-6 col-sm-6 p-0 box-col-6">
                                        <div class="media align-items-center">
                                        <div class="hospital-small-chart">
                                            <div class="small-bar">
                                            <div class="small-chart flot-chart-container"></div>
                                            </div>
                                        </div>
                                        <div class="media-body">
                                            <div class="right-chart-content">
                                            <h4>{{ \App\Models\Navigation::where('is_categ', true)->count() }}</h4><span>Kateqoriya </span>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-md-6 col-sm-6 p-0 box-col-6">
                                        <div class="media align-items-center">
                                        <div class="hospital-small-chart">
                                            <div class="small-bar">
                                            <div class="small-chart1 flot-chart-container"></div>
                                            </div>
                                        </div>
                                        <div class="media-body">
                                            <div class="right-chart-content">
                                            <h4>{{ \App\Models\Project::count() }}</h4><span>Məhsul\Layihə</span>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-md-6 col-sm-6 p-0 box-col-6">
                                        <div class="media align-items-center">
                                        <div class="hospital-small-chart">
                                            <div class="small-bar">
                                            <div class="small-chart2 flot-chart-container"></div>
                                            </div>
                                        </div>
                                        <div class="media-body">
                                            <div class="right-chart-content">
                                            <h4>{{ \App\Models\Service::count() }}</h4><span>Xidmət</span>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-md-6 col-sm-6 p-0 box-col-6">
                                        <div class="media border-none align-items-center">
                                        <div class="hospital-small-chart">
                                            <div class="small-bar">
                                            <div class="small-chart3 flot-chart-container"></div>
                                            </div>
                                        </div>
                                        <div class="media-body">
                                            <div class="right-chart-content">
                                            <h4>{{ intval(\App\Models\Visitor::count()/2) }}</h4><span>Sayt ziyarətləri</span>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                </div>
                            </div>
                            
                            
                            </div>
                        </div>
                        <!-- Container-fluid Ends-->
        
@endsection
    