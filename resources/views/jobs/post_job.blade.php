@extends('layouts.frontend_layouts.app')
@section('main')


<div class="columns mt-20">
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
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
                                        <input class="input" name="job_title" id="job_title" type="text" placeholder="Title" autofocus required data-validate="require">
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
                                        <input class="input" name="job_description" id="job_description" type="text" placeholder="Description" autofocus required data-validate="require">
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
                                        <input class="input" name="job_duration" id="job_duration" type="text" placeholder="Job Duration" required autofocus data-validate="require">
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
                                        <input class="input" name="job_budget" id="job_budget" type="text" placeholder="Job Budget" required autofocus data-validate="require">
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
                        <!-- Field -->
                        <div class="field">
                            <div class="field-label is-normal">
                                <label class="label">Facebook account</label>
                            </div>
                            <div class="field-body">
                                <div class="field">
                                    <div class="control">
                                        <input class="input" name="facebook2" id="facebook2" type="text" placeholder="Facebook account url" autofocus data-validate="require">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Field -->
                        <div class="field">
                            <div class="field-label is-normal">
                                <label class="label">Twitter account</label>
                            </div>
                            <div class="field-body">
                                <div class="field">
                                    <div class="control">
                                        <input class="input" name="twitter2" id="twitter2" type="text" placeholder="Twitter account url" autofocus data-validate="require">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Field -->
                        <div class="field">
                            <div class="field-label is-normal">
                                <label class="label">Dribbble account</label>
                            </div>
                            <div class="field-body">
                                <div class="field">
                                    <div class="control">
                                        <input class="input" name="dribbble2" id="dribbble2" type="text" placeholder="Dribbble account url" autofocus data-validate="require">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Step content -->
                    <div class="step-content has-text-centered final" data-id="3">
                        <img class="confirm-image" src="assets/img/graphics/icons/demo/account.svg">
                        <h1 class="title is-5">Your account is now created!</h1>
                        <p class="pt-10 pb-10 is-muted">You can now login with your credentials and start using the App</p>
                    </div>
                </div>
                <!-- Steps navigation -->
                <div class="steps-actions">
                    <div class="steps-action">
                        <a href="#" id="prev" data-nav="previous1" class="button button-cta is-light is-bold btn-align" >Back</a>
                        <a href="#" id="next" data-nav="next1" class="button secondary-btn button-cta is-bold raised btn-align">Next</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>




 
       
 
@endsection

@section('scripts')
    
    <script>
       let count = 0
        $("#next").click(function(){
            if(count >= 3){
                alert("submit form")
                return;
            }
            switchClass(count)
            $(`[data-id="${count}"]`).removeClass("is-active");
            //do the task
            
            count++;
            $(`[data-id="${count}"]`).addClass("is-active");
                
        })

        function switchClass(count){
           $(`[data-step-id="${count}"]`).addClass("is-completed");
           $(`[data-step-id="${count}"]`).removeClass("is-active");

           $(`[data-step-id="${count+1}"]`).addClass("is-active");
        }

            $("#submit_button").click(function(event){
            event.preventDefault();
            let skills = []
            // console.log($(document).find(".tag")[0].innerText.split()[0].replace('x', '').trim())
            let tags =  $(document).find(".tag")
            for (let index = 0; index < tags.length; index++) {
                const element = tags[index];
                skills.push(element.innerText.split()[0].replace('x', '').trim())
             }
             $("#skills").val(skills.join());
             $("#myform").submit();
           

        })

        $("#file").change(function(){
            console.log($(this))
        })

        
        $(document).ready(function() {
        $('#files').fileuploader({
            // Options will go here
        });
    });

        
    </script>

@endsection

