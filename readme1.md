538179667646-agr16khmse553eupdbvknlo7r2c1rbor.apps.googleusercontent.com

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


    <a class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user"  href="{{ url('data/' . $user->id . '/edit') }}?method=editAkun" >Edit</a>

                      <a href="javascript:;" class="text-danger font-weight-bold text-xs ms-1 ps-1" style="border-left: 1px solid rgba(0, 0, 0, 0.329)" data-toggle="tooltip" data-original-title="Edit user"> hapus </a>



tabel pelajaran
- id(utama)
- namapelajaran

table semester
- id(utama)
- subsemester
- id_pelajaran(tamu)-> untuk menghubungkan ke tabel pelajaran

tabel bab
- id(utama)
- id_pelajaran(tamu)-> untuk menghubungkan ke tabel pelajaran
- id_semester(tamu)->untuk menghubungkan ke table semester
- subbab

table materi
- id(utama)
- id_pelajaran(tamu)-> untuk menghubungkan ke tabel pelajaran
- isimateri

table gambarmateri
- id(utama)
- id_materi(tamu)-> untuk menghubungkan ke tabel materi
- namafile
- lokasifile





