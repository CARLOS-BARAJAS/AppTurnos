@section('js')
    <script>
        $(document).ready(function() {
            $("#example1").DataTable({
                "responsive": true,
                "autoWidth": false,
            });
        });
    </script>

@stop