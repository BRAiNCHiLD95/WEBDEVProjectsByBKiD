<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AC | Program Match</title>
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="assets/css/slider.css">
    <link href="assets/css/style.css" rel="stylesheet">
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/jquery.easyui.min.js"></script>
    <script src="assets/js/jquery.slider.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <style>
        #best_match {
            position: sticky;
            bottom: 0%;
        }
    </style>
</head>
<body>
    <?php include('header.php'); ?>
    <div style="background: #F4F4F4; margin: 0px;">
        <div class="col-md-8 pb-5 offset-md-2 text-center">
            <img class="mt-5 pt-5" src="assets/images/arton.png">
            <h1>PROGRAM <span class="font-weight-bold">MATCH</span></h1>
            <h5 style="color: #CC9966;" class="font-italic">Discover which programs best match your goals.</h5>
        </div>
    </div>
    <div id="match_cont" class="container">
        <form class="form col-12 offset-md-1" action="javascript:;">
            <div class="form-row my-3">
                <div class="col-md-3 col-12 my-3">
                    <h6>NET WORTH</h6>
                    <p class="font-italic">Indicate your personal net worth, in US$</p>
                </div>
                <div class="col-md-7 col-12  my-3">
                    <div class="form-group my-3">
                        <input class="easyui-slider slider-f" value="0" data-options="showTip:true, rule: ['0','10,000,000+'], min:0, max:38, tipFormatter:function(value){ if (value <= 20) { value = value * 50000; } else { value = (value - 18) * 500000; } var parts=value.toString().split('.'); return parts[0].replace(/\B(?=(\d{3})+(?!\d))/g, ',') + (parts[1] ? '.' + parts[1] : ''); }, onComplete : function() { $(this).closest('form').change(); } " slidername="NetWorth" style="display: none;">
                    </div>
                </div>
            </div>
            <div class="form-row my-3">
                <div class="col-md-3 col-12   my-3">
                    <h6>CONTRIBUTION AMOUNT</h6>
                    <p class="font-italic">Indicate how much you are willing to contribute for a family of four, in US$</p>
                </div>
                <div class="col-md-7 col-12   my-3">
                    <div class="form-group my-3">
                        <input class="easyui-slider slider-f" value="0" data-options=" showTip:true, rule: ['0','10,000,000+'], min:0, max:38, tipFormatter:function(value){ if (value <= 20) { value = value * 50000; } else { value = (value - 18) * 500000; } var parts=value.toString().split('.'); return parts[0].replace(/\B(?=(\d{3})+(?!\d))/g, ',') + (parts[1] ? '.' + parts[1] : ''); }, onComplete : function() { $(this).closest('form').change(); } " slidername="ContribAmt" style="display: none;">
                    </div>
                </div>
            </div>
            <div class="form-row my-3">
                <div class="col-md-3 col-12   my-3">
                    <h6>CONTRIBUTION TYPE</h6>
                    <p class="font-italic">Indicate the type of contribution you would like to make.</p>
                </div>
                <div class="col-md-7 col-12   my-3">
                    <div class="form-group">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" value="Donation" name="contribCheck" id="DonationCheck">
                            <label class="custom-control-label" for="DonationCheck">Donation</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" value="Bond" name="contribCheck" id="govtCheck">
                            <label class="custom-control-label" for="govtCheck">Government Bonds</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" value="Deposit" name="contribCheck" id="depositCheck">
                            <label class="custom-control-label" for="depositCheck">Bank Deposit</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" value="Real Estate" name="contribCheck" id="realEstateCheck">
                            <label class="custom-control-label" for="realEstateCheck">Real Estate</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" value="Project" name="contribCheck" id="projectCheck">
                            <label class="custom-control-label" for="projectCheck">Project</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-row my-3">
                <div class="col-md-3  my-3">
                    <h6>FINANCING</h6>
                    <p class="font-italic">Indicate if you would like to finance the required contribution.</p>
                </div>
                <div class="col-md-7  my-3">
                    <div class="form-group my-3">
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="financing_yes" value="Yes" name="financingRadio" class="custom-control-input">
                            <label class="custom-control-label" for="financing_yes">Yes</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="financing_no" value="No" name="financingRadio" class="custom-control-input">
                            <label class="custom-control-label" for="financing_no">No</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-row my-3">
                <div class="col-md-3  my-3">
                    <h6>SPEED</h6>
                    <p class="font-italic">Indicate how important it is the time to obtain citizenship as measured by the Arton Index.</p>
                </div>
                <div class="col-md-7  my-3">
                    <div class="form-group">
                        <div class="custom-control custom-radio">
                            <input type="radio" id="speed_very" name="speedRadio" value="None" class="custom-control-input">
                            <label class="custom-control-label" for="speed_very">Very Important</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input type="radio" id="speed_somewhat" name="speedRadio" value="6-12 months" class="custom-control-input">
                            <label class="custom-control-label" for="speed_somewhat">Somewhat Important</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input type="radio" id="speed_no" name="speedRadio" value="36 months" class="custom-control-input">
                            <label class="custom-control-label" for="speed_no">Not Important at all.</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-row my-3">
                <div class="col-md-3  my-3">
                    <h6>RELOCATION</h6>
                    <p class="font-italic">Indicate if relocating to fulfill citizenship requirements is an option for you.</p>
                </div>
                <div class="col-md-7  my-3">
                    <div class="form-group my-3">
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="relocate_yes" value="Yes" name="relocateRadio" class="custom-control-input">
                            <label class="custom-control-label" for="relocate_yes">Yes</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="relocate_no" value="No" name="relocateRadio" class="custom-control-input">
                            <label class="custom-control-label" for="relocate_no">No</label>
                        </div>
                    </div>
                </div>
            </div>
            <!-- <div class="form-row my-3">
                <div class="col-md-3  my-3">
                    <h6>MOBILITY</h6>
                    <p class="font-italic">Indicate which countries and/or regions you would like to travel to visa-free</p>
                </div>
                <div class="col-md-7  my-3">
                    <div class="form-group">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" name="mobilityCheck" value="Canada" id="mobility_Canada_Check">
                            <label class="custom-control-label" for="mobility_Canada_Check">Canada</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" name="mobilityCheck" value="Europe" id="mobility_Europe_Check">
                            <label class="custom-control-label" for="mobility_Europe_Check">Europe (Schenzen Zone)</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" name="mobilityCheck" value="USA" id="mobility_USA_Check">
                            <label class="custom-control-label" for="mobility_USA_Check">USA</label>
                        </div>
                    </div>
                </div>
            </div> -->
            <div class="form-row my-3">
                <div class="col-md-3  my-3">
                    <h6>SIMPLICITY</h6>
                    <p class="font-italic">Indicate how important it is a simple procedure as measured by the Arton Index.</p>
                </div>
                <div class="col-md-7  my-3">
                    <div class="form-group">
                        <div class="custom-control custom-radio">
                            <input type="radio" id="simplicity_very" value="16" name="simplicityRadio" class="custom-control-input">
                            <label class="custom-control-label" for="simplicity_very">Very Important</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input type="radio" id="simplicity_somewhat" value="10" name="simplicityRadio" class="custom-control-input">
                            <label class="custom-control-label" for="simplicity_somewhat">Somewhat Important</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input type="radio" id="simplicity_no" value="0" name="simplicityRadio" class="custom-control-input">
                            <label class="custom-control-label" for="simplicity_no">Not Important at all.</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-row my-3">
                <div class="col-md-3  my-3">
                    <h6>QUALITY OF LIFE</h6>
                    <p class="font-italic">Indicate how important it is the quality of life as measured by the Arton Index.</p>
                </div>
                <div class="col-md-7  my-3">
                    <div class="form-group">
                        <div class="custom-control custom-radio">
                            <input type="radio" id="life_very" value="9" name="lifeRadio" class="custom-control-input">
                            <label class="custom-control-label" for="life_very">Very Important</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input type="radio" id="life_somewhat" value="6" name="lifeRadio" class="custom-control-input">
                            <label class="custom-control-label" for="life_somewhat">Somewhat Important</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input type="radio" id="life_no" value="3" name="lifeRadio" class="custom-control-input">
                            <label class="custom-control-label" for="life_no">Not Important at all.</label>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <div id="best_match" class="col-md-10 mx-auto shadow" style="background: #cc9966;">
            <div class="p-relative">
                <h4 class="text-center py-1">YOUR BEST MATCH:</h4>
                <button id="best_reset" class="btn btn-secondary">Reset</button>
            </div>
            <div id="matches" class="row justify-content-center my-3 py-3">
                <div class="col-2 mr-md-2 text-center">
                    <img id="c_img1" src="flags/placeholder-icon.svg" height="100px" width="100px">
                    <p id="c1" class="ml-3 ml-lg-0 font-weight-bold"></p>
                </div>
                <div class="col-2 mx-md-2 text-center">
                    <img id="c_img2" src="flags/placeholder-icon.svg" height="100px" width="100px">
                    <p id="c2" class="ml-3 ml-lg-0 font-weight-bold"></p>
                </div>
                <div class="col-2 mx-md-2 text-center">
                    <img id="c_img3" src="flags/placeholder-icon.svg" height="100px" width="100px">
                    <p id="c3" class="ml-3 ml-lg-0 font-weight-bold"></p>
                </div>
                <div class="col-2 mx-md-2 text-center">
                    <img id="c_img4" src="flags/placeholder-icon.svg" height="100px" width="100px">
                    <p id="c4" class="ml-3 ml-lg-0 font-weight-bold"></p>
                </div>
                <div class="col-2 ml-md-2 text-center">
                    <img id="c_img5" src="flags/placeholder-icon.svg" height="100px" width="100px">
                    <p id="c5" class="ml-3 ml-lg-0 font-weight-bold"></p>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include('footer.php'); ?>
