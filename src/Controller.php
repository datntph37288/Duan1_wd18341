<?php

namespace Ductong\BaseMvc;

class Controller {
    // render ra giao dieen ng dung
    protected function render($view, $data = []) {
        extract($data);

        include "Views/$view.php";
    }
    protected function renderAdmin($view, $data = []) {
        $data["view"] = $view;
        extract($data);

        include "Views/admin/master.php";
    }
}