<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta required name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ env('APP_required NAME') }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container my-3">
        <div class="row mb-5">
            <div class="d-flex justify-content-between">
                <img height="150px" src="{{ asset('assets/img/rsup.png') }}">
                <img height="150px" src="{{ asset('assets/img/kgm.png') }}">
                <img height="150px" src="{{ asset('assets/img/ihc.png') }}">
            </div>
        </div>
        <p>Selam sehat dan salam sejahtera untuk pasien RSU Pekerja yang kami cintai Kami berterimakasih atas kepercayaannya untuk memilih RSU Pekerja sebagai tempat terbaik dan teman terpercaya dalam proses penyembuhan. Kami harap Bapak dan Ibu dapat turut serta mengisi survey kepuasan Berikut adalah link survey kepuasan yang dapat diisi oleh Bapak dan Ibu <br>
            <br>
            Klik Link berikut :
            <br>
            </p>
            <form id="myForm" method="POST" action="{{ url('/action') }}">
                @csrf
                <div class="card">
                    <div class="card-header bg-info text-white fw-bold">Dimensi Aksesibilitas</div>
                    <div class="card-body">
                        <span>Skala Penilaian</span><br>
                        <span>1 : Sangat Tidak Puas</span><br>
                        <span>2 : Tidak Puas</span><br>
                        <span>3 : Kurang Puas</span><br>
                        <span>4 : Puas</span><br>
                        <span>5 : Sangat Puas</span><br>
                    </div>
                </div>
                <div class="card mt-2">
                    <div class="card-body">
                        <p>1. Kemudahan memperoleh informasi terkait layanan Rumah Sakit</p>
                        <div class="form-check form-check-inline mx-4">
                            <input class="form-check-input bg-success" value="1" type="radio" required name="pertanyaan1">
                            <label class="form-check-label">1</label>
                        </div>
                        <div class="form-check form-check-inline mx-4">
                            <input class="form-check-input bg-success" value="2" type="radio" required name="pertanyaan1">
                            <label class="form-check-label">2</label>
                        </div>
                        <div class="form-check form-check-inline mx-4">
                            <input class="form-check-input bg-success" value="3" type="radio" required name="pertanyaan1">
                            <label class="form-check-label">3</label>
                        </div>
                        <div class="form-check form-check-inline mx-4">
                            <input class="form-check-input bg-success" value="4" type="radio" required name="pertanyaan1">
                            <label class="form-check-label">4</label>
                        </div>
                        <div class="form-check form-check-inline mx-4">
                            <input class="form-check-input bg-success" value="5" type="radio" required name="pertanyaan1">
                            <label class="form-check-label">5</label>
                        </div>
                    </div>
                </div>
                <div class="card mt-2">
                    <div class="card-body">
                        <p>2. Kemudahan melakukan pendaftaran (Langsung/online)</p>
                        <div class="form-check form-check-inline mx-4">
                            <input class="form-check-input bg-success" value="1" type="radio" required name="pertanyaan2">
                            <label class="form-check-label">1</label>
                        </div>
                        <div class="form-check form-check-inline mx-4">
                            <input class="form-check-input bg-success" value="2" type="radio" required name="pertanyaan2">
                            <label class="form-check-label">2</label>
                        </div>
                        <div class="form-check form-check-inline mx-4">
                            <input class="form-check-input bg-success" value="3" type="radio" required name="pertanyaan2">
                            <label class="form-check-label">3</label>
                        </div>
                        <div class="form-check form-check-inline mx-4">
                            <input class="form-check-input bg-success" value="4" type="radio" required name="pertanyaan2">
                            <label class="form-check-label">4</label>
                        </div>
                        <div class="form-check form-check-inline mx-4">
                            <input class="form-check-input bg-success" value="5" type="radio" required name="pertanyaan2">
                            <label class="form-check-label">5</label>
                        </div>
                    </div>
                </div>
                <div class="card mt-2">
                    <div class="card-body">
                        <p>3. Kecepatan antrian layanan pendaftaran</p>
                        <div class="form-check form-check-inline mx-4">
                            <input class="form-check-input bg-success" value="1" type="radio" required name="pertanyaan3">
                            <label class="form-check-label">1</label>
                        </div>
                        <div class="form-check form-check-inline mx-4">
                            <input class="form-check-input bg-success" value="2" type="radio" required name="pertanyaan3">
                            <label class="form-check-label">2</label>
                        </div>
                        <div class="form-check form-check-inline mx-4">
                            <input class="form-check-input bg-success" value="3" type="radio" required name="pertanyaan3">
                            <label class="form-check-label">3</label>
                        </div>
                        <div class="form-check form-check-inline mx-4">
                            <input class="form-check-input bg-success" value="4" type="radio" required name="pertanyaan3">
                            <label class="form-check-label">4</label>
                        </div>
                        <div class="form-check form-check-inline mx-4">
                            <input class="form-check-input bg-success" value="5" type="radio" required name="pertanyaan3">
                            <label class="form-check-label">5</label>
                        </div>
                    </div>
                </div>
                <div class="card mt-2">
                    <div class="card-body">
                        <p>4. Kemudahan proses mulai dari pendaftaran, layanan perawat, layanan perawat, layanan dokter, farmasi sampai kasir</p>
                        <div class="form-check form-check-inline mx-4">
                            <input class="form-check-input bg-success" value="1" type="radio" required name="pertanyaan4">
                            <label class="form-check-label">1</label>
                        </div>
                        <div class="form-check form-check-inline mx-4">
                            <input class="form-check-input bg-success" value="2" type="radio" required name="pertanyaan4">
                            <label class="form-check-label">2</label>
                        </div>
                        <div class="form-check form-check-inline mx-4">
                            <input class="form-check-input bg-success" value="3" type="radio" required name="pertanyaan4">
                            <label class="form-check-label">3</label>
                        </div>
                        <div class="form-check form-check-inline mx-4">
                            <input class="form-check-input bg-success" value="4" type="radio" required name="pertanyaan4">
                            <label class="form-check-label">4</label>
                        </div>
                        <div class="form-check form-check-inline mx-4">
                            <input class="form-check-input bg-success" value="5" type="radio" required name="pertanyaan4">
                            <label class="form-check-label">5</label>
                        </div>
                    </div>
                </div>
                <div class="card mt-2">
                    <div class="card-body">
                        <p>5. Kelengkapan fasilitas ruang tunggu pendaftaran (kursi tunggu, toilet, ruang laktasi, dan petunjuk arah)</p>
                        <div class="form-check form-check-inline mx-4">
                            <input class="form-check-input bg-success" value="1" type="radio" required name="pertanyaan5">
                            <label class="form-check-label">1</label>
                        </div>
                        <div class="form-check form-check-inline mx-4">
                            <input class="form-check-input bg-success" value="2" type="radio" required name="pertanyaan5">
                            <label class="form-check-label">2</label>
                        </div>
                        <div class="form-check form-check-inline mx-4">
                            <input class="form-check-input bg-success" value="3" type="radio" required name="pertanyaan5">
                            <label class="form-check-label">3</label>
                        </div>
                        <div class="form-check form-check-inline mx-4">
                            <input class="form-check-input bg-success" value="4" type="radio" required name="pertanyaan5">
                            <label class="form-check-label">4</label>
                        </div>
                        <div class="form-check form-check-inline mx-4">
                            <input class="form-check-input bg-success" value="5" type="radio" required name="pertanyaan5">
                            <label class="form-check-label">5</label>
                        </div>
                    </div>
                </div>
                <div class="card mt-2">
                    <div class="card-body">
                        <p>6. Kenyamanan ruang tunggu pendaftaran (kebersihan, suhu ruangan)</p>
                        <div class="form-check form-check-inline mx-4">
                            <input class="form-check-input bg-success" value="1" type="radio" required name="pertanyaan6">
                            <label class="form-check-label">1</label>
                        </div>
                        <div class="form-check form-check-inline mx-4">
                            <input class="form-check-input bg-success" value="2" type="radio" required name="pertanyaan6">
                            <label class="form-check-label">2</label>
                        </div>
                        <div class="form-check form-check-inline mx-4">
                            <input class="form-check-input bg-success" value="3" type="radio" required name="pertanyaan6">
                            <label class="form-check-label">3</label>
                        </div>
                        <div class="form-check form-check-inline mx-4">
                            <input class="form-check-input bg-success" value="4" type="radio" required name="pertanyaan6">
                            <label class="form-check-label">4</label>
                        </div>
                        <div class="form-check form-check-inline mx-4">
                            <input class="form-check-input bg-success" value="5" type="radio" required name="pertanyaan6">
                            <label class="form-check-label">5</label>
                        </div>
                    </div>
                </div>
                <div class="card mt-2">
                    <div class="card-body">
                        <p>7. Kejelasan petugas pendaftaran dalam memberikan informasi</p>
                        <div class="form-check form-check-inline mx-4">
                            <input class="form-check-input bg-success" value="1" type="radio" required name="pertanyaan7">
                            <label class="form-check-label">1</label>
                        </div>
                        <div class="form-check form-check-inline mx-4">
                            <input class="form-check-input bg-success" value="2" type="radio" required name="pertanyaan7">
                            <label class="form-check-label">2</label>
                        </div>
                        <div class="form-check form-check-inline mx-4">
                            <input class="form-check-input bg-success" value="3" type="radio" required name="pertanyaan7">
                            <label class="form-check-label">3</label>
                        </div>
                        <div class="form-check form-check-inline mx-4">
                            <input class="form-check-input bg-success" value="4" type="radio" required name="pertanyaan7">
                            <label class="form-check-label">4</label>
                        </div>
                        <div class="form-check form-check-inline mx-4">
                            <input class="form-check-input bg-success" value="5" type="radio" required name="pertanyaan7">
                            <label class="form-check-label">5</label>
                        </div>
                    </div>
                </div>
                <div class="card mt-2">
                    <div class="card-body">
                        <p>8. Keramahan petugas pendaftaran dalam melayani pasien</p>
                        <div class="form-check form-check-inline mx-4">
                            <input class="form-check-input bg-success" value="1" type="radio" required name="pertanyaan8">
                            <label class="form-check-label">1</label>
                        </div>
                        <div class="form-check form-check-inline mx-4">
                            <input class="form-check-input bg-success" value="2" type="radio" required name="pertanyaan8">
                            <label class="form-check-label">2</label>
                        </div>
                        <div class="form-check form-check-inline mx-4">
                            <input class="form-check-input bg-success" value="3" type="radio" required name="pertanyaan8">
                            <label class="form-check-label">3</label>
                        </div>
                        <div class="form-check form-check-inline mx-4">
                            <input class="form-check-input bg-success" value="4" type="radio" required name="pertanyaan8">
                            <label class="form-check-label">4</label>
                        </div>
                        <div class="form-check form-check-inline mx-4">
                            <input class="form-check-input bg-success" value="5" type="radio" required name="pertanyaan8">
                            <label class="form-check-label">5</label>
                        </div>
                    </div>
                </div>
                <div class="card mt-2">
                    <div class="card-body">
                        <p>9. Kecepatan antrian layanan poliklinik</p>
                        <div class="form-check form-check-inline mx-4">
                            <input class="form-check-input bg-success" value="1" type="radio" required name="pertanyaan9">
                            <label class="form-check-label">1</label>
                        </div>
                        <div class="form-check form-check-inline mx-4">
                            <input class="form-check-input bg-success" value="2" type="radio" required name="pertanyaan9">
                            <label class="form-check-label">2</label>
                        </div>
                        <div class="form-check form-check-inline mx-4">
                            <input class="form-check-input bg-success" value="3" type="radio" required name="pertanyaan9">
                            <label class="form-check-label">3</label>
                        </div>
                        <div class="form-check form-check-inline mx-4">
                            <input class="form-check-input bg-success" value="4" type="radio" required name="pertanyaan9">
                            <label class="form-check-label">4</label>
                        </div>
                        <div class="form-check form-check-inline mx-4">
                            <input class="form-check-input bg-success" value="5" type="radio" required name="pertanyaan9">
                            <label class="form-check-label">5</label>
                        </div>
                    </div>
                </div>
                <div class="card mt-2">
                    <div class="card-body">
                        <p>10. Ketepatan jadwal praktik dokter di poliklinik</p>
                        <div class="form-check form-check-inline mx-4">
                            <input class="form-check-input bg-success" value="1" type="radio" required name="pertanyaan10">
                            <label class="form-check-label">1</label>
                        </div>
                        <div class="form-check form-check-inline mx-4">
                            <input class="form-check-input bg-success" value="2" type="radio" required name="pertanyaan10">
                            <label class="form-check-label">2</label>
                        </div>
                        <div class="form-check form-check-inline mx-4">
                            <input class="form-check-input bg-success" value="3" type="radio" required name="pertanyaan10">
                            <label class="form-check-label">3</label>
                        </div>
                        <div class="form-check form-check-inline mx-4">
                            <input class="form-check-input bg-success" value="4" type="radio" required name="pertanyaan10">
                            <label class="form-check-label">4</label>
                        </div>
                        <div class="form-check form-check-inline mx-4">
                            <input class="form-check-input bg-success" value="5" type="radio" required name="pertanyaan10">
                            <label class="form-check-label">5</label>
                        </div>
                    </div>
                </div>
                <div class="card mt-2">
                    <div class="card-body">
                        <p>11. Kelengkapan fasilitas ruang tunggu poliklinik (kursi tunggu, toilet, dan petunjuk arah)</p>
                        <div class="form-check form-check-inline mx-4">
                            <input class="form-check-input bg-success" value="1" type="radio" required name="pertanyaan11">
                            <label class="form-check-label">1</label>
                        </div>
                        <div class="form-check form-check-inline mx-4">
                            <input class="form-check-input bg-success" value="2" type="radio" required name="pertanyaan11">
                            <label class="form-check-label">2</label>
                        </div>
                        <div class="form-check form-check-inline mx-4">
                            <input class="form-check-input bg-success" value="3" type="radio" required name="pertanyaan11">
                            <label class="form-check-label">3</label>
                        </div>
                        <div class="form-check form-check-inline mx-4">
                            <input class="form-check-input bg-success" value="4" type="radio" required name="pertanyaan11">
                            <label class="form-check-label">4</label>
                        </div>
                        <div class="form-check form-check-inline mx-4">
                            <input class="form-check-input bg-success" value="5" type="radio" required name="pertanyaan11">
                            <label class="form-check-label">5</label>
                        </div>
                    </div>
                </div>
                <div class="card mt-2">
                    <div class="card-body">
                        <p>12. Kenyamanan ruang tunggu poliklinik (kebersihan, suhu ruangan)</p>
                        <div class="form-check form-check-inline mx-4">
                            <input class="form-check-input bg-success" value="1" type="radio" required name="pertanyaan12">
                            <label class="form-check-label">1</label>
                        </div>
                        <div class="form-check form-check-inline mx-4">
                            <input class="form-check-input bg-success" value="2" type="radio" required name="pertanyaan12">
                            <label class="form-check-label">2</label>
                        </div>
                        <div class="form-check form-check-inline mx-4">
                            <input class="form-check-input bg-success" value="3" type="radio" required name="pertanyaan12">
                            <label class="form-check-label">3</label>
                        </div>
                        <div class="form-check form-check-inline mx-4">
                            <input class="form-check-input bg-success" value="4" type="radio" required name="pertanyaan12">
                            <label class="form-check-label">4</label>
                        </div>
                        <div class="form-check form-check-inline mx-4">
                            <input class="form-check-input bg-success" value="5" type="radio" required name="pertanyaan12">
                            <label class="form-check-label">5</label>
                        </div>
                    </div>
                </div>
                <div class="card mt-2">
                    <div class="card-body">
                        <p>13. Kejelasan petugas poliklinik dalam memberikan informasi</p>
                        <div class="form-check form-check-inline mx-4">
                            <input class="form-check-input bg-success" value="1" type="radio" required name="pertanyaan13">
                            <label class="form-check-label">1</label>
                        </div>
                        <div class="form-check form-check-inline mx-4">
                            <input class="form-check-input bg-success" value="2" type="radio" required name="pertanyaan13">
                            <label class="form-check-label">2</label>
                        </div>
                        <div class="form-check form-check-inline mx-4">
                            <input class="form-check-input bg-success" value="3" type="radio" required name="pertanyaan13">
                            <label class="form-check-label">3</label>
                        </div>
                        <div class="form-check form-check-inline mx-4">
                            <input class="form-check-input bg-success" value="4" type="radio" required name="pertanyaan13">
                            <label class="form-check-label">4</label>
                        </div>
                        <div class="form-check form-check-inline mx-4">
                            <input class="form-check-input bg-success" value="5" type="radio" required name="pertanyaan13">
                            <label class="form-check-label">5</label>
                        </div>
                    </div>
                </div>
                <div class="card mt-2">
                    <div class="card-body">
                        <p>14. Keramahan petugas poliklinik dalam melayani pasien</p>
                        <div class="form-check form-check-inline mx-4">
                            <input class="form-check-input bg-success" value="1" type="radio" required name="pertanyaan14">
                            <label class="form-check-label">1</label>
                        </div>
                        <div class="form-check form-check-inline mx-4">
                            <input class="form-check-input bg-success" value="2" type="radio" required name="pertanyaan14">
                            <label class="form-check-label">2</label>
                        </div>
                        <div class="form-check form-check-inline mx-4">
                            <input class="form-check-input bg-success" value="3" type="radio" required name="pertanyaan14">
                            <label class="form-check-label">3</label>
                        </div>
                        <div class="form-check form-check-inline mx-4">
                            <input class="form-check-input bg-success" value="4" type="radio" required name="pertanyaan14">
                            <label class="form-check-label">4</label>
                        </div>
                        <div class="form-check form-check-inline mx-4">
                            <input class="form-check-input bg-success" value="5" type="radio" required name="pertanyaan14">
                            <label class="form-check-label">5</label>
                        </div>
                    </div>
                </div>
                <div class="card mt-2">
                    <div class="card-body">
                        <p>15. Kejelasan dokter dalam memberikan informasi terkait penyakit pasien</p>
                        <div class="form-check form-check-inline mx-4">
                            <input class="form-check-input bg-success" value="1" type="radio" required name="pertanyaan15">
                            <label class="form-check-label">1</label>
                        </div>
                        <div class="form-check form-check-inline mx-4">
                            <input class="form-check-input bg-success" value="2" type="radio" required name="pertanyaan15">
                            <label class="form-check-label">2</label>
                        </div>
                        <div class="form-check form-check-inline mx-4">
                            <input class="form-check-input bg-success" value="3" type="radio" required name="pertanyaan15">
                            <label class="form-check-label">3</label>
                        </div>
                        <div class="form-check form-check-inline mx-4">
                            <input class="form-check-input bg-success" value="4" type="radio" required name="pertanyaan15">
                            <label class="form-check-label">4</label>
                        </div>
                        <div class="form-check form-check-inline mx-4">
                            <input class="form-check-input bg-success" value="5" type="radio" required name="pertanyaan15">
                            <label class="form-check-label">5</label>
                        </div>
                    </div>
                </div>
                <div class="card mt-2">
                    <div class="card-body">
                        <p>16. Kecepatan antrian layanan Farmasi/Apotik</p>
                        <div class="form-check form-check-inline mx-4">
                            <input class="form-check-input bg-success" value="1" type="radio" required name="pertanyaan16">
                            <label class="form-check-label">1</label>
                        </div>
                        <div class="form-check form-check-inline mx-4">
                            <input class="form-check-input bg-success" value="2" type="radio" required name="pertanyaan16">
                            <label class="form-check-label">2</label>
                        </div>
                        <div class="form-check form-check-inline mx-4">
                            <input class="form-check-input bg-success" value="3" type="radio" required name="pertanyaan16">
                            <label class="form-check-label">3</label>
                        </div>
                        <div class="form-check form-check-inline mx-4">
                            <input class="form-check-input bg-success" value="4" type="radio" required name="pertanyaan16">
                            <label class="form-check-label">4</label>
                        </div>
                        <div class="form-check form-check-inline mx-4">
                            <input class="form-check-input bg-success" value="5" type="radio" required name="pertanyaan16">
                            <label class="form-check-label">5</label>
                        </div>
                    </div>
                </div>
                <div class="card mt-2">
                    <div class="card-body">
                        <p>17. Kelengkapan fasilitas ruang tunggu farmasi/apotik (kursi tunggu, toilet, dan petunjuk arah)</p>
                        <div class="form-check form-check-inline mx-4">
                            <input class="form-check-input bg-success" value="1" type="radio" required name="pertanyaan17">
                            <label class="form-check-label">1</label>
                        </div>
                        <div class="form-check form-check-inline mx-4">
                            <input class="form-check-input bg-success" value="2" type="radio" required name="pertanyaan17">
                            <label class="form-check-label">2</label>
                        </div>
                        <div class="form-check form-check-inline mx-4">
                            <input class="form-check-input bg-success" value="3" type="radio" required name="pertanyaan17">
                            <label class="form-check-label">3</label>
                        </div>
                        <div class="form-check form-check-inline mx-4">
                            <input class="form-check-input bg-success" value="4" type="radio" required name="pertanyaan17">
                            <label class="form-check-label">4</label>
                        </div>
                        <div class="form-check form-check-inline mx-4">
                            <input class="form-check-input bg-success" value="5" type="radio" required name="pertanyaan17">
                            <label class="form-check-label">5</label>
                        </div>
                    </div>
                </div>
                <div class="card mt-2">
                    <div class="card-body">
                        <p>18. Kenyamanan ruang tunggu farmasi/apotik (kebersihan, suhu ruangan)</p>
                        <div class="form-check form-check-inline mx-4">
                            <input class="form-check-input bg-success" value="1" type="radio" required name="pertanyaan18">
                            <label class="form-check-label">1</label>
                        </div>
                        <div class="form-check form-check-inline mx-4">
                            <input class="form-check-input bg-success" value="2" type="radio" required name="pertanyaan18">
                            <label class="form-check-label">2</label>
                        </div>
                        <div class="form-check form-check-inline mx-4">
                            <input class="form-check-input bg-success" value="3" type="radio" required name="pertanyaan18">
                            <label class="form-check-label">3</label>
                        </div>
                        <div class="form-check form-check-inline mx-4">
                            <input class="form-check-input bg-success" value="4" type="radio" required name="pertanyaan18">
                            <label class="form-check-label">4</label>
                        </div>
                        <div class="form-check form-check-inline mx-4">
                            <input class="form-check-input bg-success" value="5" type="radio" required name="pertanyaan18">
                            <label class="form-check-label">5</label>
                        </div>
                    </div>
                </div>
                <div class="card mt-2">
                    <div class="card-body">
                        <p>19. Kejelasan petugas/apoteker dalam memberikan informasi penggunaan obat</p>
                        <div class="form-check form-check-inline mx-4">
                            <input class="form-check-input bg-success" value="1" type="radio" required name="pertanyaan19">
                            <label class="form-check-label">1</label>
                        </div>
                        <div class="form-check form-check-inline mx-4">
                            <input class="form-check-input bg-success" value="2" type="radio" required name="pertanyaan19">
                            <label class="form-check-label">2</label>
                        </div>
                        <div class="form-check form-check-inline mx-4">
                            <input class="form-check-input bg-success" value="3" type="radio" required name="pertanyaan19">
                            <label class="form-check-label">3</label>
                        </div>
                        <div class="form-check form-check-inline mx-4">
                            <input class="form-check-input bg-success" value="4" type="radio" required name="pertanyaan19">
                            <label class="form-check-label">4</label>
                        </div>
                        <div class="form-check form-check-inline mx-4">
                            <input class="form-check-input bg-success" value="5" type="radio" required name="pertanyaan19">
                            <label class="form-check-label">5</label>
                        </div>
                    </div>
                </div>
                <div class="card mt-2">
                    <div class="card-body">
                        <p>20. Kesesuaian Jenis dan jumlah obat yang diberikan dengan obat yang diresepkan</p>
                        <div class="form-check form-check-inline mx-4">
                            <input class="form-check-input bg-success" value="1" type="radio" required name="pertanyaan20">
                            <label class="form-check-label">1</label>
                        </div>
                        <div class="form-check form-check-inline mx-4">
                            <input class="form-check-input bg-success" value="2" type="radio" required name="pertanyaan20">
                            <label class="form-check-label">2</label>
                        </div>
                        <div class="form-check form-check-inline mx-4">
                            <input class="form-check-input bg-success" value="3" type="radio" required name="pertanyaan20">
                            <label class="form-check-label">3</label>
                        </div>
                        <div class="form-check form-check-inline mx-4">
                            <input class="form-check-input bg-success" value="4" type="radio" required name="pertanyaan20">
                            <label class="form-check-label">4</label>
                        </div>
                        <div class="form-check form-check-inline mx-4">
                            <input class="form-check-input bg-success" value="5" type="radio" required name="pertanyaan20">
                            <label class="form-check-label">5</label>
                        </div>
                    </div>
                </div>
                <div class="card mt-2">
                    <div class="card-body">
                        <p>21. Keramahan petugas apoteker dalam melayani pasien</p>
                        <div class="form-check form-check-inline mx-4">
                            <input class="form-check-input bg-success" value="1" type="radio" required name="pertanyaan21">
                            <label class="form-check-label">1</label>
                        </div>
                        <div class="form-check form-check-inline mx-4">
                            <input class="form-check-input bg-success" value="2" type="radio" required name="pertanyaan21">
                            <label class="form-check-label">2</label>
                        </div>
                        <div class="form-check form-check-inline mx-4">
                            <input class="form-check-input bg-success" value="3" type="radio" required name="pertanyaan21">
                            <label class="form-check-label">3</label>
                        </div>
                        <div class="form-check form-check-inline mx-4">
                            <input class="form-check-input bg-success" value="4" type="radio" required name="pertanyaan21">
                            <label class="form-check-label">4</label>
                        </div>
                        <div class="form-check form-check-inline mx-4">
                            <input class="form-check-input bg-success" value="5" type="radio" required name="pertanyaan21">
                            <label class="form-check-label">5</label>
                        </div>
                    </div>
                </div>
                <div class="card mt-2">
                    <div class="card-body">
                        <p>22. Pengetahuan petugas tentang produk dan layanan</p>
                        <div class="form-check form-check-inline mx-4">
                            <input class="form-check-input bg-success" value="1" type="radio" required name="pertanyaan22">
                            <label class="form-check-label">1</label>
                        </div>
                        <div class="form-check form-check-inline mx-4">
                            <input class="form-check-input bg-success" value="2" type="radio" required name="pertanyaan22">
                            <label class="form-check-label">2</label>
                        </div>
                        <div class="form-check form-check-inline mx-4">
                            <input class="form-check-input bg-success" value="3" type="radio" required name="pertanyaan22">
                            <label class="form-check-label">3</label>
                        </div>
                        <div class="form-check form-check-inline mx-4">
                            <input class="form-check-input bg-success" value="4" type="radio" required name="pertanyaan22">
                            <label class="form-check-label">4</label>
                        </div>
                        <div class="form-check form-check-inline mx-4">
                            <input class="form-check-input bg-success" value="5" type="radio" required name="pertanyaan22">
                            <label class="form-check-label">5</label>
                        </div>
                    </div>
                </div>
                <div class="card mt-2">
                    <div class="card-body">
                        <p>23. Kepedulian petugas pendaftaran dalam melayani pasien</p>
                        <div class="form-check form-check-inline mx-4">
                            <input class="form-check-input bg-success" value="1" type="radio" required name="pertanyaan23">
                            <label class="form-check-label">1</label>
                        </div>
                        <div class="form-check form-check-inline mx-4">
                            <input class="form-check-input bg-success" value="2" type="radio" required name="pertanyaan23">
                            <label class="form-check-label">2</label>
                        </div>
                        <div class="form-check form-check-inline mx-4">
                            <input class="form-check-input bg-success" value="3" type="radio" required name="pertanyaan23">
                            <label class="form-check-label">3</label>
                        </div>
                        <div class="form-check form-check-inline mx-4">
                            <input class="form-check-input bg-success" value="4" type="radio" required name="pertanyaan23">
                            <label class="form-check-label">4</label>
                        </div>
                        <div class="form-check form-check-inline mx-4">
                            <input class="form-check-input bg-success" value="5" type="radio" required name="pertanyaan23">
                            <label class="form-check-label">5</label>
                        </div>
                    </div>
                </div>
                <div class="card mt-2">
                    <div class="card-body">
                        <p>24. Kepedulian petugas poliklinik dalam melayani pasien</p>
                        <div class="form-check form-check-inline mx-4">
                            <input class="form-check-input bg-success" value="1" type="radio" required name="pertanyaan24">
                            <label class="form-check-label">1</label>
                        </div>
                        <div class="form-check form-check-inline mx-4">
                            <input class="form-check-input bg-success" value="2" type="radio" required name="pertanyaan24">
                            <label class="form-check-label">2</label>
                        </div>
                        <div class="form-check form-check-inline mx-4">
                            <input class="form-check-input bg-success" value="3" type="radio" required name="pertanyaan24">
                            <label class="form-check-label">3</label>
                        </div>
                        <div class="form-check form-check-inline mx-4">
                            <input class="form-check-input bg-success" value="4" type="radio" required name="pertanyaan24">
                            <label class="form-check-label">4</label>
                        </div>
                        <div class="form-check form-check-inline mx-4">
                            <input class="form-check-input bg-success" value="5" type="radio" required name="pertanyaan24">
                            <label class="form-check-label">5</label>
                        </div>
                    </div>
                </div>
                <div class="card mt-2">
                    <div class="card-body">
                        <p>25. Kepedulian petugas apoteker dalam melayani pasien</p>
                        <div class="form-check form-check-inline mx-4">
                            <input class="form-check-input bg-success" value="1" type="radio" required name="pertanyaan25">
                            <label class="form-check-label">1</label>
                        </div>
                        <div class="form-check form-check-inline mx-4">
                            <input class="form-check-input bg-success" value="2" type="radio" required name="pertanyaan25">
                            <label class="form-check-label">2</label>
                        </div>
                        <div class="form-check form-check-inline mx-4">
                            <input class="form-check-input bg-success" value="3" type="radio" required name="pertanyaan25">
                            <label class="form-check-label">3</label>
                        </div>
                        <div class="form-check form-check-inline mx-4">
                            <input class="form-check-input bg-success" value="4" type="radio" required name="pertanyaan25">
                            <label class="form-check-label">4</label>
                        </div>
                        <div class="form-check form-check-inline mx-4">
                            <input class="form-check-input bg-success" value="5" type="radio" required name="pertanyaan25">
                            <label class="form-check-label">5</label>
                        </div>
                    </div>
                </div>
                {{-- <button class="btn btn-primary" onclick="klik()">KIRIM</button> --}}
                <center class="mt-2">
                    <button class="btn btn-primary" type="submit">KIRIM</button>
                </center>
            </form>
        
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        function notif() {
            Swal.fire({
                position: 'top',
                icon: "success",
                title: "Terimakasih",
                text: "atas partisipasi Bapak dan Ibu dalam pengisian survey kepuasan kami. Kritik dan saran dari Bapak dan Ibu sangat berharga untuk kami demi memaksimalkan pelayanan kesehatan kami.",
                showConfirmButton: false,
                timer: 20000
            })
            document.getElementById("myForm").reset();
        }

        
        // function klik() {
        //     $.ajax({
        //         type: 'post',
        //         url: "{{ route('tulip.action') }}/",
        //         // data:{'id':id}, 
        //         success: function(tampil) {
        //             setTimeout(notif, 1000);
        //             // console.log(tampil); 
        //             // $('#tampildata').html(tampil);
        //             // $('#editModal').modal('show');
        //         }
        //     })
        // }
    </script>
    @if(Session::has('success'))
        <script>
            setTimeout(notif, 1000);
        </script>
    @endif

</body>

</html>
