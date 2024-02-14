@extends('layout.appPublic')
@section('title')
Home Page
@endsection

@section('content')
<!--weelcome-->
<div class="welcome">
	<div class="container">
		<table border="1" class="table table-bordered mg-b-0">
    <tr align="center" class="table-warning">
    <td colspan="4" style="font-size:20px;color:blue">
    Notice</td></tr>
    <tr class="table-info">
        <th>Notice Announced Date</th>
        <td>{{$publicNotice->created_at}}</td>
    </tr>
        <tr class="table-info">
        <th>Noitice Title</th>
        <td>{{$publicNotice->noticeTitle}}</td>
    </tr>
    <tr class="table-info">
        <th>Message</th>
        <td>{{$publicNotice->noticeMessage}}</td>

    </tr>

    </table>
        </div>
    </div>
    <!--/welcome-->



@endsection
