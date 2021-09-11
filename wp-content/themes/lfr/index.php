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


<div class="container">


    <div class="top-div mt-4 mb-4">


        <div class="row align-items-center">

            <div class="col-4">

                <a class="logo-a" href="#"><img src="http://64.225.99.121/wp-content/uploads/2021/09/Asset-1@2x.png"
                        alt=""></a>
            </div>

            <div class="col-8 text-end">
                <ul class="top-menu-ul">
                    <?php
                $main_menu = wp_get_menu_array('main menu');
foreach ($main_menu as $menu_item) {
    // echo 1;

$url = $menu_item['url'];
$title = $menu_item['title'];
$class = $menu_item['class'];

$temp_arr=explode(get_site_url(),$url);
$slug=str_replace('/en/','',$temp_arr[1]);
$slug=str_replace('/cn/','',$slug);
$slug=str_replace('/','',$slug);


if(count($menu_item['children']))
{

echo '<li><a class="level-1 parent '.$class.'" href="'.$url.'">'.$title.'</a>';


echo '<ul class="mobile-menu-submenu">';
?>

                    <?php

foreach ($menu_item['children'] as $sub_menu_item) 
{
$sub_url = $sub_menu_item['url'];
$sub_title = $sub_menu_item['title'];

$sub_temp_arr=explode(get_site_url(),$sub_url);
$sub_slug=str_replace('/en/','',$sub_temp_arr[1]);
$sub_slug=str_replace('/cn/','',$sub_slug);
$sub_slug=str_replace('/','',$sub_slug);
echo'<li><a class="'.$sub_slug.'" href="'.$sub_url.'">'.$sub_title.'</a></li>';
}
echo '</ul>';

}
else
{
echo '<li><a class="level-1 '.$slug.' '.$class.'" href="'.$url.'">'.$title.'</a>';

}
echo'</li>';


}



?>







                    <?php

wp_reset_postdata(); 
?>


                </ul>

                </ul>

            </div>

        </div>
    </div>

</div>

<div class="position-relative">

    <div class="banner-text">LFR Hong Kong Limited is an Executive Search Firm headquartered in Hong Kong, <br>
        specialising in Financial Services, with a geographic focus on Asia Pacific. </div>
    <img class="w-100" src="http://64.225.99.121/wp-content/uploads/2021/09/Asset-2@2x-50-scaled.jpg" alt="">
</div>

<div class="container">

    <div class="big-title mt-5 mb-5">SERVICES</div>

    <div class="row justify-content-center">
        <div class="col-5 mb-4">

            <div class="service-div">
                <div class="row align-items-center service-content-row g-0">
                    <div class="col-5 icon-col p-4"><img class="w-100"
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

        <div class="col-5 mb-4">

            <div class="service-div">
                <div class="row align-items-center service-content-row g-0">
                    <div class="col-5 icon-col p-4"><img class="w-100"
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

        <div class="col-5 mb-4">

            <div class="service-div">
                <div class="row align-items-center service-content-row g-0">
                    <div class="col-5 icon-col p-4"><img class="w-100"
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


        <div class="col-5 mb-4 ">

            <div class="service-div">
                <div class="row align-items-center service-content-row g-0">
                    <div class="col-5 icon-col p-4"><img class="w-100"
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



    </div>
</div>

<div class="position-relative blue-bg pt-5 pb-5 mt-5">


    <div class="big-title  text-center">CLIENT PROCESS</div>

    <div class="row justify-content-center   mt-4 g-0">
        <div class="col-6">Our ability to deliver the best qualified candidates is driven by our experience and
            creativity combined
            with
            meticulous preparation before we begin each mandate. <br> <br>

            The foundations of a successful search are prepared well before we begin an assignment. We constantly
            develop
            our understanding of a client's business through regular discussions, meetings and our own ongoing research.
            When we begin an assignment, we will already have an appreciation of key issues such as strategy, market
            positioning, client culture, areas of competitive strength and opportunities for profitable growth we also
            asses’ threats from fundamental shifts in the market place, and we always work to a consistent execution
            process.<br><br>

            At the core of our search process is a fully integrated database with the details of over 100,000 key and
            relevant professionals.<br>
            In addition, for each mandate we also utilise a number of other candidate sources including real-time ‘on
            the
            ground' discussions and intelligence gathering.
        </div>
    </div>
    <!-- <img src="http://64.225.99.121/wp-content/uploads/2021/09/Asset-10@2x-50-scaled.jpg" alt=""> -->
</div>


<div class="mt-5">

    <div class="big-title">EXPERTISE</div>


    <div class="mt-4">
        <div class="row justify-content-center g-0">
            <div class="col-6">
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

<div class="mt-5 container">

    <div class="row  expertise-row mb-4 gx-0">

        <div class="col-7">
            <img class="w-100" src="http://64.225.99.121/wp-content/uploads/2021/09/Asset-3@2x-50.jpg" alt="">
        </div>
        <div class=" col-5 g-0 ps-4">

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
    <div class="row  expertise-row mb-4 gx-0">

        <div class="col-5 g-0 ps-4">

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

        <div class="col-7">
            <img class="w-100" src="http://64.225.99.121/wp-content/uploads/2021/09/Asset-4@2x-50.jpg" alt="">
        </div>

    </div>

    <div class="row  expertise-row mb-4 gx-0">

        <div class="col-7">
            <img class="w-100" src="http://64.225.99.121/wp-content/uploads/2021/09/Asset-5@2x-50.jpg" alt="">
        </div>
        <div class=" col-5 g-0 ps-4">

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

    <div class="row  expertise-row mb-4 gx-0">

        <div class="col-5 g-0 ps-4">





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

        <div class="col-7">
            <img class="w-100" src="http://64.225.99.121/wp-content/uploads/2021/09/Asset-6@2x-50.jpg" alt="">
        </div>

    </div>


</div>

<div class="team-div pt-5">


    <div class="big-title">THE TEAM</div>

    <div class="container inner-container">
        <div class="row staff-row mb-5">

            <div class="col-3"><img class="w-100"
                    src="http://64.225.99.121/wp-content/uploads/2021/09/Asset-7@2x-50.jpg" alt="">
            </div>
            <div class="col-9">

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

            <div class="col-3"><img class="w-100"
                    src="http://64.225.99.121/wp-content/uploads/2021/09/Asset-8@2x-50.jpg" alt="">
            </div>
            <div class="col-9">

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

            <div class="col-3"><img class="w-100"
                    src="http://64.225.99.121/wp-content/uploads/2021/09/Asset-7@2x-50.jpg" alt="">
            </div>
            <div class="col-9">

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

    </div>

</div>
<?php

get_footer();