<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\DefinitionRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class DefinitionCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class DefinitionCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    /**
     * Configure the CrudPanel object. Apply settings to all operations.
     *
     * @return void
     */
    public function setup()
    {
        CRUD::setModel(\App\Models\Definition::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/definition');
        CRUD::setEntityNameStrings(trans('backpack::crud.definition'), trans('backpack::crud.definitions'));
        $this->crud->backLink = "/word";
    }

    /**
     * Define what happens when the List operation is loaded.
     *
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */
    protected function setupListOperation()
    {


        CRUD::column('id');
        CRUD::Column([
            'name' => 'word_id',
            'label' => trans('backpack::crud.word')
        ]);
        CRUD::column([
            'name' => 'definition',
            'label' => trans('backpack::crud.definition')
        ]);
        CRUD::addColumn([
            'name' => 'approved',
            'label' => trans('backapck::crud.approved'),
            'type' => 'boolean'
        ]);
        CRUD::column([
            'name'  => 'created_at',
            'label' => trans('backpack:crud.created_at')
        ]);
        CRUD::column([
            'name'  => 'updated_at',
            'label' => trans('backpack.crud.updated_at')
        ]);

        /**
         * Columns can be defined using the fluent syntax or array syntax:
         * - CRUD::column('price')->type('number');
         * - CRUD::addColumn(['name' => 'price', 'type' => 'number']);
         */
    }

    /**
     * Define what happens when the Create operation is loaded.
     *
     * @see https://backpackforlaravel.com/docs/crud-operation-create
     * @return void
     */
    protected function setupCreateOperation()
    {
        CRUD::setValidation(DefinitionRequest::class);

        CRUD::addField([
            'name' => 'word_id',
            'label' => trans('backpack::crud.word')
        ]);
        CRUD::addField([
            'name' => 'definition',
            'label' => trans('backpack::crud.definition')
        ]);
        CRUD::addField([
            'name' => 'approved',
            'label' => trans('backpack::crud.approved')
        ]);

        /**
         * Fields can be defined using the fluent syntax or array syntax:
         * - CRUD::field('price')->type('number');
         * - CRUD::addField(['name' => 'price', 'type' => 'number']));
         */
    }

    /**
     * Define what happens when the Update operation is loaded.
     *
     * @see https://backpackforlaravel.com/docs/crud-operation-update
     * @return void
     */
    protected function setupUpdateOperation()
    {
        $this->setupCreateOperation();
    }
}
