<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ env('APP_NAME') }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container my-3">
        <div class="row mb-3">
            <div class="d-flex justify-content-between">
                <img width="25%" src="{{ asset('assets/img/rsup.png') }}">
                <img width="20%" src="{{ asset('assets/img/kgm.png') }}">
                <img width="35%" src="{{ asset('assets/img/ihc.png') }}">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        Laporan Survey Klinik Eksekutif
                    </div>
                    <div class="card-body">
                        <a href="{{ route('report.tulip.form') }}" class="btn btn-primary">Buka</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>

</html>
