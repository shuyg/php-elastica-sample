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
    <div class="row">
      <div class="span12">
        <div class=" hero-unit">
          <h3>SearchBox.io PHP Elastica Application</h3>

          <p>This example illustrates basic search features of SearchBox.io
          (ElasticSearch as service).</p>

          <p>Sample application is using <a href=
          "http://elastica.io/en" target="_blank">Elastica</a>
          PHP Elastica client to integrate with SearchBox.io.</p>

          <p>To create initial index go to Searchobox.io and signup for a free account.</p>

          <p>Using your API key, create a sample index like the following:</p>

          <code>
          	curl -XPUT https://api.searchbox.io/api-key/{your-api-key}/games
          </code>

          <p>Now you have created a search index with default settings. Its time to add some content:</p>

          <code>
          	curl -XPUT https://api.searchbox.io/api-key/{your-api-key}/games/game/1 -d '{
			    "message": "world of warcraft"
			}'
          </code>

			<p>Another document:</p>

          <code>
          	curl -XPUT https://api.searchbox.io/api-key/{your-api-key}/games/game/2 -d '{
			    "message": "starcraft"
			}'
          </code>

          <p>Go to search_page.php and put replace your API key with the dummy one in the configuration element.</p>
          <code>'path' => 'api-key/PUT_YOUR_API_KEY_HERE/'</code>

          <p>All done!</p>

          <p>Now you can type '*', '*craft' , 'startcraft' or 'warcraft' to searchbox at top of right corner and hit
          enter for sample search results.</p>
        </div>
      </div>
    </div>
    <hr />

    <a href="http://www.SearchBox.io">SearchBox.io</a>

    <p>Built with <a href="http://twitter.github.com/bootstrap">Bootstrap</a></p>
  </div>
</body>
</html>
