@extends('layouts.hirer-app')

@section('content')
<div class="container">
   <div class="row justify-content-center">

		
		<div class="col-md-3">
			<div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
				<a class="nav-link active btn btn-secondary" id="v-pills-basic-tab " data-toggle="pill" href="#v-pills-basic" role="tab" aria-controls="v-pills-basic" aria-selected="true" style="box-shadow: -1px 0px 24px -2px gray">Your Information</a>
				<a class="nav-link btn btn-secondary" id="v-pills-teacher-tab" data-toggle="pill" href="#v-pills-teacher" role="tab" aria-controls="v-pills-teacher" aria-selected="false" style="box-shadow: -1px 0px 24px -2px gray">Teacher Information</a>
			</div>
		</div>
		
		<div class="col-md-9">
			<div class="tab-content" id="v-pills-tabContent">
				<div class="tab-pane fade show active" id="v-pills-basic" role="tabpanel" aria-labelledby="v-pills-home-tab">
					<div class="card card-default" style="box-shadow: -1px 0px 24px -2px gray">
						<div class="card-header" style="text-align:center">Your Information</div>
						<div class="card-body"></div>
					</div>
				</div>
			  
			  
				<div class="tab-pane fade" id="v-pills-teacher" role="tabpanel" aria-labelledby="v-pills-teacher-tab">
					<div class="card card-default" style="box-shadow: -1px 0px 24px -2px gray">
						<div class="card-header" style="text-align:center">Teacher Information</div>
						<div class="card-body"></div>
					</div>
				</div>	
			</div>
		</div>
    </div>
</div>

@endsection