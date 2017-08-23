@extends('layouts.app')

@section('content')
<div class="container ">
	<div class="row">
		<form action="/ticket-month" >
			<div class="col-md-12">
				<div class="out-form">
					<div class="booking-summary" data-toggle="collapse" data-target="#ticket-form" style="min-height: 50px;">
						<div class="pull-left col-xs-6 ">
						<h4>{{ $input['start_place']}} đến {{ $input['end_place']}}</h4>

						</div>
						<div class=" col-xs-6  text-right" style="margin-top: 15px;">
							<p>{{$input['number']}}  | {{$input['mode_lang']}}</p>
						</div>
						<div style="clear: both;"></div>

					</div>
					<div id="ticket-form" class="ticket-form collapse">
						<br>
						<div class="row">
							<div class="col-md-2 col-md-offset-1">
								<label>Loại chuyến bay</label>
							</div>
							<div class="col-xs-8">
								<span class="radio radio-primary">
									<input type="radio" name="mode" id="radio1" value="two_way">
									<label for="radio1">
										Khứ hồi
									</label>
								</span> &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;
								<span class="radio radio-primary">
									<input type="radio" checked="checked" name="mode" id="radio2" value="one_way">
									<label for="radio2">
										Một chiều
									</label>
								</span>
							</div>
						</div>
						<hr>    
						<div class="book-ticket">
							<div class="row">
								<div class="col-md-10 col-md-offset-1">
									<div class="inner" style="width: 50%" >
										<label class="label">Điểm đi</label>
										<input type="text"  onclick="openPopover('popover-start')" id="start_place" name="start_place" readonly placeholder="Điểm đi" value="{{ $input['start_place'] }}" />
										<div id="popover-start" class="dropdown-menu " style="padding: 0">
											<div class="popover-header text-left" style="background: #3097D1; height: 50px; padding: 15px 15px 0 15px" >
												<h4 class="no-margin text-white" style="display: inline-block;">Chọn lựa điểm đi</h4>
												<ul class="no-list" style="display: inline-block;">
													<li  class="active" ><a data-toggle="tab" href="#country" class="text-white">Nội địa</a></li>
													<li class="text-white">&nbsp;&nbsp; || &nbsp;&nbsp; </li>
													<li><a data-toggle="tab" href="#asia" class="text-white">Khu vực</a> </li>
													<li class="text-white">&nbsp;&nbsp; || &nbsp;&nbsp; </li>
													<li><a data-toggle="tab" href="#world" class="text-white"> Quốc tế</a></li>
												</ul>
											</div>
											<div class="popover-body">
												<div style="width: 550px">
													<div style="color: #555; padding: 15px 20px">
														<br>
														<div class="tab-content place-select">
															<div id="country" class="tab-pane fade in active">
																<div class="row">
																	<div class="col-xs-4">
																		<ul>
																			<li><a class="place" data-place="HN">Hà Nội</a></li>
																			<li><a class="place" data-place="HN1">Hà Nội1</a></li>
																			<li><a class="place" data-place="HN2">Hà Nội2</a></li>
																			<li><a class="place" data-place="HN3">Hà Nội3</a></li>
																			<li><a class="place" data-place="HN4">Hà Nội4</a></li>
																			<li><a class="place" data-place="HN5">Hà Nội5</a></li>
																		</ul>
																	</div>
																	<div class="col-xs-4">
																		<ul>
																			<li><a class="place" data-place="HN">Hà Nội</a></li>
																			<li><a class="place" data-place="HN1">Hà Nội1</a></li>
																			<li><a class="place" data-place="HN2">Hà Nội2</a></li>
																			<li><a class="place" data-place="HN3">Hà Nội3</a></li>
																			<li><a class="place" data-place="HN4">Hà Nội4</a></li>
																			<li><a class="place" data-place="HN5">Hà Nội5</a></li>
																		</ul>
																	</div>
																	<div class="col-xs-4">
																		<ul>
																			<li><a class="place" data-place="HN">Hà Nội</a></li>
																			<li><a class="place" data-place="HN1">Hà Nội1</a></li>
																			<li><a class="place" data-place="HN2">Hà Nội2</a></li>
																			<li><a class="place" data-place="HN3">Hà Nội3</a></li>
																			<li><a class="place" data-place="HN4">Hà Nội4</a></li>
																			<li><a class="place" data-place="HN5">Hà Nội5</a></li>
																		</ul>
																	</div>
																</div>
															</div>
															<div id="asia" class="tab-pane fade">
																<div class="row">
																	<div class="col-xs-4">
																		<ul>
																			<li><a class="place" data-place="HN" >Maylaisya</a></li>
																			<li><a class="place" data-place="HN" >Campuchia</a></li>
																			<li><a class="place" data-place="HN" >Thailand</a></li>
																			<li><a class="place" data-place="HN" >Laod</a></li>
																			<li><a class="place" data-place="HN" >Singapr</a></li>
																			<li><a class="place" data-place="HN" >Philipin</a></li>
																		</ul>
																	</div>
																	<div class="col-xs-4">
																		<ul>
																			<li><a class="place" data-place="HN" >Maylaisya</a></li>
																			<li><a class="place" data-place="HN" >Campuchia</a></li>
																			<li><a class="place" data-place="HN" >Thailand</a></li>
																			<li><a class="place" data-place="HN" >Laod</a></li>
																			<li><a class="place" data-place="HN" >Singapr</a></li>
																			<li><a class="place" data-place="HN" >Philipin</a></li>
																		</ul>
																	</div>
																	<div class="col-xs-4">
																		<ul>
																			<li><a class="place" data-place="HN" >Maylaisya</a></li>
																			<li><a class="place" data-place="HN" >Campuchia</a></li>
																			<li><a class="place" data-place="HN" >Thailand</a></li>
																			<li><a class="place" data-place="HN" >Laod</a></li>
																			<li><a class="place" data-place="HN" >Singapr</a></li>
																			<li><a class="place" data-place="HN" >Philipin</a></li>
																		</ul>
																	</div>

																</div>
															</div>
															<div id="world" class="tab-pane fade">
																<div class="row">
																	<div class="col-xs-4">
																		<ul>
																			<li><a class="place" data-place="HN">Australia</a></li>
																			<li><a class="place" data-place="HN" >Par (Pháp)</a></li>
																			<li><a class="place" data-place="HN" >Luân đôn (Anh)</a></li>
																			<li><a class="place" data-place="HN" >New york (Mỹ)</a></li>
																			<li><a class="place" data-place="HN" >Bắc Kinh (TQ)</a></li>
																			<li><a class="place" data-place="HN" >Tokyo (Nhật)</a></li>
																		</ul>
																	</div>
																	<div class="col-xs-4">
																		<ul>
																			<li><a class="place" data-place="HN">Australia</a></li>
																			<li><a class="place" data-place="HN" >Par (Pháp)</a></li>
																			<li><a class="place" data-place="HN" >Luân đôn (Anh)</a></li>
																			<li><a class="place" data-place="HN" >New york (Mỹ)</a></li>
																			<li><a class="place" data-place="HN" >Bắc Kinh (TQ)</a></li>
																			<li><a class="place" data-place="HN" >Tokyo (Nhật)</a></li>
																		</ul>
																	</div>
																	<div class="col-xs-4">
																		<ul>
																			<li><a class="place" data-place="HN">Australia</a></li>
																			<li><a class="place" data-place="HN" >Par (Pháp)</a></li>
																			<li><a class="place" data-place="HN" >Luân đôn (Anh)</a></li>
																			<li><a class="place" data-place="HN" >New york (Mỹ)</a></li>
																			<li><a class="place" data-place="HN" >Bắc Kinh (TQ)</a></li>
																			<li><a class="place" data-place="HN" >Tokyo (Nhật)</a></li>
																		</ul>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>

											</div>
											<div class="text-center" style="height: 56px;">
												<button type=button class="btn-end" onClick="update(); closePopover('popover-start');">
												</button>
											</div>
										</div>
									</div>
									<div class="inner"  style="width: 50%" >
										<label class="label">Điểm đến</label>
										<button class="btn replace hidden-xs" type="button" onclick="change_place()"> <i class="fa fa-exchange"></i></button>
										<input type="text" onclick="openPopover('popover-end')" id="end_place" name="end_place" readonly placeholder="Điểm đến" style="padding-left: 45px;" value="{{ $input['end_place'] }}"/>
										<div id="popover-end" class="dropdown-menu " style="padding: 0">
											<div class="popover-header text-left" style="background: #3097D1; height: 50px; padding: 15px 15px 0 15px" >

												<h4 class="no-margin text-white" style="display: inline-block;">Chọn lựa điểm đến</h4>
												<ul class="no-list" style="display: inline-block;">
													<li  class="active" ><a data-toggle="tab" href="#country2" class="text-white">Nội địa</a></li>
													<li class="text-white">&nbsp;&nbsp; || &nbsp;&nbsp; </li>
													<li><a data-toggle="tab" href="#asia2" class="text-white">Khu vực</a> </li>
													<li class="text-white">&nbsp;&nbsp; || &nbsp;&nbsp; </li>
													<li><a data-toggle="tab" href="#world2" class="text-white"> Quốc tế</a></li>
												</ul>
											</div>
											<div class="popover-body">
												<div style="width: 550px">
													<div style="color: #555; padding: 15px 20px">
														<br>
														<div class="tab-content place-select">
															<div id="country2" class="tab-pane fade in active">
																<div class="row">
																	<div class="col-xs-4">
																		<ul>
																			<li><a class="place" data-place="HN">Hà Nội</a></li>
																			<li><a class="place" data-place="HN1">Hà Nội1</a></li>
																			<li><a class="place" data-place="HN2">Hà Nội2</a></li>
																			<li><a class="place" data-place="HN3">Hà Nội3</a></li>
																			<li><a class="place" data-place="HN4">Hà Nội4</a></li>
																			<li><a class="place" data-place="HN5">Hà Nội5</a></li>
																		</ul>
																	</div>
																	<div class="col-xs-4">
																		<ul>
																			<li><a class="place" data-place="HN">Hà Nội</a></li>
																			<li><a class="place" data-place="HN1">Hà Nội1</a></li>
																			<li><a class="place" data-place="HN2">Hà Nội2</a></li>
																			<li><a class="place" data-place="HN3">Hà Nội3</a></li>
																			<li><a class="place" data-place="HN4">Hà Nội4</a></li>
																			<li><a class="place" data-place="HN5">Hà Nội5</a></li>
																		</ul>
																	</div>
																	<div class="col-xs-4">
																		<ul>
																			<li><a class="place" data-place="HN">Hà Nội</a></li>
																			<li><a class="place" data-place="HN1">Hà Nội1</a></li>
																			<li><a class="place" data-place="HN2">Hà Nội2</a></li>
																			<li><a class="place" data-place="HN3">Hà Nội3</a></li>
																			<li><a class="place" data-place="HN4">Hà Nội4</a></li>
																			<li><a class="place" data-place="HN5">Hà Nội5</a></li>
																		</ul>
																	</div>
																</div>
															</div>
															<div id="asia2" class="tab-pane fade">
																<div class="row">
																	<div class="col-xs-4">
																		<ul>
																			<li><a class="place" data-place="HN" >Maylaisya</a></li>
																			<li><a class="place" data-place="HN" >Campuchia</a></li>
																			<li><a class="place" data-place="HN" >Thailand</a></li>
																			<li><a class="place" data-place="HN" >Laod</a></li>
																			<li><a class="place" data-place="HN" >Singapr</a></li>
																			<li><a class="place" data-place="HN" >Philipin</a></li>
																		</ul>
																	</div>
																	<div class="col-xs-4">
																		<ul>
																			<li><a class="place" data-place="HN" >Maylaisya</a></li>
																			<li><a class="place" data-place="HN" >Campuchia</a></li>
																			<li><a class="place" data-place="HN" >Thailand</a></li>
																			<li><a class="place" data-place="HN" >Laod</a></li>
																			<li><a class="place" data-place="HN" >Singapr</a></li>
																			<li><a class="place" data-place="HN" >Philipin</a></li>
																		</ul>
																	</div>
																	<div class="col-xs-4">
																		<ul>
																			<li><a class="place" data-place="HN" >Maylaisya</a></li>
																			<li><a class="place" data-place="HN" >Campuchia</a></li>
																			<li><a class="place" data-place="HN" >Thailand</a></li>
																			<li><a class="place" data-place="HN" >Laod</a></li>
																			<li><a class="place" data-place="HN" >Singapr</a></li>
																			<li><a class="place" data-place="HN" >Philipin</a></li>
																		</ul>
																	</div>

																</div>
															</div>
															<div id="world2" class="tab-pane fade">
																<div class="row">
																	<div class="col-xs-4">
																		<ul>
																			<li><a class="place" data-place="HN">Australia</a></li>
																			<li><a class="place" data-place="HN" >Par (Pháp)</a></li>
																			<li><a class="place" data-place="HN" >Luân đôn (Anh)</a></li>
																			<li><a class="place" data-place="HN" >New york (Mỹ)</a></li>
																			<li><a class="place" data-place="HN" >Bắc Kinh (TQ)</a></li>
																			<li><a class="place" data-place="HN" >Tokyo (Nhật)</a></li>
																		</ul>
																	</div>
																	<div class="col-xs-4">
																		<ul>
																			<li><a class="place" data-place="HN">Australia</a></li>
																			<li><a class="place" data-place="HN" >Par (Pháp)</a></li>
																			<li><a class="place" data-place="HN" >Luân đôn (Anh)</a></li>
																			<li><a class="place" data-place="HN" >New york (Mỹ)</a></li>
																			<li><a class="place" data-place="HN" >Bắc Kinh (TQ)</a></li>
																			<li><a class="place" data-place="HN" >Tokyo (Nhật)</a></li>
																		</ul>
																	</div>
																	<div class="col-xs-4">
																		<ul>
																			<li><a class="place" data-place="HN">Australia</a></li>
																			<li><a class="place" data-place="HN" >Par (Pháp)</a></li>
																			<li><a class="place" data-place="HN" >Luân đôn (Anh)</a></li>
																			<li><a class="place" data-place="HN" >New york (Mỹ)</a></li>
																			<li><a class="place" data-place="HN" >Bắc Kinh (TQ)</a></li>
																			<li><a class="place" data-place="HN" >Tokyo (Nhật)</a></li>
																		</ul>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>

											</div>
											<div class="text-center" style="height: 56px;">
												<button type="button" class="btn-end" onClick="update(); closePopover('popover-end');">
												</button>
											</div>
										</div>
									</div>
								</div>
							</div>

							<hr>
							<div class="row passenger">
								<div class="col-md-10 col-md-offset-1">
									<input type="hidden" name="number" value="{{ $input['number']}}" id="number-passenger">
									<div class="row ">
										<div class="col-sm-4 text-center">
											<button type="button" class="btn" onClick="down('adult')"><i class="fa fa-minus"></i></button>
											<span class="nb" id="adult"> {{$input['adult']}} </span> 
											<button type="button" class="btn" onClick="up('adult')"><i class="fa fa-plus"></i></button>
											<br>
											<input type="hidden" name="adult" id="adult-value" value="{{$input['adult']}}">
											<span> Người lớn (hơn 12 tuổi)</span>
											<br>

										</div>
										<div class="col-sm-4 text-center">
											<button type="button" class="btn" onClick="down('children')"><i class="fa fa-minus"></i></button>
											<span class="nb" id="children"> {{$input['children']}} </span> 
											<button type="button" class="btn" onClick="up('children')"><i class="fa fa-plus"></i></button>
											<br> 
											<input type="hidden" name="children" id="children-value" value="{{$input['children']}}">
											<span> Trẻ em (từ 2 đến 11 tuổi)</span>
											<br>

										</div>
										<div class="col-sm-4 text-center">
											<button type="button" class="btn" onClick="down('baby')"><i class="fa fa-minus"></i></button>
											<span class="nb" id="baby"> {{$input['baby']}} </span> 
											<button type="button" class="btn" onClick="up('baby')"><i class="fa fa-plus"></i></button>
											<br>
											<input type="hidden" name="baby" id="baby-value" value="{{$input['baby']}}">
											<span> Trẻ sơ sinh (dưới 24 tháng tuổi)</span>
										</div>
									</div>

								</div>
							</div>
						</div>
						<hr>
						<div class="row text-center">
							<button class="btn btn-success" type="submit"><i class="fa fa-search"></i> &nbsp; Tìm chuyến bay</button>
						</div>
						<br>
						<!-- </div> -->
					</div>
				</div>
				<br>
				<a href="{{ '/ticket-month?'.$input['current_url'] }}"><strong>Hiển thị theo tháng </strong></a> &nbsp;&nbsp; || &nbsp;&nbsp; <a href="{{ '/ticket?'.$input['current_url'] }}">Hiện thị chuyến bay</a>
			</form>

			<div class="result">
				<br>
				<div class="row">
					<div class="col-md-6">
						<div id="calendar"></div>

					</div>
					<div class="col-md-6">
						<div id="calendar-back"></div>
					</div>
				</div>

			</div>
		</div>
	</div>
