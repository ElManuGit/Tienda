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
            'description'   => 'Listar todos los usuarios',

        ]);

        Permission::create([
            'name'          => 'Ver detalle de usuarios',
            'slug'          => 'users.show',
            'description'   => 'Ver en detalle un usuario',

        ]);

        Permission::create([
            'name'          => 'Edición de usuarios',
            'slug'          => 'users.edit',
            'description'   => 'Editar cualquier dato de un usuario',

        ]);

        Permission::create([
            'name'          => 'Eliminar usuario',
            'slug'          => 'users.destroy',
            'description'   => 'Eliminar un usuario',

        ]);


        //Roles---------------------------------------------------------------
        Permission::create([
            'name'          => 'Listar roles',
            'slug'          => 'roles.index',
            'description'   => 'Listar los roles',

        ]);

        Permission::create([
            'name'          => 'Ver en detalle un rol',
            'slug'          => 'roles.show',
            'description'   => 'Ver en detalle un rol',

        ]);

        Permission::create([
            'name'          => 'Creación de un rol',
            'slug'          => 'roles.create',
            'description'   => 'Crear un rol',

        ]);

        Permission::create([
            'name'          => 'Eliminar rol',
            'slug'          => 'roles.destroy',
            'description'   => 'Eliminar un rol',

        ]);

        Permission::create([
            'name'          => 'Edición de rol',
            'slug'          => 'roles.edit',
            'description'   => 'Editar cualquier dato de un rol',

        ]);

        //Providers---------------------------------------------------------------
        Permission::create([
            'name'          => 'Listar proveedores',
            'slug'          => 'providers.index',
            'description'   => 'Listar los proveedores',

        ]);

        Permission::create([
            'name'          => 'Ver detalle de proveedor',
            'slug'          => 'providers.show',
            'description'   => 'Ver en detalle un proveedor',

        ]);

        Permission::create([
            'name'          => 'Creación de un proveedor',
            'slug'          => 'providers.create',
            'description'   => 'Cargar un proveedor',

        ]);

        Permission::create([
            'name'          => 'Eliminar proveedor',
            'slug'          => 'providers.destroy',
            'description'   => 'Eliminar un proveedor',

        ]);

        Permission::create([
            'name'          => 'Edición de un proveedor',
            'slug'          => 'providers.edit',
            'description'   => 'Editar cualquier dato de un proveedor',

        ]);

        //Products---------------------------------------------------------------
        Permission::create([
            'name'          => 'Listar productos',
            'slug'          => 'products.index',
            'description'   => 'Listar todos los productos',

        ]);

        Permission::create([
            'name'          => 'Ver detalle de producto',
            'slug'          => 'products.show',
            'description'   => 'Ver en detalle un producto',

        ]);

        Permission::create([
            'name'          => 'Creación de un producto',
            'slug'          => 'products.create',
            'description'   => 'Cargar un producto',

        ]);

        Permission::create([
            'name'          => 'Eliminar producto',
            'slug'          => 'products.destroy',
            'description'   => 'Eliminar un producto',

        ]);

        Permission::create([
            'name'          => 'Edición de un producto',
            'slug'          => 'products.edit',
            'description'   => 'Editar cualquier dato de un producto',

        ]);


        //Categories---------------------------------------------------------------
        Permission::create([
            'name'          => 'Listar categorías',
            'slug'          => 'categories.index',
            'description'   => 'Listar las categorias',

        ]);

        Permission::create([
            'name'          => 'Ver detalle de una categoría',
            'slug'          => 'categories.show',
            'description'   => 'Ver en detalle una categoría',

        ]);

        Permission::create([
            'name'          => 'Creación de una categoría',
            'slug'          => 'categories.create',
            'description'   => 'Cargar una categoría',

        ]);

        Permission::create([
            'name'          => 'Eliminar categoría',
            'slug'          => 'categories.destroy',
            'description'   => 'Eliminar un categoría',

        ]);

        Permission::create([
            'name'          => 'Edición de una categoría',
            'slug'          => 'categories.edit',
            'description'   => 'Editar cualquier dato de una categoría',

        ]);



        //Cities---------------------------------------------------------------
        Permission::create([
            'name'          => 'Listar ciudades',
            'slug'          => 'cities.index',
            'description'   => 'Listar las ciudades',

        ]);

        Permission::create([
            'name'          => 'Ver detalle dea ciudad',
            'slug'          => 'cities.show',
            'description'   => 'Ver en detalle una ciudad',

        ]);

        Permission::create([
            'name'          => 'Creación de una ciudad',
            'slug'          => 'cities.create',
            'description'   => 'Cargar una ciudad',

        ]);

        Permission::create([
            'name'          => 'Eliminar ciudad',
            'slug'          => 'cities.destroy',
            'description'   => 'Eliminar una ciudad',

        ]);

        Permission::create([
            'name'          => 'Edición de una ciudad',
            'slug'          => 'cities.edit',
            'description'   => 'Editar cualquier dato de una ciudad',

        ]);

        //Provinces---------------------------------------------------------------
        Permission::create([
            'name'          => 'Listar provincias',
            'slug'          => 'province.index',
            'description'   => 'Listar las provincias',

        ]);

        Permission::create([
            'name'          => 'Ver detalle de provincia',
            'slug'          => 'province.show',
            'description'   => 'Ver en detalle una provincia',

        ]);

        Permission::create([
            'name'          => 'Creación de un provincia',
            'slug'          => 'province.create',
            'description'   => 'Cargar una provincia',

        ]);

        Permission::create([
            'name'          => 'Eliminar provincia',
            'slug'          => 'province.destroy',
            'description'   => 'Eliminar una provincia',

        ]);

        Permission::create([
            'name'          => 'Edición de un provincia',
            'slug'          => 'province.edit',
            'description'   => 'Editar cualquier dato de una provincia',

        ]);

        //Countries---------------------------------------------------------------
        Permission::create([
            'name'          => 'Listar países',
            'slug'          => 'countries.index',
            'description'   => 'Lista los países',

        ]);

        Permission::create([
            'name'          => 'Ver detalle de país',
            'slug'          => 'countries.show',
            'description'   => 'Ver en detalle cada país',

        ]);

        Permission::create([
            'name'          => 'Creación de un país',
            'slug'          => 'countries.create',
            'description'   => 'Cargar un país',

        ]);

        Permission::create([
            'name'          => 'Eliminar país',
            'slug'          => 'countries.destroy',
            'description'   => 'Eliminar un país',

        ]);

        Permission::create([
            'name'          => 'Edición de un país',
            'slug'          => 'countries.edit',
            'description'   => 'Editar cualquier dato de un país',

        ]);
    }
}
