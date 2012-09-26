## SearchBox.io Sample PHP Elastica Application.

This example illustrates basic search features of SearchBox.io ([ElasticSearch](http://www.elasticsearch.org) as service).

Sample application is using [Elastica](http://elastica.io) PHP ElasticSearch client to integrate with SearchBox.io.

To create initial index and sample data click "Create Documents" (2 sample articles will be created.)

To test search; enter "starcraft", "warcraft" or "*" to search box at top right and hit enter.

## Using with SearchBox.io

* Sign Up and get your API-KEY from [here](https://searchbox.io/users/sign_up).
* Go to search_page.php and put replace your API key with the dummy one in the configuration element.


## Local Setup

* Change connection string at search_page.php
    * from
        ```
            'url' => 'https://api.searchbox.io/api-key/PUT_YOUR_API_KEY_HERE',
        ```
    * to
        ```
            'url' => 'http://localhost:9200',
        ```