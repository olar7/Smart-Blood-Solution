@extends('layouts.masteradmin')
@section('content')
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">@lang('Add users')</h3>
                    <a href="{{route('user_type.create')}}" class="btn btn-success pull-right">@lang('new')</a>
                </div><!-- /.box-header -->
                <br>
                <br>
                <h2>User List</h2>
                <div class="box-body">
                    <table id="dataList" class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th> ID</th>
                                <th>User Type</th>
                                <th>Created At</th>
                                @can('user_type-action')
                                    <th>Action</th>
                                @endcan
                            </tr>
                        </thead>
                        <tbody>
                            @if ($user_types->count() > 0)
                            @php($count  = 1)
                                @foreach ($user_types as $user_type)
                                    <tr>
                                        <td>{{$count}}</td>
                                        <td>{{$user_type->user_type}}</td>
                                        <td>{{$user_type->created_at->toFormattedDateString()}}
                                        @can('user_type-action')
                                            <td class="action">
                                                @can('user_type-edit')
                                                    <a href="{{route('user_type.edit', $user_type->id)}}" data-toggle="tooltip" title="@lang('global.app_edit')" class="btn btn-info btn-sm">
                                                        <i class="far fa-edit"></i>
                                                    </a>
                                                @endcan
                                                @can('user_type-delete')
                                                    <form action="{{route('user_type.destroy', ['user_type' => $user_type->id])}}" method="post" >
                                                        @csrf
                                                        @method('delete')
                                                        <button type="submit" class="btn btn-danger btn-sm" data-toggle="tooltip" title="@lang('global.app_delete')">
                                                            <i class="far fa-trash-alt"></i>
                                                        </button>
                                                    </form>
                                                @endcan
                                            </td>
                                        @endcan
                                    </tr>
                                    @php($count++)
                                @endforeach
                            @else
                                <tr>
                                    <th colspan="4" class="text-center"><i>@lang('global.app_no_entries_in_table')</i></th>
                                </tr>
                            @endif
                        </tbody>
                    </table>
                </div><!-- /.box-body -->
            </div><!-- /.box -->
        </div>
    </div><!-- /.row -->




    
@endsection