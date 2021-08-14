<html>

<head>
    <title>reCAPTCHA demo: Explicit render after an onload callback</title>
    <style>
        .rc-anchor-alert {
            display: none !important;
            visibility: hidden;
        }
    </style>
    <script type="text/javascript">
        var onloadCallback = function() {
            grecaptcha.render('html_element', {
                'sitekey': '6LfQLf4bAAAAAO6uS3fPIgs_uYp4VJYcB6iV23Gx'
            });
            var result = grecaptcha.getResponse();
            if(result.length == 0){
                alert("not captcha");
            }else{
                alert("yes");
            }
        };
    </script>
</head>

<body>
    <form action="?" method="POST">
        <div id="html_element"></div>
    </form>
    <script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit" async defer>
    </script>

   
</body>

</html>