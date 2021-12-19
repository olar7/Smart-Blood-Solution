@extends('layouts.masteradmin')
@section('content')
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Add a New blog</h3>
                    <a href="{{route('blog.create')}}" class="btn btn-success pull-right">Add New</a>
                </div>

                <br>
                <br>
                <div class="box-body">
                    <div class="row">
                    <div class="col-md-6 col-sm-12">
                                <h4 class="component-title">Blog list</h4>
                                <table id="" class="table table-bordered table-hover table-striped" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>SN</th>
                                            <th>Blog Title</th>
                                            <th>Date</th>
                                            <th>Content</th>
                                            

                                            
                                            <th>@lang('created')</th>
                                            @can('permission-action')
                                                <th>@lang('action')</th>
                                            @endcan
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if ($blogs->count() > 0)
                                            @php($count = 1)
                                            @foreach ($blogs as $blog)
                                                @if ($blog)
                                                    <tr>
                                                        <td>{{$count}}</td>
                                                        <td>{{$blog->title}}</td>
                                                        <td>{{$blog->date}}</td>
                                                        <td>{{$blog->content}}</td>
        
                                                        <td>{{$blog->created_at->toFormattedDateString()}}</td>
                                                       
                                                       
                                                        

                                                        @can('blog-action')
                                                            <td class="action">
                                                                @can('blog-edit')
                                                                    <a href="{{route('blog.edit', $blog->id)}}" data-toggle="tooltip" title="@lang('global.app_edit')" class="btn btn-info btn-sm">
                                                                        <i class="far fa-edit"></i>
                                                                    </a>
                                                                @endcan
                                                                    <br>
                                                                    <br>
                                                                @can('blog-delete')
                                                                    <form action="{{route('blog.destroy', ['blog' => $blog->id])}}" method="post">
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