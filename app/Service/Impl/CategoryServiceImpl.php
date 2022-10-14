<?php

namespace App\Service\Impl;

use App\Repository\CategoryRepository;
use App\Repository\CatgeoryRepository;
use App\Service\CategoryService;

class CategoryServiceImpl implements CategoryService{

    private $categoryRepo;

    public function __construct(CategoryRepository $categoryRepository)
    {
        $this->categoryRepo=$categoryRepository;
    }

    public function createCategory($data)
    {
       return $this->categoryRepo->create($data);
    }

    public function checkAvailableCategoryById($id)
    {
        $sql = $this->categoryRepo->findById($id);
        if(!empty($sql)){
            return true;
        }else{
            return false;
        }
    }

    public function findCategoryById($id)
    {
        if($this->checkAvailableCategoryById($id)){
            return $this->categoryRepo->findById($id);
        }

        return null;
    }

    public function findAllCategory()
    {
        return $this->categoryRepo->findAll();
    }

    public function updateCategory($id, $data)
    {
        if($this->checkAvailableCategoryById($id)){
            return $this->categoryRepo->update($id, $data);
        }

        return false;
    }

    public function deleteCategory($id)
    {
        if($this->checkAvailableCategoryById($id)){
            return $this->categoryRepo->delete($id);
        }

        return false;
    }
}