@extends('layouts.app')

@section('content')
<div class="container-fluid ">
    <div class="row">
        <div class="col-md-9">
            <div class="out-form">
                <div class="booking-summary" data-toggle="collapse" data-target="#ticket-form">
                    <div class="pull-left">
                        <div style="    padding-top: 15px;margin-right: 15px;margin-left: 5px;">
                            <i class="fa fa-search fa-2x"></i>
                        </div>
                    </div>
                    <div class="pull-left">
                        <h4>TP Hồ Chí Minh đến Hà Nội</h4>
                        <p>3 hành khách | 2 chiều</p>
                    </div>
                    <div class="pull-right text-right">
                        <br class="hidden-xs">
                        <br>
                        <p>Thời gian đi : 20/05/2017 <span class="hidden-xs">||</span> <br class="hidden-sm hidden-md hidden-lg"> Thời gian khứ hồi : 20/05/2017</p>
                    </div>
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
                                    <input type="text"  class="" id="end_place" name="end_place" placeholder="Điếm đến" style="border-right: 1;">
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
                                <div class="row" >
                                    <div class="col-xs-4 text-center">
                                        <button class="btn" onClick="down('adult')"><i class="fa fa-minus"></i></button><span class="nb" id="adult"> 1 </span> <button class="btn" onClick="up('adult')"><i class="fa fa-plus"></i></button><br> <span> Người lớn (hơn 12 tuổi)</span>
                                    </div>
                                    <div class="col-xs-4 text-center">
                                        <button class="btn" onClick="down('children')"><i class="fa fa-minus"></i></button><span class="nb" id="children"> 0 </span> <button class="btn" onClick="up('children')"><i class="fa fa-plus"></i></button><br> <span> Trẻ em (từ 2 đến 11 tuổi)</span>
                                    </div>
                                    <div class="col-xs-4 text-center">
                                        <button class="btn" onClick="down('baby')"><i class="fa fa-minus"></i></button><span class="nb" id="baby"> 0 </span> <button class="btn" onClick="up('baby')"><i class="fa fa-plus"></i></button> <br><span> Trẻ sơ sinh (dưới 24 tháng tuổi)</span>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="row text-center">
                            <button class="btn btn-success"><i class="fa fa-search"></i> &nbsp; Tìm chuyến bay</button>
                        </div>
                        <br>
                    </div>
                </div>
            </div>
            <div class="result">
                <br>
                <div class="row">
                    <div class="col-md-3 hidden-xs">
                        Show fild
                    </div>
                    <div class="col-md-9">
                        <div class="row">
                            <div class="col-xs-6" style="padding-left: 50px;">
                                <h3 style="margin-top: 5px; ">30 <small>/ 125 kết quả khớp</small><h3>
                                </div>
                                <div class="col-xs-6 text-right">
                                    <span>Sắp xếp theo: 
                                        <select class="form-control" style="display: inline-block; width: initial;">
                                            <option>Thứ tự ABC</option>
                                            <option>Theo giá</option>
                                            <option>Theo hãng bay</option>
                                        </select>
                                    </span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="loading hidden">
                                    <div class="container goo2">
                                        <div></div>
                                        <div></div>
                                        <div></div>
                                        <div></div>
                                        <div></div>
                                    </div>
                                </div>
                                <div class="col-md-10 col-md-offset-1 col-xs-12">
                                    <br>
                                    <div class="ticket-info">
                                        <div class="ticket ticket-left">
                                            <h3 class="white text-center header"> Thông tin vé</h3>
                                            <br>
                                            <br>
                                            <div class="row">
                                                <div class="col-sm-3 col-sm-offset-1 text-center hidden-xs logo-plane"">
                                                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/19/VietJet_Air_logo.svg/1280px-VietJet_Air_logo.svg.png" height="18px">
                                                </div>
                                                <div class="col-sm-2 col-xs-3 col-xs-offset-1 col-sm-offset-0">
                                                    <h3>12:45</h3>
                                                    <p>HCM</p>
                                                </div>
                                                <div class="col-sm-3 col-xs-4">
                                                    <p class="text-center time">1g 45 phút</p>
                                                    <div class="line">
                                                    </div>&nbsp;
                                                    <i class="fa fa-plane fa-rotate-45"></i>
                                                    <img class="hidden-lg hidden-md hidden-sm" src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/19/VietJet_Air_logo.svg/1280px-VietJet_Air_logo.svg.png" width="70%">
                                                </div>
                                                <div class="col-sm-2 col-xs-3">
                                                    <h3>13:45</h3>
                                                    <p>Hà Nội</p>
                                                </div>
                                            </div>
                                            <hr>
                                            <br>
                                            <div class="row">
                                                <div class="col-sm-3 col-sm-offset-1 text-center hidden-xs logo-plane"">
                                                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/19/VietJet_Air_logo.svg/1280px-VietJet_Air_logo.svg.png" height="18px">
                                                </div>
                                                <div class="col-sm-2 col-xs-3 col-xs-offset-1 col-sm-offset-0">
                                                    <h3>12:45</h3>
                                                    <p>HCM</p>
                                                </div>
                                                <div class="col-sm-3 col-xs-4">
                                                    <p class="text-center time">1g 45 phút</p>
                                                    <div class="line">
                                                    </div>&nbsp;
                                                    <i class="fa fa-plane fa-rotate-45"></i>
                                                    <img class="hidden-lg hidden-md hidden-sm" src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/19/VietJet_Air_logo.svg/1280px-VietJet_Air_logo.svg.png" width="70%">
                                                </div>
                                                <div class="col-sm-2 col-xs-3">
                                                    <h3>13:45</h3>
                                                    <p>Hà Nội</p>
                                                </div>
                                            </div>

                                        </div>

                                        <div class=" ticket ticket-right">
                                            <div class="text-center">
                                                <h3 class="white" style="margin-top: 10px; color: white;"> Giá vé </h3>
                                                <br>
                                                <br>
                                                <br>
                                                <h3 class="money">2.523.125 ₫</h3>
                                                <br>
                                                <button class="btn btn-success" data-toggle="modal" data-target="#detail"> &nbsp;&nbsp;Chọn <i class="fa  fa-chevron-right"></i>&nbsp;&nbsp;</button>
                                            </div>
                                        </div>
                                    </div>           
                                    <div class="clear"></div>
                                    <div class="ticket-info">
                                        <div class="ticket ticket-left">
                                            <h3 class="white text-center header"> Thông tin chuyến bay</h3>
                                            <br>
                                            <br>
                                            <div class="row">
                                                <div class="col-sm-3 col-sm-offset-1 text-center hidden-xs logo-plane"">
                                                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/19/VietJet_Air_logo.svg/1280px-VietJet_Air_logo.svg.png" height="18px">
                                                </div>
                                                <div class="col-sm-2 col-xs-3 col-xs-offset-1 col-sm-offset-0">
                                                    <h3>12:45</h3>
                                                    <p>HCM</p>
                                                </div>
                                                <div class="col-sm-3 col-xs-4">
                                                    <p class="text-center time">1g 45 phút</p>
                                                    <div class="line">
                                                    </div>&nbsp;
                                                    <i class="fa fa-plane fa-rotate-45"></i>
                                                    <img class="hidden-lg hidden-md hidden-sm" src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/19/VietJet_Air_logo.svg/1280px-VietJet_Air_logo.svg.png" width="70%">
                                                </div>
                                                <div class="col-sm-2 col-xs-3">
                                                    <h3>13:45</h3>
                                                    <p>Hà Nội</p>
                                                </div>
                                            </div>
                                            <hr>
                                            <br>
                                            <div class="row">
                                                <div class="col-sm-3 col-sm-offset-1 text-center hidden-xs logo-plane"">
                                                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/19/VietJet_Air_logo.svg/1280px-VietJet_Air_logo.svg.png" height="18px">
                                                </div>
                                                <div class="col-sm-2 col-xs-3 col-xs-offset-1 col-sm-offset-0">
                                                    <h3>12:45</h3>
                                                    <p>HCM</p>
                                                </div>
                                                <div class="col-sm-3 col-xs-4">
                                                    <p class="text-center time">1g 45 phút</p>
                                                    <div class="line">
                                                    </div>&nbsp;
                                                    <i class="fa fa-plane fa-rotate-45"></i>
                                                    <img class="hidden-lg hidden-md hidden-sm" src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/19/VietJet_Air_logo.svg/1280px-VietJet_Air_logo.svg.png" width="70%">
                                                </div>
                                                <div class="col-sm-2 col-xs-3">
                                                    <h3>13:45</h3>
                                                    <p>Hà Nội</p>
                                                </div>
                                            </div>

                                        </div>

                                        <div class=" ticket ticket-right">
                                            <div class="text-center">
                                                <h3 class="white" style="margin-top: 10px; color: white;"> Giá vé </h3>
                                                <br>
                                                <br>
                                                <br>
                                                <h3 class="money">2.523.125 ₫</h3>
                                                <br>
                                                <button class="btn btn-success" data-toggle="modal" data-target="#detail"> &nbsp;&nbsp;Chọn <i class="fa  fa-chevron-right"></i>&nbsp;&nbsp;</button>
                                            </div>
                                        </div>
                                    </div>           
                                    <div class="clear"></div>
                                    <div class="ticket-info">
                                        <div class="ticket ticket-left">
                                            <h3 class="white text-center header"> Thông tin vé</h3>
                                            <br>
                                            <br>
                                            <div class="row">
                                                <div class="col-sm-3 col-sm-offset-1 text-center hidden-xs logo-plane"">
                                                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/19/VietJet_Air_logo.svg/1280px-VietJet_Air_logo.svg.png" height="18px">
                                                </div>
                                                <div class="col-sm-2 col-xs-3 col-xs-offset-1 col-sm-offset-0">
                                                    <h3>12:45</h3>
                                                    <p>HCM</p>
                                                </div>
                                                <div class="col-sm-3 col-xs-4">
                                                    <p class="text-center time">1g 45 phút</p>
                                                    <div class="line">
                                                    </div>&nbsp;
                                                    <i class="fa fa-plane fa-rotate-45"></i>
                                                    <img class="hidden-lg hidden-md hidden-sm" src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/19/VietJet_Air_logo.svg/1280px-VietJet_Air_logo.svg.png" width="70%">
                                                </div>
                                                <div class="col-sm-2 col-xs-3">
                                                    <h3>13:45</h3>
                                                    <p>Hà Nội</p>
                                                </div>
                                            </div>
                                            <hr>
                                            <br>
                                            <div class="row">
                                                <div class="col-sm-3 col-sm-offset-1 text-center hidden-xs logo-plane"">
                                                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/19/VietJet_Air_logo.svg/1280px-VietJet_Air_logo.svg.png" height="18px">
                                                </div>
                                                <div class="col-sm-2 col-xs-3 col-xs-offset-1 col-sm-offset-0">
                                                    <h3>12:45</h3>
                                                    <p>HCM</p>
                                                </div>
                                                <div class="col-sm-3 col-xs-4">
                                                    <p class="text-center time">1g 45 phút</p>
                                                    <div class="line">
                                                    </div>&nbsp;
                                                    <i class="fa fa-plane fa-rotate-45"></i>
                                                    <img class="hidden-lg hidden-md hidden-sm" src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/19/VietJet_Air_logo.svg/1280px-VietJet_Air_logo.svg.png" width="70%">
                                                </div>
                                                <div class="col-sm-2 col-xs-3">
                                                    <h3>13:45</h3>
                                                    <p>Hà Nội</p>
                                                </div>
                                            </div>

                                        </div>

                                        <div class=" ticket ticket-right">
                                            <div class="text-center">
                                                <h3 class="white" style="margin-top: 10px; color: white;"> Giá vé </h3>
                                                <br>
                                                <br>
                                                <br>
                                                <h3 class="money">2.523.125 ₫</h3>
                                                <br>
                                                <button class="btn btn-success" data-toggle="modal" data-target="#detail"> &nbsp;&nbsp;Chọn <i class="fa  fa-chevron-right"></i>&nbsp;&nbsp;</button>
                                            </div>
                                        </div>
                                    </div>           
                                    <div class="clear"></div>
                                    <div class="ticket-info">
                                        <div class="ticket ticket-left">
                                            <h3 class="white text-center header"> Thông tin vé</h3>
                                            <br>
                                            <br>
                                            <div class="row">
                                                <div class="col-sm-3 col-sm-offset-1 text-center hidden-xs logo-plane"">
                                                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/19/VietJet_Air_logo.svg/1280px-VietJet_Air_logo.svg.png" height="18px">
                                                </div>
                                                <div class="col-sm-2 col-xs-3 col-xs-offset-1 col-sm-offset-0">
                                                    <h3>12:45</h3>
                                                    <p>HCM</p>
                                                </div>
                                                <div class="col-sm-3 col-xs-4">
                                                    <p class="text-center time">1g 45 phút</p>
                                                    <div class="line">
                                                    </div>&nbsp;
                                                    <i class="fa fa-plane fa-rotate-45"></i>
                                                    <img class="hidden-lg hidden-md hidden-sm" src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/19/VietJet_Air_logo.svg/1280px-VietJet_Air_logo.svg.png" width="70%">
                                                </div>
                                                <div class="col-sm-2 col-xs-3">
                                                    <h3>13:45</h3>
                                                    <p>Hà Nội</p>
                                                </div>
                                            </div>
                                            <hr>
                                            <br>
                                            <div class="row">
                                                <div class="col-sm-3 col-sm-offset-1 text-center hidden-xs logo-plane"">
                                                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/19/VietJet_Air_logo.svg/1280px-VietJet_Air_logo.svg.png" height="18px">
                                                </div>
                                                <div class="col-sm-2 col-xs-3 col-xs-offset-1 col-sm-offset-0">
                                                    <h3>12:45</h3>
                                                    <p>HCM</p>
                                                </div>
                                                <div class="col-sm-3 col-xs-4">
                                                    <p class="text-center time">1g 45 phút</p>
                                                    <div class="line">
                                                    </div>&nbsp;
                                                    <i class="fa fa-plane fa-rotate-45"></i>
                                                    <img class="hidden-lg hidden-md hidden-sm" src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/19/VietJet_Air_logo.svg/1280px-VietJet_Air_logo.svg.png" width="70%">
                                                </div>
                                                <div class="col-sm-2 col-xs-3">
                                                    <h3>13:45</h3>
                                                    <p>Hà Nội</p>
                                                </div>
                                            </div>

                                        </div>

                                        <div class=" ticket ticket-right">
                                            <div class="text-center">
                                                <h3 class="white" style="margin-top: 10px; color: white;"> Giá vé </h3>
                                                <br>
                                                <br>
                                                <br>
                                                <h3 class="money">2.523.125 ₫</h3>
                                                <br>
                                                <button class="btn btn-success" data-toggle="modal" data-target="#detail"> &nbsp;&nbsp;Chọn <i class="fa  fa-chevron-right"></i>&nbsp;&nbsp;</button>
                                            </div>
                                        </div>
                                    </div>           
                                    <div class="clear"></div>


                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-md-3 hidden-xs">
                <div class="detail"> 
                    Show mấy thứ tao lao
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div id="detail" class="modal fade modal-detail" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header text-center">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Thông tin chuyến bay</h4>
                </div>
                <div class="modal-body" style="padding-left: 25px; padding-right: 25px;">
                    <h4><strong>Kiểm tra lịch trình của bạn</strong></h4>
                    <p>(Tất cả giờ đều là giờ địa phương)</p>
                    <br>
                    <h5><strong>Chuyến đi </strong> CN, 2 thg 7, 2017</h5>

                    <div class="first-way">
                        <div class="row">
                            <div class="col-xs-4 text-right">
                                <h3>14:45</h3>
                                <p>TPHCM</p>
                            </div>
                            <div class="col-xs-3">
                                <p class="text-center no-margin" style="width: 85%"> 1g 45 phút</p>
                                <div class="line"></div> &nbsp; 
                                <i class="fa fa-plane fa-rotate-45"></i>
                            </div>
                            <div class="col-xs-3">
                                <h3>15:45</h3>
                                <p>Hà Nội</p>
                            </div>
                           <!--  <div class="pull-right"  data-toggle="collapse" data-target="#first-way" style="padding:10px; margin-right: 30px;margin-top: 5px;">
                                <i class="fa fa-chevron-down fa-lg"></i>
                            </div>
                        </div>
                        <div id="first-way" class="collapse">
                            <hr class="no-margin">
                            <div class="" style="padding: 20px;">
                                Lorem ipsum dolor text....
                            </div> -->
                        </div>
                    </div>
                    <br />
                    <h5><strong>Chuyến về </strong> CN, 3 thg 7, 2017</h5>
                    <div class="second-way">
                        <div class="row">
                            <div class="col-xs-4 text-right">
                                <h3>20:45</h3>
                                <p>Hà Nội</p>
                            </div>
                            <div class="col-xs-3">
                                <p class="text-center no-margin" style="width: 85%"> 1g 45 phút</p>
                                <div class="line"></div> &nbsp; 
                                <i class="fa fa-plane fa-rotate-45"></i>
                            </div>
                            <div class="col-xs-3">
                                <h3>22:45</h3>
                                <p>TPHCM</p>
                            </div>
                            <!-- <div class="pull-right"  data-toggle="collapse" data-target="#second-way" style="padding:10px; margin-right: 30px;margin-top: 5px;">
                                <i class="fa fa-chevron-down fa-lg"></i>
                            </div>
                        </div>
                        <div id="second-way" class="collapse">
                            <hr class="no-margin">
                            <div class="" style="padding: 20px;">
                                Lorem ipsum dolor text....
                            </div> -->
                        </div>
                    </div>
                    <div>
                        <br>
                        <br>
                        <h4 class="no-margin"><strong>Đặt vé</strong></h4>
                        <p>Phổ thông, 1 người lớn</p>
                        <br>
                    </div>
                    <hr  class="no-margin" />
                    <div class="row">
                        <div class="col-md-12 alert-ticket" data-toggle="collapse" data-target="#alert" style="cursor: pointer; padding-top: 10px;
                        padding-bottom: 10px;">
                            <h4 style="color: #3097D1"><i class="fa fa-exclamation-triangle"></i> <strong> &nbsp;&nbsp; Đọc trước khi đăng ký vé</strong>
                             <div class="pull-right" style="margin-right: 30px;"">
                                <i class="fa fa-chevron-down"></i>
                            </div>
                            </h4>
                        </div>
                        <div class="col-md-12 collapse" id="alert" style="padding: 10px 35px;">
                            <p>Giá hiển thị luôn bao gồm khoản ước tính của toàn bộ thuế và cước phí bắt buộc, nhưng nhớ kiểm tra TẤT CẢ chi tiết vé, giá cuối cùng và các điều khoản và điều kiện trên trang web đặt vé trước khi bạn đặt vé. </p>
                            <ul>
                                <li>
                                    <strong>Kiểm tra phụ phí</strong>
                                    <br>
                                    Một số hãng hàng không / đại lý tính phụ phí cho hành lý, bảo hiểm hoặc sử dụngthẻ tín dụng. Xem phí của hãng hàng không
                                    <br>

                                </li>
                                <li>
                                    <strong>Kiểm tra các điều khoản & điều kiện cho các hành khách trong độ tuổi từ 12-16</strong>
                                    <br>
                                    Các giới hạn có thể áp dụng với hành khách nhỏ tuổi đi một mình.
                                    <br>
                                    
                                </li>
                            </ul>
                        </div>
                    </div>
                    <hr class="no-margin"/>
                    <br>
                    <div class="row">
                        <div class="col-xs-3 text-right" style="margin-top: 9px;">
                            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/19/VietJet_Air_logo.svg/1280px-VietJet_Air_logo.svg.png" height="15">
                        </div>
                        <div class="col-xs-4 text-right" style="margin-top: 5px;">
                            <h3 class="no-margin"><strong>1.125.000 ₫</strong></h3>
                        </div>
                        <div class="col-xs-4">
                            <button class="btn btn-success">&nbsp;&nbsp; Đăng ký vé &nbsp;&nbsp; <i class="fa  fa-arrow-right"></i></button>
                        </div>
                    </div>
                    <hr />

                    <div class="row">
                        <div class="col-xs-12">
                            <h4> <strong> Các phương thức đặt vé </strong></h4>
                            <p>Mail</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
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
// $( "#end_date" ).dateDropper();
</script>
@endsection
