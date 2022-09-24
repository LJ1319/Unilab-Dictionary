<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Backpack Crud Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines are used by the CRUD interface.
    | You are free to change them to anything
    | you want to customize your views to better match your application.
    |
    */

    // Forms
    'save_action_save_and_new'         => 'შენახვა და ახალი ელემენტი.',
    'save_action_save_and_edit'        => 'შეინახეთ და დაარედაქტირეთ ეს ელემენტი.',
    'save_action_save_and_back'        => 'შენახვა და უკან დაბრუნება.',
    'save_action_save_and_preview'     => 'შენახვა და გადახედვა.',
    'save_action_changed_notification' => 'ნაგულისხმევი(დეფოლტ) მოქმედება შენახვის შემდეგ შეიცვალა.',

    // Create form
    'add'            => 'დაამატეთ',
    'add_definition' => 'დაამატეთ განმარტება',
    'back_to_all'    => 'მაჩვენე',
    'back'           => 'უკან',
    'cancel'         => 'გაუქმება',
    'add_a_new'      => 'დაამატე ახალი ',
    'word'           => 'სიტყვა',
    'words'          => 'სიტყვები',
    'category'       => 'კატეგორია',
    'tag'            => 'ტეგი',
    'Permission'     => 'ნებართვა',
    'Role'           => 'როლი',
    'User'           => 'მომხმარებელი',


    // Edit form
    'edit'                 => 'გაანახლე',
    'save'                 => 'შენახვა',

    // Translatable models
    'edit_translations' => 'გადათარგმნა',
    'language'          => 'ენა',

    // CRUD table view
    'all'                       => 'ყველა ',
    'in_the_database'           => 'მონაცემთა ბაზაში',
    'list'                      => 'სია',
    'name'                      => 'სახელი',
    'active'                    => 'აქტიური',
    'comment'                   => 'კომენტარი',
    'example'                   => 'მაგალითი',
    'image'                     => 'სურათი',
    'created_at'                => 'შეიქმნა',
    'updated_at'                => 'განახლდა',
    'Roles'                     => 'როლები',
    'tags'                      => 'ტეგები',
    'Permissions'               => 'როლები',
    'Users'                     => 'მომხმარებლები',
    'categories'                => 'კატეგორიები',
    'reset'                     => 'გადატვირთვა',                                                                                         //აღდგენა
    'definition'                => 'განმარტება',
    'definitions'               => 'განმარტებები',
    'approved'                  => 'დამტიკცებულია',
    'created'                   => 'შექმნილია',
    'updated'                   => 'განახლებულია',
    'actions'                   => 'მოქმედებები',
    'preview'                   => 'განიხილე',
    'delete'                    => 'წაშლა',
    'admin'                     => 'ადმინი',
    'details_row'               => 'ეს არის დეტალების მწკრივი. შეცვალეთ, როგორც გსურთ.',
    'details_row_loading_error' => 'დეტალების ჩატვირთვისას მოხდა შეცდომა. გთხოვთ, სცადოთ ხელახლა .',
    'clone'                     => 'კლონი',
    'clone_success'             => '<strong>შესვლა კლონირებულია</strong><br>დამატებულია ახალი ჩანაწერი, იგივე ინფორმაციით, როგორც ეს.',
    'clone_failure'             => '<strong>კლონირება ჩაიშალა</strong><br>ახალი ჩანაწერის შექმნა ვერ მოხერხდა. გთხოვთ კიდევ სცადოთ.',

    // Confirmation messages and bubbles
    'delete_confirm'                              => 'დარწმუნებული ხართ, რომ გნებავთ ამ ელემენტის წაშლა?',
    'delete_confirmation_title'                   => 'ელემენტი წაშლილია',
    'delete_confirmation_message'                 => 'ელემენტი წარმატებით წაიშალა.',
    'delete_confirmation_not_title'               => 'არ არის წაშლილი',
    'delete_confirmation_not_message'             => 'დაფიქსირდა შეცდომა. თქვენი ელემენტი შესაძლოა არ იყოს წაშლილი.',
    'delete_confirmation_not_deleted_title'       => 'არ არის წაშლილი',
    'delete_confirmation_not_deleted_message'     => 'არაფერი მოხდა. თქვენი ელემენტი უსაფრთხოდაა.',

    // Bulk actions
    'bulk_no_entries_selected_title'   => 'ჩანაწერები არჩეული არ არის',
    'bulk_no_entries_selected_message' => 'გთხოვთ, აირჩიოთ ერთი ან მეტი ელემენტი,რათა შეასრულოთ მასზე დიდი მოქმედება.',

    // Bulk delete
    'bulk_delete_are_you_sure'   => 'დარწმუნებული ხართ, რომ გსურთ წაშალოთ ეს :number ჩანაწერი?',
    'bulk_delete_sucess_title'   => 'შეყვანილი ინფორმაცია წაშლილია',
    'bulk_delete_sucess_message' => ' ელემენტები წაშლილია',
    'bulk_delete_error_title'    => 'წაშლა ჩაიშალა',
    'bulk_delete_error_message'  => 'ერთი ან მეტი ელემენტი ვერ წაიშლება',

    // Bulk clone
    'bulk_clone_are_you_sure'   => 'დარწმუნებული ხართ, რომ გსურთ ამ :number ჩანაწერის კლონირება?',
    'bulk_clone_sucess_title'   => 'შეყვანილი ინფორმაცია კლონირებულია',
    'bulk_clone_sucess_message' => ' ელემენტები კლონირებულია.',
    'bulk_clone_error_title'    => 'კლონირება ჩაიშალა',
    'bulk_clone_error_message'  => 'ერთი ან მეტი ჩანაწერის შექმნა ვერ მოხერხდა. გთხოვთ კიდევ სცადეთ.',

    // Ajax errors
    'ajax_error_title' => 'შეცდომა',
    'ajax_error_text'  => 'შეცდომა გვერდის ჩატვირთვისას. გთხოვთ ხელახლა ჩართეთ გვერდი.',

    // DataTables translation
    'emptyTable'     => 'ცხრილში მონაცემები არ არის ხელმისაწვდომი',
    'info'           => 'ნაჩვენებია _START_ -დან _END_ -მდე _TOTAL_ ჩანაწერიდან',
    'infoEmpty'      => 'ჩანაწერები არ არის',
    'infoFiltered'   => '(გაფილტრული სულ _MAX_ ჩანაწერიდან)',
    'infoPostFix'    => '.',
    'thousands'      => ',',
    'lengthMenu'     => '_MENU_ შეყვანილი ინფორმაცია თითო გვერდზე',
    'loadingRecords' => 'იტვირთება...',
    'processing'     => 'მუშავდება...',
    'search'         => 'ძებნა',
    'zeroRecords'    => 'შესაფერისი ჩანაწერები ვერ მოიძებნა',
    'paginate'       => [
        'first'    => 'პირველი',
        'last'     => 'ბოლო',
        'next'     => 'შემდეგი',
        'previous' => 'წინა',
    ],
    'aria' => [
        'sortAscending'  => ': გააქტიურეთ სვეტის ზრდადობით სორტირებისთვის',
        'sortDescending' => ': გააქტიურეთ სვეტის კლებადობით სორტირებისთვის',
    ],
    'export' => [
        'export'            => 'ექსპორტი',
        'copy'              => 'კოპირება',
        'excel'             => 'Excel',
        'csv'               => 'CSV',
        'pdf'               => 'PDF',
        'print'             => 'ბეჭდვა',
        'column_visibility' => 'სვეტის ხილვადობა',
    ],

    // global crud - errors
    'unauthorized_access' => 'არაავტორიზებული წვდომა - თქვენ არ გაქვთ საჭირო ნებართვა ამ გვერდის სანახავად.',
    'please_fix'          => 'გთხოვთ, გამოასწოროთ შემდეგი შეცდომები:',

    // global crud - success / error notification bubbles
    'insert_success' => 'ელემენტი წარმატებით დაემატა.',
    'update_success' => 'ელემენტი წარმატებით შეიცვალა.',

    // CRUD reorder view
    'reorder'                      => 'ხელახლა შეკვეთა',
    'reorder_text'                 => 'გამოიყენეთ drag&drop ხელახლა შეკვეთისთვის.',
    'reorder_success_title'        => 'შესრულებულია',
    'reorder_success_message'      => 'თქვენი შეკვეთა შენახულია.',
    'reorder_error_title'          => 'შეცდომა',
    'reorder_error_message'        => 'თქვენი შეკვეთა არ არის შენახული.',

    // CRUD yes/no
    'yes' => 'დიახ',
    'no'  => 'არა',

    // CRUD filters navbar view
    'filters'        => 'ფილტრები',
    'toggle_filters' => 'ფილტრების გადართვა',
    'remove_filters' => 'ფილტრების ამოშლა',
    'apply' => 'გამოყენება',

    //filters language strings
    'today' => 'დღეს',
    'yesterday' => 'გუშინ',
    'last_7_days' => 'ბოლო 7 დღე',
    'last_30_days' => 'ბოლო 30 დღე',
    'this_month' => 'ეს თვე',
    'last_month' => 'გასული თვე',
    'custom_range' => 'მორგებული დიაპაზონი',
    'weekLabel' => 'W',

    // Fields
    'browse_uploads'            => 'დაათვალიერეთ ატვირთვები',
    'select_all'                => 'მონიშნეთ ყველა',
    'select_files'              => 'მონიშნეთ ფაილები',
    'select_file'               => 'მონიშნეთ ფაილი',
    'clear'                     => 'აშკარა',
    'page_link'                 => 'გვერდის ლინკი',
    'page_link_placeholder'     => 'http://example.com/your-desired-page',
    'internal_link'             => 'შიდა ლინკი',
    'internal_link_placeholder' => 'შიდა slug. Ex: \'admin/page\' (no quotes) for \':url\'',
    'external_link'             => 'შიდა ლინკი',
    'choose_file'               => 'აირჩიეთ ფაილი',
    'new_item'                  => 'ახალი ელემენტი',
    'select_entry'              => 'მონიშნეთ ჩანაწერი',
    'select_entries'            => 'მონიშნეთ ჩანაწერები',

    //Table field
    'table_cant_add'    => 'ვერ დაამატებთ ახალ :entity -ს',
    'table_max_reached' => 'მაქსიმალური რაოდენობა :max მიღწეულის',

    // File manager
    'file_manager' => 'ფაილების მენეჯერი',

    // InlineCreateOperation
    'related_entry_created_success' => 'დაკავშირებული ჩანაწერი შექმნილია და არჩეულია.',
    'related_entry_created_error' => 'დაკავშირებული ჩანაწერის შექმნა ვერ მოხერხდა.',
    'inline_saving' => 'ინახება...',

    // returned when no translations found in select inputs
    'empty_translations' => '(empty)',

    // The pivot selector required validation message
    'pivot_selector_required_validation_message' => 'საყრდენი ველი აუცილებელია.',
];
