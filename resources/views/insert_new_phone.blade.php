
@extends ('bootstrap')

@section('title')
    <div> Insert new phone! </div>
@endsection
@section('content')

    <form>
        <div class="form-group">
            <label for="phoneName">name</label>
            <input type="text" class="form-control" id="\phoneName" aria-describedby="" placeholder="Enter Phone name">
        </div>

        <div class="form-group">
            <label for="description">description</label>
            <textarea type="text" class="form-control" id="description" placeholder="Enter description of phone "></textarea>
        </div>

        <div class="form-group">
            <label for="brand">Brand</label>
            <select type="texterea" class="form-control" id="brand" placeholder=" Select your phone brand">
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
            <input type="number" class="form-control" id="price" placeholder="Enter phone price in daller">
        </div>

        <button type="submit" class="btn btn-primary">Save</button>
    </form>
@endsection
