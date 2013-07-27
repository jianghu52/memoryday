<?php
// app/Controller/UsersController.php
class TestController extends AppController {

    var $name = 'test';
    var $uses = Array('');

    public function index() {
        //echo "string";exit;
        $this->set('kkkkk', '日本語テスト');
    }

        
}
