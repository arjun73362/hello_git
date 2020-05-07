<?php
/**
 * @file
 * Contains \Drupal\getCurrentNodeTitle\Controller\myController
 */
namespace Drupal\getCurrentNodeTitle\Controller;
use Drupal\Core\Controller\ControllerBase;
class myController extends ControllerBase {
  /**
   * Returns a render-able array for a test page.
   */
  public function nodetitle() {

    $entity = entity_load('node', 7);
    kint($entity->getTitle());

    // $node1 = \Drupal::entityTypeManager()->getStorage('node')->load(7);
    // kint($node1->getTitle());

    $node = \Drupal::routeMatch()->getParameter('node');
    if ($node instanceof \Drupal\node\NodeInterface) {
    // You can get nid and anything else you need from the node object.
    $nid = $node->id();
    kint($nid);
    }
    else
    {
        $build = [
        '#markup' => $this->t("hello world"),
        ];
        return $build;
    }
}
}