@foreach($data as $el)
    <div class="container">
        <h2>{{ $data -> news }}</h2>
        <small>{{ $data -> text }} {{$data-> created_at}}</small>

    </div>
@endforeach
