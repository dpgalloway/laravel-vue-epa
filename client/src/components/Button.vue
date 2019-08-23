<template>
  <button class="usa-button">{{ label }}</button>
</template>

<script>
export default {
  name: 'Button',
  props: {
    label: String,
  },
};
</script>
