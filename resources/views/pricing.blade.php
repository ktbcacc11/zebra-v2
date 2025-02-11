@include('layouts.dashboard-header')

<div class="container-fluid">
    <div class="main-wrapper">
        <div>
            <h2 class="page-title">Pricing Package</h2>
            <p class="page-description">Overview of all pricing packages </p>
        </div>

        <div class="d-lg-flex d-block mt-3 justify-content-evenly gap-3 pricing-new">

            {{-- card 1 --}}
            <div class="card mb-3 pricing-card" style="height: 400px">
                <div class="card-body d-flex flex-column">
                    <div class="row flex-grow-1">
                        <div>
                            <h5 class="text-center pricing-title">One time Payment</h5>
                            <p class="text-center pricing-title-description">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.
                            </p>
            
                            <div>
                                <h1 class="text-center price-plan">$FREE</h1>
                            </div>
                            <div class="text-center">
                                <div>
                                    <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" height="12" width="12" viewBox="0 0 512 512">
                                            <path fill="#f1935d" d="M256 48a208 208 0 1 1 0 416 208 208 0 1 1 0-416zm0 464A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM369 209c9.4-9.4 9.4-24.6 0-33.9s-24.6-9.4-33.9 0l-111 111-47-47c-9.4-9.4-24.6-9.4-33.9 0s-9.4 24.6 0 33.9l64 64c9.4 9.4 24.6 9.4 33.9 0L369 209z"/>
                                        </svg>
                                    </span>
                                    <span class="pricing-text">
                                        Lorem ipsum dolor sit amet, consectetur
                                    </span>
                                </div>
            
                                <div>
                                    <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" height="12" width="12" viewBox="0 0 512 512">
                                            <path fill="#f1935d" d="M256 48a208 208 0 1 1 0 416 208 208 0 1 1 0-416zm0 464A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM369 209c9.4-9.4 9.4-24.6 0-33.9s-24.6-9.4-33.9 0l-111 111-47-47c-9.4-9.4-24.6-9.4-33.9 0s-9.4 24.6 0 33.9l64 64c9.4 9.4 24.6 9.4 33.9 0L369 209z"/>
                                        </svg>
                                    </span>
                                    <span class="pricing-text">
                                        Lorem ipsum dolor sit amet, consectetur
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
            
                   
                    <div class="d-flex flex-column justify-content-end align-items-center" style="height: 100%;">
                        <button class="plan-select-button">Select Plan</button>
                    </div>
                </div>
            </div>
            


            {{-- card 2 --}}
            <div class="card mb-3 pricing-card" style="height: 400px">
                <div class="card-body d-flex flex-column">
                    <div class="row flex-grow-1">
                        <div>
                            <h5 class="text-center pricing-title">One time Payment</h5>
                            <p class="text-center pricing-title-description">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.
                            </p>
            
                            <div >
                                <h1 class="text-center price-plan">$200</h1>
                            </div>
                            <div class="text-center">
                                <div>
                                    <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" height="12" width="12" viewBox="0 0 512 512">
                                            <path fill="#f1935d" d="M256 48a208 208 0 1 1 0 416 208 208 0 1 1 0-416zm0 464A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM369 209c9.4-9.4 9.4-24.6 0-33.9s-24.6-9.4-33.9 0l-111 111-47-47c-9.4-9.4-24.6-9.4-33.9 0s-9.4 24.6 0 33.9l64 64c9.4 9.4 24.6 9.4 33.9 0L369 209z"/>
                                        </svg>
                                    </span>
                                    <span class="pricing-text">
                                        Lorem ipsum dolor sit amet, consectetur
                                    </span>
                                </div>
            
                                <div>
                                    <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" height="12" width="12" viewBox="0 0 512 512">
                                            <path fill="#f1935d" d="M256 48a208 208 0 1 1 0 416 208 208 0 1 1 0-416zm0 464A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM369 209c9.4-9.4 9.4-24.6 0-33.9s-24.6-9.4-33.9 0l-111 111-47-47c-9.4-9.4-24.6-9.4-33.9 0s-9.4 24.6 0 33.9l64 64c9.4 9.4 24.6 9.4 33.9 0L369 209z"/>
                                        </svg>
                                    </span>
                                    <span class="pricing-text">
                                        Lorem ipsum dolor sit amet, consectetur
                                    </span>
                                </div>

                                <div>
                                    <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" height="12" width="12" viewBox="0 0 512 512">
                                            <path fill="#f1935d" d="M256 48a208 208 0 1 1 0 416 208 208 0 1 1 0-416zm0 464A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM369 209c9.4-9.4 9.4-24.6 0-33.9s-24.6-9.4-33.9 0l-111 111-47-47c-9.4-9.4-24.6-9.4-33.9 0s-9.4 24.6 0 33.9l64 64c9.4 9.4 24.6 9.4 33.9 0L369 209z"/>
                                        </svg>
                                    </span>
                                    <span class="pricing-text">
                                        Lorem ipsum dolor sit amet, consectetur
                                    </span>
                                </div>

                                <div>
                                    <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" height="12" width="12" viewBox="0 0 512 512">
                                            <path fill="#f1935d" d="M256 48a208 208 0 1 1 0 416 208 208 0 1 1 0-416zm0 464A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM369 209c9.4-9.4 9.4-24.6 0-33.9s-24.6-9.4-33.9 0l-111 111-47-47c-9.4-9.4-24.6-9.4-33.9 0s-9.4 24.6 0 33.9l64 64c9.4 9.4 24.6 9.4 33.9 0L369 209z"/>
                                        </svg>
                                    </span>
                                    <span class="pricing-text">
                                        Lorem ipsum dolor sit amet, consectetur
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
            
                   
                    <div class="d-flex flex-column justify-content-end align-items-center" style="height: 100%;">
                        <button class="plan-select-button">Select Plan</button>
                    </div>
                </div>
            </div>


            {{-- card 3 --}}
            <div class="card mb-3 pricing-card" style="height: 400px">
                <div class="card-body d-flex flex-column">
                    <div class="row flex-grow-1">
                        <div>
                            <h5 class="text-center pricing-title">One time Payment</h5>
                            <p class="text-center pricing-title-description">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.
                            </p>
            
                            <div >
                                <h1 class="text-center price-plan">$300</h1>
                            </div>
                            <div class="text-center">
                                <div>
                                    <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" height="12" width="12" viewBox="0 0 512 512">
                                            <path fill="#f1935d" d="M256 48a208 208 0 1 1 0 416 208 208 0 1 1 0-416zm0 464A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM369 209c9.4-9.4 9.4-24.6 0-33.9s-24.6-9.4-33.9 0l-111 111-47-47c-9.4-9.4-24.6-9.4-33.9 0s-9.4 24.6 0 33.9l64 64c9.4 9.4 24.6 9.4 33.9 0L369 209z"/>
                                        </svg>
                                    </span>
                                    <span class="pricing-text">
                                        Lorem ipsum dolor sit amet, consectetur
                                    </span>
                                </div>
            
                                <div>
                                    <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" height="12" width="12" viewBox="0 0 512 512">
                                            <path fill="#f1935d" d="M256 48a208 208 0 1 1 0 416 208 208 0 1 1 0-416zm0 464A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM369 209c9.4-9.4 9.4-24.6 0-33.9s-24.6-9.4-33.9 0l-111 111-47-47c-9.4-9.4-24.6-9.4-33.9 0s-9.4 24.6 0 33.9l64 64c9.4 9.4 24.6 9.4 33.9 0L369 209z"/>
                                        </svg>
                                    </span>
                                    <span class="pricing-text">
                                        Lorem ipsum dolor sit amet, consectetur
                                    </span>
                                </div>

                                <div>
                                    <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" height="12" width="12" viewBox="0 0 512 512">
                                            <path fill="#f1935d" d="M256 48a208 208 0 1 1 0 416 208 208 0 1 1 0-416zm0 464A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM369 209c9.4-9.4 9.4-24.6 0-33.9s-24.6-9.4-33.9 0l-111 111-47-47c-9.4-9.4-24.6-9.4-33.9 0s-9.4 24.6 0 33.9l64 64c9.4 9.4 24.6 9.4 33.9 0L369 209z"/>
                                        </svg>
                                    </span>
                                    <span class="pricing-text">
                                        Lorem ipsum dolor sit amet, consectetur
                                    </span>
                                </div>

                                <div>
                                    <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" height="12" width="12" viewBox="0 0 512 512">
                                            <path fill="#f1935d" d="M256 48a208 208 0 1 1 0 416 208 208 0 1 1 0-416zm0 464A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM369 209c9.4-9.4 9.4-24.6 0-33.9s-24.6-9.4-33.9 0l-111 111-47-47c-9.4-9.4-24.6-9.4-33.9 0s-9.4 24.6 0 33.9l64 64c9.4 9.4 24.6 9.4 33.9 0L369 209z"/>
                                        </svg>
                                    </span>
                                    <span class="pricing-text">
                                        Lorem ipsum dolor sit amet, consectetur
                                    </span>
                                </div>

                                <div>
                                    <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" height="12" width="12" viewBox="0 0 512 512">
                                            <path fill="#f1935d" d="M256 48a208 208 0 1 1 0 416 208 208 0 1 1 0-416zm0 464A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM369 209c9.4-9.4 9.4-24.6 0-33.9s-24.6-9.4-33.9 0l-111 111-47-47c-9.4-9.4-24.6-9.4-33.9 0s-9.4 24.6 0 33.9l64 64c9.4 9.4 24.6 9.4 33.9 0L369 209z"/>
                                        </svg>
                                    </span>
                                    <span class="pricing-text">
                                        Lorem ipsum dolor sit amet, consectetur
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
            
                   
                    <div class="d-flex flex-column justify-content-end align-items-center" style="height: 100%;">
                        <button class="plan-select-button">Select Plan</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@include('layouts.dashboard-footer')