<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AnimalCategory;
use App\Http\Requests\AnimalCategory\StoreAnimalCategoryRequest;
use App\Http\Requests\AnimalCategory\UpdateAnimalCategoryRequest;

class AnimalCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json([
            'message' => 'index',
            'data' => AnimalCategory::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreAnimalCategoryRequest $request)
    {
        $category = AnimalCategory::create($request->validated());

        return response()->json($category);
    }

    /**
     * Display the specified resource.
     */
    public function show(AnimalCategory $animal_category)
    {
        return response()->json($animal_category);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAnimalCategoryRequest $request, AnimalCategory $animal_category)
    {
        $category = $animal_category->update($request->validated());

        return response()->json($category);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(AnimalCategory $animal_category)
    {
        return response()->noContent();
    }
}
