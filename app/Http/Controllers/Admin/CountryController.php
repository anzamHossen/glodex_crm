<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Handler\ImageHandlerController;
use App\Models\Admin\Country;
use App\Models\Admin\CountryContinent;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class CountryController extends Controller
{
    protected $imageHandler;

    // Functio to call image handler
    public function __construct(ImageHandlerController $imageHandler)
    {
        $this->imageHandler = $imageHandler;
    }
    
    // function to show country list
    public function countryList()
    {
        $countries= Country::all();
        return view('admin.country.country-list', compact('countries'));
    }

    // function to add country
    public function addCountry()
    {
        $countryContinents = CountryContinent::all();
        return view('admin.country.add-new-country', compact('countryContinents'));
    }

    // function to save country
    public function saveCountry(Request $request)
    {
       
        $request->validate([
            'country_name' => 'required|string|max:50',
            'country_name' => 'required|string|max:50',
            'description'  => 'required',
            'flag'         => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'cover_photo'  => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'description'  => 'nullable',
            ], [
               'country_continent_id.required' => 'The country continent field is required.',
        ]);

        DB::beginTransaction();
        try {
        $country = new Country();
        $country->country_name = $request->country_name;
        $country->continent_id = $request->continent_id;
        $country->description  = $request->description;

        if ($request->hasFile('flag')) {
        $file = $request->file('flag');
        $filePath = $this->imageHandler->countryFlag($file);
        $country->flag = $filePath;
      }

      if ($request->hasFile('cover_photo')) {
          $file = $request->file('cover_photo');
          $filePath = $this->imageHandler->countryCoverPhoto($file);
          $country->cover_photo = $filePath;
        }

      $country->save();
      DB::commit();
      Alert::success('Success', 'Country added successfuly');
      return redirect()->route('country_list');
    }catch (\Exception $e) {
            DB::rollback();
            Alert::error('Error', 'Failed to save country. Please try again.');
            return redirect()->back();
        }
    }

    // function to edit country
    public function editCountry($id)
    {
        $countryContinents = CountryContinent::all();
        $country = Country::findOrFail($id);
        return view('admin.country.edit-country', compact('countryContinents','country'));
    }


     // function to save country
    public function updateCountry(Request $request, $id)
    {
       
        $request->validate([
            'country_name' => 'required|string|max:50',
            'continent_id' => 'required|integer',
            'flag' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'cover_photo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'description' => 'nullable|string',
            ], [
               'country_continent_id.required' => 'The country continent field is required.',
        ]);

        DB::beginTransaction();
        try {
        $updateCountry               = Country::findOrFail($id);
        $updateCountry->country_name = $request->country_name;
        $updateCountry->continent_id = $request->continent_id;
        $updateCountry->description  = $request->description;

        if ($request->hasFile('flag')) {
        $file = $request->file('flag');
        $filePath = $this->imageHandler->countryFlag($file);
        $updateCountry->flag = $filePath;
      }

      if ($request->hasFile('cover_photo')) {
          $file = $request->file('cover_photo');
          $filePath = $this->imageHandler->countryCoverPhoto($file);
          $updateCountry->cover_photo = $filePath;
        }

      $updateCountry->save();
      DB::commit();
      Alert::success('Succes', 'Country update successfuly');
      return redirect()->route('country_list');
    }catch (\Exception $e) {
            DB::rollback();
            Alert::error('Error', 'Failed to update country. Please try again.');
            return redirect()->back();
        }
    }

    // function to delete country
    public function deleteCountry($id)
    {
        try {
            $country = Country::findOrFail($id);
            $country->delete();
            Alert::success('Success', 'Country deleted successfully');
            return redirect()->back();
        } catch (\Exception $e) {
            Alert::error('Error', 'Failed to delete country');
            return redirect()->back();
        }
    }
}
