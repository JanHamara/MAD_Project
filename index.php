<!DOCTYPE html>
<html lang="en-GB">
<head>
    <title>WebDev Template</title>

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!--    Metadata    -->
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="og:author" content="Jan Hamara"/>
    <meta property="og:title" content="WebDev Template" />
    <meta property="og:description" content="WebDev Tempate" />
    <meta property="og:url" content="WebDev Tempate" />
    <meta property="og:site_name" content="WebDev Tempate" />
    <meta name="og:keywords" content="Web, Dev, Template"/>
    <meta http-equiv="Content-Type" content="text/html"/>

    <!-- Fix for automatic detection of numbers on Apple devices -->
    <meta name="format-detection" content="telephone=no"/>

    <link rel="shortcut icon" type="image/x-icon" href="./favicon.ico">

    <!--     Fonts      -->
    <link href="https://fonts.googleapis.com/css?family=Germania+One|Montserrat|Raleway" rel="stylesheet">

    <!--    CDN Bootstrap   -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!--    Font Awesome    -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <!--    AOS    -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <style>
        html, body {
            /* I am setting background colour inline in HTML index file, because otherwise we would get approx. 1 second of white page before CSS stylesheets load */
            background: #f7f2ea;
        }
    </style>
</head>

<!-- ----------------------------------------------------------------------------------------------------------- -->

<!--                                    -->
<!--            Main Content            -->
<!--                                    -->

<body>
<!--Test availability of Bootstrap CSS CDN-->
<div id="bootstrapCssTest" class="hidden"></div>

<!--    We're going to use this pre-loader to show a loading screen while all images and data pre-load    -->
<div id="pre-loader" style="opacity: 0; transform: scale(0);">
    <div id="pre-loader-spinner"><i class="fa fa-spinner fa-spin" aria-hidden="true"></i></div>
</div>

