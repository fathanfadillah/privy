@extends('layout.app')
@section('style')
<style>
.hero {
    height: 400px;
}

h4 {
    font-size: 15px;
    color: #ddd;
}

h3 {
    font-size: 18px;
}

h2 {
    font-size: 25px;
}

h1 {
    font-size: 50px;
}

.notes {
    border-radius:30px;
}

.form-control{
    height: 50px;
}
</style>
@endsection
@section('title','Kontak Bisnis')
@section('content')
<!-- header -->
<div class="mb-auto mt-md-n5 mb-md-5">
    <div class="hero">
        <div class="mt-n5 w-50 container justify-content-center text-center text-white">
            <h1 class="font-weight-bold">Detail Bisnis</h1>

            <p>Fill out this form and our Sales Team will get in touch as soon as we can. Let’s connect about all the ways PrivyID can help your business needs.</p>
            <p>If you’re looking for further assistance, please reach us via Live Chat or send us an email at <a href="mailto:helpdesk@privy.id">helpdesk@privy.id</a></p>
            {{-- <h2 class="font-weight-bold"><i>Business Details</i></h2>
            <h3 class="font-weight-bold">Daftarkan perusahaan Anda untuk pengalaman berbisnis yang lebih profesional
            </h3>
            <h4 class="font-weight-bold"><i>Register your company for a professional business experience</i></h4> --}}
        </div>
    </div>
    <!-- /.hero__bg -->

    <!-- .container -->
</div>
<!-- hero -->

