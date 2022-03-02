@extends('admin.layouts.app')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0 text-dark">Competition Edit Page</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Competition</a></li>
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
                            <a href="/admin/competition" class="btn btn-primary">Back</a>
                        </div>    
                    <div class="card-body">
                        <div class="card-body table-responsive p-0">
                            <form method="post" action="/admin/competition/update/{{ $competition-> id}}" enctype="multipart/form-data">
                                <input type="hidden" name="id" value="{{ $competition->id }}"> <br/>
                            {{ csrf_field() }}

                            <div class="form-group">
                                <label>Picture</label>
                                <input type="file" accept="image/*" name="picture" id="file" onchange="loadFile(event)" class="form-control" placeholder="Image competition .." value="{{ old('image') }}">
                                <small>max: 2 mb</small>

                                @if($errors->has('picture'))
                                    <div class="text-danger">
                                        {{ $errors->first('picture')}}
                                    </div>
                                @endif

                            </div>
                            <img id="output" src="{{ $competition->picture }}" width=200>

                            <div class="form-group">
                                <label>Title</label>
                                <input type="text" name="title" class="form-control" placeholder="Title competition .." value="{{ $competition->title }}">

                                @if($errors->has('title'))
                                    <div class="text-danger">
                                        {{ $errors->first('title')}}
                                    </div>
                                @endif

                            </div>

                            <div class="form-group">
                                <label>Description</label>
                                
                                <textarea name="description" class="summernote form-control" placeholder="Description competition ..">{{ $competition->description }}</textarea>
                                
                                @if($errors->has('description'))
                                    <div class="text-danger">
                                        {{ $errors->first('description')}}
                                    </div>
                                @endif
                            </div>

                            <div class="form-group">
                                <label>Teaser Link</label>
                                <input type="text" name="teaser_link" class="form-control" placeholder="Teaser Link .." value="{{ $competition->teaser_link }}">

                                @if($errors->has('teaser_link'))
                                    <div class="text-danger">
                                        {{ $errors->first('teaser_link')}}
                                    </div>
                                @endif

                            </div>

                            <div class="form-group">
                                <label>Terms And Conditions</label>
                                
                                <textarea name="terms_and_conditions" class="summernote form-control" placeholder="Description competition ..">{{ $competition->terms_and_conditions }}</textarea>
                                
                                @if($errors->has('terms_and_conditions'))
                                    <div class="text-danger">
                                        {{ $errors->first('terms_and_conditions')}}
                                    </div>
                                @endif
                            </div>

                            <div class="form-group">
                                <label>Register Link</label>
                                <input type="text" name="register_link" class="form-control" placeholder="Register Link .." value="{{ $competition->register_link }}">

                                @if($errors->has('register_link'))
                                    <div class="text-danger">
                                        {{ $errors->first('register_link')}}
                                    </div>
                                @endif

                            </div>

                            <div class="form-group">
                                <label>FAQ</label>
                                
                                <textarea name="faq" class="summernote form-control" placeholder="Description competition ..">{{ $competition->faq }}</textarea>
                                
                                @if($errors->has('faq'))
                                    <div class="text-danger">
                                        {{ $errors->first('faq')}}
                                    </div>
                                @endif
                            </div>

                            <div class="form-group">
                                <label>Trivia</label>
                                
                                <textarea name="trivia" class="summernote form-control" placeholder="Description competition ..">{{ $competition->trivia }}</textarea>
                                
                                @if($errors->has('trivia'))
                                    <div class="text-danger">
                                        {{ $errors->first('trivia')}}
                                    </div>
                                @endif
                            </div>

                            <div class="form-group">
                                <label>The Judges</label>
                                
                                <textarea name="the_judges" class="summernote form-control" placeholder="Description competition ..">{{ $competition->the_judges }}</textarea>
                                
                                @if($errors->has('the_judges'))
                                    <div class="text-danger">
                                        {{ $errors->first('the_judges')}}
                                    </div>
                                @endif
                            </div>

                            <div class="form-group">
                                <label>Our Finalist</label>
                                
                                <textarea name="our_finalist" class="summernote form-control" placeholder="Description competition ..">{{ $competition->our_finalist }}</textarea>
                                
                                @if($errors->has('our_finalist'))
                                    <div class="text-danger">
                                        {{ $errors->first('our_finalist')}}
                                    </div>
                                @endif
                            </div>

                            <div class="form-group">
                                <label>Documentation</label>
                                
                                <textarea name="documentation" class="summernote form-control" placeholder="Description competition ..">{{ $competition->documentation }}</textarea>
                                
                                @if($errors->has('documentation'))
                                    <div class="text-danger">
                                        {{ $errors->first('documentation')}}
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