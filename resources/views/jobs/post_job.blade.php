@extends('layouts.frontend_layouts.app')
@section('main')
<div class="columns is-vcentered">
    <div class="column is-6 is-offset-3">
        <div class="flex-card light-bordered light-raised">
            <div class="card-body">
                <div class="has-text-centered pb-1">
                    <h3 class="title is-4 is-styled">Job Post</h3>
                </div>
                @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
                <form class="padding-5" method="POST" id="myform" action="post-job" enctype="multipart/form-data">
                    @csrf
                    <div class="field">
                        <label class="form-label">Job Title</label>
                        <div class="control">
                            <input type="text" name="job_title" class="input is-medium" required>
                        </div>
                    </div>
                    
                    <div class="field mt-10">
                        <label class="form-label">Job Description</label>
                        <div class="control">
                            <input type="text" name="job_description" class="input is-medium" required>
                        </div>
                    </div>
                    <div class="field mt-10">
                        <label class="form-label">Skills</label>
                        <div class="control">
                                <div class="tag-input">
                                 <input type="text" class="input">
                                  <input type="hidden" name="skills" value="" id="skills">
                                </div>
                        </div>
                    </div>
                    <div class="field mt-10">
                        <label class="form-label">Job Duration (No. of Days)</label>
                        <div class="control">
                            <input type="text" name="job_duration" class="input is-medium" placeholder="10" required>
                        </div>
                    </div>
                    <div class="field mt-10">
                        <label class="form-label">Budget (in USD)</label>
                        <div class="control">
                            <input type="text" name="budget" class="input is-medium" placeholder="100" required>
                        </div>
                    </div>

                   
                           
                     {{-- <div class="columns is-vcentered pb-10">
                       <div class="column"></div>
                             <div class="column is-10">
                               <div id="uploader" class="section-wrapper">
                                 <div class="uploader-controls has-text-centered animated preFadeInUp fadeInUp">
                                   <input type="file" name="dragndrop" id="file" >
                                 </div>
                                </div>
                               </div>
                             <div class="column"></div>
                      </div> --}}
                      <form action="job-upload-file" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                    
                        <input type="file" name="dragndrop">
                        {{-- <input type="submit"> --}}
                    </form>

                   
                    <div class="mt-10 has-text-right">
                        <button type="submit" id="submit_button"  class="button button-cta no-lh btn-align secondary-btn is-bold raised">Submit</button>
                    </div>
                </form>

               
                
            </div>
        </div>
    </div>
</div>
 
       
 
@endsection

@section('scripts')
    
    <script>
       
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

