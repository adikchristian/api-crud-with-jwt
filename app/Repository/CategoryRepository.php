<?php

namespace App\Repository;

interface CategoryRepository{
    public function create($data);
    public function findById($id);
    public function findAll();
    public function update($id, $data);
    public function delete($id);
}