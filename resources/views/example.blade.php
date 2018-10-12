
<p>
<h2>
    Welcome To Examples Page
</h2>
</P>
<p>

    @foreach($names as $man)
      <div>
        name  : {{$man['name'] }}  {{$man['family']}} <br>
          this is
      </div>

    @endforeach

</p>