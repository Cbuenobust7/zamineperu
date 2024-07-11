<?php
/*
Plugin Name: Filtros de Formularios
Description: Este plugin agrega filtros personalizados a los formularios de WPForms.
Version: 1.0
Author: Tu Nombre
*/

// Prohibir palabras específicas y enlaces en WPForms
function wpf_dev_prohibit_words( $fields, $entry, $form_data ) {
    // Palabras prohibidas
    $prohibited_words = array( 'DINA', 'palabra2', 'palabra3' );

    foreach ( $fields as $field_id => $field ) {
        // Solo verificamos campos de tipo texto
        if ( 'text' === $field['type'] ) {
            $field_value = $entry[$field_id];

            // Verificar si el valor del campo contiene palabras prohibidas
            foreach ( $prohibited_words as $word ) {
                if ( stripos( $field_value, $word ) !== false ) {
                    // Si se encuentra una palabra prohibida, puedes manejarlo según tus necesidades.
                    // Por ejemplo, puedes reemplazar la palabra o mostrar un mensaje de error.
                    $fields[$field_id]['error'] = 'Lo siento, la palabra "' . $word . '" está prohibida.';
                    // Puedes agregar más acciones aquí, como registrar la entrada en un archivo de registro.
                }
            }

            // Verificar si el valor del campo contiene enlaces http o https
            if (preg_match('/http(s)?:\/\//i', $field_value)) {
                // Si se encuentra un enlace, puedes manejarlo según tus necesidades.
                // Por ejemplo, puedes mostrar un mensaje de error.
                $fields[$field_id]['error'] = 'Lo siento, los enlaces no están permitidos.';
                // Puedes agregar más acciones aquí, como registrar la entrada en un archivo de registro.
            }
        }
    }

    return $fields;
}
add_filter( 'wpforms_process', 'wpf_dev_prohibit_words', 10, 3 );
?>