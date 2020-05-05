@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Tasks</div>
                    <a href="{{route('tasks.create')}}" class='btn btn-info btn-primary'>Add new task</a>


                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>Task ID</th>
                            <th>Task Title</th>
                            <th>User Name</th>
                            <th>Starting Point</th>
                            <th style="width:100px">Completion Time(Days) </th>
                            <th>Color</th>
                            <th>Status</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($tasks as $task)
                            <tr>
                                <td>{{ $task['id'] }}</td>
                                <td><a href="{{route('tasks.show',$task->id)}}">{{ $task['title'] }}</a></td>
                                @foreach($users as $user)
                                    @if($user['id']==$task['user_id'])
                                        <td>{{$user->name}}</td>
                                    @endif
                                @endforeach
                                <td>{{ $points[$task['start_time_id']]}}</td>
                                <td>{{ $times[$task['time_id']]}}</td>
                                <td style="background-color:{{ $colors[$task['color_id']]}}">Color</td>
                                <td>{{$statuses[$task['status']]}}</td>

                            </tr>


                        @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
