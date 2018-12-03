@extends("bootstrap")

@section('title')
<div> Edit phone! </div>
@endsection
@section('content')

    <form method="post" action="/edit">
        {{csrf_field() }}
        <div class="form-group">
            <label for="phoneName">id</label>
            <input type="number" name="id" class="form-control" id="phoneId ">
        </div>
        <div class="form-group">
            <label for="phoneName">name</label>
            <input type="text" name="name" class="form-control" id="phoneName ">
        </div>

        <div class="form-group">
            <label for="description">description</label>
            <textarea type="text" name="description" class="form-control" id="description" placeholder="Enter description of phone "></textarea>
        </div>

        <div class="form-group">
            <label for="brand">Brand</label>
            <select type="texterea" name="brand" class="form-control" id="brand" >
                <option>Samsung</option>
                <option>Apple</option>
                <option>Huawei</option>
                <option>LG</option>
                <option>Sony</option>
                <option>other</option>
            </select>
        </div>

        <div class="form-group">
            <label for="price">Price(daller)</label>
            <input type="number" name="price" class="form-control" id="price" placeholder="Enter phone price in daller">
        </div>

        <button type="submit" class="btn btn-primary">Save</button>
    </form>
@endsection