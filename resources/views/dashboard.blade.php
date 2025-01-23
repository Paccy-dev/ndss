@extends('layouts.master')
@section('page_title')
    Dashboard
@stop
@section('page_css')
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
@endsection
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
                            <i class="fa fa-heart-o fa-5x"></i>
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
        <div class="col-lg-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <i class="fa fa-bar-chart-o fa-fw"></i> Bar Chart 
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
                    
                    <div id="bar-example"></div>

                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
        <div class="col-lg-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <i class="fa fa-bar-chart-o fa-fw"></i> Area Chart
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
                    
                    <div id="area-example"></div>
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
        <div class="col-lg-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <i class="fa fa-bar-chart-o fa-fw"></i> Line Chart
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
                    
                    <div id="line-example"></div>

                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
        <div class="col-lg-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <i class="fa fa-bar-chart-o fa-fw"></i> Pie Chart
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
                    
                    <div id="donut-example"></div>

                </div>
                <!-- /.panel-body -->
            </div>
        </div>
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
@section('page_script')
{{-- Script for bar chart --}}
<script>
    function myFunction(){
        const date = new Date();
        var day = date.getDay();
        const daysOfWeek = ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday','Sunday'];
        const dayOfWeek = daysOfWeek[day]
        // console.log(day); // Outputs the day of the month (1-31)
        // console.log(dayOfWeek); // Outputs the day of the week ()
        var daysListing = [];
        for( i=0; i<7; i++){
            if (day == 8){
                day=1;
            }
            daysListing.push(daysOfWeek[day]);
            // console.log(day);
            day = day +1 ;
        }
        console.log(daysListing);
        var dataDict = []
        daysListing.forEach(dayListing => {
            // console.log(dayListing)
            dataDict.push(
                { y: '2006', a: 100, b: 20, c: 20 },
            )
        });
        console.log(dataDict);
    }
    window.onload = myFunction;
    
   

    Morris.Bar({
    element: 'bar-example',
    data: [
        { y: '2006', a: 100, b: 20, c: 20 },
        { y: '2007', a: 75,  b: 65, c: 45 },
        { y: '2008', a: 50,  b: 40, c: 72 },
        { y: '2009', a: 75,  b: 65, c: 66 },
        { y: '2010', a: 50,  b: 40, c: 44 },
        { y: '2011', a: 75,  b: 65, c: 40 },
        { y: '2012', a: 100, b: 90, c: 72 },
    ],
    

  xkey: 'y',
  ykeys: ['a', 'b', 'c'],
  labels: ['Series A', 'Series B', 'Series C']

});
</script>
<script>
    Morris.Line({
  element: 'line-example',
  data: [
    { y: '2006', a: 100, b: 90, c: 20 },
    { y: '2007', a: 75,  b: 65, c: 75 },
    { y: '2008', a: 50,  b: 40 },
    { y: '2009', a: 75,  b: 65 },
    { y: '2010', a: 50,  b: 40 },
    { y: '2011', a: 75,  b: 65 },
    { y: '2012', a: 100, b: 90 }
  ],
  xkey: 'y',
  ykeys: ['a', 'b'],
  labels: ['Series A', 'Series B']
});
</script>
<script>
    Morris.Area({
      element: 'area-example',
  data: [
    { y: '2006', a: 100, b: 90 },
    { y: '2007', a: 75,  b: 65 },
    { y: '2008', a: 50,  b: 40 },
    { y: '2009', a: 75,  b: 65 },
    { y: '2010', a: 50,  b: 40 },
    { y: '2011', a: 75,  b: 65 },
    { y: '2012', a: 100, b: 90 }
  ],
  xkey: 'y',
  ykeys: ['a', 'b'],
  labels: ['Series A', 'Series B']
});
</script>
<script>
    Morris.Donut({
  element: 'donut-example',
  data: [
    {label: "Download Sales", value: 12},
    {label: "In-Store Sales", value: 30},
    {label: "Mail-Order Sales", value: 20},
    {label: "New-Order Sales", value: 15}
  ]
});
</script>
@endsection
<script>
    function validateDate() { 
      //** Getting the date input from user);
  
      console.log("Date changed!")
      input = document.getElementById('date_input')
      error_msg = document.getElementById('error_msg')
      // error_msg.textContent = '';
  
      //** Extracting the value for the input
  
      dateInput = input.value // This is the actual date entered by the user
      console.log('date input',dateInput)
  
      //** Getting the today date from the system
  
      today = new Date();
      // console.log('date time today:',today)
      stringToday = today.toISOString()
      // console.log('string today:',today_string)
  
      //** Formatting the system date as the input
      array = stringToday.split('T')
      dateToday = array[0]
      console.log('date today',dateToday)
      timeToday = array[1] // This is the actual date of today
      // console.log('time today',timeToday)
  
      //** Function to show the error message and clear the date box
        function showError() {          
          error_msg.textContent = 'Future date not accepted'
          input.focus();
          input.value = ''
          return;
        }
  
      //** Function to hide the error message
        function hideError() {          
          error_msg.textContent = ''
          input.focus();
          return;
        }
      //** Condition to evaluate the date value
      if (dateInput > dateToday) {
        showError();
      }else {
        hideError();
      }
  }
  </script>