$(function() {
    $("#toast").click(function(event) {
        let nameOf = document.getElementById("name").value
        let email = document.getElementById("email").value
        let phone = document.getElementById("phone").value
        let subject = document.getElementById("subject").value
        let message = document.getElementById("message").value
        event.preventDefault()
        if(nameOf === "" || email === "" || phone === "" || subject === "" || message === "") {
            $("#error-toast").toast("show")
        } else {
            $.ajax({
                url: "contato.php",
                type: "POST",
                data: {
                    name: document.getElementById("name").value,
                    email: document.getElementById("email").value,
                    phone: document.getElementById("phone").value,
                    subject: document.getElementById("subject").value,
                    message: document.getElementById("message").value
                },
                success() {
                    document.getElementById("name").value = ""
                    document.getElementById("email").value = ""
                    document.getElementById("phone").value = ""
                    document.getElementById("subject").value = ""
                    document.getElementById("message").value = ""
                    $("#success-toast").toast("show")
                }
                /* error(xhr, status, error) {
                    alert(xhr.responseText)
                } //utilizado apenas para debug */
            })
        }
    })
    /* $("#submit-newsletter").click(function(event) {
        let inputNewsletter = document.getElementById("input-newsletter").value
        event.preventDefault()
        if(inputNewsletter === "") {
            $("#error-toast").toast("show")
        } else {
            $.ajax({
                url: "newsletter.php",
                type: "POST",
                data: {
                    inputNewsletter: document.getElementById("input-newsletter").value
                },
                success() {
                    document.getElementById("input-newsletter").value = ""
                    $("#success-toast").toast("show")
                },
                error(xhr, status, error) {
                    alert(xhr.responseText)
                }
            })
        }
    }) */
})