<?php

namespace App\Http\Controllers;

use App\Models\Struktur;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StrukturCon extends Controller
{

    public function save(Request $request)
    {
      $imageName = time() . '.' . $request->image->extension();
      $validatedData = $request->validate([
        'id_polres' => 'required',
        'image' => 'image|file|max:2048',
      ]);

      if ($request->file('image')) {
        $validatedData['image'] = $request->file('image')->store('images');
        // $request->image->move(public_path('images'), $imageName);
      }

      Struktur::create($validatedData);

      return redirect('data-personil')->with('success', 'New post has been added!');
    }
    public function save_id(Request $request)
    {
      $imageName = time() . '.' . $request->image->extension();
      $validatedData = $request->validate([
        'id_polres' => 'required',
        'image' => 'image|file|max:2048',
      ]);

      if ($request->file('image')) {
        $validatedData['image'] = $request->file('image')->store('images');
        // $request->image->move(public_path('images'), $imageName);
      }

      Struktur::create($validatedData);

      return redirect('data-personil/id')->with('success', 'New post has been added!');
    }
    public function destroy_struktur($id)
    {
        DB::table('strukturs')->where('id', $id)->delete();
        DB::table('strukturs')->get();
        return redirect()->back();
    }
}
