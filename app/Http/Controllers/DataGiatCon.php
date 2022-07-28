<?php

namespace App\Http\Controllers;

use App\Models\Giat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
// use App\Http\Requests\RegisterRequest;

class DataGiatCon extends Controller
{

  public function save(Request $request)
  {
    $this->validate($request, [
      'file' => 'required|image|mimes:jpeg,png,jpg,bmp,gif,svg|max:2048',
    ]);
    if ($request->hasFile('file')) {
      $image = $request->file('file');
      $name = time() . '.' . $image->getClientOriginalExtension();
      $destinationPath = public_path('/images');
      $image->move($destinationPath, $name);
      $this->save();

      $user = Giat::create($request->all());

      return redirect('/data-giat')->with('success', 'Image Upload successfully');
    }
  }
}
