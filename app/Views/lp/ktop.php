<div class="row">
    <div class="col-6">
        <img src="<?= base_url('image/capres.png') ?>" alt="" class="hero-image hero-image-l" onclick="window.location.href='<?= base_url('/zidan') ?>'" data-aos="zoom-in" data-aos-duration="1000" data-aos-easing="ease-in-out-back" data-aos-once="true">
    </div>
    <div class="col-6">
        <img src="<?= base_url('image/cawapres.png') ?>" alt="" class="hero-image hero-image-r" onclick="window.location.href='<?= base_url('/rere') ?>'" data-aos="zoom-in" data-aos-duration="1000" data-aos-easing="ease-in-out-back" data-aos-once="true">
    </div>
</div>

<img class="top-calon" src="<?= base_url('image/top-calon.png') ?>" alt="">
<h1 class="top-nama-capres">Muhammad Azhar Zidane</h1>
<h1 class="top-nama-cawapres">Regina Shaqila Hudda</h1>


<style>
.hero {
    background-image: url('<?= base_url('image/lp_fisip.png') ?>');
    background-size: cover;
    background-position: center;
    background-attachment: fixed;
    height: 100vh;
    filter: blur(0);
}
.top-calon {
    position: absolute;
    top: 0;
    left: 30%;
    height: 80%;
}
.top-nama-capres, .top-nama-cawapres {
    color: #fff;
    position: absolute;
    font-weight: bold;
    letter-spacing: 0;
}
.top-nama-capres {
    color: #5e0984;
    background-color: #fff;
    border: 5px solid #5e0984;
    border-radius: 40px;
    padding: 7px 40px;
    top: 60%;
    left: 27%;
    transform: rotate(2deg);
}
.top-nama-cawapres {
    color: #fff;
    background-color: #5e0984;
    border: 5px solid #fff;
    border-radius: 40px;
    padding: 7px 40px;
    top: 70%;
    left: 30%;
    transform: rotate(1deg);
}
</style>