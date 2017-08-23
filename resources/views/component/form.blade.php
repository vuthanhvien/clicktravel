<div class="form">
    <br>
    <form action="/ticket" id="formid">
        <div class="text-center">

            <span class="radio radio-primary">
                <input type="radio" name="mode" id="radio2" value="one_way" @if($mode == 'one_way') checked="checked"  @endif onclick="modechange('one_way')">
                <label for="radio2">
                    Một chiều
                </label>
            </span> &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;
            <span class="radio radio-primary">
                <input type="radio" name="mode" id="radio1" value="two_way" @if($mode == 'two_way') checked="checked"  @endif  onclick="modechange('two_way')">
                <label for="radio1">
                    Khứ hồi
                </label>
            </span>
        </div>
        <br>
        <div class="form-booking">
            <div class="select-place" >
                <div class="row">
                    <div class="col-md-6" >
                        <label>NƠI ĐI</label>
                        <input type="text" onclick="openPopover('popover-start')" id="start_place" name="start_place" placeholder="Điểm đi" required value="{{$start_place}}" readonly="" />
                        <div id="popover-start" class="dropdown-menu location-select">
                            <div class="popover-header text-left" style="background: #3097D1; height: 50px; padding: 15px 15px 0 15px" >
                                <h4 class="no-margin hidden-xs text-white" style="display: inline-block;">Chọn lựa điểm đi &nbsp;&nbsp;&nbsp;&nbsp;</h4>
                                <ul class="no-list no-padding text-white" style="display: inline-block;">
                                    <li class="active"  ><a data-toggle="tab" href="#country" class="text-white">Nội địa</a></li>
                                    <li>&nbsp;&nbsp; || &nbsp;&nbsp; </li>
                                    <li ><a data-toggle="tab" href="#asia" class="text-white">Khu vực - Quốc tế</a></li>
                                </ul>
                            </div>
                            <div class="popover-body">
                                <br>
                                <div class="tab-content place-select">
                                    <div id="country" class="tab-pane fade in active ">
                                        <div class="row">
                                            <div class="col-xs-5 col-sm-4">
                                                <ul class="airports_vn1">

                                                </ul>
                                            </div>
                                            <div class="col-xs-7 col-sm-4">
                                                <ul class="airports_vn2">

                                                </ul>
                                            </div>
                                            <div class="col-xs-6 col-sm-4">
                                                <ul class="airports_vn3">

                                                </ul>
                                            </div>
                                        </div>
                                        <!-- <h4 style="text-align: center; margin-top: 50">Comming soon</h4> -->
                                    </div>
                                    <div id="asia" class="tab-pane fade">
                                        <div class="row">
                                            <div class="col-md-12" style="padding-left: 25px; padding-right: 25px">
                                                    <p><small>*Sử dụng tiếng anh tìm kiếm để có kết quả đúng nhất</small></p>
                                                <div class="input-group">
                                                    <input onclick="openPopover('result-search-first'); search_airport('first')" type="text" class="form-control" id="first" aria-describedby="basic-addon3" style="height: 35px; padding-top: 7px; font-size: 14px" placeholder="Điền tên hoặc mã sân bay, thành phố"  autocomplete="false">
                                                    <span class="input-group-addon" id="basic-addon3" style="cursor: pointer;" onclick="search_airport('first')" >Tìm kiếm &nbsp;&nbsp;&nbsp;<i class="fa fa-search"></i></span>

                                                </div>
                                                <div id="result-search-first" style="position: absolute; z-index: 5; background: white; width: 91%; border: 1px solid #ccc; display: none">
                                                    <ul></ul>
                                                </div>
                                                <br>
                                            </div>
                                            <div class="col-xs-5 col-sm-4">
                                                <ul>
                                                    <li><a class="place" >Bangkok (BKK)</a></li>
                                                    <li><a class="place" >Singapore (SIN)</a></li>
                                                    <li><a class="place" >Manila  (MNL)</a></li>
                                                    <li><a class="place" >Phnom Penh  (PNH)</a></li>
                                                    <li><a class="place" >Viêng Chăn (VTE)</a></li>
                                                    <li><a class="place" >Kuala Lumpur  (KUL)</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-xs-7 col-sm-4">
                                                <ul>
                                                    <li><a class="place" >Jakarta (CGK)</a></li>
                                                    <li><a class="place" >Myitkyina (MYT)</a></li>
                                                    <li><a class="place" >Seoul (SEL)</a></li>
                                                    <li><a class="place" >Tokyo (TYO)</a></li>
                                                    <li><a class="place" >Bắc Kinh (PEK)</a></li>
                                                    <li><a class="place" >Quảng Châu (CAN)</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-xs-6 col-sm-4">
                                                <ul>
                                                    <li><a class="place" >Hồng Kông (HKG)</a></li>
                                                    <li><a class="place" >Paris (PAR)</a></li>
                                                    <li><a class="place" >Frankfurt (FRA)</a></li>
                                                    <li><a class="place" >Sydney (SYD)</a></li>
                                                    <li><a class="place" >Melbourne (MEL)</a></li>
                                                    <li><a class="place" >Los Angeles (LAX)</a></li>
                                                    <li><a class="place"  >San Francisco (SFO)</a></li>
                                                </ul>
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
                    <div class="col-md-6" >
                        <label>NƠI ĐẾN</label>
                        <!-- <button class="btn replace hidden-xs hidden-sm" type="button" onclick="change_place()"> <i class="fa fa-exchange"></i></button> -->
                        <input type="text" onclick="openPopover('popover-end')" id="end_place" name="end_place"  placeholder="Điểm đến" required  value="{{$end_place}}"  readonly=""  />
                        <div id="popover-end" class="dropdown-menu location-select" style="padding: 0">
                            <div class="popover-header text-left" style="background: #3097D1; height: 50px; padding: 15px 15px 0 15px" >

                                <h4 class="no-margin hidden-xs text-white" style="display: inline-block;">Chọn lựa điểm đến &nbsp;&nbsp;&nbsp;&nbsp;</h4>
                                <ul class="no-list no-padding text-white" style="display: inline-block;">
                                    <li  ><a data-toggle="tab" href="#country2" class="text-white">Nội địa</a></li>
                                    <li>&nbsp;&nbsp; || &nbsp;&nbsp; </li>
                                    <li  class="active"><a data-toggle="tab" href="#asia2" class="text-white">Khu vực - Quốc tế</a></li>
                                </ul>
                            </div>
                            <div class="popover-body">
                                <br>
                                <div class="tab-content place-select">
                                    <div id="country2" class="tab-pane fade">
                                     <div class="row">
                                        <div class="col-xs-5 col-sm-4">
                                            <ul class="airports_vn1">

                                            </ul>
                                        </div>
                                        <div class="col-xs-7 col-sm-4">
                                            <ul class="airports_vn2">

                                            </ul>
                                        </div>
                                        <div class="col-xs-6 col-sm-4">
                                            <ul class="airports_vn3">

                                            </ul>
                                        </div>
                                    </div>

                                </div>
                                <div id="asia2" class="tab-pane fade in active">
                                    <div class="row">
                                        <div class="col-md-12" style="padding-left: 25px; padding-right: 25px">
                                            <p><small>*Sử dụng tiếng anh tìm kiếm để có kết quả đúng nhất</small></p>
                                            <div class="input-group">
                                                <input onclick="openPopover('result-search-back'); search_airport('back')" type="text" class="form-control" id="back" aria-describedby="basic-addon3" style="height: 35px; padding-top: 7px; font-size: 14px" placeholder="Điền tên hoặc mã sân bay, thành phố"  autocomplete="false">

                                                <span class="input-group-addon" id="basic-addon3" style="cursor: pointer;" onclick="search_airport('back')">Tìm kiếm &nbsp;&nbsp;&nbsp;<i class="fa fa-search"></i></span>
                                            </div>
                                            <div id="result-search-back" style="position: absolute; z-index: 5; background: white; width: 91%; border: 1px solid #ccc; display: none">
                                                <ul></ul>
                                            </div>
                                            <br>
                                        </div>

                                        <div class="col-xs-5 col-sm-4">
                                            <ul>
                                                <li><a class="place" >Bangkok (BKK)</a></li>
                                                <li><a class="place" >Singapore (SIN)</a></li>
                                                <li><a class="place" >Manila  (MNL)</a></li>
                                                <li><a class="place" >Phnom Penh  (PNH)</a></li>
                                                <li><a class="place" >Viêng Chăn (VTE)</a></li>
                                                <li><a class="place" >Kuala Lumpur  (KUL)</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-xs-7 col-sm-4">
                                            <ul>
                                                <li><a class="place" >Jakarta (CGK)</a></li>
                                                <li><a class="place" >Myitkyina (MYT)</a></li>
                                                <li><a class="place" >Seoul (SEL)</a></li>
                                                <li><a class="place" >Tokyo (TYO)</a></li>
                                                <li><a class="place" >Bắc Kinh (PEK)</a></li>
                                                <li><a class="place" >Quảng Châu (CAN)</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-xs-6 col-sm-4">
                                            <ul>
                                                <li><a class="place" >Hồng Kông (HKG)</a></li>
                                                <li><a class="place" >Paris (PAR)</a></li>
                                                <li><a class="place" >Frankfurt (FRA)</a></li>
                                                <li><a class="place" >Sydney (SYD)</a></li>
                                                <li><a class="place" >Melbourne (MEL)</a></li>
                                                <li><a class="place" >Los Angeles (LAX)</a></li>
                                                <li><a class="place"  >San Francisco (SFO)</a></li>
                                            </ul>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-center" style="height: 56px;">
                            <button type=button class="btn-end" onClick="update(); closePopover('popover-end');">
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="select-date">
            <div class="row">
                <div class="col-md-6">
                    <i class="fa fa-calendar input-icon"></i>
                    <input type="text" id="start_date"  onchange="change_start()" placeholder="Ngày đi" required name="start_date" readonly="" value="{{$start_date}}">
                </div>

                <div class="col-md-6" id="end_date_section">
                    <i class="fa fa-calendar input-icon"></i>
                    <input type="text" placeholder="Ngày về" id="end_date" onchange="update_mode()" required name="end_date" readonly="" value="{{$end_date}}">
                </div>
            </div>
        </div>
        <div class="number">
            <div class="row">
                <div class="col-md-4"> 
                    <i class="fa fa-user input-icon"></i>
                    <p class="des">Người lớn</p>
                    <select name="adult" required="" value="{{$adult}}">
                        <option @if($adult == '1') selected @endif >1</option>
                        <option @if($adult == '2') selected @endif >2</option>
                        <option @if($adult == '3') selected @endif >3</option>
                        <option @if($adult == '4') selected @endif >4</option>
                        <option @if($adult == '5') selected @endif >5</option>
                        <option @if($adult == '6') selected @endif >6</option>
                        <option @if($adult == '7') selected @endif >7</option>
                        <option @if($adult == '8') selected @endif >8</option>
                        <option @if($adult == '9') selected @endif >9</option>
                    </select>
                    <p>Từ 12 tuổi trở lên</p>
                </div>
                <div class="col-md-4"> 
                    <p class="des">Trẻ em</p>
                    <i class="fa fa-child input-icon"></i>
                    <select name="children" required="">
                        <option @if($children == '0') selected @endif >0</option>
                        <option @if($children == '1') selected @endif >1</option>
                        <option @if($children == '2') selected @endif >2</option>
                        <option @if($children == '3') selected @endif >3</option>
                        <option @if($children == '4') selected @endif >4</option>
                        <option @if($children == '5') selected @endif >5</option>
                        <option @if($children == '6') selected @endif >6</option>
                        <option @if($children == '7') selected @endif >7</option>
                        <option @if($children == '8') selected @endif >8</option>
                        <option @if($children == '9') selected @endif >9</option>
                    </select>
                    <p>Từ 2 - 11 tuổi</p>
                </div>
                <div class="col-md-4"> 
                    <p class="des">Trẻ sơ sinh</p>
                    <i class="fa fa-user input-icon"></i>
                    <select name="baby" required="">
                        <option @if($baby == '0') selected @endif >0</option>
                        <option @if($baby == '1') selected @endif >1</option>
                        <option @if($baby == '2') selected @endif >2</option>
                        <option @if($baby == '3') selected @endif >3</option>
                        <option @if($baby == '4') selected @endif >4</option>
                        <option @if($baby == '5') selected @endif >5</option>
                        <option @if($baby == '6') selected @endif >6</option>
                        <option @if($baby == '7') selected @endif >7</option>
                        <option @if($baby == '8') selected @endif >8</option>
                        <option @if($baby == '9') selected @endif >9</option>
                    </select>
                    <p>Dưới 24 tháng tuổi</p>
                </div>
            </div>
        </div>

        <div style="clear: both;"></div>

        <div class="text-center">
            <button class="submit"  type="submit"><i class="fa fa-search"></i> &nbsp;&nbsp; Tìm chuyến bay</button>
        </div>
    </div>

