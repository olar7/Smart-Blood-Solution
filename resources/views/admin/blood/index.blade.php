@extends('layouts.masteradmin')
@section('content')
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Add New info</h3>
                    <a href="{{route('blood.create')}}" class="btn btn-success pull-right">Add New</a>
                </div>

                <br>
                <br>
                <div class="box-body">
                    <div class="row">
                    <div class="col-md-6 col-sm-12">
                                <h4 class="component-title">on-going campaign list</h4>
                                <table id="" class="table table-bordered table-hover table-striped" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>SN</th>
                                            <th>Blood group</th>
                                            <th>Blood Type</th>
                                            <th>Volume</th>
                                            <th>Validation</th>
                                            <th>Note</th>
                                            

                                            
                                            <th>@lang('created')</th>
                                            @can('permission-action')
                                                <th>@lang('action')</th>
                                            @endcan
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if ($blood->count() > 0)
                                            @php($count = 1)
                                            @foreach ($blood as $blood)
                                                @if ($blood)
                                                    <tr>
                                                        <td>{{$count}}</td>
                                                        
                                                        
                                                        <td>{{$blood->blood_group}}</td>
                                                        <td>{{$blood->blood_type}}</td>
                                                        <td>{{$blood->volume}}</td>
                                                        <td><img src="{{url('images/')}}/{{$blood->validation}}" alt="" height ="100" width="100"></td>
                                                        <td>{{$blood->note}}</td>
                                                        
                                                        
        
                                                        <td>{{$blood->created_at->toFormattedDateString()}}</td>
                                                       
                                                       
                                                        

                                                        @can('blood-action')
                                                            <td class="action">
                                                                @can('blood-edit')
                                                                    <a href="{{route('blood.edit', $blood->id)}}" data-toggle="tooltip" title="@lang('global.app_edit')" class="btn btn-info btn-sm">
                                                                        <i class="far fa-edit"></i>
                                                                    </a>
                                                                @endcan
                                                                    <br>
                                                                    <br>
                                                                @can('blood-delete')
                                                                    <form action="{{route('blood.destroy', ['blood' => $blood->id])}}" method="post">
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