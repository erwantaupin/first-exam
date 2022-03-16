<div class="modal-content">
                    <span class="close">&times;</span>
                    <form action="assets/php/crud-adduser.php" method="POST" class="crud-create">
                        <div class="one">
                            nom utilisateur   :<input type="texte" name="name_user" id="" placeholder="nom utilisateur">
                        </div>
                        <div class="two">
                            password utilisateur    :<input type="texte" name="password" id="" placeholder="password utilisateur">
                        </div>
                        <div class="three">
                            mail    :<input type="mail" name="mail" id="" placeholder="mail">
                        </div>
                        <div class="heigh">
                            ID role  :<select name="id_role" id="role">
                                <option value="">--choisissez un genre--</option>
                                <?php foreach ($role as $role){ ?>
                                        <option value="<?php echo $role["id_role"] ?>">--<?php echo $role["nom_role"] ?>--</option>
                                <?php } ?>
                                </select>
                        </div>
                        <input type="submit" name="ajout" value="+" id="submit"/>
                    </form>
                     <div class="box-list-film">
                         <div class="box-titre-list"><h2>Les Inscrits</h2></div>
                         <HR id="traithaut">
                         <?php foreach ($user as $user){ ?>
                         <div class="list-film">
                             <ul>
                                 <li class="film-crud">
                                    <div class="box-f">
                                        <div class="crud-minititre">id user:</div>
                                        <div class="echo-film"><?php echo $user["id_user"] ?></div>
                                    </div>
                                    <div class="box-f">
                                        <div class="crud-minititre">nom user:</div>
                                        <div class="echo-film"><?php echo $user["nom_user"] ?></div>
                                    </div>
                                    <div class="box-f">
                                        <div class="crud-minititre">password user:</div>
                                        <div class="echo-film"><?php echo $user["password_user"] ?></div>
                                    </div>
                                    <div class="box-f">
                                        <div class="crud-minititre">mail user:</div>
                                        <div class="echo-film"><?php echo $user["mail_user"] ?></div>
                                    </div>
                                    <div class="box-f">
                                        <div class="crud-minititre">id role:</div>
                                        <div class="echo-film"><?php echo $user["id_role"] ?></div>
                                    </div>
                                    <div class="btn-cfilm">
                                        <a href="crud-moduser.php?id=<?php echo $user["id_user"]?>&role=<?php echo $user["id_role"]?> " ><img class="btnedite" src="assets/images/svg/pencil.svg"></a>
                                        <a href="assets/php/suppuser.php?id=<?php echo $user["id_user"]?>" ><img class="btnremove" src="assets/images/svg/trash.svg"></a>
                                    </div>
                                 </li>
                             </ul>
                             <HR id="traitbas">
                         </div>
                         <?php } ?>
                     </div>
                        
                </div>