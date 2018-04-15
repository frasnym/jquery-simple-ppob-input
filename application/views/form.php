<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>MCB</title>

    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/plugins/bootstrap-4.1.0-dist/css/bootstrap.css">
    <style type="text/css">
        .logoProvider {
            max-width: 185px;
            max-height: 60px;
        }
        .middle input[type="radio"] {
            display: none;
        }
        .middle input[type="radio"]:checked + .box {
            background-color: #0069D9;
        }
        .middle input[type="radio"]:checked + .box span {
            color: white;
            transform: translateY(70px);
        }
        .middle input[type="radio"]:checked + .box span:before {
            transform: translateY(0px);
            opacity: 1;
        }
        .middle .box {
            border-style: solid;
            border-color: #00366F;
            width: 210px;
            height: 90px;
            background-color: #fff;
            transition: all 250ms ease;
            will-change: transition;
            display: inline-block;
            text-align: center;
            cursor: pointer;
            position: relative;
            font-weight: 900;
            padding-top: 20px;
        }
        .middle .box:active {
            transform: translateY(10px);
        }
        .middle .box span {
            transform: translate(0, 60px);
            left: 0;
            right: 0;
            transition: all 300ms ease;
            font-size: 1em;
            user-select: none;
            color: #00438B;
        }
    </style>
</head>

