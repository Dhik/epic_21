@extends('admin.layouts.app')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0 text-dark">Sponsorship Edit Page</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Sponsorship</a></li>
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
                            <a href="/admin/sponsorship" class="btn btn-primary">Back</a>
                        </div>    
                    <div class="card-body">
                        <div class="card-body table-responsive p-0">
                            <form method="post" action="/admin/sponsorship/update/{{ $sponsorship-> id}}" enctype="multipart/form-data">
                                <input type="hidden" name="id" value="{{ $sponsorship->id }}"> <br/>
                            {{ csrf_field() }}
                            
                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" name="name" class="form-control" placeholder="Name Sponsorship .." value="{{ $sponsorship->name }}">

                                @if($errors->has('name'))
                                    <div class="text-danger">
                                        {{ $errors->first('name')}}
                                    </div>
                                @endif

                            </div>

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
                            <img id="output" src="{{ $sponsorship->picture }}" width=200>

                            <div class="form-group">
                                <label>Link</label>
                                <input type="text" name="link" class="form-control" placeholder="Link Sponsorship .." value="{{ $sponsorship->link }}">

                                @if($errors->has('link'))
                                    <div class="text-danger">
                                        {{ $errors->first('link')}}
                                    </div>
                                @endif

                            </div>

                            <div class="form-group">
                                <label>Type</label>
                                <select name="type" id="type" class="form-control">
                                  <option value="SMALL" {{$sponsorship->type == 'SMALL' ? 'selected' : ''}}>SMALL</option>
                                  <option value="MEDIUM" {{$sponsorship->type == 'MEDIUM' ? 'selected' : ''}}>MEDIUM</option>
                                  <option value="LARGE" {{$sponsorship->type == 'LARGE' ? 'selected' : ''}}>LARGE</option>
                                </select>

                                @if($errors->has('type'))
                                    <div class="text-danger">
                                        {{ $errors->first('type')}}
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