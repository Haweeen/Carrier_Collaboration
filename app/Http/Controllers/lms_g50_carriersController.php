<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\Storelms_g50_carriersRequest;
use App\Http\Requests\Updatelms_g50_carriersRequest;
use App\Models\lms_g50_carriers;

class lms_g50_carriersController extends Controller
{
  /**
   * Display a listing of the resource.
   */
  public function index(): View
  {
    return view('carriers.index', [
      'carriers' => lms_g50_carriers::latest()->paginate(3)
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
  public function store(Storelms_g50_carriersRequest $request): RedirectResponse
  {
    $data = $request->all();
    $data['user_id'] = auth()->id();

    // Step 3: Save Images in Storage
    if ($request->hasFile('image')) {
      $imagePath = $request->file('image')->store('images', 'public');
      $data['image'] = $imagePath;
    }

    lms_g50_carriers::create($data);

    return redirect()->route('carriers.index')
      ->withSuccess('New carrier is added successfully.');
  }

  /**
   * Display the specified resource.
   */
  public function show(lms_g50_carriers $carrier): View
  {
    return view('carriers.show', [
      'carrier' => $carrier
    ]);
  }

  /**
   * Show the form for editing the specified resource.
   */
  public function edit(lms_g50_carriers $carrier): View
  {
    if (auth()->id() !== $carrier->user_id) {
      abort(403);
    }

    return view('carriers.edit', [
      'carrier' => $carrier
    ]);
  }

  /**
   * Update the specified resource in storage.
   */
  public function update(Updatelms_g50_carriersRequest $request, lms_g50_carriers $carrier): RedirectResponse
  {
    if (auth()->id() !== $carrier->user_id) {
      abort(403);
    }

    $data = $request->all();

    // Step 3: Save Images in Storage
    if ($request->hasFile('image')) {
      $imagePath = $request->file('image')->store('images', 'public');
      $data['image'] = $imagePath;
    }

    $carrier->update($data);

    return redirect()->back()
      ->withSuccess('Carrier is updated successfully.');
  }

  /**
   * Remove the specified resource from storage.
   */
  public function destroy(lms_g50_carriers $carrier): RedirectResponse
  {
    if (auth()->id() !== $carrier->user_id) {
      abort(403);
    }

    $carrier->delete();

    return redirect()->route('carriers.index')
      ->withSuccess('Carrier is deleted successfully.');
  }
}
