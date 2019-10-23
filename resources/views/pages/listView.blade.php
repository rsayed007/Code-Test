@extends('layouts.app')

@push('data_table_style')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">
@endpush

@section('content')
<div class='container' >
            <table id="example" class="table table-striped table-bordered" style="width:100%">
                <thead>
                    <tr>
                        <th>Groupe Name</th>
                        <th>Groupe Type</th>
                        <th>Account Name</th>
                        <th>Post Text</th>
                        <th>Time</th>
                    </tr>
                </thead>
                <tbody>
                    
                @foreach ($bufferData as $data)
                    <tr>
                        <td>{{ $date->groupInfo->name }}</td>
                        <td>System Architect</td>
                        <td>Edinburgh</td>
                        <td>{{ $data->post_text}}</td>
                        <td>2011/04/25</td>
                    </tr>
                @endforeach
                    
                </tbody>
                <tfoot>
                    <tr>
                        <th>Groupe Name</th>
                        <th>Groupe Type</th>
                        <th>Account Name</th>
                        <th>Post Text</th>
                        <th>Time</th>
                    </tr>
                </tfoot>
            </table>
</div>


@endsection



@push('data_table_script')

<script >
    $(document).ready(function() {
        $('#example').DataTable();
    } );
</script>
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>

@endpush
