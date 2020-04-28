<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome to CodeIgniter 4!</title>
    <meta name="description" content="The small framework with powerful features">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="/favicon.ico"/>

    <!-- STYLES -->


<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<style>

    .submit-button {
        margin-top: 10px;
    }

     div.logo {
         height: 200px;
         width: 155px;
         display: inline-block;
         opacity: 0.08;
         position: absolute;
         top: 2rem;
         left: 50%;
         margin-left: -73px;
     }
    body {
        height: 100%;
        background: #fafafa;
        font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
        color: #777;
        font-weight: 300;
    }
    h1 {
        font-weight: lighter;
        letter-spacing: 0.8;
        font-size: 3rem;
        margin-top: 0;
        margin-bottom: 0;
        color: #222;
    }
    .wrap {
        max-width: 1024px;
        margin: 5rem auto;
        padding: 2rem;
        background: #fff;
        text-align: center;
        border: 1px solid #efefef;
        border-radius: 0.5rem;
        position: relative;
    }
    pre {
        white-space: normal;
        margin-top: 1.5rem;
    }
    code {
        background: #fafafa;
        border: 1px solid #efefef;
        padding: 0.5rem 1rem;
        border-radius: 5px;
        display: block;
    }
    p {
        margin-top: 1.5rem;
    }
    .footer {
        margin-top: 2rem;
        border-top: 1px solid #efefef;
        padding: 1em 2em 0 2em;
        font-size: 85%;
        color: #999;
    }
    a:active,
    a:link,
    a:visited {
        color: #dd4814;
    }

    h1 {
        padding: 20px;
    }
</style>
</head>
<body>
<div class="wrap">
    <h1>ID23Pay</h1>
<div class="container">
    <div class='row'>
        <div class='col-md-4'></div>
        <div class='col-md-4'>
            <script src='https://js.stripe.com/v2/' type='text/javascript'></script>
            <form accept-charset="UTF-8" action="/" class="require-validation" data-cc-on-file="false" data-stripe-publishable-key="pk_bQQaTxnaZlzv4FnnuZ28LFHccVSaj" id="payment-form" method="post"><div style="margin:0;padding:0;display:inline"><input name="utf8" type="hidden" value="✓" /><input name="_method" type="hidden" value="PUT" /><input name="authenticity_token" type="hidden" value="qLZ9cScer7ZxqulsUWazw4x3cSEzv899SP/7ThPCOV8=" /></div>
                <div class='form-row'>
                    <div class='col-xs-12 form-group required'>
                        <label class='control-label'>Name on Card</label>
                        <input class='form-control' size='4' type='text'>
                    </div>
                </div>
                <div class='form-row'>
                    <div class='col-xs-12 form-group card required'>
                        <label class='control-label'>Card Number</label>
                        <input autocomplete='off' class='form-control card-number' size='20' type='text'>
                    </div>
                </div>
                <div class='form-row'>
                    <div class='col-xs-4 form-group cvc required'>
                        <label class='control-label'>CVC</label>
                        <input autocomplete='off' class='form-control card-cvc' placeholder='ex. 311' size='4' type='text'>
                    </div>
                    <div class='col-xs-4 form-group expiration required'>
                        <label class='control-label'>Expiration</label>
                        <input class='form-control card-expiry-month' placeholder='MM' size='2' type='text'>
                    </div>
                    <div class='col-xs-4 form-group expiration required'>
                        <label class='control-label'> </label>
                        <input class='form-control card-expiry-year' placeholder='YYYY' size='4' type='text'>
                    </div>
                </div>
                <div class='form-row'>
                    <div class='col-md-12'>
                        <div class='form-control total btn btn-info'>
                            Total:
                            <span class='amount'>$300</span>
                        </div>
                    </div>
                </div>
                <div class='form-row'>
                    <div class='col-md-12 form-group'>
                        <button class='form-control btn btn-primary submit-button' type='submit'>Pay »</button>
                    </div>
                </div>
                <div class='form-row'>
                    <div class='col-md-12 error form-group hide'>
                        <div class='alert-danger alert'>
                            Please correct the errors and try again.
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <div class='col-md-4'></div>
    </div>
</div>
</div>

</body>
</html>
