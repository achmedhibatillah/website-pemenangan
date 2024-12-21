<div class="mx-3" style="margin-top: 80px;">

<div class="row text-cream">

<div class="col-3 col-calon col-calon-card">
  <div class="d-flex justify-content-center align-items-center">
    <section data-aos="fade-in">
    <figure class="snip1336">
      <img class="calon-bg-foto" src="<?= base_url('image/' . $data['bg-foto'] . '.png') ?>" alt="sample87" />
      <figcaption>
        <img src="<?= base_url('image/' . $data['foto-square'] . '.png') ?>" alt="profile-sample4" class="profile" />
        <h2 style="line-height: 1;">
          <?= $data['nama'] ?>
          <span class="fst-italic mt-3" style="color: #ffe6be;">
            <?= $data['prodi'] ?>
          </span>
        </h2>
        <table class="mt-3 font-cream-sec">
          <tr>
            <td class="d-flex align-items-top" style="width: 20px; height: 20px;"><img src="<?= base_url('image/quote.png') ?>" alt=""></td>
            <td class="ps-2" style="line-height: 15px; letter-spacing: 0px;"><?= $data['deskripsi'] ?></td>
          </tr>
        </table>
        <div class="mt-3">
          <a href="<?= $data['instagram'] ?>" target="_blank" class="font-cream" style="text-decoration: none;">
              <i class="fab fa-instagram"></i> | Instagram
          </a>
          <a href="<?= $data['linkedin'] ?>" target="_blank" class="font-cream" style="text-decoration: none;">
              <i class="fab fa-linkedin-in"></i> | Linkedin
          </a>
        </div>
      </figcaption>
    </figure>
    </section>
  </div>
</div>

<div class="col-9 col-calon">

<div class="card mb-3 card-quote" data-aos="fade-up"></div>

<div class="card bg-cream mb-3" data-aos="fade-up">
  <div class="card-title">
    <div class="card-title fw-bold" style="letter-spacing: -1px; background-color: #7f2324; color: #ffe6be !important; padding:20px; margin:5px; border-radius:5px;">
      <h3 style="margin-bottom: 0;">Prestasi</h3>
      <p style="margin-bottom: 0; font-weight: normal; letter-spacing: -0.3px;">Prestasi akademik dan non akademik yang pernah diraih.</p>
    </div>
  </div>
  <div class="card-body">
    <table style="width: 100%;">
      <thead>
          <tr style="border-bottom: 1px solid #7f2324;">
              <th class="p-1">No.</th>
              <th class="p-1">Prestasi</th>
              <th class="p-1">Tingkat</th>
              <th class="p-1">Tahun</th>
          </tr>
      </thead>
      <tbody>
          <?php $no = 1; foreach ($data['prestasi'] as $prestasi): ?>
          <tr style="border-bottom: 1px solid #d1bc9b;">
              <td class="p-1"><?= $no++ ?></td>
              <td class="p-1"><?= $prestasi['prestasi'] ?></td>
              <td class="p-1"><?= $prestasi['tingkat'] ?></td>
              <td class="p-1"><?= $prestasi['tahun'] ?></td>
          </tr>
          <?php endforeach; ?>
      </tbody>
  </table>
  </div>
</div>

<div class="card bg-cream mb-3" data-aos="fade-up">
  <div class="card-title">
    <div class="card-title fw-bold" style="letter-spacing: -1px; background-color: #7f2324; color: #ffe6be !important; padding:20px; margin:5px; border-radius:5px;">
      <h3 style="margin-bottom: 0;">Pengalaman Organisasi</h3>
    </div>
  </div>
  <div class="card-body">
    <table style="width: 100%;">
      <thead>
          <tr style="border-bottom: 1px solid #7f2324;">
              <th class="p-1">No.</th>
              <th class="p-1">Organisasi</th>
              <th class="p-1">Jabatan</th>
              <th class="p-1">Tahun</th>
          </tr>
      </thead>
      <tbody>
          <?php $no = 1; foreach ($data['pengalaman-organisasi'] as $organisasi): ?>
          <tr style="border-bottom: 1px solid #d1bc9b;">
              <td class="p-1"><?= $no++ ?></td>
              <td class="p-1"><?= $organisasi['organisasi'] ?></td>
              <td class="p-1"><?= $organisasi['jabatan'] ?></td>
              <td class="p-1"><?= $organisasi['tahun'] ?></td>
          </tr>
          <?php endforeach; ?>
      </tbody>
  </table>
  </div>
</div>

