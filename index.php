<!DOCTYPE html>
<html lang="zxx">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exploitation des tableaux avec PHP</title>
    <meta name="description" content="Exercice sur l'exploitation des tableaux associatifs en PHP.">
    <link rel="stylesheet" href="./webfiles/css/style.css">
</head>
<body>

    <header>
        <nav>
            <img src="./src/img/Logo.png" alt="logo du site web">
            <ul>
                <li><a href="#Mercure" title="Redirection vers l'ancre de mercure">Mercure</a></li>
                <li><a href="#Vénus" title="Redirection vers l'ancre de vénus">Vénus</a></li>
                <li><a href="#Terre" title="Redirection vers l'ancre de la terre">La Terre</a></li>
                <li><a href="#Mars" title="Redirection vers l'ancre de mars">Mars</a></li>
                <li><a href="#Jupiter" title="Redirection vers l'ancre de jupiter">Jupiter</a></li>
                <li><a href="#Saturne" title="Redirection vers l'ancre de saturne">Saturne</a></li>
                <li><a href="#Uranus" title="Redirection vers l'ancre de uranus">Uranus</a></li>
                <li><a href="#Neptune" title="Redirection vers l'ancre de neptune">Neptune</a></li>
            </ul>
        </nav>
        <img src="./src/img/header.png" alt="Arrière plan de l'intégration des planètes" id="bg">
    </header>

    <main>
        <?php
            $planets = [
                        "Mercure" => ["Téllurique", "Antiquité", "Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus nulla perspiciatis temporibus officiis autem odit obcaecati voluptas natus ad dolorum? Nesciunt, aliquid deserunt. Aut dolor rerum inventore totam assumenda optio. Mollitia praesentium voluptatem quod, laudantium ipsam minima eveniet odio dolorum impedit sapiente accusantium recusandae asperiores! Porro assumenda cumque harum ipsa, quia ullam essesint expedita excepturi, nobis optio saepe deserunt?"],
                        "Vénus" => ["Téllurique", "Antiquité", "Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus nulla perspiciatis temporibus officiis autem odit obcaecati voluptas natus ad dolorum? Nesciunt, aliquid deserunt. Aut dolor rerum inventore totam assumenda optio. Mollitia praesentium voluptatem quod, laudantium ipsam minima eveniet odio dolorum impedit sapiente accusantium recusandae asperiores! Porro assumenda cumque harum ipsa, quia ullam essesint expedita excepturi, nobis optio saepe deserunt?"],
                        "Terre" => ["Téllurique", "Antiquité", "Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus nulla perspiciatis temporibus officiis autem odit obcaecati voluptas natus ad dolorum? Nesciunt, aliquid deserunt. Aut dolor rerum inventore totam assumenda optio. Mollitia praesentium voluptatem quod, laudantium ipsam minima eveniet odio dolorum impedit sapiente accusantium recusandae asperiores! Porro assumenda cumque harum ipsa, quia ullam essesint expedita excepturi, nobis optio saepe deserunt?"],
                        "Mars" => ["Téllurique", "Antiquité", "Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus nulla perspiciatis temporibus officiis autem odit obcaecati voluptas natus ad dolorum? Nesciunt, aliquid deserunt. Aut dolor rerum inventore totam assumenda optio. Mollitia praesentium voluptatem quod, laudantium ipsam minima eveniet odio dolorum impedit sapiente accusantium recusandae asperiores! Porro assumenda cumque harum ipsa, quia ullam essesint expedita excepturi, nobis optio saepe deserunt?"],
                        "Jupiter" => ["Gazeuse", "Antiquité", "Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus nulla perspiciatis temporibus officiis autem odit obcaecati voluptas natus ad dolorum? Nesciunt, aliquid deserunt. Aut dolor rerum inventore totam assumenda optio. Mollitia praesentium voluptatem quod, laudantium ipsam minima eveniet odio dolorum impedit sapiente accusantium recusandae asperiores! Porro assumenda cumque harum ipsa, quia ullam essesint expedita excepturi, nobis optio saepe deserunt?"],
                        "Saturne" => ["Gazeuse", "Antiquité", "Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus nulla perspiciatis temporibus officiis autem odit obcaecati voluptas natus ad dolorum? Nesciunt, aliquid deserunt. Aut dolor rerum inventore totam assumenda optio. Mollitia praesentium voluptatem quod, laudantium ipsam minima eveniet odio dolorum impedit sapiente accusantium recusandae asperiores! Porro assumenda cumque harum ipsa, quia ullam essesint expedita excepturi, nobis optio saepe deserunt?"],
                        "Uranus" => ["Gazeuse", "1846", "Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus nulla perspiciatis temporibus officiis autem odit obcaecati voluptas natus ad dolorum? Nesciunt, aliquid deserunt. Aut dolor rerum inventore totam assumenda optio. Mollitia praesentium voluptatem quod, laudantium ipsam minima eveniet odio dolorum impedit sapiente accusantium recusandae asperiores! Porro assumenda cumque harum ipsa, quia ullam essesint expedita excepturi, nobis optio saepe deserunt?"],
                        "Neptune" => ["Gazeuse", "1781", "Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus nulla perspiciatis temporibus officiis autem odit obcaecati voluptas natus ad dolorum? Nesciunt, aliquid deserunt. Aut dolor rerum inventore totam assumenda optio. Mollitia praesentium voluptatem quod, laudantium ipsam minima eveniet odio dolorum impedit sapiente accusantium recusandae asperiores! Porro assumenda cumque harum ipsa, quia ullam essesint expedita excepturi, nobis optio saepe deserunt?"],
            ];
        ?>

        <!-- Structure de base de chaque planète. -->
        <div class="article">
            <img src="./src/img/Mercure.png" alt="Illustration de Mercure">
            <section>
                <h2>Mercure</h2>
                <div>
                    <span>Téllurique</span>
                    <span>Antiquité</span>
                </div>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                    Minus nulla perspiciatis temporibus officiis autem odit 
                    obcaecati voluptas natus ad dolorum? Nesciunt, aliquid 
                    deserunt. Aut dolor rerum inventore totam assumenda optio. 
                    Mollitia praesentium voluptatem quod, laudantium ipsam minima 
                    eveniet odio dolorum impedit sapiente accusantium recusandae 
                    asperiores! Porro assumenda cumque harum ipsa, quia ullam 
                    essesint expedita excepturi, nobis optio saepe deserunt?
                </p>
            </section>
        </div>
        <!-- Fin de la structure de base de chaque planète. -->

    </main>

    <footer>
        <div class="container">
            <section>
                <h3>Les Télluriques</h3>
                <ul>
                    <li><a href="#Mercure" title="Redirection vers l'ancre de mercure">Mercure</a></li>
                    <li><a href="#Vénus" title="Redirection vers l'ancre de vénus">Vénus</a></li>
                    <li><a href="#Terre" title="Redirection vers l'ancre de la terre">La Terre</a></li>
                    <li><a href="#Mars" title="Redirection vers l'ancre de mars">Mars</a></li>
                </ul>
            </section>
            <section>
                <h3>Les gazeuses</h3>
                <ul>
                    <li><a href="#Jupiter" title="Redirection vers l'ancre de jupiter">Jupiter</a></li>
                    <li><a href="#Saturne" title="Redirection vers l'ancre de saturne">Saturne</a></li>
                    <li><a href="#Uranus" title="Redirection vers l'ancre de uranus">Uranus</a></li>
                    <li><a href="#Neptune" title="Redirection vers l'ancre de neptune">Neptune</a></li>
                </ul>
            </section>
            <section>
                <h3>Partenaires</h3>
                <ul>
                    <li><a href="https://www.cieletespace.fr/" title="Redirection vers ciel & espace" target="_blank">Ciel & Espace</a></li>
                    <li><a href="https://www.cieletespace.fr/" title="Redirection vers le journal du ciel" target="_blank">Le Journal du Ciel</a></li>
                </ul>
            </section>
        </div>
        <p>&#169;&nbsp;-&nbsp;Intégration réalisée par <a href="https://yohannmoy.fr/" title="Redirection vers le site de votre formateur" target="_blank">Yohann MOY</a> dans le cadre d'un exercice de PHP.</p>
    </footer>
    
</body>
</html>
