<?php if(isset($_GET['id'])){
                require("assets/php/accesfilm.php");
                    ?>    
<aside id="modal?id=<?php echo $value["id_film"]?>" class="modal" aria-hidden="true" role="dialog" aria-modal="true" aria-labelledby="titre-modal1" style="display: none;">
                            <div class="modal-wrapper">
                                <?php foreach ($execute as $value){ 
                                        if($value['id_film'] == $_GET['id'])?>
                                    <div class="titre-modal"><h3 id="titre-modal1"><?php echo $value["titre_film"]?></h3></div>
                                <div class="box-synopsis-et-info-modal">
                                    <div class="synopsis-modal"><p><?php echo $value["synopsis_film"]?></p></div>
                                    <div class="box-petitinfo-modal">
                                        <div class="info-modal">
                                            <div class="info-titre-modal"><h4>Info du Film</h4></div>
                                            <ul>
                                                <li><p><?php echo $value["pegi_film"]?></p></li>
                                                <li><p><?php echo $value["date_film"]?></p></li>
                                                <li><p><?php echo $value["duree_film"]?></p></li>
                                                <li><p><?php echo $value["nom_genre"]?></p></li>
                                            </ul>
                                        </div>
                                        <div class="production-modal">
                                            <div class="info-titre-modal"><h4>La Production</h4></div>
                                            <ul>
                                                <li><p><?php echo $value["nom_acteur"]?></p></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- lien vers le film -->
                                <div class="link-vers-choix">
                                    <a href="pagefilm.php?id=<?php echo $value["id_pagefilm"] ?>" class="link-vers-film" id="link-modal-film"><h5>Voir le film</h5></a>
                                    <a href="" class="link-vers-film" id="link-modal-quitte"><h5>Retour</h5></a>
                                </div>
                            </div>
                            <?php } ?>
                        </aside>
                        <?php } ?>