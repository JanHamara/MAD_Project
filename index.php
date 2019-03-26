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
                an <a class="link-main" href="https://medium.com/personal-finance-series-by-richard-reis/how-to-become-a-millionaire-19b1421a50a1" target="_blank">
                    article</a> discussing <strong>how one could realistically become a millionaire</strong>. It was talking about
                some of the most important principles for achieving this goal, among which three stood out in my view.
                These were talking about <strong>living below your means</strong>,
                <strong>thinking long term</strong> and <strong>having more than one source of income</strong>.
                </p>

                <p>
                It really got me thinking about conditions that accompany each person on their way to the first million
                and why only so few reach this goal. After a bit more of browsing around, I have found an <a class="link-main" href="https://www.inc.com/business-insider/36-million-millionaires-in-the-world-hold-46-percent-wealth-credit-suisse-global-wealth-report-2017.html" target="_blank">
                    online report</a> from Credit Suisse that was showing how there were <strong>2.3 million new millionaires in the world in 2016</strong>,
                putting the total at <strong>36 million</strong> millionaires in the world (2016)<a class="mad-ref-link" href="#mad-ref-1"><sup>[1]</sup></a>.
                That makes up less than <strong>1%</strong> of the world's population, however,
                this one percent owns the same amount of wealth as <strong>46% of the world</strong>.
                </p>

