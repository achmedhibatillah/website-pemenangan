<div data-aos="fade-in">

    <h1 class="font-maroon mx-3" style="margin-top: 80px; letter-spacing: -1.5px;">Halo Kawan <i style="color: #ee7600;"><b>Jingga</b></i>!</h1>
    <p class="font-maroon-secondary mx-3" style="margin-top: -10px;">Bantu beri saran untuk FISIP UB yang lebih baik.</p>

    <form action="submit-aspirasi" method="post" class="form-maroon mx-2">
        <?= csrf_field(); ?>

        <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama" style="background-color:rgb(255, 245, 228);" placeholder="...">
            <div class="mb-3">
            <label for="noNama" class="form-label">
                <input type="checkbox" id="noNama" style="cursor: pointer;"><i class="form-checkbox-text"> Saya tidak ingin menyertakan nama.</i>
            </label>
        </div>
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="text" class="form-control" id="email" name="email" style="background-color:rgb(255, 245, 228);" placeholder="...">
            <div class="mb-3">
            <label for="noEmail" class="form-label">
                <input type="checkbox" id="noEmail" style="cursor: pointer;"><i class="form-checkbox-text"> Saya tidak ingin menyertakan email.</i>
            </label>
        </div>
        </div>

        <div class="mb-3">
            <label for="programStudi" class="form-label">Program Studi</label>
            <select class="form-control" id="programStudi" name="programStudi" style="background-color:rgb(255, 245, 228); max-width: 200px; cursor: pointer;">
                <option value=""><p class="text-secondary">Pilih program studi ...</p></option>
                <option value="HubunganInternasional">Hubungan Internasional</option>
                <option value="IlmuPemerintahan">Ilmu Pemerintahan</option>
                <option value="IlmuPolitik">Ilmu Politik</option>
                <option value="IlmuKomunikasi">Ilmu Komunikasi</option>
                <option value="Psikologi">Psikologi</option>
                <option value="Sosiologi">Sosiologi</option>
            </select>
        </div>

        <div class="mb-3 form-textarea">
            <label for="saran" class="form-label">Apa aspirasimu untuk FISIP?</label>
            <textarea name="saran" id="saran" class="p-1" style="background-color:rgb(255, 245, 228); width: 100%; height: 100px; border: 1px solid rgb(219, 196, 196); border-radius: 10px;" placeholder=" ..."></textarea>
        </div>

        <button type="submit" class="btn btn-maroon">Kirim <i class="fas fa-paper-plane ms-2"></i></button>
    </form>

</div>

<style>
#nama, #email {
    transition: background-color 0.7s ease;
}
.form-checkbox-text {
  color:rgb(90, 90, 90) !important;
  font-size: 13px;
  font-style: normal !important;
}
.form-maroon {
    color: #7f2324;
    padding: 2%;
    border-radius: 20px;
    border: 1px solid #7f2324;
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

const namaInput = document.getElementById('nama');
const noNamaCheckbox = document.getElementById('noNama');

noNamaCheckbox.addEventListener('change', function() {
  if (this.checked) {
    namaInput.disabled = true;
    namaInput.value = '-';
    namaInput.placeholder = 'Tanpa nama';
    namaInput.style.backgroundColor = '#e0e0e0';
  } else {
    namaInput.disabled = false;
    namaInput.value = '';
    namaInput.placeholder = '...';
    namaInput.style.backgroundColor = '';
  }
});

const emailInput = document.getElementById('email');
const noEmailCheckbox = document.getElementById('noEmail');

noEmailCheckbox.addEventListener('change', function() {
  if (this.checked) {
    emailInput.disabled = true;
    emailInput.value = '-';
    emailInput.placeholder = 'Tanpa email';
    emailInput.style.backgroundColor = '#e0e0e0';
  } else {
    emailInput.disabled = false;
    emailInput.value = '';
    emailInput.placeholder = '...';
    emailInput.style.backgroundColor = '';
  }
});

const form = document.querySelector('form');
form.addEventListener('submit', function(event) {
  event.preventDefault();

  const nama = document.getElementById('nama').value;
  const email = emailInput.value;
  const programStudi = document.getElementById('programStudi').value;
  const saran = document.getElementById('saran').value;

  if (nama !== '-' && (!nama)) {
    Swal.fire({
      icon: 'error',
      title: 'Kesalahan',
      text: 'Nama yang Anda masukkan tidak boleh kosong! Silakan klik checkbox di bawah baris input nama jika tidak ingin menyertakan nama.',
    });
    return;
  }

  if (email !== '-' && (!email || !validateEmail(email))) {
    Swal.fire({
      icon: 'error',
      title: 'Kesalahan',
      text: 'Email yang Anda masukkan tidak valid! Silakan klik checkbox di bawah baris input email jika tidak ingin menyertakan email.',
    });
    return;
  }

  if (!programStudi) {
    Swal.fire({
      icon: 'error',
      title: 'Kesalahan',
      text: 'Program studi harus dipilih!',
    });
    return;
  }

  if (!saran || saran.length < 5) {
    Swal.fire({
      icon: 'error',
      title: 'Kesalahan',
      text: 'Aspirasi tidak boleh kosong dan harus lebih dari 5 karakter!',
    });
    return;
  }

  Swal.fire({
    title: 'Apakah Anda yakin?',
    text: 'Pastikan semua informasi yang Anda masukkan sudah benar.',
    icon: 'warning',
    showCancelButton: true,
    confirmButtonText: 'Kirim',
    cancelButtonText: 'Batal',
    reverseButtons: true,
  }).then((result) => {
    if (result.isConfirmed) {
      Swal.fire({
        icon: 'success',
        title: 'Berhasil!',
        text: 'Aspirasi Anda telah berhasil dikirim!',
      });

      form.submit();
    }
  });
});

function validateEmail(email) {
  const re = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
  return re.test(email);
}
</script>

