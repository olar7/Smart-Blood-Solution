@extends('layouts.masteradmin')
@section('content')
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Create a admin</h3>
                    <a href="{{route('admin.create')}}" class="btn btn-success pull-right">@lang('Add new')</a>
                </div>
                <br>
                <br>
                <div class="box-body">
                    <div class="row">
                            <div class="col-md-6 col-sm-12">
                                <h4 class="component-title">Admin List</h4>
                                <table id="" class="table table-bordered table-hover table-striped" style="width:100%">
                                    <thead>
                                    
                                        <tr>
                                            <th>SN</th>
                                            <th>First name</th>
                                            <th>Last name</th>
                                            <th>Email</th>
                                            <th>Alternative email</th>
                                            <th>Contact</th>
                                            <th>Address</th>
                                            <th>@lang('created')</th>
                                            @can('permission-action')
                                                <th>@lang('action')</th>
                                            @endcan
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if ($admins->count() > 0)
                                            @php($count = 1)
                                            @foreach ($admins as $admin)
                                            
                                                @if ($admin->user->first_name)
                                                    <tr>
                                                        <td>{{$count}}</td>
                                                        <td>{{$admin->user->first_name}}</td>
                                                        <td>{{$admin->user->last_name}}</td>
                                                        <td>{{$admin->user->email}}</td>
                                                        <td>{{$admin->alt_email}}</td>
                                                        <td>{{$admin->user->contact}}</td>
                                                        <td>{{$admin->user->address}}</td>
                                                        <td>{{$admin->created_at->toFormattedDateString()}}</td>
                                        
                                                        @can('admin-action')
                                                            <td class="action">
                                                                @can('admin-edit')
                                                                    <a href="{{route('admin.edit', ['admin' => $admin->id])}}" data-toggle="tooltip" title="@lang('global.app_edit')" class="btn btn-info btn-sm">
                                                                        <i class="far fa-edit"></i>
                                                                    </a>
                                                                    <br>
                                                                    <br>
                                                                @endcan
                                                                @can('admin-delete')
                                                                    <form action="{{route('admin.destroy', ['admin' => $admin->id])}}" method="post">
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