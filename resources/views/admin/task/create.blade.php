@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Task Create</div>
                    <form method="POST" action="{{route('tasks.store')}}">
                        @csrf
                       <b>Task Title</b>
                        <input type="text" name="title" class="form-control" required>

                        <br>
                        <table class="table table-striped" style="border-collapse: collapse;">
                            <col width="150">
                            <col width="150">
                            <col width="150">
                            <col width="150">
                            <thead >
                            <tr>
                                <th style="border: 1px solid #dddddd; text-align: left;padding: 8px;">User Name</th>
                                <th style="border: 1px solid #dddddd; text-align: left;padding: 8px;">Completion Type(Days)</th>
                                <th style="border: 1px solid #dddddd; text-align: left;padding: 8px;">Starting Point</th>
                                <th style="border: 1px solid #dddddd; text-align: left;padding: 8px;">Color</th>

                            </tr>
                            </thead>
                        </table>
                        <div style="display:inline-block;">
                        <select name="user_id" style="position: absolute;text-align: center;left:40px;display: inline-block;">
                            @foreach($users as $user)
                            <option  value="{{$user->id}}">{{$user->name}}</option>
                            @endforeach
                                <br>
                        </select>
                        <select name="time_id" style="position: absolute;text-align:left;left:240px;display: inline-block;">
                            @foreach($times as $key=>$time)
                            <option  value="{{$key}}">{{$time}}</option>
                                @endforeach
                        </select>
                        <select name="start_time_id" style="position: absolute;text-align: center;left:370px;display: inline-block;">
                            @foreach($points as $key=>$point)
                            <option  value="{{$key}}">{{$point}}</option>
                                @endforeach
                        </select>


                        <select name="color_id" style="position: absolute;text-align: center;left:600px;display: inline-block;">
                            @foreach($colors as $key=>$color)
                                <option  value="{{$key}}" style="background-color:{{$color}};color:{{$color}};">Color</option>
                            @endforeach
                        </select>
                            <br>
                            <br>
                    </div>
                        <br>

                        <input type="submit" value="Save">
                    </form>




                </div>
            </div>
        </div>
    </div>
@endsection
