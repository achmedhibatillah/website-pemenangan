<div class="d-flex justify-content-center align-items-center">
    <h1 class="font-cream mt-5 fst-italic"><i class="font-alex">M</i>isi</h1>
</div>

<div class="d-flex justify-content-center align-items-center pt-5">
<div class="lp-poin-misi d-flex align-items-center mx-2" onclick="window.location.href='<?= base_url('visi-misi#misi-1') ?>'">
    <div class="lp-poin-misi-icon">
        <i class="fas fa-users-cog"></i>
    </div>
    <h5>Mutual growth and development system.</h5>
</div>
</div>

<div class="d-flex justify-content-center align-items-center pt-4">
<div class="lp-poin-misi d-flex align-items-center mx-2" onclick="window.location.href='<?= base_url('visi-misi#misi-2') ?>'">
    <div class="lp-poin-misi-icon">
        <i class="fas fa-bullseye"></i>
    </div>
    <h5>Meaningful Aspirational.</h5>
</div>
</div>

<div class="d-flex justify-content-center align-items-center pt-4">
<div class="lp-poin-misi d-flex align-items-center mx-2" onclick="window.location.href='<?= base_url('visi-misi#misi-3') ?>'">
    <div class="lp-poin-misi-icon">
        <i class="fas fa-network-wired"></i>
    </div>
    <h5>Collaborative networking movement.</h5>
</div>
</div>

<div class="d-flex justify-content-center align-items-center pt-4">
<div class="lp-poin-misi d-flex align-items-center mx-2" onclick="window.location.href='<?= base_url('visi-misi#misi-4') ?>'">
    <div class="lp-poin-misi-icon">
        <i class="fas fa-thumbs-up"></i>
    </div>
    <h5>Impactful platform for services.</h5>
</div>
</div>

<div class="d-flex justify-content-center align-items-center pt-4 pb-5">
<div class="lp-poin-misi d-flex align-items-center mx-2" onclick="window.location.href='<?= base_url('visi-misi#misi-5') ?>'">
    <div class="lp-poin-misi-icon">
        <i class="fas fa-hand-paper"></i>
    </div>
    <h5>⁠Continuous pressure group.</h5>
</div>
</div>

<div class="lp-misi-capres">
    <img src="<?= base_url('image/lp-misi-capres.png') ?>" alt="">
</div>

<div class="lp-misi-cawapres">
    <img src="<?= base_url('image/lp-misi-cawapres.png') ?>" alt="">
</div>

<style>
.lp-misi-capres img, .lp-misi-cawapres img {
    height: 500px;
}
.lp-misi-capres {
    position: absolute;
    right: 20%;
    top: 50%;
    transform: translate(50%, -50%);
}
.lp-misi-cawapres {
    position: absolute;
    right: 80%;
    top: 50%;
    transform: translate(50%, -50%);
}
.lp-poin-misi {
    background-color: #ffe6be; color: #7f2324; border-radius: 50px; height: 100px; width: 375px; cursor: pointer; transition: background-color 0.3s, color 0.3s;
}
.lp-poin-misi:hover {
    background-color: #7f2324; color: #ffe6be; border: 1px solid #ffe6be; animation: shake 0.5s ease-in-out;
}
.lp-poin-misi h5 {
    font-weight: 700;
    letter-spacing: -1px;
    line-height: 0.9;
    padding: 0 20px 0 10px;
    font-style: italic;
}
.lp-poin-misi-icon {
    display: flex;
    padding-left: 20px;
    align-items: center;
    position: relative;
    height: 100px;
    width: 60px;
    left: 10px;
}
@media only screen and (max-width: 768px) {
    .lp-misi-capres, .lp-misi-cawapres {
        display: none;
    }
}
@media only screen and (min-width: 769px) and (max-width: 1024px) {
    .lp-misi-capres img, .lp-misi-cawapres img {
        height: 250px;
    }
    .lp-misi-capres {
        right: 15%;
        top: 50%;
    }
    .lp-misi-cawapres {
        right: 85%;
        top: 50%;
    }
}
</style>