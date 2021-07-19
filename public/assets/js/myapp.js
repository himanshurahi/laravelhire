let count = 0
$("#next").click(function () {
    if (count >= 3) {
        alert("submit form")
        return;
    }
    switchClass(count)
    $(`[data-id="${count}"]`).removeClass("is-active");
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
            let job_title = $("[name='job_title']");
            let job_description = $("[name='job_description']");
            let job_duration = $("[name='job_duration']");
            let job_budget = $("[name='job_budget']");
            let skills1 = $("#skills").val();


            break;
        case 1:
            console.log("upload File")
            break;
        case 2:
            console.log("Social Limks")
            break;

        default:
            break;
    }

    count++;
    $(`[data-id="${count}"]`).addClass("is-active");

})

function switchClass(count) {
    $(`[data-step-id="${count}"]`).addClass("is-completed");
    $(`[data-step-id="${count}"]`).removeClass("is-active");

    $(`[data-step-id="${
        count + 1
    }"]`).addClass("is-active");
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
    $('#files').fileuploader({
        // Options will go here
    });
});
