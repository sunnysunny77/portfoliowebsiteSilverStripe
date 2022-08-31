
<!DOCTYPE html>
<html lang="en">

<head>
    
    <% base_tag %>
    $MetaTags
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
</head>

<body id="top">

    <a class="hide" href="#main" accesskey="S"> Skip navigation</a>

    <div class="title-bar grid-x" data-responsive-toggle="responsive-menu" data-hide-for="medium">

        <div data-toggle="responsive-menu" class="cell title-bar-title">

            <span role="img" 
                aria-label="Small Logo Verschoor Vision
                Imagi/enation" id="my-svg-m">
            </span>

            <i class="fi-list">
                <span class="hide">menu</span>
            </i>

        </div>
        
    </div>

    <header data-animate="hinge-in-from-top slide-out-up" class="top-bar" id="responsive-menu">

            <div class="top-bar-left show-for-medium">

                <span role="img" 
                    aria-label="Full Logo Verschoor Vision
                    Imagi/enation" 
                    id="my-svg">
                </span>

            </div>

            <nav class="grid-x top-bar-right">

                <ul class="cell grid-x align-spaced dropdown menu" data-dropdown-menu>

                    <% loop $Menu(1) %>

                    <li class="align-self-middle">
                        <a class="$LinkingMode" href="$Link" title="Go to the $Title page">$MenuTitle</a></li>
                    </li>         

                    <% end_loop %>

                </ul>

            </nav>

        </header>

        <main id="main" class="grid-y">  

