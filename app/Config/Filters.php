<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;
use CodeIgniter\Filters\CSRF;
use CodeIgniter\Filters\DebugToolbar;
use CodeIgniter\Filters\Honeypot;
use CodeIgniter\Filters\InvalidChars;
use CodeIgniter\Filters\SecureHeaders;

class Filters extends BaseConfig
{
    /**
     * Configures aliases for Filter classes to
     * make reading things nicer and simpler.
     *
     * @var array
     */
    public $aliases = [
        'csrf' => \CodeIgniter\Filters\CSRF::class,
        'toolbar' => \CodeIgniter\Filters\DebugToolbar::class,
        'honeypot' => \CodeIgniter\Filters\Honeypot::class,
        // 'invalidchars'  => InvalidChars::class,
        //'secureheaders' => SecureHeaders::class,
        'Filter_auth' => \App\Filters\Filter_auth::class,
        'Filter_penduduk' => \App\Filters\Filter_penduduk::class,
    ];

    /**
     * List of filter aliases that are always
     * applied before and after every request.
     *
     * @var array
     */
    public $globals = [
        'before' => [
            'Filter_auth' => ['except' => ['auth', 'auth/*', '/']],
            'Filter_penduduk' => ['except' => ['auth', 'auth/*', '/']],
            // 'honeypot',
            // 'csrf',
            // 'invalidchars',
        ],
        'after' => [
            'Filter_auth' => [
                'except' => [
                    'home', 'home/*',
                    'jabatan', 'jabatan/*',
                    'penduduk', 'penduduk/*',
                    'kelahiran', 'kelahiran/*',
                    'kematian', 'kematian/*',
                    'pengguna', 'pengguna/*',
                    'Keluarga', 'Keluarga/*',
                    'Pekerjaan', 'Pekerjaan/*',
                    'Pendidikan', 'Pendidikan/*',
                    'Pindah', 'Pindah/*',
                    'Penghasilan', 'Penghasilan/*',
                    'Bantuan', 'Bantuan/*',
                    'Kawil', 'Kawil/*',
                    'History', 'History/*',
                ],
            ],
            'Filter_penduduk' => [
                'except' => [
                    'HomePenduduk', 'HomePenduduk/*',
                ],
            ],
            'toolbar',
            // 'honeypot',
            // 'secureheaders',
        ],
    ];

    /**
     * List of filter aliases that works on a
     * particular HTTP method (GET, POST, etc.).
     *
     * Example:
     * 'post' => ['foo', 'bar']
     *
     * If you use this, you should disable auto-routing because auto-routing
     * permits any HTTP method to access a controller. Accessing the controller
     * with a method you don’t expect could bypass the filter.
     *
     * @var array
     */
    public $methods = [];

    /**
     * List of filter aliases that should run on any
     * before or after URI patterns.
     *
     * Example:
     * 'isLoggedIn' => ['before' => ['account/*', 'profiles/*']]
     *
     * @var array
     */
    public $filters = [];
}
