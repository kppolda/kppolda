<?php

namespace App\Http\Controllers;

use App\Models\DataGiat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
// use App\Http\Requests\RegisterRequest;

class DataGiatCon extends Controller
{

  public function save(Request $request)
  {
    $imageName = time() . '.' . $request->image->extension();
    $validatedData = $request->validate([
      'nama' => 'required',
      'id_polres' => 'required',
      'tanggal' => 'required',
      'keterangan' => 'required|max:255',
      'image' => 'image|file|max:2048',
    ]);

    if ($request->file('image')) {
      $validatedData['image'] = $request->file('image')->store('images');
      // $request->image->move(public_path('images'), $imageName);
    }

    Datagiat::create($validatedData);

    return redirect('data-giat')->with('success', 'New post has been added!');
  }
  public function save_id(Request $request)
  {
    $imageName = time() . '.' . $request->image->extension();
    $validatedData = $request->validate([
      'nama' => 'required',
      'id_polres' => 'required',
      'tanggal' => 'required',
      'keterangan' => 'required|max:255',
      'image' => 'image|file|max:2048',
    ]);

    if ($request->file('image')) {
      $validatedData['image'] = $request->file('image')->store('images');
      // $request->image->move(public_path('images'), $imageName);
    }

    Datagiat::create($validatedData);

    return redirect('data-giat/id')->with('success', 'New post has been added!');
  }
  public function destroy_giat($id)
  {
      DB::table('datagiats')->where('id', $id)->delete();
      DB::table('datagiats')
      ->where('tanggal', 'like', Carbon::now()->format('Y-m').'%')
      ->get();
      return redirect()->back();
  }
}
