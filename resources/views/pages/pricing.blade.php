@extends('layouts.app')

@section('hero-title', 'Contentli CMS')
@section('hero-subtitle' ,'Pricing')

@section('content')

<h1 class="title">Prices and plans</h1>

<hr>

<div class="pricing-table is-comparative">
    <div class="pricing-plan is-features">
        <div class="plan-header">Features</div>
        <div class="plan-price"><span class="plan-price-amount">&nbsp;</span></div>
        <div class="plan-items">
            <div class="plan-item">Storage</div>
            <div class="plan-item">Domains</div>
            <div class="plan-item">Bandwidth</div>
            <div class="plan-item">Content Types</div>
        </div>
        <div class="plan-footer">

        </div>
    </div>
    <div class="pricing-plan">
        <div class="plan-header">Personal</div>
        <div class="plan-price"><span class="plan-price-amount"><span class="plan-price-currency">$</span>39</span>/month</div>
        <div class="plan-items">
            <div class="plan-item" data-feature="Storage">5GB</div>
            <div class="plan-item" data-feature="Domains">1</div>
            <div class="plan-item" data-feature="Bandwidth">-</div>
            <div class="plan-item" data-feature="Content Types">2</div>
        </div>
        <div class="plan-footer">
            <button class="button is-fullwidth">Choose</button>
        </div>
    </div>

    <div class="pricing-plan is-active">
        <div class="plan-header">Professional</div>
        <div class="plan-price"><span class="plan-price-amount"><span class="plan-price-currency">$</span>199</span>/month</div>
        <div class="plan-items">
            <div class="plan-item" data-feature="Storage">20GB</div>
            <div class="plan-item" data-feature="Domains">1</div>
            <div class="plan-item" data-feature="Bandwidth">1TB</div>
            <div class="plan-item" data-feature="Content Types">10</div>
        </div>
        <div class="plan-footer">
            <button class="button is-fullwidth">Choose</button>
        </div>
    </div>

    <div class="pricing-plan">
        <div class="plan-header">E-commerce</div>
        <div class="plan-price"><span class="plan-price-amount"><span class="plan-price-currency">$</span>399</span>/month</div>
        <div class="plan-items">
            <div class="plan-item" data-feature="Storage">200GB</div>
            <div class="plan-item" data-feature="Domains">1</div>
            <div class="plan-item" data-feature="Bandwidth">1TB</div>
            <div class="plan-item" data-feature="Content Types">15</div>
        </div>
        <div class="plan-footer">
            <button class="button is-fullwidth">Choose</button>
        </div>
    </div>

    <div class="pricing-plan is-danger">
        <div class="plan-header">Enterprise</div>
        <div class="plan-price"><span class="plan-price-amount"><span class="plan-price-currency">$</span>499+</span>/month</div>
        <div class="plan-items">
            <div class="plan-item" data-feature="Storage">Unlimited</div>
            <div class="plan-item" data-feature="Domains">Unlimited</div>
            <div class="plan-item" data-feature="Bandwidth">Unlimited</div>
            <div class="plan-item" data-feature="Content Types">Unlimited</div>
        </div>
        <div class="plan-footer">
            <button class="button is-fullwidth">Choose</button>
        </div>
    </div>
</div>


@endsection

