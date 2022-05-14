@extends('layouts.main')

@section('content')
<main>
    <div class="container">
        <section class="page-header">
            <h2>Amazing Features</h2>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb foi-breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">About</li>
                </ol>
            </nav>
        </section>
        <section class="foi-page-section">
            <div class="row mb-5">
                <div class="col-md-4 foi-feature">
                    <img src="assets/images/icon_1.png" alt="icon" class="feature-icon">
                    <h5 class="feature-title">Online Payment</h5>
                    <p class="feature-content">Lorem ipsum dolor sit amt, consectet adop adipisicing elit, sed do eiusmod teporara incididunt ugt labore.</p>
                    <a href="#!" class="feature-link">Find out More</a>
                </div>
                <div class="col-md-4 foi-feature">
                    <img src="assets/images/icon_2.png" alt="icon" class="feature-icon">
                    <h5 class="feature-title">Online Payment</h5>
                    <p class="feature-content">Lorem ipsum dolor sit amt, consectet adop adipisicing elit, sed do eiusmod teporara incididunt ugt labore.</p>
                    <a href="#!" class="feature-link">Find out More</a>
                </div>
                <div class="col-md-4 foi-feature">
                    <img src="assets/images/icon_3.png" alt="icon" class="feature-icon">
                    <h5 class="feature-title">Online Payment</h5>
                    <p class="feature-content">Lorem ipsum dolor sit amt, consectet adop adipisicing elit, sed do eiusmod teporara incididunt ugt labore.</p>
                    <a href="#!" class="feature-link">Find out More</a>
                </div>
            </div>
            <div class="row pt-5">
                <div class="col-md-4 foi-feature">
                    <h5 class="feature-title">Secure Data</h5>
                    <p class="feature-content">Lorem ipsum dolor sit amt, consectet adop adipisicing elit, sed do eiusmod teporara incididunt ugt labore.</p>
                    <a href="#!" class="feature-link">Find out More</a>
                </div>
                <div class="col-md-4 foi-feature">
                    <h5 class="feature-title">Live Chat</h5>
                    <p class="feature-content">Lorem ipsum dolor sit amt, consectet adop adipisicing elit, sed do eiusmod teporara incididunt ugt labore.</p>
                    <a href="#!" class="feature-link">Find out More</a>
                </div>
                <div class="col-md-4 foi-feature">
                    <h5 class="feature-title">Equilizer Support</h5>
                    <p class="feature-content">Lorem ipsum dolor sit amt, consectet adop adipisicing elit, sed do eiusmod teporara incididunt ugt labore.</p>
                    <a href="#!" class="feature-link">Find out More</a>
                </div>
                <div class="col-md-4 foi-feature">
                    <h5 class="feature-title">Fully functional</h5>
                    <p class="feature-content">Lorem ipsum dolor sit amt, consectet adop adipisicing elit, sed do eiusmod teporara incididunt ugt labore.</p>
                    <a href="#!" class="feature-link">Find out More</a>
                </div>
                <div class="col-md-4 foi-feature">
                    <h5 class="feature-title">Powerful dashboard</h5>
                    <p class="feature-content">Lorem ipsum dolor sit amt, consectet adop adipisicing elit, sed do eiusmod teporara incididunt ugt labore.</p>
                    <a href="#!" class="feature-link">Find out More</a>
                </div>
                <div class="col-md-4 foi-feature">
                    <h5 class="feature-title">Unlimited Features</h5>
                    <p class="feature-content">Lorem ipsum dolor sit amt, consectet adop adipisicing elit, sed do eiusmod teporara incididunt ugt labore.</p>
                    <a href="#!" class="feature-link">Find out More</a>
                </div>
            </div>
        </section>
        <section class="foi-page-section">
            <div class="row">
                <div class="col-md-6 mb-5 mb-md-0">
                    <img src="assets/images/img_3.png" alt="faq" class="img-fluid" width="424px">
                </div>
                <div class="col-md-6">
                    <h2 class="feature-faq-title">Awesome Interface</h2>
                    <div class="card feature-faq-card">
                        <div class="card-header bg-white" id="featureFaqOneTitle">
                            <a href="#featureFaqOneCollapse" class="d-flex align-items-center" data-toggle="collapse">
                                <h5 class="mb-0">How can I get a refund?</h5> <i class="far fa-plus-square ml-auto"></i>
                            </a>
                        </div>
                        <div id="featureFaqOneCollapse" class="collapse" aria-labelledby="featureFaqOneTitle">
                            <div class="card-body">
                                <p class="mb-0 text-gray">Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                            </div>
                        </div>
                    </div>
                    <div class="card feature-faq-card">
                        <div class="card-header bg-white" id="featureFaqTwoTitle">
                            <a href="#featureFaqTwoCollapse" class="d-flex align-items-center" data-toggle="collapse">
                                <h5 class="mb-0">Which license should I need?</h5> <i class="far fa-plus-square ml-auto"></i>
                            </a>
                        </div>
                        <div id="featureFaqTwoCollapse" class="collapse" aria-labelledby="featureFaqTwoTitle">
                            <div class="card-body">
                                <p class="mb-0 text-gray">Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                            </div>
                        </div>
                    </div>
                    <div class="card feature-faq-card">
                        <div class="card-header bg-white" id="featureFaqThreeTitle">
                            <a href="#featureFaqThreeCollapse" class="d-flex align-items-center" data-toggle="collapse">
                                <h5 class="mb-0">How do I get a receipt for my purchase?</h5> <i class="far fa-plus-square ml-auto"></i>
                            </a>
                        </div>
                        <div id="featureFaqThreeCollapse" class="collapse" aria-labelledby="featureFaqThreeTitle">
                            <div class="card-body">
                                <p class="mb-0 text-gray">Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                            </div>
                        </div>
                    </div>
                    <div class="card feature-faq-card">
                        <div class="card-header bg-white" id="featureFaqFourTitle">
                            <a href="#featureFaqFourCollapse" class="d-flex align-items-center" data-toggle="collapse">
                                <h5 class="mb-0">How do I report an issue?</h5> <i class="far fa-plus-square ml-auto"></i>
                            </a>
                        </div>
                        <div id="featureFaqFourCollapse" class="collapse" aria-labelledby="featureFaqFourTitle">
                            <div class="card-body">
                                <p class="mb-0 text-gray">Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</main>
@endsection