<div id="page-wrapper">
    
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Les évènements</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    
    <?php
    $i = 0;
    $query = mysql_query("SELECT * 
                          FROM events
                          ORDER BY id DESC
                          LIMIT 5");
    $events = mysql_num_rows($query);
    while($row_sections = mysql_fetch_array($query))
    {
        echo "
        <div class='col-lg-12'>
            <div class='panel panel-primary'>
                <div class='panel-heading'>";
        echo "n°" . $row_sections['id'] . " - " . $row_sections['title'];
        echo "</div>
                <div class='panel-body'>";
        echo "<p>" . $row_sections['content'] ." . </p>";
        echo "</div>
                <div class='panel-footer'>";
        echo $row_sections['post_date'] . " in " . $row_sections['location'];
        echo "</div>
            </div>
        </div>
        ";        
    }
                    
    ?>
    
    
            
</div>
<!-- /#page-wrapper -->