<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use App\Http\Requests\Customer\CustomerStore;
use App\Http\Requests\Customer\CustomerUpdate;
use App\Models\Customer;
use Illuminate\Http\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

class CustomerController extends Controller
{
    public function getAll(): JsonResponse
    {
        $customers = Customer::paginate();

        return response()->json([
            'data'  => $customers,
        ], Response::HTTP_OK);
    }
    public function store(CustomerStore $request): JsonResponse
    {
        $customer = Customer::create($request->validated());

        return response()->json([
            'message' => 'The customer has been saved successfully',
            'customer'  => $customer,
        ], Response::HTTP_CREATED);
    }

    public function update(CustomerUpdate $request, Customer $customer): JsonResponse
    {
        $customer->update($request->validated());

        return response()->json([
            'message' => 'The customer has been updated successfully',
            'customer'  => $customer,
        ], Response::HTTP_CREATED);
    }

    public function destroy(Customer $customer): JsonResponse
    {
        $customer->delete();

        return response()->json([
            'message' => 'The customer has been deleted successfully'
        ], Response::HTTP_NO_CONTENT);
    }
}
