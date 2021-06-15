<div class="collapse" id="collapseExample">
  <div class="row justify-content-center">
      <div class="col-md-8 ">
          @foreach ($article->comments as $comment)
          <div class="card mt-3 p-2">
              <div class="card-body　d-flex flex-row">
                <div>
                  <a href="{{ route('users.show', ['name' => $article->user->name]) }}" class="text-dark">
                 <i class="fas fa-user-astronaut fa-3x mr-1"></i>
               </a>
                </div>
                <div>
                 <a href="{{ route('users.show', ['name' => $article->user->name]) }}" class="text-dark">
                  {{ $article->user->name }}
                 </a>
                <div class="font-weight-lighter">{{ $comment->created_at }}</div>
              </div>
                </div>
                  <p class="card-text">{{ $comment->comment }}</p>
                  </div>
          @endforeach
              </div>
  </div>

  <div class="row justify-content-center">
          <div class="col-md-8 mt-5">
              <form action="{{ route('users.comment.store') }}" method="POST">
              @csrf
                  <input type="hidden" name="article_id" value="{{ $article->id }}">
                  <div class="form-group">
                      <textarea class="form-control" placeholder="コメント入力" rows="5" name="comment"></textarea>
                  </div>
                  <div class="center">
                      <button type="submit" class="btn btn-primary">コメントする</button>
                  </div>
              </form>
          </div>
      </div>
</div>
