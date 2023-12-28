

<form id="contactForm" method="POST">
    <div class="form-container">
                <div class="form-group">
                    <input id="name" type="text" name="name" placeholder="Twoje imię *" class="form-control" required="">
                    <div class="invalid-feedback"></div>
                </div>
            <div class="row">
            <div class="col-md-6 col-lg-6">
                <div class="form-group">
                    <input id="email" type="email" name="email" placeholder="Email *" class="form-control" required="">
                    <div class="invalid-feedback"></div>
                </div>
            </div>
            <div class="col-md-6 col-lg-6">
                <div class="form-group">
                    <input id="phone" type="text" name="phone" placeholder="Telefon *" class="form-control" required="">
                    <div class="invalid-feedback"></div>
                </div>
            </div>
            </div>
            <div class="form-group">
                <textarea id="message" name="message" rows="5" placeholder="Wiadomość *" class="form-control"  required=""></textarea>
                <div class="invalid-feedback"></div>
            </div>

            <div class="form-group">
                <div class="form-check">
                    <input id="rule" type="checkbox" name="rule" placeholder="Rule" class="form-check-input">
                    <label for="rule" class="form-check-label">{!! getConstField('contact_form_rule') !!}</label>
                    <div class="invalid-feedback"></div>
                </div>
            </div>

            <div class="form-group">
                <div class="g-recaptcha" data-sitekey="{{$siteKey}}"></div>
                <div class="invalid-feedback"></div>
            </div>

            <input type="submit" value="Wyślij wiadomość" class="btn btn-outline-primary mb-3 button">

            <div id="alert" class="alert"></div>
        </div>
</form>



@push('scripts.body.bottom')
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>

    <script>
        document.getElementById('contactForm').addEventListener('submit', e => {
            e.preventDefault();
            submitForm(e.target);
        })
    </script>
@endpush
