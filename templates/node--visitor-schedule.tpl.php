        <?php if ($node->type == 'visitor_schedule') {
                print views_embed_view('orfe_visitor_schedule_override','orfe_visitor_schedule', $node->nid);
                }else {
                print render($content);
                }
 ?>
