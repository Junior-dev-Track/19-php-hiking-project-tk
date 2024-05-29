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

    public function showHikes($selectedHikeId = null)
    {
        // Fetch all hikes from the database
        $hikes = Hike::all();

        //Fetch the selected hike if an ID is provided

        $selectedHike = $selectedHikeId ? Hike::where('hike_id', $selectedHikeId) ->first() : null;

        // Return the hikes and the selected hike (if any) to the view
        return view('hikes', ['hikes' => $hikes, 'selectedHike' => $selectedHike]);
    }

    public function destroy($hike_id)
{
    $hike = Hike::findOrFail($hike_id);
    $hike->delete();

    return redirect('/hikes');
}

public function show($id)
{
    $hike = Hike::findOrFail($id);

    return view('hike', ['hike' => $hike]);
}

public function addHikeForm()
{
    return view('addHike');


}
}


