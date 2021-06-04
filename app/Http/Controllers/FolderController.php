<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Folder;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\CreateFolder;

class FolderController extends Controller
{
  public function showCreateForm()
{
  return view('folders/create');
}

public function create(CreateFolder $request, Folder $folder)
{
  $folder->title = $request->title;

  Auth::user()->folders()->save($folder);

  return redirect()->route('tasks.index', [
    'id' => $folder->id,
  ]);
}

}
