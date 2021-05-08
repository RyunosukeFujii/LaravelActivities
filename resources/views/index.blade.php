@extends('layouts.app')

@section('content')
    
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">            
                    <div class="container">

                    <table class="table">
                        <thead>
                            <tr>
                                <th> Title </th>
                                <th> Description </th>
                                <th> Action </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($posts as $post)
                            <tr>
                                <td> {{ $post->title }} </td>
                                <td> {{ $post->description }} </td>
                                <td> <a href="/posts/{{$post->id}}" class="btn btn-primary"> View Post</a> </td>
                            </tr>
                            @endforeach
                        </tbody>

            </div>
        </div>
    </div>
</div>
    
@endsection