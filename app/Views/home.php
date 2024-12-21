<section class="hero" data-aos="zoom-out">
    <?= $this->include('lp/top') ?>
</section>

<section class="video-background" style="border-top: 5px solid #ffe6be;">
    <?= $this->include('lp/video') ?>
</section>

<?= $this->include('lp/identity') ?>

<section data-aos="fade-up">
    <?= $this->include('lp/visi') ?>
</section>

<section data-aos="fade-up" style="background: linear-gradient(to bottom, #3652C2, #7f2324); border-top: 5px solid #ffe6be">
    <?= $this->include('lp/misi') ?>
</section>

<section id="program-kerja" data-aos="fade-up" style="background-color: #ffe6be;">
    <?= $this->include('lp/slide-proker') ?>
</section>

<section data-aos="fade-up" class="lp-other bg-maroon d-flex justify-content-center align-items-center">
    <?= $this->include('lp/other') ?>
</section>

<section data-aos="fade-up" class="gd bg-maroon d-flex justify-content-center align-items-center" style="height: 100vh; background: linear-gradient(to bottom left, #3652C2, #7f2324);">
    <?= $this->include('lp/gd') ?>
</section>

<section class="lp-aspirasi bg-cream pb-5" id="lp-aspirasi" data-aos="fade-up" style="overflow: hidden;">
<div class="row" style="overflow: hidden;">
<div class="col-12 col-lg-6" style="overflow: hidden;">
    <div class="d-flex justify-content-center align-items-center">
        <img src="<?= base_url('image/lp-aspirasi.png') ?>" alt="" width="500px" style="margin: 60px 0 0 0;">
    </div>
</div>
<div class="col-12 col-lg-6 d-flex justify-content-center align-items-center">
    <div>
        <h1 class="font-maroon mx-3" style="letter-spacing: -1.5px;">Halo Kawan <i style="color: #ee7600;"><b>Jingga</b></i>!</h1>
        <p class="font-maroon-secondary mx-3" style="margin-top: -10px;">Bantu beri saran untuk FISIP UB yang lebih baik.</p>
        <a href="<?= base_url('aspirasi') ?>" class="btn btn-maroon mx-3">Kirim aspirasimu <i class="fas fa-arrow-right ms-3"></i></a>
    </div>
</div>
</div>
</section>


<style>
.blockquote-custom {
  position: relative;
  font-size: 1.1rem;
}

.blockquote-custom-icon {
  width: 50px;
  height: 50px;
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  position: absolute;
  top: -40px;
  left: 19px;
}

.visi {
    width: 95%;
}

.btn-jingga {
    background-color: #ee7600;
    color: #fff;
}

.btn-jingga:hover {
    background-color: transparent;
    border: 1px solid #000;
}

.btn-jingga-putih {
    background-color: #ee7600;
    color: #fff;
}

.btn-jingga-putih:hover {
    background-color: transparent;
    color: #fff;
    border: 1px solid #fff;
}

@media only screen and (max-width: 768px) {
    .visi {
        width: 97%;
    }
}
</style>

<script>
const message = '<?= isset($message) ? $message : ''; ?>';

if (message) {
    Swal.fire({
        icon: 'success',
        title: 'Berhasil!',
        text: message,
    });
}


document.addEventListener("DOMContentLoaded", function() {
    const typingText = document.getElementById("TypingText");

    // Fungsi untuk menambahkan kelas typing-effect saat elemen muncul di layar
    const observer = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                // Menambahkan kelas typing-effect saat elemen masuk ke dalam viewport
                entry.target.classList.add("typing-effect");
                observer.unobserve(entry.target); // Setelah terdeteksi, stop observer
            }
        });
    }, { threshold: 0.5 }); // Threshold 0.5 berarti 50% dari elemen harus muncul

    // Mulai observe pada elemen
    observer.observe(typingText);
});

</script>