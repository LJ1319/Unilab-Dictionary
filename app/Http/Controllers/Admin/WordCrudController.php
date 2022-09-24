<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\WordRequest;
use App\Models\Definition;
use App\Models\Word;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;
use function PHPSTORM_META\map;

/**
 * Class WordCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class WordCrudController extends CrudController
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
        CRUD::setModel(\App\Models\Word::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/word');
        CRUD::setEntityNameStrings(trans('backpack::base.word'), trans('backpack::base.words'));
        $this->crud->setEditView('admin.word.edit');
    }

    /**
     * Define what happens when the List operation is loaded.
     *
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @see  For image column https://backpackforlaravel.com/docs/5.x/crud-columns#image-1
     * @return void
     */
    protected function setupListOperation()
    {
        CRUD::column('id');
        CRUD::addColumn([
            'name'  => 'word',
            'label' => trans('backpack::crud.word'),
        ]);
        CRUD::addColumn([
            'name'  => 'comment',
            'label' => trans('backpack::crud.comment'),
        ]);
        CRUD::addColumn([
            'name'  => 'example',
            'label' => trans('backpack::crud.example'),
        ]);
        CRUD::addColumn([
            'name'   => 'image',
            'type'   => 'image',
            'prefix' => 'storage/',
            'label'  => trans('backpack::crud.image'),
            'height' => '60px',
            'width'  => '60px',
        ]);
        CRUD::addColumn([
            'name'  => 'active',
            'label' => trans('backpack::crud.active'),
            'type'  => 'boolean'
        ]);
        CRUD::addColumn([
            'name'  => 'categories',
            'label' => trans('backpack::crud.category'),
        ]);
        CRUD::addColumn([
            'name'  => 'tags',
            'label' => trans('backpack::crud.tag'),
        ]);
        CRUD::addColumn([
            'name'  => 'created_at',
            'label' => trans('backpack::crud.created_at'),
        ]);
        // CRUD::addColumn([
        //     'name'  => 'updated_at',
        //     'label' => trans('backpack::crud.updated_at'),
        // ]);

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
     * @see For image upload //https://backpackforlaravel.com/docs/5.x/crud-fields#upload-1
     * @return void
     */
    protected function setupCreateOperation()
    {
        CRUD::setValidation(WordRequest::class);

        CRUD::addField([
            'name'  => 'word',
            'label' => trans('backpack::crud.word'),
        ]);
        CRUD::addField([
            'name'  => 'comment',
            'label' => trans('backpack::crud.comment'),
        ]);
        CRUD::addField([
            'name'  => 'example',
            'label' => trans('backpack::crud.example'),
        ]);
        CRUD::addField([
            'name'   => 'image',
            'label' => trans('backpack::crud.image'),
            'type'   => 'upload',
            'upload' => true,
        ]);
        CRUD::addField([
            'name'  => 'categories',
            'label' => trans('backpack::crud.category'),
        ]);
        CRUD::addField([
            'name'  => 'tags',
            'label' => trans('backpack::crud.tag'),
        ]);
        CRUD::addField([
            'name'  => 'active',
            'label' => trans('backpack::crud.active'),
            'type'  => 'boolean'
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
        $id = $this->crud->getCurrentEntryId();
        $data = Definition::where('word_id', $id)->get();
        $this->data['definitions'] = $data;
        $this->setupCreateOperation();
    }

    public function destroy($id)
    {
        $this->crud->hasAccessOrFail('delete');

        // get entry ID from Request (makes sure its the last ID for nested resources)
        $id = $this->crud->getCurrentEntryId() ?? $id;

        $word = Word::find($id);
        if ($word) {
            $word->tags()->detach();
            $word->categories()->detach();
        }

        return $this->crud->delete($id);
    }
}
