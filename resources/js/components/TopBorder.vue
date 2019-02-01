<template>
    <div class="flex-header">
        <h1 v-if="title == 'Home'" id="title">Tasty Recipes</h1>
        <h1 v-else id="title">{{title}}</h1>
    </div>
</template>

<script>
export default {
    props: ['title']
}
</script>

<style>
.flex-header {
  background-color: darkslategray;
  display: flex;
  position: absolute;
  top: 0;
  width: 100%;
  justify-content: center;
  align-items: center;
  height: 140px;
  font-family: "Great Vibes", cursive;
  font-size: 48px;
  color: darkgoldenrod;
  padding: 10px;
}
</style>
