@extends('layouts.app')
@section('content')
<div class="container">
<div class="card">
	<div class="card-header bg-success text-light"><i class="fa fa-briefcase fa-3x"></i> <b class="p-3" style="font-size: 45px;">WAEC CLASS</b> <span class="float-right mt-3" style="font-size: 33px;">{{ $mycount }} Video(s)</span></div>
	<div class="card-body">
		@foreach ($waec_vid as $waec_vids)
			<div class="row p-3 rounded" style="border: 1px solid #000;">
				<div class="col-md-4">
					<video controls style="width:150px;height:150px;" 
                src="{{ asset($waec_vids["tutorial_videos"]) }}" id="vivid"></video>
				</div>

				<div class="col-md-8">
					<div class="mr-lg-5" style="margin-left: -131px;"> 
						<h2 class="text-primary ">{{ $waec_vids['video_title'] }}</h2><hr>
					<p>
						{{ $waec_vids['description'] }}
					</p>
					<a href="{{ asset($waec_vids["tutorial_videos"]) }}" class="btn btn-success float-right" type="button">Download Now</a>
					</div>
				</div>

			</div>
			<p class="mb-lg-2"></p>
		@endforeach
		</div>
	</div>
</div>
@endsection