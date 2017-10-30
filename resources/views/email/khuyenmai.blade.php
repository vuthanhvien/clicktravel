@extends('email.temple')
@section('title')
Nhận mã khuyến mãi
@endsection

@section('content')
    <td align="center" valign="top" width="100%" style="background-color: #ffffff;  border-top: 1px solid #e5e5e5; border-bottom: 1px solid #e5e5e5;">
      <center>
        <table cellpadding="0" cellspacing="0" width="600" class="w320">
            <tr>
              <td class="item-table">
                <table cellspacing="0" cellpadding="0" width="100%">
                  <tr>
                    <td class="title-dark text-center" width="300">
                      Xin chào {{$name}},
                      <br>
                      Chúng tôi sẽ gửi bạn mã khuyến mãi 
                      <div style="  height: 51px; padding: 10px; background-color: #ff9c00; text-align: center; margin: 25px auto; ">
                        <p style="color: white; font-size: 24px">
                         {{$code}}
                        </p>
                      </div>
                      <br>
                      <br>
                      <p>{{$content}}</p>
                    </td>
                  </tr>
                  <tr>  
                    <td colspan="2" class="item-col item">
                    </td>
                  </tr>
                </table>
              </td>
            </tr>
        </table>
      </center>
    </td>
@endsection
