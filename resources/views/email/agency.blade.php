
@extends('email.temple')
@section('title')
Đăng ký đại lý cấp 2 
@endsection

@section('content')
    <td align="center" valign="top" width="100%" style="background-color: #ffffff;  border-top: 1px solid #e5e5e5; border-bottom: 1px solid #e5e5e5;">
      <center>
        <table cellpadding="0" cellspacing="0" width="600" class="w320">
            <tr>
              <td class="item-table">
                <table cellspacing="0" cellpadding="0" width="100%">
                  <tr>
                    <td class="title-dark" width="200">
                       Tên
                    </td>
                    <td class="title-dark" width="400">
						{{$first_name}}
                    </td>
                  </tr>
                  <tr>
                    <td class="title-dark" width="200">
                       Họ và tên đệm
                    </td>
                    <td class="title-dark" width="400">
						{{$last_name}}
                    </td>
                  </tr>
                  <tr>
                    <td class="title-dark" width="200">
                       Email
                    </td>
                    <td class="title-dark" width="400">
						{{$email}}
                    </td>
                  </tr>
                  <tr>
                    <td class="title-dark" width="200">
                       Điện thoại
                    </td>
                    <td class="title-dark" width="400">
						{{$phone}}
                    </td>
                  </tr>
                  <tr>
                    <td class="title-dark" width="200">
                       Địa chỉ
                    </td>
                    <td class="title-dark" width="400">
						{{$address}}
                    </td>
                  </tr>
                   <tr>
                    <td colspan="2" class="title-dark" width="200">
                       Nội dung
                    </td>
                  </tr>
                  <tr>
                    <td colspan="2" class="title-dark" width="200">
                       {{$memo}}
                    </td>
                  </tr>

                  



                </table>
              </td>
            </tr>

        </table>
      </center>
    </td>
@endsection


