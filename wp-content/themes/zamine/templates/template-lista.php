<?php
/* Template Name: Lista */
get_header();
$lang = get_bloginfo("language");
?>

<style>
.centered-table {
  padding: 100px; /* Ajusta el valor de padding según tus preferencias */
  margin: 0 auto; /* Centra la tabla horizontalmente */
  width: 80%; /* Ancho de la tabla, ajusta según tus preferencias */
}

th, td {
  text-align: center;
  padding: 0 10px 0 0; /* Agrega espacio entre columnas */
}

.bold-name {
  font-weight: bold; /* Aplica negrita al texto */
}
</style>
<?php

$categories = get_terms(array(
    'taxonomy' => "soluci_perf_categ",
    'parent' => 0,
    'orderby' => 'term_id',
    'hide_empty' => false
));

if (!empty($categories)) {
    echo '<div class="centered-table">';
    echo '<table>';
    echo '<tr><th>Nombre</th><th>ID</th><th>ES HIJO DE</th></tr>';

    foreach ($categories as $category) {
        echo '<tr>';
        echo '<td' . ($category->parent == 0 ? ' class="bold-name"' : '') . '>' . $category->name . '</td>';
        echo '<td>' . ($category->parent == 0 ? $category->term_id : '') . '</td>';
        echo '<td>' . ($category->parent != 0 ? $category->parent : '') . '</td>';
        echo '</tr>';

        // Ahora, obtén los hijos de esta categoría
        $children = get_terms(array(
            'taxonomy' => "soluci_perf_categ",
            'parent' => $category->term_id,
            'orderby' => 'term_id',
            'hide_empty' => false
        ));

        foreach ($children as $child) {
            echo '<tr>';
            echo '<td>' . $child->name . '</td>';
            echo '<td>' . ($child->parent == 0 ? $child->term_id : '') . '</td>';
            echo '<td>' . ($child->parent != 0 ? $child->parent : '') . '</td>';
            echo '</tr>';
        }
    }

    echo '</table>';
    echo '</div>';
} else {
    echo 'No se encontraron categorías.';
}
?>

<div class="products py-2">
  <div>
    <div class="products--list container-fluid">
      <div class="row" style="background: #fff;">
        <table>
          <tbody>
            <tr>
              <th>
                <img src="<?php echo get_template_directory_uri(); ?>/images/separador-l.png" alt="zamine" height="">
              </th>
              <th>
                <img src="<?php echo get_template_directory_uri(); ?>/images/separador-r.png" alt="zamine" height="">
              </th>
            </tr>
            <tr style="background: #fff;">
              <td style="background-color: #303030; vertical-align: baseline;">
                <div class="accordion-menu" style="overflow: hidden;">
                  <h6 class="my-nav2 mb-0 font-weight-bold" style="background: #303030;">
                    <div style="list-style:none">
                      <?php
                      $categories = get_terms(
                          array(
                              'taxonomy'   => "soluci_perf_categ",
                              'parent'     => 0, // No Parent
                              'orderby'    => 'term_id',
                              'hide_empty' => false
                          )
                      );
                      ?>
                      <?php if (count($categories) > 0): ?>
                        <?php
                        $categories2 = get_terms(
                            array(
                                'taxonomy'   => "soluci_perf_categ",
                                'parent'     => $categories->term_id,
                                'orderby'    => 'term_id',
                                'hide_empty' => false
                            )
                        );
                        ?>
                        <?php if (count($categories2) > 0): ?>
                          <?php foreach ($categories2 as $category2): ?>
                            <li class="m-0">
                              <a onclick="setActive(this, event)" href="#productos" title="" class="d-block" data-slug="<?= $category2->slug; ?>" data-catid="<?= $category2->term_id; ?>">
                                <?php echo $category2->name ?>
                              </a>
                              <?php
                              $categories3 = get_terms(
                                  array(
                                      'taxonomy'   => "soluci_perf_categ",
                                      'parent'     => $category2->term_id,
                                      'orderby'    => 'description',
                                      'hide_empty' => false
                                  )
                              );
                              ?>
                              <?php if (count($categories3) > 0): ?>
                                <?php foreach ($categories3 as $category3): ?>
                                  <!-- Agrega aquí el código para mostrar los elementos de $categories3 si es necesario -->
                                <?php endforeach; ?>
                              <?php endif; ?>
                            </li>
                          <?php endforeach; ?>
                        <?php endif; ?>
                      <?php endif; ?>
                    </div>
                  </h6>
                </div>

                <div id="videos-list-container" class="d-none">
                  <li class="btn-secondary dropdown-toggle text-white videos-productos" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background-color:#000">
                    <i class="fas fa-play-circle"></i> <a>&nbsp;&nbsp;Videos </a>
                  </li>
                  <div id="irarriba" class="dropdown-menu videos-show" style="background-color: #303030; border: none;">
                    <ul class="video-list p-0"></ul>
                  </div>
                </div>
              </td>
              <td>
                <?php get_template_part('components/sidebar');?>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
           <?php     print_r ($categories); ?>
<?php get_footer(); ?>

