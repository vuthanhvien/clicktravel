<div class="form" >
    <form action="/ticket" id="formid">
        <div class="text-center">

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
            </span>
        </div>
        <br>
        <div class="form-booking">
            <div class="select-place" >
                <div class="row">
                    <div class="col-md-6" >
                        <label>NƠI KHỞI HÀNH<small>&nbsp;&nbsp;&nbsp;* Chọn 1 địa điểm hoặc điền mã sân bay (3 ký tự)</small></label>
                        <input type="text" onclick="openPopover('popover-start'); this.select(); " id="start_place" name="start_place" placeholder="Điểm đi" required value="{{$start_place}}" onkeyup="search_location('start')" />
                        <div id="popover-start" class="dropdown-menu location-select">
                            <div class="popover-header text-left" style="background: #3097D1; height: 50px; padding: 15px 15px 0 15px" >

                                <h4 class="no-margin hidden-xs text-white" style="display: inline-block;">Chọn lựa điểm đi &nbsp;&nbsp;&nbsp;&nbsp;</h4>
                                <ul class="no-list no-padding text-white" style="display: inline-block;">
                                    <li class="active" ><a data-toggle="tab" href="#country" class="text-white">Nội địa</a></li>
                                    <li>&nbsp;&nbsp; || &nbsp;&nbsp; </li>
                                    <li ><a data-toggle="tab" href="#asia" class="text-white">Khu vực - Quốc tế</a></li>
                                </ul>
                            </div>
                            <div class="popover-body">
                                <div class="tab-content place-select" style="padding: 20px 30px;">
                                    <div id="country" class="tab-pane fade in active">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <h4>Miền Nam</h4>
                                                <ul>
                                                    <li ><a class="place" >Hồ Chí Minh (SGN)</a></li>
                                                    <li ><a class="place" >Cần Thơ (VCA)</a></li>
                                                    <li ><a class="place" >Kiên Giang (VKG)</a></li>
                                                    <li ><a class="place" >Cà Mau (CAH)</a></li>
                                                    <li ><a class="place" >Phú Quốc (PQC)</a></li>
                                                    <li ><a class="place" >Côn Đảo (VCS)</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-sm-4">
                                                <h4>Miền Trung</h4>
                                                <ul>
                                                    <li ><a class="place" >Đà Nẵng (DAD)</a></li>
                                                    <li ><a class="place" >Quảng Bình (VDH)</a></li>
                                                    <li ><a class="place" >Quảng Nam (VCL)</a></li>
                                                    <li ><a class="place" >Huế (HUI)</a></li>
                                                    <li ><a class="place" >PleiKu (PXU)</a></li>
                                                    <li ><a class="place" >Phú Yên (TBB)</a></li>
                                                    <li ><a class="place" >Ban Mê Thuột (BMV)</a></li>
                                                    <li ><a class="place" >Nha Trang (CXR)</a></li>
                                                    <li ><a class="place" >Qui Nhơn (UIH)</a></li>
                                                    <li ><a class="place" >Đà Lạt (DLI)</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-sm-4">
                                                <h4>Miền Bắc</h4>
                                                <ul>
                                                    <li ><a class="place" >Hà Nội (HAN)</a></li>
                                                    <li ><a class="place" >Điện Biên Phủ (DIN)</a></li>
                                                    <li ><a class="place" >Hải Phòng (HPH)</a></li>
                                                    <li ><a class="place" >Thanh Hóa (THD)</a></li>
                                                    <li ><a class="place" >Vinh (VII)</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="asia" class="tab-pane fade">
                                        <div class="row ">
                                            <div  class="col-sm-3">
                                                <h4>Đông Dương</h4>
                                                <ul>
                                                    <li><a class="place" >Phnôm Pênh (PNH)</a></li>
                                                    <li><a class="place" >Siem Reap (REP)</a></li>
                                                    <li><a class="place" >Viên Chăn (VTE)</a></li>
                                                    <li><a class="place" >Luông pra băng (LPQ)</a></li>
                                                </ul>
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
                                            <div   class="col-sm-3">
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
                                            <div  class="col-sm-3">
                                                <h4>Châu Đại Dương</h4>
                                                <ul>
                                                    <li><a class="place" >Men-bơn (MEL)</a></li>
                                                    <li><a class="place" >Sydney (SYD)</a></li>
                                                    <li><a class="place" >Adelaide (ADL)</a></li>
                                                    <li><a class="place" >Brisbane (BNE)</a></li>
                                                    <li><a class="place" >Auckland (AKL)</a></li>
                                                    <li><a class="place" >Wellington (WLG)</a></li>

                                                </ul>
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
                                            <div  class="col-sm-3">
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
                    </div>
                    <div class="col-md-6" >
                        <label>NƠI ĐẾN<small>&nbsp;&nbsp;&nbsp;* Chọn 1 địa điểm hoặc điền mã sân bay (3 ký tự)</small></label>
                        <input type="text" onclick="openPopover('popover-end'); this.select();" id="end_place" name="end_place"  placeholder="Điểm đến" required  value="{{$end_place}}" onkeyup="search_location('end')" />
                        <div id="popover-end-2" class="dropdown-menu location-select" >
                            
                        </div>
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
                                <div class="tab-content place-select" style="padding: 20px 30px;">
                                    <div id="country2" class="tab-pane fade">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <h4>Miền Nam</h4>
                                                <ul>
                                                    <li ><a class="place" >Hồ Chí Minh (SGN)</a></li>
                                                    <li ><a class="place" >Cần Thơ (VCA)</a></li>
                                                    <li ><a class="place" >Kiên Giang (VKG)</a></li>
                                                    <li ><a class="place" >Cà Mau (CAH)</a></li>
                                                    <li ><a class="place" >Phú Quốc (PQC)</a></li>
                                                    <li ><a class="place" >Côn Đảo (VCS)</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-sm-4">
                                                <h4>Miền Trung</h4>
                                                <ul>
                                                    <li ><a class="place" >Đà Nẵng (DAD)</a></li>
                                                    <li ><a class="place" >Quảng Bình (VDH)</a></li>
                                                    <li ><a class="place" >Quảng Nam (VCL)</a></li>
                                                    <li ><a class="place" >Huế (HUI)</a></li>
                                                    <li ><a class="place" >PleiKu (PXU)</a></li>
                                                    <li ><a class="place" >Phú Yên (TBB)</a></li>
                                                    <li ><a class="place" >Ban Mê Thuột (BMV)</a></li>
                                                    <li ><a class="place" >Nha Trang (CXR)</a></li>
                                                    <li ><a class="place" >Qui Nhơn (UIH)</a></li>
                                                    <li ><a class="place" >Đà Lạt (DLI)</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-sm-4">
                                                <h4>Miền Bắc</h4>
                                                <ul>
                                                    <li ><a class="place" >Hà Nội (HAN)</a></li>
                                                    <li ><a class="place" >Điện Biên Phủ (DIN)</a></li>
                                                    <li ><a class="place" >Hải Phòng (HPH)</a></li>
                                                    <li ><a class="place" >Thanh Hóa (THD)</a></li>
                                                    <li ><a class="place" >Vinh (VII)</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="asia2" class="tab-pane fade in active">
                                        <div class="row ">
                                            <div  class="col-sm-3">
                                                <h4>Đông Dương</h4>
                                                <ul>
                                                    <li><a class="place" >Phnôm Pênh (PNH)</a></li>
                                                    <li><a class="place" >Siem Reap (REP)</a></li>
                                                    <li><a class="place" >Viên Chăn (VTE)</a></li>
                                                    <li><a class="place" >Luông pra băng (LPQ)</a></li>
                                                </ul>
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
                                            <div   class="col-sm-3">
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
                                            <div  class="col-sm-3">
                                                <h4>Châu Đại Dương</h4>
                                                <ul>
                                                    <li><a class="place" >Men-bơn (MEL)</a></li>
                                                    <li><a class="place" >Sydney (SYD)</a></li>
                                                    <li><a class="place" >Adelaide (ADL)</a></li>
                                                    <li><a class="place" >Brisbane (BNE)</a></li>
                                                    <li><a class="place" >Auckland (AKL)</a></li>
                                                    <li><a class="place" >Wellington (WLG)</a></li>

                                                </ul>
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
                                            <div  class="col-sm-3">
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
                    </div>
                </div>
            </div>
            <div class="select-date">
                <div class="row">
                    <div class="col-xs-6">
                        <i class="fa fa-calendar input-icon"></i>
                        <input type="text" id="start_date_ct"  onchange="change_start()" placeholder="Ngày đi" required name="start_date" readonly="" value="{{$start_date}}">
                    </div>

                    <div class="col-xs-6" id="end_date_section">
                        <i class="fa fa-calendar input-icon"></i>
                        <input type="text" placeholder="Ngày về" id="end_date_ct"   required name="end_date" readonly="" value="{{$end_date}}">
                    </div>
                </div>
            </div>
            <div class="number">
                <div class="row">
                    <div class="col-xs-4"> 
                        <i class="fa fa-user input-icon"></i>
                        <p class="des" >Người lớn</p>
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
                        <p class="text-white">Từ 12 tuổi trở lên</p>
                    </div>
                    <div class="col-xs-4"> 
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
                        <p p class="text-white">Từ 2 - 11 tuổi</p>
                    </div>
                    <div class="col-xs-4"> 
                        <p  class="des">Trẻ sơ sinh</p>
                        <!-- <i class="fa fa-user input-icon"></i> -->
                        <i class="input-icon"><img src="img/baby.png" height="16"></i>
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
                        <p class="text-white">Dưới 24 tháng tuổi</p>
                    </div>
                </div>
            </div>

            <div style="clear: both;"></div>

            <div class="text-center">
                <!-- <button class="submit"  type="submit"><i class="fa fa-search"></i> &nbsp;&nbsp; Tìm chuyến bay</button> -->
                <button class="submit"  type="button" id="submit"><i class="fa fa-search"></i> &nbsp;&nbsp; Tìm chuyến bay</button>

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
        $("#popover-"+type).hide();
    }
     
    modechange('{{$mode}}');
    function modechange(type){
        if(type == 'one_way'){
            $('#end_date').val('');
            $('#end_date_section').css('display', 'none');
        }
        if(type == 'two_way'){
            $('#end_date_section').css('display', 'block');
            // $('#end_date').val($('#start_date').val());
            change_start();
        }
    }
    function search_location(type){
        var s = $('#'+type+'_place').val();
        var a = $('#popover-'+type+' .place');
        if(s.length == 3 ){
            $.each(airports, function(i, item){
                s = convertVietnamese(s);
                b = convertVietnamese(item.key);
                if(b == s){
                    $('#'+type+'_place').val(item.name +' ('+item.key+')');
                    $("#popover-"+type).hide();
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
        var data = $(this).html();

        $('#start_place').val(data);
        $("#popover-start").hide();
    })
    $('#popover-end .place').click(function(event){
        var data = $(this).html();

        $('#end_place').val(data);
        $("#popover-end").hide();
    })
    $( function() {
        var dateToday = new Date();
        var start = new Date(dateToday.getTime());
        var end = new Date(dateToday.getTime());
        $( "#start_date_ct" ).datepicker({ numberOfMonths: 1 , minDate: start, dateFormat: 'dd/mm/yy'});
        $( "#end_date_ct" ).datepicker({ numberOfMonths: 1, minDate: end , dateFormat: 'dd/mm/yy'});
        $( "#start_date_ct" ).val('{{$start_date}}');
        $( "#end_date_ct" ).val('{{$end_date}}');

    })
    function change_start(){
        var start_date =  $( "#start_date_ct" ).val().split("/");
        start_date = new Date(start_date[2], start_date[1] - 1, start_date[0]);

        var end_date = '';
        if($( "#end_date_ct" ).val() != ''){
            end_date =  $( "#end_date_ct" ).val().split("/");
            end_date = new Date(end_date[2], end_date[1] - 1, end_date[0]);

            if(end_date < start_date){
                start_date = new Date(start_date.getTime() + (24*3 * 60 * 60 *1000));
                var d_tmp = ('00' + start_date.getDate()).substr(-2);
                var m_tmp = ('00' + (start_date.getMonth()*1  + 1 )).substr(-2);
                var y_tmp  = start_date.getFullYear();
                $( "#end_date_ct" ).val(d_tmp+'/'+ m_tmp + '/'+ y_tmp);
            }
        }else{
            start_date = new Date(start_date.getTime() + (24*3 * 60 * 60 *1000));
            var d_tmp = ('00' + start_date.getDate()).substr(-2);
            var m_tmp = ('00' + (start_date.getMonth()*1  + 1 )).substr(-2);
            var y_tmp  = start_date.getFullYear();
            $( "#end_date_ct" ).val(d_tmp+'/'+ m_tmp + '/'+ y_tmp);
        }
    }
    var airports = [];
    $.get("/search_point", function(data){
        airports = JSON.parse(data);
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
                    }) 
                }else{
                    var html = '<p class="text-center">Không có kết quả tìm kiếm</p>';
                    $('#result-search-'+type+' ul').append(html);
                }
                $('#popover-start .place').click(function(event){
                    var data = $(this).html();

                    $('#start_place').val(data);
                    $("#popover-start").hide();

                });
                $('#popover-end .place').click(function(event){
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
    $('#submit').click(function(e){

        var data_form = $('#formid').serializeArray().reduce(function(obj, item) {
        obj[item.name] = item.value;
        return obj;
    }, {});

        var param = {
            Adt: data_form.adult,
            Chd: data_form.children,
            Departure: getBettwen(data_form.start_place),
            DepartureDate: data_form.start_date,
            Destination: getBettwen(data_form.end_place),
            Inf: data_form.baby,
            ItineraryType: data_form.mode == 'two_way' ? 2 : 1,
            ReturnDate: data_form.end_date,
            fn: "search",
            languageCode: "vi-VN",
            m: "searchbox",
            productKey: "anhjyzmiuwvtjlr"
        }
        console.log(param);
        $.post("http://ibev2.maybay.net/Modulerequest.ashx",
        param,
        function (data, status) {
        var ref = $.parseJSON(data);
        console.log(data);
        window.location = ref.Data;
        // window.location = ref.Data + '&'+$('#formid').serialize();
        });
    });
    function getBettwen(string){
        var start_pos = string.indexOf('(') + 1;
        var end_pos = string.indexOf(')',start_pos);
        var text_to_get = string.substring(start_pos,end_pos)
        return text_to_get;
    }

</script>