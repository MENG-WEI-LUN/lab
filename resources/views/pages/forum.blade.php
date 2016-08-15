@extends('layouts.master')
@section('title','討論區')
@section('pagename','討論區')
@section('content')
<br><br>
    <table class="tableStyle">
    <tr>
        <td>討論區名稱</td>
        <td>規則大綱</td>
        <td></td>
    </tr>
    <tr class="tableContent">
        <td>專題研究</td>
        <td>???????</td>
        <td>
            <button class="btn btn-info bnt-lg" style="font-size: 20px;" data-toggle="modal" data-target="#EditForm">編輯</button>
        </td>
    </tr>
    </table>
@endsection
@section('EditForm')
    {{-- {!!Form::open(['class'=> 'form-horizontal', 'id' => 'index', 'role'=> 'form', 'method' => 'patch'])!!}
        <div class="modal-body">
                <div class="form-group">
                {!!Form::label('EditName','活動名稱',['class' => 'col-sm-2 control-label'])!!}
                    <div class="col-sm-10">
                        {!!Form::text('name',null,['class' => 'form-control' , 'id' => 'EditName', 'placeholder' => '輸入名稱'])!!}
                    </div>
                </div>
                <div class="form-group">
                    {!!Form::label('EditStart','開始日期',['class' => 'col-sm-2 control-label'])!!}
                    <div class="col-sm-10">
                        {!!Form::text('start_at',null,['class' => 'form-control' , 'id' => 'EditStart', 'placeholder' => 'yyyy-MM-dd HH:mm:ss'])!!}
                    </div>
                </div>      
                <div class="form-group">
                    {!!Form::label('EditEnd','結束日期',['class' => 'col-sm-2 control-label'])!!}                    
                    <div class="col-sm-10">
                        {!!Form::text('end_at',null,['class' => 'form-control' , 'id' => 'EditEnd', 'placeholder' => 'yyyy-MM-dd HH:mm:ss'])!!}
                    </div>
                </div>         
        </div>
        <div class="modal-footer">
            {!!Form::button('取消',['class' => 'btn btn-default','data-dismiss' => 'modal'])!!}
            {!!Form::submit('更新',['class' => 'btn btn-primary'])!!}
        </div>
    {!!Form::close()!!} --}}
@endsection