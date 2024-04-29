<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreServicesRequest;
use App\Http\Requests\UpdateServicesRequest;
use App\Http\Resources\ServicesResource;
use App\Models\Services;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function index() {
        $services = Services::all();
        return ServicesResource::collection($services);
    }

    public function store(StoreServicesRequest $request) {
        try {
            Services::create($request->all());
            return response()->json(['message' => 'Created SuccessFully']);
        } catch (\Exception $e) {
            return response()->json(['message' => 'error', $e->getMessage()],500);
        }
    }

    //// Update Status
    public function update(UpdateServicesRequest $request, $serviceId) {
        try {
            $service = Services::find($serviceId);

            $service->update(['status' => $request->status]);

            return response()->json(['message' => 'Updated Successfully']);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Error'], 500);
        }
    }

}
