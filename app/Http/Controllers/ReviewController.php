<?php

namespace App\Http\Controllers;

use App\Models\review;
use Illuminate\Http\Request;

class ReviewController extends Controller{

    public function index(){
        $review = review::all();
        return response()->json($review);
    }

    public function store(Request $request){
        $validatedData = $request->validate([
            'texto' => 'required|string',
            'rating' => 'required|integer',
            'nota' => 'required|double',
            'id_review' => 'required|integer',
            'usuario_login' => 'required|string',
            'obra_id' => 'required|integer',
            'admin_login' => 'required|string',
        ]);

        $review = review::create($validatedData);

        return response()->json($review, 201);
    }

    public function show(review $review){
        return response()->json($review);
    }

    public function update(Request $request, review $review){
        $validatedData = $request->validate([
            'texto' => 'required|string',
            'rating' => 'required|integer',
            'nota' => 'required|double',
            'id_review' => 'required|integer',
            'usuario_login' => 'required|string',
            'obra_id' => 'required|integer',
            'admin_login' => 'required|string',
        ]);

        $review->update($validatedData);
        return response()->json($review, 200);
    }

    public function destroy(review $review){
        $review->delete();

        return response()->json(null, 204);
    }
}