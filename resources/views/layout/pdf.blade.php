@php

use Carbon\Carbon;

$message = preg_split('/[\s,]+/', $polres[0]->nama_polres, 3)
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
            }
            .header {
                border-bottom: 1px solid #000;
                padding-bottom: 5px;
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
            <img src="{{asset('/images/logo.png')}}" alt="tribarata" width="100px;" class="mb-2">
            <p>LAPORAN BULANAN</p>
            <p>SIE TIK POLRI {{$polres[0]->nama_polres}}</p>
            <p>BULAN "nama bulan"</p>
        </div>
        <div>
            <ol type="I">
                <li class="bab">PENDAHULUAN</li>
                <div>
                    <ol type="1">
                        <li class="sub-bab">Dasar</li>
                        <div class="konten">
                            <ol type="a">
                                <li>Undang-undang No. 2 Th. 2002 tentang Kepolisisan Negara Republik Indonesia;</li>
                                <li>Peraturan Kapolri Nomor : 23 tahun 2010 tanggal 30 September 2010 pasal 73 tentang tugas fungsi Sitikpol;</li>
                                <li>Surat Telegram Kapolri nomor : ST/1410/VI/2012 tanggal 29 Juni 2012 tentang laporan bulanan pelaksanaan tugas masing-masing satfung jajaran bidang teknologi seluruh indonesia;</li>
                                <li>Surat telegram Kapolda Jawa timur nomor : ST/2724/X/REN.4.1.3/2018, tanggal 29 Nopember 2018, tentang permintan pengiriman laporan bulanan.</li>
                                <li>Surat Telegram Kapolda Jawa timur nomor : ST/2726/XII/REN.4.1.3/2021, tanggal 21 Desember 2021, tentang hasil rekap laporan bulanan kepada BID TIK Polda Jatim.</li>
                            </ol>
                        </div>
                        <li class="sub-bab">Maksud dan Tujuan</li>
                        <div class="konten">
                            <ol type="a">
                                <li>Memberikan gambaran secara garis besar tentang pelaksanaan tugas dan kegiatan Sitikpol "{nama polres}" pada "nama bulan" "tahun"</li>
                                <li>Dapatnya dijadikan bahan masukan bagi pimpinan guna mengevaluasi pelaksanaan tugas Sitikpol "{nama polres}" yang telah dilaksanakan, guna untuk menentukan kebijakan pelaksanaan tugas lebih lanjut.</li>
                            </ol>
                        </div>
                        <li class="sub-bab">Ruang Lingkup</li>
                        <div class="konten">
                            <p style="margin:0;">Laporan bulanan Sitikpol "{nama polres}" ini dibuat meliputi situasi dan kondisi personil maupun materiil yang ada pelaksanaan tugas dan hasil yang di capai serta hambatan yang terjadi dan saran yang diajukan</p>
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
                <li class="bab">KONDISI PERSONIL DAN MATERIIL</li>
                <div>
                    <ol type="1">
                        <li class="sub-bab">Kondisi Personil</li>
                        <div class="konten">
                            <ol type="a">
                                <li>Secara kuantitas jumlah personil Sitikpol "{nama polres}" serta pendidikan terakhir (Dikum/Dikbang) yang dimiliki dapat digambarkan sebagai berikut:</li>
                                <li>Berdasarkan Perkap Kapolri Nomor 23 Tahun 2010 tanggal 30 September 2010 maka jumlah DSPP personil Sitikpol kekurangan 1 personil, sedangkan Riil Personil di Sitikpol saat ini Jumlah "" Personil yang terdiri dari: "" KaSitikpol dibantu "" Baur, "" Bamin, dan "" Baurmin, adapun kekurangan ""</li>
                                <table>""</table>
                            </ol>
                        </div>
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
                                            <td>{{$sites->id}}</td>
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
                                            <td>{{$alkoms->id}}</td>
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
                                            <td>{{$inhome->id}}</td>
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
                                            <td>{{$telpon->id}}</td>
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
                                            <td>{{$intran->id}}</td>
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
                                            <td>{{$wifii->id}}</td>
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
                                            <td>{{$astin->id}}</td>
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
                                    <br>Alokasi anggaran yang diterima Sitikpol "{nama polres}" dalam TA "tahun" sebesar ""
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
                                    <li>Pemeliharaan jaringan komunikasi meliputi jaringan internet, intranet/VPN dan jaringan komunikasi radio/alkom di lingkungan "{nama polres}" dan Polsek Jajaran.</li>
                                    <li>Penyelenggaraan koordinasi dalam penggunaan teknologi komunikasi dan informasi dengan satuan fungsi di lingkungan "{nama polres}"</li>
                                </ol>
                                <li>Dalam pelaksanaan tugas, KaSitikpol dibantu oleh:</li>
                                <ol type="1">
                                    <li>Baur Teknologi Komunikasi (Baur Tekom), yang bertugas melaksanakan pemeliharaan jaringan komunikasi kepolisian dan data, serta pelayanan telekomunikasi.</li>
                                    <li>Baur Teknologi Informasi (Baur Tekinfo), yang bertugas menyelenggarakan sistem informasi meliputi pengumpulan dan pengolahan data Polrestabes serta sistem informasi kriminal.</li>
                                </ol>
                            </ol>
                        </div>
                        <li class="sub-bab">Pelaksanaan tugas Sitikpol "{nama polres}" bulan "bulan" "tahun":</li>
                        <div class="konten">
                            <ol type="a">
                                <li>"Nama Giat"</li>
                                <p>"Keterangan Giat"</p>
                            </ol>
                        </div>
                    </ol>
                </div>
                <li class="bab">HAMBATAN YANG TERJADI</li>
                <div class="konten">
                    <ol type="1">
                        <li>"isian"</li>
                    </ol>
                </div>
                <li class="bab">KESIMPULAN DAN SARAN</li>
                <div>
                    <ol type="1">
                        <li class="sub-bab">Kesimpulan</li>
                        <div class="konten">
                            <p>"isian"</p>
                        </div>
                        <li class="sub-bab">Saran</li>
                        <div class="konten">
                            <ol type="a">
                                <li>"isian"</li>
                            </ol>
                        </div>
                    </ol>
                </div>
                <li class="bab">PENUTUP</li>
                <div>
                    <p>Demikian laporan bulanan Sitikpol "{nama polres}" ini dibuat untuk menjadi maklum dan dapatnya dijadikan masukan bahan evaluasi bahan pimpinan di satuan atas guna menentukan kebijakan pelaksanaan tugas selanjutnya yang lebih baik.</p>
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
                    {{$mess}}
                @endforeach, {{Carbon::now()->format('d F Y')}}</p>
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


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    </body>
</html>
