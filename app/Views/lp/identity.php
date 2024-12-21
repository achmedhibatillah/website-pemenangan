<section class="m-0 lp-identity" style="border: 5px solid #ffe6be;">

<div class="m-0" style="border-bottom: 5px solid #ffe6be;" data-aos="fade-up">
    <div class="card m-0" style="background: linear-gradient(to bottom right, #3652C2, #7f2324); width: 100%; border: none; border-radius: 0;">
        <div class="row g-0 m-0">

            <div class="col-md-4 my-3 d-flex justify-content-center align-items-center">
                <div class="id-foto-capres"></div>
            </div>

            <div class="col-md-8">
                <div class="card-body id-card-body">

                    <h3 class="card-title font-cream fw-bold mt-3 mb-0"><?= $data[0]['nama-dec'] ?></h3>
                    <hr class="font-cream">
                    <p class="font-cream-sec"><i>Calon Presiden BEM FISIP UB 2025</i></p>

                    <table class="font-cream mb-3">
                        <tr>
                            <td style="width: 5%; text-align: center; vertical-align: middle;"><i class="fas fa-school text-center"></i></td>
                            <td style="width: 95%;" class="ps-2">Ilmu Politik, FISIP UB</td>
                        </tr>
                        <tr>
                            <td style="width: 5%; text-align: center; vertical-align: middle;"><i class="fas fa-calendar-alt text-center"></i></td>
                            <td style="width: 95%;" class="ps-2">Angkatan 2022</td>
                        </tr>
                    </table>

                    <p class="card-text font-cream"><?= $data[0]['deskripsi'] ?></p>

                    <a href="<?= base_url('zidane') ?>" class="btn btn-cream font-cream-sec mt-auto" style="cursor: pointer; width: 300px;">Selengkapnya <i class="fas fa-arrow-up-right-from-square"></i></a>

                </div>
            </div>
        </div>
    </div>
</div>

<div class="m-0" style="border-bottom: 5px solid #ffe6be;" data-aos="fade-up">
    <div class="card m-0" style="background: linear-gradient(to bottom right, #3652C2, #7f2324); width: 100%; border: none; border-radius: 0;">
        <div class="row g-0 m-0">

            <div class="col-md-4 my-3 d-flex justify-content-center align-items-center">
                <div class="id-foto-cawapres"></div>
            </div>

            <div class="col-md-8">
                <div class="card-body id-card-body">

                    <h3 class="card-title font-cream fw-bold mt-3 mb-0"><?= $data[1]['nama-dec'] ?></h3>
                    <hr class="font-cream">
                    <p class="font-cream-sec"><i>Calon Wakil Presiden BEM FISIP UB 2025</i></p>

                    <table class="font-cream mb-3">
                        <tr>
                            <td style="width: 5%; text-align: center; vertical-align: middle;"><i class="fas fa-school text-center"></i></td>
                            <td style="width: 95%;" class="ps-2">Psikologi, FISIP UB</td>
                        </tr>
                        <tr>
                            <td style="width: 5%; text-align: center; vertical-align: middle;"><i class="fas fa-calendar-alt text-center"></i></td>
                            <td style="width: 95%;" class="ps-2">Angkatan 2022</td>
                        </tr>
                    </table>

                    <p class="card-text font-cream"><?= $data[1]['deskripsi'] ?></p>

                    <a href="<?= base_url('rere') ?>" class="btn btn-cream font-cream-sec mt-auto" style="cursor: pointer; width: 300px;">Selengkapnya <i class="fas fa-arrow-up-right-from-square"></i></a>
                    
                </div>
            </div>
        </div>
    </div>
</div>

</section>

<style>
.id-card-body {
    display: flex;
    flex-direction: column;
    height: 100%;
}
.id-foto-capres {
    background-image: url(<?= base_url('image/' . $data[0]['foto']) . '.png' ?>);
    width: 400px;
    height: 500px;   
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
}
.id-foto-cawapres {
    background-image: url(<?= base_url('image/' . $data[1]['foto']) . '.png' ?>);
    width: 400px;
    height: 500px;   
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
}

.id-btn-capres:hover ~ .id-foto-capres {
    background-image: url(<?= base_url('image/' . $data[0]['foto'] . '-hover.png') ?>);
}
</style>