<div class="card bg-cream mb-3" data-aos="fade-up">
  <div class="card-title">
    <div class="card-title fw-bold" style="letter-spacing: -1px; background-color: #7f2324; color: #ffe6be !important; padding:20px; margin:5px; border-radius:5px;">
      <h3 style="margin-bottom: 0;">Pengalaman Kepanitiaan</h3>
    </div>
  </div>
  <div class="card-body">
    <table style="width: 100%;">
      <thead>
          <tr style="border-bottom: 1px solid #7f2324;">
              <th class="p-1">No.</th>
              <th class="p-1">Kepanitiaan</th>
              <th class="p-1">Jabatan</th>
              <th class="p-1">Tahun</th>
          </tr>
      </thead>
      <tbody>
          <?php $no = 1; foreach ($data['pengalaman-kepanitiaan'] as $kepanitiaan): ?>
          <tr style="border-bottom: 1px solid #d1bc9b;">
              <td class="p-1"><?= $no++ ?></td>
              <td class="p-1"><?= $kepanitiaan['kepanitiaan'] ?></td>
              <td class="p-1"><?= $kepanitiaan['jabatan'] ?></td>
              <td class="p-1"><?= $kepanitiaan['tahun'] ?></td>
          </tr>
          <?php endforeach; ?>
      </tbody>
  </table>
  </div>
</div>

</div>

</div>

</div>




<style>
.card-quote {
  background-image: url(<?= base_url('image/' . $data['quote-calon'] . '.png') ?>);
  height: 400px;
  background-size: cover;
  background-position: center center;
  border: none;
}
.snip1336 {
  position: relative;
  overflow: hidden;
  width: 310px;
  color: #ffe6be;
  text-align: left;
  line-height: 1.4em;
  background-color: #fff;
  border-radius: 10px;
  box-shadow: 3px 3px 5px rgba(0, 0, 0, 0.5);
}
.snip1336 * {
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
  -webkit-transition: all 0.25s ease;
  transition: all 0.25s ease;
}
.snip1336 img {
  max-width: 100%;
  height: auto;
  vertical-align: top;
}

img.calon-bg-foto {
  filter: brightness(50%);
}

.snip1336 figcaption {
  width: 100%;
  background-color: #7f2324;
  padding: 25px;
  position: relative;
}
.snip1336 figcaption:before {
  position: absolute;
  content: '';
  bottom: 100%;
  left: 0;
  width: 0;
  height: 0;
  border-style: solid;
  border-width: 55px 0 0 400px;
  border-color: transparent transparent transparent #7f2324;
}
.snip1336 figcaption a {
  padding: 5px;
  border: 1px solid #ffe6be;
  font-size: 0.7em;
  margin: 10px 0;
  display: inline-block;
  width: 47%;
  text-align: center;
  text-decoration: none;
  font-weight: 600;
  letter-spacing: 0;
}
.snip1336 figcaption a:hover {
  opacity: 1;
}
.snip1336 .profile {
  border-radius: 50%;
  position: absolute;
  bottom: 100%;
  left: 25px;
  z-index: 1;
  max-width: 90px;
  opacity: 1;
  box-shadow: 0 0 15px rgba(0, 0, 0, 0.3);
}
.snip1336 .follow {
  margin-right: 4%;
  border-color: #2980b9;
  color: #2980b9;
}
.snip1336 h2 {
  margin: 0 0 5px;
  font-weight: 300;
}
.snip1336 h2 span {
  display: block;
  font-size: 0.5em;
  color: #2980b9;
}
.snip1336 p {
  margin: 0 0 10px;
  font-size: 0.8em;
  letter-spacing: 1px;
  opacity: 0.8;
}
@media only screen and (max-width: 768px) {
  table {
    font-size: 14px;
  }
}
@media only screen and (max-width: 1024px) {

}
</style>

<script>
/* Demo purposes only */
$(".hover").mouseleave(
  function () {
    $(this).removeClass("hover");
  }
);

window.addEventListener("resize", handleResize);
window.addEventListener("load", handleResize);

window.addEventListener("resize", handleResize);
window.addEventListener("load", handleResize);

function handleResize() {
    if (window.innerWidth <= 768) {
        // Hapus class col-3 dan col-9 dari elemen col-calon
        document.querySelectorAll('.col-calon.col-3, .col-calon.col-9').forEach(element => {
            element.classList.remove('col-3', 'col-9');
        });

        // Hapus class p-1 dari elemen di dalam col-calon
        document.querySelectorAll('.col-calon .p-1').forEach(element => {
            element.classList.remove('p-1');
        });
    }
}

</script>