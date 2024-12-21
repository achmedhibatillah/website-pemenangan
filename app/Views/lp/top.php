<div class="top-name">
    <div data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="0" data-aos-once="true">
        <h1 class="top-name-capres"> Zidane </h1>
    </div>
    <div data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="500" data-aos-once="true">
        <h1 class="top-name-cawapres"> Rere </h1>
    </div>
</div>

<div class="top-vote">
    <img src="<?= base_url('image/vote.png') ?>" alt="" data-aos="zoom-out" data-aos-duration="1000" data-aos-delay="1000" data-aos-once="true" class="rotating-img">
</div>

<style>
.hero {
    background-image: linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)), url('<?= base_url('image/lp-fisip.png') ?>');
    background-size: cover;
    background-position: center;
    background-attachment: fixed;
    height: 100vh;
}

.hero-image {
    position: absolute;
    clip-path: inset(0 0 0 0);
    transition: transform 0.3s ease, filter 0.3s ease;
    will-change: transform, filter;
    cursor: pointer;
    max-width: 100%; 
    height: 70%; 
    position: absolute;
}

.hero-image-l {
    top: 20%; 
    right: 52%;
    z-index: 1;
}

.hero-image-r {
    top: 20%; 
    left: 52%;
}

.hero-image:hover {
    filter: grayscale(1) contrast(1);
    transform: scale(1.1) !important;
    z-index: 10;
    transition: all 0.3s ease;
}
.top-name {
    position: absolute;
    top: 50%;
    left: 25%;
    width: 180px;
    height: 110px;
    transform: translate(-50%, -50%);
}
.top-name-capres {
    background-color: #fff;
    border-radius: 40px;
    padding: 10px 40px 10px 40px;
    color: #7f2324;
    font-size: 30px;
    font-weight: bold;
    letter-spacing: -3px;
    position: absolute;
    transform: rotate(-10deg);
    box-shadow: 3px 3px 3px rgba(0, 0, 0, 0.5);
    border: 3px solid #7f2324;
}
.top-name-cawapres {
    background-color: #7f2324;
    border-radius: 40px;
    padding: 10px 40px 10px 40px;
    color: #fff;
    font-size: 30px;
    font-weight: bold;
    letter-spacing: -3px;
    position: absolute;
    top: 45px;
    left: 30px;
    transform: rotate(-4deg);
    box-shadow: 3px 3px 3px rgba(0, 0, 0, 0.5);
    border: 3px solid #fff;
}
.top-vote {
    position: absolute;
    top: 52%;
    right: 27%;
    width: 130px;
    height: 130px;
    transform: translate(50%, -50%);
}

.top-vote img {
    width: 130px;
    height: 130px;
}

.rotating-img {
  animation: rotate 5s infinite;
}

@keyframes rotate {
  0% {
    transform: rotate(0deg);
  }
  40% {
    transform: rotate(360deg);
  }
  100% {
    transform: rotate(360deg);
  }
}



@media only screen and (max-width: 769px) {
    .hero {
        background-image: url('<?= base_url('image/lp-fisip-sm.png') ?>');
        background-size: cover;
        background-position: center;
        background-attachment: scroll;
    }
    .hero-image {
        width: 100%;
        height: auto;
        position: relative;
        top: 0;
        left: auto;
        right: auto;
        transform: translateX(0);
    }
    .top-name {
        top: 80%;
        left: 50%;

    }
    .top-vote {
        top: 25%;
        right: 50%;
    }
}

@media only screen and (min-width: 769px) and (max-width: 1024px) {
    .hero {
        background-image: url('<?= base_url('image/lp-fisip-md.png') ?>');
        background-size: cover;
        background-position: center;
        background-attachment: scroll;
    }
    .hero-image {
        width: 100%;
        height: auto;
        position: relative;
        top: 0;
        left: auto;
        right: auto;
        transform: translateX(0);
    }
    .top-name {
        top: 50%;
        left: 15%;

    }
    .top-vote {
        top: 52%;
        right: 17%;
    }
}
</style>