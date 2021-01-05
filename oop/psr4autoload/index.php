<?php

require_once "vendor/autoload.php";

use app\admin\class_admin;
use app\auth\class_auth;
use app\class_public as ppc ;

class index{
    public function __construct(){
        $admin = new class_admin();

        $auth = new class_auth("maungmaung","123456");
        $auth->accessinfo();

        $public = new ppc();
        $public->myfun();
        $public->mydate();

    }
}

$obj = new index();

?>