<!--                <p>-->
<!--                    <div id="mad-chart1">-->
<!--                        <div class="row">-->
<!--                            <div class="col-lg-6">-->
<!--                                <canvas id="mad-chart-1" width="200" height="200"></canvas>-->
<!--                            </div>-->
<!--                            <div class="col-lg-6">-->
<!---->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </p>-->

                <p>
                Despite the widely discussed fact that <a class="link-main" href="http://www.bbc.com/future/story/20130326-why-money-cant-buy-you-happiness" target="_blank">
                    money cannot buy you happiness</a>, everybody would surely like to be a part of this one percent
                and become a millionaire in their lifetime. And that got me thinking about a question...
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

            <h3 class="mad-section-header">
                <span class="mad-section-header-numbering">01</span> Preparation
            </h3>

            <div id="mad-preparation-content">

                <p>
                    There is an uncountable number of factors that can influence a journey to a point,
                    when a person can be defined as a <strong>'milionaire'</strong>. Therefore, there are several standards
                    and definitions that are needed to be explained first - to show how this research presents
                    gathered results in order to answer the set question.
                </p>

                <ol id="mad-preparation-standards">

                        <li>
                            <h4><i class="fa fa-question-circle-o" aria-hidden="true"></i> Who is a millionaire</h4>

                            <p>
                                <em>Being a millionaire</em> doesn't have to mean <em>being rich</em>
                                in certain countries in the world.
                            </p>
                            <p>
                                While millionaire in <strong>France</strong> 🇫🇷(net worth bigger than <strong>1 000 000 €</strong>) is certainly considered worldwide as an extremely wealthy individual,
                                if we take for second example a person in <strong>Indonesia</strong> 🇮🇩 - their <strong>1 000 000 Rp</strong>
                                (Indonesian Rupiah) is barely worth <strong>62€</strong>.
                            </p>
                            <p>
                                This means that the actual wealth of the millionaire in Indonesia would be approximately
                                <strong>16 thousand times smaller</strong> than that of the millionaire in France.
                            </p>
                            <p>
                                Therefore in order to avoid confusion, I have decided to set a <strong>base currency</strong> for the project,
                                to convert all of the other world currencies into - with the intention to set a <strong>uniform measure of wealth</strong>
                                that would be most familiar to the majority of the readers.

                                Thus for purposes of this project..
                            </p>
                            <p>
                                <strong class="red-highlight">Millionaire</strong> = an individual whose <strong>net worth</strong> is bigger than <strong>1 000 000$ (USD)</strong>
                            </p>
                        </li>

                        <li>
                            <h4><i class="fa fa-question-circle-o" aria-hidden="true"></i> What data to use</h4>

                            <p>
                                The goal of this project is to analyze time, that it would take in each country to become a millionaire,
                                while living on average terms and earning an average salary. Therefore it was needed to collect relevant data
                                on <strong>average salary</strong> and <strong>average living cost</strong> per each country,
                                that would represent a true value of income, after taking into account all taxes and other required payments in each country.
                            </p>
                            <p>
                                It was, therefore, again necessary to set standards for collecting these values,
                                in order to get meaningful results. Thus following definitions...
                            </p>
                            <p>
                                <strong class="red-highlight">Average Salary</strong> = average <strong>netto</strong> monthly wage<br/>
                                <em class="sub-explanation">(accounting for all taxes, insurance schemes and other compulsory monthly payments per respective country)</em>
                            </p>

                            <p>
                                <strong class="red-highlight">Average Living Cost</strong> = average <strong>minimum</strong> monthly expenses<br/>
                                <em class="sub-explanation">(based on an individual profile explained in the next section)</em>
                            </p>
                        </li>

                        <li>
                            <h4><i class="fa fa-question-circle-o" aria-hidden="true"></i> Individual Profile / Calculating Cost of Living</h4>

                            <p>Calculating an average cost of living in a country can be a very complicated and lengthy process,
                                considering how many separate factors can an individual spend money on throughout one month.
                                Luckily, there are certain processes in place that are suited for computing exactly this value
                                and after consulting few of these techniques, as well as staying relevant to resolution of <strong>living below your means</strong>,
                                I have defined a <strong>base profile</strong> of an individual and his necessary spending throughout one month,
                                while keeping a reasonably <strong>average standard of living</strong>.
                            </p>
                            <p>
                                Our base individual for this project is a <strong>single person</strong> with <strong>no kids</strong>, <strong>no debts</strong>
                                and <strong>no special expenses</strong> (e.g. taking care of parents, medicine for illness),
                                who is living in an <strong>average single bedroom apartment</strong> in <strong>non-expensive area</strong>
                                and <strong>commuting 5 days a week</strong> to a regular <strong>9-5 job</strong>.
                            </p>
                            <p>
                                These are the expenses that will be counted in the <strong>total sum spent each month (per each country)</strong>...
                            </p>
                            <p>
                                <strong class="red-highlight">Rent</strong> = average monthly rent for a <strong>1 bedroom apartment in non-expensive area</strong>
                            </p>
                            <p>
                                <strong class="red-highlight">Utilities</strong> = average monthly bill for <strong>electricity, heating, water, garbage collection</strong>
                            </p>
                            <p>
                                <strong class="red-highlight">Internet</strong> = average monthly charge for <strong>unlimited internet connection</strong> (required for work)
                            </p>
                            <p>
                                <strong class="red-highlight">Transportation</strong> = average price for a <strong>regular monthly pass</strong> for transportation
                            </p>
                            <p>
                                <strong class="red-highlight">Food & Drink</strong> = average monthly expense for <strong>food & drink groceries</strong>
                            </p>
                        </li>
                </ol>

                <p>
                    Now that we have specified all necessary conditions for managing the data used in this project,
                    it's time to use this information and present some of the most interesting findings.
                </p>
            </div>

        </div>
    </section>

    <!--                        -->
    <!--    03 Average Income   -->
    <!--                        -->

    <section id="mad-income">
        <div class="container-fluid">

            <h3 class="mad-section-header">
                <span class="mad-section-header-numbering">02</span> Average Income
            </h3>

            <div id="mad-income-content">
                <p>
                    Yo, wassup! This is just some placeholder text to show how it would display on the site
                    while you try to create the list of top 10 countries with highest and lowest income.
                </p>
            </div>

            <div id="mad-income-stats">
                <div class="row">
                    <div class="col-lg-6">
                        <h4>Top 10 countries with highest average wage (USD)</h4>

                        <ol class="mad-income-stats-list">

                            <!--    We use PHP and MySQLi in order to connect to the database    -->
                            <?php
                            $servername = "localhost";
                            $username = "root";
                            $password = "#Excelsior1808";
                            $dbname = "Countries";

                            // We create connection with the database, using the login credentials
                            $conn = new mysqli($servername, $username, $password, $dbname);

                            // We select three columns from the database that are required for our table [Country, CountryCode, AverageIncome]
                            // We order the retrieved table by Average Income with DESCENDING option as we are looking for Top 10 Highest Salaries
                            // Finally we limit the number of results to 10, as we will be only showing 10 results in the table
                            $sql = "SELECT Country, CountryCode, AverageIncome FROM Countries ORDER BY AverageIncome DESC limit 10";
                            // We run the query on the database table
                            $result = $conn->query($sql);

                            // We test if the query retrieved any rows of information
                            if ($result->num_rows > 0) {

                                //
                                // If there is data, we follow by outputting it into page - formatted into a list
                                //

                                // We use variable count to index list items with a number
                                $count = 1;
                                while($row = $result->fetch_assoc()) {
                                    echo "<li>";
                                    // Here we test for $count variable because after it reaches number 10,
                                    // we don't want to output "010" but "10" for the last item
                                    if ($count < 10) {
                                        echo "<span class=\"mad-income-stats-no\">" . "0" . $count . "</span>";
                                    } else {
                                        echo "<span class=\"mad-income-stats-no-last\">" . $count . "</span>";
                                    }
                                    // After the iteration, we increment the $count variable to get another number
                                    $count++;
                                    // Here we use the CountryCode to select the correct flag from our directory
                                    // (This is the reason why we named flags of countries by their respective country code)
                                    echo "<img src=\"./assets/flags/" . $row["CountryCode"] . ".png\" class=\"mad-income-stats-img img-responsive\" alt=\"" . $row["Country"] . "-flag\"/>";
                                    // We output the Country name
                                    echo "<span class=\"mad-income-stats-country\">" .$row["Country"] . "</span>";
                                    // And finally we output the AverageIncome value
                                    echo "<span class=\"mad-income-stats-value\">" . $row["AverageIncome"] . "$" . "</span>";
                                    echo "</li>";
                                }
                            } else {
                                echo "0 results";
                            }
                            ?>
                        </ol>

                        <?php
                        $conn->close();
                        ?>
                    </div>
                    <div class="col-lg-6">
                        <h4>Top 10 countries with lowest average wage (USD)</h4>

                        <ol class="mad-income-stats-list">
                            <li>
                                <span class="mad-income-stats-no">01</span>
                                <img src="./assets/flags/cd.png" class="mad-income-stats-img img-responsive" alt="Liechtenstein-flag"/>
                                <span class="mad-income-stats-country">DR Congo</span>
                                <span class="mad-income-stats-value">32.85$</span>
                            </li>
                            <li>
                                <span class="mad-income-stats-no">02</span>
                                <img src="./assets/flags/gw.png" class="mad-income-stats-img img-responsive" alt="Liechtenstein-flag"/>
                                <span class="mad-income-stats-country">Guinea-Bissau</span>
                                <span class="mad-income-stats-value">36.95$</span>
                            </li>
                            <li>
                                <span class="mad-income-stats-no">03</span>
                                <img src="./assets/flags/mg.png" class="mad-income-stats-img img-responsive" alt="Liechtenstein-flag"/>
                                <span class="mad-income-stats-country">Madagascar</span>
                                <span class="mad-income-stats-value">44.10$</span>
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--                        -->
    <!--      XX References     -->
    <!--                        -->

    <section id="mad-references">
        <div class="container-fluid">

            <h3 class="mad-section-header">
                <span class="mad-section-header-numbering">07</span> References
            </h3>

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