<div class="m-5">
    @if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
    @endif
    <div class="col-md-5 mx-auto offset-md-3 shadow p-5 rounded">
        <h2 class="font-weight-bolder mb-5 text-center">Sign up for get product inquiry</h2>
        {{-- <p class="small">Isi form dibawah ini untuk melengkapi keperluan bisnis perusahaan Anda. Jika anda
            memerlukan
            bantuan silahkan hubungi kami Via Live Chat atau mengirimkan email ke <a
                href="mailto:helpdesk@privy.id?subject=%23KeluhanPelanggan%20-%20(isi%20dengan%20nama%20Anda)&amp;body=Hai%20team%20Help%20Desk%20Privy%2C%0ANama%20saya%20%3A%0AEmail%20saya%20%3A%0AKeluhan%20saya%20%3A%20(ceritakan%20masalah%20Anda%20disini)%0A%0A%0A%0AMohon%20bantuannya%20untuk%20keluhan%20saya%20tersebut.%0A%0ATerimakasih.%20"
                target="_blank">Helpdesk@privy.id</a></p>
        <p class="small"><i>Fill in this form for you business needs. If you need further
                assistance please reach us via Live Chat or send us an email to <a
                    href="mailto:helpdesk@privy.id?subject=%23KeluhanPelanggan%20-%20(isi%20dengan%20nama%20Anda)&amp;body=Hai%20team%20Help%20Desk%20Privy%2C%0ANama%20saya%20%3A%0AEmail%20saya%20%3A%0AKeluhan%20saya%20%3A%20(ceritakan%20masalah%20Anda%20disini)%0A%0A%0A%0AMohon%20bantuannya%20untuk%20keluhan%20saya%20tersebut.%0A%0ATerimakasih.%20"
                    target="_blank">Helpdesk@privy.id</a></i></p> --}}

        <form action="{{ route('kontakbisnis.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <!-- <input type="hidden" name="oid" value="00D2v000001VD0y">
            <input type="hidden" name="retURL" value="https://privy.id/"> -->
            <h3 class="h4 font-weight-bold">Basic Information</h3>
            <div class="form-group">
                {{-- <label for="first_name">Nama Depan / <i> First Name </i> </label> --}}
                <input type="text" class="form-control rounded-pill" id="first_name" maxlength="40" name="namaDepan"
                    value="{{old('namaDepan')}}" placeholder="First Name" required>
                @error('namaDepan')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                {{-- <label for="last_name">Nama Belakang / <i> Last Name </i></label> --}}
                <input type="text" class="form-control rounded-pill" id="last_name" maxlength="80" name="namaBelakang"
                    value="{{old('namaBelakang')}}" placeholder="Last Name" required>
                @error('namaBelakang')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                {{-- <label for="email"> Alamat Email / <i> Email Address </i></label> --}}
                <input type="email" class="form-control rounded-pill" id="email" maxlength="80" name="email" value="{{old('email')}}"
                placeholder="Email" required>
                @error('email')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                {{-- <label for="phone">Nomor yang dapat dihubungi / <i> Phone Number </i> </label> --}}
                <input type="text" class="form-control rounded-pill" id="phone" maxlength="40" name="phone" value="{{old('phone')}}"
                placeholder="Phone" required>
                @error('phone')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <h3 class="h4 font-weight-bold pt-3">Company Information</h3>
            <div class="form-group">
                {{-- <label for="Divisi"> Divisi / <i> Division </i></label> --}}
                <input id="divisi" maxlength="100" name="divisi" class="form-control rounded-pill" type="text"
                    placeholder="HR, Procurement, Purchasing, Finance, etc" value="{{old('divisi')}}" required />
                @error('divisi')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                {{-- Jabatan Anda / <i> Position </i> --}}
                <select id="jabatan" name="jabatan" title="Job Level"
                    class="form-control rounded-pill">
                    <option value="C-level, Director, or Managing Partner" selected>C-level, Director, or Managing Partner
                    </option>
                    <option value="Founder , Advisor, Commissioner Board, Senior Partner">Founder , Advisor,
                        Commissioner
                        Board,
                        Senior Partner</option>
                    <option value="SVP/EVP">SVP/EVP</option>
                    <option value="Sr Manager, Manager">Sr Manager, Manager</option>
                    <option value="Asst. Manager, Associate">Asst. Manager, Associate</option>
                    <option value="Staff">Staff</option>
                    <option value="Intern / Student">Intern / Student</option>
                </select>
            </div>

            <div class="form-group">
                {{-- <label for="company">Nama Perusahaan / <i>Company Name</i> </label> --}}
                <input type="text" placeholder="PT.ABCD , ABCD.Ltd, ABCD.Inc, ABCD.Corp, etc " class="form-control rounded-pill"
                    id="company" maxlength="40" name="namaPerusahaan" value="{{old('namaPerusahaan')}}" required>
                @error('namaPerusahaan')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                {{-- <label>Nama Merek Dagang / <i>Brand Name</i> </label> --}}
                <input type="text" placeholder="ABCD" class="form-control rounded-pill input-lg" maxlength="255"
                    name="namaBrand" value="{{old('namaBrand')}}">
            </div>

            <div class="form-group">
                {{-- <label for="industry"> Termasuk dalam industri apakah perusahaan anda? / <i>What industry are you
                        in?</i>
                    <p>
                </label> --}}
                <select class="form-control rounded-pill input-lg w-100 mr-5 pr-5" id="industry" name="kategoriIndustri"
                    placeholder="Silahkan memilih opsi dibawah" value="{{old('kategoriIndustri')}}" required>
                    <option value="Conglomeration">Conglomeration</option>
                    <option value="Financial Service &amp; FinTech">Financial Service &amp; FinTech</option>
                    <option
                        value="Consultant Service (Legal , Tax , Financial, Accounting &amp; Audit) &amp; Notariate">
                        Consultant
                        Service (Legal , Tax , Financial, Accounting &amp; Audit) &amp; Notariate</option>
                    <option value="Real Estate, Construction &amp; Architech">Real Estate, Construction &amp;
                        Architech
                    </option>
                    <option value="HR (Outsourcing, Recruitment Firm, HRIS vendor, Securities &amp; Parking)">HR
                        (Outsourcing,
                        Recruitment Firm, HRIS vendor, Securities &amp; Parking)</option>
                    <option value="Manufacturing (Engineering, Supply Chain &amp; Distributor)">Manufacturing
                        (Engineering,
                        Supply
                        Chain &amp; Distributor)</option>
                    <option value="Logistics &amp; Transportation">Logistics &amp; Transportation</option>
                    <option value="Retail Chain &amp; FMCG">Retail Chain &amp; FMCG</option>
                    <option value="Insurance (Health Insurance &amp; Life Insurance)">Insurance (Health Insurance
                        &amp; Life
                        Insurance)</option>
                    <option value="Oil &amp; Gas, Mining, Chemical, Energy">Oil &amp; Gas, Mining, Chemical, Energy
                    </option>
                    <option value="Education (University, Research, E-Learn)">Education (University, Research,
                        E-Learn)
                    </option>
                    <option value="Government, NGO, Non Profit Organization">Government, NGO, Non Profit
                        Organization
                    </option>
                    <option value="Travel Industry &amp; Leisure">Travel Industry &amp; Leisure</option>
                    <option value="Banking">Banking</option>
                    <option value="E-Commerce">E-Commerce</option>
                    <option value="Healthcare &amp; Pharmaceutical">Healthcare &amp; Pharmaceutical</option>
                    <option value="IT, IoT, Telecommunication, Digital Media">IT, IoT, Telecommunication, Digital
                        Media
                    </option>
                    <option value="Agricultural &amp; BioTech">Agricultural &amp; BioTech</option>
                    <option value="Small Medium Enterprise">Small Medium Enterprise</option>
                </select>
            </div>

            <h3 class="h4 font-weight-bold">Document Usage</h3>
            <div class="form-group">
                {{-- Digunakan untuk dokumen (external/internal) / <i> Use for (external/internal) document usage? </i> --}}
                <select id="00N2v00000YVvXq" name="tipeDokumen" title="External/Internal Usage" class="form-control rounded-pill input-lg"
                    value="{{old('tipeDokumen')}}" required>
                    <option value="Internal">Internal</option>
                    <option value="External">External</option>
                </select>
            </div>

            <div class="form-group">
                {{-- Contoh dokumen / <i> Document Example </i>  --}}
                <textarea id="00N2v00000YVvXv" name="contohDokumen"
                    type="text" wrap="soft" class="form-control notes" rows="2" placeholder="&nbsp;Invoice, Payroll, PO, etc"
                    value="{{old('contohDokumen')}}" required></textarea>
                @error('contohDokumen')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                {{-- <label>Berapa jumlah tanda tangan yang perusahaan lakukan dalam satu bulan? /
                    <i>How many signature do you do per month?</i></label> --}}
                <select class="form-control rounded-pill input-lg" id="00N2v00000VDVqM" name="jumlahDokumen"
                    placeholder="Silahkan memilih opsi dibawah" value="{{old('jumlahDokumen')}}" required>
                    <option value="1 – 1.000">1 – 1.000</option>
                    <option value="1.001 – 10.000">1.001 – 10.000</option>
                    <option value="10.001 – 50.000">10.001 – 50.000</option>
                    <option value="50.001 – 100.000">50.001 – 100.000</option>
                    <option value="&gt;100.001">&gt;100.001</option>
                </select>
            </div>

            <div class="form-group">
                {{-- <label>Bagaimana perusahaan anda menandatangani sebuah dokumen? /
                    <i>How do you sign your documents?</i></label> --}}
                <select class="form-control rounded-pill input-lg" id="00N2v00000On9tO" name="caraTandaTangan"
                    placeholder="Silahkan memilih opsi dibawah" value="{{old('caraTandaTangan')}}" required>
                    <option value="Using certified digital signature">Using certified digital signature </option>
                    <option value="Using uncertified digital signature">Using uncertified digital signature
                    </option>
                    <option value="Using manual (wet) signature">Using manual (wet) signature</option>
                </select>
            </div>

            <div class="form-group">
                {{-- <label> Berdasarkan sistem perusahaan anda saat ini, bagaimanakah cara yang paling cocok untuk
                    menggunakan
                    layanan kami? /
                    <i>According to your current system, what is the best way to use our services?</i></label> --}}
                <select class="form-control1 form-control rounded-pill input-lg" id="00N2v00000On9tP" name="caraPenggunaan"
                    placeholder="Silahkan memilih opsi dibawah">
                    <option value="" selected hidden disabled>How Did You Use Our Service?</option>
                    <option maxlength="255" value="Using our platform (PrivyID) as is">Using our platform (PrivyID)
                        as is
                    </option>
                    <option value="Integrating your system with our platform through API Integration">Integrating
                        your
                        system with our platform through API Integration</option>
                    <option value="Building a new system or platform">Building a new system or platform</option>
                </select>
            </div>

            <!-- <div id="Integrating your system with our platform through API Integration" class="group">
                Apakah perusahaan anda telah memiliki sistem? / <i> Did you already have a system? </i><select
                    id="00N2v00000YVvY0" class="form-control" name="00N2v00000YVvY0"
                    title="Did you already have a system?" placeholder="Silahkan memilih opsi dibawah">
                    <option value="Yes">Yes</option>
                    <option value="No">No</option>
                </select><br>

                Platform atau sistem apakah yang perusahaan anda miliki saat ini? / <i> What type of system or
                    platform
                    do
                    you have? </i>
                <p style="font-size:11px">*You can choose multiple option use Ctrl + Click the option</p>
                <select id="00N2v00000On9tk" class="form-control" multiple="multiple" name="00N2v00000On9tk"
                    title="What type of platform do you have?" placeholder="Silahkan memilih opsi dibawah">
                    <option value="Android">Android</option>
                    <option value="IOS">IOS</option>
                    <option value="Web Service">Web Service</option>
                    <option value="Other System">Other System (eg: SAP, Accurate, dll)</option>
                </select><br>

                Apabila anda memilih "Other System", berikan contoh sistem lain yang anda pakai? / <i> If you choose
                    "Other
                    System",
                    give us an example of your company system?</i> <textarea id="00N2v00000YVxQp" class="form-control"
                    name="00N2v00000YVxQp" type="text" wrap="soft"
                    placeholder="eg: SAP, Accurate, Salesforce, Oracle, SAGE, Odoo, Etc"></textarea><br>

                Adakah rencana anda akan membuat sistem? / <i> Did you have plan to build a system? </i> <select
                    id="00N2v00000YVvYK" class="form-control" name="00N2v00000YVvYK" title="Plan to build a system?"
                    placeholder="Silahkan memilih opsi dibawah">
                    <option value="Yes, We Have a Team!">Yes, We Have a Team!</option>
                    <option value="Yes, We Want build using Privy service">Yes, We Want build using Privy service
                    </option>
                </select><br>
            </div> -->

            <div class="form-group">
                {{-- Berapa lama waktu yang anda harapkan terkait implementasinya? / <i> What is the expected
                    implementation
                    date?  --}}
                </i><select class="form-control rounded-pill input-lg" name="waktuImplementasi" placeholder="What is the expected
                    implementation
                    date?" required>
                    {{-- <option value="" >Please Choose...</option> --}}
                    <option value="" disabled selected hidden>What is the expected implementation date</option>
                    <option value="A month from now">A month from now</option>
                    <option value="Three months from now">Three months from now</option>
                    <option value="More than three months from now">More than three months from now</option>
                    <option value="Next year/budgeting">Next year/budgeting</option>
                    <option value="Just asking first">Just asking first</option>
                </select>
            </div>

            <div class="form-group mb-4">
                {{-- <label>Catatan / <i>Notes</i></label> --}}
                <textarea class="form-control notes" placeholder=" &nbsp;Tuliskan pesan anda untuk kami / Write your notes for us"
                    id="00N2v00000TXeuKEAT" name="catatan" rows="3" type="text" wrap="soft"></textarea>
            </div>

            {{-- <button class="g-recaptcha" 
            data-sitekey="reCAPTCHA_site_key" 
            data-callback='onSubmit' 
            data-action='submit'>Submit</button>
            captcha --}}

            <input class="btn btn-danger w-100 rounded-pill btn-lg" type="submit" value="Submit" onclick="return foo();">
        </form>
    </div>
</div>
</div>


@endsection
@section('script')
<script type="text/javascript">
<script src="https://www.google.com/recaptcha/api.js"></script>

function onSubmit(token) {
    document.getElementById("demo-form").submit();
}

$('#arrow').remove();
</script>
@endsection