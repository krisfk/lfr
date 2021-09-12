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
    // Loop through rows.
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

    <div class="row  expertise-row mt-4 gx-0">

        <div class="col-lg-7 col-md-12 col-sm-12 col-12 ">
            <img class="w-100" src="http://64.225.99.121/wp-content/uploads/2021/09/Asset-3@2x-50.jpg" alt="">
        </div>
        <div class=" col-lg-5 col-md-12 col-sm-12 col-12  g-0 ps-4 pb-5">

            <div class="expertise-title">Investment Banking</div>
            <ul>
                <li>Equities (Sales, Trading, Research, and Prime Broking)</li>
                <li>Equity Derivatives (Structuring, Trading and Sales)</li>
                <li>Fixed Income (Structuring, Trading, Sales and Research)</li>
                <li>Foreign Exchange (Sales, Trading and Research</li>
                <li>Investment Banking and M&A (ECM and DCM)</li>
                <li>Corporate Finance</li>
                <li>Private Equity</li>
            </ul>
        </div>
    </div>

    <div class="row  expertise-row mt-4 gx-0 mobile-reverse">

        <div class=" col-lg-5 col-md-12 col-sm-12 col-12  g-0 ps-4 pb-5">

            <div class="expertise-title">Asset Management
            </div>
            <ul>


                <li>Traditional Long Only</li>
                <li>Management (CEO, CIO, CFO COO CMO, CRO)</li>
                <li>Portfolio Managers</li>
                <li>Investment Analyst</li>
                <li>Dealing & Execution</li>
                <li>Sales and Marketing</li>
                <li>Operations and Settlements</li>
            </ul>
        </div>

        <div class="col-lg-7 col-md-12 col-sm-12 col-12 ">
            <img class="w-100" src="http://64.225.99.121/wp-content/uploads/2021/09/Asset-4@2x-50.jpg" alt="">
        </div>

    </div>

    <div class="row  expertise-row mt-4 gx-0">

        <div class="col-lg-7 col-md-12 col-sm-12 col-12 ">
            <img class="w-100" src="http://64.225.99.121/wp-content/uploads/2021/09/Asset-5@2x-50.jpg" alt="">
        </div>
        <div class=" col-lg-5 col-md-12 col-sm-12 col-12  g-0 ps-4 pb-5">

            <div class="expertise-title">Hedge Funds
            </div>
            <ul>

                <li>Management (CEO, CIO, CFO COO CMO, CRO)</li>
                <li>Portfolio Managers:</li>
                <li>Variety of strategies including: Long Short, Absolute Return,
                    Multi Strategy, Event Driven, Distressed Debt</li>
                <li>Dealing & Execution</li>
                <li>Sales and Marketing</li>
                <li>Operations and Settlements</li>

            </ul>
        </div>
    </div>

    <div class="row  expertise-row mt-4 gx-0 mobile-reverse">

        <div class=" col-lg-5 col-md-12 col-sm-12 col-12  g-0 ps-4 pb-5">





            <div class="expertise-title"> Private Banking
            </div>
            <ul>



                <li>Executive Management</li>
                <li>Relationship Managers</li>
                <li>Product Specialists</li>
                <li>Investment Councillors</li>
                <li>In House Portfolio Managers</li>
                <li>Business Development</li>
                <li>EAM Relationship Managers</li>

            </ul>
        </div>

        <div class="col-lg-7 col-md-12 col-sm-12 col-12 ">
            <img class="w-100" src="http://64.225.99.121/wp-content/uploads/2021/09/Asset-6@2x-50.jpg" alt="">
        </div>

    </div>


</div>

<div class="team-div pt-5 pb-5" id="the-team">


    <div class="big-title">THE TEAM</div>

    <div class="container inner-container mt-4">
        <div class="row staff-row mb-5">

            <div class="col-lg-3 col-md-3 col-sm-12 col-12 ">
                <img class="w-100" src="http://64.225.99.121/wp-content/uploads/2021/09/Asset-7@2x-50.jpg" alt="">
            </div>
            <div class="col-lg-9 col-md-9 col-sm-12 col-12 ">

                <div class="staff-name">Roger Leader – Director
                </div>
                <div class="mt-4">Roger is a Managing Director of LFR Hong Kong Limited, he has over 30 years of
                    experience in
                    Financial Services recruitment, with a successful track record recruiting for all levels of senior
                    management within investment and private banks, asset management, both long only and hedge funds,
                    private equity, insurance companies and other financial institutions.
                </div>
            </div>
        </div>
        <div class="row staff-row mb-5">

            <div class="col-lg-3 col-md-3 col-sm-12 col-12 ">
                <img class="w-100" src="http://64.225.99.121/wp-content/uploads/2021/09/Asset-8@2x-50.jpg" alt="">
            </div>
            <div class="col-lg-9 col-md-9 col-sm-12 col-12 ">

                <div class="staff-name">Michelle Ng - Consultant

                </div>
                <div class="mt-4">Michelle is a consultant of LFR Hong Kong Limited. She is responsible for undertaking
                    search assignment for our clients’ mandates. She also builds industry relationship in order to gain
                    a better understanding of clients' recruitment needs and requirements according to the industry,
                    work culture and environment.

                </div>
            </div>
        </div>
        <div class="row staff-row mb-5">

            <div class="col-lg-3 col-md-3 col-sm-12 col-12 ">
                <img class="w-100" src="http://64.225.99.121/wp-content/uploads/2021/09/Asset-9@2x-50.jpg" alt="">
            </div>
            <div class="col-lg-9 col-md-9 col-sm-12 col-12 ">

                <div class="staff-name">Zen Fong – Crypto Currency and Blockchain Consultant
                </div>
                <div class="mt-4">Zen currently acts as a Crypto Consultant for LFR Hong Kong Limited, he has a decade
                    of experience in cryptocurrency investment, research and also blockchain technology. Zen is
                    responsible for business development and talent acquisition.

                </div>
            </div>
        </div>
        <div class="row staff-row mb-5">

            <div class="col-lg-3 col-md-3 col-sm-12 col-12 ">
                <img class="w-100" src="http://64.225.99.121/wp-content/uploads/2021/09/Asset-10@2x-50-1.jpg" alt="">
            </div>
            <div class="col-lg-9 col-md-9 col-sm-12 col-12 ">

                <div class="staff-name">Ginny Tjiu - Researcher
                </div>
                <div class="mt-4">Ginny is a Researcher and responsible for conducting the initial screening process and
                    database management for specific mandates. She also provides administrative support to the
                    recruitment function and coordinates with the relevant consultant to source candidates who meet the
                    criteria in a particular search.

                </div>
            </div>
        </div>

    </div>

</div>

<div class="contact-us-div pt-5 pb-5" id="contact-us">

    <div class="container">
        <div class="big-title">CONTACT US</div>
        <div class="row mt-5 justify-content-center">
            <div class="col-lg-5 col-md-5 col-sm-12 col-12  mb-4">
                <label for="full-name">Full Name</label>
                <input id="full-name" type="text" class="form-control" placeholder="Enter your full name here">
            </div>
            <div class="col-lg-5 col-md-5 col-sm-12 col-12  mb-4">

                <label for="location">Location</label>
                <input id="location" type="text" class="form-control" placeholder="Enter your location here">
            </div>
            <div class="col-lg-5 col-md-5 col-sm-12 col-12  mb-4">
                <label for="email-address">Email Address</label>
                <input id="email-address" type="text" class="form-control" placeholder="Enter your email address here">
            </div>
            <div class="col-lg-5 col-md-5 col-sm-12 col-12  mb-4">


                <label for="company">Company</label>
                <input id="company" type="text" class="form-control" placeholder="Enter your companys name here">

            </div>

            <div class="col-lg-5 col-md-5 col-sm-12 col-12  mb-4">
                <label for="phone-number">Phone Number</label>
                <input id="phone-number" type="text" class="form-control" placeholder="Enter your phone number here">



            </div>

            <div class="col-lg-5 col-md-5 col-sm-12 col-12  mb-4">
                <label for="industry">Industry</label>
                <input id="industry" type="text" class="form-control" placeholder="Enter your companys industry here">
            </div>


            <div class="col-12 text-center mt-4">
                <a href="javascript:void(0);" class="request-info-btn">REQUEST INFO</a>
            </div>
        </div>
    </div>
</div>

<?php

get_footer();