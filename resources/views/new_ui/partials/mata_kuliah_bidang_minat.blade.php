<table class="table table-hover">
    <thead class="table-dark">
        <tr>
            <th scope="col">Kode Mata Kuliah</th>
            <th scope="col">Nama Mata Kuliah</th>
            <th scope="col">Kelompok Bidang Minat</th>
            <th scope="col">Semester</th>
            <th scope="col">SKS</th>
            <th scope="col">Stream</th>
        </tr>
    </thead>
    <tbody>
        {{-- Semester 1
        <tr class="table-warning">
            <td colspan="6">Semester 1</td>
        </tr> --}}
        @php
            $no = 0;
        @endphp
        @foreach ($bidangminat as $minat)
            <tr>
                <td scope="row">{{ $minat->kode_mk }}</td>
                <td>{{ $minat->nama_mk }}</td>
                <td>{{ $minat->bidangminat }}</td>
                <td>{{ $minat->semester }}</td>
                <td>{{ $minat->sks }}</td>
                <td>{{ $minat->stream }}</td>
            </tr>
            @php
                $no++;
            @endphp
        @endforeach
    </tbody>
</table>
