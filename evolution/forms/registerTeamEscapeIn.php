<form id="register-team-escape-in-evolution-form" method="POST" enctype="multipart/form-data">
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
            Details of your team member:
        </h3>
        <div class="form-row">
            <div class="col-md-6 mb-3">
                <input type="text" class="form-control" placeholder="< What's your name? />" name="team-member-name[]" />
            </div>
            <div class="col-md-6 mb-3 input-group">
                <div class="input-group-prepend">
                    <div class="input-group-text">+91</div>
                </div>
                <input type="tel" class="form-control" placeholder="< Please enter your mobile number here. />" name="team-member-mobile[]" />
            </div>
            <div class="col-md-6 mb-3">
                <input type="text" class="form-control" placeholder="< What's your name? />" name="team-member-name[]" />
            </div>
            <div class="col-md-6 mb-3 input-group">
                <div class="input-group-prepend">
                    <div class="input-group-text">+91</div>
                </div>
                <input type="tel" class="form-control" placeholder="< Please enter your mobile number here. />" name="team-member-mobile[]" />
            </div>
            <div class="col-md-6 mb-3">
                <input type="text" class="form-control" placeholder="< What's your name? />" name="team-member-name[]" />
            </div>
            <div class="col-md-6 mb-3 input-group">
                <div class="input-group-prepend">
                    <div class="input-group-text">+91</div>
                </div>
                <input type="tel" class="form-control" placeholder="< Please enter your mobile number here. />" name="team-member-mobile[]" />
            </div>
        </div>
    </div>
    <!-- submit -->
    <input type="hidden" name="eventType" value="team">
    <input type="hidden" name="event" value="escape-in">
    <input type="hidden" name="request" value="evolution">
    <input type="hidden" name="type" value="register">
    <button class="btn btn-primary w-100" type="submit">
        Submit
    </button>
</form>