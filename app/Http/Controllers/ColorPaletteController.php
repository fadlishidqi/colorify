<?php

namespace App\Http\Controllers;

use App\Models\Collection;
use App\Models\ColorPalette;
use Illuminate\Http\Request;

class ColorPaletteController extends Controller
{
    // Store a new color palette
    public function store(Request $request, Collection $collection)
    {
        try {
            // Validate the request
            $validated = $request->validate([
                'name' => 'required|string|max:255',
                'colors' => 'required|array|min:1'
            ]);

            // Create the palette
            $palette = $collection->colorPalettes()->create([
                'name' => $validated['name'],
                'colors' => $validated['colors'],
                'saved_on' => now()
            ]);

            return response()->json($palette, 201);
            
        } catch (\Exception $e) {
            \Log::error('Palette creation failed: ' . $e->getMessage());
            return response()->json(['error' => 'Failed to create palette'], 500);
        }
    }

    // Update an existing color palette
    public function update(Request $request, Collection $collection, ColorPalette $palette)
{
    // Check if the palette belongs to the given collection
    if ($palette->collection_id !== $collection->id || auth()->user()->id !== $collection->user_id) {
        return response()->json(['error' => 'Unauthorized'], 403);
    }

    // Continue with the update logic
    $validated = $request->validate([
        'name' => 'required|string|max:255',
        'colors' => 'required|array|min:1'
    ]);

    $palette->update([
        'name' => $validated['name'],
        'colors' => $validated['colors'],
    ]);

    return response()->json($palette, 200);
}

public function destroy(Collection $collection, ColorPalette $palette)
{
    // Check if the palette belongs to the given collection
    if ($palette->collection_id !== $collection->id || auth()->user()->id !== $collection->user_id) {
        return response()->json(['error' => 'Unauthorized'], 403);
    }

    // Delete the palette
    $palette->delete();

    return response()->json(['message' => 'Palette deleted successfully'], 200);
}

}
