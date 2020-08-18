<form class="custom-form" id="register-team-crisimulation-evolution-form" method="POST" enctype="multipart/form-data">
    <div class="form-row">
        <div class="col-md-6 mb-3">
            <input type="text" class="form-control" placeholder="< What's your name? />" name="name" required />
        </div>
        <div class="col-md-6 mb-3">
            <input type="text" class="form-control" placeholder="< And you are from which college? />" name="college" required />
        </div>
    </div>
    <div class="form-row">
        <div class="col-md-6 mb-3">
            <input type="email" class="form-control" placeholder="< Please enter your email address here. />" name="email" required />
        </div>
        <div class="col-md-6 mb-3 input-group">
            <div class="input-group-prepend">
                <div class="input-group-text">+91</div>
            </div>
            <input type="tel" class="form-control" placeholder="< Please enter your mobile number here. />" name="mobile" required />
        </div>
    </div>
    <div class="form-group">
        <h3 class="mb-3">
            Details of your team member:
        </h3>
        <div class="form-row">
            <div class="col-md-6 mb-3">
                <input type="text" class="form-control" placeholder="< Name? />" name="team-member-name[]" required />
            </div>
            <div class="col-md-6 mb-3 input-group">
                <div class="input-group-prepend">
                    <div class="input-group-text">+91</div>
                </div>
                <input type="tel" class="form-control" placeholder="< Mobile Number. />" name="team-member-mobile[]" required />
            </div>
        </div>
    </div>
    <!-- submit -->
    <input type="hidden" name="eventType" value="team">
    <input type="hidden" name="event" value="crisimulation">
    <input type="hidden" name="request" value="evolution">
    <input type="hidden" name="type" value="register">
    <button class="btn btn-custom-primary w-100" type="submit">
        Submit
    </button>
</form>