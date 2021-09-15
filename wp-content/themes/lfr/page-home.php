<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

get_header();


?>

<div class="nav-space"></div>


<div class="position-relative banner-div">

    <div class="banner-text din"><?php echo get_field('banner_txt');?> </div>

    <img class="w-100" src="<?php echo  wp_get_attachment_image_src(get_field('banner_img'),'Full')[0];?>" alt="">
</div>

<div class="container  pt-5 pb-5" id="services">

    <div class="big-title mb-4">SERVICES</div>

    <div class="row justify-content-center">


        <?php

if( have_rows('services') )
{
    while( have_rows('services') ) { 
        the_row();
        ?>

        <div class="service-table-wrapper col-lg-6 col-md-12 col-sm-12 col-12  mb-4">
            <table class="service-table ">
                <tr>
                    <td class="icon-td p-3">
                        <img class="w-75"
                            src="<?php echo  wp_get_attachment_image_src(get_sub_field('service_img'),'Full')[0];?>"
                            alt="">
                        <div class="service-name"><?php echo get_sub_field('service_name');?></div>

                    </td>
                    <td class="content-td">
                        <?php
                        echo get_sub_field('service_content_txt');
                        ?>
                    </td>
                </tr>
            </table>
        </div>

        <?php

    }
}
        ?>



    </div>



</div>

<div class="position-relative blue-bg pt-5 pb-5 mt-5" id="client-process">


    <div class="big-title  text-center">CLIENT PROCESS</div>

    <div class="row justify-content-center   mt-4 g-0">
        <div class="col-lg-6 col-md-11 col-sm-11 col-11 ">
            <?php
            echo get_field('client_process');
            ?>
        </div>
    </div>
    <!-- <img src="http://64.225.99.121/wp-content/uploads/2021/09/Asset-10@2x-50-scaled.jpg" alt=""> -->
</div>


<div class="pt-5 " id="expertise">

    <div class="big-title">EXPERTISE</div>


    <div class="mt-4">
        <div class="row justify-content-center g-0">
            <div class="col-lg-6 col-md-11 col-sm-11 col-11 ">

                <?php echo get_field('expertise');?>
            </div>
        </div>
    </div>
</div>

<div class="mt-0 container pb-5">

    <?php

$idx=0;
if( have_rows('expertises_detail') )
{
    while( have_rows('expertises_detail') ) { 
        the_row();

        if($idx%2 ==0)
        {
            ?>
    <div class="row  expertise-row mt-4 gx-0">

        <div class="col-lg-7 col-md-12 col-sm-12 col-12 ">
            <img class="w-100"
                src="<?php echo  wp_get_attachment_image_src(get_sub_field('expertise_img'),'Full')[0];?>" alt="">
        </div>
        <div class=" col-lg-5 col-md-12 col-sm-12 col-12  g-0 ps-4 pb-5">

            <div class="expertise-title"><?php echo get_sub_field('expertise_title');?></div>
            <?php echo get_sub_field('expertise_content');?>

        </div>
    </div>
    <?php
        }
        else
        {

            ?>
    <div class="row  expertise-row mt-4 gx-0 mobile-reverse">

        <div class=" col-lg-5 col-md-12 col-sm-12 col-12  g-0 ps-4 pb-5">

            <div class="expertise-title"><?php echo get_sub_field('expertise_title');?>
            </div>
            <?php echo get_sub_field('expertise_content');?>

        </div>

        <div class="col-lg-7 col-md-12 col-sm-12 col-12 ">
            <img class="w-100"
                src="<?php echo  wp_get_attachment_image_src(get_sub_field('expertise_img'),'Full')[0];?>" alt="">
        </div>

    </div>
    <?php
        }

    
        $idx++;
    }
}
?>


</div>

<div class="team-div pt-5 pb-5" id="the-team">


    <div class="big-title">THE TEAM</div>

    <div class="container inner-container mt-4">

        <?php
    
if( have_rows('teammates') )
{
    while( have_rows('teammates') ) { 
        the_row();
        ?>
        <div class="row staff-row mb-5">

            <div class="col-lg-3 col-md-3 col-sm-12 col-12 ">
                <img class="w-100"
                    src="<?php echo  wp_get_attachment_image_src(get_sub_field('teammate_img'),'Full')[0];?>" alt="">
            </div>
            <div class="col-lg-9 col-md-9 col-sm-12 col-12 ">

                <div class="staff-name"><?php echo get_sub_field('teammate_name');?>
                </div>
                <div class="mt-4"><?php echo get_sub_field('teammate_intro');?>
                </div>
            </div>
        </div>
        <?php
        
    }
}
?>


    </div>

