@php
    $no = 1;
    $arr_user_id = [];
    $arr_pertanyaan_id = [];
    foreach ($list_laporan as $laporan) {
        $user_id = $laporan->user_id;
        $tgl_jam = $laporan->tgl_jam;
        $pertanyaan_id = $laporan->pertanyaan_id;
        $jawaban = $laporan->jawaban;
    
        if (!in_array($user_id, $arr_user_id)) {
            $arr_user_id[] = $user_id;
            $val_tgl_jam[$user_id] = $tgl_jam;
            $sum_jawaban[$user_id] = 0;
            $count_jawaban[$user_id] = 0;
        }
        if (!in_array($pertanyaan_id, $arr_pertanyaan_id)) {
            $arr_pertanyaan_id[] = $pertanyaan_id;
        }
        $val_jawaban[$user_id][$pertanyaan_id] = $jawaban;
        $sum_jawaban[$user_id] += $jawaban;
        $count_jawaban[$user_id]++;
    }
    sort($arr_user_id);
    sort($arr_pertanyaan_id);
@endphp

<table class="table table-bordered">
    <thead>
        <tr>
            <th rowspan="2">#</th>
            <th rowspan="2">Tanggal</th>
            <th colspan="{{ count($arr_pertanyaan_id) }}">Hasil</th>
            <th rowspan="2">Kepuasan</th>
        </tr>
        <tr>
            @foreach ($arr_pertanyaan_id as $val_pertanyaan_id)
                <th>{{ $val_pertanyaan_id }}</th>
            @endforeach
        </tr>
    </thead>
    <tbody>
        @foreach ($arr_user_id as $val_user_id)
            <tr>
                <td>{{ $no++ }}</td>
                <td>{{ date_format(date_create($val_tgl_jam[$val_user_id]), 'd/m/Y') }}</td>
                @foreach ($arr_pertanyaan_id as $val_pertanyaan_id)
                    <td>{{ $val_jawaban[$val_user_id][$val_pertanyaan_id] }}</td>
                @endforeach
                <td>{{ $sum_jawaban[$val_user_id] / $count_jawaban[$val_user_id] }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
