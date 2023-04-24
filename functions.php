<?php

function theme_enqueue_styles() {
    wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css', [] );
}
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles', 20 );

function avada_lang_setup() {
    $lang = get_stylesheet_directory() . '/languages';
    load_child_theme_textdomain( 'Avada', $lang );
}
add_action( 'after_setup_theme', 'avada_lang_setup' );

function license_plate_check( $atts ) {
    ob_start();
    ?>
    <style>
        label#kenteken-input-label {
            color: #282828;
            display: block;
            font-size: 12px;
            font-weight: 400;
            padding: 0;
        }
        .net-total {
            flex-wrap: wrap;
            justify-content: space-between;
        }
        .inputgroup.kenteken-input-holder {
            width: 100%;
            min-height: 55px;
            display: flex;
            margin-bottom: 20px;
            margin-bottom: 10px;
            border: 2px solid #000;
            border-radius: 7px;
        }

        .inputgroup.kenteken-input-holder:before {
            content: " ";
            background-color: #2b4c9c;
            border-radius: 3px 0 0 3px;
            background-image: url(https://milieustickers.com/wp-content/uploads/2023/02/kenteken_eu.png);
            background-size: 48% auto;
            background-position: center;
            background-repeat: no-repeat;
            width: 50px;
            display: block;
            position: relative;
        }

        input#subForm {
            background: #f0b504 none repeat scroll 0 0;
            border-radius: 0px 5px 5px 0px;
            min-height: 55px;
            padding: 6px 4px 6px 5px;
            width: 100%;
            text-align: center;
            font-size: 40px;
            text-transform: uppercase;
            font-weight: 700;
            margin: 0px;
            color:black;
        }

        span.check.correct {
            background: url(https://milieustickers.com/wp-content/uploads/2023/02/checks.png) no-repeat;
            width: 24px;
            height: 24px;
            background-size: 42px;
            background-repeat: no-repeat;
            background-position: -23px 1px;
            position: absolute;
            margin-top: 75px;
            margin-top: 67px;
            margin-left: 13px;
        }
        span.check.incorrect {
            background: url(https://milieustickers.com/wp-content/uploads/2023/02/checks.png) no-repeat;
            width: 22px;
            height: 24px;
            background-size: 42px;
            background-repeat: no-repeat;
            background-position: 0px 1px;
            position: absolute;
            margin-top: 75px;
            margin-top: 67px;
            margin-left: 13px;
        }.item.item--has-image {
             display: flex;
             align-items: center;
             justify-content: space-between;
         }

        .item.item--has-image img {
            width: 66px;
        }
        button.button.button--primary.button--medium.button--standard.button--has-label.button--has-prefix {
            background: #2b2b3c;
            border: none;
            color: white;
            width: 100%;
            border-radius: 4px;
            padding: 13px 0px;
            font-size: 18px;
            cursor: pointer;
        }

        button.button.button--primary.button--medium.button--standard.button--has-label.button--has-prefix:hover {
            opacity: 0.8;
        }

        span.button__suffix {
            color: #666;
            font-weight: bold;
        }
        .item__text {
            width: 50%;
        }
        span.lbl {
            font-size: 16px;
            line-height: 100%;
            margin: 0px;
            padding: 0px;
        }

        .wpcf7 p {
            margin: 0px;
        }
        .wpcf7 {
            margin-bottom: 20px;
        }
        sc-format-number.item__scratch-price.hydrated {
            text-decoration: line-through;
            color: #666;
            font-size: 14px;
            font-weight: normal;
        }
        .fusion-alert.alert.custom.alert-custom.fusion-alert-center.wpcf7-response-output.alert-dismissable.alert-shadow.error.fusion-danger {
            display: none;
        }
        span.wpcf7-not-valid-tip {
            font-size: 14px;
            line-height: 100%;
            position: relative;
            top: -5px;
        }
        input[type="text"],
        input[type="email"],
        input#street,input#housenumber,
        input#city,input#postcode,
        input.wpcf7-form-control.wpcf7-text,
        input.wpcf7-text.wpcf7-email {
            flex: 1 1 auto;
            display: inline-flex;
            align-items: center;
            justify-content: start;
            position: relative;
            width: 100%;
            box-sizing: border-box;
            font-family: var(--sc-input-font-family);
            font-weight: var(--sc-input-font-weight);
            letter-spacing: var(--sc-input-letter-spacing);
            background-color: var(--sc-input-background-color);
            border: solid 1px #dce0e6;
            vertical-align: middle;
            box-shadow: var(--sc-input-box-shadow);
            transition: var(--sc-transition-fast) color, var(--sc-transition-fast) border, var(--sc-transition-fast) box-shadow;
            cursor: text;
            padding: 0px 20px;
            margin: 0px;
            border-radius: 0px;
            height: 46px;
        }
        sc-format-number.hydrated {font-size: 17px;font-weight: bold;color: #666;}
        p.result {
            width: 300px;
            width: 100%;
            font-size: 12px;
            margin: 0px;
            padding: 0px;
            margin-top: -15px;
            padding-left: 45px;
            line-height: 17px;
            margin-top: 5px;
        }
        .item__suffix {
            width: 20%;
            text-align: right;
        }
        input#street,input#city {
            background: #f0f0f0;
        }
        h4.hydrated.fusion-responsive-typography-calculated {
            font-size: 22px;
            font-weight: bold;
            margin: 0px;
            margin-top: 30px;
            margin-bottom: 15px;
        }

        .item__title p {
            font-size: 19px;
            line-height: 100%;
            font-weight: bold;
        }

        .net-total {
            display: flex;
            border-top: 1px solid #ccc;
            margin-top: 20px;
            padding-top: 20px;
        }

        .total-text {
            font-weight: bold;
            line-height: 24px;
            font-size: 18px;
        }

        span.scratch-price.hydrated {
            text-decoration: line-through;
            margin-right: 14px;
            color: #7a7a7a;
            font-size: 18px;
        }
        span.hydrated {
            font-size: 18px;
            font-weight: bold;
        }
        input.wpcf7-form-control.has-spinner.wpcf7-submit {
            width: 100%;
            border-radius: 0px;
            border-radius: 5px;
            padding: 0px;
        }
        input.wpcf7-form-control.has-spinner.wpcf7-submit {
            background: #2b2b3c;
            padding: 14px 0px;
        }
        input.wpcf7-form-control.has-spinner.wpcf7-submit:hover {
            opacity: 0.8;
        }
        p.result .modal-details {
            padding: 10px 15px;
            display: inline-block;
            font-size: 20px;
            color: #155724;
            border: 1px solid transparent;
            background-color: #d4edda;
            font-weight: 700;
            line-height: 30px;
            width: 100%;
        }

        .result.model {
            padding: 0px;
        }

        @media only screen and (max-width: 600px) {
            input#subForm {
                font-size: 32px;
            }
        }

    </style>
    <div class="license-plate-box">
        <label for="subForm" id="kenteken-input-label">vul hier het kenteken in:</label>
        <div class="inputgroup kenteken-input-holder">
            <input type="text" id="subForm" name="i" autocomplete="off" class="kenteken-input" maxlength="8">
            <span class="check"></span>
        </div>
        <p class="result"></p>
    </div>
    <script>

        jQuery(document).ready(function() {
            // Get the input fields and address element
            /* var input1 = jQuery("#postcode");
            var input2 = jQuery("#housenumber");
            var address = jQuery(".address");

            // Attach a keyup event handler to the input fields
            input1.add(input2).on("keyup", function() {
              // Check if both inputs are filled
              if (input1.val() !== "" && input2.val() !== "") {
                // Remove the "hide" class from the address element
                address.removeClass("hide");
              }
            }); */
            jQuery('input#street,input#city').attr('readonly',true)

        });


        jQuery(document).ready(function($) {

            jQuery('button.submit').attr('disabled',true);

            jQuery(document).on('scOrderComplete', function(event, data) {
                // Your code here
                console.log('SureCart form submitted!');
                jQuery('input.wpcf7-form-control').trigger('click')
            });

            String.prototype.replaceAll = function(search, replacement) {
                var target = this;
                return target.replace(new RegExp(search, 'g'), replacement);
            };
            function str_replaceAll(str, search, replacement) {
                if (typeof str === "undefined") return str;
                return str.replace(new RegExp(search, 'g'), replacement);
            }

            function updateKentekenFormat() {
                var ua = navigator.userAgent.toLowerCase();

                jQuery(".kenteken-input").each(function() {
                    var original_value = jQuery(this).val();
                    var tmp = jQuery(this).val();
                    tmp = str_replaceAll(str_replaceAll(tmp," ",""),"-","");
                    var i = 0;
                    var total_kenteken = "";
                    while (typeof tmp[i] !== "undefined") {
                        var count1 = (total_kenteken.match(/is/g) || []).length;
                        if (typeof tmp[i+1] !== "undefined" && $.isNumeric(tmp[i]) !== $.isNumeric(tmp[i+1]) && tmp[i] !== "-" && tmp[i+1] !== "-" && count1 < 2) {
                            total_kenteken += tmp.substr(i,1)+"-";
                        } else {
                            total_kenteken += tmp.substr(i,1);
                        }
                        i++;
                    }
                    var count2 = (total_kenteken.match(/is/g) || []).length;
                    if (count2 < 2) {
                        var i2 = 0;
                        tmp = total_kenteken.split("-");
                        while (typeof tmp[i2] !== "undefined") {
                            if (tmp[i2].length === 4) {
                                //if (!$.isNumeric(tmp[i2][0])) {
                                total_kenteken = str_replaceAll(total_kenteken,tmp[i2],tmp[i2][0]+tmp[i2][1]+"-"+tmp[i2][2]+tmp[i2][3]);
                                //}
                            }
                            i2++;
                        }
                    }

                    /*if (total_kenteken[total_kenteken.length - 1] === "-") {
                        total_kenteken = total_kenteken.substr(0,(total_kenteken.length - 1));
                    }*/
                    if (total_kenteken.substr(0,1) === "-") {
                        total_kenteken = total_kenteken.substr(1);
                    }
                    tmp = total_kenteken.split("-");
                    if (tmp.length >= 4) {
                        total_kenteken = tmp[0]+"-"+tmp[1]+"-";
                        i = 2;
                        while (typeof tmp[i] !== "undefined") {
                            total_kenteken += tmp[i];
                            i++;
                        }
                    }
                    if (total_kenteken.toUpperCase() !== original_value) {
                        jQuery(this).val(total_kenteken.toUpperCase());
                    }
                });
            }
            updateKentekenFormat();
            jQuery(".kenteken-input").keyup(function() {
                updateKentekenFormat();
                if (str_replaceAll(jQuery(this).val(),"-","").length >= 6) {
                    //jQuery("#kenteken-input-label").removeClass("failedtofind").html("vul hier het kenteken in:");
                }
            });

            jQuery('input#subForm').on('change', function() {
                //if (jQuery(this).val().length === 6) {
                if (jQuery(this).val().length < 9) {
                    let text = jQuery(this).val();
                    console.log(text)
                    jQuery("#licensecode").val(text);
                    const plateNo = jQuery(this).val();
                    const newPlateNo = plateNo.replace(/-/g, "")
                    jQuery.ajax({
                        url: 'https://milieustickers.com/wp-admin/admin-ajax.php',
                        type: 'POST',
                        data: {
                            action: 'verify_license_no',
                            // licenseNo: jQuery(this).val(),
                            licenseNo: newPlateNo,
                        },
                        success: function(response) {

                            console.log(response);
                            let res = JSON.parse(response);
                            console.log(res);
                            if (res.status == "true") {
                                if(res.merk!=='') {
                                    jQuery('.result').addClass('model')
                                    jQuery('.check').removeClass('incorrect')
                                    jQuery('.check').removeClass('correct')
                                    jQuery('.result').html('<div class="modal-details">Merk : '+res.merk+' | Model : '+res.handelsbenaming+"</div>")
                                    jQuery('button.submit').attr('disabled',false);

                                } else {
                                    jQuery('.result').removeClass('model')
                                    jQuery('.check').removeClass('incorrect')
                                    jQuery('.check').addClass('correct')
                                    jQuery('.result').html('Uw voertuig heeft een groene milieusticker nodig')
                                    jQuery('button.submit').attr('disabled',false);
                                }
                            } else {
                                jQuery('.result').removeClass('model')
                                jQuery('.check').removeClass('correct')
                                jQuery('.check').addClass('incorrect')
                                jQuery('.result').html('Uw voertuig komt niet in aanmerking voor een groene milieusticker')
                            }
                            /*
                          if(res.brandstof_omschrijving == "Elektriciteit") {
                              jQuery('.check').removeClass('incorrect')
                              jQuery('.check').addClass('correct')
                              jQuery('.result').html('Uw voertuig heeft een groene milieusticker nodig')
                          } else {
                              jQuery('.check').removeClass('correct')
                              jQuery('.check').addClass('incorrect')
                              jQuery('.result').html('Uw voertuig komt niet in aanmerking voor een groene milieusticker')
                          }

                          if(res.length == 1) {
                              jQuery('.check').removeClass('incorrect')
                              jQuery('.check').addClass('correct')
                              jQuery('.result').html('Uw voertuig heeft een groene milieusticker nodig')
                          } else {
                              jQuery('.check').removeClass('correct')
                              jQuery('.check').addClass('incorrect')
                              jQuery('.result').html('Uw voertuig komt niet in aanmerking voor een groene milieusticker')
                          } */
                        },
                        error: function(jqXHR, textStatus, errorThrown) {
                            console.error(errorThrown); // Handle any error that occurs during the AJAX request
                        }
                    });
                }
            });
        });
    </script>
    <?php
    return ob_get_clean();
}
add_shortcode( 'license_plate_check', 'license_plate_check' );

