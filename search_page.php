<?php

require "bootstrap.php";

// Load index
$elasticaIndex = $elasticaClient->getIndex('games');

//get the search query
$value = $_GET['q'];

// Define a Query. We want a string query.
$elasticaQueryString = new Elastica_Query_QueryString();
$elasticaQueryString->setQuery((string)$value);

// Create the actual search object with some data.
$elasticaQuery = new Elastica_Query();
$elasticaQuery->setQuery($elasticaQueryString);

//Search on the index.
$elasticaResultSet = $elasticaIndex->search($elasticaQuery);

?>

<?php include("layout/head.php"); ?>

<div>
    <h3>Search Results</h3>
</div>

<div class="row">
    <div class="span12">
        <h5>
            <?php
            $elasticaResults = $elasticaResultSet->getResults();
            $totalResults = $elasticaResultSet->getTotalHits();

            echo('Total Hits for query: ' . $value . ' : ' . $totalResults);

            ?>
        </h5>

        <p>
        <table class="table">
            <thead>
            <tr>
                <th>
                    Index Name
                </th>
                <th>
                    Id
                </th>
                <th>
                    Data
                </th>
            </tr>
            </thead>
            <tbody>
            <?php
            foreach ($elasticaResults as $elasticaResult) {
                echo('<tr>');
                echo('<td>');
                echo($elasticaResult->getIndex());
                echo('</td>');
                echo('<td>');
                echo($elasticaResult->getId());
                echo('</td>');
                echo('<td>');
                echo($elasticaResult->getData()['message']);
                echo('</td>');
                echo('</tr>');
            }
            ?>
            </tbody>
        </table>

        </p>
    </div>
</div>
<?php include("layout/footer.php"); ?>
