<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\CarDrivingService;

class ReviewController extends Controller
{
    protected $carDrivingService;

    public function __construct(CarDrivingService $carDrivingService)
    {
        $this->carDrivingService = $carDrivingService;
    }

    public function getReview($capId)
    {
        try {
            $response = $this->carDrivingService->getReview($capId);
            return response()->json($response);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Unable to fetch review data', 'message' => $e->getMessage()], 500);
        }
    }

    /**
     * Example:  /view/91480
     */
    public function viewReview($capId)
    {
        return view('car.view', compact('capId'));
    }
}
