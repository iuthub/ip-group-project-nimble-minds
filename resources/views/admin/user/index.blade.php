@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Users</div>
                    <a href="{{route('users.create')}}" class='btn btn-info btn-primary'>Add new user</a>


                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Action</th>

                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($users as $user)
                            <tr>
                                <td>{{ $user['id'] }}</td>
                                <td>{{ $user['name'] }}</td>

                                <td>
                                    <div>
                                        <a href="{{route('users.edit',$user['id'])}}" class='btn btn-sm btn-primary'>Edit</a>

                                        <form method="POST" action="{{route('users.destroy',$user->id)}}" style="display:inline-block;">
                                            @csrf
                                            {{method_field('DELETE')}}
                                            <input type="submit" value="Delete"
                                                   } onclick="return confirm('Are you sure?')"
                                                   class="btn btn-sm btn-danger">

                                        </form>
                                    </div>

                                </td>


                            </tr>


                        @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
