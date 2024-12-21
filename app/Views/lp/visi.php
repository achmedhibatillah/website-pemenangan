<div class="row lp-visi">

<div data-aos="fade-up" class="col-6 vm-teks font-cream bg-maroon p-5 d-flex justify-content-center align-items-center" style="padding: 10% 10% 10% 10%;">
    <div class="">
    <h2><i><i class="font-alex">V</i>isi</i></h1>
    <h1>Terwujudnya BEM FISIP UB sebagai <i>AKASA MIMPI</i> berbasis <i>demand-driven</i> dengan berlandaskan mutu progresif, inklusif, dan kolaboratif menuju FISIP TANGGUH SATU PERJUANGAN.</h1>
    <div class="vm-btn mt-3">
        <a href="<?= base_url('visi-misi#visi') ?>" class="btn btn-cream px-3">Selengkapnya <i class="fas fa-arrow-up-right-from-square"></i></a>
    </div>
    </div>
</div>

<div class="col-6 vm-img">
    <img src="<?= base_url('image/visi-misi.png') ?>" alt="">
</div>

</div>

<style>
.lp-visi {
    width: 100%;
    margin: 0;
    padding: 0;
    background: linear-gradient(to bottom left, #3652C2, #7f2324);
}
.vm-teks {
    background: linear-gradient(to bottom left, #3652C2, #7f2324);
}
.vm-teks h1 {
    letter-spacing: -1px; font-size: 2rem; line-height: 1; font-weight: 900;
}
.vm-img {
    margin: 0;
    padding: 0;
}
.vm-img img {
    width: 100%;
    margin: 0;
}
.vm-btn {
    display: flex;
}
@media only screen and (max-width: 768px) {
    .vm-teks {
        height: 500px;
    }
    .vm-teks h2 {
        text-align: center;
        margin-bottom: 50px;
    }
    .vm-teks h1 {
        font-size: 1.2rem;
        text-align: center;
    }
    .vm-btn {
        justify-content: center;
        align-items: center;
    }
}
@media only screen and (min-width: 769px) and (max-width: 1024px) {
    .vm-teks {
        height: 700px;
    }
    .vm-teks h2 {
        text-align: center;
        margin-bottom: 50px;
    }
    .vm-teks h1 {
        font-size: 1.5rem;
        text-align: center;
    }
    .vm-btn {
        justify-content: center;
        align-items: center;
    }
}
</style>

<script>
    function adjustLayout() {
        var width = window.innerWidth;
        var row = document.querySelector('.lp-visi');
        var col1 = row.querySelector('.vm-img');
        var col2 = row.querySelector('.vm-teks');

        if (width <= 1024) {
            // Aturan untuk ukuran tablet atau lebih kecil
            col1.classList.remove('col-6');
            col2.classList.remove('col-6');
            row.insertBefore(col1, col2); // Memindahkan col1 (gambar) sebelum col2 (teks)
        } else {
            // Aturan untuk ukuran layar lebih besar (laptop atau desktop)
            col1.classList.add('col-6');  // Menambahkan kembali kelas col-6
            col2.classList.add('col-6');  // Menambahkan kembali kelas col-6
            row.appendChild(col1); // Memastikan col1 berada di tempat semula setelah col2
        }
    }

    window.addEventListener('resize', adjustLayout);
    adjustLayout();
</script>

