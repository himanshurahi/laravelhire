$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

let count = 0
let dev_id = null;
let filenames = [];
let linksArray = [];

$(document).ready(function () {
    $("#add_links_button").hide();
})

$("#prev").click(function () {


    if (count <= 0) {} else {
        $(`[data-id="${count}"]`).removeClass("is-active");
        count--;
        trackCount(count)
        $(`[data-step-id="${count}"]`).addClass("is-active");
        $(`[data-step-id="${count}"]`).removeClass("is-completed");
        $(`[data-id="${count}"]`).addClass("is-active");

    }
    // $(`[data-step-id="${
    //     count + 1
    // }"]`).addClass("is-active");


})

$("#next").click(function () {
    loading(true)

    if (count >= 3) {
        alert("submit form")
        return;
    }
    // switchClass(count)
    // $(`[data-id="${count}"]`).removeClass("is-active");
    // count++;
    // $(`[data-id="${count}"]`).addClass("is-active");


    // do the task
    switch (count) {
        case 0:
            console.log("Save Profile Info")

            let skills = []
            // console.log($(document).find(".tag")[0].innerText.split()[0].replace('x', '').trim())
            let tags = $(document).find(".tag")
            for (let index = 0; index < tags.length; index++) {
                const element = tags[index];
                skills.push(element.innerText.split()[0].replace('x', '').trim())
            }
            $("#skills").val(skills.join());
            let first_name = $("[name='first_name']").val()
            let last_name = $("[name='last_name']").val()
            let phone_number = $("[name='phone_number']").val()
            let email = $("[name='email']").val()
            let rate = $("[name='rate']").val()
            let about = $("[name='about']").val()
            let skills1 = $("#skills").val();
            let profile_picture = $("#blah").attr('src');


            $.ajax({
                url: "register-developer",
                type: "post",
                data: {
                    first_name,
                    last_name,
                    phone_number,
                    email,
                    rate,
                    about,
                    skills: skills1,
                    profile_picture,
                    dev_id: dev_id,
                    type: 'save_dev'
                },
                success: function (response) {
                    dev_id = response.success.id;
                    console.log(response)
                    loading(false)
                    switchClass(count)
                    $(`[data-id="${count}"]`).removeClass("is-active");

                    count++;
                    $(`[data-id="${count}"]`).addClass("is-active");
                    trackCount(count)


                },
                error: function (error) {
                    loading(false);
                    showErrors(error)
                    $("#errors").html(showErrors(error));
                }
            });


            break;
        case 1:
            console.log("Portfolio Images")
            loading(false)
            switchClass(count)

            $(`[data-id="${count}"]`).removeClass("is-active");
            count++;
            $(`[data-id="${count}"]`).addClass("is-active");
            trackCount(count)
            // if (filenames.length == 0) {
            //     console.log("No Files");
            //     loading(false)
            //     switchClass(count)

            //     $(`[data-id="${count}"]`).removeClass("is-active");
            //     count++;
            //     $(`[data-id="${count}"]`).addClass("is-active");
            //     trackCount(count)
            // } else {
            //     $.ajax({
            //         url: "register-developer",
            //         type: "post",
            //         data: {
            //             filenames,
            //             dev_id,
            //             type: "save_dev_images"
            //         },
            //         success: function (response) {
            //             console.log(response)
            //             // You will get response from your PHP page (what you echo or print)
            //             loading(false)
            //             switchClass(count)

            //             $(`[data-id="${count}"]`).removeClass("is-active");
            //             count++;
            //             $(`[data-id="${count}"]`).addClass("is-active");
            //             trackCount(count)


            //         },
            //         error: function (jqXHR, textStatus, errorThrown) {
            //             console.log(textStatus, errorThrown);
            //             loading(false)
            //         }
            //     });
            // }

            break;
        case 2:
            console.log("Portfolio Links")


            if (linksArray.length != 0) { // jobs-sociallinks
                console.log(linksArray);
                $.ajax({
                    url: "register-developer",
                    type: "post",
                    data: {
                        portfolio_links: JSON.stringify(linksArray),
                        dev_id: dev_id,
                        type: 'save_portfolio_links'
                    },
                    success: function (response) {
                        console.log(response)

                        loading(false)
                        switchClass(count)
                        $(`[data-id="${count}"]`).removeClass("is-active");
                        count++;
                        $(`[data-id="${count}"]`).addClass("is-active");
                        trackCount(count)
                        $("#next").addClass("is-disabled");
                        $("#next").text("Redirecting..")
                        setTimeout(() => {
                            window.location.href = "jobs"
                        }, 2000)
                    },
                    error: function (error) {
                        console.log(error)
                        loading(false)
                    }
                });


            } else {
                loading(false)
                switchClass(count)
                $(`[data-id="${count}"]`).removeClass("is-active");
                count++;
                $(`[data-id="${count}"]`).addClass("is-active");
                trackCount(count)
                $("#next").addClass("is-disabled");
                $("#next").text("Redirecting..")
                setTimeout(() => {
                    window.location.href = "jobs"
                }, 2000)
            }

            // loading(false)
            // switchClass(count)
            // $(`[data-id="${count}"]`).removeClass("is-active");
            // count++;
            // $(`[data-id="${count}"]`).addClass("is-active");

            // $("#next").text("Redirecting..")
            // setTimeout(() => {
            //     window.location.href = "/jobs"
            // }, 2000)
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

function deleteFunc(index) {
    $(document).find("#link-id-" + index).remove();
    linksArray.splice(index, 1)
    console.log(linksArray)
}

function showErrors(error) {

    // <ul style="background-color: red; color: white; padding : 10px">
    // <li>Error</li>
    // </ul>
    var errorString = "<ul>";
    $.each(error.responseJSON.errors, function (key, value) {
        errorString += '<li>' + value + '</li>';
    });
    errorString += '</ul>';
    return errorString;
}

// function showAddLinksButton(count) {
//     if (count == 3) {
//         $("#add_links_button").css("visibility", "visible");
//     } else {
//         $("#add_links_button").css("visibility", "hidden");
//     }
// }

function hideModal() {
    $("#add_links_modal-background").removeClass('scaleInCircle');
    $("#add_links_modal-content").removeClass('scaleIn');
    $(".modal-close").addClass('is-hidden');
    setTimeout(() => {
        $("#vertical-form-modal").removeClass('is-active');
    }, 500)
}

function trackCount(count) {
    console.log(count)
    if (count == 2) {
        $("#add_links_button").show();
    } else {
        $("#add_links_button").hide();
    }
}

$("#add_links").click(function () {
    $(".responsive-table > tbody").html("<tr style='background-color: #ff8017'><th>URL</th><th>Actions</th></tr>");
    let link = $("#links").val();

    if (/^(http|https|ftp):\/\/[a-z0-9]+([\-\.]{1}[a-z0-9]+)*\.[a-z]{2,5}(:[0-9]{1,5})?(\/.*)?$/i.test(link)) {
        linksArray.push({'url': link});
        $(".control-material").removeClass("has-error")
        hideModal()
    } else { // alert("invalid URL");
        $(".control-material").addClass("has-error")
    } linksArray.map(function (value, index) {
        $(".responsive-table > tbody").append(`<tr id = link-id-${index}><td data-th='ID' >${
            value.url
        }</td><td data-th='Actions'><button class='button is-small btn-align accent-btn raised rounded btn-outlined' onclick = 'deleteFunc(${index})' >Remove</button></td></tr>`)
    })
})
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

$("#profile_picture").change(function () { // console.log($("#profile_picture")[0].files[0]);
    readURL($("#profile_picture")[0]);
})
function readURL(input) {

    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
            $('#blah').attr('src', e.target.result);
            $('#blah').css("display", "block");
        }
        reader.readAsDataURL(input.files[0]);
    }
}

$(document).ready(function () {
    $('#files').fileuploader({ // Options will go here
    });
});
