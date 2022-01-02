@extends('layouts.masteradmin')

@section('content')
<style>
   
    .row{
        margin-right: 20px;
    }
    #per_component{
        border: 2px  solid;
        margin: 2px 5px;

    }
   
</style>
    <!--user_type Edit Box Starts Here-->
    <div class="box">
        <div class="box-header">
            <h3 class="box-title">@lang('edit'): {{$user_type->user_type}}
        </div>
        <div class="box-body">
            <!--Form Starts-->
            <form action="{{route('user_type.update', ['user_type' => $user_type->id])}}" method="POST">
                @csrf
                @method('put')

                <div class="form-group">
                    <label for="user_type">@lang('user_type')</label>
                    <input type="text" name="user_type" id="user_type" value="{{$user_type->user_type}}" class="form-control">
                </div>
                <div class="row">
                    @foreach ($components as $component)
                        <div class="col-md-4" id="per_component">
                            <label for="">{{$component->component}} @lang('')</label>
                            @foreach ($permissions as $permission)
                                @if ($permission->component_id == $component->id)
                                    <div class='checkbox'>
                                        <!--Put Checked Attibute to input if the user has that permission-->
                                        <label for=""><input type='checkbox' name="permission[]" value="{{$permission->id}}"
                                            @foreach ($user_type->permissions as $user_type_permit)
                                                @if ($user_type_permit->id == $permission->id)
                                                    {{'checked'}}
                                                @endif
                                            @endforeach
                                            >{{$permission->permission}}</label>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                    @endforeach
                </div>
                <br>
                <div class="form-group">
                    <button type="submit" class="btn btn-success">@lang('update')</button>
                </div>
            </form>
        </div>
    </div>
    <!--user_type Edit Box Ends Here-->
@endsection