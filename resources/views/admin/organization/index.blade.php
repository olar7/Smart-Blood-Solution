@extends('layouts.masteradmin')
@section('content')
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Add a New Organization</h3>
                    <a href="{{route('organization.create')}}" class="btn btn-success pull-right">Add New</a>
                </div>

                <br>
                <br>
                <div class="box-body">
                    <div class="row">
                    <div class="col-md-6 col-sm-12">
                                <h4 class="component-title">Organization list </h4>
                                <table id="" class="table table-bordered table-hover table-striped" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>SN</th>
                                            <th>Logo</th>
                                            <th>Organization name</th>
                                            
                                            <th>Email</th>
                                            <th>Contact</th>
                                            <th>Slogan</th>
                                            <th>Address</th>
                                            <th>@lang('created')</th>
                                            @can('permission-action')
                                                <th>@lang('action')</th>
                                            @endcan
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if ($organizations->count() > 0)
                                            @php($count = 1)
                                            @foreach ($organizations as $orgnization)
                                                @if ($orgnization)
                                                    <tr>
                                                        <td>{{$count}}</td>
                                                        <td><img src="{{url('images/')}}/{{$orgnization->logo}}" alt="" width="100">
                                                    </td>

                                                        <td>{{$orgnization->user->first_name}} {{$orgnization->user->last_name}}</td>
                    
                                                        <td>{{$orgnization->user->email}}</td>
                                                        <td>{{$orgnization->user->contact}}</td>
                                                        <td>{{$orgnization->slogan}}</td>
                                                        <td>{{$orgnization->user->address}}</td>
                                                        <td>{{$orgnization->created_at->toFormattedDateString()}}</td>
                                                        

                                                        @can('organization-action')
                                                            <td class="action">
                                                                @can('organization-edit')
                                                                    <a href="{{route('organization.edit', $orgnization->id)}}" data-toggle="tooltip" title="@lang('global.app_edit')" class="btn btn-info btn-sm">
                                                                        <i class="far fa-edit"></i>
                                                                    </a>
                                                                @endcan
                                                                    <br>
                                                                    <br>
                                                                @can('organization-delete')
                                                                    <form action="{{route('organization.destroy', ['organization' => $orgnization->id])}}" method="post">
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