@extends('layout.app')
@section('style')
<style>
.help {
    font-size: 150%;
}

.callus {
    font-size: 100%;
}
</style>
@endsection
@section('title','Repository')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">

            <div class="row">
                <div class="col-md-2">
                </div>

                <div class="col-md-8">
                    <br>
                    <h3>
                        PrivyCA Repository
                    </h3>
                    <hr>
                    <table class="table table-striped responsive">

                        <tbody>
                            <tr>
                                <td class="cell100 column1" colspan="4"><a href="/doc/CP-CPS-PrivyID-v1.1-Rev-1.pdf"
                                        target="_blank">CP & CPS PrivyID Versi 1.1</a></td>
                            </tr>
                            <tr>
                                <td class="cell100 column1" colspan="4"><a href="/doc/Kebijakan Jaminan Ind Ver 1.2.pdf"
                                        target="_blank">Kebijakan
                                        Jaminan</a></td>
                            </tr>
                            <tr>
                                <td class="cell100 column1" colspan="4"><a
                                        href="/doc/Kebijakan Privasi PrivyID rev3 Clean.pdf" target="_blank">Kebijakan
                                        Privasi</a></td>
                            </tr>
                            <tr>
                                <td class="cell100 column1" colspan="4"><a
                                        href="/doc/Perjanjian Pemegang Sertifikat Ind Ver 1.1 Reviewed Clean.pdf"
                                        target="_blank">Perjanjian Pemegang Sertifikat</a></td>
                            </tr>
                            <tr>
                                <td class="cell100 column1" colspan="4"><a
                                        href="/doc/Perjanjian Pihak Pengandal Ver 1.1 Reviewed Clean.pdf"
                                        target="_blank">Perjanjian
                                        Pihak Pengandal</a></td>
                            </tr>
                            <!--<tr>
                            <td class="cell100 column1" colspan="4"><a href="https://ocsp.privyca.id/" target="_blank">OCSP</a></td>
                        </tr>-->
                    </table>

                    <div class="table-responsive">

                        <table class="table table-striped responsive">

                            <tr>
                                <th scope="col">Root / Subordinate CA</th>
                                <th scope="col">Certificate</th>
                                <th scope="col">CRL</th>
                                <th scope="col">Fingerprint (SHA-256)</th>
                            </tr>

                            <tr>
                                <td class="cell100 column1">Root CA Privy CA</td>
                                <td class="cell100 column2"><a href="/cert/RootCAPrivyCAG1.pem">Download</a></td>
                                <td class="cell100 column3"><a href="https://crl.privyca.id/rootCAPrivyCA.crl">CRL</a>
                                </td>
                                <td class="cell100 column4">
                                    581EB03701213870489C7D6E8DF0AFC9DEA6607B9050B0C8585EC6058A50D721
                                </td>
                            </tr>

                            <tr>
                                <td class="cell100 column1">Privy CA Class 1</td>
                                <td class="cell100 column2"><a href="/cert/PrivyCAClass1G1.pem">Download</a></td>
                                <td class="cell100 column3"><a href="https://crl.privyca.id/PrivyCAClass1.crl">CRL</a>
                                </td>
                                <td class="cell100 column4">
                                    656C5B2BBF09A4A77DDD8BDA2CC21A99B06E3DB4439481D12609A3819D9E61B1
                                </td>
                            </tr>

                            <tr>
                                <td class="cell100 column1">Privy CA Class 2</td>
                                <td class="cell100 column2"><a href="/cert/PrivyCAClass2G1.pem">Download</a></td>
                                <td class="cell100 column3"><a href="https://crl.privyca.id/PrivyCAClass2.crl">CRL</a>
                                </td>
                                <td class="cell100 column4">
                                    FCEE6C563D36C64566D1C263FE34BE7CC0009876620719338DE0ABE607524890
                                </td>
                            </tr>

                            <tr>
                                <td class="cell100 column1">Privy CA Class 3</td>
                                <td class="cell100 column2"><a href="/cert/PrivyCAClass3G1.pem">Download</a></td>
                                <td class="cell100 column3"><a href="https://crl.privyca.id/PrivyCAClass3.crl">CRL</a>
                                </td>
                                <td class="cell100 column4">
                                    D3DEFF351DD8855115B22B7381CAD33ADBC68A41C914EE2C5175507DFA20D3CE
                                </td>
                            </tr>

                            <tr>
                                <td class="cell100 column1">Privy CA Class 4</td>
                                <td class="cell100 column2"><a href="/cert/PrivyCAClass4G1.pem">Download</a></td>
                                <td class="cell100 column3"><a href="https://crl.privyca.id/PrivyCAClass4.crl">CRL</a>
                                </td>
                                <td class="cell100 column4">
                                    9EA26A28B832E41CE6AA00ED76FC404AA15D86240B85B72F2D998CD1A0006846
                                </td>
                            </tr>

                            <tr>
                                <td class="cell100 column1">Root CA Privy CA G2</td>
                                <td class="cell100 column2"><a href="/cert/RootCAPrivyCAG2.pem">Download</a></td>
                                <td class="cell100 column3"><a href="https://crl.privyca.id/RootPrivyCAG2.crl">CRL</a>
                                </td>
                                <td class="cell100 column4">
                                    97CA0824C4DB56DCA00BF9168A4489E8AE9CF6763B5EE4E1CBFF334F17923B12
                                </td>
                            </tr>

                            <tr>
                                <td class="cell100 column1">Privy CA Class 1 G2</td>
                                <td class="cell100 column2"><a href="/cert/PrivyCAClass1G2.pem">Download</a></td>
                                <td class="cell100 column3"><a href="http://crl.privyca.id/PrivyCAClass1G2.crl">CRL</a>
                                </td>
                                <td class="cell100 column4">
                                    3418566DE8FE35525A48914CED07FEF3FC46A208518624AE57DEC37B436FAFC6
                                </td>
                            </tr>

                            <tr>
                                <td class="cell100 column1">Root CA Privy SSL</td>
                                <td class="cell100 column2"><a href="/cert/RootCAPrivySSLG1.pem">Download</a></td>
                                <td class="cell100 column3"><a href="https://crl.privyca.id/rootCAPrivySSL.crl">CRL</a>
                                </td>
                                <td class="cell100 column4">
                                    DFEF66935E4A7B4338AA3AF88ECF59D0D6068368CD1CA36779F8045B1A8FED82
                                </td>
                            </tr>

                            <tr>
                                <td class="cell100 column1">Privy SSL Class 1</td>
                                <td class="cell100 column2"><a href="/cert/PrivySSLClass1G1.pem">Download</a></td>
                                <td class="cell100 column3"><a href="https://crl.privyca.id/PrivySSLClass1.crl">CRL</a>
                                </td>
                                <td class="cell100 column4">
                                    0106891377FE4DF8A109EE5C1D7AC183455D70E9878C5CFEA200E6238B97DB56
                                </td>
                            </tr>

                            <tr>
                                <td class="cell100 column1">Privy SSL Class 2</td>
                                <td class="cell100 column2"><a href="/cert/PrivySSLClass2G1.pem">Download</a></td>
                                <td class="cell100 column3"><a href="https://crl.privyca.id/PrivySSLClass2.crl">CRL</a>
                                </td>
                                <td class="cell100 column4">
                                    F7C17E2F1625EF04C1AA2041628B82A09BEF03C2B4EE60A235171D84D91E4BC8
                                </td>
                            </tr>

                            <tr>
                                <td class="cell100 column1">Privy SSL Class 3</td>
                                <td class="cell100 column2"><a href="/cert/PrivySSLClass3G1.pem">Download</a></td>
                                <td class="cell100 column3"><a href="https://crl.privyca.id/PrivySSLClass3.crl">CRL</a>
                                </td>
                                <td class="cell100 column4">
                                    ED66DFBE7C22A53B6D2C56C1BBD07E60FD8275F393AA4835D58CA170E0D13EA9
                                </td>
                            </tr>

                            <tr>
                                <td class="cell100 column1">Privy SSL Class 4</td>
                                <td class="cell100 column2"><a href="/cert/PrivySSLClass4G1.pem">Download</a></td>
                                <td class="cell100 column3"><a href="https://crl.privyca.id/PrivySSLClass4.crl">CRL</a>
                                </td>
                                <td class="cell100 column4">
                                    7A2ABE2796ADC0D48C3812C73E2736C220EF20A83FABAAB486C0759C5BD2247E
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <br>
                    <hr>
                    <div class="text-center">

                        <address>
                            <strong>PT Privy Identitas Digital </strong>
                            <br> Jl. Kemang Raya No. 34L
                            <br> Jakarta Selatan 12730 - Indonesia
                            <br> <abbr title="Email"></abbr> assist@privy.id
                            <br> <abbr title="Phone"></abbr> +62 21 2271 5509
                        </address>
                    </div>

                </div>
                <div class="col-md-2">
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
@section('script')
<script>
$('#arrow').hide();
</script>
@endsection