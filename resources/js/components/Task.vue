<template>
<div class="todo">

<form v-on:submit.prevent="addItem">
        <div class="input-group">
            <input type="text" v-model="text" v-on:keyup.enter="changeItems" ref="editor" class="form-control mt-3">
            <div class="input-group-append mt-1">
              <button v-on:click="setItems" class="btn btn-primary" type="submit">@{{changeButtonText}}</button>
            </div>
</div>
</form>

<!--ループ処理-->
<ul class="list-group">
    <li class="list-group-item" v-for="(item, index) in items" v-bind:key="index">
        <label v-bind:class="{ done: item.isChecked }">
        <input type="checkbox" v-model="item.isChecked"> @{{ item }}
        </label>
        <span class="pull-right">
        <div class="row justify-content-end">

        <button class="btn btn-xs btn-info" v-on:click="edit(index)">
        <i class="fas fa-edit"></i>
        </button>

        <button class="btn btn-xs btn-warning" v-on:click="remove(index)">
        <i class="fas fa-trash-alt"></i>
        </button>
        </div>

        </span>
    </li>
</ul>
     </div>
</template>

<script>

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

<style scoped>

.done { text-decoration: line-through; }

</style>
