<?php

namespace Ductong\BaseMvc\Controllers\Admin;

use Ductong\BaseMvc\Controller;
use Ductong\BaseMvc\Models\san_pham;

class sanphamController extends Controller
{
    /*
        Đây là hàm hiển thị danh sách user
    */
    public function index() {
        $sanpham = (new san_pham)->all();
        
        $this->render('admin/sanpham/index', ['sanpham' => $sanpham]);
    }

    public function create() {
        if (isset($_POST['btn-submit'])) { 
            $data = [
                'name' => $_POST['name'],
                'price' => $_POST['price'],
                'img' => $_FILES['img'],
                'mota' => $_POST['mota'],
            ];
            

            (new san_pham)->insert($data);

            header('Location: /admin/sanpham');
        }

        $this->render('admin/sanpham/create');
    }

    public function update() {
        if (isset($_POST['btn-submit'])) { 
            $data = [
                'name' => $_POST['name'],
                'price' => $_POST['price'],
                'img' => $_FILES['img'],
                'mota' => $_POST['mota'],
            ];

            $conditions = [
                ['id', '=', $_GET['id']]
            ];

            (new san_pham)->update($data, $conditions);
        }

        $san_pham = (new san_pham)->findOne($_GET['id']);

        $this->render('admin/sanpham/index', ['san_pham' => $san_pham]);
    }

    public function delete() {
        $conditions = [
            ['id', '=', $_GET['id']]
        ];

        (new san_pham)->delete($conditions);

        header('Location: /admin/sanpham');
    }
}