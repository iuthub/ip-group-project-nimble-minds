@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Adverts</div>
                    <form method="POST" action="{{route('users.update',$user->id)}}">
                        {{method_field('PUT')}}
                        @csrf
                        Name
                        <input type="text" name="name" value="{{$user->name}}" class="form-control"/>
                        <br>
                        <input type="submit" value="Save">
                    </form>



                </div>
            </div>
        </div>
    </div>
@endsection
