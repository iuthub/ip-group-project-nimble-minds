@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Task Create</div>
                    <form action="{{route('tasks.update',$task->id)}}" method="POST">
                        {{method_field('PUT')}}
                        @csrf
                        <b>Task Title</b>
                        <input type="text" name="title" class="form-control" value="{{$task['title']}}" required >
                        <br>
                        <table class="table table-striped" style="border-collapse: collapse;">
                            <col width="150">
                            <col width="150">
                            <col width="150">
                            <col width="150">
                            <col width="150">
                            <thead >
                            <tr>
                                <th style="border: 1px solid #dddddd; text-align: left;padding: 8px;">User Name</th>
                                <th style="border: 1px solid #dddddd; text-align: left;padding: 8px;">Completion Time(Days)</th>
                                <th style="border: 1px solid #dddddd; text-align: left;padding: 8px;">Starting Point</th>
                                <th style="border: 1px solid #dddddd; text-align: left;padding: 8px;">Color</th>
                            </tr>
                            </thead>
                        </table>
                        <div style="display:inline-block;">
                            <select name="user_id" style="position: absolute;text-align: center;left:40px;display: inline-block;">
                                @foreach($users as $user)
                                    @if($user['id']==$task['user_id'])
                                    <option  value="{{$user->id}}" selected="selected">{{$user->name}}</option>
                                    @else
                                        <option  value="{{$user->id}}">{{$user->name}}</option>
                                    @endif
                                @endforeach
                                <br>
                            </select>
                            <select name="time_id" style="position: absolute;text-align:left;left:200px;display: inline-block;">
                                @foreach($times as $key=>$time)
                                    @if($task['time']==$time)
                                    <option  value="{{$key}}" selected="selected">{{$time}}</option>
                                    @else
                                        <option  value="{{$key}}">{{$time}}</option>
                                    @endif
                                @endforeach
                            </select>
                            <select name="start_time_id" style="position: absolute;text-align: center;left:370px;display: inline-block;">
                                @foreach($points as $key=>$point)
                                    @if($task['point']!=$point)
                                    <option  value="{{$key}}">{{$point}}</option>
                                    @else
                                        <option  value="{{$key}}" selected="selected">{{$point}}</option>
                                    @endif
                                @endforeach
                            </select>


                            <select name="color_id" style="position: absolute;text-align: center;left:600px;display: inline-block;">
                                @foreach($colors as $key=>$color)
                                    @if($task['color']!=$color)
                                    <option  value="{{$key}}" style="background-color:{{$color}};color:{{$color}};">Color</option>
                                    @else
                                        <option  value="{{$key}}" selected="selected" style="background-color:{{$color}};color:{{$color}};">Color</option>
                                    @endif
                                @endforeach
                            </select>
                            <br>
                            <br>
                            <div><b>Completed</b>
                                @if($task['status']==1)


                                    <input type="checkbox" id="123" name="status" value="1" onclick="func();" checked/>
                                    <input type="hidden" id="100" name="status" value="0" disabled/>


                                    @else
                                    <input type="checkbox" name="status" value="1">
                                    @endif
                                </div>
                            <br>

                        </div>
                        <br>
                        <script>

                            function func(){
                                if(document.getElementById("123").checked==false)
                                {

                                    document.getElementById("100").disabled=false;
                                }
                                else {
                                    document.getElementById("100").disabled=true;
                                }
                            }
                        </script>
                        <input type="submit" value="Save">
                    </form>




                </div>
            </div>
        </div>
    </div>

@endsection
