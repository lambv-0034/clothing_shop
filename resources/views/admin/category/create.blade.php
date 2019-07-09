@extends('layouts.admin')
@section('content')
<!-- <body style="text-align: center">
    <form method="POST" action="#">
        @csrf
        <select name="category_id" id="category">
            @foreach($listCategories as $id => $listCategory)
            <option value="{{ $id }}">
                {{ $listCategory}}
            </option>
            @endforeach
        </select>
        <label for="name" class="col-sm-3 col-form-label">Name</label>
        <div class="col-sm-9">
            <input name="name" type="text" class="form-control" id="name_id" placeholder="name">
        </div>
        <label for="type" class="col-sm-3 col-form-label">Type</label>
        <div class="col-sm-9">
            <input name="type" type="text" class="form-control" id="type_id" placeholder="type">
        </div>
        <div class="offset-sm-3 col-sm-9">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</body> -->
@endsection