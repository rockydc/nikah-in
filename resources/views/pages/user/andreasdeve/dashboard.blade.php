@extends('layouts.user.adhigita.dashboard')

@section('content')
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Dashboard - Nikah</h1>
                        <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->
                    </div>



                    <!-- Content Row -->
                    <div class="row">
                        <div class="col col-lg-6 col-md-6 col-sm-12">
                        <div class="card shadow mb-4">
                            <div class="card-header d-flex justify-content-between align-items-center">
                                <h6 class="text-primary font-weight-bold m-0">Komentar Terbaru</h6>
                                <div class="dropdown no-arrow">
                                <!-- <button class="btn btn-link btn-sm dropdown-toggle" data-toggle="dropdown" aria-expanded="false" type="button"><i class="fas fa-ellipsis-v text-gray-400"></i></button> -->
                                    <div class="dropdown-menu shadow dropdown-menu-right animated--fade-in">
                                        <p class="text-center dropdown-header">Menu</p><a class="dropdown-item" href="#">Lihat Semua</a>
                                        <!-- <a class="dropdown-item" href="#"> Another action</a> -->
                                        <!-- <div class="dropdown-divider"></div><a class="dropdown-item" href="#"> Something else here</a> -->
                                    </div>
                                </div>
                            </div>
                            @foreach($items as $item)
                            <div class="d-flex pt-3 pb-3 pl-3 pr-3">
                            <img src="{{url('template/jasmine/assets/img/profil_ic.svg')}}" width="100" height="100">
                            <div class="ml-4 pt-2">
                                <p style="font-size:18px;font-weight:800;color:black;">{{$item->nama}}</p>
                                <p>{{$item->pesan}}</p>
                                <p style="font-size:12px;">{{$item->updated_at}}</p>
                            </div>
                            </div>

  
                            @endforeach
           

                            <div class="col d-flex align-items-center justify-content-center mb-4"><a style="color:black;" href="{{route('ferryrsvp')}}">Lihat Semua</a></div>

                        </div>
                        </div>
                        <div class="col col-lg-6 col-md-6 col-sm-12">
                        <div class="card shadow mb-4">
                            <div class="card-header d-flex justify-content-between align-items-center">
                                <h6 class="text-primary font-weight-bold m-0">Kehadiran</h6>
                                <div class="dropdown no-arrow">
                                <!-- <button class="btn btn-link btn-sm dropdown-toggle" data-toggle="dropdown" aria-expanded="false" type="button"><i class="fas fa-ellipsis-v text-gray-400"></i></button> -->
                                    <div class="dropdown-menu shadow dropdown-menu-right animated--fade-in">
                                        <p class="text-center dropdown-header">Menu</p><a class="dropdown-item" href="#">Lihat Semua</a>
                                        <!-- <a class="dropdown-item" href="#"> Another action</a> -->
                                        <!-- <div class="dropdown-divider"></div><a class="dropdown-item" href="#"> Something else here</a> -->
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="chart-area"><canvas id="myPieChart" height="320" style="display: block; width: 447px; height: 320px;" width="447"></canvas></div>
                        
                            </div>
                            </div>
                        </div>
                        </div>

                
                    </div>


@endsection