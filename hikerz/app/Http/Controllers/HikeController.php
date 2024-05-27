<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hike;

class HikeController extends Controller
{
    public function addHike(Request $request)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'name' => 'required',
            'distance' => 'required|numeric',
            'duration' => 'required',
            'elevation_gain' => 'required|numeric',
            'description' => 'required',
        ]);

        // Create a new Hike instance and set its properties
        $hike = new Hike;
        $hike->name = $validatedData['name'];
        $hike->distance = $validatedData['distance'];
        $hike->duration = $validatedData['duration'];
        $hike->elevation_gain = $validatedData['elevation_gain'];
        $hike->description = $validatedData['description'];

        // Save the Hike instance to the database
        $hike->save();

        // Redirect the user back to the form
        return redirect('/hikes')->with('success', 'Hike added successfully');
    }

    public function showHikes()
    {
        // Fetch all hikes from the database
        $hikes = Hike::all();

        // Return the hikes to the view
        return view('hikes', ['hikes' => $hikes]);
    }
}
