<template>
  <div id="tips">
  <button　@click="active"　type="button" class="btn btn-success btn-lg" v-on:click="onclick">勉強に疲れたら押そう</button>
  <div v-if="isActive"></div>
  <div v-else>
    <div class="card">
        <div class="card-body">
        <blockquote class="blockquote mb-0">
              <p> {{ message }} </p>
          <footer class="blockquote-footer"><cite>{{ message2 }}</cite></footer>
          </blockquote>
          </div>
  </div>
  </div>

  </div>
</template>

<script>

export default {
  name: 'tips',
  data() {
    return {
      isActive: true,
      message: ""
      }
},
methods:{
  onclick: function(){
    this.message = Math.floor(Math.random() * 6);

    switch(this.message){
        case 0:
          this.message = "積小為大（せきしょういだい）";
          break;
        case 1:
          this.message = "人にできて、きみだけにできないことなんてあるもんか";
          break;
        case 2:
          this.message = "やれなかった、やらなかった、どっちかな？";
          break;
        case 3:
          this.message = "あなたがボタン押してる間他の人は勉強している。";
          break;
        case 4:
          this.message = "ちょっと休もう。それサボってるだけですよね？";
          break;
        case 5:
          this.message = "今やっている事は本当に必要な作業か考えてるか？";
          break;
      }

      switch(this.message){
          case "積小為大（せきしょういだい）":
            this.message2 = "二宮金次郎";
            break;
          case "人にできて、きみだけにできないことなんてあるもんか":
            this.message2 = "ドラえもん";
            break;
          case "やれなかった、やらなかった、どっちかな？":
            this.message2 = "相田みつを";
            break;
          case "あなたがボタン押してる間他の人は勉強している。":
            this.message2 = "スティーブ・ジョブス";
            break;
          case "ちょっと休もう。それサボってるだけですよね？":
            this.message2 = "ワンピース作者：尾田栄一郎";
            break;
          case "今やっている事は本当に必要な作業か考えてるか？":
            this.message2 = "新海誠";
            break;
        }
  },
  active: function () {
    this.isActive = !this.isActive;
}
}
}

</script>
