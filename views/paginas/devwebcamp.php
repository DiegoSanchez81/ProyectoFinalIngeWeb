<main class="devwebcamp">
    <h2 class="devwebcamp__heading"><?php echo $titulo; ?></h2>
    <p class="devwebcamp__descripcion">Conoce la ponecia más importante de Latinoamérica</p>

    <div class="devwebcamp__grid">
        <div <?php aos_animacion(); ?> class="devwebcamp__imagen">
            <picture>
                <source srcset="build/img/sobre_metro.avif" type="image/avif">
                <source srcset="build/img/sobre_metro.webp" type="image/webp">
                <img loading="lazy" width="200" height="300" src="build/img/sobre_metro.jpg" alt="Imagen DevWebcamp">
            </picture>
        </div>

        <div  class="devwebcamp__contenido">
            <p <?php aos_animacion(); ?> class="devwebcamp__texto">Vive la magia del Teatro Metropólitan, uno de los recintos más emblemáticos de la CDMX. ¡Disfruta de conciertos, teatro y espectáculos inolvidables en el corazón de la ciudad!</p>
            
            <p <?php aos_animacion(); ?> class="devwebcamp__texto">El Teatro Metropólitan, ubicado en el corazón de la Ciudad de México sobre la Avenida Independencia, es uno de los recintos más emblemáticos del país. Inaugurado en 1943, originalmente como un cine de lujo, hoy en día es reconocido por su arquitectura art déco, su acústica impecable y su ambiente íntimo. Con capacidad para más de 3,000 espectadores, el Metropólitan alberga una gran variedad de eventos, desde conciertos y obras teatrales hasta festivales y conferencias culturales, siendo un punto clave para la vida artística del país.</p>
        </div>
    </div>
</main>