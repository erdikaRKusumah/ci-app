<div class="container">
    <div class="row mt-3">
    <div class="card">
        <div class="card-header">
        Form Tambah Data Mahasiswa
        </div>
        <div class="card-body">
        <form action="" method="post">
            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama" >
                <small id="emailHelp" class="form-text text-danger"><?= form_error('nama');?></small>
            </div>
            <div class="form-group">
                <label for="nrp">NRP</label>
                <input type="text" class="form-control" id="nrp" name="nrp" >
                <small id="emailHelp" class="form-text text-danger"><?= form_error('nrp');?></small>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" >
                <small id="emailHelp" class="form-text text-danger"><?= form_error('email');?></small>
            </div>
            <div class="form-group">
                <label for="jurusan">Jurusan</label>
                <select class="form-control" name="jurusan" id="jurusan" name="jurusan">
                    <option value="Teknik Industri">301 - Teknik Industri</option>
                    <option value="Teknologi Pangan">302 - Teknologi Pangan</option>
                    <option value="Teknik Mesin">303 - Teknik Mesin</option>
                    <option value="Teknik Informatika">304 - Teknik Informatika</option>
                    <option value="Teknik Lingkungan">305 - Teknik Lingkungan</option>
                    <option value="Teknik Perencanaa & Wilayah Kota">306 - Teknik Perencanaa & Wilayah Kota</option>
                </select>
            </div>
            <button type="submit" name="tambah" class="btn btn-outline-primary float-right">
            Tambah Data
            </button>
        </form>
        <br>
        </div>
        </div>
    </div>
</div>