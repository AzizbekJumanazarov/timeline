@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    <div class="row">
          <div class="col-12">
            <!-- Default box -->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Title</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <div class="card-body" style="display: block;">
                <div class="card-body">
                    <div class="row">
                      <div class="col-4">
                        <input type="text" class="form-control" placeholder="search">
                      </div>
                      <div class="col-2">
                        <input type="select" class="form-control" placeholder="Teacher">
                      </div>
                      <div class="col-2">
                        <input type="text" class="form-control" placeholder="Group">
                      </div>
                      <div class="col-4">
                        <input type="text" class="form-control" placeholder=".col-5">
                      </div>
                    </div>
                </div>     
              </div>
              <!-- /.card-body -->
              <div class="card-footer" style="display: block;">
                Footer
              </div>
              <!-- /.card-footer-->
            </div>
            <!-- /.card -->
          </div>
        </div>
@stop
