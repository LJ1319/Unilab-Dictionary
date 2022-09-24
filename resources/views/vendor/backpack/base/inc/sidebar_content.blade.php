<!-- This file is used to store sidebar items, starting with Backpack\Base 0.9.0 -->
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('dashboard') }}"><i class="la la-home nav-icon"></i> {{
        trans('backpack::base.dashboard') }}</a></li>

@if(backpack_user()->hasPermissionTo(config('permissions.user.manage.key')))
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('user') }}"><i class="la la-user nav-icon"></i> {{
        trans('backpack::base.user') }}</a></li>
@endif

@if(backpack_user()->hasPermissionTo(config('permissions.role.manage.key')))
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('role') }}"><i class="la la-user-cog nav-icon"></i> {{
        trans('backpack::base.role') }}</a></li>
@endif

@if(backpack_user()->hasPermissionTo(config('permissions.permission.manage.key')))
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('permission') }}"><i
            class="la la-user-check nav-icon"></i> {{ trans('backpack::base.permission') }}</a></li>
@endif

{{-- Definition --}}
{{-- @if(backpack_user()->hasPermissionTo(config('permissions.definition.manage.key')))
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('definition') }}"><i class="la la-book nav-icon"></i>{{
        trans('backpack::base.definition') }}</a></li>
@endif --}}

@if(backpack_user()->hasPermissionTo(config('permissions.word.manage.key')))
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('word') }}"><i class="la la-language nav-icon"></i> {{
        trans('backpack::base.word') }}</a></li>
@endif

@if(backpack_user()->hasPermissionTo(config('permissions.category.manage.key')))
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('category') }}"><i
            class="la la-layer-group nav-icon"></i> {{ trans('backpack::base.category') }}</a></li>
@endif

@if(backpack_user()->hasPermissionTo(config('permissions.tag.manage.key')))
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('tag') }}"><i class="la la-tags nav-icon"></i> {{
        trans('backpack::base.tag') }}</a></li>
@endif
