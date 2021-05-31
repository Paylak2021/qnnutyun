@extends('layouts.app')
@section('title')
    Նոր հայտարարություն
@endsection
@section('content')
    <div class="container">
        <div class="row " style="display: flex;">
            <div class="col-sm-8">
                <h2>Նոր հայտարարություն</h2>
            </div>
            <div class="col-sm-8">
                <form action="{{route('news-form')}}" method="post">
                    @csrf
                    <div class="form-group">
                        <br>
                        <br>
                        <input type="text" class="form-control" id="exampleInputfullname" aria-describedby="NameHelp" placeholder="Ուղարկել Հայտարարության անունը" name="news">
                        <br>
                        <input type="text" class="form-control" id="exampleInputfullname" aria-describedby="NameHelp" placeholder="Ուղարկել Հայտարարություն" name="text">
                    </div>
                    <br>
                    <button type="submit" class="btn btn-primary">Սեղմել</button>
                </form>
            </div>
        </div>
    </div>

@endsection
