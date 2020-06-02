@extends('layouts.master',['title' => 'About Us'])
@section('content')
@include('elements.alert')
@component('layouts.inc.breadcrumb')
  @slot('pageTitle')
 Home
  @endslot
  @slot('page')
      <li class="breadcrumb-item active" aria-current="page">Home</li>
      <li class="breadcrumb-item active" aria-current="page">Contact us</li>
  @endslot
@endcomponent
<!--section start-->
<section class="contact-page section-b-space">
    <div class="container"> 
        <div class="card bg-light">
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-12"> 
                        <h2>Termes and conditon</h3>
                        <p class="mt-3 text-justify font-weight-bold">
                            Introduction :<br><br>

                            These terms and conditions govern your use of this website; by using this website, you accept these terms and conditions in full.   If you disagree with these terms and conditions or any part of these terms and conditions, you must not use this website.<br><br> 
                            
                            
                            License to use website :<br><br>
                            
                            Unless otherwise stated, Sales Guru Publishing (Pty) Ltd and/or its licensors own the intellectual property rights in the website and material on the website.  Subject to the license below, all these intellectual property rights are reserved.
                            
                            You may view, download for caching purposes only, and print pages from the website for your own personal use, subject to the restrictions set out below and elsewhere in these terms and conditions.<br><br>  
                            
                            You must not :<br><br>
                            
                            republish material from this website (including republication on another website);
                            sell, rent or sub-license material from the website;
                            show any material from the website in public;
                            reproduce, duplicate, copy or otherwise exploit material on this website for a commercial purpose;
                            edit or otherwise modify any material on the website; or
                            redistribute material from this website except for content specifically and expressly made available for redistribution.<br><br>
                            
                            Acceptable use :<br><br>
                            
                            You must not use this website in any way that causes, or may cause, damage to the website or impairment of the availability or accessibility of the website; or in any way which is unlawful, illegal, fraudulent or harmful, or in connection with any unlawful, illegal, fraudulent or harmful purpose or activity.
                            
                            You must not use this website to copy, store, host, transmit, send, use, publish or distribute any material which consists of (or is linked to) any spyware, computer virus, Trojan horse, worm, keystroke logger, rootkit or other malicious computer software.
                            
                            You must not conduct any systematic or automated data collection activities (including without limitation scraping, data mining, data extraction and data harvesting) on or in relation to this website without Sales Guru Publishing’s express written consent.
                            
                            You must not use this website to transmit or send unsolicited commercial communications.
                            
                            You must not use this website for any purposes related to marketing without Sales Guru Publishing’s   express written consent.<br><br>
                            
                            Restricted access :<br><br>
                            
                           AndBaazar Ltd reserves the right to restrict access to areas of this website, or indeed this entire website, at Sales Guru Publishing’s discretion.
                            
                            If AndBaazar Ltd Ltd provides you with a user ID and password to enable you to access restricted areas of this website or other content or services, you must ensure that the user ID and password are kept confidential.  
                            
                            AndBaazar Ltd may disable your user ID and password at AndBaazar Ltd sole discretion without notice or explanation.<br><br>
                        </p>    
                    </div>
                </div>
            </div>
          </div>
        </div>
    </div>
</section>
<!--Section ends-->
@endsection  
