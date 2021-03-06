<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
    <title>Admin - Dashboard </title>
    

@include('includes.style')

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

    @include('includes.sidebar')

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                @include('includes.navbar')

                @yield('content')

            </div>
            <!-- End of Main Content -->

            @include('includes.footer')

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <form action="{{url('logout')}}" method="POST">
                        @csrf
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <button class="btn btn-primary" type="submit">
                        Logout
                    </Button>
                    </form> 

                </div>
            </div>
        </div>
    </div>

@include('includes.script')
<script type="text/javascript">
                $(document).ready(()=>{
                    $('#table_rsvp').DataTable({
                    processing : true,
                    serverSide : true,
                    searching : true,
                    paging :true,

                    ajax : {
                        url: "{{ route('datarsvp')}}",
                        type:'GET'
                    },
                    columns:[
                        {
                            data:'nama',name:'nama'
                        },
                        {
                            data:'ikatan',name:'ikatan'
                        },
                        {
                            data:'email',name:'email'
                        },
                        {
                            data:'status',name:'status'
                        },
                        {
                            data:'jmlh_orang',name:'jmlh_orang'
                        },
                        {
                            data:'pesan',name:'pesan'
                        },
                       
                    ],
                    
                    order:[[0,'asc']]

                    });
                    console.log(columns)
                  
                });

                </script>

<script type="text/javascript">
                $(document).ready(()=>{
                    $('#table_guest').DataTable({
                    processing : true,
                    serverSide : true,
                    searching : true,
                    paging :true,

                    ajax : {
                        url: "{{ route('datarsvp')}}",
                        type:'GET'
                    },
                    columns:[
                        {
                            data:'nama',name:'nama'
                        },
                        {
                            data:'no_telepon',name:'no_telepon'
                        },
                        {
                            data:'alamat',name:'alamat'
                        },
                        {
                            data:'kerabat',name:'kerabat'
                        },
                        {
                            data:'jmlh_orang',name:'jmlh_orang'
                        },

                       
                    ],
                    order:[[0,'asc']]

                    });
                  
                });

                </script>
                   <script src="{{url('backend/js/chart-pie.js')}}"></script>
</body>

</html>