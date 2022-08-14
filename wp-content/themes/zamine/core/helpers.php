<?php

function getMenuArray($current_menu)
{
  $idPostCurrent = get_the_ID();
  $array_menu = wp_get_nav_menu_items($current_menu);
  $menu = array();
  $childrens = [];
  foreach ($array_menu as $m) {
    $page = new stdClass();
    $page->ID = $m->object_id;
    $page->idReference = $m->ID;
    $page->title = $m->title;
    $page->url = $m->url;
    $page->childrens = [];
    $page->menu_item_parent = $m->menu_item_parent;
    $page->current = ($m->object_id == $idPostCurrent);
    if ($m->menu_item_parent == 0) {
      $menu[] = $page;
    } else {
      $childrens[] = $page;
    }
  }
  foreach ($childrens as $page) {
    foreach ($menu as $key => $value) {
      if ($value->idReference == $page->menu_item_parent) {
        $value->childrens[] = $page;
      }
    }
  }
  return $menu;
}