@extends('admin.layouts.app')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0 text-dark">Talkshow Create Page</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Talkshow</a></li>
                <li class="breadcrumb-item active">Create </li>
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
                            <a href="/admin/talkshow" class="btn btn-primary">Back</a>
                        </div>    
                    <div class="card-body">
                        <div class="card-body table-responsive p-0">
                            <form method="post" action="/admin/talkshow/store" enctype="multipart/form-data">
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
                            <img id="output" width=200>
                            
                            <div class="form-group">
                                <label>Description</label>
                                
                                <textarea name="description" class="form-control" placeholder="Description competition ..">{{ old('description') }}</textarea>
                                
                                @if($errors->has('description'))
                                    <div class="text-danger">
                                        {{ $errors->first('description')}}
                                    </div>
                                @endif
                            </div>

                            <div class="form-group">
                                <label>Competition</label>
                                <select name="competitionId" id="competitionId" class="form-control">
                                @foreach($competitions as $comp)
                                    <option value="{{ $comp->id }}" {{old('competitionId') == $comp->id ? 'selected' : ''}}>{{ $comp->title }}</option>
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

    <script src="{{ url('AdminLTE/plugins/jquery/jquery.min.js') }}"></script>
    <script type="text/javascript">
        $(document).ready(function() {
          $('.summernote').summernote({
            height: 150, 
          });
        });
    </script>
    <script>
        var loadFile = function(event) {
        	var image = document.getElementById('output');
        	image.src = URL.createObjectURL(event.target.files[0]);
        };
    </script>

@endsection