add_action('wp_ajax_verify_license_no', 'verify_license_no');
add_action('wp_ajax_nopriv_verify_license_no', 'verify_license_no'); // For non-logged-in users

function verify_license_no() {
    $license_no =  str_replace("-","",$_POST['licenseNo']);
    $license_sanitised = str_replace("-","",$license_no);
    $license_sanitised = mb_strtoupper($license_sanitised);
    //ob_start();
    $url = 'https://opendata.rdw.nl/resource/8ys7-d773.json?$$app_token=8vcQ8OLlts6JUlYjeXY7FM2Np&kenteken='.$license_sanitised;
    $data = file_get_contents($url);
    $merk = isset($data[0]->merk) ? $data[0]->merk : "";
    $handelsbenaming = isset($data[0]->handelsbenaming) ? $data[0]->handelsbenaming : "";

    $data = json_decode($data);



    $out = array();

    if (!empty($data[0])) {
        if ($data[0]->brandstof_omschrijving == "Elektriciteit") {
            $out["status"] = "true";
        } elseif ($data[0]->brandstof_omschrijving == "Diesel") {
            if (!in_array($data[0]->emissiecode_omschrijving, array(1,2,3,4,5,6), true ) || empty($data[0]->emissiecode_omschrijving) || !property_exists($data[0], 'emissiecode_omschrijving')) {

                $url2 = 'https://opendata.rdw.nl/resource/m9d7-ebf2.json?$$app_token=8vcQ8OLlts6JUlYjeXY7FM2Np&kenteken='.$license_sanitised;
                $data2 = file_get_contents($url2);
                $data2 = json_decode($data2);
                $merk = isset($data2[0]->merk) ? $data2[0]->merk : "";
                $handelsbenaming = isset($data2[0]->handelsbenaming) ? $data2[0]->handelsbenaming : "";

                if (intval($data2[0]->datum_eerste_toelating) > 20051231) {
                    $out["status"] = "true";
                } else {
                    $out["status"] = "false";
                }
            }

        } else {

            $url3 = 'https://opendata.rdw.nl/resource/m9d7-ebf2.json?$$app_token=8vcQ8OLlts6JUlYjeXY7FM2Np&kenteken='.$license_sanitised;
            $data3 = file_get_contents($url3);
            $data3 = json_decode($data3);
            $merk = isset($data3[0]->merk) ? $data3[0]->merk : "";
            $handelsbenaming = isset($data3[0]->handelsbenaming) ? $data3[0]->handelsbenaming : "";

            if (intval($data3[0]->datum_eerste_toelating) > 19921231) {
                $out["status"] = "true";
            } else {
                $out["status"] = "false";
            }
        }
    } else {
        $out["status"] = "false";
    }
    $out["merk"] = $merk;
    $out["handelsbenaming"] = $handelsbenaming;

    echo json_encode($out);
    //print_r($data[0]);
    /* NEW CODE HERE */
    wp_die();
}

