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
    <script>
            $(document).ready(function () {
                $(".tomboledit").on("click", function(){
                let id = $(this).data('target-id');
                let nama = $(this).data('nama');
                let deskripsi= $(this).data('caption');
                let views  = $(this).data('views');
                $(".modal-body #id_desain").val(id);
                $(".modal-body #namadesain").val(nama);
                $(".modal-body #deskripsi").val(deskripsi);
                $(".modal-body #jml_views").val(views);
                console.log(views)
});
            });

</script>