<main id="main" class="grid-container grid-y">
    <h2 class="cell text-center medium-text-right">Get in touch</h2>
    <p class="text-center medium-text-right">
        <a href="mailto:$Email">$Email</a>
        <br>
        <a href="tel:$Phone">$Phone</a>
        <br>
        <a download href="$Vcard.URL">Download Contact</a>
        <br>
        Please try the forms below
    </p>
    <ul class="tabs grid-x align-center text-center" data-tabs id="tabs">
        <li class="small-3 text-center align-self-middle">
            <i class="fi-mail">
                <span class="hide">
                    Email
                    icon
                </span>
            </i>
        </li>
        <li id="isOne" class="tabs-title is-active small-3">
            <a id="isOneA" href="#panel1">
                <h3>Hire</h3>
            </a>
        </li>
        <li id="isTwo" class="tabs-title small-3">
            <a id="isTwoA" data-tabs-target="panel2" href="#panel2">
                <h3>Purchase</h3>
            </a>
        </li>
        <li id="isThree" class="tabs-title small-3">
            <a id="isThreeA" data-tabs-target="panel3" href="#panel3">
                <h3>Enquiry</h3>
            </a>
        </li>
    </ul>
    <div class="tabs-content" data-tabs-content="tabs">
        <div class="tabs-panel is-active" id="panel1">

            <form class="text-center" $HireForm.FormAttributes>

                <b>$HireForm.Message</b>

                <fieldset class="grid-x text-left">

                    <legend class="cell">Hire Form</legend>

                    <label class="cell small-6 medium-4">
                        First name
                        $HireForm.Fields.dataFieldByName(first-name)
                    </label>

                    <label class="cell small-6 medium-4">
                        Last name
                        $HireForm.Fields.dataFieldByName(last-name)
                    </label>

                    <label for="Form_HireForm_email" class="cell">
                        Email
                    </label>
                    $HireForm.Fields.dataFieldByName(email)

                    <label for="Form_HireForm_phone" class="cell">
                        Phone
                    </label>
                    $HireForm.Fields.dataFieldByName(phone)

                    <label class="cell">
                        Position description
                        $HireForm.Fields.dataFieldByName(text)       
                    </label>

                    $HireForm.Fields.FieldByName(SecurityID)

                </fieldset>

                <% loop $HireForm.Actions %>$Field<% end_loop %>

            </form>

        </div>
        <div class="tabs-panel" id="panel2">
            
            <form class="text-center" $PurchaseForm.FormAttributes>

                <b>$PurchaseForm.Message</b>

                <fieldset class="grid-x text-left">

                    <legend class="cell">Purchase Form</legend>

                    <label class="cell small-6 medium-4">
                        First name
                        $PurchaseForm.Fields.dataFieldByName(first-name)
                    </label>

                    <label class="cell small-6 medium-4">
                        Last name
                        $PurchaseForm.Fields.dataFieldByName(last-name)
                    </label>

                    <label for="Form_PurchaseForm_email" class="cell">
                        Email
                    </label>
                    $PurchaseForm.Fields.dataFieldByName(email)

                    <label for="Form_PurchaseForm_phone" class="cell">
                        Phone
                    </label>
                    $PurchaseForm.Fields.dataFieldByName(phone)

                    <label class="cell">
                        Outside Australia
                        $PurchaseForm.Fields.dataFieldByName(outside-aus)       
                    </label>

                     <label class="cell large-3">
                        Street address
                        $PurchaseForm.Fields.dataFieldByName(street)       
                    </label>

                     <label class="cell large-3">
                        Suburb
                        $PurchaseForm.Fields.dataFieldByName(suburb)   
                    </label>

                    <label class="cell small-6 large-3">
                        City
                          $PurchaseForm.Fields.dataFieldByName(city)   
                    </label>

                    <label class="cell small-6 large-3">
                        Post code
                        $PurchaseForm.Fields.dataFieldByName(post-code)  
                    </label>

                    <label class="cell">
                        Purchase details
                        $PurchaseForm.Fields.dataFieldByName(text)       
                    </label>

                     $PurchaseForm.Fields.FieldByName(SecurityID)
                    
                </fieldset>
            
                <% loop $PurchaseForm.Actions %>$Field<% end_loop %>

            </form>

        </div>
        <div class="tabs-panel" id="panel3">

        </div>
    </div>
    <div class="grid-x align-center text-right">
        <blockquote class="cell small-10 medium-6">
            He Thumbs through the pages of his life, his soul bites out
            with ancestry force and his life surrounds his every move as
            his child constantly guiding him from over his shoulder.
            <cite>Jerry Verschoor</cite>
        </blockquote>
    </div>
</main>