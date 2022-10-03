@php

use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

$message = preg_split('/[\s,]+/', $polres[0]->nama_polres, 3);
$bulan = array("","Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember");
$a=0; $kasi=0; $baminT=0; $baurT=0; $baurminT=0;
$baur = DB::table('personils')
        ->where('polres', '=', $polres[0]->username)
        ->where('jabatan_personil', 'like', "baur%")
        ->where('jabatan_personil', '!=', "baurmin")
        ->get();
$bamin = DB::table('personils')
        ->where('polres', '=', $polres[0]->username)
        ->where('jabatan_personil', 'like', "bamin%")
        ->get();
$accepted = str_split($polres[0]->anggaran, 1);
$i=0;

@endphp

<!DOCTYPE html>
<html lang="en-US">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
        <title>Laporan Bulanan</title>
        <style type="text/css">
            p {
                margin: 0;
                font-size: 14px;
            }
            body {
                font-family:-apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            }
            .center {
                text-align: center;
                border-bottom: 1px solid #000;
            }
            .center p {
                font-size: 18px;
                text-transform: uppercase;
            }
            .header {
                border-bottom: 1px solid #000;
                padding-bottom: 5px;
                text-transform: uppercase;
            }
            .bab {
                font-size: 14px;
                margin-bottom: 10px;
            }
            .sub-bab.tabel{
                font-size: 14px;
                font-weight: 400;
            }
            .sub-chapter{
                font-size: 16px;
                font-weight: 400;
            }
            table, td, th, tr {
                font-size: 14px;
                font-weight: 400;
                padding: 5px;
                border: 1px solid black;
                border-collapse: collapse;
            }
            .konten {
                font-size: 14px;
                margin-bottom: 15px;
            }
            .page-break {
                page-break-after: always;
            }
        </style>
    </head>
    <body>
        <div class="text-center header" style="width:320px">
            <p>KEPOLISIAN NEGARA REPUBLIK INDONESIA</p>
            <p>DAERAH JAWA TIMUR</p>
            <p style="text-transform: uppercase;">RESOR
                @foreach ($message as $mess)
                @if ($loop->first) @continue @endif
                    {{$mess}}
                @endforeach</p>
        </div>
        <div class="center mx-auto my-3" style="width:400px;">
            <img src="{{public_path('/images/logo.png')}}" alt="tribarata" width="100px;" class="mb-2">
            <p>LAPORAN BULANAN</p>
            <p>SIE TIK POLRI {{$polres[0]->nama_polres}}</p>
            <p>BULAN {{$bulan[Carbon::now()->month]}} {{Carbon::now()->format('Y')}}</p>
        </div>
        <div>
            <ol type="I">
                <li class="bab">PENDAHULUAN</li>
                <div>
                    <ol type="1">
                        <li class="sub-bab">Dasar</li>
                        <div class="konten">
                            <ol type="a">
                                @foreach ($dasar as $item)
                                    <li>{{$item->dasar}}</li>
                                @endforeach
                            </ol>
                        </div>
                        <li class="sub-bab">Maksud dan Tujuan</li>
                        <div class="konten">
                            <ol type="a">
                                @foreach ($maksud as $item)
                                    <li>{{$item->maksudtujuan}}</li>
                                @endforeach
                            </ol>
                        </div>
                        <li class="sub-bab">Ruang Lingkup</li>
                        <div class="konten">
                            <p style="margin:0;">Laporan bulanan Sitikpol {{$polres[0]->nama_polres}} ini dibuat meliputi situasi dan kondisi personil maupun materiil yang ada pelaksanaan tugas dan hasil yang di capai serta hambatan yang terjadi dan saran yang diajukan</p>
                        </div>
                        <li class="sub-bab">Tata-Urut</li>
                        <div class="konten">
                            <ol type="I">
                                <li>PENDAHULUAN</li>
                                <li>KONDISI PERSONIL DAN MATERIIL</li>
                                <li>PELAKSANAAN TUGAS</li>
                                <li>HAMBATAN YANG TERJADI</li>
                                <li>KESIMPULAN DAN SARAN</li>
                                <li>PENUTUP</li>
                            </ol>
                        </div>
                    </ol>
                </div>
                <div class="page-break"></div>
                <li class="bab">KONDISI PERSONIL DAN MATERIIL</li>
                <div>@foreach ($personil as $person)
                        @php
                            $a++;
                        @endphp
                    @endforeach
                    <ol type="1">
                        <li class="sub-bab">Kondisi Personil</li>
                        <div class="konten">
                            <ol type="a">
                                <li>
                                    Struktur Organisasi
                                    @foreach ($struktur as $item)
                                    @if (isset($item->image))
                                    <img src="{{public_path('/'.$item->image)}}" style="width: 500px;" class="d-flex justify-content-center">
                                    @else
                                    @endif
                                    @endforeach
                                </li>
                                <li>Secara kuantitas jumlah personil Sitikpol {{$polres[0]->nama_polres}} serta pendidikan terakhir (Dikum/Dikbang) yang dimiliki dapat digambarkan sebagai berikut:
                                Berdasarkan Perkap Kapolri Nomor 23 Tahun 2010 tanggal 30 September 2010 maka jumlah DSPP personil Sitikpol
                                @if ($polres[0]->dspp < $a)
                                @php
                                    $b = $a-$polres[0]->dspp;
                                @endphp
                                kelebihan {{$b}} personil,
                                @elseif ($polres[0]->dspp > $a)
                                @php
                                    $b = $polres[0]->dspp-$a;
                                @endphp
                                kekurangan {{$b}} personil,
                                @else
                                memenuhi kebutuhan personil,
                                @endif sedangkan Riil Personil di Sitikpol saat ini Jumlah {{$a}} Personil yang terdiri dari:
                                @foreach ($personil as $person)
                                @if ($person->jabatan_personil === 'kasitik')
                                    @php
                                        $kasi++;
                                    @endphp
                                @endif
                                @endforeach {{$kasi}} KaSitikpol dibantu
                                @foreach ($baur as $person)
                                    @php
                                        $baurT++;
                                    @endphp
                                @endforeach {{$baurT}} Baur,
                                @foreach ($bamin as $person)
                                    @php
                                        $baminT++;
                                    @endphp
                                @endforeach {{$baminT}} Bamin, dan
                                @foreach ($personil as $person)
                                @if ($person->jabatan_personil === 'baurmin')
                                    @php
                                        $baurminT++;
                                    @endphp
                                @endif
                                @endforeach {{$baurminT}} Baurmin, adapun
                                @if ($polres[0]->dspp < $a)
                                @php
                                    $b = $a-$polres[0]->dspp;
                                @endphp
                                kelebihan {{$b}} personil.
                                @elseif ($polres[0]->dspp > $a)
                                @php
                                    $b = $polres[0]->dspp-$a;
                                @endphp
                                kekurangan {{$b}} personil.
                                @else
                                memenuhi kebutuhan personil.
                                @endif</li>
                                <div class="tabel">
                                    <table style="width:100%">
                                        <tr>
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>NRP</th>
                                            <th>Pangkat</th>
                                            <th>Jabatan</th>
                                            <th>Pendidikan Dikum</th>
                                            <th>Pendidikan Dikbang</th>
                                        </tr>
                                        @foreach ($personil as $person)
                                        <tr>
                                            <td>{{$loop->iteration}}</td>
                                            <td>{{$person->nama_personil}}</td>
                                            <td>{{$person->nrp_personil}} </td>
                                            @php
                                                $pangkat = preg_split('/[\s,]+/', $person->pangkat_personil, 3);
                                            @endphp
                                            <td>@foreach ($pangkat as $mess)
                                                @if ($loop->first) @continue @endif
                                                    {{$mess}}
                                                @endforeach
                                            </td>
                                            <td>{{$person->jabatan_personil}}</td>
                                            <td>{{$person->pendidikan_dikum}}</td>
                                            <td>{{$person->pendidikan_dikbang}}</td>
                                        </tr>
                                        @endforeach
                                    </table>
                                </div>
                            </ol>
                        </div>
                        <div class="page-break"></div>
                        <li class="sub-bab">Kondisi Materiil</li>
                        <div class="konten">
                            <ol type="a">
                                <p class="sub-chapter">Data JarKomRad</p>
                                <li>Data Site</li>
                                <div class="tabel">
                                    <table style="width:100%">
                                        <tr>
                                            <th rowspan="2">No</th>
                                            <th rowspan="2">Nama Barang</th>
                                            <th rowspan="2">Sumber</th>
                                            <th rowspan="2">Jumlah Barang</th>
                                            <th class="text-center" colspan="3">Kondisi</th>
                                            <th rowspan="2">Keterangan</th>
                                        </tr>
                                        <tr>
                                            <th>BB</th>
                                            <th>RR</th>
                                            <th>RB</th>
                                        </tr>
                                        @foreach ($site as $sites)
                                        <tr>
                                            <td>{{$loop->iteration}}</td>
                                            <td>{{$sites->nama_barang}}</td>
                                            <td>{{$sites->sumber}} </td>
                                            <td>{{$sites->jml_barang}}</td>
                                            <td>{{$sites->kondisi_bb}}</td>
                                            <td>{{$sites->kondisi_rr}}</td>
                                            <td>{{$sites->kondisi_rb}}</td>
                                            <td>{{$sites->keterangan}}</td>
                                        </tr>
                                        @endforeach
                                    </table>
                                </div>
                                <li>Data Alsus Komlek</li>
                                <div class="tabel">
                                    <table style="width:100%">
                                        <tr>
                                            <th rowspan="2">No</th>
                                            <th rowspan="2">Nama Barang</th>
                                            <th rowspan="2">Sumber</th>
                                            <th rowspan="2">Jumlah Barang</th>
                                            <th class="text-center" colspan="3">Kondisi</th>
                                            <th rowspan="2">Keterangan</th>
                                        </tr>
                                        <tr>
                                            <th>BB</th>
                                            <th>RR</th>
                                            <th>RB</th>
                                        </tr>
                                        @foreach ($alkom as $alkoms)
                                        <tr>
                                            <td>{{$loop->iteration}}</td>
                                            <td>{{$alkoms->nama_barang}}</td>
                                            <td>{{$alkoms->sumber}} </td>
                                            <td>{{$alkoms->jml_barang}}</td>
                                            <td>{{$alkoms->kondisi_bb}}</td>
                                            <td>{{$alkoms->kondisi_rr}}</td>
                                            <td>{{$alkoms->kondisi_rb}}</td>
                                            <td>{{$alkoms->keterangan}}</td>
                                        </tr>
                                        @endforeach
                                    </table>
                                </div>

                                <p class="sub-chapter">Data JarKomDat</p>
                                <li>Data Indihome</li>
                                <div class="tabel">
                                    <table style="width:100%">
                                        <tr>
                                            <th rowspan="2">No</th>
                                            <th rowspan="2">Nama Barang</th>
                                            <th rowspan="2">Sumber</th>
                                            <th rowspan="2">Jumlah Barang</th>
                                            <th class="text-center" colspan="3">Kondisi</th>
                                            <th rowspan="2">Keterangan</th>
                                        </tr>
                                        <tr>
                                            <th>BB</th>
                                            <th>RR</th>
                                            <th>RB</th>
                                        </tr>
                                        @foreach ($indi as $inhome)
                                        <tr>
                                            <td>{{$loop->iteration}}</td>
                                            <td>{{$inhome->nama_barang}}</td>
                                            <td>{{$inhome->sumber}} </td>
                                            <td>{{$inhome->jml_barang}}</td>
                                            <td>{{$inhome->kondisi_bb}}</td>
                                            <td>{{$inhome->kondisi_rr}}</td>
                                            <td>{{$inhome->kondisi_rb}}</td>
                                            <td>{{$inhome->keterangan}}</td>
                                        </tr>
                                        @endforeach
                                    </table>
                                </div>
                                <li>Data Telepon</li>
                                <div class="tabel">
                                    <table style="width:100%">
                                        <tr>
                                            <th rowspan="2">No</th>
                                            <th rowspan="2">Nama Barang</th>
                                            <th rowspan="2">Sumber</th>
                                            <th rowspan="2">Jumlah Barang</th>
                                            <th class="text-center" colspan="3">Kondisi</th>
                                            <th rowspan="2">Keterangan</th>
                                        </tr>
                                        <tr>
                                            <th>BB</th>
                                            <th>RR</th>
                                            <th>RB</th>
                                        </tr>
                                        @foreach ($telp as $telpon)
                                        <tr>
                                            <td>{{$loop->iteration}}</td>
                                            <td>{{$telpon->nama_barang}}</td>
                                            <td>{{$telpon->sumber}} </td>
                                            <td>{{$telpon->jml_barang}}</td>
                                            <td>{{$telpon->kondisi_bb}}</td>
                                            <td>{{$telpon->kondisi_rr}}</td>
                                            <td>{{$telpon->kondisi_rb}}</td>
                                            <td>{{$telpon->keterangan}}</td>
                                        </tr>
                                        @endforeach
                                    </table>
                                </div>
                                <li>Data Intranet</li>
                                <div class="tabel">
                                    <table style="width:100%">
                                        <tr>
                                            <th rowspan="2">No</th>
                                            <th rowspan="2">Nama Barang</th>
                                            <th rowspan="2">Sumber</th>
                                            <th rowspan="2">Jumlah Barang</th>
                                            <th class="text-center" colspan="3">Kondisi</th>
                                            <th rowspan="2">Keterangan</th>
                                        </tr>
                                        <tr>
                                            <th>BB</th>
                                            <th>RR</th>
                                            <th>RB</th>
                                        </tr>
                                        @foreach ($intranet as $intran)
                                        <tr>
                                            <td>{{$loop->iteration}}</td>
                                            <td>{{$intran->nama_barang}}</td>
                                            <td>{{$intran->sumber}} </td>
                                            <td>{{$intran->jml_barang}}</td>
                                            <td>{{$intran->kondisi_bb}}</td>
                                            <td>{{$intran->kondisi_rr}}</td>
                                            <td>{{$intran->kondisi_rb}}</td>
                                            <td>{{$intran->keterangan}}</td>
                                        </tr>
                                        @endforeach
                                    </table>
                                </div>
                                <li>Data Wifi.id</li>
                                <div class="tabel">
                                    <table style="width:100%">
                                        <tr>
                                            <th rowspan="2">No</th>
                                            <th rowspan="2">Nama Barang</th>
                                            <th rowspan="2">Sumber</th>
                                            <th rowspan="2">Jumlah Barang</th>
                                            <th class="text-center" colspan="3">Kondisi</th>
                                            <th rowspan="2">Keterangan</th>
                                        </tr>
                                        <tr>
                                            <th>BB</th>
                                            <th>RR</th>
                                            <th>RB</th>
                                        </tr>
                                        @foreach ($wifi as $wifii)
                                        <tr>
                                            <td>{{$loop->iteration}}</td>
                                            <td>{{$wifii->nama_barang}}</td>
                                            <td>{{$wifii->sumber}} </td>
                                            <td>{{$wifii->jml_barang}}</td>
                                            <td>{{$wifii->kondisi_bb}}</td>
                                            <td>{{$wifii->kondisi_rr}}</td>
                                            <td>{{$wifii->kondisi_rb}}</td>
                                            <td>{{$wifii->keterangan}}</td>
                                        </tr>
                                        @endforeach
                                    </table>
                                </div>
                                <li>Data Astinet</li>
                                <div class="tabel">
                                    <table style="width:100%">
                                        <tr>
                                            <th rowspan="2">No</th>
                                            <th rowspan="2">Nama Barang</th>
                                            <th rowspan="2">Sumber</th>
                                            <th rowspan="2">Jumlah Barang</th>
                                            <th class="text-center" colspan="3">Kondisi</th>
                                            <th rowspan="2">Keterangan</th>
                                        </tr>
                                        <tr>
                                            <th>BB</th>
                                            <th>RR</th>
                                            <th>RB</th>
                                        </tr>
                                        @foreach ($asti as $astin)
                                        <tr>
                                            <td>{{$loop->iteration}}</td>
                                            <td>{{$astin->nama_barang}}</td>
                                            <td>{{$astin->sumber}} </td>
                                            <td>{{$astin->jml_barang}}</td>
                                            <td>{{$astin->kondisi_bb}}</td>
                                            <td>{{$astin->kondisi_rr}}</td>
                                            <td>{{$astin->kondisi_rb}}</td>
                                            <td>{{$astin->keterangan}}</td>
                                        </tr>
                                        @endforeach
                                    </table>
                                </div>

                                <p class="sub-chapter">Data Barang</p>
                                <li>Data Barang</li>
                                <div class="tabel">
                                    <table style="width:100%">
                                        <tr>
                                            <th rowspan="2">No</th>
                                            <th rowspan="2">Nama Barang</th>
                                            <th rowspan="2">Jenis Barang</th>
                                            <th rowspan="2">Sumber</th>
                                            <th rowspan="2">Jumlah Barang</th>
                                            <th class="text-center" colspan="3">Kondisi</th>
                                            <th rowspan="2">Keterangan</th>
                                        </tr>
                                        <tr>
                                            <th>BB</th>
                                            <th>RR</th>
                                            <th>RB</th>
                                        </tr>
                                        @foreach ($barang as $item)
                                        <tr>
                                            <td>
                                                {{ $loop->iteration }} {{-- Starts with 1 --}}</td>
                                            <td>{{$item->nama_barang}}</td>
                                            <td>{{$item->jenis_barang}} </td>
                                            <td>{{$item->sumber}} </td>
                                            <td>{{$item->jml_barang}}</td>
                                            <td>{{$item->kondisi_bb}}</td>
                                            <td>{{$item->kondisi_rr}}</td>
                                            <td>{{$item->kondisi_rb}}</td>
                                            <td>{{$item->keterangan}}</td>
                                        </tr>
                                        @endforeach
                                    </table>
                                </div>
                                <li>Anggaran sumber dari Pemeliharaan Komlek/Harkomlek, Pengepakan/pengiriman surat, dukungan sehari-hari Perkantoran/pengadaan ATK dan Dukungan operasional Kepolisian lainnya dalam DIPA TA 2022:
                                    <br>Alokasi anggaran yang diterima Sitikpol {{$polres[0]->nama_polres}} dalam TA {{Carbon::now()->format('Y')}} sebesar Rp{{""}}@php
                                        foreach ($accepted as $anggaran){
                                            if ($i === 2 | $i === 5 | $i === 8){
                                                echo ".";
                                            }
                                            echo "$anggaran";
                                            $i++;
                                        }
                                    @endphp,-
                                    {{-- @foreach ($accepted as $anggaran)
                                    @if ($i === 2 or $i === 5 or $i === 8)
                                        .
                                    @endif
                                    {{trim($anggaran)}}
                                        @php
                                            $i++;
                                        @endphp
                                    @endforeach,- --}}
                                </li>
                            </ol>
                        </div>
                    </ol>
                </div>
                <li class="bab">PELAKSANAAN TUGAS</li>
                <div>
                    <ol type="1">
                        <li class="sub-bab">Berdasarkan Perkap Kapolri Nomor: 23 Tahun 2010 Tanggal 30 September 2010 Pasal 73 Sitikpol bertugas:</li>
                        <div class="konten">
                            <ol type="a">
                                <li>Menyelenggarakan pelayanan teknologi komunikasi dan teknologi informasi, meliputi kegiatan komunikasi Kepolisian, pengumpulan dan pengolahan serta penyajian data, termasuk informasi kriminal dan pelayanan multimedia.</li>
                                <li>Dalam pelaksanaan tugas sebagaimana tersebut di atas, Sitikpol menyelenggarakan fungsi:</li>
                                <ol type="1">
                                    <li>Pemeliharaan jaringan komunikasi Kepolisian dan data, serta pelayanan telekomunikasi.</li>
                                    <li>Pemeliharaan jaringan komunikasi meliputi jaringan internet, intranet/VPN dan jaringan komunikasi radio/alkom di lingkungan {{$polres[0]->nama_polres}} dan Polsek Jajaran.</li>
                                    <li>Penyelenggaraan koordinasi dalam penggunaan teknologi komunikasi dan informasi dengan satuan fungsi di lingkungan {{$polres[0]->nama_polres}}</li>
                                </ol>
                                <li>Dalam pelaksanaan tugas, KaSitikpol dibantu oleh:</li>
                                <ol type="1">
                                    <li>Baur Teknologi Komunikasi (Baur Tekom), yang bertugas melaksanakan pemeliharaan jaringan komunikasi kepolisian dan data, serta pelayanan telekomunikasi.</li>
                                    <li>Baur Teknologi Informasi (Baur Tekinfo), yang bertugas menyelenggarakan sistem informasi meliputi pengumpulan dan pengolahan data Polrestabes serta sistem informasi kriminal.</li>
                                </ol>
                            </ol>
                        </div>
                        <li class="sub-bab">Pelaksanaan tugas Sitikpol {{$polres[0]->nama_polres}} bulan {{$bulan[Carbon::now()->month]}} {{Carbon::now()->format('Y')}} sebagaimana terlampir.</li>
                        <div class="konten">
                            <ol type="a">
                                {{-- <li>"Nama Giat"</li>
                                <p>"Keterangan Giat"</p>
                                @foreach ($giat as $item)
                                    <li>{{$item->nama}}</li>
                                    <p>{{$item->keterangan}}</p>
                                @endforeach --}}
                            </ol>
                        </div>
                    </ol>
                </div>
                <li class="bab">HAMBATAN YANG TERJADI</li>
                <div class="konten">
                    <ol type="1">
                        @foreach ($hambatan as $item)
                        <li>
                            {{$item->hambatan}}
                        </li>
                        @endforeach
                    </ol>
                </div>
                <li class="bab">KESIMPULAN DAN SARAN</li>
                <div>
                    <ol type="1">
                        <li class="sub-bab">Kesimpulan</li>
                        <div class="konten">
                            @foreach ($kesimpulan as $item)
                            <p>
                                {{$item->kesimpulan}}
                            </p>
                            @endforeach
                        </div>
                        <li class="sub-bab">Saran</li>
                        <div class="konten">
                            <ol type="a">
                                @foreach ($saran as $item)
                                <li>
                                    {{$item->saran}}
                                </li>
                                @endforeach
                            </ol>
                        </div>
                    </ol>
                </div>
                <li class="bab">PENUTUP</li>
                <div>
                    <p>Demikian laporan bulanan Sitikpol {{$polres[0]->nama_polres}} ini dibuat untuk menjadi maklum dan dapatnya dijadikan masukan bahan evaluasi bahan pimpinan di satuan atas guna menentukan kebijakan pelaksanaan tugas selanjutnya yang lebih baik.</p>
                </div>
            </ol>
        </div>
        <div class="text-center ms-auto footer" style="width:320px">
            @if ($kasitik->isEmpty())
            <p>Kasi TIK {{$polres[0]->nama_polres}}</p>
            @else
            <p>
                @foreach ($message as $mess)
                @if ($loop->first) @continue @endif
                    {{$mess}}@endforeach, {{Carbon::now()->format('d ') . $bulan[Carbon::now()->month] . Carbon::now()->format(' Y')}}</p>
            <p>Kasi TIK {{$polres[0]->nama_polres}}</p>
            @endif
            <br><br><br><br>
            @if ($kasitik->isEmpty())
            <p><u>
                Masukkan Personil Berjabatan Kasi TIK
            </u></p>
            @else
            <p><u>{{$kasitik[0]->nama_personil}}</u></p>
            <p>{{$kasitik[0]->pangkat_personil}}, NRP {{$kasitik[0]->nrp_personil}}</p>
            @endif
        </div>
        <br>
        <div class="page-break"></div>
        <div class="text-center mx-auto my-3" style="text-transform: uppercase;">
            <p><u>DOKUMENTASI GIAT TIK {{$polres[0]->nama_polres}} PADA BULAN {{$bulan[Carbon::now()->month]}}</u></p>
        </div>
        <div class="tabel">
            <table style="width:100%">
                <tr>
                    <th >No</th>
                    <th >Nama Giat</th>
                    <th >Tanggal Giat</th>
                    <th >Keterangan</th>
                    <th >Dokumentasi</th>
                </tr>
                @foreach ($giat as $item)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$item->nama}}</td>
                    <td>{{$item->tanggal}}</td>
                    <td>{{$item->keterangan}}</td>
                    @if (isset($item->image))
                    <td><img src="{{public_path('/'.$item->image)}}" style="height: 100px; width: flex;"></td>
                    @else
                    <td></td>
                    @endif
                </tr>
                @endforeach
            </table>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    </body>
</html>
