@extends('job.layout')
@section('content')
<style>
table.tibol {
  font-family: Tahoma, Geneva, sans-serif;
  border: 5px solid #23546B;
  background-color: #5BE7EE;
  width: 100%;
  height: 150px;
  text-align: center;
  border-collapse: collapse;
}
table.tibol td, table.tibol th {
  border: 1px solid #AAAAAA;
  padding: 3px 2px;
}
table.tibol tbody td {
  font-size: 13px;
}
table.tibol tr:nth-child(even) {
  background: #D0E4F5;
}
table.tibol thead {
  background: #1C6EA4;
  background: -moz-linear-gradient(top, #5592bb 0%, #327cad 66%, #1C6EA4 100%);
  background: -webkit-linear-gradient(top, #5592bb 0%, #327cad 66%, #1C6EA4 100%);
  background: linear-gradient(to bottom, #5592bb 0%, #327cad 66%, #1C6EA4 100%);
  border-bottom: 2px solid #444444;
}
table.tibol thead th {
  font-size: 15px;
  font-weight: bold;
  color: #FFFFFF;
  border-left: 2px solid #D0E4F5;
}
table.tibol thead th:first-child {
  border-left: none;
}

table.tibol tfoot {
  font-size: 14px;
  font-weight: bold;
  color: #FFFFFF;
  background: #D0E4F5;
  background: -moz-linear-gradient(top, #dcebf7 0%, #d4e6f6 66%, #D0E4F5 100%);
  background: -webkit-linear-gradient(top, #dcebf7 0%, #d4e6f6 66%, #D0E4F5 100%);
  background: linear-gradient(to bottom, #dcebf7 0%, #d4e6f6 66%, #D0E4F5 100%);
  border-top: 2px solid #444444;
}
table.tibol tfoot td {
  font-size: 14px;
}
table.tibol tfoot .links {
  text-align: right;
}
table.tibol tfoot .links a{
  display: inline-block;
  background: #1C6EA4;
  color: #FFFFFF;
  padding: 2px 8px;
  border-radius: 5px;
}
.btn {
  background: #3498db;
  background-image: -webkit-linear-gradient(top, #3498db, #2980b9);
  background-image: -moz-linear-gradient(top, #3498db, #2980b9);
  background-image: -ms-linear-gradient(top, #3498db, #2980b9);
  background-image: -o-linear-gradient(top, #3498db, #2980b9);
  background-image: linear-gradient(to bottom, #3498db, #2980b9);
  -webkit-border-radius: 5;
  -moz-border-radius: 5;
  border-radius: 5px;
  -webkit-box-shadow: 0px 1px 3px #666666;
  -moz-box-shadow: 0px 1px 3px #666666;
  box-shadow: 0px 1px 3px #666666;
  font-family: Courier New;
  color: #ffffff;
  font-size: 16px;
  padding: 7px;
  text-decoration: none;
}

.btn:hover {
  background: #3cb0fd;
  background-image: -webkit-linear-gradient(top, #3cb0fd, #3498db);
  background-image: -moz-linear-gradient(top, #3cb0fd, #3498db);
  background-image: -ms-linear-gradient(top, #3cb0fd, #3498db);
  background-image: -o-linear-gradient(top, #3cb0fd, #3498db);
  background-image: linear-gradient(to bottom, #3cb0fd, #3498db);
  text-decoration: none;
}

</style>
<div class="pull-left">
    <h2 background:green >Online Job Hunting</h2>
    </div>

    <div class="row">
        <div class="button4">

        <a class = 'btn' href='http://127.0.0.1:8000/newjob' style="background-color:#f14e4e" >Input New Job</a>
        
        
        
        </div>
        </div>
        </div>
@if($message= Session::get('Success'))
    <div class="alert alert-success">
    <p>{{$message}}</p>
    </div>
@endif

        <table class="tibol" border=1>
            <tr>
                <th>No</th>
                <th>Job</th>
                <th>Job Description</th>
                <th>Job Requirements</th>
                <th width="280px">Action</th>
            </tr>
@foreach($jobs as $job)
    <tr>
        <td>{{$job['id']}}</td>
        <td>{{$job['job']}}</td>
        <td>{{$job['description']}}</td>
        <td>{{$job['requirements']}}</td>

        <td>
            

          
@csrf

<a class='btn' href={{"delete/".$job['id']}}>Delete</a>
<a class='btn' href={{"edit/".$job['id']}}>Edit</a>
            
        </td>
    </tr>
@endforeach
</table>