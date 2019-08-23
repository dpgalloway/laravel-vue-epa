<template>
  <div>
    <h2>Items</h2>
    <ul class="items-list">
      <li v-for="item in items" :key="item.id">{{ item.name }} - ${{ item.price }}</li>
    </ul>
  </div>
</template>

<script>
export default {
  data() {
    return {
      items: [],
    };
  },
  async mounted() {
    const response = await this.$http.get('/items');
    this.items = response.data;
    console.log(this.items);
  },
};
</script>

<style scoped>
.items-list {
  display: inline-block;
}
</style>
