@extends('layouts.masteradmin')
@section('content')
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">@lang('title')</h3>
                    <a href="{{route('admin.create')}}" class="btn btn-success pull-right">@lang('new')</a>
                </div>
                <div class="box-body">
                    <div class="row">
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection