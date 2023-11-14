<?php

namespace Ductong\BaseMvc\Models;

use Ductong\BaseMvc\Model;

class User extends Model {
    protected $table = 'taikhoan';
    protected $columns = [
        'name',
        'email',
        'address',
        'password',
    ];
}