<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ env('APP_NAME') }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .card {
            background-color: #d4d4d4;
        }
    </style>
</head>

<body>
    <div class="container my-3">
        <div class="row mb-3">
            <div class="d-flex justify-content-between">
                <img width="30%" src="{{ asset('assets/img/rsup.png') }}">
                <img width="30%" src="{{ asset('assets/img/kgm.png') }}">
                <img width="30%" src="{{ asset('assets/img/ihc.png') }}">
            </div>
        </div>
        <hr>
        <p>Selam sehat dan salam sejahtera untuk pasien RSU Pekerja yang kami cintai Kami berterimakasih atas kepercayaannya untuk memilih RSU Pekerja sebagai tempat terbaik dan teman terpercaya dalam proses penyembuhan. Kami harap Bapak dan Ibu dapat turut serta mengisi survey kepuasan Berikut
            adalah link survey kepuasan yang dapat diisi oleh Bapak dan Ibu <br>
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
                        <input class="form-check-input" value="1" type="radio" required name="pertanyaan1" id="pertanyaan11">
                        <label class="form-check-label" for="pertanyaan11">1</label>
                    </div>
                    <div class="form-check form-check-inline mx-4">
                        <input class="form-check-input" value="2" type="radio" required name="pertanyaan1" id="pertanyaan12">
                        <label class="form-check-label" for="pertanyaan12">2</label>
                    </div>
                    <div class="form-check form-check-inline mx-4">
                        <input class="form-check-input" value="3" type="radio" required name="pertanyaan1" id="pertanyaan13">
                        <label class="form-check-label" for="pertanyaan13">3</label>
                    </div>
                    <div class="form-check form-check-inline mx-4">
                        <input class="form-check-input" value="4" type="radio" required name="pertanyaan1" id="pertanyaan14">
                        <label class="form-check-label" for="pertanyaan14">4</label>
                    </div>
                    <div class="form-check form-check-inline mx-4">
                        <input class="form-check-input" value="5" type="radio" required name="pertanyaan1" id="pertanyaan15">
                        <label class="form-check-label" for="pertanyaan15">5</label>
                    </div>
                </div>
            </div>
            <div class="card mt-2">
                <div class="card-body">
                    <p>2. Kemudahan melakukan pendaftaran (Langsung/online)</p>
                    <div class="form-check form-check-inline mx-4">
                        <input class="form-check-input" value="1" type="radio" required name="pertanyaan2" id="pertanyaan21">
                        <label class="form-check-label" for="pertanyaan21">1</label>
                    </div>
                    <div class="form-check form-check-inline mx-4">
                        <input class="form-check-input" value="2" type="radio" required name="pertanyaan2" id="pertanyaan22">
                        <label class="form-check-label" for="pertanyaan22">2</label>
                    </div>
                    <div class="form-check form-check-inline mx-4">
                        <input class="form-check-input" value="3" type="radio" required name="pertanyaan2" id="pertanyaan23">
                        <label class="form-check-label" for="pertanyaan23">3</label>
                    </div>
                    <div class="form-check form-check-inline mx-4">
                        <input class="form-check-input" value="4" type="radio" required name="pertanyaan2" id="pertanyaan24">
                        <label class="form-check-label" for="pertanyaan24">4</label>
                    </div>
                    <div class="form-check form-check-inline mx-4">
                        <input class="form-check-input" value="5" type="radio" required name="pertanyaan2" id="pertanyaan25">
                        <label class="form-check-label" for="pertanyaan25">5</label>
                    </div>
                </div>
            </div>
            <div class="card mt-2">
                <div class="card-body">
                    <p>3. Kecepatan antrian layanan pendaftaran</p>
                    <div class="form-check form-check-inline mx-4">
                        <input class="form-check-input" value="1" type="radio" required name="pertanyaan3" id="pertanyaan31">
                        <label class="form-check-label" for="pertanyaan31">1</label>
                    </div>
                    <div class="form-check form-check-inline mx-4">
                        <input class="form-check-input" value="2" type="radio" required name="pertanyaan3" id="pertanyaan32">
                        <label class="form-check-label" for="pertanyaan32">2</label>
                    </div>
                    <div class="form-check form-check-inline mx-4">
                        <input class="form-check-input" value="3" type="radio" required name="pertanyaan3" id="pertanyaan33">
                        <label class="form-check-label" for="pertanyaan33">3</label>
                    </div>
                    <div class="form-check form-check-inline mx-4">
                        <input class="form-check-input" value="4" type="radio" required name="pertanyaan3" id="pertanyaan34">
                        <label class="form-check-label" for="pertanyaan34">4</label>
                    </div>
                    <div class="form-check form-check-inline mx-4">
                        <input class="form-check-input" value="5" type="radio" required name="pertanyaan3" id="pertanyaan35">
                        <label class="form-check-label" for="pertanyaan35">5</label>
                    </div>
                </div>
            </div>
            <div class="card mt-2">
                <div class="card-body">
                    <p>4. Kemudahan proses mulai dari pendaftaran, layanan perawat, layanan perawat, layanan dokter, farmasi sampai kasir</p>
                    <div class="form-check form-check-inline mx-4">
                        <input class="form-check-input" value="1" type="radio" required name="pertanyaan4" id="pertanyaan41">
                        <label class="form-check-label" for="pertanyaan41">1</label>
                    </div>
                    <div class="form-check form-check-inline mx-4">
                        <input class="form-check-input" value="2" type="radio" required name="pertanyaan4" id="pertanyaan42">
                        <label class="form-check-label" for="pertanyaan42">2</label>
                    </div>
                    <div class="form-check form-check-inline mx-4">
                        <input class="form-check-input" value="3" type="radio" required name="pertanyaan4" id="pertanyaan43">
                        <label class="form-check-label" for="pertanyaan43">3</label>
                    </div>
                    <div class="form-check form-check-inline mx-4">
                        <input class="form-check-input" value="4" type="radio" required name="pertanyaan4" id="pertanyaan44">
                        <label class="form-check-label" for="pertanyaan44">4</label>
                    </div>
                    <div class="form-check form-check-inline mx-4">
                        <input class="form-check-input" value="5" type="radio" required name="pertanyaan4" id="pertanyaan45">
                        <label class="form-check-label" for="pertanyaan45">5</label>
                    </div>
                </div>
            </div>
            <div class="card mt-2">
                <div class="card-body">
                    <p>5. Kelengkapan fasilitas ruang tunggu pendaftaran (kursi tunggu, toilet, ruang laktasi, dan petunjuk arah)</p>
                    <div class="form-check form-check-inline mx-4">
                        <input class="form-check-input" value="1" type="radio" required name="pertanyaan5" id="pertanyaan51">
                        <label class="form-check-label" for="pertanyaan51">1</label>
                    </div>
                    <div class="form-check form-check-inline mx-4">
                        <input class="form-check-input" value="2" type="radio" required name="pertanyaan5" id="pertanyaan52">
                        <label class="form-check-label" for="pertanyaan52">2</label>
                    </div>
                    <div class="form-check form-check-inline mx-4">
                        <input class="form-check-input" value="3" type="radio" required name="pertanyaan5" id="pertanyaan53">
                        <label class="form-check-label" for="pertanyaan53">3</label>
                    </div>
                    <div class="form-check form-check-inline mx-4">
                        <input class="form-check-input" value="4" type="radio" required name="pertanyaan5" id="pertanyaan54">
                        <label class="form-check-label" for="pertanyaan54">4</label>
                    </div>
                    <div class="form-check form-check-inline mx-4">
                        <input class="form-check-input" value="5" type="radio" required name="pertanyaan5" id="pertanyaan55">
                        <label class="form-check-label" for="pertanyaan55">5</label>
                    </div>
                </div>
            </div>
            <div class="card mt-2">
                <div class="card-body">
                    <p>6. Kenyamanan ruang tunggu pendaftaran (kebersihan, suhu ruangan)</p>
                    <div class="form-check form-check-inline mx-4">
                        <input class="form-check-input" value="1" type="radio" required name="pertanyaan6" id="pertanyaan61">
                        <label class="form-check-label" for="pertanyaan61">1</label>
                    </div>
                    <div class="form-check form-check-inline mx-4">
                        <input class="form-check-input" value="2" type="radio" required name="pertanyaan6" id="pertanyaan62">
                        <label class="form-check-label" for="pertanyaan62">2</label>
                    </div>
                    <div class="form-check form-check-inline mx-4">
                        <input class="form-check-input" value="3" type="radio" required name="pertanyaan6" id="pertanyaan63">
                        <label class="form-check-label" for="pertanyaan63">3</label>
                    </div>
                    <div class="form-check form-check-inline mx-4">
                        <input class="form-check-input" value="4" type="radio" required name="pertanyaan6" id="pertanyaan64">
                        <label class="form-check-label" for="pertanyaan64">4</label>
                    </div>
                    <div class="form-check form-check-inline mx-4">
                        <input class="form-check-input" value="5" type="radio" required name="pertanyaan6" id="pertanyaan65">
                        <label class="form-check-label" for="pertanyaan65">5</label>
                    </div>
                </div>
            </div>
            <div class="card mt-2">
                <div class="card-body">
                    <p>7. Kejelasan petugas pendaftaran dalam memberikan informasi</p>
                    <div class="form-check form-check-inline mx-4">
                        <input class="form-check-input" value="1" type="radio" required name="pertanyaan7" id="pertanyaan71">
                        <label class="form-check-label" for="pertanyaan71">1</label>
                    </div>
                    <div class="form-check form-check-inline mx-4">
                        <input class="form-check-input" value="2" type="radio" required name="pertanyaan7" id="pertanyaan72">
                        <label class="form-check-label" for="pertanyaan72">2</label>
                    </div>
                    <div class="form-check form-check-inline mx-4">
                        <input class="form-check-input" value="3" type="radio" required name="pertanyaan7" id="pertanyaan73">
                        <label class="form-check-label" for="pertanyaan73">3</label>
                    </div>
                    <div class="form-check form-check-inline mx-4">
                        <input class="form-check-input" value="4" type="radio" required name="pertanyaan7" id="pertanyaan74">
                        <label class="form-check-label" for="pertanyaan74">4</label>
                    </div>
                    <div class="form-check form-check-inline mx-4">
                        <input class="form-check-input" value="5" type="radio" required name="pertanyaan7" id="pertanyaan75">
                        <label class="form-check-label" for="pertanyaan75">5</label>
                    </div>
                </div>
            </div>
            <div class="card mt-2">
                <div class="card-body">
                    <p>8. Keramahan petugas pendaftaran dalam melayani pasien</p>
                    <div class="form-check form-check-inline mx-4">
                        <input class="form-check-input" value="1" type="radio" required name="pertanyaan8" id="pertanyaan81">
                        <label class="form-check-label" for="pertanyaan81">1</label>
                    </div>
                    <div class="form-check form-check-inline mx-4">
                        <input class="form-check-input" value="2" type="radio" required name="pertanyaan8" id="pertanyaan82">
                        <label class="form-check-label" for="pertanyaan82">2</label>
                    </div>
                    <div class="form-check form-check-inline mx-4">
                        <input class="form-check-input" value="3" type="radio" required name="pertanyaan8" id="pertanyaan83">
                        <label class="form-check-label" for="pertanyaan83">3</label>
                    </div>
                    <div class="form-check form-check-inline mx-4">
                        <input class="form-check-input" value="4" type="radio" required name="pertanyaan8" id="pertanyaan84">
                        <label class="form-check-label" for="pertanyaan84">4</label>
                    </div>
                    <div class="form-check form-check-inline mx-4">
                        <input class="form-check-input" value="5" type="radio" required name="pertanyaan8" id="pertanyaan85">
                        <label class="form-check-label" for="pertanyaan85">5</label>
                    </div>
                </div>
            </div>
            <div class="card mt-2">
                <div class="card-body">
                    <p>9. Kecepatan antrian layanan poliklinik</p>
                    <div class="form-check form-check-inline mx-4">
                        <input class="form-check-input" value="1" type="radio" required name="pertanyaan9" id="pertanyaan91">
                        <label class="form-check-label" for="pertanyaan91">1</label>
                    </div>
                    <div class="form-check form-check-inline mx-4">
                        <input class="form-check-input" value="2" type="radio" required name="pertanyaan9" id="pertanyaan92">
                        <label class="form-check-label" for="pertanyaan92">2</label>
                    </div>
                    <div class="form-check form-check-inline mx-4">
                        <input class="form-check-input" value="3" type="radio" required name="pertanyaan9" id="pertanyaan93">
                        <label class="form-check-label" for="pertanyaan93">3</label>
                    </div>
                    <div class="form-check form-check-inline mx-4">
                        <input class="form-check-input" value="4" type="radio" required name="pertanyaan9" id="pertanyaan94">
                        <label class="form-check-label" for="pertanyaan94">4</label>
                    </div>
                    <div class="form-check form-check-inline mx-4">
                        <input class="form-check-input" value="5" type="radio" required name="pertanyaan9" id="pertanyaan95">
                        <label class="form-check-label" for="pertanyaan95">5</label>
                    </div>
                </div>
            </div>
            <div class="card mt-2">
                <div class="card-body">
                    <p>10. Ketepatan jadwal praktik dokter di poliklinik</p>
                    <div class="form-check form-check-inline mx-4">
                        <input class="form-check-input" value="1" type="radio" required name="pertanyaan10" id="pertanyaan101">
                        <label class="form-check-label" for="pertanyaan101">1</label>
                    </div>
                    <div class="form-check form-check-inline mx-4">
                        <input class="form-check-input" value="2" type="radio" required name="pertanyaan10" id="pertanyaan102">
                        <label class="form-check-label" for="pertanyaan102">2</label>
                    </div>
                    <div class="form-check form-check-inline mx-4">
                        <input class="form-check-input" value="3" type="radio" required name="pertanyaan10" id="pertanyaan103">
                        <label class="form-check-label" for="pertanyaan103">3</label>
                    </div>
                    <div class="form-check form-check-inline mx-4">
                        <input class="form-check-input" value="4" type="radio" required name="pertanyaan10" id="pertanyaan104">
                        <label class="form-check-label" for="pertanyaan104">4</label>
                    </div>
                    <div class="form-check form-check-inline mx-4">
                        <input class="form-check-input" value="5" type="radio" required name="pertanyaan10" id="pertanyaan105">
                        <label class="form-check-label" for="pertanyaan105">5</label>
                    </div>
                </div>
            </div>
            <div class="card mt-2">
                <div class="card-body">
                    <p>11. Kelengkapan fasilitas ruang tunggu poliklinik (kursi tunggu, toilet, dan petunjuk arah)</p>
                    <div class="form-check form-check-inline mx-4">
                        <input class="form-check-input" value="1" type="radio" required name="pertanyaan11" id="pertanyaan111">
                        <label class="form-check-label" for="pertanyaan111">1</label>
                    </div>
                    <div class="form-check form-check-inline mx-4">
                        <input class="form-check-input" value="2" type="radio" required name="pertanyaan11" id="pertanyaan112">
                        <label class="form-check-label" for="pertanyaan112">2</label>
                    </div>
                    <div class="form-check form-check-inline mx-4">
                        <input class="form-check-input" value="3" type="radio" required name="pertanyaan11" id="pertanyaan113">
                        <label class="form-check-label" for="pertanyaan113">3</label>
                    </div>
                    <div class="form-check form-check-inline mx-4">
                        <input class="form-check-input" value="4" type="radio" required name="pertanyaan11" id="pertanyaan114">
                        <label class="form-check-label" for="pertanyaan114">4</label>
                    </div>
                    <div class="form-check form-check-inline mx-4">
                        <input class="form-check-input" value="5" type="radio" required name="pertanyaan11" id="pertanyaan115">
                        <label class="form-check-label" for="pertanyaan115">5</label>
                    </div>
                </div>
            </div>
            <div class="card mt-2">
                <div class="card-body">
                    <p>12. Kenyamanan ruang tunggu poliklinik (kebersihan, suhu ruangan)</p>
                    <div class="form-check form-check-inline mx-4">
                        <input class="form-check-input" value="1" type="radio" required name="pertanyaan12" id="pertanyaan121">
                        <label class="form-check-label" for="pertanyaan121">1</label>
                    </div>
                    <div class="form-check form-check-inline mx-4">
                        <input class="form-check-input" value="2" type="radio" required name="pertanyaan12" id="pertanyaan122">
                        <label class="form-check-label" for="pertanyaan122">2</label>
                    </div>
                    <div class="form-check form-check-inline mx-4">
                        <input class="form-check-input" value="3" type="radio" required name="pertanyaan12" id="pertanyaan123">
                        <label class="form-check-label" for="pertanyaan123">3</label>
                    </div>
                    <div class="form-check form-check-inline mx-4">
                        <input class="form-check-input" value="4" type="radio" required name="pertanyaan12" id="pertanyaan124">
                        <label class="form-check-label" for="pertanyaan124">4</label>
                    </div>
                    <div class="form-check form-check-inline mx-4">
                        <input class="form-check-input" value="5" type="radio" required name="pertanyaan12" id="pertanyaan125">
                        <label class="form-check-label" for="pertanyaan125">5</label>
                    </div>
                </div>
            </div>
            <div class="card mt-2">
                <div class="card-body">
                    <p>13. Kejelasan petugas poliklinik dalam memberikan informasi</p>
                    <div class="form-check form-check-inline mx-4">
                        <input class="form-check-input" value="1" type="radio" required name="pertanyaan13" id="pertanyaan131">
                        <label class="form-check-label" for="pertanyaan131">1</label>
                    </div>
                    <div class="form-check form-check-inline mx-4">
                        <input class="form-check-input" value="2" type="radio" required name="pertanyaan13" id="pertanyaan132">
                        <label class="form-check-label" for="pertanyaan132">2</label>
                    </div>
                    <div class="form-check form-check-inline mx-4">
                        <input class="form-check-input" value="3" type="radio" required name="pertanyaan13" id="pertanyaan133">
                        <label class="form-check-label" for="pertanyaan133">3</label>
                    </div>
                    <div class="form-check form-check-inline mx-4">
                        <input class="form-check-input" value="4" type="radio" required name="pertanyaan13" id="pertanyaan134">
                        <label class="form-check-label" for="pertanyaan134">4</label>
                    </div>
                    <div class="form-check form-check-inline mx-4">
                        <input class="form-check-input" value="5" type="radio" required name="pertanyaan13" id="pertanyaan135">
                        <label class="form-check-label" for="pertanyaan135">5</label>
                    </div>
                </div>
            </div>
            <div class="card mt-2">
                <div class="card-body">
                    <p>14. Keramahan petugas poliklinik dalam melayani pasien</p>
                    <div class="form-check form-check-inline mx-4">
                        <input class="form-check-input" value="1" type="radio" required name="pertanyaan14" id="pertanyaan141">
                        <label class="form-check-label" for="pertanyaan141">1</label>
                    </div>
                    <div class="form-check form-check-inline mx-4">
                        <input class="form-check-input" value="2" type="radio" required name="pertanyaan14" id="pertanyaan142">
                        <label class="form-check-label" for="pertanyaan142">2</label>
                    </div>
                    <div class="form-check form-check-inline mx-4">
                        <input class="form-check-input" value="3" type="radio" required name="pertanyaan14" id="pertanyaan143">
                        <label class="form-check-label" for="pertanyaan143">3</label>
                    </div>
                    <div class="form-check form-check-inline mx-4">
                        <input class="form-check-input" value="4" type="radio" required name="pertanyaan14" id="pertanyaan144">
                        <label class="form-check-label" for="pertanyaan144">4</label>
                    </div>
                    <div class="form-check form-check-inline mx-4">
                        <input class="form-check-input" value="5" type="radio" required name="pertanyaan14" id="pertanyaan145">
                        <label class="form-check-label" for="pertanyaan145">5</label>
                    </div>
                </div>
            </div>
            <div class="card mt-2">
                <div class="card-body">
                    <p>15. Kejelasan dokter dalam memberikan informasi terkait penyakit pasien</p>
                    <div class="form-check form-check-inline mx-4">
                        <input class="form-check-input" value="1" type="radio" required name="pertanyaan15" id="pertanyaan151">
                        <label class="form-check-label" for="pertanyaan151">1</label>
                    </div>
                    <div class="form-check form-check-inline mx-4">
                        <input class="form-check-input" value="2" type="radio" required name="pertanyaan15" id="pertanyaan152">
                        <label class="form-check-label" for="pertanyaan152">2</label>
                    </div>
                    <div class="form-check form-check-inline mx-4">
                        <input class="form-check-input" value="3" type="radio" required name="pertanyaan15" id="pertanyaan153">
                        <label class="form-check-label" for="pertanyaan153">3</label>
                    </div>
                    <div class="form-check form-check-inline mx-4">
                        <input class="form-check-input" value="4" type="radio" required name="pertanyaan15" id="pertanyaan154">
                        <label class="form-check-label" for="pertanyaan154">4</label>
                    </div>
                    <div class="form-check form-check-inline mx-4">
                        <input class="form-check-input" value="5" type="radio" required name="pertanyaan15" id="pertanyaan155">
                        <label class="form-check-label" for="pertanyaan155">5</label>
                    </div>
                </div>
            </div>
            <div class="card mt-2">
                <div class="card-body">
                    <p>16. Kecepatan antrian layanan Farmasi/Apotik</p>
                    <div class="form-check form-check-inline mx-4">
                        <input class="form-check-input" value="1" type="radio" required name="pertanyaan16" id="pertanyaan161">
                        <label class="form-check-label" for="pertanyaan161">1</label>
                    </div>
                    <div class="form-check form-check-inline mx-4">
                        <input class="form-check-input" value="2" type="radio" required name="pertanyaan16" id="pertanyaan162">
                        <label class="form-check-label" for="pertanyaan162">2</label>
                    </div>
                    <div class="form-check form-check-inline mx-4">
                        <input class="form-check-input" value="3" type="radio" required name="pertanyaan16" id="pertanyaan163">
                        <label class="form-check-label" for="pertanyaan163">3</label>
                    </div>
                    <div class="form-check form-check-inline mx-4">
                        <input class="form-check-input" value="4" type="radio" required name="pertanyaan16" id="pertanyaan164">
                        <label class="form-check-label" for="pertanyaan164">4</label>
                    </div>
                    <div class="form-check form-check-inline mx-4">
                        <input class="form-check-input" value="5" type="radio" required name="pertanyaan16" id="pertanyaan165">
                        <label class="form-check-label" for="pertanyaan165">5</label>
                    </div>
                </div>
            </div>
            <div class="card mt-2">
                <div class="card-body">
                    <p>17. Kelengkapan fasilitas ruang tunggu farmasi/apotik (kursi tunggu, toilet, dan petunjuk arah)</p>
                    <div class="form-check form-check-inline mx-4">
                        <input class="form-check-input" value="1" type="radio" required name="pertanyaan17" id="pertanyaan171">
                        <label class="form-check-label" for="pertanyaan171">1</label>
                    </div>
                    <div class="form-check form-check-inline mx-4">
                        <input class="form-check-input" value="2" type="radio" required name="pertanyaan17" id="pertanyaan172">
                        <label class="form-check-label" for="pertanyaan172">2</label>
                    </div>
                    <div class="form-check form-check-inline mx-4">
                        <input class="form-check-input" value="3" type="radio" required name="pertanyaan17" id="pertanyaan173">
                        <label class="form-check-label" for="pertanyaan173">3</label>
                    </div>
                    <div class="form-check form-check-inline mx-4">
                        <input class="form-check-input" value="4" type="radio" required name="pertanyaan17" id="pertanyaan174">
                        <label class="form-check-label" for="pertanyaan174">4</label>
                    </div>
                    <div class="form-check form-check-inline mx-4">
                        <input class="form-check-input" value="5" type="radio" required name="pertanyaan17" id="pertanyaan175">
                        <label class="form-check-label" for="pertanyaan175">5</label>
                    </div>
                </div>
            </div>
            <div class="card mt-2">
                <div class="card-body">
                    <p>18. Kenyamanan ruang tunggu farmasi/apotik (kebersihan, suhu ruangan)</p>
                    <div class="form-check form-check-inline mx-4">
                        <input class="form-check-input" value="1" type="radio" required name="pertanyaan18" id="pertanyaan181">
                        <label class="form-check-label" for="pertanyaan181">1</label>
                    </div>
                    <div class="form-check form-check-inline mx-4">
                        <input class="form-check-input" value="2" type="radio" required name="pertanyaan18" id="pertanyaan182">
                        <label class="form-check-label" for="pertanyaan182">2</label>
                    </div>
                    <div class="form-check form-check-inline mx-4">
                        <input class="form-check-input" value="3" type="radio" required name="pertanyaan18" id="pertanyaan183">
                        <label class="form-check-label" for="pertanyaan183">3</label>
                    </div>
                    <div class="form-check form-check-inline mx-4">
                        <input class="form-check-input" value="4" type="radio" required name="pertanyaan18" id="pertanyaan184">
                        <label class="form-check-label" for="pertanyaan184">4</label>
                    </div>
                    <div class="form-check form-check-inline mx-4">
                        <input class="form-check-input" value="5" type="radio" required name="pertanyaan18" id="pertanyaan185">
                        <label class="form-check-label" for="pertanyaan185">5</label>
                    </div>
                </div>
            </div>
            <div class="card mt-2">
                <div class="card-body">
                    <p>19. Kejelasan petugas/apoteker dalam memberikan informasi penggunaan obat</p>
                    <div class="form-check form-check-inline mx-4">
                        <input class="form-check-input" value="1" type="radio" required name="pertanyaan19" id="pertanyaan191">
                        <label class="form-check-label" for="pertanyaan191">1</label>
                    </div>
                    <div class="form-check form-check-inline mx-4">
                        <input class="form-check-input" value="2" type="radio" required name="pertanyaan19" id="pertanyaan192">
                        <label class="form-check-label" for="pertanyaan192">2</label>
                    </div>
                    <div class="form-check form-check-inline mx-4">
                        <input class="form-check-input" value="3" type="radio" required name="pertanyaan19" id="pertanyaan193">
                        <label class="form-check-label" for="pertanyaan193">3</label>
                    </div>
                    <div class="form-check form-check-inline mx-4">
                        <input class="form-check-input" value="4" type="radio" required name="pertanyaan19" id="pertanyaan194">
                        <label class="form-check-label" for="pertanyaan194">4</label>
                    </div>
                    <div class="form-check form-check-inline mx-4">
                        <input class="form-check-input" value="5" type="radio" required name="pertanyaan19" id="pertanyaan195">
                        <label class="form-check-label" for="pertanyaan195">5</label>
                    </div>
                </div>
            </div>
            <div class="card mt-2">
                <div class="card-body">
                    <p>20. Kesesuaian Jenis dan jumlah obat yang diberikan dengan obat yang diresepkan</p>
                    <div class="form-check form-check-inline mx-4">
                        <input class="form-check-input" value="1" type="radio" required name="pertanyaan20" id="pertanyaan201">
                        <label class="form-check-label" for="pertanyaan201">1</label>
                    </div>
                    <div class="form-check form-check-inline mx-4">
                        <input class="form-check-input" value="2" type="radio" required name="pertanyaan20" id="pertanyaan202">
                        <label class="form-check-label" for="pertanyaan202">2</label>
                    </div>
                    <div class="form-check form-check-inline mx-4">
                        <input class="form-check-input" value="3" type="radio" required name="pertanyaan20" id="pertanyaan203">
                        <label class="form-check-label" for="pertanyaan203">3</label>
                    </div>
                    <div class="form-check form-check-inline mx-4">
                        <input class="form-check-input" value="4" type="radio" required name="pertanyaan20" id="pertanyaan204">
                        <label class="form-check-label" for="pertanyaan204">4</label>
                    </div>
                    <div class="form-check form-check-inline mx-4">
                        <input class="form-check-input" value="5" type="radio" required name="pertanyaan20" id="pertanyaan205">
                        <label class="form-check-label" for="pertanyaan205">5</label>
                    </div>
                </div>
            </div>
            <div class="card mt-2">
                <div class="card-body">
                    <p>21. Keramahan petugas apoteker dalam melayani pasien</p>
                    <div class="form-check form-check-inline mx-4">
                        <input class="form-check-input" value="1" type="radio" required name="pertanyaan21" id="pertanyaan211">
                        <label class="form-check-label" for="pertanyaan211">1</label>
                    </div>
                    <div class="form-check form-check-inline mx-4">
                        <input class="form-check-input" value="2" type="radio" required name="pertanyaan21" id="pertanyaan212">
                        <label class="form-check-label" for="pertanyaan212">2</label>
                    </div>
                    <div class="form-check form-check-inline mx-4">
                        <input class="form-check-input" value="3" type="radio" required name="pertanyaan21" id="pertanyaan213">
                        <label class="form-check-label" for="pertanyaan213">3</label>
                    </div>
                    <div class="form-check form-check-inline mx-4">
                        <input class="form-check-input" value="4" type="radio" required name="pertanyaan21" id="pertanyaan214">
                        <label class="form-check-label" for="pertanyaan214">4</label>
                    </div>
                    <div class="form-check form-check-inline mx-4">
                        <input class="form-check-input" value="5" type="radio" required name="pertanyaan21" id="pertanyaan215">
                        <label class="form-check-label" for="pertanyaan215">5</label>
                    </div>
                </div>
            </div>
            <div class="card mt-2">
                <div class="card-body">
                    <p>22. Pengetahuan petugas tentang produk dan layanan</p>
                    <div class="form-check form-check-inline mx-4">
                        <input class="form-check-input" value="1" type="radio" required name="pertanyaan22" id="pertanyaan221">
                        <label class="form-check-label" for="pertanyaan221">1</label>
                    </div>
                    <div class="form-check form-check-inline mx-4">
                        <input class="form-check-input" value="2" type="radio" required name="pertanyaan22" id="pertanyaan222">
                        <label class="form-check-label" for="pertanyaan222">2</label>
                    </div>
                    <div class="form-check form-check-inline mx-4">
                        <input class="form-check-input" value="3" type="radio" required name="pertanyaan22" id="pertanyaan223">
                        <label class="form-check-label" for="pertanyaan223">3</label>
                    </div>
                    <div class="form-check form-check-inline mx-4">
                        <input class="form-check-input" value="4" type="radio" required name="pertanyaan22" id="pertanyaan224">
                        <label class="form-check-label" for="pertanyaan224">4</label>
                    </div>
                    <div class="form-check form-check-inline mx-4">
                        <input class="form-check-input" value="5" type="radio" required name="pertanyaan22" id="pertanyaan225">
                        <label class="form-check-label" for="pertanyaan225">5</label>
                    </div>
                </div>
            </div>
            <div class="card mt-2">
                <div class="card-body">
                    <p>23. Kepedulian petugas pendaftaran dalam melayani pasien</p>
                    <div class="form-check form-check-inline mx-4">
                        <input class="form-check-input" value="1" type="radio" required name="pertanyaan23" id="pertanyaan231">
                        <label class="form-check-label" for="pertanyaan231">1</label>
                    </div>
                    <div class="form-check form-check-inline mx-4">
                        <input class="form-check-input" value="2" type="radio" required name="pertanyaan23" id="pertanyaan232">
                        <label class="form-check-label" for="pertanyaan232">2</label>
                    </div>
                    <div class="form-check form-check-inline mx-4">
                        <input class="form-check-input" value="3" type="radio" required name="pertanyaan23" id="pertanyaan233">
                        <label class="form-check-label" for="pertanyaan233">3</label>
                    </div>
                    <div class="form-check form-check-inline mx-4">
                        <input class="form-check-input" value="4" type="radio" required name="pertanyaan23" id="pertanyaan234">
                        <label class="form-check-label" for="pertanyaan234">4</label>
                    </div>
                    <div class="form-check form-check-inline mx-4">
                        <input class="form-check-input" value="5" type="radio" required name="pertanyaan23" id="pertanyaan235">
                        <label class="form-check-label" for="pertanyaan235">5</label>
                    </div>
                </div>
            </div>
            <div class="card mt-2">
                <div class="card-body">
                    <p>24. Kepedulian petugas poliklinik dalam melayani pasien</p>
                    <div class="form-check form-check-inline mx-4">
                        <input class="form-check-input" value="1" type="radio" required name="pertanyaan24" id="pertanyaan241">
                        <label class="form-check-label" for="pertanyaan241">1</label>
                    </div>
                    <div class="form-check form-check-inline mx-4">
                        <input class="form-check-input" value="2" type="radio" required name="pertanyaan24" id="pertanyaan242">
                        <label class="form-check-label" for="pertanyaan242">2</label>
                    </div>
                    <div class="form-check form-check-inline mx-4">
                        <input class="form-check-input" value="3" type="radio" required name="pertanyaan24" id="pertanyaan243">
                        <label class="form-check-label" for="pertanyaan243">3</label>
                    </div>
                    <div class="form-check form-check-inline mx-4">
                        <input class="form-check-input" value="4" type="radio" required name="pertanyaan24" id="pertanyaan244">
                        <label class="form-check-label" for="pertanyaan244">4</label>
                    </div>
                    <div class="form-check form-check-inline mx-4">
                        <input class="form-check-input" value="5" type="radio" required name="pertanyaan24" id="pertanyaan245">
                        <label class="form-check-label" for="pertanyaan245">5</label>
                    </div>
                </div>
            </div>
            <div class="card mt-2">
                <div class="card-body">
                    <p>25. Kepedulian petugas apoteker dalam melayani pasien</p>
                    <div class="form-check form-check-inline mx-4">
                        <input class="form-check-input" value="1" type="radio" required name="pertanyaan25" id="pertanyaan251">
                        <label class="form-check-label" for="pertanyaan251">1</label>
                    </div>
                    <div class="form-check form-check-inline mx-4">
                        <input class="form-check-input" value="2" type="radio" required name="pertanyaan25" id="pertanyaan252">
                        <label class="form-check-label" for="pertanyaan252">2</label>
                    </div>
                    <div class="form-check form-check-inline mx-4">
                        <input class="form-check-input" value="3" type="radio" required name="pertanyaan25" id="pertanyaan253">
                        <label class="form-check-label" for="pertanyaan253">3</label>
                    </div>
                    <div class="form-check form-check-inline mx-4">
                        <input class="form-check-input" value="4" type="radio" required name="pertanyaan25" id="pertanyaan254">
                        <label class="form-check-label" for="pertanyaan254">4</label>
                    </div>
                    <div class="form-check form-check-inline mx-4">
                        <input class="form-check-input" value="5" type="radio" required name="pertanyaan25" id="pertanyaan255">
                        <label class="form-check-label" for="pertanyaan255">5</label>
                    </div>
                </div>
            </div>
            {{-- <button class="btn btn-primary" onclick="klik()">KIRIM</button> --}}
            <center class="mt-2">
                <button class="btn btn-primary btn-block w-100 btn-shadow" type="submit">KIRIM</button>
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
    @if (Session::has('success'))
        <script>
            setTimeout(notif, 1000);
        </script>
    @endif

</body>

</html>
