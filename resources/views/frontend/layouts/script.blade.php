<!doctype html>
<html lang="zxx">


<head>


    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

</head>
<script>
function validateEmail() {
    const emailInput = document.getElementById('email');
    const emailError = document.getElementById('emailError');

    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    const email = emailInput.value;

    if (email === '' || emailRegex.test(email)) {
        emailError.style.display = 'none';
    } else {
        emailError.style.display = 'inline';
    }
}
</script>


</html>