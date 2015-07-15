<?php
    
    //    The main 'geoname' table has the following fields :
    //    ---------------------------------------------------
    //    geonameid         : integer id of record in geonames database
    //    name              : name of geographical point (utf8) varchar(200)
    //    asciiname         : name of geographical point in plain ascii characters, varchar(200)
    //    alternatenames    : alternatenames, comma separated, ascii names automatically transliterated, convenience attribute from alternatename table, varchar(10000)
    //    latitude          : latitude in decimal degrees (wgs84)
    //    longitude         : longitude in decimal degrees (wgs84)
    //    feature class     : see http://www.geonames.org/export/codes.html, char(1)
    //    feature code      : see http://www.geonames.org/export/codes.html, varchar(10)
    //    country code      : ISO-3166 2-letter country code, 2 characters
    //    cc2               : alternate country codes, comma separated, ISO-3166 2-letter country code, 200 characters
    //    admin1 code       : fipscode (subject to change to iso code), see exceptions below, see file admin1Codes.txt for display names of this code; varchar(20)
    //    admin2 code       : code for the second administrative division, a county in the US, see file admin2Codes.txt; varchar(80) 
    //    admin3 code       : code for third level administrative division, varchar(20)
    //    admin4 code       : code for fourth level administrative division, varchar(20)
    //    population        : bigint (8 byte int) 
    //    elevation         : in meters, integer
    //    dem               : digital elevation model, srtm3 or gtopo30, average elevation of 3''x3'' (ca 90mx90m) or 30''x30'' (ca 900mx900m) area in meters, integer. srtm processed by cgiar/ciat.
    //    timezone          : the timezone id (see file timeZone.txt) varchar(40)
    //    modification date : date of last modification in yyyy-MM-dd format
    
     // Function to convert CSV into associative array
    function csvToArray($data) { 
          
        $array;
    
        $lineArray = preg_split("/[\r\n]+/", $data);
        for ($j = 0; $j < count($lineArray); $j++) { 
            $subarray = preg_split("/[\t]/", $lineArray[$j]);
            
            $array[$j]->geonameid = $subarray[0];
            $array[$j]->name = $subarray[1];
            $array[$j]->asciiname = $subarray[2];
            $array[$j]->alternatenames = $subarray[3];
            $array[$j]->latitude = $subarray[4];
            $array[$j]->longitude = $subarray[5];
            $array[$j]->feature_class = $subarray[6];
            $array[$j]->feature_code = $subarray[7];
            $array[$j]->country_code = $subarray[8];
            $array[$j]->cc2 = $subarray[9];
            $array[$j]->admin1 = $subarray[10];
            $array[$j]->admin2 = $subarray[11];
            $array[$j]->admin3 = $subarray[12];
            $array[$j]->admin4 = $subarray[13];
            $array[$j]->population = $subarray[14];
            $array[$j]->elevation = $subarray[15];
            $array[$j]->dem = $subarray[16];
            $array[$j]->timezone = $subarray[17];
            $array[$j]->modification = $subarray[18];
        }
    
        return $array;
    } 
    
    $file = 'VE.txt';
    $searchfor = $_GET["s"];

    // the following line prevents the browser from parsing this as HTML.
    //header('Content-Type: text/plain');
    header('Content-Type: application/json');
    
    if (!is_null($searchfor)){

        // get the file contents, assuming the file to be readable (and exist)
        $contents = file_get_contents($file);
        // escape special characters in the query
        $pattern = preg_quote($searchfor, '/');
        // finalise the regular expression, matching the whole line
        $pattern = "/^.*$pattern.*\$/m";
        // search, and store all matching occurences in $matches

        if(preg_match_all($pattern, $contents, $matches)){
            $data = implode("\n",$matches[0]);
            $array = csvToArray($data);
        }
    }
    //else{
    //    $handle = fopen($file,'r');
    //    if ($handle) {
    //        $i = 0;
    //        while (!feof($handle)) {
    //            $array[$i] = stream_get_line ($handle);
    //            $i++;
    //        }
    //        fclose($handle);
    //    }
    //}
    
    if (isset( $_GET["fc"])){
        $result = array_filter($array, function($k) { return ($k->feature_code == $_GET["fc"]); });
    }
    elseif  (isset( $_GET["a1"])){
        $result = array_filter($array, function($k) { return ($k->admin1 == $_GET["a1"]); });
    }
    elseif  (isset( $_GET["a2"])){
        $result = array_filter($array, function($k) { return ($k->admin2 == $_GET["a2"]); });
    }
    else{
        $result = $array;
    }

    if (sizeof($result)>0) { echo json_encode($result);}
