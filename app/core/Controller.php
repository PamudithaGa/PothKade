<?php
class Controller {
    
        public function loadModel($model) {
            require_once '../app/models/' . $model . '.php';
            $db = new Database();
            return new $model($db); 
        }
    
        public function renderView($viewPath, $data = []) {
            if (is_array($data))
            {
                extract($data);
            }
            require_once "../app/views/layout.php";
        }
    }
?>



