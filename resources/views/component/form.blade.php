<div class="form" >
    <form id="formid">
        <div class="text-center" style="position: relative">
            <span class="radio radio-primary">
                <input type="radio" name="mode" id="radio2" value="one_way" @if($mode == 'one_way') checked="checked"  @endif onclick="modechange('one_way')">
                <label for="radio2" class="text-white">
                    Một chiều
                </label>
            </span> &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;
            <span class="radio radio-primary">
                <input type="radio" name="mode" id="radio1" value="two_way" @if($mode == 'two_way') checked="checked"  @endif  onclick="modechange('two_way')">
                <label for="radio1"  class="text-white">
                    Khứ hồi
                </label>
            </span> &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;
            <span class="radio radio-primary">
                <input type="radio" name="mode" id="radio3" value="multi" @if($mode == 'multi') checked="checked"  @endif  onclick="modechange('multi')">
                <label for="radio3"  class="text-white">
                    Nhiều chặng
                </label>
            </span>
            <span class="checkbox allmonth"  >
                <input id="checkbox1" type="checkbox" onchange="viewasmonth()">
                <label for="checkbox1" class="text-white">
                    Tìm cả tháng
                </label>
            </span>
        </div>
        <br>
        <div class="form-booking">
            <div id="input-data"></div>
            <div class="number">
                <div class="row">
                    <div class="col-xs-4"> 
                        <i class="fa fa-user input-icon"></i>
                        <p class="des" >Người lớn</p>
                        <select name="adult" required value="{{$adult}}">
                            <option>1</option>
                            <option >2</option>
                            <option >3</option>
                            <option >4</option>
                            <option >5</option>
                            <option >6</option>
                            <option >7</option>
                            <option >8</option>
                            <option >9</option>
                        </select>
                        <p class="text-white">Từ 12 tuổi trở lên</p>
                    </div>
                    <div class="col-xs-4"> 
                        <p class="des">Trẻ em</p>
                        <i class="fa fa-child input-icon"></i>
                        <select name="children" required value="{{$children}}">
                            <option >0</option>
                            <option >1</option>
                            <option >2</option>
                            <option >3</option>
                            <option >4</option>
                            <option >5</option>
                            <option >6</option>
                            <option >7</option>
                            <option >8</option>
                            <option >9</option>
                        </select>
                        <p p class="text-white">Từ 2 - 11 tuổi</p>
                    </div>
                    <div class="col-xs-4"> 
                        <p  class="des">Trẻ sơ sinh</p>
                        <!-- <i class="fa fa-user input-icon"></i> -->
                        <i class="input-icon"><img src="img/baby.png" height="16"></i>
                        <select name="baby" required value="{{$baby}}">
                            <option >0</option>
                            <option >1</option>
                            <option >2</option>
                            <option >3</option>
                            <option >4</option>
                            <option >5</option>
                            <option >6</option>
                            <option >7</option>
                            <option >8</option>
                            <option >9</option>
                        </select>
                        <p class="text-white">Dưới 24 tháng tuổi</p>
                    </div>
                </div>
            </div>

            <div style="clear: both;"></div>

            <div class="text-center">
                <button class="submit"  type="button" id="submit"><i class="fa fa-search"></i> &nbsp;&nbsp; Tìm chuyến bay</button>

            </div>
        </div>

    </form>
