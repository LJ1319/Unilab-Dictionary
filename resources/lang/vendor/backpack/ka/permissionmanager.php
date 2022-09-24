<?php

// --------------------------------------------------------
// This is only a pointer file, not an actual language file
// --------------------------------------------------------
//
// If you've copied this file to your /resources/lang/vendor/backpack/
// folder, please delete it, it's no use there. You need to copy/publish the
// actual language file, from the package.

// If a langfile with the same name exists in the package, load that one
if (file_exists(__DIR__ . '/../../../../../permissionmanager/src/resources/lang/' . basename(__DIR__) . '/' . basename(__FILE__))) {
    return include __DIR__ . '/../../../../../permissionmanager/src/resources/lang/' . basename(__DIR__) . '/' . basename(__FILE__);
}


return [
    'name'                  => 'სახელი',
    'role'                  => 'როლი',
    'roles'                 => 'როლები',
    'roles_have_permission' => 'როლები, რომლებსაც აქვთ ეს ნებართვა',
    'permission_singular'   => 'ნებართვა',
    'permission_plural'     => 'ნებართვები',
    'user_singular'         => 'მომხმარებელი',
    'user_plural'           => 'მომხმარებლები',
    'email'                 => 'ელ-ფოსტა',
    'extra_permissions'     => 'დამატებითი ნებართვები',
    'password'              => 'პაროლი',
    'password_confirmation' => 'პაროლის დადასტურება',
    'user_role_permission'  => 'მომხმარებლის როლის ნებართვები',
    'user'                  => 'მომხმარებელი',
    'users'                 => 'მომხმარებლები',
    'guard_type'            => 'მცველის ტიპი',
    'word' => 'სიტყვა'

];
