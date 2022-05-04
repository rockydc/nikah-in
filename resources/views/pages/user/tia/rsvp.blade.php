@extends('layouts.user.tia.dashboard')

@section('content')
                <!-- Begin Page Content -->
                <div class="container-fluid mt-5">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Daftar Tamu RSVP</h1>
                        <a href="{{route('tiacetak')}}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
                        <i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
                    </div>



                    <!-- Content Row -->
                    <div class="row">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" width="100%" cellspacing="0" id="table_rsvp">
                                    <thead>
                                        <tr>
                                           
                                            <th>Nama</th>
                                            <th>Ikatan</th>
                                            <th>email</th>
                                            <th>Status</th>
                                            <th>Jmlh_orang</th>
                                            <th>pesan</th>
                                          
                                 
                                        </tr>
                                    </thead>
                                    
   
                                </table>
                            </div>
                        </div>
                
                    </div>



                </div>

                <!-- /.container-fluid -->

                                <!-- /.container-fluid -->

    

@endsection