<!--    Here we need to set CSS Display property inline, because we want to hide this content BEFORE our stylesheets load   -->
<main id="mad-content" style="display: none">

    <!--                  -->
    <!--    01 Header     -->
    <!--                  -->

    <section id="mad-header">
        <div class="container-fluid">
            <!--    Header Picture     -->
            <img data-aos="zoom-in" data-aos-duration="1000" src="./assets/header-pic-placeholder.png" id="mad-header-image" class="img-responsive" alt="world-map-header-picture">

            <!--    Main Heading   -->
            <h1 data-aos="fade-up" data-aos-duration="1000" id="mad-header-heading">
                Which country of the world is the best for becoming a millionaire?
            </h1>

            <!--    Main Sub-Heading   -->
            <h2 data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300" data-aos-offset="-1000" id="mad-header-sub-heading">
                Average person's guide on how fast you can become a millionaire on an average income
            </h2>

            <!--    Author Tag      -->
            <span data-aos="fade-up" data-aos-duration="1000" data-aos-delay="600" data-aos-offset="-1000" id="mad-header-author-tag">Made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://www.facebook.com/jancihamaramain" target="_blank">Jan Hamara</a></span>
        </div>
    </section>

    <!--                        -->
    <!--    02 Introduction     -->
    <!--                        -->

    <section id="mad-introduction">
        <div class="container-fluid">
            <div id="mad-introduction-content" class="aos-anchor-1">
                <p data-aos="fade-up" data-aos-offset="-200" data-aos-anchor=".aos-anchor-1">
                One Sunday evening, when I was browsing <strong>Medium</strong> (fantastic website
                that curates some of the best articles on the internet on various topics), I came across
                an <a class="link-main" href="https://medium.com/personal-finance-series-by-richard-reis/how-to-become-a-millionaire-19b1421a50a1" target="_blank" alt="medium-article-link">
                    article</a> discussing <strong>how could one realistically become a millionaire</strong>. It was talking about
                some of the most important principles for achieving this goal, among which three stood out in my view.
                These were talking about <strong>living below your means</strong>,
                <strong>thinking long term</strong> and <strong>having more than one source of income</strong>.
                </p>

                <p>
                It really got me thinking about conditions that accompany each person on their way to the first million
                and why only so few reach this goal. I kept on browsing and I found an <a class="link-main" href="https://www.inc.com/business-insider/36-million-millionaires-in-the-world-hold-46-percent-wealth-credit-suisse-global-wealth-report-2017.html" target="_blank">
                    online report</a> from Credit Suisse showing that there were <strong>2.3 million new millionaires in the world in 2016</strong>,
                putting the total at <strong>36 million</strong> millionaires in the world (2016)<a class="mad-ref-link" href="#mad-ref-1"><sup>[1]</sup></a>.
                That still makes up less than <strong>1%</strong> of the world's population, however,
                this one percent owns the same amount of wealth as <strong>46% of the world</strong>.
                </p>

                <p>
                Despite the widely discussed fact that <a class="link-main" href="http://www.bbc.com/future/story/20130326-why-money-cant-buy-you-happiness" target="_blank">
                    money cannot buy you happiness</a>, everybody would surely like to be a part of this one percent
                and become a millionaire in their lifetime. And that got me thinking about a question..
                </p>

                <p>
                Depending on the environment (country) that you're coming from, having an average lifestyle
                and by simple decision of lowering your expenses as much as possible while keeping an average standard of living -
                <strong>COULD YOU ACHIEVE IT IN A LIFETIME?</strong>
                </p>

                <p>I have decided to conduct research and gather enough data to be able to determine
                    <strong style="text-decoration: underline;">which countries wages and living conditions would allow a person to earn first million in fastest time
                        and on the other side, which country would be the worst choice.</strong>
                </p>
            </div>
        </div>
    </section>

    <!--                        -->
    <!--     03 Preparation     -->
    <!--                        -->

    <section id="mad-preparation">
        <div class="container-fluid">

            <h1><span class="h1-numbering">01</span> Preparation</h1>

            <div id="mad-preparation-content">
                <p>
                    There is an uncountable number of factors that can influence a journey to a point,
                    where person can be defined as a <strong>'milionaire'</strong>.
                </p>
                <p>
                    Therefore in order to sucessfully conduct this project, there were several standards and definitions that I needed to set, in order to collect useful
                    and relevant dataset that could provide meaningful results, necessary for answering the set question.
                </p>
                <p>
                    <ol>
                        <li>Define millionaire</li>
                        <li>What data I was going to collect: Average Income / Average Expenses</li>
                        <li>Wages (Way of Calculating Average Salary)</li>
                        <li>User Profile (Way of Calculating Average Expenses)</li>
                        <li>Return on Investment</li>
                    </ol>
                </p>
            </div>
        </div>
    </section>

    <!--                        -->
    <!--      XX References     -->
    <!--                        -->

    <section id="mad-references">
        <div class="container-fluid">

            <h1>References</h1>

            <ol id="mad-references-list">
                <li id="mad-ref-1">
                    1. Weller Chris, There Are 36 Million Millionaires in the World and They Own Nearly Half the Planet's Wealth [online]
                    <br/>
                    &nbsp;&nbsp;&nbsp;<a class="link-main" href="https://www.inc.com/business-insider/36-million-millionaires-in-the-world-hold-46-percent-wealth-credit-suisse-global-wealth-report-2017.html" target="_blank">Source</a>
                </li>
            </ol>
        </div>
    </section>
</main>

<div class="clearfix"></div>


<footer id="mad-footer"></footer>





<!--                                           -->
<!--            End of Main Content            -->
<!--                                           -->

<!-- ----------------------------------------------------------------------------------------------------------- -->

<!--     jQuery      -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script>window.jQuery || document.write('<script src="./node_modules/jquery/dist/jquery.min.js"><\/script>')</script>

<!--     Popper.js   -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

<!--    Bootstrap JS    -->
<!--    I test for availability of Bootstrap online via CDN, only in case, it is not available we load it locally -->
<!--    Local copy of Bootstrap is used only if CDN in not available, because via CDN Bootstrap loads faster -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script>if(typeof($.fn.modal) === 'undefined') {document.write('<script src="./src/vendor/bootstrap.min.js"><\/script>')}</script>

<!--       AOS       -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

<!--    Test Bootstrap CSS CDN    -->
<script type="text/javascript">
    if ($('#bootstrapCssTest').is(':visible') === true) {
        $('<link href="./src/vendor/bootstrap.min.css" rel="stylesheet" type="text/css" />').appendTo('head');
        $('<link href="./src/vendor/bootstrap-theme.min.css" rel="stylesheet" type="text/css" />').appendTo('head');
    }
</script>

<!--    All stylesheets and scripts are loaded via this Webpack bundle    -->
<script type="text/javascript" src="./dist/main.js?v=<?=time();?>"></script>

<script src="https://unpkg.com/aos@next/dist/aos.js"></script>

<script>
    AOS.init();
</script>

<script type="text/javascript">
    $( document ).ready(function() {
        setTimeout(function () {
            $("#pre-loader").hide(500);
            $("#mad-content").show(500);
        }, 0)
    });
</script>

</body>
</html>