<script>
    $(document).ready(function(){

        $('#best_reset').click(function(){
            $('form').trigger("reset");
            $('#c_img1').attr("src","flags/placeholder-icon.svg");
            $('#c1').text('');
            $('#c2').text('');
            $('#c3').text('');
            $('#c4').text('');
            $('#c5').text('');
            $('#c_img2').attr("src","flags/placeholder-icon.svg");
            $('#c_img3').attr("src","flags/placeholder-icon.svg");
            $('#c_img4').attr("src","flags/placeholder-icon.svg");
            $('#c_img5').attr("src","flags/placeholder-icon.svg");
        });

        $('form').change(function(){
            $net_value = parseInt($('input[slidername="NetWorth"]').val());
            if ($net_value <= 20)
            { $net_value = $net_value * 50000; }
            else { $net_value = ($net_value - 18) * 500000; }
            var $parts=$net_value.toString().split('.');
            $networth = $parts[0] + ($parts[1] ? '.' + $parts[1] : ''); 

            $contrib_value = parseInt($('input[slidername="ContribAmt"]').val());
            if ($contrib_value <= 20)
            { $contrib_value = $contrib_value * 50000; }
            else { $contrib_value = ($contrib_value - 18) * 500000; }
            var $parts=$contrib_value.toString().split('.');
            $contrib_amt = $parts[0] + ($parts[1] ? '.' + $parts[1] : ''); 
            
            $contrib = $('input[name="contribCheck"]:checked').map(function(_, el) {
                return $(el).val();
            }).get();
            $financing = $('input[name="financingRadio"]:checked').val();
            $speed = $('input[name="speedRadio"]:checked').val();
            $relocate = $('input[name="relocateRadio"]:checked').val();
            $simplicity = $('input[name="simplicityRadio"]:checked').val();
            $life = $('input[name="lifeRadio"]:checked').val();

            $formObject = {
                'net_worth': $networth,
                'contrib_amt' : $contrib_amt,
                'contrib_type': $contrib,
                'financing' : $financing,
                'speed' : $speed,
                'relocation' : $relocate,
                'simplicity' : $simplicity,
                'life' : $life
            }
            console.log($formObject);
            $.ajax({
                url: "match.php",
                method: "POST",
                data: {data: $formObject},
                datatype: "json",
                success: function(response) {
                    response = JSON.parse(response);
                    console.log(response);
                    if (response[0]) {
                        $('#c_img1').attr("src","assets/uploads/"+response[0]['country_img']);
                        $('#c1').text(response[0]['name']);
                    }
                    else {
                        $('#c_img1').attr("src","flags/placeholder-icon.svg");
                        $('#c1').text('');
                    }
                    if (response[1]) {
                        $('#c_img2').attr("src","assets/uploads/"+response[1]['country_img']);
                        $('#c2').text(response[1]['name']);
                    }
                    else {
                        $('#c_img2').attr("src","flags/placeholder-icon.svg");
                        $('#c2').text('');
                    }
                    if (response[2]) {
                        $('#c_img3').attr("src","assets/uploads/"+response[2]['country_img']);
                        $('#c3').text(response[2]['name']);
                    }
                    else {
                        $('#c_img3').attr("src","flags/placeholder-icon.svg");
                        $('#c3').text('');
                    }
                    if (response[3]) {
                        $('#c_img4').attr("src","assets/uploads/"+response[3]['country_img']);
                        $('#c4').text(response[3]['name']);
                    }
                    else {
                        $('#c_img4').attr("src","flags/placeholder-icon.svg");
                        $('#c4').text('');
                    }
                    if (response[4]) {
                        $('#c_img5').attr("src","assets/uploads/"+response[4]['country_img']);
                        $('#c5').text(response[4]['name']);
                    }
                    else {
                        $('#c_img5').attr("src","flags/placeholder-icon.svg");
                        $('#c5').text('');
                    }
                }
            });
        })
    });
</script>
</body>
</html>