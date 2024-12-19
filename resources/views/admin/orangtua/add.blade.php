@extends('admin/template_admin/main')

@section('template_styles_admin')
@endsection

@section('content_admin')
    <div class="container-fluid">

        <div class="py-3 d-flex align-items-sm-center flex-sm-row flex-column">
            <div class="flex-grow-1">
                <h4 class="fs-18 fw-semibold m-0">Tambah</h4>
            </div>

            <div class="text-end">
                <ol class="breadcrumb m-0 py-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Admin</a></li>
                    <li class="breadcrumb-item active">Tambah Monitoring</li>
                </ol>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="card">

                    <div class="card-header">
                        <h5 class="card-title mb-0">Monitoring Kesehatan Anak</h5>
                    </div>

                    <div class="card-body">
                        <div class="row">
                            <div class="mb-3 col-md-6 col-lg-6">
                                <label for="nama-anak" class="form-label">Nama Anak</label>
                                <input type="text" id="nama-anak" name="nama-anak" class="form-control"
                                    placeholder="Masukkan nama anak">
                            </div>
                            <div class="mb-3 col-md-6 col-lg-6">
                                <label for="tanggal-lahir" class="form-label">Tanggal Lahir</label>
                                <input type="date" id="tanggal-lahir" name="tanggal-lahir" class="form-control">
                            </div>
                            <div class="mb-3 col-md-6 col-lg-6">
                                <label for="jenis-kelamin" class="form-label">Jenis Kelamin</label>
                                <select id="jenis-kelamin" name="jenis-kelamin" class="form-control">
                                    <option value="" selected disabled>Pilih jenis kelamin</option>
                                    <option value="Laki-laki">Laki-laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                </select>
                            </div>
                            <div class="mb-3 col-md-6 col-lg-6">
                                <label for="berat-badan" class="form-label">Berat Badan (kg)</label>
                                <input type="number" id="berat-badan" name="berat-badan" class="form-control"
                                    placeholder="Masukkan berat badan">
                            </div>
                            <div class="mb-3 col-md-6 col-lg-6">
                                <label for="tinggi-badan" class="form-label">Tinggi Badan (cm)</label>
                                <input type="number" id="tinggi-badan" name="tinggi-badan" class="form-control"
                                    placeholder="Masukkan tinggi badan">
                            </div>
                            <div class="mb-3 col-md-6 col-lg-6">
                                <label for="lingkar-kepala" class="form-label">Lingkar Kepala (cm)</label>
                                <input type="number" id="lingkar-kepala" name="lingkar-kepala" class="form-control"
                                    placeholder="Masukkan lingkar kepala">
                            </div>
                            <div class="mb-3 col-md-6 col-lg-6">
                                <label for="status-imunisasi" class="form-label">Status Imunisasi</label>
                                <select id="status-imunisasi" name="status-imunisasi" class="form-control">
                                    <option value="" selected disabled>Pilih status imunisasi</option>
                                    <option value="Lengkap">Lengkap</option>
                                    <option value="Tidak Lengkap">Tidak Lengkap</option>
                                </select>
                            </div>
                            <div class="mb-3 col-md-6 col-lg-6">
                                <label for="foto-anak" class="form-label">Upload Foto Anak</label>
                                <input type="file" id="foto-anak" name="foto-anak" class="form-control">
                            </div>
                            <div class="mb-3 col-md-6 col-lg-6">
                                <label for="kondisi-kesehatan" class="form-label">Kondisi Kesehatan</label>
                                <textarea id="kondisi-kesehatan" name="kondisi-kesehatan" class="form-control" rows="3"
                                    placeholder="Masukkan kondisi kesehatan"></textarea>
                            </div>
                            <div class="mb-3 col-md-6 col-lg-6">
                                <label for="riwayat-gizi" class="form-label">Riwayat Konsumsi Gizi</label>
                                <textarea id="riwayat-gizi" name="riwayat-gizi" class="form-control" rows="3"
                                    placeholder="Masukkan riwayat konsumsi gizi"></textarea>
                            </div>
                            <div class="mb-3 col-md-6 col-lg-6">
                                <label for="pertanyaan" class="form-label">Pertanyaan untuk Tenaga Medis</label>
                                <textarea id="pertanyaan" name="pertanyaan" class="form-control" rows="3" placeholder="Masukkan pertanyaan"></textarea>
                            </div>
                        </div>
                        <div class="text-end">
                            <a href="{{ url('/orangtua/monitoring') }}"><button type="submit" class="btn btn-info">Kembali</button></a>
                            <button type="submit" class="btn btn-primary">Kirim</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('template_scripts_admin')
@endsection
