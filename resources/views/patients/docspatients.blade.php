@extends('layouts.master')
@section('title')
	| My Patients
@stop
@section('pageheading')
	My Patients		
@stop
@section('subpageheading')
	View/Search for My Patients 
@stop
@section('content')
	{{-- {{$patients}} --}}
	<div class="row">
        <div class="col-xs-12">
 			<div class="box box-primary">
            <div class="box-header">
              <h3 class="box-title">Registered Patients</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Full Name</th>
                  <th>Primary Phone</th>
                  <th>Alternate Phone</th>
                  <th>Email</th>
                  <th>Patient Code</th>
                   <th>Registered On</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($visits as $visit)
                	<tr>
	                  <td><a href="{{route('patients.show',$visit->patient->id)}}">{{$visit->patient->name}} {{$visit->patient->midname}} {{$visit->patient->surname}}</a></td>
	                  <td>{{$visit->patient->phoneprimary}}</td>
	                  <td>{{$visit->patient->phonealternate}}</td>
	                  <td>{{$visit->patient->email}}</td>
	                  <td>{{$visit->patient->patientcode}}</td>
	                   <td>{{date('M j, Y',strtotime($visit->patient->created_at))}}</td>
                	</tr>
                @endforeach
                
                  
                </tbody>
                <tfoot>
                <tr>
                  <th>Full Name</th>
                  <th>Primary Phone</th>
                  <th>Alternate Phone</th>
                  <th>Email</th>
                  <th>Patient Code</th>
                   <th>Registered On</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
@stop