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
    <!--      Header      -->
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
    <!--    00 Introduction     -->
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
    <!--     01 Preparation     -->
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
                                in certain countries of the world.
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
                                <strong class="red-highlight">Rent</strong> = average monthly rent for <strong>1 bedroom apartment in non-expensive area</strong>
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
    <!--    02 Average Income   -->
    <!--                        -->

    <section id="mad-income">
        <div class="container-fluid">

            <h3 class="mad-section-header">
                <span class="mad-section-header-numbering">02</span> Average Income
            </h3>

            <div class="mad-income-content">
                <p>
                    First step in calculating time required for becoming a millionaire in a particular country
                    is looking at their average income and, indeed, these statistics are already a great indicator regarding
                    which countries will be most likely to be the best for becoming a millionaire
                    and which, on the other side, would be absolutely unsuitable for such goal.
                </p>
                <p>
                    Looking at <a class="link-main" href="#top10-highest-wage">Top 10 countries with the highest average wage</a>, we can immediately notice
                    that <strong>8 of them are in Europe</strong>, demonstrating its strong overall economic dominance in the world.
                    The <strong>highest average wage worldwide</strong> is in <strong>Liechtenstein</strong>🇱🇮, a German-speaking microstate in central Europe,
                    that was once known once known as a billionaire tax haven, nowadays much well known for its prosperous,
                    highly industrialized free-enterprise economy.
                    Its neighbouring country <strong>Switzerland</strong>🇨🇭 has the second-highest average wage,
                    also famous for being one of the most developed countries in the world, in terms of nominal wealth per adult,
                    quality of life and economic competitiveness. <strong>Luxembourg</strong> 🇱🇺 has the third place
                    in close tie with <strong>Monaco</strong> 🇲🇨, another super-wealthy microstate.
                    The rest of European countries in Top 10 are (in respective order) <strong>Austria</strong> 🇦🇹, Scandinavian duo
                    of <strong>Denmark</strong> 🇩🇰 and <strong>Norway</strong> 🇳🇴 and finally <strong>Iceland</strong> 🇮🇸.
                </p>
                <p>
                    The only 2 non-European countries to make it into top 10 are <strong>Singapore</strong> 🇸🇬 on the 10th place - the Asian megalopolis and
                    an island city-state that is ranked very highly in many international rankings,
                    and is being associated with having <em>best investment potential</em>, being <em>world's smartest city</em> or
                    <em>the most technology-ready nation</em><a class="mad-ref-link" href="#mad-ref-2"><sup>[2]</sup></a>.
                    To much less surprise the other place with 9th highest salary goes to <strong>United States of America</strong> 🇺🇸,
                    a country with <strong>the world's largest economy by nominal GDP</strong>
                    <a class="mad-ref-link" href="#mad-ref-3"><sup>[3]</sup></a>, whose economic strength is hardly necessary to justify.


                </p>
            </div>

            <!--    Lists with Top 10 countries with highest / lowest wage    -->
            <div id="mad-income-stats">
                <div class="row">
                    <div class="col-lg-6">
                        <h4 id="top10-highest-wage">Top 10 countries with highest average wage <span>(US$ / month)</span></h4>

                        <ol class="mad-stats-list">

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

                            $conn->close();
                            ?>
                        </ol>
                    </div>
                    <div class="col-lg-6">
                        <h4 id="top10-lowest-wage">Top 10 countries with lowest average wage <span>(US$ / month)</span></h4>

                        <ol class="mad-stats-list">
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
                            $sql = "SELECT Country, CountryCode, AverageIncome FROM Countries ORDER BY AverageIncome ASC limit 10";
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

                            $conn->close();
                            ?>
                        </ol>
                    </div>
                </div>
            </div>

            <div class="mad-income-content">
                <p>
                    On the other side, the list of <a class="link-main" href="#top10-highest-wage">Top 10 countries with the lowest average wage</a>
                    is dominated by <strong>8 African countries</strong>. Considering the overall economic situation and infrastructure of Africa,
                    this is not very surprising fact. The <strong>lowest average wage in the world</strong> is earned in <strong>The Democratic Republic of Congo</strong> 🇨🇩 with only <strong>32.85$</strong> earned per month.
                    That is almost <strong>178 times less than the highest average wage</strong> of the world in Liechtenstein,
                    showing the staggering imbalance in the distribution of wealth in the world.
                </p>
                <p>
                    The DR Congo is closely followed by <strong>Guinea-Bissau</strong> 🇬🇼,
                    <strong>Madagascar</strong> 🇲🇬 and <strong>Ethiopia</strong> 🇪🇹
                    - all of them with average monthly income <strong>lower than 50 dollars</strong>.
                    Two non-African countries present in the lowest 10 are <strong>North Korea</strong> 🇰🇵,
                    led by the infamous Supreme Leader Kim Jong Un, and <strong>Venezuela</strong> 🇻🇪 -
                    South-American country going through a tough period of <strong>economic depression</strong>
                    that is currently dealing with <strong>extreme inflation</strong>, <strong>food shortages</strong> and <strong>electricity blackouts</strong>.<a class="mad-ref-link" href="#mad-ref-4"><sup>[4]</sup></a>
                </p>

                <iframe class="mad-content-video" width="560" height="315" src="https://www.youtube.com/embed/ytrS0SntUSQ" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>
    </section>

    <!--                          -->
    <!--    03 Average Expenses   -->
    <!--                          -->

    <section id="mad-expenses">
        <div class="container-fluid">

            <h3 class="mad-section-header">
                <span class="mad-section-header-numbering">03</span> Average Expenses
            </h3>

            <div class="mad-expenses-content">
                <p>
                    As a second factor in our project, we consider the <strong>average cost of living</strong> in each country,
                    which is a crucial element in creating saving plans and in pursuing the goal of earning <strong>net worth of million dollars</strong>.
                    While some countries may offer an extremely high average salary, they may also be extremely expensive to live in,
                    making it difficult to put some money into saving every month. Similar situation appears in poor countries -
                    while the cost of living may be extremely low, same applies for the average wage,
                    rendering the chance of having some money to spare nearly impossible.
                </p>
                <p>
                    However, there are exceptions when a country may offer high average income with a reasonably low living expenses,
                    as well as worst-scenario cases where high living cost meets with low income. While the latter won't be of much interest to us,
                    the former will be decisive in <strong>identifying the best country for becoming a millionaire</strong>.
                    After the first look on following tables, we can already start noticing some interesting statistics.
                </p>
                <p>
                    As much as 7 countries from the <strong>Top 10 countries with highest average wage</strong>
                    have also made it to the <a class="link-main" href="#top10-highest-expenses">Top 10 countries with highest cost of living</a>.
                    <strong>Switzerland</strong>🇨🇭 with the <strong>second highest average salary</strong> in the world
                    takes also <strong>the highest average cost of living in the world</strong>,
                    while <strong>Liechtenstein</strong>🇱🇮 moves down to 8th place in average cost of living. <strong>Monaco</strong> 🇲🇨
                    is the second most expensive place to live on average terms and <strong>Australia</strong> 🇦🇺 is third,
                    with significant drop of <strong>700$</strong> from the amount required per month, compared to Monaco.
                    Along with <strong>Bahamas</strong> 🇧🇸 on 4th place, <strong>Australia</strong> is very unlikely to be the country suitable for
                    quick and large savings. An interesting placement is <strong>Papua New Guinea</strong>🇵🇬
                    on 7th place with <strong>2216.34$ required per month</strong> for maintaining an average standard of living.

                </p>
            </div>

            <!--    Lists with Top 10 countries with highest / lowest expenses    -->
            <div id="mad-expenses-stats">
                <div class="row">
                    <div class="col-lg-6">
                        <h4 id="top10-highest-expenses">Top 10 countries with highest cost of living <span>(US$ / month)</span></h4>

                        <ol class="mad-stats-list">

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
                            $sql = "SELECT Country, CountryCode, AverageExpense FROM Countries ORDER BY AverageExpense DESC limit 10";
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
                                    echo "<span class=\"mad-income-stats-value\">" . $row["AverageExpense"] . "$" . "</span>";
                                    echo "</li>";
                                }
                            } else {
                                echo "0 results";
                            }
                            $conn->close();
                            ?>
                        </ol>
                    </div>
                    <div class="col-lg-6">
                        <h4 id="top10-lowest-expenses">Top 10 countries with lowest cost of living <span>(US$ / month)</span></h4>

                        <ol class="mad-stats-list">
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
                            $sql = "SELECT Country, CountryCode, AverageExpense FROM Countries ORDER BY AverageExpense ASC limit 10";
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
                                    if ($row["CountryCode"] == "np") {
                                        echo "<img src=\"./assets/flags/" . $row["CountryCode"] . ".png\" class=\"mad-income-stats-img img-nepal img-responsive\" alt=\"" . $row["Country"] . "-flag\"/>";
                                    } else {
                                        echo "<img src=\"./assets/flags/" . $row["CountryCode"] . ".png\" class=\"mad-income-stats-img img-responsive\" alt=\"" . $row["Country"] . "-flag\"/>";
                                    }
                                    // We output the Country name
                                    echo "<span class=\"mad-income-stats-country\">" .$row["Country"] . "</span>";
                                    // And finally we output the AverageIncome value
                                    echo "<span class=\"mad-income-stats-value\">" . $row["AverageExpense"] . "$" . "</span>";
                                    echo "</li>";
                                }
                            } else {
                                echo "0 results";
                            }

                            $conn->close();
                            ?>
                        </ol>
                    </div>
                </div>
            </div>

            <div class="mad-expenses-content">
                <p>
                    On the other table we find out that <strong>Nepal</strong> 🇳🇵 is the country with <strong>lowest cost of living
                        in the world</strong>, closely followed by second most populous country in the world - <strong>India</strong> 🇮🇳
                    and neighbouring <strong>Bhutan</strong> 🇧🇹.
                    On fourth place, there is <strong>Pakistan</strong> 🇵🇰 and fifth <strong>Egypt</strong> 🇪🇬, each of which
                    require <strong>less than 330 dollars per month</strong> to survive by normal means.
                </p>
                <p>
                    In fact, all of the <a class="link-main" href="#top10-highest-expenses">Top 10 countries with lowest cost of living</a>
                    require <strong>less than 400$ per month</strong> for average lifestyle. Surprisingly, only 2 African countries make it
                    to the top 10 with lowest cost of living, on 6th place <strong>Central African Republic</strong> 🇨🇫 and
                    <strong>South Sudan</strong> 🇸🇸 on 10th place. <strong>Albania</strong> 🇦🇱 is also quite interesting entry for
                    <strong>the cheapest country in Europe</strong>, while inflation-troubled <strong>Venezuela</strong> 🇻🇪 makes
                    the 9th place, representing it's bizarre economic situation.
                </p>
            </div>
        </div>
    </section>

    <!--                          -->
    <!--    04 Final Results      -->
    <!--                          -->

    <section id="mad-results">
        <div class="container-fluid">
            <h3 class="mad-section-header">
                <span class="mad-section-header-numbering">04</span> Which country is the best for becoming millionaire on average income?
            </h3>

            <div class="mad-results-content">
                <p>
                    Now that we have got insight into which countries top the positive and negative ranking,
                    whether we talk about <a class="link-main" href="#mad-income">average income</a>
                    or <a class="link-main" href="#mad-expenses">cost of living</a>, it is time to present answer
                    to the initial question.
                </p>
                <p>
                    <strong>Which country is the best for becoming a millionaire on average income and how long would it take?</strong>
                </p>
            </div>

            <!--      Podium of TOP 3 countries      -->
            <div id="mad-podium">
                <img id="mad-podium-img" src="./assets/figure1/podium.png" class="img-repsonsive">

                <!--        PHP script loading data from the database and outputting generated HTML for the podium        -->
                <?php
                $servername = "localhost";
                $username = "root";
                $password = "#Excelsior1808";
                $dbname = "Countries";

                // We create connection with the database, using the login credentials
                $conn = new mysqli($servername, $username, $password, $dbname);

                // We select four columns from the database that are required for our podium [Country, CountryCode, AverageIncome, AverageExpense]
                // We order the retrieved table by Average Income with DESCENDING option as we are looking for the BEST countries for earning a million
                // Finally we limit the number of results to 3, as we will be only showing top 3 countries on the podium
                $sql = "SELECT Country, CountryCode, AverageExpense, AverageIncome FROM Countries ORDER BY (AverageIncome - AverageExpense) DESC limit 3";
                // We run the query on the database table
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {

                    // Here we will iterate through 3 top countries, for which we will need to use different classes in HTML,
                    // thus we will have to use variable $place to indicate to script, which iteration is currently being processed,
                    // after finishing iteration we increment the variable by 1, to move on another place
                    //

                    $place = 1;

                    //
                    // Based on this condition, PHP will decide which HTML tags to use (by using IF statement)
                    while($row = $result->fetch_assoc()) {

                        //
                        // First we need to compute the required time for becoming a millionaire
                        //
                        if ($row["AverageExpense"] > $row["AverageIncome"]) {
                            // If country has higher AverageExpense than AverageIncome - automatically eliminate it from consideration for Top 3
                            $eliminate1 = true;
                        } else {
                            // Computation of time required for earning 1000000 $USD
                            $savedPerMonth = $row["AverageIncome"] - $row["AverageExpense"];
                            $months = 1000000 / $savedPerMonth;
                            $years = $months / 12;
                            $yearsTotal = floor($years); // number of years
                            $remainder1 = $years - $yearsTotal;
                            $months = $remainder1 * 12;
                            $monthsTotal = floor($months); // number of months
                            $remainder2 = $months - floor($months);
                            $days = $remainder2 * 30.5;
                            $daysTotal = floor($days); // number of days
                        }

                        //
                        // Now we have required values for time stored in following variables
                        //
                        //  $yearsTotal = number of years
                        //  $monthsTotal = number of months
                        //  $daysTotal = number of days
                        //
                        //  Thus $totalTimeRequired would be equal to sum of these three values
                        //

                        //
                        //  With variables available to be output to HTML, we can start filling our podium with data of Top 3 countries
                        //

                        // Code to be executed for rendering country in 1st place
                        if ($place == 1) {
                            echo "<div id=\"mad-podium-country-1\" class=\"mad-podium-country\">";
                            echo "<div class=\"country-container\">";
                            // Here we will use CountryCode value from database, in order to select correct country flag
                            echo "<img src=\"./assets/flags/" . $row["CountryCode"] . ".png\" class=\"img-responsive\">";
                            // We do the same for the name of country
                            echo "<h4>" . $row["Country"] . "</h4>";
                            // And finally we use our time variables to show them in our HTML
                            echo "<span class=\"mad-podium-time\"><strong>" . $yearsTotal . "</strong> years <strong>" . $monthsTotal . "</strong> months 
                            <strong>" . $daysTotal . "</strong> days</span>";
                            echo "</div>";
                            echo "</div>";
                        }

                        // We execute almost identical code for 2nd and 3rd country, with addition of few classes required for positioning these elements on podium
                        if ($place == 2 || $place == 3) {
                            // We use $place variable to create the ID value
                            echo "<div id=\"mad-podium-country-" . $place . "\" class=\"mad-podium-country mad-podium-country-lo\">";
                            echo "<div class=\"country-container\">";
                            echo "<img src=\"./assets/flags/" . $row["CountryCode"] . ".png\" class=\"img-responsive\">";
                            echo "<h4>" . $row["Country"] . "</h4>";
                            echo "<span class=\"mad-podium-time\"><strong>" . $yearsTotal . "</strong> years <strong>" . $monthsTotal . "</strong> months 
                            <strong>" . $daysTotal . "</strong> days</span>";
                            echo "</div>";
                            echo "</div>";
                        }

                        // After executing the code for a country, we increment $place variable to move on to next country
                        $place++;


                        // End of Script
                        //
                        // This way we load the content dynamically from the database, instead of hardcoding values directly in HTML
                        // That means that if values in database change (e.g. Top 3 countries change), changes will automatically be loaded by script
                        // and correct podium will be loaded, without having to change anything in code
                    }
                } else {
                    echo "0 results";
                }
                $conn->close();
                ?>
            </div>

            <div class="mad-results-content">
                <p>
                    After looking at our podium we can see that the best country to become millionaire on average income
                    and in fastest time is <strong>Liechtenstein</strong> 🇱🇮,
                    where it would take almost exactly <strong>22 years to become a millionaire</strong>. Despite a very high average cost of living
                    of <strong>2054.21$</strong>, the highest average wage worldwide of <strong>5242.14$</strong> gives an average inhabitant
                    of this country a possibility to set aside (or invest) <strong>more than 3000$ dollars each month</strong> (3187.93$ exactly),
                    making it <strong>the best country to live and work in, for aspiring millionaires</strong>.
                </p>
                <p>
                    Second country is <strong>Austria</strong> 🇦🇹 with <strong>29 years</strong> of work required to earn a million
                    and third <strong>Denmark</strong> 🇩🇰 with <strong>3 years, 3 months and 17 days</strong> long journey towards first million.
                    We can notice that podium is entirely taken up by <strong>European countries</strong> demonstrating its strong economic balance,
                    when we look at levels of profitability between average income and average cost of living.
                </p>
                <p>
                    In fact, if we look at <strong>top 30 countries</strong> by time required to become a millionaire,
                    we'll find out that <strong>21 of them are in Europe</strong>. That says a lot about the economic stability on this continent, when compared to others.
                    Let's see what we will learn, if we look at the strength of each continent, considering <strong>top 100 countries</strong> in this ranking.
                </p>

                <!--       Top 100 countries by continent CHART         -->
                <div id="mad-top100-chart">
                    <!--         Getting percentual data about performance of continents in Top 100           -->
                    <?php
                    $servername = "localhost";
                    $username = "root";
                    $password = "#Excelsior1808";
                    $dbname = "Countries";
                    $conn = new mysqli($servername, $username, $password, $dbname);

                    // We order this list by the same conditions as previous, but we will only need to use information about Country and Continent
                    $sql = "SELECT Country, Continent, AverageExpense, AverageIncome FROM Countries ORDER BY (AverageIncome - AverageExpense) DESC limit 100";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {

                        // IN ORDER TO GET REQUIRED DATA
                        // We create variable for each continent, which we will increment per each country, for its respective continent
                        $eu = 0;    // Europe
                        $af = 0;    // Africa
                        $as = 0;    // Asia
                        $me = 0;    // Middle East - part of Asia
                        $na = 0;    // North America
                        $sa = 0;    // South America
                        $ca = 0;    // Central America & The Carribean
                        $au = 0;    // Australia & Oceania


                        while($row = $result->fetch_assoc()) {

                            if ($row["Continent"] == "eu") {$eu++;}
                            if ($row["Continent"] == "af") {$af++;}
                            if ($row["Continent"] == "as") {$as++;}
                            if ($row["Continent"] == "me") {$me++;}
                            if ($row["Continent"] == "na") {$na++;}
                            if ($row["Continent"] == "sa") {$sa++;}
                            if ($row["Continent"] == "ca") {$ca++;}
                            if ($row["Continent"] == "au") {$au++;}
                        }
                    } else {
                        echo "0 results";
                    }
                    $conn->close();
                    ?>

                    <div id="mad-chart2">
                        <div class="row">
                            <div class="col-lg-12">
                                <canvas id="mad-chart-2" width="200" height="200"></canvas>
                            </div>
                        </div>
                    </div>
                </div>

                <p>
                    <strong>Europe</strong> clearly dominates the chart with 40 countries in Top 100, followed by <strong>Asia</strong>
                    with 22 countries in Top 100, 8 of which are located in <strong>Middle-East</strong>.
                    Very surprisingly <strong>Africa</strong> has 12 countries in Top 10,
                    same as <strong>North American continent</strong>, representing economy of <strong>United States</strong> 🇺🇸
                    and <strong>Canada</strong> 🇨🇦, next to several small countries located in the Caribbean.
                    <strong>South America</strong> has 8 countries in Top 100 and <strong>Australia</strong> places last with 6 countries.
                    These include country <strong>Australia</strong> 🇦🇺, <strong>Papua New Guinea</strong> 🇵🇬 and 4 island nations in <strong>The Oceania</strong>.
                </p>
            </div>
        </div>
    </section>

    <!--                          -->
    <!--    05 Other Countries    -->
    <!--                          -->

    <section id="mad-other-countries">
        <div class="container-fluid">
            <h3 class="mad-section-header">
                <span class="mad-section-header-numbering">05</span> What about the rest of the world?
            </h3>

            <div class="mad-other-countries-content">
                <p>
                    After answering the question that we set up to ourselves for this project, it is time to look at
                    some <strong>more interesting statistics</strong> that came up during research as well as throughout the execution
                    of our calculations.
                </p>

                <ol id="mad-other-countries-facts">

                    <li>
                        <h4><i class="fa fa-question-circle-o" aria-hidden="true"></i>Can you make it in a lifetime in every country</h4>

                        <p>
                            Short answer: <strong>No</strong>. Out of 194 world countries that we have evaluated,
                            <strong>only 75 had average income higher than average cost of living</strong> and that still did not mean
                            all of these countries would provide a person with possibility of earning a million within a lifetime. For example,
                            in <strong>Bosnia and Herczegovina</strong> 🇧🇦 - 73rd in ranking and last country with <strong>average income</strong>
                            higher than <strong>average cost of living</strong> (by only 4 euros) - it would take a person with average income and expenses
                            astonishing <strong>22 045 years, 10 months</strong> and <strong>8 days</strong> to earn a million</strong>.
                        </p>
                        <p>
                            If we take the <strong>average life expectancy at birth of the global population</strong> to be at <strong>72.0 years</strong> (World Health Organisation, 2016).<a class="mad-ref-link" href="#mad-ref-5"><sup>[5]</sup></a>
                            and we consider that most countries set <strong>the age of adulthood at 18 years old</strong><a class="mad-ref-link" href="#mad-ref-6"><sup>[6]</sup></a> (point when individual becomes adult - free to travel to & work in any country by himself),
                            we end up with some very interesting results.
                        </p>
                        <p>
                            You can become a millionaire on average income only in <strong>18 countries of the world</strong> and while
                            in  <a class="link-main-green" href="#mad-top18-top7">7 of them</a> you can achieve this goal <strong>in under 40 years</strong>,
                            <a class="link-main" href="#mad-top18-last5">last 5 of them</a> would barely leave you any time left for enjoying your newly acquired figure of one million dollars.
                            If you are curious, which 18 countries I am talking about, you can find them in <a class="link-main" href="#mad-top18-lifetime">following list</a>, along with
                            <strong>times required for reaching the set goal of 1 000 000$.</strong>
                        </p>

                        <ol id="mad-top18-lifetime" class="mad-stats-list">

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
                             $sql = "SELECT Country, CountryCode, AverageExpense, AverageIncome FROM Countries ORDER BY (AverageIncome - AverageExpense) DESC limit 18";
                            // We run the query on the database table
                            $result = $conn->query($sql);

                            if ($result->num_rows > 0) {

                                $count = 1;

                                // Based on this condition, PHP will decide which HTML tags to use (by using IF statement)
                                while($row = $result->fetch_assoc()) {

                                    //
                                    // First we need to compute the required time for becoming a millionaire
                                    //
                                    if ($row["AverageExpense"] > $row["AverageIncome"]) {
                                        // If country has higher AverageExpense than AverageIncome - automatically eliminate it from consideration for Top 3
                                        $eliminate1 = true;
                                    } else {
                                        // Computation of time required for earning 1000000 $USD
                                        $savedPerMonth = $row["AverageIncome"] - $row["AverageExpense"];
                                        $months = 1000000 / $savedPerMonth;
                                        $years = $months / 12;
                                        $yearsTotal = floor($years); // number of years
                                        $remainder1 = $years - $yearsTotal;
                                        $months = $remainder1 * 12;
                                        $monthsTotal = floor($months); // number of months
                                        $remainder2 = $months - floor($months);
                                        $days = $remainder2 * 30.5;
                                        $daysTotal = floor($days); // number of days
                                    }

                                    if ($count == 14) {
                                        echo "<li id='mad-top18-last5'>";
                                    } elseif ($count == 1) {
                                        echo "<li id='mad-top18-top7'>";
                                    } else {
                                        echo "<li>";
                                    }

                                    // Here we test for $count variable because after it reaches number 10,
                                    // we don't want to output "010" but "10" for the last item
                                    if ($count < 10) {
                                        echo "<span class=\"mad-income-stats-no\">" . "0" . $count . "</span>";
                                    } else {
                                        echo "<span class=\"mad-income-stats-no-last\">" . $count . "</span>";
                                    }
                                    echo "<img src=\"./assets/flags/" . $row["CountryCode"] . ".png\" class=\"mad-income-stats-img img-responsive\" alt=\"" . $row["Country"] . "-flag\"/>";
                                    // We output the Country name
                                    echo "<span class=\"mad-income-stats-country\">" .$row["Country"] . "</span>";
                                    // And finally we output the AverageIncome value
                                    echo "<span class=\"mad-income-stats-value\">" . $yearsTotal . " years " . $monthsTotal . " months " . $daysTotal . " days " . "</span>";
                                    echo "</li>";

                                    $count++;
                                }
                            } else {
                                echo "0 results";
                            }

                            $conn->close();
                            ?>
                        </ol>
                    </li>
                </ol>
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
                <li id="mad-ref-2">
                    2. Wikipedia - the free encyclopedia, Singapore [online]
                    <br/>
                    &nbsp;&nbsp;&nbsp;<a class="link-main" href="https://en.wikipedia.org/wiki/Singapore" target="_blank">Source</a>
                </li>
                <li id="mad-ref-3">
                    3. Wikipedia - the free encyclopedia, United States [online]
                    <br/>
                    &nbsp;&nbsp;&nbsp;<a class="link-main" href="https://en.wikipedia.org/wiki/United_States" target="_blank">Source</a>
                </li>
                <li id="mad-ref-4">
                    4. BBC News - Venezuela crisis: How the political situation escalated [online]
                    <br/>
                    &nbsp;&nbsp;&nbsp;<a class="link-main" href="https://www.bbc.co.uk/news/world-latin-america-36319877" target="_blank">Source</a>
                </li>
                <li id="mad-ref-5">
                    5. WHO (World Health Organisation) - Global Health Observatory (GHO) data: Life Expectancy [online]
                    <br/>
                    &nbsp;&nbsp;&nbsp;<a class="link-main" href="https://www.who.int/gho/mortality_burden_disease/life_tables/situation_trends/en/" target="_blank">Source</a>
                </li>
                <li id="mad-ref-6">
                    6. Wikipedia - the free encyclopedia, Age of Majority [online]
                    <br/>
                    &nbsp;&nbsp;&nbsp;<a class="link-main" href="https://en.wikipedia.org/wiki/Age_of_majority" target="_blank">Source</a>
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