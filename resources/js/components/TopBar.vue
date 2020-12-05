<template>
    <div id="topbar" class="d-none d-lg-flex align-items-center fixed-top">
    <div class="container d-flex align-items-center justify-content-between">
      <div class="d-flex align-items-center">
        <i class="far fa-clock"></i> Monday - Saturday, 8AM to 10PM
      </div>
      <div class="d-flex align-items-center">
        <i class="icofont-phone"></i> Call us now +1 234 567 89
      </div>
    </div>
  </div>
</template>

<script>
export default {
    
}
</script>

<style lang="css">
#topbar {
  background: #3fbbc0;
  color: #fff;
  height: 40px;
  font-size: 16px;
  font-weight: 600;
  transition: all 0.5s;
}

#topbar.topbar-scrolled {
  top: -40px;
}

#topbar i {
  padding-right: 6px;
}
</style>