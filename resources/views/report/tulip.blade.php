<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ env('APP_NAME') }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container-fluid my-3">
        <div class="row mb-3">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header fw-bold display-6">
                        Laporan Survey Klinik Eksekutif
                    </div>
                    <div class="card-body pb-0">
                        <div class="row g-3">
                            <div class="col-auto">
                                <label class="align-middle fw-bold">Periode</label>
                            </div>
                            <div class="col-auto">
                                <label for="tgl_awal" class="visually-hidden">Password</label>
                                <input type="date" class="form-control" id="tgl_awal" placeholder="Tgl Awal">
                            </div>
                            <div class="col-auto">
                                <label for="tgl_akhir" class="visually-hidden">Password</label>
                                <input type="date" class="form-control" id="tgl_akhir" placeholder="Tgl Akhir">
                            </div>
                            <div class="col-auto">
                                <button type="button" class="btn btn-primary mb-3" id="submit">Submit</button>
                            </div>
                        </div>
                        <div class="row" id="laporan_hasil"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script>
        $("#submit").click(function() {
            let tgl_awal = $('#tgl_awal').val();
            let tgl_akhir = $('#tgl_akhir').val();
            $.post("{{ route('report.tulip.result') }}", {
                    _token: "{{ csrf_token() }}",
                    tgl_awal: tgl_awal,
                    tgl_akhir: tgl_akhir
                },
                function(data) {
                    $("#laporan_hasil").html(data);
                });
        });
    </script>
</body>

</html>
