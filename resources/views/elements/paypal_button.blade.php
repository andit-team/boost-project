<div id="paypal-button-container" class="btn"></div>
<br>
<small>Start your subscriptions..</small>
@push('js')
<script src="https://www.paypal.com/sdk/js?client-id=AXWcAX4EbepJp9nrf6l03Tko2WyBh40QA3zVZWTP0vGLJeFQaGWJE_attOLzD0F9ctEHMvn2Uepuu7gS"></script>
<script>
    paypal.Buttons({
        style: {
            layout: 'horizontal',
            height: 40,
            label:'pay'
            },

        createOrder: function(data, actions) {
        return actions.order.create({
            purchase_units: [{
                amount: {
                    value: {{$amount}}
                    // value: '0.02'
                },
            }]
        });
        },
        onApprove: function(data, actions) {
        return actions.order.capture().then(function(details) {
            console.log(details);
            // alert('Transaction completed by ' + details.payer.name.given_name);
            // Call your server to save the transaction
            return fetch("{{ url('strans') }}", {
            method: 'post',
            headers: {
                'content-type': 'application/json'
            },
            body: JSON.stringify({
                data: details,
                order_amount : {{$amount}},
                order_invoice: '{{$order_invoice}}',
                _token:'{{csrf_token()}}',
            })
            }).then(function (response){
                console.log(response);
                if(response.status == 200){
                    // $('#ajaxRespond').toggle();
                    $('.alert-success').show();
                    setTimeout(function(){ window.location.href="{{url('customer')}}"; }, 1500);
                }else{
                    alert('Something is not right!');
                }
            });
        });
        }
    }).render('#paypal-button-container');
</script>
@endpush