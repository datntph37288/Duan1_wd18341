<?php

namespace Ductong\BaseMvc\Models;

use Ductong\BaseMvc\Model;
include "Category.php";

class san_pham extends Model {
    protected $table = 'sanpham';
    protected $columns = [
        'name',
        'price',
        'img',
        'mota',
        'iddm',
    ];
}