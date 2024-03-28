@extends('dashboard')

@section('content')


<div class="container">
        <div class="card">
            <div class="card-body">
                    <table class="table table-bordered">
            
                        <thead>
                            <tr>
                                <th>STT</th>
                                <th>Name</th>
                                <th>Email</th>
                                
                            </tr>
                        </thead>
            
                        <tbody>
                        @foreach($users as $item)
                      
                            <tr>
                                
                                <td>{{ $item->id }}</td>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->email }}</td>
                            <td>
                                <form action=" {{ route('users.delete',$item)}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit">Delete</button>
                                </form>
                            </td>
                            <td>
                            <form action="{{ route('users.update', $item) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <input type="text" name="name" value="{{ $item->name }}">
                                <input type="email" name="email" value="{{ $item->email }}">
                            
                                <button type="submit" class="btn btn-primary">Update</button>
                            </form>
                            </td>
                                
                            </tr>
                            
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        
        </div>
        @endsection