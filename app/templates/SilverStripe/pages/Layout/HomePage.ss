<main id="main" class="grid-y">
    <section class="cell grid-container grid-x align-right text-center
        medium-text-right">
        <h2 class="cell">
            The Art
            of Jerry Verschoor
        </h2>
        <img src="images/home/sig.png" alt="signature">
    </section>
    <ul class="cell hover grid-x grid-container text-center menu
        align-center" data-tabs id="tabs">
        <li class="cell small-6 medium-4 tabs-title is-active">
            <a aria-label="Film" class="goto" href="#panel1">
                <figure class="hover-box">
                    <img src="images/home/film.jpg" alt="Film">
                    <figcaption>
                        <h3>FILM</h3>
                    </figcaption>
                </figure>
            </a>
        </li>
        <li class="cell small-6 medium-4 tabs-title">
            <a
                aria-label="Theatre"
                class="goto"
                data-tabs-target="panel2"
                href="#panel2">
                <figure class="hover-box">
                    <img src="images/home/theatre.jpg" alt="Theatre">
                    <figcaption>
                        <h3>THEATRE</h3>
                    </figcaption>
                </figure>
            </a>
        </li>
        <li class="cell small-6 medium-4 tabs-title">
            <a
                aria-label="Design"
                class="goto"
                data-tabs-target="panel3"
                href="#panel3">
                <figure class="hover-box">
                    <img src="images/home/design.jpg" alt="Design">
                    <figcaption>
                        <h3>DESIGN</h3>
                    </figcaption>
                </figure>
            </a>
        </li>
        <li class="cell small-6 medium-4 tabs-title">
            <a
                aria-label="Poetry"
                class="goto"
                data-tabs-target="panel4"
                href="#panel4">
                <figure class="hover-box">
                    <img src="images/home/poetry.jpg" alt="Poetry">
                    <figcaption>
                        <h3>POETRY</h3>
                    </figcaption>
                </figure>
            </a>
        </li>
        <li class="cell small-6 medium-4 tabs-title">
            <a
                aria-label="Sculptures"
                class="goto"
                data-tabs-target="panel5"
                href="#panel5">
                <figure class="hover-box">
                    <img src="images/home/sculptures.jpg"
                        alt="Sculpures">
                    <figcaption>
                        <h3>SCULPUTRES</h3>
                    </figcaption>
                </figure>
            </a>
        </li>
        <li class="cell small-6 medium-4 tabs-title">
            <a
                aria-label="Illustrations"
                class="goto"
                data-tabs-target="panel6"
                href="#panel6">
                <figure class="hover-box">
                    <img src="images/home/illustrations.jpg"
                        alt="Illustrations">
                    <figcaption>
                        <h3>ILLUSTRATIONS</h3>
                    </figcaption>
                </figure>
            </a>
        </li>
    </ul>
    <div class="tabs-content text-center" id="goto" data-tabs-content="tabs">
        <div class="tabs-panel is-active" id="panel1">
            <div class="grid-x align-right">
                <ul class="cell sticky-ul grid-x small-12 medium-4
                    large-3 text-left
                    vertical menu
                    align-top">
                    <li>
                        <i class="fi-thumbnails">
                            <span class="hide">Gallery icon</span>
                        </i>
                    </li>
                    <li>
                        Film:
                        <ul class="nested vertical menu">
                            <li>
                                <i class="fi-list">
                                    <span class="hide">List icon</span>
                                </i>
                                <a href="#storyboard">Storyboarding</a>
                            </li>
                            <li>
                                <i class="fi-list">
                                    <span class="hide">List icon</span>
                                </i>
                                <a href="#concept">
                                    Concept
                                    art
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <i class="fi-list">
                            <span class="hide">List icon</span>
                        </i>
                        <a href="#independent">
                            Independent
                            creations
                        </a>
                    </li>
                    <li class="cell small-8 medium-10 last">
                        * Photoshop
                        images are hand drawn, all work is
                        drawn and illustrated by hand
                        digital or not.
                    </li>
                    <li class="show-for-medium">
                        <a href="#top">
                            <br>
                            <br>
                            <i class="fi-eject">
                                <span class="hide">Eject icon</span>
                            </i>
                            Return to menu
                        </a>
                    </li>
                </ul>
                <div class="cell small-12 medium-8 large-9 grid-x
                    text-center align-center">
                    <section class="cell grid-x
                        text-center align-center">
                        <h4 id="storyboard" class="cell text-right">Storyboarding</h4>
                        <a class="cell top-link
                            show-for-small-only
                            text-right" href="#top" aria-label="Return to menu">
                            <i class="fi-eject">
                                <span class="hide">Eject icon</span>
                            </i>
                        </a>
                        <!-- display all added objects -->
                        <% loop $StoryboardObjs %>
                        <div>
                    
                            <img class="gallery" src="$StoryboardObj.URL"
                                width="$StoryboardObj.Width"
                                height="$StoryboardObj.Height"
                                loading="lazy" alt="$ImageTitle" />
                    
                        </div>
                        <% end_loop %>
                    </section>
                    <section class="cell grid-x
                        text-center align-center">
                        <h4 id="concept" class="cell text-right">
                            Concept
                            art
                        </h4>
                        <a class="cell top-link
                            show-for-small-only
                            text-right" href="#top" aria-label="Return
                            to menu">
                            <i class="fi-eject">
                                <span class="hide">Eject icon</span>
                            </i>
                        </a>
                        <!-- display all added objects -->
                        <% loop ConceptArtObjs %>
                        <div>
                    
                            <img class="gallery"
                                src="$ConceptArtObj.URL"
                                width="$ConceptArtObj.Width"
                                height="$ConceptArtObj.Height"
                                loading="lazy" alt="$ImageTitle" />
                        </div>
                        <% end_loop %>
                    </section>
                    <section class="cell grid-x
                        text-center
                        align-center">
                        <h4 id="independent" class="cell
                            text-right">
                            Independent
                            creations
                        </h4>
                        <a class="cell top-link
                            show-for-small-only
                            text-right" href="#top"
                            aria-label="Return
                            to menu">
                            <i class="fi-eject">
                                <span class="hide">Eject icon</span>
                            </i>
                        </a>
                        <!-- display all added objects -->
                        <% loop IndependantCreationsObjs %>
                        <div>
                     
                            <img class="gallery"
                                src="$IndependantCreationsObj.URL"
                                width="$IndependantCreationsObj.Width"
                                height="$IndependantCreationsObj.Height"
                                loading="lazy" alt="$ImageTitle" />
                     
                        </div>
                         <% end_loop %>
                    </section>
                </div>
            </div>
        </div>
        <div class="tabs-panel" id="panel2">
            <div class="grid-x align-right">
                <ul class="cell sticky-ul grid-x small-12
                    medium-4
                    large-3 text-left
                    vertical menu
                    align-top">
                    <li>
                        <i class="fi-thumbnails">
                            <span class="hide">Gallery icon</span>
                        </i>
                    </li>
                    <li>Theatre:</li>
                    <li class="cell small-8 medium-10 last">
                        * Photoshop
                        images are hand drawn, all work is
                        drawn and illustrated by hand
                        digital or not.
                    </li>
                    <li class="show-for-medium">
                        <a href="#top">
                            <br>
                            <br>
                            <i class="fi-eject">
                                <span class="hide">Eject icon</span>
                            </i>
                            Return to menu
                        </a>
                    </li>
                </ul>
                <section class="cell small-12 medium-8 large-9
                    grid-x
                    text-center align-center">
                    <h4 class="cell text-right"> Theatre</h4>
                    <a class="cell top-link
                        show-for-small-only
                        text-right" href="#top"
                        aria-label="Return to
                        menu">
                        <i class="fi-eject">
                            <span class="hide">Eject icon</span>
                        </i>
                    </a>
                    <!-- display all added objects -->
                    <% loop TheatreObjs %>
                    <div>
                  
                        <img class="gallery"
                            src="$TheatreObj.URL"
                            width="$TheatreObj.Width"
                            height="$TheatreObj.Height"
                            loading="lazy" alt="$ImageTitle" />
                  
                    </div>
                     <% end_loop %>
                </section>
            </div>
        </div>
        <div class="tabs-panel" id="panel3">
            <div class="grid-x align-right">
                <ul class="cell sticky-ul grid-x small-12
                    medium-4
                    large-3 text-left
                    vertical menu
                    align-top">
                    <li>
                        <i class="fi-thumbnails">
                            <span class="hide">Gallery icon</span>
                        </i>
                    </li>
                    <li>Design:</li>
                    <li class="cell small-8 medium-10 last">
                        * Photoshop
                        images are hand drawn, all work is
                        drawn and illustrated by hand
                        digital or not.
                    </li>
                    <li class="show-for-medium">
                        <a href="#top">
                            <br>
                            <br>
                            <i class="fi-eject">
                                <span class="hide">Eject icon</span>
                            </i>
                            Return to menu
                        </a>
                    </li>
                </ul>
                <section class="cell small-12 medium-8 large-9
                    grid-x
                    text-center align-center">
                    <h4 class="cell text-right">Design</h4>
                    <a class="cell top-link
                        show-for-small-only
                        text-right" href="#top"
                        aria-label="Return to
                        menu">
                        <i class="fi-eject">
                            <span class="hide">Eject icon</span>
                        </i>
                    </a>
                    <!-- display all added objects -->
                    <% loop DesignObjs %>
                    <div>
                   
                        <img class="gallery"
                            src="$DesignObj.URL"
                            width="$DesignObj.Width"
                            height="$DesignObj.Height"
                            loading="lazy" alt="$ImageTitle" />
                   
                    </div>
                     <% end_loop %>                   
                </section>
            </div>
        </div>
        <div class="tabs-panel" id="panel4">
            <div class="grid-x align-right">
                <ul class="cell sticky-ul grid-x small-12
                    medium-4
                    large-3 text-left
                    vertical menu
                    align-top">
                    <li>
                        <i class="fi-thumbnails">
                            <span class="hide">Gallery icon</span>
                        </i>
                    </li>
                    <li>
                        Poetry:
                        <ul class="nested vertical menu">
                            <li>
                                <i class="fi-list">
                                    <span class="hide">List icon</span>
                                </i>
                                <a href="#poetry">Poems</a>
                            </li>
                            <li>
                                <i class="fi-list">
                                    <span class="hide">List icon</span>
                                </i>
                                <a href="#illustrated-poetry">
                                    Illustrated
                                    poetry
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="cell small-8 medium-10 last">
                        * Photoshop
                        images are hand drawn, all work
                        is
                        drawn and illustrated by hand
                        digital or not.
                    </li>
                    <li class="show-for-medium">
                        <a href="#top">
                            <br>
                            <br>
                            <i class="fi-eject">
                                <span class="hide">Eject icon</span>
                            </i>
                            Return to menu
                        </a>
                    </li>
                </ul>
                <div class="cell small-12 medium-8 large-9
                    grid-x
                    text-center align-center">
                    <section class="cell grid-x
                        text-center align-center">
                        <h4 id="poetry" class="cell text-right">Poems</h4>
                        <a class="cell top-link
                            show-for-small-only
                            text-right" href="#top"
                            aria-label="Return
                            to menu">
                            <i class="fi-eject">
                                <span class="hide">Eject icon</span>
                            </i>
                        </a>
                        <!-- display all added objects -->
                        <% loop PoemsObjs %>
                        <div>
                        
                            <img class="gallery"
                                src="$PoemsObj.URL"
                                width="$PoemsObj.Width"
                                height="$PoemsObj.Height"
                                loading="lazy" alt="$ImageTitle" />
                        
                        </div>
                         <% end_loop %>       
                    </section>
                    <section class="cell grid-x
                        text-center align-center">
                        <h4 id="illustrated-poetry" class="cell
                            text-right">
                            Illustrated
                            poetry
                        </h4>
                        <a class="cell top-link
                            show-for-small-only
                            text-right" href="#top"
                            aria-label="Return
                            to menu">
                            <i class="fi-eject">
                                <span class="hide">Eject icon</span>
                            </i>
                        </a>
                        <!-- display all added objects -->
                        <% loop IllustratedPoetryObjs %>
                        <div>
                        
                            <img class="gallery"
                                src="$IllustratedPoetryObj.URL"
                                width="$IllustratedPoetryObj.Width"
                                height="$IllustratedPoetryObj.Height"
                                loading="lazy" alt="$ImageTitle" />
                        
                        </div>
                        <% end_loop %>
                    </section>
                </div>
            </div>
        </div>
        <div class="tabs-panel" id="panel5">
            <div class="grid-x align-right">
                <ul class="cell sticky-ul grid-x small-12
                    medium-4
                    large-3 text-left
                    vertical menu
                    align-top">
                    <li>
                        <i class="fi-thumbnails">
                            <span class="hide">Gallery icon</span>
                        </i>
                    </li>
                    <li>Sculptures:</li>
                    <li class="cell small-8 medium-10 last">
                        * Photoshop
                        images are hand drawn, all work is
                        drawn and illustrated by hand
                        digital or not.
                    </li>
                    <li class="show-for-medium">
                        <a href="#top">
                            <br>
                            <br>
                            <i class="fi-eject">
                                <span class="hide">Eject icon</span>
                            </i>
                            Return to menu
                        </a>
                    </li>
                </ul>
                <section class="cell small-12 medium-8 large-9
                    grid-x
                    text-center align-center">
                    <h4 class="cell text-right">Sculptures</h4>
                    <a class="cell top-link
                        show-for-small-only
                        text-right" href="#top"
                        aria-label="Return to
                        menu">
                        <i class="fi-eject">
                            <span class="hide">Eject icon</span>
                        </i>
                    </a>
                    <!-- display all added objects -->
                    <% loop SculpturesObjs %>
                    <div>
                    
                        <img class="gallery"
                            src="$SculpturesObj.URL"
                            width="$SculpturesObj.Width"
                            height="$SculpturesObj.Height"
                            loading="lazy" alt="$ImageTitle" />
                    
                    </div>
                    <% end_loop %>
                </section>
            </div>
        </div>
        <div class="tabs-panel" id="panel6">
            <div class="grid-x align-right">
                <ul class="cell sticky-ul grid-x small-12
                    medium-4
                    large-3 text-left
                    vertical menu
                    align-top">
                    <li>
                        <i class="fi-thumbnails">
                            <span class="hide">Gallery icon</span>
                        </i>
                    </li>
                    <li>Illustrations:</li>
                    <li class="cell small-8 medium-10 last">
                        * Photoshop
                        images are hand drawn, all work
                        is
                        drawn and illustrated by hand
                        digital or not.
                    </li>
                    <li class="show-for-medium">
                        <a href="#top">
                            <br>
                            <br>
                            <i class="fi-eject">
                                <span class="hide">Eject icon</span>
                            </i>
                            Return to menu
                        </a>
                    </li>
                </ul>
                <section class="cell small-12 medium-8 large-9
                    grid-x
                    text-center align-center">
                    <h4 class="cell text-right">Illustrations</h4>
                    <a class="cell
                        top-link show-for-small-only
                        text-right" href="#top"
                        aria-label="Return to
                        menu">
                        <i class="fi-eject">
                            <span class="hide">Eject icon</span>
                        </i>
                    </a>
                    <!-- display all added objects -->
                    <% loop IllustrationsObjs %>
                    <div>
                    
                        <img class="gallery"
                            src="$IllustrationsObj.URL"
                            width="$IllustrationsObj.Width"
                            height="$IllustrationsObj.Height"
                            loading="lazy" alt="$ImageTitle" />
                    
                    </div>
                    <% end_loop %>
                </section>
            </div>
        </div>
    </div>
</main>