</div>
<style type="text/css">
.allmonth{
    margin: 0; position: absolute; right: 0;
}
.btn-delete{
    height: 50px;
    min-width: 50px;
    border-radius: 4px;
    background: #ffcaca;
    border: 0;
}
.btn-delete:disabled,.btn-add:disabled{
    opacity: 0.4;
}
.btn-add{
    height: 50px;
    min-width: 50px;
    background: #caffd4;
    border: 0;
    border-radius: 4px;
}
    .ui-datepicker{
        z-index: 99999!important;
    }
    .location-select{
        min-width: 600px;
        top: 67px;
        padding: 0;
    }
   .pos-rel{
       position: relative;
   }
    @media (min-width: 992px){
        .select-place .col-md-11{
            /* width: 96%; */
        }
        .select-place .col-md-offset-1{
            /* margin-left: 4%; */
        }
    }
    @media only screen and (max-width: 760px) {
        .allmonth{
            position: relative;
            display: block;
            margin-top: 10px;
        }
        .location-select{
        min-width: unset;
        width: 100%!important;
    }
  	.tab-content{
  		padding: 0px !important;
  	}
  	.item-explain{
  	border-bottom: 1px solid #ccc;
  	position: relative;
  	}
  	.item-explain h4{
  	font-size: 16px;
    font-weight: bold;    
     margin: 0;
    padding: 10px;}
    .item-explain i{
        right: 15px;
    position: absolute;
    top: 9px;}
    .main-explain{
    padding-left: 5px;
    padding-right: 5px;
    }
    .main-explain .col-sm-3{
    padding: 0;
    }
}
</style>
<script type="text/javascript">
    var forms = [
        'from',
        'replace',
        'to',
        'start', 
        'end'
    ]
    var adult = 1;
    var children = 0;
    var baby = 0;
    var isMonth = false;
    var mode = 'two_way';
    var ways = [];
    var old_data = {}
    function setForm(){
        old_data = $('#formid').serializeArray().reduce(function(obj, item) {
            obj[item.name] = item.value;
            return obj;
        }, {});
        if(old_data['place-from-0']) {
            old_data['place-from'] = old_data['place-from-0']
        }
        if(old_data['place-to-0']) {
            old_data['place-to'] = old_data['place-to-0']
        }
        if(old_data['date-start-date-0']) {
            old_data['date-start-date'] = old_data['date-start-date-0']
        }
        if(mode == 'two_way'){
            setTwoWay();
        }
        if(mode == 'one_way'){
            setOneWay()
        }
        if(mode == 'multi') {
            ways = [ { start: old_data['place-from'] || 'Hồ Chí Minh (SGN)', end: old_data['place-to'] || 'Hà Nội (HAN)', date: old_data['date-start-date'] || formatDate() }]
            setMultiWay()
        }
        if(document.body.clientWidth < 760) {
            updateStatusExpand();
            $('.main-explain .item-explain ul').hide();
            $('.main-explain .item-explain i').remove();
            $('.main-explain .item-explain').append('<i class="fa fa-angle-down">');
        }
    }
    function addWay(index){
        var data_form = $('#formid').serializeArray().reduce(function(obj, item) {
            obj[item.name] = item.value;
            return obj;
        }, {});
        
        ways = ways.map(function(item, i){
            item.start = data_form['place-from-'+i];
            item.end = data_form['place-to-'+i];
            item.date = data_form['date-start-date-'+i];
            return item;
        })
        var before = ways[index] || {};
        var after = ways[index + 1] || {};
        var itemCenter =  { start:  before.end ||  '',  end: after.start || '', date: before.date || formatDate() };
        ways.splice(index + 1, 0, itemCenter);
        setMultiWay();
        if(document.body.clientWidth < 760) {
            updateStatusExpand();
            $('.main-explain .item-explain ul').hide();
            $('.main-explain .item-explain i').remove();
            $('.main-explain .item-explain').append('<i class="fa fa-angle-down">');
        }
    }
    function removeWay(index){
        var data_form = $('#formid').serializeArray().reduce(function(obj, item) {
            obj[item.name] = item.value;
            return obj;
        }, {});
        
        ways = ways.map(function(item, i){
            item.start = data_form['place-from-'+i];
            item.end = data_form['place-to-'+i];
            item.date = data_form['date-start-date-'+i];
            return item;
        })
        ways.splice(index, 1)
        setMultiWay()
        if(document.body.clientWidth < 760) {
            updateStatusExpand();
            $('.main-explain .item-explain ul').hide();
            $('.main-explain .item-explain i').remove();
            $('.main-explain .item-explain').append('<i class="fa fa-angle-down">');
        }

    }
    function setMultiWay(){
        $('#input-data').html('');
        ways.forEach(function(item, index){
            $('#input-data').append(`
            <div class="row">
                <div class="col-md-8 select-place" >
                    <div class="row" style="margin-left: -15px; margin-right: -15px;">
                        <div class="col-md-6" >
                                <div class="pos-rel" id="from-`+index+`" ></div>
                        </div>
                        <div class="col-md-6" >
                                <div class="pos-rel" id="to-`+index+`" ></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 select-date">
                    <div class="row" style="margin-left: -15px; margin-right: -15px;">
                        <div class="col-xs-7">
                            <div id="start-date-`+index+`"></div>
                        </div>
                        <div class="col-xs-5 text-right unbreak">
                            <button  onclick="removeWay(`+index+`)" type="button" `  + (ways.length == 1 ? 'disabled' : '') +` class="btn-delete">Xoá</button>
                            <button type="button"  `  + (ways.length == 5 ? 'disabled' : '') +` class="btn-add" onclick="addWay(`+index+`)">Thêm</button>
                        </div>
                    </div>
                </div>
                </div>
            `)
            $('#input-data').append(`<hr style="margin-top: 0" />`)
        })
        ways.forEach(function(item, index){
            renderLocation('from-'+index, 'NƠI KHỞI HÀNH', item.start);
            renderLocation('to-'+index, 'NƠI ĐẾN',  item.end, true);
            renderDate('start-date-'+index, 'Ngày đi', item.date );
        });
    }
    function setOneWay(){
        $('#input-data').html(`
            <div class="select-place" >
                <div class="row">
                    <div class="col-md-6" >
                        <div class="row" style="margin-left: -15px; margin-right: -15px;">
                            <div class="col-md-11">
                            <div id="from" class="pos-rel" ></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6" >
                        <div class="row" style="    margin-left: -15px; margin-right: -15px;">
                            <div id="replace" class="col-md-1"></div>
                            <div class="col-md-11">
                            <div id="to" class="pos-rel" ></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="select-date">
                <div class="row">
                    <div class="col-xs-6">
                        <div id="start-date"></div>
                    </div>
                </div>
            </div>
        `)
        renderForm();
    }
    function setTwoWay(){
       

        $('#input-data').html(`
        <div class="select-place" >
                <div class="row">
                    <div class="col-md-6" >
                        <div class="row" style="margin-left: -15px; margin-right: -15px;">
                            <div class="col-md-11">
                            <div id="from" class="pos-rel" ></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6" >
                        <div class="row" style="    margin-left: -15px; margin-right: -15px;">
                            <div id="replace" class="col-md-1"></div>
                            <div class="col-md-11">
                            <div id="to"  class="pos-rel" ></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="select-date">
                <div class="row">
                    <div class="col-xs-6">
                        <div id="start-date" ></div>
                    </div>
                    <div class="col-xs-6">
                        <div id="end-date"></div>
                    </div>
                </div>
            </div>
        `)
        renderForm();
    }

    function renderForm(){
        
        old_data = old_data || {}
        console.log(old_data);

        renderLocation('from', 'NƠI KHỞI HÀNH', old_data['place-from'] || 'Hồ Chí Minh (SGN)');
        renderLocation('to', 'NƠI ĐẾN',  old_data['place-to'] || 'Hà Nội (HAN)', true);
        renderReplace('replace' , '');
        renderDate('start-date', 'Ngày đi', old_data['date-start-date'] || formatDate(), mode == 'two_way' ? 'change_start()' : '' );
        var next3Day = new Date();
        next3Day = next3Day.setDate(next3Day.getDate() + 3);
        renderDate('end-date', 'Ngày đến',  old_data['date-end-date'] ||   old_data['date-start-date'] || formatDate(next3Day));
    }
    function renderDate(id, title, value, onChangeFunction){
        $('#'+id).html(`
            <i class="fa fa-calendar input-icon"></i>
            <input type="text" name="date-`+id+`" id="`+id+`_ct" placeholder="`+title+`" required onchange="`+onChangeFunction+`" readonly value="`+value+`" >
        `);
        var dateToday = new Date();
        var id =  "#"+id+'_ct'
        $(id).datepicker({ 
            onChangeMonthYear: function(year, month){
                var newMonth =  ('00'+month).slice(-2);
                if(isMonth){
                    $(id ).val(newMonth + '/'+year)
                }
            },
            changeMonth: true, 
            changeYear: true,
            numberOfMonths: 1 ,
            minDate: formatDate(dateToday), 
            dateFormat: 'dd/mm/yy'});
    }
    function formatDate(date){
        var aDate = date ? new Date(date) : new Date();
        return ('00' + aDate.getDate()).substr(-2) + '/' + ('00' + (aDate.getMonth() + 1)).substr(-2) + '/'+ aDate.getFullYear();
    }
    function renderReplace(id) {
        $('#'+id).html(` 
            <div class="hidden-xs hidden-sm" style="margin-top: 15px; margin-left: -40px" >
                <button class="btn" type="button" style="padding: 5px; width: 50px; background: white; font-size: 18px;" onclick="change_place()">
                    <i class="fa fa-retweet"></i>
                </button>
            </div>`)
    }
    function renderLocation(id, title, value, isRight){
        $('#'+id).html(`
            <label>`+title+`<small>&nbsp;&nbsp;&nbsp;* Chọn 1 địa điểm hoặc điền mã sân bay (3 ký tự)</small></label>
            <input type="text" value="`+value+`" onclick="openPopover('popover-`+id+`'); this.select(); " id="place-`+id+`" name="place-`+id+`" placeholder="Chọn địa điểm" required onkeyup="search_location('`+id+`')" />
            <div id="popover-`+id+`" class="dropdown-menu location-select `+(isRight ? 'dropdown-menu-right' : '')+`" style="width: 120%">
                <div class="popover-header text-left" style="background: #3097D1; height: 50px; padding: 15px 15px 0 15px" >

                    <h4 class="no-margin hidden-xs text-white" style="display: inline-block;">Chọn lựa địa điểm  &nbsp;&nbsp;&nbsp;&nbsp;</h4>
                    <ul class="no-list no-padding text-white" style="display: inline-block;">
                        <li class="active" ><a data-toggle="tab" href="#country`+id+`" class="text-white" onclick="openCountry()">Nội địa</a></li>
                        <li>&nbsp;&nbsp; || &nbsp;&nbsp; </li>
                        <li ><a data-toggle="tab" href="#asia`+id+`" class="text-white"  onclick="openAsia()">Khu vực - Quốc tế</a></li>
                    </ul>
                </div>
                <div class="popover-body" id="accordion">
                    <div class="tab-content place-select" style="padding: 20px 30px;">
                        <div id="country`+id+`" class="tab-pane fade in active"> 
                            <div class="row main-explain">
                                <div class="col-sm-4 item-explain">
                                    <h4>Miền Nam</h4>
                                    <ul>
                                        <li ><a class="place" >Hồ Chí Minh (SGN)</a></li>
                                        <li ><a class="place" >Cần Thơ (VCA)</a></li>
                                        <li ><a class="place" >Phú Quốc (PQC)</a></li>
                                        <li ><a class="place" >Côn Đảo (VCS)</a></li>
                                        <li ><a class="place" >Rạch Giá (VKG)</a></li>
                                        <li ><a class="place" >Cà Mau (CAH)</a></li>
                                    </ul> 
                                </div>
                                <div class="col-sm-4  item-explain"> 
                                    <h4>Miền Trung</h4> 
                                        
                                    <ul>
                                        <li ><a class="place" >Đà Nẵng (DAD)</a></li>
                                        <li ><a class="place" >Huế (HUI)</a></li>
                                        <li ><a class="place" >Đồng Hới (VDH)</a></li>
                                        <li ><a class="place" >Chu Lai (VCL)</a></li>
                                        <li ><a class="place" >Qui Nhơn (UIH)</a></li>
                                        <li ><a class="place" >PleiKu (PXU)</a></li>
                                        <li ><a class="place" >Ban Mê Thuột (BMV)</a></li>
                                        <li ><a class="place" >Tuy Hòa (TBB)</a></li>
                                        <li ><a class="place" >Nha Trang (CXR)</a></li>
                                        <li ><a class="place" >Đà Lạt (DLI)</a></li>
                                    </ul> 
                                </div>
                                <div class="col-sm-4  item-explain">
                                
                                    <h4>Miền Bắc</h4> 
                                    
                                    <ul>
                                        <li ><a class="place" >Hà Nội (HAN)</a></li>
                                        <li ><a class="place" >Hải Phòng (HPH)</a></li>
                                        <li ><a class="place" >Thanh Hóa (THD)</a></li>
                                        <li ><a class="place" >Vinh (VII)</a></li>
                                        <li ><a class="place" >Điện Biên Phủ (DIN)</a></li>
                                        <li ><a class="place" >Vân Đồn (VDO)</a></li>
                                    </ul> 
                                </div>
                            </div>
                            
                        </div>
                        <div id="asia`+id+`" class="tab-pane fade">
                            <div class="row main-explain">
                                <div  class="col-sm-3 ">
                                <div class="item-explain">
                                    <h4>Đông Dương</h4>
                                    <ul>
                                        <li><a class="place" >Phnôm Pênh (PNH)</a></li>
                                        <li><a class="place" >Siem Reap (REP)</a></li>
                                        <li><a class="place" >Viên Chăn (VTE)</a></li>
                                        <li><a class="place" >Luông pra băng (LPQ)</a></li>
                                    </ul>
                                    </div>
                                    <div class="item-explain">
                                    <h4>Đông Nam Á</h4>
                                    <ul>
                                        <li><a class="place" >Jakarta (JKT)</a></li>
                                        <li><a class="place" >Băng Cốc (BKK)</a></li>
                                        <li><a class="place" >Bali Denpasar (DPS)</a></li>
                                        <li><a class="place" >Kuala Lumpur (KUL)</a></li>
                                        <li><a class="place" >Manila (MNL)</a></li>
                                        <li><a class="place" >Singapore (SIN)</a></li>
                                        <li><a class="place" >Yangon (RGN)</a></li>
                                    </ul>
                                    </div>
                                    <div class="item-explain">
                                    <h4>Châu Phi</h4>
                                    <ul>
                                        <li><a class="place" >Nairobi (NBO)</a></li>
                                        <li><a class="place" >Maputo (MPM)</a></li>
                                        <li><a class="place" >Luanda (LAD)</a></li>
                                        <li><a class="place" >Johannesburg (JNB)</a></li>
                                        <li><a class="place" >Cape Town (CPT)</a></li>
                                        <li><a class="place" >Dar Es Salaam (DAR)</a></li>
                                    </ul>
                                    </div>
                                </div>
                                <div   class="col-sm-3">
                                <div class="item-explain">
                                    <h4>Đông Bắc Á</h4>
                                    <ul>
                                        <li><a class="place" >Bắc Kinh (BJS)</a></li>
                                        <li><a class="place" >Thượng Hải (PVG)</a></li>
                                        <li><a class="place" >Quảng Châu (CAN)</a></li>
                                        <li><a class="place" >Hồng Kông (HKG)</a></li>
                                        <li><a class="place" >Tokyo (NRT)</a></li>
                                        <li><a class="place" >Tokyo (HND)</a></li>
                                        <li><a class="place" >Nagoya (NGO)</a></li>
                                        <li><a class="place" >Fukuoka (FUK)</a></li>
                                        <li><a class="place" >Osaka (OSA)</a></li>
                                        <li><a class="place" >Seoul (ICN)</a></li>
                                        <li><a class="place" >Pusan (PUS)</a></li>
                                    </ul>
                                    </div>
                                    <div class="item-explain">
                                    <h4>Tây Á - Trung Đông</h4>
                                    <ul>

                                        <li><a class="place" >Mumbai (BOM)</a></li>
                                        <li><a class="place" >Đê-li (DEL)</a></li>
                                        <li><a class="place" >Kathmandu (KTM)</a></li>
                                        <li><a class="place" >Dhaka (DAC)</a></li>
                                        <li><a class="place" >Colombo (CMB)</a></li>
                                        <li><a class="place" >Kolkata (CCU)</a></li>
                                        <li><a class="place" >Istanbul (IST)</a></li>
                                        <li><a class="place" >Dubai (DXB)</a></li>
                                    </ul>
                                    </div>
                                </div>
                                <div  class="col-sm-3">
                                <div class="item-explain">
                                    <h4>Châu Đại Dương</h4>
                                    <ul>
                                        <li><a class="place" >Men-bơn (MEL)</a></li>
                                        <li><a class="place" >Sydney (SYD)</a></li>
                                        <li><a class="place" >Adelaide (ADL)</a></li>
                                        <li><a class="place" >Brisbane (BNE)</a></li>
                                        <li><a class="place" >Auckland (AKL)</a></li>
                                        <li><a class="place" >Wellington (WLG)</a></li>

                                    </ul>
                                    </div>
                                    <div class="item-explain">
                                    <h4>Châu Âu</h4>
                                    <ul>

                                        <li><a class="place" >Paris (CDG)</a></li>
                                        <li><a class="place" >Luân Đôn (LON)</a></li>
                                        <li><a class="place" >Manchester (MAN)</a></li>
                                        <li><a class="place" >Berlin (TXL)</a></li>
                                        <li><a class="place" >Frankfurt (FRA)</a></li>
                                        <li><a class="place" >Amsterdam (AMS)</a></li>
                                        <li><a class="place" >Madrid (MAD)</a></li>
                                        <li><a class="place" >Mát-xờ-cơ-va (MOW)</a></li>
                                        <li><a class="place" >Geneva (GVA)</a></li>
                                        <li><a class="place" >Praha (PRG)</a></li>
                                        <li><a class="place" >Rome (ROM)</a></li>
                                        <li><a class="place" >Viên (VIE)</a></li>
                                        <li><a class="place" >Cô-pen-ha-gen (CPH)</a></li>

                                    </ul>
                                    </div>
                                </div>
                                <div  class="col-sm-3">
                                <div class="item-explain">
                                    <h4>Mỹ - Canada</h4>
                                    <ul>

                                        <li><a class="place" >New York (NYC)</a></li>
                                        <li><a class="place" >Washington (WAS)</a></li>
                                        <li><a class="place" >New York (JFK)</a></li>
                                        <li><a class="place" >Los Angeles (LAX)</a></li>
                                        <li><a class="place" >San Francisco (SFO)</a></li>
                                        <li><a class="place" >Atlanta (ATL)</a></li>
                                        <li><a class="place" >Boston (BOS)</a></li>
                                        <li><a class="place" >Chicago (CHI)</a></li>
                                        <li><a class="place" >Dallas (DFW)</a></li>
                                        <li><a class="place" >Denver (DEN)</a></li>
                                        <li><a class="place" >Honolulu (HNL)</a></li>
                                        <li><a class="place" >Miami (MIA)</a></li>
                                        <li><a class="place" >Minneapolis (MSP)</a></li>
                                        <li><a class="place" >Philadelphia (PHL)</a></li>
                                        <li><a class="place" >Portland (Oregon) (PDX)</a></li>
                                        <li><a class="place" >Seattle (SEA)</a></li>
                                        <li><a class="place" >St Louis (STL)</a></li>
                                        <li><a class="place" >Vancouver (YVR)</a></li>
                                        <li><a class="place" >Toronto (YYZ)</a></li>
                                        <li><a class="place" >Ottawa (YOW)</a></li>
                                        <li><a class="place" >Montreal (YMQ)</a></li>

                                    </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>`)

        $('#popover-'+id+' .place').click(function(event){
            var data = $(this).html();
            $('#place-'+id).val(data);
            $("#popover-"+id).hide();
        })      
    }
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
    }
    function openPopover(id){
        $('#'+id).fadeIn(50);
    }
    function closePopover(id){
        $('#'+id).hide();
    }
    function change_place(){
        var tmp = $('#place-from').val();
        $('#place-from').val($('#place-to').val());
        $('#place-to').val(tmp);
    }
    modechange('two_way')
    function modechange(type){
        mode = type;
        setForm()
    }
    function viewasmonth(){
        isMonth = !isMonth;
        if(mode == 'multi'){
            $('#radio1').prop("checked", true);
            mode = 'two_way';
            setForm();
        }
        if(isMonth){
            $('#radio3').prop("disabled", true);
        }else{
            $('#radio3').prop("disabled", false);
        }
        resetDateInput()
    }
    function resetDateInput(){
        var dateToday = new Date();
        var start = new Date(dateToday.getTime());
        var end = new Date(dateToday.getTime());
        if(isMonth){
            $( "#start-date_ct" ).val('{{substr($start_date, 3, 10)}}');
            $( "#end-date_ct" ).val('{{substr($end_date, 3, 10)}}');
            $('body').addClass("nodate")
        }else{
            $( "#start-date_ct" ).val('{{$start_date}}');
            $( "#end-date_ct" ).val('{{$end_date}}');
            $('body').removeClass("nodate")

        }
    }
    function search_location(id){
        var search = $('#place-'+id).val();
        if(search.length == 3 ){
            $.each(airports, function(i, item){
                search = convertVietnamese(search);
                b = convertVietnamese(item.key);
                if( search == b){
                    $('#place-'+id).val(item.name +' ('+item.key+')');
                    $('#popover-'+id).hide()
                }
            });
        }
    }
    function convertVietnamese(str) { 
        str= str.toLowerCase();
        str= str.replace(/à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ/g,"a"); 
        str= str.replace(/è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ/g,"e"); 
        str= str.replace(/ì|í|ị|ỉ|ĩ/g,"i"); 
        str= str.replace(/ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ/g,"o"); 
        str= str.replace(/ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ/g,"u"); 
        str= str.replace(/ỳ|ý|ỵ|ỷ|ỹ/g,"y"); 
        str= str.replace(/đ/g,"d"); 
        str= str.replace(/!|@|%|\^|\*|\(|\)|\+|\=|\<|\>|\?|\/|,|\.|\:|\;|\'| |\"|\&|\#|\[|\]|~|$|_/g,"-");
        str= str.replace(/-+-/g,"-");
        str= str.replace(/^\-+|\-+$/g,""); 

        return str; 
    }
    function openCountry(){
        $('.location-select').css('width', '120%');
    }
    function openAsia(){
        $('.location-select').css('width', '194%');
    }
  
    function updateStatusExpand(){
    	$('.main-explain .item-explain h4').click(function(){
    	    var parent = $(this).parent();
    	    var ul = parent.children('ul');
            var isShow = ul.is(':visible');
    	    $('.main-explain .item-explain ul').hide();
            if(isShow){
                ul.hide();
            }else{
                ul.show(); 
            }
    	})
    }
    function change_start(){
        if(isMonth){
            var start_date =  $( "#start-date_ct" ).val().split("/") ;
            var end_date =  $( "#start-date_ct" ).val().split("/");

            if($( "#end-date_ct" ).val() != ''){
            if( start_date[0] * 1 + start_date[1]*12 > end_date[0] * 1 + end_date[1]*12 ){
                $( "#end-date_ct" ).val($( "#start-date_ct" ).val())
            }
            }else{
                $( "#end-date_ct" ).val($( "#start-date_ct" ).val())
            }
        }else{
            var start_date =  $( "#start-date_ct" ).val().split("/");
            start_date = new Date(start_date[2], start_date[1] - 1, start_date[0]);

            var end_date = '';
            if($( "#end-date_ct" ).val() != ''){
                end_date =  $( "#end-date_ct" ).val().split("/");
                end_date = new Date(end_date[2], end_date[1] - 1, end_date[0]);

                if(end_date < start_date){
                    start_date = new Date(start_date.getTime() + (24*3 * 60 * 60 *1000));
                    var d_tmp = ('00' + start_date.getDate()).substr(-2);
                    var m_tmp = ('00' + (start_date.getMonth()*1  + 1 )).substr(-2);
                    var y_tmp  = start_date.getFullYear();
                    $( "#end-date_ct" ).val(d_tmp+'/'+ m_tmp + '/'+ y_tmp);
                }
            }else{
                start_date = new Date(start_date.getTime() + (24*3 * 60 * 60 *1000));
                var d_tmp = ('00' + start_date.getDate()).substr(-2);
                var m_tmp = ('00' + (start_date.getMonth()*1  + 1 )).substr(-2);
                var y_tmp  = start_date.getFullYear();
                $( "#end-date_ct" ).val(d_tmp+'/'+ m_tmp + '/'+ y_tmp);
            }
        }
    }
    var airports = [];
    $.get("/search_point", function(data){
        airports = JSON.parse(data);
    })

    $('#formid').on('keyup keypress', function(e) {
        var keyCode = e.keyCode || e.which;
        if (keyCode === 13) { 
            e.preventDefault();
            return false;
        }
    });
    $(document).mouseup(function(e){
        var start_div = $(".location-select");
        if (!start_div.is(e.target) && start_div.has(e.target).length === 0){
            start_div.hide();
        }
    });
 
    $('#submit').click(function(){
        var data_form = $('#formid').serializeArray().reduce(function(obj, item) {
            obj[item.name] = item.value;
            return obj;
        }, {});
        var valid = true;
        Object.keys(data_form).map(function(key){
            if(!data_form[key]){valid = false}
        })
        if(!valid){
            alert('Hãy điền đủ thông tin');
            return;
        }

        var passengers = '-'+data_form.adult+'-'+data_form.children+'-'+data_form.baby;
        var date = '';
        

        var locations = [];
        if(data_form.mode == 'one_way'){
            locations.push( getBettwen(data_form['place-from']) + getBettwen(data_form['place-to'])+ data_form['date-start-date'].replace(/[^\w\s]/gi, "") )
        }
        if(data_form.mode == 'two_way'){
            locations.push( getBettwen(data_form['place-from']) + getBettwen(data_form['place-to'])+ data_form['date-start-date'].replace(/[^\w\s]/gi, "") );
            locations.push( getBettwen(data_form['place-to']) + getBettwen(data_form['place-from'])+ data_form['date-end-date'].replace(/[^\w\s]/gi, "") );
        }
        if(data_form.mode == 'multi'){
            ways.map(function(item, index){
                locations.push( getBettwen(data_form['place-from-'+index]) + getBettwen(data_form['place-to-'+index])+ data_form['date-start-date-'+index].replace(/[^\w\s]/gi, "") );
            })
        }
        var url = ['/vemaybay?Request=', locations.join('-'),  passengers].join('');
        window.location = url;
    });
    function getBettwen(string = ''){
        var start_pos = string.indexOf('(') + 1;
        var end_pos = string.indexOf(')',start_pos);
        var text_to_get = string.substring(start_pos,end_pos)
        return text_to_get;
    }

</script>