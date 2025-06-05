<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    // Nonaktifkan timestamps karena tabel user tidak punya created_at dan updated_at
    public $timestamps = false;

    /**
     * Kolom yang bisa diisi massal (mass assignable).
     */
    protected $fillable = [
        'username',
        'email',
        'password',
        'phone',
    ];

    /**
     * Kolom yang disembunyikan ketika model dikonversi ke array atau JSON.
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Konversi otomatis tipe data untuk kolom tertentu.
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed', // Laravel otomatis hash password
        ];
    }
}
