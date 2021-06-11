<template>
  <div id="foo">
  <div class="content" v-show="!show" v-cloak>
    <!-- Pick TimeButton -->
    <div class="">
      <img
        @click="show = !show; threeMin()" v-on:mouseover="rotate_left"
        type="image" class="left_timer" src="/image/25min.svg" alt="3min_timer" loading="lazy"
      />
      <img
        type="image" class="right_timer" src="/image/5min.svg" alt="5min_timer"
        @click="show = !show; fiveMin()" v-on:mouseover="rotate_right" loading="lazy"
      />
    </div>
  </div>

  <transition appear v-cloak>
    <div class="timer_container text-center" v-show="show" v-cloak>
      <!-- Timer -->
      <div class="timer">
        <span id="minutes">{{ minutes }}</span>
        <span id="middle">:</span>
        <span id="seconds">{{ seconds }}</span>
      </div>
      <div id="buttons">
        <!-- Start Button -->
        <img
          class="start-button" @click="startTimer" v-if="!timer"
          type="image" src="/image/start.svg" alt="start-timer" loading="lazy"
        />
        <!-- Stop Button -->
        <img
          class="stop-button" @click="stopTimer" v-if="timer"
          type="image" src="/image/stop.svg" alt="stop-timer" loading="lazy"
        />
        <!-- Reset Button -->
        <img
          class="reset-button" @click="resetTimer" v-if="resetButton"
          type="image" src="/image/reset.svg" alt="reset-timer" loading="lazy"
        />
      </div>
      <a @click="show = !show; stopTimer()" class="back-button">BACK</a>
    </div>
  </transition>

  </div>
</template>

<script>

export default {
  name: 'foo',
  data() {
    return {
    show: false,
isLeft: false,
isRight: true,
timer: null,
pickTime: null,
totalTime: null,
resolution: null,
resetButton: false
}
},
methods: {
rotate_left: function() {
 this.isLeft = true;
 this.isRight = false;
},
rotate_right: function() {
 this.isLeft = false;
 this.isRight = true;
},
threeMin: function() {
 this.pickTime = 25 * 60 * 1000;
 this.totalTime = this.pickTime;
 this.resolution = 100;
},
fiveMin: function() {
 this.pickTime = 5 * 60 * 1000;
 this.totalTime = this.pickTime;
 this.resolution = 100;
},
startTimer: function() {
 this.timer = setInterval(() => this.countdown(), this.resolution);
 this.resetButton = true;
},
stopTimer: function() {
 clearInterval(this.timer);
 this.timer = null;
 this.resetButton = true;
},
resetTimer: function() {
 this.totalTime = this.pickTime;
 clearInterval(this.timer);
 this.timer = null;
 this.resetButton = false;
},
padTime: function(time) {
 return (time < 10 ? "0" : "") + time;
},
countdown: function() {
 if (this.totalTime >= 1) {
   this.totalTime = this.totalTime - this.resolution;
 } else {
   this.totalTime = 0;
   this.resetTimer();
   swal("Complete!!", "", "success");
 }
}
},
computed: {
minutes: function() {
 const minutes = this.totalTime / 60 / 1000;
 if (this.seconds === "00") {
   return Math.ceil(minutes);
 } else {
   return Math.floor(minutes);
 }
},
seconds: function() {
 const seconds = Math.ceil(this.totalTime / 1000) % 60;
 return this.padTime(seconds);
}
     }
     }

</script>

<style scoped>
.timer_container {
  margin-top: 20%;
  width: 800px;
  justify-content: center;
  align-items: center;
  margin-bottom:20%;
}

.v-enter-active {
  transition: opacity 0.8s, transform 0.7s;
}

.v-enter {
  opacity: 0;
  transform: translateY(30px);
}

[v-cloak] {
  display: none;
}

.pick-button {
  margin-left: 40%;
  margin-top: 10%;
}

.right_timer {
  display: inline-block;
  border: none;
  cursor: pointer;
  outline: none;
  color: #fff;
  background-color: #fff;
  width: 200px;
  box-shadow: 3px 3px 15px rgba(0, 0, 0, 3);
  border-radius: 50%;
  transition: 0.5s;
}

.right_timer:hover {
  box-shadow: none;
  animation: anime3 0.4s linear 1;
}
@keyframes anime3 {
  100% {
    transform: rotate(360deg);
  }
}

.left_timer {
  display: inline-block;
  border: none;
  cursor: pointer;
  color: #fff;
  background-color: #fff;
  outline: none;
  width: 200px;
  margin-right: 40px;
  box-shadow: 3px 3px 15px rgba(0, 0, 0, 3);
  border-radius: 50%;
  transition: 0.5s;
}

.left_timer:hover {
  box-shadow: none;
  animation: anime4 0.4s linear 1;
}
@keyframes anime4 {
  100% {
    transform: rotate(360deg);
  }
}

.timer {
  display: inline-block;
  font-family: "Kosugi Maru", Verdana, Geneva, Tahoma, sans-serif;
  color: #fff;
  background-color: #000;
  font-size: 85px;
  width: 85%;
  margin: 50px auto;
  padding: 20px;
  border-radius: 5px;
  box-shadow: 1px 1px 3px rgba(0, 0, 0, 0.5);
}

.start-button {
  display: inline-block;
  cursor: pointer;
  outline: none;
  background-color: #fff;
  width: 90px;
  box-shadow: 1px 1px 3px rgba(0, 0, 0, 3);
  border-radius: 50%;
  transition: 0.5s;
}

.start-button:hover {
  box-shadow: none;
}

.stop-button {
  display: inline-block;
  cursor: pointer;
  outline: none;
  background-color: #fff;
  width: 90px;
  border-radius: 50%;
  box-shadow: 1px 1px 3px rgba(0, 0, 0, 3);
  transition: 0.5s;
}

.stop-button:hover {
  box-shadow: none;
}

.reset-button {
  display: inline-block;
  cursor: pointer;
  outline: none;
  background-color: #fff;
  width: 90px;
  margin-left: 30px;
  border-radius: 50%;
  box-shadow: 1px 1px 3px rgba(0, 0, 0, 3);
  transition: 0.5s;
}

.reset-button:hover {
  box-shadow: none;
}

.back-button {
  display: inline-block;
  font-family: "Kosugi Maru", Verdana, Geneva, Tahoma, sans-serif;
  text-align: center;
  position: relative;
  text-decoration: none;
  color: #1b1b1b;
  background: #fff;
  border: 2px solid #1b1b1b;
  font-size: 20px;
  width: 160px;
  margin-top: 30px;
  padding: 10px;
  border-radius: 5px;
  transition: 0.4s;
}

.back-button:hover {
  background: #1b1b1b;
  color: #fff;
  cursor: pointer;
  text-decoration: none;
}
</style>
