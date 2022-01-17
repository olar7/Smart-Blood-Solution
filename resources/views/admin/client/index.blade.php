@extends('layouts.masteradmin')
@section('content')

<div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                 
                </div>

                <br>
                <br>
                <div class="box-body">
                    <div class="row">
                    <div class="col-md-6 col-sm-12">
                                <h4 class="component-title">Client list</h4>
                                <table id="" class="table table-bordered table-hover table-striped" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>SN</th>
                                            <th>First Name</th>
                                            <th>Last Name</th>
                                            <th>Email</th>
                                           
                                            <th>Contact</th>
                                            <th>Address</th>
                                            <th>Blood-group</th>
                                            <th>@lang('created')</th>
                                            @can('permission-action')
                                                <th>@lang('action')</th>
                                            @endcan
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if ($clients->count() > 0)
                                            @php($count = 1)
                                            @foreach ($clients as $client)
                                                @if ($client)
                                                    <tr>
                                                        <td>{{$count}}</td>
                                                        <td>{{$client->user->first_name}}</td>
                                                        <td>{{$client->user->last_name}}</td>
                                                        <td>{{$client->user->email}}</td>
                                                        <td>{{$client->user->contact}}</td>
                                                        <td>{{$client->user->address}}</td>
                                                        <td>{{$client->blood_group}}</td>
                                                        <td>{{$client->created_at->toFormattedDateString()}}</td>

                                                       
                                                       
                                                        

                                                        @can('client-action')
                                                            <td class="action">
                                                                @can('client-edit')
                                                                    <a href="" data-toggle="tooltip" title="@lang('global.app_edit')" class="btn btn-info btn-sm">
                                                                        <i class="far fa-edit"></i>
                                                                    </a>
                                                                @endcan
                                                                    <br>
                                                                    <br>
                                                                @can('client-delete')
                                                                    <form action="" method="post">
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