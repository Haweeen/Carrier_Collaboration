<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Carrier;

class CarrierController extends Controller
{
  public function index()
  {
    $carriers = Carrier::all();
    return view('carrier.index', compact('carriers'));
  }

  public function create()
  {
    return view('carrier.create');
  }

  public function store(Request $request)
  {
    $validatedData = $request->validate([
      'name' => 'required',
      'address' => 'required',
      'contact_number' => 'required',
      'email' => 'required|email',
      'website' => 'required|url',
      'type' => 'required',
      'status' => 'required',
    ]);

    Carrier::create($validatedData);

    return redirect()->route('carrier.index')->with('success', 'Carrier created successfully!');
  }

  public function edit($id)
  {
    $carrier = Carrier::findOrFail($id);
    return view('carrier.edit', compact('carrier'));
  }

  public function update(Request $request, $id)
  {
    $validatedData = $request->validate([
      'name' => 'required',
      'address' => 'required',
      'contact_number' => 'required',
      'email' => 'required|email',
      'website' => 'required|url',
      'type' => 'required',
      'status' => 'required',
    ]);

    $carrier = Carrier::findOrFail($id);
    $carrier->update($validatedData);

    return redirect()->route('carrier.index')->with('success', 'Carrier updated successfully!');
  }

  public function destroy($id)
  {
    $carrier = Carrier::findOrFail($id);
    $carrier->delete();

    return redirect()->route('carrier.index')->with('success', 'Carrier deleted successfully!');
  }

  public function register(Request $request)
  {
    $validatedData = $request->validate([
      'name' => 'required',
      'address' => 'required',
      'contact_number' => 'required',
      'email' => 'required|email',
      'website' => 'required|url',
      'type' => 'required',
      'status' => 'required',
    ]);

    $carrier = new Carrier;
    $carrier->name = $request->name;
    $carrier->address = $request->address;
    $carrier->contact_number = $request->contact_number;
    $carrier->email = $request->email;
    $carrier->website = $request->website;
    $carrier->type = $request->type;
    $carrier->status = $request->status;
    $carrier->save();

    return redirect()->route('carrier.index')->with('success', 'Registration successful!');
  }

  public function show($id)
  {
    $carrier = Carrier::findOrFail($id);
    return view('carrier.show', compact('carrier'));
  }
}
