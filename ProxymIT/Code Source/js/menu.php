<!-- Left side column. contains the logo and sidebar -->
<aside class="left-side sidebar-offcanvas">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-bar-chart-o"></i>
                    <span>Les news</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="OMS.php"><i class="fa fa-angle-double-right"></i>Organisation Mondiale de la santé</a></li>
                    <li><a href="INS.php"><i class="fa fa-angle-double-right"></i>INSV</a></li>
                    <li><a href="santegouv.php"><i class="fa fa-angle-double-right"></i>Ministère de la santé publique</a></li>
                    <li><a href="medisite.php"><i class="fa fa-angle-double-right"></i>Médisite</a></li>
                </ul>
            </li>
            <li class="treeview">       
                <a href="#">
                    <i class="fa fa-laptop"></i>
                    <span>Epidémies et grandes maladies du 21e siècle</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu"><?php
                    $sql = "SELECT `id`, `name` FROM `Disease`";
                    if (!$result = $db->query($sql)){
                        die ('There was an error running the query [' . $db->error . ']');
                    }
                    while ($row = $result->fetch_assoc()){?>
                        <li><a href=<?php echo "\"index.php?disease=" . $row['id'] . "\"" ?>><i class="fa fa-angle-double-right"></i><?php echo $row['name'] ?></a></li>
                    <?php } ?>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-bar-chart-o"></i>
                    <span>Liens utiles pour se prévenir</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="http://www.who.int/fr/"><i class="fa fa-angle-double-right"></i>Organisation Mondiale de la santé</a></li>
                    <li><a href="http://www.invs.sante.fr/"><i class="fa fa-angle-double-right"></i>INSV</a></li>
                    <li><a href="http://www.sante.gouv.fr/"><i class="fa fa-angle-double-right"></i>Ministère de la santé publique</a></li>
                    <li><a href="http://www.medisite.fr/"><i class="fa fa-angle-double-right"></i>Médisite</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-bar-chart-o"></i>
                    <span>Liens annexes</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="http://www.dondusang.net/rewrite/site/37/etablissement-francais-du-sang.htm?idRubrique=756"><i class="fa fa-angle-double-right"></i>Association du don du sang</a></li>
                    <li><a href="http://www.msf.fr/"><i class="fa fa-angle-double-right"></i>Médecin sans frontières</a></li>
                    <li><a href="http://www.croix-rouge.fr/Je-me-forme/Particuliers/Les-6-gestes-de-base"><i class="fa fa-angle-double-right"></i>Les gestes de secours</a></li>
                    <li><a href="http://www.numeros-utiles.info/"><i class="fa fa-angle-double-right"></i>Numéros utiles</a></li>
                </ul>
            </li>


        </ul>
    </section>
    <!-- /.sidebar -->
</aside>