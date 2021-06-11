<template>
  <div ref="fade" :class="{fadein: visible, hidden: !visible}">
    <slot v-show="visible"></slot>
  </div>
</template>

<script>
export default {
  name: 'FadeIn',
  data () {
    return {
      visible: false
    }
  },
  created () {
    window.addEventListener('scroll', this.handleScroll)
  },
  destroyed () {
    window.removeEventListener('scroll', this.handleScroll)
  },
  methods: {
    handleScroll () {
      if (!this.visible) {
        var top = this.$refs.fade.getBoundingClientRect().top
        this.visible = (top + 100) < window.innerHeight
      }
    }
  }
}
</script>

<style scoped>
.hidden {
  opacity: 0;
}

.fadein {
  animation: fadeIn 0.5s;
  opacity: 1;
}

@keyframes fadeIn {
  0% {
  transform: translateX(100vw) translateX(0px);

  }
  100% {
  transform: translate(0px, 0px);
  transition: transform 225ms cubic-bezier(0, 0, 0.2, 1) 0ms;
  }
}
</style>
