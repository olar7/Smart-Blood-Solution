@extends('layouts.masteradmin')
@section('content')
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Add a New stock</h3>
                    <a href="{{route('bloodstock.create')}}" class="btn btn-success pull-right">Add New</a>
                </div>

                <br>
                <br>
                <div class="box-body">
                    <div class="row">
                    <div class="col-md-6 col-sm-12">
                                <h4 class="component-title">List of blood</h4>
                                <table id="" class="table table-bordered table-hover table-striped" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>SN</th>
                                            <th>Blood Type</th>
                                            <th>Blood Group</th>
                                            <th>Date</th>
                                            <th>Checup-Report</th>
                                                <th>Actions</th>
                                         
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if ($bloodstock->count() > 0)
                                            @php($count = 1)
                                            @foreach ($bloodstock as $bloodstock)
                                                @if ($bloodstock)
                                                    <tr>
                                                        <td>{{$count}}</td>
                                                        <td>{{$bloodstock->blood_type}}</td>
                                                        <td>{{$bloodstock->blood_group}}</td>
                                                        <td>{{$bloodstock->collected_date}}</td>
                                                        <td>{{$bloodstock->blood_checkup_report}}</td>
                                                       
                                                        
                                                       
                                                       
                                                        

                                                        @can('bloodstock-action')
                                                            <td class="action">
                                                                @can('bloodstock-edit')
                                                                    <a href="{{route('bloodstock.edit', $bloodstock->id)}}" data-toggle="tooltip" title="@lang('global.app_edit')" class="btn btn-info btn-sm">
                                                                        <i class="far fa-edit"></i>
                                                                    </a>
                                                                @endcan
                                                                    <br>
                                                                    <br>
                                                                @can('bloodstock-delete')
                                                                    <form action="{{route('bloodstock.destroy', ['bloodstock' => $bloodstock->id])}}" method="post">
                                                                        @csrf
                                                                        @method('delete')
                                                                        <button type="submit" data-toggle="tooltip" title="@lang('global.app_trash')" class="btn btn-danger btn-sm">
                                                                            <i class="far fa-trash-alt"></i>
                                                                        </button>
                                                                    </form>
                                                                @endcan
                                                            </td>
                                                        @endcan
                                                       
                                                    </tr>
                                                    @php($count++)
                                                @endif
                                                
                                            @endforeach
                                        @else
                                            <tr>
                                                <th colspan="4" class="text-center"><i>@lang('no_entries_in_table')</i></th>
                                            </tr>
                                        @endif
                                    </tbody>
                                </table>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection