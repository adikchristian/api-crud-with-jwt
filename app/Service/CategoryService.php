<?php

namespace App\Service;

interface CategoryService{
    public function createCategory($data);
    public function checkAvailableCategoryById($id);
    public function findCategoryById($id);
    public function findAllCategory();
    public function updateCategory($id, $data);
    public function deleteCategory($id);
}