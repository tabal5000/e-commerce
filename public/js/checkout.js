// Create a Stripe client
var stripe = Stripe('pk_test_oUwie7VaW9olzEqoxTjNa9GF');

// Create an instance of Elements
var elements = stripe.elements();

// Custom styling can be passed to options when creating an Element.
// (Note that this demo uses a wider set of styles than the guide below.)
var style = {
  base: {
    color: '#32325d',
    lineHeight: '18px',
    fontFamily: '"Helvetica Neue", Helvetica, sans-serif',
    fontSmoothing: 'antialiased',
    fontSize: '16px',
    '::placeholder': {
      color: '#aab7c4'
    }
  },
  invalid: {
    color: '#fa755a',
    iconColor: '#fa755a'
  }
};

// Create an instance of the card Element
var card = elements.create('card', { hidePostalCode: true, style: style});

// Add an instance of the card Element into the `card-element` <div>
card.mount('#card-element');

// Handle form submission
var $form = document.getElementById('checkout-form');

document.querySelector('#checkout-form').addEventListener('submit', function(e) {
  e.preventDefault();
  var form = document.querySelector('#checkout-form');
  var extraDetails = {
    name: form.querySelector('input[name=name]').value,
  };
  stripe.createToken(card, extraDetails).then(setOutcome);
});

card.on('change', function(event) {
  setOutcome(event);
});

function setOutcome(result) {
  var errorElement = document.querySelector('.error');
  errorElement.classList.remove('visible');
  if (result.token) {
    $('<input>').attr({
        type: 'hidden',
        id: 'stripeToken',
        name: 'stripeToken',
        value: result.token.id
    }).appendTo('form');
    //$form.append($('<input type="hidden" name="stripeToken"/>').val(result.token));
    $form.submit();
    // Use the token to create a charge or a customer
    // https://stripe.com/docs/charges
  } else if (result.error) {
    errorElement.textContent = result.error.message;
    errorElement.classList.add('visible');
  }
}
