
import './bootstrap'
import Vue from 'vue'
import ArticleLike from './components/ArticleLike'
import ArticleTagsInput from './components/ArticleTagsInput'
import FollowButton from './components/FollowButton'
import Timer from './components/Timer'
import Task from './components/Task'


const app = new Vue({
  el: '#app',
  components: {
    ArticleLike,
    ArticleTagsInput,
    FollowButton,
    Timer,
    Task,
  }
})
