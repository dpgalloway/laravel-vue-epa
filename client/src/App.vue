<template>
  <section id="app">
    <header class="site-header">
      <h1>Site Header</h1>
    </header>
    <main class="site-container">
      <div id="nav">
        <div class="grid-container">
          <div class="grid-row">
            <div class="tablet:grid-col nav-link">
              <router-link to="/">Home</router-link>
            </div>
            <div class="tablet:grid-col nav-link">
              <router-link to="/about">About</router-link>
            </div>
          </div>
        </div>
      </div>
      <router-view />
    </main>
  </section>
</template>

<style lang="scss" scoped>
.site-header {
  width: 100%;
  text-align: center;
  padding: 1rem;
}

.site-container {
  max-width: 60rem;
  margin: 0 auto;
  padding: 1rem;
  text-align: center;
}

.nav-link {
  text-align: center;
}
</style>
