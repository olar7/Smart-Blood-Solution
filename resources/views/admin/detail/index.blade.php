@extends('layouts.masteradmin')
@section('content')
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Fill Survey</h3>
                    <a href="{{route('detail.create')}}" class="btn btn-success pull-right">Add New</a>
                </div>

                <br>
                <br>
                <div class="box-body">
                    <div class="row">
                    <div class="col-md-6 col-sm-12">
                                <h4 class="component-title">Survey List</h4>
                                <table id="" class="table table-bordered table-hover table-striped" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>SN</th>
                                            <th>Donor name</th>
                                            <th> Donor nationality</th>
                                            
                                            <th>Contact</th>
                                            <th>Location</th>
                                            <th>Test Status</th>
                                            <th>Description</th>
                                            <th>@lang('created')</th>
                                            @can('permission-action')
                                                <th>@lang('action')</th>
                                            @endcan
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if ($detail->count() > 0)
                                            @php($count = 1)
                                            @foreach ($detail as $detail)
                                                @if ($detail)
                                                    <tr>
                                                        <td>{{$count}}</td>
                                                        
                                                   

                                                        
        
                                                        <td>{{$detail->donor_name}}</td>
                                                        <td>{{$detail->donor_nationality}}</td>
                                                        <td>{{$detail->donor_contact}}</td>
                                                        <td>{{$detail->donor_location}}</td>
                                                        <td>{{$detail->test_status}}</td>
                                                        <td>{{$detail->description}}</td>
                                                       
                                                        <td>{{$detail->created_at->toFormattedDateString()}}</td>
                                                        

                                                        @can('detail-action')
                                                            <td class="action">
                                                                @can('detail-edit')
                                                                    <a href="{{route('detail.edit', $detail->id)}}" data-toggle="tooltip" title="@lang('global.app_edit')" class="btn btn-info btn-sm">
                                                                        <i class="far fa-edit"></i>
                                                                    </a>
                                                                @endcan
                                                                    <br>
                                                                    <br>
                                                                @can('detail-delete')
                                                                    <form action="{{route('detail.destroy', ['detail' => $detail->id])}}" method="post">
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