@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Task Show</div>

                        @csrf
                    <div class="card" style="text-align: center;"><h3><b>Title:{{$task->title}}</b></h3></div>

                        <table class="table table-striped" style="border-collapse: collapse;">
                            <thead >
                            <tr>
                                <th style="border: 1px solid #dddddd; text-align: left;padding: 8px;">User Name</th>
                                <th style="border: 1px solid #dddddd; text-align: left;padding: 8px;">Starting Point</th>
                                <th style="border: 1px solid #dddddd; text-align: left;padding: 8px;">Completion Time(Days)</th>
                                <th style="border: 1px solid #dddddd; text-align: left;padding: 8px;">Color</th>
                                <th style="border: 1px solid #dddddd; text-align: left;padding: 8px;">Status</th>
                                <th style="border: 1px solid #dddddd; text-align: left;padding: 8px;">Actions</th>

                            </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>{{$task['user_name']}}</td>
                                    <td>{{$task['point']}}</td>
                                    <td>{{$task['time']}}</td>
                                    <td style="background: {{$task['color']}};color:{{$task['color']}};">Color</td>
                                    <td>{{$statuses[$task['status']]}}</td>
                                    <td>
                                        <div>
                                            <a href="{{route('tasks.edit',$task['id'])}}" class='btn btn-sm btn-primary'>Edit</a>

                                            <form method="POST" action="{{route('tasks.destroy',$task->id)}}" style="display:inline-block;">
                                                @csrf
                                                {{method_field('DELETE')}}
                                                <input type="submit" value="Delete"
                                                       } onclick="return confirm('Are you sure?')"
                                                       class="btn btn-sm btn-danger">

                                            </form>
                                        </div>

                                    </td>

                                </tr>
                            </tbody>
                        </table>





                </div>
            </div>
        </div>
    </div>
@endsection
