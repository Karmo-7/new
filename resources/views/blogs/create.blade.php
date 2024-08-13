@extends('layouts.app')

@section('content')
<div class="container ">
  <div class="row">
    <div class="col">
      <div class="jumbotorn">
        <h1 class="display-4">Create Blog</h1>
        <a class="btn btn-success" href="{{route('index')}}">All Blogs</a>
      </div>
    </div>
    <div class="row">

        @if (count($errors)>0)
        <ul>
            @foreach ($errors->all() as $item)
            <li>
                {{ $item }}
            </li>

            @endforeach
        </ul>
        @endif


        <div class="col">

            <form action="{{route('store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" name="title" class="form-control" >
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea">Description</label>
                    <textarea class="form-control" name="description" rows="3"></textarea>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea">Image</label>
                    <input type="file" name="image" class="form-control" >
                </div><br>
                <div class="form-group">
                    <button class="btn btn-danger" type="submit">save</button>
                </div>

            </form>
    </div>
</div>

  </div>
</div>
@endsection


