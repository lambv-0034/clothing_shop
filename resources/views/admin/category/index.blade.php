@extends('layouts.admin')
@section('content')
<section id="content">
<div class="content-wrap">
<div class="container clearfix">
<div class="table-responsive">
<table id="datatable1" class="table table-striped table-bordered" cellspacing="0" width="100%" style="text-align: center">
<thead>
<tr >
<th>Categories</th>
<th>Types</th>
<th>Designs</th>
<th>Tác vụ</th>
</tr>
</thead>
<tbody>
    @foreach($designs as $design)
        <tr>
            <td>{{ $design ->category ->name }}</td>
            <td>{{ $design -> name }}</td>
            <td>{{ $design -> type }}</td>
            <td style="text-align: center">
                <button type="button" class="btn-xs btn-info">Edit</button>
                <button type="button" class="btn-xs btn-danger">Delete</button>
            </td>
        </tr>
    @endforeach
<!-- <tr>
<td>Airi Satou</td>
<td>Accountant</td>
<td>Tokyo</td>
<td style="text-align: center">
    <button type="button" class="btn-xs btn-info">Edit</button>
    <button type="button" class="btn-xs btn-danger">Delete</button>
</td>
</tr> -->
</tbody>
</table>
</div>
</div>
</div>
</section>
<script>

    $(document).ready(function () {
        $('#datatable1').dataTable();
    });
</script>
@endsection