</div>

<div class="contact-us-div pt-5 pb-5" id="contact-us">

    <div class="container">
        <div class="big-title">CONTACT US</div>
        <!-- $('.result-txt-div').html('您的申請已發送，我們會盡快再聯絡您，謝謝。'); -->

        <div class="row mt-5 justify-content-center contact-us-form-div">
            <div class="col-lg-5 col-md-5 col-sm-12 col-12  mb-4">
                <label for="full-name">Full Name</label>
                <input id="full-name" type="text" class="form-control" placeholder="Enter your full name here">
                <div class="form-error full-name-error text-danger mt-2">Please enter your full name.</div>
            </div>
            <div class="col-lg-5 col-md-5 col-sm-12 col-12  mb-4">

                <label for="location">Location</label>
                <input id="location" type="text" class="form-control" placeholder="Enter your location here">
                <div class="form-error location-error text-danger mt-2">Please enter your location.</div>

            </div>
            <div class="col-lg-5 col-md-5 col-sm-12 col-12  mb-4">
                <label for="email-address">Email Address</label>
                <input id="email-address" type="text" class="form-control" placeholder="Enter your email address here">
                <div class="form-error email-error text-danger mt-2">The email address input format is not correct.
                </div>

            </div>
            <div class="col-lg-5 col-md-5 col-sm-12 col-12  mb-4">


                <label for="company">Company</label>
                <input id="company" type="text" class="form-control" placeholder="Enter your companys name here">
                <div class="form-error company-error text-danger mt-2">Please enter your company name.</div>

            </div>

            <div class="col-lg-5 col-md-5 col-sm-12 col-12  mb-4">
                <label for="phone-number">Phone Number</label>
                <input id="phone-number" type="text" class="form-control" placeholder="Enter your phone number here">
                <div class="form-error phone-number-error text-danger mt-2">The phone number input is not correct.</div>



            </div>

            <div class="col-lg-5 col-md-5 col-sm-12 col-12  mb-4">
                <label for="industry">Industry</label>
                <input id="industry" type="text" class="form-control" placeholder="Enter your companys industry here">
                <div class="form-error industry-error text-danger mt-2">Please enter your companys industry.</div>

            </div>


            <div class="col-12 text-center mt-4">
                <a href="javascript:void(0);" class="request-info-btn">REQUEST INFO</a>
            </div>
        </div>

        <div class="result-txt-div mt-5"></div>


    </div>
</div>
<script type="text/javascript">
function validateEmail(email) {
    var re = /\S+@\S+\.\S+/;
    return re.test(email);
}

$(function() {

    $('.form-error').fadeOut(0);

    $('.request-info-btn').click(function(e) {
        $('.form-error').fadeOut(0);

        e.preventDefault(0);

        var full_name = $('#full-name').val();
        var location = $('#location').val();
        var email_address = $('#email-address').val();
        var company = $('#company').val();
        var phone_number = $('#phone-number').val();
        var industry = $('#industry').val();
        var valid = true;


        if (!full_name) {
            $('.full-name-error').fadeIn(0);
            valid = false;
        }
        if (!location) {
            $('.location-error').fadeIn(0);
            valid = false;
        }
        if (!validateEmail(email_address)) {
            $('.email-error').fadeIn(0);
            valid = false;
        }
        if (!company) {
            $('.company-error').fadeIn(0);
            valid = false;
        }

        if (!phone_number) {
            $('.phone-number-error').fadeIn(0);
            valid = false;
        }

        if (!industry) {
            $('.industry-error').fadeIn(0);
            valid = false;
        }


        if (valid) {


            $.ajax({
                type: "POST",
                url: 'https://lfrhk.com/wp-json/api/contact-us',
                data: {
                    full_name: full_name,
                    location: location,
                    email: email_address,
                    company: company,
                    phone_number: phone_number,
                    industry: industry,
                    // ip: ip
                },
                dataType: "json",
            }).done(function(response) {

                if (response.status) {

                    $('.contact-us-form-div').fadeOut(0);
                    $('.result-txt-div').html('您的申請已發送，我們會盡快再聯絡您，謝謝。');

                }

            }).fail(function(Response) {});



        }


    })


})
</script>

<?php

get_footer();