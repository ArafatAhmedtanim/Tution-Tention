@extends('layouts.app')

@section('content')
<div class="container">
   <div class="row justify-content-center">

		
		<div class="col-md-3">
			<div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
				<a class="nav-link active btn btn-secondary" id="v-pills-basic-tab " data-toggle="pill" href="#v-pills-basic" role="tab" aria-controls="v-pills-basic" aria-selected="true" style="box-shadow: -1px 0px 24px -2px gray">Basic Information</a>
				<a class="nav-link btn btn-secondary" id="v-pills-educational-tab" data-toggle="pill" href="#v-pills-educational" role="tab" aria-controls="v-pills-education" aria-selected="false" style="box-shadow: -1px 0px 24px -2px gray">Educational Information</a>
				<a class="nav-link btn btn-secondary" id="v-pills-family-tab" data-toggle="pill" href="#v-pills-family" role="tab" aria-controls="v-pills-family" aria-selected="false" style="box-shadow: -1px 0px 24px -2px gray">Family Information</a>
				<a class="nav-link btn btn-secondary" id="v-pills-documents-tab" data-toggle="pill" href="#v-pills-documents" role="tab" aria-controls="v-pills-documents" aria-selected="false" style="box-shadow: -1px 0px 24px -2px gray">Documents</a>
				<a class="nav-link btn btn-secondary" id="v-pills-tuition-tab" data-toggle="pill" href="#v-pills-tuition" role="tab" aria-controls="v-pills-tuition" aria-selected="false" style="box-shadow: -1px 0px 24px -2px gray">Tuition Related Information</a>
			</div>
		</div>
		
		<div class="col-md-9">
			<div class="tab-content" id="v-pills-tabContent">
				<div class="tab-pane fade show active" id="v-pills-basic" role="tabpanel" aria-labelledby="v-pills-home-tab">
					<div class="card card-default" style="box-shadow: -1px 0px 24px -2px gray">
						<div class="card-header" style="text-align:center">Basic Information</div>
						<div class="card-body">
							{!! Form::open( ['method' => 'PATCH','route' => ['setting.update', Auth::user()->id]]) !!}
								<div class="form-group row">
									<label for="name" class="col-sm-3 col-form-label text-md-right">Name</label>

									<div class="col-sm-5">
										<input id="name" type="text" name="name" class="form-control name" value="{{Auth::user()->name }}" disabled="true">
									</div>
										
									<div class="col-sm-4">
										<button type="button" class="btn btn-outline-secondary  name_edit" onclick="edit('name')">Edit</button>
									
										<button type="submit" class="btn btn-outline-secondary  name_edit_save">Save</button>
									</div>
								</div>
							{!! Form::close() !!}
									
							{!! Form::open( ['method' => 'PATCH','route' => ['setting.update', Auth::user()->id]]) !!}
								<div class="form-group row">
									<label for="tel" class="col-sm-3 col-form-label text-md-right">Email Address</label>

									<div class="col-sm-5">
										<input id="email" type="eamil" name="email" class="form-control" value="{{Auth::user()->email }}" disabled="true">
									</div>
									
									<div class="col-sm-4">
										<button type="button" class="btn btn-outline-secondary  email_edit" onclick="edit('email')">Edit</button>
										<button type="submit" class="btn btn-outline-secondary  email_edit_save">Save</button>
									</div>
								</div>
							{!! Form::close() !!}
								
							{!! Form::open( ['method' => 'PATCH','route' => ['setting.update', Auth::user()->id]]) !!}
								<div class="form-group row">
									<label for="tel" class="col-sm-3 col-form-label text-md-right">Mobile No</label>

									
									<div class="col-sm-5">
										<div class="input-group-prepend">
											<span class="input-group-text" id="basic-addon1">+880</span>
											<input id="tel" type="tel" name="tel" class="form-control" value="{{Auth::user()->tel }}" disabled="true">
										</div>
									</div>
										
									<div class="col-sm-4">
										<button type="button" class="btn btn-outline-secondary  tel_edit" onclick="edit('tel')">Edit</button>
										<button type="submit" class="btn btn-outline-secondary  tel_edit_save">Save</button>
									</div>
								</div>
							{!! Form::close() !!}
								
							{!! Form::open( ['method' => 'PATCH','route' => ['setting.update', Auth::user()->id]]) !!}
								<div class="form-group row">
									<label for="dob" class="col-sm-3 col-form-label text-md-right">Date of Birth</label>

									<div class="col-sm-5">
										<input id="dob" type="date" name="dob" class="form-control" value="{{Auth::user()->dob }}" disabled="true">
									</div>
									
									<div class="col-sm-4">
										<button type="button" class="btn btn-outline-secondary  dob_edit" onclick="edit('dob')">Edit</button>
										<button type="submit" class="btn btn-outline-secondary  dob_edit_save">Save</button>
									</div>
								</div>
							{!! Form::close() !!}
							
							{!! Form::open( ['method' => 'PATCH','route' => ['setting.update', Auth::user()->id]]) !!}
								<div class="form-group row">
									<label for="religion" class="col-sm-3 col-form-label text-md-right">Religion</label>

									<div class="col-sm-5">
										
										<select class="custom-select mr-sm-2" id="religion" name="religion" disabled="true">
											<option selected>{{Auth::user()->religion}}</option>
											<option value="Christianity">Christianity</option>
											<option value="Islam">Islam</option>
											<option value="Hinduism">Hinduism</option>
											<option value="Buddhism">Buddhism</option>
											<option value="Others">Others</option>
										</select>									
										
									</div>
									
									<div class="col-sm-4">
										<button type="button" class="btn btn-outline-secondary  religion_edit" onclick="edit('religion')">Edit</button>
										<button type="submit" class="btn btn-outline-secondary  religion_edit_save">Save</button>
									</div>
								</div>
							{!! Form::close() !!}
							
							
							
							{!! Form::open( ['method' => 'PATCH','route' => ['setting.update', Auth::user()->id]]) !!}
								<div class="form-group row">
									<label for="area" class="col-sm-3 col-form-label text-md-right">Your Area</label>

									<div class="col-sm-5">
										
										<select class="custom-select mr-sm-2" id="area" name="area" disabled="true">
											<option selected>{{Auth::user()->area}}</option>
											<option value="Adabor">Adabor</option>
											<option value="Azampur">Azampur</option>
											
											<option value="Badda">Badda</option>
											<option value="Bangsal">Bangsal</option>
											
											<option value="Cantonment">Cantonment</option>
											<option value="Chowkbazar">Chowkbazar</option>
											
											<option value="Demra">Demra</option>
											<option value="Dhanmondi">Dhanmondi</option>
											
											<option value="Gendaria">Gendaria</option>
											<option value="Gulshan">Gulshan</option>
											
											<option value="Hazaribagh">Hazaribagh</option>
											
											<option value="Kadamtali">Kadamtali</option>
											<option value="Kafrul">Kafrul</option>
											<option value="Kalabagan">Kalabagan</option>
											<option value="Kamrangirchar">Kamrangirchar</option>
											<option value="Khilgaon">Khilgaon</option>
											<option value="Khilkhet">Khilkhet</option>
											<option value="Kotwali">Kotwali</option>
											
											<option value="Lalbagh">Lalbagh</option>
											
											<option value="Mirpur">Mirpur</option>
											<option value="Mohammadpur">Mohammadpur</option>
											<option value="Motijheel">Motijheel</option>
											
											<option value="New Market">New Market</option>
											
											<option value="Pallabi">Pallabi</option>
											<option value="Paltan">Paltan</option>
											<option value="Panthapath">Panthapath</option>
											
											<option value="Ramna">Ramna</option>
											<option value="Rampura">Rampura</option>
											
											<option value="Sabujbagh">Sabujbagh</option>
											<option value="Shahbag">Shahbag</option>
											<option value="Sher-e-Bangla Nagar">Sher-e-Bangla Nagar</option>
											<option value="Shyampur">Shyampur</option>
											<option value="Sutrapur">Sutrapur</option>
											
											<option value="Tejgaon Industrial Area">Tejgaon Industrial Area</option>
											<option value="Tejgaon">Tejgaon</option>
											<option value="Uttar Khan">Uttar Khan</option>
											<option value="Uttara">Uttara</option>
											
											<option value="Vatara">Vatara</option>
											
											<option value="Wari">Wari</option>
											
										</select>									
										
									</div>
									
									<div class="col-sm-4">
										<button type="button" class="btn btn-outline-secondary  area_edit" onclick="edit('area')">Edit</button>
										<button type="submit" class="btn btn-outline-secondary  area_edit_save">Save</button>
									</div>
								</div>
							{!! Form::close() !!}
									
						</div>
					</div>
				</div>
			  
			  
				<div class="tab-pane fade" id="v-pills-educational" role="tabpanel" aria-labelledby="v-pills-educational-tab">
					<div class="card card-default" style="box-shadow: -1px 0px 24px -2px gray">
						<div class="card-header" style="text-align:center">Educational Information</div>
						<div class="card-body">
							{!! Form::open( ['method' => 'PATCH','route' => ['setting.update', Auth::user()->id]]) !!}
								<div class="form-group row">
									<label for="institute" class="col-sm-3 col-form-label text-md-right">Institute Name</label>

									<div class="col-sm-5">
										<input id="institute" type="text" name="institute" class="form-control" value="{{Auth::user()->institute }}" disabled="true">
									</div>
									
									<div class="col-sm-4">
										<button type="button" class="btn btn-outline-secondary  institute_edit" onclick="edit('institute')">Edit</button>
										<button type="submit" class="btn btn-outline-secondary  institute_edit_save">Save</button>
									</div>
								</div>
							{!! Form::close() !!}
							
							{!! Form::open( ['method' => 'PATCH','route' => ['setting.update', Auth::user()->id]]) !!}
								<div class="form-group row">
									<label for="ygn" class="col-sm-3 col-form-label text-md-right">Your Group Name</label>

									<div class="col-sm-5">
										
										<select class="custom-select mr-sm-2" id="ygn" name="ygn" disabled="true">
											<option selected>{{Auth::user()->ygn}}</option>
											<option value="English">English</option>
											<option value="English literature">English literature</option>
											<option value="Maths">Maths</option>
											<option value="Pure maths">Pure maths</option>
											<option value="Physics">Physics</option>
											<option value="Chemistry">Chemistry</option>
											<option value="Biology">Biology</option>
											<option value="Accounting">Accounting</option>
											<option value="Business Studies">Business Studies</option>
											<option value="Islamiat">Islamiat</option>
											<option value="History">History</option>
											<option value="Geography">Geography</option>
											<option value="Management">Management</option>
											<option value="Marketing">Marketing</option>
											<option value="HRM">HRM</option>
											<option value="CSC">CSC</option>
											<option value="Science">Science</option>
											<option value="Finance">Finance</option>
											<option value="EEE">EEE</option>
											<option value="IB">IB</option>
											<option value="Pharmacy">Pharmacy</option>
											<option value="BBA">BBA</option>
											<option value="ACCA">ACCA</option>
											<option value="Economics">Economics</option>
											<option value="CSE">CSE</option>
										</select>
										
									</div>
										
									<div class="col-sm-4">
										<button type="button" class="btn btn-outline-secondary  ygn_edit" onclick="edit('ygn')">Edit</button>
									
										<button type="submit" class="btn btn-outline-secondary  ygn_edit_save">Save</button>
									</div>
								</div>
							{!! Form::close() !!}
							
							{!! Form::open( ['method' => 'PATCH','route' => ['setting.update', Auth::user()->id]]) !!}
								<div class="form-group row">
									<label for="curriculam" class="col-sm-3 col-form-label text-md-right">Curriculam</label>

									<div class="col-sm-5">
										
										<select class="custom-select mr-sm-2" id="curriculam" name="curriculam" disabled="true">
											<option selected>{{Auth::user()->curriculam}}</option>
											<option value="English Version">English Version</option>
											<option value="Bangla Version">Bangla Version</option>
										</select>
										
									</div>
									
									<div class="col-sm-4">
										<button type="button" class="btn btn-outline-secondary  curriculam_edit" onclick="edit('curriculam')">Edit</button>
										<button type="submit" class="btn btn-outline-secondary  curriculam_edit_save">Save</button>
									</div>
								</div>
							{!! Form::close() !!}
							
							
							{!! Form::open( ['method' => 'PATCH','route' => ['setting.update', Auth::user()->id]]) !!}
								<div class="form-group row">
									<label for="name" class="col-sm-3 col-form-label text-md-right">Level of Education</label>

									<div class="col-sm-5">
										
										<select class="custom-select mr-sm-2" id="loe" name="loe" disabled="true">
											<option selected>{{Auth::user()->loe}}</option>
											<option value="Secondary">Secondary</option>
											<option value="Higher Secondary">Higher Secondary</option>
											<option value="Diploma">Diploma</option>
											<option value="Bachelor/Honors">Bachelor/Honors</option>
											<option value="Masters">Masters</option>
											<option value="Doctoral">Doctoral</option>
										</select>
										
									</div>
										
									<div class="col-sm-4">
										<button type="button" class="btn btn-outline-secondary  loe_edit" onclick="edit('loe')">Edit</button>
									
										<button type="submit" class="btn btn-outline-secondary  loe_edit_save">Save</button>
									</div>
								</div>
							{!! Form::close() !!}

							{!! Form::open( ['method' => 'PATCH','route' => ['setting.update', Auth::user()->id]]) !!}
								<div class="form-group row">
									<label for="degree" class="col-sm-3 col-form-label text-md-right">Degree</label>

									<div class="col-sm-5">
										<input id="degree" type="text" name="degree" class="form-control" value="{{Auth::user()->degree }}" disabled="true">
									</div>
									
									<div class="col-sm-4">
										<button type="button" class="btn btn-outline-secondary  degree_edit" onclick="edit('degree')">Edit</button>
										<button type="submit" class="btn btn-outline-secondary  degree_edit_save">Save</button>
									</div>
								</div>
							{!! Form::close() !!}	
	
							{!! Form::open( ['method' => 'PATCH','route' => ['setting.update', Auth::user()->id]]) !!}
								<div class="form-group row">
									<label for="pass_year" class="col-sm-3 col-form-label text-md-right">Date of Passing</label>

									<div class="col-sm-5">
										<input id="pass_year" type="date"  name="pass_year" class="form-control" value="{{Auth::user()->pass_year }}" disabled="true">
									</div>
									
									<div class="col-sm-4">
										<button type="button" class="btn btn-outline-secondary  pass_year_edit" onclick="edit('pass_year')">Edit</button>
										<button type="submit" class="btn btn-outline-secondary  pass_year_edit_save">Save</button>
									</div>
								</div>
							{!! Form::close() !!}
	
							{!! Form::open( ['method' => 'PATCH','route' => ['setting.update', Auth::user()->id]]) !!}
								<div class="form-group row">
									<label for="cgpa" class="col-sm-3 col-form-label text-md-right">CGPA/GPA</label>

									<div class="col-sm-5">
										<input id="cgpa" type="text" name="cgpa" class="form-control" value="{{Auth::user()->cgpa }}" disabled="true">
									</div>
									
									<div class="col-sm-4">
										<button type="button" class="btn btn-outline-secondary  cgpa_edit" onclick="edit('cgpa')">Edit</button>
										<button type="submit" class="btn btn-outline-secondary  cgpa_edit_save">Save</button>
									</div>
								</div>
							{!! Form::close() !!}	
							
							{!! Form::open( ['method' => 'PATCH','route' => ['setting.update', Auth::user()->id]]) !!}
								<div class="form-group row">
									<label for="card" class="col-sm-3 col-form-label text-md-right">Id Card No</label>

									<div class="col-sm-5">
										<input id="card" type="text" name="card" class="form-control" value="{{Auth::user()->card }}" disabled="true">
									</div>
									
									<div class="col-sm-4">
										<button type="button" class="btn btn-outline-secondary  card_edit" onclick="edit('card')">Edit</button>
										<button type="submit" class="btn btn-outline-secondary  card_edit_save">Save</button>
									</div>
								</div>
							{!! Form::close() !!}
							
						</div>
					</div>
				</div>
				
				
				
				
				
				
				<div class="tab-pane fade" id="v-pills-family" role="tabpanel" aria-labelledby="v-pills-family-tab">
					<div class="card card-default" style="box-shadow: -1px 0px 24px -2px gray">
						<div class="card-header" style="text-align:center">Family Information</div>
						<div class="card-body">
							{!! Form::open( ['method' => 'PATCH','route' => ['setting.update', Auth::user()->id]]) !!}
								<div class="form-group row">
									<label for="father_name" class="col-sm-3 col-form-label text-md-right">Father Name</label>

									<div class="col-sm-5">
										<input id="father_name" type="text" name="father_name" class="form-control" value="{{Auth::user()->father_name }}" disabled="true">
									</div>
										
									<div class="col-sm-4">
										<button type="button" class="btn btn-outline-secondary  father_name_edit" onclick="edit('father_name')">Edit</button>
									
										<button type="submit" class="btn btn-outline-secondary father_name_edit_save">Save</button>
									</div>
								</div>
							{!! Form::close() !!}	


							{!! Form::open( ['method' => 'PATCH','route' => ['setting.update', Auth::user()->id]]) !!}
								<div class="form-group row">
									<label for="father_occupation" class="col-sm-3 col-form-label text-md-right">Father Occupation</label>

									<div class="col-sm-5">
										<input id="father_occupation" type="text" name="father_occupation" class="form-control" value="{{Auth::user()->father_occupation }}" disabled="true">
									</div>
										
									<div class="col-sm-4">
										<button type="button" class="btn btn-outline-secondary  father_occupation_edit" onclick="edit('father_occupation')">Edit</button>
									
										<button type="submit" class="btn btn-outline-secondary father_occupation_edit_save">Save</button>
									</div>
								</div>
							{!! Form::close() !!}	

							{!! Form::open( ['method' => 'PATCH','route' => ['setting.update', Auth::user()->id]]) !!}
								<div class="form-group row">
									<label for="mother_name" class="col-sm-3 col-form-label text-md-right">Mother Name</label>

									<div class="col-sm-5">
										<input id="mother_name" type="text" name="mother_name" class="form-control" value="{{Auth::user()->mother_name }}" disabled="true">
									</div>
										
									<div class="col-sm-4">
										<button type="button" class="btn btn-outline-secondary mother_name_edit" onclick="edit('mother_name')">Edit</button>
									
										<button type="submit" class="btn btn-outline-secondary mother_name_edit_save">Save</button>
									</div>
								</div>
							{!! Form::close() !!}	


							{!! Form::open( ['method' => 'PATCH','route' => ['setting.update', Auth::user()->id]]) !!}
								<div class="form-group row">
									<label for="mother_occupation" class="col-sm-3 col-form-label text-md-right">Mother Occupation</label>

									<div class="col-sm-5">
										<input id="mother_occupation" type="text" name="mother_occupation" class="form-control" value="{{Auth::user()->mother_occupation }}" disabled="true">
									</div>
										
									<div class="col-sm-4">
										<button type="button" class="btn btn-outline-secondary mother_occupation_edit" onclick="edit('mother_occupation')">Edit</button>
										<button type="submit" class="btn btn-outline-secondary mother_occupation_edit_save">Save</button>
									</div>
								</div>
							{!! Form::close() !!}							
						</div>
					</div>
				</div>
				
				<div class="tab-pane fade" id="v-pills-documents" role="tabpanel" aria-labelledby="v-pills-documents-tab">
					<div class="card card-default" style="box-shadow: -1px 0px 24px -2px gray">
						<div class="card-header" style="text-align:center">Documents</div>
						<div class="card-body">
							{!! Form::open( ['method' => 'PATCH','route' => ['setting.update', Auth::user()->id],'files'=>true]) !!}
								<div class="form-group row">
								
									<label for="user_image" class="col-sm-3 col-form-label text-md-right">Profile Image<img class="" <?php if((Auth::user()->user_image)){echo 'src="/uploads/profile_image/'.Auth::user()->user_image.'"';}?> style="border-radius:50% ; border: 2px solid #dee1e5; height:35px; width:35px"></label>

									<div class="col-sm-5">
										<input id="user_image" type="file" name="user_image" class="form-control"  disabled="true">
									</div>
										
									<div class="col-sm-4">
										<button type="button" class="btn btn-outline-secondary  user_image_edit" onclick="edit('user_image')">Edit</button>
										<button type="submit" class="btn btn-outline-secondary  user_image_edit_save" >Save</button>
									</div>
								</div>
							{!! Form::close() !!}


							{!! Form::open( ['method' => 'PATCH','route' => ['setting.update', Auth::user()->id],'files'=>true]) !!}
								<div class="form-group row">
								
									<label for="user_nid" class="col-sm-3 col-form-label text-md-right">National ID Image<img class="" <?php if((Auth::user()->user_nid)){echo 'src="/uploads/nid/'.Auth::user()->user_nid.'"';}?> style="border-radius:50% ; border: 2px solid #dee1e5; height:35px; width:35px"></label>

									<div class="col-sm-5">
										<input id="user_nid" type="file" name="user_nid" class="form-control"  disabled="true">
									</div>
										
									<div class="col-sm-4">
										<button type="button" class="btn btn-outline-secondary  user_nid_edit" onclick="edit('user_nid')">Edit</button>
										<button type="submit" class="btn btn-outline-secondary  user_nid_edit_save" >Save</button>
									</div>
								</div>
							{!! Form::close() !!}	

							{!! Form::open( ['method' => 'PATCH','route' => ['setting.update', Auth::user()->id],'files'=>true]) !!}
								<div class="form-group row">
								
									<label for="laci" class="col-sm-3 col-form-label text-md-right">Latest Academic Certificate  Image<img class="" <?php if((Auth::user()->laci)){echo 'src="/uploads/laci/'.Auth::user()->laci.'"';}?> style="border-radius:50% ; border: 2px solid #dee1e5; height:35px; width:35px"></label>

									<div class="col-sm-5">
										<input id="laci" type="file" name="laci" class="form-control"  disabled="true">
									</div>
										
									<div class="col-sm-4">
										<button type="button" class="btn btn-outline-secondary  laci_edit" onclick="edit('laci')">Edit</button>
										<button type="submit" class="btn btn-outline-secondary  laci_edit_save" >Save</button>
									</div>
								</div>
							{!! Form::close() !!}
						</div>
					</div>
				</div>
				
				
				<div class="tab-pane fade" id="v-pills-tuition" role="tabpanel" aria-labelledby="v-pills-tuition-tab">
					<div class="card card-default" style="box-shadow: -1px 0px 24px -2px gray">
						<div class="card-header" style="text-align:center">Tuition Related Information</div>
						<div class="card-body">
							{!! Form::open( ['method' => 'PATCH','route' => ['setting.update', Auth::user()->id]]) !!}
								<div class="form-group row">
									<label for="s_category" class="col-sm-3 col-form-label text-md-right">Category</label>

									<div class="col-sm-5">
										<ul class="list-group" name="s_category_output" id="s_category_output" style="box-shadow: -1px 0px 24px -2px gray">
										<?php 
											$pieces = explode(",", Auth::user()->s_category); 
											
											foreach($pieces as $p)
											{?><li class="list-group-item list-group-item-secondary"><?php echo $p;?></li>
											<?php } ?>
										</ul>
										<select class="custom-select mr-sm-2" id="s_category" name="s_category[]"  style="display:none" multiple>
											<option value="Bangla Medium">Bangla Medium</option>
											<option value="English Medium">English Medium</option>
											<option value="English Version">English Version</option>
											<option value="Test Preparation">Test Preparation</option>
											<option value="Admission Test">Admission Test</option>
											<option value="Language Learning">Language Learning</option>
											<option value="Religious Studies">Religious Studies</option>
											<option value="Arts">Arts</option>
											<option value="Professional Skill Development">Professional Skill Development</option>
										</select>
									</div>
										
									<div class="col-sm-4">
										<button type="button" class="btn btn-outline-secondary s_category_edit" onclick="multi_edit('s_category')">Edit</button>
									
										<button type="submit" class="btn btn-outline-secondary s_category_edit_save">Save</button>
									</div>
								</div>
							{!! Form::close() !!}

							{!! Form::open( ['method' => 'PATCH','route' => ['setting.update', Auth::user()->id]]) !!}
								<div class="form-group row">
									<label for="ypa" class="col-sm-3 col-form-label text-md-right">Your Preferred Area</label>

									<div class="col-sm-5">
										<ul class="list-group" name="ypa_output" id="ypa_output" style="box-shadow: -1px 0px 24px -2px gray">
										<?php 
											$pieces = explode(",", Auth::user()->ypa); 
											
											foreach($pieces as $p)
											{?><li class="list-group-item list-group-item-secondary"><?php echo $p;?></li>
											<?php } ?>
										</ul>
										<select class="custom-select mr-sm-2" id="ypa" name="ypa[]"  style="display:none" multiple>
											<option value="Adabor">Adabor</option>
											<option value="Azampur">Azampur</option>
											
											<option value="Badda">Badda</option>
											<option value="Bangsal">Bangsal</option>
											
											<option value="Cantonment">Cantonment</option>
											<option value="Chowkbazar">Chowkbazar</option>
											
											<option value="Demra">Demra</option>
											<option value="Dhanmondi">Dhanmondi</option>
											
											<option value="Gendaria">Gendaria</option>
											<option value="Gulshan">Gulshan</option>
											
											<option value="Hazaribagh">Hazaribagh</option>
											
											<option value="Kadamtali">Kadamtali</option>
											<option value="Kafrul">Kafrul</option>
											<option value="Kalabagan">Kalabagan</option>
											<option value="Kamrangirchar">Kamrangirchar</option>
											<option value="Khilgaon">Khilgaon</option>
											<option value="Khilkhet">Khilkhet</option>
											<option value="Kotwali">Kotwali</option>
											
											<option value="Lalbagh">Lalbagh</option>
											
											<option value="Mirpur">Mirpur</option>
											<option value="Mohammadpur">Mohammadpur</option>
											<option value="Motijheel">Motijheel</option>
											
											<option value="New Market">New Market</option>
											
											<option value="Pallabi">Pallabi</option>
											<option value="Paltan">Paltan</option>
											<option value="Panthapath">Panthapath</option>
											
											<option value="Ramna">Ramna</option>
											<option value="Rampura">Rampura</option>
											
											<option value="Sabujbagh">Sabujbagh</option>
											<option value="Shahbag">Shahbag</option>
											<option value="Sher-e-Bangla Nagar">Sher-e-Bangla Nagar</option>
											<option value="Shyampur">Shyampur</option>
											<option value="Sutrapur">Sutrapur</option>
											
											<option value="Tejgaon Industrial Area">Tejgaon Industrial Area</option>
											<option value="Tejgaon">Tejgaon</option>
											<option value="Uttar Khan">Uttar Khan</option>
											<option value="Uttara">Uttara</option>
											
											<option value="Vatara">Vatara</option>
											
											<option value="Wari">Wari</option>
										</select>
									</div>
										
									<div class="col-sm-4">
										<button type="button" class="btn btn-outline-secondary s_category_edit" onclick="multi_edit('ypa')">Edit</button>
									
										<button type="submit" class="btn btn-outline-secondary s_category_edit_save">Save</button>
									</div>
								</div>
							{!! Form::close() !!}	


							{!! Form::open( ['method' => 'PATCH','route' => ['setting.update', Auth::user()->id]]) !!}
								<div class="form-group row">
									<label for="tp" class="col-sm-3 col-form-label text-md-right">Tuition Place</label>

									<div class="col-sm-5">
										<ul class="list-group" name="tp_output" id="tp_output" style="box-shadow: -1px 0px 24px -2px gray">
										<?php 
											$pieces = explode(",", Auth::user()->tp); 
											
											foreach($pieces as $p)
											{?><li class="list-group-item list-group-item-secondary"><?php echo $p;?></li>
											<?php } ?>
										</ul>
										<select class="custom-select mr-sm-2" id="tp" name="tp[]"  style="display:none" multiple>
											<option value="Student Home">Student Home</option>
											<option value="My Home">My Home</option>
											<option value="Online">Online</option>
										</select>
									</div>
										
									<div class="col-sm-4">
										<button type="button" class="btn btn-outline-secondary s_category_edit" onclick="multi_edit('tp')">Edit</button>
									
										<button type="submit" class="btn btn-outline-secondary s_category_edit_save">Save</button>
									</div>
								</div>
							{!! Form::close() !!}
						</div>
					</div>
				</div>
				
			</div>
		</div>
    </div>
</div>

@endsection