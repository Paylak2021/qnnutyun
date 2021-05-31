@extends("layouts.app")
@section('content')
    <div class="container">
        <h2>Բոլոր Հայտարարությունները</h2>
        <table class="table table-striped">
            <thead>
            <tr>
                <th>Հայտարարություն</th>
            </tr>
            </thead>
            <tbody>
            @foreach($data as $el)
                <tr>
                    <td>{{ $el -> news }} </td>
                </tr>
                <tr>
                    <td>  <a href="{{ route('show-one') }}"><button class="btn btn-warning">Ավելին</button> </a></td>
                </tr>

            @endforeach
            </tbody>

        </table>

    </div>

@endsection