</div>
</div>
<br>
<br>
@component('modal.modal_daydetail')
@endcomponent

@component('component.footer')
@endcomponent

<script type="text/javascript">
	$('#end_date').dateDropper();
	$( "#start_date" ).dateDropper();

	var adult = {{ $input['adult']}};
	var children = {{ $input['children']}};
	var baby = {{ $input['baby']}};
	function down(type){
		if(type == 'adult'){
			if(adult > 0)
				adult = adult - 1;
		}else if(type == 'children'){
			if(children > 0)
				children = children - 1;
		}else if(type == 'baby'){
			if(baby > 0)
				baby = baby - 1;
		}
		update();
	}
	function up(type){
		if(type == 'adult'){
			if(adult < 99)
				adult = adult + 1;
		}else if(type == 'children'){
			if(children < 99)
				children = children + 1;
		}else if(type == 'baby'){
			if(baby < 99)
				baby = baby + 1;
		}
		update();
	}
	function update(){
		$('#adult').html(adult);
		$('#adult-value').val(adult);
		$('#children').html(children);
		$('#children-value').val(children);
		$('#baby').html(baby);
		$('#baby-value').val(baby);
		var total = adult + children + baby;
		$('#number-passenger').val(total + ' hành khách');
	}
	function changeTimeStart(){
		var time = $('#time-start').val();
		time = time.split(",");
		var start = mintohour(time[0]*1);
		var end = mintohour(time[1]*1);

		$('#show-start').html(start + ' đến ' + end);
	}
	function changeTimeEnd(){
		var time = $('#time-end').val();
		time = time.split(",");
		var start = mintohour(time[0]*1);
		var end = mintohour(time[1]*1);

		$('#show-end').html(start + ' đến ' + end);
	}
	function mintohour(min){

		var hours = Math.floor(min / 60);          
		var minutes = min % 60;
		if (minutes == '0'){ minutes = '00'}
			return hours+'g '+minutes+' phút';
	}
	$('#calendar').fullCalendar({
		eventClick: function(calEvent, jsEvent, view) {

			$(this).css('border-color', 'red');
			$("#day-detail").modal()

		},
		events: [
		{
			title  : 'event1',
			start  : '2017-07-03',
		},
		{
			title  : 'event2',
			start  : '2017-07-02',
		},
		{
			title  : 'event3',
			start  : '2017-07-01',
		},
		{
			title  : 'event1',
			start  : '2017-07-06',
		},
		{
			title  : 'event2',
			start  : '2017-07-10',
		},
		{
			title  : 'event3',
			start  : '2017-07-15',
		},
		{
			title  : 'event1',
			start  : '2017-07-20',
		},
		{
			title  : 'event2',
			start  : '2017-07-27',
		},
		{
			title  : 'event3',
			start  : '2017-08-05',
		}
		],
		eventColor: 'black',
		dayRender: function (ddate, cell) {

			var color = ['#d4ffd1', '#fff7d1', '#ffcccc'];
			var item = color[Math.floor(Math.random()*color.length)];
			cell.css("background-color", item);

		} 
	});
	$('#calendar-back').fullCalendar({
		eventClick: function(calEvent, jsEvent, view) {

			$(this).css('border-color', 'red');
			$("#day-detail").modal()

		},
		events: [
		{
			title  : 'event1',
			start  : '2017-07-03',
		},
		{
			title  : 'event2',
			start  : '2017-07-02',
		},
		{
			title  : 'event3',
			start  : '2017-07-01',
		}
		],
		eventColor: 'black',
		dayRender: function (ddate, cell) {

			var color = ['#d4ffd1', '#fff7d1', '#ffcccc'];
			var item = color[Math.floor(Math.random()*color.length)];
			cell.css("background-color", item);

		} 
	});
	function openPopover(id){
		$('#'+id).fadeIn(100);
	}
	function closePopover(id){
		$('#'+id).hide();
	}
	function change_place(){
		var tmp = $('#start_place').val();
		$('#start_place').val($('#end_place').val());
		$('#end_place').val(tmp);
	}
	$('#popover-start .place').click(function(event){
		console.log(event);
            // var data = $(this).data('place');
            var data = $(this).html();

            $('#start_place').val(data);
            $("#popover-start").hide();
        })
	$('#popover-end .place').click(function(event){
		console.log(event);
            // var data = $(this).data('place');
            var data = $(this).html();

            $('#end_place').val(data);
            $("#popover-end").hide();
        })

	$(document).mouseup(function(e){
		var passenger_div = $("#popover-passenger");
		if (!passenger_div.is(e.target) && passenger_div.has(e.target).length === 0){
			passenger_div.hide();
		}

		var start_div = $("#popover-start");
		if (!start_div.is(e.target) && start_div.has(e.target).length === 0){
			start_div.hide();
		}
		var end_div = $("#popover-end");
		if (!end_div.is(e.target) && end_div.has(e.target).length === 0){
			end_div.hide();
		}

	});


</script>
@endsection

