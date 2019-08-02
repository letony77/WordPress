<template>
  <div>
    <h2 v-html="post.title" />
    <div v-html="post.excerpt" />
    <g-link :to="post.path" class = "readme">
    En savoir plus
    </g-link>
  </div>
</template>

<script>
export default {
  props: {
    post: {
      type: Object,
      required: true
    }
  }
}
</script>
