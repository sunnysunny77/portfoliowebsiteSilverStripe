<!DOCTYPE html>

<html lang="en">

<head>

    <% base_tag %>
    $MetaTags
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
</head>

<body>

    <header>

   <ul>
    <% loop $Menu(1) %>
        <li>
            <a href="$Link" title="Go to the $Title page" class="<% if $isCurrent %>current<% else_if $isSection %>section<% end_if %>">
                $MenuTitle
            </a>

            <% if $isSection %>
                <% if $Children %>
                    <ul class="secondary">
                        <% loop $Children %>
                            <li class="<% if $isCurrent %>current<% else_if $isSection %>section<% end_if %>"><a href="$Link">$MenuTitle</a></li>
                        <% end_loop %>
                    </ul>
                <% end_if %>
            <% end_if %>
        </li>
    <% end_loop %>
</ul>
    
    <a href=$AbsoluteBaseUR>Logo</a>
    
    </header>

    <main>