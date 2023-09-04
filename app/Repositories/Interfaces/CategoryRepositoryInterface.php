<?php
    namespace App\Repositories\Interfaces;
    Interface CategoryRepositoryInterface {
        public function all();
        public function store();
        public function update();
        public function delete();
        public function findById();

    }
?>