<body class="bg-light">

    <div class="container">
        <div class="py-5 text-center">
            <h2>React Like Form Using Jquery</h2>
            <p class="lead">----------------------------</p>
        </div>

        <div class="container">
            <h4 class="mb-3">Purchase Mobile Phone Balance</h4>
                <form >
                    <div class="row">
                        <div class="col-md-10 mb-3">
                            <label for="phone">Phone Number :</label>
                            <input type="text" class="form-control" id="phone" maxlength="12" minlength="10" placeholder="Insert Indonesian Phone Number (ex: 08xxxxxxxxxx)" required>
                        </div>
                        <div class="col-md-2 mb-3">
                            <img id="logoProvider" class="logoProvider">
                        </div>
                        <div class="col-md-12">
                            <div id="pulsaxl" class="middle">
                                <label>
                                    <input type="radio" name="radPulsa" required/>
                                    <div class="front-end box">
                                        <span>Pulsa 5000</span><br>
                                        <span>Rp 6.000</span>
                                    </div>
                                </label>
                                <label>
                                    <input type="radio" name="radPulsa" required/>
                                    <div class="front-end box">
                                        <span>Pulsa 5000</span><br>
                                        <span>Rp 6.000</span>
                                    </div>
                                </label>
                                <label>
                                    <input type="radio" name="radPulsa" required/>
                                    <div class="front-end box">
                                        <span>Pulsa 5000</span><br>
                                        <span>Rp 6.000</span>
                                    </div>
                                </label>
                                <label>
                                    <input type="radio" name="radPulsa" required/>
                                    <div class="front-end box">
                                        <span>Pulsa 5000</span><br>
                                        <span>Rp 6.000</span>
                                    </div>
                                </label>
                                <label>
                                    <input type="radio" name="radPulsa" required/>
                                    <div class="front-end box">
                                        <span>Pulsa 5000</span><br>
                                        <span>Rp 6.000</span>
                                    </div>
                                </label>
                                <label>
                                    <input type="radio" name="radPulsa" required/>
                                    <div class="front-end box">
                                        <span>Pulsa 5000</span><br>
                                        <span>Rp 6.000</span>
                                    </div>
                                </label>
                            </div>
                            <div id="pulsatelkomsel" class="middle">
                                <label>
                                    <input type="radio" name="radPulsa" required/>
                                    <div class="front-end box">
                                        <span>Pulsa 5000</span><br>
                                        <span>Rp 6.000</span>
                                    </div>
                                </label>
                            </div>
                        </div>
                    </div>
                </form>
        </div>
        <footer class="my-5 pt-5 text-muted text-center text-small">
            <p class="mb-1">&copy; 2018 Mico Code Builder</p>
        </footer>
    </div>

    <script type='text/javascript' src="<?php echo base_url(); ?>assets/plugins/jquery/jquery-3.3.1.min.js"></script>
    <script type="text/javascript">
        $('#logoProvider').hide();
        $('#pulsaxl').hide();
        $('#pulsatelkomsel').hide();

        $( "#phone" ).keyup(function() {
            // Remove invalid characters
            var sanitized = $(this).val().replace(/[^0-9.]/g, '');
            sanitized = sanitized.replace(/\.(?=.*\.)/, '');
            // Update value
            $(this).val(sanitized);
            var nope = $(this).val();
            if (nope.length > 3) {
                if (nope.substring(0,4) == '0811' || nope.substring(0,4) == '0812' || nope.substring(0,4) == '0813' || nope.substring(0,4) == '0821' || nope.substring(0,4) == '0822') {
                    $('#logoProvider').attr('src','<?php echo base_url() ?>assets/img/logo/simpati.png');
                    $('#logoProvider').show();
                    $('#pulsatelkomsel').show();
                }
                else if (nope.substring(0,4) == '0894' || nope.substring(0,4) == '0895' || nope.substring(0,4) == '0896' || nope.substring(0,4) == '0897' || nope.substring(0,4) == '0898' || nope.substring(0,4) == '0899') {
                    $('#logoProvider').attr('src','<?php echo base_url() ?>assets/img/logo/tri.png');
                    $('#logoProvider').show();
                    $('#pulsaxl').show();
                }
                else if (nope.substring(0,4) == '0823' || nope.substring(0,4) == '0851' || nope.substring(0,4) == '0852' || nope.substring(0,4) == '0853') {
                    $('#logoProvider').attr('src','<?php echo base_url() ?>assets/img/logo/kartuas.png');
                    $('#logoProvider').show();
                    $('#pulsatelkomsel').show();
                }
                else if (nope.substring(0,4) == '0881' || nope.substring(0,4) == '0882' || nope.substring(0,4) == '0883' || nope.substring(0,4) == '0884' || nope.substring(0,4) == '0885' || nope.substring(0,4) == '0886' || nope.substring(0,4) == '0887' || nope.substring(0,4) == '0888' || nope.substring(0,4) == '0889') {
                    $('#logoProvider').attr('src','<?php echo base_url() ?>assets/img/logo/smartfren.png');
                    $('#logoProvider').show();
                    $('#pulsaxl').show();
                }
                else if (nope.substring(0,4) == '0817' || nope.substring(0,4) == '0818' || nope.substring(0,4) == '0819' || nope.substring(0,4) == '0859' || nope.substring(0,4) == '0877' || nope.substring(0,4) == '0878' || nope.substring(0,4) == '0879') {
                    $('#logoProvider').attr('src','<?php echo base_url() ?>assets/img/logo/xl.png');
                    $('#logoProvider').show();
                    $('#pulsaxl').show();
                }
                else if (nope.substring(0,4) == '0831' || nope.substring(0,4) == '0832' || nope.substring(0,4) == '0833' || nope.substring(0,4) == '0838') {
                    $('#logoProvider').attr('src','<?php echo base_url() ?>assets/img/logo/axis.png');
                    $('#logoProvider').show();
                    $('#pulsaxl').show();
                }
                else if (nope.substring(0,4) == '0856' || nope.substring(0,4) == '0857' || nope.substring(0,4) == '0858') {
                    $('#logoProvider').attr('src','<?php echo base_url() ?>assets/img/logo/im3.png');
                    $('#logoProvider').show();
                    $('#pulsatelkomsel').show();
                }
                else if (nope.substring(0,4) == '0855' || nope.substring(0,4) == '0814' || nope.substring(0,4) == '0815' || nope.substring(0,4) == '0816') {
                    $('#logoProvider').attr('src','<?php echo base_url() ?>assets/img/logo/mentari.png');
                    $('#logoProvider').show();
                    $('#pulsatelkomsel').show();
                }
            }
            else {
                $('#logoProvider').hide();
                $('#pulsaxl').hide();
                $('#pulsatelkomsel').hide();
            }
        });
    </script>
</body>

</html>