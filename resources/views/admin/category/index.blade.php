
@extends('layouts.admin')
@section('content')
<div class="table-responsive" style="margin-top: -50px;">
  <button type ="button" class="btn btn-success" data-toggle="modal" data-target=".bs-example-modal-lg">+ Add new</button>
  <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg" style="text-transform: uppercase">
      <div class="modal-body">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title" id="myModalLabel">Add new category</h4>
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          </div>
          <div class="modal-body">
            <form action= "{{ route('category.store')}}" method="post"> 
              @csrf
              <div class="form-group">
                <label for="category" class="bmd-label-floating">Category</label>
                <select name="category_id" id="category" class="form-control selectpicker" data-style="btn btn-link">
                @foreach($listCategories as $id => $listCategory)
                <option value="{{ $id }}">{{ $listCategory}}</option>
                @endforeach
                </select>
              </div>
              <div class="form-group">
                <label for="category" class="bmd-label-floating">Types</label>
                <select name="type_id" id="type" class="form-control selectpicker" data-style="btn btn-link">
                @foreach($listTypes as $id => $listType)
                <option>{{ $listType}}</option>
                @endforeach
                </select>
              </div>
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="material-icons">create</i></span>
                </div>
                <input type="text" class="form-control" name="design" placeholder="With design for type and category">
              </div>
              <button type="submit" class="btn btn-primary" id="addbutton">Add new category</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <table id="datatable1" class="table table-striped table-bordered" cellspacing="0" width="100%" style="text-align: center">
    <thead>
      <tr >
        <th>ID</th>
        <th>Categories</th>
        <th>Types</th>
        <th>Designs</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach($designs as $design)
        <tr>
          <td>{{ $design ->id }}</td>
          <td>{{ $design ->category ->name }}</td>
          <td>{{ $design -> name }}</td>
          <td>{{ $design -> type }}</td>
          <td style="text-align: center">
              <button  type="button" class="btn btn-info btn-sm" data-target="#exampleModal" data-toggle="modal">Edit</button>
              <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Edit category</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      ...
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                      <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                  </div>
                </div>
              </div>
            <form style="display: inline-block;" action="{{ route('category.destroy',$design->id)}}" method="post">
              @csrf
              <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button> </form>
          </td>
        </tr>
      @endforeach
    </tbody>
  </table>
</div>
<script>
    $(document).ready(function () {
        $('#datatable1').dataTable();
    });
    $('')
</script>
<script type="">
  $(document).ready(function () { 
    $('#category').change(function () {
      var category_id = $('#category').val();
      console.log(category_id);
      $.ajax({
        method : 'GET',
        url: '{{ route('fetch.typebycategory') }}',
        dataType: 'JSON',
        data: {
          category_id: category_id,
        },
        success: function (response) {
          console.log(response);
          $('#type').html(response.data);
        },
        error: function (error) {
          //console.log(error);
        }
      });
    });
  });  
</script>
@endsection