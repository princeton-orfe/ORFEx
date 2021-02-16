        <?php if ($node->type == 'event') {
                print views_embed_view('orfe_calendar_event_overrides','event', $node->nid);
                }else {
                print render($content);
                }
 ?>
