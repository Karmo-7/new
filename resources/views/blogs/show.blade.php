{{-- {{-- @extends('layouts.app')

@section('content')
<div class="container ">
  <div class="row">
    <div class="col">
      <div class="jumbotorn">
        <h1 class="display-4"> Blog</h1>
        <a class="btn btn-success" href="{{route('index')}}">All Blogs</a>
      </div>
    </div>
    <div class="row">
        <div class="col"> --}}

            {{-- <form action="{{ route('addcomment',$blog->id)}}" method="POST" enctype="multipart/form-data">
                 @method('POST')
                  @csrf --}}
                  {{-- <div class="form-group">
                    <h1>Title</h1>
                    <p>{{$blog->title}}<p></div>
                    <div class="form-group">
                        <h1>Description</h1>
                        <p>{{$blog->description}}<p>
                    </div>


                        <div class="form-group">
                            <h1>Image</h1>
                            <div>
                            <img src="{{URL::asset($blog->image)}}" class="card-img-top" alt="{{$blog->image}}" style="width:150px;height:150px;">
                            </div> --}}

                            {{-- <label for="exampleFormControlTextarea">Add comment</label><br>
                            <input type="text">
                            <div class="form-group">
                                <button class="btn btn-success" type="submit">AddComment</button>
                            </div>
                        </div> --}}
                        {{-- <form action="{{ route('addcomment',$blog->id)}}" method="POST" enctype="multipart/form-data">
                            @method('POST')
                            @csrf
                            <div class="form-group">
                            <h1>Title</h1>
                           <p>{{$blog->title}}<p></div>
                           <div class="form-group">
                           <h1>Description</h1>
                           <p>{{$blog->description}}<p>
                           </div>

                            <div class="form-group">
                            <h1>Image</h1>
                            <div>
                            <img src="{{URL::asset($blog->image)}}" class="card-img-top" alt="{{$blog->image}}" style="width:150px;height:150px;">
                            </div>
                           </div>
                            <div class="form-group">
                                <label for="exampleFormControlTextarea">Add comment</label><br>
                                <input type="text" name="content">
                                <input type="hidden" name="blog_id" value="{{ $blog->id }}">
                                <div class="form-group">
                                <button class="btn btn-success" type="submit">AddComment</button>
                                </div>
                            </div>
                           <form action="{{route ('showAll',$blog->id)}}">
                            @method('GET')
                            @csrf
                                <input type="hidden" name="blog_id" value="{{ $blog->id }}">
                                <div class="form-group">
                                <button class="btn btn-success" type="submit">Show</button>
                                </div>

                           </form>
                        </form>
                        <br>


        </div>
    </div>

    </div>

    </div>

    </div>

    @endsection --}}






    {{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col">
            <div class="jumbotron">
                <h1 class="display-4">Blog</h1>
                <a class="btn btn-success" href="{{ route('index') }}">All Blogs</a>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col">
            <form action="{{ route('addcomment', $blog->id) }}" method="POST" enctype="multipart/form-data">
                @method('POST')
                @csrf
                <div class="form-group">
                    <h1>Title</h1>
                    <p>{{ $blog->title }}</p>
                </div>
                <div class="form-group">
                    <h1>Description</h1>
                    <p>{{ $blog->description }}</p>
                </div>
                <div class="form-group">
                    <h1>Image</h1>
                    <div>
                        <img src="{{ URL::asset($blog->image) }}" class="card-img-top" alt="{{ $blog->image }}" style="width:150px;height:150px;">
                    </div>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea">Add comment</label><br>
                    <input type="text" name="content">
                    <input type="hidden" name="blog_id" value="{{ $blog->id }}">
                    <div class="form-group">
                        <button class="btn btn-success" type="submit">Add Comment</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="row">
        <div class="col">
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">Comments</th>
                    </tr> --}}
                {{-- </thead> --}}
                {{-- <tbody> --}}
                    {{-- @forelse($comments as $comment) --}}
                    {{-- <tr> --}}
                        {{-- <td>{{ $comment->content }}</td> --}}
                    {{-- </tr>
                    @empty
                    <tr>
                        <td>No comments found.</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div> --}}
{{-- @endsection --}}
{{--

@extends('layouts.app')

@section('content')
<div class="container ">
    <div class="row">
         <div class="col">
            <div class="jumbotorn">
                <h1 class="display-4"> Blog</h1> <a class="btn btn-success" href="{{route('index')}}">All Blogs</a>
             </div>
            </div>
            <div class="row">
             <div class="col">
                <form action="{{ route('addcomment',$blog->id)}}" method="POST" enctype="multipart/form-data">
                     @method('POST')
                      @csrf
                       <div class="form-group">
                         <h1>Title</h1>
                         <p>{{$blog->title}}<p>
                            </div>
                             <div class="form-group">
                                <h1>Description</h1>
                                <p>{{$blog->description}}<p>
                             </div>



                        <div class="form-group">
                        <h1>Image</h1>
                        <div>
                        <img src="{{URL::asset($blog->image)}}" class="card-img-top" alt="{{$blog->image}}" style="width:150px;height:150px;">
                        </div>
                       </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea">Add comment</label><br>
                            <input type="text" name="content">
                            <input type="hidden" name="blog_id" value="{{ $blog->id }}">
                            <div class="form-group">
                            <button class="btn btn-success" type="submit">AddComment</button>
                            </div>
                        </div>
                        <br>
<form action="{{ route ('showAll',$blog->id) }}" method="POST">

    @csrf
    <input type="hidden" name="blog_id" value="{{ $blog->id }}">
    <div class="form-group">
        <button class="btn btn-success" type="submit">Show Comments</button>
    </div>
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Comments</th>
            </tr>
        </thead>
        <tbody>
            @forelse($comments as $comment)
            <tr>
                <td>{{ $comment->content }}</td>
            </tr>
            @empty
            <tr>
                <td>No comments found.</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</form>
                    </form>
                    <br>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}
@extends('layouts.app')

@section('content')
<div class="container ">
    <div class="row">
         <div class="col">
            <div class="jumbotorn">
                <h1 class="display-4"> Blog</h1> <a class="btn btn-success" href="{{route('index')}}">All Blogs</a>
             </div>
            </div>
            <div class="row">
             <div class="col">
                <form action="{{ route('addcomment', $blog->id) }}" method="POST" enctype="multipart/form-data">
                     @method('POST')
                      @csrf
                       <div class="form-group">
                         <h1>Title</h1>
                         <p>{{ $blog->title }}</p>
                            </div>
                             <div class="form-group">
                                <h1>Description</h1>
                                <p>{{ $blog->description }}</p>
                             </div>

                        <div class="form-group">
                        <h1>Image</h1>
                        <div>
                        <img src="{{URL::asset($blog->image)}}" class="card-img-top" alt="{{$blog->image}}" style="width:150px;height:150px;">
                        </div>
                       </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea">Add comment</label><br>
                            <input type="text" name="content">
                            <input type="hidden" name="blog_id" value="{{ $blog->id }}">
                            <div class="form-group">
                            <button class="btn btn-success" type="submit">AddComment</button>
                            </div>
                        </div>
                        <br>

                        <table class="table">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col">Comments</th>
                                </tr>
                            </thead>
                            {{-- <tbody>
                                @forelse($comments as $comment)
                                <tr>
                                    <td>{{ $comment->content }}</td>
                                </tr>
                                @empty
                                <tr>
                                    <td>No comments found.</td>
                                </tr>
                                @endforelse
                            </tbody> --}}
                        </table>
                    </form>
                    <br>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
