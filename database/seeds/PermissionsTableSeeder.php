<?php

use Illuminate\Database\Seeder;
use Caffeinated\Shinobi\Models\Permission;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Users---------------------------------------------------------------
        Permission::create([
            'name'          => 'Navegar usuarios',
            'slug'          => 'users.index',
            'description'   => 'Lista y navega todos los usuarios del sistema',

        ]);

        Permission::create([
            'name'          => 'Ver detalle de usuarios',
            'slug'          => 'users.show',
            'description'   => 'Ver en detalle cada usuario del sistema',

        ]);

        Permission::create([
            'name'          => 'Edición de usuarios',
            'slug'          => 'users.edit',
            'description'   => 'Editar cualquier dato de un usuario del sistema',

        ]);

        Permission::create([
            'name'          => 'Eliminar usuario',
            'slug'          => 'users.destroy',
            'description'   => 'Eliminar cualquier usuario del sistema',

        ]);


        //Roles---------------------------------------------------------------
        Permission::create([
            'name'          => 'Listar roles',
            'slug'          => 'roles.index',
            'description'   => 'Lista y navega todos los roles del sistema',

        ]);

        Permission::create([
            'name'          => 'Ver en detalle un rol',
            'slug'          => 'roles.show',
            'description'   => 'Ver en detalle cada rol del sistema',

        ]);

        Permission::create([
            'name'          => 'Creación de un rol',
            'slug'          => 'roles.create',
            'description'   => 'Crear un rol del sistema',

        ]);

        Permission::create([
            'name'          => 'Eliminar rol',
            'slug'          => 'roles.destroy',
            'description'   => 'Eliminar cualquier rol del sistema',

        ]);

         Permission::create([
            'name'          => 'Edición de rol',
            'slug'          => 'roles.edit',
            'description'   => 'Editar cualquier dato de un rol del sistema',

        ]);



        //Products---------------------------------------------------------------
        Permission::create([
            'name'          => 'Listar productos',
            'slug'          => 'products.index',
            'description'   => 'Lista y navega todos los productos del sistema',

        ]);

        Permission::create([
            'name'          => 'Ver detalle de producto',
            'slug'          => 'proucts.show',
            'description'   => 'Ver en detalle cada producto del sistema',

        ]);

        Permission::create([
            'name'          => 'Creación de un producto',
            'slug'          => 'products.create',
            'description'   => 'Crear un producto del sistema',

        ]);

        Permission::create([
            'name'          => 'Eliminar producto',
            'slug'          => 'products.destroy',
            'description'   => 'Eliminar cualquier producto del sistema',

        ]);

         Permission::create([
            'name'          => 'Edición de un producto',
            'slug'          => 'productos.edit',
            'description'   => 'Editar cualquier dato de un producto del sistema',

        ]);

        
        //Categories---------------------------------------------------------------
        Permission::create([
            'name'          => 'Listar categorías',
            'slug'          => 'categories.index',
            'description'   => 'Lista y navega todas las categorias del sistema',

        ]);

        Permission::create([
            'name'          => 'Ver detalle de una categoría',
            'slug'          => 'categories.show',
            'description'   => 'Ver en detalle cada categoría del sistema',

        ]);

        Permission::create([
            'name'          => 'Creación de una categoría',
            'slug'          => 'categories.create',
            'description'   => 'Crear un categoría del sistema',

        ]);

        Permission::create([
            'name'          => 'Eliminar categoría',
            'slug'          => 'categories.destroy',
            'description'   => 'Eliminar cualquier categoría del sistema',

        ]);

         Permission::create([
            'name'          => 'Edición de una categoría',
            'slug'          => 'categories.edit',
            'description'   => 'Editar cualquier dato de una categoría del sistema',

        ]);
        

    }
}
