@extends('admin.layouts.app')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0 text-dark">Judge Edit Page</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Judge</a></li>
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
                            <a href="/admin/judge" class="btn btn-primary">Back</a>
                        </div>    
                    <div class="card-body">
                        <div class="card-body table-responsive p-0">
                            <form method="post" action="/admin/judge/update/{{ $judge-> id}}" enctype="multipart/form-data">
                            <input type="hidden" name="id" value="{{ $judge->id }}"> <br/>
                            {{ csrf_field() }}

                            <div class="form-group">
                                <label>Picture</label>
                                <input type="file" accept="image/*" name="picture" id="file" onchange="loadFile(event)" class="form-control" placeholder="Picture Sponsorship .." value="{{ old('picture') }}">
                                <small>max: 2 mb</small>

                                @if($errors->has('picture'))
                                    <div class="text-danger">
                                        {{ $errors->first('picture')}}
                                    </div>
                                @endif

                            </div>
                            <img id="output" src="{{ $judge->picture }}" width=200>
                            
                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" name="name" class="form-control" placeholder="Name Judge .." value="{{ $judge->name }}">

                                @if($errors->has('name'))
                                    <div class="text-danger">
                                        {{ $errors->first('name')}}
                                    </div>
                                @endif

                            </div>

                            <div class="form-group">
                                <label>Occupation</label>
                                <input type="text" name="occupation" class="form-control" placeholder="Occupation Judge .." value="{{ $judge->occupation }}">

                                @if($errors->has('occupation'))
                                    <div class="text-danger">
                                        {{ $errors->first('occupation')}}
                                    </div>
                                @endif

                            </div>

                            <div class="form-group">
                                <label>Competition</label>
                                <select name="competitionId" id="competitionId" class="form-control">
                                @foreach($competitions as $comp)
                                    <option value="{{ $comp->id }}" {{$judge->competition_id == $comp->id ? 'selected' : ''}}>{{ $comp->title }}</option>
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