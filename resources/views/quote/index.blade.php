@extends('layouts.base')

@section('title', 'Request A Quote For Your Next CNC Project')
@section('keywords', 'quote, cam project, cnc project, contract manufacturing, custom prototype')
@section('description', 'Let Buck\'s CNC Machining help you with your next CNC project. Request a quote today.')

@section('hero-content')
    <div class="hero-cta">
        <h1 class="hero-main-line">
            <span>L</span><span>E</span><span>T</span>&nbsp;
            <span>U</span><span>S</span>
        </h1>
        <h4 class="hero-secondary-line">
            <span>WIN</span>&nbsp;
            <span>YOUR</span>&nbsp;
            <span>BUSINESS</span>
        </h4>
        <p>Several companies have put their trust in us and have been pleased with the result.</p>
        <p>We would love the chance to work with you. Please fill out the form below, and our skilled staff will be in contact with you shortly.</p>
    </div>
@endsection

@section('body-content')
    <div class="alert alert-danger hidden form-alert" role="alert">
        Oops! There were some issues with the information you provided. Please check the feedback below.
    </div>
    <form id="request" method="post" action="{{ route('quote.store') }}" enctype="multipart/form-data">
        <fieldset>
            <legend>CONTACT INFORMATION</legend>
            <div class="first-name form-control-container">
                <label for="first_name">FIRST NAME</label>
                <input type="text" id="first_name" class="form-control" name="first_name" maxlength="35" value="{{ old('first_name') }}"/>
                <div class="invalid-feedback"></div>
            </div>
            <div class="last-name form-control-container">
                <label for="last_name">LAST NAME</label>
                <input type="text" id="last_name" class="form-control" name="last_name" maxlength="50" value="{{ old('last_name') }}"/>
                <div class="invalid-feedback"></div>
            </div>
            <div class="email-address form-control-container">
                <label for="email_address">EMAIL ADDRESS</label>
                <input type="email" id="email_address" class="form-control" name="email_address" maxlength="125" value="{{ old('email_address') }}"/>
                <div class="invalid-feedback"></div>
            </div>
            <div class="phone-number form-control-container">
                <label for="phone_number">PHONE NUMBER</label>
                <input type="tel" id="phone_number" class="form-control" name="phone_number" maxlength="15" value="{{ old('phone_number') }}"/>
                <div class="invalid-feedback"></div>
            </div>
        </fieldset>
        <fieldset>
            <legend>PROJECT INFORMATION</legend>
            <div class="quantity form-control-container">
                <label for="quantity">QUANTITY</label>
                <input type="number" id="quantity" class="form-control" name="quantity" maxlength="5" value="{{ old('quantity') ?? 1 }}"/>
                <div class="invalid-feedback"></div>
            </div>
            <div class="material form-control-container">
                <label for="material">MATERIAL</label>
                <input type="text" id="material" class="form-control" name="material" maxlength="50" value="{{ old('material') }}"/>
                <div class="invalid-feedback"></div>
            </div>
            <div class="due-date form-control-container">
                <label id="due_date">DUE DATE</label>
                <input type="date" id="due_date" class="form-control" name="due_date" maxlength="10" value="{{ old('due_date') }}"/>
                <div class="invalid-feedback"></div>
            </div>
            <div class="company-name form-control-container">
                <label for="company_name">COMPANY NAME</label>
                <input type="text" id="company_name" class="form-control" name="company_name" maxlength="75" value="{{ old('company_name') }}"/>
                <div class="invalid-feedback"></div>
            </div>
        </fieldset>
        <fieldset class="files">
            <legend>FILES</legend>
            <div class="alert alert-danger invalid-feedback" role="alert"></div>
            <p class="text-left">Acceptable file types include *.3dm, *.asm, *.cam360, *.CATPart, *.CATProduct,
                *.dwg, *.dxf, *.f3d, *.fbx, *.g, .iam, *.ige, *.iges, *.igs, *.ipt, *.neu,
                *.obj, *.prt, *.sab, *.sat, *.skp, *.sldasm, *.sldprt, *.smb, *.smt, *.ste,
                *.step, *.stl, *.stp, *.wire, *.x_b, *.x_t, *.123dx</p>

            <div class="box js">
                <div class="box__input">
                    <input type="file" name="files[]" id="file" class="box__file" data-multiple-caption="{count} files selected" multiple />
                    <label for="file"><strong>Choose a file</strong><span class="box__dragndrop"> or drag it here</span>.</label>
                </div>
            </div>
        </fieldset>
        @csrf
        <input type="submit" class="button w-100 color-primary" value="SEND">
    </form>
@endsection

@section('js')
    @parent
    <script src="{{ asset('js/fileUpload2.js') }}"></script>
@endsection
