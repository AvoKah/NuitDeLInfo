<div id="page-wrapper">
    
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Les évènements</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    
    <?php
    $i = 0;

    if (!empty($_POST["search_input"]))
    {
        $search_input = $_POST["search_input"];
        $query = mysql_query("SELECT *
                              FROM users
                              WHERE email = '" . $search_input . "' OR
                              firstname = '" . $search_input . "' OR
                              lastname = '" . $search_input . "'
                              ");
        $events = mysql_num_rows($query);
        if (!$events)
            echo "<h3>Rien trouvé...</h3>";
        else
        {
            while($row_sections = mysql_fetch_array($query))
            {
                echo "
                <div class='col-lg-12'>
                    <div class='panel panel-primary'>
                        <div class='panel-heading'>";
                echo $row_sections['firstname'] . " " . $row_sections['lastname'];
                echo "</div>
                    
                    <div class='panel-footer'>";
                echo "Lives at " . $row_sections['address'];
                echo "</div></div>
                </div>
                ";        
            }
        }
    }
    else
        echo "<h3>Rien à chercher...</h3>";
                    
    ?>
    
    
            
</div>
<!-- /#page-wrapper -->