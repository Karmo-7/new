
@extends('layouts.app')
@section('content')
<div class="container">
     {{-- {{ dd($blogs) }} --}}
    <div class="row">
        <div class="col">
            <div class="jumbotorn">
                <h1 class="display-4">All Blogs</h1>
                <a class="btn btn-success" href="{{route('create')}}">Create Blog</a>
            </div>
        </div>
    </div>
    <div class="row">
        @if($blogs->count() > 0)
        <div class="col">
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">Title</th>
                        <th scope="col">Description</th>
                        <th scope="col">Image</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($blogs as $item)
                    <tr>

                        <td>{{ $item->title }}</td>
                        <td>{{ $item->description }}</td>
                        <td>
                            <img src="{{$item->image}}" alt="{{$item->image}}" class="img-tumbnai" width="100" height="100">
                        </td>

                        <td>
                            <a href="{{route('edit',['id'=>$item->id])}}"><i class=" fa-sharp-duotone fa-2x fa-solid fa-pen-to-square"></i></a>

                           <form action="{{route('delete',['id'=>$item->id])}}" method="POST">
                             @csrf
                             @method('DELETE')
                             <button type="submit" class="text-danger">
                              <i class="fa-sharp-duotone fa-2x fa-solid fa-trash"></i>
                             </button>
                             </form>
                            <a href="{{route('show',['id'=>$item->id])}}"><i class="fa-solid fa-2x fa-eye"></i></i></a>

                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        @else
        <div class="col">
             <div class="alert alert-danger "role="alert">Don't have a blogs
        </div>
        </div>
        @endif
    </div>
</div>
@endsection


