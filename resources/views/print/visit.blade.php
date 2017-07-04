<!DOCTYPE html>
<html>
<head>
	<title>ClinicJet | Print</title>
</head>
<body>
	<style>
		div.absolute {
			position: absolute;
			right: 40px;
		} 

		.cc{
			margin-top:8px;
		}

		table {
			font-family: arial, sans-serif;
			border-collapse: collapse;
			width: 100%;
			text-align: center;
		}

		td, th {
			border: 1px solid #dddddd;
			text-align: center;
			padding: 8px;
		}

		tr:nth-child(even) {
			background-color: #dddddd;
		}

		@media print{
			@page :first{
			margin-top: {{$clinic->margintopfirst}}cm !important;
			margin-bottom: {{$clinic->marginbottomfirst}}cm !important;
		}
		}
		
	</style>
	{{-- <div class="absolute">Date: {{$visit->created_at->toDateString()}}</div> --}}
	<div class="absolute">Date: {{$visit->created_at->format('d/m/Y')}}</div>
	<div>Patient Id: <b>{{$visit->patient->patientcode}}</b></div>
	<div class="absolute"><b>{{$visit->patient->gender}}</b> 
		@if ($visit->patient->isapproxage)
			Age (Approx): {{$visit->patient->approxage}} Years
		@else
			Age: 
			@if ($visit->patient->dob != "1900-01-01 00:00:00")
				{{$visit->patient->dob->diff(Carbon::now())->format('%y')}} Years
			@else
				Date of Birth Not Provided
			@endif
		@endif
	{{-- Age: 
		@if ($visit->patient->dob != "1900-01-01 00:00:00")
		{{$visit->patient->dob->diff(Carbon::now())->format('%y')}}
		@else
		Date of Birth Not Provided
		@endif --}}
	</div>
	<div>Patient Name: <b>{{$visit->patient->name}} {{$visit->patient->midname}} {{$visit->patient->surname}}</b></div><br>
	<div class="cc"><b>Chief Complaints: </b>{{$visit->chiefcomplaints}}</div>
	<div class="cc"><b>Findings: </b>{{$visit->examinationfindings}}</div>
	<div class="cc"><b>History: </b>{{$visit->patienthistory}}</div>
	<div class="cc"><b>Diagnosis: </b>{{$visit->diagnosis}}</div>
	<div class="cc"><b>Advise: </b>{{$visit->advise}}</div><br>
	<div class="absolute"><b>Follow Up Date: </b>
		@if ($visit->isSOS)
		On SOS or With Reports
		@else
		{{$visit->nextvisit->format('d/m/Y')}}
		@endif
	</div>
	<img class="cc" src="/var/www/laravel/public/images/rx.jpg" alt="" style="width: 35px; height: 35px;"><br>
	@if (count($visit->prescriptions)>0)
	<table>
		<thead>
			<tr>
				<th>Brand Name</th>
				<th>Regime</th>
				<th>Timing</th>
				<th>Duration</th>
				<th>Remarks</th>
			</tr>
		</thead>
		<tbody>
			@foreach ($visit->prescriptions as $p)
			<tr>
				<td><b>{{$p->medicinename}}</b><br><small><i>({{$p->medicinecomposition}})</i></small></td>
				<td>{{$p->doseregime}}</td>
				<td>{{$p->dosetimings}}</td>
				<td>{{$p->doseduration}}</td>
				<td>{{$p->remarks}}</td>
			</tr>
			@endforeach
			
		</tbody>
	</table>
	@endif
	
	@if ($visit->systolic != "" && $visit->diastolic != "")
		<div class="cc"><b>BP</b> {{$visit->systolic}}/{{$visit->diastolic}} mm Hg</div>
	@endif

	@if ($visit->randombs != "")
		<div class="{{$visit->systolic != "" && $visit->diastolic != ""?'':'cc'}}"><b>Random Blood Sugar</b> {{$visit->randombs}} mg/dl</div>
	@endif

	@if ($visit->pulse != "")
		<div class="{{($visit->systolic != "" && $visit->diastolic != "")||$visit->randombs != ""?'':'cc'}}"><b>Pulse</b> {{$visit->randombs}} beats per minute</div>
	@endif

	@if ($visit->resprate != "")
		<div class="{{($visit->systolic != "" && $visit->diastolic != "")||$visit->randombs != ""||$visit->pulse != ""?'':'cc'}}"><b>Respiratory Rate</b> {{$visit->resprate}} breaths per minute</div>
	@endif

	@if ($visit->spo != "")
		<div class="{{($visit->systolic != "" && $visit->diastolic != "")||$visit->randombs != ""||$visit->pulse != ""||$visit->resprate != ""?'':'cc'}}"><b>SPO2</b> {{$visit->spo}} %</div>
	@endif

	@if ($visit->weight != "")
		<div class="{{($visit->systolic != "" && $visit->diastolic != "")||$visit->randombs != ""||$visit->pulse != ""||$visit->resprate != ""||$visit->spo != ""?'':'cc'}}"><b>Weight</b> {{$visit->weight}} kgs</div>
	@endif

	@if ($visit->height != "")
		<div class="{{($visit->systolic != "" && $visit->diastolic != "")||$visit->randombs != ""||$visit->pulse != ""||$visit->resprate != ""||$visit->spo != ""||$visit->weight != ""?'':'cc'}}"><b>Height</b> {{$visit->height}} cms</div>
	@endif

	@if ($visit->bmi != "")
		<div class="{{($visit->systolic != "" && $visit->diastolic != "")||$visit->randombs != ""||$visit->pulse != ""||$visit->resprate != ""||$visit->spo != ""||$visit->weight != ""||$visit->height != ""?'':'cc'}}"><b>BMI</b> {{$visit->bmi}}</div>
	@endif

	<div class="cc"><b>Recommended Clinical Follow up</b>
		<ul>
			@foreach ($visit->pathologies as $pathology)
			<li>
				{{$pathology->name}}
			</li>
			@endforeach
		</ul>
	</div>
	<div class="absolute"><b>Signature:__________________________________</b></div>
	<br>
	<div></div>
	<br>
	<div></div>
	<div class="absolute"><i>signed by</i> Dr. {{$visit->created_by_name}}</b></div>
	
{{-- 	<br>
	<div></div>
	<div class="absolute"><i>on behalf of</i> Dr. {{$visit->created_by_name}}</div> --}}
</body>
</html>