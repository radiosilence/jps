                                <div id="nav_border">
                                </div>
                                <div id="navigation">
                                        <ul>
                                        <?php foreach( $menu_items as $name => $page ): ?>
                                                <li <?=($cur_page == $name ? "class=\"selected\" " : null)?>id="<?=$name?>"><a href="<?=$name ?>.html" id="<?=$name ?>"><?=$page?></a></li>
                                        <?php endforeach; ?>
                                        </ul>
                                </div>

