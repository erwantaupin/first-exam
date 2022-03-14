<div class="modal-content">
                    <form action="assets/php/ajoutfilm.php" method="POST" class="crud-create">
                        <div class="one">
                            Titre du film   :<input type="texte" name="titre_film" id="" placeholder="nom du film">
                        </div>
                        <div class="two">
                            Pegi du film    :<input type="texte" name="pegi_film" id="" placeholder="Pegi du film">
                        </div>
                        <div class="three">
                            Date du film    :<input type="texte" name="date_film" id="" placeholder="Date du film">
                        </div>
                        <div class="four">
                            Durée du film   :<input type="texte" name="duree_film" id="" placeholder="Durée du film">
                        </div>
                        <div class="five">
                            Image du film   :<input type="texte" name="image_film" id="" placeholder="image du film"><br>
                        </div>
                        <div class="six">
                            Video du film   :<input type="texte" name="video_film" id="" placeholder="video du film">
                        </div>
                        <div class="seven">
                            Genre du film   :<select name="id_genre" id="genre">
                                <option value="">--choisissez un genre--</option>
                                <?php foreach ($genre as $value){ ?>
                                        <option value="<?php echo $value["id_genre"] ?>">--<?php echo $value["nom_genre"] ?>--</option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="heigh">
                            Acteur du film  :<select name="id_acteur" id="acteur">
                                <option value="">--choisissez un genre--</option>
                                <?php foreach ($acteur as $value){ ?>
                                        <option value="<?php echo $value["id_acteur"] ?>">--<?php echo $value["nom_acteur"] ?>--</option>
                                <?php } ?>
                                </select>
                        </div>
                        <div class="nine">
                            Synopsis du film:<input type="texte" name="synopsis_film" id="" placeholder="synopsis du film">
                        </div>
                        <input type="submit" name="ajout" value="+" id="submit"/>
                    </form>
                     <div class="box-list-film">
                         <div class="box-titre-list"><h2>Les Films</h2></div>
                         <HR id="traithaut">
                         <?php foreach ($execute as $value){ ?>
                         <div class="list-film">
                             <ul>
                                 <li class="film-crud">
                                    <div class="box-f">
                                        <div class="crud-minititre">id du film:</div>
                                        <div class="echo-film"><?php echo $value["id_film"] ?></div>
                                    </div>
                                    <div class="box-f">
                                        <div class="crud-minititre">nom du film:</div>
                                        <div class="echo-film"><?php echo $value["titre_film"] ?></div>
                                    </div>
                                    <div class="box-f">
                                        <div class="crud-minititre">pegi du film:</div>
                                        <div class="echo-film"><?php echo $value["pegi_film"] ?></div>
                                    </div>
                                    <div class="box-f">
                                        <div class="crud-minititre">date du film:</div>
                                        <div class="echo-film"><?php echo $value["date_film"] ?></div>
                                    </div>
                                    <div class="box-f">
                                        <div class="crud-minititre">Duree du film:</div>
                                        <div class="echo-film"><?php echo $value["duree_film"] ?></div>
                                    </div>
                                    <div class="box-f">
                                        <div class="crud-minititre">image du film:</div>
                                        <div class="echo-film"><?php echo $value['image_film']?></div>
                                    </div>
                                    <div class="box-f">
                                        <div class="crud-minititre">video du film:</div>
                                        <div class="echo-film"><?php echo $value["video_film"] ?></div>
                                    </div>
                                    <div class="box-f">
                                        <div class="crud-minititre">genre du film:</div>
                                        <div class="echo-film"><?php echo $value["nom_genre"]?></div>
                                    </div>
                                    <div class="box-f">
                                        <div class="crud-minititre">acteur du film:</div>
                                        <div class="echo-film"><?php echo $value["nom_acteur"] ?></div>
                                    </div>
                                    <div class="box-fs">
                                        <div class="crud-minititre">synopsis du film:</div>
                                        <div class="echo-film"><?php echo $value["synopsis_film"]?></div>
                                    </div>
                                    <div class="btn-cfilm">
                                        <a href="" ><img class="btnedite" src="assets/images/svg/pencil.svg"></a>
                                        <a href="" ><img class="btnremove" src="assets/images/svg/trash.svg"></a>
                                    </div>
                                 </li>
                             </ul>
                             <HR id="traitbas">
                         </div>
                         <?php } ?>
                     </div>
                </div>