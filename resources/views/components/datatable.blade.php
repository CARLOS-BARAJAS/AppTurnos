
<table id="example1" class="table table-striped" style="width:100%">
    <thead>
        {{ $header }}
    </thead>
    <tbody>
        
        {{ $slot }}
    </tbody>
</table>

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