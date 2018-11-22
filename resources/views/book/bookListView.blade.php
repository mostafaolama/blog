<h1>
    List of Books
</h1>
<div>
    @foreach($books as $book)
    <div>
        <p>
            <a href="/booklist/{{$book->id}} "> {{$book->name}} </a>
        </p>
    </div>
    @endforeach
</div>