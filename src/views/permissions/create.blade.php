@extends(Config::get('backend::views.layout'))

@section('header')
<h3>
    <i class="icon-ban-circle"></i>
    Create new permissions for a module
</h3>
@stop

@section('help')
<p class="lead">Permission Inheritance</p>
<p>
    Just as permissions are defined for groups and individual users, the permission inheritance model depends on a
    user's group.
    An Administrator can assign different permissions to a user that is assigned to a group, and if that group has
    different access permissions, the user's access is always determined by the group access.
</p>
<p class="text-warning">
    Permission Inheritance only works for users permissions.
</p>
<p class="text-info">
    For more info visit <a href="http://docs.cartalyst.com/sentry-2/permissions" target="_blank">Sentry website</a>
</p>
@stop

@section('content')
<div class="row">
    <div class="span12 margin-top-20">

        {{ Former::horizontal_open(route('admin.permissions.store')) }}
        {{ Former::xlarge_text('name', 'Module Name') }}
        {{ Former::checkboxes('permissions')->checkboxes($roles['inputs'])->label('Permissions')}}
        <div class="form-actions">
            <button type="submit" class="btn btn-primary">Save changes</button>
            <a href="{{ route('admin.permissions.index') }}" class="btn">Cancel</a>
        </div>
        {{ Former::close() }}

    </div>
</div>
@stop
