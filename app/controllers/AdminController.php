<?php
class AdminController extends Controller {
    public function AdminDashboard() {
        $adminModel = $this->loadModel("AdminModel");
        $this->renderView('admin/adminDashboard', ["admin" => $adminModel]);
    }
}
?>
