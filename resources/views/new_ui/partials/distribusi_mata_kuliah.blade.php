<table class="table table-hover">
    <thead class="table-dark">
        <tr>
            <th scope="col">No</th>
            <th scope="col">Kode Mata Kuliah</th>
            <th scope="col">Nama Mata Kuliah</th>
            <th scope="col">Kelompok Mata Kuliah</th>
            <th scope="col">SKS</th>
        </tr>
    </thead>
    <tbody>
        {{-- Semester 1 --}}
        <tr class="table-warning">
            <td colspan="5">Semester 1</td>
        </tr>
        @php
            $no = 0;
        @endphp
        @foreach ($kurikulum as $mk1)
            @if ($mk1->semester == 'Semester 1')
                <tr>
                    <td scope="row">{{ $no + 1 }}</td>
                    <td>{{ $mk1->kode_mk }}</td>
                    @if ($mk1->document == null)
                        <td>{{ $mk1->nama_mk }}</td>
                    @else
                        <td><a href="{{ asset($mk1->document) }}" target="_blank">{{ $mk1->nama_mk }}</a></td>
                    @endif
                    <td>{{ $mk1->kelompok_mk }}</td>
                    <td>{{ $mk1->sks }}</td>
                </tr>
                @php
                    $no++;
                @endphp
            @endif
        @endforeach
        <tr>
            <td colspan="4">Jumlah SKS</td>
            <td>{{ $kurikulum->where('semester', 'Semester 1')->sum('sks') }}</td>
        </tr>
        {{-- Semester 2 --}}
        <tr class="table-warning">
            <td colspan="5">Semester 2</td>
        </tr>
        @php
            $no = 0;
        @endphp
        @foreach ($kurikulum as $mk2)
            @if ($mk2->semester == 'Semester 2')
                <tr>
                    <td scope="row">{{ $no + 1 }}</td>
                    <td>{{ $mk2->kode_mk }}</td>
                    @if ($mk2->document == null)
                        <td>{{ $mk2->nama_mk }}</td>
                    @else
                        <td><a href="{{ asset($mk2->document) }}" target="_blank">{{ $mk2->nama_mk }}</a></td>
                    @endif
                    <td>{{ $mk2->kelompok_mk }}</td>
                    <td>{{ $mk2->sks }}</td>
                </tr>
                @php
                    $no++;
                @endphp
            @endif
        @endforeach
        <tr>
            <td colspan="4">Jumlah SKS</td>
            <td>{{ $kurikulum->where('semester', 'Semester 2')->sum('sks') }}</td>
        </tr>
        {{-- Semester 3 --}}
        <tr class="table-warning">
            <td colspan="5">Semester 3</td>
        </tr>
        @php
            $no = 0;
        @endphp
        @foreach ($kurikulum as $mk3)
            @if ($mk3->semester == 'Semester 3')
                <tr>
                    <td scope="row">{{ $no + 1 }}</td>
                    <td>{{ $mk3->kode_mk }}</td>
                    @if ($mk3->document == null)
                        <td>{{ $mk3->nama_mk }}</td>
                    @else
                        <td><a href="{{ asset($mk3->document) }}" target="_blank">{{ $mk3->nama_mk }}</a></td>
                    @endif
                    <td>{{ $mk3->kelompok_mk }}</td>
                    <td>{{ $mk3->sks }}</td>
                </tr>
                @php
                    $no++;
                @endphp
            @endif
        @endforeach
        <tr>
            <td colspan="4">Jumlah SKS</td>
            <td>{{ $kurikulum->where('semester', 'Semester 3')->sum('sks') }}</td>
        </tr>
        {{-- Semester 4 --}}
        <tr class="table-warning">
            <td colspan="5">Semester 4</td>
        </tr>
        @php
            $no = 0;
        @endphp
        @foreach ($kurikulum as $mk4)
            @if ($mk4->semester == 'Semester 4')
                <tr>
                    <td scope="row">{{ $no + 1 }}</td>
                    <td>{{ $mk4->kode_mk }}</td>
                    @if ($mk4->document == null)
                        <td>{{ $mk4->nama_mk }}</td>
                    @else
                        <td><a href="{{ asset($mk4->document) }}" target="_blank">{{ $mk4->nama_mk }}</a></td>
                    @endif
                    <td>{{ $mk4->kelompok_mk }}</td>
                    <td>{{ $mk4->sks }}</td>
                </tr>
                @php
                    $no++;
                @endphp
            @endif
        @endforeach
        <tr>
            <td colspan="4">Jumlah SKS</td>
            <td>{{ $kurikulum->where('semester', 'Semester 4')->sum('sks') }}</td>
        </tr>
        {{-- Semester 5 --}}
        <tr class="table-warning">
            <td colspan="5">Semester 5</td>
        </tr>
        @php
            $no = 0;
        @endphp
        @foreach ($kurikulum as $mk5)
            @if ($mk5->semester == 'Semester 5')
                <tr>
                    <td scope="row">{{ $no + 1 }}</td>
                    <td>{{ $mk5->kode_mk }}</td>
                    @if ($mk5->document == null)
                        <td>{{ $mk5->nama_mk }}</td>
                    @else
                        <td><a href="{{ asset($mk5->document) }}" target="_blank">{{ $mk5->nama_mk }}</a></td>
                    @endif
                    <td>{{ $mk5->kelompok_mk }}</td>
                    <td>{{ $mk5->sks }}</td>
                </tr>
                @php
                    $no++;
                @endphp
            @endif
        @endforeach
        <tr>
            <td colspan="4">Jumlah SKS</td>
            <td>{{ $kurikulum->where('semester', 'Semester 5')->sum('sks') }}</td>
        </tr>
        {{-- Semester 6 --}}
        <tr class="table-warning">
            <td colspan="5">Semester 6</td>
        </tr>
        @php
            $no = 0;
        @endphp
        @foreach ($kurikulum as $mk6)
            @if ($mk6->semester == 'Semester 6')
                <tr>
                    <td scope="row">{{ $no + 1 }}</td>
                    <td>{{ $mk6->kode_mk }}</td>
                    @if ($mk6->document == null)
                        <td>{{ $mk6->nama_mk }}</td>
                    @else
                        <td><a href="{{ asset($mk6->document) }}" target="_blank">{{ $mk6->nama_mk }}</a></td>
                    @endif
                    <td>{{ $mk6->kelompok_mk }}</td>
                    <td>{{ $mk6->sks }}</td>
                </tr>
                @php
                    $no++;
                @endphp
            @endif
        @endforeach
        <tr>
            <td colspan="4">Jumlah SKS</td>
            <td>{{ $kurikulum->where('semester', 'Semester 6')->sum('sks') }}</td>
        </tr>
        {{-- Semester 7 --}}
        <tr class="table-warning">
            <td colspan="5">Semester 7</td>
        </tr>
        @php
            $no = 0;
        @endphp
        @foreach ($kurikulum as $mk7)
            @if ($mk7->semester == 'Semester 7')
                <tr>
                    <td scope="row">{{ $no + 1 }}</td>
                    <td>{{ $mk7->kode_mk }}</td>
                    @if ($mk7->document == null)
                        <td>{{ $mk7->nama_mk }}</td>
                    @else
                        <td><a href="{{ asset($mk7->document) }}" target="_blank">{{ $mk7->nama_mk }}</a></td>
                    @endif
                    <td>{{ $mk7->kelompok_mk }}</td>
                    <td>{{ $mk7->sks }}</td>
                </tr>
                @php
                    $no++;
                @endphp
            @endif
        @endforeach
        <tr>
            <td colspan="4">Jumlah SKS</td>
            <td>{{ $kurikulum->where('semester', 'Semester 7')->sum('sks') }}</td>
        </tr>
        {{-- Semester 8 --}}
        <tr class="table-warning">
            <td colspan="5">Semester 8</td>
        </tr>
        @php
            $no = 0;
        @endphp
        @foreach ($kurikulum as $mk8)
            @if ($mk8->semester == 'Semester 8')
                <tr>
                    <td scope="row">{{ $no + 1 }}</td>
                    <td>{{ $mk8->kode_mk }}</td>
                    @if ($mk8->document == null)
                        <td>{{ $mk8->nama_mk }}</td>
                    @else
                        <td><a href="{{ asset($mk8->document) }}" target="_blank">{{ $mk8->nama_mk }}</a></td>
                    @endif
                    <td>{{ $mk8->kelompok_mk }}</td>
                    <td>{{ $mk8->sks }}</td>
                </tr>
                @php
                    $no++;
                @endphp
            @endif
        @endforeach
        <tr>
            <td colspan="4">Jumlah SKS</td>
            <td>{{ $kurikulum->where('semester', 'Semester 8')->sum('sks') }}</td>
        </tr>
        <tr class="table-primary">
            <td colspan="4">Jumlah Seluruh SKS</td>
            <td>{{ $kurikulum->sum('sks') }}</td>
        </tr>
    </tbody>
</table>
