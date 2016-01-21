<?php
if (IN_serendipity !== true) {
  die ("Don't hack!");
}

$probelang = dirname(__FILE__) . '/' . $serendipity['charset'] . 'lang_' . $serendipity['lang'] . '.inc.php';

if (file_exists($probelang)) {
    include $probelang;
}

include dirname(__FILE__) . '/lang_en.inc.php';

$serendipity['smarty']->assign(array('currpage'=> "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']));

if ($serendipity['GET']['adminModule'] == 'templates' || $serendipity['POST']['adminModule'] == 'templates') {
    if (is_array($all_cats = serendipity_fetchCategories('all'))) {
        $categories = serendipity_walkRecursive($categories, 'categoryid', 'parentid', VIEWMODE_THREADED);
        $catsel = array();
        foreach($all_cats AS $cat) {
            $catsel[$cat['categoryid']] = str_repeat('&nbsp;', $cat['depth']) . $cat['category_name'];
        }
  }
}

$template_config = array(
    array(
      'var'           => 'infoxxx1',
      'name'          => 'infoxxx1',
      'type'          => 'custom',
      'custom'        => MIMBO_INSTR,
    ),
    array(
      'var'           => 'catlead',
      'name'          => MIMBO_CAT_LEAD,
      'type'          => 'select',
      'default'       => '',
      'select_values' => $catsel,
    ),
    array(
      'var'           => 'catfeat',
      'name'          => MIMBO_CAT_FEAT,
      'type'          => 'select',
      'default'       => '',
      'select_values' => $catsel,
    ),
    array(
      'var'           => 'catx1',
      'name'          => MIMBO_CAT_X1,
      'type'          => 'select',
      'default'       => '',
      'select_values' => $catsel,
    ),
    array(
      'var'           => 'catx2',
      'name'          => MIMBO_CAT_X2,
      'type'          => 'select',
      'default'       => '',
      'select_values' => $catsel,
    ),
    array(
      'var'           => 'catx3',
      'name'          => MIMBO_CAT_X3,
      'type'          => 'select',
      'default'       => '',
      'select_values' => $catsel,
    ),
    array(
        'var'         => 'amount',
        'name'        => NAVLINK_AMOUNT,
        'type'        => 'string',
        'default'     => '5',
    )
);

$template_config_groups = NULL;

$template_loaded_config = serendipity_loadThemeOptions($template_config, $serendipity['smarty_vars']['template_option']);

$navlinks = array();

for ($i = 0; $i < $template_loaded_config['amount']; $i++) {
    $navlinks[] = array(
        'title'   => $template_loaded_config['navlink' . $i . 'text'],
        'href'    => $template_loaded_config['navlink' . $i . 'url'],
        'pos'    => $template_loaded_config['navlink' . $i . 'posi']
    );
    $template_config[] = array(
        'var'     => 'navlink' . $i . 'text',
        'name'    => NAV_LINK_TEXT . ' #' . $i,
        'type'    => 'string',
        'default' => 'Link #' . $i,
        );
	
    $template_config[] = array(
        'var'     => 'navlink' . $i . 'url',
        'name'    => NAV_LINK_URL . ' #' . $i,
        'type'    => 'string',
        'default' => '#',
    );	
	$template_config[] = array(
        'var'     => 'navlink' . $i . 'posi',
        'name'    => NAV_LINK_POS . ' #' . $i,
        'type'          => 'select',
        'default'       => 'none',
        'select_values' => array('left' => SITENAV_LEFT,
                                 'right' => SITENAV_RIGHT)
        );
}

$serendipity['smarty']->assign_by_ref('navlinks', $navlinks);
