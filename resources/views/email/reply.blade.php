@extends('email.temple')
@section('title')
Trả lời liên hệ 
@endsection

@section('content')
<td align="center" valign="top" width="100%" style="background-color: #ffffff;  border-top: 1px solid #e5e5e5; border-bottom: 1px solid #e5e5e5;">
	<center>
		<table cellpadding="0" cellspacing="0" width="600" class="w320">
			<tr>
				<td class="item-table">
					<table cellspacing="0" cellpadding="0" width="100%">

						<tr>
							<td colspan="2" class="item-col item">
								Nội dung
							</td>
						</tr>
						<tr>
							<td colspan="2" class="item-col item">
								{{$content}}
							</td>
							
						</tr>
					</table>
				</td>
			</tr>

		</table>
	</center>
</td>
@endsection
