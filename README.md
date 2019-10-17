# Tema hijo basado en el tema Chaplin de Anders Norén

[Aquí se puede bajar el tema padre Chaplin](https://andersnoren.se/themes/chaplin/).

    Funciona correctamente a la primera, excepto que es necesario añadir la referencia de FontAwesome en el archivo 
    functions.php del tema hijo.
    Este es el código (Cuidado al copiar y pegar que WordPress cambia automáticamente las comillas simples por 
    comillas tipográficas y así no funciona).

~~~ php #Indented code

// Connect Child Theme and Parent Theme

function chaplin_child_enqueue_styles() {

$parent_style = 'chaplin-style';

wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
wp_enqueue_style( 'chaplin-font-awesome', get_template_directory_uri() . '/assets/css/font-awesome.css', false, 1.0, 'all' );
wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css', array( $parent_style ), wp_get_theme()->get('Version'));

}
add_action( 'wp_enqueue_scripts', 'chaplin_child_enqueue_styles' );
~~~

![screenshot.png](https://github.com/astrargalar/Chaplin_Child/blob/master/screenshot.png "Portada del tema")
