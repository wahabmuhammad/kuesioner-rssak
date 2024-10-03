<!DOCTYPE html>
<html lang="en">

<head>

    <title>Kuesioner | Rumah Sakit Sarkies 'Aisyiyah Kudus</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="theme-color" content="#0B1354">
    <meta name="description" content="">
    <meta name="keywords" content="">
    
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="Rumah Sakit Sarkies 'Aisyiyah Kudus">
    <link rel="apple-touch-icon" href="{{asset('assets/Logo_RSSA.png')}}">
    <link rel="shortcut icon" href="{{asset('assets/Logo_RSSA.png')}}">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,600;1,700;1,800;1,900&amp;display=swap"
        rel="stylesheet">

    <!-- ionicons -->
    <link rel="stylesheet" href="https://kuesionersolo.rs-jih.co.id/assets/front/fonts/ionicons/css/ionicons.min.css">

    <!-- font awesome -->
    <link rel="stylesheet"
        href="https://kuesionersolo.rs-jih.co.id/assets/front/vendors/fontawesome/css/fontawesome-all.css">

    <!-- bootstrap -->
    <link rel="stylesheet"
        href="https://kuesionersolo.rs-jih.co.id/assets/front/vendors/bootstrap/css/bootstrap.min.css">

    <!-- owl.carousel -->
    <link rel="stylesheet" href="https://kuesionersolo.rs-jih.co.id/assets/front/vendors/owl-carousel/owl.carousel.css">
    <link rel="stylesheet"
        href="https://kuesionersolo.rs-jih.co.id/assets/front/vendors/owl-carousel/owl.theme.default.css">

    <!-- jquery fancybox -->
    <link rel="stylesheet"
        href="https://kuesionersolo.rs-jih.co.id/assets/front/vendors/jquery-fancybox/jquery.fancybox.min.css">

    <!-- jquery nice select -->
    <link rel="stylesheet"
        href="https://kuesionersolo.rs-jih.co.id/assets/front/vendors/jquery-nice-select/nice-select.css">

    <!-- style -->
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">

    <!-- jquery -->
    <script src="https://kuesionersolo.rs-jih.co.id/assets/front/vendors/jquery/jquery.min.js"></script>

   
</head>

