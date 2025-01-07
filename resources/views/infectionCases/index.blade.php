@extends('layouts.master')
@section('page_title')
  Infection Cases
@stop
@section('page_header')
  Infection Cases
@stop
@section('page_content')
    <a class="btn btn-success" href="{{ route('infectionCases.create')}}"><i class="fa fa-plus fa-success"></i> New Entry</a>
    <div class="row">
      <div class="col-lg-12">
          <div class="panel panel-default">
              <div class="panel-heading">
                  DataTables
              </div>
              <!-- /.panel-heading -->
              <div class="panel-body">
                  <div class="table-responsive">
                      <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                          <thead>
                              <tr>
                                <th>#</th>
                                <th>Infected person</th>
                                <th>Pandemic</th>
                                <th>Health Center</th>
                                <th>Infection date</th>
                                <th>Actions</th>
                              </tr>
                          </thead>
                          <tbody>
                            @foreach ($infectionCases as $index=>$infectionCase)
                              <tr class="odd gradeX">
                                <td> {{ $index+1 }}</td>
                                <td><a href="{{ route('infectionCases.show',$infectionCase->id) }}">{{ $patients->find($infectionCase->patient_id)->full_name }}</a></td>
                                <td class="center">{{ $pandemics->find($infectionCase->pandemic_id)->full_name }}</td>
                                <td class="center">{{ $healthCenters->find($infectionCase->health_center_id)->full_name }}</td>
                                <td class="center">{{ $infectionCase->infection_date}}</td>
                                <td>
                                  <a href="{{ route('infectionCases.update',$infectionCase->id)}}" class="btn btn-primary btn-xs"><i class="fa fa-edit"></i></a>
                                  <a href="{{ route('infectionCases.delete',$infectionCase->id) }}" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i></a>
                                </td>
                              </tr>
                            @endforeach
                          </tbody>
                      </table>
                  </div>
                  <!-- /.table-responsive -->
              </div>
              <!-- /.panel-body -->
          </div>
          <!-- /.panel -->
      </div>
      <!-- /.col-lg-12 -->
  </div>
  <!-- /.row -->

@stop
