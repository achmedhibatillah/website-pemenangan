<section id="visi" class="font-maroon">
    <div class="d-flex justify-content-center align-items-center">
        <div class="p-5">
            <h5>Visi</h5>
            <h1 class="text-visi">Terwujudnya BEM FISIP UB sebagai <i>AKASA MIMPI</i> berbasis <i>demand-driven</i> dengan berlandaskan mutu progresif, inklusif, dan kolaboratif menuju FISIP TANGGUH SATU PERJUANGAN.</h1>
        </div>
    </div>
</section>

<section id="misi-1" class="bg-maroon font-cream" style="height: 100vh; border-top: 5px solid #ffe6be" data-aos="fade-up">
    <div class="d-flex justify-content-center align-items-center">
        <div class="p-5">
            <h5>Misi - 01</h5>
            <h1 class="text-misi">Mutual growth and development system.</h1>
            <p class="text-misi-sektor font-cream-sec mb-4">Sektor Pengembangan</p>
            <p class="text-misi-deskripsi m-0">Sebuah sistem yang berfokus pada pertumbuhan dan perkembangan bersama, di mana semua fungsionaris yang terlibat memperoleh manfaat dengan cara yang berkelanjutan. Dalam konteks pengembangan, hal ini dapat melibatkan kolaborasi lintas sektor untuk membangun kapasitas individu maupun BEM FISIP itu sendiri.</p>
        </div>
    </div>
</section>

<section id="misi-2" class="bg-maroon font-cream" style="height: 100vh; border-top: 5px solid #ffe6be" data-aos="fade-up">
    <div class="d-flex justify-content-center align-items-center">
        <div class="p-5">
            <h5>Misi - 02</h5>
            <h1 class="text-misi">Meaningful Aspirational</h1>
            <p class="text-misi-sektor font-cream-sec mb-4">Sektor Pelayanan</p>
            <p class="text-misi-deskripsi m-0">Pendekatan pelayanan yang tidak hanya memberikan solusi praktis tetapi juga memberikan dampak emosional dan aspiratif kepada masyarakat. Pelayanan ini bermakna, relevan, dan sesuai dengan harapan atau kebutuhan mendalam dari penerima layanan.</p>
        </div>
    </div>
</section>

<section id="misi-3" class="bg-maroon font-cream" style="height: 100vh; border-top: 5px solid #ffe6be" data-aos="fade-up">
    <div class="d-flex justify-content-center align-items-center">
        <div class="p-5">
            <h5>Misi - 03</h5>
            <h1 class="text-misi mb-4">Collaborative Networking Movement</h1>
            <p class="text-misi-deskripsi m-0">Sebuah gerakan berbasis jaringan kolaboratif yang melibatkan berbagai pihak untuk mencapai tujuan bersama. Ini biasanya melibatkan sinergi antara individu, organisasi, atau komunitas untuk menciptakan dampak yang lebih besar.</p>
        </div>
    </div>
</section>

<section id="misi-4" class="bg-maroon font-cream" style="height: 100vh; border-top: 5px solid #ffe6be" data-aos="fade-up">
    <div class="d-flex justify-content-center align-items-center">
        <div class="p-5">
            <h5>Misi - 04</h5>
            <h1 class="text-misi">Impactful Platform for Services</h1>
            <p class="text-misi-sektor font-cream-sec mb-4">Sektor Pengabdian</p>
            <p class="text-misi-deskripsi m-0">Program yang dirancang untuk memberikan layanan dengan dampak nyata, baik secara sosial, ekonomi, maupun lingkungan. Dalam konteks pengabdian, ini mencerminkan upaya terorganisir yang bertujuan membantu masyarakat dengan memberikan manfaat langsung.</p>
        </div>
    </div>
</section>

<section id="misi-5" class="bg-maroon font-cream" style="height: 100vh; border-top: 5px solid #ffe6be" data-aos="fade-up">
    <div class="d-flex justify-content-center align-items-center">
        <div class="p-5">
            <h5>Misi - 05</h5>
            <h1 class="text-misi">Continuous Pressure Group</h1>
            <p class="text-misi-sektor font-cream-sec mb-4">Sektor Pergerakan</p>
            <p class="text-misi-deskripsi m-0">Kelompok atau entitas yang secara terus-menerus memberikan tekanan atau advokasi untuk mengarahkan perubahan kebijakan, perilaku, atau sistem. Dalam konteks pergerakan, ini mencerminkan upaya konsisten untuk mendorong transformasi sosial atau politik.</p>
        </div>
    </div>
</section>

<style>
#visi {
    height: 100vh;
    background-image: url('image/bg-visi.png');
    background-size: cover;
    background-position: center;
    background-attachment: fixed;
    padding-top: 80px;
}
.text-misi {
    letter-spacing: -1px;
    line-height: 0.9;
    font-weight: 800;
    font-style: italic;
    font-size: 50px;
}
.text-visi {
    letter-spacing: -1px;
    line-height: 0.9;
    font-weight: 700;
    font-size: 50px;
}
.text-misi-sektor {
    font-size: 20px;
    line-height: 1.2;
}
.text-misi-deskripsi {
    font-size: 20px;
    line-height: 1.2;
}
@media only screen and (max-width: 768px) {
    .text-visi { font-size: 40px; }
    .text-misi { font-size: 30px; }
}
</style>

<script>
function hapusElemen(className) {
  const elemen = document.querySelectorAll('.' + className);
  elemen.forEach(function(item) {
    item.classList.remove(className);
    item.remove();
  });
}

hapusElemen('vm-btn');
</script>