    <!-- Bootstrap core JavaScript-->
    <script src="{{ url ('backend/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{ url ('backend/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{ url('backend/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{ url('backend/js/sb-admin-2.min.js')}}"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js"></script>

    <script type="text/javascript">
                $(document).ready(()=>{
                    $('#table_rsvp').DataTable({
                    processing : true,
                    serverSide : true,
                    searching : true,
                    paging :true,

                    ajax : {
                        url: "{{ route('rsvp.index')}}",
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
                  
                });

                </script>
    <!-- Page level plugins -->
 

    <!-- Page level custom scripts -->