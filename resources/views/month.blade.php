@extends('layouts.app')

@section('content')
<div class="container ">
	<div class="row">
		<div class="col-md-12">
			<div class="out-form hidden">
				<div class="booking-summary" data-toggle="collapse" data-target="#ticket-form">
					<div class="pull-left col-xs-6 ">
						<h4>TP Hồ Chí Minh đến Hà Nội</h4>
						<p>3 hành khách | 2 chiều</p>
					</div>
					<div class=" col-xs-6  text-right" style="margin-top: 15px;">
						<br class="hidden-xs">
						<p>Thời gian đi : 20/05/2017 <span class="hidden-xs">||</span> <br class="hidden-sm hidden-md hidden-lg"><br class="hidden-sm hidden-md hidden-lg"> Thời gian về : 20/05/2017</p>
					</div>
					<div style="clear: both;"></div>

				</div>
				<div id="ticket-form" class="ticket-form collapse">
					<br>
					<div class="row">
						<div class="col-md-2">
							<label>Loại chuyến bay</label>
						</div>
						<div class="col-xs-10">
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
							<div class="col-md-2">
								<label>Địa điểm</label>
							</div>
							<div class="col-md-10">
								<div class="inner " style="width: 50%" >
									<label class="label">Điểm đi</label>
									<select type="text"  id="start_place" name="start_place" placeholder="Điểm đi">
										<option>Hồ Chí Minh</option>
										<option>Hà Nội</option>
										<option>Hà Nội</option>
										<option>Hà Nội</option>
										<option>Hà Nội</option>
										<option>Hà Nội</option>
									</select>
								</div>
								<div class="inner"  style="width: 50%" >
									<label class="label">Điểm đến</label>
									<button class="btn replace"> <i class="fa fa-exchange"></i></button>
									<select type="text"  id="end_place" name="end_place" placeholder="Điểm đến">
										<option>Hồ Chí Minh</option>
										<option>Hà Nội</option>
										<option>Hà Nội</option>
										<option>Hà Nội</option>
										<option>Hà Nội</option>
										<option>Hà Nội</option>
									</select>
								</div>
							</div>
						</div>
						<hr>
						<div class="row">
							<div class="col-md-2"><label>Thời gian</label></div>
							<div class="col-md-10">
								<div class="inner" style="width: 50%" >

									<label class="label">Ngày đến</label>
									<input type="text" class="" id="start_date" data-default-date="11-13-2016" data-large-mode="true" data-large-default="true" data-lang="vi" value="20/10/2017" data-min-year="2016" data-max-year="2030" name="start_date" placeholder="Ngày đi">
									<i class="fa fa-calendar input-icon"></i>
								</div>
								<div class="inner" style="width: 50%" >

									<label class="label">Ngày khứ hồi</label>
									<input type="text" data-default-date="11-13-2016" data-large-mode="true" data-large-default="true"  data-lang="vi" id="end_date" data-min-year="2016"  data-max-year="2030" value="20/12/2017" name="end_date" placeholder="Ngày khứ hồi">
									<i class="fa fa-calendar input-icon"></i>
								</div>
							</div>

						</div>

						<hr>
						<div class="row passenger">
							<div class="col-md-2">
								<label>Hành khách</label>
							</div>
							<div class="col-md-10">
								<div class="row ">
									<div class="col-sm-4 text-center">
										<button class="btn" onClick="down('adult')"><i class="fa fa-minus"></i></button>
										<span class="nb" id="adult"> 1 </span> 
										<button class="btn" onClick="up('adult')"><i class="fa fa-plus"></i></button>
										<br>
										<span> Người lớn (hơn 12 tuổi)</span>
										<br>

									</div>
									<div class="col-sm-4 text-center">
										<button class="btn" onClick="down('children')"><i class="fa fa-minus"></i></button>
										<span class="nb" id="children"> 0 </span> 
										<button class="btn" onClick="up('children')"><i class="fa fa-plus"></i></button>
										<br> 
										<span> Trẻ em (từ 2 đến 11 tuổi)</span>
										<br>

									</div>
									<div class="col-sm-4 text-center">
										<button class="btn" onClick="down('baby')"><i class="fa fa-minus"></i></button>
										<span class="nb" id="baby"> 0 </span> 
										<button class="btn" onClick="up('baby')"><i class="fa fa-plus"></i></button>
										<br>
										<span> Trẻ sơ sinh (dưới 24 tháng tuổi)</span>
									</div>
								</div>

							</div>
						</div>
					</div>
					<hr>
					<div class="row text-center">
						<button class="btn btn-success"><i class="fa fa-search"></i> &nbsp; Tìm chuyến bay</button>
					</div>
					<br>
					<!-- </div> -->
				</div>
			</div>
			<br>
			<a href="{{ url('/ticket-month') }}"><strong>Hiển thị theo tháng </strong></a> &nbsp;&nbsp; || &nbsp;&nbsp; <a href="{{ url('/ticket') }}">Hiện thị chuyến bay</a>
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

	var adult = 1;
	var children = 0;
	var baby = 0;
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
		$('#children').html(children);
		$('#baby').html(baby);
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

</script>
@endsection

