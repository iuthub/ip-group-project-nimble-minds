@extends('layouts.app')

@section('content')
    <div>
        <div>
            <div class="container2">
                <div class="card">
                    <div class="card-header">Weekly Plannings</div>
                    <table class="table table-striped" style="border-collapse: collapse;">
                        <col width="12.5%">
                        <col width="12.5%">
                        <col width="12.5%">
                        <col width="12.5%">
                        <col width="12.5%">
                        <col width="12.5%">
                        <col width="12.5%">
                        <col width="12.5%">
                        <thead >
                        <tr>

                            <th style="border: 1px solid #dddddd; text-align: center;padding: 8px;">User name</th>
                            <th style="border: 1px solid #dddddd; text-align: center;padding: 8px;">Saturday</th>
                            <th style="border: 1px solid #dddddd; text-align: center;padding: 8px;">Sunday</th>
                            <th style="border: 1px solid #dddddd; text-align: center;padding: 8px;">Monday</th>
                            <th style="border: 1px solid #dddddd; text-align: center;padding: 8px;">Tuesday</th>
                            <th style="border: 1px solid #dddddd; text-align: center;padding: 8px;">Wednesday</th>
                            <th style="border: 1px solid #dddddd; text-align: center;padding: 8px;">Thursday</th>
                            <th style="border: 1px solid #dddddd; text-align: center;padding: 8px;">Friday</th>


                        </tr>
                        </thead>
                    </table>
                    <div style="width:1px; background-color:#000; position:absolute; top:50px;bottom:0; left:12.5%;">&nbsp;</div>
                    <div style="width:1px; background-color:#000; position:absolute; top:50px;bottom:0; left:25%;">&nbsp;</div>
                    <div style="width:1px; background-color:#000; position:absolute; top:50px;bottom:0; left:37.5%;">&nbsp;</div>
                    <div style="width:1px; background-color:#000; position:absolute; top:50px;bottom:0; left:50%;">&nbsp;</div>
                    <div style="width:1px; background-color:#000; position:absolute; top:50px;bottom:0; left:62.5%;">&nbsp;</div>
                    <div style="width:1px; background-color:#000; position:absolute; top:50px;bottom:0; left:75%;">&nbsp;</div>
                    <div style="width:1px; background-color:#000; position:absolute; top:50px;bottom:0; left:87.5%;">&nbsp;</div>
                    <div style="width:1px; background-color:#000; position:absolute; top:50px;bottom:0; left:100%;">&nbsp;</div>
                            @foreach($tasks as $task)
                    @endforeach
                             @foreach($users as $user)
                            <div>
                            <div style="width:12.5%;position: relative; display: inline-block;margin-top: 5px;margin-bottom: 5px;font-weight: bold;text-align: center;">
                                <a href="/add/{{$user['id']}}">{{$user->name}}</a></div>

                            @foreach($tasks as $task)
                                @if($user['id']==$task['user_id'])
                                    @if($task['status']==1)
                                            <a href="{{route('tasks.show',$task->id)}}"><div  title="{{$task['title']}}" style="overflow:hidden;text-overflow:ellipsis;letter-spacing: .00625em;font-weight: 400;font-size: 1rem;font-family: Roboto,Arial,sans-serif;text-align:center;background:repeating-linear-gradient(45deg,{{$colors[$task->color_id]}},{{$colors[$task->color_id]}} 10px,#e8eaed 10px,#e8eaed 20px); width:{{$times[$task->time_id]*12.5}}%;position:absolute; left:{{$task->start_time_id * 6.25+12.5}}%;display: inline-block;height: 25px;margin-top: 5px;margin-bottom: 5px; color:#202138;"><del>{{$task['title']}}</del></div></a>
                                        @else
                                       <a href="{{route('tasks.edit',$task->id)}}"><div title="{{$task['title']}}" style="overflow:hidden; text-overflow:ellipsis;letter-spacing: .00625em;font-weight: 400;font-size: 1rem;font-family: Roboto,Arial,sans-serif;background:{{$colors[$task->color_id]}}; width:{{$times[$task->time_id]*12.5}}%;position:absolute; left:{{$task->start_time_id * 6.25+12.5}}%;display: inline-block;height: 25px;margin-top: 5px;margin-bottom: 5px;text-align:center;color:#202138;">{{$task['title']}}</div></a>
                                    @endif

                                    @endif
                            @endforeach
                          @endforeach
                        </div>
                </div>
            </div>
        </div>
    </div>
@endsection
