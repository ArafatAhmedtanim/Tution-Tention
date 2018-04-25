@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4 col-sm-0">
            <div class="card card-default" style="box-shadow: -1px 0px 24px -2px gray">
                <div class="card-header" style="text-align:center">Profile</div>
				
				<div class="card-body" style="text-align:center">
					
					<?php
						$count=0;
						
						if(Auth::user()->email)$count=$count+1;
						if(Auth::user()->gender)$count=$count+1;
						if(Auth::user()->password)$count=$count+1;
						if(Auth::user()->dob)$count=$count+1;
						if(Auth::user()->tel)$count=$count+1;
						if(Auth::user()->religion)$count=$count+1;
						if(Auth::user()->s_category)$count=$count+1;
						if(Auth::user()->ypa)$count=$count+1;
						if(Auth::user()->tp)$count=$count+1;
						if(Auth::user()->area)$count=$count+1;
						if(Auth::user()->loe)$count=$count+1;
						if(Auth::user()->degree)$count=$count+1;
						if(Auth::user()->ygn)$count=$count+1;
						if(Auth::user()->institute)$count=$count+1;
						if(Auth::user()->card)$count=$count+1;
						if(Auth::user()->cgpa)$count=$count+1;
						if(Auth::user()->pass_year)$count=$count+1;
						if(Auth::user()->curriculam)$count=$count+1;
						if(Auth::user()->father_name)$count=$count+1;
						if(Auth::user()->father_occupation)$count=$count+1;
						if(Auth::user()->mother_name)$count=$count+1;
						if(Auth::user()->mother_occupation)$count=$count+1;
						if(Auth::user()->user_image)$count=$count+1;
						if(Auth::user()->user_nid)$count=$count+1;
						if(Auth::user()->laci)$count=$count+1;
					
					?>
					
					<div class="img" style="padding: 10px 10px 10px 10px">
						<?php 
							if ((Auth::user()->user_image)){
						?>
								<img class="" src="/uploads/profile_image/{{Auth::user()->user_image }}" style="border-radius:50% ; border: 4px solid #d9d9d9 ">
						<?php
							}else{
						?>
								<img class="" src="/uploads/profile_image/default.jpg" style="border-radius:50%; border: 4px solid #d9d9d9; height:100px; width:100px">
						<?php 
							}
						?>	
					</div>
					
					<div class="progress" style="height:10px; padding: 0px 0px 10px 0px">
						<div class="progress-bar" role="progressbar" style="background-color:#a6a6a6; height:10px; width: <?php echo $count*4?>%" aria-valuenow="<?php echo $count*4?>" aria-valuemin="0" aria-valuemax="100"><?php echo $count*4?>%</div>
					</div>
					
					<div class="information" style="padding: 10px 0px 0px 0px">
						<p>{{Auth::user()->name}}</p>
						<p>{{Auth::user()->email}}</p>
					</div>
				</div>
            </div>
        </div>
		
		<div class="col-md-8 col-sm-12">
            <div class="card card-default" style="box-shadow: -1px 0px 24px -2px gray">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
					
					<?php
						
					?>
					
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
