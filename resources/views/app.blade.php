<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>
    @yield('title')
  </title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
  <!-- Bootstrap core CSS -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.11/css/mdb.min.css" rel="stylesheet">
<!-- css -->
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">

  <!-- デフォルトのスタイルシート -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
  <!-- ブルーテーマの追加スタイルシート -->
  <link rel="stylesheet" href="https://npmcdn.com/flatpickr/dist/themes/material_blue.css">

    @yield('styles')


</head>

<body>
  <div id="app">
  @yield('content')
  </div>

  <script src="{{ mix('js/app.js') }}"></script>
  <!-- JQuery -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.11/js/mdb.min.js"></script>
  <!-- infinite scroll-->
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery-infinitescroll/2.1.0/jquery.infinitescroll.min.js"></script>

  @yield('scripts')




  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

  <script>
$(function(){
	$('#content').infinitescroll({
		navSelector  : ".navigation",
		nextSelector : ".navigation a",
		itemSelector : ".article"
	});
});

  export default {
  name: 'todo',
  data() {
    return {
    newItem: '',
    todos: [],
    text: "", // 編集覧の値

    editIndex: -1, // 現在編集している要素のインデックス
               // 編集状態でない場合は-1を設定

               items: [

               ]
    }
  },
  computed: {
    changeButtonText() {
        return this.editIndex === -1 ? "追加" : "編集";
    }
},
  methods: {
  //追加
  addItem: function(){
     // 配列の末尾に値を追加
      this.todos.push(this.newItem);
      this.newItem = '';
  },
  // 削除
  deleteItem: function(todo) {
      // todos配列の todo から key を取得
      var index = this.todos.indexOf(todo);
      // key番目から１つ削除
      this.todos.splice(index, 1);
  },

    // 送信ボタンをクリックしたら以下を実行
    setItems() {
        if(this.editIndex === -1) {
            // 配列に要素を追加
            this.items.push(this.text);
        } else {
            // 編集（指定位置から指定した要素数を削除し新しい要素に入れ替え）
            this.items.splice(this.editIndex, 1, this.text);
        }
        this.cancel();
    },

    // クリア
    cancel() {
        this.text = ""; //編集覧の状態をクリア
        this.editIndex = -1;
    },

    // 編集（指定した要素を編集状態に設定）
    edit(index) {
        this.editIndex = index;
        this.text = this.items[index];
        this.$refs.editor.focus(); // フォーカスを設定
    },

    // 削除
    remove(index) {
        this.items.splice(index, 1);
    }
    }
}
</script>


</body>

</html>
