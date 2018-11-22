<h1>
    List of products
</h1>
<div>
    @foreach ($products as $product)
        <a href=" products/{{$product->id}}" >{{$product->name}}</a>

    @endforeach
</div>