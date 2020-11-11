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
<img src="images/pintor4.jpg" alt="Da Vinci" style="float: left; margin-right: 20px; margin-bottom: 20px;">
<!-- texto -->
<p>(Groot-Zundert, Países Bajos, 1853 - Auvers-sur-Oise, Francia, 1890) Pintor holandés. En las décadas finales
    del siglo XIX, el impresionismo marcó el inicio de una profunda renovación de las artes plásticas que
    tendría continuidad en la sucesión de ismos o corrientes del arte contemporáneo. Algunos de los mejores
    maestros de este periodo, sin embargo, no pueden encasillarse en ninguna escuela, y abrieron por sí solos
    nuevos caminos; entre ellos, el holandés Vincent van Gogh ocupa una posición señera.</p>
<p>Encarnación del artista torturado e incomprendido, Van Gogh no llegó a vender más que uno de aquellos
    centenares de cuadros suyos que actualmente alcanzan desorbitadas cotizaciones en las subastas. El
    reconocimiento de su obra no empezó hasta un año después de su muerte, a raíz de una exposición
    retrospectiva organizada por el Salón de los Independientes; en nuestros días, Van Gogh es considerado
    unánimemente uno de los grandes genios de la pintura moderna. Su producción ejerció una influencia decisiva
    en todo el arte del siglo XX, especialmente en el fauvismo y el expresionismo; y tras más de un siglo de
    experimentos artísticos, la pincelada tosca y atormentada del artista holandés, alimentada por el vigor de
    su pasión interior, conserva toda su fascinante fuerza expresiva.</p>
<p>Vincent van Gogh era el mayor de los seis hijos de un pastor protestante, y mantuvo con su hermano Theo,
    cuatro años menor que él, una relación que sería determinante en su existencia y en su trayectoria
    artística. La correspondencia que ambos intercambiaron a lo largo de sus vidas testimonia la intimidad de
    esta relación y las pasiones y angustias humanas y creativas que atormentaron a Van Gogh en sus últimos
    años. Tras recibir una esmerada educación en un internado privado, a los dieciséis años entró como aprendiz
    en la filial de La Haya de la galería de arte parisina Goupil, una sociedad de comerciantes de arte fundada
    por su tío Vincent.

    En 1873 pasó a la sucursal de la galería Goupil en Londres, donde hubo de padecer el primero de sus fracasos
    sentimentales; en 1875 fue trasladado a la filial parisina; en 1876 se despidió y regresó a Holanda. Trabajó
    después como profesor, ayudante de un pastor metodista y empleado de una librería; ninguno de estos empleos
    le duró mucho tiempo. Por aquel entonces sentía sobre todo la necesidad espiritual de entregarse a sus
    semejantes; de hecho, siempre había querido ser pastor, como su padre, y tal vocación lo llevó a Ámsterdam
    para seguir los estudios de teología, que suspendió.

    Pasó entonces a la Escuela de Evangelización Práctica de Bruselas, y en 1878 fue enviado por sus superiores
    a la zona minera del Borinage. Establecido en el pueblo de Pâturages, próximo a Mons, realizó una serie de
    dibujos de los mineros. La Escuela de Evangelización lo expulsó por su excesiva implicación: impresionado
    por sus infrahumanas penurias, Van Gogh llegó a dar a los mineros lo poco que tenía y a vivir más pobremente
    que ellos.
</p>
<p>El contacto con tal miseria y desolación socavó su fe, y Van Gogh pasó esta crisis espiritual vagando por
    Francia y Bélgica y escribiendo a su hermano Theo, que ocupaba ahora su antiguo empleo en la galería Goupil
    de París. Animado por Theo, en 1880 decidió dedicarse a la pintura y fue a Bruselas, donde conoció al pintor
    Anthon Van Rappard (con quien mantendría una larga relación) y llevó a cabo las primeras copias de Millet.

    Tras otro fracaso sentimental con su prima Kate, conoció a una prostituta llamada Sien, cuyos infortunios
    despertaron su siempre infinita compasión. En 1882 vivió en Schenkweg con Sien y con sus hijos, que tomó a
    su cargo; seguía dibujando, y realizó sus primeros cuadros. Tras descubrir Theo su relación con Sien, rompió
    con ella a instancias de su hermano y marchó al norte, donde permaneció hasta finales de 1883. Fue luego a
    Nuenen, donde se aproximó de nuevo a su familia y pintó febrilmente; de esos dos años (1884-1885) son sus
    primeras telas de importancia. Cuadros como Los comedores de patatas (1885), diversas representaciones de
    tejedores y cabezas y figuras de campesinos forman, junto con innumerables dibujos, el conjunto de obras de
    esta etapa de formación.</p>
