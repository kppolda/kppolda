<?php

namespace App\Http\Controllers;

use App\Models\Giat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
// use App\Http\Requests\RegisterRequest;

class DataGiatCon extends Controller
{

  public function imageUploadPost(Request $request)
  {
    $request->validate([
      'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    ]);

    $imageName = time() . '.' . $request->image->extension();

    $request->image->move(public_path('images'), $imageName);

    /* Store $imageName name in DATABASE from HERE */

    return back()
      ->with('success', 'You have successfully upload image.')
      ->with('image', $imageName);
  }
}
