<form id="register-individual-evolution-form" method="POST" enctype="multipart/form-data">
    <div class="form-row">
        <div class="col-md-6 mb-3">
            <input type="text" class="form-control" placeholder="< What's your name? />" name="name" />
        </div>
        <div class="col-md-6 mb-3">
            <input type="text" class="form-control" placeholder="< And you are from which college? />" name="college" />
        </div>
    </div>
    <div class="form-row">
        <div class="col-md-6 mb-3">
            <input type="email" class="form-control" placeholder="< Please enter your email address here. />" name="email" />
        </div>
        <div class="col-md-6 mb-3 input-group">
            <div class="input-group-prepend">
                <div class="input-group-text">+91</div>
            </div>
            <input type="tel" class="form-control" placeholder="< Please enter your mobile number here. />" name="mobile" />
        </div>
    </div>
    <div class="form-group">
        <h3 class="mb-3">
            Events you'd like to participate in:
        </h3>
        <?php
        foreach ($evolutionEvents as $evolutionEvent) {
            if ($evolutionEvent->eventType == eventType::individual) {
                echo '
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" name="events[]" value="' . $evolutionEvent->eventSlug . '" id="' . $evolutionEvent->eventSlug . '-checkbox" />
                    <label class="form-check-label" for="' . $evolutionEvent->eventSlug . '-checkbox">
                        ' . $evolutionEvent->eventBrochureTitle . ' (' . $evolutionEvent->eventName . ')
                    </label>
                </div>
                ';
            }
        }
        ?>
    </div>
    <!-- submit -->
    <input type="hidden" name="eventType" value="individual">
    <input type="hidden" name="request" value="evolution">
    <input type="hidden" name="type" value="register">
    <button class="btn btn-primary w-100" type="submit">
        Submit
    </button>
</form>