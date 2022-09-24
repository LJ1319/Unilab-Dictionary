@extends(backpack_view('blank'))

@php
$defaultBreadcrumbs = [
trans('backpack::crud.admin') => backpack_url('dashboard'),
$crud->entity_name_plural => url($crud->route),
trans('backpack::crud.edit') => false,
];

// if breadcrumbs aren't defined in the CrudController, use the default breadcrumbs
$breadcrumbs = $breadcrumbs ?? $defaultBreadcrumbs;
@endphp

@section('header')
<section class="container-fluid">
    <h2>
        <span class="text-capitalize">{!! $crud->getHeading() ?? $crud->entity_name_plural !!}
        </span>
        <small>{!! $crud->getSubheading() ?? trans('backpack::crud.edit').' '.$crud->entity_name !!}.</small>
        @if ($crud->hasAccess('list'))
        <small><a href="{{ url($crud->route) }}" class="d-print-none font-sm">
                <i class="la la-angle-double-{{ config('backpack.base.html_direction') == 'rtl' ? 'right' : 'left' }}">
                </i>
                {{ trans('backpack::crud.back_to_all') }}
                <span>
                    {{ $crud->entity_name_plural }}
                </span>
            </a>
        </small>
        @endif
    </h2>
</section>

@endsection

@section('content')
<div class="row">
    <div class="{{ $crud->getEditContentClass() }}">
        <!-- Custom box -->

        @include('crud::inc.grouped_errors')

        <form method="post" action="{{ url($crud->route.'/'.$entry->getKey()) }}" @if ($crud->hasUploadFields('update',
            $entry->getKey()))
            enctype="multipart/form-data"
            @endif
            >
            {!! csrf_field() !!}
            {!! method_field('PUT') !!}

            @if ($crud->model->translationEnabled())
            <div class="mb-2 text-right">
                <!-- Single button -->
                <div class="btn-group">
                    <button type="button" class="btn btn-sm btn-primary dropdown-toggle" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        {{trans('backpack::crud.language')}}: {{
                        $crud->model->getAvailableLocales()[request()->input('_locale')?request()->input('_locale'):App::getLocale()]
                        }} &nbsp; <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu">
                        @foreach ($crud->model->getAvailableLocales() as $key => $locale)
                        <a class="dropdown-item"
                            href="{{ url($crud->route.'/'.$entry->getKey().'/edit') }}?_locale={{ $key }}">{{ $locale
                            }}</a>
                        @endforeach
                    </ul>
                </div>
            </div>
            @endif
            <!-- load the view from the application if it exists, otherwise load the one in the package -->
            @if(view()->exists('vendor.backpack.crud.form_content'))
            @include('vendor.backpack.crud.form_content', ['fields' => $crud->fields(), 'action' => 'edit'])
            @else
            @include('crud::form_content', ['fields' => $crud->fields(), 'action' => 'edit'])
            @endif
            <!-- This makes sure that all field assets are loaded. -->
            <div class="d-none" id="parentLoadedAssets">{{ json_encode(Assets::loaded()) }}</div>
            @include('crud::inc.form_save_buttons')
        </form>

    </div>
</div>
<h2>
    <span class="text-capitalize">
        {{ trans('backpack::crud.definition') }}

    </span>

</h2>
<div id="crudTable_wrapper" class="dataTables_wrapper dt-bootstrap4">
    <div class="row">
        <div class="col-sm-12">
            <div class="row">
                <div class="col-sm-6 mb-2">
                    <div class="d-print-none with-border">
                        <a href="{{ route('definition.create') }}" class="btn btn-primary" data-style="zoom-in">
                            <span class="ladda-label">
                                <i class="la la-plus"></i>
                                {{ trans('backpack::crud.add_definition') }}

                            </span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="row hidden">
                <div class="col-sm-6"></div>
                <div class="col-sm-6 d-print-none"></div>
            </div>
            <table id="crudTable"
                class="bg-white table table-striped table-hover nowrap rounded shadow-xs border-xs mt-2 dataTable dtr-inline"
                data-responsive-table="1" data-has-details-row="0" data-has-bulk-actions="0" cellspacing="0"
                aria-describedby="crudTable_info">
                <thead>
                    <tr>
                        <th rowspan="1" colspan="1">
                            ID
                        </th>

                        <th rowspan="1" colspan="1">
                            {{ trans('backpack::crud.definition') }}
                        </th>
                        <th rowspan="1" colspan="1">
                            {{ trans('backpack::crud.approved') }}
                        </th>
                        <th rowspan="1" colspan="1">
                            {{ trans('backpack::crud.updated') }}
                        </th>
                        <th rowspan="1" colspan="1">
                            {{ trans('backpack::crud.created') }}

                        </th>
                        <th rowspan="1" colspan="1">
                            {{ trans('backpack::crud.actions') }}
                        </th>
                    </tr>
                </thead>

                <tbody>
                    @if(count($definitions) === 0)
                    <tr class="odd">
                        <td valign="top" colspan="7" class="dataTables_empty text-center">
                            {{ trans('backpack::crud.emptyTable') }}
                        </td>
                    </tr>
                    @else
                    @foreach($definitions as $definition)
                    <tr class="odd">
                        <td class="dtr-control"><span>
                                {{ $definition->id }}
                            </span>
                        </td>
                        <td>
                            <span>
                                <span class="d-inline-flex">
                                    {{ $definition->definition }}

                                </span>
                            </span>
                        </td>

                        <td>
                            <span>
                                {{ $definition->approved }}
                            </span>
                        </td>
                        <td class="sorting_1"><span data-order="2022-09-09 09:31:05">
                                {{ $definition->created_at }}

                            </span>
                        </td>
                        <td><span data-order="2022-09-09 09:31:05">
                                {{ $definition->updated_at }}

                            </span>
                        </td>
                        <td>
                            <!-- Single edit button -->
                            <a href=" {{ route('definition.show',['id'=>$definition->id]) }}"
                                class="btn btn-sm btn-link">
                                <i class="la la-eye"></i>
                                {{ trans('backpack::crud.preview') }}

                            </a>
                            <!-- Single edit button -->
                            <a href=" {{ route('definition.edit',['id'=>$definition->id]) }}"
                                class="btn btn-sm btn-link"><i class="la la-edit"></i>
                                {{ trans('backpack::crud.edit') }}
                            </a>
                        </td>
                    </tr>
                    @endforeach
                    @endif

                </tbody>
                <tfoot>
                    <tr>
                        <th rowspan="1" colspan="1">
                            ID
                        </th>
                        <th rowspan="1" colspan="1">
                            {{ trans('backpack::crud.definition') }}
                        </th>
                        <th rowspan="1" colspan="1">
                            {{ trans('backpack::crud.approved') }}
                        </th>
                        <th rowspan="1" colspan="1">
                            {{ trans('backpack::crud.updated') }}
                        </th>
                        <th rowspan="1" colspan="1">
                            {{ trans('backpack::crud.created') }}
                        </th>
                        <th rowspan="1" colspan="1">
                            {{ trans('backpack::crud.actions') }}
                        </th>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
</div>

@endsection
