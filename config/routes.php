<?php

return [
    /**
     * ========================================================================
     * Module Setting
     * ========================================================================
     */
    '/arungistrator/setting' => 'settings/default/index',
    '/arungistrator/setting/tambah' => 'settings/default/tambah',
    '/arungistrator/setting/edit/<id:\d+>' => 'settings/default/edit',
    '/arungistrator/setting/aktivasi' => 'settings/default/aktivasi',
    /**
     * ========================================================================
     * Module User
     * ========================================================================
     */
    '/login' => 'user/default/login',
    '/logout' => 'user/default/logout',
    '/user/verifikasi' => 'user/default/verifikasi',
    '/user/verifikasi/sukses' => 'user/default/verifikasi-sukses',
    '/arungistrator/user/akses' => 'user/backend/akses/index',
    '/arungistrator/user/akses/group' => 'user/backend/user-group/index',
    '/arungistrator/user/akses/group/tambah' => '/user/backend/user-group/tambah',
    '/arungistrator/user/akses/group/edit' => 'user/backend/user-group/edit',
    '/arungistrator/user/akses/group/aktivasi' => 'user/backend/user-group/aktivasi',
    '/arungistrator/user/akses/user' => 'user/backend/user/index',
    '/arungistrator/user/akses/user/validate-password' => 'user/backend/user/validate-password',
    '/arungistrator/user/akses/modul' => 'user/backend/modul/index',
    '/arungistrator/user/akses/modul/cari' => 'user/backend/modul/search',
    '/arungistrator/user/akses/modul/tambah' => 'user/backend/modul/tambah',
    '/arungistrator/user/akses/modul/edit/<name:[a-z_]+>' => 'user/backend/modul/edit',
    '/arungistrator/user/akses/modul/hapus' => 'user/backend/modul/hapus',
    '/arungistrator/user/akses/modul/show-permissions' => 'user/backend/modul/show-permissions',
    '/arungistrator/user/akses/permission/tambah' => 'user/backend/permission/tambah',
    '/arungistrator/user/akses/permission/edit/<name:[a-z_]+>' => 'user/backend/permission/edit',
    '/arungistrator/user/akses/permission/hapus' => 'user/backend/permission/hapus',
    '/arungistrator/user/akses/control' => 'user/backend/assignment/index',
    '/arungistrator/user/akses/control/cari-group' => 'user/backend/assignment/search-usergroup',
    '/arungistrator/user/akses/control/list-permission' => 'user/backend/assignment/list-permission',
    '/arungistrator/user/akses/control/search-permission' => 'user/backend/assignment/search-permission',
    '/arungistrator/user/akses/control/get-permission' => 'user/backend/assignment/get-permission',
    '/arungistrator/user/akses/control/assign' => 'user/backend/assignment/assign',
    '/arungistrator/user/akses/control/revoke' => 'user/backend/assignment/revoke',
    /**
     * ========================================================================
     * Module Master
     * ========================================================================
     */
    '/provinsi/list' => 'master/provinsi/list-by-negara',
    '/kabupaten/list' => 'master/kabupaten/list-by-provinsi',
    '/kecamatan/list' => 'master/kecamatan/list-by-kabupaten',
    '/kelurahan/list' => 'master/kelurahan/list-by-kecamatan',
    '/arungistrator/master-data' => 'master/backend/master-data/index',
    '/arungistrator/master-data/tambah' => 'master/backend/master-data/tambah',
    '/arungistrator/master-data/edit/<id:\d+>' => 'master/backend/master-data/edit',
    '/arungistrator/master-data/hapus' => 'master/backend/master-data/hapus',
    '/arungistrator/master-data/<tabel:\w+>' => 'master/backend/master-data-object/index',
    '/arungistrator/master-data/<tabel:\w+>/tambah' => 'master/backend/master-data-object/tambah',
    '/arungistrator/master-data/<tabel:\w+>/edit/<id:\w+>' => 'master/backend/master-data-object/edit',
    '/arungistrator/master-data/<tabel:\w+>/aktivasi/<id:\w+>' => 'master/backend/master-data-object/aktivasi',
    '/arungistrator/kalender' => 'master/backend/kalender/index',
    '/arungistrator/kalender/prev' => 'master/backend/kalender/previous',
    '/arungistrator/kalender/next' => 'master/backend/kalender/next',
    '/arungistrator/kalender/libur/tambah' => 'master/backend/kalender/tambah-libur',
    '/arungistrator/kalender/libur/list' => 'master/backend/kalender/list-libur',
    '/arungistrator/kalender/libur/aktivasi' => 'master/backend/kalender/aktivasi-libur',
    /**
     * Website routes
     */
    '/' => 'site/index',
];
