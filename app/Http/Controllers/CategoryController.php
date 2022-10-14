<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoryRequest;
use App\Service\CategoryService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class CategoryController extends Controller
{
    private $categoryService;

    public function __construct(CategoryService $categoryService)
    {
        $this->categoryService = $categoryService;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Response::json([
            'data' => $this->categoryService->findAllCategory(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CategoryRequest $request)
    {
        $data = $request->all();
        $exec = $this->categoryService->createCategory($data);
        if ($exec) {
            return Response::json(
                [
                    'code' => 200,
                    'message' => 'Success Input Data',
                    'data' => $data
                ]
            );
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Response::json([
            'data' => $this->categoryService->findCategoryById($id),
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CategoryRequest $request, $id)
    {
        $data = $request->all();
        $exec = $this->categoryService->updateCategory($id, $data);
        if ($exec) {
            return Response::json(
                [
                    'code' => 200,
                    'message' => 'Success Update Data',
                    'data' => $data
                ]
            );
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $exec = $this->categoryService->deleteCategory($id);
        if ($exec) {
            return Response::json(
                [
                    'code' => 200,
                    'message' => 'Success Delete Data',
                ]
            );
        }
    }
}
