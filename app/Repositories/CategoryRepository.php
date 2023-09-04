<?php
    namespace App\Repositories;
    use App\Repositories\Interfaces\CategoryRepositoryInterface;
    use App\Models\Category;
    class CategoryRepository implements CategoryRepositoryInterface{
        public function all(){
            return $data = Category::latest()->paginate(50);
        }
        public function store(){
            return 'Store';
        }
        public function update(){
            return 'Update';
        }
        public function delete(){
            return 'Delete';
        }
        public function findById(){
            return 'Find By Id';
        }
    }
?>