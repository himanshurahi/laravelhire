@extends('layouts.frontend_layouts.app')
@section('main')


    <div class="columns mt-20">
        {{-- @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif --}}
       
        <div class="column is-8 is-offset-2">
            <!-- Wrapper -->
            <div class="steps-wrapper is-squared">
                <!-- Steps Indicators -->
                <div class="steps" id="stepsDemo2">
                    <!-- Indicator -->
                    <div class="step-item is-active" id="account">
                        <div class="step-marker">1</div>
                        <div class="step-details">
                            <p class="step-title">Account</p>
                        </div>
                    </div>
                    <!-- Indicator -->
                    <div class="step-item" id="profile">
                        <div class="step-marker">2</div>
                        <div class="step-details">
                            <p class="step-title">Profile</p>
                        </div>
                    </div>
                    <!-- Indicator -->
                    <div class="step-item" id="social">
                        <div class="step-marker">3</div>
                        <div class="step-details">
                            <p class="step-title">Social</p>
                        </div>
                    </div>
                    <!-- Indicator -->
                    <div class="step-item">
                        <div class="step-marker" id="finish">4</div>
                        <div class="step-details">
                            <p class="step-title">Finish</p>
                        </div>
                    </div>
                    <!-- Steps content wrapper -->
                    <div class="steps-content">
                        <!-- Step content -->
                        <div class="step-content has-text-centered is-active account" data-id="0">
                            <div id="errors">
                                {{-- <ul style="background-color: red; color: white; padding : 10px">
                                    <li>Error</li>
                                </ul> --}}
                            </div>
                            <form action="" method="POST">
                                <!-- Field -->
                                @csrf
                                <div class="field">
                                    <div class="field-label is-normal">
                                        <label class="label">Job Title</label>
                                    </div>
                                    <div class="field-body">
                                        <div class="field">
                                            <div class="control">
                                                <input class="input" name="job_title" id="job_title" type="text"
                                                    placeholder="Title" autofocus required data-validate="require">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="field">
                                    <div class="field-label is-normal">
                                        <label class="label">Job Description</label>
                                    </div>
                                    <div class="field-body">
                                        <div class="field">
                                            <div class="control">
                                                <input class="input" name="job_description" id="job_description" type="text"
                                                    placeholder="Description" autofocus required data-validate="require">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="field">
                                    <div class="field-label is-normal">
                                        <label class="label">Job Duration</label>
                                    </div>
                                    <div class="field-body">
                                        <div class="field">
                                            <div class="control">
                                                <input class="input" name="job_duration" id="job_duration" type="text"
                                                    placeholder="Job Duration" required autofocus data-validate="require">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="field">
                                    <div class="field-label is-normal">
                                        <label class="label">Job Budget</label>
                                    </div>
                                    <div class="field-body">
                                        <div class="field">
                                            <div class="control">
                                                <input class="input" name="job_budget" id="job_budget" type="text"
                                                    placeholder="Job Budget" required autofocus data-validate="require">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="field mt-10">
                                    <div class="field-label is-normal">
                                        <label class="label">Skills</label>
                                    </div>
                                    <div class="control">
                                        <div class="tag-input">
                                            <input type="text" class="input">
                                            <input type="hidden" name="skills" value="" id="skills">
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!-- Step content -->
                        <div class="step-content has-text-centered profile" data-id="1">
                            <!-- Field -->
                            <form method="post" action="job-upload-file" enctype="multipart/form-data" class="dropzone"
                                id="dropzone">
                                @csrf
                            </form>


                            <div class="field">
                                <div class="field-label is-normal">
                                    <label class="label">Upload File</label>
                                </div>
                                <div class="field-body">
                                    <div class="field">
                                        <div class="control">
                                            <input class="input" type="file" autofocus data-validate="require">
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>
                        <!-- Step content -->
                        <div class="step-content has-text-centered social" data-id="2">
                            <div class="columns is-vcentered pt-30">
                                <!-- Demo section -->
                                <div class="column is-10 is-offset-1">
                                    <table class="responsive-table is-accent mb-40" style="width: 100%">
                                        <tbody>
                                            <tr style="background-color: #ff8017">
                                                <th>URL</th>
                                                <th>Actions</th>
                                            </tr>
                                        </tbody>
                                    </table>
                
                                  
                                  
                                </div>
                            </div>
                
                         
                        </div>
                        <!-- Step content -->
                        <div class="step-content has-text-centered final" data-id="3">
                            <img class="confirm-image" src="assets/img/graphics/icons/demo/account.svg">
                            <h1 class="title is-5">Job Posted Successfully</h1>
                            {{-- <p class="pt-10 pb-10 is-muted">You can now login with your credentials and start using the App
                            </p> --}}
                        </div>
                    </div>
                    <!-- Steps navigation -->
                    <div class="steps-actions">
                        <a href="#"
                        style="visibility: hidden"
                        class="button secondary-btn button-cta is-bold raised btn-align modal-trigger"  data-modal="vertical-form-modal" id="add_links_button">Add Links</a>
                        <div class="steps-action">
                           
                            <a href="#" id="prev" data-nav="previous1"
                                class="button button-cta is-light is-bold btn-align">Back</a>
                            <a href="#" id="next" data-nav="next1"
                                class="button secondary-btn button-cta is-bold raised btn-align ">Next</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


     
        <!-- Modal trigger -->
        {{-- <a class="button button-cta btn-align primary-btn raised modal-trigger" data-modal="vertical-form-modal">Open modal</a> --}}
        <!-- /Modal trigger --> 
        
        <!-- Modal Markup -->
        <div id="vertical-form-modal" class="modal modal-sm">
            <div class="modal-background"></div>
            <div class="modal-content">
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
                            <button class="button button-cta btn-align accent-btn raised is-fullwidth no-lh" id="add_links">Save</button>
                        </div>
                    </div>
                </div>
            </div>
            <button class="modal-close is-large is-hidden" aria-label="close"></button>
        </div>
        <!-- /Modal Markup -->

@endsection



@section('scripts')
    <script src="assets/js/myapp.js"></script>
    <script>
       
       Dropzone.options.dropzone = {
                maxFilesize: 10,
                renameFile: function(file) {
                    var dt = new Date();
                    var time = dt.getTime();
                    return time + file.name;
                },
                acceptedFiles: ".jpeg,.jpg,.png,.gif,.pdf",
                addRemoveLinks: true,
                timeout: 60000,
                success: function(file, response) {
                    // console.log(file)
                    console.log(response);
                    console.log(file)
                    filenames.push(file.upload.filename);
                },
                error: function(file, response) {
                    console.log("Error")
                    return false;
                },
                removedfile: function(file) {
                    file.previewElement.remove();
                    console.log(file)
                    // /job-upload-file-delete
                    $.ajax({
                url: "job-upload-file-delete",
                type: "delete",
                data: {
                   file_name : file.upload.filename
                },
                success: function (response) {
                    console.log(response)
                    // You will get response from your PHP page (what you echo or print)
                   

                },
                error: function (jqXHR, textStatus, errorThrown) {
                    console.log(textStatus, errorThrown);
                   
                }
            });
                }
            };
    </script>

@endsection
