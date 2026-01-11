<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AnimalsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return ["message" => 'index'];
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return ["message" => 'store'];
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return ["message" => 'show'];
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        return ["message" => 'update'];
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        return ["message" => 'destroy'];
    }
}
