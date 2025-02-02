<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Http\Requests\CarRequest;
use Illuminate\Http\RedirectResponse;
use App\Http\Controllers\Controller;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cars = Car::all();
        return view('car_list', [
            'cars' => $cars
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('car_add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CarRequest $request): RedirectResponse
    {
        Car::create([
            'brand'=> $request-> brand,
            'model'=> $request-> model,
            'price'=> $request-> price
        ]);
        return redirect('car/list');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        return Car::findOfFaill($id);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CarRequest $request, Car $cars)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CarRequest $request, Car $cars)
    {
        $cars-> fill($request-> validate());
        return $cars->save();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Car $cars)
    {
        {
            if ($cars-> delete()) {
                return response(null, 404);
            }
            return null;
        }
    }
}
