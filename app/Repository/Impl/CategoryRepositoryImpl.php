<?php

namespace App\Repository\Impl;

use App\Models\Category;
use App\Repository\CategoryRepository;

class CategoryRepositoryimpl implements CategoryRepository{
    public function create($data)
    {
        return Category::create($data);
    }

    public function findById($id)
    {
        return Category::find($id);
    }

    public function findAll()
    {
        return Category::all();
    }

    public function update($id, $data)
    {
        return Category::find($id)->update($data);
    }

    public function delete($id)
    {
        return Category::find($id)->delete();
    }
}