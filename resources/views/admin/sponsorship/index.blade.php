@extends('admin.layouts.app')

@section('content')    
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0 text-dark">Sponsorship Page</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Sponsorship</a></li>
                <li class="breadcrumb-item active">Main </li>
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
                            <!-- Sponsorship Table -->
                            <a href="/admin/sponsorship/create" class="btn btn-primary">Input New Sponsorship</a>
                        </div>    
                    <div class="card-body">
                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover">
                                <thead>
                                <tr>
                                    <th> Name </th>
                                    <th> Picture </th>
                                    <th> Link </th>
                                    <th> Type </th> 
                                    <th> Option </th>
                                </tr>
                                </thead>
                                <tbody>
                                    @foreach($sponsorships as $item)
                                    <tr>
                                        <td>{{ $item->name }}</td>
                                        <td><img src="{{ $item->picture }}" width=200></td>
                                        <td><a href="{{ $item->link }}">{{ $item->link }}</a></td>
                                        <td>{{ $item->type }}</td>
                                        <td>
                                            <a href="/admin/sponsorship/edit/{{ $item->id }}" class="btn btn-success"><i class="nav-icon fas fa-pen"></i></a>
                                            <button type="button" class="openModal btn btn-danger" data-toggle="modal" data-id="{{ $item->id }}" data-target="#modal-default">
                                                <i class="nav-icon fas fa-trash"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="modal fade" id="modal-default">
        <div class="modal-dialog">
          <div class="modal-content">
            <form action="/admin/sponsorship/delete" method="post">
                {{ csrf_field() }}
                <div class="modal-header">
                  <h4 class="modal-title">Delete Confirmation</h4>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <p>Are you sure want to delete?&hellip;</p>
                  <input type="hidden" name="sponsorshipId" id="sponsorshipId" value=""/>
                </div>
                <div class="modal-footer justify-content-between">
                  <button type="button" class="btn btn-success" data-dismiss="modal">No</button>
                  <button type="submit" class="btn btn-danger">Yes ! Delete it</button>
                </div>
            </form>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->

    <!-- jQuery -->
    <script src="{{ url('AdminLTE/plugins/jquery/jquery.min.js') }}"></script>
    <script>
    $('.openModal').click(function() {
        var id = $(this).data('id');   
        $('#sponsorshipId').val(id); 
    } );
    </script>
@endsection