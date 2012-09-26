<?php include("layout/head.php"); ?>

<div class="row">
    <div class="span12">
        <div class=" hero-unit">
            <h1>SearchBox.io PHP Elastica Application</h1>

            <br/>

            <p>This example illustrates basic search features of SearchBox.io
                (ElasticSearch as service).</p>

            <p>Sample application is using <a href="http://elastica.io/en" target="_blank">Elastica</a>
                PHP Elastica client to integrate with SearchBox.io.</p>

            <p>To get your api key go to <a href="http://www.searchbox.io">Searchobox.io</a> and signup for a free account.</p>

            <p>Go to search_page.php and put replace your API key with the dummy one in the configuration element.</p>
            <code>'url' => 'https://api.searchbox.io/api-key/PUT_YOUR_API_KEY_HERE'</code>

            <br/><br/>

            <p>Click Create Documents at top left then 2 sample documents will be created.</p>

            <p>Now you can type '*', '*craft' , 'startcraft' or 'warcraft' to searchbox at top of right corner and hit
                enter for sample search results.</p>
        </div>
    </div>
</div>

<?php include("layout/footer.php"); ?>