                                <div id="nav_border">
                                </div>
                                <div id="navigation">
                                        <ul>
                                        <?php foreach( $menu_items as $name => $item ): ?>
                                                <li <?=($page == $name ? "class=\"selected\" " : null)?>id="<?=$name?>"><a href="<?=$name ?>.html" id="<?=$name?>"><?=$item?></a></li>
                                        <?php endforeach; ?>
                                        </ul>
                                </div>

