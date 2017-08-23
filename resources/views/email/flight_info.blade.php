@extends('email.temple')
@section('title')
Thông tin chuyến bay
@endsection

@section('content')
	<style type="text/css">
		
	</style>
    <td align="" valign="top" width="100%" style="background-color: #ffffff;  border-top: 1px solid #e5e5e5; border-bottom: 1px solid #e5e5e5;">
        <table cellpadding="0" cellspacing="0" width="100%" class="w320 detail" >
			<tr>
				<td style="border: 0 !important">
					<table width="100%">
						<tr>
							<td style="border: 0!important" width="60%" colspan="2">
								<br>
								<p>Xin chào {{$ticket->contact_name}} ({{$ticket->contact_email}}) </p>
								<p>Công ty TNHH Tien Phong xin gửi quý khách thông tin chuyến bay mã đặt chỗ <strong>{{$ticket->seat_id}}</strong></p>
							</td>
							<td  style="border: 0!important"  colspan="2">
								<p>Xem chi tiết chuyến bay</p>
								<p><a href="{{ url('/') }}/ticket/info/{{base64_encode('ticket_id='.$ticket->id)}}" style="color: #009fe3; background-clip: #009fe3; border: none; height: 40">Xem chi tiết</a></p>
								<br>
							</td>
						</tr>
						<tr>
							<td colspan="4"  style="border: 0!important"><h3>Chi tiết liên lạc</h3></td>
						</tr>
						<tr>
							<th>Tên</th>
							<th width="50%">Email</th>
							<th width="20%">Điện thoại</th>
							<th width="20%">Địa chỉ</th>
						</tr>
						<tr>
							<td>{{$ticket->contact_name}}</td>
							<td>{{$ticket->contact_email}}</td>
							<td>{{$ticket->contact_phone}}</td>
							<td>{{$ticket->contact_address}}</td>
						</tr>
						<tr></tr>
						<tr></tr>
						<tr></tr>
						<tr></tr>
					</table>

					<table width="100%">
						<tr>
							<td colspan="5"  style="border: 0!important"><h3>Chi tiết hành khách</h3></td>
						</tr>
						<tr>
							<th>Họ</th>
							<th>Tên</th>
							<th>Tuổi / Năm sinh</th>
							<th>Giới tính</th>
							<th>Loại</th>
						</tr>
						@foreach ($ticket->passengers as $passenger)
						<tr>
							<td>{{$passenger->first_name}}</td>
							<td>{{$passenger->last_name}}</td>
							<td>{{$passenger->age}}</td>
							<td>{{$passenger->sex == 'M' ? 'Nam' : 'Nữ'}}</td>
							<td>{{$passenger->type == 'ADT' ? 'Người lớn' : ($passenger->type == 'CHD' ? 'trẻ em' : 'trẻ sơ sinh')}}</td>
						</tr>
						@endforeach
					</table>
					<table width="100%">
						<tr>
							<td colspan="5"  style="border: 0!important"><h3>Thông tin thanh toán</h3></td>
						</tr>
						<tr>
							<th>Loại</th>
							<th width="10%">Số lượng</th>
							<th>Giá </th>
							<th>tổng Giá</th>
						</tr>
						@if($ticket->count_adult > 0)
						<tr>
							<td>Giá vé Người lớn</td>
							<td>{{$ticket->count_adult}}</td>
							<td>{{number_format($ticket->price_adult)}} đ</td>
							<td>{{number_format($ticket->price_adult * $ticket->count_adult) }} đ</td>
						</tr>
						@endif
						@if($ticket->count_children > 0)
						<tr>
							<td>Giá vé trẻ em</td>
							<td>{{$ticket->count_children}}</td>
							<td>{{number_format($ticket->price_children)}} đ</td>
							<td>{{number_format($ticket->price_children * $ticket->count_children) }} đ</td>
						</tr>
						@endif
						@if($ticket->count_baby > 0)
						<tr>
							<td>Giá vé trẻ sơ sinh</td>
							<td>{{$ticket->count_baby}}</td>
							<td>{{number_format($ticket->price_baby)}} đ</td>
							<td>{{number_format($ticket->price_baby * $ticket->count_baby) }} đ</td>
						</tr>
						@endif
						@if($ticket->count_adult > 0)
						<tr>
							<td>Giá dịch vụ Người lớn</td>
							<td>{{$ticket->count_adult}}</td>
							<td>{{number_format($ticket->service_adult)}} đ</td>
							<td>{{number_format($ticket->service_adult * $ticket->count_adult )}} đ</td>
						</tr>
						@endif
						@if($ticket->count_children > 0)
						<tr>
							<td>Giá dịch vụ trẻ em</td>
							<td>{{$ticket->count_children}}</td>
							<td>{{number_format($ticket->service_children)}} đ</td>
							<td>{{number_format($ticket->service_children * $ticket->count_children) }} đ</td>
						</tr>
						@endif
						@if($ticket->count_baby > 0)
						<tr>
							<td>Giá dịch vụ trẻ sơ sinh</td>
							<td>{{$ticket->count_baby}}</td>
							<td>{{number_format($ticket->service_baby)}} đ</td>
							<td>{{number_format($ticket->service_baby * $ticket->count_baby) }} đ</td>
						</tr>
						@endif
						@if($ticket->gift > 0)
						<tr>
							<td colspan="2">Khuyến mãi</td>
							<td>{{number_format($ticket->gift)}} đ</td>
							<td>{{number_format($ticket->gift)}} đ</td>
						</tr>
						@endif

						<tr>
							<td colspan="3">Tổng giá</td>
							<td><strong>{{number_format($ticket->total)}} đ</strong></td>
						</tr>

					</table>
					<table width="100%">
						<tr>
							<td colspan="4"  style="border: 0!important"><h3>Chi tiết chuyến bay</h3></td>
						</tr>
						<tr>
							<th>Mã đặt vé</th>
							<th>Điểm đến</th>
							<th>Điểm đi</th>
							<th>Khứ hồi / Một chiều</th>
						</tr>
						<tr>
							<td>{{$ticket->seat_id}}</td>
							<td>{{$ticket->start_place}}</td>
							<td>{{$ticket->end_place}}</td>
							<td>{{$ticket->mode == 2 ? 'khứ hồi' : 'Một chiều'}}</td>
						</tr>
					</table>

				</td>
			</tr>

        </table>
    </td>
@endsection
