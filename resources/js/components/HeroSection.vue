<template>
    <section class="hero">
    <div id="heroCarousel" class="carousel slide carousel-fade" data-ride="carousel">

      <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

      <div class="carousel-inner" role="listbox">

        <!-- Slide 1 -->
        <div class="carousel-item active" style="background-image: url(/img/slide/slide-1.jpg)">
          <div class="container">
            <h2>Welcome to <span>Medicio</span></h2>
            <p>Ut velit est quam dolor ad a aliquid qui aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti vel.</p>
            <a href="#about" class="btn-get-started scrollto">Read More</a>
          </div>
        </div>

        <!-- Slide 2 -->
        <div class="carousel-item" style="background-image: url(/img/slide/slide-2.jpg)">
          <div class="container">
            <h2>Lorem Ipsum Dolor</h2>
            <p>Ut velit est quam dolor ad a aliquid qui aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti vel.</p>
            <a href="#about" class="btn-get-started scrollto">Read More</a>
          </div>
        </div>

        <!-- Slide 3 -->
        <div class="carousel-item" style="background-image: url(/img/slide/slide-3.jpg)">
          <div class="container">
            <h2>Sequi ea ut et est quaerat</h2>
            <p>Ut velit est quam dolor ad a aliquid qui aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti vel.</p>
            <a href="#about" class="btn-get-started scrollto">Read More</a>
          </div>
        </div>

      </div>

      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true">
            <i class="fas fa-angle-left"></i>
        </span>
        <span class="sr-only">Previous</span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true">
            <i class="fas fa-angle-right"></i>
        </span>
        <span class="sr-only">Next</span>
      </a>

    </div>
  </section><!-- End Hero -->
</template>

<script>
export default {
    
}
</script>

<style lang="css" scoped>
.hero {
  width: 100%;
  height: 100vh;
  background-color: rgba(60, 60, 60, 0.8);
  overflow: hidden;
  position: relative;
}

.hero .carousel, .hero .carousel-inner, .hero .carousel-item, .hero .carousel-item::before {
  position: absolute;
  top: 0;
  right: 0;
  left: 0;
  bottom: 0;
}

.hero .carousel-item {
  background-size: cover;
  background-position: center;
  background-repeat: no-repeat;
  display: flex;
  justify-content: center;
  align-items: flex-end;
}

.hero .container {
  text-align: center;
  background: rgba(255, 255, 255, 0.9);
  padding-top: 30px;
  padding-bottom: 30px;
  margin-bottom: 50px;
  border-top: 4px solid #3fbbc0;
}

@media (max-width: 1200px) {
  .hero .container {
    margin-left: 50px;
    margin-right: 50px;
  }
}

.hero h2 {
  color: #2f2f2f;
  margin-bottom: 20px;
  font-size: 36px;
  font-weight: 700;
}

.hero p {
  -webkit-animation-delay: 0.4s;
  animation-delay: 0.4s;
  margin: 0 auto 30px auto;
  color: #555555;
}

.hero .carousel-inner .carousel-item {
  transition-property: opacity;
  background-position: center top;
}

.hero .carousel-inner .carousel-item,
.hero .carousel-inner .active.carousel-item-left,
.hero .carousel-inner .active.carousel-item-right {
  opacity: 0;
}

.hero .carousel-inner .active,
.hero .carousel-inner .carousel-item-next.carousel-item-left,
.hero .carousel-inner .carousel-item-prev.carousel-item-right {
  opacity: 1;
  transition: 0.5s;
}

.hero .carousel-inner .carousel-item-next,
.hero .carousel-inner .carousel-item-prev,
.hero .carousel-inner .active.carousel-item-left,
.hero .carousel-inner .active.carousel-item-right {
  left: 0;
  transform: translate3d(0, 0, 0);
}

.hero .carousel-control-prev, .hero .carousel-control-next {
  width: 10%;
  top: 112px;
}

@media (max-width: 992px) {
  .hero .carousel-control-prev, .hero .carousel-control-next {
    top: 66px;
  }
}

.hero .carousel-control-next-icon, .hero .carousel-control-prev-icon {
  background: none;
  font-size: 36px;
  line-height: 1;
  width: 56px;
  height: 56px;
  background: rgba(63, 187, 192, 0.4);
  border-radius: 50%;
  padding: 10px;
  transition: 0.3s;
  color: rgba(255, 255, 255, 0.5);
}

.hero .carousel-control-next-icon:hover, .hero .carousel-control-prev-icon:hover {
  background: rgba(63, 187, 192, 0.6);
  color: rgba(255, 255, 255, 0.8);
}

.hero .carousel-indicators li {
  cursor: pointer;
  background: #fff;
  overflow: hidden;
  border: 0;
  width: 12px;
  height: 12px;
  border-radius: 50px;
  opacity: .6;
  transition: 0.3s;
}

.hero .carousel-indicators li.active {
  opacity: 1;
  background: #3fbbc0;
}

.hero .btn-get-started {
  font-family: "Roboto", sans-serif;
  font-weight: 500;
  font-size: 14px;
  letter-spacing: 1px;
  display: inline-block;
  padding: 14px 32px;
  border-radius: 4px;
  transition: 0.5s;
  line-height: 1;
  color: #fff;
  -webkit-animation-delay: 0.8s;
  animation-delay: 0.8s;
  background: #3fbbc0;
}

.hero .btn-get-started:hover {
  background: #65c9cd;
}

@media (max-width: 992px) {
  .hero {
    height: 100vh;
  }
  .hero .container {
    margin-top: 100px;
  }
}

@media (max-width: 768px) {
  .hero h2 {
    font-size: 28px;
  }
}

@media (min-width: 1024px) {
  .hero .carousel-control-prev, .hero .carousel-control-next {
    width: 5%;
  }
}

@media (max-height: 500px) {
  .hero  {
    height: 160vh;
  }
}
</style>