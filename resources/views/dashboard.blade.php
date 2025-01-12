@extends('layouts.master')
@section('page_title')
    Dashboard
@stop
@section('page_header')
    Dashboard header
@stop
@section('page_content')
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-3 col-md-6">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3">
                            <i class="fa fa-heart fa-5x"></i>
                        </div>
                        <div class="col-xs-9 text-right">
                            <div class="huge">{{$patients->count()}}</div>
                            <div>Patients</div>
                        </div>
                    </div>
                </div>
                <a href="{{ route('patients.index') }}">
                    <div class="panel-footer">
                        <span class="pull-left">View Details</span>
                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>

                        <div class="clearfix"></div>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="panel panel-green">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3">
                            <i class="fa fa-bug fa-5x"></i>
                        </div>
                        <div class="col-xs-9 text-right">
                            <div class="huge">{{$pandemics->count()}}</div>
                            <div>Pandemics</div>
                        </div>
                    </div>
                </div>
                <a href="{{ route('pandemics.index') }}">
                    <div class="panel-footer">
                        <span class="pull-left">View Details</span>
                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>

                        <div class="clearfix"></div>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="panel panel-yellow">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3">
                            <i class="fa fa-hospital-o fa-5x"></i>
                        </div>
                        <div class="col-xs-9 text-right">
                            <div class="huge">{{$healthCenters->count()}}</div>
                            <div>Health Centers</div>
                        </div>
                    </div>
                </div>
                <a href="{{ route('healthCenters.index') }}">
                    <div class="panel-footer">
                        <span class="pull-left">View Details</span>
                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                        <div class="clearfix"></div> 
                    </div>
                </a>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="panel panel-red">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3">
                            <i class="fa fa-stethoscope fa-5x"></i>
                        </div>
                        <div class="col-xs-9 text-right">
                            <div class="huge">{{$infectionCases->count()}}</div>
                            <div>Infection Cases</div>
                        </div>
                    </div>
                </div>
                <a href="{{ route('infectionCases.index')}}">
                    <div class="panel-footer">
                        <span class="pull-left">View Details</span>
                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>

                        <div class="clearfix"></div>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-8">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <i class="fa fa-bar-chart-o fa-fw"></i> Area Chart Example
                    <div class="pull-right">
                        <div class="btn-group">
                            <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown">
                                Actions
                                <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu pull-right" role="menu">
                                <li><a href="#">Refresh</a>
                                </li>
                                <li><a href="#">Select Time</a>
                                </li>
                                <li><a href="#">Select Location</a>
                                </li>
                                <li class="divider"></li>
                                <li><a href="#">Download Graph</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <div id="morris-area-chart"></div>
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
            <div class="panel panel-default">
                <div class="panel-heading">
                    <i class="fa fa-bar-chart-o fa-fw"></i> Bar Chart Example
                    <div class="pull-right">
                        <div class="btn-group">
                            <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown">
                                Actions
                                <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu pull-right" role="menu">
                                <li><a href="#">Refresh</a>
                                </li>
                                <li><a href="#">Select time</a>
                                </li>
                                <li><a href="#">Select location</a>
                                </li>
                                <li class="divider"></li>
                                <li><a href="#">Download graph</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <!-- /.row -->
                </div>
                <!-- /.panel-body -->
            </div>
        </div>
        <!-- /.col-lg-8 -->
        <div class="col-lg-4">
        </div>
        <!-- /.col-lg-4 -->
    </div>
    <!-- /.row -->

    <div class="row">
        <div class="col-lg-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <a href="{{ route('patients.index')}}" class="btn btn-primary">Patients</a>
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-hover" style="display:block;height: 200px; overflow:auto">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Age</th>
                                    <th>Location</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($patients as $index=>$patient)
                                <tr>
                                    <td>{{ $index+1 }}</td>
                                    <td>{{$patient->full_name}}</td>
                                    <td>{{$patient->birth_date}}</td>
                                    <td>{{$patient->birth_location}}</td>
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
        <!-- /.col-lg-6 -->
        <div class="col-lg-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <a href="{{ route('pandemics.index')}}" class="btn btn-success">Pandemics</a> 
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-hover" style="display:block;height: 200px; overflow:auto">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>First Discovered</th>
                                    <th>Number of Infection</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($pandemics as $index=>$pandemic)
                                  <tr class="odd gradeX">
                                    <td>{{ $index+1 }}</td>
                                    <td>{{$pandemic->full_name}}</td>
                                    <td>{{$pandemic->discovery_location}}</td>
                                    <td class="center">--</td>
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
        <!-- /.col-lg-6 -->
    </div>
    <div class="row">
        <div class="col-lg-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <a href="{{ route('healthCenters.index')}}" class="btn btn-warning">Health Centers</a>
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-hover" style="display:block;height: 200px; overflow:auto">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Location</th>
                                    <th>Number of Infection</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($healthCenters as $index=>$healthCenter)
                                  <tr class="odd gradeX">
                                    <td>{{ $index+1 }}</td>
                                    <td>{{$healthCenter->full_name}}</td>
                                    <td>{{$healthCenter->location}}</td>
                                    <td>--</td>
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
        <!-- /.col-lg-6 -->
        <div class="col-lg-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <a href="{{ route('infectionCases.index')}}" class="btn btn-danger">Infection Cases</a>
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-hover" style="display:block;height: 200px; overflow:auto">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Patient</th>
                                    <th>Pandemi</th>
                                    <th>HCenter</th>
                                    <th>Case date</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($infectionCases as $index=>$infectionCase)
                                  <tr class="odd gradeX">
                                    <td> {{ $index+1 }}</td>
                                    <td>{{ $patients->find($infectionCase->patient_id)->full_name }}</td>
                                    <td class="center">{{ $pandemics->find($infectionCase->pandemic_id)->full_name }}</td>
                                    <td class="center">{{ $healthCenters->find($infectionCase->health_center_id)->full_name }}</td>
                                    <td class="center">{{ $infectionCase->infection_date}}</td>
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
        <!-- /.col-lg-6 -->
    </div>
@stop