add_action( 'wpcf7_mail_sent', 'store_cf7_data_in_local_storage' );

function store_cf7_data_in_local_storage( $contact_form ) {
    // Get form submission data
    $submission = WPCF7_Submission::get_instance();

    // Make sure submission is valid
    if ( $submission ) {
        // Get form data
        $posted_data = $submission->get_posted_data();

        // Convert data to JSON
        $json_data = json_encode( $posted_data );

        setcookie( 'cf7_data', $json_data, time() + 3600, '/' );

    }
}

function check_current_page_template( $template ) {
    if ( is_page( 'bedankt-voor-bestelling' ) ) {

        if ( isset( $_COOKIE['cf7_data'] ) ) {

            $cf7_data 	= json_decode( str_replace("\\",'',$_COOKIE['cf7_data']), true );
            $firstname 	= $cf7_data['pronamic_pay_first_name'];
            $email 		= $cf7_data['pronamic_pay_email'];
            $pay_description = $cf7_data['pronamic_pay_description'];
            $address 	= $cf7_data['pronamic_pay_address_line_1'].' '.$cf7_data['pronamic_pay_address_line_2'].' '.$cf7_data['pronamic_pay_address_city'].' '.$cf7_data['pronamic_pay_address_postal_code'];

            $api_key = "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";
            $api_url = "https://api.sendgrid.com/v3/mail/send";

            $to_email = $email;
            $from_email = 'bestelling@milieustickers.com';
            $template_id = "d-056870f69fa2448f99f52b911bb01348";
            $template_vars = [
                "NAME" => $firstname,
                "ADDRESS" => $address,
                "CODE" => $pay_description,
            ];

            // Set the payload as a JSON string
            $payload = json_encode([
                "personalizations" => [
                    [
                        "to" => [
                            [
                                "email" => $to_email
                            ]
                        ],
                        "dynamic_template_data" => $template_vars
                    ]
                ],
                "from" => [
                    "email" => $from_email
                ],
                "template_id" => $template_id
            ]);

            // Set the cURL options and send the POST request
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $api_url);
            curl_setopt($ch, CURLOPT_POST, 1);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
            curl_setopt($ch, CURLOPT_HTTPHEADER, [
                "Authorization: Bearer $api_key",
                "Content-Type: application/json"
            ]);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            $response = curl_exec($ch);

            curl_close($ch);

            $city = $cf7_data['pronamic_pay_address_city'];
            $postcode = $cf7_data['pronamic_pay_address_postal_code'];
            $address = $cf7_data['pronamic_pay_address_line_1'].' '.$cf7_data['pronamic_pay_address_line_2'];
            sendEmail($email, $firstname, $address, $city, $pay_description, $postcode, $api_key);

            // Handle the response for testing
            /*
            if ($response === false) {
              //echo "Error sending email: " . curl_error($ch);
            } else {
              // echo "Email sent successfully!";
            } */

        }

    }
    return $template;
}
add_filter( 'template_include', 'check_current_page_template' );

function sendEmail($email_data, $firstname, $address, $city, $pay_description, $postcode, $API_Key) {

    $ch = curl_init();

    $data = array(
        "attributes" => array(
            "LICENSEPLATE" => $pay_description,
            "CITY" => $city,
            "POSTALCODE" => $postcode,
            "ADDRESS" => $address,
            "FIRSTNAME" => $firstname,
            "LASTNAME" => " "
        ),
        "updateEnabled" => false,
        "email" => $email_data
    );

    $options = array(
        CURLOPT_URL => "https://api.sendinblue.com/v3/contacts",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_POST => true,
        CURLOPT_POSTFIELDS => json_encode($data),
        CURLOPT_HTTPHEADER => array(
            "accept: application/json",
            "api-key: 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",
            "content-type: application/json"
        )
    );

    curl_setopt_array($ch, $options);

    $result = curl_exec($ch);
    print_r($result);
    curl_close($ch);

}

// Load Font Awesome
function load_font_awesome() {
    wp_enqueue_style( 'font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css' );
}
add_action( 'wp_enqueue_scripts', 'load_font_awesome' );