<?php

namespace App\Models;


use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;



class MUsuario extends Model implements Authenticatable
{
    use HasFactory;

    protected $table = 'usuario';
    protected $primaryKey = 'idUsuario';
    public $timestamps = false;

    protected $fillable = [
        'idGoogle',
        'usuName',
        'usuEmail',
        'usuAvatar',
        'usuAuth',
    ];

    // Métodos de la interfaz Authenticatable

    public function getAuthIdentifierName()
    {
        return 'idUsuario';
    }

    public function getAuthIdentifier()
    {
        return $this->{$this->getAuthIdentifierName()};
    }

    public function getAuthPassword()
    {
        return null;
    }

    public function getRememberToken()
    {
        return null;
    }

    public function setRememberToken($value)
    {
    }

    public function getRememberTokenName()
    {
        return null;
    }
}
