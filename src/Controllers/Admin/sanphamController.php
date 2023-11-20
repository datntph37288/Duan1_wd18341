<?php

namespace Ductong\BaseMvc\Controllers\Admin;

use Ductong\BaseMvc\Controller;
use Ductong\BaseMvc\Models\San_pham;
use Ductong\BaseMvc\Models\Category;
class SanphamController extends Controller
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
                'mota' => $_POST['mota'],
                'iddm' => $_POST['iddm'],
            ];
            $filename = $_FILES["img"]['name'];
            $taget_dir = "../update/";
            $taget_file = $taget_dir . basename($_FILES["img"]['name']);
            if(move_uploaded_file($_FILES["img"]['tmp_name'], $taget_file)){

            }else{
                
            }

            (new san_pham)->insert($data);

            header('Location: /admin/sanpham');
        }
        $categories = (new Category())->all();
        $this->render('admin/sanpham/create',  ["categories" => $categories] );
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
