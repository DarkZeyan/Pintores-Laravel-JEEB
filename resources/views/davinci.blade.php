@extends('layouts.master')
@section('title', $title)
@section('header')
@section('tituloHeader', $tituloHeader)
@stop
@section('navegacion')
<li class="nav-item">
    <a class="nav-link" href="{{action('PintoresController@principal')}}">Inicio</a>
</li>
<li class="nav-item">
    <a class="nav-link" href="{{action('PintoresController@datos')}}">Datos del Alumno</a>
</li>
@stop
@section('contenido')
<img src="images/pintor1.jpg" alt="Da Vinci" style="float: left; margin-right: 20px; margin-bottom: 20px;">
<p>(Vinci, Toscana, 1452 - Amboise, Turena, 1519) Artista, pensador e investigador italiano que, por su
    insaciable curiosidad y su genio polifacético, representa el modelo más acabado del sabio renacentista.
</p>
<p>Leonardo da Vinci era hijo ilegítimo de un abogado florentino, quien no le permitió conocer a su madre,
    una modesta campesina. Se formó como artista en Florencia, en el taller de Andrea del Verrocchio; pero
    gran parte de su carrera se desarrolló en otras ciudades italianas como Milán (en donde permaneció entre
    1489 y 1499 bajo el mecenazgo del duque Ludovico Sforza, llamado el Moro) o Roma (en donde trabajó para
    Julio de Médicis). Aunque practicó las tres artes plásticas, no se ha conservado ninguna escultura suya
    y parece que ninguno de los edificios que diseñó llegó a construirse, por lo que de su obra como
    escultor y arquitecto sólo quedan indicios en sus notas y bocetos personales.</p>
<p>Es, por tanto, la obra pictórica de Leonardo da Vinci la que le ha hecho destacar como el gran maestro
    del «Cinquecento» (por encima incluso de Miguel Ángel o Rafael) y como un personaje cumbre en la
    historia del arte. De la veintena de cuadros suyos conservados, destacan La Anunciación, La Virgen de
    las Rocas, La Santa Cena, La Virgen y Santa Ana, La Adoración de los Magos y el Retrato de Ginebra
    Benzi. El más célebre es sin duda La Mona Lisa o La Gioconda, retrato que tuvo al parecer como modelo a
    Mona (abreviatura de Madonna) Lisa Gherardini, esposa de Francisco Giocondo.</p>
<p>Todas sus obras son composiciones muy estudiadas, basadas en la perfección del dibujo y con un cierto
    halo de misterio, en las que la gradación del color contribuye a completar el efecto de la perspectiva;
    en ellas introdujo la técnica del sfumato, que consistía en prescindir de los contornos nítidos de la
    pintura del «Quattrocento» y difuminar los perfiles envolviendo las figuras en una especie de neblina
    característica. El propio Leonardo teorizó su concepción del arte pictórico como «imitación de la
    naturaleza» en un Tratado de pintura que sólo sería publicado en el siglo XVII.</p>
<p>Interesado por todas las ramas del saber y por todos los aspectos de la vida, los apuntes que dejó Leonardo
    (escritos de derecha a izquierda y salpicados de dibujos) contienen también incursiones en otros terrenos
    artísticos, como la música (en la que destacó tocando la lira) o la literatura. Según su criterio no debía
    existir separación entre el arte y la ciencia, como no la hubo en sus investigaciones, dirigidas de forma
    preferente hacia temas como la anatomía humana (avanzando en el conocimiento de los músculos, el ojo o la
    circulación de la sangre), la zoología (con especial atención a los mecanismos de vuelo de aves e insectos),
    la geología (con certeras observaciones sobre el origen de los fósiles), la astronomía (terreno en el que se
    anticipó a Galileo al defender que la Tierra era sólo un planeta del Sistema Solar), la física o la
    ingeniería.
</p>
<p>En este último terreno fue donde quedó más patente su talento de precursor a juicio de las generaciones
    posteriores, ya que Leonardo da Vinci concibió multitud de máquinas que no dio a conocer entre sus
    contemporáneos y que la técnica ha acabado por convertir en realidad siglos más tarde: aparatos de
    navegación (como un submarino, una campana de buceo y un salvavidas), máquinas voladoras (como el
    paracaídas, una especie de helicóptero y unas alas inspiradas en las de las aves para hacer volar a un
    hombre), máquinas de guerra (como un puente portátil y un anticipo del carro de combate del siglo XX), obras
    de ingeniería civil (como canalizaciones de agua o casas prefabricadas), herramientas y maquinaria de tipo
    industrial (como una hiladora, una laminadora, una draga o una cortadora de tornillos), fortificaciones,
    etcétera.</p>
<p>Sin embargo, el genio de Leonardo le encaminó a tal cantidad de objetivos diferentes que apenas ejerció
    influencia sobre la marcha de los distintos campos que tocó, aunque sí obtuvo un gran prestigio personal,
    que ha perdurado hasta nuestros días. Muchos de los proyectos que emprendió quedaron inacabados cuando otros
    nuevos atrajeron su interés; y, en cuanto a los inventos, se limitó a concebir ideas útiles, pero no se
    esforzó por plasmarlas en modelos viables que pudieran funcionar, por lo que la mayoría de sus
    investigaciones fueron especulaciones teóricas sin consecuencias prácticas. En ellas se concentró a partir
    de 1516 cuando, con las manos afectadas por una parálisis, pasó a vivir en Francia bajo la protección del
    rey Francisco I.</p>
<h3 class="centrar">Obras</h3>
<section class="pinturas" style="margin-bottom: 8rem">
    <div class="pintura">
        <img src="images/leo1.jpg" alt="">
    </div>
    <div class="pintura">
        <img src="images/leo2.jpg" alt="">
    </div>
    <div class="pintura">
        <img src="images/leo3.jpg" alt="">
    </div>
    <div class="pintura">
        <img src="images/leo4.jpg" alt="">
    </div>
    <div class="pintura">
        <img src="images/leo5.jpg" alt="">
    </div>
</section>
@endsection
@section('footer')
    @section('nombre', $nombre)
    @section('grupo', $grupo)
@stop