</form>
</div>
<script type="text/javascript">
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
        $('#adult-value').val(adult);
        $('#children').html(children);
        $('#children-value').val(children);
        $('#baby').html(baby);
        $('#baby-value').val(baby);
        var total = adult + children + baby;
        $('#number-passenger').val(total + ' hành khách');
    }
    function openPopover(id){
        $('#'+id).fadeIn(50);
    }
    function closePopover(id){
        $('#'+id).hide();
    }
    function change_place(){
        var tmp = $('#start_place').val();
        $('#start_place').val($('#end_place').val());
        $('#end_place').val(tmp);
    }
    modechange('{{$mode}}');
    function modechange(type){
        if(type == 'one_way'){
            $('#end_date').val('');
            $('#end_date_section').css('display', 'none');
        }
        if(type == 'two_way'){
            $('#end_date_section').css('display', 'block');
            $('#end_date').val($('#start_date').val());
        }
    }
    function update_mode(){
        $('#radio1').prop('checked',true);
    }
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
        var first_search = $("#result-search-first");
        if (!first_search.is(e.target) && first_search.has(e.target).length === 0){
            first_search.hide();
        }
        var back_search = $("#result-search-back");
        if (!back_search.is(e.target) && back_search.has(e.target).length === 0){
            back_search.hide();
        }
    });

    $('#popover-start .place').click(function(event){
        console.log(event);
        var data = $(this).html();

        $('#start_place').val(data);
        $("#popover-start").hide();
    })
    $('#popover-end .place').click(function(event){
        console.log(event);
        var data = $(this).html();

        $('#end_place').val(data);
        $("#popover-end").hide();
    })
    $( function() {
        var dateToday = new Date();
        var tomorrow = new Date(dateToday.getTime() + (24 * 60 * 60 * 1000));
        $( "#start_date" ).datepicker({ numberOfMonths: 1 , minDate: dateToday, dateFormat: 'dd/mm/yy'});
        $( "#end_date" ).datepicker({ numberOfMonths: 1, minDate: dateToday , dateFormat: 'dd/mm/yy'});
        $( "#start_date" ).val('{{$start_date}}');
        $( "#end_date" ).val('{{$end_date}}');

    })
    function change_start(){
        if($( "#end_date" ).val() == ''){
            $( "#end_date" ).val($('#start_date').val());
        }
    }
    var airports = [];
    $.get("/search_point", function(data){
        airports = JSON.parse(data);

    })

    $.getJSON("/vietnam.json", function(data){
        var vietnam = data;
        for(var  i = 0; i <= 8 ; i++){
            if(vietnam[i]){
                var html = '<li><a class="place">'+vietnam[i]+'</a></li>'
                $('.airports_vn1').append(html);
            }
        }
        for(var  i = 8; i <= 15 ; i++){
            if(vietnam[i]){
                var html = '<li><a class="place">'+vietnam[i]+'</a></li>'
                $('.airports_vn2').append(html);
            }
        }
        for(var  i = 15; i <= 24 ; i++){
            if(vietnam[i]){
                var html = '<li><a class="place">'+vietnam[i]+'</a></li>'
                $('.airports_vn3').append(html);
            }
        }
        $('#popover-start .place').click(function(event){
            console.log(event);
            var data = $(this).html();

            $('#start_place').val(data);
            $("#popover-start").hide();
        })
        $('#popover-end .place').click(function(event){
            console.log(event);
            var data = $(this).html();

            $('#end_place').val(data);
            $("#popover-end").hide();
        })

    })

    function search_airport(type){

       
        var s = $('#'+type).val();
        if(s && s.length > 2){
            $('#result-search-'+type).css('display', 'initial');
            $('#result-search-'+type).html('<ul></ul>');
            $.get("/search_point?limit=5&key="+s, function(data){
                var data = JSON.parse(data);

                if(data){
                    $.map(data, function(value, index){
                        var html = '<li><a class="place">'+value+'</a></li>';
                        $('#result-search-'+type+' ul').append(html);
                        console.log(html);
                    }) 
                }else{
                    var html = '<p class="text-center">Không có kết quả tìm kiếm</p>';
                    $('#result-search-'+type+' ul').append(html);
                }
                $('#popover-start .place').click(function(event){
                    console.log(event);
                    var data = $(this).html();

                    $('#start_place').val(data);
                    $("#popover-start").hide();

                });
                $('#popover-end .place').click(function(event){
                    console.log(event);
                    var data = $(this).html();

                    $('#end_place').val(data);
                    $("#popover-end").hide();
                })

            })
        }else{
            $('#result-search-'+type).css('display', 'none');
        }
    }
    $('#formid').on('keyup keypress', function(e) {
        var keyCode = e.keyCode || e.which;
        if (keyCode === 13) { 
            e.preventDefault();
            return false;
        }
});


</script>