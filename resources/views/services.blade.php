@extends('layouts.app')
@section('title', 'Our Services')

@section('content')
<div class="container py-5">
    <div class="text-center mb-5">
        <h1 class="display-5 fw-bold text-dark">Our Packages</h1>
        <p class="lead text-muted">Choose the perfect photobooth package for your special moment</p>
    </div>
    
    <div class="row g-4 justify-content-center">
        @foreach($packages as $package)
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 {{ $package['name'] === 'Premium Joy' ? 'border-warning shadow border-2' : 'border-0 shadow-sm' }} transition-transform">
                    
                    <div class="card-header {{ $package['name'] === 'Premium Joy' ? 'bg-warning text-dark' : ($package['name'] === 'Wedding VIP' ? 'bg-dark text-warning' : 'bg-secondary text-white') }} text-center py-3 position-relative">
                        
                        @if($package['name'] === 'Premium Joy')
                            <span class="position-absolute top-0 start-50 translate-middle badge rounded-pill bg-dark text-warning border border-warning px-3 py-2 shadow-sm">Most Popular</span>
                        @endif
                        
                        <h4 class="my-0 @if($package['name'] === 'Premium Joy') fw-bold mt-2 @else fw-normal @endif">{{ $package['name'] }}</h4>
                    </div>

                    <div class="card-body bg-white text-center d-flex flex-column">
                        <h1 class="card-title pricing-card-title h3">
                            {{ $package['price'] }}<small class="text-muted fw-light">/{{ $package['duration'] }}</small>
                        </h1>
                        
                        <ul class="list-unstyled mt-3 mb-4 text-start">
                            @foreach($package['features'] as $feature)
                                <li class="py-2 border-bottom @if($package['name'] === 'Premium Joy') text-dark fw-medium @else text-muted @endif">
                                    ✔️ {{ $feature }}
                                </li>
                            @endforeach
                        </ul>

                        <button type="button" class="w-100 btn btn-lg {{ $package['btn_class'] }} mt-auto shadow-sm">
                            Choose {{ explode(' ', $package['name'])[0] }}
                        </button>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection