<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Repositories\Interfaces\CategoryRepositoryInterface;
class CategoryController extends Controller
{
    private $categoryRepository;
    public function __construct(CategoryRepositoryInterface $categoryRepository){
        $this->categoryRepository = $categoryRepository;
    }
    public function index(){
        $categories = $this->categoryRepository->all();
        return view('admin.categories.list', compact('categories'));
    }
}
