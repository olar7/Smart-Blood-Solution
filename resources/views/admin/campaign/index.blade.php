@extends('layouts.masteradmin')
@section('content')
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Add a New campaign</h3>
                    <a href="{{route('campaign.create')}}" class="btn btn-success pull-right">Add New</a>
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
                                            <th>Campaign Image</th>
                                            <th>Organization</th>
                                            <th>Campaign Title</th>
                                            <th>Campaign Date</th>
                                            <th>Description</th>
                                            

                                            <th>@lang('Action')</th>
                                            <!-- <th>created</th> -->
                                            @can('permission-action')
                                                
                                            @endcan
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if ($campaign->count() > 0)
                                            @php($count = 1)
                                            @foreach ($campaign as $campaign)
                                                @if ($campaign)
                                                    <tr>
                                                        <td>{{$count}}</td>
                                                        <td><img src="{{url('images/')}}/{{$campaign->photo}}" alt="" height ="100" width="100"></td>
                                                        <td>{{$campaign->organization->user->first_name}} {{$campaign->organization->user->last_name}}</td>
                                                        <td>{{$campaign->title}}</td>
                                                        <td>{{$campaign->date}}</td>
                
                                                        <td>{{$campaign->description}}</td>
        
                                                        
                                                       
                                                       
                                                        

                                                        @can('campaign-action')
                                                            <td class="action">
                                                                @can('campaign-edit')
                                                                    <a href="{{route('campaign.edit', $campaign->id)}}" data-toggle="tooltip" title="@lang('global.app_edit')" class="btn btn-info btn-sm">
                                                                        <i class="far fa-edit"></i>
                                                                    </a>
                                                                @endcan
                                                                    <br>
                                                                    <br>
                                                                @can('campaign-delete')
                                                                    <form action="{{route('campaign.destroy', ['campaign' => $campaign->id])}}" method="post">
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