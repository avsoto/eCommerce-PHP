<?php
/**
 * Control manages the URL and launches the processes.
 */
class Control {
    
    function __construct() {
        $url = $this->separate_url();
        var_dump($url);
    }

    function separate_url() {
        $url = "";

        // Check if the 'url' parameter exists in the query
        if (isset($_GET["url"])) {
            $url = $_GET["url"];

            // Removes trailing '/' or '\\' characters
            $url = rtrim($url, "/\\");
            
            // Clean unwanted characters from URL
            $url = filter_var($url, FILTER_SANITIZE_URL);

            // Separate the URL into parts
            $url = explode("/", $url);
        }

        // Returns the array with the parts of the URL
        return $url;
    }

}
?>
