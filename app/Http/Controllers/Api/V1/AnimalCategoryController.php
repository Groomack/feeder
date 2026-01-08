<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AnimalCategory;
use App\Http\Requests\AnimalCategory\StoreAnimalCategoryRequest;
use App\Http\Requests\AnimalCategory\UpdateAnimalCategoryRequest;
use App\Http\Resources\AnimalCategoryResource;

class AnimalCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return AnimalCategoryResource::collection(AnimalCategory::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreAnimalCategoryRequest $request)
    {
        $data = $request->validated();
        $category = AnimalCategory::create($data);

        return new AnimalCategoryResource($category);
    }

    /**
     * Display the specified resource.
     */
    public function show(AnimalCategory $animal_category)
    {
        return new AnimalCategoryResource($animal_category);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAnimalCategoryRequest $request, AnimalCategory $animal_category)
    {
        $data = $request->validated();
        $animal_category->update($data);

        return new AnimalCategoryResource($animal_category);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(AnimalCategory $animal_category)
    {
        $animal_category->delete();

        return response()->noContent();
    }
}
