<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Folder;
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

  $folder->save();

  return redirect()->route('tasks.index', [
    'id' => $folder->id,
  ]);
}

}
