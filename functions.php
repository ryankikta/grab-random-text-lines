function atlas() {
        $loc = get_template_directory();
        $fpth = "includes/atlasShrugged.txt"; 
        $lines = file($loc ."/". $fpth);
        Shuffle($lines);
        Echo "<p>";
        // Toggle to help find bad text
        //Echo "<p style='color:red;'>";
        Echo implode(" ", array_slice($lines, 0, 5));
        Echo "</p>";
}
