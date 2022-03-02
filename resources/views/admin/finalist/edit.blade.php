@extends('admin.layouts.app')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0 text-dark">Finalist Edit Page</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Finalist</a></li>
                <li class="breadcrumb-item active">Edit </li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <a href="/admin/finalist" class="btn btn-primary">Back</a>
                        </div>    
                    <div class="card-body">
                        <div class="card-body table-responsive p-0">
                            <form method="post" action="/admin/finalist/update/{{ $finalist-> id}}" enctype="multipart/form-data">
                            <input type="hidden" name="id" value="{{ $finalist->id }}"> <br/>
                            {{ csrf_field() }}

                            <div class="form-group">
                                <label>Title</label>
                                <input type="text" name="title" class="form-control" placeholder="Title .." value="{{ $finalist->title }}">

                                @if($errors->has('title'))
                                    <div class="text-danger">
                                        {{ $errors->first('title')}}
                                    </div>
                                @endif

                            </div>

                            <div class="form-group">
                                <label>Subtitle / Name</label>
                                <input type="text" name="subtitle" class="form-control" placeholder="Subtitle or Name .." value="{{ $finalist->subtitle }}">

                                @if($errors->has('subtitle'))
                                    <div class="text-danger">
                                        {{ $errors->first('subtitle')}}
                                    </div>
                                @endif

                            </div>

                            <div class="form-group">
                                <label>Line ID</label>
                                <input type="text" name="line_id" class="form-control" placeholder="Line ID .." value="{{ $finalist->line_id }}">

                                @if($errors->has('line_id'))
                                    <div class="text-danger">
                                        {{ $errors->first('line_id')}}
                                    </div>
                                @endif

                            </div>

                            <div class="form-group">
                                <label>Email</label>
                                <input type="text" name="email" class="form-control" placeholder="Email .." value="{{ $finalist->email }}">

                                @if($errors->has('email'))
                                    <div class="text-danger">
                                        {{ $errors->first('email')}}
                                    </div>
                                @endif

                            </div>

                            <div class="form-group">
                                <label>Competition</label>
                                <select name="competitionId" id="competitionId" class="form-control">
                                @foreach($competitions as $comp)
                                    <option value="{{ $comp->id }}" {{$finalist->competition_id == $comp->id ? 'selected' : ''}}>{{ $comp->title }}</option>
                                @endforeach
                                </select>

                                @if($errors->has('competitionId'))
                                    <div class="text-danger">
                                        {{ $errors->first('competitionId')}}
                                    </div>
                                @endif

                            </div>

                            <div class="form-group">
                                <input type="submit" class="btn btn-success" value="save">
                            </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        var loadFile = function(event) {
        	var image = document.getElementById('output');
        	image.src = URL.createObjectURL(event.target.files[0]);
        };
    </script>

@endsection