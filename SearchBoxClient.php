<?php
class SearchBoxClient extends Elastica_Client {
    /**
    *    Searchbox.io 
    *    Overridden to support api keys of searchbox
     * Makes calls to the elasticsearch server based on this index
     *
     * It's possible to make any REST query directly over this method
     *
     * @param  string            $path   Path to call
     * @param  string            $method Rest method to use (GET, POST, DELETE, PUT)
     * @param  array             $data   OPTIONAL Arguments as array
     * @param  array             $query  OPTIONAL Query params
     * @return Elastica_Response Response object
     */
    public function request($path, $method, $data = array(), array $query = array())
    {
    	$modified_path='api-key/'.$this->getConfig('api-key').'/'.$path;
        $request = new Elastica_Request($this, $modified_path, $method, $data, $query);

        return $request->send();
    }
}
?>