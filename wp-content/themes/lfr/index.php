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

    <div class="banner-text din">LFR Hong Kong Limited is an Executive Search Firm headquartered in Hong Kong, <br>
        specialising in Financial Services, with a geographic focus on Asia Pacific. </div>
    <img class="w-100" src="http://64.225.99.121/wp-content/uploads/2021/09/Asset-2@2x-50-scaled.jpg" alt="">
</div>

<div class="container  pt-5 pb-5" id="services">

    <div class="big-title mb-4">SERVICES</div>

    <div class="row justify-content-center">
        <div class="service-table-wrapper col-lg-6 col-md-12 col-sm-12 col-12  mb-4">
            <table class="service-table ">
                <tr>
                    <td class="icon-td p-3">
                        <img class="w-75" src="http://64.225.99.121/wp-content/uploads/2021/09/Asset-3@2x.png" alt="">
                        <div class="service-name">Executive Search</div>

                    </td>
                    <td class="content-td">Identifying and closing on the most qualified talent
                        based
                        upon
                        an
                        agreed ideal
                        candidate specification</td>
                </tr>
            </table>
        </div>


        <div class="service-table-wrapper col-lg-6 col-md-12 col-sm-12 col-12  mb-4">
            <table class="service-table ">
                <tr>
                    <td class="icon-td p-3">
                        <img class="w-75" src="http://64.225.99.121/wp-content/uploads/2021/09/Asset-4@2x.png" alt="">
                        <div class="service-name">Mapping</div>

                    </td>
                    <td class="content-td">Comprehensive and accurate analysis of the industry professionals in a
                        particular product or region based on client parameters
                    </td>
                </tr>
            </table>
        </div>
        <div class="service-table-wrapper col-lg-6 col-md-12 col-sm-12 col-12  mb-4">
            <table class="service-table ">
                <tr>
                    <td class="icon-td p-3">
                        <img class="w-75" src="http://64.225.99.121/wp-content/uploads/2021/09/Asset-5@2x.png" alt="">
                        <div class="service-name">Benchmarking
                        </div>

                    </td>
                    <td class="content-td">Advising on appropriate compensation levels for the purposes of attracting
                        talent, including annual bonus awards, international relocation and retention incentives

                    </td>
                </tr>
            </table>
        </div>
        <div class="service-table-wrapper col-lg-6 col-md-12 col-sm-12 col-12  mb-4">
            <table class="service-table ">
                <tr>
                    <td class="icon-td p-3">
                        <img class="w-75" src="http://64.225.99.121/wp-content/uploads/2021/09/Asset-6@2x.png" alt="">
                        <div class="service-name">Competitor Analysis

                        </div>

                    </td>
                    <td class="content-td">Visibility on resourcing and headcount levels of peer businesses or products
                        including their respective strategies, market share and performance

                    </td>
                </tr>
            </table>
        </div>

    </div>

    <!-- 
    <div class="row justify-content-center">
        <div class="col-lg-6 col-md-12 col-sm-12 col-12  mb-4">

            <div class="service-div">
                <div class="row align-items-center service-content-row g-0">
                    <div class="col-5 icon-col p-3"><img class="w-75"
                            src="http://64.225.99.121/wp-content/uploads/2021/09/Asset-3@2x.png" alt="">
                        <div class="service-name">Executive Search</div>

                    </div>
                    <div class="col-7 service-content-txt px-4">Identifying and closing on the most qualified talent
                        based
                        upon
                        an
                        agreed ideal
                        candidate specification
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-6 col-md-12 col-sm-12 col-12  mb-4">

            <div class="service-div">
                <div class="row align-items-center service-content-row g-0">
                    <div class="col-5 icon-col p-3"><img class="w-75"
                            src="http://64.225.99.121/wp-content/uploads/2021/09/Asset-4@2x.png" alt="">
                        <div class="service-name">Mapping</div>

                    </div>
                    <div class="col-7 service-content-txt px-4">
                        Comprehensive and accurate analysis of the industry professionals in a particular product or
                        region based on client parameters
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-6 col-md-12 col-sm-12 col-12  mb-4">

            <div class="service-div">
                <div class="row align-items-center service-content-row g-0">
                    <div class="col-5 icon-col p-3"><img class="w-75"
                            src="http://64.225.99.121/wp-content/uploads/2021/09/Asset-5@2x.png" alt="">
                        <div class="service-name">Benchmarking</div>

                    </div>
                    <div class="col-7 service-content-txt px-4">
                        Advising on appropriate compensation levels for the purposes of attracting talent, including
                        annual bonus awards, international relocation and retention incentives
                    </div>
                </div>
            </div>
        </div>


        <div class="col-lg-6 col-md-12 col-sm-12 col-12  mb-4">

            <div class="service-div">
                <div class="row align-items-center service-content-row g-0">
                    <div class="col-5 icon-col p-3"><img class="w-75"
                            src="http://64.225.99.121/wp-content/uploads/2021/09/Asset-6@2x.png" alt="">
                        <div class="service-name">Competitor Analysis</div>

                    </div>
                    <div class="col-7 service-content-txt px-4">
                        Visibility on resourcing and headcount levels of peer businesses or products including their
                        respective strategies, market share and performance
                    </div>
                </div>
            </div>
        </div>



    </div> -->
</div>

<div class="position-relative blue-bg pt-5 pb-5 mt-5" id="client-process">


    <div class="big-title  text-center">CLIENT PROCESS</div>

    <div class="row justify-content-center   mt-4 g-0">
        <div class="col-lg-6 col-md-11 col-sm-11 col-11 ">Our ability to deliver the best qualified candidates is driven
            by our experience and
            creativity combined
            with
            meticulous preparation before we begin each mandate. <br> <br>

            The foundations of a successful search are prepared well before we begin an assignment. We constantly
            develop
            our understanding of a client's business through regular discussions, meetings and our own ongoing research.
            When we begin an assignment, we will already have an appreciation of key issues such as strategy, market
            positioning, client culture, areas of competitive strength and opportunities for profitable growth we also
            asses??? threats from fundamental shifts in the market place, and we always work to a consistent execution
            process.<br><br>

            At the core of our search process is a fully integrated database with the details of over 100,000 key and
            relevant professionals.<br>
            In addition, for each mandate we also utilise a number of other candidate sources including real-time ???on
            the
            ground' discussions and intelligence gathering.
        </div>
    </div>
    <!-- <img src="http://64.225.99.121/wp-content/uploads/2021/09/Asset-10@2x-50-scaled.jpg" alt=""> -->
</div>


<div class="pt-5 " id="expertise">

    <div class="big-title">EXPERTISE</div>


    <div class="mt-4">
        <div class="row justify-content-center g-0">
            <div class="col-lg-6 col-md-11 col-sm-11 col-11 ">
                Our expertise spans the key revenue generating functions in the Investment Banks and Private Banks
                and Asset
                Management companies for both the traditional and hedge fund strategies, plus other asset classes such
                as
                Private Equity and Real Estate. <br> <br>

                A detailed list is summarised as follows.
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

                <div class="staff-name">Roger Leader ??? Director
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
                    search assignment for our clients??? mandates. She also builds industry relationship in order to gain
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

                <div class="staff-name">Zen Fong ??? Crypto Currency and Blockchain Consultant
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