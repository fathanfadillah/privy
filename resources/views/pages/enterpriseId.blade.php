<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enterprise</title>
    @include('resources.style')

    <style>
    body {
        background-color: #f4f5f7;
    }
    </style>
</head>

<body>
    <div data-server-rendered="true" id="__nuxt">
        <!---->
        <div id="__layout">
            <div class="site-main">
                <div class="container">
                    <div class="row">
                        <div class="px-2 px-lg-5 col-sm-10 col-md-8 offset-sm-1 offset-md-2">
                            <div class="bg-white rounded shadow border border-white-100 position-relative my-5">
                                <div
                                    class="site-header text-center py-4 px-5 text-white position-relative overflow-hidden">
                                    <div class="position-relative zindex-dropdown">
                                        <h1 class="h5 font-weight-medium mt-4 pt-2 mb-3">
                                            Pendaftaran EnterpriseID
                                        </h1>
                                        <h5 class="p font-weight-normal px-4 px-md-5 mb-3">
                                            EnterpriseID memberi Anda layanan untuk mengelola dokumen elektronik Anda
                                            sebagai perusahaan yang terdaftar di PrivyID.
                                        </h5> <span class="d-block d-md-inline-block px-5 py-2 highlight">
                                            Siapkan Akun PrivyID dan NPWP
                                        </span>
                                    </div>
                                </div>
                                <div class="px-5 py-4">
                                    <div>
                                        <div class="registration">
                                            <div class="mb-5">
                                                <form><label for="privyID">Masukkan PrivyID</label>
                                                    <div class="row">
                                                        <div class="col-md-9">
                                                            <div class="position-relative"><input id="privyID"
                                                                    type="text" placeholder="Contoh: AV5887" value=""
                                                                    class="form-control">
                                                                <!---->
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3"><button type="submit" disabled="disabled"
                                                                class="btn font-weight-medium text-uppercase px-2 btn-primary btn-block disabled">
                                                                Periksa
                                                            </button></div>
                                                    </div>
                                                </form>
                                                <!---->
                                                <div
                                                    class="d-flex justify-content-between bg-light px-4 mt-3 py-2 rounded-sm">
                                                    <span class="py-1">
                                                        Tidak punya PrivyID?
                                                    </span> <span class="py-1"><a
                                                            href="https://app.privy.id/register?redirect_to=http://enterprise.privy.id"
                                                            class="text-uppercase font-weight-bold text-danger small">Daftar
                                                            Sekarang</a></span></div>
                                                <!---->
                                            </div>
                                            <!---->
                                            <!---->
                                            <!---->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
@include('resources.script')

</html>