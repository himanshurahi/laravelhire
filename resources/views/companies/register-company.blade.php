@extends('layouts.frontend_layouts.app')
@section('main')
    <style>
        #errors ul {
            background-color: red;
            color: white;
            padding: 10px
        }

    </style>


   

    <div class="columns mt-20">
       

        <div class="column is-8 is-offset-2">
            
            <!-- Wrapper -->
            <div class="steps-wrapper is-squared">
                <!-- Steps Indicators -->
                <div class="steps" id="stepsDemo2">
                    <!-- Indicator -->

                    <!-- Steps content wrapper -->
                    <div class="steps-content">
                        <!-- Step content -->
                        <div class="step-content has-text-centered is-active account" data-id="0">
                            @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul style="background-color: red; color:white; padding:10px">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                            <form action="register-company" method="POST">
                                <!-- Field -->
                                @csrf
                                <div class="field">
                                    <div class="field-label is-normal">
                                        <label class="label"> Company Name</label>
                                    </div>
                                    <div class="field-body">
                                        <div class="field">
                                            <div class="control">
                                                <input class="input" name="company_name" id="company_name" type="text"
                                                    placeholder="Company Name" autofocus required data-validate="require">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="field">
                                    <div class="field-label is-normal">
                                        <label class="label">Company Email</label>
                                    </div>
                                    <div class="field-body">
                                        <div class="field">
                                            <div class="control">
                                                <input class="input" name="company_email" id="company_email" type="email"
                                                    placeholder="Company Email" autofocus required data-validate="require">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="field">
                                    <div class="field-label is-normal">
                                        <label class="label">Company Details</label>
                                    </div>
                                    <div class="field-body">
                                        <div class="field">
                                            <div class="control">
                                                <textarea class="textarea" name="company_details"
                                                    placeholder="Company Details" id="company_details" cols="30"
                                                    rows="10"></textarea>
                                                {{-- <input class="input" name="company_details" id="company_details" type="text"
                                                    placeholder="Company Details" required autofocus data-validate="require"> --}}
                                            </div>
                                        </div>
                                    </div>
                                </div>

                           
                        </div>
                        <!-- Step content -->

                    </div>
                    <!-- Steps navigation -->
                    <div class="steps-actions">
                        <div class="steps-action">
                            <button type="submit" class="button secondary-btn button-cta is-bold raised btn-align ">Submit</button>
                        </div>
                    </div>
                </form>
                </div>
            </div>
        </div>
    </div>



    <!-- Modal trigger -->
    {{-- <a class="button button-cta btn-align primary-btn raised modal-trigger" data-modal="vertical-form-modal">Open modal</a> --}}
    <!-- /Modal trigger -->

    <!-- Modal Markup -->
    <div id="vertical-form-modal" class="modal modal-sm">
        <div class="modal-background" id="add_links_modal-background"></div>
        <div class="modal-content" id="add_links_modal-content">
            <div class="flex-card simple-shadow">
                <div class="card-body">
                    <h2 class="title has-text-centered is-3 mb-40">Add Links</h2>
                    <div class="control-material required is-accent">
                        <input class="material-input" type="text" id="links" required>
                        <span class="material-highlight"></span>
                        <span class="bar"></span>
                        <label>Enter Link *</label>
                    </div>
                    <div class="mt-20">
                        <button class="button button-cta btn-align accent-btn raised is-fullwidth no-lh"
                            id="add_links">Save</button>
                    </div>
                </div>
            </div>
        </div>
        <button class="modal-close is-large is-hidden" aria-label="close"></button>
    </div>
    <!-- /Modal Markup -->
    {{-- @include('layouts.frontend_layouts.error_modal') --}}

@endsection



@section('scripts')
    {{-- <script src="assets/js/myapp2.js"></script> --}}
   

@endsection
