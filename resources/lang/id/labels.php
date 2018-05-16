<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Labels Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines are used in labels throughout the system.
    | Regardless where it is placed, a label can be listed here so it is easily
    | found in a intuitive way.
    |
    */

    'general' => [
        'all'     => 'Semua',
        'yes'     => 'Ya',
        'no'      => 'Tidak',
        'custom'  => 'Kustom',
        'actions' => 'Tindakan',
        'active'  => 'Aktif',
        'buttons' => [
            'save'   => 'Simpan',
            'update' => 'Perbarui',
        ],
        'hide'              => 'Sembunyi',
        'inactive'          => 'Non-aktif',
        'none'              => 'Tidak ada',
        'show'              => 'Tunjukkan',
        'toggle_navigation' => 'Alihkan Navigasi',
    ],

    'backend' => [
        'access' => [
            'roles' => [
                'create'     => 'Buat Peran',
                'edit'       => 'Edit Peran',
                'management' => 'Manajemen Peran',

                'table' => [
                    'number_of_users' => 'Jumlah Pengguna',
                    'permissions'     => 'Izin',
                    'role'            => 'Peran',
                    'sort'            => 'Sortir',
                    'total'           => 'total peran|total peran',
                ],
            ],

            'users' => [
                'active'              => 'Pengguna Aktif',
                'all_permissions'     => 'Semua Izin',
                'change_password'     => 'Ubah Sandi',
                'change_password_for' => 'Ubah Sandi untuk :user',
                'create'              => 'Buat Pengguna',
                'deactivated'         => 'Pengguna Dinonaktifkan',
                'deleted'             => 'Pengguna Dihapus',
                'edit'                => 'Edit Pengguna',
                'management'          => 'Manajemen Pengguna',
                'no_permissions'      => 'Tidak Ada Izin',
                'no_roles'            => 'Tidak Ada Peran untuk Ditetapkan.',
                'permissions'         => 'Izin',

                'table' => [
                    'confirmed'      => 'Dikonfirmasi',
                    'created'        => 'Dibuat',
                    'email'          => 'E-mail',
                    'id'             => 'ID',
                    'last_updated'   => 'Terakhir Diperbarui',
                    'name'           => 'Nama',
                    'no_deactivated' => 'Tidak Ada Pengguna Dinonaktifkan',
                    'no_deleted'     => 'Tidak Ada Pengguna Dihapus',
                    'roles'          => 'Peran',
                    'social' => 'Social',
                    'total'          => 'total pengguna|total pengguna',
                ],

                'tabs' => [
                    'titles' => [
                        'overview' => 'Ikhtisar',
                        'history'  => 'Riwayat',
                    ],

                    'content' => [
                        'overview' => [
                            'avatar'       => 'Avatar',
                            'confirmed'    => 'Dikonfirmasi',
                            'created_at'   => 'Dibuat Pada',
                            'deleted_at'   => 'Dihapus Pada',
                            'email'        => 'E-mail',
                            'last_updated' => 'Terakhir Diperbarui',
                            'name'         => 'Nama',
                            'status'       => 'Status',
                        ],
                    ],
                ],

                'view' => 'Lihat Pengguna',
            ],
        ],
        'product' => [
            'item' => [
                'management'    => 'Manajemen Barang',
                'create'        => 'Tambah Barang',
                'list'          => 'Daftar Barang',
                'table'         => [
                    'code'              => 'Kode',
                    'name'              => 'Nama Barang',
                    'price'             => 'Harga',
                    'purchase_price'    => 'Harga Beli',
                    'sale_price'        => 'Harga Jual',
                ],
            ],
            'category' => [
                'management'    => 'Manajemen Kategori',
                'create'        => 'Tambah Kategori',
                'list'          => 'Daftar Kategori',
                'table'         => [
                    'code'              => 'Kode',
                    'name'              => 'Nama Kategori',
                    'last_updated'      => 'Terakhir Diperbarui',
                ],
            ],
            'brand' => [
                'management'    => 'Manajemen Merek',
                'create'        => 'Tambah Merek',
                'list'          => 'Daftar Merek',
                'table'         => [
                    'code'              => 'Kode',
                    'name'              => 'Nama Merek',
                    'last_updated'      => 'Terakhir Diperbarui',
                ],
                
            ],
        ],
        'customer' => [
            'management'    => 'Manajemen Pelanggan',
            'create'        => 'Tambah Pelanggan',
            'list'          => 'Daftar Pelanggan',
            'table'         => [
                'code'              => 'Kode',
                'name'              => 'Nama Pelanggan',
                'email'             => 'Email',
                'last_updated'      => 'Terakhir Diperbarui',
            ],
        ],
        'transaction' => [
            'order' => [
                'management'    => 'Manajemen Pemesanan',
                'create'        => 'Tambah Pemesanan',
                'list'          => 'Daftar Pemesanan',
                'table'         => [
                    'code'              => 'Kode',
                    'customer_name'     => 'Nama Pelanggan',
                    'order_name'        => 'Nama Pemesan',
                    'price'             => 'Harga',
                    'order_date'        => 'Tanggal Pemesanan',
                ],
            ],
            'wallet' => [
                'management'    => 'Manajemen Tabungan',
                'create'        => 'Tambah Tabungan',
                'list'          => 'Daftar Tabungan',
                'table'         => [
                    'datetime'      => 'Tanggal Waktu',
                    'detail'        => 'Uraian',
                    'type'          => 'Jenis',
                    'nominal'       => 'Nominal',
                    'last_balance'  => 'Saldo Terakhir',
                ],
                
            ],
        ],
    ],

    'frontend' => [

        'auth' => [
            'login_box_title'    => 'Login',
            'login_button'       => 'Login',
            'login_with'         => 'Login dengan :social_media',
            'register_box_title' => 'Daftar',
            'register_button'    => 'Daftar',
            'remember_me'        => 'Ingat Saya',
        ],

        'contact' => [
            'box_title' => 'Contact Us',
            'button' => 'Send Information',
        ],

        'passwords' => [
            'forgot_password'                 => 'Lupa Sandi Anda?',
            'reset_password_box_title'        => 'Reset Sandi',
            'reset_password_button'           => 'Reset Sandi',
            'send_password_reset_link_button' => 'Kirim Tautan Reset Sandi',
        ],

        'user' => [
            'passwords' => [
                'change' => 'Ubah Sandi',
            ],

            'profile' => [
                'avatar'             => 'Avatar',
                'created_at'         => 'Dibuat Pada',
                'edit_information'   => 'Edit Informasi',
                'email'              => 'E-mail',
                'last_updated'       => 'Terakhir diperbarui',
                'name'               => 'Nama',
                'update_information' => 'Perbarui Informasi',
            ],
        ],

    ],
];
