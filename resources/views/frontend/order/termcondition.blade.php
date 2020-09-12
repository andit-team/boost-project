@extends('layouts.boostmaster')
@section('content')
@push('css')
<style>
    .login-area{
        padding-top: 150px!important;
        padding-left:50px!important;
        padding-right:50px!important;
    }
    .textc{
        color: black;
    }
    .uul{
        margin: 40px;
    }
    .uul li {
        list-style-type: circle;
    }
</style>
@endpush
@include('layouts.inc.header.productHeader',['login_header'=>'header-login'])
 <!-- section  Form-->
 <section class="login-area">
    <div class="content-inner">
        <h2 class="text-center mt-4">Boost ESSENTIALS LTD – TERMS &amp; CONDITIONS</h2>
        <hr />
        <br><h3>1. Information about us</h3>
        <br>
        <p>
            This website is owned and operated by Briton Group Limited trading as ‘britongroup@britongorup.co.uk’. We are a company registered in Essex. Address for correspondence is 3 Ripple Road,IG11 7ND, Barking, Essex.
        </p>
        <br><h3>2. The contract between us</h3>
        <br>
        <p>
            After placing an initial order via our website, you will receive an email acknowledging that we have received your order. Completing the sign-up process represents your offer to purchase goods from us, which is accepted by us
            when we send you an email to confirm the order. Our acceptance of your order brings into existence a legally binding contract between us. The contract relates only to the products that we have confirmed in the order
            confirmation.
        </p>
        <p>
            Subscription to our service consists of an initial charge, followed by a recurring charge on a regular basis, currently once every three, four or five weeks as agreed to by you upon signing up to our services. The charges are
            detailed on our website and we reserve the right to vary these charges on giving notice to you. By entering into this agreement, you acknowledge that your subscription has an initial and a recurring payment feature and you
            accept responsibility for all recurring charges prior to cancellation. You may change the timing and composition of future deliveries in the ‘your account’ section of the website.
        </p>
        <p>
            By subscribing to our service you are agreeing to pay recurring charges for a continuing period until such time as our contract with you is cancelled by you or by us. You can cancel at any time (after your first order has been
            sent &amp; received) and will not be charged for cancellation. If you cancel before the first order has been sent, we reserve the right to cancel your order and provide a refund of the payment. Where you choose to cancel the
            contract and your order has been dispatched but not yet received, we reserve the right to charge for any dispatched delivery. You can re-subscribe at any time following cancellation.
        </p>
        <p>
            To cancel your subscription you must log-in to your account section of the website, or alternatively email <a href="mailto:britongroup@britongorup.co.uk" target="_blank" rel="noopener noreferrer">britongroup@britongorup.co.uk</a> to request cancellation.
        </p>
        <p>
            You may choose to delay or skip orders or alter the content of your next delivery whereby we will either amend the payment amount for any additional orders or additional payments due to us on orders places for that particular
            order or if you are taking a break will not take payments for the period as specified by you, after which period we will continue to take payments as set out above. Any such changes must be made a minimum of nine days before the
            expected delivery date of the order in question.
        </p>
        <p>We reserve the right cancel or not to renew your subscription at any time without giving any reasons for our decision. We also reserve the right not to authorise a re-subscription.</p>
        <br><h3>3. Availability &amp; Delivery</h3>
        <br>
        <p>All orders are subject to acceptance and availability. If a specific item relating to your order or part of your order is out of stock, we will contact you by email to advise amended delivery date(s).</p>
        <p>An estimated dispatch date will be stated in your order confirmation email. This can be subject to change based on stock levels, your delivery address and when you placed your order.</p>
        <p>We only deliver orders within the UK, including Northern Ireland. Please note that deliveries to the Scottish Highlands and Islands may be subject to additional delivery costs.</p>
        <p>
            You must notify us of a change of address via email or by updating the relevant area of your account with giving at least 9 days’ notice prior to the dispatch of your next order. We are not liable to replace or refund any orders
            that have been delivered to the wrong address where you have failed to notify us as outlined above.
        </p>
        <br><h3>4. Price and Payment</h3>
        <br>
        <p>The prices payable for goods that you order are as set out in our website. All prices are inclusive of VAT at the current rates and are correct at the time of entering information.</p>
        <p>Product prices are liable to change at any time, but changes will not affect orders in respect of which we have already sent you a dispatch confirmation.</p>
        <p>Payment for subscription products are processed by our trusted third party provider Stripe.</p>
        <p>On-going subscription payments will then be taken on the payment dates set out in the dispatch confirmation email, and also displayed in ‘your account’ section of the website.</p>
        <p>
            Boost does not hold payment card information; this is held with our authorised 3rd party provider, Stripe. Upon cancellation of regular deliveries, if regular deliveries are not re-activated within a period of 90 days, we will
            request that the relevant third party deletes the relevant payment information and/or removes TAKK’s ability to charge the payment card.
        </p>
        <br><h3>5. Risk and ownership</h3>
        <br>
        <p>
            Risk of damage to or loss of the goods passes to you at the time of delivery to you, or if you fail to take delivery at the agreed time, the time when we tried to deliver. You will only own the goods once they have been
            successfully delivered and when we have received cleared payment in full. Goods supplied are not for resale.
        </p>
        <p>By entering into this agreement, you acknowledge that all of our products supplied to you are for external use only.</p>
        <br><h3>6. Refunds Policy</h3>
        <br>
        <p>If your order or any part of it is missing or damaged or the box did not arrive, we will offer a full refund as long as it can be shown the box product you were charged for was not provided as it should have been.</p>
        <p>
            Customers can request a refund within 90 days of purchase by returning the unopened product to us in its original condition; customers are liable for return postage and the risk of damage to or loss of the goods until received
            by Boost.
        </p>
        <br><h3>7. Cancellation by us</h3>
        <br>
        <p>We reserve the right to cancel the contract between us if:</p>
        <ul class="uul">
            <li>we have insufficient stock to deliver the goods you have ordered;</li>
            <li>we do not or no longer are able to deliver to your area;</li>
            <li>one or more of the goods you ordered was listed at an incorrect price due to an error in the pricing information offered or received by us from our suppliers;</li>
            <li>or we consider you in breach of our terms and conditions;</li>
        </ul>
        <p>If we do cancel your contract we will notify you by e-mail and will refund charges for any outstanding orders as soon as possible but in any event within 30 days of your order.</p>
        <br><h3>8. Liability</h3>
        <br>
        <p>
            If you do not receive goods ordered within 30 days of the date on which you ordered them, we will have no liability to you unless you notify us in writing at our contact address of the problem within 60 days of the date on which
            you ordered the goods. If you notify a problem to us under this condition, our only obligation will be:
        </p>
        <ul class="uul">
            <li>to make good any shortage or non-delivery; or</li>
            <li>to replace or repair any goods that are damaged or defective;</li>
            <li>or to refund to you the amount paid by you for the goods in question by way of refund to the card used for payment</li>
        </ul>
        <p>
            You must observe and comply with all applicable regulations and legislation, including obtaining all necessary customs, import or other permits to purchase goods from our site. The importation or exportation of certain of our
            goods to you may be prohibited by certain national laws. We make no representation and accept no liability in respect of the export or import of the goods you purchase. Where national law prevents the delivery of any order to
            you, you will remain liable for payment in respect of any order dispatched to you.
        </p>
        <p>
            Notwithstanding the foregoing, nothing in these terms and conditions is intended to limit any rights you might have as a consumer under applicable local law or other statutory rights that may not be excluded nor in any way to
            exclude or limit our liability to you for any death or personal injury resulting from our negligence.
        </p>
        <br><h3>9. Notices</h3>
        <br>
        <p>
            Unless otherwise expressly stated in these terms and conditions, all notices from you to us must either be sent via email to <a href="mailto:britongroup@britongorup.co.uk" target="_blank" rel="noopener noreferrer">britongroup@britongorup.co.uk</a> or in writing and sent to our contact address at
            3 Ripple Road,IG11 7ND, Barking, Essex and all notices from us to you will be displayed on our website from time to time.
        </p>
        <br><h3>10. Changes to legal notices</h3>
        <br>
        <p>We reserve the right to change these terms and conditions from time to time and you should look through them as often as possible.</p>
        <br><h3>11. Law, jurisdiction and language</h3>
        <br>
        <p>By using our website, services or placing any order with us you agree to be bound by these terms and conditions.</p>
        <p>
            Your relationship with us, this website, any content contained therein and any contract between us are governed by and construed in accordance with English law and subject to the exclusive jurisdiction of the courts of England
            and Wales. All contracts are concluded in English.
        </p>
        <br><h3>12. Invalidity</h3>
        <br>
        <p>If any part of these terms and conditions is unenforceable (including any provision in which we exclude our liability to you) the enforceability of any other part of these conditions will not be affected.</p>
        <br><h3>13. Privacy</h3>
        <br>
        <p>You acknowledge and agree to be bound by the terms of our Privacy Policy.</p>
        <br><h3>14. Third party rights</h3>
        <br>
        <p>Nothing in this Agreement is intended to, nor shall it confer any rights on a third party.</p>
        <br><h3>15. Ownership of rights</h3>
        <br>
        <p>
            All rights, including copyright, in this website are owned by or licensed to Briton Group Limited. (trading as britongroup@britongorup.co.uk). Any use of this website or its contents, including copying or storing it or them in whole or part,
            other than for your own personal, non-commercial use, is prohibited without our permission. You may not modify, distribute or repost anything on this website for any purpose.
        </p>
        <p>Last updated: 09 Sep 2020</p>
    </div>
</section>

   <!-- section  Form-->
@include('layouts.inc.footer.productFooter')
@endsection 