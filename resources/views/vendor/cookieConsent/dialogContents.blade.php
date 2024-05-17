<div class="js-cookie-consent cookie-consent">

    <span class="cookie-consent__message">
        {!! trans('cookieConsent::texts.message') !!}
    </span>

    <button class="js-cookie-consent-agree cookie-consent__agree">
        {{ trans('cookieConsent::texts.agree') }}
    </button>

</div>

<div class="cookie-bar-wrap show js-cookie-consent cookie-consent">
    <div class="container d-flex justify-content-center">
        <div class="col-xl-10 col-lg-12">
            <div class="row justify-content-center">
                <div class="cookie-bar">
                    <div class="cookie-bar-text cookie-consent__message">
                        {!! trans('cookieConsent::texts.message') !!}afasdfad
                    </div> 
                    <div class="cookie-bar-action js-cookie-consent-agree cookie-consent__agree">
                        <button class="btn btn-primary btn-accept">
                            {{ trans('cookieConsent::texts.agree') }}
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


