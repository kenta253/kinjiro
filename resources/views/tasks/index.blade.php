@extends('app')

@section('title', '記事更新')

  @include('nav')

@section('content')


  <div class="container-fluid">
    <div class="row mt-5">
      <div class="mx-auto">
         <timer></timer>
      </div>
    </div>
  <div class="row mt-5 ml-5">
    <div class="col-5 ml-5">
      <div class="card">
        <div class="card-header center">フォルダ</div>
        <div class="list-group">
          @foreach($folders as $folder)
            <a href= "{{ route('tasks.index', ['id' => $folder->id]) }}"
              class= "center list-group-item {{ $current_folder_id === $folder->id ? 'active' : '' }}"
               >
               {{ $folder->title}}
            </a>
          @endforeach
        </div>
        <div class="card-body">
          <a href="{{ route('folders.create') }}" class="btn btn-default btn-block" >
            フォルダを追加する
          </a>
        </div>
      </div>
    </div>

    <div class="col-5 task-right">
      <div class="card">
      <div class="card-header center">タスク</div>
      <table class="table">
        <thead>
        <tr class="center">
          <th>タイトル</th>
          <th>状態</th>
          <th>期限</th>
          <th></th>
        </tr>
        </thead>
        <tbody>
          @foreach($tasks as $task)
            <tr  class="center">
              <td>{{ $task->title }}</td>
              <td>
                <span class="label {{ $task->status_class }}">{{ $task->status_label }}</span>
              </td>
            <td>{{ $task->formatted_due_date }}</td>
              <td><a href="{{ route('tasks.edit', ['id' => $task->folder_id, 'task_id' => $task->id]) }}"
                     class="text-primary"
                >編集</a></td>
            </tr>
          @endforeach
        </tbody>
      </table>
      <div class="card-body">
          <a href="{{ route('tasks.create', ['id' => $current_folder_id]) }}" class="btn btn-default btn-block">
            タスクを追加する
          </a>
      </div>
    </div>
  </div>
  </div>
  <div class="row tasks-tips">
    <div class="col-4">
          <tips></tips>
    </div>
  </div>
</div>


@endsection
