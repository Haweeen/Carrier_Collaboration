<?php

namespace App\Http\Controllers;

use App\Models\Carrier;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\StoreCarrierRequest;
use App\Http\Requests\UpdateCarrierRequest;

class CarrierController extends Controller
{
  /**
   * Display a listing of the resource.
   */
  public function index(): View
  {
    return view('carriers.index', [
      'carriers' => Carrier::latest()->paginate(3)
    ]);
  }

  /**
   * Show the form for creating a new resource.
   */
  public function create(): View
  {
    return view('carriers.create');
  }

  /**
   * Store a newly created resource in storage.
   */
  public function store(StoreCarrierRequest $request): RedirectResponse
  {
    Carrier::create($request->all());
    return redirect()->route('carriers.index')
      ->withSuccess('New carrier is added successfully.');
  }

  /**
   * Display the specified resource.
   */
  public function show(Carrier $carrier): View
  {
    return view('carriers.show', [
      'carrier' => $carrier
    ]);
  }

  /**
   * Show the form for editing the specified resource.
   */
  public function edit(Carrier $carrier): View
  {
    return view('carriers.edit', [
      'carrier' => $carrier
    ]);
  }

  /**
   * Update the specified resource in storage.
   */
  public function update(UpdateCarrierRequest $request, Carrier $carrier): RedirectResponse
  {
    $carrier->update($request->all());
    return redirect()->back()
      ->withSuccess('Carrier is updated successfully.');
  }

  /**
   * Remove the specified resource from storage.
   */
  public function destroy(Carrier $carrier): RedirectResponse
  {
    $carrier->delete();
    return redirect()->route('carriers.index')
      ->withSuccess('Carrier is deleted successfully.');
  }
}
