$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
let count = 0
let job_id;
let filenames = [];


$("#prev").click(function(){
    
})

$("#next").prop("disabled", false).click(function () {
    loading(true)
    if (count >= 3) {
        alert("submit form")
        return;
    }


    // do the task
    switch (count) {
        case 0:
            console.log("Save Jobs")

            let skills = []
            // console.log($(document).find(".tag")[0].innerText.split()[0].replace('x', '').trim())
            let tags = $(document).find(".tag")
            for (let index = 0; index < tags.length; index++) {
                const element = tags[index];
                skills.push(element.innerText.split()[0].replace('x', '').trim())
            }
            $("#skills").val(skills.join());
            let job_title = $("[name='job_title']").val()
            let job_description = $("[name='job_description']").val()
            let job_duration = $("[name='job_duration']").val()
            let budget = $("[name='job_budget']").val()
            let skills1 = $("#skills").val();
            $.ajax({
                url: "post-job",
                type: "post",
                data: {
                    job_title,
                    job_description,
                    job_duration,
                    budget,
                    skills: skills1
                },
                success: function (response) {
                    console.log(response)
                    // You will get response from your PHP page (what you echo or print)
                    job_id = response.success.id || null;
                    loading(false)
                    switchClass(count)
                    $(`[data-id="${count}"]`).removeClass("is-active");
                    count++;
                    $(`[data-id="${count}"]`).addClass("is-active");

                },
                error: function (error) {
                    let errors = error.responseJSON;
                    errorsHtml = '<div style = "background-color: red;color: white;text-align: initial;padding: 10px;" class="alert alert-danger"><ul>';

                    $.each(errors.errors, function (key, value) {
                        errorsHtml += '<li>' + value[0] + '</li>'; // showing only the first error.
                    });
                    errorsHtml += '</ul></div>';
                    $('#errors').html(errorsHtml);
                    loading(false)
                }
            });


            break;
        case 1:
            console.log("upload File")
            $.ajax({
                url: "addfiles",
                type: "post",
                data: {
                    filenames,
                    job_id
                },
                success: function (response) {
                    console.log(response)
                    // You will get response from your PHP page (what you echo or print)
                    loading(false)
                    switchClass(count)
                    $(`[data-id="${count}"]`).removeClass("is-active");
                    count++;
                    $(`[data-id="${count}"]`).addClass("is-active");

                },
                error: function (jqXHR, textStatus, errorThrown) {
                    console.log(textStatus, errorThrown);
                    loading(false)
                }
            });
            break;
        case 2:
            console.log("Social Limks")
            loading(false)
            switchClass(count)
            $(`[data-id="${count}"]`).removeClass("is-active");
            count++;
            $(`[data-id="${count}"]`).addClass("is-active");

            $("#next").text("Redirecting..")
            setTimeout(() => {
                window.location.href = "/post-job"
            }, 2000)
            break;
        case 3:
            console.log("Finished")
            break;

        default:
            break;
    }


})

function switchClass(count) {
    $(`[data-step-id="${count}"]`).addClass("is-completed");
    $(`[data-step-id="${count}"]`).removeClass("is-active");

    $(`[data-step-id="${
        count + 1
    }"]`).addClass("is-active");
}

function loading(load) {
    if (load) {
        $("#next").text("Loading..")
        $("#next").addClass("is-disabled");
    } else {
        $("#next").text("Next")
        $("#next").removeClass("is-disabled");
    }
}

$("#submit_button").click(function (event) {
    event.preventDefault();
    let skills = []
    // console.log($(document).find(".tag")[0].innerText.split()[0].replace('x', '').trim())
    let tags = $(document).find(".tag")
    for (let index = 0; index < tags.length; index++) {
        const element = tags[index];
        skills.push(element.innerText.split()[0].replace('x', '').trim())
    }
    $("#skills").val(skills.join());
    $("#myform").submit();


})

$("#file").change(function () {
    console.log($(this))
})


$(document).ready(function () {
    $('#files').fileuploader({ // Options will go here
    });
});
