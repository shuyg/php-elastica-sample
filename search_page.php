<?php

function __autoload_elastica ($class) {
$path = str_replace('_', '/', $class);

if (file_exists('./' . $path . '.php')) {
require_once('./' . $path . '.php');
}
}
spl_autoload_register('__autoload_elastica');

$elasticaClient = new SearchBoxClient(array(
'host' => 'api.searchbox.io',
'port' => 443,
'transport' => 'https',
'api-key' => 'PUT_YOUR_API_KEY_HERE',
));

// Load index
$elasticaIndex = $elasticaClient->getIndex('games');

//get the search query
$value = $_GET['q'];

// Define a Query. We want a string query.
$elasticaQueryString 	= new Elastica_Query_QueryString();
$elasticaQueryString->setQuery((string)$value);

// Create the actual search object with some data.
$elasticaQuery 		= new Elastica_Query();
$elasticaQuery->setQuery($elasticaQueryString);

//Search on the index.
$elasticaResultSet 	= $elasticaIndex->search($elasticaQuery);

?>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta name="generator" content=
  "HTML Tidy for Linux/x86 (vers 11 February 2007), see www.w3.org" />
  <meta charset="utf-8" />
  <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible" />
  <meta content="width=device-width, initial-scale=1, maximum-scale=1" name="viewport" />

  <title>SearchBox.io PHP Elastica Sample</title>
  <link href="/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
  <link href="/css/main.css" rel="stylesheet" type="text/css" />
  <script src="/js/bootstrap.min.js" type="text/javascript">
</script>
</head>

<body>
  <div class="navbar navbar-fixed-top">
    <div class="navbar-inner">
      <div class="container">
        <a class="brand" href="/">SearchBox.io PHP Elastica Sample</a>

        <div class="nav-collapse">
          <ul class="nav">
            <li><a href="/">Home</a></li>

            <li><a href="/about.php">About</a></li>
          </ul>

          <div style="margin-left: 2em" class="nav pull-right">
            <form action="/search_page.php" class="navbar-search pull-left" method="GET">
				<input class="search-query span2" id="q" name="q" placeholder=
              "search" type="text" />
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="container">
    <div>
      <h3>Search Results</h3>
    </div>

    <div class="row">
      <div class="span12">
        <h5>
        	<?php
        	$elasticaResults 	= $elasticaResultSet->getResults();
			$totalResults 		= $elasticaResultSet->getTotalHits();

			echo('Total Hits for query: '.$value.' : '.$totalResults);

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
    <hr />

    <a href="http://www.SearchBox.io">SearchBox.io</a>

    <p>Built with <a href="http://twitter.github.com/bootstrap">Bootstrap</a></p>
  </div>
</body>
</html>