<p>En 1886 se reunió con su hermano en París; allí, en la capital artística de Europa, el contacto con el
    impresionismo reorientó visiblemente su estilo. Se relacionó con los impresionistas y postimpresionistas en
    la tienda de colores del "père Tanguy" (de quien pintó el conocido retrato) y descubrió el arte japonés. Su
    hermano le presentó a Camille Pissarro, Georges Seurat y Paul Gauguin; conoció asimismo a Toulouse-Lautrec y
    Émile Bernard, y bajo ese nuevo ambiente llegaría a la definición de su pintura. Su paleta se tornó
    definitivamente clara y colorista y sus composiciones menos tradicionales, dando forma a su personal visión
    del postimpresionismo.</p>
<p>Los consejos de su hermano y su interés por el color y por la captación de la naturaleza lo indujeron a
    trasladarse en febrero de 1888 a Arlés, en la soleada Provenza, donde su obra fue progresivamente expresando
    con mayor claridad sus sentimientos sobre lo representado y sus propios estados de ánimo. Trabajó
    intensamente, pintó la mayoría de sus telas más célebres y puras y escribió sus páginas más claras y
    profundas. Pero la soledad se le hacía insoportable, y con el propósito de formar un taller colectivo, Van
    Gogh alquiló una casa donde invitó a los artistas con quienes compartía intereses.

    A instancias suyas, Paul Gauguin se instaló en la "casa amarilla" (así llamada por el color de sus paredes)
    en octubre de 1888, pero la relación fue haciéndose más y más difícil por el fuerte temperamento de ambos.
    En el transcurso de una discusión, Van Gogh llegó a atacar a Gauguin con una navaja de afeitar; luego,
    arrepentido de aquel arranque, se cortó el lóbulo de la oreja para expiar su culpa y lo hizo llegar a
    Gauguin, quien, lejos de conmoverse ante aquella muestra de contrición, lo juzgaba ya como un loco peligroso
    con el que no tenía ninguna intención de convivir. De este confuso lance (pues existen otras versiones del
    mismo) dan fe dos célebres autorretratos del pintor con una oreja vendada; en el segundo de ellos aparece
    fumando melancólicamente su pipa, ensimismado y sombrío.</p>
<p>Tras la marcha de Gauguin, Theo le visitó e hizo que ingresara en el hospital de Arlés. En mayo de 1889, ante
    el temor a perder su capacidad para trabajar, pidió ser ingresado en el hospital psiquiátrico de
    Saint-Rémy-de-Provence, donde permaneció doce meses. También en este período Van Gogh pintó intensamente;
    tras sufrir diversos ataques y ante la imposibilidad de salir al exterior, realizó obras relacionadas con el
    hospital, retratos de médicos y reinterpretaciones de obras de Rembrandt, Delacroix y Millet. La pérdida de
    contacto con la realidad y una progresiva sensación de tristeza son las claves de este período, durante el
    cual desarrolló un estilo basado en formas dinámicas y en el uso vigoroso de la línea, de lo cual resultó
    una pintura más intrépida y visionaria que la de Arlés.

    Sin conseguir superar el estado de melancolía y soledad en que se encontraba, en mayo de 1890 se trasladó a
    París para visitar a su hermano Theo. Por consejo de éste viajó a Auvers-sur-Oise, donde fue sometido a un
    tratamiento homeopático por el doctor y pintor aficionado Paul-Ferdinand Gachet. En este pequeño pueblo
    retrató el paisaje y sus habitantes, intentando captar su espíritu. Su estilo evolucionó formalmente hacia
    una pintura más expresiva y lírica, de formas imprecisas y colores más brillantes.</p>
<p>Pese a que unos meses más tarde el doctor Gachet consideró que se encontraba plenamente curado, su estado de
    ánimo no mejoró; asediado por sentimientos de culpa debidos a la dependencia de su hermano Theo y a su
    fracaso como artista, su espíritu se encontraba irremediablemente perturbado por una tristeza inconsolable.
    El 27 de julio de 1890, en el silencio de los campos bajo el sol, Van Gogh se descerrajó un disparo en el
    pecho; murió dos días más tarde, sin haber cumplido los treinta y siete años. Al cabo de seis meses, sumido
    en el dolor, le siguió su hermano Theo, enterrado a su lado en el pequeño cementerio de Auvers.</p>

<h3 class="centrar">Obras</h3>
<section class="pinturas" style="margin-bottom: 8rem">
    <div class="pintura">
        <img src="images/van1.jpg" alt="">
    </div>
    <div class="pintura">
        <img src="images/van2.jpg" alt="">
    </div>
    <div class="pintura">
        <img src="images/van3.jpg" alt="">
    </div>
    <div class="pintura">
        <img src="images/van4.jpg" alt="">
    </div>
    <div class="pintura">
        <img src="images/van5.jpg" alt="">
    </div>
</section>
@endsection
@section('footer')
    @section('nombre', $nombre)
    @section('grupo', $grupo)
@stop