<body>

    <div class="site-wrap">
        <div class="wrap-page">
            <style type="text/css">
                .manp {
                    position: relative;
                    overflow: hidden;
                    height: 0 !important;
                }
            </style>

            <section class="section-md bg-image center intro"
                data-background="{{asset('assets/P10.png')}}"
                style="background-image: url(&quot;{{asset('assets/P10.png')}}&quot;);">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-md-10 m-auto">
                            <div class="block-text text-center">
                                <a href="https://www.rs-jih.co.id/rsjihsolo/">
                                    <img data-src="{{asset('assets/logo center HD.png')}}"
                                        class="img-fluid mb-5 lazyloaded"
                                        src="{{asset('assets/logo center HD.png')}}" style="width:70%; height: auto;">
                                </a>
                                <p class="section-subheading font-weight-800 mb-3">BERIKAN PENILAIAN PADA PELAYANAN KAMI
                                </p>
                                <h2 class="section-heading-md"><span>Seberapa</span> Puaskah Anda <span>Terhadap</span>
                                    Pelayanan <span>Kami?</span></h2>
                            </div>
                        </div>
                    </div>
                </div>
            </section>


            <section class="section-sm kuesioner">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-10 m-auto">
                            <form  id="form-kuesioner" class="form-style" novalidate="novalidate">
                                @csrf
                                @method('POST')
                                <input type="hidden" name="id_survey" value="2">
                                <div class="form-group">
                                    <label class="control-label text-2 mb-0">Responden</label><br>
                                    <div
                                        class="custom-radio custom-control custom-control-inline custom-control-sm mr-md-2">
                                        <input type="radio" class="custom-control-input cresponden" id="respasi"
                                            name="responden" value="pasien">
                                        <label for="respasi" class="custom-control-label"><b>Pasien</b></label>
                                    </div>
                                    <div class="custom-radio custom-control custom-control-inline custom-control-sm">
                                        <input type="radio" class="custom-control-input cresponden" id="respeng"
                                            name="responden" value="pengunjung">
                                        <label for="respeng" class="custom-control-label"><b>Pengunjung</b></label>
                                    </div>
                                    <p class="feed_responden mt-0"></p>
                                </div>
                                <div class="mt-3 mb-3">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="control-label">Nama Poliklinik</label>
                                                <select name="nama_poliklinik" id="nama_poliklinik"
                                                    class="form-control">
                                                    <option value="">Pilih poliklinik</option>
                                                    <option value="1">Penyakit Dalam</option>
                                                    <option value="2">Anak</option>
                                                    <option value="3">Pain Centre</option>
                                                    <option value="4">Bedah</option>
                                                    <option value="5">Saraf</option>
                                                    <option value="6">Gigi &amp; Mulut</option>
                                                    <option value="7">Jantung</option>
                                                    <option value="8">Kebidanan &amp; Kandungan</option>
                                                    <option value="9">Kulit &amp; Kelamin</option>
                                                    <option value="10">Mata</option>
                                                    <option value="11">Paru - Paru</option>
                                                    <option value="12">Psikiatri</option>
                                                    <option value="13">Radiologi</option>
                                                    <option value="14">THT</option>
                                                    <option value="15">Umum</option>
                                                    <option value="16">UGD</option>
                                                    <option value="17">KIA</option>
                                                    <option value="18">Rawat Jalan</option>
                                                    <option value="19">Poli Vaksin</option>
                                                    <option value="20">HLC - Medical Check Up</option>
                                                    <option value="21">Rawat Inap</option>
                                                </select>
                                            </div>

                                            <div class="form-group">
                                                <label class="control-label">Nama Dokter</label>
                                                <select name="nama_dokter" id="nama_dokter"
                                                    class="form-control">
                                                    <option value="">Pilih nama Dokter</option>
                                                    <option value="1">Penyakit Dalam</option>
                                                    <option value="2">Anak</option>
                                                    <option value="3">Pain Centre</option>
                                                    <option value="4">Bedah</option>
                                                    <option value="5">Saraf</option>
                                                    <option value="6">Gigi &amp; Mulut</option>
                                                    <option value="7">Jantung</option>
                                                    <option value="8">Kebidanan &amp; Kandungan</option>
                                                    <option value="9">Kulit &amp; Kelamin</option>
                                                    <option value="10">Mata</option>
                                                    <option value="11">Paru - Paru</option>
                                                    <option value="12">Psikiatri</option>
                                                    <option value="13">Radiologi</option>
                                                    <option value="14">THT</option>
                                                    <option value="15">Umum</option>
                                                    <option value="16">UGD</option>
                                                    <option value="17">KIA</option>
                                                    <option value="18">Rawat Jalan</option>
                                                    <option value="19">Poli Vaksin</option>
                                                    <option value="20">HLC - Medical Check Up</option>
                                                    <option value="21">Rawat Inap</option>
                                                </select>
                                            </div>

                                            <div class="form-group">
                                                <label class="control-label">Nama Pasien</label>
                                                <input type="text" name="nama_pasien" id="nama_pasien"
                                                    placeholder="Isikan nama Anda" class="form-control"
                                                    autocomplete="off">
                                            </div>

                                            <div class="form-group">
                                                <label class="control-label">Nomor Telp</label>
                                                <input type="tel" name="no_telp" id="no_telp"
                                                    placeholder="contoh: +62 856 94xxxxxx" class="form-control"
                                                    autocomplete="off">
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group" style="height: 92%;">
                                                <label class="control-label">Kritik dan Saran</label>
                                                <textarea name="kritik_saran" id="kritik_saran" class="form-control h-100"
                                                    placeholder="Isikan Kritik dan saran Anda" autocomplete="off"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group mb-4">
                                    <input type="hidden" name="question[1]" value="16">
                                    <label class="control-label text-2">Kepuasan Rumah Sakit</label>

                                    <div class="flex-5-column">
                                        <div class="flex-col">
                                            <div class="radio-tile-group radio-emoticon">
                                                <input type="radio" name="rate[1]" id="question16" value="1"
                                                    class="radio-button">

                                                <div class="radio-tile feed1">
                                                    <label for="question16" class="radio-tile-label">
                                                        <img data-src="{{asset('assets/sangat-tidak-puas-OSHW79BG.svg')}}"
                                                            class="img-fluid img-emoticon lazyloaded"
                                                            src="{{asset('assets/sangat-tidak-puas-OSHW79BG.svg')}}">
                                                        <p class="section-description-xs text-center mt-2 mb-0">Sangat
                                                            tidak puas</p>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex-col">
                                            <div class="radio-tile-group radio-emoticon">
                                                <input type="radio" name="rate[1]" id="question16" value="2"
                                                    class="radio-button">

                                                <div class="radio-tile feed1">
                                                    <label for="question16" class="radio-tile-label">
                                                        <img data-src="{{asset('assets/tidak-puas-WON8YKBP.svg')}}"
                                                            class="img-fluid img-emoticon lazyloaded"
                                                            src="{{asset('assets/tidak-puas-WON8YKBP.svg')}}">
                                                        <p class="section-description-xs text-center mt-2 mb-0">Tidak
                                                            puas</p>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex-col">
                                            <div class="radio-tile-group radio-emoticon">
                                                <input type="radio" name="rate[1]" id="question16" value="3"
                                                    class="radio-button">

                                                <div class="radio-tile feed1">
                                                    <label for="question16" class="radio-tile-label">
                                                        <img data-src="{{asset('assets/netral-FZC3L8X4.svg')}}"
                                                            class="img-fluid img-emoticon lazyloaded"
                                                            src="{{asset('assets/netral-FZC3L8X4.svg')}}">
                                                        <p class="section-description-xs text-center mt-2 mb-0">Netral
                                                        </p>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex-col">
                                            <div class="radio-tile-group radio-emoticon">
                                                <input type="radio" name="rate[1]" id="question16" value="4"
                                                    class="radio-button">

                                                <div class="radio-tile feed1">
                                                    <label for="question16" class="radio-tile-label">
                                                        <img data-src="{{asset('assets/puas-7KQ64Y8R.svg')}}"
                                                            class="img-fluid img-emoticon lazyloaded"
                                                            src="{{asset('assets/puas-7KQ64Y8R.svg')}}">
                                                        <p class="section-description-xs text-center mt-2 mb-0">Puas
                                                        </p>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex-col">
                                            <div class="radio-tile-group radio-emoticon">
                                                <input type="radio" name="rate[1]" id="question16" value="5"
                                                    class="radio-button">

                                                <div class="radio-tile feed1">
                                                    <label for="question16" class="radio-tile-label">
                                                        <img data-src="{{asset('assets/sangat-puas-QM3CKG0R.svg')}}"
                                                            class="img-fluid img-emoticon lazyloaded"
                                                            src="{{asset('assets/sangat-puas-QM3CKG0R.svg')}}">
                                                        <p class="section-description-xs text-center mt-2 mb-0">Sangat
                                                            puas</p>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group mb-4">
                                    <input type="hidden" name="question[2]" value="17">
                                    <label class="control-label text-2">Alur Pelayanan</label>

                                    <div class="flex-5-column">
                                        <div class="flex-col">
                                            <div class="radio-tile-group radio-emoticon">
                                                <input type="radio" name="rate[2]" id="question17" value="1"
                                                    class="radio-button">

                                                <div class="radio-tile feed2">
                                                    <label for="question17" class="radio-tile-label">
                                                        <img data-src="{{asset('assets/sangat-tidak-puas-OSHW79BG.svg')}}"
                                                            class="img-fluid img-emoticon ls-is-cached lazyloaded"
                                                            src="{{asset('assets/sangat-tidak-puas-OSHW79BG.svg')}}">
                                                        <p class="section-description-xs text-center mt-2 mb-0">Sangat
                                                            tidak puas</p>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex-col">
                                            <div class="radio-tile-group radio-emoticon">
                                                <input type="radio" name="rate[2]" id="question17" value="2"
                                                    class="radio-button">

                                                <div class="radio-tile feed2">
                                                    <label for="question17" class="radio-tile-label">
                                                        <img data-src="https://kuesionersolo.rs-jih.co.id/file/rate/tidak-puas-WON8YKBP.svg"
                                                            class="img-fluid img-emoticon ls-is-cached lazyloaded"
                                                            src="https://kuesionersolo.rs-jih.co.id/file/rate/tidak-puas-WON8YKBP.svg">
                                                        <p class="section-description-xs text-center mt-2 mb-0">Tidak
                                                            puas</p>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex-col">
                                            <div class="radio-tile-group radio-emoticon">
                                                <input type="radio" name="rate[2]" id="question17" value="3"
                                                    class="radio-button">

                                                <div class="radio-tile feed2">
                                                    <label for="question17" class="radio-tile-label">
                                                        <img data-src="https://kuesionersolo.rs-jih.co.id/file/rate/netral-FZC3L8X4.svg"
                                                            class="img-fluid img-emoticon ls-is-cached lazyloaded"
                                                            src="https://kuesionersolo.rs-jih.co.id/file/rate/netral-FZC3L8X4.svg">
                                                        <p class="section-description-xs text-center mt-2 mb-0">Netral
                                                        </p>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex-col">
                                            <div class="radio-tile-group radio-emoticon">
                                                <input type="radio" name="rate[2]" id="question17" value="4"
                                                    class="radio-button">

                                                <div class="radio-tile feed2">
                                                    <label for="question17" class="radio-tile-label">
                                                        <img data-src="https://kuesionersolo.rs-jih.co.id/file/rate/puas-7KQ64Y8R.svg"
                                                            class="img-fluid img-emoticon ls-is-cached lazyloaded"
                                                            src="https://kuesionersolo.rs-jih.co.id/file/rate/puas-7KQ64Y8R.svg">
                                                        <p class="section-description-xs text-center mt-2 mb-0">Puas
                                                        </p>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex-col">
                                            <div class="radio-tile-group radio-emoticon">
                                                <input type="radio" name="rate[2]" id="question17" value="5"
                                                    class="radio-button">

                                                <div class="radio-tile feed2">
                                                    <label for="question17" class="radio-tile-label">
                                                        <img data-src="https://kuesionersolo.rs-jih.co.id/file/rate/sangat-puas-QM3CKG0R.svg"
                                                            class="img-fluid img-emoticon ls-is-cached lazyloaded"
                                                            src="https://kuesionersolo.rs-jih.co.id/file/rate/sangat-puas-QM3CKG0R.svg">
                                                        <p class="section-description-xs text-center mt-2 mb-0">Sangat
                                                            puas</p>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group mb-4">
                                    <input type="hidden" name="question[3]" value="18">
                                    <label class="control-label text-2">Fasilitas</label>

                                    <div class="flex-5-column">
                                        <div class="flex-col">
                                            <div class="radio-tile-group radio-emoticon">
                                                <input type="radio" name="rate[3]" id="question18" value="1"
                                                    class="radio-button">

                                                <div class="radio-tile feed3">
                                                    <label for="question18" class="radio-tile-label">
                                                        <img data-src="https://kuesionersolo.rs-jih.co.id/file/rate/sangat-tidak-puas-OSHW79BG.svg"
                                                            class="img-fluid img-emoticon ls-is-cached lazyloaded"
                                                            src="https://kuesionersolo.rs-jih.co.id/file/rate/sangat-tidak-puas-OSHW79BG.svg">
                                                        <p class="section-description-xs text-center mt-2 mb-0">Sangat
                                                            tidak puas</p>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex-col">
                                            <div class="radio-tile-group radio-emoticon">
                                                <input type="radio" name="rate[3]" id="question18" value="2"
                                                    class="radio-button">

                                                <div class="radio-tile feed3">
                                                    <label for="question18" class="radio-tile-label">
                                                        <img data-src="https://kuesionersolo.rs-jih.co.id/file/rate/tidak-puas-WON8YKBP.svg"
                                                            class="img-fluid img-emoticon ls-is-cached lazyloaded"
                                                            src="https://kuesionersolo.rs-jih.co.id/file/rate/tidak-puas-WON8YKBP.svg">
                                                        <p class="section-description-xs text-center mt-2 mb-0">Tidak
                                                            puas</p>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex-col">
                                            <div class="radio-tile-group radio-emoticon">
                                                <input type="radio" name="rate[3]" id="question18" value="3"
                                                    class="radio-button">

                                                <div class="radio-tile feed3">
                                                    <label for="question18" class="radio-tile-label">
                                                        <img data-src="https://kuesionersolo.rs-jih.co.id/file/rate/netral-FZC3L8X4.svg"
                                                            class="img-fluid img-emoticon ls-is-cached lazyloaded"
                                                            src="https://kuesionersolo.rs-jih.co.id/file/rate/netral-FZC3L8X4.svg">
                                                        <p class="section-description-xs text-center mt-2 mb-0">Netral
                                                        </p>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex-col">
                                            <div class="radio-tile-group radio-emoticon">
                                                <input type="radio" name="rate[3]" id="question18" value="4"
                                                    class="radio-button">

                                                <div class="radio-tile feed3">
                                                    <label for="question18" class="radio-tile-label">
                                                        <img data-src="https://kuesionersolo.rs-jih.co.id/file/rate/puas-7KQ64Y8R.svg"
                                                            class="img-fluid img-emoticon ls-is-cached lazyloaded"
                                                            src="https://kuesionersolo.rs-jih.co.id/file/rate/puas-7KQ64Y8R.svg">
                                                        <p class="section-description-xs text-center mt-2 mb-0">Puas
                                                        </p>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex-col">
                                            <div class="radio-tile-group radio-emoticon">
                                                <input type="radio" name="rate[3]" id="question18" value="5"
                                                    class="radio-button">

                                                <div class="radio-tile feed3">
                                                    <label for="question18" class="radio-tile-label">
                                                        <img data-src="https://kuesionersolo.rs-jih.co.id/file/rate/sangat-puas-QM3CKG0R.svg"
                                                            class="img-fluid img-emoticon ls-is-cached lazyloaded"
                                                            src="https://kuesionersolo.rs-jih.co.id/file/rate/sangat-puas-QM3CKG0R.svg">
                                                        <p class="section-description-xs text-center mt-2 mb-0">Sangat
                                                            puas</p>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group mb-4">
                                    <input type="hidden" name="question[4]" value="19">
                                    <label class="control-label text-2">Kesesuaian Biaya</label>

                                    <div class="flex-5-column">
                                        <div class="flex-col">
                                            <div class="radio-tile-group radio-emoticon">
                                                <input type="radio" name="rate[4]" id="question19" value="1"
                                                    class="radio-button">

                                                <div class="radio-tile feed4">
                                                    <label for="question19" class="radio-tile-label">
                                                        <img data-src="https://kuesionersolo.rs-jih.co.id/file/rate/sangat-tidak-puas-OSHW79BG.svg"
                                                            class="img-fluid img-emoticon ls-is-cached lazyloaded"
                                                            src="https://kuesionersolo.rs-jih.co.id/file/rate/sangat-tidak-puas-OSHW79BG.svg">
                                                        <p class="section-description-xs text-center mt-2 mb-0">Sangat
                                                            tidak puas</p>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex-col">
                                            <div class="radio-tile-group radio-emoticon">
                                                <input type="radio" name="rate[4]" id="question19" value="2"
                                                    class="radio-button">

                                                <div class="radio-tile feed4">
                                                    <label for="question19" class="radio-tile-label">
                                                        <img data-src="https://kuesionersolo.rs-jih.co.id/file/rate/tidak-puas-WON8YKBP.svg"
                                                            class="img-fluid img-emoticon ls-is-cached lazyloaded"
                                                            src="https://kuesionersolo.rs-jih.co.id/file/rate/tidak-puas-WON8YKBP.svg">
                                                        <p class="section-description-xs text-center mt-2 mb-0">Tidak
                                                            puas</p>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex-col">
                                            <div class="radio-tile-group radio-emoticon">
                                                <input type="radio" name="rate[4]" id="question19" value="3"
                                                    class="radio-button">

                                                <div class="radio-tile feed4">
                                                    <label for="question19" class="radio-tile-label">
                                                        <img data-src="https://kuesionersolo.rs-jih.co.id/file/rate/netral-FZC3L8X4.svg"
                                                            class="img-fluid img-emoticon ls-is-cached lazyloaded"
                                                            src="https://kuesionersolo.rs-jih.co.id/file/rate/netral-FZC3L8X4.svg">
                                                        <p class="section-description-xs text-center mt-2 mb-0">Netral
                                                        </p>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex-col">
                                            <div class="radio-tile-group radio-emoticon">
                                                <input type="radio" name="rate[4]" id="question19" value="4"
                                                    class="radio-button">

                                                <div class="radio-tile feed4">
                                                    <label for="question19" class="radio-tile-label">
                                                        <img data-src="https://kuesionersolo.rs-jih.co.id/file/rate/puas-7KQ64Y8R.svg"
                                                            class="img-fluid img-emoticon ls-is-cached lazyloaded"
                                                            src="https://kuesionersolo.rs-jih.co.id/file/rate/puas-7KQ64Y8R.svg">
                                                        <p class="section-description-xs text-center mt-2 mb-0">Puas
                                                        </p>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex-col">
                                            <div class="radio-tile-group radio-emoticon">
                                                <input type="radio" name="rate[4]" id="question19" value="5"
                                                    class="radio-button">

                                                <div class="radio-tile feed4">
                                                    <label for="question19" class="radio-tile-label">
                                                        <img data-src="https://kuesionersolo.rs-jih.co.id/file/rate/sangat-puas-QM3CKG0R.svg"
                                                            class="img-fluid img-emoticon ls-is-cached lazyloaded"
                                                            src="https://kuesionersolo.rs-jih.co.id/file/rate/sangat-puas-QM3CKG0R.svg">
                                                        <p class="section-description-xs text-center mt-2 mb-0">Sangat
                                                            puas</p>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group mb-4">
                                    <input type="hidden" name="question[5]" value="20">
                                    <label class="control-label text-2">Pelayanan Dokter</label>

                                    <div class="flex-5-column">
                                        <div class="flex-col">
                                            <div class="radio-tile-group radio-emoticon">
                                                <input type="radio" name="rate[5]" id="question20" value="1"
                                                    class="radio-button">

                                                <div class="radio-tile feed5">
                                                    <label for="question20" class="radio-tile-label">
                                                        <img data-src="https://kuesionersolo.rs-jih.co.id/file/rate/sangat-tidak-puas-OSHW79BG.svg"
                                                            class="img-fluid img-emoticon ls-is-cached lazyloaded"
                                                            src="https://kuesionersolo.rs-jih.co.id/file/rate/sangat-tidak-puas-OSHW79BG.svg">
                                                        <p class="section-description-xs text-center mt-2 mb-0">Sangat
                                                            tidak puas</p>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex-col">
                                            <div class="radio-tile-group radio-emoticon">
                                                <input type="radio" name="rate[5]" id="question20" value="2"
                                                    class="radio-button">

                                                <div class="radio-tile feed5">
                                                    <label for="question20" class="radio-tile-label">
                                                        <img data-src="https://kuesionersolo.rs-jih.co.id/file/rate/tidak-puas-WON8YKBP.svg"
                                                            class="img-fluid img-emoticon ls-is-cached lazyloaded"
                                                            src="https://kuesionersolo.rs-jih.co.id/file/rate/tidak-puas-WON8YKBP.svg">
                                                        <p class="section-description-xs text-center mt-2 mb-0">Tidak
                                                            puas</p>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex-col">
                                            <div class="radio-tile-group radio-emoticon">
                                                <input type="radio" name="rate[5]" id="question20" value="3"
                                                    class="radio-button">

                                                <div class="radio-tile feed5">
                                                    <label for="question20" class="radio-tile-label">
                                                        <img data-src="https://kuesionersolo.rs-jih.co.id/file/rate/netral-FZC3L8X4.svg"
                                                            class="img-fluid img-emoticon ls-is-cached lazyloaded"
                                                            src="https://kuesionersolo.rs-jih.co.id/file/rate/netral-FZC3L8X4.svg">
                                                        <p class="section-description-xs text-center mt-2 mb-0">Netral
                                                        </p>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex-col">
                                            <div class="radio-tile-group radio-emoticon">
                                                <input type="radio" name="rate[5]" id="question20" value="4"
                                                    class="radio-button">

                                                <div class="radio-tile feed5">
                                                    <label for="question20" class="radio-tile-label">
                                                        <img data-src="https://kuesionersolo.rs-jih.co.id/file/rate/puas-7KQ64Y8R.svg"
                                                            class="img-fluid img-emoticon ls-is-cached lazyloaded"
                                                            src="https://kuesionersolo.rs-jih.co.id/file/rate/puas-7KQ64Y8R.svg">
                                                        <p class="section-description-xs text-center mt-2 mb-0">Puas
                                                        </p>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex-col">
                                            <div class="radio-tile-group radio-emoticon">
                                                <input type="radio" name="rate[5]" id="question20" value="5"
                                                    class="radio-button">

                                                <div class="radio-tile feed5">
                                                    <label for="question20" class="radio-tile-label">
                                                        <img data-src="https://kuesionersolo.rs-jih.co.id/file/rate/sangat-puas-QM3CKG0R.svg"
                                                            class="img-fluid img-emoticon ls-is-cached lazyloaded"
                                                            src="https://kuesionersolo.rs-jih.co.id/file/rate/sangat-puas-QM3CKG0R.svg">
                                                        <p class="section-description-xs text-center mt-2 mb-0">Sangat
                                                            puas</p>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group mb-4">
                                    <input type="hidden" name="question[6]" value="21">
                                    <label class="control-label text-2">Pelayanan Perawat</label>

                                    <div class="flex-5-column">
                                        <div class="flex-col">
                                            <div class="radio-tile-group radio-emoticon">
                                                <input type="radio" name="rate[6]" id="question21" value="1"
                                                    class="radio-button">

                                                <div class="radio-tile feed6">
                                                    <label for="question21" class="radio-tile-label">
                                                        <img data-src="https://kuesionersolo.rs-jih.co.id/file/rate/sangat-tidak-puas-OSHW79BG.svg"
                                                            class="img-fluid img-emoticon ls-is-cached lazyloaded"
                                                            src="https://kuesionersolo.rs-jih.co.id/file/rate/sangat-tidak-puas-OSHW79BG.svg">
                                                        <p class="section-description-xs text-center mt-2 mb-0">Sangat
                                                            tidak puas</p>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex-col">
                                            <div class="radio-tile-group radio-emoticon">
                                                <input type="radio" name="rate[6]" id="question21" value="2"
                                                    class="radio-button">

                                                <div class="radio-tile feed6">
                                                    <label for="question21" class="radio-tile-label">
                                                        <img data-src="https://kuesionersolo.rs-jih.co.id/file/rate/tidak-puas-WON8YKBP.svg"
                                                            class="img-fluid img-emoticon ls-is-cached lazyloaded"
                                                            src="https://kuesionersolo.rs-jih.co.id/file/rate/tidak-puas-WON8YKBP.svg">
                                                        <p class="section-description-xs text-center mt-2 mb-0">Tidak
                                                            puas</p>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex-col">
                                            <div class="radio-tile-group radio-emoticon">
                                                <input type="radio" name="rate[6]" id="question21" value="3"
                                                    class="radio-button">

                                                <div class="radio-tile feed6">
                                                    <label for="question21" class="radio-tile-label">
                                                        <img data-src="https://kuesionersolo.rs-jih.co.id/file/rate/netral-FZC3L8X4.svg"
                                                            class="img-fluid img-emoticon ls-is-cached lazyloaded"
                                                            src="https://kuesionersolo.rs-jih.co.id/file/rate/netral-FZC3L8X4.svg">
                                                        <p class="section-description-xs text-center mt-2 mb-0">Netral
                                                        </p>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex-col">
                                            <div class="radio-tile-group radio-emoticon">
                                                <input type="radio" name="rate[6]" id="question21" value="4"
                                                    class="radio-button">

                                                <div class="radio-tile feed6">
                                                    <label for="question21" class="radio-tile-label">
                                                        <img data-src="https://kuesionersolo.rs-jih.co.id/file/rate/puas-7KQ64Y8R.svg"
                                                            class="img-fluid img-emoticon ls-is-cached lazyloaded"
                                                            src="https://kuesionersolo.rs-jih.co.id/file/rate/puas-7KQ64Y8R.svg">
                                                        <p class="section-description-xs text-center mt-2 mb-0">Puas
                                                        </p>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex-col">
                                            <div class="radio-tile-group radio-emoticon">
                                                <input type="radio" name="rate[6]" id="question21" value="5"
                                                    class="radio-button">

                                                <div class="radio-tile feed6">
                                                    <label for="question21" class="radio-tile-label">
                                                        <img data-src="https://kuesionersolo.rs-jih.co.id/file/rate/sangat-puas-QM3CKG0R.svg"
                                                            class="img-fluid img-emoticon ls-is-cached lazyloaded"
                                                            src="https://kuesionersolo.rs-jih.co.id/file/rate/sangat-puas-QM3CKG0R.svg">
                                                        <p class="section-description-xs text-center mt-2 mb-0">Sangat
                                                            puas</p>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group mb-4">
                                    <input type="hidden" name="question[7]" value="22">
                                    <h2 class="section-heading-sm font-weight-800">Pelayanan Penunjang</h2>

                                    <div class="manp">
                                        <input type="radio" name="rate[7]" id="question22" value="0"
                                            class="radio-button" checked="">
                                    </div>
                                </div>

                                <div class="form-group mb-4">
                                    <input type="hidden" name="question[8]" value="23">
                                    <label class="control-label text-2">Laboratorium</label>

                                    <div class="flex-5-column">
                                        <div class="flex-col">
                                            <div class="radio-tile-group radio-emoticon">
                                                <input type="radio" name="rate[8]" id="question23" value="1"
                                                    class="radio-button">

                                                <div class="radio-tile feed8">
                                                    <label for="question23" class="radio-tile-label">
                                                        <img data-src="https://kuesionersolo.rs-jih.co.id/file/rate/sangat-tidak-puas-OSHW79BG.svg"
                                                            class="img-fluid img-emoticon ls-is-cached lazyloaded"
                                                            src="https://kuesionersolo.rs-jih.co.id/file/rate/sangat-tidak-puas-OSHW79BG.svg">
                                                        <p class="section-description-xs text-center mt-2 mb-0">Sangat
                                                            tidak puas</p>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex-col">
                                            <div class="radio-tile-group radio-emoticon">
                                                <input type="radio" name="rate[8]" id="question23" value="2"
                                                    class="radio-button">

                                                <div class="radio-tile feed8">
                                                    <label for="question23" class="radio-tile-label">
                                                        <img data-src="https://kuesionersolo.rs-jih.co.id/file/rate/tidak-puas-WON8YKBP.svg"
                                                            class="img-fluid img-emoticon ls-is-cached lazyloaded"
                                                            src="https://kuesionersolo.rs-jih.co.id/file/rate/tidak-puas-WON8YKBP.svg">
                                                        <p class="section-description-xs text-center mt-2 mb-0">Tidak
                                                            puas</p>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex-col">
                                            <div class="radio-tile-group radio-emoticon">
                                                <input type="radio" name="rate[8]" id="question23" value="3"
                                                    class="radio-button">

                                                <div class="radio-tile feed8">
                                                    <label for="question23" class="radio-tile-label">
                                                        <img data-src="https://kuesionersolo.rs-jih.co.id/file/rate/netral-FZC3L8X4.svg"
                                                            class="img-fluid img-emoticon ls-is-cached lazyloaded"
                                                            src="https://kuesionersolo.rs-jih.co.id/file/rate/netral-FZC3L8X4.svg">
                                                        <p class="section-description-xs text-center mt-2 mb-0">Netral
                                                        </p>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex-col">
                                            <div class="radio-tile-group radio-emoticon">
                                                <input type="radio" name="rate[8]" id="question23" value="4"
                                                    class="radio-button">

                                                <div class="radio-tile feed8">
                                                    <label for="question23" class="radio-tile-label">
                                                        <img data-src="https://kuesionersolo.rs-jih.co.id/file/rate/puas-7KQ64Y8R.svg"
                                                            class="img-fluid img-emoticon ls-is-cached lazyloaded"
                                                            src="https://kuesionersolo.rs-jih.co.id/file/rate/puas-7KQ64Y8R.svg">
                                                        <p class="section-description-xs text-center mt-2 mb-0">Puas
                                                        </p>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex-col">
                                            <div class="radio-tile-group radio-emoticon">
                                                <input type="radio" name="rate[8]" id="question23" value="5"
                                                    class="radio-button">

                                                <div class="radio-tile feed8">
                                                    <label for="question23" class="radio-tile-label">
                                                        <img data-src="https://kuesionersolo.rs-jih.co.id/file/rate/sangat-puas-QM3CKG0R.svg"
                                                            class="img-fluid img-emoticon ls-is-cached lazyloaded"
                                                            src="https://kuesionersolo.rs-jih.co.id/file/rate/sangat-puas-QM3CKG0R.svg">
                                                        <p class="section-description-xs text-center mt-2 mb-0">Sangat
                                                            puas</p>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group mb-4">
                                    <input type="hidden" name="question[9]" value="24">
                                    <label class="control-label text-2">Radiology</label>

                                    <div class="flex-5-column">
                                        <div class="flex-col">
                                            <div class="radio-tile-group radio-emoticon">
                                                <input type="radio" name="rate[9]" id="question24" value="1"
                                                    class="radio-button">

                                                <div class="radio-tile feed9">
                                                    <label for="question24" class="radio-tile-label">
                                                        <img data-src="https://kuesionersolo.rs-jih.co.id/file/rate/sangat-tidak-puas-OSHW79BG.svg"
                                                            class="img-fluid img-emoticon ls-is-cached lazyloaded"
                                                            src="https://kuesionersolo.rs-jih.co.id/file/rate/sangat-tidak-puas-OSHW79BG.svg">
                                                        <p class="section-description-xs text-center mt-2 mb-0">Sangat
                                                            tidak puas</p>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex-col">
                                            <div class="radio-tile-group radio-emoticon">
                                                <input type="radio" name="rate[9]" id="question24" value="2"
                                                    class="radio-button">

                                                <div class="radio-tile feed9">
                                                    <label for="question24" class="radio-tile-label">
                                                        <img data-src="https://kuesionersolo.rs-jih.co.id/file/rate/tidak-puas-WON8YKBP.svg"
                                                            class="img-fluid img-emoticon ls-is-cached lazyloaded"
                                                            src="https://kuesionersolo.rs-jih.co.id/file/rate/tidak-puas-WON8YKBP.svg">
                                                        <p class="section-description-xs text-center mt-2 mb-0">Tidak
                                                            puas</p>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex-col">
                                            <div class="radio-tile-group radio-emoticon">
                                                <input type="radio" name="rate[9]" id="question24" value="3"
                                                    class="radio-button">

                                                <div class="radio-tile feed9">
                                                    <label for="question24" class="radio-tile-label">
                                                        <img data-src="https://kuesionersolo.rs-jih.co.id/file/rate/netral-FZC3L8X4.svg"
                                                            class="img-fluid img-emoticon ls-is-cached lazyloaded"
                                                            src="https://kuesionersolo.rs-jih.co.id/file/rate/netral-FZC3L8X4.svg">
                                                        <p class="section-description-xs text-center mt-2 mb-0">Netral
                                                        </p>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex-col">
                                            <div class="radio-tile-group radio-emoticon">
                                                <input type="radio" name="rate[9]" id="question24" value="4"
                                                    class="radio-button">

                                                <div class="radio-tile feed9">
                                                    <label for="question24" class="radio-tile-label">
                                                        <img data-src="https://kuesionersolo.rs-jih.co.id/file/rate/puas-7KQ64Y8R.svg"
                                                            class="img-fluid img-emoticon ls-is-cached lazyloaded"
                                                            src="https://kuesionersolo.rs-jih.co.id/file/rate/puas-7KQ64Y8R.svg">
                                                        <p class="section-description-xs text-center mt-2 mb-0">Puas
                                                        </p>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex-col">
                                            <div class="radio-tile-group radio-emoticon">
                                                <input type="radio" name="rate[9]" id="question24" value="5"
                                                    class="radio-button">

                                                <div class="radio-tile feed9">
                                                    <label for="question24" class="radio-tile-label">
                                                        <img data-src="https://kuesionersolo.rs-jih.co.id/file/rate/sangat-puas-QM3CKG0R.svg"
                                                            class="img-fluid img-emoticon ls-is-cached lazyloaded"
                                                            src="https://kuesionersolo.rs-jih.co.id/file/rate/sangat-puas-QM3CKG0R.svg">
                                                        <p class="section-description-xs text-center mt-2 mb-0">Sangat
                                                            puas</p>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group mb-4">
                                    <input type="hidden" name="question[10]" value="25">
                                    <label class="control-label text-2">Fisioterapi</label>

                                    <div class="flex-5-column">
                                        <div class="flex-col">
                                            <div class="radio-tile-group radio-emoticon">
                                                <input type="radio" name="rate[10]" id="question25" value="1"
                                                    class="radio-button">

                                                <div class="radio-tile feed10">
                                                    <label for="question25" class="radio-tile-label">
                                                        <img data-src="https://kuesionersolo.rs-jih.co.id/file/rate/sangat-tidak-puas-OSHW79BG.svg"
                                                            class="img-fluid img-emoticon ls-is-cached lazyloaded"
                                                            src="https://kuesionersolo.rs-jih.co.id/file/rate/sangat-tidak-puas-OSHW79BG.svg">
                                                        <p class="section-description-xs text-center mt-2 mb-0">Sangat
                                                            tidak puas</p>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex-col">
                                            <div class="radio-tile-group radio-emoticon">
                                                <input type="radio" name="rate[10]" id="question25" value="2"
                                                    class="radio-button">

                                                <div class="radio-tile feed10">
                                                    <label for="question25" class="radio-tile-label">
                                                        <img data-src="https://kuesionersolo.rs-jih.co.id/file/rate/tidak-puas-WON8YKBP.svg"
                                                            class="img-fluid img-emoticon ls-is-cached lazyloaded"
                                                            src="https://kuesionersolo.rs-jih.co.id/file/rate/tidak-puas-WON8YKBP.svg">
                                                        <p class="section-description-xs text-center mt-2 mb-0">Tidak
                                                            puas</p>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex-col">
                                            <div class="radio-tile-group radio-emoticon">
                                                <input type="radio" name="rate[10]" id="question25" value="3"
                                                    class="radio-button">

                                                <div class="radio-tile feed10">
                                                    <label for="question25" class="radio-tile-label">
                                                        <img data-src="https://kuesionersolo.rs-jih.co.id/file/rate/netral-FZC3L8X4.svg"
                                                            class="img-fluid img-emoticon ls-is-cached lazyloaded"
                                                            src="https://kuesionersolo.rs-jih.co.id/file/rate/netral-FZC3L8X4.svg">
                                                        <p class="section-description-xs text-center mt-2 mb-0">Netral
                                                        </p>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex-col">
                                            <div class="radio-tile-group radio-emoticon">
                                                <input type="radio" name="rate[10]" id="question25" value="4"
                                                    class="radio-button">

                                                <div class="radio-tile feed10">
                                                    <label for="question25" class="radio-tile-label">
                                                        <img data-src="https://kuesionersolo.rs-jih.co.id/file/rate/puas-7KQ64Y8R.svg"
                                                            class="img-fluid img-emoticon ls-is-cached lazyloaded"
                                                            src="https://kuesionersolo.rs-jih.co.id/file/rate/puas-7KQ64Y8R.svg">
                                                        <p class="section-description-xs text-center mt-2 mb-0">Puas
                                                        </p>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex-col">
                                            <div class="radio-tile-group radio-emoticon">
                                                <input type="radio" name="rate[10]" id="question25" value="5"
                                                    class="radio-button">

                                                <div class="radio-tile feed10">
                                                    <label for="question25" class="radio-tile-label">
                                                        <img data-src="https://kuesionersolo.rs-jih.co.id/file/rate/sangat-puas-QM3CKG0R.svg"
                                                            class="img-fluid img-emoticon ls-is-cached lazyloaded"
                                                            src="https://kuesionersolo.rs-jih.co.id/file/rate/sangat-puas-QM3CKG0R.svg">
                                                        <p class="section-description-xs text-center mt-2 mb-0">Sangat
                                                            puas</p>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group mb-4">
                                    <input type="hidden" name="question[11]" value="27">
                                    <label class="control-label text-2">Farmasi</label>

                                    <div class="flex-5-column">
                                        <div class="flex-col">
                                            <div class="radio-tile-group radio-emoticon">
                                                <input type="radio" name="rate[11]" id="question27" value="1"
                                                    class="radio-button">

                                                <div class="radio-tile feed11">
                                                    <label for="question27" class="radio-tile-label">
                                                        <img data-src="https://kuesionersolo.rs-jih.co.id/file/rate/sangat-tidak-puas-OSHW79BG.svg"
                                                            class="img-fluid img-emoticon ls-is-cached lazyloaded"
                                                            src="https://kuesionersolo.rs-jih.co.id/file/rate/sangat-tidak-puas-OSHW79BG.svg">
                                                        <p class="section-description-xs text-center mt-2 mb-0">Sangat
                                                            tidak puas</p>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex-col">
                                            <div class="radio-tile-group radio-emoticon">
                                                <input type="radio" name="rate[11]" id="question27" value="2"
                                                    class="radio-button">

                                                <div class="radio-tile feed11">
                                                    <label for="question27" class="radio-tile-label">
                                                        <img data-src="https://kuesionersolo.rs-jih.co.id/file/rate/tidak-puas-WON8YKBP.svg"
                                                            class="img-fluid img-emoticon ls-is-cached lazyloaded"
                                                            src="https://kuesionersolo.rs-jih.co.id/file/rate/tidak-puas-WON8YKBP.svg">
                                                        <p class="section-description-xs text-center mt-2 mb-0">Tidak
                                                            puas</p>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex-col">
                                            <div class="radio-tile-group radio-emoticon">
                                                <input type="radio" name="rate[11]" id="question27" value="3"
                                                    class="radio-button">

                                                <div class="radio-tile feed11">
                                                    <label for="question27" class="radio-tile-label">
                                                        <img data-src="https://kuesionersolo.rs-jih.co.id/file/rate/netral-FZC3L8X4.svg"
                                                            class="img-fluid img-emoticon ls-is-cached lazyloaded"
                                                            src="https://kuesionersolo.rs-jih.co.id/file/rate/netral-FZC3L8X4.svg">
                                                        <p class="section-description-xs text-center mt-2 mb-0">Netral
                                                        </p>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex-col">
                                            <div class="radio-tile-group radio-emoticon">
                                                <input type="radio" name="rate[11]" id="question27" value="4"
                                                    class="radio-button">

                                                <div class="radio-tile feed11">
                                                    <label for="question27" class="radio-tile-label">
                                                        <img data-src="https://kuesionersolo.rs-jih.co.id/file/rate/puas-7KQ64Y8R.svg"
                                                            class="img-fluid img-emoticon ls-is-cached lazyloaded"
                                                            src="https://kuesionersolo.rs-jih.co.id/file/rate/puas-7KQ64Y8R.svg">
                                                        <p class="section-description-xs text-center mt-2 mb-0">Puas
                                                        </p>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="flex-col">
                                            <div class="radio-tile-group radio-emoticon">
                                                <input type="radio" name="rate[11]" id="question27" value="5"
                                                    class="radio-button">

                                                <div class="radio-tile feed11">
                                                    <label for="question27" class="radio-tile-label">
                                                        <img data-src="https://kuesionersolo.rs-jih.co.id/file/rate/sangat-puas-QM3CKG0R.svg"
                                                            class="img-fluid img-emoticon ls-is-cached lazyloaded"
                                                            src="https://kuesionersolo.rs-jih.co.id/file/rate/sangat-puas-QM3CKG0R.svg">
                                                        <p class="section-description-xs text-center mt-2 mb-0">Sangat
                                                            puas</p>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <button type="submit" id="submit"
                                    class="btn btn-common btn-second mt-4 float-right">KIRIM</button>
                            </form>
                        </div>
                    </div>
                </div>
            </section>

            <script type="text/javascript">
                $(document).ready(function() {
                    //     $('#form-kuesioner fieldset:first').fadeIn('slow');

                    //     var limit = 3;

                    //     $('#form-kuesioner .btn-next').on('click', function() {
                    //         var fieldset = $(this).parents('fieldset');
                    //         var indexfieldset = fieldset.index();

                    //         var question = '11';
                    //         var i;
                    //         var err = [];

                    //         for(i=1; i<question; i++) {

                    //             if (i < limit) {
                    //                 if (document.querySelectorAll('input[name="rate['+i+']"]:checked').length > 0) {
                    //                     $('.feed'+i).css('border-color', '#F3F3F3');
                    //                 } else {
                    //                     $('.feed'+i).css('border-color', '#EB5757');
                    //                     err.push('validate'+i);
                    //                     break;
                    //                 }
                    //             }
                    //         }

                    //         if(err.length == 0) {
                    //             nextStep(fieldset, indexfieldset);
                    //             limit = limit+2;
                    //         } else {

                    //         }
                    //     });

                    //     $('#form-kuesioner .btn-prev').on('click', function() {
                    //         var fieldset = $(this).parents('fieldset');

                    //         fieldset.fadeOut(400, function() {
                    //             $(this).prev().fadeIn();
                    //         });
                    //     });

                    $("#form-kuesioner").validate({
                        rules: {
                            responden: {
                                required: true
                            },
                            nama_poliklinik: {
                                required: true
                            },
                            nama_dokter: {
                                required: true
                            },
                            nama_pasien: {
                                required: true
                            },
                            no_telp: {
                                required: true
                            },
                        },
                        messages: {
                            responden: {
                                required: "Silahkan pilih responden"
                            },
                            nama_poliklinik: {
                                required: "Silahkan pilih poliklinik"
                            },
                            nama_dokter: {
                                required: "Silahkan pilih nama dokter"
                            },
                            nama_pasien: {
                                required: "Silahkan isi nama Anda"
                            },
                            no_telp: {
                                required: "Silahkan isi no telp. Anda"
                            },
                        },
                        highlight: function(element, errorClass) {
                            $(element).parent().addClass('has-error')
                            $(element).addClass('has-error')
                        },
                        unhighlight: function(element, errorClass) {
                            $(element).parent().removeClass('has-error')
                            $(element).removeClass('has-error')
                        },
                        errorPlacement: function(error, element) {
                            // if (element.is(':radio')) {
                            //     var controls = element.closest('div[class*="form-group"]');
                            //     controls.append(error);
                            if (element.is('.cresponden')) {
                                error.insertAfter('.feed_responden').addClass('has-error');
                            } else {
                                error.insertAfter(element);
                            }
                        }
                    });

                    $('#form-kuesioner').submit(function(e) {
                        e.preventDefault();
                        console.log()
                        var fieldset = $(this).parents('fieldset');
                        var indexfieldset = fieldset.index();
                        if (jQuery("#form-kuesioner").valid()) {
                            // if(validateStep(indexfieldset)) {
                            $.ajax({
                                url: 'public/kuesioner_post',
                                method: 'POST',
                                data: new FormData(this),
                                dataType: 'json',
                                contentType: false,
                                processData: false,
                                success: function(response) {
                                    console.log(response)
                                    // top.location.href =
                                    //     "https://kuesionersolo.rs-jih.co.id/finish/finish/" +
                                    //     'rawat-jalan';
                                }
                            })
                            // } else {

                        }
                    });
                });

                // function nextStep(fieldset, indexfieldset) {
                //     fieldset.fadeOut(400, function() {
                //         $(this).next().fadeIn();
                //     });
                //     indexfieldset+1;
                // }

                // function validateStep(step) {
                //     switch(step) {
                //         default:
                //         var ids = ['nama_poliklinik', 'nama_pasien', 'no_telp', 'kritik_saran'];
                //         var err = [];

                //         ids.forEach(function(id, i) {
                //             var inputid  = $("#"+id);
                //             var value    = $("#"+id).val();
                //             var parentid = $('#'+id).parent();

                //             if ($.trim(value).length === 0) {
                //                 parentid.addClass('has-error');
                //                 err.push('Please Enter Your '+id);
                //             } else {
                //                 parentid.removeClass('has-error');
                //             }
                //         });

                //         if(err.length > 0) {
                //             return false;
                //         } else {
                //             return true;
                //         }
                //     }
                // }
            </script>
        </div>

    </div>


    <!-- <script type="text/javascript">
        document.addEventListener('contextmenu', event => event.preventDefault());

        document.onkeydown = function(e) {
            if (e.ctrlKey && (e.keyCode === 16 || e.keyCode === 17 || e.keyCode === 67 || e.keyCode === 83 || e
                    .keyCode === 85 || e.keyCode === 86 || e.keyCode === 87 || e.keyCode === 117)) {
                return false;
            } else {
                return true;
            }
        };
    </script> -->

    <!-- jquery validation -->
    <script src="https://kuesionersolo.rs-jih.co.id/assets/front/vendors/jquery-validation/jquery.validate.min.js"></script>
    <script src="https://kuesionersolo.rs-jih.co.id/assets/front/vendors/jquery-validation/additional-methods.js"></script>

    <!-- jquery easing -->
    <script src="https://kuesionersolo.rs-jih.co.id/assets/front/vendors/jquery-easing/jquery.easing.min.js"></script>

    <!-- jquery stellar -->
    <script src="https://kuesionersolo.rs-jih.co.id/assets/front/vendors/jquery-stellar/jquery.stellar.js"></script>

    <!-- jquery fancybox -->
    <script src="https://kuesionersolo.rs-jih.co.id/assets/front/vendors/jquery-fancybox/jquery.fancybox.min.js"></script>

    <!-- jquery nice-select -->
    <script src="https://kuesionersolo.rs-jih.co.id/assets/front/vendors/jquery-nice-select/jquery.nice-select.min.js">
    </script>

    <!-- bootstrap -->
    <script src="https://kuesionersolo.rs-jih.co.id/assets/front/vendors/bootstrap/js/bootstrap.min.js" defer="defer">
    </script>

    <!-- owl.carousel -->
    <script src="https://kuesionersolo.rs-jih.co.id/assets/front/vendors/owl-carousel/owl.carousel.js"></script>

    <!-- jquery magnific popup -->
    <script src="https://kuesionersolo.rs-jih.co.id/assets/front/js/jquery.magnific-popup.min.js"></script>

    <!-- lazysizes -->
    <script src="https://kuesionersolo.rs-jih.co.id/assets/front/vendors/lazysizes/lazysizes.min.js" async=""></script>

    <!-- main -->
    <script src="https://kuesionersolo.rs-jih.co.id/assets/front/js/main.js"></script>


</body>

</html>
