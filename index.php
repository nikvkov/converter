<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!DOCTYPE html>
<html>
<head>
    <title>Rate by Nikolaj Kovalenko</title>
    <!--Made with love by Mutiullah Samim -->

    <!--Bootsrap 4 CDN-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!--Fontawesome CDN-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

    <!--Custom styles-->
    <link rel="stylesheet" type="text/css" href="style/styles.css">
</head>
<body>
<div class="container">
    <div class="d-flex justify-content-center h-100">
        <div class="card">
            <div class="card-header">
                <h3>Converter</h3>
                <div class="d-flex justify-content-end social_icon">
                    <span><i class="fab fa-facebook-square"></i></span>
                    <span><i class="fab fa-google-plus-square"></i></span>
                    <span><i class="fab fa-twitter-square"></i></span>
                </div>
            </div>
            <div class="card-body">
                <form method="post" id="ajax_form" action="">
                    <div class="input-group form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fa fa-chevron-circle-righ"></i></span>
                        </div>
                        <!--                        <input type="text" class="form-control" placeholder="username">-->
                        <select id="provider" name="provider" class="form-control" name="provider" >
                            <option selected value="currencyconverterapi">free.currencyconverterapi.com</option>
                            <option value="currate">currate.ru</option>
                        </select>
                    </div>
                    <div class="input-group form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-chevron-circle-righ"></i></span>
                        </div>
<!--                        <input type="text" class="form-control" placeholder="username">-->
                            <select class="form-control" id="or_cur" name="or_cur" >
                                <option selected value="USD">USD</option>
                            </select>
                    </div>
                    <div class="input-group form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-chevron-circle-righ"></i></span>
                        </div>
                        <input type="text" id="rate_cur" name="rate_cur" class="form-control" value="UAH" placeholder="Put currency">
                    </div>
                    <div class="row align-items-center remember">
<!--                        <input type="checkbox">Remember Me-->
                        <input id="summ" name="summ" type="number" value="100" min="1" class="form-control" placeholder="Summ">
                        <input id = "result" name= "result" type="text" readonly class="form-control" placeholder="Result">
                        <input id = "rate" name= "rate" type="text" readonly class="form-control" placeholder="Rate">

                    </div>
                    <div style="margin-top: 15px" class="form-group">

                        <input name="bt_convert" id="bt_convert" type="button" value="Convert" class="btn float-right login_btn">
                    </div>
                </form>
            </div>
<!--            <div class="card-footer">-->
<!--                <div class="d-flex justify-content-center links">-->
<!--                    Don't have an account?<a href="#">Sign Up</a>-->
<!--                </div>-->
<!--                <div class="d-flex justify-content-center">-->
<!--                    <a href="#">Forgot your password?</a>-->
<!--                </div>-->
<!--            </div>-->
        </div>
    </div>
</div>
<script src="script/cur.js"></script>
</body>
</html>