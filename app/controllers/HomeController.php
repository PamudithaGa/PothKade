<?php
class HomeController extends Controller {
    public function index() {
        $homeModel = $this->loadModel("HomeModel");
        $this->renderView('user/home', ["home" => $homeModel]);
    }
}
?>
