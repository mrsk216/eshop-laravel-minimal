<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Database\Factories\UserFactory;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Attributes\Hidden;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;

#[Fillable(['name', 'email', 'password', 'phone', 'address', 'avatar', 'role'])]
#[Hidden(['password', 'remember_token'])]
class User extends Authenticatable
{
    /** @use HasFactory<UserFactory> */
    use HasFactory, Notifiable, HasRoles;

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function getAvatarUrlAttribute(){
        return $this->avatar ? asset('storage/' . $this->avatar) : 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSDxGmmisR1kt3JRsywNpSogxI52Oh7SXl8pg0GxOqVAcOY7mf8RcTr12sS&s=10';
    }

    public function getIsAdminAttribute()
    {
        return $this->role === 'admin';
    }

    public function getIsManagerAttribute()
    {
        return $this->role === 'manager';
    }
}
