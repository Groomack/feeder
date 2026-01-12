<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Resources\AnimalResource;
use App\Models\Animal;
use App\Http\Requests\Animal\StoreAnimalRequest;
use App\Http\Requests\Animal\UpdateAnimalRequest;

class AnimalsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return AnimalResource::collection(Animal::with(['user', 'category'])->get());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreAnimalRequest $request)
    {
        $data = $request->validated();

        $data['user_id'] = 2;

        $animal = Animal::create($data);

        return new AnimalResource($animal);
    }

    /**
     * Display the specified resource.
     */
    public function show(Animal $animal)
    {
        return new AnimalResource($animal);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAnimalRequest $request, Animal $animal)
    {
        $data = $request->validated();
        
        $animal->update($data);

        return new AnimalResource($animal);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Animal $animal)
    {
        $animal->delete();

        return response()->noContent();
    }
}
