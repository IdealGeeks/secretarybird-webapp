<?php

use Illuminate\Database\Seeder;

class PermissoesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        \DB::table('permissoes')->delete();
        
        \DB::table('permissoes')->insert(array (
            0 => 
            array (
                'id' => 1,
                'label' => 'Cadastros',
                'controller' => 'Permissoes',
                'rota' => NULL,
                'permissao_id' => NULL,
                'icone' => 'mdi mdi-account-group',
                'visivel_menu' => 1,
                'visivel_user' => 1,
                'mobile' => 1,
                'created_at' => '2019-01-15 22:02:24',
                'updated_at' => '2019-03-25 17:26:18',
            ),
            3 => 
            array (
                'id' => 4,
                'label' => 'Permissões',
                'controller' => 'Dashboard',
                'rota' => NULL,
                'permissao_id' => NULL,
                'icone' => 'mdi mdi-key-change',
                'visivel_menu' => 0,
                'visivel_user' => 1,
                'mobile' => 1,
                'created_at' => '2019-03-22 20:10:23',
                'updated_at' => '2019-03-25 17:26:18',
            ),
            1 =>
                array (
                    'id' => 2,
                    'label' => 'Lista de permissões',
                    'controller' => NULL,
                    'rota' => 'admin.permissoes.index',
                    'permissao_id' => 4,
                    'icone' => NULL,
                    'visivel_menu' => 0,
                    'visivel_user' => 1,
                    'mobile' => 1,
                    'created_at' => '2019-01-15 22:02:24',
                    'updated_at' => '2019-03-25 17:26:18',
                ),
            4 => 
            array (
                'id' => 5,
                'label' => 'Dashboard',
                'controller' => NULL,
                'rota' => 'admin.dashboard',
                'permissao_id' => 4,
                'icone' => NULL,
                'visivel_menu' => 0,
                'visivel_user' => 0,
                'mobile' => 0,
                'created_at' => '2019-03-22 20:10:23',
                'updated_at' => '2019-03-25 17:26:18',
            ),
            5 => 
            array (
                'id' => 6,
                'label' => 'Permissões para Usuários',
                'controller' => 'Usuários',
                'rota' => NULL,
                'permissao_id' => NULL,
                'icone' => NULL,
                'visivel_menu' => 0,
                'visivel_user' => 1,
                'mobile' => 1,
                'created_at' => '2019-03-22 20:10:23',
                'updated_at' => '2019-03-25 17:26:18',
            ),
            2 =>
                array (
                    'id' => 3,
                    'label' => 'Atualizar permissões',
                    'controller' => NULL,
                    'rota' => 'admin.permissoes.update',
                    'permissao_id' => 6,
                    'icone' => NULL,
                    'visivel_menu' => 0,
                    'visivel_user' => 1,
                    'mobile' => 1,
                    'created_at' => '2019-01-15 22:02:24',
                    'updated_at' => '2019-03-25 17:26:18',
                ),
            6 =>
            array (
                'id' => 7,
                'label' => 'Usuarios',
                'controller' => NULL,
                'rota' => 'admin.usuarios.index',
                'permissao_id' => 1,
                'icone' => NULL,
                'visivel_menu' => 1,
                'visivel_user' => 1,
                'mobile' => 1,
                'created_at' => '2019-03-22 20:10:23',
                'updated_at' => '2019-03-25 17:26:18',
            ),
            7 => 
            array (
                'id' => 8,
                'label' => 'Lixeira',
                'controller' => NULL,
                'rota' => 'admin.usuarios.trashed',
                'permissao_id' => 6,
                'icone' => NULL,
                'visivel_menu' => 0,
                'visivel_user' => 1,
                'mobile' => 1,
                'created_at' => '2019-03-22 20:10:23',
                'updated_at' => '2019-03-25 17:26:18',
            ),
            8 => 
            array (
                'id' => 9,
                'label' => 'Deletar',
                'controller' => NULL,
                'rota' => 'admin.usuarios.destroy',
                'permissao_id' => 6,
                'icone' => NULL,
                'visivel_menu' => 0,
                'visivel_user' => 1,
                'mobile' => 1,
                'created_at' => '2019-03-22 20:10:23',
                'updated_at' => '2019-03-25 17:26:18',
            ),
            9 => 
            array (
                'id' => 10,
                'label' => 'Restaurar da lixeira',
                'controller' => NULL,
                'rota' => 'admin.usuarios.restore',
                'permissao_id' => 6,
                'icone' => NULL,
                'visivel_menu' => 0,
                'visivel_user' => 1,
                'mobile' => 1,
                'created_at' => '2019-03-22 20:10:23',
                'updated_at' => '2019-03-25 17:26:18',
            ),
            10 => 
            array (
                'id' => 11,
                'label' => 'Deletar da lixeira',
                'controller' => NULL,
                'rota' => 'admin.usuarios.forceDelete',
                'permissao_id' => 6,
                'icone' => NULL,
                'visivel_menu' => 0,
                'visivel_user' => 1,
                'mobile' => 1,
                'created_at' => '2019-03-22 20:10:23',
                'updated_at' => '2019-03-25 17:26:18',
            ),
            11 => 
            array (
                'id' => 12,
                'label' => 'Editar',
                'controller' => NULL,
                'rota' => 'admin.usuarios.edit',
                'permissao_id' => 6,
                'icone' => NULL,
                'visivel_menu' => 0,
                'visivel_user' => 1,
                'mobile' => 1,
                'created_at' => '2019-03-22 20:10:23',
                'updated_at' => '2019-03-25 17:26:18',
            ),
            12 => 
            array (
                'id' => 13,
                'label' => 'Cadastrar',
                'controller' => NULL,
                'rota' => 'admin.usuarios.create',
                'permissao_id' => 6,
                'icone' => NULL,
                'visivel_menu' => 0,
                'visivel_user' => 1,
                'mobile' => 1,
                'created_at' => '2019-03-22 20:10:23',
                'updated_at' => '2019-03-25 17:26:18',
            ),
            13 => 
            array (
                'id' => 14,
                'label' => 'Permissões para Grupos',
                'controller' => 'Grupos',
                'rota' => NULL,
                'permissao_id' => NULL,
                'icone' => NULL,
                'visivel_menu' => 0,
                'visivel_user' => 1,
                'mobile' => 1,
                'created_at' => '2019-03-22 20:10:23',
                'updated_at' => '2019-03-25 17:26:18',
            ),
            14 => 
            array (
                'id' => 15,
                'label' => 'Grupos',
                'controller' => NULL,
                'rota' => 'admin.grupos.index',
                'permissao_id' => 1,
                'icone' => NULL,
                'visivel_menu' => 0,
                'visivel_user' => 1,
                'mobile' => 1,
                'created_at' => '2019-03-22 20:10:23',
                'updated_at' => '2019-03-25 17:26:18',
            ),
            15 => 
            array (
                'id' => 16,
                'label' => 'Lixeira',
                'controller' => NULL,
                'rota' => 'admin.grupos.trashed',
                'permissao_id' => 14,
                'icone' => NULL,
                'visivel_menu' => 0,
                'visivel_user' => 1,
                'mobile' => 1,
                'created_at' => '2019-03-22 20:10:23',
                'updated_at' => '2019-03-25 17:26:18',
            ),
            16 => 
            array (
                'id' => 17,
                'label' => 'Deletar',
                'controller' => NULL,
                'rota' => 'admin.grupos.destroy',
                'permissao_id' => 14,
                'icone' => NULL,
                'visivel_menu' => 0,
                'visivel_user' => 1,
                'mobile' => 1,
                'created_at' => '2019-03-22 20:10:23',
                'updated_at' => '2019-03-25 17:26:18',
            ),
            17 => 
            array (
                'id' => 18,
                'label' => 'Restaurar da lixeira',
                'controller' => NULL,
                'rota' => 'admin.grupos.restore',
                'permissao_id' => 14,
                'icone' => NULL,
                'visivel_menu' => 0,
                'visivel_user' => 1,
                'mobile' => 1,
                'created_at' => '2019-03-22 20:10:23',
                'updated_at' => '2019-03-25 17:26:18',
            ),
            18 => 
            array (
                'id' => 19,
                'label' => 'Deletar da lixeira',
                'controller' => NULL,
                'rota' => 'admin.grupos.forceDelete',
                'permissao_id' => 14,
                'icone' => NULL,
                'visivel_menu' => 0,
                'visivel_user' => 1,
                'mobile' => 1,
                'created_at' => '2019-03-22 20:10:23',
                'updated_at' => '2019-03-25 17:26:18',
            ),
            19 => 
            array (
                'id' => 20,
                'label' => 'Editar',
                'controller' => NULL,
                'rota' => 'admin.grupos.edit',
                'permissao_id' => 14,
                'icone' => NULL,
                'visivel_menu' => 0,
                'visivel_user' => 1,
                'mobile' => 1,
                'created_at' => '2019-03-22 20:10:23',
                'updated_at' => '2019-03-25 17:26:18',
            ),
            20 => 
            array (
                'id' => 21,
                'label' => 'Cadastrar',
                'controller' => NULL,
                'rota' => 'admin.grupos.create',
                'permissao_id' => 14,
                'icone' => NULL,
                'visivel_menu' => 0,
                'visivel_user' => 1,
                'mobile' => 1,
                'created_at' => '2019-03-22 20:10:23',
                'updated_at' => '2019-03-25 17:26:18',
            ),
            21 =>
                array (
                    'id' => 22,
                    'label' => 'Perfil',
                    'controller' => NULL,
                    'rota' => 'admin.usuarios.perfil',
                    'permissao_id' => 6,
                    'icone' => NULL,
                    'visivel_menu' => 0,
                    'visivel_user' => 1,
                    'mobile' => 1,
                    'created_at' => '2019-03-22 20:10:23',
                    'updated_at' => '2019-03-25 17:26:18',
                ),
            22 =>
                array (
                    'id' => 23,
                    'label' => 'Visitas',
                    'controller' => 'Visitas',
                    'rota' => NULL,
                    'permissao_id' => NULL,
                    'icone' => NULL,
                    'visivel_menu' => 1,
                    'visivel_user' => 1,
                    'mobile' => 1,
                    'created_at' => '2019-03-22 20:10:23',
                    'updated_at' => '2019-03-25 17:26:18',
                ),
            23 =>
                array (
                    'id' => 24,
                    'label' => 'Pendentes',
                    'controller' => NULL,
                    'rota' => 'admin.visitas.index',
                    'permissao_id' => 23,
                    'icone' => NULL,
                    'visivel_menu' => 1,
                    'visivel_user' => 1,
                    'mobile' => 1,
                    'created_at' => '2019-03-22 20:10:23',
                    'updated_at' => '2019-03-25 17:26:18',
                ),
            24 =>
                array (
                    'id' => 25,
                    'label' => 'Lixeira',
                    'controller' => NULL,
                    'rota' => 'admin.visitas.trashed',
                    'permissao_id' => 23,
                    'icone' => NULL,
                    'visivel_menu' => 0,
                    'visivel_user' => 1,
                    'mobile' => 1,
                    'created_at' => '2019-03-22 20:10:23',
                    'updated_at' => '2019-03-25 17:26:18',
                ),
            25 =>
                array (
                    'id' => 26,
                    'label' => 'Deletar',
                    'controller' => NULL,
                    'rota' => 'admin.visitas.destroy',
                    'permissao_id' => 23,
                    'icone' => NULL,
                    'visivel_menu' => 0,
                    'visivel_user' => 1,
                    'mobile' => 1,
                    'created_at' => '2019-03-22 20:10:23',
                    'updated_at' => '2019-03-25 17:26:18',
                ),
            26 =>
                array (
                    'id' => 27,
                    'label' => 'Restaurar da lixeira',
                    'controller' => NULL,
                    'rota' => 'admin.visitas.restore',
                    'permissao_id' => 23,
                    'icone' => NULL,
                    'visivel_menu' => 0,
                    'visivel_user' => 1,
                    'mobile' => 1,
                    'created_at' => '2019-03-22 20:10:23',
                    'updated_at' => '2019-03-25 17:26:18',
                ),
            27 =>
                array (
                    'id' => 28,
                    'label' => 'Deletar da lixeira',
                    'controller' => NULL,
                    'rota' => 'admin.visitas.forceDelete',
                    'permissao_id' => 23,
                    'icone' => NULL,
                    'visivel_menu' => 0,
                    'visivel_user' => 1,
                    'mobile' => 1,
                    'created_at' => '2019-03-22 20:10:23',
                    'updated_at' => '2019-03-25 17:26:18',
                ),
            28 =>
                array (
                    'id' => 29,
                    'label' => 'Editar',
                    'controller' => NULL,
                    'rota' => 'admin.visitas.edit',
                    'permissao_id' => 23,
                    'icone' => NULL,
                    'visivel_menu' => 0,
                    'visivel_user' => 1,
                    'mobile' => 1,
                    'created_at' => '2019-03-22 20:10:23',
                    'updated_at' => '2019-03-25 17:26:18',
                ),
            29 =>
                array (
                    'id' => 30,
                    'label' => 'Nova',
                    'controller' => NULL,
                    'rota' => 'admin.visitas.create',
                    'permissao_id' => 23,
                    'icone' => NULL,
                    'visivel_menu' => 1,
                    'visivel_user' => 1,
                    'mobile' => 1,
                    'created_at' => '2019-03-22 20:10:23',
                    'updated_at' => '2019-03-25 17:26:18',
                ),
            30 =>
                array (
                    'id' => 31,
                    'label' => 'Permissões para Empresas',
                    'controller' => 'Empresas',
                    'rota' => NULL,
                    'permissao_id' => NULL,
                    'icone' => NULL,
                    'visivel_menu' => 0,
                    'visivel_user' => 1,
                    'mobile' => 1,
                    'created_at' => '2019-03-22 20:10:23',
                    'updated_at' => '2019-03-25 17:26:18',
                ),
            31 =>
                array (
                    'id' => 32,
                    'label' => 'Empresas',
                    'controller' => NULL,
                    'rota' => 'admin.empresas.index',
                    'permissao_id' => 1,
                    'icone' => NULL,
                    'visivel_menu' => 1,
                    'visivel_user' => 1,
                    'mobile' => 1,
                    'created_at' => '2019-03-22 20:10:23',
                    'updated_at' => '2019-03-25 17:26:18',
                ),
            32 =>
                array (
                    'id' => 33,
                    'label' => 'Lixeira',
                    'controller' => NULL,
                    'rota' => 'admin.empresas.trashed',
                    'permissao_id' => 31,
                    'icone' => NULL,
                    'visivel_menu' => 0,
                    'visivel_user' => 1,
                    'mobile' => 1,
                    'created_at' => '2019-03-22 20:10:23',
                    'updated_at' => '2019-03-25 17:26:18',
                ),
            33 =>
                array (
                    'id' => 34,
                    'label' => 'Deletar',
                    'controller' => NULL,
                    'rota' => 'admin.empresas.destroy',
                    'permissao_id' => 31,
                    'icone' => NULL,
                    'visivel_menu' => 0,
                    'visivel_user' => 1,
                    'mobile' => 1,
                    'created_at' => '2019-03-22 20:10:23',
                    'updated_at' => '2019-03-25 17:26:18',
                ),
            34 =>
                array (
                    'id' => 35,
                    'label' => 'Restaurar da lixeira',
                    'controller' => NULL,
                    'rota' => 'admin.empresas.restore',
                    'permissao_id' => 31,
                    'icone' => NULL,
                    'visivel_menu' => 0,
                    'visivel_user' => 1,
                    'mobile' => 1,
                    'created_at' => '2019-03-22 20:10:23',
                    'updated_at' => '2019-03-25 17:26:18',
                ),
            35 =>
                array (
                    'id' => 36,
                    'label' => 'Deletar da lixeira',
                    'controller' => NULL,
                    'rota' => 'admin.empresas.forceDelete',
                    'permissao_id' => 31,
                    'icone' => NULL,
                    'visivel_menu' => 0,
                    'visivel_user' => 1,
                    'mobile' => 1,
                    'created_at' => '2019-03-22 20:10:23',
                    'updated_at' => '2019-03-25 17:26:18',
                ),
            36 =>
                array (
                    'id' => 37,
                    'label' => 'Editar',
                    'controller' => NULL,
                    'rota' => 'admin.empresas.edit',
                    'permissao_id' => 31,
                    'icone' => NULL,
                    'visivel_menu' => 0,
                    'visivel_user' => 1,
                    'mobile' => 1,
                    'created_at' => '2019-03-22 20:10:23',
                    'updated_at' => '2019-03-25 17:26:18',
                ),
            37 =>
                array (
                    'id' => 38,
                    'label' => 'Cadastrar',
                    'controller' => NULL,
                    'rota' => 'admin.empresas.create',
                    'permissao_id' => 31,
                    'icone' => NULL,
                    'visivel_menu' => 0,
                    'visivel_user' => 1,
                    'mobile' => 1,
                    'created_at' => '2019-03-22 20:10:23',
                    'updated_at' => '2019-03-25 17:26:18',
                ),
            38 =>
                array (
                    'id' => 39,
                    'label' => 'Permissões para Setores',
                    'controller' => 'Setores',
                    'rota' => NULL,
                    'permissao_id' => NULL,
                    'icone' => NULL,
                    'visivel_menu' => 0,
                    'visivel_user' => 1,
                    'mobile' => 1,
                    'created_at' => '2019-03-22 20:10:23',
                    'updated_at' => '2019-03-25 17:26:18',
                ),
            39 =>
                array (
                    'id' => 40,
                    'label' => 'Setores',
                    'controller' => NULL,
                    'rota' => 'admin.setores.index',
                    'permissao_id' => 1,
                    'icone' => NULL,
                    'visivel_menu' => 1,
                    'visivel_user' => 1,
                    'mobile' => 1,
                    'created_at' => '2019-03-22 20:10:23',
                    'updated_at' => '2019-03-25 17:26:18',
                ),
            40 =>
                array (
                    'id' => 41,
                    'label' => 'Lixeira',
                    'controller' => NULL,
                    'rota' => 'admin.setores.trashed',
                    'permissao_id' => 39,
                    'icone' => NULL,
                    'visivel_menu' => 0,
                    'visivel_user' => 1,
                    'mobile' => 1,
                    'created_at' => '2019-03-22 20:10:23',
                    'updated_at' => '2019-03-25 17:26:18',
                ),
            41 =>
                array (
                    'id' => 42,
                    'label' => 'Deletar',
                    'controller' => NULL,
                    'rota' => 'admin.setores.destroy',
                    'permissao_id' => 39,
                    'icone' => NULL,
                    'visivel_menu' => 0,
                    'visivel_user' => 1,
                    'mobile' => 1,
                    'created_at' => '2019-03-22 20:10:23',
                    'updated_at' => '2019-03-25 17:26:18',
                ),
            42 =>
                array (
                    'id' => 43,
                    'label' => 'Restaurar da lixeira',
                    'controller' => NULL,
                    'rota' => 'admin.setores.restore',
                    'permissao_id' => 39,
                    'icone' => NULL,
                    'visivel_menu' => 0,
                    'visivel_user' => 1,
                    'mobile' => 1,
                    'created_at' => '2019-03-22 20:10:23',
                    'updated_at' => '2019-03-25 17:26:18',
                ),
            43 =>
                array (
                    'id' => 44,
                    'label' => 'Deletar da lixeira',
                    'controller' => NULL,
                    'rota' => 'admin.setores.forceDelete',
                    'permissao_id' => 39,
                    'icone' => NULL,
                    'visivel_menu' => 0,
                    'visivel_user' => 1,
                    'mobile' => 1,
                    'created_at' => '2019-03-22 20:10:23',
                    'updated_at' => '2019-03-25 17:26:18',
                ),
            44 =>
                array (
                    'id' => 45,
                    'label' => 'Editar',
                    'controller' => NULL,
                    'rota' => 'admin.setores.edit',
                    'permissao_id' => 39,
                    'icone' => NULL,
                    'visivel_menu' => 0,
                    'visivel_user' => 1,
                    'mobile' => 1,
                    'created_at' => '2019-03-22 20:10:23',
                    'updated_at' => '2019-03-25 17:26:18',
                ),
            45 =>
                array (
                    'id' => 46,
                    'label' => 'Cadastrar',
                    'controller' => NULL,
                    'rota' => 'admin.setores.create',
                    'permissao_id' => 39,
                    'icone' => NULL,
                    'visivel_menu' => 0,
                    'visivel_user' => 1,
                    'mobile' => 1,
                    'created_at' => '2019-03-22 20:10:23',
                    'updated_at' => '2019-03-25 17:26:18',
                ),
            46 =>
                array (
                    'id' => 47,
                    'label' => 'Grupos Permissões',
                    'controller' => NULL,
                    'rota' => 'admin.grupos.permissoes',
                    'permissao_id' => 14,
                    'icone' => NULL,
                    'visivel_menu' => 0,
                    'visivel_user' => 1,
                    'mobile' => 1,
                    'created_at' => '2019-03-22 20:10:23',
                    'updated_at' => '2019-03-25 17:26:18',
                ),
            47 =>
                array (
                    'id' => 48,
                    'label' => 'Permissões para Restaurantes',
                    'controller' => 'Restaurantes',
                    'rota' => NULL,
                    'permissao_id' => NULL,
                    'icone' => NULL,
                    'visivel_menu' => 0,
                    'visivel_user' => 1,
                    'mobile' => 1,
                    'created_at' => '2019-03-22 20:10:23',
                    'updated_at' => '2019-03-25 17:26:18',
                ),
            48 =>
                array (
                    'id' => 49,
                    'label' => 'Restaurantes',
                    'controller' => NULL,
                    'rota' => 'admin.restaurantes.index',
                    'permissao_id' => 1,
                    'icone' => NULL,
                    'visivel_menu' => 1,
                    'visivel_user' => 1,
                    'mobile' => 1,
                    'created_at' => '2019-03-22 20:10:23',
                    'updated_at' => '2019-03-25 17:26:18',
                ),
            49 =>
                array (
                    'id' => 50,
                    'label' => 'Lixeira',
                    'controller' => NULL,
                    'rota' => 'admin.restaurantes.trashed',
                    'permissao_id' => 49,
                    'icone' => NULL,
                    'visivel_menu' => 0,
                    'visivel_user' => 1,
                    'mobile' => 1,
                    'created_at' => '2019-03-22 20:10:23',
                    'updated_at' => '2019-03-25 17:26:18',
                ),
            50 =>
                array (
                    'id' => 51,
                    'label' => 'Deletar',
                    'controller' => NULL,
                    'rota' => 'admin.restaurantes.destroy',
                    'permissao_id' => 49,
                    'icone' => NULL,
                    'visivel_menu' => 0,
                    'visivel_user' => 1,
                    'mobile' => 1,
                    'created_at' => '2019-03-22 20:10:23',
                    'updated_at' => '2019-03-25 17:26:18',
                ),
            51 =>
                array (
                    'id' => 52,
                    'label' => 'Restaurar da lixeira',
                    'controller' => NULL,
                    'rota' => 'admin.restaurantes.restore',
                    'permissao_id' => 49,
                    'icone' => NULL,
                    'visivel_menu' => 0,
                    'visivel_user' => 1,
                    'mobile' => 1,
                    'created_at' => '2019-03-22 20:10:23',
                    'updated_at' => '2019-03-25 17:26:18',
                ),
            52 =>
                array (
                    'id' => 53,
                    'label' => 'Deletar da lixeira',
                    'controller' => NULL,
                    'rota' => 'admin.restaurantes.forceDelete',
                    'permissao_id' => 49,
                    'icone' => NULL,
                    'visivel_menu' => 0,
                    'visivel_user' => 1,
                    'mobile' => 1,
                    'created_at' => '2019-03-22 20:10:23',
                    'updated_at' => '2019-03-25 17:26:18',
                ),
            53 =>
                array (
                    'id' => 54,
                    'label' => 'Editar',
                    'controller' => NULL,
                    'rota' => 'admin.restaurantes.edit',
                    'permissao_id' => 49,
                    'icone' => NULL,
                    'visivel_menu' => 0,
                    'visivel_user' => 1,
                    'mobile' => 1,
                    'created_at' => '2019-03-22 20:10:23',
                    'updated_at' => '2019-03-25 17:26:18',
                ),
            54 =>
                array (
                    'id' => 55,
                    'label' => 'Cadastrar',
                    'controller' => NULL,
                    'rota' => 'admin.restaurantes.create',
                    'permissao_id' => 49,
                    'icone' => NULL,
                    'visivel_menu' => 0,
                    'visivel_user' => 1,
                    'mobile' => 1,
                    'created_at' => '2019-03-22 20:10:23',
                    'updated_at' => '2019-03-25 17:26:18',
                ),
        ));
    }
}
